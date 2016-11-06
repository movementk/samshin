<div class="modal-dialog metal" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="닫기"></button>
            <h4 class="modal-title">METAL <i>함량</i></h4>
        </div>
        <div class="modal-body">
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
                        <h5>옐로우 골드 18K / 14K</h5>
                        <div>
                            <p>
                                옐로우 골드는 자연스럽고 아름다운 광택을 가지고 있고, 공기와 습기의 영향을 받지 않아 본연의 광택이 수천 년 동안 유지될 수 있습니다.<br>
                                아름다운 유색의 보석들이 반짝일 때 좋은 배경이 되기도 합니다.
                            </p>
                            <p>
                                순금은 무른 성질을 갖고 있어 주얼리로 제작하기에는 한계가 있기 때문에 강도 향상을 위해 다른 금속과 합금을 합니다.<br>
                                은, 구리, 아연 등의 금속과 혼합이 되며 그 비율에 따라 순도는 22K, 18K, 14K, 그리고 10K 네 가지가 있고 각인 표시가 되며 우리나라에서는 75% 골드의 18k와 58.5% 골드의 14k를 많이 사용합니다.
                            </p>
                        </div>
                    </li>
                    <li>
                        <h5>화이트 골드/ WG</h5>
                        <div>
                            <p>
                                화이트 골드는 순금에 하얀색 알로이를 넣어 합금한 금으로 도금을 하지 않은 순수한 화이트 골드는 약간의 노란 빛을 띄며 마지막 단계에서 로듐 도금 처리를 하면 독특한 색으로 마무리 됩니다.
                            </p>
                            <p>
                                순수한 백금과 달리 오래 사용하면 도금이 벗겨져 노란 빛이 보일 수 있으며 이는 제품의 불량이 아니며 오랜 착용으로 로듐 도금이 벗겨지면  A/S로 처음과 같이 깔끔하게 도금 처리가 가능합니다.<br>
                                화이트 골드는 유색보석과 다이아몬드를 우아하게 돋보이게 해주기 때문에 적극적으로 추천해 드립니다. 우리나라에서는 18k와 14k를 많이 사용합니다.
                            </p>
                        </div>
                    </li>
                    <li>
                        <h5>핑크 골드</h5>
                        <div>
                            <p>
                                핑크 골드는 레드골드라고도 하며, 명품 브랜드에서 핑크 골드로 제작한 제품을 출시하기 시작 하면서부터 큰 인기를 끌고 있습니다.
                            </p>
                            <p>
                                핑크 골드는 순금에 적색의 알로이를 넣어 합금한 금속으로 마지막에 핑크색을 위한 도금 처리를 하지 않아 오래 착용하여도 색상이 변하지 않으며 피부 톤에 상관 없이 잘 어울리는 장점이 있어 패션 제품으로 인기가 많은 컬러입니다.
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
