<?php
include_once 'config.php';
include_once 'functions.php';

if (!isset($sections)) {
    $sections = getSections();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $doc_title; ?></title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no"/>
    <link rel="canonical" href="http://www.templatemonster.com/help/quick-start-guide/magento-extensions/magento-newsletter-popup-extension-v1-0/"/>
    <link rel="icon" href="<?php echo $path; ?>/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo $path; ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo $path; ?>/css/jquery.fancybox.css">
    <link rel="stylesheet" href="<?php echo $path; ?>/js/helpers/jquery.fancybox-buttons.css">
    <link rel="stylesheet" href="<?php echo $path; ?>/js/helpers/jquery.fancybox-thumbs.css">

    <script src="<?php echo $path; ?>/js/jquery.js"></script>
    <script src="<?php echo $path; ?>/js/jquery-migrate-1.2.1.js" ></script>
    <script src="<?php echo $path; ?>/js/jquery.easing.1.3.js" ></script>
    <script src='<?php echo $path; ?>/js/device.min.js'></script>

    

    <!--[if lt IE 9]>
    <html class="lt-ie9">
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="/http://windows.microsoft.com/en-US/internet-explorer/..">
            <img src="<?php echo $path; ?>/img/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
                 alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a>
    </div>
    <script src="/js/html5shiv.js"></script>
    <![endif]-->

</head>
<body  data-section="<?php echo $section_param; ?>" onload="prettyPrint()">
<div class="page-wrap">
    <div class="rd-mobilemenu active">
        <div class="logo">
            <a href="<?php echo $path; ?>/"><img src="<?php echo $path; ?>/img/logo.png" alt=""></a>
        </div>
        <div class="panel">
            <div class="select select-lang">
                <select>
                    <option data-href="<?php echo $path; ?>/index.php?lang=en&section=<?php echo $section_param; ?>" <?php echo $lang == "en"? "selected": ""; ?>>EN</option>
                    <!-- <option data-href="<?php echo $path; ?>/index.php?lang=ru&section=<?php echo $section_param; ?>" <?php echo $lang == "ru"? "selected": ""; ?>>RU</option>
                    <option data-href="<?php echo $path; ?>/index.php?lang=de&section=<?php echo $section_param; ?>" <?php echo $lang == "de"? "selected": ""; ?>>DE</option>
                    <option data-href="<?php echo $path; ?>/index.php?lang=es&section=<?php echo $section_param; ?>" <?php echo $lang == "es"? "selected": ""; ?>>ES</option>
                    <option data-href="<?php echo $path; ?>/index.php?lang=fr&section=<?php echo $section_param; ?>" <?php echo $lang == "fr"? "selected": ""; ?>>FR</option>
                    <option data-href="<?php echo $path; ?>/index.php?lang=it&section=<?php echo $section_param; ?>" <?php echo $lang == "it"? "selected": ""; ?>>IT</option>
                    <option data-href="<?php echo $path; ?>/index.php?lang=pl&section=<?php echo $section_param; ?>" <?php echo $lang == "pl"? "selected": ""; ?>>PL</option>
                    <option data-href="<?php echo $path; ?>/index.php?lang=pt&section=<?php echo $section_param; ?>" <?php echo $lang == "pt"? "selected": ""; ?>>PT</option>
                    <option data-href="<?php echo $path; ?>/index.php?lang=tr&section=<?php echo $section_param; ?>" <?php echo $lang == "tr"? "selected": ""; ?>>TR</option> -->
                </select>
            </div>
        </div>
        <p class="copyright">TemplateMonster ©
            <a href="http://www.templatemonster.com/privacy-policy.php">Privacy Policy</a>
        </p>
    </div>
    <div class="page-content active">
        <button class="rd-mobilepanel_toggle active"><span></span></button>
        <div class="rd-mobilepanel">
            <h1 class="rd-mobilepanel_title">
                <span><?php echo $product_name; ?></span> <?php echo $product_desc; ?>
            </h1>
        </div>
        <div class="page">
            <!--========================================================
                HEADER
            =========================================================-->
            <header>
                <nav class="nav">
                    <ul class="menu" data-type="navbar">
                        <?php echo generateNavigation($sections, $lang, $section_param); ?>
                    </ul>
                </nav>
            </header>
            <!--========================================================
                CONTENT
            =========================================================-->
            <main id="main">
                <div class="container">
                    <?php include_once 'section.php'; ?>
                </div>
            </main>

            <!--========================================================
                FOOTER
            =========================================================-->
            <footer>
                <!-- <div class="navigate">
                    <div class="next_wrapper navigated-section-2">
                        <div class="container">
                            <a href="/section/template-installatiamework-installation.html" class="next">
                                <span>Next</span>
                                <em>Template installation</em>
                            </a>
                        </div>
                    </div>
                </div> -->

            </footer>
        </div>
    </div>
</div>


<script src="<?php echo $path; ?>/js/jquery.rd-navbar.js" ></script>
<script src="<?php echo $path; ?>/js/prettify.js" ></script>
<script src="<?php echo $path; ?>/js/jquery.mousewheel-3.0.6.pack.js" ></script>
<script src="<?php echo $path; ?>/js/jquery.fancybox.js" ></script>
<script src="<?php echo $path; ?>/js/helpers/jquery.fancybox-buttons.js" ></script>
<script src="<?php echo $path; ?>/js/helpers/jquery.fancybox-thumbs.js" ></script>
<script src="<?php echo $path; ?>/js/helpers/jquery.fancybox-media.js" ></script>
<script src="<?php echo $path; ?>/js/jquery.ui.totop.js" ></script>
<script src="<?php echo $path; ?>/js/owl.carousel.min.js" ></script>

<script>
    /* Section Class
     ========================================================*/
    function sectionClass(item_key) {
        $.getJSON('<?php echo $path; ?>/sections.json', function (json) {
            var body = $('body');
            var section_class = 'scheme-' + item_key % 9;
            body.attr('class', '');
            body.addClass(section_class);
        });
    }

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-2787305-5']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
</script>

<script src="<?php echo $path; ?>/js/script.js" ></script>
</body>
</html>