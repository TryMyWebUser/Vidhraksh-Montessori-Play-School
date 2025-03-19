<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <?php include "temp/head.php" ?>
    </head>

    <body>
        <?php include "temp/header.php" ?>

        <!-- banner section start -->
        <section class="bg-warm pt-[78px] lg:mb-15 mb-10 relative">
            <div class="container relative">
                <div class="flex flex-col items-center text-center relative z-10">
                    <h1 class="font-normal xl:text-[70px] lg:text-6xl md:text-5xl text-4xl xl:leading-[128%] lg:leading-[125%] md:leading-[120%] max-w-[776px]">
                        <span class="relative">
                        Vidhraksh Montessori <span class="absolute -left-6 top-1 text-3xl"><i class="icon-three-line"></i></span>
                        </span>
                        <span class="font-bold">Play</span> <span class="font-bold text-destructive-foreground">School</span>
                    </h1>

                    <div class="flex absolute right-[87px] top-14 animate-skw">
                        <img src="assets/images/shapes/shap.png" alt="shap-2" class="w-7.5 h-12.5 relative top-9" />
                        <img src="assets/images/shapes/shap.png" alt="shap-1" />
                        <img src="assets/images/shapes/shap.png" alt="shap-2" class="w-5 h-8 -mt-7" />
                    </div>

                    <p class="pt-5 max-w-[431px]">Vidhraksh Montessori School is headed by Mrs. Vijayalakshmi.D She is a curious learner exploring new things and thoughts everyday.</p>
                    <a href="tel:+917708676700" class="mt-6 bg-green text-cream-foreground rounded-md max-h-15 leading-normal btn">For Enquiry</a>
                </div>
                <div class="absolute left-2.5 lg:top-0 top-10 lg:max-w-full max-w-[200px] sm:block hidden animate-up-down">
                    <img src="assets/images/banner/boy_img_1.png" alt="banner-img-1" />
                    <span class="absolute -left-2.5 top-[9px] border-2 border-primary rounded-[125px] w-full h-full"></span>
                </div>

                <div class="absolute right-0 bottom-0 pb-[71px] lg:block hidden animate-up-down">
                    <img src="assets/images/banner/boy_img_2.png" alt="banner-img-2" />
                    <span class="absolute -left-2.5 top-[9px] border-2 border-secondary rounded-[125px] max-h-[369px] w-full h-full"></span>
                </div>

                <div class="lg:pt-[72px]">
                    <img src="assets/images/banner/painting.png" alt="painting" />
                </div>
            </div>
            <!-- circle shap -->
            <div class="lg:block hidden">
                <div class="absolute left-0 top-[60px] animate-left-right-2">
                    <img src="assets/images/banner/left-circle-1.png" alt="img" />
                </div>
                <div class="absolute left-[37px] top-[186px] animate-left-right-2">
                    <img src="assets/images/banner/left-circle-2.png" alt="img" />
                </div>
                <div class="absolute right-0 bottom-[165px] animate-up-down">
                    <img src="assets/images/banner/right-circle.png" alt="img" />
                </div>
            </div>
            <!-- circle shap -->
        </section>
        <!-- banner section end -->

        <!-- about section start -->
        <section class="lg:pt-15 pt-10 lg:pb-15 pb-10">
            <div class="container">
                <div class="grid lg:grid-cols-[60%_40%] grid-cols-1 items-center">
                    <div class="relative">
                        <div class="flex sm:flex-row flex-col sm:items-end gap-6">
                            <div class="wow fadeInUp" data-wow-delay="1200">
                                <div class=" ">
                                    <img src="assets/images/about/shap-1.png" alt="shap" />
                                </div>
                                <div class="ml-9">
                                    <img src="assets/images/about/about-1.png" alt="about-bg" class="w-full" />
                                </div>
                            </div>
                            <div class="flex sm:flex-col gap-8">
                                <div class="bg-warm max-w-[212px] rounded-[11px] px-5 pt-[22px] pb-6 flex flex-col items-center justify-center text-center">
                                    <img src="assets/images/about/icreement.png" alt="icreement" />
                                    <h6 class="text-xl font-bold">Vidhraksh Montessori</h6>
                                    <p>Play School</p>
                                </div>
                                <div class="bg-background max-w-[212px] rounded-[11px] px-5 pt-[22px] pb-6 flex flex-col justify-center drop-shadow-[0px_4.8px_24.4px_rgba(19,16,34,0.10)]">
                                    <h6 class="text-[32px] font-bold text-secondary-foreground">2018</h6>
                                    <p>Since</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- right side start -->
                    <div class="lg:max-w-[439px] pt-7.5">
                        <p class="text-secondary-foreground font-bubblegum-sans text-[19px] wow fadeInUp">About Us</p>
                        <h2 class="font-bold lg:text-[32px] md:text-[28px] text-2xl lg:leading-[130%] md:leading-[120%] leading-[110%] pb-5 wow fadeInUp" data-wow-delay=".3s">Vidhraksh Montessori Play School</h2>
                        <p class="wow fadeInUp" data-wow-delay=".4s">
                        Vidhraksh Montessori School is headed by Mrs. Vijayalakshmi.D She is a curious learner exploring new things and thoughts everyday. Her experience with children have taught her to be transparent and clarity in all her actions. Even though she is B.E., Degree holder, She finds joy in holding a child’s hand to take the child into successful journey.
                        </p>
                        <a href="about.php" class="border border-gray-200 rounded-md lg:mt-10 mt-7 hover:text-cream-foreground btn">Read More</a>
                    </div>
                    <!-- right side end -->
                </div>
            </div>
        </section>
        <!-- about section end -->

        <!-- programs section start -->
        <section class="lg:pt-15 pt-10 lg:pb-15 pb-10 relative">
            <div class="container">
                <div class="text-center flex flex-col items-center">
                    <p class="text-green-foreground font-bubblegum-sans text-[19px] wow fadeInUp">Educational Classes</p>
                    <!-- <h2 class="font-bold lg:text-[32px] md:text-[28px] text-2xl lg:leading-[130%] md:leading-[120%] leading-[110%] lg:max-w-[630px] wow fadeInUp" data-wow-delay=".3s">
                        Strong Foundation for Success For Nurturing Curiosityl
                    </h2> -->
                </div>
                <div class="lg:pl-11">
                    <div class="grid md:grid-cols-2 grid-cols-1 gap-y-7.5 lg:gap-x-[74px] gap-x-5 lg:pt-15 pt-10">
                        <!-- card start -->
                        <div class="relative rounded-[10px] bg-background border-2 border-[#F2F2F2] lg:p-10 p-4 transition-all duration-500 hover:shadow-3xl hover:border-transparent group/card wow fadeInUp" data-wow-delay=".3s">
                            <div
                                class="md:max-w-[88px] max-w-[70px] w-full max-h-[88px] flex justify-center items-center rounded-[10px] border border-[#F2F2F2] bg-background sm:p-[14px] p-2.5 static lg:absolute -left-11 top-1/2 lg:-translate-y-1/2 transition-all duration-500 text-green-foreground group-hover/card:bg-green group-hover/card:text-cream-foreground"
                            >
                                <img src="assets/images/shapes/bard.png" class="icon-car-toy md:text-6xl text-[40px]">
                            </div>
                            <div class="lg:pl-11 mt-4 lg:mt-0">
                                <h4>
                                    <a href="c1.php" class="font-semibold lg:text-2xl text-xl group-hover/card:text-green-foreground transition-all duration-500">Brain Gym Exercises </a>
                                </h4>
                            </div>
                        </div>
                        <!-- card end -->
                        <!-- card start -->
                        <div class="relative rounded-[10px] bg-background border-2 border-[#F2F2F2] lg:p-10 p-4 transition-all duration-500 hover:shadow-3xl hover:border-transparent group/card wow fadeInUp" data-wow-delay=".3s">
                            <div
                                class="md:max-w-[88px] max-w-[70px] w-full max-h-[88px] flex justify-center items-center rounded-[10px] border border-[#F2F2F2] bg-background sm:p-[14px] p-2.5 static lg:absolute -left-11 top-1/2 lg:-translate-y-1/2 transition-all duration-500 text-green-foreground group-hover/card:bg-green group-hover/card:text-cream-foreground"
                            >
                                <img src="assets/images/shapes/bread-cat.png" class="icon-car-toy md:text-6xl text-[40px]">
                            </div>
                            <div class="lg:pl-11 mt-4 lg:mt-0">
                                <h4>
                                    <a href="c2.php" class="font-semibold lg:text-2xl text-xl group-hover/card:text-green-foreground transition-all duration-500">Science</a>
                                </h4>
                            </div>
                        </div>
                        <!-- card end -->
                        <!-- card start -->
                        <div class="relative rounded-[10px] bg-background border-2 border-[#F2F2F2] lg:p-10 p-4 transition-all duration-500 hover:shadow-3xl hover:border-transparent group/card wow fadeInUp" data-wow-delay=".3s">
                            <div
                                class="md:max-w-[88px] max-w-[70px] w-full max-h-[88px] flex justify-center items-center rounded-[10px] border border-[#F2F2F2] bg-background sm:p-[14px] p-2.5 static lg:absolute -left-11 top-1/2 lg:-translate-y-1/2 transition-all duration-500 text-green-foreground group-hover/card:bg-green group-hover/card:text-cream-foreground"
                            >
                                <img src="assets/images/shapes/bread-child.png" class="icon-car-toy md:text-6xl text-[40px]">
                            </div>
                            <div class="lg:pl-11 mt-4 lg:mt-0">
                                <h4>
                                    <a href="c3.php" class="font-semibold lg:text-2xl text-xl group-hover/card:text-green-foreground transition-all duration-500">Culture</a>
                                </h4>
                            </div>
                        </div>
                        <!-- card end -->
                        <!-- card start -->
                        <div class="relative rounded-[10px] bg-background border-2 border-[#F2F2F2] lg:p-10 p-4 transition-all duration-500 hover:shadow-3xl hover:border-transparent group/card wow fadeInUp" data-wow-delay=".3s">
                            <div
                                class="md:max-w-[88px] max-w-[70px] w-full max-h-[88px] flex justify-center items-center rounded-[10px] border border-[#F2F2F2] bg-background sm:p-[14px] p-2.5 static lg:absolute -left-11 top-1/2 lg:-translate-y-1/2 transition-all duration-500 text-green-foreground group-hover/card:bg-green group-hover/card:text-cream-foreground"
                            >
                                <img src="assets/images/shapes/bread-thumb.png" class="icon-car-toy md:text-6xl text-[40px]">
                            </div>
                            <div class="lg:pl-11 mt-4 lg:mt-0">
                                <h4>
                                    <a href="c4.php" class="font-semibold lg:text-2xl text-xl group-hover/card:text-green-foreground transition-all duration-500">Maths</a>
                                </h4>
                            </div>
                        </div>
                        <!-- card end -->
                        <!-- card start -->
                        <div class="relative rounded-[10px] bg-background border-2 border-[#F2F2F2] lg:p-10 p-4 transition-all duration-500 hover:shadow-3xl hover:border-transparent group/card wow fadeInUp" data-wow-delay=".3s">
                            <div
                                class="md:max-w-[88px] max-w-[70px] w-full max-h-[88px] flex justify-center items-center rounded-[10px] border border-[#F2F2F2] bg-background sm:p-[14px] p-2.5 static lg:absolute -left-11 top-1/2 lg:-translate-y-1/2 transition-all duration-500 text-green-foreground group-hover/card:bg-green group-hover/card:text-cream-foreground"
                            >
                                <img src="assets/images/shapes/class-j.png" class="icon-car-toy md:text-6xl text-[40px]">
                            </div>
                            <div class="lg:pl-11 mt-4 lg:mt-0">
                                <h4>
                                    <a href="c5.php" class="font-semibold lg:text-2xl text-xl group-hover/card:text-green-foreground transition-all duration-500">Practical Life Exercises</a>
                                </h4>
                            </div>
                        </div>
                        <!-- card end -->
                        <!-- card start -->
                        <div class="relative rounded-[10px] bg-background border-2 border-[#F2F2F2] lg:p-10 p-4 transition-all duration-500 hover:shadow-3xl hover:border-transparent group/card wow fadeInUp" data-wow-delay=".3s">
                            <div
                                class="md:max-w-[88px] max-w-[70px] w-full max-h-[88px] flex justify-center items-center rounded-[10px] border border-[#F2F2F2] bg-background sm:p-[14px] p-2.5 static lg:absolute -left-11 top-1/2 lg:-translate-y-1/2 transition-all duration-500 text-green-foreground group-hover/card:bg-green group-hover/card:text-cream-foreground"
                            >
                                <img src="assets/images/shapes/knowledge-animal.png" class="icon-car-toy md:text-6xl text-[40px]">
                            </div>
                            <div class="lg:pl-11 mt-4 lg:mt-0">
                                <h4>
                                    <a href="c6.php" class="font-semibold lg:text-2xl text-xl group-hover/card:text-green-foreground transition-all duration-500">Tamil</a>
                                </h4>
                            </div>
                        </div>
                        <!-- card end -->
                        <!-- card start -->
                        <div class="relative rounded-[10px] bg-background border-2 border-[#F2F2F2] lg:p-10 p-4 transition-all duration-500 hover:shadow-3xl hover:border-transparent group/card wow fadeInUp" data-wow-delay=".3s">
                            <div
                                class="md:max-w-[88px] max-w-[70px] w-full max-h-[88px] flex justify-center items-center rounded-[10px] border border-[#F2F2F2] bg-background sm:p-[14px] p-2.5 static lg:absolute -left-11 top-1/2 lg:-translate-y-1/2 transition-all duration-500 text-green-foreground group-hover/card:bg-green group-hover/card:text-cream-foreground"
                            >
                                <img src="assets/images/shapes/man.png" class="icon-car-toy md:text-6xl text-[40px]">
                            </div>
                            <div class="lg:pl-11 mt-4 lg:mt-0">
                                <h4>
                                    <a href="c7.php" class="font-semibold lg:text-2xl text-xl group-hover/card:text-green-foreground transition-all duration-500">English</a>
                                </h4>
                            </div>
                        </div>
                        <!-- card end -->
                    </div>
                </div>
            </div>
            <!-- shap start -->
            <div class="absolute top-15 right-11 z-[-1] lg:max-w-full max-w-36 md:block hidden animate-left-right">
                <img src="assets/images/shapes/pencil-rocket.png" alt="pencil" class="w-full h-auto" />
            </div>
            <!-- shap end -->
        </section>
        <!-- programs section end -->

        <!-- Portfolio section start -->
        <section class="lg:pt-15 lg:pb-15 pt-10 pb-10 portfolio">
            <div class="container">
                <div class="text-center flex flex-col items-center">
                    <p class="text-secondary-foreground font-bubblegum-sans text-[19px] wow fadeInUp">Latest Gallery</p>
                    <!-- <h2 class="font-bold lg:text-[32px] md:text-[28px] text-2xl lg:leading-[130%] md:leading-[120%] leading-[110%] lg:max-w-[630px] wow fadeInUp" data-wow-delay=".3s">
                        Exploring Minds Elementary School Education the only school
                    </h2> -->
                </div>
                <div class="mt-[64px] overflow-hidden relative wow fadeInUp" data-wow-delay=".3s">
                    <!-- group one -->
                    <div data-target="education" class="grid lg:gap-7.5 gap-4 grid-cols-12 grid-rows-[277px] relative top-0 left-0 transition-all duration-500 translate-y-0 target-card">
                        <!-- card start -->
                        <div class="sm:col-start-1 md:col-end-5 sm:col-end-7 col-span-full sm:row-span-2 relative group/card">
                            <img src="assets/vmps/1.jpg" alt="img" class="w-full h-full max-h-[300px] sm:max-h-full object-cover rounded-[10px]" />
                        </div>
                        <!-- card end -->
                        <!-- card start -->
                        <div class="md:col-start-5 md:col-end-10 sm:col-start-7 sm:col-end-13 col-span-full relative group/card">
                            <img src="assets/vmps/2.jpg" alt="img" class="w-full h-full max-h-[300px] sm:max-h-full object-cover rounded-[10px]" />
                        </div>
                        <!-- card end -->
                        <!-- card start -->
                        <div class="md:col-start-10 sm:col-start-7 sm:col-end-13 col-span-full relative group/card">
                            <img src="assets/vmps/3.jpg" alt="img" class="w-full h-full max-h-[300px] sm:max-h-full object-cover rounded-[10px]" />
                        </div>
                        <!-- card end -->
                        <!-- card start -->
                        <div class="md:col-start-5 md:col-end-9 sm:col-start-1 sm:col-end-7 col-span-full relative group/card">
                            <img src="assets/vmps/4.jpg" alt="img" class="w-full h-full max-h-[300px] sm:max-h-full object-cover rounded-[10px]" />
                        </div>
                        <!-- card end -->
                        <!-- card start -->
                        <div class="md:col-start-9 sm:col-span-6 sm:col-end-13 col-span-full relative group/card">
                            <img src="assets/vmps/5.jpg" alt="img" class="w-full h-full max-h-[300px] sm:max-h-full object-cover rounded-[10px]" />
                        </div>
                        <!-- card end -->
                        <!-- card start -->
                        <div class="sm:col-start-1 md:col-end-5 sm:col-end-7 col-span-full sm:row-span-2 relative group/card">
                            <img src="assets/vmps/6.jpg" alt="img" class="w-full h-full max-h-[300px] sm:max-h-full object-cover rounded-[10px]" />
                        </div>
                        <!-- card end -->
                        <!-- card start -->
                        <div class="md:col-start-5 md:col-end-10 sm:col-start-7 sm:col-end-13 col-span-full relative group/card">
                            <img src="assets/vmps/7.jpg" alt="img" class="w-full h-full max-h-[300px] sm:max-h-full object-cover rounded-[10px]" />
                        </div>
                        <!-- card end -->
                        <!-- card start -->
                        <div class="md:col-start-10 sm:col-start-7 sm:col-end-13 col-span-full relative group/card">
                            <img src="assets/vmps/8.jpg" alt="img" class="w-full h-full max-h-[300px] sm:max-h-full object-cover rounded-[10px]" />
                        </div>
                        <!-- card end -->
                        <!-- card start -->
                        <div class="md:col-start-5 md:col-end-9 sm:col-start-1 sm:col-end-7 col-span-full relative group/card">
                            <img src="assets/vmps/9.jpg" alt="img" class="w-full h-full max-h-[300px] sm:max-h-full object-cover rounded-[10px]" />
                        </div>
                        <!-- card end -->
                        <!-- card start -->
                        <div class="md:col-start-9 sm:col-span-6 sm:col-end-13 col-span-full relative group/card">
                            <img src="assets/vmps/10.jpg" alt="img" class="w-full h-full max-h-[300px] sm:max-h-full object-cover rounded-[10px]" />
                        </div>
                        <!-- card end -->
                        <!-- card start -->
                        <div class="sm:col-start-1 md:col-end-5 sm:col-end-7 col-span-full sm:row-span-2 relative group/card">
                            <img src="assets/vmps/11.jpg" alt="img" class="w-full h-full max-h-[300px] sm:max-h-full object-cover rounded-[10px]" />
                        </div>
                        <!-- card end -->
                        <!-- card start -->
                        <div class="md:col-start-5 md:col-end-10 sm:col-start-7 sm:col-end-13 col-span-full relative group/card">
                            <img src="assets/vmps/12.jpg" alt="img" class="w-full h-full max-h-[300px] sm:max-h-full object-cover rounded-[10px]" />
                        </div>
                        <!-- card end -->
                        <!-- card start -->
                        <div class="md:col-start-10 sm:col-start-7 sm:col-end-13 col-span-full relative group/card">
                            <img src="assets/vmps/13.jpg" alt="img" class="w-full h-full max-h-[300px] sm:max-h-full object-cover rounded-[10px]" />
                        </div>
                        <!-- card end -->
                        <!-- card start -->
                        <div class="md:col-start-5 md:col-end-9 sm:col-start-1 sm:col-end-7 col-span-full relative group/card">
                            <img src="assets/vmps/14.jpg" alt="img" class="w-full h-full max-h-[300px] sm:max-h-full object-cover rounded-[10px]" />
                        </div>
                        <!-- card end -->
                        <!-- card start -->
                        <div class="md:col-start-9 sm:col-span-6 sm:col-end-13 col-span-full relative group/card">
                            <img src="assets/vmps/15.jpg" alt="img" class="w-full h-full max-h-[300px] sm:max-h-full object-cover rounded-[10px]" />
                        </div>
                        <!-- card end -->
                    </div>
                    <!-- group one -->
                </div>
            </div>
        </section>
        <!-- Portfolio section end -->

        <!-- Faq section start -->
        <section class="lg:pb-15 pb-10">
            <div class="container">
                <div class="grid lg:grid-cols-2 grid-cols-1 items-center gap-7.5">
                    <div class="max-w-[528px] lg:max-w-full mx-auto">
                        <img src="assets/images/age/magnifying-glass-student.png" alt="child with laptop" />
                    </div>
                    <div>
                        <div class="lg:max-w-[520px] pb-10">
                            <p class="text-secondary-foreground font-bubblegum-sans text-[19px] wow fadeInUp">The Education</p>
                            <h2 class="font-bold lg:text-[32px] md:text-[28px] text-2xl lg:leading-[130%] md:leading-[120%] leading-[110%] wow fadeInUp" data-wow-delay=".3s">Why your Child Require Montessori Education?</h2>
                        </div>
                        <!-- according start -->
                        <div class="rounded-md border-2 border-[#F2F2F2] lg:pl-7.5 pl-5 pr-5 py-[15px] according-item active-accor" data-open="true">
                            <div class="flex justify-between items-center cursor-pointer according-btn">
                                <!-- <h4 class="font-bold lg:text-xl text-[17px] lg:leading-[130%] leading-[120%]">The Montessori Method of Education</h4> -->
                                <div class="pt-5">
                                    <p>It is a learning method and philosophy that speaks to the whole child. And we adults realize that we humans are whole beings who must address our physical, intellectual and emotional needs to find that perfect balance which enables us to be caring, happy individuals with a repertoire of success.</p>
                                    <p>Montessori creates such an environment where children learn that independence, kindness, patience, responsibility, peaceful conflict resolution, and social responsibility are an integral part of their everyday lives. They understand that they are expected to uphold these values just as their peers and adults do.</p>
                                    <p>The multi-age group community provides them with the opportunity to learn and get support from older children and in turn, become the leaders of the environment after the years spent in the same. 2-6 years are the formative period of the development of the child which is very important as the child utilizes for the rest of the life. It is important that children will act as they see and not as they are told. Therefore, the Montessori environment is actually referred to as a “Directress,” as the primary role they play is to lead and direct the children towards their right learning, social and emotional path. They are the role models for the children as they hear and respect each child’s individuality and needs.</p>
                                </div>
                            </div>
                        </div>
                        <!-- according end -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Faq section end -->

        <!-- Testimonial section start -->
        <!-- <section class="lg:pt-15 lg:pb-15 pt-10 pb-10 testimonial">
            <div class="container">
                <div class="flex lg:flex-row flex-col justify-between lg:items-center gap-4 lg:pb-15 pb-10">
                    <div class="lg:max-w-[410px]">
                        <p class="text-secondary-foreground font-bubblegum-sans text-[19px] wow fadeInUp">Clients Testimonial</p>
                        <h2 class="font-bold lg:text-[32px] md:text-[28px] text-2xl lg:leading-[130%] md:leading-[120%] leading-[110%] wow fadeInUp" data-wow-delay=".3s">Unlocking the Power of Wonderworks Child</h2>
                    </div>
                    <p class="lg:max-w-[410px]">Use receiving accounts a number a currencies and get paid like a local Use receivin accounts a number paid the most beautiful think</p>
                </div>
                <div
                    class="relative w-full h-full after:absolute after:left-0 after:top-0 after:lg:max-w-[calc(100%-410px)] after:md:max-w-[calc(100%-310px)] after:max-w-[calc(100%-100px)] after:w-full after:h-full after:bg-testimonial-banner after:bg-cover after:bg-no-repeat after:z-[-1]"
                >
                    <div class="py-10">
                        <div class="swiper testimonial-swiper max-w-[630px] w-full ml-auto mr-0">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="lg:p-10 sm:p-8 py-8 sm:py-0 sm:-mr-10">
                                        <div class="bg-background border border-[#F2F2F2] lg:p-15 md:p-5 p-3 max-w-[630px] w-full rounded-[10px] ml-auto shadow-[0px_0px_60px_0px_rgba(0,0,0,0.05)]">
                                            <div class="flex justify-between items-center relative z-10 lg:pb-7.5 pb-5">
                                                <div class="flex items-center gap-5">
                                                    <img src="assets/images/testimonial/user-1.png" alt="bg-img" />
                                                    <div>
                                                        <h5 class="md:text-2xl text-xl font-semibold md:leading-[140%]">Shakib Al Hasan</h5>
                                                        <p>Marketing Manager</p>
                                                    </div>
                                                </div>
                                                <div class="absolute right-0 z-[-1]">
                                                    <img src="assets/images/testimonial/quotation.png" alt="quotation" class="lg:w-auto w-9" />
                                                </div>
                                            </div>
                                            <p>Their product exceeded his my routi expectations. The the quality and attention to detail a the a most outstanding and it has become an essential most a education the man who can do</p>
                                            <ul class="flex items-center gap-1 lg:pt-10 pt-5">
                                                <li><i class="fa-solid fa-star text-primary-foreground text-xl"></i></li>
                                                <li><i class="fa-solid fa-star text-primary-foreground text-xl"></i></li>
                                                <li><i class="fa-solid fa-star text-primary-foreground text-xl"></i></li>
                                                <li><i class="fa-solid fa-star text-primary-foreground text-xl"></i></li>
                                                <li><i class="fa-regular fa-star text-muted-foreground opacity-30 text-xl"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="lg:p-10 sm:p-8 py-8 sm:py-0 sm:-mr-10">
                                        <div class="bg-background border border-[#F2F2F2] lg:p-15 md:p-5 p-3 max-w-[630px] w-full rounded-[10px] ml-auto shadow-[0px_0px_60px_0px_rgba(0,0,0,0.05)]">
                                            <div class="flex justify-between items-center relative z-10 lg:pb-7.5 pb-5">
                                                <div class="flex items-center gap-5">
                                                    <img src="assets/images/testimonial/user-1.png" alt="bg-img" />
                                                    <div>
                                                        <h5 class="md:text-2xl text-xl font-semibold md:leading-[140%]">Shakib Al Hasan</h5>
                                                        <p>Marketing Manager</p>
                                                    </div>
                                                </div>
                                                <div class="absolute right-0 z-[-1]">
                                                    <img src="assets/images/testimonial/quotation.png" alt="quotation" class="lg:w-auto w-9" />
                                                </div>
                                            </div>
                                            <p>Their product exceeded his my routi expectations. The the quality and attention to detail a the a most outstanding and it has become an essential most a education the man who can do</p>
                                            <ul class="flex items-center gap-1 lg:pt-10 pt-5">
                                                <li><i class="fa-solid fa-star text-primary-foreground text-xl"></i></li>
                                                <li><i class="fa-solid fa-star text-primary-foreground text-xl"></i></li>
                                                <li><i class="fa-solid fa-star text-primary-foreground text-xl"></i></li>
                                                <li><i class="fa-solid fa-star text-primary-foreground text-xl"></i></li>
                                                <li><i class="fa-regular fa-star text-muted-foreground opacity-30 text-xl"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="lg:p-10 sm:p-8 py-8 sm:py-0 sm:-mr-10">
                                        <div class="bg-background border border-[#F2F2F2] lg:p-15 md:p-5 p-3 max-w-[630px] w-full rounded-[10px] ml-auto shadow-[0px_0px_60px_0px_rgba(0,0,0,0.05)]">
                                            <div class="flex justify-between items-center relative z-10 lg:pb-7.5 pb-5">
                                                <div class="flex items-center gap-5">
                                                    <img src="assets/images/testimonial/user-1.png" alt="bg-img" />
                                                    <div>
                                                        <h5 class="md:text-2xl text-xl font-semibold md:leading-[140%]">Shakib Al Hasan</h5>
                                                        <p>Marketing Manager</p>
                                                    </div>
                                                </div>
                                                <div class="absolute right-0 z-[-1]">
                                                    <img src="assets/images/testimonial/quotation.png" alt="quotation" class="lg:w-auto w-9" />
                                                </div>
                                            </div>
                                            <p>Their product exceeded his my routi expectations. The the quality and attention to detail a the a most outstanding and it has become an essential most a education the man who can do</p>
                                            <ul class="flex items-center gap-1 lg:pt-10 pt-5">
                                                <li><i class="fa-solid fa-star text-primary-foreground text-xl"></i></li>
                                                <li><i class="fa-solid fa-star text-primary-foreground text-xl"></i></li>
                                                <li><i class="fa-solid fa-star text-primary-foreground text-xl"></i></li>
                                                <li><i class="fa-solid fa-star text-primary-foreground text-xl"></i></li>
                                                <li><i class="fa-regular fa-star text-muted-foreground opacity-30 text-xl"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-pagination"></div>
                </div>
            </div>
        </section> -->
        <!-- Testimonial section end -->

        <?php include "temp/footer.php" ?>
    </body>
</html>