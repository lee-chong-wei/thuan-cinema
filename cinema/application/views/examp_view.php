<?php $this->load->view('Header'); ?>
<div class="container mt-3">
    <h3>Vertically Centered Modal Example</h3>
    <p>Click on the button to open the modal.</p>

    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
      Open modal
    </button>
  </div>
  <!-- The Modal -->
  <div class="Login-controller">
    <div id="myModal" class="modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
          <ul class="nav nav-tabs" id="Login" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="SignIn-tab" data-bs-toggle="tab" data-bs-target="#SignIn" type="button" role="tab" aria-controls="SignIn" aria-selected="true">Sign In</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link disabled" >/</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="SignUp-tab" data-bs-toggle="tab" data-bs-target="#SignUp" type="button" role="tab" aria-controls="SignUp" aria-selected="false">Sign Up</button>
              </li>
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="tab-content" id="SignInContent">
              <div class="tab-pane fade show active" id="SignIn" role="tabpanel" aria-labelledby="SignIn-tab">
                <div class="content-1">
                    <span class="sub-text">
                      Please login before buying ticket so you can collect
                      point to receive more promotion from members of Galaxy Cinema
                    </span>
                    <form action="actionPage.php" method="POST">
                      <input type="email" placeholder="Email" name="email" required>
                      <input type="password" placeholder="Password" name="password" required>
                      <span><a href="#">Forgot Password?</a></span>
                    </form>
                    <button class="btn" type="button" data-bs-dismiss="modal">Sign In</button>
                </div>
              </div>
              <div class="tab-pane fade" id="SignUp" role="tabpanel" aria-labelledby="SignUp-tab">
                <div class="content-2">
                  <form action="">
                      <label for="">User name</label>
                      <input type="text" placeholder="Name" name="name" required>
                      <div class="row">
                        <div class="col-md-6">
                            <label for="">Phone</label>
                            <input type="text" placeholder="phone" maxlength="10" required>
                          </div>
                          <div class="col-md-6">
                            <form>
                            <label for="">Gender</label>
                              <a class="btn btn-select btn-select-light">
                                <select class="form-select" id="Gender">
                                  <option selected="selected" hidden>Gender</option>
                                  <option value="1">Female</option>
                                  <option value="2">Male</option> 
                                </select>
                              </a>
                            </form>
                          </div>
                      </div>
                      <div class="row">
                        <label for="">Email</label>
                        <input type="email" placeholder="Email" name="email" required>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <label for="">PASSWORD</label>
                          <input type="password" placeholder="password" id="password" name="password" required>
                        </div>
                        <div class="col-md-6">
                          <label for="">confirm_password</label>
                          <input type="password" placeholder="confirm_password" id="cfpassword" name="cfpassword" required>
                        </div>
                      </div>
                      <div class="row">
                        <label for="">Date of birth</label>
                        <input type="date" id="birthdate" placeholder="birthdate" required>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                            <img src="http://localhost/Galaxy_cinema/assets/img/galaxy-logo.png" alt="Galaxy Cinema" width="80px" height="10px">
                        </div>                      
                        <div class="col-md-6">
                            <label for=""> Captcha</label>
                            <input type="text" placeholder="enter captcha" required>
                        </div>
                      </div>
                  </form>
                  <span class="sub-text">I had read and agree with <a href="#Policy">Policy</a> of program. </span>
                  <button class="btn" type="button" data-bs-dismiss="modal">Sign Up</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel">Modal 1</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Show a second modal and hide this one with the button below.
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Open second modal</button>
      </div>
    </div>
  </div>
</div>
<a data-bs-toggle="modal" href="#myModal" class="btn btn-primary">Launch modal</a>

<div class="modal" id="myModal">
	<div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Modal title</h4>    
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
        </div><div class="container"></div>
        <div class="modal-body">
          Content for the dialog / modal goes here.
          <a data-bs-toggle="modal" href="#myModal2" class="btn btn-primary">Launch modal</a>
        </div>
        <div class="modal-footer">
          <a href="#" data-bs-dismiss="modal" class="btn btn-outline-dark">Close</a>
        </div>
      </div>
    </div>
</div>
<div class="modal" id="myModal2" data-bs-backdrop="static">
	<div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">2nd Modal title</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
        </div><div class="container"></div>
        <div class="modal-body">
          Content for the dialog / modal goes here.
          Content for the dialog / modal goes here.
          Content for the dialog / modal goes here.
          Content for the dialog / modal goes here.
          Content for the dialog / modal goes here.
        </div>
        <div class="modal-footer">
          <a href="#" data-bs-dismiss="modal" class="btn btn-outline-dark">Close</a>
          <a href="#" class="btn btn-primary">Save changes</a>
        </div>
      </div>
    </div>
</div>
</body>

</html>