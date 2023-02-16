//top banner

const TOP_BANNER = document.querySelector('.topBanner');

const MAIN_SLIDE_NAV = document.querySelector('#mainVisual .slide_nav');
const MAIN_SLIDE_NAV_LI = document.querySelectorAll('#mainVisual .slide_nav>li');

const MAIN_SLIDE_NUM = document.querySelector('#mainVisual .num');

const TOP_BANNER_SLIDE_OPTION = {
    effect: 'fade',
    fadeEffect: {
        crossFade: true
    },

    speed: 300,
    loop: true,
    autoplay: {
        delay: 2000,
        disableOnInteraction: false
    }
};

const TOP_BANNER_SLIDE = new Swiper('.topBanner', TOP_BANNER_SLIDE_OPTION);


//gnb

const HD_WRAP = document.querySelector('#header .hdWrap');

const HD_WRAP_HANDLER = () => {
    let SCT = window.scrollY;
    SCT > 0
        ? HD_WRAP.classList.add('on')
        : HD_WRAP.classList.remove('on');
}

window.addEventListener('scroll', HD_WRAP_HANDLER);


//search

let SEARCH = document.querySelector(".find");
click.addEventListener(SEARCH, function () {
    it.parentElement.classList.add('on')
})


//..^^어떻게하는거냑


//mainVisual

const MAIN_VISUAL_SLIDE_OPTION = {
    spaceBetween: 30,

    centeredSlides: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
}

const MAIN_VISUAL_SLIDE = new Swiper('.mainSlide', MAIN_VISUAL_SLIDE_OPTION);


const MAIN_COLLECTION_SLIDE_OPTION = {
    slidesPerView: 4,
    spaceBetween: 30,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
}

const MAIN_COLLECTION_SLIDE = new Swiper('.collection_pro', MAIN_COLLECTION_SLIDE_OPTION);



const STYLEBOARD_SLIDE_OPTION = {

    slidesPerView: 4,
    spaceBetween: 30,
    pagination: {
        el: ".swiper-pagination",
        type: "progressbar",
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
}

const STYLEBOARD_SLIDE = new Swiper('.style_board', STYLEBOARD_SLIDE_OPTION);

//toTop 



const TOTOP_ICON = document.querySelector('.toTop');

const TOTOP_ICON_HANDLER = () => {
    let SCT = window.scrollY;
    SCT > 0
        ? TOTOP_ICON.classList.add('on')
        : TOTOP_ICON.classList.remove('on');
}

window.addEventListener('scroll', TOTOP_ICON_HANDLER);


//로그인페이지

function loginCheck() {
    let loginForm = document.loginForm;
    let mb_id = document.getElementById('mb_id').value;
    let mb_pw = document.getElementById('mb_pw').value;

    if (mb_id == "") {
        alert("아이디를 입력해주세요.");
    } else if (mb_pw == "") {
        alert("비밀번호를 입력해주세요.");
    } else {
        loginForm.submit();
        alert("로그인에 성공했습니다!")
        loginForm.action = "<?php echo G5_THEME_URL ?>/index.php";
        //인덱스로 이동할수 있는지 시험해보기
        //submit - action 데이터 이동
    }

}


//카카오로그인

Kakao.init('b528263edc5755e1f0893bb6f79851b3');
function kakaoLogin() {
    Kakao.Auth.login({
        success: function (response) {
            Kakao.API.request({
                url: '/v2/user/me',
                success: function (response) {
                    console.log(response)
                },
                fail: function (error) {
                    console.log(error)
                },
            })
        },
        fail: function (error) {
            console.log(error)
        },
    })
}