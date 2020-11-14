@extends('layout')

@section('content')
<section class="inner_content new_index">
    <div id="media_v4" class="media discover">
      <div class="column_wrapper">
        <div class="content_wrapper wrap">
          <div class="title">
            <h2>Bienvenidos.</h2>
            <h3>Millones de películas, programas de televisión y personas por descubrir. Explora ahora.</h3>
          </div>

          <div class="search">
            <form id="inner_search_form" action="/search?language=es" method="get" accept-charset="utf-8">
              
                <input type="hidden" name="language" value="es">
              
              <label>
                <input dir="auto" id="inner_search_v4" name="query" type="text" tabindex="1" autocorrect="off" autofill="off" autocomplete="off" spellcheck="false" placeholder="Buscar una película, programa de televisión, persona......" value="">
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
              <div class="anchor selected">
                <h3><a href="#" class="no_click" data-panel="popular_scroller" data-group="streaming">En streaming <span class="glyphicons_v2 chevron-down"></span></a></h3>
                <div class="background"></div>
              </div>

              <div class="anchor ">
                <h3><a href="#" class="no_click" data-panel="popular_scroller" data-group="on-tv">En televisión <span class="glyphicons_v2 chevron-down"></span></a></h3>
                <div class="background hide"></div>
              </div>

              <div class="anchor ">
                <h3><a href="#" class="no_click" data-panel="popular_scroller" data-group="for-rent">En alquiler <span class="glyphicons_v2 chevron-down"></span></a></h3>
              </div>

              <div class="anchor">
                <h3><a href="#" class="no_click" data-panel="popular_scroller" data-group="in-theatres">En cines <span class="glyphicons_v2 chevron-down"></span></a></h3>
              </div>
            </div>
          </div>
        </div>

        <div id="popular_scroller" class="media discover scroller_wrap should_fade is_fading">
          <div class="column_content flex scroller">
              <div class="card style_1 loading">
    <div class="image">
      <div class="wrapper">
          
    <div class="glyphicons_v2 picture grey poster no_image_holder w160_and_h90"></div>
  

      </div>
    </div>
    <div class="content">
      <div class="consensus tight">
        <div class="outer_ring">
          <div class="user_score_chart">
            <div class="percent">
              <span class="icon icon-rNR"></span>
            </div>
          </div>
        </div>
      </div>

      <h2></h2>
      <p></p>
    </div>
  </div>
  <div class="card style_1 loading">
    <div class="image">
      <div class="wrapper">
          
    <div class="glyphicons_v2 picture grey poster no_image_holder w160_and_h90"></div>
  

      </div>
    </div>
    <div class="content">
      <div class="consensus tight">
        <div class="outer_ring">
          <div class="user_score_chart">
            <div class="percent">
              <span class="icon icon-rNR"></span>
            </div>
          </div>
        </div>
      </div>

      <h2></h2>
      <p></p>
    </div>
  </div>
  <div class="card style_1 loading">
    <div class="image">
      <div class="wrapper">
          
    <div class="glyphicons_v2 picture grey poster no_image_holder w160_and_h90"></div>
  

      </div>
    </div>
    <div class="content">
      <div class="consensus tight">
        <div class="outer_ring">
          <div class="user_score_chart">
            <div class="percent">
              <span class="icon icon-rNR"></span>
            </div>
          </div>
        </div>
      </div>

      <h2></h2>
      <p></p>
    </div>
  </div>
  <div class="card style_1 loading">
    <div class="image">
      <div class="wrapper">
          
    <div class="glyphicons_v2 picture grey poster no_image_holder w160_and_h90"></div>
  

      </div>
    </div>
    <div class="content">
      <div class="consensus tight">
        <div class="outer_ring">
          <div class="user_score_chart">
            <div class="percent">
              <span class="icon icon-rNR"></span>
            </div>
          </div>
        </div>
      </div>

      <h2></h2>
      <p></p>
    </div>
  </div>
  <div class="card style_1 loading">
    <div class="image">
      <div class="wrapper">
          
    <div class="glyphicons_v2 picture grey poster no_image_holder w160_and_h90"></div>
  

      </div>
    </div>
    <div class="content">
      <div class="consensus tight">
        <div class="outer_ring">
          <div class="user_score_chart">
            <div class="percent">
              <span class="icon icon-rNR"></span>
            </div>
          </div>
        </div>
      </div>

      <h2></h2>
      <p></p>
    </div>
  </div>
  <div class="card style_1 loading">
    <div class="image">
      <div class="wrapper">
          
    <div class="glyphicons_v2 picture grey poster no_image_holder w160_and_h90"></div>
  

      </div>
    </div>
    <div class="content">
      <div class="consensus tight">
        <div class="outer_ring">
          <div class="user_score_chart">
            <div class="percent">
              <span class="icon icon-rNR"></span>
            </div>
          </div>
        </div>
      </div>

      <h2></h2>
      <p></p>
    </div>
  </div>
  <div class="card style_1 loading">
    <div class="image">
      <div class="wrapper">
          
    <div class="glyphicons_v2 picture grey poster no_image_holder w160_and_h90"></div>
  

      </div>
    </div>
    <div class="content">
      <div class="consensus tight">
        <div class="outer_ring">
          <div class="user_score_chart">
            <div class="percent">
              <span class="icon icon-rNR"></span>
            </div>
          </div>
        </div>
      </div>

      <h2></h2>
      <p></p>
    </div>
  </div>
  <div class="card style_1 loading">
    <div class="image">
      <div class="wrapper">
          
    <div class="glyphicons_v2 picture grey poster no_image_holder w160_and_h90"></div>
  

      </div>
    </div>
    <div class="content">
      <div class="consensus tight">
        <div class="outer_ring">
          <div class="user_score_chart">
            <div class="percent">
              <span class="icon icon-rNR"></span>
            </div>
          </div>
        </div>
      </div>

      <h2></h2>
      <p></p>
    </div>
  </div>
  <div class="card style_1 loading">
    <div class="image">
      <div class="wrapper">
          
    <div class="glyphicons_v2 picture grey poster no_image_holder w160_and_h90"></div>
  

      </div>
    </div>
    <div class="content">
      <div class="consensus tight">
        <div class="outer_ring">
          <div class="user_score_chart">
            <div class="percent">
              <span class="icon icon-rNR"></span>
            </div>
          </div>
        </div>
      </div>

      <h2></h2>
      <p></p>
    </div>
  </div>
  <div class="card style_1 loading">
    <div class="image">
      <div class="wrapper">
          
    <div class="glyphicons_v2 picture grey poster no_image_holder w160_and_h90"></div>
  

      </div>
    </div>
    <div class="content">
      <div class="consensus tight">
        <div class="outer_ring">
          <div class="user_score_chart">
            <div class="percent">
              <span class="icon icon-rNR"></span>
            </div>
          </div>
        </div>
      </div>

      <h2></h2>
      <p></p>
    </div>
  </div>
