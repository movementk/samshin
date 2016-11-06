<div class="modal-dialog carat" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="닫기"></button>
            <h4 class="modal-title">CARAT <i>중량</i></h4>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-xs-12 col-sm-7">
                    <div class="summary">
                        <p>
                            캐럿(Carat)은 다이아몬드의 중량을 말하며 다이아몬드를 비롯한 보석들의 무게를 잴때 사용합니다. 현대 캐럿(Carat)이라는 체계는 캐럽(Carob) 씨앗에서 유래 되었는데, 고대에는 정밀한 저울이 없었기 때문에 초기의 보석 상인들은  균일한 캐럽 씨앗을 이용하여 저울의 평형추로 사용하였다고 합니다.
                        </p>
                        <p>
                            다이아몬드의 중량을 측정하는 단위는 국제적 단위인 매트릭 캐럿(Matric carat)으로 ct라는 약자를 사용하며 1캐럿은 0.2g(200mg)에 해당합니다. 국내에서는 부,리,모라는 단위를 사용하는데  0.1ct은 1부, 0.3ct은 3부로 불리고 있습니다.
                        </p>
                        <p>
                            다이아몬드 가치 평가 중 중량이 가장 큰 영향을 미칩니다.<br>
                            그래서 다이아몬드 구매 시 다른 등급들이 동일하다면 중량이 많이 나가는 다이아몬드를 구매하시길 권해 드리며 여러 개의 작은 다이아몬드 보다는 한 개의 큰 다이아몬드를 선택 하는게 좋습니다.<br>
                            예로 0.25캐럿의 4개의 다이아몬드보다 1캐럿 다이아몬드의 가치가 큽니다.
                        </p>
                        <p>예산안에서 가급적 큰 다이아몬드를 구매하시길 추천해 드립니다.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-5">
                    <div class="figure">
                        <p><img class="img-responsive" src="/assets/images/product/img_help_carat_1.jpg" alt=""></p>
                    </div>
                </div>
            </div>
            <div class="slider"><div></div></div>
            <div class="slider-values">
                <ol>
                    <li class="active"><a href="#">.25ct</a></li>
                    <li><a href="#">.50ct</a></li>
                    <li><a href="#">.75ct</a></li>
                    <li><a href="#">.1ct</a></li>
                    <li><a href="#">1.25ct</a></li>
                    <li><a href="#">1.50ct</a></li>
                    <li><a href="#">2ct</a></li>
                    <li><a href="#">3ct</a></li>
                    <li><a href="#">4ct</a></li>
                    <li><a href="#">5ct</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<script>
    (function($) {
        $( ".modal .slider > div:eq(0)" ).slider({
            range: 'min',
            min: 1,
            max: 10,
            step: 1,
            slide: function(event, ui) {
                $(".modal .figure img").attr('src', '/assets/images/product/img_help_carat_'+(ui.value)+'.jpg');
                $(".modal .slider-values ol li.active").removeClass('active');
                $(".modal .slider-values ol li").eq(ui.value-1).addClass('active');
            }
        });
    })(jQuery);
</script>
