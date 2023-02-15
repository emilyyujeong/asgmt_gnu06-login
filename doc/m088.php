<?
include_once('../../../common.php');
include_once(G5_THEME_PATH.'/head.php');
?>





<div class="content">
<div class="log_inner">
        <div class="login_wrapper">
            <div class="left">
            <img src="<?= G5_THEME_URL ?>/img/loginvisual_pc.jpg" alt="">
                </div>
        <div class="right">
            <h3>LOGIN</h3>
            <form name="loginForm" action="${cpath}/signIn.do" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" name="mb_id" id="mb_id" placeholder="아이디를 입력하세요">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="mb_pw" id="mb_pw" placeholder="비밀번호를 입력하세요">
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label text-secondary" for="flexCheckDefault">
                        아이디 저장
                    </label>
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-primary btn-lg" id="login" type="button" onclick="loginCheck()">로그인</button>
                </div>
            </form>
            
            
            <div class="myinfo">
                <div class="find"><a href="">아이디 / 비밀번호 찾기</a></div>
                <div class="join"><a href="">회원가입</a></div>
            </div>
            <button class="kko">
                <ul>
                    <li onclick="kakaoLogin();">
                      <a href="javascript:void(0)">
                          카카오로 원터치 로그인 / 회원가입
                      </a>
                    </li>
                </ul>
            </div>
          
            </div>
    </div>
</div>






<?php
include_once(G5_THEME_PATH.'/tail.php');
?>