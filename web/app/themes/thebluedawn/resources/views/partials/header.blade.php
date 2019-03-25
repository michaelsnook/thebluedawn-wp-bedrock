<section class="header">
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
  <div class="jumbotron mb-0 bg-primary text-white">
    <div class="container p-5">
      <h1 class="display-4">Welcome to The Blue Dawn</h1>
      <p class="lead">
        Blue Dawn is a community initiative/support group working by values of community healing and a facilitator of accessible mental health services to Bahujans.
      </p>
      <p>
        We connect Bahujan people in need of mental health counseling with counselors who understand the intersection
        of mental health and caste/minority issues, and with sponsors who can help make mental health counseling accessible to our community.
      </p>
      <a class="btn btn-light btn-lg" href="#" role="button">Seek Counseling</a>
      <a class="btn btn-outline-light btn-lg" href="#" role="button">Sponsor Counseling</a>
    </div>
  </div>
@endif

</section>
