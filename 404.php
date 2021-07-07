<!doctype html>
<html lang="zh-Hant">

<head>
    <?php include "header-title.php"; ?>

</head>

<body>
    <div class="wp">
        <?php include "header.php"; ?>
        <!-- main ======================================================================================= -->
        <main class="main">
            <h1 class="hidden">404 ERROR</h1>
            <div class="bg position-fixed h-100vh w-100" style="background-image:url(styles/images/404/bg.jpg);min-height:540px;">
            </div>
            <div class="blank flex-center h-100vh position-relative pt-5 pt-md-0" style="min-height:540px;">
                <div class="bg-white text-center rounded-20 w-100 max777 py-5 px-4" data-aos="fade-up">
                    <div class="py-md-4">
                        <span class="d-block font-40 text-green0BBD6E font-weight-bold pb-3 pb-md-4" data-aos="fade-up" data-aos-delay="50">404 ERROR</span>
                        <spsn class="d-block font-30 font-weight-bold mb-3 pb-1" data-aos="fade-up" data-aos-delay="100">
                            <span class="d-block d-sm-inline">很抱歉</span>
                            <span class="d-none d-sm-inline">，</span>
                            <span class="d-block d-sm-inline">所訪問的頁面不存在</span>
                        </spsn>
                        <p class="font-20 text-gray646464 max415 lh16 px-md-2 mx-auto mb-5" data-aos="fade-up" data-aos-delay="150">你要查看的網址可能已被刪除、名稱已更改或是暫時不可用</p>
                        <a class="btn-dec d-table font-18 text-white font-weight-bold bg-green0BBD6E rounded-30 mx-auto py-2 px-5" href="./">
                            <span class="d-block my-2 px-1">返回首頁</span>
                        </a>
                    </div>
                </div>
            </div>
        </main>
        <!-- main ======================================================================================= -->
        <?php include "footer.php"; ?>
    </div>
    <?php include "footer-js.php"; ?>
</body>

</html>