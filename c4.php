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
                            <h2 class="xl:text-[70px] lg:text-6xl md:text-5xl text-4xl font-bold leading-[117%]">Classical Carnatic Music</h2>
                            <ul class="lg:pt-5 pt-3 flex items-center lg:gap-5 gap-2">
                                <li><a href="index.php" class="lg:text-[28px] text-xl font-bold">Home</a></li>
                                <li><i class="fa-solid fa-angle-right"></i></li>
                                <li><a href="c4.php" class="lg:text-[28px] text-xl font-bold">Classical Carnatic Music</a></li>
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
                                    <img src="assets/images/classes/ccm.webp" alt="about-bg" style="border-radius: 2rem;" class="w-full" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- right side start 439px -->
                    <div class="lg:max-w-[auto] pt-7.5">
                        <p class="text-secondary-foreground font-bubblegum-sans text-[19px] wow fadeInUp">Our Classes</p>
                        <h2 class="font-bold lg:text-[32px] md:text-[28px] text-2xl lg:leading-[130%] md:leading-[120%] leading-[110%] pb-5 wow fadeInUp" data-wow-delay=".3s">Classical Carnatic Music</h2>
                        <p class="wow fadeInUp" data-wow-delay=".4s">
                        Classical Carnatic Music is a rich and ancient musical tradition that originated in South India. It is known for its intricate melodies, rhythmic patterns, and emotive expressions that convey devotion and spirituality. Carnatic music is deeply rooted in tradition and follows a structured framework that includes ragas (melodic scales) and talas (rhythmic cycles), which provide a foundation for both composition and improvisation.
                        </p>
                        <p class="wow fadeInUp" data-wow-delay=".4s">
                        The core of Carnatic music lies in its compositions, often attributed to revered composers such as Tyagaraja, Muthuswami Dikshitar, and Shyama Shastri, whose works are infused with devotion and philosophical depth. Performances typically include an alapana (improvised exploration of the raga), followed by kriti (the main composition), and further improvisational segments such as niraval and kalpana swaras.
                        </p>
                        <p class="wow fadeInUp" data-wow-delay=".4s">
                        Learning Carnatic music not only enhances musical skills but also cultivates discipline, patience, and concentration. It fosters an appreciation for Indian culture and tradition while promoting creativity and emotional expression. With its deep spiritual roots and intricate musical structure, Classical Carnatic Music continues to inspire and captivate audiences worldwide.
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