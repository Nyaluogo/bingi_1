@extends('layouts.app')

@section('styles')
<link rel="stylesheet" href="{{ asset('global/vendor/toolbar/toolbar.min599c.css?v4.0.2') }}">
<link rel="stylesheet" href="{{ asset('global/vendor/webui-popover/webui-popover.min599c.css?v4.0.2') }}">

{{--  comments  --}}
<link rel="stylesheet" href="{{ asset('assets/examples/css/apps/message.min599c.css?v4.0.2') }}">
@endsection

@section('content')
    <!-- Page -->
  <div class="page">
        <div class="page-content container-fluid">
          <div class="row">
            <div class="col-lg-3">
              <!-- Page Widget -->
              <div class="card card-shadow text-center">
                <div class="card-block">
                  <a class="avatar avatar-lg" href="javascript:void(0)">
                    <img src="{{$user->avatar}}" alt="...">
                  </a>
                  <h4 class="profile-user">{{$user->name}}</h4>
                  <p class="profile-job">{{ $profile->type_of_artist }} | {{ $profile->area_of_speciality }}</p>
                  <p>{{ $profile->biography }}.</p>
                  {{--  <div class="profile-social">
                    <a class="icon bd-twitter" href="javascript:void(0)"></a>
                    <a class="icon bd-facebook" href="javascript:void(0)"></a>
                    <a class="icon bd-dribbble" href="javascript:void(0)"></a>
                    <a class="icon bd-github" href="javascript:void(0)"></a>
                  </div>  --}}
                  
                  @if(Auth::id() != $user->id)
                  {{--  if the guy is a stranger, display a follow button  --}}
                  @if(!in_array($user->id,$followers_ids) && !in_array($user->id,$following_ids))
                    <a href="{{ route('follow',[$user->id]) }}" class="btn btn-sm btn-info">Follow</a>
                    {{--  if the guy is following me but am not following him, display a follow button  --}}
                  @elseif(in_array($user->id,$followers_ids) && !in_array($user->id,$following_ids))
                    <a href="{{ route('follow',[$user->id]) }}" class="btn btn-sm btn-info">Follow</a>
                    {{--  if am following the guy but he is not following me, display an unfollow button  --}}
                  @elseif(in_array($user->id,$following_ids) && !in_array($user->id,$followers_ids))
                    <a href="{{ route('unfollow',[$user->id]) }}" class="btn btn-sm btn-info">Unfollow</a>
                    {{--  if we are both following each other, display unfollow button  --}}
                 @elseif(in_array($user->id,$following_ids) && in_array($user->id,$followers_ids))
                    <a href="{{ route('unfollow',[$user->id]) }}" class="btn btn-sm btn-info">Unfollow</a>
                  @endif
                   
                   
                  @endif
                  @if(Auth::id() == $user->id)
                  <a href="{{ route('profile.edit') }}" class="btn btn-sm btn-info">edit profile</a>
                  @endif
                </div>
                <div class="card-footer">
                  <div class="row no-space">
                    <div class="col-4">
                      <strong class="profile-stat-count">{{count($followers)}}</strong>
                      <span>Followers</span>
                    </div>
                    <div class="col-4">
                      <strong class="profile-stat-count">{{ count($followings) }}</strong>
                      <span>Following</span>
                    </div>
                    <div class="col-4">
                      <strong class="profile-stat-count">{{ count($posts) }}</strong>
                      <span>Pieces</span>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Page Widget -->
            </div>
    
            <div class="col-lg-9">
              <!-- Panel -->
              <div class="panel">
                <div class="panel-body nav-tabs-animate nav-tabs-horizontal" data-plugin="tabs">
                  <ul class="nav nav-tabs nav-tabs-line" role="tablist">
                    <li class="nav-item" role="presentation"><a class="active nav-link" data-toggle="tab" href="#portfolio"
                        aria-controls="activities" role="tab">Portfolio <span class="badge badge-pill badge-danger">{{ count($posts) }}</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#following" aria-controls="profile"
                        role="tab">Following</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#favourites" aria-controls="favourites"
                        role="tab">Favourites</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#messages" aria-controls="messages"
                      role="tab">Messages</a></li>
                    @if(Auth::id() == $user->id)
                    <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#orders" aria-controls="orders"
                      role="tab">Orders</a></li>
                    @endif
                    <li class="nav-item dropdown">
                      <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#" aria-expanded="false">Menu </a>
                      <div class="dropdown-menu" role="menu">
                        <a class="active dropdown-item" data-toggle="tab" href="#portfolio" aria-controls="activities"
                          role="tab">Portfolio <span class="badge badge-pill badge-danger">{{ count($posts) }}</span></a>
                        <a class="dropdown-item" data-toggle="tab" href="#following" aria-controls="profile"
                          role="tab">Following</a>
                        <a class="dropdown-item" data-toggle="tab" href="#favourites" aria-controls="favourites"
                          role="tab">Favourites</a>
                      </div>
                    </li>
                  </ul>
    
                  <div class="tab-content">
                    <div class="tab-pane active animation-slide-left" id="portfolio" role="tabpanel">
                      <ul class="list-group">
                        
                        <div class="page-content">
                       
                          <ul class="blocks blocks-100 blocks-xxl-4 blocks-lg-3 blocks-md-2" data-plugin="filterable"
                            data-filters="#exampleFilter">
                            @foreach($posts as $post)
                
                            <li data-type="animal">
                              <div class="card card-shadow">
                                <figure class="card-img-top overlay-hover overlay">
                                  <img class="overlay-figure overlay-scale" src="{{ $post->thumb }}"
                                    alt="...">
                                  <figcaption class="overlay-panel overlay-background overlay-fade overlay-icon">
                                    <a class="icon wb-search" href="{{ $post->path }}"></a>
                                    
                                  </figcaption>
                                </figure>
                                <div class="card-block">
                                  <h4 class="card-title">TITLE: {{ $post->title }}</h4>
                                  
                                  <h4 class="card-title">PRICE: {{ $post->price }}</h4>
                                  <a href="{{ route('product.addToCart', ['id' => $post->id]) }}" class="btn btn-default pull-right" role="button"> Add to Cart</a></p>
                                </div>
                                @if(Auth::id() == $post->user_id)
                                    <button class="btn btn-inverse pull-right" type="button">
                                    <a href="{{ route('product.delete', ['id' => $post->id]) }}" class="pull-right">delete</a>

                                    </button>

                                    <button class="btn btn-inverse pull-right" type="button">
                                        <a href="{{ url('/portfolio/update',  $post->id) }}" class="pull-right">edit</a>
    
                                    </button>
                                @endif

                                @if($post->download_options == true)
                                <button class="btn btn-inverse pull-right" type="button">
                                  <a href="{{ route('product.download', ['id' => $post->id]) }}" class="pull-right">download</a>
            
                                </button>
                              @endif
                              </div>
                            </li>
                
                            @endforeach
                           
                            
                           
                            
                          </ul>
                        </div>
    
    
                      </ul>
                      {{--  <a class="btn btn-block btn-default profile-readMore" href="javascript:void(0)"
                        role="button">Show more</a>  --}}
                    </div>
    
                    <div class="tab-pane animation-slide-left" id="following" role="tabpanel">
                      <ul class="list-group">
                        @foreach($followings as $following)
                        {{--  panel content goes here  --}}
                        <li class="list-group-item">
                                <div class="media">
                                  <div class="pr-0 pr-sm-20 align-self-center">
                                    <div class="avatar avatar-online">
                                      <img src="../../global/portraits/1.jpg" alt="...">
                                      <i class="avatar avatar-busy"></i>
                                    </div>
                                  </div>
                                  <div class="media-body align-self-center">
                                    <h5 class="mt-0 mb-5">
                                      {{ $following->name }}
                                      <small>{{ $following->profile->type_of_artist }}</small>
                                    </h5>
                                    <p>
                                      <i class="icon icon-color wb-map" aria-hidden="true"></i>
                                      {{ $following->profile->biography }}
                                    </p>
                                    
                                  </div>
                                  <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                                       {{--  if the guy is a stranger, display a follow button  --}}
                                    @if(!in_array($following->id,$followers_ids) && !in_array($following->id,$following_ids))
                                    <a href="{{ route('follow',[$following->id]) }}" class="btn btn-outline btn-success">Follow</a>
                                    {{--  if the guy is following me but am not following him, display a follow button  --}}
                                    @elseif(in_array($following->id,$followers_ids) && !in_array($following->id,$following_ids))
                                    <a href="{{ route('follow',[$following->id]) }}" class="btn btn-outline btn-success">Follow</a>
                                    {{--  if am following the guy but he is not following me, display an unfollow button  --}}
                                    @elseif(in_array($following->id,$following_ids) && !in_array($following->id,$followers_ids))
                                    <a href="{{ route('unfollow',[$following->id]) }}" class="btn btn-outline btn-success">Unfollow</a>
                                    {{--  if we are both following each other, display unfollow button  --}}
                                     @elseif(in_array($following->id,$following_ids) && in_array($following->id,$followers_ids))
                                    <a href="{{ route('unfollow',[$following->id]) }}" class="btn btn-outline btn-success">Unfollow</a>
                                    @endif
                                    {{--  <button type="button" class="btn btn-outline btn-success btn-sm">Follow</button>  --}}
                                  </div>
                                </div>
                              </li>
                       @endforeach
    
                      </ul>
                    </div>

                    
                    <div class="tab-pane animation-slide-left" id="orders" role="tabpanel">
                        @foreach($orders as $order)
                        <ul class="list-group">
                          @foreach($order->cart->items as $item)
                            <li class="list-group-item">
                              <span class="badge">{{ $item['price'] }}</span>
                              {{ $item['item']['title'] }} | {{ $item['qty'] }} Units
                            </li>
                          @endforeach
                        </ul>
                        <div class="panel-footer">
                          <strong>Total price: {{ $order->cart->totalPrice }}</strong>
                        </div>
                        @endforeach
                      </div>

                      <div class="tab-pane animation-slide-left" id="messages" role="tabpanel">
                          <div class="page-main">
                              <!-- Chat Box -->
                              <div class="app-message-chats">
                                {{--  <button type="button" id="historyBtn" class="btn btn-round btn-outline btn-default">History Messages</button>  --}}
                                <div class="chats">
                                  @foreach($user->thread() as $message)
                                  <div class="chat">
                                    <div class="chat-avatar">
                                      <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title="">
                                        <img src="../../../global/portraits/4.jpg" alt="June Lane">
                                      </a>
                                    </div>
                                    <div class="chat-body">
                                      <div class="chat-content">
                                        <p>
                                          {{ $message->message }}
                                        </p>
                        
                                      </div>
                                    </div>
                                  </div>
                                  @endforeach
                                  
                                  
                                </div>
                        
                              </div>
                              <!-- End Chat Box -->
                        
                              <!-- Message Input-->
                              <form class="" action="{{ route('chat') }}" autocomplete="off" role="form" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="message-input">
                                  <textarea name = "message" class="form-control" rows="2"></textarea>
                                  {{--  <div class="message-input-actions btn-group">
                                    <button class="btn btn-pure btn-icon btn-default" type="button">
                                      <i class="icon wb-emoticon" aria-hidden="true"></i>
                                    </button>
                                    <button class="btn btn-pure btn-icon btn-default" type="button">
                                      <i class="icon wb-image" aria-hidden="true"></i>
                                    </button>
                                    <button class="btn btn-pure btn-icon btn-default" type="button">
                                      <i class="icon wb-paperclip" aria-hidden="true"></i>
                                    </button>
                                    <input id="messageImage" type="file" name="messageImage">
                                    <input id="messageFile" type="file" name="messageFile">
                                  </div>  --}}
                                </div>
                                <input type ="hidden" name = "artist_id" value = "{{$user->id}}" />
                                <button class=" btn btn-primary pull-right" type="submit">Send</button>
                              </form>
                              <!-- End Message Input-->
                        
                            </div>

                      </div>
    
                    <div class="tab-pane animation-slide-left" id="favourites" role="tabpanel">
                        <ul class="list-group">
                        
                            <div class="page-content">
                       
                            <ul class="blocks blocks-100 blocks-xxl-4 blocks-lg-3 blocks-md-2" data-plugin="filterable"
                            data-filters="#exampleFilter">
                            @if($favourites != NULL)
                            @foreach($favourites as $post)
                
                            <li data-type="animal">
                              <div class="card card-shadow">
                                <figure class="card-img-top overlay-hover overlay">
                                  <img class="overlay-figure overlay-scale" src="{{ $post->thumb }}"
                                    alt="...">
                                  <figcaption class="overlay-panel overlay-background overlay-fade overlay-icon">
                                    <a class="icon wb-search" href="{{ $post->path }}"></a>
                                    
                                  </figcaption>
                                </figure>
                                <div class="card-block">
                                  <h4 class="card-title">TITLE: {{ $post->title }}</h4>
                                  
                                  <h4 class="card-title">PRICE: {{ $post->price }}</h4>
                                  <a href="{{ route('product.addToCart', ['id' => $post->id]) }}" class="btn btn-default pull-right" role="button"> Add to Cart</a></p>
                                </div>
                                @if(Auth::id() == $post->user_id)
                                    <button class="btn btn-inverse pull-right" type="button">
                                    <a href="{{ route('product.delete', ['id' => $post->id]) }}" class="pull-right">delete</a>

                                    </button>

                                    <button class="btn btn-inverse pull-right" type="button">
                                        <a href="{{ url('/portfolio/update',  $post->id) }}" class="pull-right">edit</a>
    
                                    </button>
                                @endif

                                @if($post->download_options == true)
                                <button class="btn btn-inverse pull-right" type="button">
                                  <a href="{{ route('product.download', ['id' => $post->id]) }}" class="pull-right">download</a>
            
                                </button>
                              @endif
                              </div>
                            </li>
                
                            @endforeach
                           
                            @endif
                           
                            
                          </ul>
                        </div>
    
    
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Panel -->
            </div>
          </div>
        </div>
      </div>
      <!-- End Page -->
@endsection

@section('scripts')
<script src="{{ asset('global/js/Plugin/responsive-tabs.min599c.js?v4.0.2') }}"></script>
<script src="{{ asset('global/js/Plugin/tabs.min599c.js?v4.0.2') }}"></script>
<script src="{{ asset('global/vendor/aspaginator/jquery-asPaginator.min599c.js?v4.0.2') }}"></script>

{{--  comments  --}}
<script src="{{ asset('assets/js/App/Message.min599c.js?v4.0.2') }}"></script>
<script src="{{ asset('assets/examples/js/apps/message.min599c.js?v4.0.2') }}"></script>
@endsection