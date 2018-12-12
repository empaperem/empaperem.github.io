<?php get_header(); ?>
<div class="cap">
  <div class="container">
    <h2 class="text-center">Laboratori</h2>
    <p class="text-center">Un blog de osknaono sadjsd a</p>
  </div>
</div>
<div class="container index blog">
  
  <?php if ( have_posts() ): ?>
  <?php while ( have_posts() ) : the_post(); ?>
  <div class="panel panel-default" style="margin-bottom: 40px">
    <div class="row">
        <?php
      
        if ( has_post_thumbnail() ) {?>
      <div class="col-md-4" >
<div class="wei" style="background: url('<?php    the_post_thumbnail_url('thu'); ?>'); height: 220px">
  


</div>

    

              </div>

        <?php }
        ?>

 <?php
      
        if ( has_post_thumbnail() ) {?>


      <div class="col-md-8">

<?php } else { ?>

      <div class="col-md-12">

<?php } ?>

        <div class="panel-body">
          
          <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
          <h5 class="data"><?php the_time('d/m/Y'); ?></h5>
          <p><?php the_excerpt(); ?></p>
        </div>
      </div>
    </div>
  </div>
    <?php endwhile; wp_reset_query(); ?>
    <?php else: ?>
    <h2>No se ha encontrado nada</h2>
    <?php endif; ?>
    <?php if ( $wp_query->max_num_pages > 1 ) : ?>
    <div class="text-center">
      <?php
      if ( function_exists('vb_pagination') ) {
      vb_pagination();
      }
      ?>
    </div>
    <?php endif; ?>
  </div>
</div>
</div>
</div>
</div>
<?php get_footer(); ?>