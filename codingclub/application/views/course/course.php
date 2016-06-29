<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | General UI</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../../CC/static/AdminLTE-2.3.0/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../CC/static/AdminLTE-2.3.0/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../CC/static/AdminLTE-2.3.0/dist/css/skins/_all-skins.min.css">
  
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
  <!-- Font-Awesome -->
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <style>
        html, body {
            min-height: 100%;
            padding: 0;
            margin: 0;
            font-family: 'Source Sans Pro', "Helvetica Neue", Helvetica, Arial, sans-serif;
        }
        iframe {
            display: block;
            overflow: auto;
            border: 0;
            margin: 0;
            padding: 0;
            margin: 0 auto;
        }
        .frame {
            height: 49px;
            margin: 0;
            padding: 0;
            border-bottom: 1px solid #ddd;
        }
        .frame a {
            color: #666;
        }
        .frame a:hover {
            color: #222;
        }
        .frame .buttons a {
            height: 49px;
            line-height: 49px;
            display: inline-block;
            text-align: center;
            width: 50px;
            border-left: 1px solid #ddd;
        }
        .frame .brand {
            color: #444;
            font-size: 20px;
            line-height: 49px;
            display: inline-block;
            padding-left: 10px;
        }
        .frame .brand small {
            font-size: 14px;
        }
        a,a:hover {
            text-decoration: none;
        }
        .container-fluid {
            padding: 0;
            margin: 0;
        }
        .text-muted {
            color: #999;
        }
        .ad {
            text-align: center;
            position: fixed;
            bottom: 0;
            left: 0;
            background: #222;
            background: rgba(0,0,0,0.8);
            width: 100%;
            color: #fff;
            display: none;
        }
        #close-ad {
            float: left;
            margin-left: 10px;
            margin-top: 10px;
            cursor: pointer;
        }

    .color-palette {
      height: 35px;
      line-height: 35px;
      text-align: center;
    }

    .color-palette-set {
      margin-bottom: 15px;
    }

    .color-palette span {
      display: none;
      font-size: 12px;
    }

    .color-palette:hover span {
      display: block;
    }

    .color-palette-box h4 {
      position: absolute;
      top: 100%;
      left: 25px;
      margin-top: -40px;
      color: rgba(255, 255, 255, 0.8);
      font-size: 12px;
      display: block;
      z-index: 7;
    }
  </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<header>
    <nav class="frame" role="navigation">
        <div class="container-fluid">
            <a href="http://codingclubs.org" class="brand">
                Codinbclub 
                <small class="text-muted hidden-xs">Course</small>
            </a>
            <!--div class="buttons pull-right">
                <a class="first hidden-xs" id="display-full" href="#" data-toggle="tooltip" data-placement="bottom" title="Display Desktop - full width"><i class="fa fa-desktop fa-lg"></i></a>
                <a class="hidden-xs" id="display-940" href="#" data-toggle="tooltip" data-placement="bottom" title="Display Tablet - 940px"><i class="fa fa-tablet fa-lg"></i></a>
                <a class="hidden-xs" id="display-480" href="#" data-toggle="tooltip" data-placement="bottom" title="Display Phone - 480px"><i class="fa fa-mobile fa-lg"></i></a>
                <a href="https://almsaeedstudio.com/premium" data-toggle="tooltip" data-placement="bottom" title="Premium Templates"><i  style="color: #F34D59" class="fa fa-tint fa-lg"></i></a>
                <a href="https://almsaeedstudio.com/download/AdminLTE-master" data-toggle="tooltip" data-placement="bottom" title="Download now"><i class="fa fa-download fa-lg"></i></a>
                <a id="remove-frame" href="#" data-toggle="tooltip" data-placement="bottom" title="Remove frame"><i class="fa fa-times"></i></a>
            </div-->
        </div><!-- /.container -->
    </nav><!--/.navbar-->
