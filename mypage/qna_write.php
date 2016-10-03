<?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/dochead_sub.php'); ?>
<link href="/assets/css/mypage.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/header.php'); ?>
    <main id="content" tabindex="-1" class="mypage qna">
        <div class="container">
            <header class="page-header">
                <h3>상품문의</h3>
                <p>
                    물품에 대한 궁금한 사항을 질문하시면, 판매자가 답변을 해드립니다.<br>
                    본 게시판은 물품에 대한 문의게시판이오니 다른 목적이나 불건전한 내용을 올리실 경우 삭제 될 수 있습니다.<br>
                    해당질문에 대한 답변글은 질문내용을 클릭하신후 답변버튼을 클릭하여 입력하세요.
                </p>
            </header>
            <div class="product-info">
                <figure>
                    <img src="/assets/images/mypage/img_dia_dummy.jpg">
                    <figcaption>
                        <h5>세그레또 5부 다이아몬드 반지</h5>
                        <p class="lab">현대,우신,GIA 감정서 선택 상품</p>
                        <p class="price">100,000,000원</p>
                    </figcaption>
                </figure>
            </div>
            <div class="qna-write">
                <table class="table">
                    <tbody>
                        <tr>
                            <th>작성자</th>
                            <td>movementk</td>
                        </tr>
                        <tr class="password">
                            <th>비밀번호</th>
                            <td><input class="form-control" type="password"></td>
                        </tr>
                        <tr class="email">
                            <th>이메일</th>
                            <td><input class="form-control" type="email"></td>
                        </tr>
                        <tr class="secret">
                            <th>비밀글</th>
                            <td>
                                <input type="checkbox"> 비밀글 설정 (비밀번호를 모르실 경우 게시글 확인불가)
                            </td>
                        </tr>
                        <tr class="title">
                            <th>제목</th>
                            <td><input class="form-control" type="text"></td>
                        </tr>
                        <tr class="details">
                            <td colspan="2">
                                <div class="editor">
                                    #에디터 영역
                                </div>
                            </td>
                        </tr>
                        <tr class="attach">
                            <th>첨부파일</th>
                            <td><input class="form-control" type="file"></td>
                        </tr>
                        <tr class="captcha">
                            <th>도배방지키</th>
                            <td>
                                <input class="form-control" type="text">
                                <div class="figure"></div>
                                <p>보이는 도배방지키 숫자를 입력하세요.</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="btn-area row">
                    <div class="col-lg-2 col-lg-offset-4">
                        <a class="btn btn-cancel" href="#">목록보기</a>
                    </div>
                    <div class="col-lg-2">
                        <button type="submit" class="btn btn-write btn-primary">글쓰기</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/footer.php'); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/docfoot.php'); ?>
</body>
</html>
