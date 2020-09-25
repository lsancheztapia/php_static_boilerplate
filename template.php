<?php
  require_once('boot.php');
  require ('blocks/header.php');
?>

  <header>
    <div class="container">
      <div id="site_logo">
        <a href="/">SIte</a>
      </div>
      <?php include('blocks/top_menu.php'); ?>
    </div>
  </header>

  <article>
    <?php
      if ( $page_path == '' ) { $page_path = 'index'; }
      if ( file_exists( 'pages/' . $page_path . '.php' ) ) {
        include( 'pages/' . $page_path . '.php' );
      } else {
        header("HTTP/1.0 404 Not Found");
        include ('pages/404.php');
      }
    ?>
    
  </article>

  <footer>
    <div id="site_logo_footer"><a href="/">site</a></div>
    <?php include('blocks/top_menu.php'); ?>
    
  </footer>

<?php require ('blocks/footer.php') ?>
