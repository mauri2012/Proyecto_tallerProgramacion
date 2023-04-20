<section class="container my-5 py-5">
    <div class="row login-form">
        <div class="col-md-4"></div>
        <div class="col-md-4">
         
        <h2>log in</h2>
        <form action="" class=""g-3>
            <div class="my-3">
                <label class="form-label" >Email:</label>
                <input class="form-control" type="email" placeholder="Enter email" name="email">
            </div>
            <div class="my-3">
                <label class="form-label" >Password:</label>
                <input class="form-control" type="password" placeholder="Enter password" name="email">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-success">reset</button>
        </form>
        <a href="<?php echo base_url('sign_up')?>">u dont have an account?sign up</a>
        </div>
    </div>
</section>