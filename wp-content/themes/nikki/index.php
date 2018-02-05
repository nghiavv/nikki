			<?php get_header(); ?>
			<!--コンテンツ-->
			<div id="content">
				<?php if(is_category()): ?>
					<p id="pagetitle">
						<?php single_cat_title(); ?>
					</p>
				<?php endif; ?>
				<?php if(is_month()): ?>
					<p id="pagetitle">
						<?php
							single_month_title();
						   // echo $year . ' 年 ' . $monthnum . ' 月 ';
						//	$thisyear = substr($m, 0, 4);
						//	$thismonth = substr($m, 4, 2);
						//	echo $thisyear . ' 年 ' . $thismonth . ' 月 ';
						?>
					</p>
				<?php endif; ?>
					
				<?php if(have_posts()): while(have_posts()): the_post();?>
				<div class="post">
					<h2>
						<a href="<?php the_permalink(); ?>">
							<?php the_title(); ?></a>			
					</h2>
					<?php the_content();?>
					<p class="postinfo">
						<?php echo get_the_date(); ?> <?php the_time(); ?> | カテゴリー：<?php the_category('、'); ?> | 
						<a href="<?php comments_link(); ?>">コメント<?php comments_number(' (0) ', ' (1) ', ' (%) '); ?>						</a>
					</p>
				</div>
				<?php if(is_single()) : ?>		
					<p class="pagelink">
						<span class="prevpage"><?php previous_post_link('[前の記事] %link'); ?></span>
						<span class="nextpage"><?php next_post_link('[次の記事] %link'); ?></span>						
					</p>
				<?php endif; ?>
				<?php endwhile; endif; ?>
				<?php if(is_home()): ?>
				<p class="pagelink">
					<span class="nextpage"><?php next_posts_link('次の記事&raquo;');?></span>
					<span class="prevpage"><?php previous_posts_link('&laquo;前の記事'); ?></span>
				</p>
				<?php endif;?>
				<?php if(is_archive()) : ?>
					<p class="pagelink">
						<span class="nextpage"><?php next_posts_link('次の記事&raquo;');?></span>
						<span class="prevpage"><?php previous_posts_link('&laquo;前の記事'); ?></span>
					</p>
				<?php endif; ?>
				<?php comments_template(); ?>
			</div>
			<?php get_sidebar(); ?>
			<?php get_footer(); ?>
		