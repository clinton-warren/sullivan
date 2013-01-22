<?php 

get_header() ?>
	
	<section class="homepage-middle">
		<section class="row">
		<div class="fourcol">
			<h2>Areas of Practice</h2>
				<ul>
					<li class="list-link"><a href="<?php echo get_permalink(17);?>">Personal Injury</a></li>
					<li class="list-link"><a href="<?php echo get_permalink(19);?>">Motor Vehicle Accidents</a></li>
					<li class="list-link"><a href="<?php echo get_permalink(21);?>">Trip, Slip and Fall</a></li>
					<li class="list-link"><a href="<?php echo get_permalink(30);?>">Workers Compensation</a></li>
					<li class="list-link"><a href="<?php echo get_permalink(24);?>">Construction Accidents</a></li>
					<li class="list-link"><a href="<?php echo get_permalink(26);?>">Medical Malpractice</a></li>
					<li class="last list-link"><a href="<?php echo get_permalink(28);?>">Premise Liability</a></li>
				</ul>
		</div>
		
		<div class="fourcol"></div>
		
		<div class="fourcol last homepage-middle-right">
			<h2>New York City Personal Injury Attorney</h2>
			<h3>Specializing in Workman's Compensation Cases</h3>
			<div class="homepage-middle-contact"><p>212-566-8860</p></div>
			
		</div>
		
		</section>
	</section>
	
	<section class="row homepage-consultation">
		<div class="onecol"></div>
		<div class="tencol">
			<h3>We offer free consultations to assess your case.  <span class="homepage-contactbold"><a href="<?php echo get_permalink(14);?>">Contact Us</a></span></h3>
		</div>
		<div class="onecol last"></div>	
	</section>
	
	<section class="homepage-caseresults">
		<section class="row">
			<div class="twocol"></div>
			<div class="eightcol">
				<h3>Latest Verdict</h3>
					<?php $custom_query = new WP_Query(array ( 'post_type' => 'caseresults', 'posts_per_page'=>1)); // exclude category 9
					while($custom_query->have_posts()) : $custom_query->the_post(); ?>
				<h2><?php the_title();?></h2>
				<p><?php the_content();?></p>
				<a href="<?php echo get_permalink(12); ?>"><img src="<?php bloginfo('template_directory')?>/images/caseresults-button.png"></a>
				<?php endwhile; ?>
			</div>
			<div class="twocol last"></div>
			
		</section>
	</section>
	
	<section class="homepage-contact">
		<div class="row">
			<div class="twocol"></div>
			<div class="eightcol">
				<h2>Contact Us</h2>
			</div>
			<div class="twocol last"></div>
		</div>
			
			
		<section class="row">
			<div class="twocol"></div>
			
				
				<form id="homepage-contact" action="" method="POST">
					
					<div class="fourcol">
					<input type="text" name="name" id="name" class="rounded contact-input" value="Name" />
					<input type="text" name="email" id="email" class="rounded contact-input" value="Email" />
					<input type="text" name="phone" id="phone" class="rounded contact-input" value="Phone" />
					</div>
					
					<div class="fourcol">
					<select class="rounded" name="area" id="area">
					<option value=''>The Nature of Your Case</option>
					<option value='cerebral-palsy'>Cerebral&#160;Palsy</option>
					<option value='construction-accident'>Construction&#160;Accident</option>
					<option value='erb-s-palsy'>Erb&#39;s&#160;Palsy</option>
					<option value='lead-exposure'>Lead&#160;Exposure</option>
					<option value='medical-malpractice'>Medical&#160;Malpractice</option>
					<option value='new-york-civil-rights-violations'>New York Civil Rights&#160;Violations</option>
					<option value='police-assault-and-abuse'>Police Assault and&#160;Abuse</option>
					<option value='traumatic-brain-injury'>Traumatic Brain Injury&#160;(TBI)</option>
					<option value='motor-vehicle-accidents'>Motor Vehicle Accidents</option>
					<option value='other'>Other Serious Injuries</option>
					</select>
								
				
					<textarea class="rounded contact-input" name="message" id="message">Message</textarea>
					<input type="hidden" name="action" value="ajax_sendmail">
					<button class="homepage-send rounded" type="submit"></button>
					</form>
					</div>
			
					
					<div class="twocol"></div>
					<div class="eightcol">
					<div class="contact-success">
					<p>Your message has been sent successfully.  Thank you!</p>
					</div>
					</div>
					<div class="twocol last"></div>
					
			
			<div class="twocol last"></div>
			
		</section>
	</section>

<?php get_footer(); ?>