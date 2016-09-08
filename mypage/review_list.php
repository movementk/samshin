<?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/dochead_sub.php'); ?>
<link href="/assets/css/mypage.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/header.php'); ?>
    <main id="content" tabindex="-1" class="mypage review list">
        <div class="container">
            <header class="page-header">
                <h3>REVIEWS</h3>
                <p>
                    고객님의 궁금하신 질문이나 알고싶은 모든 것<br>
                    친절하게 답해 드립니다.
                </p>
            </header>
            <div class="review-list">
                <table class="table">
                    <thead>
                        <tr>
                            <th>번호</th>
                            <th>제목</th>
                            <th>아이디</th>
                            <th>작성일</th>
                            <th>조회수</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>100</td>
                            <td class="title"><a href="#">사이즈문의 드립니다.</a> <span>(0)</span> <i class="icon-lock"></i> </td>
                            <td>movementk</td>
                            <td>2016-07-01</td>
                            <td>123</td>
                        </tr>
                        <tr>
                            <td>100</td>
                            <td class="title"><a href="#">사이즈문의 드립니다.</a> <span>(0)</span> <i class="icon-lock"></i> </td>
                            <td>movementk</td>
                            <td>2016-07-01</td>
                            <td>123</td>
                        </tr>
                        <tr>
                            <td>100</td>
                            <td class="title"><a href="#">사이즈문의 드립니다.</a> <span>(0)</span> <i class="icon-lock"></i> </td>
                            <td>movementk</td>
                            <td>2016-07-01</td>
                            <td>123</td>
                        </tr>
                        <tr>
                            <td>100</td>
                            <td class="title"><a href="#">사이즈문의 드립니다.</a> <span>(0)</span> <i class="icon-lock"></i> </td>
                            <td>movementk</td>
                            <td>2016-07-01</td>
                            <td>123</td>
                        </tr>
                        <tr>
                            <td>100</td>
                            <td class="title"><a href="#">사이즈문의 드립니다.</a> <span>(0)</span> <i class="icon-lock"></i> </td>
                            <td>movementk</td>
                            <td>2016-07-01</td>
                            <td>123</td>
                        </tr>
                    </tbody>
                </table>
                <div class="btn-area row">
                    <div class="col-lg-1 col-lg-offset-10"><a class="btn btn-list" href="#">목록보기</a></div>
                    <div class="col-lg-1"><a class="btn btn-write btn-primary" href="#">글쓰기</a></div>
                </div>
                <?php require($_SERVER["DOCUMENT_ROOT"].'/inc/paging.php'); ?>
            </div>
        </div>
    </main>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/footer.php'); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/docfoot.php'); ?>
</body>
</html>
