<form name='fo' method='post' action='<?=HOSTURL?>/admin/usersearch'>
<section class="invoice">
  <div class="col-md-6">
      Email ID or UserName  
      <div class="input-group input-group-sm">
        <input id='sAccountIDorName' name='sAccountIDorName' type="text" class="form-control">
            <span class="input-group-btn">
              <button id="bSend" name='bSend' type="button" class="btn btn-info btn-flat">Go!</button>
            </span>
      </div>
  <br>
  </div>
  <div class="row">
    <div class="col-xs-12">
    <!-- title row -->
<?php if( count($userinfo) >= 1){ ?>
      <h2 class="page-header">
        <i class="fa fa-globe"></i> 유저 상세 정보
        <!--small class="pull-right">Date: 2/10/2014</small-->
      </h2>
<?php } 
  if( $notice )
    echo'<h3 class="page-header">'.$notice.'</h3>';
?>
    </div>
    <!-- /.col -->
  </div>
  <!-- info row -->
<?php
if( count($userinfo) >= 1)
{
  for($i=0 ; $i<count($userinfo); $i++)
  { 
?>
  <div class="row invoice-info">
    <div class="col-sm-4 invoice-col">
      <b>Account Info</b><br>
      <b>Account ID : </b><?php echo $userinfo[$i]->account_id ; ?> <br>
      <b>생성일 :</b> <?php echo $userinfo[$i]->regdate ; ?><br>
      <b>본인확인일 :</b> <?php echo $userinfo[$i]->confirm; ?><br>
    </div>
    <div class="col-sm-4 invoice-col">
      <b>학생정보</b> 
      <address>
        이름 : <strong><?php echo $userinfo[$i]->name; ?></strong><br>
        학교 : <?php echo $userinfo[$i]->school; ?><br>
        학년 : <?php echo $userinfo[$i]->grde; ?><br>
        Email : <?php echo $userinfo[$i]->account_id ; ?><br>
      </address>
    </div>
    <div class="col-sm-4 invoice-col">
      <b>학부모정보</b> 
      <address>
        이름 : <strong><?php echo $userinfo[$i]->pname; ?></strong><br>
        HP : <?php echo $userinfo[$i]->php; ?><br>
        Email : <?php echo $userinfo[$i]->pemail; ?><br>
      </address>
    </div>
  </div>
  <!-- /.row -->
  <!-- Table row -->
  <div class="row">
    <div class="col-xs-12 table-responsive">
      <table class="table table-striped">
        <thead>
        <tr>
          <th>과목번호</th>
          <th>과목명</th>
          <th>상태</th>
          <th>신청일</th>
        </tr>
        </thead>
        <tbody>
<?php
    for ($j=0 ; $j<count($membersvc) ; $j++)
    {
      if($userinfo[$i]->usn == $membersvc[$j]->usn)
      {
?>
        <tr>
          <td><?php echo $membersvc[$j]->course_idx; ?></td>
          <td><?php echo $membersvc[$j]->name; ?></td>
          <td><?php echo $membersvc[$j]->state; ?></td>
          <td><?php echo $membersvc[$j]->regdate; ?></td>
        </tr>
<?php
      }
    } 
?>
        </tbody>
      </table>
    </div>
    <!-- /.col -->
  </div>
<?php
  }
}
?>
</section>
</form>
<script>
  $(function(){
    $('#bSend').click(function(){
      document.fo.submit();
    }); 
  });
</script>
