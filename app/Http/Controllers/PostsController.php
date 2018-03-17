<?php

namespace Nyabingi\Http\Controllers;

use Nyabingi\User;
use Nyabingi\Post;
use Nyabingi\Download;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Http\File;
use InterImage;
use Intervention\Image\ImageManagerStatic as Image;
use Session;
use Nyabingi\Favourite;

class PostsController extends Controller
{

    public function submit_art_page()
    {
        return view('portfolio.submit');
    }

    public function update_art_page($id)
    {
      $artwork = Post::where('id',$id)->first();

      
        return view('portfolio.edit',[
          'artwork' => $artwork,
        ]);
    }

    public function complete_details($id)
    {
      $artwork = Post::where('id',$id)->first();

      
      return view('portfolio.submit2',[
        'artwork' => $artwork,
      ]);
    }

    public function update_shipping_details($id)
    {
      $artwork = Post::where('id',$id)->first();

      
      return view('portfolio.shipping_details',[
        'artwork' => $artwork,
      ]);
    }

    public function update_pricing_details($id)
    {
      $artwork = Post::where('id',$id)->first();

      
      return view('portfolio.pricing_details',[
        'artwork' => $artwork,
      ]);
    }

    public function confirm_upload_details($id)
    {
      $artwork = Post::where('id',$id)->first();

      dd($artwork);
      return view('portfolio.confirm_details',[
        'artwork' => $artwork,
      ]);
    }


    public function store_image(Request $request)
    {
        $this->validate($request, [
            'image_file' => 'required|image|max:25096|mimes:jpeg,png,jpg,gif,svg',
            
        ]);

        
        
        $file = $request->file('image_file');

        // store the image
        $image = Storage::disk('public')->putFile('artwork', $file);

        /*Name of the thumbfile*/
        $thumb = 'artwork/' . Str::random(40) . '.jpeg';

        /*Get the iamge from storage*/
        $stream = Image::make(Storage::disk('public')->get($image))->stream();

        /*Put the stream in storage but use the thumbname*/
        Storage::disk('public')->put($thumb, $stream);

        //get the real image name
        $imageName = basename($image);

        // check if request has title , if not set default title*/
        if($request->title)
        {
            $title = $request->title;
        }else{
            $title = 'untitled';
        }

        if($request->display_options == 1)
        {
          $stream = Image::make(Storage::disk('public')->get($image))->fit(400, 400)->orientate()->stream();
          Storage::disk('public')->put($thumb, $stream);
        }

        if($request->display_options == 2)
        {
          $stream = Image::make(Storage::disk('public')->get($image))->fit(600, 600)->orientate()->stream();
          Storage::disk('public')->put($thumb, $stream);
        }

        if($request->display_options == 3)
        {
          $stream = Image::make(Storage::disk('public')->get($image))->fit(800, 800)->orientate()->stream();
          Storage::disk('public')->put($thumb, $stream);
        }

        if($request->display_options == 4)
        {
          $stream = Image::make(Storage::disk('public')->get($image))->fit(900, 900)->orientate()->stream();
          Storage::disk('public')->put($thumb, $stream);
        }

        if($request->display_options == 5)
        {
          $stream = Image::make(Storage::disk('public')->get($image))->fit(1024, 1024)->orientate()->stream();
          Storage::disk('public')->put($thumb, $stream);
        }

        if($request->display_options == 6)
        {
          $stream = Image::make(Storage::disk('public')->get($image))->fit(1280, 1280)->orientate()->stream();
          Storage::disk('public')->put($thumb, $stream);
        }
        if($request->display_options > 6 || $request->display_options < 0)
        {
          return response()->json([
              'error' => 'File is not valid!'
          ]);
        }

        if($request->watermark_options == 1)
        {
          $watermark =  Image::make(Storage::disk('public')->get('/watermark/Stark_Watermark.png'));
          $stream = Image::make(Storage::disk('public')->get($thumb))->insert($watermark, 'center')->orientate()->stream();
          Storage::disk('public')->put($thumb, $stream);
        }

        if($request->price)
        {
          $commission = 1.2;

          // $price = $request->price * $commision;
        }

        //upload details in the database*/
        $upload = Post::create([
            'user_id' => Auth::id(),
            'path' => $image,
            'thumb' => $thumb,
            'image_name' => $imageName,
            'title' => $title,
            'is_active' => 'false',
            'description' => $request->description,
            'watermark_options' => $request->watermark_options,
            // 'tags' => serialize($request->tags),
            'display_options' => $request->display_options,
            'category' => $request->category,
            'critique_options' => $request->critique_options,
            'sharing_options' => $request->sharing_options,
            'year_of_completion' => $request->year_of_completion,
            'download_options' => $request->download_options,
            'mature_content_type' => $request->mature_options,
            'original_sale_option' => $request->original_sale_option,
            'print_type' => $request->type_of_print,
            'copyright_option' => $request->copyright_option,
        ]);

        

        if($upload)
        {
            Session::flash('success','Image uploaded successfully');
            return redirect()->route('portfolio.submit2',$upload->id);
        }else{
            Session::flash('fail','☹Oops!.. an error occured, please try again');
            return redirect()->back();
        }


    }

