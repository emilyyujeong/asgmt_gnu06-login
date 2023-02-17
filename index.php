<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>




<main>

<section id="mainVisual">
    <div class="mainSlide swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide itm itm01">
                <div class="slogan">
                    <h2>NEW ARRIVALS <br />스프링 컬렉션</h2>
                    <p class="desc">봄의 다양한 색을 통해<br />나만의 캐릭터를 자유롭게 표현해보세요.</p>
                    <a class="more" href="<?php echo G5_THEME_URL ?>/doc/m011.php">자세히보기</a>
                </div>

            </div>
            <div class="swiper-slide itm itm02">
                <div class="slogan">
                    <h2>GIFT<br />2월 포토리뷰 이벤트</h2>
                    <p class="desc">적립금 최대 5천원<br />+큐티클 오일 푸셔 쿠폰 증정</p>
                    <a class="more" href="<?php echo G5_THEME_URL ?>/doc/m041.php">자세히보기</a>
                </div>


            </div>
            <div class="swiper-slide itm itm03">
                <div class="slogan">
                    <h2>BRAND ISSUE<br />매거진 속 핑거수트</h2>
                    <p class="desc">패션 매거진 속<br />핑거수트를 만나보세요</p>
                    <a class="more" href="<?php echo G5_THEME_URL ?>/doc/m031.php">자세히보기</a>
                </div>
            </div>
            <div class="swiper-slide itm itm04">
                <div class="slogan">
                    <h2>CONFIDENCE<br />MAKES YOU GLOW</h2>
                    <p class="desc">자신감이라는 스타일을 입고<br />빛나는 나를 발견하세요</p>
                    <a class="more" href="<?php echo G5_THEME_URL ?>/doc/m021.php">자세히보기</a>
                </div>
            </div>
        </div>

        <div class="swiper-pagination"></div>


    </div>
</section>
<!-- 
<section id="mainVideo">
    <div class="inner">
        <h3>SPRING COLLECTION</h3>
        <div class="more_view">
            <a class="s_more" href="">MORE <i class="xi-angle-right"></i></a>
        </div>
        <div class="inner">
            <video src="/img/main_video.mp4" autoplay loop muted playsinline></video>
        </div>
    </div>

</section> -->

<section id="mainProduct">
    <div class="inner">
        <div class="txt">
            <h3>TRENDING NOW</h3>
            <p>핑거수트와 함께 감각적인 스타일을 완성하고 당당하게 빛나는 나를 드러내세요.</p>
            <div class="more_view">
                <a class="s_more" href="">MORE <i class="xi-angle-right"></i></a>
            </div>
        </div>

        <div class="product_list">
            <figure class="itm01">
                <div class="pro_img_a">
                    <img src="<?= G5_THEME_URL ?>/img/main_pro_01.jpg" alt="" class="pro01">
                    <img src="<?= G5_THEME_URL ?>/img/main_pro_01_on.jpg" alt="" class="pro01-1">
                </div>

                <div class="ht">솔티드 네일(코핀)</div>
                <div class="pr">17,800원</div>
                <div class="id">#신상할인#신상베스트</div>

                <a href=""><i class="bi bi-bag"></i></a>
            </figure>
            <figure class="itm02">
                <div class="pro_img_b">
                    <img src="<?= G5_THEME_URL ?>/img/main_pro_02.jpg" alt="" class="pro02">
                    <img src="<?= G5_THEME_URL ?>/img/main_pro_02_on.jpg" alt="" class="pro02-1">
                </div>

                <div class="ht">스웨이 네일(코핀)</div>
                <div class="pr">13,800원</div>
                <div class="id">#스테디셀러#재입고</div>

                <a href=""><i class="bi bi-bag"></i></a>
            </figure>
            <figure class="itm03">
                <div class="pro_img_c">
                    <img src="<?= G5_THEME_URL ?>/img/main_pro_03.jpg" alt="" class="pro03">
                    <img src="<?= G5_THEME_URL ?>/img/main_pro_03_on.jpg" alt="" class="pro03-1">
                </div>

                <div class="ht">피그먼트 네일(코핀)</div>
                <div class="pr">17,800원</div>
                <div class="id">#신상할인#신상베스트</div>

                <a href=""><i class="bi bi-bag"></i></a>
            </figure>
            <figure class="itm04">
                <div class="pro_img_d">
                    <img src="<?= G5_THEME_URL ?>/img/main_pro_04.jpg" alt="" class="pro04">
                    <img src="<?= G5_THEME_URL ?>/img/main_pro_04_on.jpg" alt="" class="pro04-1">
                </div>

                <div class="ht">자유 네일(코핀)</div>
                <div class="pr">16,800원</div>
                <div class="id">#신상할인#신상베스트</div>

                <a href=""><i class="bi bi-bag"></i></a>
            </figure>
            <figure class="itm05">
                <div class="pro_img_e">
                    <img src="<?= G5_THEME_URL ?>/img/main_pro_05.jpg" alt="" class="pro05">
                    <img src="<?= G5_THEME_URL ?>/img/main_pro_05_on.jpg" alt="" class="pro05-1">
                </div>

                <div class="ht">오버롤 네일(코핀)</div>
                <div class="pr">13,800원</div>
                <div class="id">#스테디셀러#재입고</div>

                <a href=""><i class="bi bi-bag"></i></a>
            </figure>
            <figure class="itm06">
                <div class="pro_img_f">
                    <img src="<?= G5_THEME_URL ?>/img/main_pro_06.jpg" alt="" class="pro06">
                    <img src="<?= G5_THEME_URL ?>/img/main_pro_06_on.jpg" alt="" class="pro06-1">
                </div>

                <div class="ht">스카이 플레이크 네일(코핀)</div>
                <div class="pr">13,800원</div>
                <div class="id">#스테디셀러#재입고</div>

                <a href=""><i class="bi bi-bag"></i></a>
            </figure>
            <figure class="itm07">
                <div class="pro_img_g">
                    <img src="<?= G5_THEME_URL ?>/img/main_pro_07.jpg" alt="" class="pro07">
                    <img src="<?= G5_THEME_URL ?>/img/main_pro_07_on.jpg" alt="" class="pro07-1">
                </div>

                <div class="ht">포그 블랙 네일(코핀)</div>
                <div class="pr">13,800원</div>
                <div class="id">#스테디셀러#재입고</div>

                <a href=""><i class="bi bi-bag"></i></a>
            </figure>
            <figure class="itm08">
                <div class="pro_img_h">
                    <img src="<?= G5_THEME_URL ?>/img/main_pro_08.jpg" alt="" class="pro08">
                    <img src="<?= G5_THEME_URL ?>/img/main_pro_08_on.jpg" alt="" class="pro08-1">
                </div>

                <div class="ht">포그 블랙 네일(코핀)</div>
                <div class="pr">13,800원</div>
                <div class="id">#스테디셀러#재입고</div>

                <a href=""><i class="bi bi-bag"></i></a>
            </figure>
        </div>
    </div>
