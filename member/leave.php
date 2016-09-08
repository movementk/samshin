<?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/dochead_sub.php'); ?>
<link href="/assets/css/member.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/header.php'); ?>
    <main id="content" tabindex="-1" class="member leave">
        <div class="container">
            <header class="section-header">
                <h3>회원탈퇴</h3>
                <p>
                    앞으로는 회원님들께더 나은 서비스를 제공하기 위하여 더욱 노력하겠습니다.
                </p>
            </header>
            <div class="leave-form">
                <form>
                    <p class="notify">아래정보를 입력하신후 회원탈퇴버튼을 클릭하시면 탈퇴처리됩니다.</p>
                    <div class="form-group">
                        <label for="user-id" class="sr-only">아이디</label>
                        <input id="user-id" class="form-control" type="text" placeholder="아이디">
                    </div>
                    <div class="form-group">
                        <label for="user-pw" class="sr-only">비밀번호</label>
                        <input id="user-pw" class="form-control" type="text" placeholder="비밀번호">
                    </div>
                    <div class="btn-area row">
                        <div class="col-lg-6 col-lg-offset-3">
                            <button class="btn btn-block btn-leave" type="submit">회원탈퇴</button>
                        </div>
                    </div>
                </form>
            </div>
            <section class="notice">
                <h5>유의사항</h5>
                <ul>
                    <li>
                        <h6>즉시 재가입 가능</h6>
                        <p><em>회원탈퇴</em>를 신청하면, 해당 <em>아이디는 즉시탈퇴</em> 처리되며, 이후 바로 같은 <br class="visible-lg">아이디로 가입 할 수 없게 됩니다.</p>
                    </li>
                    <li>
                        <h6>회원정보 및 서비스 정보 삭제</h6>
                        <p>회원탈퇴 즉시 <em>회원정보는 즉시삭제</em>되며 아래 <em>회원제 서비스의 정보도 삭제</em> 됩니다.</p>
                        <ul>
                            <li>기본 회원정보 : DB에 저장되어있는 기본 회원정보(이름/주소/전화번호등)가 삭제 됩니다.</li>
                            <li>결제내역 삭제 : 기존에 결제한 서비스가 모두 삭제 됩니다.</li>
                            <li>게시물 및 등록 자료 삭제 : 등록한 게시판의 게시물 및 덧글등이 삭제 됩니다.</li>
                        </ul>
                    </li>
                    <li>
                        <h6>회원 탈퇴에 따른 이용내역 삭제</h6>
                        <p>회원탈퇴를 신청하면, 모든 이용내역이 삭제되어 복구가 불가능 하게 됩니다.</p>
                    </li>
                </div>
            </section>
        </div>
    </main>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/footer.php'); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/docfoot.php'); ?>
</body>
</html>
