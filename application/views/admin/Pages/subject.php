

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
                            <td><a href="javascript:void(0)" class="btn btn-info"><i class="fa fa-pencil" aria-hidden="true"></i></a><a href="javascript:void(0)" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                        </tr>
                        <?php $i++?>
                      <?php endforeach;?>
                    </tbody>
                  </table>
                </div>
                  
                
              </div>
            </div>
          </div>












        <!-- <div class="row">
         
          <div class="col-md-11">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Add Subject</h5>
                 <button style=" margin-left: 988px"> view</button>  
              </div>
            

                <form id="subject">
                 
                  <div class="row">
                    <div class="col-md-6 pr-3 ">
                      <div class="form-group col-md-6">
                        <label><strong>Subject</strong></label>
                        <input type="text" name="subject"class="form-control" placeholder="Subject">
                      </div>
                    </div>
                    </div>
                  <div class="row">
                     <div class="col-md-6 pr-1">
                    <div class="px-2">
                      <button type="submit" class="btn btn-primary btn-round">Add Subject</button>
                    </div>
                  </div>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div> -->
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
      })
  </script>
