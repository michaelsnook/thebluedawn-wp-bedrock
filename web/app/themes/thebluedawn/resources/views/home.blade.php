@extends('layouts.app')

<div class="jumbotron mb-0 bg-primary text-white">
  <div class="container">
    <h1 class="display-4">Hello, world!</h1>
    <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
    <a class="btn btn-light btn-lg text-primary" href="#" role="button">Learn more</a>
    <a class="btn btn-outline-light btn-lg" href="#" role="button">Learn more</a>
  </div>
</div>

@section('content')

  @include('partials.page-header')
  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif

  @while (have_posts()) @php the_post() @endphp
    @include('partials.content-'.get_post_type())
  @endwhile

  {!! get_the_posts_navigation() !!}
@endsection
