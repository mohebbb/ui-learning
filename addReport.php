<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="cache-control" content="no-cache" > -->
    <title>ارسال گزارش جدید</title>
    <link rel="icon" href="./img/313 icon.ico">
    <link rel="stylesheet" href="./CSS/reset200802.css">
    <link rel="stylesheet" href="./Fonts/vazirmatn/Vazirmatn-font-face.css">
    <link rel="stylesheet" href="./CSS/addReport.css">
</head>
<body>

    <?php
    include './include\header.php';
    ?>
    <form action="#" class="card">
        <div class="elements">
            <div class="div">
                <h2 class="lable">موضوع</h2>
                <input type="text" name="subject" class="ctrlBox ctrl" placeholder="موضوع گزارش را وارد کنید.">
            </div>
            <div class="div">
                <h2 class="lable">عنوان درس</h2>
                <div class="selectBox " >
                    <select name="courseTitle" id="" class="ctrlBox ctrl  select">
                        <option value="">انتخاب عنوان . . .</option>
                        <option value="">مقدمه اعتقادات</option>
                        <option value="">بیان قرآن</option>
                        <option value="">شبیه عرفان شریک شیطان</option>
                    </select>
                    <div class="selectArrow">
                        <div id="arrow">
                            <i class="fas fa-angle-down"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="div">
                <h2 class="lable">متن گزارش</h2>
                <textarea name="" id="reportText" cols="30" rows="10" class="ctrlBox"></textarea>
            </div>
            <div class="div">
                <h2 class="lable">پیوست</h2>
                <div class="uploaderBoxes" id="upBoxes">

                    <div class="uploader">
                        <input type="file" name="upload" id="upload-0" class="upload">
                        
                        <label class="btn ctrlBox ctrl  btnHover" id="btn-0" for="upload-0" onclick="elId(this)">انتخاب فایل</label>

                        <input type="text" readonly class="ctrlBox ctrl fName" id="fName-0" 
                        placeholder="فایلی انتخاب نشده است!" >


                    </div>
                </div>

                <div class="add">
                    <input type="" class="addBtn btnHover" onclick="addUploader()" value="افزودن فایل" readonly >
                </div>
            
            </div>
            <div class="div">
                <h2 class="lable">توضیحات فایل پیوست</h2>
                <textarea name="" id="" cols="30" rows="10" class="ctrlBox"></textarea>
            </div>
            <input type="submit" value="ارسال گزارش" class="btnSub">
        </div>
    </form>

    <?php
    include './include\footer.php';
    ?>

    <script src="JS\function.js"></script>

</body>
</html>