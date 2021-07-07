<!doctype html>
<html lang="zh-Hant">

<head>
    <?php include "header-title.php"; ?>

</head>

<body>
    <div class="wp" id="contact">
        <?php include "header.php"; ?>
        <!-- main ======================================================================================= -->
        <main class="main">
            <h1 class="hidden">聯絡我們</h1>
            <div class="bg position-fixed w-100" style="background-image:url(styles/images/contact/bg.jpg)">
            </div>
            <div class="position-relative blank z-1 pt-5 mt-md-5">
                <div class="text-white text-center font-weight-bold blank py-4 py-md-5 mt-xl-3">
                    <span class="d-block font-20 lato text-uppercase mb-2 mt-xl-3" data-aos="fade-up">contact us</span>
                    <span class="d-block font-60 mb-4" data-aos="fade-up" data-aos-delay="50">聯絡我們</span>
                    <p class="lh16 font-weight-normal mb-0" data-aos="fade-up" data-aos-delay="100">
                        <span class="d-block">
                            <span class="d-block d-sm-inline">規劃、設計、選材、施工</span>
                            <span class="d-none d-sm-inline">，</span>
                            <span class="d-block d-sm-inline">精確關注所有細節</span>
                        </span>
                        <span class="d-block">讓建築回歸「人」的核心價值</span>
                    </p>
                </div>
                <div class="bg-white max1200 py-4 py-md-5 px-4 p-lg-5 mt-xl-5" data-aos="fade-up" data-aos-delay="150">
                    <div class="px-xl-5 py-lg-3 my-lg-2">
                        <span class="d-block font-30 text-center pb-xl-1 mb-2 mb-md-4 mb-xl-5">客戶服務表單</span>
                        <form action="success">
                            <div class="border-top-black border-bottom-black mb-4 mb-md-5">
                                <div class="row g-0">
                                    <div class="col-12 col-md-6 border-bottom-DCDCDC py-3">
                                        <div class="form-field flex-align-center px-md-3">
                                            <label class="font-weight-bold" for="name">姓名*</label>
                                            <input class="flex-grow w-0 pl-3" type="text" id="name" name="name" require>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 border-bottom-DCDCDC py-3">
                                        <div class="form-field flex-align-center px-md-3">
                                            <label class="font-weight-bold" for="company">公司名稱</label>
                                            <input class="flex-grow w-0 pl-3" type="text" id="company" name="company">
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-0">
                                    <div class="col-12 col-md-6 border-bottom-DCDCDC py-3">
                                        <div class="form-field flex-align-center px-md-3">
                                            <label class="font-weight-bold" for="phone">聯絡電話*</label>
                                            <input class="flex-grow w-0 pl-3" type="text" id="phone" name="phone" require>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 border-bottom-DCDCDC py-3">
                                        <div class="form-field flex-align-center px-md-3">
                                            <label class="font-weight-bold" for="email">電子信箱*</label>
                                            <input class="flex-grow w-0 pl-3" type="text" id="email" name="email" require>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-0">
                                    <div class="col-12 border-bottom-DCDCDC py-3">
                                        <div class="form-field flex-align-center px-md-3">
                                            <label class="font-weight-bold" for="issue">服務項目*</label>
                                            <select class="selectpicker firstHide w-100" name="classification" id="classification">
                                                <option value="">請選擇服務項目</option>
                                                <option value="">服務項目1</option>
                                                <option value="">服務項目2</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-0">
                                    <div class="col-12 border-bottom-DCDCDC py-3">
                                        <div class="form-field d-flex px-md-3">
                                            <label class="font-weight-bold" for="content">內容*</label>
                                            <textarea class="flex-grow w-0 py-2 pl-3" name="content" id="content" rows="5"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-0">
                                    <div class="col-12 border-bottom-DCDCDC py-3">
                                        <div class="verificationCode form-field d-flex px-md-3">
                                            <label class="font-weight-bold mb-3 mb-md-0" for="verificationCode">驗證碼*</label>
                                            <input class="flex-grow w-0 pl-3" type="text" id="verificationCode" name="verificationCode" placeholder="點擊圖片更換驗證碼">
                                            <div class="pl-2 pl-md-3">
                                                <img src="styles/images/contact/verificationCode.png" alt="同興營造">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-xl-3 pb-3">
                                <button class="d-table btn-dec text-white bg-green0BBD6E rounded-30 mx-auto py-2 px-5" type="submit">
                                    <span class="d-block lh18 px-md-2 my-md-2">送出表單</span>
                                </button>
                            </div>
                        </form>

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