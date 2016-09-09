<?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/dochead_sub.php'); ?>
<link href="/assets/css/member.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/header.php'); ?>
    <main id="content" tabindex="-1" class="member join step1">
        <div class="container">
            <header class="section-header">
                <h3>JOIN</h3>
                <p>
                    다이아아울렛의 회원이 되어 더욱 다양한 혜택을 누려보세요.
                </p>
            </header>
            <div class="terms-form">
                <form>
                    <div class="terms">
                        <h5>이용약관</h5>
                        <div class="terms-body">

                        </div>
                        <div class="form-group">
                            <label class="check"><input type="checkbox"> 이용약관에 동의합니다.</label>
                        </div>
                    </div>
                    <div class="terms">
                        <h5>개인정보취급방침</h5>
                        <div class="terms-body">

                        </div>
                        <div class="form-group">
                            <label class="check"><input type="checkbox"> 개인정보취급방침에 동의합니다.</label>
                        </div>
                    </div>
                    <div class="btn-area row">
                        <div class="col-xs-5 col-xs-offset-1 col-sm-3 col-sm-offset-3  col-lg-2 col-lg-offset-4"><button class="btn btn-block btn-cancel" type="button">회원가입 취소</button></div>
                        <div class="col-xs-5 col-sm-3 col-lg-2"><button class="btn btn-block btn-join btn-primary" type="button">회원가입 하기</button></div>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/footer.php'); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/docfoot.php'); ?>
    <script>
        $(document).on('click', '.member .check', function(e) {
            if( $(e.target).is("label") ) {
                $(this).toggleClass('active');
            }
        });
    </script>
</body>
</html>
