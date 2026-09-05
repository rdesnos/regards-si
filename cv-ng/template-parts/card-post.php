<article <?php post_class('cvng-post-card'); ?>>
  <?php if (has_post_thumbnail()) : ?><a class="cvng-post-image" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a><?php endif; ?>
  <div class="cvng-post-body">
    <div class="cvng-post-meta"><?php echo esc_html(get_the_date('j M Y')); ?><?php $cats=get_the_category(); if($cats){ echo ' · '.esc_html($cats[0]->name); } ?></div>
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <p><?php echo esc_html(wp_trim_words(get_the_excerpt(), 24)); ?></p>
    <a class="cvng-text-link" href="<?php the_permalink(); ?>">Lire l’analyse</a>
  </div>
</article>
