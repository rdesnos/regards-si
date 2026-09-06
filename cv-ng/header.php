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
      <span class="cvng-brand-sub">Le SI au service de l’entreprise</span>
    </a>
    <nav class="cvng-menu" aria-label="Navigation principale">
      <a href="#a-laffiche">À l’affiche</a>
      <a href="#analyses">Analyses</a>
      <a href="#observatoire">Observatoire</a>
      <a href="#agenda">Agenda</a>
      <a href="#rudy">Rudy Desnos</a>
      <a href="#travailler-ensemble">Travailler ensemble</a>
    </nav>
  </div>
</header>
