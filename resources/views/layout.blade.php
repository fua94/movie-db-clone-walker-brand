<!DOCTYPE html>
<html lang="es" class="no-js">
  <head>
    <title>The Movie Database Clone for Walker Brand</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
    <meta charset="utf-8">
    
    <meta name="msapplication-TileImage" content="https://www.themoviedb.org/assets/2/v4/icons/mstile-144x144-30e7905a8315a080978ad6aeb71c69222b72c2f75d26dab1224173a96fecc962.png">
    <meta name="msapplication-TileColor" content="#032541">
    <meta name="theme-color" content="#032541">
    <link rel="apple-touch-icon" sizes="180x180" href="https://www.themoviedb.org/assets/2/apple-touch-icon-57ed4b3b0450fd5e9a0c20f34e814b82adaa1085c79bdde2f00ca8787b63d2c4.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://www.themoviedb.org/assets/2/favicon-32x32-543a21832c8931d3494a68881f6afcafc58e96c5d324345377f3197a37b367b5.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://www.themoviedb.org/assets/2/favicon-16x16-b362d267873ce9c5a39f686a11fe67fec2a72ed25fa8396c11b71aa43c938b11.png">
    <link rel="manifest" href="/manifest.json?version=3">
    <link rel="canonical" href="https://www.themoviedb.org/">
    <link rel="search" type="application/opensearchdescription+xml" title="TMDb Search" href="/opensearch.xml">
    <link rel="preconnect" href="https://image.tmdb.org/" crossorigin>
    <link rel="preload" href="https://www.themoviedb.org/assets/2/Consensus-3cba2c4d050ea63dbf7783173d288faf9ecb2942515a5e7f6e1beecabb2eaf72.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="https://www.themoviedb.org/assets/2/source-sans-pro-v13-vietnamese_latin-ext_latin_greek-ext_greek_cyrillic-ext_cyrillic-regular-f38472b9e378b8c936f55a92677f575ab69e414d7cc3706ecfefeacd994b7975.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="https://www.themoviedb.org/assets/2/source-sans-pro-v13-vietnamese_latin-ext_latin_greek-ext_greek_cyrillic-ext_cyrillic-300-db9f15a13a9f8b8bc46db7756ab863e8834bd20a7a1124c4c0a5a8f7892f3e99.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="https://www.themoviedb.org/assets/2/source-sans-pro-v13-vietnamese_latin-ext_latin_greek-ext_greek_cyrillic-ext_cyrillic-600-6a087a74d78fc7d7b97fa1b0911c4ff3be4ff0bd5144618fd7ddc63ef1777f3a.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="https://www.themoviedb.org/assets/2/source-sans-pro-v13-vietnamese_latin-ext_latin_greek-ext_greek_cyrillic-ext_cyrillic-700-d67f7dff97d105f4ac5616b00fc7822ce2c33f653ece2f547995e6a71bb7b993.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="stylesheet" href="https://www.themoviedb.org/assets/2/v4/fonts-f578d72aab1b29e57199fe0eefab11f965977296ecc398469564152d147e08c9.css" media="screen">
    <link rel="stylesheet" href="https://www.themoviedb.org/assets/2/application-45681800635c0fd7aa4152e036816d59c7fb2f9f2e7e052b06c1cfa33e97ffb6.css" media="screen">
    
    
      <link rel="stylesheet" href="https://www.themoviedb.org/assets/2/v4/media-665e0a66787e5763b893509acf08a386c62c30a11a921db17a67246f08a4391e.css" media="screen">
      
    
      <link rel="stylesheet" href="https://www.themoviedb.org/assets/2/v4/discover-0b530f97936ffa3c619dbbf1f83546efcc8b36a46c8d5b8adfb399b236e16f33.css" media="screen">
      
    
      <link rel="stylesheet" href="https://www.themoviedb.org/assets/2/v4/index-504881b47b78eedc1e722041049b6356b472af17e291f96ed68971383b468705.css" media="screen">
      
    
    
      <meta name="description" content="Walker Brand test for php :D">
    
    
    <script src="https://www.themoviedb.org/assets/2/lozad.min-7f803337d01a657607bca6b20e06f371c3895b36a5f2be03a8fa9b5e16c9a83e.js"></script>
    <script src="https://www.themoviedb.org/assets/2/jquery-3.5.1.min-f7f6a5894f1d19ddad6fa392b2ece2c5e578cbf7da4ea805b6885eb6985b6e3d.js"></script>
    <script>
      $(function() {
        jQuery.event.special.touchstart = {
          setup: function( _, ns, handle ) {
            this.addEventListener("touchstart", handle, { passive: true });
          }
        };
      });
    </script>
    <script src="https://www.themoviedb.org/assets/2/kendo-fae9a5643b2ce630515830333c2ce1c86cecafc7ebe7837c4ae31e170c21a171.js"></script>
    <script src="https://www.themoviedb.org/assets/2/application-8b439329775a36098a2cbd50c366be017846961294003d640f99dbd7b416c181.js"></script>
    
      <script src="https://www.themoviedb.org/assets/2/application.desktop-fc642e932de23c6d7bd19995577faae48e55c0c22f1b7cf5f9a60845689e5d3c.js"></script>

  </head>
