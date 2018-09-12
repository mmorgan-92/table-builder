<?php

// SAFE AUTH PHP CLASS - v0.90
// robert.wright@thomsonreuters.com


// Invoked from an actual site, so let's set some session details
session_set_cookie_params(60 * 60 * 24);
session_start();

// Set these based on what comes back from the SAFE team when setting up your app
define('SAFE_APP_ID', 'xxx');
define('SAFE_KEY', 'xxx');

// You can obviously do a switch statement somewhere so it redirects to SAFE QA if need be
define('SAFE_REDIRECT', 'https://safe.thomson.com/login/sso/SSOService?app=' . SAFE_APP_ID . '&returnurl=' . urlencode($_SERVER['REQUEST_URI']));

// Start authentication and authorization
if (!isset($_SESSION['USER_ID']) && !isset($_POST['digest'])) {
    // We've got no session and we've not returned from SAFE, so let's redirect to SAFE
    header('Location: ' . SAFE_REDIRECT);
    die();
}

if (!isset($_SESSION['USER_ID']) && isset($_POST['digest'])) {
    // We've got no session but we've got a response from SAFE - let's check it
    $safe_uid = $_POST['uid'];
    $safe_name = $_POST['firstname'] . ' ' . $_POST['lastname'];
    $safe_time = $_POST['time'];
    $safe_email = $_POST['email'];
    $safe_digest = $_POST['digest'];
    $safe_returnurl = $_POST['returnurl'];

    // Check for timeliness
    $date = DateTime::createFromFormat('Y:m:d:G:i:s', $safe_time);
    $diff = $date->diff(new DateTime());
    if (($diff->i) > 5) {
        die('SAFE authentication failed: server times out of sync?');
    }

    // Calculate digest
    $safe_calchash = md5($safe_uid . $safe_time . SAFE_KEY);
    if ($safe_calchash !== $safe_digest) {
        die('SAFE authentication failed: digest not valid.');
    }

    // Looks like we've got a legit user, set some session variables
    $_SESSION['USER_ID'] = $safe_uid;
    $_SESSION['USER_NAME'] = $safe_name;
    $_SESSION['USER_EMAIL'] = $safe_email;

	// Handle deep-linking from SAFE
    if (isset($safe_returnurl) && strlen($safe_returnurl) > 1) {
        header('Location: ' . $safe_returnurl);
        die();
    }
}


// If we've reached this stage, you should have three session variables called USER_ID, USER_NAME and USER_EMAIL.
// You can do with these whatever you wish.

?>