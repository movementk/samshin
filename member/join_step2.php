<?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/dochead_sub.php'); ?>
<link href="/assets/css/member.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/header.php'); ?>
    <main id="content" tabindex="-1" class="member join step2">
        <div class="container">
            <header class="section-header">
                <h3>JOIN</h3>
                <p>
                    다이아아울렛의 회원이 되어 더욱 다양한 혜택을 누려보세요.
                </p>
            </header>
            <div class="join-form">
                <h5>회원정보 입력</h5>
                <form>
                    <table class="table">
                        <tbody>
                            <tr class="user-id require">
                                <th><label for="user-id">아이디</label></th>
                                <td>
                                    <input id="user-id" type="text" class="form-control">
                                    <p class="help-text">4자 이상 입력해주세요.</p>
                                </td>
                            </tr>
                            <tr class="user-pw require">
                                <th><label for="user-pw">비밀번호</label></th>
                                <td>
                                    <input id="user-pw" type="password" class="form-control">
                                    <p class="help-text">영문,숫자 조합 8자 이상 입력해 주세요.</p>
                                </td>
                            </tr>
                            <tr class="user-pw require">
                                <th><label for="user-re-pw">비밀번호 확인</label></th>
                                <td><input id="user-re-pw" type="password" class="form-control"></td>
                            </tr>
                            <tr class="user-name require">
                                <th><label for="user-name">이름</label></th>
                                <td>
                                    <input id="user-name" type="text" class="form-control">
                                    <p class="help-text">실명으로 입력해 주세요. (실명인증 이용시 자동입력)</p>
                                </td>
                            </tr>
                            <tr class="user-email require">
                                <th><label for="user-email">이메일</label></th>
                                <td><input id="user-email" type="email" class="form-control"></td>
                            </tr>
                            <tr class="phone">
                                <th><label for="phone">전화번호</label></th>
                                <td><input id="phone" type="text" class="form-control"></td>
                            </tr>
                            <tr class="mobile require">
                                <th><label for="mobile">휴대폰</label></th>
                                <td><input id="mobile" type="text" class="form-control"></td>
                            </tr>
                            <tr class="address require">
                                <th>주소</th>
                                <td>
                                    <p class="zipcode">
                                        <label for="zipcode" class="sr-only">우편번호</label>
                                        <input id="zipcode" type="text" class="form-control">
                                        <button class="btn btn-primary" type="button">우편번호 검색</button>
                                    </p>
                                    <p class="defualt">
                                        <label for="address-default" class="sr-only">기본 주소</label>
                                        <input id="address-default" type="text" class="form-control">
                                    </p>
                                    <p class="details">
                                        <label for="address-details" class="sr-only">상세 주소</label>
                                        <input id="adress-details" type="text" class="form-control"></label>
                                    </p>
                                </td>
                            </tr>
                            <tr class="agree-email">
                                <th>이메일 수신동의</th>
                                <td>
                                    <label class="check"><input type="checkbox" name="" value=""> 이메일 수신을 동의합니다.</label>
                                </td>
                            </tr>
                            <tr class="sms-email">
                                <th>SMS 수신동의</th>
                                <td>
                                    <label class="check"><input type="checkbox" name="" value=""> SMS 수신을 동의합니다.</label>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="btn-area row">
                        <div class="col-xs-5 col-xs-offset-1 col-sm-3 col-sm-offset-3  col-lg-2 col-lg-offset-4"><button class="btn btn-block btn-cancel" type="button">회원가입 취소</button></div>
                        <div class="col-xs-5 col-sm-3 col-lg-2"><button class="btn btn-block btn-join btn-primary" type="submit">회원가입 하기</button></div>
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
