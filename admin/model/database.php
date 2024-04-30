<?php
include("..". DIRECTORY_SEPARATOR ."model". DIRECTORY_SEPARATOR ."database.php");



// Function to get all info requests
function getInfoRequests($db) {
    $sql = "SELECT * FROM info_requests ORDER BY created_date DESC";
    $result = $db->query($sql);
    return $result;
}

// Function to get all prayer requests
function getPrayerRequests($db) {
    $sql = "SELECT * FROM prayer_requests ORDER BY created_date DESC";
    $result = $db->query($sql);
    return $result;
}

// Function to get all members
function getMembers($db) {
    $sql = "SELECT * FROM members ORDER BY created_date DESC";
    $result = $db->query($sql);
    return $result;
}

// Function to remove an info request
function removeInfoRequest($db, $id) {
    $sql = "DELETE FROM info_requests WHERE requestID = $id";
    $result = $db->query($sql);
    return $result;
}

function removePrayerRequest($db, $id) {
    $sql = "DELETE FROM prayer_requests WHERE prayerID = $id";
    $result = $db->query($sql);
    return $result;
}

function removeMember($db, $id) {
    $sql = "DELETE FROM members WHERE member_ID = $id";
    $result = $db->query($sql);
    return $result;
}

function saveSetting($db, $id) {
    $sql = "UPDATE settings SET is_on = 1 WHERE settingID = $id";
    $result = $db->query($sql);
    $sql = "UPDATE settings SET is_on = 0 WHERE settingID != $id";
    $result = $db->query($sql);
    return $result;
}

// add a new member
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_member'])) {
    // Validate and sanitize user input
    $first_name = htmlspecialchars($_POST['first_name']);
    $last_name = htmlspecialchars($_POST['last_name']);
    $address = htmlspecialchars($_POST['address']);
    $address2 = htmlspecialchars($_POST['address2']);
    $city = htmlspecialchars($_POST['city']);
    $state = htmlspecialchars($_POST['state']);
    $zip = htmlspecialchars($_POST['zip']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);

    
    // Create a prepared statement
    $stmt = $db->prepare("INSERT INTO members (first_name, last_name, address, address2, city, state, zip, email, phone) 
                          VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    
    // Bind parameters to the prepared statement
    $stmt->bindparam(1, $first_name);
    $stmt->bindparam(2, $last_name);
    $stmt->bindparam(3, $address);
    $stmt->bindparam(4, $address2);
    $stmt->bindparam(5, $city);
    $stmt->bindparam(6, $state);
    $stmt->bindparam(7, $zip);
    $stmt->bindparam(8, $email);
    $stmt->bindparam(9, $phone);

    
    // Execute the prepared statement
    if ($stmt->execute()) {
        echo "New member added successfully!";
    } else {
        echo "Error: " . $stmt->errorInfo()[2];
    }

    // Close the prepared statement
    $stmt->closeCursor();
}

