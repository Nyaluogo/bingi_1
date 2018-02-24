@extends('layouts.app')

@section('styles')
<link rel="stylesheet" href="{{ asset('global/vendor/plyr/plyr.min599c.css?v4.0.2') }}">
@endsection

@section('content')

<div class="page">
        <div class="page-header page-header-bordered page-header-tabs">
          
          <h1 class="page-title">Explore artists</h1>
          
    
          <ul class="nav nav-tabs nav-tabs-line" role="tablist" id="exampleFilter">
            <li class="nav-item" role="presentation">
              <a class="active nav-link" href="#" aria-controls="exampleList" aria-expanded="true"
                role="tab" data-filter="*">All</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" href="#" aria-expanded="false" role="tab" data-filter="professional">Professionals</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" href="#" aria-expanded="false" role="tab" data-filter="hobbyist">Hobbyists</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" href="#" aria-expanded="false" role="tab" data-filter="student">Students</a>
            </li>
          </ul>
        </div>
    
        <div class="page-content">
          <ul class="blocks blocks-100 blocks-xxl-4 blocks-lg-3 blocks-md-2" data-plugin="filterable"
            data-filters="#exampleFilter">
            @foreach($strangers as $stranger)

            <li data-type="{{$stranger->profile->type_of_artist}}">
              <div class="card card-shadow">
                    
        <div class="col-lg-12 col-lg-12 masonry-item">
                <!-- Widget With Carousel -->
                <div class="card card-shadow">
                  <div class="card-img-top cover">
                    <div class="cover-gallery carousel slide" id="exampleCoverGallery" data-ride="carousel">
                      <ol class="carousel-indicators">
                        <li class="active" data-target="#exampleCoverGallery" data-slide-to="0"></li>
                        <li data-target="#exampleCoverGallery" data-slide-to="1"></li>
                        <li data-target="#exampleCoverGallery" data-slide-to="2"></li>
                      </ol>
                      <div class="carousel-inner" role="listbox">
                            <?php $count = 0; ?>
                          @foreach($stranger->posts as $post)
                            <?php if($count == 3) break; ?>
                            @if($count == 0)
                            <div class="carousel-item active">
                            <img alt="First slide" src="{{ $post->thumb }}">
                            </div>
                            @else
                            <div class="carousel-item">
                            <img alt="First slide" src="{{ $post->thumb }}">
                            </div>
                            @endif
                            <?php $count++; ?>
                            
                        @endforeach
                      </div>
                      <!-- Controls -->
                      <a class="carousel-control-prev" href="#exampleCoverGallery" data-slide="prev"
                        role="button">
                        <span class="carousel-control-prev-icon wb-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#exampleCoverGallery" data-slide="next"
                        role="button">
                        <span class="carousel-control-next-icon wb-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                  </div>
                  <div class="card-block">
                    <a href="{{ route('profile',[$stranger->id]) }}" class="avatar avatar-lg">
                        <img class="img-fluid" src="{{ $stranger->avatar }}">
                        <h3 class="card-title">{{ $stranger->name }}</h3>
                    </a>
                    
                    <p class="card-text">
                      @if($stranger->profile->type_of_artist && $stranger->profile->area_of_speciality)
                      <small> {{ $stranger->profile->type_of_artist }} {{ $stranger->profile->area_of_speciality }}</small>
                      @endif
                    </p>
                    <p class="card-text">{{ $stranger->profile->biography }} </p>
                  </div>
                  <div class="card-block clearfix">
                    {{--  @foreach($followings as $following)  --}}
                        @if(!in_array($stranger->id,$followers_ids) && !in_array($stranger->id,$following_ids))
                        <a href="{{ route('follow',[$stranger->id]) }}" class="btn btn-outline btn-success">Follow</a>
                        {{--  if the guy is following me but am not following him, display a follow button  --}}
                        @elseif(in_array($stranger->id,$followers_ids) && !in_array($stranger->id,$following_ids))
                        <a href="{{ route('follow',[$stranger->id]) }}" class="btn btn-outline btn-success">Follow</a>
                        {{--  if am following the guy but he is not following me, display an unfollow button  --}}
                        @elseif(in_array($stranger->id,$following_ids) && !in_array($stranger->id,$followers_ids))
                        <a href="{{ route('unfollow',[$stranger->id]) }}" class="btn btn-outline btn-success">Unfollow</a>
                        {{--  if we are both following each other, display unfollow button  --}}
                         @elseif(in_array($stranger->id,$following_ids) && in_array($stranger->id,$followers_ids))
                        <a href="{{ route('unfollow',[$stranger->id]) }}" class="btn btn-outline btn-success">Unfollow</a>
                        @endif
                    {{--  @endforeach  --}}
                  </div>
                </div>
                <!-- End Widget With Carousel -->
              </div>
      
              </div>
            </li>

            @endforeach
           
            
           
            
          </ul>
        </div>
      </div>
@endsection

@section('scripts')
<script src="{{ asset('global/js/Plugin/masonry.min599c.js?v4.0.2') }}"></script>
<script src="{{ asset('global/js/Plugin/plyr.min599c.js?v4.0.2') }}"></script>
<script src="{{ asset('global/vendor/plyr/plyr599c.js?v4.0.2') }}"></script>
<script src="{{ asset('global/vendor/imagesloaded/imagesloaded.pkgd.min599c.js?v4.0.2') }}"></script>
<script src="{{ asset('global/js/Plugin/plyr.min599c.js?v4.0.2') }}"></script>
@endsection
