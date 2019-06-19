<?php 
 require ('menu.php')
?>
<?php
 require 'contactstyle.php';
?>
<br><br>
<div class="container">

   <h1 class="brand"><span>Phoenix Web Design</span></h1>

   <div class="wrapper">

      <!-- COMPANY INFORMATION -->
      <div class="company-info">
         <h3>Phoenix Web Design</h3>

         <ul>
            <li><i class="fa fa-road"></i> 44 Main Street</li>
            <li><i class="fa fa-phone"></i> (555) 555-5555</li>
            <li><i class="fa fa-envelope"></i> test@phoenix.com</li>
         </ul>
      </div>
      <!-- End .company-info -->

      <!-- CONTACT FORM -->
      <div class="contact">
         <h3>E-mail Us</h3>

         <form id="contact-form">

            <p>
               <label>Name</label>
               <input type="text" name="name" id="name" required>
            </p>

            <p>
               <label>Company</label>
               <input type="text" name="company" id="company">
            </p>

            <p>
               <label>E-mail Address</label>
               <input type="email" name="email" id="email" required>
            </p>

            <p>
               <label>Phone Number</label>
               <input type="text" name="phone" id="phone">
            </p>

            <p class="full">
               <label>Message</label>
               <textarea name="message" rows="5" id="message"></textarea>
            </p>

            <p class="full">
               <button type="submit">Submit</button>
            </p>

         </form>
         <!-- End #contact-form -->
      </div>
      <!-- End .contact -->

   </div>
   <!-- End .wrapper -->
</div>
<!-- End .container -->

