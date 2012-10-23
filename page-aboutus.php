<?php
/*
Template Name: About Us
*/
?>


<?php get_header(); ?>
	
<section class="page-middle about">
	<section class="row">
		<div class="twocol"></div>
		<div class="eightcol">
			<div style="position:relative">
				<div class="page-heading-left"></div>
				<h3 class="page-heading">About Us</h3>
				<div class="page-heading-right"></div>
			</div>
						
			<h1 class="page-subheading">Personal Injury Attorneys</h1>
			<h3 class="about-subheading">Specializing in Workman's Compensations</h3>
				
		</div>
		<div class="twocol last"></div>	
	</section>
	
	<section class="row">
		
		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
		<div class="twocol"></div>
			<div class="eightcol"><?php the_content() ;?></div>
		<?php endwhile; endif; ?>
		<div class="twocol"></div>
		
		
	</section>
	
	
</section>

<section class="aop-bottom">
	<section class="row">
		<div class="onecol"></div>
		
		
		<div class="fourcol about-team">
			<h3>Meet our Team</h3>
			<ul>
				<li>Timothy Sullivan</li>
				<li>James A. Domini</li>
				<li>Julianna Anderson</li>
				<li>Michael Peterons</li>
				<li class="last">Samantha Landsbury</li>
			</ul>
				
		</div>
		<div class="fivecol">
			<img src="<?php bloginfo('template_directory');?>/images/about-groupphoto.jpg">
		</div>
		
		
		<div class="twocol last"></div>
	</section>
</section>


	
	<section class="footer-container">
		<footer class="row footer">
			<div class="threecol footer-logo">
				<img src="images/footer-logo.png">
			</div>
			<div class="threecol"></div>
			<div class="sixcol last">
				<ul class="footernav">
					<li>Home</li>
					<li>Areas of Practice</li>
					<li>About</li>
					<li>Case Results</li>
					<li>Contact</li>
				</ul>
			</div>
		</footer>
		<section class="row copyright">
			<div class="ninecol">
			<p>2012 Sullivan Law Firm | 217 Broadway #500, New York, NY 10007 | tel 212-566-8860 | fax 212-233-1060 | email tsullivan@sullivanlawfirm.com</p> 	
			</div>
			
			<div class="onecol"></div>
			<div class="twocol last site-design">
			<p>Site Design</p>
			</div>
		</section>
	</section>



</body>

</html>