<?php
session_start([
    'cookie_lifetime' => 3200, // 60 minutes
]);

function checkLogin() {
    // Check if user is not logged in, redirect to login page
    if (isset($_SESSION['adminLoggedIn']) && $_SESSION['adminLoggedIn'] != true) {
        echo '
        <script>
            window.location.href = "../admin";
        </script>
        ';
        exit();
    }
}

checkLogin();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php include "..". DIRECTORY_SEPARATOR ."includes". DIRECTORY_SEPARATOR ."cdnlinks.php" ?>
    <link rel="stylesheet" href="styles/adminpage.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.1.js"></script>
    <script type="text/javascript">
        $(function() {
            $("#tab-container").on("click", ".nav_link", function() {
                var that = $(this);
                var tabid = that.data("tab");

                $(".tab").each(function(k, v) {
                    $(this).hide();
                });

                $(tabid).show();
            });
        });
    </script>
</head>
<!--html-->

<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> 
            <i class="bi bi-list" id="header-toggle" ></i>
        </div>
    </header>
    <div id="container">

        <?php

        $action = filter_input(INPUT_GET, 'action');

        $action ? $action : $action = filter_input(INPUT_POST, 'action');


        switch ($action) {
            case "dashboard":
                include 'views/dashboard.php';
                break;

            case "delete":
                include 'model/database.php';
                $selected = $_POST['selected'];
                foreach ($selected as $id) {
                    removePrayerRequest($db, $id);
                }
                echo '
                <script>
                    window.location.href = "./adminpage.php?action=requests";
                </script>
                ';
                break;
                
            case "deleteInfo":
                include 'model/database.php';
                $selected = $_POST['selected'];
                foreach ($selected as $id) {
                    removeInfoRequest($db, $id);
                }
                echo '
                <script>
                    window.location.href = "./adminpage.php?action=requests";
                </script>
                ';
                break;

            case "deleteMember":
                include 'model/database.php';
                $selected = $_POST['selected'];
                foreach ($selected as $id) {
                    removeMember($db, $id);
                }
                echo '
                <script>
                    window.location.href = "./adminpage.php?action=members";
                </script>
                ';
                break;

            case "addNew":
                // add new member
                include 'model/database.php';
                echo '
                <script>
                    window.location.href = "./adminpage.php?action=members";
                </script>
                ';
                break;

            case "saveSettings":
                include 'model/database.php';
                $selected = $_POST['selected'] ?? array('0'=>2);
                foreach ($selected as $id) {
                    saveSetting($db, $id);
                }
                echo '
                <script>
                    window.location.href = "./adminpage.php?action=settings";
                </script>
                ';
                
                break;
            case "requests":
                include 'views/prayer_requests.php';
                include 'views/info_requests.php';
                break;
            case "members":
                include 'views/members.php';
                break;
            case "settings":
                include 'model/database.php';
                include 'views/settings.php';
                break;
            case "signout":
                session_destroy();
                echo '
                <script>
                    window.location.href = "../admin";
                </script>
                ';
                break;
            default:
                include 'views/dashboard.php';
                break;
        }

        ?>

        <!-- <div class="content">
            <div id="tab-dashboard" class="tab">
                <div class="height-100 bg-light">
                    <h4>Dashboard</h4>
                    <?php
                    //include 'views/dashboard.php';
                    ?>
                </div>
            </div>


            <div id="tab-database" class="tab" style="display: none;">
                <div class="height-100 bg-light">
                    <h4>Database</h4>
                    <?php
                    //include 'views/database.php';
                    ?>
                </div>
            </div>


            <div id="tab-requests" class="tab" style="display: none;">
                <div class="height-100 bg-light">
                    <h4>Prayer Requests</h4>
                    <?php //include 'views/prayer_requests.php'; ?>
                    <h4>Info Requests</h4>
                    <?php //include 'views/info_requests.php'; ?>
                </div>
            </div>


            <div id="tab-members" class="tab" style="display: none;">
                <div class="height-100 bg-light">
                    <h4>Members</h4>
                    <?php
                    //include 'views/members.php';
                    ?>
                </div>
            </div>


            <div id="tab-settings" class="tab" style="display: none;">
                <div class="height-100 bg-light">
                    <h4>Settings</h4>
                    <?php
                    //include 'views/settings.php';
                    ?>
                </div>
            </div>

        </div> -->

        <div class="l-navbar" id="nav-bar">
            <?php
            include 'views/navbar.php';
            ?>
        </div>



    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function(event) {

            const showNavbar = (toggleId, navId, bodyId, headerId) => {
                const toggle = document.getElementById(toggleId),
                    nav = document.getElementById(navId),
                    bodypd = document.getElementById(bodyId),
                    headerpd = document.getElementById(headerId)

                // Validate that all variables exist
                if (toggle && nav && bodypd && headerpd) {
                    toggle.addEventListener('click', () => {
                        // show navbar
                        nav.classList.toggle('show')
                        // change icon
                        toggle.classList.toggle('bi-x')
                        // add padding to body
                        bodypd.classList.toggle('body-pd')
                        // add padding to header
                        headerpd.classList.toggle('body-pd')
                    })
                }
            }

            showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header')

            // ===== LINK ACTIVE =====
            const linkColor = document.querySelectorAll('.nav_link')

            function colorLink() {
                if (linkColor) {
                    linkColor.forEach(l => l.classList.remove('active'))
                    this.classList.add('active')
                }
            }
            linkColor.forEach(l => l.addEventListener('click', colorLink))
        });
    </script>
</body>

</html>