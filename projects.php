<!doctype html>
<html lang="zh-Hant">

<head>
    <?php include "header-title.php"; ?>

</head>

<body>
    <div class="wp" id="projects">
        <?php include "header.php"; ?>
        <!-- main ======================================================================================= -->
        <main class="main">
            <h1 class="hidden">工程實績</h1>
            <h2 class="hidden">全部案件</h2>
            <div class="position-relative">
                <div class="banner banner-style-2 position-relative">
                    <div class="editor" id="methodsbannerEditor">
                        <!--編輯器開始-->
                        <div class="position-fixed w-100">
                            <div class="jqimgFill h-100">
                                <img src="styles/images/projects/banner.jpg" alt="同興營造">
                            </div>
                        </div>
                        <div class="absolute-center text-white text-center font-weight-bold w-100 blank pt-4">
                            <span class="d-block font-20 lato text-uppercase mb-2 mt-3" data-aos="fade-up">Our Projects</span>
                            <span class="d-block font-60 mb-4" data-aos="fade-up" data-aos-delay="50">工程實績</span>
                            <p class="lh16 font-weight-normal mb-0" data-aos="fade-up" data-aos-delay="100">
                                <span class="d-block">
                                    <span class="d-block d-sm-inline">規劃、設計、選材、施工</span>
                                    <span class="d-none d-sm-inline">，</span>
                                    <span class="d-block d-sm-inline">精確關注所有細節</span>
                                </span>
                                <span class="d-block">讓建築回歸「人」的核心價值</span>
                            </p>
                        </div>
                        <!--編輯器結束-->
                    </div>
                </div>
                <div class="features position-relative position-lg-absolute z-2 blank pt-4 pt-md-5 pt-lg-0">
                    <form action="projects" class="d-block d-lg-flex flex-justify-center font-weight-bold">
                        <div class="mx-lg-2 px-lg-1 pb-2 pb-lg-0">
                            <select name="state" id="state" class="selectpicker firstHide">
                                <option value="">工程狀態</option>
                                <option value="">全部</option>
                                <option value="">在建工程</option>
                                <option value="">完工工程</option>

                            </select>
                        </div>
                        <div class="mx-lg-2 px-lg-1 pb-2 pb-lg-0">
                            <select name="classification" id="classification" class="selectpicker firstHide">
                                <option value="">工程分類</option>
                                <option value="">一般營造施工服務</option>
                                <option value="">土木工程</option>
                                <option value="">下水道工程</option>
                            </select>
                        </div>
                        <div class="mx-lg-2 px-lg-1 pb-2 pb-lg-0">
                            <select name="year" id="year" class="selectpicker firstHide">
                                <option value="">建築年分</option>
                                <option value="">2021</option>
                                <option value="">2020</option>
                                <option value="">2019</option>
                            </select>
                        </div>
                        <div class="mx-lg-2 px-lg-1">
                            <div class="search d-flex rounded-10">
                                <input class="text-white flex-grow w-0" type="text" id="search" name="search" placeholder="關鍵字搜尋">
                                <i class="icon-search font-20 text-white"></i>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="bg-white position-relative blank pt-4 pt-md-5 pb-5">
                <div class="max1400 pb-4 pb-md-5 pt-xl-5 mt-xl-4">
                    <div class="row g-3 text-center pt-lg-2">
                        <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-5">
                            <h3 class="hidden">長江路德鄰居新建工程</h3>
                            <a class="item d-block position-relative mx-auto" href="project" data-aos="fade-up" data-aos-delay="0">
                                <span class="img d-block position-relative mb-3 mb-md-4">
                                    <span class="jqimgFill d-block">
                                        <img src="styles/images/projects/1.jpg" alt="同興營造">
                                    </span>
                                </span>
                                <span class="text d-block position-absolute w-100">
                                    <span class="title d-block font-weight-bold">長江路德鄰居新建工程</span>
                                    <span class="area pt-2 pb-3">新北市 樹林區</span>
                                    <span class="date d-block lato font-weight-bold text-gray969696 position-relative">2019 / 08 / 13</span>
                                    <span class="flex-center w60 h60 bg-green0BBD6E rounded-circle mx-auto mt-5">
                                        <img src="styles/images/projects/plus.png" alt="同興營造">
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-5">
                            <h3 class="hidden">映象-樹林新廠增建工程</h3>
                            <a class="item d-block position-relative mx-auto" href="project" data-aos="fade-up" data-aos-delay="50">
                                <span class="img d-block position-relative mb-3 mb-md-4">
                                    <span class="jqimgFill d-block">
                                        <img src="styles/images/projects/2.jpg" alt="同興營造">
                                    </span>
                                </span>
                                <span class="text d-block position-absolute w-100">
                                    <span class="title d-block font-weight-bold">映象-樹林新廠增建工程</span>
                                    <span class="area pt-2 pb-3">新北市 樹林區</span>
                                    <span class="date d-block lato font-weight-bold text-gray969696 position-relative">2018 / 07 / 10</span>
                                    <span class="flex-center w60 h60 bg-green0BBD6E rounded-circle mx-auto mt-5">
                                        <img src="styles/images/projects/plus.png" alt="同興營造">
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-5">
                            <h3 class="hidden">德鄰建設「双盈」新建工程</h3>
                            <a class="item d-block position-relative mx-auto" href="project" data-aos="fade-up" data-aos-delay="100">
                                <span class="img d-block position-relative mb-3 mb-md-4">
                                    <span class="jqimgFill d-block">
                                        <img src="styles/images/projects/3.jpg" alt="同興營造">
                                    </span>
                                </span>
                                <span class="text d-block position-absolute w-100">
                                    <span class="title d-block font-weight-bold">德鄰建設「双盈」新建工程</span>
                                    <span class="area pt-2 pb-3">新北市 樹林區</span>
                                    <span class="date d-block lato font-weight-bold text-gray969696 position-relative">2018 / 03 / 13</span>
                                    <span class="flex-center w60 h60 bg-green0BBD6E rounded-circle mx-auto mt-5">
                                        <img src="styles/images/projects/plus.png" alt="同興營造">
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-5">
                            <h3 class="hidden">正奇興業辦公大樓新建工程</h3>
                            <a class="item d-block position-relative mx-auto" href="project" data-aos="fade-up" data-aos-delay="150">
                                <span class="img d-block position-relative mb-3 mb-md-4">
                                    <span class="jqimgFill d-block">
                                        <img src="styles/images/projects/4.jpg" alt="同興營造">
                                    </span>
                                </span>
                                <span class="text d-block position-absolute w-100">
                                    <span class="title d-block font-weight-bold">正奇興業辦公大樓新建工程</span>
                                    <span class="area pt-2 pb-3">新北市 樹林區</span>
                                    <span class="date d-block lato font-weight-bold text-gray969696 position-relative">2016 / 10 / 13</span>
                                    <span class="flex-center w60 h60 bg-green0BBD6E rounded-circle mx-auto mt-5">
                                        <img src="styles/images/projects/plus.png" alt="同興營造">
                                    </span>
                                </span>
                            </a>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-5">
                            <h3 class="hidden">林口美國學校新建工程</h3>
                            <a class="item d-block position-relative mx-auto" href="project" data-aos="fade-up" data-aos-delay="0">
                                <span class="img d-block position-relative mb-3 mb-md-4">
                                    <span class="jqimgFill d-block">
                                        <img src="styles/images/projects/5.jpg" alt="同興營造">
                                    </span>
                                </span>
                                <span class="text d-block position-absolute w-100">
                                    <span class="title d-block font-weight-bold">林口美國學校新建工程</span>
                                    <span class="area pt-2 pb-3">新北市 樹林區</span>
                                    <span class="date d-block lato font-weight-bold text-gray969696 position-relative">2016 / 06 / 16</span>
                                    <span class="flex-center w60 h60 bg-green0BBD6E rounded-circle mx-auto mt-5">
                                        <img src="styles/images/projects/plus.png" alt="同興營造">
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-5">
                            <h3 class="hidden">禾豐特區-LOT-QR新建別墅工程</h3>
                            <a class="item d-block position-relative mx-auto" href="project" data-aos="fade-up" data-aos-delay="50">
                                <span class="img d-block position-relative mb-3 mb-md-4">
                                    <span class="jqimgFill d-block">
                                        <img src="styles/images/projects/6.jpg" alt="同興營造">
                                    </span>
                                </span>
                                <span class="text d-block position-absolute w-100">
                                    <span class="title d-block font-weight-bold">禾豐特區-LOT-QR新建別墅工程</span>
                                    <span class="area pt-2 pb-3">新北市 樹林區</span>
                                    <span class="date d-block lato font-weight-bold text-gray969696 position-relative">2015 / 12 / 08</span>
                                    <span class="flex-center w60 h60 bg-green0BBD6E rounded-circle mx-auto mt-5">
                                        <img src="styles/images/projects/plus.png" alt="同興營造">
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-5">
                            <h3 class="hidden">台東都蘭新建工程</h3>
                            <a class="item d-block position-relative mx-auto" href="project" data-aos="fade-up" data-aos-delay="100">
                                <span class="img d-block position-relative mb-3 mb-md-4">
                                    <span class="jqimgFill d-block">
                                        <img src="styles/images/projects/7.jpg" alt="同興營造">
                                    </span>
                                </span>
                                <span class="text d-block position-absolute w-100">
                                    <span class="title d-block font-weight-bold">台東都蘭新建工程</span>
                                    <span class="area pt-2 pb-3">新北市 樹林區</span>
                                    <span class="date d-block lato font-weight-bold text-gray969696 position-relative">2015 / 10 / 08</span>
                                    <span class="flex-center w60 h60 bg-green0BBD6E rounded-circle mx-auto mt-5">
                                        <img src="styles/images/projects/plus.png" alt="同興營造">
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-5">
                            <h3 class="hidden">嘉泥建設茹絲葵大樓</h3>
                            <a class="item d-block position-relative mx-auto" href="project" data-aos="fade-up" data-aos-delay="150">
                                <span class="img d-block position-relative mb-3 mb-md-4">
                                    <span class="jqimgFill d-block">
                                        <img src="styles/images/projects/8.jpg" alt="同興營造">
                                    </span>
                                </span>
                                <span class="text d-block position-absolute w-100">
                                    <span class="title d-block font-weight-bold">嘉泥建設茹絲葵大樓</span>
                                    <span class="area pt-2 pb-3">新北市 樹林區</span>
                                    <span class="date d-block lato font-weight-bold text-gray969696 position-relative">2014 / 05 / 06</span>
                                    <span class="flex-center w60 h60 bg-green0BBD6E rounded-circle mx-auto mt-5">
                                        <img src="styles/images/projects/plus.png" alt="同興營造">
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-5">
                            <h3 class="hidden">全葳-重揚官邸</h3>
                            <a class="item d-block position-relative mx-auto" href="project" data-aos="fade-up" data-aos-delay="0">
                                <span class="img d-block position-relative mb-3 mb-md-4">
                                    <span class="jqimgFill d-block">
                                        <img src="styles/images/projects/9.jpg" alt="同興營造">
                                    </span>
                                </span>
                                <span class="text d-block position-absolute w-100">
                                    <span class="title d-block font-weight-bold">全葳-重揚官邸</span>
                                    <span class="area pt-2 pb-3">新北市 樹林區</span>
                                    <span class="date d-block lato font-weight-bold text-gray969696 position-relative">2014 / 01 / 08</span>
                                    <span class="flex-center w60 h60 bg-green0BBD6E rounded-circle mx-auto mt-5">
                                        <img src="styles/images/projects/plus.png" alt="同興營造">
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-5">
                            <h3 class="hidden">兆鑫南港</h3>
                            <a class="item d-block position-relative mx-auto" href="project" data-aos="fade-up" data-aos-delay="50">
                                <span class="img d-block position-relative mb-3 mb-md-4">
                                    <span class="jqimgFill d-block">
                                        <img src="styles/images/projects/10.jpg" alt="同興營造">
                                    </span>
                                </span>
                                <span class="text d-block position-absolute w-100">
                                    <span class="title d-block font-weight-bold">兆鑫南港</span>
                                    <span class="area pt-2 pb-3">新北市 樹林區</span>
                                    <span class="date d-block lato font-weight-bold text-gray969696 position-relative">2012 / 09 / 19</span>
                                    <span class="flex-center w60 h60 bg-green0BBD6E rounded-circle mx-auto mt-5">
                                        <img src="styles/images/projects/plus.png" alt="同興營造">
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-5">
                            <h3 class="hidden">七星水利會</h3>
                            <a class="item d-block position-relative mx-auto" href="project" data-aos="fade-up" data-aos-delay="100">
                                <span class="img d-block position-relative mb-3 mb-md-4">
                                    <span class="jqimgFill d-block">
                                        <img src="styles/images/projects/11.jpg" alt="同興營造">
                                    </span>
                                </span>
                                <span class="text d-block position-absolute w-100">
                                    <span class="title d-block font-weight-bold">七星水利會</span>
                                    <span class="area pt-2 pb-3">新北市 樹林區</span>
                                    <span class="date d-block lato font-weight-bold text-gray969696 position-relative">2011 / 11 / 14</span>
                                    <span class="flex-center w60 h60 bg-green0BBD6E rounded-circle mx-auto mt-5">
                                        <img src="styles/images/projects/plus.png" alt="同興營造">
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-5">
                            <h3 class="hidden">華霖謙悅</h3>
                            <a class="item d-block position-relative mx-auto" href="project" data-aos="fade-up" data-aos-delay="150">
                                <span class="img d-block position-relative mb-3 mb-md-4">
                                    <span class="jqimgFill d-block">
                                        <img src="styles/images/projects/12.jpg" alt="同興營造">
                                    </span>
                                </span>
                                <span class="text d-block position-absolute w-100">
                                    <span class="title d-block font-weight-bold">華霖謙悅</span>
                                    <span class="area pt-2 pb-3">新北市 樹林區</span>
                                    <span class="date d-block lato font-weight-bold text-gray969696 position-relative">2011 / 10 / 05</span>
                                    <span class="flex-center w60 h60 bg-green0BBD6E rounded-circle mx-auto mt-5">
                                        <img src="styles/images/projects/plus.png" alt="同興營造">
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="pt-md-3">
                        <?php include "pageElement.php"; ?>
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