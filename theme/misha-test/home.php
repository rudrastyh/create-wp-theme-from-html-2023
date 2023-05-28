<?php

get_header();
?>

<?php $slides = get_option( 'my_slider_field' );
 ?>
	<!-- Banner -->
	<?php if( $slides ) : ?>
		<section class="banner full">
			<?php foreach( $slides as $slide ) : ?>
			<article>
				<?php
					$image = wp_get_attachment_image_src( $slide[ 'img' ], 'full' );
					echo '<img src="' . $image[0] . '" />';

				?>
				<div class="inner">
					<header>
						<p><?php echo esc_html( $slide[ 'desc' ] ) ?></p>
						<h2><?php echo esc_html( $slide[ 'title' ] ) ?></h2>
					</header>
				</div>
			</article>
			<?php endforeach; ?>

		</section>
	<?php endif; ?>
	

			<?php if( have_posts() ) : ?>
		<!-- One -->
			<section id="one" class="wrapper style2">
				<div class="inner">
					<div class="grid-style">
						<?php while( have_posts() ) : the_post(); ?>
						<div>
							<div class="box">
								<div class="image fit">
									<?php the_post_thumbnail( 'thumbnail' ) ?>
								</div>
								<div class="content">
									<header class="align-center">
										<p>Publish date <?php the_time( 'F j, Y' ) ?></p>
										<h2><?php the_title() ?></h2>
									</header>
									<?php the_excerpt() ?>
									<footer class="align-center">
										<a href="<?php the_permalink() ?>" class="button alt">Learn More</a>
									</footer>
								</div>
							</div>
						</div>
						<?php endwhile; ?>


					</div>
				</div>
			</section>
		<?php endif; ?>




	<?php get_footer() ?>
