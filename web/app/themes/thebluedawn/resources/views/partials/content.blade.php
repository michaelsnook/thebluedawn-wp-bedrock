<article @php post_class("text-muted pt-3 border-bottom border-gray clearfix") @endphp>
  <h4 class="entry-title"><a href="{{ get_permalink() }}">{!! get_the_title() !!}</a></h4>
  <div class="row">
    @if ( has_post_thumbnail() )
    <div class="col-md-3 col-12 pb-3">
      <a href="{{ get_permalink() }}">
        {!! the_post_thumbnail('large', ['class' => 'rounded img-fluid']) !!}
      </a>
    </div>
    @endif
    <div class="mx-3">
      <header>
        @include('partials/entry-meta')
      </header>
      <div class="entry-summary">
        @php the_excerpt() @endphp
      </div>
    </div>
  </div>
</article>
