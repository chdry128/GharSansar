<?php
// Define your CSS link paths
$cssLinks = array(
    "css/bootstrap.min.css",
    "css/color.css",
    "css/font-awesome.min.css",
    "fonts/flaticon/flaticon.css",
    "css/style.css",
    "css/login.css"
);

// Output the CSS links for inclusion in HTML
foreach ($cssLinks as $link) {
    echo "<link rel='stylesheet' type='text/css' href='$link'>";
}
?>
