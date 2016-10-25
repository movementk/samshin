<?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/dochead_sub.php'); ?>
<link href="/assets/css/information.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/header.php'); ?>
    <div class="path-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
                <li><a href="#">GUIDE</a></li>
                <li class="active"><a href="#">디자이너 소개</a></li>
            </ol>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-lg-3">
                <?php require($_SERVER["DOCUMENT_ROOT"].'/information/_lnb.php'); ?>
            </div>
            <div class="col-xs-12 col-lg-9">
                <main id="content" tabindex="-1" class="information artist overseas">
                    <div class="page-header">
                        <h2>ARTIST COLLECTION <small>아티스트 콜렉션</small></h2>
                    </div>
                    <div class="page-summary">
                        <p>
                           다이아아울렛에서는 해외 유명 아티스트와 국내 메탈 아티스트가 디자인한 제품을 만나 보실 수 있습니다.<br>
                            오직 다이아아울렛에서만 만날 수 있는 <i>“아티스트 콜렉션”</i> 제품으로 다이아몬드 제품의 품격을 높여 보시기 바랍니다.
                        </p>
                    </div>
                    <div class="tabs">
                        <ul>
                            <li role="presentation"><span>해외 아티스트 콜렉션</span></li>
                            <li role="presentation"><a href="./artist_domestic.php">국내 아티스트 콜렉션</a></li>
                        </ul>
                    </div>
                    <div class="section-content artist">
                        <div class="section-head">
                            <h3 class="section-title">MASSIMO JUCCHI <small>마시모주끼</small></h3>
                        </div>
                        <a class="btn btn-direct" href="#">제품 바로가기</a>
                        <div class="section-body">
                            <div class="summary">
                                <p>
                                    마시모 주끼는 1982년 밀라노에 세계적인 명품 디자인 전문회사 스튜디오인 주끼 디자인(Studio Jucci Design)을 운영하며 불가리(Bulgari),   쇼메(Chaumet),구찌(Gucci)등의 여러 명품 브랜드의 디자인을 전담 하였습니다.
                                    전통과  역사를 자랑하는 이태리 최고의 기술과 이전에 볼 수 없었던 창의성과 노하우의 접목으로 만들어진 마시모 주끼 주얼리는 그 섬세함과 곡선의 아름다움으로 가히 놀랄 만 합니다.
                                    마시모 주끼 웨딩링은 국내에서는 쉽게 찾아 볼 수 없는 아름다운 디자인으로 큰 사랑을 받고 있습니다.
                                </p>
                            </div>
                            <div class="works">
                                <ul class="row">
                                    <li class="col-sm-6"><img src="/assets/images/information/img_artist_overseas_work_1_1.jpg" alt=""></li>
                                    <li class="col-sm-6"><img src="/assets/images/information/img_artist_overseas_work_1_2.jpg" alt=""></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="section-content artist">
                        <div class="section-head">
                            <h3 class="section-title">MICHAEL BONDANZA <small>마이클 본단자</small></h3>
                        </div>
                        <a class="btn btn-direct" href="#">제품 바로가기</a>
                        <div class="section-body">
                            <div class="summary">
                                <p>
                                    마이클 본단자는 미국 디자이너로 예술과 보석에 대한 열정적인 디자이너로 국제적인 상을 수상한 디자이너입니다.
                                </p>
                            </div>
                            <div class="works">
                                <ul class="row">
                                    <li class="col-sm-6"><img src="/assets/images/information/img_artist_overseas_work_2_1.jpg" alt=""></li>
                                    <li class="col-sm-6"><img src="/assets/images/information/img_artist_overseas_work_2_2.jpg" alt=""></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="section-content artist">
                        <div class="section-head">
                            <h3 class="section-title">JOSE HESS <small>호세스</small></h3>
                        </div>
                        <a class="btn btn-direct" href="#">제품 바로가기</a>
                        <div class="section-body">
                            <div class="summary">
                                <p>
                                    미국의 유명한 보석 디자이너 및 보석 학자로 디자인 관련 다수의 상을 수상 하으며  미국 보석 분야의 대표적인 인물로 평가되고 있습니다.<br>
                                    현재도 쥬얼리 회사의 디자인 컨설턴트로 활발하게 활약하고 있습니다.
                                </p>
                            </div>
                            <div class="works">
                                <ul class="row">
                                    <li class="col-sm-6"><img src="/assets/images/information/img_artist_overseas_work_2_1.jpg" alt=""></li>
                                    <li class="col-sm-6"><img src="/assets/images/information/img_artist_overseas_work_2_2.jpg" alt=""></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/footer.php'); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/docfoot.php'); ?>
    <script src="/assets/js/lnb.js"></script>
</body>
</html>
