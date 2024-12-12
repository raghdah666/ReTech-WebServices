<?php
require 'vendor/autoload.php'; 
require 'sendEmail.php';
include('server.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $projectName = $_POST['progect_name'] ?? '';
    $clientName = $_POST['name'] ?? '';
    $mobile = $_POST['mobile'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['progect_description'] ?? '';

    // تحقق من صحة الإدخال (يمكنك توسيع التحقق)
    if (empty($projectName) || empty($clientName) || empty($mobile) || empty($message) || empty($email)) {
        echo 'error';
        exit;
    }

    // استدعاء دالة إرسال البريد
    $result = sendEmail($projectName, $clientName, $message, $mobile, $email);
    echo $result;
    exit; // التأكد من عدم تنفيذ أي شيء بعد هذه النقطة
}
?>


<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Edu+TAS+Beginner:wght@400..700&family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link rel="stylesheet" href="lib/animate/animate.min.css"/>
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

 
   
        <!-- Customized Bootstrap Stylesheet -->
        <link id="bootstrap"  rel="stylesheet" href="css/bootstrap.min.css">

        <!-- Template Stylesheet -->
        <link id ="style"  rel="stylesheet" href="css/style.css">

        <link href="https://fonts.cdnfonts.com/css/marhey" rel="stylesheet">
        <script id="json"></script>  
        
        <title data-translate="_title">ReTech | Web development</title>

    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 end-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <div class="container-fluid nav-section border-0 marhey" style="direction: ltr;">
            <nav class="navbar navbar-light">
                <div class="navbar-nav flex-column">
                    <a href="#pigraHome" class="nav-item nav-link active"><span class="fa fa-home"></span><b data-translate="_home">الرئيسية</b></a>
                    <a href="#pigraSkills" class="nav-item nav-link"><span class="far fa-address-card"></span><b data-translate="_skills"> من نحن</b> </a>
                    <a href="#pigraService" class="nav-item nav-link"><span class="fab fa-servicestack"></span><b data-translate="_services">الخدمات</b> </a>
                    <a href="#pigraBlog" class="nav-item nav-link"><span class="fa fa-blog"></span> <b data-translate="_portfolio"> معرض الاعمال</b></a>
                    <a href="#pigraContact" class="nav-item nav-link"><span class="fas fa-address-book"></span><b data-translate="_contact">تواصل معنا</b> </a>
                </div>
            </nav>
        </div>
        <!-- Navbar End -->

        <!-- Header Start -->
        <div class="container-fluid marhey" id="pigraHome">
            <div class="container marhey">
                <div class="row g-0">
                    <div class="col-12 col-lg-3" style=" position: relative;">
                        <div class="header-content bg-dark h-100 pt-6 pe-6 pb-6">
                                <a href="#" class="btn btn-light lang me-3">English</a>   
                                <a href="#" class="btn btn-light langar">العربية</a>   

                            <a href="index.html" class="navbar-brand d-inline-flex pb-5 wow fadeInUp" data-wow-delay="0.1s">
                                <h1 class="text-white display-6 mb-0  b">ReTech|ريتيك</h1>
                            </a>
                            <h5 class="text-white sub-title" data-translate="_im">👋</h5>
                            <h6 class="display-6 mb-4 text-white pt-4" data-translate="_developer">مطوّر ويب</h6>

                        </div>
                    </div>
                    <div class="col-12 col-lg-9">
                        <div class="header-img d-flex h-100 pt-6 ps-6 pb-6">
                            <div class="row g-5">
                                <div class="col-xl-6 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="bg-custom p-4" >
                                        <img src="img/p0.jpg" class="img-fluid w-100 h-img" alt="Image">
                                    </div>
                                </div>
                                <div class="col-xl-6 wow fadeInUp" data-wow-delay="0.3s">
                                    <p class="mb-4 mt-4"  data-translate="_me">👋 مرحباً ، انا مبرمج متخصص في تطوير الويب وتطبيقات الموبايل.
                                    </p>
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="fas fa-envelope text-primary me-3"></i>
                                        <p class="text-dark mb-0">raghdah.rz@gmail.com</p>
                                    </div>
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="fa fa-phone-alt text-primary me-3"></i>
                                        <p class="text-dark mb-0"dir="ltr">(+972) 595 297090</p>
                                    </div>
                                    <div class="d-flex align-items-center mb-4">
                                        <i class="fab fa-firefox-browser text-primary me-3"></i>
                                        <a class="text-dark mb-0" href="https://retech.wuaze.com" target="_blank" rel="noopener noreferrer">retech.wuaze.com</a>
                                    </div>
                                    <div class="d-flex">
                                        <a class="btn btn-primary btn-sm-square me-3" href="#"  target="_blank"><i class="fab fa-github text-white"></i></a>
                                        <a class="btn btn-primary btn-sm-square me-3" href="#" target="_blank"><i class="fab fa-instagram text-white"></i></a>
                                        <a class="btn btn-primary btn-sm-square me-0" href="#" target="_blank"><i class="fab fa-linkedin-in text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->



        <!-- Skills Start -->
        <div class="container-fluid marhey" id ="pigraSkills">
            <div class="container">
                <div class="row g-0">
                    <div class="col-lg-3">
                        <div class="skills-header h-100 bg-dark pt-6 pe-6 pb-6">
                            <div class="d-flex flex-column justify-content-center wow fadeInUp" data-wow-delay="0.1s">
                                <h3 class="text-white sub-title" data-translate="_skills">المهارات</h3>
                                <h6 class="display-6 text-white mb-0 mt-4 pt-4" data-translate="_ex">My expertise skills</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="skills-content h-100 pt-6 ps-6 pb-6">
                            <div class="row g-4">
                                <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                                    <div class="skills-item text-center rounded p-4 h-100 wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="text-primary text-center mb-3"><span class="fab fa-wordpress fa-3x"></span></div>
                                        <div class="counter-counting d-flex justify-content-center">

                                        </div>
                                        <p class="mb-0">WordPress</p>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                                    <div class="skills-item text-center rounded p-4 h-100 wow fadeInUp" data-wow-delay="0.3s">
                                        <div class="text-primary text-center mb-3"><span class="fab fa-fire fa fa-3x"></span></div>
                                        <div class="counter-counting d-flex justify-content-center">
                  
                                        </div>
                                        <p class="mb-0">Codeigniter</p>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                                    <div class="skills-item text-center rounded p-4 h-100 wow fadeInUp" data-wow-delay="0.5s">
                                        <div class="text-primary text-center mb-3"><span class="fab fa-laravel fa-3x"></span></div>
                                        <div class="counter-counting d-flex justify-content-center">
                                
                                        </div>
                                        <p class="mb-0">Laravel</p>
                                    </div>
                                </div>

                                <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                                    <div class="skills-item text-center rounded p-4 h-100 wow fadeInUp" data-wow-delay="0.3s">
                                        <div class="text-primary text-center mb-3"><span class="fab fa-html5 fa-3x"></span></div>
                                        <div class="counter-counting d-flex justify-content-center">
                                    
                                        </div>
                                        <p class="mb-0">HTML & CSS</p>
                                    </div>
                                </div>

                                <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                                    <div class="skills-item text-center rounded p-4 h-100 wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="text-primary text-center mb-3"><span class="fab fa-js-square fa-3x"></span></div>
                                        <div class="counter-counting d-flex justify-content-center">
                                      
                                        </div>
                                        <p class="mb-0">JavaScript</p>
                                    </div>
                                </div>
      

                                <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                                    <div class="skills-item text-center rounded p-4 h-100 wow fadeInUp" data-wow-delay="0.7s">
                                        <div class="text-primary text-center mb-3"><span class="fab fa-node fa-3x"></span></div>
                                        <div class="counter-counting d-flex justify-content-center">
                                 
                                        </div>
                                        <p class="mb-0">Node.js</p>
                                    </div>
                                </div>

                                <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                                    <div class="skills-item text-center rounded p-4 h-100 wow fadeInUp" data-wow-delay="0.7s">
                                        <div class="text-primary text-center mb-3"><span class="fab fa-react fa-3x"></span></div>
                                        <div class="counter-counting d-flex justify-content-center">
                                     
                                        </div>
                                        <p class="mb-0">React.js</p>
                                    </div>
                                </div>

                                <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                                    <div class="skills-item text-center rounded p-4 h-100 wow fadeInUp" data-wow-delay="0.7s">
                                        <div class="text-primary text-center mb-3"><span class="fab fa-database fa fa-3x"></span></div>
                                        <div class="counter-counting d-flex justify-content-center">
                                     
                                        </div>
                                        <p class="mb-0">SQL</p>
                                    </div>
                                </div>
                                
                                <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                                    <div class="skills-item text-center rounded p-4 h-100 wow fadeInUp" data-wow-delay="0.7s">
                                        <div class="text-primary text-center mb-3"><span class="fab fa-git fa-3x"></span></div>
                                        <div class="counter-counting d-flex justify-content-center">
                                     
                                        </div>
                                        <p class="mb-0">Git</p>
                                    </div>
                                </div>         
                                
                                
                                <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                                    <div class="skills-item text-center rounded p-4 h-100 wow fadeInUp" data-wow-delay="0.7s">
                                        <div class="text-primary text-center mb-3"><span class="fab fa-globe fa fa-3x"></span></div>
                                        <div class="counter-counting d-flex justify-content-center">
                                     
                                        </div>
                                        <p class="mb-0">Web Hosting</p>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Skills End -->


        <!-- Service Start -->
        <div class="container-fluid marhey" id="pigraService">
            <div class="container">
                <div class="row g-0">
                    <div class="col-lg-3">
                        <div class="service-header h-100 bg-dark pt-6 pe-6 pb-6">
                            <div class="d-flex flex-column justify-content-center wow fadeInUp" data-wow-delay="0.1s">
                                <p class="text-white sub-title"data-translate="_services">الخدمات</p>
                                <h1 class="display-6 text-white mb-0 pt-4" data-translate="_do">What we do for you</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="service-content h-100 pt-6 ps-6 pb-6">
                            <div class="row g-4">
                                <div class="col-12">
                                    <div class="service-item p-4 wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="row g-4 align-items-center">
                                            <div class="col-xl-2">
                                                <i class="fas fa-bezier-curve fa-3x"></i>
                                            </div>
                                            <div class="col-xl-3">
                                                <a href="#" class="h4 mb-0" data-translate="_design">تصميم واجهات المستخدم</a>
                                            </div>
                                            <div class="col-xl-4">
                                                <p class="mb-0" data-translate="_desdes">Design attractive and easy-to-use interfaces that provide an excellent user experience.
                                                </p>
                                            </div>
                                            <div class="col-xl-3">
                                                <p><i class="fa fa-check me-2" ></i><b data-translate="_Interactive"> Interactive</b></p>
                                                <p><i class="fa fa-check me-2"></i><b data-translate="_responsive"> responsive</b></p>
                                                <p><i class="fa fa-check me-2"></i><b  data-translate="_high"> High performance</b></p>
                                                <p class="mb-0"><i class="fa fa-check me-2"></i><b data-translate="_compatibility" >Compatibility with different platforms</b></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="service-item p-4 wow fadeInUp" data-wow-delay="0.3s">
                                        <div class="row g-4 align-items-center">
                                            <div class="col-xl-2">
                                                <i class="fas fa-laptop-code fa-3x"></i>
                                            </div>
                                            <div class="col-xl-3">
                                                <a href="#" class="h4 mb-0" data-translate="_web">تصميم وتطوير مواقع الويب</a>
                                            </div>
                                            <div class="col-xl-4">
                                                <p class="mb-0" data-translate="_webdes">خدمة تطوير مواقع ويب متجاوبة وعصرية باستخدام لغات البرمجة وأطر عمل قوية 
                                                </p>
                                            </div>
                                            <div class="col-xl-3">
                                                <p><i class="fa fa-check me-2"></i><b data-translate="_responsive"> responsive</b></p>
                                                <p><i class="fa fa-check me-2"></i><b  data-translate="_high"> High performance</b></p>
                                                <p><i class="fa fa-check me-2"></i><b data-translate="_hs" >High Securitys</b></p>
                                                <p><i class="fa fa-check me-2"></i><b data-translate="_api" ></b></p>
                                                <p><i class="fa fa-check me-2"></i><b data-translate="_ch" ></b></p>
                                                <p class="mb-0"><i class="fa fa-check me-2"></i><b data-translate="_B_E" ></b></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="service-item p-4 wow fadeInUp" data-wow-delay="0.5s">
                                        <div class="row g-4 align-items-center">
                                            <div class="col-xl-2">
                                                <i class="fab fa-app-store fa-3x"></i>
                                            </div>
                                            <div class="col-xl-3">
                                                <a href="#" class="h4 mb-0" data-translate="_app">Mobile Application</a>
                                            </div>
                                            <div class="col-xl-4">
                                                <p class="mb-0" data-translate="_appdes">تصميم وتطوير تطبيقات موبايل مبتكرة وفعالة لتعمل على أنظمة Android 
                                                </p>
                                            </div>
                                            <div class="col-xl-3">
                                                <p><i class="fa fa-check me-2"></i><b  data-translate="_high"> High performance</b></p>
                                                <p><i class="fa fa-check me-2"></i><b data-translate="_iw" ></b></p>
                                                <p><i class="fa fa-check me-2"></i><b data-translate="_cu" ></b></p>
                                                <p class="mb-0"><i class="fa fa-check me-2"></i><b data-translate="_eu" ></b></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- Portfolio Start -->
        <div class="container-fluid marhey" id="pigraBlog">
            <div class="container">
                <div class="row g-0">
                    <div class="col-lg-3">
                        <div class="portfolio-header h-100 bg-dark pt-6 pe-6 pb-6">
                            <div class="d-flex flex-column justify-content-center wow fadeInUp" data-wow-delay="0.1s">
                                <p class="text-white sub-title" data-translate="_portfolio">المعرض</p>
                                <h1 class="display-6 text-white mb-0 pt-4" data-translate="_porto">أحدث اعمالنا</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="portfolio-content h-100 pt-6 ps-6 pb-6">
                        <div class="portfolio-item py-5  wow fadeInUp" data-wow-delay="0.1s">
                                <div class="row g-4 align-items-center">
                                    <div class="col-xl-6">
                                    <h1 class="display-6 mb-0">Gunaydin restaurant</h1>
                                    <h4 class="text-body"data-translate="_wpstore" >Restaurant site to display info &  menu</h4>
                                    </div>
                                    <div class="col-9 col-xl-4">
                                        <div class="portfolio-img">
                                            <div class="portfolio-img-inner">
                                                <img src="img/image.png" class="img-fluid" alt="Image">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-xl-2">
                                        <div class="view-img">
                                            <!-- الزر لفتح المعرض -->
                                            <a href="img/image.png" class="btn btn-primary btn-lg-square" data-lightbox="Portfolio" title="<br>يرجى الضغط على يمين الصورة لعرض صفحات المشروع أو زيارة رابط<br><br> <a href='https://github.com/raghdah666/restaurant-page-Menu.git' target='_blank'> مستودع المشروع في Github</a><br>">
                                                <i class="fas fa-plus"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <!-- الصور الأخرى في نفس المعرض -->
                                    <div style="display: none;"> 
                                        <a href="img/Screenshot_gunaydin1.jpeg" data-lightbox="Portfolio" title="الصفحة الرئيسية"></a>
                                        <a href="img/Screenshot_gunaydin.jpeg" data-lightbox="Portfolio" title="قائمة الطعام \ Menu"></a>
                                    </div>

                                </div>
                            </div>                            <div class="portfolio-item py-5  wow fadeInUp" data-wow-delay="0.1s">
                                <div class="row g-4 align-items-center">
                                    <div class="col-xl-6">
                                    <h1 class="display-6 mb-0">e-learning website</h1>
                                    <h4 class="text-body"data-translate="_wpstore" >Codeigniter Dynamic Website</h4>
                                    </div>
                                    <div class="col-9 col-xl-4">
                                        <div class="portfolio-img">
                                            <div class="portfolio-img-inner">
                                                <img src="img/Untitled2.png" class="img-fluid" alt="Image">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-xl-2">
                                        <div class="view-img">
                                            <!-- الزر لفتح المعرض -->
                                            <a href="img/Untitled2.png" class="btn btn-primary btn-lg-square" data-lightbox="Portfolio" title="<br>يرجى الضغط على يمين الصورة لعرض تفاصيل المشروع والخدمات المضافةأو زيارة رابط<br><br> <a href='https://collection.my-style.in/' target='_blank'>Live Demo|معاينة</a><br>">
                                                <i class="fas fa-plus"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <!-- الصور الأخرى في نفس المعرض -->
                                    <div style="display: none;"> 
                                        <a href="img/Untitled2.png" data-lightbox="Portfolio" title="اقتباس عن الصورة الثانية"></a>
                                        <a href="img/Untitled2.png" data-lightbox="Portfolio" title="اقتباس عن الصورة الثالثة"></a>
                                        <a href="img/Untitled2.png" data-lightbox="Portfolio" title="اقتباس عن الصورة الرابعة"></a>
                                    </div>

                                </div>
                            </div>
                            <div class="portfolio-item py-5  wow fadeInUp" data-wow-delay="0.1s">
                                <div class="row g-4 align-items-center">
                                    <div class="col-xl-6">
                                    <h1 class="display-6 mb-0">WordPress (woocommerce)</h1>
                                    <h4 class="text-body"data-translate="_wpstore" > collecTion Store</h4>
                                    </div>
                                    <div class="col-9 col-xl-4">
                                        <div class="portfolio-img">
                                            <div class="portfolio-img-inner">
                                                <img src="img/Untitled.png" class="img-fluid" alt="Image">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-xl-2">
                                        <div class="view-img">
                                            <!-- الزر لفتح المعرض -->
                                            <a href="img/Untitled.png" class="btn btn-primary btn-lg-square" data-lightbox="Portfolio" title="<br>يرجى الضغط على يمين الصورة لعرض تفاصيل المشروع والخدمات المضافةأو زيارة رابط<br><br> <a href='https://collection.freesite.online/' target='_blank'>Live Demo|معاينة</a><br>">
                                                <i class="fas fa-plus"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <!-- الصور الأخرى في نفس المعرض -->
                                    <div style="display: none;"> 
                                        <a href="img/Untitled.png" data-lightbox="Portfolio" title="اقتباس عن الصورة الثانية"></a>
                                        <a href="img/Untitled.png" data-lightbox="Portfolio" title="اقتباس عن الصورة الثالثة"></a>
                                        <a href="img/Untitled.png" data-lightbox="Portfolio" title="اقتباس عن الصورة الرابعة"></a>
                                    </div>

                                </div>
                            </div>
                   
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio End -->




        <!-- Contact Start -->
        <div class="container-fluid marhey" id="pigraContact">
            <div class="container">
                <div class="row g-0">
                    <div class="col-lg-3">
                        <div class="contact-header h-100 bg-dark pt-6 pe-6 pb-6">
                            <div class="d-flex flex-column justify-content-center wow fadeInUp" data-wow-delay="0.1s">
                                <p class="text-white sub-title" data-translate="_contact">Contact Me</p>
                                <h1 class="display-6 text-white mb-0 pt-4" data-translate="_lets">Let’s Start A New Project</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                       <div class="contact-content h-100 pt-6 ps-6 pb-6">
                            <div class="bg-light p-4">
                                <div class="row g-5">
                                    <div class="col-xl-5 wow fadeInUp" data-wow-delay="0.1s">
                                        <p class="mb-4" data-translate="_let">يرجى ترك تفاصيل المشروع المطلوب ومعلومات الاتصال وسيتم التواصل معك في أقرب وقت ممكن.</p>
                                 
                                        <div class="d-flex mb-4">
                                            <div class="btn-xl-square bg-primary text-white me-3">
                                                <i class="fas fa-envelope"></i>
                                            </div>
                                            <div>
                                                <h4 data-translate="_mail">Mail Us</h4>
                                                <p class="mb-0">raghdah.rz@gmail.com</p>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <div class="btn-xl-square bg-primary text-white me-3">
                                                <i class="fa fa-phone-alt"></i>
                                            </div>
                                            <div>
                                                <h4 data-translate="_mobile">Telephone</h4>
                                                <p class="mb-0" dir="ltr">(+972) 595 297090</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-7 wow fadeInUp" data-wow-delay="0.3s">
                                        <div>
                                        <form method="post" action="index.php" id="contactForm">
                                <div class="row g-3">
                                    <div class="col-lg-12 col-xl-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control border-0" id="name" placeholder="Your Name" name="name" required>
                                            <label for="name">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-xl-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control border-0" id="email" placeholder="Your Email" name="email" required>
                                            <label for="email">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-xl-6">
                                        <div class="form-floating">
                                            <input type="tel" class="form-control border-0" id="phone" placeholder="Your Phone" name="mobile" required>
                                            <label for="phone">Your Phone</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-xl-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control border-0" id="project" placeholder="Project Name" name="progect_name" required>
                                            <label for="project">Name of Project</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control border-0" placeholder="Leave a message here" id="message" style="height: 120px" name="progect_description" required></textarea>
                                            <label for="message">Project Description</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit" name="send">Send</button>
                                    </div>
                                </div>
                            </form>



                                        </div>
                                    </div>
                              
                                </div>
                            </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->


        <!-- Footer Start -->
        <div class="container-fluid marhey footer bg-dark -0">
            <div class="container wow fadeIn" data-wow-delay="0.1s">
                <div class="row g-0">
                    <div class="col-12">
                       <div class="footer-content h-100 pt-6 ps-6 pb-6">
                            <div class="row g-4 align-items-center">
                                <div class="col-12 text-center">
                                    <div class="d-flex justify-content-center">
                                        <a class="btn btn-light btn-md-square me-3" href=""><i class="fab fa-github"></i></a>
                                        <a class="btn btn-light btn-md-square me-3" href=""><i class="fab fa-instagram"></i></a>
                                        <a class="btn btn-light btn-md-square me-0" href=""><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <span class="text-body"><a href="#" class=" text-white"><i class="fas fa-copyright text-body me-2 "></i>ReTech</a>, All right reserved.</span>
                                </div>
                                <div class="col-12 text-center text-body">
                                    <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                                    <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                                    <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                                    Designed By <a class=" text-white" href="#">Raghdah zaki</a> Distributed By <a class=" text-white" href="#">ReTech</a>
                                </div>
                            </div>
                       </div>        
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
                <!-- sweetatert -->
         <script src=" lib/sweetatert/sweetalert2.all.min.js"></script>
         <link href="lib/sweetatert/sweetalert2.min.css" rel="stylesheet">

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
        <script src="js/general.js"></script>

       <script>
       
       document.addEventListener("DOMContentLoaded", function () {
         lightbox.option({
        'wrapAround': true,
        'disableScrolling': true,
        'fadeDuration': 600
            });
        });

        </script>

        <script>
        document.addEventListener("DOMContentLoaded", function() {
            const form = document.getElementById("yourFormId"); // استبدل بـ ID النموذج الخاص بك
            form.addEventListener("submit", function() {
                const submitButton = form.querySelector("input[type='submit']"); // أو زر الإرسال الخاص بك
                submitButton.disabled = true; // تعطيل الزر لمنع الإرسال المتكرر
            });
        });
        </script>

    </body>

</html>