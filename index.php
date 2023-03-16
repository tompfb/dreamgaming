<?php
include 'script-login.php';
include "./conn/connect.php";
@$key_search = $_GET["s"];
if ($key_search) {
    $sql = "SELECT * FROM articles WHERE topic_name LIKE '%" . $key_search . "%' ";
    $q = mysqli_query($conn, $sql) or die("Error in query: $sql " . mysqli_error($conn));
} else {
    $sql = "SELECT * FROM articles ORDER BY id DESC LIMIT 0,6 ";
    $q = mysqli_query($conn, $sql) or die("Error in query: $sql " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="th">

<head>
    <title>dream gaming คาสิโนออนไลน์ ผ่านมือถือ ฝากถอนออโต้ ไม่มีขั่นต่ำ</title>
    <meta name="title" content="dream gaming คาสิโนออนไลน์ ผ่านมือถือ ฝากถอนออโต้ ไม่มีขั่นต่ำ " />
    <meta name="description" content="dream gaming คาสิโนออนไลน์ ผ่านมือถือ DG gaming เกมส์คาสิโน  บริการตลอด 24 ชั่วโมง ถอนถอนไม่มีขั่นต่ำ ระบบ AUTO" />

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="content-language" content="th" />
    <meta http-equiv="content-type" content="text/html;" charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="robots" content="index,follow" />
    <meta name="Author" content="Dream gaming ">
    <meta name="googlebots" content="all">
    <meta name="audience" content="all">
    <meta name="Rating" content="General">
    <meta name="distribution" content="Global">
    <meta name="allow-search" content="yes">

    <meta property="og:locale" content="th_TH" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="dream gaming คาสิโนออนไลน์ ผ่านมือถือ ฝากถอนออโต้ ไม่มีขั่นต่ำ" />
    <meta property="og:description" content="dream gaming คาสิโนออนไลน์ ผ่านมือถือ DG gaming เกมส์คาสิโน  บริการตลอด 24 ชั่วโมง ถอนถอนไม่มีขั่นต่ำ ระบบ AUTO" />
    <meta property="og:url" content="https://www.dreamgaming-789.com/" />
    <meta property="og:site_name" content="Dream gaming" />
    <meta property="og:image" content="./img/logo-gream-gaming.webp" />

    <meta property="twitter:url" content="https://www.dreamgaming-789.com/">
    <meta property="twitter:image" content="./img/logo-gream-gaming.webp">
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="dream gaming คาสิโนออนไลน์ ผ่านมือถือ ฝากถอนออโต้ ไม่มีขั่นต่ำ" />
    <meta name="twitter:description" content="dream gaming คาสิโนออนไลน์ ผ่านมือถือ DG gaming เกมส์คาสิโน  บริการตลอด 24 ชั่วโมง ถอนถอนไม่มีขั่นต่ำ ระบบ AUTO" />
    <meta name="twitter:site" content="Dream gaming">
    <meta name="twitter:creator" content="Dream gaming">

    <link rel="canonical" href="https://www.dreamgaming-789.com/" />
    <link rel="alternate" href="https://www.dreamgaming-789.com/" hreflang="th-TH" />

    <link rel="shortcut icon" href="./favicon.webp" type="image/x-icon" />
    <link rel="icon" href="./favicon.webp" type="image/x-icon" />
    <link rel="apple-touch-icon" href="./favicon.webp" />

    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "url": "https://www.dreamgaming-789.com/",
            "logo": "https://www.dreamgaming-789.com/img/logo-gream-gaming.webp"
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "WebPage",
            "name": "Dream gaming",
            "speakable": {
                "@type": "SpeakableSpecification",
                "xPath": [
                    "/html/head/title",
                    "/html/head/meta[@name='description']/@content"
                ]
            },
            "url": "https://www.dreamgaming-789.com/"
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "WebSite",
            "url": "https://www.dreamgaming-789.com/",
            "name": "Dream gaming",
            "description": "dream gaming คาสิโนออนไลน์ ผ่านมือถือ ฝากถอนออโต้ ไม่มีขั่นต่ำ",
            "potentialAction": [{
                "@type": "SearchAction",
                "target": {
                    "@type": "EntryPoint",
                    "urlTemplate": "https://www.dreamgaming-789.com/?s={search_term_string}"
                },
                "query-input": "required name=search_term_string"
            }]
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "BreadcrumbList",
            "itemListElement": [{
                "@type": "ListItem",
                "position": 1,
                "name": "Dream gaming"
            }]
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Store",
            "image": [
                "https://www.dreamgaming-789.com/img/logo-gream-gaming.webp",
                "https://www.dreamgaming-789.com/img/dreamgaming-img01.webp",
                "https://www.dreamgaming-789.com/img/dreamgaming-img02.webp"
            ],
            "name": "Dream gaming",
            "address": {
                "@type": "PostalAddress",
                "addressCountry": "TH"
            },
            "url": "https://www.dreamgaming-789.com/",
            "priceRange": "฿฿฿",
            "telephone": "+6696-921-9245",
            "openingHoursSpecification": [{
                    "@type": "OpeningHoursSpecification",
                    "dayOfWeek": [
                        "Monday",
                        "Tuesday",
                        "Wednesday",
                        "Thursday",
                        "Friday",
                        "Saturday"
                    ],
                    "opens": "08:00",
                    "closes": "23:59"
                },
                {
                    "@type": "OpeningHoursSpecification",
                    "dayOfWeek": "Sunday",
                    "opens": "08:00",
                    "closes": "23:00"
                }
            ]

        }
    </script>
    <style>
        <?php
        include('bootstrap/bootstrap.css');
        include('css/style.css');
        ?>
    </style>
</head>

<body>
    <header class="main_header">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-1 oder_1">
                    <div class="box_menu">
                        <div class="dropdown">
                            <button onclick="myFunction()" class="dropbtn"><img data-src="./img/icon-menu.webp" class="lazy img-fluid" width="34" height="33" alt="icon menu"></button>
                            <div id="myDropdown" class="dropdown-content">
                                <a href="./">หน้าหลัก</a>
                                <a href="./promotion/">โปรโมชั่น</a>
                                <a href="./download/">ดาวน์โหลด</a>
                                <a href="./entrance/">ทางเข้า</a>
                                <a href="./apply/">สมัครสมาชิก</a>
                                <a href="./getmoney/">ลิงค์รับทรัพย์</a>
                                <a href="./contact/">ติดต่อ</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 text-center oder_3">
                    <div class="btn-bg" style="background-image: url(./img/bg-btn-header.webp);">
                        <a href="http://app.789first.com/login" class="link_h">เข้าสู่ระบบ</a>
                    </div>
                </div>
                <div class="col-lg-3 text-center oder_logo">
                    <a href="./">
                        <img data-src="./img/logo-gream-gaming.webp" class="lazy img-fluid fate-in-out" width="288" height="111" alt="logo gream gaming">
                    </a>
                </div>
                <div class="col-lg-3 text-center oder_4">
                    <div class="btn-bg" style="background-image: url(./img/bg-btn-header.webp);">
                        <a href="http://app.789first.com/register" class="link_h">ทดลองเล่น</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="site-banner" style="overflow-x: hidden;">
        <div class="bg-regis" style="background-image: url(./img/bg-btn.webp);">
            <a href="http://app.789first.com/register" class="link_h">สมัครสมาชิก</a>
        </div>
        <img data-src="./img/banner.webp" class="lazy img-fluid" width="100%" height="100%" alt="banner greaming">
        <div class="container fixd-bottom">
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <img data-src="./img/img-header-01.webp" class="lazy img-fluid" width="455" height="140" alt="img สมัคร">
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <img data-src="./img/img-header-02.webp" class="lazy img-fluid" width="455" height="140" alt="img เติมเงิน">
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <img data-src="./img/img-header-03.webp" class="lazy img-fluid" width="455" height="140" alt="img เข้าเล่น">
                </div>
            </div>
        </div>
    </section>
    <section class="bg-grad" style="overflow-x: hidden;">
        <div class="container-fluid px-0 position-relative">
            <div class="container ">
                <div class="row">
                    <div class="col-sm-12 col-md-4 col-lg-4 my-1 text-center">
                        <img data-src="./img/img-header-04.webp" class="lazy img-fluid" width="289" height="174" alt="ฝาก-ถอน ออโต้">
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4 my-1 text-center">
                        <img data-src="./img/img-header-05.webp" class="lazy img-fluid" width="289" height="174" alt="บริการ 24 ชม.">
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4 my-1 text-center">
                        <img data-src="./img/img-header-06.webp" class="lazy img-fluid" width="289" height="174" alt="มั่นคง ปลอดภัย">
                    </div>
                </div>
                <a href="https://line.me/ti/p/~@789First#~" rel="nofollow" id="line_ad">
                    <img data-src="./img/adline.webp" class="lazy img-fluid fate-in-out" width="120" height="500" alt="adline บริการ 24 ชม.">
                </a>
            </div>
        </div>
    </section>
    <?php
    if (!$key_search) {
    ?>
        <article class="sitecontent">
            <section class="main">
                <div class="container">
                    <div class="heading-bg">
                        <h1>Dream gaming</h1>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <div class="box-content">
                                <p><strong>dream gaming</strong> เว็บคาสิโนออนไลน์ที่ดีที่สุดในประเทศไทย ถือได้มากมีความปลอดภัยและ ความน่าเชื่อถือเป็นอย่างสูงเพราะเราคือผู้ให้บริการด้าน เกมคาสิโนออนไลน์ มาอย่างยาวนานมีต้นกำเนิดอยู่ประเทศกรุงมะนิลา ประเทศฟิลิปปินส์ในปี ค.ศ 2017 ที่ได้รับการตรวจสอบและ ใบรับอนุญาตให้จากหน่วยงาน (Pagcro) ของรัฐฟิลิปปินส์ ที่ได้มุ่งเน้นให้บริการลูกค้าอย่างดีที่สุดเพื่อจะทำให้ผู้เล่นทั้งหลายสามารถเข้าถึงรูปแบบของเกมที่คุ้มค่า เพื่อเป็นผลตอบแทนด้านการสนับสนุนกับโปรโมชั่นและ สิทธิพิเศษต่างๆ ได้อย่างง่ายดายกับการบริการของเกมคาสิโนสดอย่างครบครันด้วยระบบการเดิมพันแบบอัตโนมัติ</p>
                                <p class="mb-0"><strong>dream gaming</strong> มีการเน้นให้กับผู้เล่นสามารถเข้าใช้งานได้กับทุกแพลตฟอร์มพร้อมทั้งมีภาพ แสง สีเสียงอย่างคมชัด รวมถึงความลื่นไหลของภาพอย่างสบายตาให้กับผู้เล่นสามารถเข้าร่วมสนุกได้แบบอัตโนมัติผ่านอุปกรณ์โทรศัพท์มือถือ ที่มีความหลากหลายของเกมไว้คอยบริการสำหรับเล่นผ่านช่องทางออนไลน์ไม่ว่าจะเป็น บาคาร่า รูเล็ต เสือมังกร บาคาร่าวัววัว ที่มาพร้อมกับเทคนิคและ กติกาในการเดิมพันจากทีมงานมืออาชีพคอยดูแลระบบเป็นอย่างดี ที่ถือได้ว่าเป็นการถ่ายทอดสดตลอด 24 ชั่วโมงด้วยการมุ่งเน้นพัฒนาจากสมัยอดีตจนถึงปัจจุบันที่มีการรองรับ HTML5 ด้วยระบบ mobile ในการเล่นผ่านหน้าจอโทรศัพท์มือถือและ แท็บเล็ตที่มุ่งเน้นการพัฒนาอย่างดีเยี่ยมกับการเข้าใช้งานได้อย่างลื่นไหลแบบไม่กระตุกพร้อมมีเสถียรภาพสูงสุดที่ตอบโจทย์แก่ผู้เล่นทั้งหลายได้เป็นอย่างดี</p>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <img data-src="./img/dreamgaming-img01.webp" class="lazy img-max" width="677" height="693" alt="Dream gaming">
                        </div>
                    </div>
                </div>
            </section>
            <section class="secondary my-5">
                <div class="container">
                    <img data-src="./img/dreamgaming-img02.webp" class="lazy img-max" width="970" height="773" alt="Dream gaming">
                    <div class="box-content mt-3">
                        <h2 class=" text-center shadow_gold">ทำไมต้องเล่นเกมกับ dream gaming </h2>
                        <p class="mb-0"><strong>dream gaming</strong> ที่เปิดตัวขึ้นในพ. ศ. 2560 ด้วยการเปิดตัวที่ยิ่งใหญ่และ อลังการทำให้ผู้เล่นได้รับการพัฒนาด้วยเทคโนโลยีการเดิมพันอย่างรวดเร็วและ ตอบโจทย์เนื่องจากว่าสามารถเข้าใช้งานได้ผ่านแอพพลิเคชั่นไม่ว่าจะเป็นโทรศัพท์มือถือ หรืออุปกรณ์คอมพิวเตอร์ที่สามารถดาวน์โหลด แอปพิเคชั่น มาไว้ผ่านอุปกรณ์โทรศัพท์มือถือพกพาได้อย่างสะดวกสบาย รวมไปถึงการเข้าใช้บริการผ่านช่องทางเว็บไซต์ให้บริการสำหรับผู้เล่นพร้อมกับหมวดรูปแบบของเกมอื่นๆ ที่มีความน่าสนใจจะได้ว่าเป็นเกม <em>คาสิโนออนไลน์</em> ที่มีสีสันสดใสและสามารถตัดสินใจในการเดิมพันได้ด้วยตัวของผู้เล่นเอง รวมไปถึงคุณภาพของเกมที่ตอบโจทย์ในการเข้าใช้งานผ่านทางเว็บไซต์ที่มีเมนูง่ายๆ ในการเข้าถึงอย่างรวดเร็ว</p>
                    </div>
                </div>
            </section>
            <section class="secondary my-5">
                <div class="container">
                    <div class="heading-bg">
                        <h2>คุณสมบัติของระบบ dream gaming</h2>
                    </div>
                    <div class="box-content mt-3">
                        <p class="mb-0">การออกแบบค่ายเกมในการเข้าร่วมสนุกของนักพนันออนไลน์ที่สามารถตอบโจทย์และ ให้ความสนใจกับการเดิมพันที่สามารถเชื่อมต่อผ่านทางเว็บไซต์ของค่ายเกม ดรีมเกมมิ่ง ที่จะทำให้กับผู้เล่นนั้นได้พบกับความตื่นตาตื่นใจในการเข้าใช้บริการที่มีเมนูที่เรียบง่ายอย่างน่าดึงดูดกับรูปแบบของเกมที่ตอบโจทย์รวมทั้งการรองรับหลายภาษาที่สามารถเลือกได้อย่างสะดวกและ ง่ายดายตามที่ต้องการไม่ว่าจะเป็นการใช้ภาษาเริ่มต้นอย่างภาษาอังกฤษ หรือภาษาอื่นๆ อย่างเช่นภาษาไทย จีน ที่เชื่อมกลับค่ายเกม <strong>dream gaming</strong> โดยตรงที่จะสร้างความสนุกสนาให้กับผู้เล่นได้ดี เพื่อแนวทางการสร้างวิสัยทัศน์ และเวอร์ชั่นของเกมพร้อมกับการสนับสนุนทางเทคนิคแบบมืออาชีพที่ผู้เล่นจะได้สัมผัส</p>
                    </div>
                </div>
                <img data-src="./img/dreamgaming-img03.webp" class="lazy img-max" width="100%" height="779" alt="คุณสมบัติของระบบ dream gaming">
            </section>
            <section class="secondary mb-3">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="bg-grad-s rot-r">
                                <div class="card-content">
                                    <h2 class=" text-center shadow_gold">ภาพรวมการให้บริการค่ายเกม dream gaing</h2>
                                    <p>เนื่องด้วยที่งามมืออาชีพ ที่เป็นตัวแทนในการสร้างความสนุกกับ เกมออนไลน์แบบไลฟ์สด หลากหลายเกมเข้าด้วยกันที่จะทำให้กับผู้เล่นสามารถเลือกได้อย่างอิสระอย่าง เช่น บาคาร่า รูเล็ต ไฮโล ที่เป็นเกมมาตรฐานให้เกิดความสนุกสนานแก่การให้บริการของเว็บไซต์พร้อมกันสนุกสนานการเดิมพันแบบระบบ html5 ที่รับประกันจากผู้เข้าใช้บริการทั่วโลกแบบคุณภาพอย่างครบครันที่สามารถทำการดาวน์โหลด แอปพลิเคชั่น ในการ login เข้าสู่ระบบปกรณ์โทรศัพท์มือถือ หรือจะทำการเดิมพันด้วยเว็บไซต์โดยตรงที่สามารถเชื่อมต่อเข้ากับเกมคาสิโนออนไลน์และ สามารถเริ่มทำการเดิมพันได้เลย</p>
                                    <p>ด้วยการนำเสนอและ ออกแบบเกมพนันออนไลน์แบบไลฟ์สดกับนักพัฒนาที่เป็นผู้สร้างความเข้าใจในการพัฒนาระบบจากวิศวกรโปรแกรมเมอร์โดยตรง ในการพัฒนาระบบที่ส่งตรงมาจากต่างประเทศเพื่อตอบสนองความต้องการต่อวงการการ พนันออนไลน์ ที่จะทำให้กับผู้เล่นตั้งหลายพบกับความสนุกสนานกับเกมชนิดต่างๆ ตามที่ต้องการได้พร้อมกับสิทธิพิเศษต่างๆมากมายในการเข้าใช้บริการ</p>
                                    <p class="mb-0">เพราะในสมัยปัจจุบันนี้การเดิมพันกับเกมออนไลน์คือ เรื่องที่ใกล้ตัวและ เป็นเกมที่สร้างความตื่นตาตื่นใจให้กับผู้เล่นได้สัมผัสกับความแปลกใหม่เพื่อจะช่วยให้กับผู้เล่นสามารถทำการบริการกำไรกับเกมได้อย่างสูงสุดอย่างบนเว็บไซต์ตลอด 24 ชั่วโมง พร้อมกับความปลอดภัยเบื้องต้นที่มีการป้องกันระบบอย่างใกล้ชิดให้กับผู้เล่นสามารถเข้ามาร่วมสนุกกับสนมในการเข้าใช้บริการกับ<strong><em>คาสิโนออนไลน์</em> dream gaming</strong> ที่จะมีการพัฒนาความปลอดภัยให้สามารถเข้าถึงนักวิศวกรผู้พัฒนาซอฟต์แวร์ทั่วราชอาณาจักรรวบรวมมาให้กับผู้เล่นเป็นเครื่องมือช่วยดูแลความปลอดภัยในการทำธุรกรรมแบบตอบโจทย์และ เห็นผลอย่างร้อยเปอร์เซ็นต์</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="bg-grad-s rot-l">
                                <div class="card-content">
                                    <h2 class=" text-center shadow_gold">บริการ dream gaming ผ่าน application</h2>
                                    <p>application ที่สามารถเป็นเครื่องมือสำคัญที่สร้างความสนุกสนานกับเกม คาสิโนออนไลน์ ของจริงโดยการเข้าถึงเกมแบบไลฟ์สดที่มีการควบคุมด้วยระบบอัจฉริยะส่งตัวในการถ่ายทอดสดของดีลเลอร์ในรูปแบบของ casino จริงแบบ (Full HD Video) ที่จะทำให้ผู้เล่นได้สัมผัสกับความสนุกอย่างแท้จริง ด้วยอุปกรณ์ที่มีความทันสมัยในปัจจุบันจะทำให้กับผู้เล่นสามารถเข้าไปยังบริการผ่านช่องทางไลน์ด้วยการ สแกนคิวอาโค๊ต ได้อย่างง่ายๆ รวมไปถึงการทำความเข้าใจและ การวางแผนควบคุมการเดิมพันของเกม คาสิโนออนไลน์ ได้อย่างครบครันจากต่างประเทศที่สามารถถ้าถึงรูปแบบของเกมได้อย่างละเอียดพร้อมทั้งกับบริการของห้องเกมบาคาร่ารูปแบบต่างๆ ที่มีเมนูในการเดิมพันที่ง่ายพร้อมทั้ง icon profile ที่จะทำให้กับผู้ล่นสามารถแก้ไขข้อมูลส่วนตัวได้ด้วยตัวเอง</p>
                                    <p class="mb-0"><strong>dream gaming</strong> กับการออกแบบที่มีความทันสมัยกับการนำเสนอเกมพนันแบบไลฟ์สดที่จะทำให้กับผู้เล่นได้เข้าสัมผัสกับความบันเทิงแก่นักพนันออนไลน์ทั้งหลายที่สามารถฝึกฝนการเล่นได้ตลอดเวลา กับระบบการทดลองโดยไม่มีค่าใช้จ่ายที่จะทำให้กับตอบสนองต่อการเดิมพันให้กับการเข้าใช้บริการกับทุกช่วงเวลาไม่ว่าจะเป็นเกม บาคาร่า รูเล็ต ไพ่ 3 ใบ เสือมังกร ไฮโล ที่มาพร้อมกับสิทธิพิเศษอย่างมากมายคอยบริการให้กับสัมผัสได้ตามที่ต้องการพร้อมทั้งการเข้าใช้บริการที่มีช่องทางการเข้าถึงหลากหลายช่องทางด้วยกัน ไม่ว่าจะเป็นผ่านอุปกรณ์โทรศัพท์มือถือ คอมพิวเตอร์ ที่รองรับทั้งเป็น แอนดรอย์ และ ไอโอเอส ที่มีสัญญาณอินเทอร์เน็ตค่อยบริการผู้เล่นด้วยการถ่ายทอดสดผ่านช่องทางออนไลน์ ที่ถือได้ว่าเป็นที่ตอบโจทย์แก่ผู้เล่นเป็นอย่างดี ให้สามารถเข้าใช้งานได้กับทุกช่วงเวลาไม่ว่าจะเป็นการถ่ายทอดส่งตรงจากคาสิโนในต่างประเทศด้วยภาพและ เสียงระดับความชัด HD อย่างเต็มระบบ</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </article>
        <article class="article-content">
            <div class="container">
                <p class="str-news text-center  mb-0"><a href="./all-articles/">บทความ / ข่าวสาร</a></p>
                <br>
                <div class="row justify-content-center align-items-end ">
                    <?php
                    // include_once './conn/connect.php';
                    $sql = "SELECT * FROM articles 
    ORDER BY id DESC  LIMIT 0,3 ";
                    $q = mysqli_query($conn, $sql) or die("Error in query: $sql " . mysqli_error($conn));
                    while ($resuret = mysqli_fetch_array($q)) {
                        $d_topic = $resuret['topic_name'];
                        $d_dec = strip_tags(mb_substr($resuret['descripion'], 0, 100, 'utf-8'));
                        $img = $resuret['image_banner'];
                        $date = date("Y-m-d", strtotime($resuret['create_at']));
                        $view = $resuret['view'];
                        $seo_dec = $resuret['descripion_seo'];
                        $url_articles_seo = $resuret['url_articles_seo'];
                        $article_id = $resuret['id'];
                    ?>
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="bg_articles my-2">
                                <a href="./view/<?php echo $url_articles_seo; ?>" class="article-link" rel="ugc">
                                    <figure class="news-articles-img">
                                        <div class="bg-img">
                                            <img class="lazy img-fluid zoom" data-src="./backend/uploads/article-img/<?php echo $img ?>" alt="<?php echo $d_topic ?>" width="100%" height="100%">
                                        </div>
                                    </figure>
                                    <div class="px-2">
                                        <strong class="news-articles-h4"><?php echo trim(strip_tags(mb_substr($d_topic, 0, 30, 'utf-8'))); ?></strong>
                                        <div class="d-flex flex-column text-center view_date">
                                            <span>
                                                โพสเมื่อ : <?php echo $date; ?>
                                            </span>
                                            <span>
                                                ผู้เข้าชม : <?php echo $view; ?>
                                            </span>
                                        </div>

                                        <p class="news-articles-p "><?php echo trim(strip_tags(mb_substr($seo_dec, 0, 120, 'utf-8'))); ?></p>
                                    </div>
                                </a>
                                <div class="usertag">
                                    <div class="tag__info">
                                        <p>TEGS :</p>
                                        <?php
                                        $sql_tag = "SELECT tag.tag_url as tag_url,tag.name as name FROM (tag
                                    left join tag_log on tag.id = tag_log.tag_id)
                                    where articles_id = $article_id ";
                                        $query_tag = mysqli_query($conn, $sql_tag) or die("Error in query: $sql " . mysqli_error($conn));
                                        while ($result_tag = $query_tag->fetch_assoc()) {
                                        ?>
                                            <a href="./tag/<?php echo $result_tag['tag_url']; ?>" style="text-decoration: none;">
                                                <span class="tag tag-red"><?php echo $result_tag['name'] ?></span>
                                            </a>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }
                    ?>
                </div>
            </div>
        </article>
    <?php
    } else {
    ?>
        <article class="article-container-card pt-4">
            <div class="container">
                <div class="text-center ">
                    <p class="text-bold-search mb-0 ">
                        Search By : <?php echo $key_search; ?>
                    </p>
                </div>
                <div class="row justify-content-center align-items-end mt-2">
                    <?php
                    while ($resuret = mysqli_fetch_array($q)) {
                        $d_topic = $resuret['topic_name'];
                        $d_dec = strip_tags(mb_substr($resuret['descripion'], 0, 100, 'utf-8'));
                        $img = $resuret['image_banner'];
                        $date = date("Y-m-d", strtotime($resuret['create_at']));
                        $view = $resuret['view'];
                        $seo_dec = $resuret['descripion_seo'];
                        $url_articles_seo = $resuret['url_articles_seo'];
                        $article_id = $resuret['id'];
                    ?>
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="bg_articles my-2">
                                <a href="./view/<?php echo $url_articles_seo; ?>" class="article-link" rel="ugc">
                                    <figure class="news-articles-img">
                                        <div class="bg-img">
                                            <img class="lazy img-fluid zoom" data-src="./backend/uploads/article-img/<?php echo $img ?>" alt="<?php echo $d_topic ?>" width="100%" height="100%">
                                        </div>
                                    </figure>
                                    <div class="px-2">
                                        <strong class="news-articles-h4"><?php echo trim(strip_tags(mb_substr($d_topic, 0, 30, 'utf-8'))); ?></strong>
                                        <div class="d-flex flex-column text-center view_date">
                                            <span>
                                                โพสเมื่อ : <?php echo $date; ?>
                                            </span>
                                            <span>
                                                ผู้เข้าชม : <?php echo $view; ?>
                                            </span>
                                        </div>

                                        <p class="news-articles-p "><?php echo trim(strip_tags(mb_substr($seo_dec, 0, 120, 'utf-8'))); ?></p>

                                    </div>
                                </a>
                                <div class="usertag">
                                    <div class="tag__info">
                                        <p>TEGS :</p>
                                        <?php
                                        $sql_tag = "SELECT tag.tag_url as tag_url,tag.name as name FROM (tag
                                    left join tag_log on tag.id = tag_log.tag_id)
                                    where articles_id = $article_id ";
                                        $query_tag = mysqli_query($conn, $sql_tag) or die("Error in query: $sql " . mysqli_error($conn));
                                        while ($result_tag = $query_tag->fetch_assoc()) {
                                        ?>
                                            <a href="./tag/<?php echo $result_tag['tag_url']; ?>" style="text-decoration: none;">
                                                <span class="tag tag-red"><?php echo $result_tag['name'] ?></span>
                                            </a>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }
                    ?>
                </div>
            </div>
        </article>
    <?php
    }
    ?>
    <footer class="bg-grad mt-5">
        <div class="container-fluid px-0 py-3">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-center">
                        <img data-src="./img/logo-gream-gaming.webp" class="lazy img-fluid" width="288" height="111" alt="logo gream gaming">
                    </div>
                    <div class="col-lg-4">
                        <p class="text-center mb-0 h5"><strong style="color:gold;">ฝากถอน-ถอน อัตโนมัติ ภายใน 3 นาที</strong></p>
                        <img data-src="./img/bank-all.png" class="lazy img-max" width="348" height="123" alt="logo bank">
                    </div>
                    <div class="col-lg-4 row justify-content-center">
                        <div class="col-lg-6 col-md-12 col-sm-12 end_box_footer">
                            <p class="h4"><strong style="color:gold;">contact</strong></p>
                            <p class="mb-0">ID LINE:@789first</p>
                            <p class="mb-0">บริการตลอด 24 ชม.</p>
                            <a class="a_back_link" href="./backend/login.php">เข้าสู่ระบบ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div id="navbar__footer">
        <a href="./"><img data-src="./img/icon/icon-nav01.webp" class="lazy img-fluid" width="40" height="40" alt="icon-home"><span>หน้าหลัก</span> </a>
        <a href="http://app.789first.com/login"><img data-src="./img/icon/icon-nav02.webp" class="lazy img-fluid" width="40" height="40" alt="icon เข้าสู่ระบบ"><span>เข้าสู่ระบบ</span> </a>
        <a href="http://app.789first.com/register"><img data-src="./img/icon/icon-nav03.webp" class="lazy img-fluid" width="40" height="40" alt="icon สมัครสมาชิก"><span>สมัครสมาชิก</span> </a>
        <a href="http://app.789first.com/register"><img data-src="./img/icon/icon-nav04.webp" class="lazy img-fluid" width="40" height="40" alt="icon ลิงค์รับทรพย์"><span>ลิงค์รับทรพย์</span> </a>
        <a href="https://line.me/ti/p/~@789First#~"><img data-src="./img/icon/icon-nav05.webp" class="lazy img-fluid" width="40" height="40" alt="icon ติดต่อ"><span>ติดต่อ</span> </a>
    </div>
    <script>
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        window.onclick = function(event) {
            if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }
    </script>
    <script>
        function openNav() {
            document.getElementById("myNav").style.width = "80%";
        }

        function closeNav() {
            document.getElementById("myNav").style.width = "0%";
        }
    </script>
    <!-- start lazyload -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var lazyloadImages;

            if ("IntersectionObserver" in window) {
                lazyloadImages = document.querySelectorAll(".lazy");
                var imageObserver = new IntersectionObserver(function(entries, observer) {
                    entries.forEach(function(entry) {
                        if (entry.isIntersecting) {
                            var image = entry.target;
                            image.src = image.dataset.src;
                            image.classList.remove("lazy");
                            imageObserver.unobserve(image);
                        }
                    });
                });

                lazyloadImages.forEach(function(image) {
                    imageObserver.observe(image);
                });
            } else {
                var lazyloadThrottleTimeout;
                lazyloadImages = document.querySelectorAll(".lazy");

                function lazyload() {
                    if (lazyloadThrottleTimeout) {
                        clearTimeout(lazyloadThrottleTimeout);
                    }

                    lazyloadThrottleTimeout = setTimeout(function() {
                        var scrollTop = window.pageYOffset;
                        lazyloadImages.forEach(function(img) {
                            if (img.offsetTop < (window.innerHeight + scrollTop)) {
                                img.src = img.dataset.src;
                                img.classList.remove('lazy');
                            }
                        });
                        if (lazyloadImages.length == 0) {
                            document.removeEventListener("scroll", lazyload);
                            window.removeEventListener("resize", lazyload);
                            window.removeEventListener("orientationChange", lazyload);
                        }
                    }, 20);
                }

                document.addEventListener("scroll", lazyload);
                window.addEventListener("resize", lazyload);
                window.addEventListener("orientationChange", lazyload);
            }
        })
    </script>
    <!--end lazyload -->
</body>

</html>

