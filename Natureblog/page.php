<?php get_header(); ?>
		<div class="content"><!--DIV CONTENT -->
			<?php get_sidebar(); ?>
			<?php while(have_posts()) : the_post(); ?>
			<div class="row">
				<div class="col-xs-10 article">
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<p><?php the_content(); ?></p>
				</div>
			</div>
			<?php endwhile; ?>
		</div><!--/DIV CONTENT -->
	<?php get_footer(); ?>
