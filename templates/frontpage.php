<?php include 'includes/header.php';?>
      


      <?php foreach($jobs as $job): ?>
  <div class="row marketing">
    <!-- Example row of columns -->
      <div class="col-md-10">
        <h4><?php echo $job->job_title; ?></h4>
        <p><?php echo $job->description; ?> </p>
      </div>
        <div class="col-md-2">
            <a class="btn btn-default" href="job.php?id=<?php echo $job->id;?>">View</a>
        </div>
      </div>
      <?php endforeach; ?>

      <?php include 'includes/footer.php';?>