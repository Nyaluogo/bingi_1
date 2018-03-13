@extends('layouts.app')

@section('styles')
<link rel="stylesheet" href="{{ asset('assets/examples/css/pages/user.min599c.css?v4.0.2') }}">
<link rel="stylesheet" href="{{ asset('global/vendor/webui-popover/webui-popover.min599c.css?v4.0.2') }}">

{{--  comments  --}}
<link rel="stylesheet" href="{{ asset('assets/examples/css/apps/message.min599c.css?v4.0.2') }}">
@endsection

@section('content')

  <!-- Page -->
  <div class="page">
    <div class="page-content">
      <!-- Panel -->
      <div class="panel">
        <div class="panel-body">
          <form class="page-search-form" role="search">
            <div class="input-search input-search-dark">
              <i class="input-search-icon wb-search" aria-hidden="true"></i>
              <input type="text" class="form-control" id="inputSearch" name="search" placeholder="Search Users">
              <button type="button" class="input-search-close icon wb-close" aria-label="Close"></button>
            </div>
          </form>

          <div class="nav-tabs-horizontal nav-tabs-animate" data-plugin="tabs">
            <div class="dropdown page-user-sortlist">
              Order By: <a class="dropdown-toggle inline-block" data-toggle="dropdown"
                href="#" aria-expanded="false">Last Active</a>
              <div class="dropdown-menu animation-scale-up animation-top-right animation-duration-250"
                role="menu">
                <a class="active dropdown-item" href="javascript:void(0)">Last Active</a>
                <a class="dropdown-item" href="javascript:void(0)">Username</a>
                <a class="dropdown-item" href="javascript:void(0)">Location</a>
                <a class="dropdown-item" href="javascript:void(0)">Register Date</a>
              </div>
            </div>

            <ul class="nav nav-tabs nav-tabs-line" role="tablist">
              <li class="nav-item" role="presentation"><a class="active nav-link" data-toggle="tab" href="#all_contacts"
                  aria-controls="all_contacts" role="tab">All Contacts</a></li>
              <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#my_contacts" aria-controls="my_contacts"
                  role="tab">My Contacts</a></li>
              <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#google_contacts" aria-controls="google_contacts"
                  role="tab">Google Contacts</a></li>
              <li class="dropdown nav-item" role="presentation">
                <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#" aria-expanded="false">Contacts </a>
                <div class="dropdown-menu" role="menu">
                  <a class="dropdown-item" data-toggle="tab" href="#all_contacts" aria-controls="all_contacts"
                    role="tab">All Contacts</a>
                  <a class="active dropdown-item" data-toggle="tab" href="#my_contacts" aria-controls="my_contacts"
                    role="tab">My Contacts</a>
                  <a class="dropdown-item" data-toggle="tab" href="#google_contacts" aria-controls="google_contacts"
                    role="tab">Google Contacts</a>
                </div>
              </li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane animation-fade active" id="all_contacts" role="tabpanel">
                <ul class="list-group">
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
                          Herman Beck
                          <small>Last Access: 1 hour ago</small>
                        </h5>
                        <p>
                          <i class="icon icon-color wb-map" aria-hidden="true"></i>                          Street 4425 Golf Course Rd
                        </p>
                        <div>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color wb-envelope" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color wb-mobile" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-twitter" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-facebook" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-dribbble" aria-hidden="true"></i>
                        </a>
                        </div>
                      </div>
                      <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                        <button type="button" class="btn btn-outline btn-success btn-sm">Follow</button>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-0 pr-sm-20 align-self-center">
                        <div class="avatar avatar-away">
                          <img src="../../global/portraits/2.jpg" alt="...">
                          <i class="avatar avatar-busy"></i>
                        </div>
                      </div>
                      <div class="media-body align-self-center">
                        <h5 class="mt-0 mb-5">
                          Mary Adams
                          <small>Last Access: 2 hours ago</small>
                        </h5>
                        <p>
                          <i class="icon icon-color wb-map" aria-hidden="true"></i>                          Street 1391 Depaul Dr
                        </p>
                        <div>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color wb-envelope" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color wb-mobile" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-twitter" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-facebook" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-dribbble" aria-hidden="true"></i>
                        </a>
                        </div>
                      </div>
                      <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                        <button type="button" class="btn btn-outline btn-success btn-sm">Follow</button>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-0 pr-sm-20 align-self-center">
                        <div class="avatar avatar-busy">
                          <img src="../../global/portraits/3.jpg" alt="...">
                          <i class="avatar avatar-busy"></i>
                        </div>
                      </div>
                      <div class="media-body align-self-center">
                        <h5 class="mt-0 mb-5">
                          Caleb Richards
                          <small>Last Access: 3 hours ago</small>
                        </h5>
                        <p>
                          <i class="icon icon-color wb-map" aria-hidden="true"></i>                          Street 5067 E Center St
                        </p>
                        <div>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color wb-envelope" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color wb-mobile" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-twitter" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-facebook" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-dribbble" aria-hidden="true"></i>
                        </a>
                        </div>
                      </div>
                      <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                        <button type="button" class="btn btn-success btn-sm">
                          <i class="icon wb-check" aria-hidden="true"></i>Following
                        </button>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-0 pr-sm-20 align-self-center">
                        <div class="avatar avatar-off">
                          <img src="../../global/portraits/4.jpg" alt="...">
                          <i class="avatar avatar-busy"></i>
                        </div>
                      </div>
                      <div class="media-body align-self-center">
                        <h5 class="mt-0 mb-5">
                          June Lane
                          <small>Last Access: 4 hours ago</small>
                        </h5>
                        <p>
                          <i class="icon icon-color wb-map" aria-hidden="true"></i>                          Street 4788 E Little York Rd
                        </p>
                        <div>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color wb-envelope" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color wb-mobile" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-twitter" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-facebook" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-dribbble" aria-hidden="true"></i>
                        </a>
                        </div>
                      </div>
                      <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                        <button type="button" class="btn btn-success btn-sm">
                          <i class="icon wb-check" aria-hidden="true"></i>Following
                        </button>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-0 pr-sm-20 align-self-center">
                        <div class="avatar avatar-online">
                          <img src="../../global/portraits/5.jpg" alt="...">
                          <i class="avatar avatar-busy"></i>
                        </div>
                      </div>
                      <div class="media-body align-self-center">
                        <h5 class="mt-0 mb-5">
                          Edward Fletcher
                          <small>Last Access: 5 hours ago</small>
                        </h5>
                        <p>
                          <i class="icon icon-color wb-map" aria-hidden="true"></i>                          Street 2317 Cowper St
                        </p>
                        <div>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color wb-envelope" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color wb-mobile" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-twitter" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-facebook" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-dribbble" aria-hidden="true"></i>
                        </a>
                        </div>
                      </div>
                      <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                        <button type="button" class="btn btn-outline btn-success btn-sm">Follow</button>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-0 pr-sm-20 align-self-center">
                        <div class="avatar avatar-away">
                          <img src="../../global/portraits/6.jpg" alt="...">
                          <i class="avatar avatar-busy"></i>
                        </div>
                      </div>
                      <div class="media-body align-self-center">
                        <h5 class="mt-0 mb-5">
                          Crystal Bates
                          <small>Last Access: 6 hours ago</small>
                        </h5>
                        <p>
                          <i class="icon icon-color wb-map" aria-hidden="true"></i>                          Street 2689 Seventh St
                        </p>
                        <div>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color wb-envelope" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color wb-mobile" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-twitter" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-facebook" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-dribbble" aria-hidden="true"></i>
                        </a>
                        </div>
                      </div>
                      <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                        <button type="button" class="btn btn-success btn-sm">
                          <i class="icon wb-check" aria-hidden="true"></i>Following
                        </button>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-0 pr-sm-20 align-self-center">
                        <div class="avatar avatar-busy">
                          <img src="../../global/portraits/7.jpg" alt="...">
                          <i class="avatar avatar-busy"></i>
                        </div>
                      </div>
                      <div class="media-body align-self-center">
                        <h5 class="mt-0 mb-5">
                          Nathan Watts
                          <small>Last Access: 7 hours ago</small>
                        </h5>
                        <p>
                          <i class="icon icon-color wb-map" aria-hidden="true"></i>                          Street 7858 Golf Course Rd
                        </p>
                        <div>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color wb-envelope" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color wb-mobile" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-twitter" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-facebook" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-dribbble" aria-hidden="true"></i>
                        </a>
                        </div>
                      </div>
                      <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                        <button type="button" class="btn btn-success btn-sm">
                          <i class="icon wb-check" aria-hidden="true"></i>Following
                        </button>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-0 pr-sm-20 align-self-center">
                        <div class="avatar avatar-off">
                          <img src="../../global/portraits/8.jpg" alt="...">
                          <i class="avatar avatar-busy"></i>
                        </div>
                      </div>
                      <div class="media-body align-self-center">
                        <h5 class="mt-0 mb-5">
                          Heather Harper
                          <small>Last Access: 8 hours ago</small>
                        </h5>
                        <p>
                          <i class="icon icon-color wb-map" aria-hidden="true"></i>                          Street 7586 Crescent Canyon St
                        </p>
                        <div>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color wb-envelope" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color wb-mobile" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-twitter" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-facebook" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-dribbble" aria-hidden="true"></i>
                        </a>
                        </div>
                      </div>
                      <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                        <button type="button" class="btn btn-outline btn-success btn-sm">Follow</button>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-0 pr-sm-20 align-self-center">
                        <div class="avatar avatar-online">
                          <img src="../../global/portraits/9.jpg" alt="...">
                          <i class="avatar avatar-busy"></i>
                        </div>
                      </div>
                      <div class="media-body align-self-center">
                        <h5 class="mt-0 mb-5">
                          Willard Wood
                          <small>Last Access: 9 hours ago</small>
                        </h5>
                        <p>
                          <i class="icon icon-color wb-map" aria-hidden="true"></i>                          Street 3081 Sunset Blvd
                        </p>
                        <div>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color wb-envelope" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color wb-mobile" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-twitter" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-facebook" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-dribbble" aria-hidden="true"></i>
                        </a>
                        </div>
                      </div>
                      <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                        <button type="button" class="btn btn-outline btn-success btn-sm">Follow</button>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-0 pr-sm-20 align-self-center">
                        <div class="avatar avatar-away">
                          <img src="../../global/portraits/10.jpg" alt="...">
                          <i class="avatar avatar-busy"></i>
                        </div>
                      </div>
                      <div class="media-body align-self-center">
                        <h5 class="mt-0 mb-5">
                          Ronnie Ellis
                          <small>Last Access: 10 hours ago</small>
                        </h5>
                        <p>
                          <i class="icon icon-color wb-map" aria-hidden="true"></i>                          Street 8910 Fincher Rd
                        </p>
                        <div>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color wb-envelope" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color wb-mobile" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-twitter" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-facebook" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-dribbble" aria-hidden="true"></i>
                        </a>
                        </div>
                      </div>
                      <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                        <button type="button" class="btn btn-success btn-sm">
                          <i class="icon wb-check" aria-hidden="true"></i>Following
                        </button>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-0 pr-sm-20 align-self-center">
                        <div class="avatar avatar-busy">
                          <img src="../../global/portraits/11.jpg" alt="...">
                          <i class="avatar avatar-busy"></i>
                        </div>
                      </div>
                      <div class="media-body align-self-center">
                        <h5 class="mt-0 mb-5">
                          Gwendolyn Wheeler
                          <small>Last Access: 11 hours ago</small>
                        </h5>
                        <p>
                          <i class="icon icon-color wb-map" aria-hidden="true"></i>                          Street 6030 Lovers Ln
                        </p>
                        <div>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color wb-envelope" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color wb-mobile" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-twitter" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-facebook" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-dribbble" aria-hidden="true"></i>
                        </a>
                        </div>
                      </div>
                      <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                        <button type="button" class="btn btn-outline btn-success btn-sm">Follow</button>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-0 pr-sm-20 align-self-center">
                        <div class="avatar avatar-off">
                          <img src="../../global/portraits/12.jpg" alt="...">
                          <i class="avatar avatar-busy"></i>
                        </div>
                      </div>
                      <div class="media-body align-self-center">
                        <h5 class="mt-0 mb-5">
                          Daniel Russell
                          <small>Last Access: 12 hours ago</small>
                        </h5>
                        <p>
                          <i class="icon icon-color wb-map" aria-hidden="true"></i>                          Street 6240 E Cypress St
                        </p>
                        <div>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color wb-envelope" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color wb-mobile" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-twitter" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-facebook" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-dribbble" aria-hidden="true"></i>
                        </a>
                        </div>
                      </div>
                      <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                        <button type="button" class="btn btn-outline btn-success btn-sm">Follow</button>
                      </div>
                    </div>
                  </li>
                </ul>
                <nav>
                  <ul data-plugin="paginator" data-total="50" data-skin="pagination-no-border"></ul>
                </nav>
              </div>

              <div class="tab-pane animation-fade" id="my_contacts" role="tabpanel">
                <ul class="list-group">
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-0 pr-sm-20 align-self-center">
                        <div class="avatar avatar-online">
                          <img src="../../global/portraits/13.jpg" alt="...">
                          <i></i>
                        </div>
                      </div>
                      <div class="media-body align-self-center">
                        <h5 class="mt-0 mb-5">
                          Sarah Graves
                          <small>Last Access: 1 hour ago</small>
                        </h5>
                        <p>
                          <i class="icon icon-color wb-map" aria-hidden="true"></i>                          Street 4190 W Lone Mountain Rd
                        </p>
                        <div>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color wb-envelope" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color wb-mobile" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-twitter" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-facebook" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-dribbble" aria-hidden="true"></i>
                        </a>
                        </div>
                      </div>
                      <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                        <button type="button" class="btn btn-outline btn-success btn-sm">Follow</button>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-0 pr-sm-20 align-self-center">
                        <div class="avatar avatar-away">
                          <img src="../../global/portraits/14.jpg" alt="...">
                          <i></i>
                        </div>
                      </div>
                      <div class="media-body align-self-center">
                        <h5 class="mt-0 mb-5">
                          Andrew Hoffman
                          <small>Last Access: 2 hours ago</small>
                        </h5>
                        <p>
                          <i class="icon icon-color wb-map" aria-hidden="true"></i>                          Street 2849 Spring St
                        </p>
                        <div>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color wb-envelope" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color wb-mobile" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-twitter" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-facebook" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-dribbble" aria-hidden="true"></i>
                        </a>
                        </div>
                      </div>
                      <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                        <button type="button" class="btn btn-success btn-sm">
                          <i class="icon wb-check" aria-hidden="true"></i>Following
                        </button>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-0 pr-sm-20 align-self-center">
                        <div class="avatar avatar-busy">
                          <img src="../../global/portraits/15.jpg" alt="...">
                          <i></i>
                        </div>
                      </div>
                      <div class="media-body align-self-center">
                        <h5 class="mt-0 mb-5">
                          Camila Lynch
                          <small>Last Access: 3 hours ago</small>
                        </h5>
                        <p>
                          <i class="icon icon-color wb-map" aria-hidden="true"></i>                          Street 2128 W Campbell St
                        </p>
                        <div>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color wb-envelope" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color wb-mobile" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-twitter" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-facebook" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-dribbble" aria-hidden="true"></i>
                        </a>
                        </div>
                      </div>
                      <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                        <button type="button" class="btn btn-outline btn-success btn-sm">Follow</button>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-0 pr-sm-20 align-self-center">
                        <div class="avatar avatar-off">
                          <img src="../../global/portraits/16.jpg" alt="...">
                          <i></i>
                        </div>
                      </div>
                      <div class="media-body align-self-center">
                        <h5 class="mt-0 mb-5">
                          Ramon Dunn
                          <small>Last Access: 4 hours ago</small>
                        </h5>
                        <p>
                          <i class="icon icon-color wb-map" aria-hidden="true"></i>                          Street 7014 Pecan Acres Ln
                        </p>
                        <div>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color wb-envelope" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color wb-mobile" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-twitter" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-facebook" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-dribbble" aria-hidden="true"></i>
                        </a>
                        </div>
                      </div>
                      <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                        <button type="button" class="btn btn-outline btn-success btn-sm">Follow</button>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-0 pr-sm-20 align-self-center">
                        <div class="avatar avatar-online">
                          <img src="../../global/portraits/17.jpg" alt="...">
                          <i></i>
                        </div>
                      </div>
                      <div class="media-body align-self-center">
                        <h5 class="mt-0 mb-5">
                          Scott Sanders
                          <small>Last Access: 5 hours ago</small>
                        </h5>
                        <p>
                          <i class="icon icon-color wb-map" aria-hidden="true"></i>                          Street 2797 Airport St
                        </p>
                        <div>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color wb-envelope" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color wb-mobile" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-twitter" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-facebook" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-dribbble" aria-hidden="true"></i>
                        </a>
                        </div>
                      </div>
                      <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                        <button type="button" class="btn btn-success btn-sm">
                          <i class="icon wb-check" aria-hidden="true"></i>Following
                        </button>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-0 pr-sm-20 align-self-center">
                        <div class="avatar avatar-away">
                          <img src="../../global/portraits/18.jpg" alt="...">
                          <i></i>
                        </div>
                      </div>
                      <div class="media-body align-self-center">
                        <h5 class="mt-0 mb-5">
                          Nina Wells
                          <small>Last Access: 6 hours ago</small>
                        </h5>
                        <p>
                          <i class="icon icon-color wb-map" aria-hidden="true"></i>                          Street 1020 Crescent Canyon St
                        </p>
                        <div>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color wb-envelope" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color wb-mobile" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-twitter" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-facebook" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-dribbble" aria-hidden="true"></i>
                        </a>
                        </div>
                      </div>
                      <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                        <button type="button" class="btn btn-outline btn-success btn-sm">Follow</button>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-0 pr-sm-20 align-self-center">
                        <div class="avatar avatar-busy">
                          <img src="../../global/portraits/19.jpg" alt="...">
                          <i></i>
                        </div>
                      </div>
                      <div class="media-body align-self-center">
                        <h5 class="mt-0 mb-5">
                          Beverly Grant
                          <small>Last Access: 7 hours ago</small>
                        </h5>
                        <p>
                          <i class="icon icon-color wb-map" aria-hidden="true"></i>                          Street 3356 Crockett St
                        </p>
                        <div>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color wb-envelope" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color wb-mobile" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-twitter" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-facebook" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-dribbble" aria-hidden="true"></i>
                        </a>
                        </div>
                      </div>
                      <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                        <button type="button" class="btn btn-outline btn-success btn-sm">Follow</button>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-0 pr-sm-20 align-self-center">
                        <div class="avatar avatar-off">
                          <img src="../../global/portraits/20.jpg" alt="...">
                          <i></i>
                        </div>
                      </div>
                      <div class="media-body align-self-center">
                        <h5 class="mt-0 mb-5">
                          Marvin Nelson
                          <small>Last Access: 8 hours ago</small>
                        </h5>
                        <p>
                          <i class="icon icon-color wb-map" aria-hidden="true"></i>                          Street 1504 Mcgowen St
                        </p>
                        <div>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color wb-envelope" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color wb-mobile" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-twitter" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-facebook" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-dribbble" aria-hidden="true"></i>
                        </a>
                        </div>
                      </div>
                      <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                        <button type="button" class="btn btn-success btn-sm">
                          <i class="icon wb-check" aria-hidden="true"></i>Following
                        </button>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-0 pr-sm-20 align-self-center">
                        <div class="avatar avatar-online">
                          <img src="../../global/portraits/1.jpg" alt="...">
                          <i></i>
                        </div>
                      </div>
                      <div class="media-body align-self-center">
                        <h5 class="mt-0 mb-5">
                          Herman Beck
                          <small>Last Access: 9 hours ago</small>
                        </h5>
                        <p>
                          <i class="icon icon-color wb-map" aria-hidden="true"></i>                          Street 5858 Abby Park St
                        </p>
                        <div>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color wb-envelope" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color wb-mobile" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-twitter" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-facebook" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-dribbble" aria-hidden="true"></i>
                        </a>
                        </div>
                      </div>
                      <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                        <button type="button" class="btn btn-outline btn-success btn-sm">Follow</button>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-0 pr-sm-20 align-self-center">
                        <div class="avatar avatar-away">
                          <img src="../../global/portraits/2.jpg" alt="...">
                          <i></i>
                        </div>
                      </div>
                      <div class="media-body align-self-center">
                        <h5 class="mt-0 mb-5">
                          Mary Adams
                          <small>Last Access: 10 hours ago</small>
                        </h5>
                        <p>
                          <i class="icon icon-color wb-map" aria-hidden="true"></i>                          Street 8901 Genschaw Rd
                        </p>
                        <div>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color wb-envelope" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color wb-mobile" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-twitter" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-facebook" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-dribbble" aria-hidden="true"></i>
                        </a>
                        </div>
                      </div>
                      <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                        <button type="button" class="btn btn-outline btn-success btn-sm">Follow</button>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-0 pr-sm-20 align-self-center">
                        <div class="avatar avatar-busy">
                          <img src="../../global/portraits/3.jpg" alt="...">
                          <i></i>
                        </div>
                      </div>
                      <div class="media-body align-self-center">
                        <h5 class="mt-0 mb-5">
                          Caleb Richards
                          <small>Last Access: 11 hours ago</small>
                        </h5>
                        <p>
                          <i class="icon icon-color wb-map" aria-hidden="true"></i>                          Street 7715 Washington Ave
                        </p>
                        <div>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color wb-envelope" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color wb-mobile" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-twitter" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-facebook" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-dribbble" aria-hidden="true"></i>
                        </a>
                        </div>
                      </div>
                      <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                        <button type="button" class="btn btn-outline btn-success btn-sm">Follow</button>
                      </div>
                    </div>
                  </li>
                </ul>
                <nav>
                  <ul data-plugin="paginator" data-total="50" data-skin="pagination-no-border"></ul>
                </nav>
              </div>

              <div class="tab-pane animation-fade" id="google_contacts" role="tabpanel">
                <ul class="list-group">
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-0 pr-sm-20 align-self-center">
                        <div class="avatar avatar-online">
                          <img src="../../global/portraits/8.jpg" alt="...">
                          <i></i>
                        </div>
                      </div>
                      <div class="media-body align-self-center">
                        <h5 class="mt-0 mb-5">
                          Heather Harper
                          <small>Last Access: 1 hour ago</small>
                        </h5>
                        <p>
                          <i class="icon icon-color wb-map" aria-hidden="true"></i>                          Street 4393 Kelly Dr
                        </p>
                        <div>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color wb-envelope" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color wb-mobile" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-twitter" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-facebook" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-dribbble" aria-hidden="true"></i>
                        </a>
                        </div>
                      </div>
                      <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                        <button type="button" class="btn btn-success btn-sm">
                          <i class="icon wb-check" aria-hidden="true"></i>Following
                        </button>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-0 pr-sm-20 align-self-center">
                        <div class="avatar avatar-away">
                          <img src="../../global/portraits/9.jpg" alt="...">
                          <i></i>
                        </div>
                      </div>
                      <div class="media-body align-self-center">
                        <h5 class="mt-0 mb-5">
                          Willard Wood
                          <small>Last Access: 2 hours ago</small>
                        </h5>
                        <p>
                          <i class="icon icon-color wb-map" aria-hidden="true"></i>                          Street 6524 W Craig Rd
                        </p>
                        <div>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color wb-envelope" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color wb-mobile" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-twitter" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-facebook" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-dribbble" aria-hidden="true"></i>
                        </a>
                        </div>
                      </div>
                      <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                        <button type="button" class="btn btn-success btn-sm">
                          <i class="icon wb-check" aria-hidden="true"></i>Following
                        </button>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-0 pr-sm-20 align-self-center">
                        <div class="avatar avatar-busy">
                          <img src="../../global/portraits/10.jpg" alt="...">
                          <i></i>
                        </div>
                      </div>
                      <div class="media-body align-self-center">
                        <h5 class="mt-0 mb-5">
                          Ronnie Ellis
                          <small>Last Access: 3 hours ago</small>
                        </h5>
                        <p>
                          <i class="icon icon-color wb-map" aria-hidden="true"></i>                          Street 3045 Locust Rd
                        </p>
                        <div>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color wb-envelope" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color wb-mobile" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-twitter" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-facebook" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-dribbble" aria-hidden="true"></i>
                        </a>
                        </div>
                      </div>
                      <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                        <button type="button" class="btn btn-outline btn-success btn-sm">Follow</button>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-0 pr-sm-20 align-self-center">
                        <div class="avatar avatar-off">
                          <img src="../../global/portraits/11.jpg" alt="...">
                          <i></i>
                        </div>
                      </div>
                      <div class="media-body align-self-center">
                        <h5 class="mt-0 mb-5">
                          Gwendolyn Wheeler
                          <small>Last Access: 4 hours ago</small>
                        </h5>
                        <p>
                          <i class="icon icon-color wb-map" aria-hidden="true"></i>                          Street 4090 Rudder Rd
                        </p>
                        <div>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color wb-envelope" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color wb-mobile" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-twitter" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-facebook" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-dribbble" aria-hidden="true"></i>
                        </a>
                        </div>
                      </div>
                      <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                        <button type="button" class="btn btn-outline btn-success btn-sm">Follow</button>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-0 pr-sm-20 align-self-center">
                        <div class="avatar avatar-online">
                          <img src="../../global/portraits/12.jpg" alt="...">
                          <i></i>
                        </div>
                      </div>
                      <div class="media-body align-self-center">
                        <h5 class="mt-0 mb-5">
                          Daniel Russell
                          <small>Last Access: 5 hours ago</small>
                        </h5>
                        <p>
                          <i class="icon icon-color wb-map" aria-hidden="true"></i>                          Street 5899 Sable St
                        </p>
                        <div>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color wb-envelope" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color wb-mobile" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-twitter" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-facebook" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-dribbble" aria-hidden="true"></i>
                        </a>
                        </div>
                      </div>
                      <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                        <button type="button" class="btn btn-success btn-sm">
                          <i class="icon wb-check" aria-hidden="true"></i>Following
                        </button>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-0 pr-sm-20 align-self-center">
                        <div class="avatar avatar-away">
                          <img src="../../global/portraits/13.jpg" alt="...">
                          <i></i>
                        </div>
                      </div>
                      <div class="media-body align-self-center">
                        <h5 class="mt-0 mb-5">
                          Sarah Graves
                          <small>Last Access: 6 hours ago</small>
                        </h5>
                        <p>
                          <i class="icon icon-color wb-map" aria-hidden="true"></i>                          Street 8954 Hamilton Ave
                        </p>
                        <div>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color wb-envelope" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color wb-mobile" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-twitter" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-facebook" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-dribbble" aria-hidden="true"></i>
                        </a>
                        </div>
                      </div>
                      <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                        <button type="button" class="btn btn-outline btn-success btn-sm">Follow</button>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-0 pr-sm-20 align-self-center">
                        <div class="avatar avatar-busy">
                          <img src="../../global/portraits/14.jpg" alt="...">
                          <i></i>
                        </div>
                      </div>
                      <div class="media-body align-self-center">
                        <h5 class="mt-0 mb-5">
                          Andrew Hoffman
                          <small>Last Access: 7 hours ago</small>
                        </h5>
                        <p>
                          <i class="icon icon-color wb-map" aria-hidden="true"></i>                          Street 6056 Airport Ave
                        </p>
                        <div>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color wb-envelope" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color wb-mobile" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-twitter" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-facebook" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-dribbble" aria-hidden="true"></i>
                        </a>
                        </div>
                      </div>
                      <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                        <button type="button" class="btn btn-outline btn-success btn-sm">Follow</button>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-0 pr-sm-20 align-self-center">
                        <div class="avatar avatar-off">
                          <img src="../../global/portraits/15.jpg" alt="...">
                          <i></i>
                        </div>
                      </div>
                      <div class="media-body align-self-center">
                        <h5 class="mt-0 mb-5">
                          Camila Lynch
                          <small>Last Access: 8 hours ago</small>
                        </h5>
                        <p>
                          <i class="icon icon-color wb-map" aria-hidden="true"></i>                          Street 7096 Fourth St
                        </p>
                        <div>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color wb-envelope" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color wb-mobile" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-twitter" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-facebook" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-dribbble" aria-hidden="true"></i>
                        </a>
                        </div>
                      </div>
                      <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                        <button type="button" class="btn btn-success btn-sm">
                          <i class="icon wb-check" aria-hidden="true"></i>Following
                        </button>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-0 pr-sm-20 align-self-center">
                        <div class="avatar avatar-online">
                          <img src="../../global/portraits/16.jpg" alt="...">
                          <i></i>
                        </div>
                      </div>
                      <div class="media-body align-self-center">
                        <h5 class="mt-0 mb-5">
                          Ramon Dunn
                          <small>Last Access: 9 hours ago</small>
                        </h5>
                        <p>
                          <i class="icon icon-color wb-map" aria-hidden="true"></i>                          Street 6580 Pinecrest St
                        </p>
                        <div>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color wb-envelope" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color wb-mobile" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-twitter" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-facebook" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-dribbble" aria-hidden="true"></i>
                        </a>
                        </div>
                      </div>
                      <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                        <button type="button" class="btn btn-outline btn-success btn-sm">Follow</button>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-0 pr-sm-20 align-self-center">
                        <div class="avatar avatar-away">
                          <img src="../../global/portraits/17.jpg" alt="...">
                          <i></i>
                        </div>
                      </div>
                      <div class="media-body align-self-center">
                        <h5 class="mt-0 mb-5">
                          Scott Sanders
                          <small>Last Access: 10 hours ago</small>
                        </h5>
                        <p>
                          <i class="icon icon-color wb-map" aria-hidden="true"></i>                          Street 2674 Second St
                        </p>
                        <div>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color wb-envelope" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color wb-mobile" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-twitter" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-facebook" aria-hidden="true"></i>
                        </a>
                          <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-dribbble" aria-hidden="true"></i>
                        </a>
                        </div>
                      </div>
                      <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                        <button type="button" class="btn btn-outline btn-success btn-sm">Follow</button>
                      </div>
                    </div>
                  </li>
                </ul>
                <nav>
                  <ul data-plugin="paginator" data-total="50" data-skin="pagination-no-border"></ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Panel -->
    </div>
  </div>
  <!-- End Page -->

@endsection

@section('scripts')

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
<script src="{{ asset('global/js/Plugin/tabs.min599c.js?v4.0.2') }}"></script>
<script src="{{ asset('global/js/Plugin/responsive-tabs.min599c.js?v4.0.2') }}"></script>
<script src="{{ asset('global/vendor/aspaginator/jquery-asPaginator.min599c.js?v4.0.2') }}"></script>

@endsection