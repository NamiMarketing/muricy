<?php get_header(); ?>

<div class="pt30" ">
    <section class="title-bar">
       <h1>Categorias</h1>
     </section>
</div>

<section class="row marketing pt30">
    <div class="container">
        <div class="col-md-10 col-xs-12">
			<?php if( have_posts() ): ?>
				<?php while( have_posts() ): the_post(); ?>		
					<div class="post1 col-md-10 col col-xs-12">		
						<?php get_template_part('content'); ?>
					</div>
				<?php endwhile; ?>

				<div class="col-md-10 col-xs-12 text-center">
					<?php the_posts_navigation(); ?>
				</div>
			<?php endif; ?>             
        </div>
        <div class="col-sm-2 hide_on_mobile">
			<?php get_sidebar(); ?>
		</div>
    </div>
</section>	

<?php get_footer(); ?>