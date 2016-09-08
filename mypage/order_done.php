<?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/dochead_sub.php'); ?>
<link href="/assets/css/mypage.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/header.php'); ?>
    <main id="content" tabindex="-1" class="mypage order done">
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
                   <li><span>장바구니</span></li>
                   <li><span>주문서작성</span></li>
                   <li class="active"><span>주문완료</span></li>
               </ol>
            </div>
            <section class="message">
                <h3>상품주문이 정상적으로 완료되었습니다.</h3>
                <p>
                    삼신 다아아 아울렛 을 이용해주셔서 감사합니다.<br>
                    주문 내역 확인 및 배송 조회는 My Page 에서 확인 하실수 있습니다.
                </p>
                <div class="order-num">
                    <dl>
                        <dt>상품 주문번호</dt>
                        <dd>1471930965-35</dd>
                    </dl>
                </div>
            </section>
            <section class="banking">
                <h5>무통장입금안내</h5>
                <table class="table">
                    <tbody>
                        <tr>
                            <th>국민은행</th>
                            <td>1666-6666-6646 예금주: 홍길동</td>
                        </tr>
                        <tr>
                            <th>대구은행</th>
                            <td>1666-6666-6646 예금주: 홍길동</td>
                        </tr>
                        <tr>
                            <th>하나은행</th>
                            <td>1666-6666-6646 예금주: 홍길동</td>
                        </tr>
                    </tbody>
                </table>
            </section>
            <div class="btn-area row">
                <div class="col-lg-2 col-lg-offset-4"><a class="btn btn-goon" href="#">쇼핑계속하기</a></div>
                <div class="col-lg-2"><a class="btn btn-view" href="#">주문내역 확인하기</a></div>
            </div>
        </div>
    </main>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/footer.php'); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/docfoot.php'); ?>
</body>
</html>
