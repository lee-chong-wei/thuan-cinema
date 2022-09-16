<!-- The Modal -->
<?php echo validation_errors(); ?>

<div class="Login-controller">
    <div id="myModal" class="modal" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <ul class="nav nav-tabs" id="Login" role="tablist">
              <li class="nav-item" role="presentation">
                <a class="nav-link active" id="SignIn-tab" data-bs-toggle="tab" data-bs-target="#SignIn" type="button" role="tab" aria-controls="SignIn" aria-selected="true" href="#SignIn" >Sign In</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link disabled" >/</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="SignUp-tab" data-bs-toggle="tab" data-bs-target="#SignUp" type="button" role="tab" aria-controls="SignUp" aria-selected="false" href="#SignUp">Sign Up</a>
              </li>
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="text-danger" id="flashdata" text-align="center" ></div>
          <div class="modal-body">
            <div class="tab-content" id="SignInContent">
              <div class="tab-pane fade show active" id="SignIn" role="tabpanel" aria-labelledby="SignIn-tab">
                <div class="content-1">
                  <form action="<?php echo site_url('/home') ?>" id="LogIn" method="post">
                    <span class="sub-text">
                      Please login before buying ticket so you can collect
                      point to receive more promotion from members of Galaxy Cinema
                    </span>
                      <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" type="email" placeholder="Email" name="email" value="<?php echo set_value('email'); ?>">
                        <span class="text-danger" id="SignIn-email"><?php echo form_error('email') ?></span>
                      </div>
                      <div class="form-group">  
                        <label>Password</label>
                        <input class="form-control" type="password" placeholder="Password" name="password" value="<?php echo set_value('password') ?>">
                        <span class="text-danger" id="SignIn-password"><?php echo form_error('password'); ?></span>
                      </div>
                      <div class="form-group">
                        <span><a href="#">Forgot Password?</a></span>
                      </div>
                        <input class="btn" type="submit" name="SignIn" value="SignIn" ></input>
                  </form>
                </div>
              </div>
              <div class="tab-pane fade" id="SignUp" role="tabpanel" aria-labelledby="SignUp-tab">
                <div class="content-2">
                  <form method="post" id="Register" action="<?php echo site_url('/home');?>">
                    <div class="form-group">
                      <div class="row">
                        <label>Username</label>
                        <input class="form-control" type="text" placeholder="User name" name="username" id="username" value="<?php echo set_value('username'); ?>">
                        <span class="text-danger" id="username-danger"><?php echo form_error('username') ?></span>
                      </div>                   
                    </div>
                    <div class="form-group">
                      <div class="row">
                          <div class="col-md-6">
                              <label>Phone</label>
                              <input class="form-control" type="text" placeholder="phone" name="phone" value="<?php echo set_value('phone'); ?>">
                              <span class="text-danger" id="phone"><?php echo form_error('phone'); ?></span>
                            </div>
                            <div class="col-md-6">
                              <label>Gender</label>
                                <a class="btn-select btn-select-light">
                                  <select class="form-select" name="gender">
                                    <option selected="selected" hidden></option>
                                    <option value="1">Female</option>
                                    <option value="2">Male</option> 
                                  </select>
                                </a>
                                <span class="text_danger" id="gender"><?php echo form_error('gender[]'); ?></span>
                            </div>
                        </div>
                    </div>  
                      
                      <div class="row">
                        <label>Email</label>
                        <input class="form-control" type="email" placeholder="Email" name="email" value="<?php echo set_value('email'); ?>">
                        <span class="text-danger" id="email"><?php echo form_error('email'); ?></span>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <label>Password</label>
                          <input class="form-control" type="password" placeholder="password" name="password" value="<?php echo set_value('password'); ?>">
                          <span class="text-danger" id="password"  ><?php echo form_error('password'); ?></span>
                        </div>
                        <div class="col-md-6">
                          <label>Confirm_password</label>
                          <input class="form-control" type="password" placeholder="confirm_password" name="confirm_password" value="<?php echo set_value('cfpassword'); ?>">
                          <span class="text-danger" id="confirm_password"><?php echo form_error('confirm_password'); ?></span>
                        </div>
                      </div>
                      <div class="row">
                        <label>Birthdate</label>
                        <input class="form-control" type="date"  placeholder="birthdate" name="birthdate">
                       <span class="text-danger" id="birthdate"><?php echo form_error('birthdate'); ?></span> 
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                            <img src="http://localhost/Galaxy_cinema/assets/img/galaxy-logo.png" alt="Galaxy Cinema" width="80px" height="10px">
                        </div>                      
                        <div class="col-md-6">
                            <label>Captcha</label>
                            <input class="form-control" type="text" placeholder="enter captcha">
                        </div>
                      </div>
                      <span class="sub-text">I had read and agree with <a href="#" id="Policy" onclick="showPolicy()"><strong>Policy</strong> </a> of program. </span>
                      <input class="btn" type="submit" value="Register" name="Register" ></input>
                  </form>
                 </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

