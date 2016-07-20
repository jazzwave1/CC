<!doctype html>
<html lang="utf-8">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Coding Club Admin</title>
	<!-- Bootstrap core CSS -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
	<!-- Custom styles for this template -->
	<script src="https://code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="http://member.codingclubs.org/static/AdminLTE-2.3.0/plugins/datatables/dataTables.bootstrap.css">
  <link rel="stylesheet" href="http://member.codingclubs.org/static/AdminLTE-2.3.0/dist/css/AdminLTE.min.css"> 
  
  <script src="http://member.codingclubs.org/static/AdminLTE-2.3.0/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="http://member.codingclubs.org/static/AdminLTE-2.3.0/plugins/datatables/dataTables.bootstrap.min.js"></script>
</head>
<!--form name="fo" action="submit.php" method="post"-->
<body id="wrapper">

    <nav class="navbar  navbar-inverse navbar-fixed-top" style="background-color:rgba(0,0,0,1); border: 0;">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="" style="color: white;" ><strong>CodingClub Admin</strong></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right" >
            <li><a href="" style="color: white;">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
	<div class="container" style="padding-top: 50px; margin-bottom: 50px;">
    <div class="row"style="margin-top: 10px; margin-bottom: 10px; ">
      <div class="col-xs-2">
        <label style="margin-top: 10px;margin-left: 10px;">검색조건</label>
      </div>
      <div class="col-xs-4">
        <div class="form-group">
          <select id="course_idx" name="course_idx" class="form-control">
            <option value="" >프로그램 이름 선택</option>
<?php
            foreach($aCourse as $key=>$val)
            {
              echo '<option value="'.$key.'">'.$val.'</option>';
            }
?>
          </select>
        </div>
      </div>
      <div class="col-xs-2">
        <button id="bSend" class="btn btn-block btn-default">검색</button>
      </div>
    </div> 
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Data Table With Full Features</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>신청 프로그램</th>
            <th>이름</th>
            <th>학교</th>
            <th>학년</th>
            <th>상태</th>
          </tr>
          </thead>
          <tbody>
<?php
        if($aRowData)
        {
          foreach($aRowData as $key=>$val)
          {
            echo "<tr>";
            echo "  <td>".$val->course_idx."</td>"; 
            echo "  <td>".$val->name."</td>"; 
            echo "  <td>".$val->school."</td>"; 
            echo "  <td>".$val->grde."</td>"; 
            echo "  <td>".$val->state."</td>"; 
            echo "</tr>";
          }
        }
?>
        </table>  
      </div> 
    </div> 
  
  </div>
  <script>
    $(function () {
      $("#example1").DataTable();
    });
  </script>
  <script>
    
    $(function(){
      $('#bSend').click(function(){
        var courseIDX = $("select[name=course_idx]").val() ;

        if($("select[name=course_idx]").val() == '')
        {
          alert('프로그램 이름을 선택해 주세요');
          $('#course_idx').focus();
          return;
        }
        //window.location.replace("http://localhost/~leehojun/CC/codingclub/admin/userlist/" + courseIDX); 
        window.location.replace("http://member.codingclubs.org/admin/userlist/" + courseIDX); 
      });
    });
  </script>
</body>

<!--/form-->
</html>
