  <article <?php post_class('py-2'); ?> id="post-<?php the_ID(); ?>">
      <span class="text-sm text-muted">
          <?php echo get_the_date('d M Y'); ?>
      </span>
      <div class="blog-wrapper">
          <div class="images">
              <?php if (has_post_thumbnail()) : the_post_thumbnail('widget_blog_image', array('class' => 'img-fluid'));
                endif; ?>
          </div>
          <h6 class="my-2">
              <a href="<?php the_permalink(); ?>">
                  <?php echo get_the_title($blog_page); ?>
              </a>
          </h6>
      </div>
  </article>