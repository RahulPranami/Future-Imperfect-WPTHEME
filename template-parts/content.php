<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Future_Imperfect
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<div class="title">
			<h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
			<p>Lorem ipsum dolor amet nullam consequat etiam feugiat</p>
		</div>
		<?php
		if ('post' === get_post_type()) :
		?>
			<div class="meta">
				<!-- <time class="published" datetime="2015-11-01">November 1, 2015</time> -->
				<?php future_imperfect_posted_on(); ?>

				<a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))) ?>" class="author"><span class="name"><?php echo esc_html(get_the_author()) ?></span><img src="<?php echo get_template_directory_uri(); ?>/images/avatar.jpg" alt="" /></a>
			</div>
		<?php endif; ?>
	</header>

	<?php future_imperfect_post_thumbnail(); ?>

	<?php the_excerpt(); ?>

	<footer>
		<ul class="actions">
			<li>
				<a href="<?php echo get_permalink(); ?>" class="button large">Continue Reading</a>
			</li>
		</ul>
		<!-- <ul class="stats">
			<li><a href="#">General</a></li>
			<li><a href="#" class="icon solid fa-heart">28</a></li>
			<li><a href="#" class="icon solid fa-comment">128</a></li>
		</ul> -->
		<ul class="stats">
			<!-- <li><a href="#">General</a></li> -->
			<!-- <li><a href="#" class="icon solid fa-heart">28</a></li> -->
			<!-- <li><a href="#" class="icon solid fa-comment">128</a></li> -->
			<?php future_imperfect_entry_footer(); ?>
		</ul>
	</footer>
</article>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php // future_imperfect_post_thumbnail();
	?>

	<div class="entry-content">
		<?php

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__('Pages:', 'future-imperfect'),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
