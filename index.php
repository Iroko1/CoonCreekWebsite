<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coon Creek Baptist Church</title>

    <!-- Google Font Ruthie -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ruthie&display=swap" rel="stylesheet">

    <!--Google Font Fondamento -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fondamento:ital@0;1&display=swap" rel="stylesheet">

    <!-- Google Font Ms Madi -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fondamento:ital@0;1&family=Ms+Madi&display=swap" rel="stylesheet">

    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="./view/styles.css">

</head>

<?php include "includes/cdnlinks.php" ?>
<?php include "includes/nav.php" ?>

<body class="body-container">

    <header>
        <h1 class="church-title">Coon Creek Baptist Church</h1>
    </header>

    <div class="flex-container">
        <div class="image-container">
            <img src="view/images/light-maroon.png" alt="Coon Creek Baptist Church Logo" height="400" width="400" class="circular">
        </div>
        <div class="text-container">
            <p class="gather">Gather at the Creek</h2>
            </p>
        </div>
    </div>

<div class=hr>
<hr>
</div>

<h3 class="youtube-title">Watch Our Services</h3>
    
<!-- PHP code to embed the YouTube video -->
<?php
// Function to fetch the latest video ID from YouTube
function getLatestVideoId($apiKey, $channelId) {
    $apiUrl = "https://www.googleapis.com/youtube/v3/search?key={$apiKey}&channelId={$channelId}&part=snippet,id&order=date&maxResults=1";
    $response = @file_get_contents($apiUrl); // Suppress warnings
    if ($response === false) {
        // Handle error if unable to fetch data from YouTube API
        return null;
    }
    $json = json_decode($response, true);
    if (isset($json['items'][0]['id']['videoId'])) {
        return $json['items'][0]['id']['videoId'];
    }
    return null;
}

// YouTube API Key
$apiKey = "AIzaSyBQEsvwL_LT_eVkLPuibItRYy9xdkVPURo";

// YouTube Channel ID
$channelId = "UCRG9J9XbYfDmI1BB6U0puzA";

// Get the latest video ID
$latestVideoId = getLatestVideoId($apiKey, $channelId);

// Check if latest video ID is valid
if ($latestVideoId === null) {
    // Handle error if unable to fetch latest video ID
    echo "Error: Unable to fetch latest video.";
} else {
    echo "<div class='video-container'>";
    // Embed the latest YouTube video
    $embedCode = "<iframe width='100%' height='500' style= 'border: double 15px #F5C6A5; border-radius: 10px;' margin: 0 auto; src='https://www.youtube.com/embed/{$latestVideoId}' frameborder='0' allowfullscreen></iframe>";
    // Output the embedded video
    echo $embedCode;
    echo "</div>";
}
?>

    <!-- Google Calendar -->
    <h3 class="calendar-title">Calendar of Events</h3>

    <div class="container-md">
        <iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=1&ctz=America%2FChicago&bgcolor=%23ffffff&src=Y29vbmNyZWVrYmFwdGlzdEBnbWFpbC5jb20&src=ZW4udXNhI2hvbGlkYXlAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&color=%23D50000&color=%230B8043" style="border:double 15px #F5C6A5; border-radius: 10px;" width="800" height="600" frameborder="0" scrolling="no"></iframe>
    </div>
    
</body>

</html>