</section>


<section id="collection">
    <div class="inner">
        <div class="txt">
            <h3>SPRING COLLECTION</h3>
            <P>핑거수트가 제안하는 봄의 다양한 색을 통해
                나만의 캐릭터를 자유롭게 표현해보세요.
            </P>
            <div class="more_view">
                <a class="s_more" href="">MORE <i class="xi-angle-right"></i></a>
            </div>
        </div>
        <div class="collection_pro">

            <div class="collection_pro swiper">
                <div class="swiper-wrapper" slides-per-view="3">
                    <div class="swiper-slide itm itm01">
                        <div class="img_box">
                            <img src="<?= G5_THEME_URL ?>/img/banner_slide_01.jpg" alt="">
                        </div>
                        <div class="ht">코튼 마블 네일(오벌)</div>
                        <div class="pr">15,000원</div>
                        <div class="id">#신상할인 #마블 #반시럽</div>

                    </div>
                    <div class="swiper-slide itm itm02">
                        <div class="img_box">
                            <img src="<?= G5_THEME_URL ?>/img/banner_slide_02.jpg" alt="">
                        </div>
                        <div class="ht">로지 네일(코핀)</div>
                        <div class="pr">15,000원</div>
                        <div class="id">#신상할인#세로마블</div>
                    </div>
                    <div class="swiper-slide itm itm03">
                        <div class="img_box">
                            <img src="<?= G5_THEME_URL ?>/img/banner_slide_03.jpg" alt="">
                        </div>
                        <div class="ht">러브미 네일(코핀)</div>
                        <div class="pr">18,000원</div>
                        <div class="id">#신상할인 #마블 #반시럽</div>
                    </div>
                    <div class="swiper-slide itm itm04">
                        <div class="img_box">
                            <img src="<?= G5_THEME_URL ?>/img/banner_slide_04.jpg" alt="">
                        </div>
                        <div class="ht">아이리쉬 네일(코핀)</div>
                        <div class="pr">15,000원</div>
                        <div class="id">#물광자석젤#그라데이션</div>
                    </div>
                    <div class="swiper-slide itm itm05">
                        <div class="img_box">
                            <img src="<?= G5_THEME_URL ?>/img/banner_slide_05.jpg" alt="">
                        </div>
                        <div class="ht">로스트 인 뉴욕 네일(코핀)</div>
                        <div class="pr">15,000원</div>
                        <div class="id">#신상할인 #마블 #반시럽</div>
                    </div>
                    <div class="swiper-slide itm itm06">
                        <div class="img_box">
                            <img src="<?= G5_THEME_URL ?>/img/banner_slide_06.jpg" alt="">
                        </div>
                        <div class="ht">코튼 마블 네일(오벌)</div>
                        <div class="pr">15,000원</div>
                        <div class="id">#신상할인 #마블 #반시럽</div>
                    </div>
                    <div class="swiper-slide itm itm06">
                        <div class="img_box">
                            <img src="<?= G5_THEME_URL ?>/img/banner_slide_07.jpg" alt="">
                        </div>
                        <div class="ht">코튼 마블 네일(오벌)</div>
                        <div class="pr">15,000원</div>
                        <div class="id">#신상할인 #마블 #반시럽</div>
                    </div>
                    <div class="swiper-slide itm itm06">
                        <div class="img_box">
                            <img src="<?= G5_THEME_URL ?>/img/banner_slide_08.jpg" alt="">
                        </div>
                        <div class="ht">코튼 마블 네일(오벌)</div>
                        <div class="pr">15,000원</div>
                        <div class="id">#신상할인 #마블 #반시럽</div>
                    </div>
                </div>
            </div>

        </div>
    </div>



