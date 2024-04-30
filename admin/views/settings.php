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

<h4>Settings</h4>
  
<form action="./adminpage.php?action=saveSettings" method="post">

    
        <?php
        // print_r($settings);
        foreach ($settings as $index => $setting) {
            echo '
            <div class="form-check">
            <input id="'. $setting['setting'] .'" type="checkbox" value="'. $setting['settingID'] .'" class="form-check-input" name="selected[]"';
            if ($setting['is_on'] == 1) {
                echo ' checked';
            }
            echo '>
            <label for="'. $setting['setting'] .'" class="form-check-label">
                '. $setting['setting'] .'
            </label>
            </div>';
        }
        ?>
    
    <input class="btn btn-outline-info mt-2" type="submit" value="Save">
</form>