    // update arrtwork details
    public function update_artwork(Request $request)
    {
      $artwork = Post::where('id',$request->post_id)->first();

      // get image from storage
      $image = Storage::disk('public')->get('/artwork/' . $artwork->image_name);

      
      /*Name of the thumbfile*/
      $thumb = 'artwork/' . Str::random(40) . '.jpeg';

      $stream =Image::make($image)->stream();

   

        // check if request has title , if not set default title*/
        if($request->title)
        {
            $title = $request->title;
        }else{
            $title = 'untitled';
        }

        if($request->display_options == 1)
        {
          $stream = Image::make($image)->fit(400, 400)->stream();
          Storage::disk('public')->put($thumb, $stream);
        }

        if($request->display_options == 2)
        {
          $stream = Image::make($image)->fit(600, 600)->stream();
          Storage::disk('public')->put($thumb, $stream);
        }

        if($request->display_options == 3)
        {
          $stream = Image::make($image)->fit(800, 800)->stream();
          Storage::disk('public')->put($thumb, $stream);
        }

        if($request->display_options == 4)
        {
          $stream = Image::make($image)->fit(900, 900)->stream();
          Storage::disk('public')->put($thumb, $stream);
        }

        if($request->display_options == 5)
        {
          $stream = Image::make($image)->fit(1024, 1024)->stream();
          Storage::disk('public')->put($thumb, $stream);
        }

        if($request->display_options == 6)
        {
          $stream = Image::make($image)->fit(1280, 1280)->stream();
          Storage::disk('public')->put($thumb, $stream);
        }
        if($request->display_options > 6 || $request->display_options < 0)
        {
          return response()->json([
              'error' => 'Display is not valid!'
          ]);
        }

        // if($request->watermark_check == 1)
        // {
        //   $watermark =  Image::make(Storage::disk('public')->get('watermark/waterdrop.png'));
        //   $stream = Image::make(Storage::disk('public')->get($thumb))->insert($watermark, 'center')->stream();
        //   Storage::disk('public')->put($thumb, $stream);
        // }

        if($request->price)
        {
          $commission = 0.2;
        }

        //upload details in the database*/
        $upload = $artwork->update([
            'user_id' => Auth::id(),
            // 'path' => $image,
            // 'thumb' => $thumb,
            // 'image_name' => $imageName,
            'title' => $title,
            'is_active' => 'false',
            'description' => $request->description,
            'watermark_options' => $request->watermark_options,
            'tags' => serialize($request->tags),
            'display_options' => $request->display_options,
            'category' => $request->category,
            'comment_options' => $request->comment_options,
            'sharing_options' => $request->sharing_options,
            'price' => $request->price,
            'download_options' => $request->download_options,
            'mature_content_type' => $request->mature_options,

        ]);

        if($upload)
        {
            Session::flash('success','Image uploaded successfully');
            return redirect()->back();
        }else{
            Session::flash('fail','☹Oops!.. an error occured, please try again');
            return redirect()->back();
        }

    }

