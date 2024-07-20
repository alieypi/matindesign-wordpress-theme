<?php get_header() ?>

<body>
    <?php global $matindesign_redux; ?>
    <div class="flex lg:flex-row flex-col h-auto lg:h-screen lg:overflow-hidden overflow-auto">
        <?php get_template_part("parts/sidebar") ?>
        <main class="pb-[100px] lg:w-[calc(100%-250px)] w-full flex flex-col pt-10 lg:px-24 px-8 h-full lg:overflow-y-scroll overflow-auto">
            <h2 class="lg:block hidden text-[2rem] font-[Saira] font-bold text-[#4d4d4d]"><?php the_title() ?></h2>
            <hr class="my-2 hidden lg:block" />
            <div class="flex lg:flex-row flex-col gap-2">
                <div class="lg:basis-5/12 basis-12">
                    <div class="rounded-[8px] overflow-hidden">
                        <img src="<?php echo $matindesign_redux["about-thumbnail-image"]["url"] ?>" />
                    </div>
                </div>
                <div class="basis-7/12">
                    <div class="h-full relative bg-[#f5f5f5] rounded-[8px] overflow-hidden">
                        <div class="lg:p-8 p-4">
                            <ul id="about-tabs" class="flex flex-row border-b border-[#dddddd]">
                                <?php if ($matindesign_redux["english-about-check"]) : ?>
                                    <li>
                                        <button id="en" class="[&.active]:text-[<?php echo $matindesign_redux["site-main-color"] ?>] text-[18px] px-[25px] py-[20px] text-[#737373] border-x border-t border-transparent [&.active]:border-[#ddd] [&.active]:bg-[#f5f5f5] translate-y-[1px] font-[CG] active" data-about-tabs="en">
                                            <span><?php echo $matindesign_redux["english-about-title"] ?></span>
                                        </button>
                                    </li>
                                <?php endif; ?>
                                <?php if ($matindesign_redux["persian-about-check"]) : ?>
                                    <li>
                                        <button id="fa" class="[&.active]:text-[<?php echo $matindesign_redux["site-main-color"] ?>] text-[18px] px-[25px] py-[20px] text-[#737373] border-x border-t border-transparent [&.active]:border-[#ddd] [&.active]:bg-[#f5f5f5] translate-y-[1px] font-[YekanBakh]" data-about-tabs="fa">
                                            <span><?php echo $matindesign_redux["persian-about-title"] ?></span>
                                        </button>
                                    </li>
                                <?php endif; ?>
                            </ul>
                            <div class="border-x border-b border-[#ddd] relative p-8">
                                <div id="about-en" class="[&.active]:block hidden active font-[CG]">
                                    <?php echo $matindesign_redux["english-about-content"] ?>
                                </div>
                                <div id="about-fa" class="[&.active]:block hidden">
                                    <?php echo $matindesign_redux["persian-about-content"] ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php if ($matindesign_redux["about-brands-check"] && count($matindesign_redux["about-collabs-gallery"]) > 0) : ?>
                <div class="mt-10 text-[<?php echo $matindesign_redux["site-main-color"] ?>]">
                    <span>Cooperation With Companies</span>
                </div>
                <hr class="my-2 hidden lg:block" />
                <div class="pt-[20px]">
                    <div class="swiper mySwiper w-full h-[100px]">
                        <div class="swiper-wrapper">
                            <?php foreach ($matindesign_redux["about-collabs-gallery"] as $collab_url) : ?>
                                <div class="swiper-slide">
                                    <img src="<?php echo $collab_url ?>" alt="md" />
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="swiper-button-next after:text-[20px] after:content-['next'] after:text-[#e4e4e4]"></div>
                        <div class="swiper-button-prev after:text-[20px] after:content-['prev'] after:text-[#e4e4e4]"></div>
                    </div>
                </div>
            <?php endif; ?>
        </main>
    </div>

    <?php get_footer() ?>