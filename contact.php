<?php include_once'header2.php'; 

if(isset($_POST['button'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];
	
	$query = mysqli_query($db, "INSERT INTO contact VALUES ('', '$name', '$email', '$phone', '$message')");
	echo "Contact information successfull";

}
?>
    
<section id="contact">
  <div class="container">
    <div class="well well-sm">
      <h3><strong>Contact Us</strong></h3>
    </div>
  
  <div class="row">
    <div class="col-md-7">
        
      </div>

      <div class="col-md-5">
          <h4><strong>Get in Touch</strong></h4>
        <form action="contact.php" method="POST">
          <div class="form-group">
            <input type="text" class="form-control" name="name" value="" placeholder="Name" required>
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="email" value="" placeholder="E-mail" required>
          </div>
          <div class="form-group">
            <input type="tel" class="form-control" name="phone" value="" placeholder="Phone" required>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="3" placeholder="Message" required></textarea>
          </div>
          <button class="btn btn-default" type="submit" name="button">
              <i class="fa fa-paper-plane-o" aria-hidden="true"></i> Submit
          </button>
        </form>
      </div>
    </div>
  </div>
</section>
<?php 
include'footer.php';
 ?>
