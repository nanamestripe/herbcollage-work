<?php

/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<secion class="entry-header">

		<?php if ('post' == get_post_type()) : ?>

			<div class="entry-meta">
				<?php understrap_posted_on(); ?>
			</div><!-- .entry-meta -->

		<?php endif; ?>

		</section><!-- .entry-header -->

		<?php echo get_the_post_thumbnail($post->ID, 'large'); ?>

		<div class="entry-content">

			<?php //the_excerpt();
			?>

			<?php
			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . __('Pages:', 'understrap'),
					'after'  => '</div>',
				)
			);
			?>

		</div><!-- .entry-content -->

		<footer class="entry-footer">

			<?php understrap_entry_footer(); ?>

		</footer><!-- .entry-footer -->

</article><!-- #post-## -->
