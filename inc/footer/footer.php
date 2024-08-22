
    <section class="main-footer" id="contact">
        <footer class="footer">
            <div class="footer-enter-email">
                <div class="col--1">
                    <form action="insert-subscriber.php" method="POST" id="subscribe-form">
                        <input class="email form-control text-black" type="email" id="email" name="email" placeholder="Enter your email" required>
                        <input type="hidden" name="redirect_url" value="index.php" />
                        <button type="submit" class="btn btn-primary" name="submit_add">Save</button>
                    </form>
                    <div id="response-message"></div>
                </div>

                <div class="col--2">
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-twitter'></i></a>
                    <a href="#"><i class='bx bxl-linkedin'></i></a>
                </div>
            </div>
            <div class="footer-child">
                <div class="footer-menu">
                    <h3>Menu</h3>
                    <?php             
                        $setting_key = "menu";
                        $menu_json = get_Settings($setting_key);
                        $menu_items = json_decode($menu_json, true);              
                            if (isset($menu_items['bottom-menu'])) {
                                foreach ($menu_items['bottom-menu'] as $item) { ?>
                    <div class="footer-menu-about"><a
                            href="<?php echo $item['link']; ?>"><?php echo $item['name']; ?></a></div>
                    <?php }
                            } else {
                                echo "Menu items not found.";
                            }
                    ?>
                </div>
                <div class="footer-instagram">
                    <h3>Instagram</h3>
                    <div style="display: flex;">
                        <img src="assets/images/latest-products/necklace2-removebg-preview.png" alt="">
                        <span>Long estabilished fact</span>
                    </div>
                    <br>
                    <div style="display: flex;">
                        <div>
                            <img src="assets/images/latest-products/earring1-removebg-preview.png" alt="">
                        </div>
                        <span>Long estabilished fact</span>
                    </div>
                </div>
                <div class="footer-about">
                    <h3>About Us</h3>
                    <p>when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                        distribution of letters, as opposed to</p>
                </div>
                <div class="footer-contactus">
                    <h3>Contact Us</h3>
                    <div class="contactus-links">
                        <?php
                        $setting_key = "address";
                        $address_json = get_Setting($setting_key);
                        $address_items = json_decode($address_json, true);

                        if ($address_items && isset($address_items['address'])) {
                            $address = $address_items['address'];
                        } else {
                            $address = null;
                        }
                        ?>
                        <a href="#"><i
                                class="fas fa-map-marker-alt"></i><span><?php echo $address['company']; ?></span></a>
                    </div>
                    <div class="contactus-links">
                        <a href="#"><i class="fas fa-phone"></i><span>Call <?php echo $address['phone']; ?></span></a>
                    </div>
                    <div class="contactus-links">
                        <a href="#"><i class="fas fa-envelope"></i><span><?php echo $address['email']; ?></span></a>
                    </div>
                </div>
            </div>
        </footer>
        <div class="copyright">
            <i class="fa-regular fa-copyright"></i><span> 2024 All Rights Reserved By Naresh Kumar.</span>
        </div>
        <!-- </div> -->
        <div class="go-top-btn">
            <a href="#container"><i class="fa-solid fa-arrow-up"></i></a>
        </div>
    </section>

    <script>
        document.getElementById('subscribe-form').addEventListener('submit', async function(event) {
            event.preventDefault();
            
            var formData = new FormData(this);
            var responseMessage = document.getElementById('response-message');
            
            try {
                let response = await fetch(this.action, {
                    method: 'POST',
                    body: formData
                });
                
                let result = await response.json();
                if (result.exists) {
                    responseMessage.innerHTML = 'Email already exists!';
                } else if (result.success) {
                    responseMessage.innerHTML = 'Email saved successfully!';
                }
            } catch (error) {
                responseMessage.innerHTML = 'An error occurred.';
            }
        });
    </script>

    </body>

    </html>