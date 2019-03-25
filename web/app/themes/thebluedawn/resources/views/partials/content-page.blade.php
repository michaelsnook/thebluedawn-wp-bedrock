@unless ( is_page() && has_post_thumbnail() )
<div class="img-fluid pb-3">
  <a href="{{ get_permalink() }}">
    {!! the_post_thumbnail('large', ['class' => 'rounded img-fluid']) !!}
  </a>
</div>
@endunless
@php the_content() @endphp
{!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
