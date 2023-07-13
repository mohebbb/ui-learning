<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>گزارش‌های شما</title>
    <link rel="stylesheet" href="./CSS/reset200802.css">
    <link rel="stylesheet" href="./Fonts/vazirmatn/Vazirmatn-font-face.css">
    <link rel="stylesheet" href="./CSS/Reports.css">
    
</head>
<body dir="rtl" class="body">

    <?php
    include './include\header.php';
    ?>

    <div class="yourReports">
        <a href="./addReport.php" class="btn">ارسال گزارش جدید</a>
        <div class="table-and-title">
            <h3 class="table-title">گزارش‌های شما:</h3>
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

    </div>
    
    <?php
    include './include\footer.php';
    ?>

    <script src="../JS/function.js"></script>

</body>
</html>