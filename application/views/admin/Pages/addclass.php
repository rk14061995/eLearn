

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
        
        
      </div>
        <script type="text/javascript">
        
2
3
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
  </script>
