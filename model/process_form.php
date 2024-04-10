

<?php error_reporting(E_ALL);
ini_set('display_errors', 1); ?>


<?php include "../model/database.php"?>

<?php
// **** SIGN-UP FORM ****
// See if form 1 was submitted
if(isset($_POST['submit_form1'])) {
// Capture form data
$firstName = $_POST['first_name'];
$lastName = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$address2 = $_POST['address2'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];

// Prepare and bind
$stmt = $db->prepare("INSERT INTO users (first_name, last_name, email, phone, address, address2, city, state, zip) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bindParam(1, $firstName);
$stmt->bindParam(2, $lastName);
$stmt->bindParam(3, $email);
$stmt->bindParam(4, $phone);
$stmt->bindParam(5, $address);
$stmt->bindParam(6, $address2);
$stmt->bindParam(7, $city);
$stmt->bindParam(8, $state);
$stmt->bindParam(9, $zip);

// Execute statement
if ($stmt->execute()) {
  echo "New record created successfully";
} else {
  echo "Error: " . $stmt->errorInfo()[2];
}

// Close statement
$stmt->closeCursor();
}
?>


<?php
// **** PRAYER REQUEST ****
// See if form 2 was submitted
if(isset($_POST['submit_form2'])) {
// Capture the form data
$prayerFirstName = $_POST['first_name'];
$prayerLastName = $_POST['last_name'];
$prayerEmail = $_POST['email'];
$prayerRequest = $_POST['prayer_request'];

// Prepare and bind the SQL statement
$stmt = $db->prepare("INSERT INTO prayer_requests (first_name, last_name, email, prayer_request) VALUES (?, ?, ?, ?)");
    $stmt->bindParam(1, $prayerFirstName);
    $stmt->bindParam(2, $prayerLastName);
    $stmt->bindParam(3, $prayerEmail);
    $stmt->bindParam(4, $prayerRequest);


// Execute the statement
if ($stmt->execute()) {
  // Prayer request inserted successfully
  // Send email notification to the pastor
  
  $subject = "New Prayer Request";
  $message = "A new prayer request has been submitted.\n\nName: $prayerFirstName $prayerLastName\nEmail: $prayerEmail\nRequest: $prayerRequest";
  $to = "melissamika3@gmail.com"; // Update with the pastor's email address
  

  // Send the email
  if (mail($to, $subject, $message)) {
      echo "Prayer request submitted successfully. The pastor has been notified.";
  } else {
      echo "Error sending email: " . error_get_last()['message'];
  }
} else {
  // Error occurred while inserting prayer request
  echo "Error: " . $stmt->errorInfo()[2];
}

// Close statement
$stmt->closeCursor();
}

// Close connection
$db = null;
?>

