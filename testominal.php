<section class="testimonial">
    <h2>TESTIMONIAL</h2>
    <div class="testimonial-wrapper">
        <div class="testimonial-box">
            <div id="testimonial-content">
                <div class="testimonial-girl-pic">
                    <img id="testimonial-image" src="" alt="">
                </div>
                <div class="testimonial-text">
                    <h3 id="testimonial-name"></h3>
                    <p><span id="testimonial-quote"></span></p>
                </div>
            </div>
        </div>
    </div>
    <div class="testimonial-arrow">
        <i class='bx bx-chevrons-left' id="prev-btn"></i>
        <i class='bx bx-chevrons-right' id="next-btn"></i>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const testimonialBox = document.getElementsByClassName('testimonial-box').length;
        let currentBox = 0;
        const testimonialContent = document.getElementById('testimonial-content');
        const prevBtn = document.getElementById('prev-btn');
        const nextBtn = document.getElementById('next-btn');

        let currentIndex = 0;
        let maxIndexReached = false;

        async function fetchTestimonial(index) {
            try {
                const response = await fetch(`fetch_testimonial.php?index=${index}`);
                const data = await response.json();
                if (data.error) {
                    console.log(data.error);
                    if (data.error === 'No testimonial found') {
                        maxIndexReached = true;
                        nextBtn.disabled = true;
                    }
                } else {
                    
                    document.getElementById('testimonial-image').src = data.image;
                    document.getElementById('testimonial-name').textContent = data.name;
                    document.getElementById('testimonial-quote').textContent = data.quote;
                    currentBox++;
                    nextBtn.disabled = false;
                    maxIndexReached = false;
                }
            } catch (error) {
                console.error('Error fetching testimonial:', error);
            }
        }

        function showNextTestimonial() {
            if (!maxIndexReached) {
                currentIndex++;
                fetchTestimonial(currentIndex);
                
            } else {
                console.log('No more testimonials to display.');
            }
        }

        function showPrevTestimonial() {
            if (currentIndex > 0) {
                currentIndex--;
                fetchTestimonial(currentIndex);
                maxIndexReached = false; 
                nextBtn.disabled = false;
            }
        }

        nextBtn.addEventListener('click', showNextTestimonial);
        prevBtn.addEventListener('click', showPrevTestimonial);

        fetchTestimonial(currentIndex);
    });

    

</script>

<style>
    .testimonial-content {
        display: flex;
        transition: transform 1.5s ease-in-out;
    }
    .testimonial-box {
        min-width: 40%;
    }
</style>

