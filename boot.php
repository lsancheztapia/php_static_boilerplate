<?php
  // this is called from header

  $dataPages = [
    [
      'title' => '850 Route 28 Homepage',
      'url' => '/',
      'description' => 'Overview of the planned business at 850 Route 28 with site photos',
      'keywords' => '850 Route 28, 850 Route 28 LLC, Pre-cast concrete, Town of Kingston',
      'body_class' => 'page home'
    ],
    [
      'title' => 'About | 850 Route 28',
      'url' => '/about',
      'description' => '',
      'keywords' => '850 Route 28, 850 Route 28 LLC, Pre-cast concrete, Town of Kingston',
      'body_class' => 'page about'
    ],
    [
      'title' => 'FAQS | 850 Route 28',
      'url' => '/faqs',
      'description' => '',
      'keywords' => '850 Route 28, 850 Route 28 LLC, Pre-cast concrete, Town of Kingston',
      'body_class' => 'page faqs'
    ],
    [
      'title' => 'Testimonials | 850 Route 28',
      'url' => '/testimonials',
      'description' => '',
      'keywords' => '850 Route 28, 850 Route 28 LLC, Pre-cast concrete, Town of Kingston',
      'body_class' => 'page testimonials'
    ],
    [
      'title' => 'Documents | 850 Route 28',
      'url' => '/documents',
      'description' => '',
      'keywords' => '850 Route 28, 850 Route 28 LLC, Pre-cast concrete, Town of Kingston',
      'body_class' => 'page documents'
    ],
    [
      'title' => 'Contact | 850 Route 28',
      'url' => '/contact',
      'description' => '',
      'keywords' => '850 Route 28, 850 Route 28 LLC, Pre-cast concrete, Town of Kingston',
      'body_class' => 'page contact'
    ],
    [
      'title' => 'Contact | 850 Route 28',
      'url' => '/thanks',
      'description' => '',
      'keywords' => '850 Route 28, 850 Route 28 LLC, Pre-cast concrete, Town of Kingston',
      'body_class' => 'page thanks'
    ],
    [
      'title' => 'Sustainable Green Project | 850 Route 28',
      'url' => '/sustainable-green-project',
      'description' => '',
      'keywords' => '850 Route 28, 850 Route 28 LLC, Pre-cast concrete, Town of Kingston',
      'body_class' => 'page sustainable'
    ],
    [
      'title' => 'Opportunity for Kingston | 850 Route 28',
      'url' => '/opportunity-kingston',
      'description' => '',
      'keywords' => '850 Route 28, 850 Route 28 LLC, Pre-cast concrete, Town of Kingston',
      'body_class' => 'page opportunity'
    ],
  ];

  // some calculations
  $url_parsed = parse_url( $_SERVER['REQUEST_URI'] );
  $page_path = ltrim( $url_parsed['path'], '/' );

  $dataCurrentPage = null; // used for articles page
  foreach ( $dataPages as $item ) {
    if ( $item['url'] == $url_parsed['path'] ) {
      $dataCurrentPage = $item;
    }
  }

