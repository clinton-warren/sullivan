<?php
/*
Template Name: Areas of Practice
*/
?>


<?php get_header();?>
	
<section class="page-middle">
	<section class="row">
		<div class="twocol"></div>
		<div class="eightcol areas-of-practice">
			<div style="position:relative">
				<div class="page-heading-left"></div>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<h3 class="page-heading">Areas of Practice</h3>
				<div class="page-heading-right"></div>
			</div>
			
			<h1 class="page-subheading"><?php the_title();?></h1>
			<p><?php the_content();?></p>
			<?php endwhile; endif;?>
		</div>
		<div class="twocol last"></div>	
	</section>
</section>

<section class="aop-bottom">
	<section class="row">
		<div class="twocol"></div>
		<div class="eightcol">
			<h3>More Areas of Practice</h3>
		</div>
		<div class="twocol last"></div>	
	</section>
	<section class="row">
		
		<div class="fourcol">
			<ul>
				<li>Personal Injury</li>
				<li>Motor Vehicle Accidents</li>
				<li class="last">Trip, Slip, and Fall</li>
			</ul>
		</div>
		<div class="fourcol">
			<ul>
				<li>Construction Accidents</li>
				<li>Medical Malpractice</li>
				<li class="last">Premise Liability</li>
			</ul>
		</div>
		<div class="fourcol last">
			<ul>
				<li>Worker's Compensation</li>
			</ul>
		</div>
		
	
	</section>
	
	
</section>

<section class="row">
	<div class="onecol"></div>
	<div class="tencol homepage-consultation">
		<h3>We offer free consultations to assess your case.  <span class="homepage-contactbold">Contact Us</span></h3>
	</div>
	<div class="onecol last"></div>	
</section>

	<?php get_footer();?>