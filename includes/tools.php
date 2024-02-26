<div class="container p-5">
    <div class="row justify-content-center">
        <div class="col text-center">
            <h1>Affiliate Tools</h1>
            <p>We have prepared a simple Email Swipes you can use on our campaign.</p>
        </div>
    </div>
    <div class="row mt-5 gap-4">
        <div class="col">
            <ul class="nav nav-tabs fs-6 h-100" id="emailTab1" role="tablist">
                <li class="nav-item col d-flex justify-content-center" role="presentation">
                    <button class="nav-link active" id="one-tab" data-bs-toggle="tab" data-bs-target="#one-tab-pane"
                        type="button" role="tab" aria-controls="one-tab-pane" aria-selected="true">
                        <h6>Email#1</h6>
                        <h6>Coloring Book Bussiness</h6>
                    </button>
                </li>
                <li class="nav-item col d-flex justify-content-center" role="presentation">
                    <button class="nav-link" id="two-tab" data-bs-toggle="tab" data-bs-target="#two-tab-pane"
                        type="button" role="tab" aria-controls="two-tab-pane" aria-selected="false">
                        <h6>Email#2</h6>
                        <h6>PLR Bussiness</h6>
                    </button>
                </li>
            </ul>
        </div>
        <div class="col h-100">
            <ul class="nav nav-tabs fs-6 row h-100" id="emailTab2" role="tablist">
                <li class="nav-item col d-flex justify-content-center" role="presentation">
                    <button class="nav-link active" id="three-tab" data-bs-toggle="tab" data-bs-target="#three-tab-pane"
                        type="button" role="tab" aria-controls="three-tab-pane" aria-selected="false">
                        <h6>Email#3</h6>
                        <h6>Amazon KDP Publisher</h6>
                    </button>
                </li>
                <li class="nav-item col d-flex justify-content-center" role="presentation">
                    <button class="nav-link" id="four-tab" data-bs-toggle="tab" data-bs-target="#four-tab-pane"
                        type="button" role="tab" aria-controls="four-tab-pane" aria-selected="false">
                        <h6>Email#4</h6>
                        <h6>Etsy Seller</h6>
                    </button>
                </li>
                <li class="nav-item col d-flex justify-content-center" role="presentation">
                    <button class="nav-link" id="five-tab" data-bs-toggle="tab" data-bs-target="#five-tab-pane"
                        type="button" role="tab" aria-controls="five-tab-pane" aria-selected="false">
                        <h6>Last Day Email</h6>
                    </button>
                </li>
            </ul>
        </div>
    </div>
    <div class="row gap-4">
        <div class="col card p-4">
            <div class="tab-content" id="emailTabContent1">
                <div class="tab-pane fade show active" id="one-tab-pane" role="tabpanel" aria-labelledby="one-tab"
                    tabindex="0">
                    <?php include 'email/email-1.php' ?>
                </div>
                <div class="tab-pane fade" id="two-tab-pane" role="tabpanel" aria-labelledby="two-tab" tabindex="0">
                    <?php include 'email/email-2.php' ?>
                </div>
            </div>
        </div>
        <div class="col card p-4">
            <div class="tab-content" id="emailTabContent2">
                <div class="tab-pane fade show active" id="three-tab-pane" role="tabpanel" aria-labelledby="three-tab"
                    tabindex="0">
                    <?php include 'email/email-3.php' ?>
                </div>
                <div class="tab-pane fade" id="four-tab-pane" role="tabpanel" aria-labelledby="four-tab" tabindex="0">
                    <?php include 'email/email-4.php'?></div>
                <div class="tab-pane fade" id="five-tab-pane" role="tabpanel" aria-labelledby="five-tab" tabindex="0">
                    <?php include 'email/email-5.php'?></div>
            </div>
        </div>
    </div>
</div>