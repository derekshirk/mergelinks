<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel='shortcut icon' type='image/x-icon' href='<?= get_bloginfo("template_url"); ?>/favicon.ico' />
  
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

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-59477663-1', 'auto');
  ga('send', 'pageview');

</script>