<h4 class="mt-5" >Info Requests</h4>


<form action="./adminpage.php?action=deleteInfo" method="post">
    <div class="input-group m-2 w-75">
        <div class="input-group-text">
            <input id="selectAll" class="form-check input mt-0" type="checkbox" name="selectAll" value="selectAll">
        </div>
        <!-- <button class="btn btn-outline-secondary" type="button">read</button>
        <button class="btn btn-outline-secondary" type="button">unread</button> -->
        <span class="input-group-text">ID: </span>
        <span class="input-group-text">Full Name</span>
        <span class="input-group-text">Email</span>
        <span class="form-control"></span>
        <span class="input-group-text">Date</span>
    </div>
    <div class="list-group d-inline-block w-75">
        <?php
        $i_requests = getInfoRequests($db);

        if ($i_requests->rowCount() == 0) {
            echo '<h5 class="text-center">No info requests</h5>';
        } else {
            foreach ($i_requests as $request) {
                echo '
                <div class="input-group dropdown-btn position-relative m-2">
                    <div class="input-group-text">
                        <input class="form-check-input mt-0" type="checkbox" name="selected[]" value="'. $request['requestID'] .'">
                    </div>
                    <span class="input-group-text">'. $request['requestID'] .'</span>
                    <span class="input-group-text dropdown-btn">'. $request['first_name'] . " " . $request['last_name'] .'</span>
                    <span class="input-group-text dropdown-btn">'. $request['email'] .'</span>
                    <span class="form-control dropdown-btn"></span>
                    <span class="input-group-text dropdown-btn"><small>'. $request['created_date'] .'</small></span>

                    <button class="btn dropdown-btn btn-outline-secondary" type="button">v</button>
                </div>
                <ul class="content-drop list-group-flush  d-none">
                    <h6 class="list-group-item"> Name: '. $request['first_name'] .' '. $request['last_name'] .' </h6>
                    <p class="mb-1 list-group-item"> Phone: '. $request['phone'] .'</p>
                    <p class="mb-1 list-group-item"> Address: '. $request['address'] .'</p>
                    <p class="mb-1 list-group-item"> Line 2: '. $request['address2'] .'</p>
                    <p class="mb-1 list-group-item"> City: '. $request['city'] .'</p>
                    <p class="mb-1 list-group-item"> State: '. $request['state'] .'</p>
                    <p class="mb-1 list-group-item"> Zip: '. $request['zip'] .'</p>
                </ul>
                ';
            }
        }
        ?>
    <input class="btn btn-outline-danger" type="submit" value="Delete">
    </div>
</form>



<script>
    document.getElementById("selectAll").addEventListener("change", function() {
        var checkboxes = document.getElementsByName("selected[]");
        for (var i = 0; i < checkboxes.length; i++) {
            checkboxes[i].checked = this.checked;
        }
    });
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i=0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function() {
            // this.classList.toggle("");
            var dropdownContent = this.parentElement.nextElementSibling;
            if (dropdownContent.classList.contains("d-none")) {
                dropdownContent.classList.remove("d-none")
            } else {
                dropdownContent.classList.add("d-none")
            }
            
        });
    }
</script>
