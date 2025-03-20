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
                            <h2 class="xl:text-[70px] lg:text-6xl md:text-5xl text-4xl font-bold leading-[117%]">Culture</h2>
                            <ul class="lg:pt-5 pt-3 flex items-center lg:gap-5 gap-2">
                                <li><a href="index.php" class="lg:text-[28px] text-xl font-bold">Home</a></li>
                                <li><i class="fa-solid fa-angle-right"></i></li>
                                <li><a href="c3.php" class="lg:text-[28px] text-xl font-bold">Culture</a></li>
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
                                    <!-- <img src="assets/images/classes/cul.jpg" alt="about-bg" style="border-radius: 2rem;" class="w-full" /> -->
                                    <img src="assets/images/classes/cul.png" alt="about-bg" style="border-radius: 2rem;" class="w-full" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- right side start 439px -->
                    <div class="lg:max-w-[auto] pt-7.5">
                        <p class="text-secondary-foreground font-bubblegum-sans text-[19px] wow fadeInUp">Our Classes</p>
                        <h2 class="font-bold lg:text-[32px] md:text-[28px] text-2xl lg:leading-[130%] md:leading-[120%] leading-[110%] pb-5 wow fadeInUp" data-wow-delay=".3s">Culture</h2>
                        <p class="wow fadeInUp" data-wow-delay=".4s">
                        Culture plays a significant role in shaping a child's values, beliefs, and understanding of the world. It influences their behavior, communication styles, and emotional responses, helping them develop a sense of identity and belonging. Through exposure to various traditions, languages, and customs, children learn to appreciate diversity and respect differences, fostering empathy and inclusivity.
                        </p>
                        <p class="wow fadeInUp" data-wow-delay=".4s">
                        As children engage with cultural practices, they develop social skills and emotional intelligence by understanding the perspectives of others. Culture also impacts their learning experiences by shaping how they approach challenges, express themselves, and interact with their surroundings. A strong cultural foundation nurtures confidence and pride in their heritage while encouraging open-mindedness and adaptability, preparing them to thrive in a multicultural world.
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