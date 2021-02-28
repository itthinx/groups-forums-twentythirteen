<?php
/**
 * single-topic.php
 *
 * This is the adjusted template for Topics (topic custom post type).
 */

get_header(); ?>

	<div id="primary" class="content-area topic">
		<div id="content" class="site-content" role="main">

			<?php
			// Start the loop.
			while ( have_posts() ) :
				the_post();
				get_template_part( 'content-topic', get_post_format() );
				twentythirteen_post_nav();
				comments_template();
			endwhile;
			?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php
	get_sidebar();
	get_footer();
