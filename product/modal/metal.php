<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="닫기"></button>
    <h4 class="modal-title">METAL <i>선명도</i></h4>
</div>
<div class="modal-body metal">
    <div class="figure">
        <p><img class="img-responsive" src="/assets/images/product/img_help_metal_1.jpg" alt=""></p>
    </div>
    <div class="btn-list">
        <ul>
            <li class="active"><a class="btn btn-round btn-block" href="#">플래티늄 (PT)</a></li>
            <li><a class="btn btn-round btn-block" href="#">18K / 14K골드</a></li>
            <li><a class="btn btn-round btn-block" href="#">화이트 골드</a></li>
            <li><a class="btn btn-round btn-block" href="#">핑크 골드</a></li>
        </ul>
    </div>
    <div class="explain">
        <ul>
            <li class="active">
                <h5>플래티넘 / PT</h5>
                <div>
                    <p>
                        플래티넘은 화학 원소 "백금(PT)"을 뜻하는데 금(GOLD)보다 강하고 내구성이 우수한 금속입니다.<br>
                        우리 나라에서는 백금(白金)이라는 한자어가 하얀 금을 뜻해 화이트 골드와 혼돈해서 불리고 있지만 90%~95%의 백금에 다른 금속이 합금 되어 제작되는 금과는 완전히 다른 금속입니다.
                    </p>
                    <p>
                        백금은 금보다 단단하며 융점이 높아 작업하기 힘들지만, 형태의 변형이 매우 적기 때문에 다이아몬드에 셋팅시 가장 걸맞는 금속입니다. 또 화이트 골드와 달리 순수한 화이트 컬러인 만큼 표면 처리(도금)를 하지 않으며 오래 착용해도 색상 변화가 없기 때문에 인기가 많습니다.
                    </p>
                    <p>
                        순도에 따라 850ppt, 900ppt, 950ppt, 1000ppt의 각인으로 표기되며 우리나라에서는 주로 900ppt와 950ppt를 사용합니다.
                    </p>
                </div>
            </li>
            <li>
                <h5>18K / 14K골드</h5>
                <div>
                    <p>
                        내용 필요
                    </p>
                </div>
            </li>
            <li>
                <h5>화이트</h5>
                <div>
                    <p>
                        내용 필요
                    </p>
                </div>
            </li>
            <li>
                <h5>핑크 골드</h5>
                <div>
                    <p>
                        내용 필요
                    </p>
                </div>
            </li>
        </ul>
    </div>
</div>
<script>
    (function($) {
        $(document).on('click', '.modal .btn-list > ul > li > a', function(e) {
            var clickedIndex = $(this).parent().index();
            $(this).parent().siblings('.active').removeClass('active');
            $(this).parent().addClass('active');
            $(".modal .figure img").attr('src', '/assets/images/product/img_help_metal_'+(clickedIndex+1)+'.jpg');
            $(".modal .explain ul li.active").removeClass('active');
            $(".modal .explain ul li").eq(clickedIndex).addClass('active');
            e.preventDefault();
        });
    })(jQuery);
</script>
