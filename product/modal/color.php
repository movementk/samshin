<div class="modal-dialog color" role="document">
    <div class="modal-content">
        <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="닫기"></button>
    <h4 class="modal-title">COLOR <i>색상</i></h4>
</div>
        <div class="modal-body">
    <div class="row">
        <div class="col-xs-12 col-sm-7">
            <div class="summary">
                <p>
                    컬러는 보석이 얼마나 무색에 가까운지 평가하는 부분이며 다이아몬드의 마스터 스톤과 비교, 명도와 채도를 통해 D~Z 등급까지 24개 등급으로 나뉘어 집니다.<br>
                    무색에 가까울 수록 D 컬러에 가까워지며 Z 컬러 이상은 팬시 컬러로 분류 됩니다.
                </p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-5">
            <div class="figure">
                <p><img class="img-responsive" src="/assets/images/product/img_help_color_1.jpg" alt=""></p>
            </div>
        </div>
    </div>
    <div class="slider"><div></div></div>
    <div class="slider-values">
        <ol>
            <li class="active"><a href="#">D</a></li>
            <li><a href="#">E</a></li>
            <li><a href="#">F</a></li>
            <li><a href="#">G</a></li>
            <li><a href="#">H</a></li>
            <li><a href="#">I</a></li>
            <li><a href="#">J</a></li>
            <li><a href="#">K</a></li>
            <li><a href="#">L</a></li>
            <li><a href="#">M</a></li>
            <li><a href="#">N~Z</a></li>
        </ol>
    </div>
    <div class="explain">
        <ul>
            <li class="active">
                <h5>D.E.F</h5>
                <div>
                    <p>
                        D.E.F등급은 컬러리스(Colorless)로 간주되며 D와E컬러는 사실상 색이 없는 것과 다름 없으며 F컬러는 칼라 감별 케이스에서만 보이는 거의 육안으로 확인할 수 없는 색을 지니고 있습니다. D.E.F 등급간의 차이점은 색이라고 하기보다 투명도에서의 아주 작은 차이라고 할 수 있습니다.
                    </p>
                </div>
            </li>
            <li>
                <h5>G.H.I.J</h5>
                <div>
                    <p>
                        G.H.I.J 컬러 등급은 니어 컬러리스(Near Colorless)입니다. 이 등급의 다이아몬드는 칼라 감별 케이스에서는 보이고 케이스 밖에서는 거의 무색에 가깝게 보이는 다이아몬드입니다. 이 등급은 비교적 무색에 가까우면서 가격이 낮기때문에 세계적으로 인기가 높은 컬러입니다.
                    </p>
                </div>
            </li>
            <li>
                <h5>K.L.M</h5>
                <div>
                    <p>
                        K.L.M등급은 페인트 옐로우 (Faint yellow)입니다.<br>
                        이 범위의 다이아몬드들은 칼라 감별 케이스에서 보거나 밖에서 봐도 매우 옅은 옐로우 컬러를 띄는 다이아몬드입니다.
                    </p>
                </div>
            </li>
            <li>
                <h5>N~R</h5>
                <div>
                    <p>
                        N에서 R까지의 다이아몬드는 베리 라이트 옐로우 (Very Light yellow)로 간주되며 이 범위의 다이아몬드들은 셋팅 되었을 때도 그 색을 느끼실 수 있습니다.
                    </p>
                </div>
                <h5>S~Z</h5>
                <div>
                    <p>
                        S~Z 다이아몬드는 라이트 옐로우(Light yellow)입니다.<br>
                        이 등급은 육안으로도 색상이 뚜렷하게 확인이 되며 Z컬러 이후는 팬시 컬러로 분류 됩니다.
                    </p>
                </div>
            </li>
        </ul>
    </div>
</div>
    </div>
</div>
<script>
    (function($) {
        $( ".modal .slider > div:eq(0)" ).slider({
            range: 'min',
            min: 1,
            max: 11,
            step: 1,
            slide: function(event, ui) {
                $(".modal .figure img").attr('src', '/assets/images/product/img_help_color_1.jpg');
                $(".modal .slider-values ol li.active").removeClass('active');
                $(".modal .slider-values ol li").eq(ui.value-1).addClass('active');
                $(".modal .explain ul li.active").removeClass('active');
                if (ui.value > 0 && ui.value <= 3) {
                    $(".modal .figure img").attr('src', '/assets/images/product/img_help_color_2.jpg');
                    $(".modal .explain ul li").eq(0).addClass('active');
                } else if (ui.value > 3 && ui.value <= 7) {
                    $(".modal .figure img").attr('src', '/assets/images/product/img_help_color_3.jpg');
                    $(".modal .explain ul li").eq(1).addClass('active');
                } else if (ui.value > 7 && ui.value <= 10) {
                    $(".modal .figure img").attr('src', '/assets/images/product/img_help_color_4.jpg');
                    $(".modal .explain ul li").eq(2).addClass('active');
                } else {
                    $(".modal .figure img").attr('src', '/assets/images/product/img_help_color_5.jpg');
                    $(".modal .explain ul li").eq(3).addClass('active');
                }
            }
        });
    })(jQuery);
</script>
