<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    define('G5_IS_COMMUNITY_PAGE', true);
    include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
    return;
}
include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>
<?php
if(defined('_INDEX_')) { // index에서만 실행
    include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
}
?>

<div class="Wrap">





<header id="header">
            <div id="top_banner">
                <div class="topBanner swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide itm01">
                            <a href="">[회원첫구매] 15,000원 상당 케어 택1 증정<i class="xi-angle-right-min"></i></a>
                        </div>
                        <div class="swiper-slide itm02">
                            <a href="">[카톡채널추가] 2천원 쿠폰 증정<i class="xi-angle-right-min"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hdWrap">
                <nav class="gnb">
                    <h1>
                        <a href="/">로고</a>
                    </h1>
                    <?php
    include G5_THEME_PATH.'/doc/nav.php';
?>
                    <div class="link">
                        <ul>
                            <li><a href=""><i class="bi bi-search"></i></a></li>
                            <li><a href="<?php echo G5_THEME_URL ?>/doc/m088.php"><i class="bi bi-person"></i></a></li>
                            <li><a href=""><i class="bi bi-bag"></i></a></li>
                        </ul>
                    </div>
                </nav>

            </div>
        </header>



        
<?php
if(!defined('_INDEX_')) { // index가 아닐때 .................
    include G5_THEME_PATH.'/detail.head.php'; // 서브페이지 헤드
}
?>
