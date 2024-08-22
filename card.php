<section class="latest-products" id="card">
    <h2>LATEST PRODUCTS</h2>
    <div class="Jwellery-container">
        <?php
           $tbl_name = 'tbl_products';
           $products = get_records($tbl_name);
           if (!empty($products)) {
           foreach ($products as $product) { 
        ?>
        <!-- box1 -->
        <div class="box">
            <a href="product-details.php?id=<?php echo $product['id'] ?>">
                <div class="box-img d-flex justify-content-center">
                    <span class="new">NEW</span>
                    <img style="margin:auto"; src="<?php echo $product['image']; ?>" alt="" />
                </div>
                <div class="name-price">
                    <p><?php echo $product['name'] ?></p>
                    <p>Price <span><?php echo "Rs " .$product['price']; ?>
                        </span>
                    </p>
                </div>
            </a>
        </div>

        <?php
        }
        } else {
        echo "<tr><td colspan='4'>0 results</td></tr>";
        }
        ?>

    </div>
    <div class="vlp"><a href="#View All Products">View All Products</a></div>
</section>