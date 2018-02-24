@extends('layouts.app')
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
                    <img src="{{Storage::url(Auth::user()->avatar)}}" alt="...">
                  </a>
                  <h4 class="profile-user">{{Auth::user()->name}}</h4>
                  <p class="profile-job">{{ $profile->type_of_artist }} | {{ $profile->area_of_specialty }}</p>
                  <p>{{ $profile->biography }}.</p>
                  
                </div>
                <div class="card-footer">
                  <div class="row no-space">
                    <div class="col-4">
                      <strong class="profile-stat-count">260</strong>
                      <span>Follower</span>
                    </div>
                    <div class="col-4">
                      <strong class="profile-stat-count">180</strong>
                      <span>Following</span>
                    </div>
                    <div class="col-4">
                      <strong class="profile-stat-count">2000</strong>
                      <span>Tweets</span>
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
                    <li class="nav-item" role="presentation"><a class="active nav-link" data-toggle="tab" href="#profile"
                        aria-controls="activities" role="tab">Profile </a></li>
                    {{--  <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#portfolio" aria-controls="profile"
                        role="tab">Portfolio</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#messages" aria-controls="messages"
                        role="tab">Messages</a></li>
                    <li class="nav-item dropdown">  --}}
                      {{--  <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#" aria-expanded="false">Menu </a>
                      <div class="dropdown-menu" role="menu">  --}}
                        {{--  <a class="active dropdown-item" data-toggle="tab" href="#activities" aria-controls="activities"
                          role="tab">Activities <span class="badge badge-pill badge-danger">5</span></a>  --}}
                        {{--  <a class="dropdown-item" data-toggle="tab" href="#profile" aria-controls="profile"
                          role="tab">Profile</a>  --}}
                        {{--  <a class="dropdown-item" data-toggle="tab" href="#messages" aria-controls="messages"
                          role="tab">Messages</a>  --}}
                      {{--  </div>  --}}
                    </li>
                  </ul>
    
                  <div class="tab-content">
                    <div class="tab-pane active animation-slide-left" id="profile" role="tabpanel">
                      
                      {{--  begin edit profile form  --}}
                      <form action="{{ route('profile.update') }}" autocomplete="off" role="form" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <!-- Example Basic Form (Form grid) -->
              <div class="example-wrap">
                    <h4 class="example-title">Update you profile</h4>
                    <div class="example">
                      <form >
                            <div class="example">
                                    <label class="form-control-label" for="inputBasicAvatar">Avatar</label>
                                    <input type="file" id="input-file-now-custom-1" data-plugin="dropify" data-default-file="{{Auth::user()->avatar}}"
                                    data-height="150" data-width="150" data-max-file-size="4M" name="avatar"/>
                                  </div>
                        <div class="row">
                          <div class="form-group col-md-6">
                            <label class="form-control-label" for="inputBasicFirstName">First Name</label>
                            <input type="text" class="form-control" id="inputBasicFirstName" name="first_name"
                              placeholder="First Name" value="{{Auth::user()->profile->first_name}}" autocomplete="off" />
                          </div>
                          <div class="form-group col-md-6">
                            <label class="form-control-label" for="inputBasicLastName">Last Name</label>
                            <input type="text" value="{{Auth::user()->profile->last_name}}" class="form-control" id="inputBasicLastName" name="last_name"
                              placeholder="Last Name" autocomplete="off" />
                          </div>
                        </div>
                        <div class="form-group col-md-12">
                                <label class="form-control-label" for="biography">Biography</label>
                            <textarea name="biography" id="biography" cols="30" rows="10" class="form-control" >{{Auth::user()->profile->biography}}</textarea>
                        </div>
                        <div class="form-group">
                          <label class="form-control-label">Gender</label>
                          <div>
                            <div class="radio-custom radio-default radio-inline">
                              <input type="radio" id="inputBasicMale" name="gender" value="1" />
                              <label for="inputBasicMale">Male</label>
                            </div>
                            <div class="radio-custom radio-default radio-inline">
                              <input type="radio" id="inputBasicFemale" name="gender" value="0" />
                              <label for="inputBasicFemale">Female</label>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                                <label for="type_of_artist">Type Of Artist</label>
                                <select class="form-control" name="type_of_artist">
                                    <option selected value="{{Auth::user()->profile->type_of_artist}}">{{Auth::user()->profile->type_of_artist}}</option>
                                  <option value="Student">Student</option>
                                  <option value="Hobbyist">Hobbyist</option>
                                  <option value="Professional">Professional</option>
                                </select>
                            </div>
        
                            <div class="form-group">
                                <label for="area_of_specialty">Area of Specialization</label>
                                <select class="form-control" name="area_of_specialty">
                                  <option selected value="{{Auth::user()->profile->area_of_specialty}}">{{Auth::user()->profile->area_of_specialty}}</option>
                                  <option value="photography">Photography</option>
                                  <option value="digital_art">Digital Art</option>
                                  <option value="design_and_interfaces">Design and Interfaces</option>
                                  <option value="traditional_art">Traditional Art</option>
                                  <option value="other">Other</option>
                                </select>
                            </div>
                        <div class="form-group">
                          <label class="form-control-label" for="inputBasicEmail">Website</label>
                          <input type="text" class="form-control" id="inputBasicEmail" name="website"
                            placeholder="Website url" autocomplete="off" />
                        </div>
                        <div class="form-group">
                          <label class="form-control-label" for="inputBasicPassword">Telephone number</label>
                          <input type="text" class="form-control" id="inputBasicPassword" name="phone_number"
                            placeholder="Telephone number" value="{{Auth::user()->profile->phone_number}}" autocomplete="off" />
                        </div>
                        
                        <div class="form-group">
                          <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                      
                    </div>
                  </div>
                  <!-- End Example Basic Form (Form grid) -->


                      </form>
                    </div>
    
                    <div class="tab-pane animation-slide-left" id="portfolio" role="tabpanel">
                      <ul class="list-group">
                        <li class="list-group-item">
                          <div class="media">
                            <div class="pr-20">
                              <a class="avatar" href="javascript:void(0)">
                                <img class="img-fluid" src="../../global/portraits/5.jpg"
                                  alt="...">
                              </a>
                            </div>
                            <div class="media-body">
                              <h5 class="mt-0 mb-5">Terrance Arnold
                                <small>posted a new blog</small>
                              </h5>
                              <small>active 14 minutes ago</small>
                              <div class="profile-brief">
                                <div class="media">
                                  <a class="pr-20">
                                    <img class="w-160" src="../../global/photos/animal-1-240x160.jpg" alt="...">
                                  </a>
                                  <div class="media-body pl-20">
                                    <h4 class="mt-0 mb-5">Getting Started</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                      elit. Integer nec odio. Praesent libero. Sed
                                      cursus ante dapibus diam. Sed nisi. Nulla quis
                                      sem at nibh elementum imperdiet. Duis sagittis
                                      ipsum. Praesent mauris.</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
    
                        <li class="list-group-item">
                          <div class="media">
                            <div class="pr-20">
                              <a class="avatar" href="javascript:void(0)">
                                <img class="img-fluid" src="../../global/portraits/2.jpg"
                                  alt="...">
                              </a>
                            </div>
                            <div class="media-body">
                              <h5 class="mt-0 mb-5">Ida Fleming
                                <small>posted an updated</small>
                              </h5>
                              <small>active 14 minutes ago</small>
                              <div class="profile-brief">“Check if it can be corrected with overflow : hidden”</div>
                            </div>
                          </div>
                        </li>
    
                        <li class="list-group-item">
                          <div class="media">
                            <div class="pr-20">
                              <a class="avatar" href="javascript:void(0)">
                                <img class="img-fluid" src="../../global/portraits/4.jpg"
                                  alt="...">
                              </a>
                            </div>
                            <div class="media-body">
                              <h5 class="mt-0 mb-5">Owen Hunt
                                <small>posted a new note</small>
                              </h5>
                              <small>active 14 minutes ago</small>
                              <div class="profile-brief">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Integer nec odio. Praesent libero. Sed cursus ante
                                dapibus diam. Sed nisi. Nulla quis sem at nibh elementum
                                imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce
                                nec tellus sed augue semper porta. Mauris massa.</div>
                            </div>
                          </div>
                        </li>
    
                        <li class="list-group-item">
                          <div class="media">
                            <div class="pr-20">
                              <a class="avatar" href="javascript:void(0)">
                                <img class="img-fluid" src="../../global/portraits/2.jpg"
                                  alt="...">
                              </a>
                            </div>
                            <div class="media-body">
                              <h5 class="mt-0 mb-5">Ida Fleming
                                <small>posted an new activity comment</small>
                              </h5>
                              <small>active 14 minutes ago</small>
                              <div class="profile-brief">Cras sit amet nibh libero, in gravida nulla. Nulla vel
                                metus.</div>
                            </div>
                          </div>
                        </li>
    
                        <li class="list-group-item">
                          <div class="media">
                            <div class="pr-20">
                              <a class="avatar" href="javascript:void(0)">
                                <img class="img-fluid" src="../../global/portraits/3.jpg"
                                  alt="...">
                              </a>
                            </div>
                            <div class="media-body">
                              <h5 class="mt-0 mb-5">Julius
                                <small>uploaded 4 photos</small>
                              </h5>
                              <small>active 14 minutes ago</small>
                              <div class="profile-brief clearfix">
                                <img class="profile-uploaded" src="../../global/photos/animal-2-240x160.jpg" alt="...">
                                <img class="profile-uploaded" src="../../global/photos/animal-3-240x160.jpg" alt="...">
                                <img class="profile-uploaded" src="../../global/photos/animal-4-240x160.jpg" alt="...">
                                <img class="profile-uploaded" src="../../global/photos/animal-5-240x160.jpg" alt="...">
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
    
                    <div class="tab-pane animation-slide-left" id="messages" role="tabpanel">
                      <ul class="list-group">
                        <li class="list-group-item">
                          <div class="media">
                            <div class="pr-20">
                              <a class="avatar" href="javascript:void(0)">
                                <img class="img-fluid" src="../../global/portraits/2.jpg"
                                  alt="...">
                              </a>
                            </div>
                            <div class="media-body">
                              <h5 class="mt-0 mb-5">Ida Fleming
                                <small>posted an updated</small>
                              </h5>
                              <small>active 14 minutes ago</small>
                              <div class="profile-brief">“Check if it can be corrected with overflow : hidden”</div>
                            </div>
                          </div>
                        </li>
    
                        <li class="list-group-item">
                          <div class="media">
                            <div class="pr-20">
                              <a class="avatar" href="javascript:void(0)">
                                <img class="img-fluid" src="../../global/portraits/5.jpg"
                                  alt="...">
                              </a>
                            </div>
                            <div class="media-body">
                              <h5 class="mt-0 mb-5">Terrance Arnold
                                <small>posted a new blog</small>
                              </h5>
                              <small>active 14 minutes ago</small>
                              <div class="profile-brief">
                                <div class="media">
                                  <a class="pr-20">
                                    <img class="w-160" src="../../global/photos/animal-1-240x160.jpg" alt="...">
                                  </a>
                                  <div class="media-body pl-20">
                                    <h4 class="mt-0 mb-5">Getting Started</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                      elit. Integer nec odio. Praesent libero. Sed
                                      cursus ante dapibus diam. Sed nisi. Nulla quis
                                      sem at nibh elementum imperdiet. Duis sagittis
                                      ipsum. Praesent mauris.</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
    
                        <li class="list-group-item">
                          <div class="media">
                            <div class="pr-20">
                              <a class="avatar" href="javascript:void(0)">
                                <img class="img-fluid" src="../../global/portraits/4.jpg"
                                  alt="...">
                              </a>
                            </div>
                            <div class="media-body">
                              <h5 class="mt-0 mb-5">Owen Hunt
                                <small>posted a new note</small>
                              </h5>
                              <small>active 14 minutes ago</small>
                              <div class="profile-brief">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Integer nec odio. Praesent libero. Sed cursus ante
                                dapibus diam. Sed nisi. Nulla quis sem at nibh elementum
                                imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce
                                nec tellus sed augue semper porta. Mauris massa.</div>
                            </div>
                          </div>
                        </li>
    
                        <li class="list-group-item">
                          <div class="media">
                            <div class="pr-20">
                              <a class="avatar" href="javascript:void(0)">
                                <img class="img-fluid" src="../../global/portraits/3.jpg"
                                  alt="...">
                              </a>
                            </div>
                            <div class="media-body">
                              <h5 class="mt-0 mb-5">Julius
                                <small>posted an updated</small>
                              </h5>
                              <small>active 14 minutes ago</small>
                              <div class="profile-brief">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Integer nec odio. Praesent libero. Sed cursus ante
                                dapibus diam.</div>
                            </div>
                          </div>
                        </li>
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