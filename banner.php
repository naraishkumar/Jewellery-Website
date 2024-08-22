<div class="container-fluid" id="container" style="background-color: <?php echo get_settings("main_banner_bg"); ?> ">
    <?php
    $tbl_name = 'tbl_banner_items';
    $items = banner_Items($tbl_name);
    if (!empty($items)) {
        foreach ($items as $index => $item) { 
    ?>
    <div class="slide <?php echo $index === 0 ? 'active' : ''; ?>">
        <img src="<?php echo $item['image_url']; ?>" alt="">
        <div class="content">            
            <div class="text">
                <h1><?php echo $item['heading']; ?></h1>
                <p>
                   <?php echo $item['para']; ?>
                </p>
                <button class="button" style="background: <?php echo $item['btn_color'];?>" > <?php echo $item['button_text']; ?></button>
            </div>
        </div>
    </div>
    <?php 
        }
    } else {
        echo "<p>No images found.</p>";
    }
    ?>
</div>



<script>
    document.addEventListener('DOMContentLoaded', function () {
        const slides = document.querySelectorAll('.slide');
        const totalSlides = slides.length;
        let currentSlide = 0;

        function showNextSlide() {
            slides[currentSlide].classList.remove('active');
            slides[currentSlide].classList.add('prev');

            currentSlide = (currentSlide + 1) % slides.length;

            slides[currentSlide].classList.remove('prev');
            slides[currentSlide].classList.add('active');
        }

        setInterval(showNextSlide, 3000); // Change image every 5 seconds
    });

    document.addEventListener('DOMContentLoaded', function () {
        const buttons = document.querySelectorAll('.button');

        buttons.forEach(button => {
            if (!button.textContent.trim()) {
                button.style.display = 'none';
            }
        });
    });

</script>
