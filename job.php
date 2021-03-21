<?php include_once 'config/init.php';

if(!isset($_GET['id'])){
    die("Set job id");
}

$job = new Job;

if(isset($_POST['del_id'])){
    $del_id =$_POST['del_id'];
    if($job->delete($del_id)){
        redirect('index.php', 'Job delete', 'Success');
    }else{
        redirect('index.php', 'Job not delete', 'error');
    }
}

$template = new Template('templates/job-single.php');

$job_id = isset($_GET['id']) ? $_GET['id'] : null;

$template->job = $job->getJob($job_id);
$template->categories = $job->getCategories();

echo $template;
?>