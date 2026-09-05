<?php get_header(); ?>
<main>
  <section class="cvng-hero">
    <div class="cvng-wrap cvng-hero-grid">
      <div>
        <div class="cvng-kicker">Stratégie &nbsp; | &nbsp; Transformation &nbsp; | &nbsp; Performance</div>
        <h1 class="cvng-title">Regards<br>SI</h1>
        <div class="cvng-lead">Le SI au service de l’entreprise</div>
        <div class="cvng-rule"></div>
        <div class="cvng-doctrine"><span>Business First</span><span>Risk Based</span><span>IT as an Enabler</span></div>
      </div>
      <div class="cvng-hero-visual">
        <?php if (has_custom_logo()) { the_custom_logo(); } else { ?><div class="cvng-hero-placeholder">Regards SI</div><?php } ?>
      </div>
    </div>
  </section>

  <section class="cvng-band">
    <div class="cvng-wrap cvng-band-grid">
      <div class="cvng-band-item"><strong>Le SI est un outil.</strong><br>Pas une finalité.</div>
      <div class="cvng-band-item"><strong>La performance d’abord.</strong><br>La technologie vient ensuite.</div>
      <div class="cvng-band-item"><strong>Le risque se pilote.</strong><br>Il ne se nie pas.</div>
    </div>
  </section>

  <section class="cvng-section">
    <div class="cvng-wrap">
      <div class="cvng-eyebrow">Trois territoires</div>
      <div class="cvng-grid3">
        <article class="cvng-card"><h2>Systèmes d’information</h2><p>Gouvernance, transformation, architecture, ERP et exécution.</p></article>
        <article class="cvng-card"><h2>Finance & DAF</h2><p>Processus, pilotage et performance de l’entreprise.</p></article>
        <article class="cvng-card"><h2>Data & Intelligence ajoutée</h2><p>La donnée et l’IA lorsqu’elles permettent réellement de décider et d’agir.</p></article>
      </div>
    </div>
  </section>

  <section class="cvng-section cvng-section-pale">
    <div class="cvng-wrap">
      <div class="cvng-section-head">
        <div><div class="cvng-eyebrow">Dernières publications</div><h2 class="cvng-section-title">Des convictions, puis des preuves.</h2></div>
        <a class="cvng-text-link" href="<?php echo esc_url(get_permalink(get_option('page_for_posts')) ?: home_url('/')); ?>">Tous les articles</a>
      </div>
      <div class="cvng-post-grid">
        <?php $cvng_latest = new WP_Query(['post_type'=>'post','posts_per_page'=>3,'post_status'=>'publish']); ?>
        <?php if ($cvng_latest->have_posts()) : while ($cvng_latest->have_posts()) : $cvng_latest->the_post(); get_template_part('template-parts/card','post'); endwhile; wp_reset_postdata(); else: ?>
          <article class="cvng-post-card cvng-post-card-empty"><div class="cvng-post-meta">Regards SI</div><h3>Les prochains articles apparaîtront ici.</h3><p>Une ligne éditoriale centrée sur la performance, le risque et la valeur produite par les systèmes d’information.</p></article>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <section class="cvng-section">
    <div class="cvng-wrap"><div class="cvng-quote">La technique n’est jamais le sujet. Ce que l’entreprise en fait, si.</div></div>
  </section>
</main>
<?php get_footer(); ?>
