<?php
/**
 * The template for Blog Style 2
 *
 * @package Broden Theme
 */

?>

<?php if ( have_posts() ) : ?>
	<div class="col-md-8 col-sm-12 col-xs-12 blog-posts">
		<div class="row">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php if( $wp_query->current_post == 0 && !is_paged() ) : ?>
					<div class="col-md-12 col-sm-12 col-xs-12"><?php get_template_part('content', 'full'); ?></div>
				<?php else : ?>
					<?php get_template_part('content', 'grid'); ?>
				<?php endif; ?>
			<?php endwhile; ?>
		</div><!-- row -->
		<?php broden_pagination(); ?>
	</div><!-- blog-posts -->
<?php else : ?>
	<?php get_template_part( 'content', 'none' ); ?>
<?php endif; ?>