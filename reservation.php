<?php include 'header.php'; ?>
<!-- TOP IMAGE -->
<section class="topSingleBkg topPageBkg">
   <div class="item-img top-reservation"></div>
   <div class="inner-desc">
      <h1 class="post-title single-post-title">Reservation</h1>
      <span class="post-subtitle">Call us +1 800 000 111 or complete the form below</span>
   </div>
</section>
<!-- /TOP IMAGE -->
<!-- WRAP CONTENT -->
<div id="wrap-content" class="page-content custom-page-template">
   <div class="container">
      <div class="row">
         <div class="col-md-6 margin-b54">
            <h4>Reservations are available online 3 weeks before the date of the reservation.</h4>
            <p>We welcome parties of 1 – 20 guests in our main dining room.</p>
         </div>
         <!-- /col-md-6 -->
         <div class="col-md-3 margin-b54">
            <div class="smalltitle">Private Events</div>
            <p>Looking for an ideal venue? Look no further. Corporate dinners, special occasions, Chef’s Table, let us
               handle your needs.</p>
         </div>
         <!-- /col-md-3 -->
         <div class="col-md-3 margin-b54">
            <div class="smalltitle">Open Hours</div>
            <p>Monday - Sunday: 1PM - 10PM<br> Happy Hours: 4PM - 6PM</p>
         </div>
         <!-- /col-md-3 -->
      </div>
      <!-- /row -->
      <div class="row">
         <div class="col-md-12">
            <div id="reservation-holder">
               <form method="post" id="reservation-form" action='include/reservation-process.php'>
                  <div class="contact-holder">
                     <div class="row">
                        <div class="col-md-4">
                           <label> Name*</label>
                           <input name="name" value="" size="40" class="comm-field" aria-required="true"
                              aria-invalid="false" type="text">
                        </div>
                        <div class="col-md-4">
                           <label> Email*</label>
                           <input name="email" value="" size="40" class="comm-field" aria-required="true"
                              aria-invalid="false" type="email">
                        </div>
                        <div class="col-md-4">
                           <label> Phone*</label>
                           <input name="phone" value="" size="40" class="comm-field" aria-invalid="false" type="text">
                        </div>
                     </div>
                     <!-- /row -->
                     <div class="row">
                        <div class="col-md-4">
                           <label> Date*</label>
                           <input name="date" value="" size="40" class="comm-field datepicker" aria-required="true"
                              aria-invalid="false" type="date">
                        </div>
                        <div class="col-md-4">
                           <label> Time*</label>
                           <select name="time" class="comm-field" aria-required="true" aria-invalid="false">
                              <option value="09:00">09:00</option>
                              <option value="10:00">10:00</option>
                              <option value="11:00">11:00</option>
                              <option value="12:00">12:00</option>
                              <option value="13:00">13:00</option>
                              <option value="14:00">14:00</option>
                              <option value="15:00">15:00</option>
                              <option value="16:00">16:00</option>
                              <option value="17:00">17:00</option>
                              <option value="18:00">18:00</option>
                              <option value="19:00">19:00</option>
                              <option value="20:00">20:00</option>
                              <option value="21:00">21:00</option>
                              <option value="22:00">22:00</option>
                           </select>
                        </div>
                        <div class="col-md-4">
                           <label> Seats*</label>
                           <input name="seats" value="" size="40" class="comm-field" aria-invalid="false" type="text">
                        </div>
                     </div>
                     <!-- /row -->
                  </div>
                  <!-- /contact-holder -->
                  <label> Special Requests*</label>
                  <p><textarea name="message" cols="40" rows="5" id="msg-contact" aria-required="true"
                        aria-invalid="false"></textarea></p>
                  <p class="antispam">Leave this empty: <input type="text" name="url" /></p>
                  <p class="alignc"><input value="Book Now" id="submit-contact" type="submit"></p>
               </form>
            </div>
            <!-- /reservation-holder -->
            <div id="output-contact"></div>
         </div>
         <!-- /col-md-12 -->
      </div>
      <!-- /row -->
   </div>
   <!-- /container -->
</div>
<!-- /WRAP CONTENT -->
<?php include 'footer.php'; ?>