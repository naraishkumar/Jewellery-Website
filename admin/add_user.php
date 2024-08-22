<?php 
 include 'includes/header/header.php';
 include 'includes/header/sidebar.php';
?>

  <div class="container" id="add_new">
    <div class="row justify-content-center mt-5">
      <div class="col-12 col-lg-5">
        <div class="bg-white border rounded shadow-sm p-5">

          <h5 class="mb-3 display-5 text-center">Add User</h5>
          <form action="insert_user.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" class="form-control" name="username" required><br>
            <label for="password">Password</label>
            <input type="text" id="password" class="form-control" name="password" required><br>
            <input type="hidden" name="redirect_url" value="users.php" />
            <button type="submit" class="btn btn-primary" name="submit_add">Save</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  

<?php include 'includes/footer/footer.php'; ?>