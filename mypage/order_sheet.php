<?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/dochead_sub.php'); ?>
<link href="/assets/css/mypage.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/header.php'); ?>
    <main id="content" tabindex="-1" class="mypage order sheet">
        <div class="container">
            <header class="page-header">
                <h3>주문하기</h3>
                <p>
                    본 포인트는 유효기간 없이 언제든지 사용하실수 있습니다.<br>
                    본 포인트는 저희 사이트에서 현금과 동일하게 사용하실수 있습니다.
                </p>
            </header>
            <div class="order-step">
               <ol>
                   <li><span>장바구니</span></li>
                   <li class="active"><span>주문서작성</span></li>
                   <li><span>주문완료</span></li>
               </ol>
            </div>
            <section class="product-list cart-list">
                <h5>장바구니 리스트</h5>
                <table class="table">
                    <thead>
                        <tr>
                            <th>선택</th>
                            <th></th>
                            <th>상품명/옵션</th>
                            <th>적립금</th>
                            <th>사용가능적립금</th>
                            <th>수량</th>
                            <th>총 주문금액</th>
                            <th>배송관련 및 기타</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><label class="check"><input type="checkbox"></label></td>
                            <td>
                                <img src="/assets/images/mypage/img_dia_dummy.jpg" alt="">
                            </td>
                            <td class="title">
                                <h5>세그레또 5부 다이아몬드 반지</h5>
                                <p class="lap">현대,우신,GIA 감정서 선택 상품</p>
                                <dl class="order-info">
                                    <dt>상품옵션</dt>
                                    <dd>함량 18K 핑크 골드 1개</dd>
                                </dl>
                            </td>
                            <td><p class="point">100,050P</p></td>
                            <td><p class="point">100,050P</p></td>
                            <td>
                                <p class="quantity">1</p>
                                <p><a class="btn btn-modify" href="#">수정하기</a></p>
                                <p><a class="btn btn-delete" href="#">삭제하기</a></p>
                            </td>
                            <td><p class="price">950,000원</p></td>
                            <td>
                                <p>세금계산서 발급불가</p>
                                <p>현금영수증 발급불가</p>
                            </td>
                        </tr>
                        <tr>
                            <td><label class="check"><input type="checkbox"></label></td>
                            <td>
                                <img src="/assets/images/mypage/img_dia_dummy.jpg" alt="">
                            </td>
                            <td class="title">
                                <h5>세그레또 5부 다이아몬드 반지</h5>
                                <p class="lap">현대,우신,GIA 감정서 선택 상품</p>
                                <dl class="order-info">
                                    <dt>상품옵션</dt>
                                    <dd>함량 18K 핑크 골드 1개</dd>
                                </dl>
                            </td>
                            <td><p class="point">100,050P</p></td>
                            <td><p class="point">100,050P</p></td>
                            <td>
                                <p class="quantity">1</p>
                                <p><a class="btn btn-modify" href="#">수정하기</a></p>
                                <p><a class="btn btn-delete" href="#">삭제하기</a></p>
                            </td>
                            <td><p class="price">950,000원</p></td>
                            <td>
                                <p>세금계산서 발급불가</p>
                                <p>현금영수증 발급불가</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <ul class="notify">
                    <li>해외배송 상품일 경우 배송료가 추가로 발생될 수 있습니다.</li>
                    <li>수량 및 주문금액이 틀리지 않는지 반드시 확인하시기 바랍니다.</li>
                </ul>
                <div class="btn-area row">
                    <div class="col-lg-2 col-lg-offset-4"><a class="btn btn-wish" href="#">내가 찜한 상품보기</a></div>
                    <div class="col-lg-2"><button class="btn btn-recal" type="button">장바구니 재계산</button></div>
                </div>
            </section>
            <section class="payment">
                <h5>주문합계금액</h5>
                <table class="table">
                    <thead>
                        <tr>
                            <th>상품구매금액</th>
                            <th>총배송비</th>
                            <th>사용포인트</th>
                            <th>결제될 주문 총금액</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>950,000 원</td>
                            <td><span class="plus"></span>0 원</td>
                            <td><span class="minus"></span>0 P</td>
                            <td><span class="equals"></span>&#8361; 10,050,000</td>
                        </tr>
                    </tbody>
                </table>
            </section>
            <section class="orderer">
                <h5>배송회원정보</h5>
                <table class="table">
                    <tbody>
                        <tr>
                            <th>주문자명</th>
                            <td><input class="form-control" type="text"></td>
                        </tr>
                        <tr>
                            <th>전화번호</th>
                            <td><input class="form-control" type="text"></td>
                        </tr>
                        <tr>
                            <th>휴대폰번호</th>
                            <td><input class="form-control" type="text"></td>
                        </tr>
                        <tr>
                            <th>이메일</th>
                            <td><input class="form-control" type="email"></td>
                        </tr>
                        <tr>
                            <th>입금은행</th>
                            <td>
                                <select class="form-control">
                                    <option value="">파리은행 : 777-777-77777   예금주 : 삼신다이아몬드</option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>
            <section class="shipping">
                <h5>배송지정보</h5>
                <p class="sa"><label class="check"><input type="checkbox"> 위 주문자정보와 동일합니다</label></p>
                <table class="table">
                    <tbody>
                        <tr>
                            <th>수령인</th>
                            <td><input class="form-control" type="text"></td>
                        </tr>
                        <tr>
                            <th>휴대폰번호</th>
                            <td><input class="form-control" type="text"></td>
                        </tr>
                        <tr class="address">
                            <th>주소</th>
                            <td>
                                <p class="zipcode"><input class="form-control" type="text"> <button class="btn btn-zipcode" type="button">우편번호</button></p>
                                <p class="default"><input class="form-control" type="text"></p>
                                <p class="details"><input class="form-control" type="text"></p>
                            </td>
                        </tr>
                        <tr class="ask">
                            <th>기타요청사항</th>
                            <td><input class="form-control" type="text"></td>
                        </tr>
                    </tbody>
                </table>
                <ul class="notify">
                    <li>회원정보를 변경하시려면 마이페이지 &gt; 회원정보 변경후 주문해주시거나 주문후 변경해주세요</li>
                </ul>
            </section>
            <section class="pay-method">
                <h5>결제방법</h5>
                <table class="table">
                    <tbody>
                        <tr class="method">
                            <th>결제수단</th>
                            <td>
                                <label><input type="radio"> 신용카드</label>
                                <label><input type="radio"> 휴대폰 결제</label>
                                <label><input type="radio"> 실시간 계좌이체</label>
                                <label><input type="radio"> 가상계좌(무통장입금)</label>
                                <label><input type="radio"> 포인트 결제</label>
                            </td>
                        </tr>
                        <tr>
                            <th>무이자할부</th>
                            <td></td>
                        </tr>
                        <tr class="ask">
                            <th>청구할인</th>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </section>
            <section class="notice">
                <h6>결제전 유의사항</h6>
                <ul>
                    <li>장바구니에 담긴 상품은 하루동안만 저장됩니다.</li>
                    <li>결제금액의 총 합계는 적립금 적용전의 가격입니다.</li>
                    <li>보유하고 계신 적립금은 주문서 작성시 사용가능합니다.</li>
                    <li>배송기간은 등록업체 및 사정에 의해 차이있을 수 있습니다.</li>
                </ul>
            </section>
            <div class="btn-area row">
                <div class="col-lg-2 col-lg-offset-4"><a class="btn btn-cancel" href="#">결제취소하기</a></div>
                <div class="col-lg-2"><button class="btn btn-pay" type="submit">결제하기</button></div>
            </div>
        </div>
    </main>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/footer.php'); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/docfoot.php'); ?>
    <script>
        $(document).on('click', '.check', function(e) {
            if( $(e.target).is("label") ) {
                $(this).toggleClass('active');
            }
        });
    </script>
</body>
</html>
