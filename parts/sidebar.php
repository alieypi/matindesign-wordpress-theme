<?php global $matindesign_redux; ?>

<aside class="sidebar border-r border-r-[#dedede] flex flex-col justify-between p-3 w-full lg:w-[250px] lg:h-full h-auto">
    <div>
        <div class="flex justify-center mt-8">
            <?php
            if (has_custom_logo()) {
                the_custom_logo();
            }
            ?>
        </div>
        <div class="flex justify-center mt-2">
            <img src="<?php echo get_theme_file_uri("assets/img/matindesign.png") ?>" alt="" />
        </div>
        <div class="flex justify-center mt-10">
            <ul id=sidebar-tabs class=" w-full flex flex-row lg:flex-col gap-x-8 w-full justify-center px-8 lg:divide-y divide-[#dedede]">
                <li>
                    <a id="home" href="<?php echo site_url() ?>" class="flex justify-center items-center px-[10px] lg:px-0 h-[40px] lg:h-[51px] text-[12px] lg:text-[14px] font-[CG] font-[600] rounded-[50px] [&.active]:bg-[--main] lg:[&.active]:bg-transparent lg:[&.active]:text-[--main] [&.active]:text-white text-[#999] lg:text-[#4d4d4d] hover:text-[--main] duration-200 tracking-[1px] lg:tracking-[3px]">
                        <span>ArtWorks</span>
                    </a>
                </li>
                <li>
                    <a id="about" href="<?php echo site_url() ?>/about" class="flex justify-center items-center px-[10px] lg:px-0 h-[40px] lg:h-[51px] text-[12px] lg:text-[14px] font-[CG] font-[600] rounded-[50px] [&.active]:bg-[--main] lg:[&.active]:bg-transparent lg:[&.active]:text-[--main] [&.active]:text-white text-[#999] lg:text-[#4d4d4d] hover:text-[--main] duration-200 tracking-[1px] lg:tracking-[3px]">
                        <span>About Me</span>
                    </a>
                </li>
                <li>
                    <a id="contact" href="<?php echo site_url() ?>/contact" class="flex justify-center items-center px-[10px] lg:px-0 h-[40px] lg:h-[51px] text-[12px] lg:text-[14px] font-[CG] font-[600] rounded-[50px] [&.active]:bg-[--main] lg:[&.active]:bg-transparent lg:[&.active]:text-[--main] [&.active]:text-white text-[#999] lg:text-[#4d4d4d] hover:text-[--main] duration-200 tracking-[1px] lg:tracking-[3px]">
                        <span>Contact</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="flex-col gap-y-[30px] mb-10 hidden lg:flex">
        <div class="w-full justify-center hidden lg:flex">
            <?php if ($matindesign_redux["sidebar-social-email"]) : ?>
                <a href="mailto:<?php echo $matindesign_redux["sidebar-social-email"] ?>" class="flex justify-center items-center mx-2 p-2 duration-300 rounded-[12px] bg-white border border-[#dedede] w-[34px] h-[34px] hover:scale-[0.9]">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="drop-shadow-[0_4px_8px_#ff7900]">
                        <path fill="#ff7900" d="m18.73 5.41l-1.28 1L12 10.46L6.55 6.37l-1.28-1A2 2 0 0 0 2 7.05v11.59A1.36 1.36 0 0 0 3.36 20h3.19v-7.72L12 16.37l5.45-4.09V20h3.19A1.36 1.36 0 0 0 22 18.64V7.05a2 2 0 0 0-3.27-1.64" />
                    </svg>
                </a>
            <?php endif; ?>
            <?php if ($matindesign_redux["sidebar-social-telegram"]) : ?>
                <a href="https://t.me/<?php echo $matindesign_redux["sidebar-social-telegram"] ?>" class="flex justify-center items-center mx-2 p-2 duration-300 rounded-[12px] bg-white border border-[#dedede] w-[34px] h-[34px] hover:scale-[0.9]">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="drop-shadow-[0_4px_8px_#ff7900]">
                        <path fill="#ff7900" d="m20.665 3.717l-17.73 6.837c-1.21.486-1.203 1.161-.222 1.462l4.552 1.42l10.532-6.645c.498-.303.953-.14.579.192l-8.533 7.701h-.002l.002.001l-.314 4.692c.46 0 .663-.211.921-.46l2.211-2.15l4.599 3.397c.848.467 1.457.227 1.668-.785l3.019-14.228c.309-1.239-.473-1.8-1.282-1.434" />
                    </svg>
                </a>
            <?php endif; ?>
            <?php if ($matindesign_redux["sidebar-social-instagram"]) : ?>
                <a href="https://www.instagram.com/<?php echo $matindesign_redux["sidebar-social-instagram"] ?>/" class="flex justify-center items-center mx-2 p-2 duration-300 rounded-[12px] bg-white border border-[#dedede] w-[34px] h-[34px] hover:scale-[0.9]">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="drop-shadow-[0_4px_8px_#ff7900]">
                        <path fill="#ff7900" d="M20.947 8.305a6.53 6.53 0 0 0-.419-2.216a4.61 4.61 0 0 0-2.633-2.633a6.606 6.606 0 0 0-2.186-.42c-.962-.043-1.267-.055-3.709-.055s-2.755 0-3.71.055a6.606 6.606 0 0 0-2.185.42a4.607 4.607 0 0 0-2.633 2.633a6.554 6.554 0 0 0-.419 2.185c-.043.963-.056 1.268-.056 3.71s0 2.754.056 3.71c.015.748.156 1.486.419 2.187a4.61 4.61 0 0 0 2.634 2.632a6.584 6.584 0 0 0 2.185.45c.963.043 1.268.056 3.71.056s2.755 0 3.71-.056a6.59 6.59 0 0 0 2.186-.419a4.615 4.615 0 0 0 2.633-2.633c.263-.7.404-1.438.419-2.187c.043-.962.056-1.267.056-3.71c-.002-2.442-.002-2.752-.058-3.709m-8.953 8.297c-2.554 0-4.623-2.069-4.623-4.623s2.069-4.623 4.623-4.623a4.623 4.623 0 0 1 0 9.246m4.807-8.339a1.077 1.077 0 0 1-1.078-1.078a1.077 1.077 0 1 1 2.155 0c0 .596-.482 1.078-1.077 1.078" />
                        <circle cx="11.994" cy="11.979" r="3.003" fill="#ff7900" />
                    </svg>
                </a>
            <?php endif; ?>
            <?php if ($matindesign_redux["sidebar-social-whatsapp"]) : ?>
                <a href="https://wa.me/<?php echo $matindesign_redux["sidebar-social-whatsapp"] ?>/" class="flex justify-center items-center mx-2 p-2 duration-300 rounded-[12px] bg-white border border-[#dedede] w-[34px] h-[34px] hover:scale-[0.9]">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path fill="#ff7900" fill-rule="evenodd" d="M18.403 5.633A8.919 8.919 0 0 0 12.053 3c-4.948 0-8.976 4.027-8.978 8.977c0 1.582.413 3.126 1.198 4.488L3 21.116l4.759-1.249a8.981 8.981 0 0 0 4.29 1.093h.004c4.947 0 8.975-4.027 8.977-8.977a8.926 8.926 0 0 0-2.627-6.35m-6.35 13.812h-.003a7.446 7.446 0 0 1-3.798-1.041l-.272-.162l-2.824.741l.753-2.753l-.177-.282a7.448 7.448 0 0 1-1.141-3.971c.002-4.114 3.349-7.461 7.465-7.461a7.413 7.413 0 0 1 5.275 2.188a7.42 7.42 0 0 1 2.183 5.279c-.002 4.114-3.349 7.462-7.461 7.462m4.093-5.589c-.225-.113-1.327-.655-1.533-.73c-.205-.075-.354-.112-.504.112s-.58.729-.711.879s-.262.168-.486.056s-.947-.349-1.804-1.113c-.667-.595-1.117-1.329-1.248-1.554s-.014-.346.099-.458c.101-.1.224-.262.336-.393c.112-.131.149-.224.224-.374s.038-.281-.019-.393c-.056-.113-.505-1.217-.692-1.666c-.181-.435-.366-.377-.504-.383a9.65 9.65 0 0 0-.429-.008a.826.826 0 0 0-.599.28c-.206.225-.785.767-.785 1.871s.804 2.171.916 2.321c.112.15 1.582 2.415 3.832 3.387c.536.231.954.369 1.279.473c.537.171 1.026.146 1.413.089c.431-.064 1.327-.542 1.514-1.066c.187-.524.187-.973.131-1.067c-.056-.094-.207-.151-.43-.263" clip-rule="evenodd" />
                    </svg>
                </a>
            <?php endif; ?>
        </div>
        <div class="flex justify-center items-center text-[--main] text-[12px] font-[CG]">
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24">
                <g fill="none" stroke="currentColor" stroke-width="1.5">
                    <path d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10s-4.477 10-10 10S2 17.523 2 12Z" />
                    <path stroke-linecap="round" d="M14 15.667a4.535 4.535 0 0 1-1.714.333C9.919 16 8 14.21 8 12s1.919-4 4.286-4c.61 0 1.189.119 1.714.333" />
                </g>
            </svg>
            <?php if ($matindesign_redux["sidebar-default-copyrights-check"]) : ?>
                <strong class="ms-2">All rights <?php echo date("Y") ?> reserved</strong>
            <?php else : ?>
                <strong class="ms-2"><?php echo $matindesign_redux["sidebar-copyrights-text"] ?></strong>
            <?php endif; ?>
        </div>
    </div>
</aside>