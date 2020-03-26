<?php
/**
 * Template Name: Right Sidebar
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package version_8_child
 */

//add class to body
vi_theme_body_classes( 'sidebar-2' );
get_header();
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
		<?php get_template_part( 'sidebar-templates/sidebar', 'right' ); ?>
	</div><!-- #primary -->

<?php
get_footer();
