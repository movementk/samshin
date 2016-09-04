<?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/dochead_sub.php'); ?>
<link href="/assets/css/mypage.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/header.php'); ?>
    <main id="content" tabindex="-1" class="mypage returns">
        <div class="container">
            <header class="page-header">
                <h3>REFUND/EXCHANGE</h3>
                <p>
                    결제는 [은행결제/카드결제/핸드폰결제/인터냇뱅킹/포인트결제] 중 원하시는 방법으로 이용할 수 있습니다.<br>
                    입금이 확인된 주문건은 발송준비중 코너로 옮겨집니다.
                </p>
            </header>
            <div class="product-list order-list">
                <table class="table">
                    <thead>
                        <tr>
                            <th></th>
                            <th class="title">물품명</th>
                            <th>포인트 및 금액</th>
                            <th>상태</th>
                            <th>비고</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php require($_SERVER["DOCUMENT_ROOT"].'/mypage/_order_item.php'); ?>
                        <?php require($_SERVER["DOCUMENT_ROOT"].'/mypage/_order_item.php'); ?>
                        <?php require($_SERVER["DOCUMENT_ROOT"].'/mypage/_order_item.php'); ?>
                    </tbody>
                </table>
            </div>
            <?php require($_SERVER["DOCUMENT_ROOT"].'/inc/paging.php'); ?>
        </div>
    </main>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/footer.php'); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/docfoot.php'); ?>
</body>
</html>
