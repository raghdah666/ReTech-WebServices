$(document).ready(function () {
    // دالة لتحديث النصوص بناءً على ملف JSON
    function setLang(dictionary) {
        $("[data-translate]").each(function () {
            const key = $(this).data("translate");
            if (dictionary[key]) {
                $(this).text(dictionary[key]);
            }
        });
    }

    // دالة لتحميل ملف JSON
    // التأكد من تحميل القاموس بشكل صحيح
    async function loadJSON(file) {
        try {
            const response = await fetch(file);
            if (!response.ok) throw new Error(`HTTP error! status: ${response.status}`);
            const data = await response.json();
            return data.dictionary?.arabic || {}; // جلب القاموس العربي إذا لم يتم تحديد اللغة
        } catch (error) {
            console.error("Error loading JSON:", error);
            return {};
        }
    }


    // دالة لتحديث ملفات CSS واللغة
    async function changeLanguage(language) {
        const styleLink = document.getElementById("style");
        const bootstrapLink = document.getElementById("bootstrap");

        // إعداد مسارات ملفات CSS
        const cssFiles = {
            en: {
                style: "css/ltr_style.css",
                bootstrap: "css/ltr_bootstrap.min.css",
            },
            ar: {
                style: "css/style.css",
                bootstrap: "css/bootstrap.min.css",
            },
        };

        if (cssFiles[language]) {
            styleLink.href = cssFiles[language].style;
            bootstrapLink.href = cssFiles[language].bootstrap;
        } else {
            console.warn("Language not supported:", language);
            return;
        }

        // تحميل ملف اللغة وتحديث النصوص
        const dictionary = await loadJSON(`js/${language}.json`);
        setLang(dictionary);
        if (dictionary.alerts) {
            window.currentDictionary = dictionary;
        } else {
            console.warn("No alerts found in the dictionary file");
        }
        // حفظ اللغة المختارة في Local Storage
        localStorage.setItem("selectedLanguage", language);
    }

    // استرجاع اللغة المختارة من Local Storage أو استخدام اللغة الافتراضية
    const defaultLanguage = "ar";
    const savedLanguage = localStorage.getItem("selectedLanguage") || defaultLanguage;
    changeLanguage(savedLanguage);

    // إعداد معالجات النقر لتغيير اللغة
    $(".lang").on("click", () => changeLanguage("en"));
    $(".langar").on("click", () => changeLanguage("ar"));

    document.getElementById("contactForm").addEventListener("submit", async function(event) {
    event.preventDefault(); // منع إعادة التحميل الافتراضي للنموذج

    const formData = new FormData(this);

try {
    const response = await fetch("index.php", {
        method: "POST",
        body: formData
    });
    const data = await response.text();

    const successTitle = window.currentDictionary?.alerts?.successTitle || "Success";
    const successText = window.currentDictionary?.alerts?.successText || "Your project details have been submitted successfully!";
    const errorTitle = window.currentDictionary?.alerts?.errorTitle || "Error";
    const errorText = window.currentDictionary?.alerts?.errorText || "Failed to submit. Please try again later.";

    if (data.includes("success")) {
        Swal.fire({
            icon: 'success',
            title: successTitle,
            text: successText,
            showConfirmButton: false,
            timer: 2000
        }).then(() => {
            this.reset(); // إعادة تعيين النموذج
        });
    } else {
        Swal.fire({
            icon: 'error',
            title: errorTitle,
            text: errorText
        });
    }
} catch (error) {
    console.error('Error:', error);
    Swal.fire({
        icon: 'error',
        title: errorTitle,
        text: errorText
    });
}
});
});