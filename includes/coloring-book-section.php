<div class="container-fluid">
    <div class="row coloring-book-section">
        <?php
            include 'includes/components/curved-bg.php'
        ?>
        <div class="row justify-content-center">
            <div class="col text-center">
                <h2>Coloring Book Bundle</h2>
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
            <div class="col-md-6">
                <img src="asset/coloring-book/MockupColoringBook2.png" alt="Placeholder Image" />
            </div>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-md-2 justify-content-center p-5">
        <?php
            $dir = "asset/coloring-book";
            $pngFiles = [];
            for ($i = 1; $i <= 6; $i++) {
                $pngFiles[] = $i . '.png';
            }
            foreach ($pngFiles as $pngFile) {
                echo '<img src="' . $dir . '/' . $pngFile . '" alt="' . $pngFile . '">';
            }
        ?>
    </div>
</div>