@extends('layouts.app')

@section('content')

  <div class="page">

        
        <div class="page-header page-header-bordered page-header-tabs">
          {{--  alert starts here  --}}
          @if(Session::has('success'))
            <div class="alert alert-icon alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <i class="icon wb-bell" aria-hidden="true"></i> You have done
                5 actions.
                <p class="mt-15">
                  <button class="btn btn-danger" type="button">Do this</button>
                  <button class="btn btn-link blue-grey-500" type="button">Or this</button>
                </p>
            </div>
          @endif
          {{--  end alert  --}}
          <h1 class="page-title">Shop</h1>
          
    
          <ul class="nav nav-tabs nav-tabs-line" role="tablist" id="exampleFilter">
            <li class="nav-item" role="presentation">
              <a class="active nav-link" href="#" aria-controls="exampleList" aria-expanded="true"
                role="tab" data-filter="*">All</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" href="#" aria-expanded="false" role="tab" data-filter="object">Object</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" href="#" aria-expanded="false" role="tab" data-filter="city">City</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" href="#" aria-expanded="false" role="tab" data-filter="animal">Animal</a>
            </li>
          </ul>
        </div>
    
        <div class="page-content">
          <ul class="blocks blocks-100 blocks-xxl-4 blocks-lg-3 blocks-md-2" data-plugin="filterable"
            data-filters="#exampleFilter">
            @foreach($products as $product)

            <li data-type="animal">
              <div class="card card-shadow">
                <figure class="card-img-top overlay-hover overlay">
                  <img class="overlay-figure overlay-scale" src="{{ $product->thumb }}"
                    alt="...">
                  <figcaption class="overlay-panel overlay-background overlay-fade overlay-icon">
                    <a class="icon wb-search" href="{{ $product->path }}"></a>
                    
                  </figcaption>
                </figure>
                <div class="card-block">
                  <h4 class="card-title">TITLE: {{ $product->title }}</h4>
                  <h4 class="card-title">ARTIST: {{ $product->user->name }}</h4>
                  <h4 class="card-title">PRICE: {{ $product->price }}</h4>
                  <a href="{{ route('product.addToCart', ['id' => $product->id]) }}" class="btn btn-default pull-right" role="button"> Add to Cart</a></p>
                </div>
              </div>
            </li>

            @endforeach
           
            
           
            
          </ul>
        </div>
      </div>
@endsection