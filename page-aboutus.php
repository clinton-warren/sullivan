<?php
/*
Template Name: About Us
*/
?>


<?php get_header(); ?>
	
<section class="page-middle about">
	<section class="row">
		
		<div class="fivecol">
		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>	
		<?php
		if(is_page(10)) {
			$src = get_bloginfo('template_directory') . '/images/About_Tim.jpg';
		}
		elseif(is_page(72)) {
			$src = get_bloginfo('template_directory') . '/images/about_Jim.jpg';
			
		}
		?>
		<img src="<?php echo $src; ?>" class="about-photo">	
		
		<div class="about-team">
		<h1 class="page-subheading" style="text-align:left">Attorneys</h1>
		<ul>
			<li class="list-link"><a href="<?php echo get_permalink(10); ?>">Timothy Sullivan</a></li>
			<li class="list-link"><a href="<?php echo get_permalink(72); ?>">James A. Domini</a></li>
		</ul>
		
		</div>
			
		</div>
		<div class="sevencol last">
			<div style="position:relative">
				<div class="page-heading-left"></div>
				<h3 class="page-heading">About Us</h3>
				<div class="page-heading-right"></div>
			</div>
						
			<h1 class="page-subheading"><?php echo get_post_meta($post->ID, 'name', true); ?></h1>
			<h3 class="about-subheading"><?php echo get_post_meta($post->ID, 'title', true);?></h3>
			
			<?php the_content() ;?>
		</div>
		<?php endwhile; endif; ?>
	
	</section>
	
	
	
	
</section>

<section class="aboutus-bottom">
	<section class="row">
		<section class="onecol"></section>
		<section class="tencol">
		<div style="position:relative">
			<div class="page-heading-left"></div>
			<h3 class="page-heading">About Us</h3>
			<div class="page-heading-right"></div>
		</div>
		<h1 class="page-subheading">Sullivan Law</h1>
		<p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
		et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
		commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
		Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
		</section>
		<section class="onecol last"></section>
	</section>
</section>


	
<?php get_footer();?>