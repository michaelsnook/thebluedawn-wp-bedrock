{{--
  Template Name: Feature Banner Template
--}}

@extends('layouts.banner')

@section('banner')
@if ( has_post_thumbnail() )
  <div class="Jumbotron-2">
    <div class="container px-3 px-sm-4 px-md-5 pt-5 pb-4 rounded-top">
    <h1 class="display-4 d-none d-md-block">{!! get_the_title() !!}</h1>
    <h1 class="d-md-none">Welcome to The Blue Dawn</h1>
    <p class="text-white">
    @while(have_posts()) @php the_post() @endphp
      {!! get_the_excerpt() !!}
    @endwhile
    </p>
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
@endsection

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @unless ( has_post_thumbnail() )
      @include('partials.page-header')
    @endunless
    @include('partials.content-page')
  @endwhile
@endsection
