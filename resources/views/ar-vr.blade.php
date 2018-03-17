@extends('layouts.app')

@section('styles')
<script src="https://aframe.io/releases/0.8.0/aframe.min.js"></script>
<script src="https://aframe.io/releases/0.6.1/aframe.min.js"></script>
<script src="https://cdn.rawgit.com/jeromeetienne/AR.js/1.5.0/aframe/build/aframe-ar.js"> </script>
@endsection

@section('content')

<div class="page">

    {{--  <div class="container">
        <div class="row">  --}}
            {{--  <a-scene embedded arjs>
                <a-marker preset="hiro">
                      <a-box position='0 0.5 0' material='color: black;'></a-box>
                </a-marker>
                <a-entity camera></a-entity>
              </a-scene>  --}}
        {{--  </div>
    </div>  --}}
</div>
        

@endsection

@section('scripts')
<script src="https://aframe.io/releases/0.8.0/aframe.min.js"></script>
@endsection