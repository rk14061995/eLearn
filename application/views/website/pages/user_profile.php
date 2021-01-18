
        <div class="-mt-20 bg-center bg-cover"
            style="background-blend-mode: color-burn; background-color: rgb(0 , 0 , 0  , 24% )"
            data-src="assets/images/hero.jpg" uk-img>
            <div class="uk-container-small lg:pt-48 pt-32 pb-10 m-auto px-5">

                <div class="flex">
                    <div class="lg:w-7/12 space-y-6 uk-light lg:text-left text-center">
                        <h1 class="text-4xl leading-none"> Student Profile </h1>
                        <!-- <p class="text-lg">We are part of a global design Community. We are here to make you succeed.</p> -->
                    </div>
                </div>

            </div>

        </div> 

        <div class="uk-container-small m-auto p-2">
            <div class="card p-1">
                <div class="card-header">
                </div>
                <div class="card-body">
                    <div class="row">
                        <!-- <div class="col-md-3">
                            <img src="<?=base_url('assets/web/')?>images/avatars/default.jpg">
                            <br>
                            <form action="<?=base_url('website/updateImage')?>" method="post" enctype="multipart/form-data">
                                <input type="file" name="profile_image">
                                <hr>
                                <input type="submit" value="Upload Image" class="btn btn-success">
                            </form>
                        </div> -->
                        <div class="col-md-12">
                            <form action="<?=base_url('website/updateDetails')?>" method="post">
                                <label>Full Name</label>
                                <input type="text" name="full_name" value="<?=$studentData->fullname?>" class="form-control">
                                <label>Mobile No.</label>
                                <input type="text" name="mobile_no" class="form-control" value="<?=$studentData->phone_?>">
                                <label>Class</label>
                                <select class="form-control" name="class_">
                                    <option>Select</option>
                                    <?php foreach($classess_ as $cls): ?>
                                    <?php
                                        if($studentData->class_id==$cls->id){
                                            ?>
                                                <option value="<?=$cls->id?>" selected><?=$cls->class?></option>
                                            <?php
                                        }else{
                                            ?>
                                                <option value="<?=$cls->id?>"><?=$cls->class?></option>
                                            <?php
                                        }
                                    ?>
                                        
                                    <?php endforeach; ?>
                                    
                                </select>
                                <br>
                                <!-- <hr> -->
                                <input type="submit" value="Upate" class="btn btn-success">  
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        