<header class="Header">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
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

@if ( is_front_page() )
  <div class="Jumbotron">
    <div class="container px-0 py-3 px-md-3 p-lg-5">
      <h1 class="display-4 d-none d-md-block">Welcome to The Blue Dawn</h1>
      <h1 class="d-md-none">Welcome to The Blue Dawn</h1>
      <p class="lead d-none d-md-block">
        Blue Dawn is a community initiative/support group working by values of community healing and a facilitator of accessible mental health services to Bahujans.
      </p>
      <p>
        We connect Bahujan people in need of mental health counseling with counselors who understand the intersection
        of mental health and caste/minority issues, and with sponsors who can help make mental health counseling accessible to our community.
      </p>
      <a class="Button-1" href="#" role="button">Seek Counseling</a>
      <a class="Button-2" href="#" role="button">Sponsor Counseling</a>
    </div>
  </div>
@elseif ( is_page() && has_post_thumbnail() )
  <div class="Jumbotron">
    <div class="container px-0 py-3 px-md-3 p-lg-5">
    <h1 class="display-4 d-none d-md-block">{!! get_the_title() !!}</h1>
    <h1 class="d-md-none">Welcome to The Blue Dawn</h1>
      <h6 class="text-white">
        {!! get_the_excerpt() !!}
      </h6>
    </div>
  </div>

  <style>
  .Header {
    background: url("{!! the_post_thumbnail_url() !!}") no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
  }
  </style>

@endif
</header>
