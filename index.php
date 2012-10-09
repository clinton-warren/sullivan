<?php 

get_header() ?>
	
	<section class="homepage-middle">
		<section class="row">
		<div class="fourcol">
			<h2>Areas of Practice</h2>
				<ul>
					<li>Personal Injury</li>
					<li>Motor Vehicle Accidents</li>
					<li>Trip, Slip and Fall</li>
					<li>Workers Compensation</li>
					<li>Construction Accidents</li>
					<li>Medical Malpractice</li>
					<li class="last">Premise Liability</li>
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
			<h3>We offer free consultations to assess your case.  <span class="homepage-contactbold">Contact Us</span></h3>
		</div>
		<div class="onecol last"></div>	
	</section>
	
	<section class="homepage-caseresults">
		<section class="row">
			<div class="twocol"></div>
			<div class="eightcol">
				<h3>Latest Verdict</h3>
				<h2>$7.4 Million for Traumatic Brain Injury</h2>
				<p>Our client, a 28-year old female accountant, sustained a brain injury when she was struck
					while crossing in a sidewalk.  The driver claimed that she ran out between parked cars.
					Mauris quis aliquam nibh.  In vitae nulla lectus, non eleifend elit.  Sed turpis dolor, placeratet
					quis facillis eget, ullamorper sed turpis.</p>
				<img src="<?php bloginfo('template_directory')?>/images/caseresults-button.png">
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
			<div class="fourcol">
				
				<form action="" method="POST">
					<input type="text" name="name" id="name" class="rounded " value="Name*" />
					<input type="text" name="email" id="email" class="rounded " value="Email*" />
					<input type="text" name="phone" id="phone" class="rounded" value="Phone*" />
					
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
				<textarea class="rounded" name="message" id="message">Message</textarea>
				<input type="hidden" name="form_name" value="contact_form" />
				<button class="homepage-send rounded"></button>
				</form>
			</div>
			
			<div class="twocol last"></div>
			
		</section>
	</section>

<?php get_footer(); ?>