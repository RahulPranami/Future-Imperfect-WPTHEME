<?php

/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Future_Imperfect
 */

// if (!is_active_sidebar('sidebar-1')) {
// 	return;
// }
?>

<!-- <aside id="secondary" class="widget-area">
	<?php // dynamic_sidebar('sidebar-1');   ?>
</aside> -->


<?php if (is_singular()): ?>
	<!-- Footer -->
	<section id="footer">
		<ul class="icons">
			<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
			<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
			<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
			<li><a href="#" class="icon solid fa-rss"><span class="label">RSS</span></a></li>
			<li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
		</ul>
		<p class="copyright">&copy; Rahul Pranami. Design: <a href="http://html5up.net">HTML5 UP</a>. Images: <a
				href="http://unsplash.com">Unsplash</a>.</p>
	</section>
<?php else: ?>
	<!-- Sidebar -->
	<section id="sidebar">
		<!-- Intro -->
		<section id="intro">

			<a href="<?php echo esc_url(home_url('/')); ?>" class="logo" rel="home"><img
					src="<?php echo wp_get_attachment_image_url(get_theme_mod('custom_logo'), 'full'); ?>" alt="" /></a>

			<header>
				<h2>
					<?php bloginfo('name'); ?>
				</h2>
				<!-- <p>
				Another fine responsive site template by
				<a href="http://html5up.net">HTML5 UP</a>
			</p> -->
				<?php if (get_bloginfo('description', 'display') || is_customize_preview()): ?>
					<p>
						<?php echo get_bloginfo('description', 'display'); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped           ?>
					</p>
				<?php endif; ?>
			</header>
		</section>

		<!-- Mini Posts -->
		<section>
			<div class="mini-posts">
				<!-- Mini Post -->
				<article class="mini-post">
					<header>
						<h3><a href="single.html">Vitae sed condimentum</a></h3>
						<time class="published" datetime="2015-10-20">October 20, 2015</time>
						<a href="#" class="author"><img src="<?php echo get_template_directory_uri(); ?>/images/avatar.jpg"
								alt="" /></a>
					</header>
					<a href="single.html" class="image"><img
							src="<?php echo get_template_directory_uri(); ?>/images/pic04.jpg" alt="" /></a>
				</article>

				<!-- Mini Post -->
				<article class="mini-post">
					<header>
						<h3><a href="single.html">Rutrum neque accumsan</a></h3>
						<time class="published" datetime="2015-10-19">October 19, 2015</time>
						<a href="#" class="author"><img src="<?php echo get_template_directory_uri(); ?>/images/avatar.jpg"
								alt="" /></a>
					</header>
					<a href="single.html" class="image"><img
							src="<?php echo get_template_directory_uri(); ?>/images/pic05.jpg" alt="" /></a>
				</article>

				<!-- Mini Post -->
				<article class="mini-post">
					<header>
						<h3><a href="single.html">Odio congue mattis</a></h3>
						<time class="published" datetime="2015-10-18">October 18, 2015</time>
						<a href="#" class="author"><img src="<?php echo get_template_directory_uri(); ?>/images/avatar.jpg"
								alt="" /></a>
					</header>
					<a href="single.html" class="image"><img
							src="<?php echo get_template_directory_uri(); ?>/images/pic06.jpg" alt="" /></a>
				</article>

				<!-- Mini Post -->
				<article class="mini-post">
					<header>
						<h3><a href="single.html">Enim nisl veroeros</a></h3>
						<time class="published" datetime="2015-10-17">October 17, 2015</time>
						<a href="#" class="author"><img src="<?php echo get_template_directory_uri(); ?>/images/avatar.jpg"
								alt="" /></a>
					</header>
					<a href="single.html" class="image"><img
							src="<?php echo get_template_directory_uri(); ?>/images/pic07.jpg" alt="" /></a>
				</article>
			</div>
		</section>

		<!-- Posts List -->
		<section>
			<ul class="posts">
				<li>
					<article>
						<header>
							<h3>
								<a href="single.html">Lorem ipsum fermentum ut nisl vitae</a>
							</h3>
							<time class="published" datetime="2015-10-20">October 20, 2015</time>
						</header>
						<a href="single.html" class="image"><img
								src="<?php echo get_template_directory_uri(); ?>/images/pic08.jpg" alt="" /></a>
					</article>
				</li>
				<li>
					<article>
						<header>
							<h3>
								<a href="single.html">Convallis maximus nisl mattis nunc id lorem</a>
							</h3>
							<time class="published" datetime="2015-10-15">October 15, 2015</time>
						</header>
						<a href="single.html" class="image"><img
								src="<?php echo get_template_directory_uri(); ?>/images/pic09.jpg" alt="" /></a>
					</article>
				</li>
				<li>
					<article>
						<header>
							<h3>
								<a href="single.html">Euismod amet placerat vivamus porttitor</a>
							</h3>
							<time class="published" datetime="2015-10-10">October 10, 2015</time>
						</header>
						<a href="single.html" class="image"><img
								src="<?php echo get_template_directory_uri(); ?>/images/pic10.jpg" alt="" /></a>
					</article>
				</li>
				<li>
					<article>
						<header>
							<h3>
								<a href="single.html">Magna enim accumsan tortor cursus ultricies</a>
							</h3>
							<time class="published" datetime="2015-10-08">October 8, 2015</time>
						</header>
						<a href="single.html" class="image"><img
								src="<?php echo get_template_directory_uri(); ?>/images/pic11.jpg" alt="" /></a>
					</article>
				</li>
				<li>
					<article>
						<header>
							<h3>
								<a href="single.html">Congue ullam corper lorem ipsum dolor</a>
							</h3>
							<time class="published" datetime="2015-10-06">October 7, 2015</time>
						</header>
						<a href="single.html" class="image"><img
								src="<?php echo get_template_directory_uri(); ?>/images/pic12.jpg" alt="" /></a>
					</article>
				</li>
			</ul>
		</section>

		<!-- About -->
		<section class="blurb">
			<h2>About</h2>
			<p>
				Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl.
				Sed mattis nunc id lorem euismod amet placerat. Vivamus porttitor
				magna enim, ac accumsan tortor cursus at phasellus sed ultricies.
			</p>
			<ul class="actions">
				<li><a href="#" class="button">Learn More</a></li>
			</ul>
		</section>

		<!-- Footer -->
		<section id="footer">
			<ul class="icons">
				<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
				<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
				<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
				<li><a href="#" class="icon solid fa-rss"><span class="label">RSS</span></a></li>
				<li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
			</ul>
			<p class="copyright">
				&copy; Rahul Pranami. Design: <a href="http://html5up.net">HTML5 UP</a>.
				Images: <a href="http://unsplash.com">Unsplash</a>.
			</p>
		</section>
	</section>


<?php endif; ?>
