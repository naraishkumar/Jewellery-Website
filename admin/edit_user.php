<?php 
include 'includes/header/header.php';
include 'includes/header/sidebar.php';
?>
<?php

$tbl_name = 'tbl_users';
$row = fetch_edit_record($tbl_name);
  $id = $row['id'];
  $username = $row['username'];
  $password = $row['password'];
  
?>

<div class="container" id="add_new">
    <div class="row justify-content-center mt-5">
        <div class="col-12 col-lg-5">
            <div class="bg-white border rounded shadow-sm p-5">
                <h5 class="mb-3 display-5 text-center">Edit User</h5>
                <form action="update_user.php" method="POST">
                    <input type="hidden" id="id" name="id" value="<?php echo $id; ?>"><br><br>
                    <label for="username">Username:</label>
                    <input type="text" id="username" class="form-control" name="username"
                        value="<?php echo $username; ?>" required><br>
                    <label for="passsword">Password:</label>
                    <input type="password" id="password" class="form-control" name="password"
                        value="<?php echo $password; ?>" required><br>
                    <input type="hidden" name="redirect_url" value="users.php" />
                    <button type="submit" class="btn btn-primary" name="submit">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
include 'includes/footer/footer.php';
?>