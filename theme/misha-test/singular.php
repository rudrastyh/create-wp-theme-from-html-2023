<?php get_header(); the_post(); ?>

		<!-- One -->
			<section id="One" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
						<p>Publish date <?php the_time( 'F j, Y' ) ?></p>
						<h2><?php the_title() ?></h2>
					</header>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style2">
				<div class="inner">
					<div class="box">
						<div class="content">
							<header class="align-center">
								<?php the_excerpt() ?>
								<h2><?php the_title() ?></h2>
							</header>
							<?php the_content() ?>

						</div>
					</div>
				</div>
			</section>

	<?php get_footer() ?>
