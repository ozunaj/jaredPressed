<?php
/*
Template Name: Home
*/
get_header(); ?>
<?php $featured_quote = types_render_field('featured-quote');?>
<section class="parallax-lights extra-roomy center white">
	<h1 class="fancy headline close"><?php echo get_bloginfo('name'); ?></h1>
	<span class="close byline"><?php echo get_bloginfo('description'); ?></span><br>
	&nbsp;
	<hr class="light">
	<a class="outline-button-white" href="<?php echo get_home_url(); ?>/#portfolio">View my Portfolio</a>
</section>
<section id="about">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="grid-container roomy">
		<div class="grid-x grid-margin-x">
			<div class="cell center-on-mobile">
				<?php the_content(); ?>
			</div>
		</div>
		<div class="outline text-center">
			<div class="grid-container">
				<div class="grid-x grid-margin-x ">
					<!-- Pearl Street Church-->
					<div class="cell large-offset-2 large-8">
						<h4>Tech tools</h4>
						<p>For my technical background, I have worked with tools such as Git, Drupal, WordPress, NPM, Docker, Composer, Homebrew, Office Products, Bootstrap, Foundation 6... and the list goes on.</p>
					</div>
				</div>
			</div>
			<div class="grid-x grid-margin-x">
				<div class="cell grid-x grid-padding-x small-up-3 medium-up-4 large-up-7">
					<div class="cell"><i class="icon-large fab fa-github-square"></i></div>
					<div class="cell"><i class="icon-large fab fa-drupal"></i></div>
					<div class="cell"><i class="icon-large fab fa-wordpress-simple"></i></div>
					<div class="cell"><i class="icon-large fab fa-npm"></i></div>
					<div class="cell"><i class="icon-large fab fa-windows"></i></div>
					<div class="cell"><i class="icon-large fab fa-docker"></i></div>
					<div class="cell"><i class="icon-large fab fa-bootstrap"></i></div>
				</div>
			</div>
		</div>
	</div>
	<?php 
		endwhile; else: 
	?>
	<p>Sorry, no posts matched your criteria.</p>
	<?php endif; ?>
</section>
<section class="parallax-computer">
	<div class="grid-container roomy">
		<div class="grid-x grid-margin-x">
			<div class="cell center">
				<span class="drop-quote"><?php echo $featured_quote;?></span>

			</div>
		</div>
	</div>
</section>
<section id="portfolio" class="">
	<div class="grid-container roomy">
		<div class="grid-x grid-margin-x far">
			<div class="cell center">
				<h2 class="far">My Portfolio</h2>
			</div>
			<!-- Salud America-->
			<div class="cell large-6 small-order-2 medium-order-1">
				<h3>Salud America!</h3>
				<p>
					Salud America! is a national Latino-focused organization that creates culturally relevant and research-based stories, videos, and tools to inspire people to start and support healthy changes to policies, systems, and environments where Latino children and families can equitably live, learn, work, and play.
				</p>
				<p>
					In this process, I developed a custom theme that they are able to maintain based off of the designs that my team produced. With this project, they now have a better site to connect their audience with the topics that they see more important to them on latino health.
				</p>
				<a class="outline-button-black" href="https://salud-america.org/" target=_blank>Visit Site</a>

			</div>
			<div class="cell large-6 small-order-1 medium-order-2">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/core/computer-cutout.png">
			</div>
		</div>
		<hr class="black">
		&nbsp;
		<div class="grid-x grid-margin-x">
			<!-- Pearl Street Church-->
			<hr>			
			<div class="cell large-6">
				<img class="far" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/core/pearl-street.png">
			</div>
			<div class="cell large-6">
				<h3>Pearl Street Church</h3>
				<p>
					Pearl Street is a church based in the heart of Downtown San Antonio. Their mission is to lead unchurched people into a growing relationship with Christ.
				</p>
				<p>
					In this project, I worked with the church to find what their audience needed from the website and we did some research to see what other churches are doing to bring in new people. Analytics have helped us improve the site content as most users come to the site to learn about the church beliefs and values before they decide to attend. 
				</p>
				<a class="outline-button-black" href="http://pearlstreetchurch.org/" target=_blank>Visit Site</a>

			</div>
			<hr>
		</div>
		<hr>			
	</div>
</section>
<section id="blog" class="roomy blue-bleed">
	<div class="center">
		<h2 class="far white">My Personal Life</h2>
	</div>
	<div class="grid-container">
		<div class="grid-x grid-margin-x">
			<?php
			$args = array( 'posts_per_page' => 3, );
			$homepage_blog_query = new WP_Query( $args );
			 
			if ( $homepage_blog_query->have_posts() ) :  while ( $homepage_blog_query->have_posts() ) : $homepage_blog_query->the_post(); ?>
				<div class="cell large-4 medium-6 small-12 white-bleed smidge-margin">
					<?php
					if (function_exists('display_featured_media')) {
					    display_featured_media('medium');
					} elseif ( has_post_thumbnail() ){
					   	the_post_thumbnail();
					}else{
						echo 'Please install UT Featured Video Plugin';
					}
					?>
					<div class="all-padding">
			        	<h3 class="close"><a class="" href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3><!-- This pulls the title of the post to display -->
			        	<span class="entry-date"><?php echo get_the_date(); ?></span>
			        	<?php the_excerpt(); ?><!-- This pulls the excerpt of the post to display -->
			        	<a class="outline-button-black" href="<?php echo get_permalink(); ?>">Read More</a>
			        </div>
		        </div>
			<?php
			// End the Loop
			    endwhile;
			else:
			    // If no posts match this query, output this text.
			    _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
			endif;
			wp_reset_postdata();
			?>
		</div>
	</div>
	<div class="center roomy"><a class="outline-button-white large" href="<?php echo get_site_url(); ?>/?post_type=post">View All Posts</a></div>
</section>
<section id="contact">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="grid-container roomy">
		<div class="grid-x grid-margin-x">
			<div class="cell">
				<h2 style="text-align: center;">Let's Connect</h2>
				<?php echo do_shortcode('[formidable id=1]'); ?>
			</div>
		</div>
	</div>
	<?php 
		endwhile; else: 
	?>
	<p>Sorry, no posts matched your criteria.</p>
	<?php endif; ?>
</section>

<?php get_footer();
