<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        
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
                            <h2 class="xl:text-[70px] lg:text-6xl md:text-5xl text-4xl font-bold leading-[117%]">About Us</h2>
                            <ul class="lg:pt-5 pt-3 flex items-center lg:gap-5 gap-2">
                                <li><a href="index.php" class="lg:text-[28px] text-xl font-bold">Home</a></li>
                                <li><i class="fa-solid fa-angle-right"></i></li>
                                <li><a href="about.php" class="lg:text-[28px] text-xl font-bold">About Us</a></li>
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

        <!-- about section start -->
        <section class="lg:pt-15 lg:pb-15 pt-10 pb-10">
            <div class="container">
                <div class="grid xl:grid-cols-[45%_52%] lg:grid-cols-[40%_44%] grid-cols-1 xl:justify-between gap-7.5">
                    <div class="">
                        <p class="text-primary-foreground font-bubblegum-sans text-[19px] wow fadeInUp">About Us</p>
                        <h2 class="font-bold lg:text-[32px] md:text-[28px] text-2xl lg:leading-[130%] md:leading-[120%] leading-[110%] mt-2.5 lg:max-w-[410px] wow fadeInUp" data-wow-delay=".3s">Vidhraksh Montessori Play School</h2>
                        <p class="mt-5 wow fadeInUp" data-wow-delay=".4s">Vidhraksh Montessori School is headed by Mrs. Vijayalakshmi.D She is a curious learner exploring new things and thoughts everyday. Her experience with children have taught her to be transparent and clarity in all her actions. Even though she is B.E., Degree holder, She finds joy in holding a child’s hand to take the child into successful journey. She is also N.L.P trainer deal with teenager problems and counsel teachers, but she felt true happiness when she make the children be confident, trust, and respect themselves. Thus she Nurtures every Little Dream of a child and celebrate every tiny victory of her students.</p>
                        <!-- <p class="mt-5 wow fadeInUp" data-wow-delay=".5s">Lorem ipsum dolor sit amet cons Amet lectus mi ultricies dictum facilisis sem Lorem ipsum dolor sit amet consectetur. Amet lectus mi ultricies</p> -->
                        <!-- <div class="flex gap-8 mt-10 wow fadeInUp" data-wow-delay=".6s">
                            <a href="#" class="btn-rounded-full">Read More</a>
                            <a href="#" class="btn-rounded-full bg-transparent border-primary text-muted-foreground hover:bg-primary hover:text-cream-foreground">Contact Us</a>
                        </div> -->
                    </div>
                    <div class="flex items-center lg:gap-7.5 gap-5">
                        <div class="flex flex-col lg:gap-7.5 gap-5 w-full sm:w-auto">
                            <div class="bg-warm border-b-4 border-green rounded-tr-[64px] rounded-tl-[64px] md:px-12.5 px-7.5 sm:py-15 py-10 flex items-center justify-center gap-10 wow fadeInLeft" data-wow-delay="0.3s">
                                <i class="icon-kindergarden text-6xl text-muted-foreground"></i>
                                <div>
                                    <h3 class="text-[32px] font-bold leading-[130%]">2018</h3>
                                    <p>Since</p>
                                </div>
                            </div>
                            
                            <img src="assets/images/about/about-2.png" alt="img-1"  class="wow fadeInUp" data-wow-delay=".4s" >
                        
                        </div>
                        <div class="hidden md:block wow fadeInDown" data-wow-delay=".5s">
                            <img src="assets/images/about/about-3.png" alt="img-2"  >
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about section end -->

        <!-- Portfolio section start -->
        <section class="portfolio">
            <div class="container">
                <div class="text-center">
                    <p class="section-title">Latest Gallery</p>
                </div>
                <div class="gallery-grid">
                    <!-- Image Cards -->
                    <div class="gallery-item"><img src="assets/vmps/1.png" alt="img" /></div>
                    <div class="gallery-item"><img src="assets/vmps/2.png" alt="img" /></div>
                    <div class="gallery-item"><img src="assets/vmps/3.png" alt="img" /></div>
                    <div class="gallery-item"><img src="assets/vmps/4.png" alt="img" /></div>
                    <div class="gallery-item"><img src="assets/vmps/5.png" alt="img" /></div>
                    <div class="gallery-item"><img src="assets/vmps/6.png" alt="img" /></div>
                    <div class="gallery-item"><img src="assets/vmps/7.png" alt="img" /></div>
                    <div class="gallery-item"><img src="assets/vmps/8.png" alt="img" /></div>
                    <div class="gallery-item"><img src="assets/vmps/9.png" alt="img" /></div>
                    <div class="gallery-item"><img src="assets/vmps/10.png" alt="img" /></div>
                    <div class="gallery-item"><img src="assets/vmps/11.png" alt="img" /></div>
                    <div class="gallery-item"><img src="assets/vmps/12.png" alt="img" /></div>
                    <div class="gallery-item"><img src="assets/vmps/13.png" alt="img" /></div>
                    <div class="gallery-item"><img src="assets/vmps/14.png" alt="img" /></div>
                    <div class="gallery-item"><img src="assets/vmps/15.png" alt="img" /></div>
                </div>
            </div>
        </section>
        <!-- Portfolio section end -->
        <style>
            /* Basic section styles */
            .container {
                max-width: 1200px;
                margin: 0 auto;
            }

            .section-title {
                font-size: 24px;
                font-weight: bold;
                margin-bottom: 30px;
                color: #333;
            }

            /* Responsive grid layout */
            .gallery-grid {
                display: grid;
                gap: 16px;
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            }

            /* Individual card styles */
            .gallery-item {
                position: relative;
                overflow: hidden;
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }

            /* Image styles */
            .gallery-item img {
                width: 100%;
                height: 300px;
                object-fit: cover;
                transition: transform 0.3s ease;
            }

            /* Hover effect */
            .gallery-item:hover img {
                transform: scale(1.05);
            }

            /* Responsive for smaller screens */
            @media (max-width: 768px) {
                .gallery-grid {
                    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
                }

                .gallery-item img {
                    height: 200px;
                }
            }
        </style>


        <!-- newsletter section start -->
        <section class="lg:pt-15 pt-10">
            <div class="bg-warm py-12.5 relative z-[1]">
                <div class="container">
                    <div class="flex md:flex-row flex-col justify-between items-center gap-10">
                        <div class="lg:max-w-[573px] max-w-[400px]">
                            <p class="text-muted-foreground font-bubblegum-sans text-[19px] wow fadeInUp">Stay With Us</p>
                            <h2 class="font-bold lg:text-[32px] md:text-[28px] text-2xl lg:leading-[130%] md:leading-[120%] leading-[110%] mt-2.5 max-w-[410px] wow fadeInUp" data-wow-delay=".3s">
                                The path to success starts with education
                            </h2>
                            <p class="mt-5 wow fadeInUp" data-wow-delay=".4s">Vidhraksh Montessori School is headed by Mrs. Vijayalakshmi.D She is a curious learner exploring new things and thoughts everyday.</p>
                            <div class="mt-9">
                                <a href="about.php" class="btn-rounded-full">Read More</a>
                            </div>
                        </div>
                        <div class="relative">
                            <img src="assets/images/newsletter/stay-thumb.png" alt="tree-img" />
                        </div>
                    </div>
                </div>
                <div class="absolute left-0 bottom-0 z-[-1]">
                    <img src="assets/images/newsletter/stay-shape.png" alt="stay-shape" />
                </div>
            </div>
        </section>
        <!-- newsletter section end -->

        <?php include "temp/footer.php" ?>
    </body>

</html>