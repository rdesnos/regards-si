<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width,initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="cvng-header">
  <div class="cvng-wrap cvng-nav">
    <a class="cvng-brand" href="<?php echo esc_url(home_url('/')); ?>">
      <span class="cvng-brand-main">Regards <b>SI</b></span>
      <span class="cvng-brand-sub">Comprendre · Relier · Construire</span>
    </a>
    <nav class="cvng-menu" aria-label="Navigation principale">
      <a href="#vision">Vision</a>
      <a href="#methode">Méthode</a>
      <a href="#convictions">Convictions</a>
      <a href="#en-action">En action</a>
      <a href="#parcours">Parcours</a>
      <a href="#articles">Regards</a>
    </nav>
  </div>
</header>
