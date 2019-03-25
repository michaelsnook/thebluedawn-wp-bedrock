@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @unless ( is_page() && has_post_thumbnail() )
      @include('partials.page-header')
    @endunless
    @include('partials.content-page')
  @endwhile
@endsection
