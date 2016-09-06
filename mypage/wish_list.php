<?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/dochead_sub.php'); ?>
<link href="/assets/css/mypage.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/header.php'); ?>
    <main id="content" tabindex="-1" class="mypage wish-list">
        <div class="container">
            <header class="page-header">
                <h3>WISH LIST</h3>
                <p>
                    본 포인트는 유효기간 없이 언제든지 사용하실수 있습니다.<br>
                    본 포인트는 저희 사이트에서 현금과 동일하게 사용하실수 있습니다.
                </p>
            </header>
            <div class="product-list wish-list">
                <div class="btn-area">
                    <label class="btn btn-select check" type="button"><input type="checkbox"> 전체선택</label>
                    <button class="btn btn-delete" type="button">선택상품삭제</button>
                    <a class="btn btn-cart" href="#">장바구니로 이동</a>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>선택</th>
                            <th></th>
                            <th class="title">물품명</th>
                            <th>포인트 및 금액</th>
                            <th>비고</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php require($_SERVER["DOCUMENT_ROOT"].'/mypage/_wish_item.php'); ?>
                        <?php require($_SERVER["DOCUMENT_ROOT"].'/mypage/_wish_item.php'); ?>
                        <?php require($_SERVER["DOCUMENT_ROOT"].'/mypage/_wish_item.php'); ?>
                        <?php require($_SERVER["DOCUMENT_ROOT"].'/mypage/_wish_item.php'); ?>
                    </tbody>
                </table>
            </div>
            <?php require($_SERVER["DOCUMENT_ROOT"].'/inc/paging.php'); ?>
        </div>
    </main>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/footer.php'); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/docfoot.php'); ?>
    <script>
        $(document).on('click', '.check', function(e) {
            if( $(e.target).is("label") ) {
                $(this).toggleClass('active');
            }
        });
    </script>
</body>
</html>
