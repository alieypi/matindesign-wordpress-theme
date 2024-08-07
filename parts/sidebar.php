<?php global $matindesign_redux; ?>

<aside class="bg-[<?php echo $matindesign_redux["site-sidebar-color"] ?>] sidebar <?php if ($matindesign_redux["site-sidebar-border-check"]) echo 'border-r border-r-[#dedede]' ?> flex flex-col justify-between p-3 w-full lg:w-[250px] lg:h-full h-auto">
    <div>
        <div class="flex justify-center mt-8">
            <?php
            if (has_custom_logo()) {
                the_custom_logo();
            }
            ?>
        </div>
        <?php if ($matindesign_redux["sidebar-sublogo-upload"]) : ?>
            <div class="flex justify-center mt-2">
                <img src="<?php echo $matindesign_redux["sidebar-sublogo-upload"]["url"] ?>" alt="" />
            </div>
        <?php endif; ?>
        <div class="flex justify-center mt-10">
            <ul id=sidebar-tabs class=" w-full flex flex-row lg:flex-col gap-x-8 w-full justify-center px-8 lg:divide-y divide-[#dedede]">
                <li>
                    <a id="home" href="<?php echo site_url() ?>" class="flex justify-center items-center px-[10px] lg:px-0 h-[40px] lg:h-[51px] text-[12px] lg:text-[14px] font-[CG] font-[600] rounded-[50px] [&.active]:bg-[<?php echo $matindesign_redux["site-main-color"] ?>] lg:[&.active]:bg-transparent lg:[&.active]:text-[<?php echo $matindesign_redux["site-main-color"] ?>] [&.active]:text-white text-[#999] lg:text-[#4d4d4d] hover:text-[<?php echo $matindesign_redux["site-main-color"] ?>] duration-200 tracking-[1px] lg:tracking-[3px]">
                        <span>ArtWorks</span>
                    </a>
                </li>
                <li>
                    <a id="about" href="<?php echo site_url() ?>/about" class="flex justify-center items-center px-[10px] lg:px-0 h-[40px] lg:h-[51px] text-[12px] lg:text-[14px] font-[CG] font-[600] rounded-[50px] [&.active]:bg-[<?php echo $matindesign_redux["site-main-color"] ?>] lg:[&.active]:bg-transparent lg:[&.active]:text-[<?php echo $matindesign_redux["site-main-color"] ?>] [&.active]:text-white text-[#999] lg:text-[#4d4d4d] hover:text-[<?php echo $matindesign_redux["site-main-color"] ?>] duration-200 tracking-[1px] lg:tracking-[3px]">
                        <span>About Me</span>
                    </a>
                </li>
                <li>
                    <a id="contact" href="<?php echo site_url() ?>/contact" class="flex justify-center items-center px-[10px] lg:px-0 h-[40px] lg:h-[51px] text-[12px] lg:text-[14px] font-[CG] font-[600] rounded-[50px] [&.active]:bg-[<?php echo $matindesign_redux["site-main-color"] ?>] lg:[&.active]:bg-transparent lg:[&.active]:text-[<?php echo $matindesign_redux["site-main-color"] ?>] [&.active]:text-white text-[#999] lg:text-[#4d4d4d] hover:text-[<?php echo $matindesign_redux["site-main-color"] ?>] duration-200 tracking-[1px] lg:tracking-[3px]">
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
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="drop-shadow-[0_4px_8px_<?php echo $matindesign_redux["site-main-color"] ?>]">
                        <path fill="<?php echo $matindesign_redux["site-main-color"] ?>" d="m18.73 5.41l-1.28 1L12 10.46L6.55 6.37l-1.28-1A2 2 0 0 0 2 7.05v11.59A1.36 1.36 0 0 0 3.36 20h3.19v-7.72L12 16.37l5.45-4.09V20h3.19A1.36 1.36 0 0 0 22 18.64V7.05a2 2 0 0 0-3.27-1.64" />
                    </svg>
                </a>
            <?php endif; ?>
            <?php if ($matindesign_redux["sidebar-social-telegram"]) : ?>
                <a href="https://t.me/<?php echo $matindesign_redux["sidebar-social-telegram"] ?>" class="flex justify-center items-center mx-2 p-2 duration-300 rounded-[12px] bg-white border border-[#dedede] w-[34px] h-[34px] hover:scale-[0.9]">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="drop-shadow-[0_4px_8px_<?php echo $matindesign_redux["site-main-color"] ?>]">
                        <path fill="<?php echo $matindesign_redux["site-main-color"] ?>" d="m20.665 3.717l-17.73 6.837c-1.21.486-1.203 1.161-.222 1.462l4.552 1.42l10.532-6.645c.498-.303.953-.14.579.192l-8.533 7.701h-.002l.002.001l-.314 4.692c.46 0 .663-.211.921-.46l2.211-2.15l4.599 3.397c.848.467 1.457.227 1.668-.785l3.019-14.228c.309-1.239-.473-1.8-1.282-1.434" />
                    </svg>
                </a>
            <?php endif; ?>
            <?php if ($matindesign_redux["sidebar-social-instagram"]) : ?>
                <a href="https://www.instagram.com/<?php echo $matindesign_redux["sidebar-social-instagram"] ?>/" class="flex justify-center items-center mx-2 p-2 duration-300 rounded-[12px] bg-white border border-[#dedede] w-[34px] h-[34px] hover:scale-[0.9]">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="drop-shadow-[0_4px_8px_<?php echo $matindesign_redux["site-main-color"] ?>]">
                        <path fill="<?php echo $matindesign_redux["site-main-color"] ?>" d="M20.947 8.305a6.53 6.53 0 0 0-.419-2.216a4.61 4.61 0 0 0-2.633-2.633a6.606 6.606 0 0 0-2.186-.42c-.962-.043-1.267-.055-3.709-.055s-2.755 0-3.71.055a6.606 6.606 0 0 0-2.185.42a4.607 4.607 0 0 0-2.633 2.633a6.554 6.554 0 0 0-.419 2.185c-.043.963-.056 1.268-.056 3.71s0 2.754.056 3.71c.015.748.156 1.486.419 2.187a4.61 4.61 0 0 0 2.634 2.632a6.584 6.584 0 0 0 2.185.45c.963.043 1.268.056 3.71.056s2.755 0 3.71-.056a6.59 6.59 0 0 0 2.186-.419a4.615 4.615 0 0 0 2.633-2.633c.263-.7.404-1.438.419-2.187c.043-.962.056-1.267.056-3.71c-.002-2.442-.002-2.752-.058-3.709m-8.953 8.297c-2.554 0-4.623-2.069-4.623-4.623s2.069-4.623 4.623-4.623a4.623 4.623 0 0 1 0 9.246m4.807-8.339a1.077 1.077 0 0 1-1.078-1.078a1.077 1.077 0 1 1 2.155 0c0 .596-.482 1.078-1.077 1.078" />
                        <circle cx="11.994" cy="11.979" r="3.003" fill="<?php echo $matindesign_redux["site-main-color"] ?>" />
                    </svg>
                </a>
            <?php endif; ?>
            <?php if ($matindesign_redux["sidebar-social-whatsapp"]) : ?>
                <a href="https://wa.me/<?php echo $matindesign_redux["sidebar-social-whatsapp"] ?>/" class="flex justify-center items-center mx-2 p-2 duration-300 rounded-[12px] bg-white border border-[#dedede] w-[34px] h-[34px] hover:scale-[0.9]">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="drop-shadow-[0_4px_8px_<?php echo $matindesign_redux["site-main-color"] ?>]">
                        <path fill="<?php echo $matindesign_redux["site-main-color"] ?>" d="M12.001 2c5.523 0 10 4.477 10 10s-4.477 10-10 10a9.95 9.95 0 0 1-5.03-1.355L2.005 22l1.352-4.968A9.95 9.95 0 0 1 2.001 12c0-5.523 4.477-10 10-10M8.593 7.3l-.2.008a1 1 0 0 0-.372.1a1.3 1.3 0 0 0-.294.228c-.12.113-.188.211-.261.306A2.73 2.73 0 0 0 6.9 9.62c.002.49.13.967.33 1.413c.409.902 1.082 1.857 1.97 2.742c.214.213.424.427.65.626a9.45 9.45 0 0 0 3.84 2.046l.568.087c.185.01.37-.004.556-.013a2 2 0 0 0 .833-.231a5 5 0 0 0 .383-.22q.001.002.125-.09c.135-.1.218-.171.33-.288q.126-.13.21-.302c.078-.163.156-.474.188-.733c.024-.198.017-.306.014-.373c-.004-.107-.093-.218-.19-.265l-.582-.261s-.87-.379-1.402-.621a.5.5 0 0 0-.176-.041a.48.48 0 0 0-.378.127c-.005-.002-.072.055-.795.931a.35.35 0 0 1-.368.13a1.4 1.4 0 0 1-.191-.066c-.124-.052-.167-.072-.252-.108a6 6 0 0 1-1.575-1.003c-.126-.11-.243-.23-.363-.346a6.3 6.3 0 0 1-1.02-1.268l-.059-.095a1 1 0 0 1-.102-.205c-.038-.147.061-.265.061-.265s.243-.266.356-.41c.11-.14.203-.276.263-.373c.118-.19.155-.385.093-.536q-.42-1.026-.868-2.041c-.059-.134-.234-.23-.393-.249q-.081-.01-.162-.016a3 3 0 0 0-.403.004z" />
                    </svg>
                </a>
            <?php endif; ?>
        </div>
        <div class="flex justify-center items-center text-[<?php echo $matindesign_redux["site-main-color"] ?>] text-[12px] font-[CG]">
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