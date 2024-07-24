<?php include 'header.php'; ?>
<!-- TOP IMAGE -->
<section class="topSingleBkg topPageBkg topPageCustomH">
   <div class="item-img top-contact"></div>
   <div class="inner-desc">
      <h1 class="post-title single-post-title">Contact</h1>
      <span class="post-subtitle">We're easy to get in touch with</span>
   </div>
</section>
<!-- /TOP IMAGE -->
<!-- WRAP CONTENT -->
<div id="wrap-content" class="page-content custom-page-template">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="page-holder custom-page-template">
               <div class="row">
                  <div class="col-md-4 alignc margin-b72">
                     <div class="contact-icon margin-b24"> <i class="far fa-map"></i></div>
                     <div class="widgettitle margin-b16">Location</div>
                     <p>New York<br> New York, New York 1111</p>
                  </div>
                  <!-- /col-md-4 -->
                  <div class="col-md-4 alignc margin-b72">
                     <div class="contact-icon margin-b24"> <i class="fas fa-phone"></i></div>
                     <div class="widgettitle margin-b16">Contact</div>
                     <p>+1 800 000 111<br> contact@example.com</p>
                  </div>
                  <!-- /col-md-4 -->
                  <div class="col-md-4 alignc margin-b72">
                     <div class="contact-icon margin-b24"> <i class="far fa-bell"></i></div>
                     <div class="widgettitle margin-b16">Open Hours</div>
                     <p>Lunch: 12PM – 2PM<br> Dinner: 6PM – 10PM</p>
                  </div>
                  <!-- /col-md-4 -->
               </div>
               <!-- /row -->
               <div class="row">
                  <div class="col-md-6 mobile-margin-b72">
                     <div id="contact-holder-home">
                        <form method="post" id="contact-form-home" action='include/contact-process-home.php'>
                           <div class="contact-holder">
                              <input name="name" value="" size="40" class="comm-field" aria-required="true"
                                 aria-invalid="false" placeholder="Name" type="text">
                              <input name="email" value="" size="40" class="comm-field" aria-required="true"
                                 aria-invalid="false" placeholder="Email" type="email">
                              <input name="phone" value="" size="40" class="comm-field" aria-invalid="false"
                                 placeholder="Phone" type="text">
                           </div>
                           <!-- /contact-holder -->
                           <p><textarea name="message" cols="40" rows="5" id="msg-contact" aria-required="true"
                                 aria-invalid="false" placeholder="Your Message"></textarea></p>
                           <p class="antispam">Leave this empty: <input type="text" name="url" /></p>
                           <p><input value="Book Now" id="submit-contact" type="submit"></p>
                        </form>
                     </div>
                     <div id="output-contact"></div>
                  </div>
                  <!-- /col-md-6 -->
                  <div class="col-md-6">
                     <div class="gmaps">
                        <iframe
                           src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.25279998672!2d-74.14448761897573!3d40.69763123335769!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York!5e0!3m2!1str!2sus!4v1701870066446!5m2!1str!2sus"
                           height="300" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                     </div>
                  </div>
                  <!-- /col-md-6 -->
               </div>
               <!-- /row -->
            </div>
            <!-- /custom-page-template -->
         </div>
         <!-- /col-md-12 -->
      </div>
      <!-- /row -->
   </div>
   <!-- /container -->
</div>
<!-- /WRAP CONTENT -->

<?php include 'footer.php'; ?>