<div class="col-md-12">
  <div class="box-header">
    <h3 class="box-title">My Info</h3>
  </div>
  
  <div class="col-md-4">
    <div class="box box-widget widget-user-2">
      <!-- Add the bg color to the header using any of the bg-* classes -->
      <div class="widget-user-header bg-yellow">
        <div class="widget-user-image">
          <!--img class="img-circle" src="../dist/img/user7-128x128.jpg" alt="User Avatar"-->
        </div>
        <!-- /.widget-user-image -->
        <h3 class="widget-user-username"><?=$oUserInfo->name?></h3>
        <h5 class="widget-user-desc"><?=$oUserInfo->school?>&nbsp;<?=$oUserInfo->grde?></h5>
      </div>
      <div class="box-footer no-padding">
        <ul class="nav nav-stacked">
          <li><a>거주지역 : <?=$oUserInfo->addrcode?></a></li>
          <li><a>부모님이름 : <?=$oUserInfo->pname?></a></li>
          <li><a>부모님전화번호 : <?=$oUserInfo->php?></a></li>
          <li><a>부모님이메일 : <?=$oUserInfo->pemail?></a></li>
          <li><a>부모님전공 : <?=$oUserInfo->pjob?></a></li>
          <li><a>가입일 : <?=$oUserInfo->regdate?></a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="col-md-8">
    <div class="box-body no-padding">
      <table class="table table-striped">
        <tr>
          <th style="width: 10px">#</th>
          <th>수강명</th>
          <th>상태</th>
        </tr>
<?php   foreach($aMemberSVC as $key=>$val){ 
        echo ' 
        <tr>
          <td></td>
          <td>'.$val->name.'</td>
          <td>'.$val->state.'</td>
        </tr>';
        }
?>
      </table>
    </div>
  </div>
</div>
