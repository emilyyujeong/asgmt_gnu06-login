<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');
    return;
}
?>

<?php
if(!defined('_INDEX_')) { // index가 아닐때 .................
    include G5_THEME_PATH.'/detail.tail.php'; // 서브페이지 푸터
}
?>



<footer id="footer">
            <div class="inner">
                <div class="top">
                    <div class="left">
                        <ul>
                            <li><a href="">회사소개</a></li>
                            <li><a href="">이용약관</a></li>
                            <li><a href="">개인정보처리방침</a></li>
                        </ul>
                    </div>
                    <div class="right">
                        <ul>
                            <li><a href="">고객센터</a></li>
                            <li><a href="">공지사항</a></li>
                        </ul>
                    </div>
                </div>
                <div class="bottom">
                    <div class="left">
                        <ul>
                            <li><span>고객센터</span> 070-4740-0005</li>
                            <li>평일 : 9:00 ~ 18:00 점심시간 : 12:00 ~ 13:00 (주말, 공휴일 휴무)</li>

                        </ul>
                        <ul>
                            <li><span>주소</span> 서울특별시 강남구 학동로 342 (논현동) 에스케이 허브블루 1112호</li>
                            <li><span>사업자 등록번호</span> 881-86-01964 <span> 사업자정보확인</span> 06099</li>
                            <li><span>통신판매번호</span> 2021-서울강남-02730</li>
                            <li>개인정보 관리 및 보호 책임 KIM SAE HEE</li>
                            <li>대표이사 KIM SAE HEE</li>
                            <div class="copy">
                                COPYRIGHT &copy; fingersuit all rights reserved.
                            </div>

                    </div>
                    <div class="right">
                        <div class="sns">
                            <ul>
                                <li><a href=""><i class="bi bi-facebook"></i></a></li>
                                <li><a href=""><i class="bi bi-instagram"></i></a></li>
                                <li><a href=""><i class="bi bi-youtube"></i></a></li>
                            </ul>

                        </div>
                    </div>

                </div>

            </div>
        </footer>


        <div class="toTop">
            <img src="<?= G5_THEME_URL ?>/img/icon_top.svg" alt="">
        </div>




<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>


<?php
include_once(G5_THEME_PATH."/tail.sub.php");