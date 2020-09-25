<?php

  // main router

  $url_parsed = parse_url( $_SERVER['REQUEST_URI'] );
  $page_path = ltrim( $url_parsed['path'], '/' );

  if ( $page_path == '' ) { $page_path = 'index'; }

  $page_path_parts = explode( '/', $page_path);

  if ( count($page_path_parts) > 1 && $page_path_parts[0] == 'article' ) {
    include( 'pages/article/index.php' );
  } else {
    include ('template.php');
  }


?>