

      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card p-2">
              <div class="card-header">
                <h5 class="card-title">Add Class</h5> 
                <hr>
              </div>
              <div class="card-body">
                <form id="classs">  
                  <div class="row">
                    <div class="col-md-12">
                      <label><strong>Class</strong></label>
                    </div>
                  </div>
                    <div class="row">
                      <div class="col-md-10">
                          <input type="number" name="class"class="form-control" placeholder="Class">
                      </div>
                      <div class="col-md-2">
                          <button type="submit" class="btn-primary btn-round py-1">Add Class</button>
                      </div>
                    </div>
                </form>
              </div>
                
              
            </div>
          </div>
        </div>
      
        <div class="row">
          <div class="col-md-12">
            <div class="card p-2">
              <div class="card-header">
                <h5 class="card-title">Classes</h5> 
                <hr>
              </div>
              <div class="card-body">
                <table id="" class="table ">
                  <thead>
                      <tr>
                          <th>S.No.</th>
                          <th>Class</th>
                          <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                    <?php $i=1;?>
                    <?php foreach($classes as $cls): ?>
                      <tr>
                          <td><?=$i?></td>
                          <td><?='Class '.$cls->class?></td>
                          <td>
                            <a href="javascript:void(0)" data-toggle="modal"  c_name="<?=$cls->class?>" c_id="<?=$cls->id?>"data-target="#exampleModal"class="btn btn-info fetchclassdata"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                           <a href="javascript:void(0)" c_id="<?=$cls->id?>" class="btn btn-danger deleteclass"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                      </tr>
                      <?php $i++?>
                    <?php endforeach;?>
                  </tbody>
                </table>
              </div>
                
              
            </div>
          </div>
        </div>
        
        
      </div>
      <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="updateclass">
      <div class="modal-body">
       <label><b>Update Class</b></label>
       <input id="classname" class="form-control "type="text" name="classname">
       <input id="classid" class="form-control" name="classid"type="hidden" >
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button  type="submit"class="btn btn-primary">Save changes</button>
      </div>
    </form>
    </div>
  </div>
</div>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#table_id').DataTable();
            } );
            $(document).ready(function(){
          $('#classs').submit(function(e){
              e.preventDefault();
              var formData=new FormData($(this)[0]);
           $.ajax({
            url:"<?=base_url('Admin_Dashboard/InsertClass')?>",
             type:"post",
             catche:false,
             contentType:false,
             processData:false,
             data:formData,
             success:function(response)
            {
               
                 var obj=JSON.parse(response);
                  console.log(obj.status);
                 if(obj.status==0)
                 {
                    swal("Class!", "EMPTY", "error").then(function(){
                      location.reload();
                    });
                 }
                 if(obj.status==1)
                 {
                  swal("Class!", "Added", "success").then(function(){
                      location.reload();
                  });
                 }
            }
        
             });    
    
          })
      })
          $(document).ready(function(){
            $('.fetchclassdata').on('click',function(){
            $("#classname").empty();
            $("#classid").empty();
            var classname=$(this).attr("c_name");
            var classid=$(this).attr("c_id");
            // alert(classname);
            //  alert(classid);
            $("#classid").val(classid);
            $("#classname").val(classname);
            })
         })
           $(document).ready(function(){
          $('#updateclass').submit(function(e){
            e.preventDefault();
           var formData=new FormData($(this)[0]);   
           $.ajax({
            url:"<?=base_url('Admin_Dashboard/UpdateClass')?>",
             type:"post",
             cache:false,
             contentType:false,
             processData:false,
             data:formData,
             success:function(response)
            {
                 var obj=JSON.parse(response);
                  console.log(obj.status);
                 if(obj.status==0)
                 {
                    swal("Class!", "Try again", "error").then(function(){
                      location.reload();
                    });
                 }
                 if(obj.status==1)
                 {
                  swal("Class!", "updated", "success").then(function(){
                      location.reload();
                  });
                 }
            }
        
             });    
    
          })
      })
           $(document).ready(function(){
            $('.deleteclass').on('click',function(){
              var c_id=$(this).attr('c_id');
             $.ajax({
              url:"<?=base_url('Admin_Dashboard/DeleteClass')?>",
              type:"post",
               data:{c_id:c_id},
               success:function(response)
              {
                 var obj=JSON.parse(response);
                  console.log(obj.status);
                 if(obj.status==0)
                 {
                    swal("Class!", "Try again", "error").then(function(){
                      location.reload();
                    });
                 }
                 if(obj.status==1)
                 {
                  swal("Class!", "Deleted", "success").then(function(){
                      location.reload();
                  });
                 }
              }

             })
            })
           })
  </script>
