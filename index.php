<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css" />
    <title>Document</title>
</head>

<body>
    <?php include './includes/headline.php' ?>
    <?php include './includes/cards.php' ?>
    <div class="container my-5">
        <div class="row">
            <div class="col-lg-8">
                <?php include './includes/cta.php' ?>
            </div>
            <div class="col-lg-4">
                <?php include './includes/form.php' ?>
            </div>
        </div>
    </div>
    <?php include './includes/welcome.php' ?>
    <?php include './includes/summary.php' ?>
    <?php include './includes/svg-section.php' ?>
    <?php include './includes/coloring-book-section.php' ?>
    <?php include './includes/quotes-section.php' ?>
    <?php include './includes/story-section.php' ?>
    <?php include './includes/video-section.php' ?>
    <?php include './includes/suggestion.php' ?>
    <?php include './includes/funnel.php' ?>
    <div class="d-none d-lg-block">
        <?php include './includes/tools.php' ?>
    </div>
    <div class="d-block d-lg-none">
        <?php include './includes/tools-below-lg.php'?>
    </div>
    <?php
        include './includes/prize.php'
    ?>
    <script src="bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
</body>

</html>