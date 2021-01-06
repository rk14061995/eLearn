
          <!-- Content
        ================================================== -->
        <div class="uk-container">

            <div class="uk-width-1-3@m m-auto my-16">
                <div class="mb-4">
                    <h2 class="mb-0">Create a new <span class="uk-text-bold">account</span></h2>
                    <p class="my-0"> Register to manage your account.</p>
                </div>
                <form action="<?=base_url('New-Registration')?>" method="post">
                    <div class="uk-form-group  mb-0">
                        <label class="uk-form-label"> Name</label>

                        <div class="uk-inline w-full">
                            <span class="uk-form-icon mb-4">
                                <i class="uil-user"></i>
                            </span>
                            <input class="uk-input" type="text" placeholder="Example Singh" name="full_name">
                        </div>

                    </div>
                    <div class="uk-form-group  mb-0">
                        <label class="uk-form-label"> Email</label>

                        <div class="uk-inline w-full">
                            <span class="uk-form-icon mb-4">
                                <i class="uil-envelope"></i>
                            </span>
                            <input class="uk-input" type="email" placeholder="name@example.com" name="email_">
                        </div>

                    </div>
                    <div class="uk-form-group  mb-0">
                        <label class="uk-form-label"> Phone</label>

                        <div class="uk-inline w-full">
                            <span class="uk-form-icon mb-4">
                                <i class="uil-phone"></i>
                            </span>
                            <input class="uk-input" type="text" placeholder="654874****" name="phone_no">
                        </div>

                    </div>
                    <div class="uk-form-group  mb-0">
                        <label class="uk-form-label"> Password</label>

                        <div class="uk-inline w-full">
                            <span class="uk-form-icon mb-4">
                                <i class="uil-lock"></i>
                            </span>
                            <input class="uk-input" type="password" placeholder="********" name="user_pass_code">
                        </div>

                    </div>

                    

                    <div class="uk-flex-middle" uk-grid>
                        <div class="uk-width-expand@s">
                            <p> Do you have an account <a href="<?=base_url('Login')?>">Sign in</a></p>
                        </div>
                        <div class="uk-width-auto@s">
                            <input type="submit" value="Join Now">
                        </div>
                    </div>

                </form>
            </div>



        </div>

        

        <!-- Content / End -->
