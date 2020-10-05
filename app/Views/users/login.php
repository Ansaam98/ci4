<div class="container-fluid">
    <div class="row">
        <div class="col-6 mx-auto mt-5">
            <form action="<?php echo base_url('users/datatable');?>" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" name="username" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="form-group">
                    <a href="<?php echo base_url('users/signup');?>">Signup</a>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</div>