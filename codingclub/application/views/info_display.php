<!-- Button trigger modal -->
<!--button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Launch demo modal
</button-->

<style>
.example-modal .modal {
position: relative;
top: auto;
bottom: auto;
right: auto;
left: auto;
display: block;
z-index: 1;
}
.example-modal .modal {
background: transparent!important;
}
    </style>
<!-- Modal -->
<!--div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div-->
<!-- Button trigger modal -->


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="example-modal">
<div class="modal modal-primary">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modal Primary</h4>
      </div>
      <div class="modal-body">
        <p>One fine body&hellip;</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-outline">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>
</div>



<div class="row">
  <!-- left -->
  <div class="col-md-6">
    <div class="box box-info">
      <div class="box-header">
        <h3 class="box-title">User Info Display</h3>
      </div>
      <table id="info_display" width="100%"  >
        <?php 
          for($i=0 ; $i<5; $i++)
          {
        ?>
        <tr>
          <td width="20%" align="right">
            <label>Name </label>
          </td>
          <td width="80%" height="35" >
            <div class="input-group input-group-sm">
              <input type="text" class="form-control" disabled><span class="input-group-btn">
                <button class="btn btn-info btn-flat" type="button" data-toggle="modal" data-target="#myModal"> 수정 </button>
              </span>
            </div><!-- /input-group -->
          </td>
        </tr>
        <?php
          }
        ?>
        <tr>
          <td width="20%" align="right">
            <label>Text Disabled</label>
          </td>
           <td width="80%" height="35" >
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Enter ..." disabled/>
            </div>
          </td>
        </tr>
        <tr>
          <td width="20%" align="right">
            <label>Text Disabled</label>
          </td>
           <td width="80%" height="35" >
            <div class="form-group">
              <textarea class="form-control" rows="3" placeholder="Enter ..." disabled></textarea>
              <button class="btn btn-info btn-flat" type="button" data-toggle="modal" data-target="#myModal"> 수정 </button>
            </div>
           </td>
        </tr>



      </table>
    </div>
  </div>


  <!-- right -->
  <div class="col-md-6">
    <div class="box box-info">
      <div class="box-header">
        <h3 class="box-title">User Info Display</h3>
      </div>
      <table id="info_display" width="100%"  >
        <?php 
          for($i=0 ; $i<5; $i++)
          {
        ?>
        <tr>
          <td width="20%" align="right">
            <label>Name </label>
          </td>
          <td width="80%" height="35" >
            <div class="input-group input-group-sm">
              <input type="text" class="form-control" disabled><span class="input-group-btn">
                <button class="btn btn-info btn-flat" type="button" data-toggle="modal" data-target="#myModal"> 수정 </button>
              </span>
            </div><!-- /input-group -->
          </td>
        </tr>
        <?php
          }
        ?>
        <tr>
          <td width="20%" align="right">
            <label>Text Disabled</label>
          </td>
           <td width="80%" height="35" >
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Enter ..." disabled/>
            </div>
          </td>
        </tr>
      </table>
    </div>
  </div>
</div>
  
  
