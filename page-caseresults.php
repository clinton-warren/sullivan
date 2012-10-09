<?php
/*
Template Name: Case Results Page
*/
?>

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
					<h1 class="page-subheading">Lorem Ipsum dolor we get big results for our clients</h1>
				
		
					<?php $custom_query = new WP_Query(array ( 'post_type'=> 'caseresults')); // exclude category 9
					while($custom_query->have_posts()) : $custom_query->the_post(); ?>

							<div class="case-result">
								<p class="case-result-title"><?php the_title();?></p>
								<p><?php echo get_the_excerpt();?><span class="case-result-readmore"><a href="<?php the_permalink();?>">Read more</span></a></p>
													
								</div>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); // reset the query ?>
					
					

					
					
		
				
		</div>
		<div class="twocol last"></div>	
	</section>
</section>
	
<?php get_footer(); ?>