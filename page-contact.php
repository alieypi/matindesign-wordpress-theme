<?php get_header() ?>

<?php global $matindesign_redux; ?>

<body>
  <div class="flex lg:flex-row flex-col h-auto lg:h-screen lg:overflow-hidden overflow-auto">
    <?php get_template_part("parts/sidebar") ?>
    <main class="pb-[100px] lg:w-[calc(100%-250px)] w-full flex flex-col pt-10 lg:px-24 px-8 h-full lg:overflow-y-scroll overflow-auto">
      <h2 class="lg:block hidden text-[2rem] font-[Saira] font-bold text-[#4d4d4d]"><?php the_title() ?></h2>
      <hr class="my-2 hidden lg:block" />
      <div class="flex flex-col gap-4">
        <?php if ($matindesign_redux["contact-map-check"] && $matindesign_redux["contact-map-url"]) : ?>
          <div class="w-full rounded-[8px] overflow-hidden">
            <iframe src="<?php echo $matindesign_redux["contact-map-url"] ?>" width="1390" height="160" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="w-full"></iframe>
          </div>
          <div class="w-full mt-4 w-full gap-4 flex justify-center items-center">
            <hr class="w-full" />
            <span class="mx-2 text-[<?php echo $matindesign_redux["site-main-color"] ?>]">Contact</span>
            <hr class="w-full" />
          </div>
        <?php endif; ?>
        <div class="mt-6">
          <div class="grid grid-cols-1 lg:grid-cols-4 gap-4">
            <div class="h-[130px] border border-[#ededed] rounded-[15px] flex flex-col justify-center items-center mb-3">
              <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24">
                  <path fill="<?php echo $matindesign_redux["site-main-color"] ?>" d="M20.947 8.305a6.53 6.53 0 0 0-.419-2.216a4.61 4.61 0 0 0-2.633-2.633a6.606 6.606 0 0 0-2.186-.42c-.962-.043-1.267-.055-3.709-.055s-2.755 0-3.71.055a6.606 6.606 0 0 0-2.185.42a4.607 4.607 0 0 0-2.633 2.633a6.554 6.554 0 0 0-.419 2.185c-.043.963-.056 1.268-.056 3.71s0 2.754.056 3.71c.015.748.156 1.486.419 2.187a4.61 4.61 0 0 0 2.634 2.632a6.584 6.584 0 0 0 2.185.45c.963.043 1.268.056 3.71.056s2.755 0 3.71-.056a6.59 6.59 0 0 0 2.186-.419a4.615 4.615 0 0 0 2.633-2.633c.263-.7.404-1.438.419-2.187c.043-.962.056-1.267.056-3.71c-.002-2.442-.002-2.752-.058-3.709m-8.953 8.297c-2.554 0-4.623-2.069-4.623-4.623s2.069-4.623 4.623-4.623a4.623 4.623 0 0 1 0 9.246m4.807-8.339a1.077 1.077 0 0 1-1.078-1.078a1.077 1.077 0 1 1 2.155 0c0 .596-.482 1.078-1.077 1.078" />
                  <circle cx="11.994" cy="11.979" r="3.003" fill="<?php echo $matindesign_redux["site-main-color"] ?>" />
                </svg>
              </div>
              <div class="text-[#989898] mt-2">
                <span>Instagram</span>
              </div>
              <div class="text-[<?php echo $matindesign_redux["site-main-color"] ?>] text-[14px] xl:text-[16px] mt-2">
                <span><?php echo $matindesign_redux["contact-card-instagram"] ?></span>
              </div>
            </div>
            <div class="h-[130px] border border-[#ededed] rounded-[15px] flex flex-col justify-center items-center mb-3">
              <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24">
                  <path fill="<?php echo $matindesign_redux["site-main-color"] ?>" d="M12.001 2c5.523 0 10 4.477 10 10s-4.477 10-10 10a9.95 9.95 0 0 1-5.03-1.355L2.005 22l1.352-4.968A9.95 9.95 0 0 1 2.001 12c0-5.523 4.477-10 10-10M8.593 7.3l-.2.008a1 1 0 0 0-.372.1a1.3 1.3 0 0 0-.294.228c-.12.113-.188.211-.261.306A2.73 2.73 0 0 0 6.9 9.62c.002.49.13.967.33 1.413c.409.902 1.082 1.857 1.97 2.742c.214.213.424.427.65.626a9.45 9.45 0 0 0 3.84 2.046l.568.087c.185.01.37-.004.556-.013a2 2 0 0 0 .833-.231a5 5 0 0 0 .383-.22q.001.002.125-.09c.135-.1.218-.171.33-.288q.126-.13.21-.302c.078-.163.156-.474.188-.733c.024-.198.017-.306.014-.373c-.004-.107-.093-.218-.19-.265l-.582-.261s-.87-.379-1.402-.621a.5.5 0 0 0-.176-.041a.48.48 0 0 0-.378.127c-.005-.002-.072.055-.795.931a.35.35 0 0 1-.368.13a1.4 1.4 0 0 1-.191-.066c-.124-.052-.167-.072-.252-.108a6 6 0 0 1-1.575-1.003c-.126-.11-.243-.23-.363-.346a6.3 6.3 0 0 1-1.02-1.268l-.059-.095a1 1 0 0 1-.102-.205c-.038-.147.061-.265.061-.265s.243-.266.356-.41c.11-.14.203-.276.263-.373c.118-.19.155-.385.093-.536q-.42-1.026-.868-2.041c-.059-.134-.234-.23-.393-.249q-.081-.01-.162-.016a3 3 0 0 0-.403.004z" />
                </svg>
              </div>
              <div class="text-[#989898] mt-2">
                <span>Whatsapp</span>
              </div>
              <div class="text-[<?php echo $matindesign_redux["site-main-color"] ?>] text-[14px] xl:text-[16px] mt-2">
                <span><?php echo $matindesign_redux["contact-card-whatsapp"] ?></span>
              </div>
            </div>
            <div class="h-[130px] border border-[#ededed] rounded-[15px] flex flex-col justify-center items-center mb-3">
              <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24">
                  <path fill="<?php echo $matindesign_redux["site-main-color"] ?>" d="m20.665 3.717l-17.73 6.837c-1.21.486-1.203 1.161-.222 1.462l4.552 1.42l10.532-6.645c.498-.303.953-.14.579.192l-8.533 7.701h-.002l.002.001l-.314 4.692c.46 0 .663-.211.921-.46l2.211-2.15l4.599 3.397c.848.467 1.457.227 1.668-.785l3.019-14.228c.309-1.239-.473-1.8-1.282-1.434" />
                </svg>
              </div>
              <div class="text-[#989898] mt-2">
                <span>Telegram</span>
              </div>
              <div class="text-[<?php echo $matindesign_redux["site-main-color"] ?>] text-[14px] xl:text-[16px] mt-2">
                <span><?php echo $matindesign_redux["contact-card-telegram"] ?></span>
              </div>
            </div>
            <div class="h-[130px] border border-[#ededed] rounded-[15px] flex flex-col justify-center items-center mb-3">
              <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24">
                  <path fill="<?php echo $matindesign_redux["site-main-color"] ?>" d="m18.73 5.41l-1.28 1L12 10.46L6.55 6.37l-1.28-1A2 2 0 0 0 2 7.05v11.59A1.36 1.36 0 0 0 3.36 20h3.19v-7.72L12 16.37l5.45-4.09V20h3.19A1.36 1.36 0 0 0 22 18.64V7.05a2 2 0 0 0-3.27-1.64" />
                </svg>
              </div>
              <div class="text-[#989898] mt-2">
                <span>Gmail</span>
              </div>
              <div class="text-[<?php echo $matindesign_redux["site-main-color"] ?>] text-[10px] xl:text-[12px] mt-2">
                <span><?php echo $matindesign_redux["contact-card-email"] ?></span>
              </div>
            </div>
          </div>
        </div>
        <?php if ($matindesign_redux["contact-form-check"] && $matindesign_redux["contact-form-shortcode"]) : ?>
          <div class="mt-8">
            <div class="flex flex-col items-center">
              <strong class="text-[18px]">Can I help you?</strong>
              <div class="xl:w-[700px] lg:w-[500px] w-full mt-4">
                <?php echo do_shortcode($matindesign_redux["contact-form-shortcode"]); ?>
              </div>
            </div>
          </div>
        <?php endif; ?>
      </div>
    </main>
  </div>

  <?php get_footer() ?>