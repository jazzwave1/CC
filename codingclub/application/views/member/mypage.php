<!doctype html>
<html lang="utf-8">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0 ,maximum-scale=1.0, minimum-scale=1.0,user-scalable=no,target-densitydpi=medium-dpi" />
  <title>Coding Club</title>
  <!-- Bootstrap core CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <script src="https://code.jquery.com/jquery.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

  <!-- 주니어 썸머 캠프 CSS -->
  <link href="../static/css/mypage.css" rel="stylesheet">

  <!-- textarea height 자동 늘림 -->
  <script>
    function resize(obj) {
      obj.style.height = "1px";
      obj.style.height = (obj.scrollHeight)+"px";
    }
  </script>

  <!-- 탭 -->
  <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script type="text/javascript">
  //<![CDATA[
  $(window).load(function(){
  $(document).ready(function() {
    $(".tabs-menu a").click(function(event) {
      event.preventDefault();
      $(this).parent().addClass("current");
      $(this).parent().siblings().removeClass("current");
      var tab = $(this).attr("href");
      $(".tab-content").not(tab).css("display", "none");
      $(tab).fadeIn();
    });
  });
  });//]]> 
  </script>
  
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-65409956-1', 'auto');
    ga('send', 'pageview');

  </script>
</head>
<!--form name="fo" action="submit.php" method="post"-->
<body id="wrapper" class="basic_pg">

    <nav class="navbar  navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://codingclubs.org"><strong>CodingClub</strong>Membership</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right" >
            <li><a href="http://codingclubs.org/">코딩클럽</a></li>
            <li class="sign_in" style="display:none"><a href="#">회원가입</a></li>
            <li class="my_page"><a href="#">마이페이지</a></li>
            <li class="sign_up" style="<?=$login?>"><a href="#">로그인</a></li>
            <li class="sign_out" id="bLogout" style="<?=$logout?>"><a href="#">로그아웃</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

  <!-- container :: s -->
  <section id="container">

    <!-- contents :: s -->
    <section id="contents">

      <!-- 마이페이지 :: s -->
      <div class="mypage">      
        
        <div class="container"> 
          <h3>마이페이지</h3>
          
          <!-- tabs-container 탭 :: s -->
          <div id="tabs-container">

            <!-- tabs-menu :: s -->
            <ul class="tabs-menu">
              <li class="current"><a href="#tab-1">기본정보</a></li>
              <li><a href="#tab-2">프로그램목록</a></li>
              <li><a href="#tab-3">포트폴리오</a></li>
              <li><a href="#tab-4">스토리</a></li>
            </ul>

            <!-- tab :: s -->
            <div class="tab">

              <!-- tab-1 기본정보 :: s -->
              <div id="tab-1" class="tab-content my_info">
                <h4 class="blind">기본정보</h4>
                <div class="profile">
                  <div class="profile_txt">
                    <span class="p_name"><?=$oUserInfo?$oUserInfo->name:"&nbsp;"?></span>
                    <span class="p_grade"><?=$oUserInfo?$oUserInfo->school:"&nbsp;"?>&nbsp;<?=$oUserInfo?$oUserInfo->grde:"&nbsp;"?></span>
                  </div>
                </div>
                <ul class="mp_form_cont">
                  <li>
                    <label>거주지역</label>
                    <span><?=$oUserInfo?$oUserInfo->addrcode:"&nbsp;"?></span>
                  </li>
                  <li>
                    <label>부모님 이름</label>
                    <span><?=$oUserInfo?$oUserInfo->pname:"&nbsp;"?></span>
                    <label>부모님 전화번호</label>
                    <span><?=$oUserInfo?$oUserInfo->php:"&nbsp;"?></span>
                    <label>부모님 이메일</label>
                    <span><?=$oUserInfo?$oUserInfo->pemail:"&nbsp;"?></span>
                  </li>
                  <li>
                    <label>가입일</label>
                    <span><?=$oUserInfo?$oUserInfo->regdate:"&nbsp;"?></span>
                  </li>
                </ul>
              </div>

              <!-- tab-2 수강목록 :: s -->
              <div id="tab-2" class="tab-content my_program">
                <h4 class="blind">수강목록</h4>
                <table class="tbl_board">
                  <caption>수강목록</caption>
                  <colgroup>
                    <col class="bd_num" />                    
                    <col class="bd_title" />
                    <col class="bd_status" />
                  </colgroup>
                  <thead>
                    <tr>
                      <th scope="col" class="bd_num">#</th>                      
                      <th scope="col" class="bd_title">프로그램명</th>
                      <th scope="col" class="bd_status">상태</th>
                    </tr>
                  </thead>
                  <tbody>
<?php 
      if($aMemberSVC && count($aMemberSVC) >=1 )
      {
        $cnt=0; 
        foreach($aMemberSVC as $key=>$val){
        $cnt++; 
                    echo ' 
                    <tr>
                      <td scope="col" class="bd_num">'.$cnt.'</td>                       
                      <td scope="col" class="bd_title">'.$val->name.'</td>
                      <td scope="col" class="bd_status">'.$val->state.'</td>
                    </tr>
                    ';
        }
      }
      else
      {
                    echo ' 
                    <tr>
                      <td scope="col" class="bd_num"></td>                       
                      <td scope="col" class="bd_title"></td>
                      <td scope="col" class="bd_status"></td>
                    </tr>
                    ';
      
      }
?>
                  </tbody>
                </table>
              </div>

              <!-- tab-3 포트폴리오 :: s -->
              <div id="tab-3" class="tab-content my_portfolio">
                <p class="not_ready">- 서비스 예정입니다 -</p>
              </div>

              <!-- tab-4 스토리 :: s -->
              <div id="tab-4" class="tab-content my_story">
                <p class="not_ready">- 서비스 예정입니다 -</p>
              </div>

            </div>

          </div>
          <!-- tabs-container 탭 :: e -->

        </div>

      </div>
      <!-- 마이페이지 :: e -->

    </section>
    <!-- contents :: e -->
  </section>
  <!-- container :: e -->
   <script>   
      $(function(){
        $('#bLogout').click(function(){
          window.location.replace("<?=HOSTURL?>/Login/Logout"); 
        });
      });
   </script>   

</body>
<!--/form-->
</html>
