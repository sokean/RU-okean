<?php
/**
 * Шаблон для отображения всех отдельных сообщений
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package wpbstarter
 */

get_header(); ?>

	<div id="primary" class="content-area wpbstarter-content-area-padding">
		<main id="main" class="site-main">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">

						<?php
						while ( have_posts() ) : the_post();

							get_template_part( 'template-parts/content', get_post_format() );

							// Если комментарии открыты или у нас есть хотя бы один комментарий, загрузите шаблон комментариев.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

						endwhile; // End of the loop.
						?>

					</div>

					<?php get_sidebar(); ?>
					
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();