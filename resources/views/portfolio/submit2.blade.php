@extends('layouts.app')

@section('content')


  <!-- Page -->
  <div class="page">
        <div class="page-header">
          <h1 class="page-title">Complete your artwork details</h1>
          
          
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
                            <form id="exampleFormContainer" action="{{ route('portfolio.details') }}" role="form" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <img class="img-fluid" src="{{$artwork->path}}" max-width= "100%" height= "auto">

                                
                            <input type="hidden" value="{{$artwork->id}}" name="artwork_id">

                               
                                <div class="example">
                                        <label for="medium">Which medium did you use?</label>
                                        <select class="form-control" name="medium" multiple data-plugin="select2">
                                          
                                            <optgroup label="Traditional art">
                                            <option value="Airbrush">Airbrush</option>
                                            <option value="Acrylic">Acrylic</option>
                                            <option value="Spray paint">Spray paint</option>
                                            <option value="Oil paint">Oil paint</option>
                                            <option value="Watercolor">Watercolor</option>
                                            <option value="Soft Pastel">Soft Pastel</option>
                                            <option value="Oil Pastel">Oil Pastel</option>
                                            <option value="Ink">ink</option>
                                            <option value="Digital">Digital</option>
                                            <option value="Pencil">Pencil</option>
                                          </optgroup>

                                         
                                        </select>
                                </div>

                                <div class="example">
                                        <label for="material">Which materials did you use?</label>
                                        <select class="form-control" name="material" multiple data-plugin="select2">
                                          
                                            <optgroup label="Traditional art">
                                            <option value="Canvas">Canvas</option>
                                            <option value="Paper">Paper</option>
                                            <option value="Glass">Glass</option>
                                            <option value="Wood">Wood</option>
                                            <option value="Carbon fibre">Carbon fibre</option>
                                            <option value="Plastic">Plastic</option>
                                            <option value="Ceramic">Ceramic</option>
                                            <option value="Stone">Stone</option>
                                            <option value="Steel">Steel</option>
                                            <option value="Other">Other</option>
                                          </optgroup>

                                         
                                        </select>
                                </div>
                                

                               

                               

                                

                                <div class="example">
                                    <label for="inputUnchecked">Tags/Keywords</label>
                                    <input type="text" class="form-control" name="tags" id="inputTokenfieldTypeahead" {{-- value="red,green,blue" --}}
                                        placeholder="Type something and hit enter" />
                                </div>

                                
                             

                                    
                                    <p><strong>What are the dimensions of your artwork?</strong></p>
                                    <div class="form-group">
                                        <label class="form-control-label" for="inputPasswordOne">Length</label>
                                        <input type="text" class="form-control" id="title" name="length">
                                    </div>

                                    <div class="form-group">
                                        <label class="form-control-label" for="inputPasswordOne">Width</label>
                                        <input type="text" class="form-control" id="title" name="width">
                                    </div>

                                    <div class="form-group">
                                        <label class="form-control-label" for="inputPasswordOne">Height</label>
                                        <input type="text" class="form-control" id="title" name="height">
                                    </div>



                                    <div class = "form-group">
                                            <p><strong>How would you like your artwork packaged?</strong></p>
                                            <ul class="list-unstyled example">
                                                <li class="mb-15">
                                                    <input type="radio" value = "tube" class="icheckbox-primary" id="inputUnchecked" name="packaging"
                                                    data-plugin="iCheck" data-radio-class="icheckbox_flat-blue"
                                                    />
                                                    <label for="inputUnchecked">In a tube</label>
                                                </li>
    
                                                <li class="mb-15">
                                                    <input type="radio" value = "box" class="icheckbox-primary" id="inputUnchecked" name="packaging"
                                                        data-plugin="iCheck" data-radio-class="icheckbox_flat-blue"
                                                    />
                                                    <label for="inputUnchecked">In a box</label>
                                                </li>
    
                                            </ul>
                                    </div>

                                    <div class = "form-group">
                                            <p><strong>Is the artwork framed?</p>
                                            <ul class="list-unstyled example">
                                                <li class="mb-15">
                                                    <input type="radio" value = "yes" class="icheckbox-primary" id="inputUnchecked" name="framing_options"
                                                    data-plugin="iCheck" data-radio-class="icheckbox_flat-blue"
                                                    />
                                                    <label for="inputUnchecked">Yes</label>
                                                </li>
    
                                                <li class="mb-15">
                                                    <input type="radio" value = "no" class="icheckbox-primary" id="inputUnchecked" name="framing_options"
                                                        data-plugin="iCheck" data-radio-class="icheckbox_flat-blue"
                                                    />
                                                    <label for="inputUnchecked">No</label>
                                                </li>
    
                         
                                                    
                                            </ul>
                                    </div>

                                    <div class = "form-group">
                                            <p><strong>Is the artwork multi-paneled?</p>
                                            <ul class="list-unstyled example">
                                                <li class="mb-15">
                                                    <input type="radio" value = "yes" class="icheckbox-primary" id="inputUnchecked" name="multipanel_options"
                                                    data-plugin="iCheck" data-radio-class="icheckbox_flat-blue"
                                                    />
                                                    <label for="inputUnchecked">Yes</label>
                                                </li>
    
                                                <li class="mb-15">
                                                    <input type="radio" value = "no" class="icheckbox-primary" id="inputUnchecked" name="multipanel_options"
                                                        data-plugin="iCheck" data-radio-class="icheckbox_flat-blue"
                                                    />
                                                    <label for="inputUnchecked">No</label>
                                                </li>
    
                         
                                                    
                                            </ul>
                                    </div>

                                 


                                <div class="float-right">
                                    <button type="submit" class="btn btn-orange ladda-button pull-right" data-style="slide-left"
                                        data-plugin="ladda" data-type="progress">
                                        <span class="ladda-label"><i class="icon wb-arrow-right mr-10" aria-hidden="true"></i>Next</span>
                                    </button>
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
