<section class="container my-5">
    <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
    <h2>sign up</h2>
    <form action="">
        <div class="my-3">
            <label class="form-label" >Name:</label>
            <input class="form-control" type="text" placeholder="Enter name" name="name" required>
        </div>
        <div class="my-3">
            <label class="form-label" >Email:</label>
            <input class="form-control" type="email" placeholder="Enter email" name="email" required>
        </div>
        <div class="my-3">
            <label class="form-label" >Password:</label>
            <input class="form-control" type="password" placeholder="Enter password" name="pswd" required>
        </div>
        <div class="my-3">
            <label class="form-label" >Repit Password:</label>
            <input class="form-control" type="password" placeholder="Enter password" name="pswdAgain" required>
        </div>
        <div class="my-3">
            <label class="form-label" >date of birth:</label>
            <input class="form-control" type="date" name="birthday" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-success">reset</button>
    </form>
    <a href="<?php echo base_url('log_in')?>">already have an account?log in</a>
    </div>
    </div>
</section>