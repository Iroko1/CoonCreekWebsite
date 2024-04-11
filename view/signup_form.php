

<?php include "../includes/cdnlinks.php" ?>
<?php include "../includes/nav.php" ?>

<link rel= "stylesheet" href= "../view/styles.css">

<h1 class="church-title">Coon Creek Baptist Church</h1>
<h3>Member Sign-Up</h3>
<h4>Please complete the form to sign up for information and notification of Church events</h4>

<div class="form-container">

<form action="process_form.php" method="POST"  class="row g-3">

<div class="row g-3">
  <div class="col">
    <label for="form-control" class="form-label">First Name</label>
    <input type="text" class="form-control" name="first_name" placeholder="First name" aria-label="First name">
  </div>
  <div class="col">
    <label for="form-control" class="form-label">Last Name</label>
    <input type="text" class="form-control" name="last_name" placeholder="Last name" aria-label="Last name">
  </div>
</div>

  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="email">
  </div>
  <div class="col-md-6">
    <label for="inputPhone" class="form-label">Phone</label>
    <input type="phone" class="form-control" name="phone" id="inputPhone" placeholder="phone">
  </div>
  
  
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" name="address" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Address 2</label>
    <input type="text" class="form-control" name="address2" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" name="city" id="inputCity" placeholder="city">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">State</label>
    <select id="inputState" class="form-select" name="state" placeholder="state">
      <option selected>Choose...</option>
      <option selected>Alabama</option>
      <option selected>Alaska</option>
      <option selected>Arizona</option>
      <option selected>Arkansas</option>
      <option selected>California</option>
      <option selected>Colorado</option>
      <option selected>Connecticut</option>
      <option selected>Delaware</option>
      <option selected>Florida</option>
      <option selected>Georgia</option>
      <option selected>Hawaii</option>
      <option selected>Idaho</option>
      <option selected>Illinois</option>
      <option selected>Indiana</option>
      <option selected>Iowa</option>
      <option selected>Kansas</option>
      <option selected>Kentucky</option>
      <option selected>Louisiana</option>
      <option selected>Maine</option>
      <option selected>Maryland</option>
      <option selected>Massachusetts</option>
      <option selected>Michigan</option>
      <option selected>Minnesota</option>
      <option selected>Mississippi</option>
      <option selected>Missouri</option>
      <option selected>Montana</option>
      <option selected>Nebraska</option>
      <option selected>Nevada</option>
      <option selected>New Hampshire</option>
      <option selected>New Jersey</option>
      <option selected>New Mexico</option>
      <option selected>New York</option>
      <option selected>North Carolina</option>
      <option selected>North Dakota</option>
      <option selected>Ohio</option>
      <option selected>Oklahoma</option>
      <option selected>Oregon</option>
      <option selected>Pennsylvania</option>
      <option selected>Rhode Island</option>
      <option selected>South Carolina</option>
      <option selected>South Dakota</option>
      <option selected>Tennessee</option>
      <option selected>Texas</option>
      <option selected>Utah</option>
      <option selected>Vermont</option>
      <option selected>Virginia</option>
      <option selected>Washington</option>
      <option selected>West Virginia</option>
      <option selected>Wisconsin</option>
      <option selected>Wyoming</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text" class="form-control" name="zip" id="inputZip">
  </div>
  
  <div class="ministry_checklist_info">
    <h6>Please choose from the following ministries and we will contact you (check as many as you would like)<h6>
  </div>
  
  
  <div class="checkbox-container">
  <!-- Checkbox 1 -->
  <div class="form-check">
    <input class="form-check-input" type="checkbox" name="team_kid" id="kidsCheck">
    <label class="form-check-label" for="kidsCheck">
      TeamKID
    </label>
  </div>
  <!-- Checkbox 2 -->
  <div class="form-check">
    <input class="form-check-input" type="checkbox" name="youth" id="youthCheck">
    <label class="form-check-label" for="youthCheck">
      Youth Group
    </label>
  </div>
   <!-- Checkbox 3 -->
  <div class="form-check">
    <input class="form-check-input" type="checkbox" name="womens" id="womensCheck">
    <label class="form-check-label" for="womensCheck">
      TLC Women's Group
    </label>
  </div>
 
  <!-- Add more checkboxes here following the same structure -->
</div>


  <div class="col-12 button-container">
    <button type="submit" class="btn btn-primary" name="submit_form1">Sign Up</button>
  </div>


</form>

</div>