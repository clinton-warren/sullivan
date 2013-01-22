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
				<li class="list-link"><a href="<?php echo get_permalink(17); ?>">Personal Injury</a></li>
				<li class="list-link"><a href="<?php echo get_permalink(19); ?>">Motor Vehicle Accidents</a></li>
				<li class="last list-link"><a href="<?php echo get_permalink(21); ?>">Trip, Slip, and Fall</a></li>
			</ul>
		</div>
		<div class="fourcol">
			<ul>
				<li class="list-link"><a href="<?php echo get_permalink(24); ?>">Construction Accidents</a></li>
				<li class="list-link"><a href="<?php echo get_permalink(26); ?>">Medical Malpractice</a></li>
				<li class="last list-link"><a href="<?php echo get_permalink(28); ?>">Premise Liability</a></li>
			</ul>
		</div>
		<div class="fourcol last">
			<ul>
				<li class="list-link"><a href="<?php echo get_permalink(30); ?>">Worker's Compensation</a></li>
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