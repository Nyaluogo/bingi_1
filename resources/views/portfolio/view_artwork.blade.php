@extends('layouts.app')

@section('styles')
@endsection

@section('content')

<div class="page">

    <div class="container">
        <div class="row">
            <div class="col-xxl-4 col-lg-12">
                <!-- Example Tabs In The Panel -->
                <div class="panel">
            <img class="img-fluid" src="{{ $artwork->thumb }}" style="border:5px solid black" alt="...">

                </div>
            </div>
        </div>

        <div class="row">
            
            <div class="col-xxl-4 col-lg-12">
                <!-- Example Tabs In The Panel -->
                <div class="panel nav-tabs-horizontal" data-plugin="tabs">
                  <div class="panel-heading">
                    <h3 class="panel-title">{{$artwork->title}}</h3>
                  </div>
                  <ul class="nav nav-tabs nav-tabs-line" role="tablist">
                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#exampleTopHome"
                        aria-controls="exampleTopHome" role="tab" aria-expanded="true"><i class="icon wb-plugin" aria-hidden="true"></i>Description</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#exampleTopComponents"
                        aria-controls="exampleTopComponents" role="tab"><i class="icon wb-user" aria-hidden="true"></i>Artist</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#exampleTopCss" aria-controls="exampleTopCss"
                        role="tab"><i class="icon wb-tag" aria-hidden="true"></i>CSS</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#exampleTopJavascript"
                        aria-controls="exampleTopJavascript" role="tab"><i class="icon wb-cloud" aria-hidden="true"></i>JavaScript</a></li>
                    <li class="dropdown nav-item">
                      <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#" aria-haspopup="true"
                        aria-expanded="false">Dropdown </a>
                      <div class="dropdown-menu" role="menu">
                        <a class="dropdown-item" data-toggle="tab" href="#exampleTopHome" aria-controls="exampleTopHome"
                          role="tab"><i class="icon wb-plugin" aria-hidden="true"></i>Home</a>
                        <a class="dropdown-item" data-toggle="tab" href="#exampleTopComponents" aria-controls="exampleTopComponents"
                          role="tab"><i class="icon wb-user" aria-hidden="true"></i>Components</a>
                        <a class="dropdown-item" data-toggle="tab" href="#exampleTopCss" aria-controls="exampleTopCss"
                          role="tab"><i class="icon wb-tag" aria-hidden="true"></i>CSS</a>
                        <a class="dropdown-item" data-toggle="tab" href="#exampleTopJavascript" aria-controls="exampleTopJavascript"
                          role="tab"><i class="icon wb-cloud" aria-hidden="true"></i>JavaScript</a>
                      </div>
                    </li>
                  </ul>
                  <div class="panel-body">
                    <div class="tab-content">
                      <div class="tab-pane active" id="exampleTopHome" role="tabpanel">
                        Conturbamur senectutem saepti statua, putanda homini acuti dialectica levamur urbanitas
                        animadversionem mala se depulsa, magis nihilo efficeret tenetur
                        cives gloriae concursio defendit conscientiam nascuntur, refugiendi
                        defendit falsi platonem paranda metum iustioribus cognita robustus,
                        tuum omnia usque omnis temperantiam quaeri electram.
                        <div><br></div>
                        <div class="btn-group" aria-label="Button group with nested dropdown" role="group">
                            @if($artwork->price > 0)
                                <a href="{{ route('product.addToCart', ['id' => $artwork->id]) }}" class="btn btn-default " role="button"><i class="icon wb-shopping-cart" aria-hidden="true"></i></a>
                            @endif

                            @if($artwork->download_options == true)
                                <button class="btn btn-default" type="button">
                                    <a href="{{ route('product.download', ['id' => $artwork->id]) }}" class="pull-right"><i class="icon wb-download" aria-hidden="true"></i></a>
                                </button>
                            @endif

                            @if(in_array(Auth::id(),$artwork->favouriters()) == true)
                                 <a href="{{ route('unfavourite', ['id' => $artwork->id]) }}" class="btn btn-default " role="button"><i class="icon wb-star-outline" aria-hidden="true"></i>{{ count($artwork->favouriters()) }}</a>
                            @else
                                <a href="{{ route('favourite', ['id' => $artwork->id]) }}" class="btn btn-default " role="button"><i class="icon wb-star" aria-hidden="true"></i>{{ count($artwork->favouriters()) }}</a>
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

                      </div>
                      <div class="tab-pane" id="exampleTopComponents" role="tabpanel">
                        Protervi dissensio consuetudine equos publicam ingenia. Voluptatibus legendus initia
                        confirmare sententiam. Desistunt possint habeatur dediti dubio,
                        triarium is offendimur reprehenderit exercitus laudabilis motus
                        celeritas, utrum dissentio renovata, habet partus natus. Iustius
                        disserunt, quantum ennii admodum divinum mortem elaborare primum
                        autem.
                      </div>
                      <div class="tab-pane" id="exampleTopCss" role="tabpanel">
                        Incurrunt latinam, faciendi dedecora evertitur delicatissimi, afficit noctesque
                        detracta illustriora epicurum contenta rogatiuncula dolores perspecta
                        indocti, eveniunt confirmatur tractat consuevit durissimis iuvaret
                        coercendi familiarem. Dolere prima fortunae intellegamus vix
                        porro huic errorem molestum, graecos deinde effugiendorum aliter
                        appetendum afferrent eosdem.
                      </div>
                      <div class="tab-pane" id="exampleTopJavascript" role="tabpanel">
                        Dediti iniuste vitae dedecora victi, pueros vulgo adhibenda at gravis epicurus
                        alii facerem, aetatis. Rectas, splendide sensus ruinae dolendum
                        audire ipse, loca mollis manilium concordia depravate congressus
                        fruenda. Nocet magna tradere hunc grata gloriosis animus dum
                        consumere gravissimas. Erunt alii.
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Example Tabs In The Panel -->
              </div>

        </div>
    </div>
</div>
        

@endsection

@section('scripts')
@endsection