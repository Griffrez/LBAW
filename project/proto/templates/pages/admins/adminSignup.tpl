{include file='common/adminHeader.tpl'}

 <div class="admin-intro-header">
        <div class="container">
            <div class="row">
                {if $SUCCESS_MESSAGES != ""}
                    {foreach $SUCCESS_MESSAGES as $message}
                        <div class="alert alert-info alert-dismissable fade in">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>{$message}</strong>
                        </div>
                    {/foreach}
                {/if}
                {if $ERROR_MESSAGES != ""}
                    {foreach $ERROR_MESSAGES as $message}
                        <div class="alert alert-danger alert-dismissable fade in">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>{$message}</strong>
                        </div>
                    {/foreach}
                {/if}
            </div>
            <div class="row">
                <div class="intro-message">
                  <h1>Sign up</h1>
                    <hr class="intro-divider">
                    <form id="signupForm" class="searchForm" action="{$BASE_URL}actions/admin/signup.php" method="post" autocomplete="on">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" name="username" title="Username" placeholder="Enter your Username"/>
                                    </div>
                                </div>
                                <div class="outerErrorMessage">
                                    <span id="invalidUsername"></span>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                        <input type="password" class="form-control" name="password" title="Password"  placeholder="Enter your Password"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                        <input type="password" class="form-control" name="confirm" title="Password Confirmation"  placeholder="Confirm your Password"/>
                                    </div>
                                </div>
                                <div class="outerErrorMessage">
                                    <span id="invalidPassword"></span>
                                </div>
                                <div class="outerErrorMessage">
                                    <span id="invalidConfirmation"></span>
                                </div>
                            </div>
                        </div>
                       <!-- <div class="row errorMessage">
                        <span>
                            {foreach $ERROR_MESSAGES as $error}
                                <div class="error">{$error}</div>
                            {/foreach}
                        </span>
                        </div>-->
                        <input type="submit" class="btn btn-primary btn-lg gradient-blue" value="Register"/>
                    </form>
                </div>
            </div>
        </div>
    </div>

<script>
    $(function(){
        adminSignUp();
    });
</script>

{include file='common/footer.tpl'}

