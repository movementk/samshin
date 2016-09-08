<?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/dochead_sub.php'); ?>
<link href="/assets/css/mypage.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/header.php'); ?>
    <main id="content" tabindex="-1" class="mypage order cart">
        <div class="container">
            <header class="page-header">
                <h3>주문하기</h3>
                <p>
                    본 포인트는 유효기간 없이 언제든지 사용하실수 있습니다.<br>
                    본 포인트는 저희 사이트에서 현금과 동일하게 사용하실수 있습니다.
                </p>
            </header>
            <div class="order-step">
               <ol>
                   <li class="active"><span>장바구니</span></li>
                   <li><span>주문서작성</span></li>
                   <li><span>주문완료</span></li>
               </ol>
            </div>
            <section class="product-list cart-list">
                <h5>다이아몬드 장바구니 리스트</h5>
                <table class="table">
                    <thead>
                        <tr>
                            <th></th>
                            <th class="title">다이아 정보</th>
                            <th>수량</th>
                            <th>총 주문금액</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img src="/assets/images/mypage/img_dia_dummy.jpg" alt=""></td>
                            <td class="title">
                                <p class="lap">[GIA]</p>
                                <h5>ROUND 1.31CT DIAMOND</h5>
                            </td>
                            <td>
                                <p class="quantity">1</p>
                                <a class="btn btn-delete" href="#">삭제하기</a>
                            </td>
                            <td><p class="price">950,000원</p></td>
                        </tr>
                        <tr>
                            <td><img src="/assets/images/mypage/img_dia_dummy.jpg" alt=""></td>
                            <td class="title">
                                <p class="lap">[GIA]</p>
                                <h5>ROUND 1.31CT DIAMOND</h5>
                            </td>
                            <td>
                                <p class="quantity">1</p>
                                <a class="btn btn-delete" href="#">삭제하기</a>
                            </td>
                            <td><p class="price">950,000원</p></td>
                        </tr>
                        <tr>
                            <td><img src="/assets/images/mypage/img_dia_dummy.jpg" alt=""></td>
                            <td class="title">
                                <p class="lap">[GIA]</p>
                                <h5>ROUND 1.31CT DIAMOND</h5>
                            </td>
                            <td>
                                <p class="quantity">1</p>
                                <a class="btn btn-delete" href="#">삭제하기</a>
                            </td>
                            <td><p class="price">950,000원</p></td>
                        </tr>
                    </tbody>
                </table>
                <ul class="notify">
                    <li>해외배송 상품일 경우 배송료가 추가로 발생될 수 있습니다.</li>
                    <li>수량 및 주문금액이 틀리지 않는지 반드시 확인하시기 바랍니다.</li>
                </ul>
            </section>
            <section class="payment">
                <h5>주문합계금액</h5>
                <table class="table">
                    <thead>
                        <tr>
                            <th>상품구매금액</th>
                            <th>총배송비</th>
                            <th>사용포인트</th>
                            <th>결제될 주문 총금액</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>950,000 원</td>
                            <td><span class="plus"></span>0 원</td>
                            <td><span class="minus"></span>0 P</td>
                            <td><span class="equals"></span>&#8361; 10,050,000</td>
                        </tr>
                    </tbody>
                </table>
                <div class="btn-area row">
                    <div class="col-lg-2 col-lg-offset-3"><a class="btn btn-goon" href="#">쇼핑계속</a></div>
                    <div class="col-lg-2"><a class="btn btn-trash" href="#">장바구니 비우기</a></div>
                    <div class="col-lg-2"><a class="btn btn-order" href="#">주문하기</a></div>
                </div>
            </section>
        </div>
    </main>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/footer.php'); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/docfoot.php'); ?>
</body>
</html>
