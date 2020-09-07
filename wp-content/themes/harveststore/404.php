<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage TemplateMela
 * @since TemplateMela 1.0
 */
get_header(); ?>
<header>
<div class="page-title">
			  <div class="page-title-inner">
				<h1 class="entry-title-main"><?php esc_html_e( 'Not Found', 'harvest' ); ?></h1>
				<?php harvest_breadcrumbs(); ?>
		  	</div>
		  </div>            
    </header>
<div class="main-content-inner">	
<div id="primary" class="content-area">
  <div id="content" class="site-content" role="main">
    
    <div class="page-content">
      <p>
        <?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'harvest' ); ?>
      </p>
      <?php get_search_form(); ?>
    </div>
    <!-- .page-content -->
  </div>
  <!-- #content -->
</div>
<!-- #primary -->
<?php
get_sidebar( 'content' );
get_sidebar(); ?>
</div>
<?php get_footer(); ?>