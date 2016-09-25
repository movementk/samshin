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
                <main id="content" tabindex="-1" class="information dia carat">
                    <div class="page-header">
                        <h2>다이아몬드 정보 (4C) <small>다이아몬드 4C</small></h2>
                    </div>
                    <div class="page-summary">
                        <p>다이아몬드의 가치를 평가하는 요소는 <i>캐럿 (Carat), 내포물 (Clarity), 색상 (Color), 컷 (Cut)</i>이며 이를 <i>4C</i>라고 합니다.</p>
                    </div>
                    <div class="tabs">
                        <ul>
                            <li role="presentation"><span>CARAT <br class="visible-xs">(캐럿)</span></li>
                            <li role="presentation"><a href="./dia_color.php">COLOR <br class="visible-xs">(컬러)</a></li>
                            <li role="presentation"><a href="./dia_clarity.php">CLARITY <br class="visible-xs">(선명도)</a></li>
                            <li role="presentation"><a href="./dia_cut.php">CUT <br class="visible-xs">(컷)</a></li>
                        </ul>
                    </div>
                    <section class="section-content explain">
                        <div class="section-head">
                            <h3 class="section-title">CARAT <small>캐럿</small></h3>
                        </div>
                        <p>
                            캐럿(Carat)은 다이아몬드의 중량을 말하며 다이아몬드를 비롯한 보석들의 무게를 잴때 사용합니다. 현대 캐럿(Carat)이라는 체계는 캐럽(Carob) 씨앗에서 유래 되었는데, 고대에는 정밀한 저울이 없었기 때문에 초기의 보석 상인들은  균일한 캐럽 씨앗을 이용하여 저울의 평형추로 사용하였다고 합니다.
                        </p>
                        <p>
                            다이아몬드의 중량을 측정하는 단위는 국제적 단위인 매트릭 캐럿(Matric carat)으로 ct라는 약자를 사용하며 1캐럿은 0.2g(200mg)에 해당합니다. 국내에서는 부,리,모라는 단위를 사용하는데 0.1ct은 1부, 0.3ct은 3부로 불리고 있습니다.
                        </p>
                        <p>
                            다이아몬드 가치 평가 중 중량이 가장 큰 영향을 미칩니다. 그래서 다이아몬드 구매 시 다른 등급들이 동일하다면 중량이 많이 나가는 다이아몬드를 구매하시길 권해 드리며 여러 개의 작은 다이아몬드 보다는한 개의 큰 다이아몬드를 선택 하는게 좋습니다. 예로 0.25캐럿의 4개의 다이아몬드보다 1캐럿 다이아몬드의 가치가 큽니다.
                        </p>
                        <p>
                            예산안에서 가급적 큰 다이아몬드를 구매하시길 추천해 드립니다.
                        </p>
                        <div class="chart">
                            <p class="visible-xs"><img class="img-responsive" src="/assets/images/information/img_dia_carat_xs.gif" alt=""></p>
                            <p class="visible-sm visible-md"><img class="img-responsive" src="/assets/images/information/img_dia_carat_sm.gif" alt=""></p>
                            <p class="visible-lg"><img class="img-responsive" src="/assets/images/information/img_dia_carat_lg.gif" alt=""></p>
                        </div>
                    </section>
                    <section class="section-content relationship">
                        <div class="section-head">
                            <h3 class="section-title">캐럿 중량에 따른 희귀성과 가치와의 관계</h3>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-2">
                                <p>
                                    <img class="img-responsive" src="/assets/images/information/img_dia_carat_figure.jpg" alt="">
                                </p>
                            </div>
                            <div class="col-xs-12 col-sm-10">
                                <p>
                                    다이아몬드 가치 평가 중 중량이 가장 큰 영향을 미칩니다. 그래서 다이아몬드 구매 시 다른 등급들이 동일하다면 중량이 많이 나가는 다이아몬드를 구매하시길 권해 드리며 여러 개의 작은 다이아몬드 보다는 한 개의 큰 다이아몬드를 선택 하는게 좋습니다.
                                </p>
                                <p>
                                    예로 0.25캐럿의 4개의 다이아몬드보다 1캐럿 다이아몬드의 가치가 큽니다. 예산안에서 가급적 큰 다이아몬드를 구매하시길 추천해 드립니다
                                </p>
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
