
          <!-- Content
        ================================================== -->
        <div class="uk-container">

            <div class="uk-width-1-3@m m-auto my-16">
                <div class="mb-4">
                <?php
                    if($this->session->flashdata('err')){
                        echo '<div class="alert alert-danger">'.$this->session->flashdata('err').'</div>';
                    }

                ?>
                    <h2 class="mb-0">Welcome <span class="uk-text-bold">back</span></h2>
                    <p class="my-0">Login to manage your account.</p>
                </div>
                <form action="<?=base_url('Validate-Login')?>" method="post">

                    <div class="uk-form-group  mb-0">
                        <label class="uk-form-label"> Email</label>

                        <div class="uk-inline w-full">
                            <span class="uk-form-icon mb-4">
                                <i class="uil-envelope"></i>
                            </span>
                            <input class="uk-input" type="email" placeholder="name@example.com" name="user_email">
                        </div>

                    </div>

                    <div class="uk-form-group  mb-0">
                        <label class="uk-form-label"> Password</label>

                        <div class="uk-inline w-full">
                            <span class="uk-form-icon mb-4">
                                <i class="uil-lock"></i>
                            </span>
                            <input class="uk-input" type="password" placeholder="********" name="pass_code">
                        </div>

                    </div>
 

                    <div class="uk-flex-middle" uk-grid>
                        <div class="uk-width-expand@s">
                            <p> Don't have account <a href="<?=base_url('Register')?>">Sign up</a></p>
                        </div>
                        <div class="uk-width-auto@s">
                            <input type="submit" value="Get Started">
                        </div>
                    </div>

                </form>
            </div>



        </div>

        

        <!-- Content / End -->
