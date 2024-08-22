<?php
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$total_pages = isset($_SESSION['total_pages']) ? $_SESSION['total_pages'] : 1;
?>

<nav class="pagination-wrap d-flex justify-content-center" aria-label="Page navigation">
    <ul class="pagination">
        <li class="page-item <?php if ($page <= 1) echo 'disabled'; ?>">
            <a class="page-link" href="<?php if ($page > 1) echo '?page=' . ($page - 1); else echo '#'; ?>"
                aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
            </a>
        </li>
        <?php
    for ($i = 1; $i <= $total_pages; $i++) {
      echo "<li class='page-item";
      if ($i == $page) echo " active";
      echo "'><a class='page-link' href='?page=" . $i . "'>" . $i . "</a></li>";
    }
    ?>
        <li class="page-item <?php if ($page >= $total_pages) echo 'disabled'; ?>">
            <a class="page-link" href="<?php if ($page < $total_pages) echo '?page=' . ($page + 1); else echo '#'; ?>"
                aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
            </a>
        </li>
    </ul>
</nav>

