    <nav class="navbar  navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?=JHOSTURL?>/club/juniorsoftware"><strong>주니어</strong>소프트웨어클럽</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right" >
            <li><a href="<?=JHOSTURL?>/club/juniorsoftware#jusocl_about">주니어소프트웨어클럽이란?</a></li>
            <li><a href="<?=JHOSTURL?>/club/juniorsoftware#jusocl_ongoing">모집중</a></li>
            <li><a href="<?=JHOSTURL?>/club/juniorsoftware#jusocl_contents">프로그램</a></li>
            <li><a href="http://codingclubs.org" target='_blank'>코딩클럽</a></li>
            <li class="sign_in" style="<?=$aJoinStyle['join']?>"><a href="<?=HOSTURL?>/member/memberJoinAccount?burl=club/juniorsoftware">회원가입</a></li>
            <li class="my_page" style="<?=$aJoinStyle['mypage']?>"><a href="<?=HOSTURL?>/Member/mypage">마이페이지</a></li>
            <li class="sign_up" style="<?=$aLoginStyle['login']?>"><a href="<?=HOSTURL?>/Login?burl=club/junior">로그인</a></li>
            <li class="sign_out" id="bLogout" style="<?=$aLoginStyle['logout']?>" ><a href="#">로그아웃</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


