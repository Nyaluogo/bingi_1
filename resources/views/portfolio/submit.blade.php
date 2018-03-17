@extends('layouts.app')

@section('content')


  <!-- Page -->
  <div class="page">
        <div class="page-header">
          <h1 class="page-title">Upload your artwork</h1>
          
          
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
                                    <input type="file" id="input-file-now-custom-1" data-plugin="dropify" data-default-file=""
                                    data-height="250" data-width="250" data-max-file-size="25M" name="image_file" required/>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="inputPasswordOne">Title</label>
                                    <input type="text" class="form-control" id="title" name="title">
                                </div>

                                <div class="form-group col-md-12">
                                    <p><strong>Collectors tend to appreciate works more if they know the “story” behind them, so be sure to write informative artwork descriptions. Great descriptions not only provide useful information (e.g. physical texture, whether hanging hardware is included, quality of materials), but they also answer questions like:

                                            What/who inspired the work?
                                            
                                            What do you hope its viewers will feel/think?
                                            
                                            Why did you choose the medium, subject matter, style?
                                    </strong>
                                    </p>
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
                                        <label for="category">Category</label>
                                        <select class="form-control" name="category" multiple data-plugin="select2">
                                          <optgroup label="Traditional art">
                                            <option value="Painting">Painting</option>
                                            <option value="Assemblage">Assemblage</option>
                                            <option value="Collage">Collage</option>
                                            <option value="Installation Art">Installation Art</option>
                                            <option value="Mixed Media">Mixed Media</option>
                                            <option value="New Media">New Media</option>
                                            <option value="Printing">Printmaking</option>
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
                                            <label class="form-control-label" for="critique_options">Allow Critique</label>
                                            <li class="list-inline-item mr-25 mb-25">
                                                    <input type="checkbox" name="critique_options" id="critique_options" value="true"  data-plugin="switchery" data-color="#eb6709" checked />
                                            </li>
                                    </div>

                                    <div class = "form-group">
                                            <label class="form-control-label" for="download_options">Allow Free Downloads</label>
                                            <li class="list-inline-item mr-25 mb-25">
                                                    <input type="checkbox" name="download_options" id="download_options" value="true"  data-plugin="switchery" data-color="#eb6709" checked />
                                            </li>
                                    </div>

                                    <div class="form-group">
                                        <label for="display_options">Which year did you create this artwork?:</label>
                                        <select  name ="year_of_completion" >
                                            <option disabled value="">Year</option>
                                            <option value="2018">2018</option>
                                            <option value="2017">2017</option>
                                            <option value="2016">2016</option>
                                            <option value="2015">2015</option>
                                            <option value="2014">2014</option>
                                            <option value="2013">2013</option>
                                            <option value="2012">2012</option>
                                            <option value="2011">2011</option>
                                            <option value="2010">2010</option>
                                            <option value="2009">2009</option>
                                            <option value="2008">2008</option>
                                            <option value="2007">2007</option>
                                            <option value="2006">2006</option>
                                            <option value="2005">2005</option>
                                            <option value="2004">2004</option>
                                            <option value="2003">2003</option>
                                            <option value="2002">2002</option>
                                            <option value="2001">2001</option>
                                            <option value="2000">2000</option>
                                            <option value="1999">1999</option>
                                            <option value="1998">1998</option>
                                            <option value="1997">1997</option>
                                            <option value="1996">1996</option>
                                            <option value="1995">1995</option>
                                            <option value="1994">1994</option>
                                            <option value="1993">1993</option>
                                            <option value="1992">1992</option>
                                            <option value="1991">1991</option>
                                            <option value="1990">1990</option>
                                            <option value="1989">1989</option>
                                            <option value="1988">1988</option>
                                            <option value="1987">1987</option>
                                            <option value="1986">1986</option>
                                            <option value="1985">1985</option>
                                            <option value="1984">1984</option>
                                            <option value="1983">1983</option>
                                            <option value="1982">1982</option>
                                            <option value="1981">1981</option>
                                            <option value="1980">1980</option>
                                            <option value="1979">1979</option>
                                            <option value="1978">1978</option>
                                            <option value="1977">1977</option>
                                            <option value="1976">1976</option>
                                            <option value="1975">1975</option>
                                            <option value="1974">1974</option>
                                            <option value="1973">1973</option>
                                            <option value="1972">1972</option>
                                            <option value="1971">1971</option>
                                            <option value="1970">1970</option>
                                            <option value="1969">1969</option>
                                            <option value="1968">1968</option>
                                            <option value="1967">1967</option>
                                            <option value="1966">1966</option>
                                            <option value="1965">1965</option>
                                            <option value="1964">1964</option>
                                            <option value="1963">1963</option>
                                            <option value="1962">1962</option>
                                            <option value="1961">1961</option>
                                            <option value="1960">1960</option>
                                            <option value="1959">1959</option>
                                            <option value="1958">1958</option>
                                            <option value="1957">1957</option>
                                            <option value="1956">1956</option>
                                            <option value="1955">1955</option>
                                            <option value="1954">1954</option>
                                            <option value="1953">1953</option>
                                            <option value="1952">1952</option>
                                            <option value="1951">1951</option>
                                            <option value="1950">1950</option>
                                            <option value="1949">1949</option>
                                            <option value="1948">1948</option>
                                            <option value="1947">1947</option>
                                            <option value="1946">1946</option>
                                            <option value="1945">1945</option>
                                            <option value="1944">1944</option>
                                            <option value="1943">1943</option>
                                            <option value="1942">1942</option>
                                            <option value="1941">1941</option>
                                            <option value="1940">1940</option>
                                            <option value="1939">1939</option>
                                            <option value="1938">1938</option>
                                            <option value="1937">1937</option>
                                            <option value="1936">1936</option>
                                            <option value="1935">1935</option>
                                            <option value="1934">1934</option>
                                            <option value="1933">1933</option>
                                            <option value="1932">1932</option>
                                            <option value="1931">1931</option>
                                            <option value="1930">1930</option>
                                            <option value="1929">1929</option>
                                            <option value="1928">1928</option>
                                            <option value="1927">1927</option>
                                            <option value="1926">1926</option>
                                            <option value="1925">1925</option>
                                            <option value="1924">1924</option>
                                            <option value="1923">1923</option>
                                            <option value="1922">1922</option>
                                            <option value="1921">1921</option>
                                            <option value="1920">1920</option>
                                            <option value="1919">1919</option>
                                            <option value="1918">1918</option>
                                            <option value="1917">1917</option>
                                            <option value="1916">1916</option>
                                            <option value="1915">1915</option>
                                            <option value="1914">1914</option>
                                            <option value="1913">1913</option>
                                            <option value="1912">1912</option>
                                            <option value="1911">1911</option>
                                            <option value="1910">1910</option>
                                            <option value="1909">1909</option>
                                            <option value="1908">1908</option>
                                            <option value="1907">1907</option>
                                            <option value="1906">1906</option>
                                            <option value="1905">1905</option>
                            
                                        </select>
                                    </div>


                                    {{--  <div class="form-group row has-success">
                                        <label class="col-md-3 form-control-label">Is the original artwork for sale? if yes, How much?</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control is-valid" name="price" placeholder="price" data-fv-field="type_digits">
                                            <span>NB: All prices shouls be in USD(US Dollar)</span>
                                        <small class="invalid-feedback" data-fv-validator="digits" data-fv-for="type_digits" data-fv-result="VALID" style="display: none;">The value is not digits</small></div>
                                    </div>  --}}

                                    <div class = "form-group">
                                            <p><strong>Is the original artwork for sale?</strong></p>
                                            <ul class="list-unstyled example">
                                                <li class="mb-15">
                                                    <input type="radio" value = "yes" class="icheckbox-primary" id="inputUnchecked" name="original_sale_option"
                                                    data-plugin="iCheck" data-radio-class="icheckbox_flat-blue"
                                                    />
                                                    <label for="inputUnchecked">Yes</label>
                                                </li>
    
                                                <li class="mb-15">
                                                    <input type="radio" value = "no" class="icheckbox-primary" id="inputUnchecked" name="original_sale_option"
                                                        data-plugin="iCheck" data-radio-class="icheckbox_flat-blue"
                                                    />
                                                    <label for="inputUnchecked">No</label>
                                                </li>
    
                                            </ul>
                                    </div>

                                    <div class = "form-group">
                                            <p><strong>Would you like to make it available for prints?</p>
                                            <ul class="list-unstyled example">
                                                <li class="mb-15">
                                                    <input type="radio" value = "yes" class="icheckbox-primary" id="inputUnchecked" name="print_type"
                                                    data-plugin="iCheck" data-radio-class="icheckbox_flat-blue"
                                                    />
                                                    <label for="inputUnchecked">Yes</label>
                                                </li>
    
                                                <li class="mb-15">
                                                    <input type="radio" value = "no" class="icheckbox-primary" id="inputUnchecked" name="print_type"
                                                        data-plugin="iCheck" data-radio-class="icheckbox_flat-blue"
                                                    />
                                                    <label for="inputUnchecked">No</label>
                                                </li>
    
                         
                                                    
                                            </ul>
                                    </div>

                                    <div class = "form-group">
                                            <p><strong>Are you the copyright owner of this artwork?</p>
                                            <ul class="list-unstyled example">
                                                <li class="mb-15">
                                                    <input type="radio" value = "yes" class="icheckbox-primary" id="inputUnchecked" name="copyright_option"
                                                    data-plugin="iCheck" data-radio-class="icheckbox_flat-blue"
                                                    />
                                                    <label for="inputUnchecked">Yes</label>
                                                </li>
    
                                                <li class="mb-15">
                                                    <input type="radio" value = "no" class="icheckbox-primary" id="inputUnchecked" name="copyright_option"
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
