<?php
/**
 * The template for Blog Style 1
 *
 * @package Broden Theme
 */

?>

<?php if ( have_posts() ) : ?>
	<div class="col-md-8 col-sm-12 col-xs-12 blog-posts">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php if( $wp_query->current_post == 0 && !is_paged() ) : ?>
				<?php get_template_part('content', 'full'); ?>
			<?php else : ?>
				<?php get_template_part('content', 'list'); ?>
			<?php endif; ?>
		<?php endwhile; ?>
		<?php broden_pagination(); ?>
	</div><!-- blog-posts -->
<?php else : ?>
	<?php get_template_part( 'content', 'none' ); ?>
<?php endif; ?>