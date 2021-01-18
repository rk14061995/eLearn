
        <div class="lg:mt-0 mt-6 pb-16 mt-2">
        
            <div class="uk-container">
                <div class="flex gap-24">
        
                    <div class="lg:w-8/12">
        
                        <!-- course description -->
                        <div class="space-y-6">
                        <div class="card p-3" >
                            <div class="card-header">
                                <h5><?= ucfirst($subject_notes->title)?></h5>
                                <hr>
                            </div>
                            <div class="card-body">
                                <?= ucfirst($subject_notes->notes)?>
                            </div>
                        </div>
                           
                         
                          
                        </div>
        
                      
        
        
                        
        
                      
        
                    </div>
                    <div class="lg:w-4/12 mt-1 uk-visible@m ">
                          <!-- Add comment -->
                          <div class="card">
                            <div class="card-body p-3">
                                <h3 class=""> Add your comment </h3>
                                <?php
                                    if($this->session->flashdata('msg')){
                                        echo '<div class="alert alert-info">'.$this->session->flashdata('msg').'</div>';
                                    }
                                ?>
                                <div class="flex gap-x-4  relative">
                                
                                    <form action="<?=base_url('Notes/submitComment')?>" method="post">
                                        <div class="flex-1">
                                            <div class="grid grid-cols-2 gap-y-0 gap-x-4">
                                                <div>
                                                    <input type="text" placeholder="name" value="<?=$studendData->fullname?>" class="form-control">
                                                </div>
                                                <div>
                                                    <input type="text" placeholder="Email" value="<?=$studendData->email?>" class="form-control">
                                                </div>
                                                <div class="col-span-2">
                                                    <input type="hidden" name="note_id" value="<?=$note_id?>">
                                                    <textarea name="user_comment" id="" cols="30" rows="6"></textarea>
                                                </div>
                                                <div class="col-span-2 flex justify-between py-4">
                                                    <!-- <p class="m-0 text-gray-600"> Some HTML is okay </p> -->
                                                    <input type="submit" value="Post Comment">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    
                                </div>
                            </div>
                          </div>
                          
        
                    </div>
                </div>
        
            </div>
        
        </div>
        
        <div id="stucky-end-here"></div>
        
   