<?php
session_start([
    'cookie_lifetime' => 3200, // 60 minutes
]);

// Check if user is not logged in, redirect to login page
if (!isset($_SESSION['adminLoggedIn']) || $_SESSION['adminLoggedIn'] !== true) {
    header("Location: index.php");
    exit();
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--CSS resources-->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" type="text/css">  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" type="text/css"> 
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
        <div class="header_img"> 
            <img src="logo.gif" alt=""> 
        </div>
    </header>
    <div id="container">



        <div class="content">
            <div id="tab-dashboard" class="tab">
                <div class="height-100 bg-light">
                    <h4>Dashboard</h4>
                    <?php
                    include 'views/dashboard.php';
                    ?>
                </div>
            </div>


            <div id="tab-database" class="tab" style="display: none;">
                <div class="height-100 bg-light">
                    <h4>Database</h4>
                    <?php
                    include 'views/database.php';
                    ?>
                </div>
            </div>


            <div id="tab-requests" class="tab" style="display: none;">
                <div class="height-100 bg-light">
                    <h4>Prayer Requests</h4>
                    <?php include 'views/requests.php'; ?>
                    <h4>Info Requests</h4>
                </div>
            </div>


            <div id="tab-members" class="tab" style="display: none;">
                <div class="height-100 bg-light">
                    <h4>Members</h4>
                    <?php
                    include 'views/members.php';
                    ?>
                </div>
            </div>


            <div id="tab-settings" class="tab" style="display: none;">
                <div class="height-100 bg-light">
                    <h4>Settings</h4>
                    <?php
                    include 'views/settings.php';
                    ?>
                </div>
            </div>

        </div>

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

            /*===== LINK ACTIVE =====*/
            const linkColor = document.querySelectorAll('.nav_link')

            function colorLink() {
                if (linkColor) {
                    linkColor.forEach(l => l.classList.remove('active'))
                    this.classList.add('active')
                }
            }
            linkColor.forEach(l => l.addEventListener('click', colorLink))

            // Your code to run since DOM is loaded and ready
        });
    </script>
</body>

</html>