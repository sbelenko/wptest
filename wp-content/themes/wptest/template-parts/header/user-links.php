<div class="buttons-holder">
    <?php if (is_user_logged_in()): ?>
        <a href="<?php echo wp_logout_url() ?>" class="btn btn-link"><?php _e('Log out', 'base') ?></a>
    <?php else: ?>
        <a href="<?php echo wp_login_url() ?>" class="btn btn-link"><?php _e('Log in', 'base') ?></a>
        <?php if (get_option('users_can_register')): ?>
            <a href="<?php echo wp_registration_url() ?>" class="btn btn-primary"><?php _e('Sign up', 'base') ?></a>
        <?php endif; ?>
    <?php endif; ?>
</div>
