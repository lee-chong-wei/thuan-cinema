<div class="loginController">
    <div id="myModal" class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="close">&times;</span>
                </div> 
                <div class="modal-body">
                    <div class="tab-login-line">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" id="Login-tab" href="#">Sign In</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#">/</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="Logout-tab" href="#">Sign Up</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="Login">
                            <div class="col-md-12">
                                <span class="sub-test">
                                Please login before buying ticket so you can collect 
                                point to receive more promotion from members of Galaxy Cinema
                                </span>
                                <form action="actionPage.php" method="POST">
                                    <input type="email" placeholder="Email" name="email" required>
                                    <input type="password" placeholder="Password" name="password" required>
                                    <span><a href="#">Forgot Password?</a></span>
                                </form>
                                <button class="btn" type="button" data-bs-dismiss="modal">Sign Up</button>
                            </div>
                        </div>
                        <div class="tab-content" id="Logout">
                            <div class="col-md-12">
                                <form action="">
                                    <div class="row">
                                        <input type="text" placeholder="Name" name="name" required> 
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="text" placeholder="phone" maxlength="10" required>
                                            </div>
                                            <div class="col-md-6">
                                                <a class="btn btn-select btn-select-light">
                                                    <span class="btn-select-arrow"></span>
                                                    <select class="form-select" id="Gender">
                                                    <option value="" selected="selected">Gender</option>
                                                    <option value="0" selected="selected">Male</option>
                                                    <option value="1" selected="selected">Female</option>
                                                    </select>
                                                </a>
                                            </div>
                                        </div>
                                        <input type="email" placeholder="Email" name="email" required>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="password" placeholder="password" id="password" name="password" required>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="password" placeholder="confirm_password" id="cfpassword" name="cfpassword" required>
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
</div>