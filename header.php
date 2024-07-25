<?php wp_head() ?>

<!DOCTYPE html>
<html lang="en">

<?php global $matindesign_redux; ?>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
        body {
            background-color: <?php echo $matindesign_redux["site-background-color"] ?>;
        }

        ::-webkit-scrollbar-thumb {
            background-color: <?php echo $matindesign_redux["site-main-color"] ?>;
        }

        .wpcf7 input[type="submit"] {
            border-color: <?php echo $matindesign_redux["site-main-color"] ?>;
            color: <?php echo $matindesign_redux["site-main-color"] ?>;
        }

        .wpcf7 input[type="submit"]:hover {
            background-color: <?php echo $matindesign_redux["site-main-color"] ?>;
            color: white;
        }
    </style>
</head>