<?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/dochead_sub.php'); ?>
<link href="/assets/css/company.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/header.php'); ?>
    <div class="path-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
                <li><a href="#">회사소개</a></li>
                <li class="active">카페 다이아만티노</li>
            </ol>
        </div>
    </div>
    <main id="content" tabindex="-1" class="company cafe room">
        <div class="container">
            <div class="page-header">
                <h2 class="page-title">
                    <small>SAMSHIN</small><br>
                    CAFÉ DIAMANTINO
                </h2>
            </div>
        </div>
        <div class="container">
            <ul class="page-tabs row" role="tablist">
                <li role="presentation" class="col-xs-6 col-sm-4 col-md-2 col-md-offset-1">
                    <span class="btn">카페 다이아만티노 소개</span>
                </li>
                <li role="presentation" class="col-xs-6 col-sm-4 col-md-2">
                    <a class="btn" href="./cafe_menu.php">메뉴 안내</a>
                </li>
                <li role="presentation" class="col-xs-6 col-sm-4 col-md-2">
                    <a class="btn" href="./cafe_room.php">미팅룸&amp;프로포즈룸 대여</a>
                </li>
                <li role="presentation" class="col-xs-6 col-sm-4 col-md-2">
                    <a class="btn" href="./cafe_water.php">다이아몬드 미네랄 워터</a>
                </li>
                <li role="presentation" class="col-xs-6 col-sm-4 col-md-2">
                    <a class="btn" href="./cafe_location.php">위치 안내</a>
                </li>
            </ul>
        </div>
        <div class="container">
            <div class="section-head">
                <h3 class="section-title">카페 다이아만티노 소개</h3>
                <hr>
                <p>
                    회의,가족 모임,친구 모임등  모임의 장소가 필요하신가요?<br>
                    럭셔리한 분위기의 카페 다이아만티노의  MEETING ROOM 을 합리적인 가격에 대여해 드립니다.
                </p>
            </div>
        </div>
    </main>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/footer.php'); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/docfoot.php'); ?>
</body>
</html>
