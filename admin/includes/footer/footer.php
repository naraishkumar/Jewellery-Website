<script src="https://unpkg.com/@popperjs/core@2"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
function loadPage(page) {
    $.ajax({
        url: 'load_records.php',
        type: 'GET',
        data: { page: page },
        success: function(response) {
            $('.table tbody').html(response); // Update table body with new data
        }
    });
}
</script>

</body>

</html>