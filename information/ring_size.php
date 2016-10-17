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
                <li><a href="#">반지정보</a></li>
                <li class="active">반지 사이즈 측정법</li>
            </ol>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-lg-3">
                <?php require($_SERVER["DOCUMENT_ROOT"].'/information/_lnb.php'); ?>
            </div>
            <div class="col-xs-12 col-lg-9">
                <main id="content" tabindex="-1" class="information ring size">
                    <div class="page-header">
                        <h2>RING SIZE <small>사이즈 안내</small></h2>
                    </div>
                    <div class="tabs">
                        <ul>
                            <li role="presentation"><a href="./ring_metal.php">금속 정보</a></li>
                            <li role="presentation"><span>반지 사이즈 측정법</span></li>
                            <li role="presentation"><a href="./ring_setting.php">반지 셋팅법</a></li>
                        </ul>
                    </div>
                    <div class="section-content ruler">
                        <div class="section-head">
                            <h3 class="section-title">반지 사이즈 측정법</h3>
                        </div>
                        <div class="section-body">
                            <div class="steps">
                                <ol class="row">
                                    <li class="col-xs-6 col-sm-3">
                                        <figure>
                                            <p><img class="img-responsive" src="/assets/images/information/img_ring_size_step_1.gif" alt=""></p>
                                            <figcaption>
                                                <span>01</span> 1cm 정도의 폭으로 <br>종이를 잘라 주세요.
                                            </figcaption>
                                        </figure>
                                    </li>
                                    <li class="col-xs-6 col-sm-3">
                                        <figure>
                                            <p><img class="img-responsive" src="/assets/images/information/img_ring_size_step_2.gif" alt=""></p>
                                            <figcaption>
                                                <span>02</span> 자른 종이로 손가락을 감싸 주세요.<br>*단 헐겁거나 꽉 조이는 <br>느낌이 들지 않게 해주세요.
                                            </figcaption>
                                        </figure>
                                    </li>
                                    <li class="col-xs-6 col-sm-3">
                                        <figure>
                                            <p><img class="img-responsive" src="/assets/images/information/img_ring_size_step_3.gif" alt=""></p>
                                            <figcaption>
                                                <span>03</span> 종이의 겹쳐지는 부분을 <br>표시한 후
                                            </figcaption>
                                        </figure>
                                    </li>
                                    <li class="col-xs-6 col-sm-3">
                                        <figure>
                                            <p><img class="img-responsive" src="/assets/images/information/img_ring_size_step_4.gif" alt=""></p>
                                            <figcaption>
                                                <span>04</span> 종이를 펴서 사이즈를 <br>측정하면 됩니다.
                                            </figcaption>
                                        </figure>
                                    </li>
                                </ol>
                            </div>
                            <div class="help">
                                <p><i>종이로 사이즈를 재는 방법</i>은 다이아아울렛에서 <em>추천하는 방법이 아닙니다.</em> 오차가 큰 편으로 정확한 사이즈는 가까운 금은방에서 측정해 주시기 바랍니다.</p>
                            </div>
                        </div>
                    </div>
                    <div class="section-content chart">
                        <div class="section-head">
                            <h3 class="section-title">반지 사이즈 표</h3>
                        </div>
                        <div class="section-body">
                            <div class="notify">
                                <p>
                                    <i>기재된 사이즈는 반지 “안지름” 사이즈입니다.</i><br>
                                    측정하신 사이즈가 표기된 반지 호수를 선택해 주시면 됩니다.
                                </p>
                            </div>
                            <div class="list">
                                <p class="visible-lg visible-md"><img class="img-responsive" src="/assets/images/information/img_ring_size_chart_list_lg.gif"></p>
                                <p class="visible-sm"><img class="img-responsive" src="/assets/images/information/img_ring_size_chart_list_sm.gif"></p>
                                <p class="visible-xs"><img class="img-responsive" src="/assets/images/information/img_ring_size_chart_list_xs.gif"></p>
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
