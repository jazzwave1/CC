    <div class="box">
    
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>프로그램번호</th>
            <th>프로그램명</th>
            <th>시작일자</th>
            <th>종료일자</th>
            <th>기능</th>
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
                echo "  <td>".$val->sdate."</td>"; 
                echo "  <td>".$val->edate."</td>"; 
                echo "  <td><button id='bChangeState' onclick='javascript:changeState(".$val->course_idx.")' class='btn btn-primary btn-xs'>상세보기</button>";
                echo "  <button id='bChangeState' onclick='javascript:changeState(".$val->course_idx.")' class='btn btn-success btn-xs'>수정</button></td>";
                echo "</tr>";
              }
            }
?>
          </tbody> 
        </table>  
      </div> 
    </div>
  <script>   
  $(function(){
    $("#example1").DataTable();
  });

  function changeState(course_idx)
  {
    alert('준비중입니다');
//  $.post(
//    "<?=HOSTURL?>/Admin/rpcUpdateState"
//    ,{
//         "usn" : usn 
//        ,"state" : 'CONF' 
//        ,"course_idx" : course_idx 
//     }
//    ,function(data, status) {
//      if (status == "success" && data.code == 1)
//      {
//        alert('변경 되었습니다.'); 
//        window.location.reload(); 
//      }
//    }
//  );         
  }     
  </script>
