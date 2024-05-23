<style>
    .btn {
        color: #5F264A;
        background-color: #fff;
        border-color: #5F264A;
    }

    .btn:hover {
        color: #fff;
        background-color: #5F264A;
        border-color: #5F264A;
    }
</style>


<h4>Dashboard</h4>

<div class="row w-75">
    <div class="col-6">
        <div class="card">
            <h5 class="card-header">Requests</h5>
            <div class="card-body row">
                <div class="col-6">
                    <h5 class="card-title">Prayer Requests</h5>
                    <p class="card-text"><?php 
                    include 'model/database.php';
                    $requests = getPrayerRequests($db); 
                    if ($requests->rowCount() == 0) {
                        echo 'No info requests';
                    } else {
                        echo $requests->rowCount(). ' requests';
                    }  ?></p>
                    <a href="./adminpage.php?action=requests" class="btn btn-primary">Requests</a>
                </div>
                <div class="col-6">
                    <h5 class="card-title">Info Requests</h5>
                    <p class="card-text"><?php 
                    $requests = getInfoRequests($db); 
                    if ($requests->rowCount() == 0) {
                        echo 'No info requests';
                    } else {
                        echo $requests->rowCount(). ' requests';
                    }  ?></p>
                    <a href="./adminpage.php?action=requests" class="btn btn-primary">Requests</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-3">
        <div class="card">
            <h5 class="card-header">Members</h5>
            <div class="card-body">
                <h5 class="card-title">Total Members</h5>
                <p class="card-text"><?php 
                $members = getMembers($db);
                if ($members->rowCount() == 0) {
                    echo 'No members';
                } else {
                    echo $members->rowCount(). ' members';
                }
                ?></p>
                <a href="./adminpage.php?action=members" class="btn btn-primary">Members</a>
            </div>
        </div>
    </div>
</div>