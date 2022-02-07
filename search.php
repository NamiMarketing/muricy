<?php get_header(); ?>

<div class="pt30" ">
   <section class="title-bar" style="position: relative;">
      <h1>Procurar</h1>
         <div class="searchbar">
         <?php get_search_form(); ?>
         </div>
   </section>

<section class="row marketing pt30">
    <div class="container">
        <div class="col-md-12">
			<?php if( have_posts() ): ?>
				<?php while( have_posts() ): the_post(); ?>		
					<div class="post1 col-md-4">		
						<?php get_template_part('content', 'archive'); ?>
					</div>
				<?php endwhile; ?>

				<div class="col-xs-12 text-center">
					<?php the_posts_navigation(); ?>
				</div>
			<?php endif; ?>               
        </div>
    </div>
</section>	

<?php get_footer(); ?>