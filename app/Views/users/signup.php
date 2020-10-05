<div class="container-fluid">
    <div class="row">
        <div class="col-6 mx-auto mt-5">
            <form action="<?php echo base_url('users/signup');?>" method="POST" enctype="multipart/form-data">
                <div class="form-group row">
                    <div class="col-6">
                        <label>First Name</label>
                        <input type="email" class="form-control" name="username" aria-describedby="emailHelp">
                    </div>
                    <div class="col-6">
                        <label>Last Name</label>
                        <input type="email" class="form-control" name="username" aria-describedby="emailHelp">
                    </div>
                </div>
                <div class="form-group">
                    <label><?php echo lang('Users.signup.username');?></label>
                    <input type="email" class="form-control" name="username" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" class="form-control" name="cpassword">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</div>