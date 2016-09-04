<?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/dochead_sub.php'); ?>
<link href="/assets/css/mypage.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/header.php'); ?>
    <main id="content" tabindex="-1" class="mypage cash-history">
        <div class="container">
            <header class="page-header">
                <h3>CASH HISTORY</h3>
                <p>
                    본 포인트는 유효기간 없이 언제든지 사용하실수 있습니다.<br>
                    본 포인트는 저희 사이트에서 현금과 동일하게 사용하실수 있습니다.
                </p>
            </header>
            <div class="history-list">
                <table class="table">
                    <thead>
                        <tr>
                            <th>등록일</th>
                            <th>결제내역</th>
                            <th>결제방식</th>
                            <th>결제금액</th>
                            <th>구분</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>2016-08-23 18:56:56</td>
                            <td>[충전] 100,000 포인트</td>
                            <td>실시간계좌이체</td>
                            <td>100,000 원</td>
                            <td>미입금</td>
                        </tr>
                        <tr>
                            <td>2016-08-23 18:56:56</td>
                            <td>[충전] 100,000 포인트</td>
                            <td>실시간계좌이체</td>
                            <td>100,000 원</td>
                            <td>미입금</td>
                        </tr>
                        <tr>
                            <td>2016-08-23 18:56:56</td>
                            <td>[충전] 100,000 포인트</td>
                            <td>실시간계좌이체</td>
                            <td>100,000 원</td>
                            <td>미입금</td>
                        </tr>
                        <tr>
                            <td>2016-08-23 18:56:56</td>
                            <td>[충전] 100,000 포인트</td>
                            <td>실시간계좌이체</td>
                            <td>100,000 원</td>
                            <td>미입금</td>
                        </tr>
                        <tr>
                            <td>2016-08-23 18:56:56</td>
                            <td>[충전] 100,000 포인트</td>
                            <td>실시간계좌이체</td>
                            <td>100,000 원</td>
                            <td>미입금</td>
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
