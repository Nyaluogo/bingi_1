@extends('layouts.app')

@section('content')


  <!-- Page -->
  <div class="page">
        <div class="page-header">
          <h1 class="page-title">Submit your artwork</h1>
          
          
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
                            <form id="exampleFormContainer" action="{{ route('portfolio.store') }}" role="form" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="example">
                                    <label class="form-control-label" for="inputBasicAvatar">Upload artwork</label>
                                    <input type="file" id="input-file-now-custom-1" data-plugin="dropify" data-default-file="../../global/photos/upload image.jpg"
                                    data-height="250" data-width="250" data-max-file-size="4M" name="image_file" required/>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="inputPasswordOne">Title</label>
                                    <input type="text" class="form-control" id="title" name="title">
                                </div>

                                <div class="form-group col-md-12">
                                        <label class="form-control-label" for="description">Decription</label>
                                    <textarea name="description" id="description" cols="30" rows="10" class="form-control" >{{ old('description') }}</textarea>
                                </div>

                                <div class = "form-group">
                                        <label class="form-control-label" for="watermark_options">Add Watermark</label>
                                        <li class="list-inline-item mr-25 mb-25">
                                                <input type="checkbox" name="watermark_options" id="watermark_options" value="1"  data-plugin="switchery" data-color="#eb6709" checked />
                                        </li>
                                </div>

                                <div class="form-group">
                                        <label for="display_options">Display options:</label>
                                        <select  name ="display_options" >
                                        <option disabled value="">Please select one</option>
                                            <option value = "0">original</option>
                                            <option value = "1">size:400 pixels wide</option>
                                            <option value = "2">size:600 pixels wide</option>
                                            <option value = "3">size:800 pixels wide</option>
                                            <option value = "4">size:900 pixels wide</option>
                                            <option value = "5">size:1024 pixels wide</option>
                                            <option value = "6">size:1280 pixels wide</option>
                        
                                        </select>
                                    </div>

                                <div class = "form-group">
                                        {{--  <h4 class="example-title">MATURE CONTENT</h4>  --}}
                                        <p>Does it include mature content?. If yes, please select the one(s) that best describe it</p>
                                        <ul class="list-unstyled example">
                                            <li class="mb-15">
                                                <input type="checkbox" value = "nudity" class="icheckbox-primary" id="inputUnchecked" name="mature_content_type[]"
                                                data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                                                />
                                                <label for="inputUnchecked">Nudity</label>
                                            </li>

                                            <li class="mb-15">
                                                <input type="checkbox" value = "sexual_themes" class="icheckbox-primary" id="inputUnchecked" name="mature_content_type[]"
                                                    data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                                                />
                                                <label for="inputUnchecked">Sexual themes</label>
                                            </li>

                                            <li class="mb-15">
                                                <input type="checkbox" value = "violence_gore" class="icheckbox-primary" id="inputUnchecked" name="mature_content_type[]"
                                                    data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                                                />
                                                <label for="inputUnchecked">Violence/gore</label>
                                            </li>

                                            <li class="mb-15">
                                                <input type="checkbox" value = "strong_language" class="icheckbox-primary" id="inputUnchecked" name="mature_content_type[]"
                                                    data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                                                />
                                                <label for="inputUnchecked">Strong language</label>
                                            </li>

                                            <li class="mb-15">
                                                <input type="checkbox" class="icheckbox-primary" id="inputUnchecked"  value = "strong_language" name="mature_content_type[]"
                                                    data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                                                />
                                                <label for="inputUnchecked">Ideologically sensitive</label>
                                            </li>
                                                
                                        </ul>
                                </div>

                                

                                <div class="example">
                                    <label for="inputUnchecked">Tags</label>
                                    <input type="text" class="form-control" name="tags" id="inputTokenfieldTypeahead" {{-- value="red,green,blue" --}}
                                        placeholder="Type something and hit enter" />
                                </div>

                                <div class="example">
                                        <label for="category">Category</label>
                                        <select class="form-control" name="category" multiple data-plugin="select2">
                                          <optgroup label="Traditional art">
                                            <option value="Assemblage">Assemblage</option>
                                            <option value="Collage">Collage</option>
                                            <option value="Installation Art">Installation Art</option>
                                            <option value="Mixed Media">Mixed Media</option>
                                            <option value="Painting">Painting</option>
                                            <option value="Printing">Printing</option>
                                            <option value="Sculpture">Sculpture</option>
                                            <option value="Street Art">Street Art</option>
                                            <option value="Typography">Typography</option>
                                          </optgroup>

                                          <optgroup label="Digital art">
                                            <option value="3D Art">3D Art</option>
                                            <option value="Digital drawing and painting">Digital drawing and painting</option>
                                            <option value="Fractal art">Fractal art</option>
                                            <option value="Photomanipulation">Photomanipulation</option>
                                            <option value="Typography">Typography</option>
                                            <option value="Animations">Animations</option>
                                            <option value="Game development art">Game development art</option>
                                            
                                          </optgroup>
                                          <optgroup label="Resources and Stock Images">
                                            <option value="Stock Images">Stock Images</option>
                                            <option value="Clip Art">Clip Art</option>
                                            <option value="Fonts">Fonts</option>
                                            <option value="Other">Other</option>
                                            
                                          </optgroup>
                                          <optgroup label="Photography">
                                            <option value="Photojournalism">Photojournalism</option>
                                            <option value="Commercial Photography">Commercial Photography</option>
                                            <option value="People and Portraits">People and Portraits</option>
                                            <option value="Urban And Rural">Urban And Rural</option>
                                            <option value="Conceptual">Conceptual</option>
                                            <option value="Nature">Nature</option>
                                            <option value="Other">Other</option>
                                            
                                          </optgroup>
                                          <optgroup label="Designs and Interfaces">
                                            <option value="Advertisements">Advertisements</option>
                                            <option value="Application Interface">Application Interface</option>
                                            <option value="Architectural design">Architectural design</option>
                                            <option value="Buttons">Buttons</option>
                                            <option value="CD covers">CD covers</option>
                                            <option value="Corporate">Corporate</option>
                                            <option value="Fashion designs">Fashion designs</option>
                                            <option value="Infographics">Infographics</option>
                                            <option value="Logos">Logos</option>
                                            <option value="Tattoo design">Tattoo design</option>
                                            <option value="Web interface">Web interface</option>
                                            <option value="other">other</option>
                                            
                                          </optgroup>
                                        </select>
                                      </div>
                                
                                      <div class = "form-group">
                                            <label class="form-control-label" for="comment_options">Allow Critique</label>
                                            <li class="list-inline-item mr-25 mb-25">
                                                    <input type="checkbox" name="comment_options" id="comment_options" value="true"  data-plugin="switchery" data-color="#eb6709" checked />
                                            </li>
                                    </div>

                                    <div class = "form-group">
                                            <label class="form-control-label" for="download_options">Allow Free Downloads</label>
                                            <li class="list-inline-item mr-25 mb-25">
                                                    <input type="checkbox" name="download_options" id="download_options" value="true"  data-plugin="switchery" data-color="#eb6709" checked />
                                            </li>
                                    </div>


                                    <div class="form-group row has-success">
                                        <label class="col-md-3 form-control-label">Is this artwork for sale? if yes, How much?</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control is-valid" name="price" placeholder="price" data-fv-field="type_digits">
                                        <small class="invalid-feedback" data-fv-validator="digits" data-fv-for="type_digits" data-fv-result="VALID" style="display: none;">The value is not digits</small></div>
                                    </div>

                                <div class="float-left">
                                    <button type="submit" class="btn btn-orange ladda-button" data-style="slide-left"
                                        data-plugin="ladda" data-type="progress">
                                        <span class="ladda-label"><i class="icon wb-arrow-right mr-10" aria-hidden="true"></i>Submit</span>
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
