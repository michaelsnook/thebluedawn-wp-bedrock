<h6 class="text-muted">
  <a href="{{ get_permalink() }}">
    <time class="updated" datetime="{{ get_post_time('c', true) }}">{{ get_the_date() }}</time>
  </a>
  <span class="byline author vcard">
    {{ __('by', 'sage') }}
    <a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}" rel="author" class="fn">
      {{ get_the_author() }}
    </a>
  </span>
</h6>
