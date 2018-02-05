<div id="comments">
	<?php if(have_comments()) : ?>
	<h3>
		コメント
	</h3>	
	<ul>
		<?php wp_list_comments('callback=mydesign'); ?>
	</ul>
	<?php endif; ?>
	<?php comment_form(); ?>
</div>