@extends('layouts.banner')

@section('banner')
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
@endsection

@section('content')

<section class="py-5">
  <div class="container">
  <h1>What We Do</h1>
    <div class="row">
      <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
          <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
            <title>Matching patients with counselors</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="10%" y="50%" fill="#eceeef" dy=".3em">Matching patients with counselors</text>
          </svg>
          <div class="card-body">
            <p class="card-text">
              This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
            </p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
              </div>
              <small class="text-muted">9 mins</small>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
          <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
            <title>A network of Bahujan-friendly counselors</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="10%" y="50%" fill="#eceeef" dy=".3em">A network of Bahujan-friendly counselors</text>
          </svg>
          <div class="card-body">
            <p class="card-text">
              This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
            </p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
              </div>
              <small class="text-muted">9 mins</small>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
          <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Sponsors for patients in need</title><rect width="100%" height="100%" fill="#55595c"></rect>
            <text x="10%" y="50%" fill="#eceeef" dy=".3em">Sponsors for patients in need</text>
          </svg>
          <div class="card-body">
            <p class="card-text">
              This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
            </p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
              </div>
              <small class="text-muted">9 mins</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-5">
  <div class="container p-5 bg-white rounded shadow-sm">
    <h2 class="border-bottom border-gray pb-2 mb-0">{!! App::title() !!}</h2>

    @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    @endif

    @while (have_posts()) @php the_post() @endphp
      @include('partials.content-'.get_post_type())
    @endwhile

    {!! get_the_posts_navigation() !!}

  </div>
</section>

@endsection
