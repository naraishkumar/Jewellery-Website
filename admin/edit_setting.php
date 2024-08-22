<?php 
include 'includes/header/header.php';
include 'includes/header/sidebar.php';
?>
<?php
// $setting_key = '';
// $setting_value = '';

// // Check if an id is provided to fetch the setting
// if (isset($_GET['id'])) {
//     $id = $_GET['id'];
    
//     // Fetch the current setting
//     $sql = "SELECT setting_key, setting_value FROM tbl_site_settings WHERE id = $id";
//     $result = $conn->query($sql);
    
//     if ($result->num_rows > 0) {
//         $row = $result->fetch_assoc();
//         $setting_key = $row['setting_key'];
//         $setting_value = $row['setting_value'];
//     } else {
//         die("Invalid setting ID.");
//     }
// }

$tbl_name = 'tbl_site_settings';
$row = fetch_edit_record($tbl_name);

  $id = $row['id'];
  $setting_key = $row['setting_key'];
  $setting_value = $row['setting_value'];

?>

<div class="container" id="add_new">
    <div class="row justify-content-center mt-5">
      <div class="col-12 col-lg-5">
        <div class="bg-white border rounded shadow-sm p-5">

          <h5 class="mb-3 display-5 text-center">Edit Setting</h5>
          <form action="update_setting.php" method="POST">
            <input type="hidden" id="id" name="id" value="<?php echo $id; ?>"><br><br>
            <label for="setting_key">Setting Key:</label>
            <input type="text" id="setting_key" class="form-control" name="setting_key" value="<?php echo $setting_key; ?>" required><br>
            <label for="setting_value">Setting Value:</label>
            <input type="text" id="setting_value" class="form-control" name="setting_value" value="<?php echo $setting_value; ?>" required><br>
            <input type="hidden" name="redirect_url" value="settings.php" />
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXlHj1/4A+ui9wzXbFfRvH+8abtTE1pi6jizo/YdPwXQf0hyy5D4e4Te6fj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGqKtv3z8G8a37bR0eI5vs/9OQ4yLGVRhmebXYne8B/6KUUHBYQ4G1rN/3E" crossorigin="anonymous"></script>


<?php
include 'includes/footer/footer.php';
?>
