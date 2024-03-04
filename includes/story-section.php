<div class="container-fluid">
    <div class="row story-section">
        <?php
            include 'includes/components/curved-bg.php'
        ?>
        <div class="row justify-content-center">
            <div class="col text-center">
                <h2>Easter Bliss: Content Template Collection</h2>
            </div>
        </div>
        <div class="row justify-content-center align-items-center g-4">
            <div class="col-md-6 d-flex flex-column gap-4">
                <div class="section-list">
                    <i class="far fa-check-circle"></i>
                    <span>Easy to use & edit</span>
                </div>
                <div class="section-list">
                    <i class="far fa-check-circle"></i>
                    <span>Commercial & PLR License Available</span>
                </div>
                <div class="section-list">
                    <i class="far fa-check-circle"></i>
                    <span>Ready to digitally-shared or printed</span>
                </div>
                <div class="section-list">
                    <i class="far fa-check-circle"></i>
                    <span>Comes in .svg and .png</span>
                </div>
            </div>
            <div class="col-md-6 d-flex justify-content-center">
                <img src="asset/pinterest-story/1.png" width="300" alt="Placeholder Image" />
            </div>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-5 justify-content-center p-5 g-4">
        <?php
            $dir = "asset/pinterest-story";
            $pngFiles = [];
            for ($i = 1; $i <= 15; $i++) {
                $pngFiles[] = $i . '.png';
            }
            foreach ($pngFiles as $pngFile) {
                echo '<img src="' . $dir . '/' . $pngFile . '" alt="' . $pngFile . '" style="max-width: 300px">';
            }
        ?>
    </div>
</div>