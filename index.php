<?php
$CURRENT_URL = $_SERVER['REQUEST_URI'];



if ($CURRENT_URL == '/' || $CURRENT_URL == '/home.php' || $CURRENT_URL == '/index.php') {
    include ('home.php');
}else if ($CURRENT_URL == '/about-us') {
    include ('about.php');
} else if ($CURRENT_URL == '/oem-brands') {
    include ('oem-brands.php');
} else if ($CURRENT_URL == '/oem-contact-us') {
    include ('oem-contactus.php');
} else if ($CURRENT_URL == '/aftermarket-brands') {
    include ('aftermarket-brands.php');
} else if ($CURRENT_URL == '/aftermarket-contact-us') {
    include ('aftermarket-contactus.php');
} else if ($CURRENT_URL == '/contact-us') {
    include ('contact.php');
} else if ($CURRENT_URL == '/sitemap') {
    include ('sitemap.xml');
} else if ($CURRENT_URL == '/terms-conditions') {
    include ('terms-conditions.php');
} else if ($CURRENT_URL == '/privacy-policy') {
    include ('privacy-policy.php');
} else if ($CURRENT_URL == '404') {
    include ('404.php');
} else {
    // header('Location: /404');
    include ('404.php');
    // echo $CURRENT_URL;
}