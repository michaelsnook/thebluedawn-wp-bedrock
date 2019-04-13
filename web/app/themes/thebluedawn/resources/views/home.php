<?php
/**
 * The Template for displaying all single posts
 *
 * Methods for TimberHelper can be found in the /lib sub-directory
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since    Timber 0.1
 */

$context = Timber::context();

$context['events'] = new Timber\PostQuery(array(
  'category_name' => 'events'
));

$context['testimonials'] = new Timber\PostQuery(array(
  'category_name' => 'testimonials'
));

$context['press'] = new Timber\PostQuery(array(
  'category_name' => 'media'
));

// $whatwedo = new Timber\Post(array( 'pagename' => 'what-we-do' ));
// $context['whatwedo_pages'] = $whatwedo->children;

$context['pagination'] = Timber::get_pagination();

Timber::render( 'home.twig', $context );
