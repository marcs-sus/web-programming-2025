<?php
require_once 'model/user.php';
require_once 'model/session.php';

$sessao = new Session();

$user = new User();
$user->set_username("John Doe");
$user->set_login("john.doe");
$user->set_password("password123");

$sessao->set_user($user);

$sessao->save_session();

echo "<h2>Session Information:</h2>";
echo "<p>Session ID: " . session_id() . "</p>";
echo "<p>Session Status: " . $sessao->get_status() . "</p>";
echo "<p>Created At: " . $sessao->recover_session_data('created_at') . "</p>";
echo "<p>Last Access: " . $sessao->recover_session_data('last_access') . "</p>";

echo "<h2>User Information (from session):</h2>";
if ($sessao->get_user()) {
    echo "<p>Username: " . $sessao->get_user()->get_username() . "</p>";
    echo "<p>Login: " . $sessao->get_user()->get_login() . "</p>";
} else {
    echo "<p>No user set in session.</p>";
}

// $sessao->end_session();
// echo "<h2>Session Ended.</h2>";
// echo "<p>Try refreshing the page to see session data disappear.</p>";
