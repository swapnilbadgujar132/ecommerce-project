
@extends('layouts.about')

@section('about')
<section>
    <div class="container">
      <header class="text-center">
        <h1>About Us</h1>
        <h2>
          <p class="">{{$data->title}}</p>
        </h2>
      </header>

      <div class="row align-items-center about-row">
        <div class="col-md-6">
          <div style="height: 300px; width: 300px;">
            <img src="frontend/img/about/{{$data->information_img}}" alt="" class="img-fluid">
          </div>
        </div>

        <div class="col-md-6">
          <h2 class=""><a href="#">Welcome to PrintProArtistry</a></h2>
          <p>{{$data->information}}</p>
        </div>
      </div>

      <br>
      
      <div class="row">
        <div class="col-md-4">
          <div class="">
            <div style="height: 300px; width: 300px;">
              <img src="frontend/img/about/{{$data->mission_img}}" alt="" class="img-fluid">
            </div>
            <h2 class="title"><a href="#">Mission</a></h2>
            <p>{{$data->mission}}</p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="about-col">
            <div style="height: 300px; width: 300px;">
              <img src="frontend/img/about/{{$data->vision_img}}" alt="" class="img-fluid">
            </div>
            <h2 class=""><a href="#">Vision</a></h2>
            <p>{{$data->vision}}</p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="">
            <div style="height: 300px; width: 300px;">
              <img src="frontend/img/about/{{$data->objective_img}}" alt="" class="img-fluid">
            </div>
            <h2 class="title"><a href="#">Objective</a></h2>
            <p>{{$data->objective}}</p>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection