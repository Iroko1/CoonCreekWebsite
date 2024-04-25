<?php
include_once("..". DIRECTORY_SEPARATOR ."model". DIRECTORY_SEPARATOR ."database.php");

// Function to get all members
function getMembers($db) {
    $sql = "SELECT * FROM members";
    $result = $db->query($sql);
    return $result;
}

// Function to get all prayer requests
function getPrayerRequests($db) {
    $sql = "SELECT * FROM prayer_requests";
    $result = $db->query($sql);
    return $result;
}

// Check if form is submitted to add a new member
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_member'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $member_address = $_POST['member_address'];
    $member_address2 = $_POST['member_address2'];
    $member_city = $_POST['member_city'];
    $member_state = $_POST['member_state'];
    $member_zip = $_POST['member_zip'];
    $member_email = $_POST['member_email'];
    $member_phone = $_POST['member_phone'];
    
    // Insert new member into database
    $sql = "INSERT INTO members (first_name, last_name, member_address, member_address2, member_city, member_state, member_zip, member_email, member_phone) 
            VALUES ('$first_name', '$last_name', '$member_address', '$member_address2', '$member_city', '$member_state', '$member_zip', '$member_email', '$member_phone')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New member added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Get all members
$members = getMembers($db);

// Get all prayer requests
$prayerRequests = getPrayerRequests($db);
