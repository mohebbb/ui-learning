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
    <link rel="stylesheet" href="./CSS\yourCourses.css">

</head>
<body dir="rtl" class="continer">    
    <?php
    include './include\header.php';
    ?>
    

    
    <main>
        <div class="course">
            <div class="course-head">
                <div>
                    <h2 class="titr">درس های شما:</h2>
                </div>

                <!-- سرچ -->
                <!-- <div>
                    <input type="text" class="search-course">
                </div> -->
                
            </div>
            <div id="contents">
                <div class="content">
                    <!-- content 1 -->
                    <div class="img">
                        <img src=".\upload\img\قرآن ناطق.jpg" alt="درس 1" class="content-img">
                    </div>
                    <div class="caption">
                        <h3 class="caption-titr">مباحثی پیرامون امامت</h3>
                        <p class="description">این کتاب به زبانی ساده و گویا، مباحثی را پیرامون موضوع مهم و اساسی امامت، بیان می‌دارد.</p>
                    </div>
                    <div class="btn">
                        <a href="#" class="unbutton">مشاهده</a>
                    </div>
                </div>
                <div class="content">
                    <!-- content 1 -->
                    <div class="img">
                        <img src="./upload/img/elias313_21.jpg" alt="درس 2" class="content-img">
                    </div>
                    <div class="caption">
                        <h3 class="caption-titr">مباحثی پیرامون امامت</h3>
                        <p class="description">این کتاب به زبانی ساده و گویا، مباحثی را پیرامون موضوع مهم و اساسی امامت، بیان می‌دارد.</p>
                    </div>
                    <div class="btn">
                        <a href="#" class="unbutton">مشاهده</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php
    include './include\footer.php';
    ?>

    
</body>
</html>