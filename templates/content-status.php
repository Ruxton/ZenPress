<?php
/**
 * The template for displaying posts in the Status Post Format on index and archive pages
 *
 * Learn more: http://codex.wordpress.org/Post_Formats
 *
 * @package ZenPress
 * @since ZenPress 1.0.0
 */
?>

<aside <?php zenpress_post_id(); ?> <?php post_class(); ?><?php zenpress_semantics( 'post' ); ?>>
	<?php get_template_part( 'templates/partials/entry', 'header' ); ?>

	<?php if ( is_search() ) : // Only display Excerpts for search pages ?>
	<div class="entry-summary p-summary entry-title p-name" itemprop="name description articleBody">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content e-content p-summary entry-title p-name" itemprop="name headline description articleBody">
		<?php zenpress_the_post_thumbnail( '<p>', '</p>' ); ?>
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'zenpress' ) ); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'zenpress' ), 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
	<?php endif; ?>

	<?php get_template_part( 'templates/partials/entry', 'footer' ); ?>
</aside><!-- #post-<?php the_ID(); ?> -->
