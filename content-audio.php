<?php
/**
 * The template for displaying posts in the Audio Post Format on index and archive pages
 *
 * Learn more: http://codex.wordpress.org/Post_Formats
 *
 * @package ZenPress
 * @since ZenPress 1.0.0
 */
?>

<article <?php zenpress_post_id(); ?> <?php post_class(); ?><?php zenpress_semantics( 'post' ); ?>>
	<?php get_template_part( 'partials/content', 'header' ); ?>

	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	<div class="entry-summary p-summary" itemprop="description articleBody">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<?php if ( '' != get_the_post_thumbnail() ) { ?>
	<div class="entry-media">
		<?php zenpress_the_post_thumbnail(); ?>
	</div>
	<?php } ?>
	<div class="entry-content e-content" itemprop="description articleBody">
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'zenpress' ) ); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'zenpress' ), 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
	<?php endif; ?>

	<?php get_template_part( 'partials/content', 'footer' ); ?>
</article><!-- #post-<?php the_ID(); ?> -->