    // submit details from form2
    public function submit_details(Request $request)
    {
      $artwork = Post::find($request->artwork_id);

      //upload details in the database*/
      $upload = $artwork->update([
        'user_id' => Auth::id(),
        
        'medium' => $request->medium,
        'is_active' => 'false',
        'material' => $request->material,
        'width' => $request->width,
        'tags' => serialize($request->tags),
        'length' => $request->length,
        'height' => $request->height,
        'packaging' => $request->packaging,
        'framing_options' => $request->framing_options,
        'multipanel_options' => $request->multipanel_options,
        

    ]);

    if($upload)
    {
        Session::flash('success','update successfully');
        return redirect()->route('portfolio.update.shipping',$artwork->id);
    }else{
        Session::flash('fail','☹Oops!.. an error occured, please try again');
        return redirect()->back();
    }

     
    }

    // submit shipping details
    public function submit_shipping_details(Request $request)
    {
      $artwork = Post::find($request->artwork_id);

      $artist = User::find($artwork->user_id);

      $update_artist_details = $artist->update([
        'first_name' => $request->first_name,
        'last_name' => $request->last_name,
        'phone_number' => $request->phone_number,
        'country' => $request->country,
        'city' => $request->city,
        'address_1' => $request->address_1,
        'address_2' => $request->address_2,
        'region' => $request->region,
        'postal_code' => $request->postal_code,
        
      ]);

      //upload details in the database*/
      $upload = $artwork->update([
        'user_id' => Auth::id(),
        
        'weight' => $request->weight,
        'is_active' => 'false',
       
        

    ]);

    if($upload)
    {
        Session::flash('success','updated successfully');
        return redirect()->route('portfolio.update.pricing',$artwork->id);
    }else{
        Session::flash('fail','☹Oops!.. an error occured, please try again');
        return redirect()->back();
    }
      
    }

    // submit pricing details
    public function submit_pricing_details(Request $request)
    {
      $artwork = Post::find($request->artwork_id);


      //upload details in the database*/
      $upload = $artwork->update([
        
        'print_price' => $request->print_price,
        'is_active' => 'false',
        'price' => $request->price,
        'number_of_prints_for_sale' => $request->number_of_prints_for_sale,
        'print_options' => serialize($request->print_options),
        'type_of_print' => $request->type_of_print,
        

    ]);

    if($upload)
    {
        Session::flash('success','update successfully');
        return redirect()->route('portfolio.confirmation',$artwork->id);
    }else{
        Session::flash('fail','☹Oops!.. an error occured, please try again');
        return redirect()->back();
    }
      
    }

    public function list()
    {
        return Post::all();
    }

    public function artwork($id, Request $request){
        /* Fetch the artwork using the id */
        $image_path = 'public/artwork/'.$id;

        $image = Storage::get($image_path);

        /* Return the file */
        return Image::make($image)->response();

    }

    public function download($id, Request $request){
        $product = Post::find($id);

        //get the image path
        $new_image_path = storage_path() . "/app/public/artwork/" . $product->image_name;

          /*SEt the header but have not imlemented it though.. kinda buggy*/
          $headers = [
            'Content-Type' => 'image/jpeg/jpg',
          ];

          Download::create([
            'user_id' => Auth::id(),
            'post_id' => $product->id,
          ]);

        // download the image;
        return response()->download($new_image_path);

    }

    public function delete($id)
    {
      $post = Post::find($id);
      if(Post::find($id)->delete()){
        return redirect()->back();
      }
    }

    public function filter($id)
    {
      $feed = array();
      //get all related posts
    $tagged = Post::where('tags','LIKE',"%{$id}%")->get();
    foreach($tagged as $post):

      array_push($feed,$post);

    endforeach;
    $categorized = Post::where('category','LIKE',"%{$id}%")->get();
    foreach($categorized as $post):

      array_push($feed,$post);

    endforeach;


    $favourites = Favourite::all();

      return view('home',[
        'feed' => $feed,
        'favourites' => $favourites,
    ]);
    }

    public function search(Request $request)
    {
      $feed = array();
      //get all related posts
      $tagged = Post::where('tags','LIKE',"%{$request->key}%")->get();
      foreach($tagged as $post):

        array_push($feed,$post);

      endforeach;
      $categorized = Post::where('category','LIKE',"%{$request->key}%")->get();
      foreach($categorized as $post):

        array_push($feed,$post);

      endforeach;


      $favourites = Favourite::all();

        return view('home',[
          'feed' => $feed,
          'favourites' => $favourites,
      ]);
    }
    
}
