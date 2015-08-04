<?php get_header(); ?>
		<div class="content"><!--DIV CONTENT -->
			<?php get_sidebar(); ?>
			<?php while(have_posts()) : the_post(); ?>
			<div class="row">
				<div class="col-xs-10 article">
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><span><?php the_date_xml(); ?></span></h3>
					<p><?php the_content(); ?></p>
				</div>
			</div>
			<div class="row page_nav">
				<div class="col-xs-10">
					<?php 
						the_post_navigation( array(
						'next_text' => '<div class="col-xs-4" style="float: right"><p>' . __( 'Наступна стаття:  ', 'example' ) .
							'<span class="post-title">%title</span></p></div>',
						'prev_text' => '<div class="col-xs-4" style="float: left"><p>' . __( 'Попередня стаття:  ', 'example' ) .
							'<span class="post-title">%title</span></p></div>',
						'screen_reader_text' => ' ',	
						) );
					endwhile; ?>
				</div>
			</div>
			<!--<?php /*get_sidebar(); */?>-->
		</div><!--/DIV CONTENT -->
	<?php get_footer(); ?>