<div class="card style_1 spacer"></div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

  <section class="inner_content no_pad">
    <div class="column_wrapper">
      <div class="content_wrapper wrap no_bottom_pad">

        <div class="column">
          <div class="column_header">
            <h2>Ver gratis</h2>

            <div class="selector_wrap">
              <div class="selector">
                <div class="anchor selected">
                  <h3><a href="#" class="no_click" data-panel="free_scroller" data-group="movie">Películas <span class="glyphicons_v2 chevron-down"></span></a></h3>
                  <div class="background"></div>
                </div>

                <div class="anchor">
                  <h3><a href="#" class="no_click" data-panel="free_scroller" data-group="tv">Televisión <span class="glyphicons_v2 chevron-down"></span></a></h3>
                </div>
              </div>
            </div>
          </div>

          <div id="free_scroller" class="media discover scroller_wrap should_fade is_fading">
            <div class="column_content flex scroller">
                <div class="card style_1 loading">
    <div class="image">
      <div class="wrapper">
          
    <div class="glyphicons_v2 picture grey poster no_image_holder w160_and_h90"></div>
  

      </div>
    </div>
    <div class="content">
      <div class="consensus tight">
        <div class="outer_ring">
          <div class="user_score_chart">
            <div class="percent">
              <span class="icon icon-rNR"></span>
            </div>
          </div>
        </div>
      </div>

      <h2></h2>
      <p></p>
    </div>
  </div>
  <div class="card style_1 loading">
    <div class="image">
      <div class="wrapper">
          
    <div class="glyphicons_v2 picture grey poster no_image_holder w160_and_h90"></div>
  

      </div>
    </div>
    <div class="content">
      <div class="consensus tight">
        <div class="outer_ring">
          <div class="user_score_chart">
            <div class="percent">
              <span class="icon icon-rNR"></span>
            </div>
          </div>
        </div>
      </div>

      <h2></h2>
      <p></p>
    </div>
  </div>
  <div class="card style_1 loading">
    <div class="image">
      <div class="wrapper">
          
    <div class="glyphicons_v2 picture grey poster no_image_holder w160_and_h90"></div>
  

      </div>
    </div>
    <div class="content">
      <div class="consensus tight">
        <div class="outer_ring">
          <div class="user_score_chart">
            <div class="percent">
              <span class="icon icon-rNR"></span>
            </div>
          </div>
        </div>
      </div>

      <h2></h2>
      <p></p>
    </div>
  </div>
  <div class="card style_1 loading">
    <div class="image">
      <div class="wrapper">
          
    <div class="glyphicons_v2 picture grey poster no_image_holder w160_and_h90"></div>
  

      </div>
    </div>
    <div class="content">
      <div class="consensus tight">
        <div class="outer_ring">
          <div class="user_score_chart">
            <div class="percent">
              <span class="icon icon-rNR"></span>
            </div>
          </div>
        </div>
      </div>

      <h2></h2>
      <p></p>
    </div>
  </div>
  <div class="card style_1 loading">
    <div class="image">
      <div class="wrapper">
          
    <div class="glyphicons_v2 picture grey poster no_image_holder w160_and_h90"></div>
  

      </div>
    </div>
    <div class="content">
      <div class="consensus tight">
        <div class="outer_ring">
          <div class="user_score_chart">
            <div class="percent">
              <span class="icon icon-rNR"></span>
            </div>
          </div>
        </div>
      </div>

      <h2></h2>
      <p></p>
    </div>
  </div>
  <div class="card style_1 loading">
    <div class="image">
      <div class="wrapper">
          
    <div class="glyphicons_v2 picture grey poster no_image_holder w160_and_h90"></div>
  

      </div>
    </div>
    <div class="content">
      <div class="consensus tight">
        <div class="outer_ring">
          <div class="user_score_chart">
            <div class="percent">
              <span class="icon icon-rNR"></span>
            </div>
          </div>
        </div>
      </div>

      <h2></h2>
      <p></p>
    </div>
  </div>
  <div class="card style_1 loading">
    <div class="image">
      <div class="wrapper">
          
    <div class="glyphicons_v2 picture grey poster no_image_holder w160_and_h90"></div>
  

      </div>
    </div>
    <div class="content">
      <div class="consensus tight">
        <div class="outer_ring">
          <div class="user_score_chart">
            <div class="percent">
              <span class="icon icon-rNR"></span>
            </div>
          </div>
        </div>
      </div>

      <h2></h2>
      <p></p>
    </div>
  </div>
  <div class="card style_1 loading">
    <div class="image">
      <div class="wrapper">
          
    <div class="glyphicons_v2 picture grey poster no_image_holder w160_and_h90"></div>
  

      </div>
    </div>
    <div class="content">
      <div class="consensus tight">
        <div class="outer_ring">
          <div class="user_score_chart">
            <div class="percent">
              <span class="icon icon-rNR"></span>
            </div>
          </div>
        </div>
      </div>

      <h2></h2>
      <p></p>
    </div>
  </div>
  <div class="card style_1 loading">
    <div class="image">
      <div class="wrapper">
          
    <div class="glyphicons_v2 picture grey poster no_image_holder w160_and_h90"></div>
  

      </div>
    </div>
    <div class="content">
      <div class="consensus tight">
        <div class="outer_ring">
          <div class="user_score_chart">
            <div class="percent">
              <span class="icon icon-rNR"></span>
            </div>
          </div>
        </div>
      </div>

      <h2></h2>
      <p></p>
    </div>
  </div>
  <div class="card style_1 loading">
    <div class="image">
      <div class="wrapper">
          
    <div class="glyphicons_v2 picture grey poster no_image_holder w160_and_h90"></div>
  

      </div>
    </div>
    <div class="content">
      <div class="consensus tight">
        <div class="outer_ring">
          <div class="user_score_chart">
            <div class="percent">
              <span class="icon icon-rNR"></span>
            </div>
          </div>
        </div>
      </div>

      <h2></h2>
      <p></p>
    </div>
  </div>
