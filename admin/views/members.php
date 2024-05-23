<style>
    .btn-outline-info {
        color: #5F264A;
        background-color: transparent;
        background-image: none;
        border-color: #5F264A;
    }
    
    .btn-outline-info:hover {
        color: #fff;
        background-color: #5F264A;
        border-color: #5F264A;
    }
</style>



<h4>Members</h4>


<form action="./adminpage.php?action=deleteMember" method="post">
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
        include("model/database.php");
        $members = getMembers($db);

        if ($members->rowCount() == 0) {
            echo '<h5 class="text-center">No Members</h5>';
        } else {
            foreach ($members as $member) {
                echo '
                <div class="input-group dropdown-btn position-relative m-2">
                    <div class="input-group-text">
                        <input class="form-check-input mt-0" type="checkbox" name="selected[]" value="'. $member['member_ID'] .'">
                    </div>
                    <span class="input-group-text">'. $member['member_ID'] .'</span>
                    <span class="input-group-text dropdown-btn">'. $member['first_name'] . " " . $member['last_name'] .'</span>
                    <span class="input-group-text dropdown-btn">'. $member['email'] .'</span>
                    <span class="form-control dropdown-btn"></span>
                    <span class="input-group-text dropdown-btn"><small>'. $member['created_date'] .'</small></span>

                    <button class="btn dropdown-btn btn-outline-secondary" type="button">v</button>
                </div>
                <ul class="content-drop list-group-flush  d-none">
                    <h6 class="list-group-item"> Name: '. $member['first_name'] .' '. $member['last_name'] .' </h6>
                    <p class="mb-1 list-group-item"> Phone: '. $member['phone'] .'</p>
                    <p class="mb-1 list-group-item"> Address: '. $member['address'] .'</p>
                    <p class="mb-1 list-group-item"> Line 2: '. $member['address2'] .'</p>
                    <p class="mb-1 list-group-item"> City: '. $member['city'] .'</p>
                    <p class="mb-1 list-group-item"> State: '. $member['state'] .'</p>
                    <p class="mb-1 list-group-item"> Zip: '. $member['zip'] .'</p>
                </ul>
                ';
            }
        }
        ?>
    <input class="btn btn-outline-danger" type="submit" value="Delete">
    </div>
</form>

<form class="mt-3 w-75" action="./adminpage.php?action=addNew" method="post">
    <div class="input-group mb-3">
        <label for="first_name" class="input-group-text">First</label>
        <input class="form-control" type="text" name="first_name" id="first_name">
        <label for="last_name" class="input-group-text">Last</label>
        <input class="form-control" type="text" name="last_name" id="last_name">
    </div>
    <div class="input-group mb-3">
        <label for="email" class="input-group-text">Email</label>
        <input class="form-control" type="email" name="email" id="email">
        <label for="phone" class="input-group-text">Phone</label>
        <input class="form-control" type="phone" name="phone" id="phone">
    </div>
    <div class="input-group mb-3">
        <label for="address" class="input-group-text">Address</label>
        <input class="form-control" type="text" name="address" id="address">
        <label for="address2" class="input-group-text">Address 2</label>
        <input class="form-control" type="text" name="address2" id="address2">
    </div>
    <div class="input-group mb-3">
        <label for="city" class="input-group-text">City</label>
        <input class="form-control" type="text" name="city" id="city">
        <label for="state" class="input-group-text">State</label>
        <input class="form-control" type="text" name="state" id="state">
        <label for="zip" class="input-group-text">Zip</label>
        <input class="form-control" type="text" name="zip" id="zip">
    </div>
    <input class="btn btn-outline-info rounded " type="submit" value="Add New">
    <input type="hidden" name="add_member" id="add_member" value="true">
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
