<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class("bg-light") @endphp>
    <header class="Header">
      @php do_action('get_header') @endphp
      @include('partials.header')
      @yield('banner')
    </header>
    <div class="wrap container px-3 px-sm-4 px-md-5 py-5 
    @unless ( is_front_page() )
      bg-white rounded shadow-sm mb-5
    @endunless
    " role="document">
      <div class="content">
        <main class="main">
          @yield('content')
        </main>
        @if (App\display_sidebar())
          <aside class="sidebar">
            @include('partials.sidebar')
          </aside>
        @endif
      </div>
    </div>
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
  </body>
</html>
