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
            <span class="mx-2 text-[--main]">Contact</span>
            <hr class="w-full" />
          </div>
        <?php endif; ?>
        <div class="mt-6">
          <div class="grid grid-cols-1 lg:grid-cols-4 gap-4">
            <div class="h-[130px] border border-[#ededed] rounded-[15px] flex flex-col justify-center items-center mb-3">
              <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24">
                  <path fill="#ff7900" d="M11.999 7.377a4.623 4.623 0 1 0 0 9.248a4.623 4.623 0 0 0 0-9.248m0 7.627a3.004 3.004 0 1 1 0-6.008a3.004 3.004 0 0 1 0 6.008" />
                  <circle cx="16.806" cy="7.207" r="1.078" fill="#ff7900" />
                  <path fill="#ff7900" d="M20.533 6.111A4.605 4.605 0 0 0 17.9 3.479a6.606 6.606 0 0 0-2.186-.42c-.963-.042-1.268-.054-3.71-.054s-2.755 0-3.71.054a6.554 6.554 0 0 0-2.184.42a4.6 4.6 0 0 0-2.633 2.632a6.585 6.585 0 0 0-.419 2.186c-.043.962-.056 1.267-.056 3.71c0 2.442 0 2.753.056 3.71c.015.748.156 1.486.419 2.187a4.61 4.61 0 0 0 2.634 2.632a6.584 6.584 0 0 0 2.185.45c.963.042 1.268.055 3.71.055s2.755 0 3.71-.055a6.615 6.615 0 0 0 2.186-.419a4.613 4.613 0 0 0 2.633-2.633c.263-.7.404-1.438.419-2.186c.043-.962.056-1.267.056-3.71s0-2.753-.056-3.71a6.581 6.581 0 0 0-.421-2.217m-1.218 9.532a5.043 5.043 0 0 1-.311 1.688a2.987 2.987 0 0 1-1.712 1.711a4.985 4.985 0 0 1-1.67.311c-.95.044-1.218.055-3.654.055c-2.438 0-2.687 0-3.655-.055a4.96 4.96 0 0 1-1.669-.311a2.985 2.985 0 0 1-1.719-1.711a5.08 5.08 0 0 1-.311-1.669c-.043-.95-.053-1.218-.053-3.654c0-2.437 0-2.686.053-3.655a5.038 5.038 0 0 1 .311-1.687c.305-.789.93-1.41 1.719-1.712a5.01 5.01 0 0 1 1.669-.311c.951-.043 1.218-.055 3.655-.055s2.687 0 3.654.055a4.96 4.96 0 0 1 1.67.311a2.991 2.991 0 0 1 1.712 1.712a5.08 5.08 0 0 1 .311 1.669c.043.951.054 1.218.054 3.655c0 2.436 0 2.698-.043 3.654z" />
                </svg>
              </div>
              <div class="text-[#989898] mt-2">
                <span>Instagram</span>
              </div>
              <div class="text-[--main] text-[14px] xl:text-[16px] mt-2">
                <span><?php echo $matindesign_redux["contact-card-instagram"] ?></span>
              </div>
            </div>
            <div class="h-[130px] border border-[#ededed] rounded-[15px] flex flex-col justify-center items-center mb-3">
              <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24">
                  <path fill="#ff7900" fill-rule="evenodd" d="M18.403 5.633A8.919 8.919 0 0 0 12.053 3c-4.948 0-8.976 4.027-8.978 8.977c0 1.582.413 3.126 1.198 4.488L3 21.116l4.759-1.249a8.981 8.981 0 0 0 4.29 1.093h.004c4.947 0 8.975-4.027 8.977-8.977a8.926 8.926 0 0 0-2.627-6.35m-6.35 13.812h-.003a7.446 7.446 0 0 1-3.798-1.041l-.272-.162l-2.824.741l.753-2.753l-.177-.282a7.448 7.448 0 0 1-1.141-3.971c.002-4.114 3.349-7.461 7.465-7.461a7.413 7.413 0 0 1 5.275 2.188a7.42 7.42 0 0 1 2.183 5.279c-.002 4.114-3.349 7.462-7.461 7.462m4.093-5.589c-.225-.113-1.327-.655-1.533-.73c-.205-.075-.354-.112-.504.112s-.58.729-.711.879s-.262.168-.486.056s-.947-.349-1.804-1.113c-.667-.595-1.117-1.329-1.248-1.554s-.014-.346.099-.458c.101-.1.224-.262.336-.393c.112-.131.149-.224.224-.374s.038-.281-.019-.393c-.056-.113-.505-1.217-.692-1.666c-.181-.435-.366-.377-.504-.383a9.65 9.65 0 0 0-.429-.008a.826.826 0 0 0-.599.28c-.206.225-.785.767-.785 1.871s.804 2.171.916 2.321c.112.15 1.582 2.415 3.832 3.387c.536.231.954.369 1.279.473c.537.171 1.026.146 1.413.089c.431-.064 1.327-.542 1.514-1.066c.187-.524.187-.973.131-1.067c-.056-.094-.207-.151-.43-.263" clip-rule="evenodd" />
                </svg>
              </div>
              <div class="text-[#989898] mt-2">
                <span>Whatsapp</span>
              </div>
              <div class="text-[--main] text-[14px] xl:text-[16px] mt-2">
                <span><?php echo $matindesign_redux["contact-card-whatsapp"] ?></span>
              </div>
            </div>
            <div class="h-[130px] border border-[#ededed] rounded-[15px] flex flex-col justify-center items-center mb-3">
              <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24">
                  <path fill="#ff7900" d="m20.665 3.717l-17.73 6.837c-1.21.486-1.203 1.161-.222 1.462l4.552 1.42l10.532-6.645c.498-.303.953-.14.579.192l-8.533 7.701h-.002l.002.001l-.314 4.692c.46 0 .663-.211.921-.46l2.211-2.15l4.599 3.397c.848.467 1.457.227 1.668-.785l3.019-14.228c.309-1.239-.473-1.8-1.282-1.434" />
                </svg>
              </div>
              <div class="text-[#989898] mt-2">
                <span>Telegram</span>
              </div>
              <div class="text-[--main] text-[14px] xl:text-[16px] mt-2">
                <span><?php echo $matindesign_redux["contact-card-telegram"] ?></span>
              </div>
            </div>
            <div class="h-[130px] border border-[#ededed] rounded-[15px] flex flex-col justify-center items-center mb-3">
              <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24">
                  <path fill="#ff7900" d="m18.73 5.41l-1.28 1L12 10.46L6.55 6.37l-1.28-1A2 2 0 0 0 2 7.05v11.59A1.36 1.36 0 0 0 3.36 20h3.19v-7.72L12 16.37l5.45-4.09V20h3.19A1.36 1.36 0 0 0 22 18.64V7.05a2 2 0 0 0-3.27-1.64" />
                </svg>
              </div>
              <div class="text-[#989898] mt-2">
                <span>Gmail</span>
              </div>
              <div class="text-[--main] text-[10px] xl:text-[12px] mt-2">
                <span><?php echo $matindesign_redux["contact-card-email"] ?></span>
              </div>
            </div>
          </div>
        </div>
        <?php if ($matindesign_redux["contact-form-check"]) : ?>
          <div class="mt-8">
            <div class="flex flex-col items-center">
              <strong class="text-[18px]">Can I help you?</strong>
              <div class="xl:w-[700px] lg:w-[500px] w-full mt-4">
                <?php echo do_shortcode('[contact-form-7 id="2387141" title="Contact"]'); ?>
              </div>
            </div>
          </div>
        <?php endif; ?>
      </div>
    </main>
  </div>

  <?php get_footer() ?>