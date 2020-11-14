@extends('layout')

@section('content')
<section class="inner_content new_index">
    <div id="media_v4" class="media discover">
      <div class="column_wrapper">
        <div class="content_wrapper wrap">
          <div class="title">
            <h2>Bienvenidos.</h2>
            <h3>Esto es una prueba para Walker Brand 😉</h3>
          </div>

          <div class="search">
            <form id="inner_search_form" action="/search?language=es" method="get" accept-charset="utf-8">
              
                <input type="hidden" name="language" value="es">
              
              <label>
                <input dir="auto" id="inner_search_v4" name="query" type="text" tabindex="1" autocorrect="off" autofill="off" autocomplete="off" spellcheck="false" placeholder="Buscar una película......" value="">
              </label>
              <input type="submit" value="Search">
            </form>
          </div>

        </div>
      </div>
    </div>
  </section>

  <section class="inner_content no_pad">
  <div class="column_wrapper">
    <div class="content_wrapper no_bottom_pad wrap">

      <div class="column">
        <div class="column_header">
          <h2>Lo más popular</h2>
          <div class="selector_wrap">
            <div class="selector">
              <div class="anchor">
                <h3><a href="#" class="no_click" data-panel="popular_scroller" data-group="in-theatres">En cines <span class="glyphicons_v2 chevron-down"></span></a></h3>
              </div>
            </div>
          </div>
        </div>

        <div id="popular_scroller" class="media discover scroller_wrap should_fade is_fading">
          <div class="column_content flex scroller">
            @foreach ($movies as $movie)
            <?php $movie = (object) $movie ?>
              <div class="card style_1">
                <div class="image">
                  <div class="wrapper">
                    <a class="image" href="{{url('/movie/'.$movie->id)}}" title="{{$movie->title}}">
                      <img class="poster lazyload lazyloaded" src="https://image.tmdb.org/t/p/w220_and_h330_face{{$movie->poster_path}}" data-loaded="true">
                    </a>
                  </div>
                </div>
                <div class="content">
                  <div class="consensus tight">
                    <div class="outer_ring">
                      <?php $moviePopularity =  (int) ($movie->vote_average * 10) ?>
                      <div class="user_score_chart 582100679251417cda0006fb" data-percent="{{$moviePopularity}}" data-track-color="#423d0f" data-bar-color="#d2d531">
                        <div class="percent">
                          <span class="icon icon-r{{$moviePopularity}}"></span>
                        </div>
                        <canvas height="34" width="34"></canvas></div>
                      </div>
                  </div>
                    <h2>
                      <a href="{{url('/movie/'.$movie->id)}}" title="{{$movie->title}}">
                      {{$movie->title}}
                      </a>
                    </h2>
                    <p>{{$movie->release_date}}</p>
                </div>

                <div class="hover 425001"></div>
              </div>
            @endforeach
            <div class="card style_1 spacer"></div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

@endsection