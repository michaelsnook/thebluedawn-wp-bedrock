<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="Navbar-brand" href="{{ home_url('/') }}">
      {{ get_bloginfo('name', 'display') }}
      <img alt="The Blue Dawn logo" src="/app/themes/thebluedawn/dist/images/logo-semicolon-only.png" class="logo-semicolon">
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu([
          'theme_location' => 'primary_navigation',
          'container' => '',
          'menu_class' => 'navbar-nav ml-auto',
          'walker' => new WP_Bootstrap_Navwalker(),
          ]) !!}
      @endif
    </div>
  </div>
</nav>