<div class="card style_1 spacer"></div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

<section class="inner_content bg_image no_pad video">
  <div class="column_wrapper">

    <div id="trailer_scroller" class="media discover scroller_wrap should_fade is_fading">
      <div class="content_wrapper wrap no_bottom_pad">

        <div class="column">
          <div class="column_header">
            <h2>Últimos avances</h2>

            <div class="selector_wrap">
              <div class="selector">
                <div class="anchor selected">
                  <h3><a href="#" class="no_click" data-panel="trailer_scroller" data-group="streaming">En streaming <span class="glyphicons_v2 chevron-down"></span></a></h3>
                  <div class="background"></div>
                </div>

                <div class="anchor ">
                  <h3><a href="#" class="no_click" data-panel="trailer_scroller" data-group="on-tv">En televisión <span class="glyphicons_v2 chevron-down"></a></h3>
                  <div class="background hide"></div>
                </div>

                <div class="anchor ">
                  <h3><a href="#" class="no_click" data-panel="trailer_scroller" data-group="for-rent">En alquiler <span class="glyphicons_v2 chevron-down"></a></h3>
                </div>

                <div class="anchor">
                  <h3><a href="#" class="no_click" data-panel="trailer_scroller" data-group="in-theatres">En cines <span class="glyphicons_v2 chevron-down"></a></h3>
                </div>
              </div>
            </div>
          </div>

          <div class="column_content flex scroller">
              <div class="card video style_2 loading">
    <div class="image">
      <div class="wrapper">
          
    <div class="glyphicons_v2 picture grey backdrop no_image_holder "></div>
  

      </div>
    </div>
    <div class="content">
      <h2></h2>
      <h3></h3>
    </div>
  </div>
  <div class="card video style_2 loading">
    <div class="image">
      <div class="wrapper">
          
    <div class="glyphicons_v2 picture grey backdrop no_image_holder "></div>
  

      </div>
    </div>
    <div class="content">
      <h2></h2>
      <h3></h3>
    </div>
  </div>
  <div class="card video style_2 loading">
    <div class="image">
      <div class="wrapper">
          
    <div class="glyphicons_v2 picture grey backdrop no_image_holder "></div>
  

      </div>
    </div>
    <div class="content">
      <h2></h2>
      <h3></h3>
    </div>
  </div>
  <div class="card video style_2 loading">
    <div class="image">
      <div class="wrapper">
          
    <div class="glyphicons_v2 picture grey backdrop no_image_holder "></div>
  

      </div>
    </div>
    <div class="content">
      <h2></h2>
      <h3></h3>
    </div>
  </div>
  <div class="card video style_2 loading">
    <div class="image">
      <div class="wrapper">
          
    <div class="glyphicons_v2 picture grey backdrop no_image_holder "></div>
  

      </div>
    </div>
    <div class="content">
      <h2></h2>
      <h3></h3>
    </div>
  </div>
  <div class="card video style_2 loading">
    <div class="image">
      <div class="wrapper">
          
    <div class="glyphicons_v2 picture grey backdrop no_image_holder "></div>
  

      </div>
    </div>
    <div class="content">
      <h2></h2>
      <h3></h3>
    </div>
  </div>
  <div class="card video style_2 loading">
    <div class="image">
      <div class="wrapper">
          
    <div class="glyphicons_v2 picture grey backdrop no_image_holder "></div>
  

      </div>
    </div>
    <div class="content">
      <h2></h2>
      <h3></h3>
    </div>
  </div>
  <div class="card video style_2 loading">
    <div class="image">
      <div class="wrapper">
          
    <div class="glyphicons_v2 picture grey backdrop no_image_holder "></div>
  

      </div>
    </div>
    <div class="content">
      <h2></h2>
      <h3></h3>
    </div>
  </div>
  <div class="card video style_2 loading">
    <div class="image">
      <div class="wrapper">
          
    <div class="glyphicons_v2 picture grey backdrop no_image_holder "></div>
  

      </div>
    </div>
    <div class="content">
      <h2></h2>
      <h3></h3>
    </div>
  </div>
  <div class="card video style_2 loading">
    <div class="image">
      <div class="wrapper">
          
    <div class="glyphicons_v2 picture grey backdrop no_image_holder "></div>
  

      </div>
    </div>
    <div class="content">
      <h2></h2>
      <h3></h3>
    </div>
  </div>
