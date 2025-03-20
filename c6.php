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
                            <h2 class="xl:text-[70px] lg:text-6xl md:text-5xl text-4xl font-bold leading-[117%]">Practical Life Exercises</h2>
                            <ul class="lg:pt-5 pt-3 flex items-center lg:gap-5 gap-2">
                                <li><a href="index.php" class="lg:text-[28px] text-xl font-bold">Home</a></li>
                                <li><i class="fa-solid fa-angle-right"></i></li>
                                <li><a href="c6.php" class="lg:text-[28px] text-xl font-bold">Practical Life Exercises</a></li>
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
        <section class="lg:pt-15 pt-10 lg:pb-15 pb-10">
            <div class="container">
                <div class="grid xl:grid-cols-[45%_52%] lg:grid-cols-[40%_44%] grid-cols-1 xl:justify-between gap-7.5">
                    <div class="relative">
                        <div class="flex sm:flex-row flex-col justify-center sm:items-end gap-6">
                            <div class="wow fadeInUp" data-wow-delay="1200">
                                <div class=" ">
                                    <img src="assets/images/about/shap-1.png" alt="shap" />
                                </div>
                                <div class="ml-9">
                                    <img src="assets/images/classes/ple.jpg" alt="about-bg" style="border-radius: 2rem;" class="w-full" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- right side start 439px -->
                    <div class="lg:max-w-[auto] pt-7.5">
                        <p class="text-secondary-foreground font-bubblegum-sans text-[19px] wow fadeInUp">Our Classes</p>
                        <h2 class="font-bold lg:text-[32px] md:text-[28px] text-2xl lg:leading-[130%] md:leading-[120%] leading-[110%] pb-5 wow fadeInUp" data-wow-delay=".3s">Practical Life Exercises</h2>
                        <p class="wow fadeInUp" data-wow-delay=".4s">
                        Practical Life Exercises are an essential part of early childhood education, especially in the Montessori method, aimed at helping children develop independence, coordination, and a sense of responsibility. These exercises involve real-life activities such as pouring, sweeping, folding clothes, and setting the table, which allow children to practice and refine their motor skills while gaining confidence in their abilities.
                        </p>
                        <p class="wow fadeInUp" data-wow-delay=".4s">
                        Through repetition and practice, children not only improve their hand-eye coordination and concentration but also develop a sense of order and discipline. Practical Life Exercises instill essential life skills that promote self-sufficiency and prepare children to handle everyday tasks effectively. Additionally, these activities encourage a sense of belonging and contribution, fostering respect for their environment and the people around them. By engaging in Practical Life Exercises, children develop patience, focus, and a deep sense of accomplishment, which lays a strong foundation for their overall growth and development.
                        </p>
                    </div>
                    <!-- right side end -->
                </div>
            </div>
        </section>
        
        <!-- <section class="lg:pt-0 pt-0">
            <div class="container">
                <div class="wow fadeInUp" data-wow-delay=".2s">
                    <img src="assets/images/services/service-details-1.png" alt="details">
                </div>
            </div>
        </section> -->
        <!-- section end -->

        <?php include "temp/footer.php" ?>

    </body>
</html>