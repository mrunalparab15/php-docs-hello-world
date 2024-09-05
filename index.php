<?php
$continue_url = "https://www.lionbridge.com";
$grant_url = "https://www.lionbridge.com";
if ($_GET['base_grant_url']) {
    //User redirected from Meraki portal
    $grant_url = urldecode($_GET['base_grant_url']) ."?duration=756000" . "&continue_url=" . urlencode($continue_url);        
    header("location: ".$grant_url);
} else {
    //User accessing this site directly from browser
    header("location: ".$grant_url);
}
?>