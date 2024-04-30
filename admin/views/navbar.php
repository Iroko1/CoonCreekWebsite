<div class="sidebar">
    <div id="nav">
        <div id="tab-container">
            <nav class="nav">
                <div>
                    <a href="#" class="nav_logo">
                        <i class="bi bi-layers nav_logo-icon"></i>
                        <span class="nav_logo-name">Admin Panel</span>
                    </a>

                    <div class="nav_list">
                        <a href="./adminpage.php?action=dashboard" class="nav_link <?php if ($action == 'dashboard') { echo 'active';} ?>" data-tab="">
                            <i class="bi bi-grid"></i>
                            <span class="nav_name">Dashboard</span>
                        </a>
                        
                        <div class="nav_list">
                            <a href="./adminpage.php?action=requests" class="nav_link <?php if ($action == 'requests') { echo 'active';} ?>" >
                                <i class="bi bi-clipboard2-plus"></i>
                                <span class="nav_name">Requests</span>
                            </a>
                        </div>

                        <a href="./adminpage.php?action=members" class="nav_link <?php if ($action == 'members') { echo 'active';} ?>" >
                            <i class="bi bi-people"></i>
                            </i> <span class="nav_name">Members</span>
                        </a>


                        <a href="./adminpage.php?action=settings" class="nav_link <?php if ($action == 'settings') { echo 'active';} ?>" >
                            <i class="bi bi-gear"></i>
                            </i> <span class="nav_name">Settings</span>
                        </a>

                        <a href="./adminpage.php?action=signout" class="nav_link">
                            <i class="bi bi-box-arrow-left"></i>
                            <span class="nav_name">SignOut</span>
                        </a>
                    </div>
                    
                </div>

            </nav>
        </div>
    </div>
</div>