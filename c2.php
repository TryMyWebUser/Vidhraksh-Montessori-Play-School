<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <?php include "temp/head.php" ?>

    </head>

    <body>
        <?php include "temp/header.php" ?>

        <!-- page title start -->
        <div class="lg:pb-15 pb-10">
            <div class="bg-warm lg:py-15 py-10">
                <div class="container">
                    <div class="flex md:flex-row flex-col justify-between items-center gap-10">
                        <div class="">
                            <h2 class="xl:text-[70px] lg:text-6xl md:text-5xl text-4xl font-bold leading-[117%]">Science & Maths</h2>
                            <ul class="lg:pt-5 pt-3 flex items-center lg:gap-5 gap-2">
                                <li><a href="index.php" class="lg:text-[28px] text-xl font-bold">Home</a></li>
                                <li><i class="fa-solid fa-angle-right"></i></li>
                                <li><a href="c2.php" class="lg:text-[28px] text-xl font-bold">Science & Maths</a></li>
                            </ul>
                        </div>
                        <div class="relative">
                            <img src="assets/images/shapes/bread-cat.png" alt="cat-img" class="absolute bottom-5 -left-[30px] animate-up-down" />
                            <img src="assets/images/shapes/bread-thumb.png" alt="thumb-img" class="sm:max-h-full max-h-60" />
                            <img src="assets/images/shapes/bread-child.png" alt="child-img" class="absolute bottom-0 right-0 animate-left-right" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- page title end -->

        <!-- section start -->
        <section class="lg:pt-15 pt-10 lg:pb-15 pb-10" id="scie">
            <div class="container">
                <div class="grid xl:grid-cols-[45%_52%] lg:grid-cols-[40%_44%] grid-cols-1 xl:justify-between gap-7.5">
                    <div class="relative">
                        <div class="flex sm:flex-row flex-col justify-center sm:items-end gap-6">
                            <div class="wow fadeInUp" data-wow-delay="1200">
                                <div class=" ">
                                    <img src="assets/images/about/shap-1.png" alt="shap" />
                                </div>
                                <div class="ml-9">
                                    <img src="assets/images/classes/scie.avif" alt="about-bg" style="border-radius: 2rem;" class="w-full" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- right side start 439px -->
                    <div class="lg:max-w-[auto] pt-7.5">
                        <p class="text-secondary-foreground font-bubblegum-sans text-[19px] wow fadeInUp">Our Classes</p>
                        <h2 class="font-bold lg:text-[32px] md:text-[28px] text-2xl lg:leading-[130%] md:leading-[120%] leading-[110%] pb-5 wow fadeInUp" data-wow-delay=".3s">Science</h2>
                        <p class="wow fadeInUp" data-wow-delay=".4s">
                        Science is a subject that encourages children to explore, observe, and question the world around them. It fosters curiosity and helps develop critical thinking, problem-solving, and analytical skills. Through hands-on experiments and observations, children gain a deeper understanding of natural phenomena and the principles governing them. Science nurtures a sense of wonder, allowing children to ask questions, make predictions, and test their ideas, which promotes logical reasoning and creativity.
                        </p>
                        <p class="wow fadeInUp" data-wow-delay=".4s">
                        Engaging in science from an early age helps children develop cognitive abilities and enhances their ability to approach problems systematically. It encourages them to explore concepts such as cause and effect, classification, and observation, which are essential for understanding how the world works. Science not only strengthens their knowledge base but also inspires a lifelong love for learning, empowering them to apply scientific thinking to real-life situations and challenges.
                        </p>
                    </div>
                    <!-- right side end -->
                </div>
            </div>
        </section>
        
        <section class="lg:pt-0 pt-0">
            <div class="container">
                <div class="wow fadeInUp" data-wow-delay=".2s">
                    <video controlslist="nodownload" oncontextmenu="return false;"style="width: 15rem; justify-self: center;" controls>
                        <source src="assets/vmps/vid/scie.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </section>
        <!-- section end -->

        <!-- section start -->
        <section class="lg:pt-15 pt-10 lg:pb-15 pb-10" id="math">
            <div class="container">
                <div class="grid xl:grid-cols-[45%_52%] lg:grid-cols-[40%_44%] grid-cols-1 xl:justify-between gap-7.5">
                    <div class="relative">
                        <div class="flex sm:flex-row flex-col justify-center sm:items-end gap-6">
                            <div class="wow fadeInUp" data-wow-delay="1200">
                                <div class=" ">
                                    <img src="assets/images/about/shap-1.png" alt="shap" />
                                </div>
                                <div class="ml-9">
                                    <img src="assets/images/classes/math.jpg" alt="about-bg" style="border-radius: 2rem;" class="w-full" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- right side start 439px -->
                    <div class="lg:max-w-[auto] pt-7.5">
                        <p class="text-secondary-foreground font-bubblegum-sans text-[19px] wow fadeInUp">Our Classes</p>
                        <h2 class="font-bold lg:text-[32px] md:text-[28px] text-2xl lg:leading-[130%] md:leading-[120%] leading-[110%] pb-5 wow fadeInUp" data-wow-delay=".3s">Maths</h2>
                        <p class="wow fadeInUp" data-wow-delay=".4s">
                        Mathematics is a fundamental subject that helps children develop problem-solving skills, logical reasoning, and analytical thinking. It provides a strong foundation for understanding concepts such as numbers, patterns, shapes, and measurements, which are essential for everyday life. Through consistent practice, children enhance their calculation speed, improve accuracy, and build confidence in applying mathematical concepts.
                        </p>
                        <p class="wow fadeInUp" data-wow-delay=".4s">
                        Learning mathematics not only boosts cognitive abilities but also encourages critical thinking by teaching children how to analyze problems, identify patterns, and develop effective strategies to find solutions. It nurtures discipline and patience as children work through challenges and discover multiple approaches to solving problems. A solid grasp of mathematical concepts prepares children for future academic success and helps them apply logical thinking in real-life situations, fostering a lifelong appreciation for learning and problem-solving.
                        </p>
                    </div>
                    <!-- right side end -->
                </div>
            </div>
        </section>
        
        <section class="lg:pt-0 pt-0">
            <div class="container">
                <div class="wow fadeInUp" data-wow-delay=".2s">
                    <video controlslist="nodownload" oncontextmenu="return false;"style="width: 15rem; justify-self: center;" controls>
                        <source src="assets/vmps/vid/math.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </section>
        <!-- section end -->

        <?php include "temp/footer.php" ?>

    </body>
</html>