<?php get_header() ?>

<?php global $matindesign_redux; ?>

<?php
$graphicArr = $matindesign_redux["projects-graphic-gallery"];
$sketchArr = $matindesign_redux["projects-sketch-gallery"];
$architectureArr = $matindesign_redux["projects-architecture-gallery"];
$photographyArr = $matindesign_redux["projects-photography-gallery"];
$webdesignArr = $matindesign_redux["projects-webdesign-gallery"];

$graphicArr = !is_array($graphicArr) ? [] : $graphicArr;
$sketchArr = !is_array($sketchArr) ? [] : $sketchArr;
$architectureArr = !is_array($architectureArr) ? [] : $architectureArr;
$photographyArr = !is_array($photographyArr) ? [] : $photographyArr;
$webdesignArr = !is_array($webdesignArr) ? [] : $webdesignArr;


$mergedArray = array_merge($graphicArr, $sketchArr, $architectureArr, $photographyArr, $webdesignArr);
?>

<body>
    <div class="flex h-screen w-full">
        <div class="m-auto text-center">
            <h1 class="text-[28px] mb-8 text-[--main]">Page Not Found</h1>
            <a class="text-[12px]" href="<?php echo site_url() ?>">Back to Home</a>
        </div>
    </div>

    <?php get_footer(); ?>