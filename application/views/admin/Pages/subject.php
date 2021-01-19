

      <div class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="card p-2">
                <div class="card-header">
                  <h5 class="card-title">Add Subject</h5> 
                  <hr>
                </div>
                <div class="card-body">
                  <form id="subject">  
                    <div class="row">
                      <div class="col-md-12">
                        <label><strong>Subject Name</strong></label>
                      </div>
                    </div>
                      <div class="row">
                        <div class="col-md-10">
                        <input type="text" name="subject"class="form-control" placeholder="Subject">
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn-primary btn-round py-1">Add Subject</button>
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
                  <h5 class="card-title">Subjects</h5> 
                  <hr>
                </div>
                <div class="card-body">
                  <table id="" class="table ">
                    <thead>
                        <tr>
                            <th>S.No.</th>
                            <th>Subject</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php $i=1;?>
                      <?php foreach($subjects as $sub): ?>
                        <tr>
                            <td><?=$i?></td>
                            <td><?=ucwords($sub->subject)?></td>
                            <td><a href="javascript:void(0)"data-toggle="modal"  sub="<?=$sub->id?>" subname="<?=$sub->subject?>"data-target="#exampleModal" class="btn btn-info fetchsubjectdata"><i class="fa fa-pencil" aria-hidden="true"></i></a><a href="javascript:void(0)" sub="<?=$sub->id?>" class="btn btn-danger deletesubject"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                        </tr>
                        <?php $i++?>
                      <?php endforeach;?>
                    </tbody>
                  </table>
                </div>
                  
                
              </div>
            </div>
          </div>


<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button> -->

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
      <form id="updatesubject">
      <div class="modal-body">
       <label><b>Update Subject</b></label>
       <input id="subjectname" class="form-control "type="text" name="subjecname">
       <input id="subjectid" class="form-control" name="subjectid"type="hidden" >
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button  type="submit"class="btn btn-primary">Save changes</button>
      </div>
    </form>
    </div>
  </div>
</div>

      </div>
     <script type="text/javascript">
            $(document).ready(function(){
          $('#subject').submit(function(e){
              e.preventDefault();
              var formData=new FormData($(this)[0]);
           $.ajax({
            url:"<?=base_url('Admin_Dashboard/InsertSubject')?>",
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
                    swal("Subject!", "EMPTY", "error").then(function(){
                      location.reload();
                    });
                 }
                 if(obj.status==1)
                 {
                  swal("Subject!", "Added", "success").then(function(){
                      location.reload();
                  });
                 }
            }
        
             });    
    
          })
      });
      //         
             $(document).ready(function(){
          $('.fetchsubjectdata').on('click',function(){
          $("#subjectid").empty();
          $("#subjectname").empty();
          var subjectid=$(this).attr("sub");
          var subsubname=$(this).attr("subname");
          // alert(subjectid);
          //  alert(subsubname);
          $("#subjectid").val(subjectid);
          $("#subjectname").val(subsubname);
           
             
    
          })
      })
             $(document).ready(function(){
          $('#updatesubject').submit(function(e){
            e.preventDefault();
           var formData=new FormData($(this)[0]);   
           $.ajax({
            url:"<?=base_url('Admin_Dashboard/UpdateSubject')?>",
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
                    swal("Subject!", "Try again", "error").then(function(){
                      location.reload();
                    });
                 }
                 if(obj.status==1)
                 {
                  swal("Subject!", "updated", "success").then(function(){
                      location.reload();
                  });
                 }
            }
        
             });    
    
          })
      })
             $(document).ready(function(){
            $('.deletesubject').on('click',function(){
              var sub_id=$(this).attr('sub');
             $.ajax({
              url:"<?=base_url('Admin_Dashboard/DeleteSubject')?>",
              type:"post",
               data:{sub_id:sub_id},
               success:function(response)
              {
                 var obj=JSON.parse(response);
                  console.log(obj.status);
                 if(obj.status==0)
                 {
                    swal("Subject!", "Try again", "error").then(function(){
                      location.reload();
                    });
                 }
                 if(obj.status==1)
                 {
                  swal("Subject!", "Deleted", "success").then(function(){
                      location.reload();
                  });
                 }
              }

             })
            })
           })
  </script>
