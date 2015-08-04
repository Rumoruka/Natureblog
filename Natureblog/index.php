<?php get_header(); ?>
		<div class="content"><!--DIV CONTENT -->
			<?php get_sidebar(); ?>
			<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="row">
					<div class="col-xs-10 article">
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><span><?php the_date_xml(); ?></span></h3>
						<?php the_post_thumbnail(); ?>
						<p><?php the_excerpt(); ?></p>
						<div class="row">
							<div class="col-xs-3 read_more">
								<a href="<?php the_permalink(); ?>">Read more...</a>
							</div>
						</div>	
						<div class="row">
							<div class="col-xs-10 tags">
								<?php the_tags(); ?>
							</div>
						</div>	
					</div>
				</div>
			<?php endwhile; ?>
			<div class="row page_nav">
				<div class="col-xs-10">
					<?php
					$args = array(
						'show_all'     => False, 
						'end_size'     => 1,   
						'mid_size'     => 1,     
						'prev_next'    => True,  
						'prev_text'    => __('&laquo;Попередня &#8212;'),
						'next_text'    => __('&#8212; Наступна &raquo;'),
						'add_args'     => False,
						'add_fragment' => '',     
						'screen_reader_text' => ( ' ' ),
					);
					the_posts_pagination( $args );
					?>
				</div>
			</div>
			<?php endif; ?>
		</div><!--/DIV CONTENT -->
	<?php get_footer(); ?>