</section>





<section id="styleboard">
    <div class="inner">
        <div class="txt">
            <h3>STYLE BOARD</h3>
            <P>이번 시즌 새로운 트렌드의 네일 디자인을 만나보세요.</P>
            <div class="more_view">
                <a class="s_more" href="">MORE <i class="xi-angle-right"></i></a>
            </div>


        </div>

        <div class="style_board swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide itm itm01">
                    <div class="img_box">
                        <img src="<?= G5_THEME_URL ?>/img/styleboard_01.jpg" alt="">
                    </div>
                </div>
                <div class="swiper-slide itm itm02">
                    <div class="img_box">
                        <img src="<?= G5_THEME_URL ?>/img/styleboard_02.jpg" alt="">
                    </div>
                </div>
                <div class="swiper-slide itm itm03">
                    <div class="img_box">
                        <img src="<?= G5_THEME_URL ?>/img/styleboard_03.jpg" alt="">
                    </div>
                </div>
                <div class="swiper-slide itm itm04">
                    <div class="img_box">
                        <img src="<?= G5_THEME_URL ?>/img/styleboard_04.jpg" alt="">
                    </div>
                </div>
                <div class="swiper-slide itm itm05">
                    <div class="img_box">
                        <img src="<?= G5_THEME_URL ?>/img/styleboard_05.jpg" alt="">
                    </div>
                </div>
                <div class="swiper-slide itm itm06">
                    <div class="img_box">
                        <img src="<?= G5_THEME_URL ?>/img/styleboard_06.jpg" alt="">
                    </div>
                </div>
                <div class="swiper-slide itm itm07">
                    <div class="img_box">
                        <img src="<?= G5_THEME_URL ?>/img/styleboard_07.jpg" alt="">
                    </div>
                </div>
                <div class="swiper-slide itm itm08">
                    <div class="img_box">
                        <img src="<?= G5_THEME_URL ?>/img/styleboard_08.jpg" alt="">
                    </div>
                </div>

            </div>
            <div class="swiper-pagination"></div>
        </div>
</section>

<section id="review">
    <div class="inner">
        <div class="txt">
            <h3>MY #FINGER SUIT</h3>
            <p>지금 바로 생생한 구매자 리뷰를 확인하세요</p>
            <div class="more_view">
                <a class="s_more" href="">MORE <i class="xi-angle-right"></i></a>
            </div>
        </div>

        <div class="review_list">

            <figure class="itm01">
                <a href=""><img src="<?= G5_THEME_URL ?>/img/sns_img_01.jpg" alt=""></a>
            </figure>
            <figure class="itm02">
                <a href=""><img src="<?= G5_THEME_URL ?>/img/sns_img_02.jpg" alt=""></a>
            </figure>
            <figure class="itm03">
                <a href=""><img src="<?= G5_THEME_URL ?>/img/sns_img_03.jpg" alt=""></a>
            </figure>
            <figure class="itm04">
                <a href=""> <img src="<?= G5_THEME_URL ?>/img/sns_img_04.jpg" alt=""></a>
            </figure>
            <figure class="itm05">
                <a href=""><img src="<?= G5_THEME_URL ?>/img/sns_img_05.jpg" alt=""></a>
            </figure>
            <figure class="itm06">
                <a href=""> <img src="<?= G5_THEME_URL ?>/img/sns_img_06.jpg" alt=""></a>
            </figure>
            <figure class="itm07">
                <a href=""><img src="<?= G5_THEME_URL ?>/img/sns_img_07.jpg" alt=""></a>
            </figure>
            <figure class="itm08">
                <a href=""><img src="<?= G5_THEME_URL ?>/img/sns_img_08.jpg" alt=""></a>
            </figure>

        </div>
    </div>
</section>


</main>










<?php
include_once(G5_THEME_PATH.'/tail.php');