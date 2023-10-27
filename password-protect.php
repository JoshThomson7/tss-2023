<?php
/*
Template Name: Password Protected
*/

get_header();
?>

<div class="password-protect" style="margin: 50px 0;">
    <div class="max__width">
        <?php if (post_password_required()) : ?>
            <div class="password-protected-message">
                <?php echo get_the_password_form(); ?>
            </div>
        <?php else: ?>
                <?php FC_Helpers::flexible_content(); ?>
        <?php endif; ?>
    </div>
</div>

<?php
get_footer(); ?>