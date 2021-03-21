<?php include_once 'config/init.php';

if(!isset($_SESSION['is_logged_in'])){
    die("No logged in user found");
}

$job = new Job;

$template = new Template('templates/profileT.php');
$username = isset($_GET['username']) ? $_GET['username'] : null;


if($username){
$template->jobs = $job->getByUsers($username);
}

$template->categories = $job->getCategories();

echo $template;
?>