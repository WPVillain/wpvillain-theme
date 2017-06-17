<!doctype html>
<html @php(language_attributes())>
  @include('partials.head')
  <body @php(body_class())>
    @php(do_action('get_header'))
      <div class="vertical-center">
        <div class="wrap container" role="document">
          <div class="content">
            <main class="main">
              @yield('content')
                <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
                  <div class="container">
                    <div id="navbarSupportedContent">
                     @if (has_nav_menu('splash_navigation'))
                     {!! wp_nav_menu(['theme_location' => 'splash_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'navbar-nav nav pull-right']) !!}
                     @endif
                     </div>
                   </div>
                </nav>
            </main>
            @if (App\display_sidebar())
              <aside class="sidebar">
                @include('partials.sidebar')
              </aside>
            @endif
          </div> {{-- content --}}
        </div> {{-- container --}}
      </div> {{-- jumbotron --}}
    {{-- </div> row --}}
    @php(do_action('get_footer'))
    @include('partials.footer')
    @php(wp_footer())
  </body>
</html>
