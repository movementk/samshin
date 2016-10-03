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
            <div class="qna-view">
                <table class="table">
                    <tbody>
                        <tr>
                            <td colspan="2">
                                <h5>상품문의 게시글의 제목이 노출되는 영역입니다.</h5>
                            </td>
                        </tr>
                        <tr class="prop">
                            <td>
                                <dl>
                                    <dt>작성자</dt>
                                    <dd>movementk</dd>
                                </dl>
                            </td>
                            <td>
                                <dl class="date">
                                    <dt>작성일</dt>
                                    <dd>2016-09-01</dd>
                                </dl>
                                <dl class="hits">
                                    <dt>조회수</dt>
                                    <dd>123</dd>
                                </dl>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="details">
                                    컨텐츠 노출 영역
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <dl class="attach">
                                    <dt>첨부파일</dt>
                                    <dd><a href="#">2312131.jpg</a></dd>
                                    <dd><a href="#">2312131.jpg</a></dd>
                                    <dd><a href="#">2312131.jpg</a></dd>
                                </dl>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="btn-area row">
                    <div class="col-lg-1">
                        <a class="btn btn-cancel" href="#">수정</a>
                    </div>
                    <div class="col-lg-1">
                        <a class="btn btn-cancel" href="#">삭제</a>
                    </div>
                    <div class="col-lg-2 col-lg-offset-8">
                        <button type="submit" class="btn btn-list btn-primary">목록보기</button>
                    </div>
                </div>
            </div>
            <div class="comment">
                <div class="comment-write">
                    <form>
                        <div class="form-group">
                            <textarea class="form-control" cols="100" rows="10"></textarea>
                            <button type="submit" class="btn btn-submit">등록</button>
                        </div>
                    </form>
                </div>
                <div class="comment-list">
                    <div class="comment-item">
                        <div class="comment-title">
                            <h6>무브먼트케이</h6>
                            <span class="date">2016-09-01</span>
                        </div>
                        <div class="comment-details">
                            작성한 댓글이 노출되는 영역입니다.작성한 댓글이 노출되는 영역입니다.작성한 댓글이 노출되는 영역입니다.
                        </div>
                        <div class="comment-menu">
                            <ul>
                                <li class="edit"><a href="#">수정</a></li>
                                <li class="delete"><a href="#">삭제</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="comment-item">
                        <div class="comment-title">
                            <h6>무브먼트케이</h6>
                            <span class="date">2016-09-01</span>
                        </div>
                        <div class="comment-details">
                            작성한 댓글이 노출되는 영역입니다.작성한 댓글이 노출되는 영역입니다.작성한 댓글이 노출되는 영역입니다.
                        </div>
                        <div class="comment-menu">
                            <ul>
                                <li class="edit"><a href="#">수정</a></li>
                                <li class="delete"><a href="#">삭제</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/footer.php'); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/docfoot.php'); ?>
</body>
</html>
