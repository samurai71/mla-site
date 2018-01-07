<?php 
    $pageTitle = "Contact Us";
    include "includes/header.php";
 ?>
<div class="grid-x grid-margin-x content-wrap">
        <div class="large-12 cell">
          <h2>Contact</h2>
    
          <!-- <p>Phone: <i class="fa fa-phone" aria-hidden="true"></i>
     <a href="tel:516145272">(519)614-5272</a> Text Message (SMS):<a href="sms://+15196145272">Send SMS</a></p> -->
          
    		<section>
    		<div class="row">
    		<div class="small-12 medium-6 large-6 columns">
    		<h2 class="hide">Contact Form</h2>
    		<form action="send_email_form.php" method="post" data-abide novalidate>
    		<div data-abide-error class="alert callout" style="display: none;">
    		    <p><i class="fi-alert"></i> There are some errors in your form.</p>
    		  </div>
    		  <div class="name-field">
    		    <label>Your name <small>required</small>
    		      <input type="text" name="name" required pattern="[a-zA-Z]+" placeholder="Please type your name here.">
    		    </label>
    		  </div>
    		  <div class="email-field">
    		    <label>Email <small>required</small>
    		      <input type="email" name="email" required placeholder="Please enter in your email address here.">
    		    </label>
    		    <span class="form-error">
    		          Email address is required.
    		        </span>
    		  </div>
    		  <div class="phone-field">
    		                    <label>Phone Number
    		                     <input type="tel" name="phone" placeholder="Please type your phone number here.">
    		                    </label>
    		                     </div>
    		  <div class="comments-field">
    		                    <label>Comments <small>required</small>
    		                    <textarea name="comments" placeholder="None" required></textarea>
    		                    </label>
    		                     </div>
    		  <button class="button" type="submit" value="Submit">Submit</button>
    		  <button class="alert button" type="reset" value="Reset">Reset</button>
    		</form>
    		</div>
    		</div>
    		</section>
    
    		
    
        </div>
        
      </div>

      <?php 
        include "includes/socialmedia.php";
        include "includes/footer.php";
 ?>