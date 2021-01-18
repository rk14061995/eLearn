
        <!-- Spacer -->
        <div class="page-spacer"></div>

        <div class="uk-container">

            <div class="flex gap-12">


                <div class="col-md-12">

                    <div class="md:flex justify-between items-center mb-5">
                        <div>
                            <h2> <?=ucwords($subject_details->subject)?> </h2>
                            <p class=" uk-visible@m"> <?=count($subject_notes)?> notes found. </p>
                        </div>
                        <div class="flex">

                          

                        </div>
                    </div>
                    <hr>
                    <!-- course list -->
                    <div class="grid md:grid-cols-3 sm:grid-cols-2 gap-4">
                    <?php foreach($subject_notes as $note): ?>
                        <div class="card">
                            <div class="card-body">
                                    <h5><?=ucwords($note->title)?></h5>
                                    <hr>
                            </div>
                            <div class="card-body">
                                <span style="font-size:11px !important"><?=substr($note->notes,0,250)?> <a href="<?=base_url('Notes/readNote/').$note->note_id?>">Read More..</a> </span>
                            </div>
                        </div>
                      
                    <?php endforeach;?>
                        
                    </div>


                </div>


            </div>

        </div>

