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
$wwd = array();
$wwd[0] = array(
    'thumbnail' => array(
      'src' => '//thebluedawn.org/app/uploads/2019/04/IMG1_page-0001-1.jpg',
      'alt' => 'Painting of two trees'
    ),
    'title' => 'Matching clients with counselors',
    'excerpt' => 'Blue Dawn facilitates anti-caste, queer-friendly, disabled-friendly mental health care services to Bahujans. If you are a Bahujan and seeking support, please fill the Google Form to get in touch with us.',
    'cta' => array(
      'href' => '/speak-to-a-counselor/',
      'text' => 'Get started'
    )
  );

$wwd[1] = array(
    'thumbnail' => array(
      'src' => '//thebluedawn.org/app/uploads/2019/04/IMG_page-0001-1.jpg',
      'alt' => 'Painting of birds sitting in a tree that grew out from a cage'
    ),
    'title' => 'Network of Bahujan-friendly counselors',
    'excerpt' => 'If you are a counselor or psychiatrist who understands structural oppression, especially caste oppression, and are interested in joining our network, please fill the Google Form to get in touch.',
    'cta' => array(
      'href' => '/counselors-network/',
      'text' => 'Get involved'
    )
  );
$wwd[2] = array(
    'thumbnail' => array(
      'src' => '//thebluedawn.org/app/uploads/2019/04/IMG_0001_page-0001-1.jpg',
      'alt' => 'Painting of two people helping each other climb a mountain'
    ),
    'title' => 'Sponsor clients in need',
    'excerpt' => 'If you are neither a counselor nor a patient but want to make mental health care accessible to all, you can sponsor therapy sessions for clients in need. Please fill the Google Form to get in touch with us.',
    'cta' => array(
      'href' => '/sponsor-sessions/',
      'text' => 'Get in touch'
    )
  );

$context['what_we_do'] = $wwd;

// $whatwedo = new Timber\Post(array( 'pagename' => 'what-we-do' ));
// $context['whatwedo_pages'] = $whatwedo->children;

$context['pagination'] = Timber::get_pagination();

Timber::render( 'home.twig', $context );
