<?php

namespace Nyabingi\Http\Controllers;

use Session;
use Nyabingi\Post;
use Nyabingi\Order;
use Auth;
use Illuminate\Http\Request;
use Storage;
use Nyabingi\User;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Str;
use Illuminate\Http\File;
use Nyabingi\Cart;
use Stripe\Stripe;
use Stripe\Charge;

class ShopController extends Controller
{
    public function index()
    {
        $products = Post::whereNotNull('price')->get();
        return view('shop.index',['products' => $products]);
    }

    public function getAddtoCart(Request $request, $id)
    {
        $product = Post::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);
        // return redirect()->route('product.index');
        return redirect()->back();
    }

    public function getCart()
    {
        if(!Session::has('cart'))
        {
            return view('shop.shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('shop.shopping-cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function getReduceByOne($id)
    {
      $oldCart = Session::has('cart') ? Session::get('cart') : null;
      $cart = new Cart($oldCart);
      $cart->reduceByOne($id);

      Session::put('cart',$cart);
      return redirect()->route('product.shoppingCart');
    }

    public function getRemoveItem($id)
    {
      $oldCart = Session::has('cart') ? Session::get('cart') : null;
      $cart = new Cart($oldCart);
      $cart->removeItem($id);

      Session::put('cart',$cart);
      return redirect()->route('product.shoppingCart');

    }

    public function getCheckout()
    {
          if(!Session::has('cart'))
        {
            return view('shop.shopping-cart');
        }

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;

        return view('shop.checkout',['total' => $total]);
    }

    public function postCheckout(Request $request)
    {
        if(!Session::has('cart'))
      {
          return redirect()->route('product.shoppingCart');
      }
      $oldCart = Session::get('cart');
      $cart = new Cart($oldCart);

      Stripe::setApiKey('sk_test_MgCdLh2dJcFTzVUprOq5SE53');

    //   dd($request->stripeToken);

      try{
        $charge = Charge::create(array(
          "amount" => $cart->totalPrice * 100,
          "currency" => "usd",
        //   "source" => $request->input('stripeToken'), // obtained with Stripe.js
          "source" => "tok_1BvgZ3KDS6B8awjqk1Kiksn8",
          "description" => "Test Charge",
        ));
        $order = new Order();
        $order->cart = serialize($cart);
        $order->address = $request->input('address');
        $order->name = $request->input('name');
        $order->payment_id = $charge->id;

        Auth::user()->orders()->save($order);

      }catch(\Exception $e){
        return redirect()->route('checkout')->with('error', $e->getMessage());
      }

      Session::forget('cart');
      return redirect()->route('shop.index')->with('success', 'Successfully purchased products');

    }

}
