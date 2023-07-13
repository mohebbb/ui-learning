<?php
function fa_num($number)
{
    if(!is_numeric($number) || empty($number))
    $en = array("0","1","2","3","4","5","6","7","8","9");
    $fa = array("۰","۱","۲","۳","۴","۵","۶","۷","۸","۹");
    return str_replace($en, $fa, $number);
}
?>

<head>
    <link rel="stylesheet" href="./CSS/header.css">
    <script src="./JS/all.min.js"></script>
</head>

<body dir="rtl">
    <header class="header">
        <div class="right-head">
            <a href="#" class="icon menu-icon" onclick="shwoMenu()" id="1">
                <i class="fa-solid fa-bars-staggered fa-xl"></i>
            </a>
            <div class="menubar-and-filter">
                <div class="menubar" id="menubar">
                    <i class="fas fa-close fa-xl " onclick="hideMenu();" id="hide-menu" ></i>
                    <div class="menubar-title">
                        <h2>سامانه‌ی آموزش مجازی خادمان ۳۱۳</h2>
                    </div>
                    
                    <ul>
                        <!-- خانه -->
                        <li>
                            <a href="./">
                                <div class="menubar-item">
                                    <div class="menubar-item-right">
                                        <i class="fas fa-home"></i>
                                        <div class="menubar-item-text">
                                            خانه    
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- درس ها -->
                        <li id="course">
                            <!-- عنوان درس ها -->
                                
                            <div class="menubar-item"  onclick="showHideCourse()">
                                <div class="menubar-item-right">
                                    <i class="fas fa-book-open"></i>
                                    <div class="menubar-item-text">
                                        درس‌ها
                                    </div>
                                </div>    
                                <div>
                                    <i class="fas fa-angle-down"  id="showCourse"></i>
                                    <i class="fas fa-angle-up hide-child" id="hideCourse"></i>
                                </div>
                            </div>    


                            <!-- زیرمجموعه درس ها -->
                            <ul class="menu-child-title">
                                <li class="child-part">
                                    <a href="./yourCourses.php">همه درس‌ها</a>
                                </li>

                                <li class="child-part">
                                    <a href="./course.php">مباحثی پیرامون امامت</a>
                                    <!-- <i class="fas fa-angle-down"></i> -->
                                    <!-- <ul>
                                        <a href="#"><li >بخش اول - علم حقیقی و تایید شده از جانب قرآن.</li></a>
                                        <a href="#"><li>بخش دوم</li></a>
                                        <a href="#"><li>بخش سوم</li></a>
                                        <a href="#"><li>بخش چهارم</li></a>
                                        <a href="#"><li>بخش پنجم</li></a>
                                    </ul> -->
                                </li>
                                <li class="child-part">
                                    <a href="#">مقدمه اعتقادات</a>
                                </li>
                                    <!-- <i class="fas fa-angle-down"></i> -->
                                    <!-- <ul>
                                        <li>بخش اول</li>
                                        <li>بخش دوم</li>
                                        <li>بخش سوم</li>
                                        <li>بخش چهارم</li>
                                        <li>بخش پنجم</li>
                                    </ul> -->
                                </li>
                            </ul>                             
                        </li>

                        <!-- گزارش ها -->
                        <li id="reports">
                            <div class="menubar-item" onclick="showHideReports()">
                                <div class="menubar-item-right">
                                    <i class="fas fa-calendar-check"></i>
                                    <div class="menubar-item-text">
                                        گزارش‌ها   
                                    </div>
                                </div>
                                <div>
                                    <i class="fas fa-angle-down" id="showReports"></i>
                                    <i class="fas fa-angle-up hide-child"  id="hideReports"></i>
                                </div>
                            </div>
                            <ul class="menu-child-title">
                                <li class="child-part">
                                    <a href="./addReport.php">ارسال گزارش جدید</a>
                                </li>
                                <li class="child-part">
                                    <a href="./Reports.php">گزارش‌های شما</a>
                                </li>
                                <!-- <li class="child-part">
                                    <a href="../PHP\yourReports.php">گزارش‌های شما</a>
                                </li> -->
                            </ul>
                        </li>

                        <!-- پرسش و پاسخ -->
                        <li>
                            <div class="menubar-item" onclick="updateMes();">
                                <div class="menubar-item-right">
                                    <i class="fas fa-message"></i>
                                    <div class="menubar-item-text">
                                        پرسش و پاسخ
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!-- مرور مباحث -->
                        <li>
                            <div class="menubar-item" onclick="updateMes();">
                                <div class="menubar-item-right">
                                    <i class="fas fa-retweet "></i>
                                    <div class="menubar-item-text">
                                        مرور مباحث
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!-- پروفایل شما -->
                        <li>
                            <div class="menubar-item" onclick="updateMes();">
                                <div class="menubar-item-right">
                                    <i class="fas fa-user "></i>
                                    <div class="menubar-item-text">
                                        پروفایل شما
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    
                </div>
                <a href="#" onclick="hideMenu();">
                    <div id="filter" >
                    </div>
                </a>
            </div>

            <div class="hi-and-date">
                <div class="hi">
                    سلام محمد علی عزیز! 👋 
                </div>
                <div class="date" style="font-feature-settings: 'ss01';">
                <script src="./JS/date.js"></script>
                </div>
            </div> 
        </div>
        <div class="left-head">
            <a href="#" class="log-out icon">
                <i class="fa-solid fa-right-from-bracket fa-xl"></i>
            </a>
           
        </div>
            
    </header>
   
    <script src="./JS/function.js"></script>
</body>
</html>