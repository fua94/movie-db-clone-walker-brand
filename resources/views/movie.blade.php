@extends('layout')

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<style>
  @media (max-width: 575.98px) {
    #description {
      padding: 5vh 0;
    }

    #description h1 {
      font-size: 1.75rem !important;
    }

    #description h4 {
      font-size: 1.1rem !important;
    }

    #description h2 {
      font-size: 1.5rem !important;
    }
  }
</style>

<?php $movie = (object) $movie ?>
<div class="container-fluid px-0" style="background-color: #028a79c2; padding: 0 10vw !important;">
  <div class="row mx-0">
    <div class="col-md-4 col-12 d-flex justify-content-center">
      <img class="img img-fluid" src="https://image.tmdb.org/t/p/w600_and_h900_bestv2{{$movie->poster_path}}" style="height: 75vh; padding: 3vw 0;">
    </div>
    <div id="description" class="col-md-8 col-12 d-flex flex-column justify-content-center">
      <h1 class="text-light font-weight-bold">{{$movie->original_title}} <span class="text-muted font-weight-bold">({{substr($movie->release_date, 0, 4)}})</span></h1>
      <h4 class="font-italic text-light">"{{$movie->tagline}}"</h4>
      <h2 class="text-light font-weight-bold">Overview</h2>
      <p class="text-light text-justify">{{$movie->overview}} </p>
      <span class="badge badge-success w-25">{{$movie->vote_average}}/10</span>
    </div>
  </div>
</div>

@endsection