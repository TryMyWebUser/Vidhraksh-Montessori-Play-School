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
                            <h2 class="xl:text-[70px] lg:text-6xl md:text-5xl text-4xl font-bold leading-[117%]">Portfolio</h2>
                            <ul class="lg:pt-5 pt-3 flex items-center lg:gap-5 gap-2">
                                <li><a href="#" class="lg:text-[28px] text-xl font-bold">Home</a></li>
                                <li><i class="fa-solid fa-angle-right"></i></li>
                                <li><a href="#" class="lg:text-[28px] text-xl font-bold">Portfolio</a></li>
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

        <!-- Portfolio section start -->
        <section class="lg:pt-15 lg:pb-15 pt-10 pb-10">
            <div class="container">
                <div class="text-center flex flex-col items-center">
                    <p class="text-secondary-foreground font-bubblegum-sans text-[19px] wow fadeInUp">Latest Portfolio</p>
                    <h2 class="font-bold lg:text-[32px] md:text-[28px] text-2xl lg:leading-[130%] md:leading-[120%] leading-[110%] lg:max-w-[630px] wow fadeInUp" data-wow-delay=".3s">
                        Exploring Minds Elementary School Education the only school
                    </h2>
                </div>
                <div class="pt-10">
                    <ul class="flex items-center justify-center flex-wrap md:gap-7.5 gap-5">
                        <li
                            class="px-5 py-2.5 text-xl font-700 text-cream-foreground bg-primary border border-[#F2F2F2] rounded-[10px] font-jost cursor-pointer hover:bg-primary hover:text-cream-foreground transition-all duration-500 target-item"
                            data-target="education"
                        >
                            Education
                        </li>
                        <li class="px-5 py-2.5 text-xl font-700 text-[#686868] border border-[#F2F2F2] rounded-[10px] cursor-pointer hover:bg-primary hover:text-cream-foreground transition-all duration-500 target-item" data-target="school">
                            School
                        </li>
                        <li class="px-5 py-2.5 text-xl font-700 text-[#686868] border border-[#F2F2F2] rounded-[10px] cursor-pointer hover:bg-primary hover:text-cream-foreground transition-all duration-500 target-item" data-target="learn">
                            Learn
                        </li>
                        <li class="px-5 py-2.5 text-xl font-700 text-[#686868] border border-[#F2F2F2] rounded-[10px] cursor-pointer hover:bg-primary hover:text-cream-foreground transition-all duration-500 target-item" data-target="child">
                            Child
                        </li>
                        <li
                            class="px-5 py-2.5 text-xl font-700 text-[#686868] border border-[#F2F2F2] rounded-[10px] cursor-pointer hover:bg-primary hover:text-cream-foreground transition-all duration-500 target-item"
                            data-target="coaching"
                        >
                            Coaching
                        </li>
                    </ul>
                    <div class="mt-[64px] overflow-hidden relative wow fadeInUp" data-wow-delay=".3s">
                        <!-- group one -->
                        <div data-target="education" class="grid lg:gap-7.5 gap-4 grid-cols-12 grid-rows-[277px] relative top-0 left-0 transition-all duration-500 translate-y-0 target-card">
                            <!-- card start -->
                            <div class="sm:col-start-1 md:col-end-5 sm:col-end-7 col-span-full sm:row-span-2 relative group/card">
                                <img src="assets/images/portfolio/portfolio-1.png" alt="img" class="w-full h-full max-h-[300px] sm:max-h-full object-cover rounded-[10px]" />
                                <div
                                    class="px-7.5 absolute top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2 h-[calc(100%-60px)] w-[calc(100%-60px)] opacity-0 invisible group-hover/card:visible group-hover/card:opacity-80 transition-all duration-500 bg-primary rounded-[10px] flex flex-col items-center justify-center"
                                >
                                    <h5 class="text-center"><a href="#" class="text-cream-foreground text-2xl font-medium">Exploring Minds Elementary Best School</a></h5>
                                    <p class="text-cream-foreground">Dreamland Elementary</p>
                                    <a href="#" class="bg-background w-11 h-11 rounded-full flex justify-center items-center cursor-pointer absolute -bottom-5 left-1/2 -translate-x-1/2 overflow-hidden group">
                                        <span class="group-hover:ml-20 transition-all duration-500"><i class="fa-solid fa-arrow-right text-primary-foreground"></i></span>
                                    </a>
                                </div>
                            </div>
                            <!-- card end -->
                            <!-- card start -->
                            <div class="md:col-start-5 md:col-end-10 sm:col-start-7 sm:col-end-13 col-span-full relative group/card">
                                <img src="assets/images/portfolio/portfolio-2.png" alt="img" class="w-full h-full max-h-[300px] sm:max-h-full object-cover rounded-[10px]" />
                                <div
                                    class="px-7.5 absolute top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2 h-[calc(100%-60px)] w-[calc(100%-60px)] opacity-0 invisible group-hover/card:visible group-hover/card:opacity-80 transition-all duration-500 bg-primary rounded-[10px] flex flex-col items-center justify-center"
                                >
                                    <h5 class="text-center"><a href="#" class="text-cream-foreground text-2xl font-medium">Exploring Minds Elementary Best School</a></h5>
                                    <p class="text-cream-foreground">Dreamland Elementary</p>
                                    <a href="#" class="bg-background w-11 h-11 rounded-full flex justify-center items-center cursor-pointer absolute -bottom-5 left-1/2 -translate-x-1/2 overflow-hidden group">
                                        <span class="group-hover:ml-20 transition-all duration-500"><i class="fa-solid fa-arrow-right text-primary-foreground"></i></span>
                                    </a>
                                </div>
                            </div>
                            <!-- card end -->
                            <!-- card start -->
                            <div class="md:col-start-10 sm:col-start-7 sm:col-end-13 col-span-full relative group/card">
                                <img src="assets/images/portfolio/portfolio-3.png" alt="img" class="w-full h-full max-h-[300px] sm:max-h-full object-cover rounded-[10px]" />
                                <div
                                    class="px-7.5 absolute top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2 h-[calc(100%-60px)] w-[calc(100%-60px)] opacity-0 invisible group-hover/card:visible group-hover/card:opacity-80 transition-all duration-500 bg-primary rounded-[10px] flex flex-col items-center justify-center"
                                >
                                    <h5 class="text-center"><a href="#" class="text-cream-foreground text-2xl font-medium">Exploring Minds Elementary Best School</a></h5>
                                    <p class="text-cream-foreground">Dreamland Elementary</p>
                                    <a href="#" class="bg-background w-11 h-11 rounded-full flex justify-center items-center cursor-pointer absolute -bottom-5 left-1/2 -translate-x-1/2 overflow-hidden group">
                                        <span class="group-hover:ml-20 transition-all duration-500"><i class="fa-solid fa-arrow-right text-primary-foreground"></i></span>
                                    </a>
                                </div>
                            </div>
                            <!-- card end -->
                            <!-- card start -->
                            <div class="md:col-start-5 md:col-end-9 sm:col-start-1 sm:col-end-7 col-span-full relative group/card">
                                <img src="assets/images/portfolio/portfolio-5.png" alt="img" class="w-full h-full max-h-[300px] sm:max-h-full object-cover rounded-[10px]" />
                                <div
                                    class="px-7.5 absolute top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2 h-[calc(100%-60px)] w-[calc(100%-60px)] opacity-0 invisible group-hover/card:visible group-hover/card:opacity-80 transition-all duration-500 bg-primary rounded-[10px] flex flex-col items-center justify-center"
                                >
                                    <h5 class="text-center"><a href="#" class="text-cream-foreground text-2xl font-medium">Exploring Minds Elementary Best School</a></h5>
                                    <p class="text-cream-foreground">Dreamland Elementary</p>
                                    <a href="#" class="bg-background w-11 h-11 rounded-full flex justify-center items-center cursor-pointer absolute -bottom-5 left-1/2 -translate-x-1/2 overflow-hidden group">
                                        <span class="group-hover:ml-20 transition-all duration-500"><i class="fa-solid fa-arrow-right text-primary-foreground"></i></span>
                                    </a>
                                </div>
                            </div>
                            <!-- card end -->
                            <!-- card start -->
                            <div class="md:col-start-9 sm:col-span-6 sm:col-end-13 col-span-full relative group/card">
                                <img src="assets/images/portfolio/portfolio-6.png" alt="img" class="w-full h-full max-h-[300px] sm:max-h-full object-cover rounded-[10px]" />
                                <div
                                    class="px-7.5 absolute top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2 h-[calc(100%-60px)] w-[calc(100%-60px)] opacity-0 invisible group-hover/card:visible group-hover/card:opacity-80 transition-all duration-500 bg-primary rounded-[10px] flex flex-col items-center justify-center"
                                >
                                    <h5 class="text-center"><a href="#" class="text-cream-foreground text-2xl font-medium">Exploring Minds Elementary Best School</a></h5>
                                    <p class="text-cream-foreground">Dreamland Elementary</p>
                                    <a href="#" class="bg-background w-11 h-11 rounded-full flex justify-center items-center cursor-pointer absolute -bottom-5 left-1/2 -translate-x-1/2 overflow-hidden group">
                                        <span class="group-hover:ml-20 transition-all duration-500"><i class="fa-solid fa-arrow-right text-primary-foreground"></i></span>
                                    </a>
                                </div>
                            </div>
                            <!-- card end -->
                        </div>
                        <!-- group one -->
                        <!-- group two -->
                        <div data-target="school" class="grid lg:gap-7.5 gap-4 grid-cols-12 sm:grid-rows-[453px] absolute top-0 left-0 transition-all duration-500 translate-y-10 invisible opacity-0 target-card">
                            <!-- card start -->
                            <div class="sm:col-start-1 sm:col-end-8 col-span-full relative group/card max-h-[453px]">
                                <img src="assets/images/portfolio/portfolio-1.png" alt="img" class="w-full h-full max-h-[300px] sm:max-h-full object-cover rounded-[10px]" />
                                <div
                                    class="px-7.5 absolute top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2 h-[calc(100%-60px)] w-[calc(100%-60px)] opacity-0 invisible group-hover/card:visible group-hover/card:opacity-80 transition-all duration-500 bg-primary rounded-[10px] flex flex-col items-center justify-center"
                                >
                                    <h5 class="text-center"><a href="#" class="text-cream-foreground text-2xl font-medium">Exploring Minds Elementary Best School</a></h5>
                                    <p class="text-cream-foreground">Dreamland Elementary</p>
                                    <a href="#" class="bg-background w-11 h-11 rounded-full flex justify-center items-center cursor-pointer absolute -bottom-5 left-1/2 -translate-x-1/2 overflow-hidden group">
                                        <span class="group-hover:ml-20 transition-all duration-500"><i class="fa-solid fa-arrow-right text-primary-foreground"></i></span>
                                    </a>
                                </div>
                            </div>
                            <!-- card end -->
                            <!-- card start -->
                            <div class="sm:col-start-8 sm:col-end-13 col-span-full relative group/card max-h-[453px]">
                                <img src="assets/images/portfolio/portfolio-2.png" alt="img" class="w-full h-full max-h-[300px] sm:max-h-full object-cover rounded-[10px]" />
                                <div
                                    class="px-7.5 absolute top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2 h-[calc(100%-60px)] w-[calc(100%-60px)] opacity-0 invisible group-hover/card:visible group-hover/card:opacity-80 transition-all duration-500 bg-primary rounded-[10px] flex flex-col items-center justify-center"
                                >
                                    <h5 class="text-center"><a href="#" class="text-cream-foreground text-2xl font-medium">Exploring Minds Elementary Best School</a></h5>
                                    <p class="text-cream-foreground">Dreamland Elementary</p>
                                    <a href="#" class="bg-background w-11 h-11 rounded-full flex justify-center items-center cursor-pointer absolute -bottom-5 left-1/2 -translate-x-1/2 overflow-hidden group">
                                        <span class="group-hover:ml-20 transition-all duration-500"><i class="fa-solid fa-arrow-right text-primary-foreground"></i></span>
                                    </a>
                                </div>
                            </div>
                            <!-- card end -->
                            <!-- card start -->
                            <div class="sm:col-start-1 sm:col-end-7 col-span-full relative group/card max-h-[453px]">
                                <img src="assets/images/portfolio/portfolio-3.png" alt="img" class="w-full h-full max-h-[300px] sm:max-h-full object-cover rounded-[10px]" />
                                <div
                                    class="px-7.5 absolute top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2 h-[calc(100%-60px)] w-[calc(100%-60px)] opacity-0 invisible group-hover/card:visible group-hover/card:opacity-80 transition-all duration-500 bg-primary rounded-[10px] flex flex-col items-center justify-center"
                                >
                                    <h5 class="text-center"><a href="#" class="text-cream-foreground text-2xl font-medium">Exploring Minds Elementary Best School</a></h5>
                                    <p class="text-cream-foreground">Dreamland Elementary</p>
                                    <a href="#" class="bg-background w-11 h-11 rounded-full flex justify-center items-center cursor-pointer absolute -bottom-5 left-1/2 -translate-x-1/2 overflow-hidden group">
                                        <span class="group-hover:ml-20 transition-all duration-500"><i class="fa-solid fa-arrow-right text-primary-foreground"></i></span>
                                    </a>
                                </div>
                            </div>
                            <!-- card end -->
                            <!-- card start -->
                            <div class="sm:col-start-7 sm:col-end-13 col-span-full relative group/card max-h-[453px]">
                                <img src="assets/images/portfolio/portfolio-5.png" alt="img" class="w-full h-full max-h-[300px] sm:max-h-full object-cover rounded-[10px]" />
                                <div
                                    class="px-7.5 absolute top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2 h-[calc(100%-60px)] w-[calc(100%-60px)] opacity-0 invisible group-hover/card:visible group-hover/card:opacity-80 transition-all duration-500 bg-primary rounded-[10px] flex flex-col items-center justify-center"
                                >
                                    <h5 class="text-center"><a href="#" class="text-cream-foreground text-2xl font-medium">Exploring Minds Elementary Best School</a></h5>
                                    <p class="text-cream-foreground">Dreamland Elementary</p>
                                    <a href="#" class="bg-background w-11 h-11 rounded-full flex justify-center items-center cursor-pointer absolute -bottom-5 left-1/2 -translate-x-1/2 overflow-hidden group">
                                        <span class="group-hover:ml-20 transition-all duration-500"><i class="fa-solid fa-arrow-right text-primary-foreground"></i></span>
                                    </a>
                                </div>
                            </div>
                            <!-- card end -->
                        </div>
                        <!-- group two -->
                        <!-- group three -->
                        <div data-target="learn" class="grid lg:gap-7.5 gap-4 grid-cols-12 sm:grid-rows-[453px] absolute top-0 left-0 transition-all duration-500 translate-y-10 invisible opacity-0 target-card">
                            <!-- card start -->
                            <div class="sm:col-start-1 sm:col-end-7 col-span-full relative group/card max-h-[453px]">
                                <img src="assets/images/portfolio/portfolio-3.png" alt="img" class="w-full h-full max-h-[300px] sm:max-h-full object-cover rounded-[10px]" />
                                <div
                                    class="px-7.5 absolute top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2 h-[calc(100%-60px)] w-[calc(100%-60px)] opacity-0 invisible group-hover/card:visible group-hover/card:opacity-80 transition-all duration-500 bg-primary rounded-[10px] flex flex-col items-center justify-center"
                                >
                                    <h5 class="text-center"><a href="#" class="text-cream-foreground text-2xl font-medium">Exploring Minds Elementary Best School</a></h5>
                                    <p class="text-cream-foreground">Dreamland Elementary</p>
                                    <a href="#" class="bg-background w-11 h-11 rounded-full flex justify-center items-center cursor-pointer absolute -bottom-5 left-1/2 -translate-x-1/2 overflow-hidden group">
                                        <span class="group-hover:ml-20 transition-all duration-500"><i class="fa-solid fa-arrow-right text-primary-foreground"></i></span>
                                    </a>
                                </div>
                            </div>
                            <!-- card end -->
                            <!-- card start -->
                            <div class="sm:col-start-7 sm:col-end-13 col-span-full relative group/card max-h-[453px]">
                                <img src="assets/images/portfolio/portfolio-5.png" alt="img" class="w-full h-full max-h-[300px] sm:max-h-full object-cover rounded-[10px]" />
                                <div
                                    class="px-7.5 absolute top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2 h-[calc(100%-60px)] w-[calc(100%-60px)] opacity-0 invisible group-hover/card:visible group-hover/card:opacity-80 transition-all duration-500 bg-primary rounded-[10px] flex flex-col items-center justify-center"
                                >
                                    <h5 class="text-center"><a href="#" class="text-cream-foreground text-2xl font-medium">Exploring Minds Elementary Best School</a></h5>
                                    <p class="text-cream-foreground">Dreamland Elementary</p>
                                    <a href="#" class="bg-background w-11 h-11 rounded-full flex justify-center items-center cursor-pointer absolute -bottom-5 left-1/2 -translate-x-1/2 overflow-hidden group">
                                        <span class="group-hover:ml-20 transition-all duration-500"><i class="fa-solid fa-arrow-right text-primary-foreground"></i></span>
                                    </a>
                                </div>
                            </div>
                            <!-- card end -->
                        </div>
                        <!-- group three -->
                        <!-- group four -->
                        <div data-target="child" class="grid lg:gap-7.5 gap-4 grid-cols-12 sm:grid-rows-[453px] absolute top-0 left-0 transition-all duration-500 translate-y-10 invisible opacity-0 target-card">
                            <!-- card start -->
                            <div class="sm:col-start-1 sm:col-end-8 col-span-full relative group/card max-h-[453px]">
                                <img src="assets/images/portfolio/portfolio-1.png" alt="img" class="w-full h-full max-h-[300px] sm:max-h-full object-cover rounded-[10px]" />
                                <div
                                    class="px-7.5 absolute top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2 h-[calc(100%-60px)] w-[calc(100%-60px)] opacity-0 invisible group-hover/card:visible group-hover/card:opacity-80 transition-all duration-500 bg-primary rounded-[10px] flex flex-col items-center justify-center"
                                >
                                    <h5 class="text-center"><a href="#" class="text-cream-foreground text-2xl font-medium">Exploring Minds Elementary Best School</a></h5>
                                    <p class="text-cream-foreground">Dreamland Elementary</p>
                                    <a href="#" class="bg-background w-11 h-11 rounded-full flex justify-center items-center cursor-pointer absolute -bottom-5 left-1/2 -translate-x-1/2 overflow-hidden group">
                                        <span class="group-hover:ml-20 transition-all duration-500"><i class="fa-solid fa-arrow-right text-primary-foreground"></i></span>
                                    </a>
                                </div>
                            </div>
                            <!-- card end -->
                            <!-- card start -->
                            <div class="sm:col-start-8 sm:col-end-13 col-span-full relative group/card max-h-[453px]">
                                <img src="assets/images/portfolio/portfolio-2.png" alt="img" class="w-full h-full max-h-[300px] sm:max-h-full object-cover rounded-[10px]" />
                                <div
                                    class="px-7.5 absolute top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2 h-[calc(100%-60px)] w-[calc(100%-60px)] opacity-0 invisible group-hover/card:visible group-hover/card:opacity-80 transition-all duration-500 bg-primary rounded-[10px] flex flex-col items-center justify-center"
                                >
                                    <h5 class="text-center"><a href="#" class="text-cream-foreground text-2xl font-medium">Exploring Minds Elementary Best School</a></h5>
                                    <p class="text-cream-foreground">Dreamland Elementary</p>
                                    <a href="#" class="bg-background w-11 h-11 rounded-full flex justify-center items-center cursor-pointer absolute -bottom-5 left-1/2 -translate-x-1/2 overflow-hidden group">
                                        <span class="group-hover:ml-20 transition-all duration-500"><i class="fa-solid fa-arrow-right text-primary-foreground"></i></span>
                                    </a>
                                </div>
                            </div>
                            <!-- card end -->
                        </div>
                        <!-- group four -->
                        <!-- group five -->
                        <div data-target="coaching" class="grid lg:gap-7.5 gap-4 grid-cols-12 grid-rows-[277px] absolute top-0 left-0 transition-all duration-500 translate-y-10 invisible opacity-0 target-card">
                            <!-- card start -->
                            <div class="sm:col-start-1 md:col-end-5 sm:col-end-7 col-span-full sm:row-span-2 relative group/card">
                                <img src="assets/images/portfolio/portfolio-1.png" alt="img" class="w-full h-full max-h-[300px] sm:max-h-full object-cover rounded-[10px]" />
                                <div
                                    class="px-7.5 absolute top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2 h-[calc(100%-60px)] w-[calc(100%-60px)] opacity-0 invisible group-hover/card:visible group-hover/card:opacity-80 transition-all duration-500 bg-primary rounded-[10px] flex flex-col items-center justify-center"
                                >
                                    <h5 class="text-center"><a href="#" class="text-cream-foreground text-2xl font-medium">Exploring Minds Elementary Best School</a></h5>
                                    <p class="text-cream-foreground">Dreamland Elementary</p>
                                    <a href="#" class="bg-background w-11 h-11 rounded-full flex justify-center items-center cursor-pointer absolute -bottom-5 left-1/2 -translate-x-1/2 overflow-hidden group">
                                        <span class="group-hover:ml-20 transition-all duration-500"><i class="fa-solid fa-arrow-right text-primary-foreground"></i></span>
                                    </a>
                                </div>
                            </div>
                            <!-- card end -->
                            <!-- card start -->
                            <div class="md:col-start-5 md:col-end-10 sm:col-start-7 sm:col-end-13 col-span-full relative group/card">
                                <img src="assets/images/portfolio/portfolio-2.png" alt="img" class="w-full h-full max-h-[300px] sm:max-h-full object-cover rounded-[10px]" />
                                <div
                                    class="px-7.5 absolute top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2 h-[calc(100%-60px)] w-[calc(100%-60px)] opacity-0 invisible group-hover/card:visible group-hover/card:opacity-80 transition-all duration-500 bg-primary rounded-[10px] flex flex-col items-center justify-center"
                                >
                                    <h5 class="text-center"><a href="#" class="text-cream-foreground text-2xl font-medium">Exploring Minds Elementary Best School</a></h5>
                                    <p class="text-cream-foreground">Dreamland Elementary</p>
                                    <a href="#" class="bg-background w-11 h-11 rounded-full flex justify-center items-center cursor-pointer absolute -bottom-5 left-1/2 -translate-x-1/2 overflow-hidden group">
                                        <span class="group-hover:ml-20 transition-all duration-500"><i class="fa-solid fa-arrow-right text-primary-foreground"></i></span>
                                    </a>
                                </div>
                            </div>
                            <!-- card end -->
                            <!-- card start -->
                            <div class="md:col-start-10 sm:col-start-7 sm:col-end-13 col-span-full relative group/card">
                                <img src="assets/images/portfolio/portfolio-3.png" alt="img" class="w-full h-full max-h-[300px] sm:max-h-full object-cover rounded-[10px]" />
                                <div
                                    class="px-7.5 absolute top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2 h-[calc(100%-60px)] w-[calc(100%-60px)] opacity-0 invisible group-hover/card:visible group-hover/card:opacity-80 transition-all duration-500 bg-primary rounded-[10px] flex flex-col items-center justify-center"
                                >
                                    <h5 class="text-center"><a href="#" class="text-cream-foreground text-2xl font-medium">Exploring Minds Elementary Best School</a></h5>
                                    <p class="text-cream-foreground">Dreamland Elementary</p>
                                    <a href="#" class="bg-background w-11 h-11 rounded-full flex justify-center items-center cursor-pointer absolute -bottom-5 left-1/2 -translate-x-1/2 overflow-hidden group">
                                        <span class="group-hover:ml-20 transition-all duration-500"><i class="fa-solid fa-arrow-right text-primary-foreground"></i></span>
                                    </a>
                                </div>
                            </div>
                            <!-- card end -->
                            <!-- card start -->
                            <div class="md:col-start-5 md:col-end-9 sm:col-start-1 sm:col-end-7 col-span-full relative group/card">
                                <img src="assets/images/portfolio/portfolio-5.png" alt="img" class="w-full h-full max-h-[300px] sm:max-h-full object-cover rounded-[10px]" />
                                <div
                                    class="px-7.5 absolute top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2 h-[calc(100%-60px)] w-[calc(100%-60px)] opacity-0 invisible group-hover/card:visible group-hover/card:opacity-80 transition-all duration-500 bg-primary rounded-[10px] flex flex-col items-center justify-center"
                                >
                                    <h5 class="text-center"><a href="#" class="text-cream-foreground text-2xl font-medium">Exploring Minds Elementary Best School</a></h5>
                                    <p class="text-cream-foreground">Dreamland Elementary</p>
                                    <a href="#" class="bg-background w-11 h-11 rounded-full flex justify-center items-center cursor-pointer absolute -bottom-5 left-1/2 -translate-x-1/2 overflow-hidden group">
                                        <span class="group-hover:ml-20 transition-all duration-500"><i class="fa-solid fa-arrow-right text-primary-foreground"></i></span>
                                    </a>
                                </div>
                            </div>
                            <!-- card end -->
                            <!-- card start -->
                            <div class="md:col-start-9 sm:col-span-6 sm:col-end-13 col-span-full relative group/card">
                                <img src="assets/images/portfolio/portfolio-6.png" alt="img" class="w-full h-full max-h-[300px] sm:max-h-full object-cover rounded-[10px]" />
                                <div
                                    class="px-7.5 absolute top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2 h-[calc(100%-60px)] w-[calc(100%-60px)] opacity-0 invisible group-hover/card:visible group-hover/card:opacity-80 transition-all duration-500 bg-primary rounded-[10px] flex flex-col items-center justify-center"
                                >
                                    <h5 class="text-center"><a href="#" class="text-cream-foreground text-2xl font-medium">Exploring Minds Elementary Best School</a></h5>
                                    <p class="text-cream-foreground">Dreamland Elementary</p>
                                    <a href="#" class="bg-background w-11 h-11 rounded-full flex justify-center items-center cursor-pointer absolute -bottom-5 left-1/2 -translate-x-1/2 overflow-hidden group">
                                        <span class="group-hover:ml-20 transition-all duration-500"><i class="fa-solid fa-arrow-right text-primary-foreground"></i></span>
                                    </a>
                                </div>
                            </div>
                            <!-- card end -->
                        </div>
                        <!-- group five -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio section end -->

        <!-- newsletter section start -->
        <section class="bg-[linear-gradient(180deg,_rgba(238,255,200,0.00)_0%,_#E9FFB6_100%)] lg:mt-15 mt-10 overflow-x-hidden">
            <div class="bg-bottom bg-no-repeat bg-contain bg-newsletter-banner">
                <div class="container">
                    <div class="flex lg:flex-row flex-col lg:items-center justify-between gap-7.5">
                        <div class="max-w-[598px] w-full order-1 lg:order-0">
                            <div class="bg-[url('/assets/images/shapes/egg-shap.png')] bg-no-repeat bg-bottom bg-contain">
                                <img src="assets/images/newsletter/student.png" alt="student-img" class="mx-auto" />
                            </div>
                        </div>
                        <div class="lg:max-w-[530px] order-0 lg:order-1">
                            <p class="font-bubblegum-sans text-[19px] text-muted-foreground wow fadeInUp">Get Connected</p>
                            <h2 class="font-bold lg:text-[32px] md:text-[28px] text-2xl lg:leading-[130%] md:leading-[120%] leading-[110%] wow fadeInUp" data-wow-delay=".3s">Education That Sparks Imaginat Nurturing Curiosity Inspire</h2>
                            <div class="relative lg:mt-10 mt-5">
                                <input type="text" placeholder="Enter Your Email" class="rounded-[10px] border border-black pl-6 lg:py-7 py-4 max-h-20 w-full outline-none" />
                                <button class="bg-primary text-cream-foreground rounded-[10px] absolute right-[10px] top-1/2 -translate-y-1/2 btn"><span>Submit</span> <i class="fa-solid fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- newsletter section end -->

        <?php include "temp/footer.php" ?>

    </body>

</html>