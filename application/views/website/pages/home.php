
        <div class="-mt-20 bg-center bg-cover"
            style="background-blend-mode: color-burn; background-color: rgb(0 , 0 , 0  , 24% )"
            data-src="assets/images/hero.jpg" uk-img>
            <div class="uk-container lg:pt-48 pt-32 pb-20">

                <div class="flex">
                    <div class="lg:text-left lg:w-5/12 space-y-6 text-center uk-light">
                        <h1 class="lg:text-5xl text-3xl leading-none"> Learn on your <br class="uk-visible@s"> schedule </h1>
                        <p class="text-lg">The eLearn delivers much more than
                            just online courses. You will challenge yourself,
                            deepen your skills .</p>

                        <a href="#"
                            class="py-2 px-6 bg-gray-400 hover:bg-gray-500 bg-opacity-25 text-white rounded-full text-md inline-block mr-3">
                            Get Started </a>
                        <a href="#" class="py-3 px-3 text-blue-500 rounded-md text-md inline-block"> View Plans </a>
                    </div>
                </div>

            </div>

            <div class="transform">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" class="text-gray-200 fill-current">
                    <path d="M 0 0 c 0 0 200 50 500 50 s 500 -50 500 -50 v 101 h -1000 v -100 z"></path>
                </svg>
            </div>

        </div>

        <div class="lg:pb-32 pb-12 pt-2">
            <div class="uk-container">
          
                <div class="text-center md:w-2/4 m-auto mb-12">
                    <h1 class="lg:text-3xl text-2xl mb-4"> Welcome To <span class="font-bold text-green-600">  eLearn </span> </h1>
                    <p class="text -lg "> Welcome to eLearn collection of world-class online learning opportunities. The eLearn Online Learning portal provides a gateway for the public to access </p>
                  </div>
          
              <div class="grid md:grid-cols-3 sm:grid-cols-2 gap-6 text-center">
                <div class="lg:p-8 pt-2">
                    <img src="assets/images/icons/academic-cap.svg" class="w-1/4 opacity-75 rounded-md h-auto object-cover m-auto mb-2">
                    <h1 class="lg:text-2xl text-xl font-bold mb-3"> Facility OF Scholarship </h1>
                    <p class="text-base"> Samwell nisl purus in mollis. Varys eget velit aliquet sagittis consectetur purus
                      ut. </p>
                    <a href="#" class=" text-green-400 mt-4 inline-block "> Learn more</a>
                </div>
                <div class="lg:p-8 pt-2">
                    <img src="assets/images/icons/book-open.svg" class="w-1/4 opacity-75 rounded-md h-auto object-cover m-auto mb-2">
                    <h1 class="lg:text-2xl text-xl font-bold mb-3"> Book library & store </h1>
                    <p class="text-base"> Samwell nisl purus in mollis. Varys eget velit aliquet sagittis consectetur purus
                      ut. </p>
                    <a href="#" class=" text-green-400 mt-4 inline-block "> Learn more</a>
                </div>
                <div class="lg:p-8 pt-2">
                    <img src="assets/images/icons/play.svg" class="w-1/4 opacity-75 rounded-md h-auto object-cover m-auto mb-2">
                    <h1 class="lg:text-2xl text-xl font-bold mb-3"> Learn online courses</h1>
                    <p class="text-base"> Samwell nisl purus in mollis. Varys eget velit aliquet sagittis consectetur purus
                      ut. </p>
                    <a href="#" class=" text-green-400 mt-4 inline-block "> Learn more</a>
                </div>
              </div>
          
            </div>
          </div>


        <div class="bg-gradient-to-l from-green-500 to-teal-500">
            <div class="container m-auto">

                <div class="lg:-my-16 -mb-10 items-center justify-between lg:flex lg:pt-0 pt-12">
                    <div class="lg:text-left lg:w-6/12 text-center uk-light">
                        <h1 class="font-extrabold leading-none mb-5 lg:text-4xl text-2xl text-white"> Start your Leaning today.</h1>
                        <p class="font-medium lg:text-lg"> The eLearn delivers much more than
                            just online courses. You will challenge yourself,
                            deepen your skills . </p>
                        <!-- <p class="-mt-2 text-sm">No Creidit Card required</p> -->
                    </div>
                    <div class="lg:w-5/12 ml-auto">
                        <div class=" bg-white shadow-xl rounded-md">
                            <!-- card body -->
                            
                                <div class="lg:p-12 p-6 space-y-3">
                                <from action="<?=base_url('New-Registration')?>" id="form1" method="post">
                                    <div>
                                        <label class="mb-0"> Your Name </label>
                                        <input name="full_name" placeholder="Your Name"
                                            class="bg-gray-200 shadow-none border focus:border-blue-600 mt-2 outline-none px-3 py-2 rounded-md w-full">
                                    </div>
                                    <div>
                                        <label class="mb-0"> Email Address </label>
                                        <input name="email_" placeholder="Info@example.com"
                                            class="bg-gray-200 shadow-none border w-full px-3 py-2 rounded-md focus:border-blue-600 outline-none mt-2">
                                    </div>
                                    <div>
                                        <label class="mb-0"> Phone  </label>
                                        <input name="phone_no" placeholder="9877******"
                                            class="bg-gray-200 shadow-none border w-full px-3 py-2 rounded-md focus:border-blue-600 outline-none mt-2">
                                    </div>
                                    <div>
                                        <label class="mb-0"> Password </label>
                                        <input name="user_pass_code" placeholder="******"
                                            class="bg-gray-200 shadow-none border w-full px-3 py-2 rounded-md focus:border-blue-600 outline-none mt-2">
                                    </div>

                                    <!-- <div class="checkbox">
                                        <input type="checkbox" id="chekcbox1" checked="">
                                        <label for="chekcbox1"><span class="checkbox-icon"></span> I agree to the <a
                                                href="pages-terms.html" target="_blank"
                                                class="uk-text-bold uk-text-small uk-link-reset"> Terms and Conditions </a>
                                        </label>
                                    </div> -->
                                    <a href="javascript:void(0)" onclick="document.getElementById('form1').submit();">Register Now </a>
                                    <!-- <button disabled="false" id="deee_id" type="button"
                                        class="">
                                        </button> -->
                                        </form>
                                </div>
                            
                            

                        </div>
                    </div>
                </div>

            </div>
        </div>


        <div class="py-20">
            <div class="uk-container">


                <div class="flex lg:pt-8">
                    <div class="lg:w-6/12 sm:text-left text-center">
                        <h1 class="lg:text-4xl text-2xl"> Experience the best</h1>
                        <p> Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    </div>
                </div>

                <div class="grid sm:grid-cols-2 gap-4 mt-6 sm:text-left text-center">
                    <div class="lg:flex items-start">
                        <img src="assets/images/icons/play.svg" class="lg:w-1/4 opacity-75 w-16 sm:m-0 mx-auto">
                        <div class="space-y-3 py-3 lg:px-6">
                            <h1 class="lg:text-2xl text-xl font-bold"> Video Learning</h1>
                            <p> Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut
                                labore et dolore magna aliqua . Ut enim ad minim veniam </p>
                            <a href="#" class="text-sm font-bold inline-block text-green-400">Learn more </a>
                        </div>

                    </div>
                    <div class="lg:flex items-start">
                        <img src="assets/images/icons/book-open.svg" class="lg:w-1/4 opacity-75 w-16 sm:m-0 mx-auto">
                        <div class="space-y-3 py-3 lg:px-6">
                            <h1 class="lg:text-2xl text-xl font-bold"> EBooks </h1>
                            <p> Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut
                                labore et dolore magna aliqua . Ut enim ad minim veniam </p>
                            <a href="#" class="text-sm font-bold inline-block text-green-400">Learn more </a>
                        </div>
                    </div>
                    <div class="lg:flex items-start">
                        <img src="assets/images/icons/code.svg" class="lg:w-1/4 opacity-75 w-16 sm:m-0 mx-auto">
                        <div class="space-y-3 py-3 lg:px-6">
                            <h1 class="lg:text-2xl text-xl font-bold"> Source Code </h1>
                            <p> Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut
                                labore et dolore magna aliqua . Ut enim ad minim veniam </p>
                            <a href="#" class="text-sm font-bold inline-block text-green-400">Learn more </a>
                        </div>
                    </div>
                    <div class="lg:flex items-start">
                        <img src="assets/images/icons/chat-alt-2.svg" class="lg:w-1/4 opacity-75 w-16 sm:m-0 mx-auto">
                        <div class="space-y-3 py-3 lg:px-6">
                            <h1 class="lg:text-2xl text-xl font-bold"> Discussions </h1>
                            <p> Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut
                                labore et dolore magna aliqua . Ut enim ad minim veniam </p>
                            <a href="#" class="text-sm font-bold inline-block text-green-400">Learn more </a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        
       