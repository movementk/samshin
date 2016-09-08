<?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/dochead_sub.php'); ?>
<link href="/assets/css/mypage.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/header.php'); ?>
    <main id="content" tabindex="-1" class="mypage wish-list">
        <div class="container">
            <header class="page-header">
                <h3>찜한 상품</h3>
                <p>
                    본 포인트는 유효기간 없이 언제든지 사용하실수 있습니다.<br>
                    본 포인트는 저희 사이트에서 현금과 동일하게 사용하실수 있습니다.
                </p>
            </header>
            <div class="product-list wish-list">
                <div class="btn-area row">
                    <div class="col-lg-2"><label class="btn btn-select" type="button">전체선택</label></div>
                    <div class="col-lg-2"><button class="btn btn-delete" type="button">선택상품삭제</button></div>
                    <div class="col-lg-2"><a class="btn btn-cart" href="#">장바구니로 이동</a></div>
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
                        <tr>
                            <td><label class="check"><input type="checkbox"></label></td>
                            <td><img src="/assets/images/mypage/img_dia_dummy.jpg" alt=""></td>
                            <td class="title">
                                <h5>세그레또 5부 다이아몬드 반지</h5>
                                <p class="lap">현대,우신,GIA 감정서 선택 상품</p>
                                <a class="btn btn-details" href="#">상품자세히보기</a>
                            </td>
                            <td>
                                <p class="price"><s>100,050,000원</s></p>
                                <p class="price">100,050,000원</p>
                            </td>
                            <td>
                                <a class="btn btn-delete" href="#">삭제하기</a>
                            </td>
                        </tr>
                        <tr>
                            <td><label class="check"><input type="checkbox"></label></td>
                            <td><img src="/assets/images/mypage/img_dia_dummy.jpg" alt=""></td>
                            <td class="title">
                                <h5>세그레또 5부 다이아몬드 반지</h5>
                                <p class="lap">현대,우신,GIA 감정서 선택 상품</p>
                                <a class="btn btn-details" href="#">상품자세히보기</a>
                            </td>
                            <td>
                                <p class="price"><s>100,050,000원</s></p>
                                <p class="price">100,050,000원</p>
                            </td>
                            <td>
                                <a class="btn btn-delete" href="#">삭제하기</a>
                            </td>
                        </tr>
                        <tr>
                            <td><label class="check"><input type="checkbox"></label></td>
                            <td><img src="/assets/images/mypage/img_dia_dummy.jpg" alt=""></td>
                            <td class="title">
                                <h5>세그레또 5부 다이아몬드 반지</h5>
                                <p class="lap">현대,우신,GIA 감정서 선택 상품</p>
                                <a class="btn btn-details" href="#">상품자세히보기</a>
                            </td>
                            <td>
                                <p class="price"><s>100,050,000원</s></p>
                                <p class="price">100,050,000원</p>
                            </td>
                            <td>
                                <a class="btn btn-delete" href="#">삭제하기</a>
                            </td>
                        </tr>
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
