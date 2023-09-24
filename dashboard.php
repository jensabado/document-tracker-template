<?php
$page_title = 'Dashboard';
ob_start();
?>
<section class="section">
    <div class="section-header">
        <h1>Dashboard</h1>
    </div>
    <div class="section-body">
        <div class="row d-flex flex-row align-items-stretch">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12" style="margin-bottom: 30px">
                <div class="card shadow px-3 h-100 d-flex justify-content-center">
                    <div class="d-flex flex-row align-items-center">
                        <img style="height: 80px;" src="./assets/img/illustration/ongoing-doc.svg" alt="">
                        <div class="d-flex flex-column align-items-end w-100 h-100">
                            <p style="font-weight: 900; color: #5D87FF;" class="h1">5</p>
                            <p class="h6 text-right">Total Ongoing Documents</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12" style="margin-bottom: 30px">
                <div class="card shadow px-3 h-100 d-flex justify-content-center">
                    <div class="d-flex flex-row align-items-center">
                        <img style="height: 80px;" src="./assets/img/illustration/delivered-doc.svg" alt="">
                        <div class="d-flex flex-column align-items-end w-100 h-100">
                            <p style="font-weight: 900; color: #5D87FF;" class="h1">5</p>
                            <p class="h6 text-right">Total Delivered Documents</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
$content = ob_get_clean();
$script = '';
include('./layout/base.php');
?>