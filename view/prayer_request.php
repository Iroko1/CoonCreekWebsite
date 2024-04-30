

<?php include "../includes/cdnlinks.php" ?>
<?php include "../includes/nav.php" ?>
<?php include "../model/database.php"?>

<link rel= "stylesheet" href= "../view/styles.css">

<h3 class="prayer-request-title">Prayer Request</h3>
<h4>Please enter your prayer request below and it will be sent directly to the Pastor</h4>

<div class="form-container">

<form action="../model/process_form.php" method="POST" class="row">

<div class="row">
  <div class="col">
    <label for="firstNameInput" class="form-label">First Name</label>
    <input type="text" class="form-control" name="first_name" placeholder="First name" aria-label="First name">
  </div>
  <div class="col">
    <label for="lastNameInput" class="form-label">Last Name</label>
    <input type="text" class="form-control" name="last_name" placeholder="Last name" aria-label="Last name">
  </div>
</div>

<div class="mb-3">
  <label for="FormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control" id="FormControlInput1" name="email" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Please enter your prayer request</label>
  <textarea class="form-control" name="prayer_request" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>

<div class="col-auto">
    <button type="submit" class="btn btn-primary" name="submit_form2">Submit</button>
</div>

</form>

</div>