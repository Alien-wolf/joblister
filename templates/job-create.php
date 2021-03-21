<?php include('includes/header.php'); ?>	
<h2 class="page-header">Create Job </h2>
    <form action="create.php" method="POST">
        <div class="form-group">
            <label>Company</label>
            <input type="text" class="form-control" name="company">
        </div>
        <div class="form-group">
            <label>Category</label>
            <select class="form-control" name="category">

                <option value="0">Choose Category</option>
                <?php foreach($categories as $category): ?>
                <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label>Job Title</label>
            <input type="text" class="form-control" name="job_title">
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea type="text" name="description" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label>Location</label>
            <input type="text" class="form-control" name="location">
        </div>
        <div class="form-group">
            <label>Salary</label>
            <input type="text" class="form-control" name="salary">
        </div>
        <div class="form-group" name="users">
            <label>Contact User</label>
            <input type="text" class="form-control" name="contact_user" value="<?php echo getUser()['username']; ?>">
        </div>
        <div class="form-group">
            <label>Contact Email</label>
            <input type="text" class="form-control" name="contact_email">
        </div>
        <br>
        <input type="submit" class="btn btn-success" value="Submit" name="submit">
    </form>
    <br>
<?php include('includes/footer.php'); ?>	