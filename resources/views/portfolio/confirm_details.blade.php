@extends('layouts.app')

@section('content')


  <!-- Page -->
  <div class="page">
        <div class="page-header">
          <h1 class="page-title">Confirm you details</h1>


        </div>

        <div class="page-content container-fluid">
          <div class="row">


            <div class="col-lg-12">
              <!-- Panel Wizard Form Container -->
              <div class="panel" id="exampleWizardFormContainer">
                <div class="panel-heading">
                  <h3 class="panel-title"></h3>
                </div>
                <div class="panel-body">
                  <!-- Steps -->
                  <div class="pearls row">
                    {{--  <div class="pearl current col-4">
                      <div class="pearl-icon"><i class="icon wb-user" aria-hidden="true"></i></div>
                      <span class="pearl-title">Upload image</span>
                    </div>
                    <div class="pearl col-4">
                      <div class="pearl-icon"><i class="icon wb-payment" aria-hidden="true"></i></div>
                      <span class="pearl-title">Update details</span>
                    </div>
                    <div class="pearl col-4">
                      <div class="pearl-icon"><i class="icon wb-check" aria-hidden="true"></i></div>
                      <span class="pearl-title">Confirmation</span>
                    </div>  --}}
                  </div>
                  <!-- End Steps -->

                  <!-- Wizard Content -->

                    <div class="wizard-content">
                      <div class="wizard-pane active" id="exampleAccountOne" role="tabpanel">
                            <form id="exampleFormContainer" action="{{ route('portfolio.confirm') }}" role="form" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <img class="img-fluid" src="{{$artwork->path}}" max-width= "100%" height= "auto">
                                <br>
                                @if($artwork->title)
                                    <h4 class="card-title">TITLE:{{ $artwork->title }}</h4>
                                @endif

                                @if($artwork->description)
                                    <h4 class="card-title">DESCRIPTION:{{ $artwork->description }}</h4>
                                @endif

                                @if($artwork->print_options)
                                    <h4 class="card-title">PRINTS OPTIONS:{{ $artwork->print_options }}</h4>
                                @endif

                                @if($artwork->number_of_prints_for_sale > 0)
                                    <h4 class="card-title">No of prints for sale:{{ $artwork->number_of_prints_for_sale }}</h4>
                                @endif

                                @if($artwork->type_of_print)
                                    <h4 class="card-title">Type of print:{{ $artwork->type_of_print }}</h4>
                                @endif

                                @if($artwork->year_of_completion)
                                    <h4 class="card-title">Year of completion:{{ $artwork->year_of_completion }}</h4>
                                @endif

                                @if($artwork->category)
                                    <h4 class="card-title">Category:{{ $artwork->category }}</h4>
                                @endif

                                @if($artwork->medium)
                                    <h4 class="card-title">Medium:{{ $artwork->medium }}</h4>
                                @endif

                                @if($artwork->material)
                                    <h4 class="card-title">Material:{{ $artwork->material }}</h4>
                                @endif

                                @if($artwork->height > 0)
                                    <h4 class="card-title">Height:{{ $artwork->height }}</h4>
                                @endif

                                @if($artwork->length > 0)
                                    <h4 class="card-title">Length:{{ $artwork->length }}</h4>
                                @endif

                                @if($artwork->width > 0)
                                    <h4 class="card-title">Width:{{ $artwork->width }}</h4>
                                @endif

                                @if($artwork->critique_options)
                                    <h4 class="card-title">Critiques:{{ $artwork->critique_options }}</h4>
                                @endif

                                @if($artwork->copyright_option)
                                    <h4 class="card-title">Copyright:{{ $artwork->copyright_option }}</h4>
                                @endif

                                @if($artwork->packaging)
                                    <h4 class="card-title">Packaging:{{ $artwork->packaging }}</h4>
                                @endif

                                @if($artwork->framing_options)
                                    <h4 class="card-title">Framing:{{ $artwork->framing_options }}</h4>
                                @endif

                                @if($artwork->multipanel_options)
                                    <h4 class="card-title">Multipanel:{{ $artwork->multipanel_options }}</h4>
                                @endif

                                @if($artwork->weight > 0)
                                    <h4 class="card-title">Weight:{{ $artwork->weight }}</h4>
                                @endif

                                @if($artwork->download_options)
                                    <h4 class="card-title">Free Downloads:{{ $artwork->download_options }}</h4>
                                @endif

                                @if($artwork->price > 0)
                                    <h4 class="card-title">Price of original artwork:{{ $artwork->price }}</h4>
                                @endif

                                @if($artwork->original_sale_option > 0)
                                    <h4 class="card-title">Price of print:${{ $artwork->original_sale_option }}</h4>
                                @endif




                            <input type="hidden" value="{{$artwork->id}}" name="artwork_id">

                                <div class="float-right">
                                    <button type="submit" class="btn btn-orange ladda-button pull-right" data-style="slide-left"
                                        data-plugin="ladda" data-type="progress">
                                        <span class="ladda-label"><i class="icon wb-arrow-right mr-10" aria-hidden="true"></i>Save</span>
                                    </button>
                                </div>

                                <div class="float-left">
                                <a href="{{route('home')}}" type="button" class="btn btn-orange ladda-button " data-style="slide-left"
                                        data-plugin="ladda" data-type="progress">
                                        <span class="ladda-label"><i class="icon wb-arrow-left mr-10" aria-hidden="true"></i>Exit</span>
                                </a>
                                </div>

                            </form>
                      </div>

                    </div>


                  {{--  </form>  --}}
                  <!-- Wizard Content -->
                </div>
              </div>
              <!-- End Panel Wizard Form Container -->
            </div>
          </div>



    </div>
</div>
<!-- End Page -->


@endsection
