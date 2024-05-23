<?php include "../includes/cdnlinks.php" ?>
<?php include "../includes/nav.php" ?>

<link rel="stylesheet" href="../view/styles.css">

<h3 class="request-info-title">Request Information</h3>
<h4>Please complete this form to request information and we will contact you shortly!</h4>

<div class="form-container">

  <form action="../model/process_form.php" method="POST" class="row g-3">

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
        <option>Alabama</option>
        <option>Alaska</option>
        <option>Arizona</option>
        <option>Arkansas</option>
        <option>California</option>
        <option>Colorado</option>
        <option>Connecticut</option>
        <option>Delaware</option>
        <option>Florida</option>
        <option>Georgia</option>
        <option>Hawaii</option>
        <option>Idaho</option>
        <option>Illinois</option>
        <option>Indiana</option>
        <option>Iowa</option>
        <option>Kansas</option>
        <option>Kentucky</option>
        <option>Louisiana</option>
        <option>Maine</option>
        <option>Maryland</option>
        <option>Massachusetts</option>
        <option>Michigan</option>
        <option>Minnesota</option>
        <option>Mississippi</option>
        <option>Missouri</option>
        <option>Montana</option>
        <option>Nebraska</option>
        <option>Nevada</option>
        <option>New Hampshire</option>
        <option>New Jersey</option>
        <option>New Mexico</option>
        <option>New York</option>
        <option>North Carolina</option>
        <option>North Dakota</option>
        <option>Ohio</option>
        <option>Oklahoma</option>
        <option>Oregon</option>
        <option>Pennsylvania</option>
        <option>Rhode Island</option>
        <option>South Carolina</option>
        <option>South Dakota</option>
        <option>Tennessee</option>
        <option>Texas</option>
        <option>Utah</option>
        <option>Vermont</option>
        <option>Virginia</option>
        <option>Washington</option>
        <option>West Virginia</option>
        <option>Wisconsin</option>
        <option>Wyoming</option>
      </select>
    </div>
    <div class="col-md-2">
      <label for="inputZip" class="form-label">Zip</label>
      <input type="text" class="form-control" name="zip" id="inputZip">
    </div>

    <!-- Check boxes -->
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

      <div class="col-12 button-container">
        <button type="submit" class="btn btn-primary" name="submit_form1">Request Info</button>
      </div>
    </div>



  </form>
  
</div>
<?php include "../includes/footer.php" ?>