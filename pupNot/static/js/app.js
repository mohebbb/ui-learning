// دیالوگ باکس ها

const success = document.getElementById("success");
const error = document.getElementById("error");
const warning = document.getElementById("warning");
const info = document.getElementById("info");
const question = document.getElementById("question");

success.addEventListener("click", () => {
    cuteAlert({
        type: "success",
        title: "موفقیت آمیز",
        message: "این یک پیغام موفقیت آمیز است",
        buttonText: "باشه",
        closeStyle: "circle"
    })
});

error.addEventListener("click", () => {
    cuteAlert({
        type: "error",
        title: "خطا",
        message: "این یک پیغام خطا است",
        buttonText: "باشه",
        closeStyle: "circle"
    })
});

warning.addEventListener("click", () => {
    cuteAlert({
        type: "warning",
        title: "هشدار",
        message: "این یک پیغام هشدار است",
        buttonText: "باشه",
        closeStyle: "circle"
    })
});

info.addEventListener("click", () => {
    cuteAlert({
        type: "info",
        title: "اطلاعات",
        message: "این یک پیغام اطلاعات است",
        buttonText: "باشه",
        closeStyle: "circle"
    })
});

question.addEventListener("click", () => {
    cuteAlert({
        type: "question",
        title: "سوالی",
        message: "این یک پیغام سوالی است",
        confirmText: "حله",
        cancelText: "لغو",
        closeStyle: "circle"
    }).then((e) => {
        if (e == "confirm") alert("تایید شد");
        else alert("لغو شد")
    });
});


// نوتیفیکیشن ها

const ts_success = document.getElementById("ts-success");
const ts_error = document.getElementById("ts-error");
const ts_warning = document.getElementById("ts-warning");
const ts_info = document.getElementById("ts-info");

ts_success.addEventListener("click", () => {
    cuteToast({
        type: "success",
        message: "این یک نوتیفیکیشن موفقیت آمیز است",
        timer: "4500"
    })
});

ts_error.addEventListener("click", () => {
    cuteToast({
        type: "error",
        message: "این یک نوتیفیکیشن خطا است",
        timer: "4500"
    })
});

ts_warning.addEventListener("click", () => {
    cuteToast({
        type: "warning",
        message: "این یک نوتیفیکیشن هشدار است",
        timer: "4500"
    })
});

ts_info.addEventListener("click", () => {
    cuteToast({
        type: "info",
        message: "این یک نوتیفیکیشن اطلاعات است",
        timer: "4500"
    })
});