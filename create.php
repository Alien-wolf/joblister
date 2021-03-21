<?php include_once 'config/init.php';

if(!isset($_SESSION['is_logged_in'])){
    die("You should register on site first");
}

$job = new Job;



if(isset($_POST['submit'])){
	
    //Create Data Array
    $data = array();
    $data['job_title'] = $_POST['job_title'];
    $data['company'] = $_POST['company'];
    $data['category_id'] = $_POST['category'];
    $data['description'] = $_POST['description'];
    $data['location'] = $_POST['location'];
    $data['salary'] = $_POST['salary'];
    $data['contact_user'] = $_POST['contact_user'];
	$data['contact_email'] = $_POST['contact_email'];
	
	//Register job
    if($job->create($data)){
        redirect('index.php', 'Your job has been listed', 'success');
    }else{
        redirect('index.php', 'Something went wrong', 'error' );
    }
	
}
//Get Template & Assign Vars

$template = new Template('templates/job-create.php');


//Assign Vars
$template->categories = $job->getCategories();



//Display template

echo $template;
?>