<div class="card video style_2 spacer"></div>
          </div>

        </div>

      </div>
    </div>
  </div>
</section>

<section class="inner_content trending no_pad">
  <div class="column_wrapper">
    <div class="content_wrapper wrap no_bottom_pad">

      <div class="column">
        <div class="column_header">
          <h2>Tendencias</h2>

          <div class="selector_wrap">
            <div class="selector">
              <div class="anchor selected">
                <h3><a href="#" class="no_click" data-panel="trending_scroller" data-group="today">Hoy <span class="glyphicons_v2 chevron-down"></span></a></h3>
                <div class="background"></div>
              </div>

              <div class="anchor">
                <h3><a href="#" class="no_click" data-panel="trending_scroller" data-group="this-week">Esta semana <span class="glyphicons_v2 chevron-down"></span></a></h3>
              </div>
            </div>
          </div>
        </div>

        <div id="trending_scroller" class="media discover scroller_wrap should_fade is_fading">
          <div class="column_content flex scroller">
              <div class="card style_1 loading">
    <div class="image">
      <div class="wrapper">
          
    <div class="glyphicons_v2 picture grey poster no_image_holder w160_and_h90"></div>
  

      </div>
    </div>
    <div class="content">
      <div class="consensus tight">
        <div class="outer_ring">
          <div class="user_score_chart">
            <div class="percent">
              <span class="icon icon-rNR"></span>
            </div>
          </div>
        </div>
      </div>

      <h2></h2>
      <p></p>
    </div>
  </div>
  <div class="card style_1 loading">
    <div class="image">
      <div class="wrapper">
          
    <div class="glyphicons_v2 picture grey poster no_image_holder w160_and_h90"></div>
  

      </div>
    </div>
    <div class="content">
      <div class="consensus tight">
        <div class="outer_ring">
          <div class="user_score_chart">
            <div class="percent">
              <span class="icon icon-rNR"></span>
            </div>
          </div>
        </div>
      </div>

      <h2></h2>
      <p></p>
    </div>
  </div>
  <div class="card style_1 loading">
    <div class="image">
      <div class="wrapper">
          
    <div class="glyphicons_v2 picture grey poster no_image_holder w160_and_h90"></div>
  

      </div>
    </div>
    <div class="content">
      <div class="consensus tight">
        <div class="outer_ring">
          <div class="user_score_chart">
            <div class="percent">
              <span class="icon icon-rNR"></span>
            </div>
          </div>
        </div>
      </div>

      <h2></h2>
      <p></p>
    </div>
  </div>
  <div class="card style_1 loading">
    <div class="image">
      <div class="wrapper">
          
    <div class="glyphicons_v2 picture grey poster no_image_holder w160_and_h90"></div>
  

      </div>
    </div>
    <div class="content">
      <div class="consensus tight">
        <div class="outer_ring">
          <div class="user_score_chart">
            <div class="percent">
              <span class="icon icon-rNR"></span>
            </div>
          </div>
        </div>
      </div>

      <h2></h2>
      <p></p>
    </div>
  </div>
  <div class="card style_1 loading">
    <div class="image">
      <div class="wrapper">
          
    <div class="glyphicons_v2 picture grey poster no_image_holder w160_and_h90"></div>
  

      </div>
    </div>
    <div class="content">
      <div class="consensus tight">
        <div class="outer_ring">
          <div class="user_score_chart">
            <div class="percent">
              <span class="icon icon-rNR"></span>
            </div>
          </div>
        </div>
      </div>

      <h2></h2>
      <p></p>
    </div>
  </div>
  <div class="card style_1 loading">
    <div class="image">
      <div class="wrapper">
          
    <div class="glyphicons_v2 picture grey poster no_image_holder w160_and_h90"></div>
  

      </div>
    </div>
    <div class="content">
      <div class="consensus tight">
        <div class="outer_ring">
          <div class="user_score_chart">
            <div class="percent">
              <span class="icon icon-rNR"></span>
            </div>
          </div>
        </div>
      </div>

      <h2></h2>
      <p></p>
    </div>
  </div>
  <div class="card style_1 loading">
    <div class="image">
      <div class="wrapper">
          
    <div class="glyphicons_v2 picture grey poster no_image_holder w160_and_h90"></div>
  

      </div>
    </div>
    <div class="content">
      <div class="consensus tight">
        <div class="outer_ring">
          <div class="user_score_chart">
            <div class="percent">
              <span class="icon icon-rNR"></span>
            </div>
          </div>
        </div>
      </div>

      <h2></h2>
      <p></p>
    </div>
  </div>
  <div class="card style_1 loading">
    <div class="image">
      <div class="wrapper">
          
    <div class="glyphicons_v2 picture grey poster no_image_holder w160_and_h90"></div>
  

      </div>
    </div>
    <div class="content">
      <div class="consensus tight">
        <div class="outer_ring">
          <div class="user_score_chart">
            <div class="percent">
              <span class="icon icon-rNR"></span>
            </div>
          </div>
        </div>
      </div>

      <h2></h2>
      <p></p>
    </div>
  </div>
  <div class="card style_1 loading">
    <div class="image">
      <div class="wrapper">
          
    <div class="glyphicons_v2 picture grey poster no_image_holder w160_and_h90"></div>
  

      </div>
    </div>
    <div class="content">
      <div class="consensus tight">
        <div class="outer_ring">
          <div class="user_score_chart">
            <div class="percent">
              <span class="icon icon-rNR"></span>
            </div>
          </div>
        </div>
      </div>

      <h2></h2>
      <p></p>
    </div>
  </div>
  <div class="card style_1 loading">
    <div class="image">
      <div class="wrapper">
          
    <div class="glyphicons_v2 picture grey poster no_image_holder w160_and_h90"></div>
  

      </div>
    </div>
    <div class="content">
      <div class="consensus tight">
        <div class="outer_ring">
          <div class="user_score_chart">
            <div class="percent">
              <span class="icon icon-rNR"></span>
            </div>
          </div>
        </div>
      </div>

      <h2></h2>
      <p></p>
    </div>
  </div>
<div class="card style_1 spacer"></div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

@endsection