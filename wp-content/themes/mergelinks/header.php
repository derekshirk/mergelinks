<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
  <?php if ( ! function_exists( '_wp_render_title_tag' ) ) :
    function theme_slug_render_title() {
    ?>
      <title><?php wp_title( '|', true, 'right' ); ?></title>
    <?php
    }
    add_action( 'wp_head', 'theme_slug_render_title' );
  endif; ?>

  <link rel="stylesheet" href="<?= get_bloginfo("template_url"); ?>/style.css">
  
  <script>var templateUrl = '<?= get_bloginfo("template_url"); ?>';</script>
  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?> id="top">