<?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/dochead_sub.php'); ?>
<link href="/assets/css/information.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/header.php'); ?>
    <div class="path-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
                <li><a href="#">다이아몬드 검색</a></li>
                <li class="active">다이아몬드</li>
            </ol>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-lg-3">
                <?php require($_SERVER["DOCUMENT_ROOT"].'/information/_lnb.php'); ?>
            </div>
            <div class="col-xs-12 col-lg-9">
                <main id="content" tabindex="-1" class="information lab hrd">
                    <div class="page-header">
                        <h2>DIAMOND CERTIFICATE <small>다이아몬드 감정서</small></h2>
                    </div>
                    <div class="page-summary">
                        <p>
                            다이아몬드는 채굴된 후 소비자에게 선보이기 전까지 감정소를 통해 감정을 받으며 평가 받은 감정서가 다이아몬드를 증명하게 되며 다이아몬드 각각의 특징과 품질을 공정하게 판단 한 후 감정서에 기재됩니다. 감정소에서는 감정을 전문으로 하는 보석 감정사들로 이루어져 있으며 각각의 다이아몬드 감정서는 다이아몬드 마다 고유의 넘버가 발행 되어지며 발행되는 순간부터 다이아몬드와 감정서는 소비자에게 판매될 때까지 함께 동봉되어 집니다.
                        </p>
                        <p>
                            <i>다이아아울렛에서는 세계적으로 유명한 4대 감정서(GIA,AGS,EGL,IGI)를 판매</i>하며 감정소 마다 감정 기준이 다른 만큼 꼼꼼히 비교해 보시고 구매하시기 바랍니다.
                        </p>
                    </div>
                    <div class="tabs">
                        <ul>
                            <li role="presentation"><a href="./lab_egl.php">GIA 감정서</a></li>
                            <li role="presentation"><a href="./lab_egl.php">EGL 감정서</a></li>
                            <li role="presentation"><span>HRD 감정서</span></li>
                            <li role="presentation"><a href="./lab_igi.php">IGI 감정서</a></li>
                            <li role="presentation"><a href="./lab_ags.php">AGS 감정서</a></li>
                        </ul>
                    </div>
                    <section class="section-content">
                        <div class="section-head">
                            <h3 class="section-title">HRD <small>HRD 감정서</small></h3>
                            <p><i>The Diamond Council – Hoge Raad Voor Diamante</i></p>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-5">
                                <div class="figure">
                                    <p><img class="img-responsive" src="/assets/images/information/img_lab_hrd.jpg" alt=""></p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-7">
                                <div class="details">
                                    <p>
                                        벨기에의 앤트워프(Antwerp) 는 국제적인 다이아몬드 거래소가 있으며 500년 이상 동안 기술의 발전시키고, 전문 지식의 향상으로 다이아몬드 비즈니스의 중심에 서 있습니다.
                                    </p>
                                    <p>
                                        HRD,IGI,EGL과 같은 국제적인 감정소가 엔트워프에 위치해 있으며 HRD 감정소는 GIA 감정소와 함께 다이아몬드 감정으로 가장 잘 알려진 감정소입니다.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>
                </main>
            </div>
        </div>
    </div>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/footer.php'); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/docfoot.php'); ?>
    <script src="/assets/js/lnb.js"></script>
</body>
</html>