<body class="es v4">

  
  
    <script src="https://www.themoviedb.org/assets/2/kendo-2020.2.617/messages/kendo.messages.es-ES.min-084827a192ef2a4be9e599335afb08ba2a6790015535c4c5735a1b9d6e36c826.js"></script>
  
  
    <script src="https://www.themoviedb.org/assets/2/kendo-2020.2.617/cultures/kendo.culture.es-ES.min-850a37e66846cef796d35805aebb61644b7e6cd0d5cd1c58ea0f9a12b9d5346c.js"></script>
    <script>kendo.culture("es-ES");</script>
  

  <div class="page_wrap _wrap">
<header class="normal smaller no_animation smaller  subtle">
  <div class="content">
    <div class="sub_media">
      <div class="nav_wrapper">
        
          <a class="logo" href="/?language=es">
            <img src="https://www.themoviedb.org/assets/2/v4/logos/v2/blue_short-8e7b30f73a4020692ccca9c88bafe5dcb6f8a62a4c6bc55cd9ba82bb2cd95f6c.svg" alt="The Movie Database (TMDb)" width="154" height="20">
          </a>
        

        <ul class="dropdown_menu navigation">
          
            <li>
              <a class="no_click" href="/movie?language=es">Películas</a>

              <ul>
                <li><a href="/movie?language=es">Popular</a></li>
                <li><a href="/movie/now-playing?language=es">En cartelera hoy</a></li>
                <li><a href="/movie/upcoming?language=es">Próximamente</a></li>
                <li><a href="/movie/top-rated?language=es">Mejor valoradas</a></li>
              </ul>
            </li>
            <li>
              <a  class="no_click" href="/tv?language=es">Programas de televisión</a>

              <ul>
                <li><a href="/tv?language=es">Popular</a></li>
                <li><a href="/tv/airing-today?language=es">Se emiten hoy</a></li>
                <li><a href="/tv/on-the-air?language=es">En televisión</a></li>
                <li><a href="/tv/top-rated?language=es">Mejor valorados</a></li>
              </ul>
            </li>
            <li>
              <a class="no_click" href="/person?language=es">Personas</a>

              <ul>
                <li><a href="/person?language=es">Personas populares</a></li>
              </ul>
            </li>
            <li>
              <a class="no_click" href="#">Más</a>

              <ul>
                <li><a href="/discuss?language=es">Discusiones</a></li>
                <li><a href="/leaderboard?language=es">Tabla de clasificación</a></li>
                <li><a href="/talk?language=es">Soporte</a></li>
                <li><a href="/documentation/api?language=es">API</a></li>
              </ul>
            </li>
          
        </ul>
      </div>

      
        <div class="flex">
          <ul class="primary">
            <li class="glyph new_buttons">
              <a class="new_icon no_click" href="#">
                <span class="glyphicons_v2 plus white"></span>
              </a>
            </li>
            <li class="translate">
              <div>es</div>
            </li>
            
              <li><a href="/login?language=es">Acceder</a></li>
              <li><a href="/signup?language=es">Únete a TMDb</a></li>
            

            <li class="glyph search_buttons">
              <a class="search" href="/search"><span class="glyphicons_v2 search blue"></span></a>
              <a class="close hide" href="/search"><span class="glyphicons_v2 menu-close invert svg"></span></a>
            </li>
          </ul>
        </div>
      
    </div>
  </div>
  <div class="search_bar hide">
    <section class="search show_search_false">
      <div class="sub_media">
        <form id="search_form" action="/search?language=es" method="get" accept-charset="utf-8">
          
            <input type="hidden" name="language" value="es">
          
          <label>
            <input dir="auto" id="search_v4" name="query" type="text" tabindex="1" autocorrect="off" autofill="off" autocomplete="off" spellcheck="false" placeholder="Buscar una película, programa de televisión, persona..." value="">
          </label>
          <input type="submit" disabled>
        </form>
      </div>
    </section>
  </div>
</header>
<style>
  section.new_index {
    
      background-image: linear-gradient(to right, rgba(var(--tmdbDarkBlue), 0.8) 0%, rgba(var(--tmdbDarkBlue), 0) 100%), url('//image.tmdb.org/t/p/w1920_and_h600_multi_faces_filter(duotone,032541,01b4e4)/zqkmTXzjkAgXmEWLRsY4UpTWCeo.jpg');
    
  }
</style>

