<div class="container-fluid">
    <div class="row svg-section">
        <?php
            include 'includes/components/curved-bg.php'
        ?>
        <div class="row justify-content-center">
            <div class="col text-center">
                <h2>25 Printable SVGs for your products</h2>
            </div>
        </div>
        <div class="row justify-content-center align-items-center g-4">
            <div class="col-md-6 d-flex justify-content-center">
                <img src="asset/svg-display/display.png" alt="Placeholder Image" style="border-radius: 8px" />
            </div>
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
        </div>
    </div>
    <div class="row row-cols-1 row-cols-md-2 justify-content-center p-5">
        <?php
            $dir = "asset/svg-display";
            $pngFiles = [];
            for ($i = 1; $i <= 4; $i++) {
                $pngFiles[] = $i . '.png';
            }
            foreach ($pngFiles as $pngFile) {
                echo '<img src="' . $dir . '/' . $pngFile . '" alt="' . $pngFile . '" style ="padding: 0;">';
            }
        ?>
    </div>
</div>