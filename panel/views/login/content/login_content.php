<div class="login-box">
    <div class="login-logo">
        <a href="../../index2.html"><b>SercanOruc</b>LTE</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Blog girisi</p>

        <form action="index.php?p=do_login" method="post">
            <div class="form-group has-feedback">
                <input type="email" name="email" class="form-control"
                    <?php if(isset($_COOKIE["email"])) { ?>
                        value="<?php echo $_COOKIE["email"]; ?>" <?php } else { ?> placeholder="Email" <?php } ?>>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" name="password" class="form-control" <?php if(isset($_COOKIE["password"])) { ?>
                    value="<?php echo $_COOKIE["password"]; ?>" <?php } else { ?> placeholder="Password" <?php } ?>>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                </div>
                <!-- /.col -->
            </div>


        <div class="row">
            <div class="col-sm-8">
                <div class="checkbox icheck">
                    <div>
                        <label>
                            <input type="checkbox" name="onay"> Remember Me
                        </label>
                    </div>

                </div>
            </div>
            <a href="sifre.php">sifremi unuttum</a><br>
        </div>
        </form>

    </div>
    <!-- /.login-box-body -->
</div>