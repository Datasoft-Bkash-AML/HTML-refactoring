<?php
// chunk-49..51: password recovery (forgot password) UI
?>
<div class="rey-accountPanel-form rey-forgetForm" aria-labelledby="recover-title">
    <div class="rey-accountPanel-title" id="recover-title">Password Recovery</div>

    <div class="woocommerce-form-forgot-formData">
        <p>Lost your password? Please enter your username or email address. You will receive a link to create a new password via email.</p>
        <p class="rey-form-row rey-form-row--text">
            <label class="rey-label" for="user_login">Username or email</label>
            <input class="rey-input rey-input--text" type="text" name="user_login" id="user_login" autocomplete="username" required value="" oninput="(function(e){e.target.closest('.rey-form-row').classList.toggle('--has-value',e.target.value)})(arguments[0]);" />
        </p>

        <p>
            <input type="hidden" name="wc_reset_password" value="true" />
            <button type="submit" class="btn btn-line-active submit-btn" value="Reset password" aria-label="Reset password">Reset password</button>
        </p>

        <input type="hidden" id="woocommerce-lost-password-nonce" name="woocommerce-lost-password-nonce" value="" />
        <input type="hidden" name="_wp_http_referer" value="/" />
    </div>

    <div class="rey-accountForms-notice" aria-live="polite"></div>
</div>
