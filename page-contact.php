<?php
/*
Template Name: Contact Page
*/
?>
<?php get_header(); ?>
	
<section class="page-middle">
	<section class="row">
		<div class="twocol"></div>
		<div class="eightcol">
			<div style="position:relative">
			<div class="page-heading-left"></div>
			<h3 class="page-heading">Contact</h3>
			<div class="page-heading-right"></div>
			</div>
			
			<h1 class="page-subheading">We offer free consultations to assess your case</h1>
		</div>
		<div class="twocol last"></div>	
	</section>
	
	<section class="row contact-form">
		<div class="onecol"></div>
		<div class="fivecol address">
			<p class="contact-business-title">Sullivan Law</p>
			<p>217 Broadway #500, New York, NY 10007</p>
			<p>tel 212-566-8860 | fax 212-333-1060</p>
			<p>info@sullivanlawfirm.com</p>
			<iframe width="460" height="260" style="margin-top:1em" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=217+broadway+%23500,+new+york,+ny&amp;aq=&amp;sll=41.500765,-72.757507&amp;sspn=1.775197,3.13385&amp;ie=UTF8&amp;hq=&amp;hnear=217+Broadway+%23500,+New+York,+10007&amp;t=m&amp;ll=40.71929,-74.009314&amp;spn=0.016914,0.039396&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=217+broadway+%23500,+new+york,+ny&amp;aq=&amp;sll=41.500765,-72.757507&amp;sspn=1.775197,3.13385&amp;ie=UTF8&amp;hq=&amp;hnear=217+Broadway+%23500,+New+York,+10007&amp;t=m&amp;ll=40.71929,-74.009314&amp;spn=0.016914,0.039396&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left">View Larger Map</a></small>
		</div>
		<div class="fivecol">
				<form action="" id="contact-form">
				<input type="text" name="name" id="name" class="rounded contact-input" value="Name*" />
				<input type="text" name="email" id="email" class="rounded contact-input " value="Email*" />
				<input type="text" name="phone" id="phone" class="rounded contact-input" value="Phone*" />
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
				<input type="hidden" name="action" value="ajax_sendmail" />
				<button class="homepage-send rounded"></button>
				</form>
				
				<div class="contact-success">
				<p>Your message was sent successfully.  Thank you!</p>
				</div>
		
		</div>
		<div class="onecol"></div>
	</section>
</section>

<?php get_footer(); ?>