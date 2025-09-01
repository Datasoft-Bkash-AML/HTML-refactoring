<?php
// chunk-40..45: account forms (login, register, notices, links)
?>
<div class="rey-accountForms" data-redirect-type="load_menu" data-redirect-url="" data-account-tab="account" role="region" aria-label="Account forms">

    <div class="rey-accountPanel-form rey-loginForm --active" aria-labelledby="login-title">
        <div class="rey-accountPanel-title" id="login-title">Login</div>

        <form class="login-form" method="post" aria-describedby="login-help">
            <p class="form-row">
                <label for="username">Email or username</label>
                <input type="text" id="username" name="username" required>
            </p>
            <p class="form-row">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </p>

            <div class="rey-form-row rey-form-row--reset-mobile">
                <p class="col">
                    <label class="rey-label rey-label--checkbox" for="rememberme">
                        <input class="rey-input rey-input--checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" />
                        <span></span>
                        <span class="rey-label-text">Remember me</span>
                    </label>
                </p>

                <p class="col text-right">
                    <input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce" value="" />
                    <input type="hidden" name="_wp_http_referer" value="/" />
                    <button type="submit" class="btn btn-line-active submit-btn" name="login" value="SIGN IN" aria-label="SIGN IN">SIGN IN</button>
                </p>
            </div>

            <div id="login-help" class="rey-accountForms-notice" aria-live="polite"></div>
        </form>

        <div class="rey-accountPanel-links rey-accountForms-links" role="group">
            <button class="btn btn-line" data-location="rey-registerForm">Create Account</button>
            <button class="btn btn-line" data-location="rey-forgetForm">Forgot password</button>
        </div>
    </div>

    <div class="rey-accountPanel-form rey-registerForm" aria-labelledby="register-title" hidden>
        <div class="rey-accountPanel-title" id="register-title">Create an account</div>

        <form class="register-form">
            <p class="form-row">
                <label for="reg-email">Email address</label>
                <input id="reg-email" name="reg_email" type="email" required>
            </p>

            <div class="rey-form-row rey-form-row--text --small-text">
                <p>A link to set a new password will be sent to your email address.</p>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn primary">Create account</button>
            </div>
        </form>
    </div>

</div>
