<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet" />
  <title>仮テンプレート</title>
  
  <?php wp_head();?>
</head>



<body>
    <!-- header -->
    <header class="header">
        <div class="container">
        <h1>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <?php bloginfo('name');?>
          </a>
          </h1>
        <nav class="nav nuv_sp wp_nav_menu">
              <ul>
              <?php wp_nav_menu( array(
                'menu_class'     => 'menu-list', 
                ) );
              ?>
              </ul>
        </nav>
      </div>
    </header>
    
      <main>
    <!-- /header -->