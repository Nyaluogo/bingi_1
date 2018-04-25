@extends('layouts.app')

@section('styles')
<link rel="stylesheet" href="{{ asset('global/vendor/toolbar/toolbar.min599c.css?v4.0.2') }}">
<link rel="stylesheet" href="{{ asset('global/vendor/webui-popover/webui-popover.min599c.css?v4.0.2') }}">

{{--  comments  --}}
<link rel="stylesheet" href="{{ asset('assets/examples/css/apps/message.min599c.css?v4.0.2') }}">
@endsection

@section('content')

<div class="page">
        <div class="page-header page-header-bordered page-header-tabs">
          
          {{--  <h1 class="page-title">Home</h1>  --}}
          
    
          <ul class="nav nav-tabs nav-tabs-line" role="tablist" id="exampleFilter">
            <li class="nav-item" role="presentation">
              <a class="active nav-link" href="#" aria-controls="exampleList" aria-expanded="true"
                role="tab" data-filter="*"><strong>All</strong></a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" href="#" aria-expanded="false" role="tab" data-filter="Painting"><strong>Painting</strong></a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" href="#" aria-expanded="false" role="tab" data-filter="Stock Images"><strong>Stock Images</strong></a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" href="#" aria-expanded="false" role="tab" data-filter="Sculpture"><strong>Sculpture</strong></a>
            </li>
          </ul>
        </div>
    
        <div class="page-content">
          <ul class="blocks blocks-100 blocks-xxl-4 blocks-lg-3 blocks-md-2" data-plugin="filterable"
            data-filters="#exampleFilter">
            @foreach($feed as $post)

            <li data-type="{{$post->category}}">
              <div class="card card-shadow">
                <figure class="card-img-top overlay-hover overlay">
                  <img class="overlay-figure overlay-scale" src="{{ $post->thumb }}"
                    alt="...">
                  <figcaption class="overlay-panel overlay-background overlay-fade overlay-icon">
                    <a class="icon wb-search" href="{{ $post->thumb }}"></a>
                    
                  </figcaption>
                </figure>
                <div class="card-block">
                  <h4 class="card-title">{{ $post->title }}</h4>
                  
                  <a href="{{ route('profile',[$post->user->id]) }}" class="avatar avatar-sm">
                      <small>by</small>
                      <img class="img-fluid" src="{{ $post->user->avatar }}"><h5 class="card-username">{{ $post->user->name }}</h5>
                  </a>
                  
                  @if($post->price > 0)
                    <h4 class="card-title">PRICE:${{ $post->price }}</h4>
                  @endif

                  <div class="example example-buttons">


                      <div class="btn-group" aria-label="Button group with nested dropdown" role="group">
                          <button class="btn btn-default" type="button">
                              <a href="{{ route('artwork.view', ['id' => $post->id]) }}" class="btn btn-default"><i class="icon wb-binoculars" aria-hidden="true">View</i></a>
      
                          </button>

                          @if($post->price > 0)
                              <a href="{{ route('product.addToCart', ['id' => $post->id]) }}" class="btn btn-default " role="button"><i class="icon wb-shopping-cart" aria-hidden="true"></i></a>
                          @endif

                          @if($post->download_options == true)
                              <button class="btn btn-default" type="button">
                                  <a href="{{ route('product.download', ['id' => $post->id]) }}" class="pull-right"><i class="icon wb-download" aria-hidden="true"></i></a>
                              </button>
                          @endif

                          @if(in_array(Auth::id(),$post->favouriters()) == true)
                               <a href="{{ route('unfavourite', ['id' => $post->id]) }}" class="btn btn-default " role="button"><i class="icon wb-star-outline" aria-hidden="true"></i>{{ count($post->favouriters()) }}</a>
                          @else
                              <a href="{{ route('favourite', ['id' => $post->id]) }}" class="btn btn-default " role="button"><i class="icon wb-star" aria-hidden="true"></i>{{ count($post->favouriters()) }}</a>
                          @endif
                          
                          <div class="btn-group" role="group">
                            <button type="button" class="btn btn-primary dropdown-toggle" id="exampleGroupDrop1"
                              data-toggle="dropdown" aria-expanded="false">
                              Share
                            </button>
                            <div class="dropdown-menu" aria-labelledby="exampleGroupDrop1" role="menu">
                              <a class="dropdown-item" href="javascript:void(0)" role="menuitem">Facebook</a>
                              <a class="dropdown-item" href="javascript:void(0)" role="menuitem">Pinterest</a>
                            </div>
                          </div>
                        </div>

                      @if($post->comment_options == "true")
                    
                    <div class="example {{$post->id}}">
                        {{--  <div class="example-well h-350 example-fill-in">
                          <img class="center" src="../assets/examples/images/modal/fillin-modal.png" alt="...">
                        </div>
                        <p>This modal zooms from the middle and fills in fill-in to the
                          modal.</p>  --}}
                        <button class="btn btn-primary" data-target="#exampleFillIn{{$post->id}}" data-toggle="modal"
                          type="button">Critique{{count($post->thread())}}</button>
      
                        <!-- Modal -->
                        <div class="modal fade modal-fill-in" id="exampleFillIn{{$post->id}}" aria-hidden="false" aria-labelledby="exampleFillIn{{$post->id}}"
                          role="dialog" tabindex="-1">
                          <div class="modal-dialog modal-simple">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">×</span>
                                </button>
                                
                              </div>

                              {{--  comments  --}}

                              <div class="page-main">
                                  <!-- Chat Box -->
                                  <div class="app-message-chats">
                                    {{--  <button type="button" id="historyBtn" class="btn btn-round btn-outline btn-default">History Messages</button>  --}}
                                    <div class="chats">
                                      @foreach($post->thread() as $critique)
                                      <div class="chat">
                                        <div class="chat-avatar">
                                          <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title="">
                                            <img src="../../../global/portraits/4.jpg" alt="June Lane">
                                          </a>
                                        </div>
                                        <div class="chat-body">
                                          <div class="chat-content">
                                            <p>
                                              {{ $critique->critique }}
                                            </p>
                            
                                          </div>
                                        </div>
                                      </div>
                                      @endforeach
                                      
                                      
                                    </div>
                            
                                  </div>
                                  <!-- End Chat Box -->
                            
                                  <!-- Message Input-->
                                  <form class="" action="{{ route('critique') }}" autocomplete="off" role="form" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="message-input">
                                      <textarea name = "critique" class="form-control" rows="2"></textarea>
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
                                    <input type ="hidden" name = "post_id" value = "{{$post->id}}" />
                                    <button class=" btn btn-primary" type="submit">Critique</button>
                                  </form>
                                  <!-- End Message Input-->
                            
                                </div>

                              {{--  end comments  --}}
                            
                            </div>
                          </div>
                        </div>
                        <!-- End Modal -->
                      </div>
                    @endif
                      
                     
                      
                   
                </button> </div>
                  
                <div class="example example-buttons">
                  <div class="toolbar-icons" id="set-04-options" hidden>
                    <a href="javascript:void(0)"><i class="icon wb-star" aria-hidden="true"></i></a>
                    <a href="javascript:void(0)"><i class="icon wb-star-half" aria-hidden="true"></i></a>
                    <a href="javascript:void(0)"><i class="icon wb-star-outline" aria-hidden="true"></i></a>
                  </div>
                </div>

                </div>
              </div>
            </li>

            

            @endforeach
           
            
           
            
          </ul>
        </div>
      </div>

