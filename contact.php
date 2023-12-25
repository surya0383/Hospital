<?php
require_once('header.php');
?>

<title>Contact us our hospital</title>

<div class="container">
    <div class="row">
        <div class="col-12">
            <img src="./Image/contact-us page.jpg" alt="" class="w-100" >
        </div>
    </div>

    <div class="row mt-3">
        <h3 class="text-center">Get In Touch</h3>
        <div class="col-12">
        <div class="container">
    <div class="row">
        <div class="col-8 offset-2">
    <form class="row g-3" method="post" action="info.php" enctype="multipart/form-data">
  <div class="col-12">
    <label for="inputproduct" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" id="inputproduct" placeholder="Name" required>
  </div>
  <div class="col-12">
  <label for="inputAddress" class="form-label">Phone No.</label>
    <input type="text" name="phone"class="form-control" id="inputAddress" placeholder="Phone">
 
  </div>
  <div class="col-12">
  <label for="inputAddress" class="form-label">Mail id</label>
    <input type="text" name="mail"class="form-control" id="inputAddress" placeholder="Mail" required>
 
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Massage</label>
    <textarea class="form-control" name="massage" aria-label="With textarea" placeholder="Massage"></textarea>
    
  </div>
  
  <div class="col-12">
    <button type="submit" name="submit" class="btn btn-primary">Send Now</button>
  </div>
</form>
</div>
</div>
</div>
        </div>
    </div>


</div>

















































<?php
require_once('footer.php')
?>