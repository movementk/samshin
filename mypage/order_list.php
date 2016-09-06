<?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/dochead_sub.php'); ?>
<link href="/assets/css/mypage.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/header.php'); ?>
    <main id="content" tabindex="-1" class="mypage order list">
        <div class="container">
            <header class="page-header">
                <h3>주문배송내역조회</h3>
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
                            <th class="title">상품명</th>
                            <th>금액</th>
                            <th>상태</th>
                            <th>비고</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <img src="/assets/images/mypage/img_dia_dummy.jpg" alt="">
                            </td>
                            <td class="title">
                                <h5>세그레또 5부 다이아몬드 반지</h5>
                                <p class="lap">현대,우신,GIA 감정서 선택 상품</p>
                                <dl class="order-info">
                                    <dt>상품옵션</dt>
                                    <dd>함량 18K 핑크 골드 1개</dd>
                                    <dt>주문번호</dt>
                                    <dd>1471929243-20</dd>
                                    <dt>주문일시</dt>
                                    <dd>2016-08-23 14:14:57</dd>
                                </dl>
                            </td>
                            <td>
                                <p class="price">100,050,000원</p>
                            </td>
                            <td>
                                <p class="status">입금대기 중</p>
                                <p class="history"><a class="btn" href="#">주문 내역</a></p>
                            </td>
                            <td>
                                <a class="btn btn-confirm" href="#">구매확정</a>
                                <a class="btn btn-review" href="#">상품평 쓰기</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="/assets/images/mypage/img_dia_dummy.jpg" alt="">
                            </td>
                            <td class="title">
                                <h5>세그레또 5부 다이아몬드 반지</h5>
                                <p class="lap">현대,우신,GIA 감정서 선택 상품</p>
                                <dl class="order-info">
                                    <dt>상품옵션</dt>
                                    <dd>함량 18K 핑크 골드 1개</dd>
                                    <dt>주문번호</dt>
                                    <dd>1471929243-20</dd>
                                    <dt>주문일시</dt>
                                    <dd>2016-08-23 14:14:57</dd>
                                </dl>
                            </td>
                            <td>
                                <p class="price">100,050,000원</p>
                            </td>
                            <td>
                                <p class="status">입금대기 중</p>
                                <p class="history"><a class="btn" href="#">주문 내역</a></p>
                            </td>
                            <td>
                                <a class="btn btn-confirm" href="#">구매확정</a>
                                <a class="btn btn-review" href="#">상품평 쓰기</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="/assets/images/mypage/img_dia_dummy.jpg" alt="">
                            </td>
                            <td class="title">
                                <h5>세그레또 5부 다이아몬드 반지</h5>
                                <p class="lap">현대,우신,GIA 감정서 선택 상품</p>
                                <dl class="order-info">
                                    <dt>상품옵션</dt>
                                    <dd>함량 18K 핑크 골드 1개</dd>
                                    <dt>주문번호</dt>
                                    <dd>1471929243-20</dd>
                                    <dt>주문일시</dt>
                                    <dd>2016-08-23 14:14:57</dd>
                                </dl>
                            </td>
                            <td>
                                <p class="price">100,050,000원</p>
                            </td>
                            <td>
                                <p class="status shipped">배송완료</p>
                                <p class="history"><a class="btn" href="#">주문 내역</a></p>
                            </td>
                            <td>
                                <a class="btn btn-confirm" href="#">구매확정</a>
                                <a class="btn btn-review" href="#">상품평 쓰기</a>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="5">
                                <p class="nothing">주문내역이 없습니다.</p>
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
</body>
</html>
