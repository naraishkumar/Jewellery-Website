<?php
?>
<?php if (isset($_SESSION['username'])):
                
                echo isset($_SESSION['username']) ? $_SESSION['username'] : '';
                ?>
                        <?php else: ?>
                            <?php endif; ?>