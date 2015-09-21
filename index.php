<?php get_header(); ?>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <div class="panel panel-success">
                <div class="panel-heading"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></div>
                <div class="panel-body"><?php the_content(); ?></div>
              </div>
            </div>
          </div>
          <?php endwhile; ?>
        <p align="center"><?php next_posts_link('&laquo; &Auml;ltere Eintr&auml;ge') ?> | <?php previous_posts_link('Neuere Eintr&auml;ge &raquo;') ?></p>
      <?php endif; ?>
        </div>
        <?php get_sidebar(); ?>
      </div>
    </div>
<?php get_footer(); ?>
