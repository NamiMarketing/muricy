<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	
	
	<div class="row">
		
		<?php if( has_post_thumbnail() ): ?>
		
			<div class="col-md-4 col-sm-12  pt40">
				<div class="thumbnailtrat"><?php the_post_thumbnail('medium'); ?></div>
			</div>
			<div class="col-md-8 col-sm-12 ">
				<header class="entry-header">
					<?php the_title( sprintf('<h2 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h2>' ); ?>
				</header>
				<?php the_content(); ?>
			</div>
		
		<?php else: ?>
		
			<div class="col-xs-12">
				<?php the_excerpt(); ?>

			</div>
		
		<?php endif; ?>
	</div>

</article>

