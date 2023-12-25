<?php
require_once('header.php')
?>


<div class="container">
    <div class="row">
       
        <div class="col-12 mt-3 bg-danger">
            <img src="./Image/appointment.png" alt="" class="cimg" >
        </div>
    </div>

    <div class="row mt-3">
        <h3 class="text-center">Book Your Appointment </h3>
        <div class="col-12">
        <div class="container">
    <div class="row">
        <div class="col-8 offset-2 mt-3">
    <form class="row g-3" method="post" action="info.php" enctype="multipart/form-data">
  <div class="col-md-6 col-12">
    <label for="inputproduct" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" id="inputproduct" placeholder="Name" require>
  </div>
  <div class="col-md-6 col-12col-12">
  <label for="inputAddress" class="form-label">Phone No.</label>
    <input type="text" name="phone"class="form-control" id="inputAddress" placeholder="Phone">
 
  </div>
  <div class="col-md-6 col-12">
  <label for="inputAddress" class="form-label">Mail id</label>
    <input type="text" name="mail"class="form-control" id="inputAddress" placeholder="Mail" require>
 
  </div>

  <div class="col-md-6 col-12">
  <label for="inputAddress" class="form-label">Appointment Date</label>
    <input type="date" name="date"class="form-control" id="inputAddress" placeholder="Mail" require>
 
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Massage</label>
    <textarea class="form-control" name="massage" aria-label="With textarea" placeholder="Massage"></textarea>
    
  </div>
  
  <div class="col-12 mb-3 text-end">
    <button type="submit" name="submit" class="btn btn-primary">Appointment Now</button>
  </div>
</form>
</div>
</div>
</div>
        </div>
    </div>


</div>