<?php get_header() ?>

<?php global $matindesign_redux; ?>

<?php
$tabs = $matindesign_redux["site-tabs-sort"]["tabs"];
$filteredTabs = array_filter($tabs, function ($tab) {
  return $tab !== "placebo";
});

$data = array(
  "all" => []
);

foreach ($filteredTabs as $key => $value) {
  $ImageIds = $matindesign_redux["projects-" . $key . "-gallery"];
  $ImageIds = strlen($ImageIds) == 0 ? [] : explode(",", $ImageIds);

  $data[$key] = $ImageIds;

  foreach ($ImageIds as $item) {
    shuffle($data["all"]);
    array_push($data["all"], $item);
  }
}
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
            <button id="all" class="xl:px-[20px] lg:px-[14px] px-[20px] py-[5px] text-[#999] rounded-[50px] text-[14px] [&.active]:bg-[<?php echo $matindesign_redux["site-main-color"] ?>] [&.active]:text-[white] duration-300 hover:text-[<?php echo $matindesign_redux["site-main-color"] ?>] hover:shadow-[4px_4px_10px_0px_<?php echo $matindesign_redux["site-main-color"] ?>1a] active" data-tabs="all">
              <span>All</span>
            </button>
          </li>
          <?php
          if ($tabs) : foreach ($filteredTabs as $key => $value) :
              $arr = $matindesign_redux["projects-" . $key . "-gallery"];
              $arr = strlen($arr) == 0 ? [] : explode(",", $arr);
              if (count($arr) > 0) :
          ?>
                <li>
                  <button id="<?php echo $key ?>" class="xl:px-[20px] lg:px-[14px] px-[20px] py-[5px] text-[#999] rounded-[50px] text-[14px] [&.active]:bg-[<?php echo $matindesign_redux["site-main-color"] ?>] [&.active]:text-[white] duration-300 hover:text-[<?php echo $matindesign_redux["site-main-color"] ?>] hover:shadow-[4px_4px_10px_0px_<?php echo $matindesign_redux["site-main-color"] ?>1a]" data-tabs="graphic">
                    <span><?php echo $value ?></span>
                  </button>
                </li>
          <?php endif;
            endforeach;
          endif; ?>
        </ul>
      </div>
      <div id="projects">
        <?php foreach ($data as $key => $value) : ?>
          <div data-tab="<?php echo $key ?>" class="project [&.active]:block hidden <?php if ($key === 'all') echo 'active' ?>">
            <ul class="images xl:columns-5 lg:columns-3 columns-2 gap-4 mt-4">
              <?php foreach ($value as $img) : ?>
                <li class="mb-4 border-[10px] border-white duration-300 hover:shadow-[0_4px_20px_rgba(0,0,0,0.1)] rounded-[22px] hover:translate-y-[-2px]">
                  <img loading="lazy" class="w-full cursor-pointer rounded-[12px]" src="<?php echo wp_get_attachment_url($img) ?>" alt="" />
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
        <?php endforeach; ?>
      </div>
    </main>
  </div>

  <?php get_footer(); ?>