<style>
  #main {
    max-width: auto !important;
    min-width: auto !important;
    width: auto !important;
  }
</style>

<main id="main" class="index">
    @yield('content')
</main>

<script type="text/javascript" charset="utf-8">
  $(document).ready(function() {
    var w = window.innerWidth;
    var h = window.innerHeight;
    var loaded_panels = {};

    attachVideoPlayer(w, h);
    var panel_url_template = "/remote/panel?panel={0}&group={1}&language=es";

    function queryPanel(panel, group) {
      $.ajax({
        dataType: 'html',
        url: kendo.format(panel_url_template, panel, group),
        method: 'GET',
        beforeSend: function() {
         // activatePageLoader();
        }
      }).done(function(response) {
        deactivatePageLoader();
        loaded_panels[panel] = true;

        var jpanel = $('#' + panel + ' div.scroller');
        jpanel.fadeOut(500).promise().done(function() {
          jpanel.html(response).addClass('loaded').fadeIn(750).scrollLeft(0);
          observer.observe();

          attachOptionsTooltips(false, '#' + panel);
          initializeScroller(false, '#' + panel);

          

          if (panel == 'trailer_scroller') {
            var videos = $('#' + panel + ' div.scroller').find('.card.true');
            var bg_image = $(videos[0]).data('bg-image');
            if (bg_image) {
              $('section.inner_content.bg_image.video').css({ 'background-image': 'url(' + bg_image + ')' })
            } else {
              $('section.inner_content.bg_image.video').css({ 'background-image': 'none' })
            }
          }
        });
      }).fail(function() {
        deactivatePageLoader();
        showError('There was a problem refreshing the results.')
      }).always(function() {

      });
    }

    function createInview(panel, group) {
      var el = $('#' + panel);
      new Waypoint.Inview({
        element: el,
        enter: function(direction) {
          if (loaded_panels[panel]) {
            this.destroy()
          } else {
            queryPanel(panel, group);
          }
        }
      });
    }

    
      queryPanel('popular_scroller', 'streaming');
      createInview('free_scroller', 'movie');
      createInview('trailer_scroller', 'streaming');
    

    createInview('trending_scroller', 'today');

    

    function updateGroupSelector(selected) {
      var parent = selected.closest('.selector')
      var parent_pos = parent.position();
      var anchor = selected.closest('.anchor');
      var original_anchor = anchor.clone();
      var anchor_pos = anchor.position();

      
        anchor.parent().find('div.background').css({ 'left': (anchor_pos.left - parent_pos.left - 1), 'width': anchor.outerWidth() });
      

      parent.find('.anchor').removeClass('selected');
      anchor.addClass('selected');

      return original_anchor;
    }

    $('body').on('mouseover', 'div.card.video.true', function(e) {
      var bg_image = $(this).data('bg-image');
      $('section.inner_content.video').attr('style', 'background-image: url(' + bg_image + ')');
    });

    $('body').on('click', 'div.anchor a, a.refresh_panel', function(e) {
      var original_anchor = updateGroupSelector($(this));
      var panel = $(this).data('panel');
      var group = $(this).data('group');

      if ( !original_anchor.hasClass('selected') ) {
        activatePageLoader();
        queryPanel(panel, group);
      }
    });

  });
