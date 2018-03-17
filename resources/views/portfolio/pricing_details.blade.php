@extends('layouts.app')

@section('content')


  <!-- Page -->
  <div class="page">
        <div class="page-header">
          <h1 class="page-title">Complete your pricing details</h1>
          
          
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
                            <form id="exampleFormContainer" action="{{ route('portfolio.pricing') }}" role="form" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <img class="img-fluid" src="{{$artwork->path}}" max-width= "100%" height= "auto">
                                <br>

                                <div class="form-group row has-success">
                                    <label class="col-md-3 form-control-label">Enter the price of your original artwork</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control is-valid" name="price" placeholder="price" data-fv-field="type_digits">
                                        <span>NB: All prices should be in USD(US Dollars)</span>
                                    <small class="invalid-feedback" data-fv-validator="digits" data-fv-for="type_digits" data-fv-result="VALID" style="display: none;">The value is not digits</small></div>
                                </div>

                            <input type="hidden" value="{{$artwork->id}}" name="artwork_id">
                                <h3>Prints</h3>
                               
                                <div class = "form-group">
                                        <p><strong>What types of prints do you want to sell?</strong></p>
                                        <ul class="list-unstyled example">
                                            

                                            <li class="mb-15">
                                                <input type="checkbox" value = "photopaper" class="icheckbox-primary" id="inputUnchecked" name="print_options[]"
                                                data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                                                />
                                                <label for="inputUnchecked">Photopaper</label>
                                            </li>

                                            <li class="mb-15">
                                                <input type="checkbox" value = "canvas" class="icheckbox-primary" id="inputUnchecked" name="print_options[]"
                                                    data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                                                />
                                                <label for="inputUnchecked">Canvas</label>
                                            </li>
                     
                                                
                                        </ul>
                                </div>

                                <div class="form-group row has-success">
                                    <label class="col-md-3 form-control-label">Enter the price of your print</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control is-valid" name="print_price" placeholder="price of a print" data-fv-field="type_digits">
                                        <span>NB: All prices should be in USD(US Dollars)</span>
                                    <small class="invalid-feedback" data-fv-validator="digits" data-fv-for="type_digits" data-fv-result="VALID" style="display: none;">The value is not digits</small></div>
                                </div>

                                <div class="form-group row has-success">
                                    <label class="col-md-3 form-control-label">How many prints would you like to be sold?</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control is-valid" name="number_of_prints_for_sale" placeholder="how many prints for sale" data-fv-field="type_digits">
                                        <span>NB: All prices should be in USD(US Dollars)</span>
                                    <small class="invalid-feedback" data-fv-validator="digits" data-fv-for="type_digits" data-fv-result="VALID" style="display: none;">The value is not digits</small></div>
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
