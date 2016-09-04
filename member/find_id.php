<?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/dochead_sub.php'); ?>
<link href="/assets/css/member.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/header.php'); ?>
    <main id="content" tabindex="-1" class="member find">
        <div class="container">
            <section class="find-id">
                <header class="section-header">
                    <h3>SEARCH ID</h3>
                    <p>
                        회원정보의 등록된 이름과 이메일 정보가 아니면, 없는 회원정보로 간주하여 아이디 정보를 찾지 못합니다.<br>
                        정보를 올바르게 입력하셨으면 아이디를 알림창으로 알려드립니다.<br>
                        가입하셨을 때의 정보를 잘 기억이 나지 않아 회원님 본인의 정보를 모르실 때는 관리자(<a href="mailto:admin@samshin.co.kr">admin@samshin.co.kr</a>)에게 이메일로 문의를해주시거나<br>
                        고객지원 게시판으로 문의해 주시기 바랍니다.
                    </p>
                </header>
                <div class="find-form">
                    <form>
                        <div class="form-group">
                            <label for="user-name" class="sr-only">이름</label>
                            <input id="user-name" type="text" class="form-control" placeholder="이름">
                        </div>
                        <div class="form-group">
                            <label for="user-email" class="sr-only">이메일</label>
                            <input id="user-email" type="email" class="form-control" placeholder="이메일">
                        </div>
                        <div class="btn-area">
                            <button class="btn btn-primary btn-block" type="submit">확인</button>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </main>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/footer.php'); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/docfoot.php'); ?>
</body>
</html>
