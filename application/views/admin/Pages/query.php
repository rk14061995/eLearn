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
         
          <div  class="col-lg-12 me">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">User Query</h5>
                 <!-- <button style=" margin-left: 988px"> view</button>   -->
              </div>
              <!-- <div class="loat-right" style=" margin-left: 988px">
                 <button style=" margin-left: 988px"> view</button>      
              </div> -->
               

               <table id="" class="table table-striped table-bordered" style="margin-left: 1px;">
        <thead>
            <tr>
                 <th>S.NO</th>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
                <!-- <th>Age</th>
                <th>Start date</th>
                <th>Salary</th> -->
            </tr>
        </thead>
        <tbody>
            <?php
            $i=1;
            foreach($query as $qry)
                {
                     // print_r($qry);
                ?>
            <tr>
                <td><?php echo $i;?></td>
                <td><?=$qry->username;?></td>
                <td><?=$qry->email;?></td>
                <td><?=$qry->message;?></td>
               
            </tr>
            <?php $i++;
        }?>
           
        </tbody>
       
    </table>
              </div>
            </div>
          </div>
        </div>
<!-- <div class="overlay" ></div> -->
      </div>

     <script type="text/javascript">
      $(document).ready( function () {
    $('#myTable').DataTable();
} );
     </script>myTable