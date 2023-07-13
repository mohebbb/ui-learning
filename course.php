<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>درس‌های شما</title>
    <link rel="icon" href="./img/313 icon.ico">
    <link rel="stylesheet" href="./CSS/reset200802.css">
    <link rel="stylesheet" href="./Fonts/vazirmatn/Vazirmatn-font-face.css">
    <link rel="stylesheet" href="./CSS/course.css">
</head>
<body dir="rtl" class="continer">    
    <?php
    include './include\header.php';
    ?>

    <div class="title-frame-div">
        <img src="./upload/img/قاب-عنوان.png" alt="" class="title-frame">
        <h2 class="title">درس قرآن ناطق</h2>
    </div>

    
    <main>
        <div class="main">
            <div class="card">
                <div class="content">
                    <img src=".\upload\img\قرآن ناطق.jpg" alt="درس 1" class="content-img">
                    <div class="description block">
                        <h2 class="description-title">توضیحات:</h2>
                        <div class="description-text">
                            <p>این کتاب به زبانی ساده و گویا، مباحثی را پیرامون موضوع مهم و اساسی امامت، بیان می‌دارد.</p>
                        </div>
                    </div>
                    
                    
                    
                </div>
            </div>
            <div class="card">
                <h2 class="titr">جلسات درس</h2>
                <ul class="sessions">
                    <li class="session">
                        <h2 class="session-number">جلسه اول</h2>
                        <h2 class="session-name">نام جلسه</h2>
                        <div class="arrow">
                            <i class="fas fa-angle-down"></i>
                            <i class="fas fa-angle-up"></i> 
                        </div>
                    </li>
                    
                    <ul>
                        <li class="session session-child-hight">
                            <div class="part-number">
                                <p>۱</p>
                                <span class="underline"></span>
                            </div>
                            <div>
                                <div>
                                    <p>نام بخش</p>
                                </div>
                                <div>
                                    <button class="btn">
                                        مشاهده
                                        <!-- <i class="fa fa-loock"></i> -->
                                    </button>
                                    <div>
                                        <p>زمان</p>
                                        <!-- <i></i> -->
                                    </div>
                                </div>
                        </li>
                    </ul>

                    <li class="session">
                        <h2 class="session-number">جلسه اول</h2>
                        <h2 class="session-name">نام جلسه</h2>
                        <div class="arrow">
                            <i class="fas fa-angle-down"></i>
                            <i class="fas fa-angle-up"></i> 
                        </div>
                    </li>
                    
                    <li class="session">
                        <h2 class="session-number">جلسه اول</h2>
                        <h2 class="session-name">نام جلسه</h2>
                        <div class="arrow">
                            <i class="fas fa-angle-down"></i>
                            <i class="fas fa-angle-up"></i> 
                        </div>
                    </li>
                    
                    <!-- <ul>
                        <li>
                            <div class="files">
                                <div class="video-file block">
                                    <h2 class="block-title">فیلم:</h2>
                                    <div class="video">
                                        <video controls width="100%">
                                            <source src="./upload\videos\زمین تا بالای ابر.mp4" type="video/mp4">
                                        </video>
                                    </div>
                                </div>
        
                                <div class="files-download block">
                                    <h2 class="block-title">فایل‌ها:</h2>
                                    <div>
                                        <a href="./resorce\دعا ۲ - ویرایش ۱ آذر ۱۴۰۱.pdf">
                                            <label class="file-download">
                                                <div class="download-icon">
                                                    <i class="fa fa-download"></i>
                                                </div>
                                                <p>احادیث</p>
                                            </label>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul> -->
                </ul>
            </div>
        </div>
    </main>



    <?php
    include './include\footer.php';
    ?>

    
</body>
</html>