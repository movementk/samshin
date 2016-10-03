<?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/dochead_sub.php'); ?>
<link href="/assets/css/mypage.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/header.php'); ?>
    <main id="content" tabindex="-1" class="mypage confirm">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4">
                    <div class="confirm-form">
                        <h3>비밀번호를 입력해 주세요.</h3>
                        <p>게시글 작성시 입력하셨던 비밀번호를 입력해주세요.</p>
                        <form>
                            <div class="form-group">
                                <label for="confirm-pw" class="sr-only">비밀번호</label>
                                <input id="confirm-pw" class="form-control" type="password">
                                <button type="button" class="btn">확인</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/footer.php'); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/docfoot.php'); ?>
</body>
</html>
