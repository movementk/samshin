<?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/dochead_sub.php'); ?>
<link href="/assets/css/member.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/header.php'); ?>
    <main id="content" tabindex="-1">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-5 col-md-offset-0">
                    <section class="login">
                        <header>
                            <h3>LOGIN</h3>
                            <p>로그인하시면 다이아아울렛의 다양한 혜택을 누리실 수 있습니다.</p>
                        </header>
                        <div class="login-form">
                            <form>
                                <div class="form-group option">
                                    <label class="check"><input type="checkbox" name="" value=""> 자동 로그인</label>
                                    <label class="check"><input type="checkbox" name="" value=""> 아이디 저장</label>
                                </div>
                                <div class="form-group">
                                    <label for="login-id" class="sr-only">아이디</label>
                                    <input id="login-id" class="form-control" type="text" name="" placeholder="아이디">
                                </div>
                                <div class="form-group">
                                    <label for="login-pw" class="sr-only">비밀번호</label>
                                    <input id="login-pw" class="form-control" type="password" name="" placeholder="비밀번호">
                                </div>
                                <div class="btn-area">
                                    <button class="btn btn-primary btn-block" type="submit">로그인</button>
                                </div>
                            </form>
                        </div>
                        <div class="sns-login">
                            <ul>
                                <li><a class="btn btn-round btn-block facebook" href="#"><i class="icon-facebook-official"></i> Facebook <span class="visible-lg-inline">계정으로</span> 로그인</a></li>
                                <li><a class="btn btn-round btn-block kakao" href="#"><i></i> Kakao <span class="visible-lg-inline">계정으로</span> 로그인</a></li>
                                <li><a class="btn btn-round btn-block twitter" href="#"><i class="icon-twitter-rect"></i> Twitter <span class="visible-lg-inline">계정으로</span> 로그인</a></li>
                                <li><a class="btn btn-round btn-block gplus" href="#"><i class="icon-googleplus-rect"></i> Google <span class="visible-lg-inline">계정으로</span> 로그인</a></li>
                            </ul>
                        </div>
                    </section>
                </div>
                <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-1">
                    <section class="benefit">
                        <div class="for-member">
                            <header>
                                <h4>다이아아울렛 회원 혜택</h4>
                                <p>회원가입을 하시면 다양한 정보를 비롯해 보다 편리하게 다이아아울렛 서비스를 이용하실 수 있습니다.</p>
                            </header>
                            <div class="benefit-info">
                                회원가입혜택 노출영역
                            </div>
                        </div>
                        <div class="help-area">
                            <ul>
                                <li><p>아이디 또는 비밀번호를 잊어버리셨나요?</p> <a href="#">아이디/비밀번호 찾기</a></li>
                                <li><p>아직 회원가입이 되어있지 않으신가요?</p> <a href="#">회원가입하기</a></li>
                            </ul>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/footer.php'); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/docfoot.php'); ?>
    <script>
        $(document).on('click', '.login-form .form-group .check', function(e) {
            if( $(e.target).is("label") ) {
                $(this).toggleClass('active');
            }
        });
    </script>
</body>
</html>
