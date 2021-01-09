<style>
    .overlay{
        display: none;
        position: fixed;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        z-index: 999;
        background: rgba(255,255,255,0.8) url("assets/images/wait.gif") center no-repeat;
    }
    /*.me{
        text-align: center;
    }*/
    /* Turn off scrollbar when body element has the loading class */
    .me.loading{
        overflow: hidden;   
    }
    /* Make spinner image visible when body element has the loading class */
    .me.loading .overlay{
        display: block;
    }
</style>


      <div class="content">



        <div class="row">
          <div class="col-md-12">
            <div class="card p-2">
              <div class="card-header">
                <h5 class="card-title">Add Video</h5> 
                <hr>
              </div>
              <div class="card-body">
                <form id="subject">  
                  
                    <div class="row">
                      <div class="col-md-4">
                        <label><strong>Class</strong></label>
                        <select  class="form-control " required name="class">
                            <option value="">Select Class</option>
                            <?php
                              foreach ($class as $cls) 
                              {
                                echo '<option value="'.$cls->id.'">'.$cls->class.'</option>';
                    
                              }
                            ?>  
                          </select>
                      </div>
                      <div class="col-md-4">
                        <label><strong>Subject</strong></label>
                        <select  class="form-control " required name="subject">
                          <option value="">Select Subject</option>
                          <?php
                                    foreach ($subject as $sub) 
                                    {
                                      echo '<option value="'.$sub->id.'">'.$sub->subject.'</option>';
                          
                                    }
                                    ?>  
                        </select>
                      </div>
                      <div class="col-md-4">
                        <label><strong>Title</strong></label>
                        <input type="text" style="opacity:1;"name="title" class="form-control">
                      </div>
                      
                    
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-md-12">
                        <input type="file" style="opacity:1;margin-left: 16px;" name="video_image"class="form-control1"  >
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                      <button type="submit" class="btn btn-primary btn-round">Add Video</button>
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

















<!-- 
        <div class="row me">
         
          <div class="col-md-12 me">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Add Video</h5>
                 <button style=" margin-left: 988px"> view</button>  
              </div>
            

                <form id="upload">
                  <div class="row">
                    <div class="col-md-6 pr-3 ">
                      <div class="form-group col-md-6">
                        <label><strong>Class</strong></label>
                       <select  class="form-control " required name="class">
            <option value="">Select Class</option>
            <?php
                      foreach ($class as $cls) 
                      {
                        echo '<option value="'.$cls->id.'">'.$cls->class.'</option>';
            
                      }
                      ?>  
          </select>
                      </div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-md-6 pr-3 ">
                      <div class="form-group col-md-6">
                        <label><strong>Subject</strong></label>
                       
                        <select  class="form-control " required name="subject">
            <option value="">Select Subject</option>
            <?php
                      foreach ($subject as $sub) 
                      {
                        echo '<option value="'.$sub->id.'">'.$sub->subject.'</option>';
            
                      }
                      ?>  
          </select>
                      </div>
                    </div>
                    </div>
                     <div class="row">
                    <div class="col-md-6 pr-3 ">
                      <div class="form-group col-md-6">
                        <label><strong>Title</strong></label>
                        <input type="text" style="opacity:1;"name="title" class="form-control">
                      </div>
                    </div>
                    </div>
                  <div class="row">
                    <div class="col-md-6 pr-3 ">
                      <div class="form-group col-md-6">
                        <label><strong>Video</strong></label>
                          <input type="file" style="opacity:1;margin-left: 16px;" name="video_image"class="form-control1"  >
                      </div>
                    </div>
                    </div>
                  <div class="row">
                     <div class="col-md-6 pr-1">
                    <div class="px-2  ">
                      <button type="submit" class="btn btn-primary btn-round">Add Video</button>
                    </div>
                  </div>
                </div>
                </form>
              </div>
            </div>
          </div> -->
        </div>
<div class="overlay" ></div>
      </div>

      <script>
  $(document).on({
    ajaxStart: function(){
        $(".me").addClass("loading"); 
    },
    ajaxStop: function(){ 
        $(".me").removeClass("loading"); 
    }    
});
      $(document).ready(function(){
          $('#upload').submit(function(e){
            //  $("body").html(data);
               $('#loading').show();
              e.preventDefault();
              var formData=new FormData($(this)[0]);
           $.ajax({
            url:"<?=base_url('Admin_Dashboard/videoupld')?>",
             type:"post",
             catche:false,
             contentType:false,
             processData:false,
             data:formData,
             success:function(response)
            {
                $('#loading').hide();
                 var obj=JSON.parse(response);
                  console.log(obj.status);
                 if(obj.status==0)
                 {
                    swal("VIDEO!", "EMPTY", "error").then(function(){
                      location.reload();
                    });
                 }
                 if(obj.status==1)
                 {
                  swal("VIDEO!", "Added", "success").then(function(){
                      location.reload();
                  });
                 }
            }
        
             });    
    
          })
      })
  </script>
