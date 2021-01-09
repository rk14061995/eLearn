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
<script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>

      <div class="content">
        <div class="row me">
         
          <div class="col-md-12 me">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Add Notes</h5>
                 <button style=" margin-left: 988px"> view</button>  
              </div>
              <!-- <div class="loat-right" style=" margin-left: 988px">
                 <button style=" margin-left: 988px"> view</button>      
              </div> -->
               

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
                    <div class="col-lg-12 pr-3 ">
                      <div class="form-group col-md-12">
                        <label><strong>Notes</strong></label>
                          <textarea name="editor1"></textarea>
                <script>
                        CKEDITOR.replace( 'editor1' );
                </script>
                      </div>
                    </div>
                    </div>
                  <div class="row">
                     <div class="col-md-6 pr-1">
                    <div class="px-2  ">
                      <button type="submit" class="btn btn-primary btn-round">Add Notes</button>
                    </div>
                  </div>
                </div>
                </form>
              </div>
            </div>
          </div>
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
            url:"<?=base_url('Admin_Dashboard/addNotes')?>",
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
                    swal("NOTES!", "EMPTY", "error").then(function(){
                      location.reload();
                    });
                 }
                 if(obj.status==1)
                 {
                  swal("NOTES!", "Added", "success").then(function(){
                      location.reload();
                  });
                 }
            }
        
             });    
    
          })
      })
  </script>
