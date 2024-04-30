<h4>Prayer Requests</h4>

<?php

include("model/database.php");
$p_requests = getPrayerRequests($db);
?>


<form action="./adminpage.php?action=delete" method="post">
    <div class="input-group m-2 w-75">
        <div class="input-group-text">
            <input id="selectAll" class="form-check input mt-0" type="checkbox" name="selectAll" value="selectAll">
        </div>
        <!-- <button class="btn btn-outline-secondary" type="button">read</button>
        <button class="btn btn-outline-secondary" type="button">unread</button> -->
        <span class="input-group-text">ID: </span>
        <span class="input-group-text">Name</span>
        <span class="input-group-text">Email</span>
        <span class="form-control"></span>
        <span class="input-group-text">Date</span>
    </div>
    <div class="list-group d-inline-block w-75">
        <?php
        if ($p_requests->rowCount() == 0) {
            echo '<h5 class="text-center">No prayer requests</h5>';
        } else {
            foreach ($p_requests as $request) {
                echo '
                <div class="input-group dropdown-btn position-relative m-2">
                    <div class="input-group-text">
                        <input class="form-check-input mt-0" type="checkbox" name="selected[]" value="'. $request['prayerID'] .'">
                    </div>
                    <span class="input-group-text">'. $request['prayerID'] .'</span>
                    <span class="input-group-text dropdown-btn">'. $request['first_name'] .'</span>
                    <span class="input-group-text dropdown-btn">'. $request['email'] .'</span>
                    <span class="form-control dropdown-btn"></span>
                    <span class="input-group-text dropdown-btn"><small>'. $request['created_date'] .'</small></span>
                    
                    <button class="btn dropdown-btn btn-outline-secondary" type="button">v</button>
                </div>
                <ul class="content-drop list-group-flush  d-none">
                    <h6 class="list-group-item"> Name: '. $request['first_name'] .' '. $request['last_name'] .' </h6>
                    <p class="mb-1 list-group-item"> Request: '. $request['prayer_request'] .'</p>
                </ul>
                ';
            }
        }
        ?>
    <input class="btn btn-outline-danger" type="submit" value="Delete">
    </div>
</form>

