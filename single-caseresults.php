<?php get_header();?>
	
<section class="page-middle">
	<section class="row">
		<div class="twocol"></div>
		<div class="eightcol">
				<div style="position:relative">
				<div class="page-heading-left"></div>
				<h3 class="page-heading">Case Results</h3>
				<div class="page-heading-right"></div>
				</div>
				<?php if(have_posts()) : ?>
					<h1 class="page-subheading"><?php the_title();?></h1>
				
		
				<?php while(have_posts()) : the_post(); ?>
			
						
								<p><?php the_content();?></p>
								
													
							
					<?php endwhile; endif; ?>
					
				
					
		
				
		</div>
		<div class="twocol last"></div>	
	</section>
</section>
	
<?php get_footer(); ?>