@endsection

@section('scripts')
{{--  <script>
        $(function(){
               $("#button").click(function(event){
                   event.preventDefault();
   
                   $.ajax({
                           url: $('{{ route('favourite', ['id' => $post->id]) }}');,
                           type:'GET',
                           data:$('#favourite').serialize(),
                           success:function(result){
                              //Do something with return data
   
                           }
   
                   });
               });
           });
</script>  --}}
<script>
    
    //delete product and remove it from list
    $(function(){
        $(document).on('click','.favourite',function(){
            var product_id = $(this).val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            })
            $.ajax({
                type: "FAVOURITE",
                url: url + '/favourite' + product_id,
                success: function (data) {
                    console.log(data);
                    {{--  $("#product" + product_id).remove();  --}}
                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });
        });
    });
</script>

<script src="{{ asset('global/vendor/webui-popover/jquery.webui-popover.min599c.js?v4.0.2') }}"></script>
<script src="{{ asset('global/vendor/toolbar/jquery.toolbar599c.js?v4.0.2') }}"></script>
<script src="{{ asset('global/js/Plugin/webui-popover.min599c.js?v4.0.2') }}"></script>
<script src="{{ asset('global/js/Plugin/toolbar.min599c.js?v4.0.2') }}"></script>
<script src="{{ asset('assets/examples/js/uikit/tooltip-popover.min599c.js?v4.0.2') }}"></script>
{{--  comments  --}}
<script src="{{ asset('assets/js/App/Message.min599c.js?v4.0.2') }}"></script>
<script src="{{ asset('assets/examples/js/apps/message.min599c.js?v4.0.2') }}"></script>

<script src="{{ asset('global/vendor/slidepanel/jquery-slidePanel.min599c.js?v4.0.2') }}"></script>
<script src="{{ asset('global/vendor/autosize/autosize.min599c.js?v4.0.2') }}"></script>

@endsection