</header>
<br>
<div >
    <!-- Main content -->
    <div class="col-md-4">
      <div class="box box-default">
        <div class="box-header with-border">
          <i class="fa fa-fw fa-book"></i>

          <h3 class="box-title">주니어메이커</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="alert alert-danger alert-dismissible">
            <h4><i class="icon fa fa-ban"></i>주니어메이커</h4>
            MIT 스크래치, 네이버 엔트리로 나만의 디지털 컨텐츠를 만드는
            주니어메이커, 주니어디자이너, 주니어해커
            3개과정 중 첫번째 입문 프로그램!
            <br><br>
            <h4><i class="icon fa fa-fw fa-male"></i>대상</h4>
            소프트웨어 교육을 처음 접하거나 정규적으로 해보고 싶은 초중생 친구들
            <br><br>
            <h4><i class="icon fa fa-calendar"></i>일정</h4>
            * 7월 9일, 16일, 23일, 30일 토요일
             14시 ~ 18시
            세종대학교 율곡관
            <br><br>
            * 8월 13일 데모데이
            10시~14시
            은행권청년창업재단 D.Camp
            <br><br>
            ( 5주 20시간 )  
          </div>
        </div>
        <div class="col-md-4">
          <button type="button" class="btn btn-block btn-danger">신청하기</button>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <div class="col-md-4">
      <div class="box box-default">
        <div class="box-header with-border">
          <i class="fa fa-fw fa-book"></i>

          <h3 class="box-title">앱메이커</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
         <div class="alert alert-info alert-dismissible">
            <h4><i class="icon fa fa-ban"></i>앱메이커</h4>
            MIT 앱인벤터로 안드로이드앱을 만드는
            앱메이커, 앱디자이너, 앱해커 3개 과정 중 첫번째 프로그램! 
            <br><br>
            <h4><i class="icon fa fa-fw fa-male"></i>대상</h4>
            코딩클럽 주니어소프트웨어클럽 주니어메이커 (스크래치/엔트리), 앱메이커 (앱인벤터) 에 참여했거나
            코딩경험이 있는 초중생 친구들 
            <br><br>
            <h4><i class="icon fa fa-calendar"></i>일정</h4>
            * 7월 9일, 16일, 23일, 30일 토요일
            10시 ~ 14시
            세종대학교 율곡관
            <br><br>
            * 8월 13일 데모데이
            10시 ~ 14시
            은행권청년창업재단 D.Camp
            <br><br>
            ( 5주 20 시간 )            
          </div>
        </div>
        <div class="col-md-4">
          <button type="button" class="btn btn-block btn-info">신청하기</button>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div> 
    <div class="col-md-4">
      <div class="box box-default">
        <div class="box-header with-border">
          <i class="fa fa-fw fa-book"></i>

          <h3 class="box-title">웹메이커</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
         <div class=" alert alert-warning alert-dismissible">
            <h4><i class="icon fa fa-ban"></i>웹메이커</h4>
            Codecademy 코드카데미와 함께 웹서비스를 만드는
            웹메이커, 웹디자이너, 웹해커 3개과정 중 첫번째 프로그램! 
            <br><br>
            <h4><i class="icon fa fa-fw fa-male"></i>대상</h4>
            MIT 스크래치, 앱인벤터 같은 블록프로그래밍 언어로
            다양한 소프트웨어를 능숙하게 만들 수 있는,
            언어형 프로그래밍 언어로
            웹기반의 소프트웨어를 만들고 싶은 청소년            
            <br><br>
            <h4><i class="icon fa fa-calendar"></i>일정</h4>
            * 7월 9일, 16일, 23일, 30일 토요일
            10시 ~ 14시
            세종대학교 율곡관
            <br><br>
            * 8월 13일 데모데이
            10시 ~ 14시
            은행권청년창업재단 D.Camp
            <br><br>
            ( 5주 20 시간 )            
          </div>
        </div>
        <div class="col-md-4">
          <button type="button" class="btn btn-block btn-warning">신청하기</button>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>       
</div>
</body>
</html>
