<?php
/**
 * The template for Blog Style 3
 *
 * @package Broden Theme
 */

?>

<?php if ( have_posts() ) : ?>
	<div class="col-md-12 col-sm-12 col-xs-12 blog-posts blog-posts-syle-3">
		<div class="row">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php if( $wp_query->current_post == 0 && !is_paged() ) : ?>
					<?php get_template_part('content', 'half'); ?>
				<?php elseif( $wp_query->current_post == 1 && !is_paged() ) : ?>
					<?php get_template_part('content', 'half'); ?>
				<?php else : ?>
					<?php get_template_part('content', 'masonary'); ?>
				<?php endif; ?>
			<?php endwhile; ?>
		</div><!-- row -->
		<?php broden_pagination(); ?>
	</div><!-- blog-posts -->
<?php else : ?>
	<?php get_template_part( 'content', 'none' ); ?>
<?php endif; ?>