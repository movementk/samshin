<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="닫기"></button>
    <h4 class="modal-title">CLARITY <i>선명도</i></h4>
</div>
<div class="modal-body clarity">
    <div class="row">
        <div class="col-xs-12 col-sm-7">
            <div class="summary">
                <p>
                    다이아몬드는 천연 광물이기 때문에 각기 다른 내포물을 함유하고 있으며, 생성과 연마 단계에 따라서 클래리티 특징들이 생깁니다.<br>
                    사람의 얼굴이 각기 다르듯 다이아몬드도 내포물로 인해 모두 다른 얼굴을 갖고 있으며 똑같은 내포물을 지닌 두개의 다이아몬드는 없기 때문에 다이아몬드를 구별하는 특별한 역할이기도 하며 인조석과 구분할 수 있는 가장 중요한 요소입니다.
                </p>
                <p>
                    내포물은 내부(인클루전)와 외부(블레미시)에 있는 특징을 말하는데 일반적으로 외부 특징들보다는 내부 특징이 더 큰 영향을 미치는데 외부 내포물은 쉽게 제거할 수 있지만 내부 내포물은 중량을 감소시킬 수 있기 때문입니다.
                </p>
                <p>
                    내포물 등급은 FL, IF, VVS1, VVS2, VS1, VS2, SI1, SI2, I1, I2, I3의 11등급으로 분류 되고 있습니다.
                </p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-5">
            <div class="figure">
                <p><img class="img-responsive" src="/assets/images/product/img_help_clarity_1.jpg" alt=""></p>
            </div>
        </div>
    </div>
    <div class="slider"><div></div></div>
    <div class="slider-values">
        <ol>
            <li class="active"><a href="#">FL</a></li>
            <li><a href="#">IF</a></li>
            <li><a href="#">VVS1~VVS2</a></li>
            <li><a href="#">VS1~VS2</a></li>
            <li><a href="#">SI1~SI3</a></li>
            <li><a href="#">I1~I3</a></li>
        </ol>
    </div>
    <div class="explain">
        <ul>
            <li class="active">
                <h5>FL, IF</h5>
                <div>
                    <p>
                        내,외부 무결점 상태로 매우 드문 다이아몬드, 가치가 높음
                    </p>
                </div>
            </li>
            <li>
                <h5>VVS1~VVS2</h5>
                <div>
                    <p>
                        내용 필요
                    </p>
                </div>
            </li>
            <li>
                <h5>VS1~VS2</h5>
                <div>
                    <p>
                        내용 필요
                    </p>
                </div>
            </li>
            <li>
                <h5>SI1~SI3</h5>
                <div>
                    <p>
                        내용 필요
                    </p>
                </div>
            </li>
            <li>
                <h5>I1~I3</h5>
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
        $( ".modal .slider > div:eq(0)" ).slider({
            range: 'min',
            min: 1,
            max: 6,
            step: 1,
            slide: function(event, ui) {
                $(".modal .figure img").attr('src', '/assets/images/product/img_help_clarity_'+(ui.value)+'.jpg');
                $(".modal .slider-values ol li.active").removeClass('active');
                $(".modal .slider-values ol li").eq(ui.value-1).addClass('active');
                $(".modal .explain ul li.active").removeClass('active');
                if (ui.value > 0 && ui.value <= 2) {
                    $(".modal .explain ul li").eq(0).addClass('active');
                } else {
                    $(".modal .explain ul li").eq(ui.value-2).addClass('active');
                }
            }
        });
    })(jQuery);
</script>
