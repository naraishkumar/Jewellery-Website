<?php 
include 'includes/header/header.php';
include 'includes/header/sidebar.php';
?>

<!-- CKEDITOR -->
<link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/42.0.2/ckeditor5.css">

<div class="container" id="add_page">
    <div class="row justify-content-center mt-5">
        <div class="col-12 col-lg-8">
            <div class="bg-white border rounded shadow-sm p-5">
                <h5 class="mb-3 display-5 text-center">Add New Page</h5>
                <form id="pageForm" action="insert_page.php" method="POST">
                    <label for="page_name">Page Name:</label>
                    <input type="text" id="page_name" class="form-control" name="page_name" required><br>
                    
                    <label for="page_content">Page Content:</label>
                    <textarea id="page_content" class="form-control" name="page_content" required></textarea><br>
                    
                    <input type="hidden" name="redirect_url" value="pages.php" />
                    <button type="submit" class="btn btn-primary" name="submit_add">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- CKEditor script -->
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script>
    // Initialize CKEditor
    CKEDITOR.replace('page_content');
</script>

<?php include 'includes/footer/footer.php'; ?>
