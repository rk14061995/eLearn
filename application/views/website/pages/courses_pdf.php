
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
                            <h2> <?=ucwords($subject_notes->subject)?> </h2>
                            <p class=" uk-visible@m"> <?=count($notes)?> notes found. </p>
                        </div>
                        <div class="flex">

                          

                        </div>
                    </div>
                    <hr>
                    <!-- course list -->
                    <div class="grid md:grid-cols-3 sm:grid-cols-2 gap-4">
                    <?php foreach($subject_notes as $notes): ?>
                        <div class="card">
                            <div class="card-body">
                                    <?=ucwords($notes->title)?>
                                    <hr>
                            </div>
                            <div class="card-body">
                            <?=ucfirst($notes->note)?>
                            </div>
                        </div>
                     <?php endforeach; ?>
                </div>


            </div>

        </div>