</script>

    </div> <!-- page_wrap opened in html_head -->

    <footer class="single_column  ">
      <nav>
        <div class="join">
          <img src="https://www.themoviedb.org/assets/2/v4/logos/v2/blue_square_2-d537fb228cf3ded904ef09b136fe3fec72548ebc1fea3fbbd1ad9e36364db38b.svg" alt="The Movie Database (TMDb)" width="130" height="94">

          
            <a class="rounded" href="/signup?language=es">Unirse a la comunidad</a>
          
        </div>

        <div>
          <h3>Lo básico</h3>
          <ul>
            <li><a href="/about?language=es">Sobre TMDb</a></li>
            <li><a href="/about/staying-in-touch?language=es">Contacto</a></li>
            <li><a href="/talk?language=es">Foros de ayuda</a></li>
            <li><a href="/documentation/api?language=es">API</a></li>
            <li><a href="https://status.themoviedb.org/" target="_blank" rel="noopener">Estado del sistema</a></li>
          </ul>
        </div>
        <div>
          <h3>Participa</h3>
          <ul>
            <li><a href="/bible?language=es"><span class="glyphicons glyphicons-asterisk"></span> Guía de aportaciones</a></li>
            <li><a href="/apps?language=es">Aplicaciones de terceros</a></li>
            <li><a href="/movie/new?language=es">Añadir nueva película</a></li>
            <li><a href="/tv/new?language=es">Añadir nuevo programa de tv</a></li>
          </ul>
        </div>
        <div>
          <h3>Comunidad</h3>
          <ul>
            <li><a href="/documentation/community/guidelines?language=es">Directrices</a></li>
            <li><a href="/discuss?language=es">Discusiones</a></li>
            <li><a href="/leaderboard?language=es">Tabla de clasificación</a></li>
            <li><a href="https://twitter.com/themoviedb" target="_blank" rel="noopener">Twitter</a></li>
          </ul>
        </div>
        <div>
          <h3>Legal</h3>
          <ul>
            <li><a href="/documentation/website/terms-of-use?language=es">Términos de uso</a></li>
            <li><a href="/documentation/api/terms-of-use?language=es">Términos de uso de la API</a></li>
            <li><a href="/privacy-policy?language=es">Política de privacidad</a></li>
          </ul>
        </div>
      </nav>

      <section>Build 24a42d9 (605)</section>
    </footer>

    

    

    
      <div id="new_media_template" class="hide">
        <div class="settings_content">
          <p>¿No encuentras una película o programa de televisión? Accede para crearlo:</p>
        </div>
      </div>

      <div id="settings_tooltip" class="hide">
        <div class="settings_content">
          <div class="group no_pad">
            <p><a href="/login?language=es">Acceder</a></p>
          </div>
          <div class="group">
            <p><a href="/signup?language=es">Registrarse</a></p>
          </div>
        </div>
      </div>
    

    <div id="keyboard_shortcuts_popup" class="hide">
      <div class="content keyboard_shortcuts">
        <div class="column">
          <h3>Global</h3>
          <div><span>s</span> enfocar la barra de búsqueda</div>
          <div><span>p</span> abrir menú de perfil</div>
          <div><span>esc</span> cierra una ventana abierta</div>
          <div><span>?</span> abrir la ventana de atajos del teclado</div>

          <h3>En las páginas multimedia</h3>
          <div><span>b</span> retrocede (o a padre cuando sea aplicable)</div>
          <div><span>e</span> ir a la página de edición</div>

          <h3>En las páginas de temporada de televisión</h3>
          <div><span>&#8594;</span> (flecha derecha) ir a la siguiente temporada</div>
          <div><span>&#8592;</span> (flecha izquierda) ir a la anterior temporada</div>

          <h3>En las páginas de episodio de televisión</h3>
          <div><span>&#8594;</span> (flecha derecha) ir al siguiente episodio</div>
          <div><span>&#8592;</span> (flecha izquierda) ir al anterior episodio</div>

          <h3>En todas las páginas de imágenes</h3>
          <div><span>a</span> abrir la ventana de añadir imagen</div>
        </div>

        <div class="column">
          <h3>En todas las páginas de edición</h3>
          <div><span>t</span> abrir la sección de traducción</div>
          <div><span>ctrl</span>+ <span>s</span> enviar formulario</div>

          <h3>En las páginas de discusión</h3>
          <div><span>n</span> crear nueva discusión</div>
          <div><span>w</span> Cambiar estado de observación</div>
          <div><span>p</span> Alternar público/privado</div>
          <div><span>c</span> Alternar cerrar/abrir</div>
          <div><span>a</span> abrir actividad</div>
          <div><span>r</span> responder a la discusión</div>
          <div><span>l</span> ir a la última respuesta</div>
          <div><span>ctrl</span>+ <span>enter</span> enviar tu mensaje</div>
          <div><span>&#8594;</span> (flecha derecha) siguiente página</div>
          <div><span>&#8592;</span> (flecha izquierda) página anterior</div>
        </div>
      </div>
    </div>

    <div class="hide">
      <div id="options_tooltip">
        <div class="settings_content">
          
            <div class="group no_pad">
              <p class="no_hover">¿Quieres valorar o añadir este elemento a una lista?</p>
              <p><a href="/login?language=es">Acceder <span class="glyphicons_v2 chevron-right blue pad_left"></span></a></p>
            </div>
            <div class="group">
              <p class="no_hover">¿No eres miembro?</p>
              <p><a href="/signup?language=es">Regístrate y únete a la comunidad <span class="glyphicons_v2 chevron-right blue pad_left"></span></a></p>
            </div>
          
        </div>
      </div>
    </div>

    <div class="hide">
      <div id="video_popup"></div>
    </div>

    
    <script src="https://www.themoviedb.org/assets/2/jquery.waypoints.inview.min-020c5d0ff05f6c391ec83334e99df1904b2971479d4334ac94fe7bca52bf287a.js"></script>
    

    <script src="https://www.themoviedb.org/assets/2/footer-88d8069a2b64f6a5751f9ec90b06b9d13a6f59e2caa683d857b36a4b1455a764.js"></script>
    
    <script src="https://www.themoviedb.org/assets/2/timeago/locales/jquery.timeago.es-ES-0f27480b328f725c7be6ee4686ac335bb112397e89293f8ee64443459fe1a9ad.js"></script>

  </body>
</html>