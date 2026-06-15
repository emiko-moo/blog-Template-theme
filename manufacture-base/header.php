<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet" />
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/sp.css" rel="stylesheet" />
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
  <title>製造業系テンプレート</title>
  
  <?php wp_head();?>
</head>



<body>
    <!-- header -->
    <header class="header">

        <div class="container">
        <h1>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <!-- <?php bloginfo('name');?> -->
            株式会社製造業会社
          </a>
          </h1>
          <input type="checkbox" id="menu-toggle" class="menu-checkbox">
          <label for="menu-toggle" class="menu-btn"><span></span></label>
          <nav class="nav nuv_sp wp_nav_menu">
          <?php wp_nav_menu( array(
          'menu_class' => 'menu-list', 
            ) ); ?>
        </nav>
      </div>
    </header>

    <!-- /header -->