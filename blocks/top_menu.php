<?php
  $menuItems = [
    [
      'name' => 'Home',
      'url' => '/',
      'class' => 'home'
    ],

  ];
?>

<nav>
  <div class="button" style="cursor: pointer;">
    <i class="fas fa-bars displayed"></i>
    <i class="far fa-times-circle"></i>
  </div>
  <ul class="nav navbar-nav">
    <?php
      foreach($menuItems as $menuItem) {
        $current = '';
        if ( $menuItem['url'] == $dataCurrentPage['url'] ) {$current = 'current';}
        $class = isset($menuItem['class']) ? ' class="' . $menuItem['class'] . ' ' . $current . '" ' : '';
        $target = isset($menuItem['target']) ? ' target="' . $menuItem['target'] . '" ' : '';

        print '<li ' . $class . '>
          <a href="' . $menuItem['url'] . '" ' . $target . '>' . $menuItem['name'] . '</a>
          </li>';
      }
    ?>
  </ul>
</nav>
