<?php
// Template Name: Menu da Semana
?>
<?php get_header(); ?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<section class="container">
			<h2 class="subtitulo"><?php the_title()?></h2>
			
			<?php if(have_rows('categorias')): while(have_rows('categorias')) : the_row(); ?>
				<div class="menu-item grid-8">
					<h2><?php the_sub_field('categoria'); ?></h2>
					<ul>
					<?php if(have_rows('pratos')): while(have_rows('pratos')) : the_row(); ?>
	
						<li>
							<span><sup>R$</sup><?php the_sub_field('preco'); ?></span>
							<div>
								<h3><?php the_sub_field('nome'); ?></h3>
								<p><?php the_sub_field('desc'); ?></p>
							</div>
						</li>

					<?php endwhile; else : endif; ?>
					</ul>
				</div>
			<?php endwhile; else : endif; ?>

		</section>
	<?php endwhile; else: ?>
	<section class="container sobre">
		<div class="grid-8">
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		</div>
	</section>
	<?php endif; ?>

<?php get_footer(); ?>		