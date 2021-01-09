
        <!-- Spacer -->
        <div class="page-spacer"></div>

        <div class="uk-container">

            <div class="flex gap-12">


                <!-- <div class="w-1/5 space-y-4 uk-visible@m">

                    <div>
                        <h4> Categories </h4>
                        <select class="selectpicker default" data-selected-text-format="count" data-size="7"
                            title="All Categories">
                            <option> Web Development </option>
                            <option> Mobile App </option>
                            <option> Business </option>
                            <option> IT Software </option>
                            <option> Desings </option>
                            <option> Marketing </option>
                            <option> Life Style </option>
                            <option> Photography </option>
                            <option> Health Fitness </option>
                            <option> Ecommerce </option>
                            <option> Food cooking </option>
                            <option> Teaching academy </option>
                        </select>
                    </div>

                    <div>
                        <h4> Skill Levels</h4>
                        <div>
                            <div class="radio">
                                <input id="radio-1" name="radio" type="radio" checked>
                                <label for="radio-1"><span class="radio-label"></span> Beginner <span> (25) </span>
                                </label>
                            </div>
                            <br>
                            <div class="radio">
                                <input id="radio-2" name="radio" type="radio">
                                <label for="radio-2"><span class="radio-label"></span> Entermidate <span> (25) </span>
                                </label>
                            </div>
                            <br>
                            <div class="radio">
                                <input id="radio-3" name="radio" type="radio">
                                <label for="radio-3"><span class="radio-label"></span> Expert <span> (25) </span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h4> Course rating </h4>

                        <form>
                            <div class="radio">
                                <input id="course-rate-1" name="radio" type="radio" checked>
                                <label for="course-rate-1"><span class="radio-label"></span>

                                    <div class="star-rating leading-4">
                                        <span class="star"></span> <span class="star"></span> <span class="star"></span>
                                        <span class="star"></span> <span class="star"></span>
                                    </div> (320)

                                </label>
                            </div>
                            <br>
                            <div class="radio">
                                <input id="course-rate-2" name="radio" type="radio">
                                <label for="course-rate-2"><span class="radio-label"></span>

                                    <div class="star-rating leading-4">
                                        <span class="star"></span> <span class="star"></span> <span class="star"></span>
                                        <span class="star"></span> <span class="star half"></span>
                                    </div> (160)

                                </label>
                            </div>
                            <br>
                            <div class="radio">
                                <input id="course-rate-1" name="radio" type="radio">
                                <label for="course-rate-1"><span class="radio-label"></span>

                                    <div class="star-rating leading-4">
                                        <span class="star"></span> <span class="star"></span> <span class="star"></span>
                                        <span class="star half"></span> <span class="star empty"></span>
                                    </div> (120)

                                </label>
                            </div>
                            <br>
                            <div class="radio">
                                <input id="course-rate-2" name="radio" type="radio">
                                <label for="course-rate-2"><span class="radio-label"></span>

                                    <div class="star-rating leading-4">
                                        <span class="star"></span> <span class="star"></span> <span
                                            class="star half"></span> <span class="star empty"></span> <span
                                            class="star empty"></span>
                                    </div> (60)

                                </label>
                            </div>
                            <br>
                            <div class="radio">
                                <input id="course-rate-1" name="radio" type="radio">
                                <label for="course-rate-1"><span class="radio-label"></span>

                                    <div class="star-rating leading-4">
                                        <span class="star"></span> <span class="star half"></span> <span
                                            class="star empty"></span> <span class="star empty"></span> <span
                                            class="star empty"></span>
                                    </div> (50)

                                </label>
                            </div>
                        </form>

                    </div>

                    <div>
                        <h4> Course type </h4>
                        <form>
                            <div class="radio">
                                <input id="course-type-1" name="radio" type="radio" checked>
                                <label for="course-type-1"><span class="radio-label"></span>Free (42) </label>
                            </div>
                            <br>
                            <div class="radio">
                                <input id="course-type-2" name="radio" type="radio">
                                <label for="course-type-2"><span class="radio-label"></span> Paid (42)</label>
                            </div>
                        </form>
                    </div>

                    <div>
                        <h4> Duration </h4>
                        <form>
                            <div class="radio">
                                <input id="course-duration-1" name="radio" type="radio" checked>
                                <label for="course-duration-1"><span class="radio-label"></span> +5 Hourse (23) </label>
                            </div>
                            <br>
                            <div class="radio">
                                <input id="course-duration-2" name="radio" type="radio">
                                <label for="course-duration-2"><span class="radio-label"></span> +10 Hourse (42)</label>
                            </div>
                            <br>
                            <div class="radio">
                                <input id="course-duration-2" name="radio" type="radio">
                                <label for="course-duration-2"><span class="radio-label"></span> +20 Hourse (42)</label>
                            </div>
                            <br>
                            <div class="radio">
                                <input id="course-duration-2" name="radio" type="radio">
                                <label for="course-duration-2"><span class="radio-label"></span> +30 Hourse (42)</label>
                            </div>
                        </form>
                    </div>

                </div> -->
                <div class="col-md-12">

                    <div class="md:flex justify-between items-center mb-5">
                        <div>
                            <h2> <?=ucwords($subject_details->subject)?> </h2>
                            <p class=" uk-visible@m"> <?=count($subject_videos)?> videos found. </p>
                        </div>
                        <div class="flex">

                          

                        </div>
                    </div>
                    <hr>
                    <!-- course list -->
                    <div class="grid md:grid-cols-3 sm:grid-cols-2 gap-4">
                    <?php foreach($subject_videos as $video): ?>
                        <div class="card">
                            <div class="card-body">
                                    <?=ucwords($video->title)?>
                                    <hr>
                            </div>
                            <div class="card-body">
                                <video width="320" height="240" controls>
                                    <source src="<?=base_url('assetss/video/').$video->video_url?>" type="video/mp4">
                                    <source src="movie.ogg" type="video/ogg">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        </div>
                        
                        <!-- <a href="course-intro.html" class="course-card">
                            <!-- Blog Post Thumbnail -->
                            <!-- <div class="course-card-thumbnail">
                                <div class="course-card-thumbnail-inner">
                                    <img src="assets/images/course/img-2.jpg" alt="">
                                </div>
                                <span class="play-btn-trigger"></span>
                            </div> -->
                            <!-- Blog Post Content -->
                            <!-- <div class="course-card-content">
                                <h3>Learn Angular Fundamentals From beginning to advance</h3>
                                <span class="instructor"> Stella Johnson </span>
                                <ul class="course-info">
                                    <li> 13 total hours </li>
                                    <span class="middot">·</span>
                                    <li> 151 lectures </li>
                                </ul>
                            </div>
                            <div class="course-card-foot">
                                <div class="star-rating leading-4">
                                    <span class="star"></span> <span class="star"></span> <span class="star"></span>
                                    <span class="star"></span>
                                    <span class="star half"></span>
                                </div>
                                <span class="pricing">
                                    $14.99
                                </span>
                            </div>
                        </a> --> 
                    <?php endforeach;?>
                        
                    </div>


                    <!-- pagination-->
                    <!-- <ul class="uk-pagination uk-flex-center uk-margin-medium">
                        <li class="uk-active">
                            <span>1</span>
                        </li>
                        <li>
                            <a href="#">2</a>
                        </li>
                        <li>
                            <a href="#">3</a>
                        </li>
                        <li>
                            <a href="#">4</a>
                        </li>
                        <li>
                            <a href="#">5</a>
                        </li>
                        <li>
                            <a href="#"><i class="icon-feather-chevron-right uk-margin-small-top"></i></a>
                        </li>
                        <li>
                            <a href="#">12</a>
                        </li>
                    </ul> -->

                </div>


            </div>

        </div>

