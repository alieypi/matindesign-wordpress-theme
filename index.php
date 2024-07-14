<?php get_header() ?>

<?php global $matindesign_redux; ?>

<?php
$graphicArr = $matindesign_redux["projects-graphic-gallery"];
$sketchArr = $matindesign_redux["projects-sketch-gallery"];
$architectureArr = $matindesign_redux["projects-architecture-gallery"];
$photographyArr = $matindesign_redux["projects-photography-gallery"];
$webdesignArr = $matindesign_redux["projects-webdesign-gallery"];

$graphicArr = strlen($graphicArr) == 0 ? [] : explode(",", $graphicArr);
$sketchArr = strlen($sketchArr) == 0 ? [] : explode(",", $sketchArr);
$architectureArr = strlen($architectureArr) == 0 ? [] : explode(",", $architectureArr);
$photographyArr = strlen($photographyArr) == 0 ? [] : explode(",", $photographyArr);
$webdesignArr = strlen($webdesignArr) == 0 ? [] : explode(",", $webdesignArr);

$mergedArray = array_merge($graphicArr, $sketchArr, $architectureArr, $photographyArr, $webdesignArr);
rsort($mergedArray)
?>

<body>
  <div class="flex lg:flex-row flex-col h-auto lg:h-screen lg:overflow-hidden overflow-auto">
    <?php get_template_part("parts/sidebar") ?>
    <main class="pb-[100px] lg:w-[calc(100%-250px)] w-full flex flex-col pt-10 lg:px-24 px-8 h-full lg:overflow-y-scroll overflow-auto">
      <h2 class="lg:block hidden text-[2rem] font-[Saira] font-bold text-[#4d4d4d]">ArtWorks</h2>
      <hr class="my-2 hidden lg:block" />
      <div class="justify-end lg:flex hidden">
        <ul id="main-tabs" class="flex flex-row lg:gap-2 xl:gap-4">
          <li>
            <button id="all" class="xl:px-[20px] lg:px-[14px] px-[20px] py-[5px] text-[#999] rounded-[50px] text-[14px] [&.active]:bg-[--main] [&.active]:text-[white] duration-300 hover:text-[--main] hover:shadow-[4px_4px_10px_0px_rgba(255,121,0,0.1)] active" data-tabs="all">
              <span>All</span>
            </button>
          </li>
          <?php if (count($graphicArr) > 0) : ?>
            <li>
              <button id="graphic" class="xl:px-[20px] lg:px-[14px] px-[20px] py-[5px] text-[#999] rounded-[50px] text-[14px] [&.active]:bg-[--main] [&.active]:text-[white] duration-300 hover:text-[--main] hover:shadow-[4px_4px_10px_0px_rgba(255,121,0,0.1)]" data-tabs="graphic">
                <span>Graphic</span>
              </button>
            </li>
          <?php endif; ?>
          <?php if (count($sketchArr) > 0) : ?>
            <li>
              <button id="sketch" class="xl:px-[20px] lg:px-[14px] px-[20px] py-[5px] text-[#999] rounded-[50px] text-[14px] [&.active]:bg-[--main] [&.active]:text-[white] duration-300 hover:text-[--main] hover:shadow-[4px_4px_10px_0px_rgba(255,121,0,0.1)]" data-tabs="sketch">
                <span>Sketch</span>
              </button>
            </li>
          <?php endif; ?>
          <?php if (count($architectureArr) > 0) : ?>
            <li>
              <button id="architecture" class="xl:px-[20px] lg:px-[14px] px-[20px] py-[5px] text-[#999] rounded-[50px] text-[14px] [&.active]:bg-[--main] [&.active]:text-[white] duration-300 hover:text-[--main] hover:shadow-[4px_4px_10px_0px_rgba(255,121,0,0.1)]" data-tabs="architecture">
                <span>Architecture</span>
              </button>
            </li>
          <?php endif; ?>
          <?php if (count($photographyArr) > 0) : ?>
            <li>
              <button id="photography" class="xl:px-[20px] px-[14px] py-[5px] text-[#999] rounded-[50px] text-[14px] [&.active]:bg-[--main] [&.active]:text-[white] duration-300 hover:text-[--main] hover:shadow-[4px_4px_10px_0px_rgba(255,121,0,0.1)]" data-tabs="photography">
                <span>Photography</span>
              </button>
            </li>
          <?php endif; ?>
          <?php if (count($webdesignArr) > 0) : ?>
            <li>
              <button id="webdesign" class="xl:px-[20px] lg:px-[14px] px-[20px] py-[5px] text-[#999] rounded-[50px] text-[14px] [&.active]:bg-[--main] [&.active]:text-[white] duration-300 hover:text-[--main] hover:shadow-[4px_4px_10px_0px_rgba(255,121,0,0.1)]" data-tabs="webdesign">
                <span>WebDesign</span>
              </button>
            </li>
          <?php endif; ?>
        </ul>
      </div>
      <div id="projects">
        <div data-tab="all" class="project [&.active]:block hidden active">
          <ul class="images xl:columns-4 lg:columns-3 columns-2 gap-2 mt-4">
            <?php foreach ($mergedArray as $img) : ?>
              <li class="mb-2">
                <img class="w-full border-4 border-white duration-300 hover:shadow-[0_4px_4px_rgba(0,0,0,0.1)] hover:translate-y-[-2px] cursor-pointer rounded-[12px]" src="<?php echo wp_get_attachment_url($img) ?>" alt="" />
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
        <div data-tab="graphic" class="project [&.active]:block hidden">
          <ul class="images xl:columns-4 lg:columns-3 columns-2 gap-2 mt-4">
            <?php foreach ($graphicArr as $img) : ?>
              <li class="mb-2">
                <img class="w-full border-4 border-white duration-300 hover:shadow-[0_4px_4px_rgba(0,0,0,0.1)] hover:translate-y-[-2px] cursor-pointer rounded-[12px]" src="<?php echo wp_get_attachment_url($img) ?>" alt="" />
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
        <div data-tab="sketch" class="project [&.active]:block hidden">
          <ul class="images xl:columns-4 lg:columns-3 columns-2 gap-2 mt-4">
            <?php foreach ($sketchArr as $img) : ?>
              <li class="mb-2">
                <img class="w-full border-4 border-white duration-300 hover:shadow-[0_4px_4px_rgba(0,0,0,0.1)] hover:translate-y-[-2px] cursor-pointer rounded-[12px]" src="<?php echo wp_get_attachment_url($img) ?>" alt="" />
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
        <div data-tab="architecture" class="project [&.active]:block hidden">
          <ul class="images xl:columns-4 lg:columns-3 columns-2 gap-2 mt-4">
            <?php foreach ($architectureArr as $img) : ?>
              <li class="mb-2">
                <img class="w-full border-4 border-white duration-300 hover:shadow-[0_4px_4px_rgba(0,0,0,0.1)] hover:translate-y-[-2px] cursor-pointer rounded-[12px]" src="<?php echo wp_get_attachment_url($img) ?>" alt="" />
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
        <div data-tab="photography" class="project [&.active]:block hidden">
          <ul class="images xl:columns-4 lg:columns-3 columns-2 gap-2 mt-4">
            <?php foreach ($photographyArr as $img) : ?>
              <li class="mb-2">
                <img class="w-full border-4 border-white duration-300 hover:shadow-[0_4px_4px_rgba(0,0,0,0.1)] hover:translate-y-[-2px] cursor-pointer rounded-[12px]" src="<?php echo wp_get_attachment_url($img) ?>" alt="" />
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
        <div data-tab="webdesign" class="project [&.active]:block hidden">
          <ul class="images xl:columns-4 lg:columns-3 columns-2 gap-2 mt-4">
            <?php foreach ($webdesignArr as $img) : ?>
              <li class="mb-2">
                <img class="w-full border-4 border-white duration-300 hover:shadow-[0_4px_4px_rgba(0,0,0,0.1)] hover:translate-y-[-2px] cursor-pointer rounded-[12px]" src="<?php echo wp_get_attachment_url($img) ?>" alt="" />
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </main>
  </div>

  <?php get_footer(); ?>