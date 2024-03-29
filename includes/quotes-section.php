<div class="container-fluid">
    <div class="row p-2 p-md-5 quotes-section">
        <?php
            include 'includes/components/curved-bg.php'
        ?>
        <div class="row justify-content-center">
            <div class="col text-center">
                <h2>25 Heart-warming Easter Quotes</h2>
            </div>
        </div>
        <div class="row justify-content-center align-items-center g-4">
            <div class="col-md-6 d-flex justify-content-center">
                <img src="asset/easter-quotes/display.png" width="400" alt="Placeholder Image" />
            </div>
            <div class="col-md-6 text-center text-md-left">
                <p>
                    We've simplified the process so you can effortlessly design t-shirts, mugs, notebooks, stickers,
                    towels,
                    phone cases, and more. You have the flexibility to use these ready-made templates or, for advanced
                    customization, download the PSD files and make changes to your heart's content.

                    Never dipped your toes into product sales like this? Not a problem. We'll guide you through the
                    process,
                    ensuring you can set up shop quickly without any initial investment or the need to keep physical
                    product
                    inventory on hand.

                    Get ready to unleash your creativity and design an array of Easter-themed SVGs. These designs will
                    make
                    your products stand out and elevate the holiday spirit in all your merchandise
                </p>
            </div>
        </div>
    </div>
    <div class="row row-cols-1 justify-content-center p-5">
        <?php
            $dir = "asset/easter-quotes";
            $pngFiles = [];
            for ($i = 1; $i <= 2; $i++) {
                $pngFiles[] = $i . '.png';
            }
            foreach ($pngFiles as $pngFile) {
                echo '<img src="' . $dir . '/' . $pngFile . '" alt="' . $pngFile . '">';
            }
        ?>
    </div>
</div>