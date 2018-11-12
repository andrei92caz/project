<?php echo form_open('users/login'); ?>
<div class="row">
    <div class="col-md col-md-4-offset">
        <h1 class="text-center"><?= $title; ?></h1>
        <div class = "form-group">
        <input type="text" name='username' class='form-control' placeholder='Enter Username' required autofocus>
        </div>
        <div class = "form-group">
        <input type="password" name='password' class='form-control' placeholder='Enter Password' required autofocus>
        </div>
        <button type='submit' class='btn btn-primary btn-block' >Login</button>
    </div>
</div>


<?= form_close(); ?>