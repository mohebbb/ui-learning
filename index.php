<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سامانه خادمان 313</title>
    <link rel="icon" href="./img/313 icon.ico">
    <link rel="stylesheet" href="./CSS/reset200802.css">
    <link rel="stylesheet" href="./Fonts/vazirmatn/Vazirmatn-font-face.css">
    <link rel="stylesheet" href="./CSS/index.css">

</head>
<body dir="rtl" class="continer">
    <!-- <div class="">
        <iframe src="header.html" frameborder="0" class="ifram"></iframe>
    </div> -->
    
    <?php
    include './include\header.php';
    ?>
    

    
    <main>
        <div>
            <img src="./img/elias313_40.jpg" alt="الهم عجل لولیک الفرج" class="headImg">
        </div>

        <div class="recentCourse">
            <h2 class="titr">آخرین مشاهده:</h2>   
            <div class="course">
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
        </div>

        <div class="recentReport">
            <h2 class="titr">گزارش‌های اخیر شما:</h2>
            <div id="table">
                <table>
                    <thead>
                        <tr>
                            <th>ردیف</th>
                            <th>موضوع</th>
                            <th>تاریخ</th>
                            <th>درس</th>
                            <th>وضعیت</th>
                            <th>نمره</th>
                            <th>نظر</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>۱</td>
                            <td>خلاصه جلسه</td>
                            <td>۱۴۰۱/۰۷/۲۸ ۱۴:۲۵</td>
                            <td>دوره ارتقاء مدرسین</td>
                            <td>تاید</td>
                            <td>خیلی خوب</td>
                            <td>دارد</td>
                        </tr>
                        <tr>
                            <td>۲</td>
                            <td>خلاصه جلسه</td>
                            <td>۱۴۰۱/۰۷/۲۸ ۱۴:۲۵</td>
                            <td>دوره ارتقاء مدرسین</td>
                            <td>تاید</td>
                            <td>خیلی خوب</td>
                            <td>دارد</td>
                        </tr>
                        <tr>
                            <td>۳</td>
                            <td>خلاصه جلسه</td>
                            <td>۱۴۰۱/۰۷/۲۸ ۱۴:۲۵</td>
                            <td>دوره ارتقاء مدرسین</td>
                            <td>تاید</td>
                            <td>خیلی خوب</td>
                            <td>دارد</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
    </main>

    <?php
    include './include\footer.php';
    ?>

    
</body>
</html>