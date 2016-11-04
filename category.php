<?php get_template_part('includes/header'); ?>

<div class="container">
  <div class="row">
    
    <div class="col-xs-12 col-sm-12">
      <div id="content" role="main">
        <h1>Category: <?php echo single_cat_title(); ?></h1>
        <hr>
        <?php get_template_part('includes/loops/content', get_post_format()); ?>
      </div><!-- /#content -->
    </div>
    
  </div><!-- /.row -->
</div><!-- /.container -->

<div class="container">
  <div class="row">
    <div class="col-sm-6 col-xs-12" id="left-col" role="navigation">
      <?php get_template_part('includes/sidebar1'); ?>
    </div>
    <div class="col-sm-6 col-xs-12" id="right-col" role="navigation">
      <?php get_template_part('includes/sidebar2'); ?>
    </div>
  </div><!-- /.row -->
</div>
<?php get_template_part('includes/footer'); ?>
