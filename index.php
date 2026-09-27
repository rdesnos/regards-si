<?php get_header(); ?>
<main>
  <section class="rsi-hero">
    <div class="rsi-wrap rsi-hero-grid">
      <div>
        <div class="rsi-kicker">Stratégie &nbsp; | &nbsp; Transformation &nbsp; | &nbsp; Performance</div>
        <h1 class="rsi-title">Regards<br>SI</h1>
        <div class="rsi-lead">Le SI au service de l’entreprise</div>
        <div class="rsi-rule"></div>
        <div class="rsi-doctrine"><span>Business First</span><span>Risk Based</span><span>IT as an Enabler</span></div>
      </div>
      <div><?php if (has_custom_logo()) { the_custom_logo(); } ?></div>
    </div>
  </section>

  <section class="rsi-doctrine-band" aria-label="Doctrine Regards SI">
    <div class="rsi-wrap rsi-doctrine-grid">
      <article class="rsi-doctrine-item">
        <div class="rsi-doctrine-icon" aria-hidden="true">◎</div>
        <div><h2>Business first</h2><strong>Le métier donne la direction.</strong><p>Le système d’information part des enjeux de l’entreprise, pas de la technologie.</p></div>
      </article>
      <article class="rsi-doctrine-item">
        <div class="rsi-doctrine-icon" aria-hidden="true">◇</div>
        <div><h2>Risk based</h2><strong>Le risque aide à hiérarchiser.</strong><p>Tout ne mérite ni le même niveau d’investissement, ni le même niveau de contrôle.</p></div>
      </article>
      <article class="rsi-doctrine-item">
        <div class="rsi-doctrine-icon" aria-hidden="true">▥</div>
        <div><h2>Technology as an enabler</h2><strong>La technologie permet d’agir.</strong><p>Elle n’est pas une finalité : elle rend possibles les transformations utiles.</p></div>
      </article>
    </div>
  </section>

  <section class="rsi-vision" id="a-propos">
    <div class="rsi-wrap">
      <div class="rsi-eyebrow">Ma vision</div>
      <h2 class="rsi-vision-title">Savoir regarder <em>autrement.</em></h2>
      <p class="rsi-vision-intro">Un système d’information ne se résume ni à ses applications, ni à son architecture, ni à ses projets. Il faut parfois faire un pas de côté : changer d’angle, de grille de lecture ou de représentation pour faire apparaître ce qui ne se voyait pas encore.</p>

      <div class="rsi-vision-cards">
        <article class="rsi-vision-card">
          <span class="rsi-card-number">01</span>
          <h3>Comprendre</h3>
          <p>Lire l’entreprise avant de lire son SI.</p>
        </article>
        <article class="rsi-vision-card">
          <span class="rsi-card-number">02</span>
          <h3>Relier</h3>
          <p>Finance, opérations, données, organisation et technologie ne fonctionnent jamais séparément.</p>
        </article>
        <article class="rsi-vision-card">
          <span class="rsi-card-number">03</span>
          <h3>Construire</h3>
          <p>Transformer cette compréhension en décisions, solutions et résultats concrets.</p>
        </article>
      </div>
    </div>
  </section>

  <section class="rsi-territories" id="expertise">
    <div class="rsi-wrap">
      <div class="rsi-eyebrow rsi-eyebrow-dark">Mes terrains d’application</div>
      <div class="rsi-territories-head">
        <h2>Une démarche.<br>Des démonstrateurs concrets.</h2>
        <p>Des contextes différents, une même approche : comprendre, relier, construire.</p>
      </div>
      <div class="rsi-territory-grid">
        <article class="rsi-territory-card"><span>01</span><h3>SI & transformation</h3><p>Gouvernance, architecture, ERP, processus et exécution au service des enjeux métier.</p></article>
        <article class="rsi-territory-card"><span>02</span><h3>Finance & DAF</h3><p>Des systèmes et des données fiables pour piloter, arbitrer et décider.</p></article>
        <article class="rsi-territory-card"><span>03</span><h3>Data & Intelligence</h3><p>Transformer l’information en compréhension, puis en avantage durable.</p></article>
      </div>
    </div>
  </section>

  <section class="rsi-closing">
    <div class="rsi-wrap">
      <p class="rsi-closing-quote">La technique n’est jamais le sujet.<br><strong>Ce que l’entreprise en fait, si.</strong></p>
    </div>
  </section>
</main>
<?php get_footer(); ?>
