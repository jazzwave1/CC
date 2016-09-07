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
                echo "  <td><button id='showsangse' onclick='javascript:showSangse(".$val->course_idx.")' class='btn btn-primary btn-xs' data-toggle='modal' data-target='#myModal' >상세보기</button>";
                echo "  <button id='modifysangse' onclick='javascript:modifySangse(".$val->course_idx.")' class='btn btn-success btn-xs' data-toggle='modal' data-target='#myModal2'>정보수정</button>";
                echo "  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button id='bChangeState' onclick='javascript:changeState(".$val->course_idx.")' class='btn btn-danger btn-xs'>삭제</button></td>";
                echo "</tr>";
              }
            }
?>
          </tbody> 
        </table>  
      </div> 
    </div>
<!-- Modal sangse view-->
<div class="modal fade modal-primary" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><div id="course_name"></div></h4>
      </div>
      <div class="modal-body">
        <div class="box-body">
          <dl class="dl-horizontal">
            <dt>내용</dt>
            <dd><div id="course_content"</div></dd>
            <dt>대상</dt>
            <dd><div id="course_target"</div></dd>
            <dt>일정</dt>
            <dd><div id="course_schedule"></div></dd>
            <dt>준비물</dt>
            <dd><div id="course_need"></div></dd>
            <dt>모집인원</dt>
            <dd><div id="course_recurit"></div></dd>
            <dt>시작일</dt>
            <dd><div id="course_sdate"></div></dd>
            <dt>종료일</dt>
            <dd><div id="course_edate"></div></dd>
          </dl>
        </div>  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <!--button type="button" class="btn btn-primary">Save changes</button-->
      </div>
    </div>
  </div>
</div>
 
<!-- Modal modify view-->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><div id="course_name"></div></h4>
      </div>
      <div class="modal-body">
        <div class="box-body">
          <form>
          <input type="hidden" id="modify_idx" value="">
          <div class="form-group">
            <label for="recipient-name" class="control-label">내용</label>
            <textarea id="modify_content" class="form-control" rows="2"></textarea>           
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">대상</label>
            <textarea id="modify_target" class="form-control" rows="2"></textarea>
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">일정</label>
            <input type="text" id="modify_schedule" class="form-control">
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">준비물</label>
            <input type="text" id="modify_need" class="form-control">
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">모집인원</label>
            <input type="text" id="modify_recurit" class="form-control">
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">시작일</label>
            <input type="text" id="modify_sdate" class="form-control">
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">종료일</label>
            <input type="text" id="modify_edate" class="form-control">
          </div>
        </form> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" id="bUpdateCourseInfo" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

  <script>   
  $(function(){
    $("#example1").DataTable();
  
    $('#bUpdateCourseInfo').click(function(){
      $.post(
        "<?=HOSTURL?>/Admin/rpcUpdateCourseInfo"
        ,{
          "idx" : $("#modify_idx").val() 
          ,"content" : $("#modify_content").val() 
          ,"name" : $("#modify_name").val() 
          ,"target" : $("#modify_target").val() 
          ,"schedule" : $("#modify_schedule").val() 
          ,"need" : $("#modify_need").val() 
          ,"recruit" : $("#modify_recurit").val() 
          ,"sdate" : $("#modify_sdate").val() 
          ,"edate" : $("#modify_edate").val() 
        }
        ,function(data, status) {
          if (status == "success" && data.code == 1)
          {
            alert('수정되었습니다');
            location.reload();
          }
          else
          {
            alert('오류가 발생하였습니다');
          }
        }
      );      
    });
    
  });
  function modifySangse(course_idx)
  {
    $.post(
      "<?=HOSTURL?>/Admin/rpcGetCourseInfo"
      ,{
        "idx" : course_idx 
       }
      ,function(data, status) {
        if (status == "success" && data.code == 1)
        {
          $("#modify_idx").val(data.idx); 
          $("#modify_content").val(data.content); 
          $("#modify_name").val(data.name); 
          $("#modify_target").val(data.target); 
          $("#modify_schedule").val(data.schedule); 
          $("#modify_need").val(data.need); 
          $("#modify_recurit").val(data.recruit); 
          $("#modify_sdate").val(data.sdate); 
          $("#modify_edate").val(data.edate); 
        }
      }
    );
  }
  function showSangse(course_idx)
  {
    $.post(
      "<?=HOSTURL?>/Admin/rpcGetCourseInfo"
      ,{
        "idx" : course_idx 
       }
      ,function(data, status) {
        if (status == "success" && data.code == 1)
        {
          document.getElementById('course_name').innerHTML = data.name; 
          document.getElementById('course_content').innerHTML = data.content; 
          document.getElementById('course_target').innerHTML = data.target; 
          document.getElementById('course_schedule').innerHTML = data.schedule; 
          document.getElementById('course_need').innerHTML = data.need; 
          document.getElementById('course_recurit').innerHTML = data.recruit; 
          document.getElementById('course_sdate').innerHTML = data.sdateF; 
          document.getElementById('course_edate').innerHTML = data.edateF; 
        }
      }
    );
  }
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