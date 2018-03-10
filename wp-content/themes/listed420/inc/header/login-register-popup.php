<?php
/**
 * Created by PhpStorm.
 * User: waqasriaz
 * Date: 18/01/16
 * Time: 1:27 PM
 */
?>
<?php /*?><?php
            $host = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
            if($host == 'listed420.com/property/'.basename(get_permalink()).'/') 
            {?>
                <?php if ( is_user_logged_in() ) { ?>
                          
                            <?php } else { ?>
                             <script>                           
                            $(document).ready(function() {
  $('.property-template-default').addClass('modal-open');
});   
                             </script>
                             <div class="modal fade in" id="pop-login" tabindex="-1" role="dialog" style="display: block;">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <ul class="login-tabs">
                    <li class="active"><?php esc_html_e( 'Login', 'houzez' ); ?></li>
                    <li><?php esc_html_e( 'Register', 'houzez' ); ?></li>

                </ul>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></button>

            </div>
            <div class="modal-body login-block class-for-register-msg">
                <?php get_template_part('template-parts/login-register'); ?>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="pop-reset-pass" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <ul class="login-tabs">
                    <li class="active"><?php esc_html_e( 'Reset Password', 'houzez' ); ?></li>
                </ul>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></button>

            </div>
            <div class="modal-body login-block">
                <p><?php esc_html_e( 'Please enter your username or email address. You will receive a link to create a new password via email.', 'houzez' ); ?></p>
                <div id="houzez_msg_reset" class="message"></div>
                <form>
                    <div class="form-group">
                        <div class="input-user input-icon">
                            <input name="user_login_forgot" id="user_login_forgot" placeholder="<?php esc_html_e( 'Enter your username or email', 'houzez' ); ?>" class="form-control">
                        </div>
                    </div>
                    <?php wp_nonce_field( 'fave_resetpassword_nonce', 'fave_resetpassword_security' ); ?>
                    <button type="button" id="houzez_forgetpass" class="btn btn-primary btn-block"><?php esc_html_e( 'Get new password', 'houzez' ); ?></button>
                </form>
            </div>
        </div>
    </div>
</div>       
                                 
                            <?php } ?>
            <?php } elseif( $host == 'listed420.com/agent/'.basename(get_permalink()).'/'){?>

                <?php if ( is_user_logged_in() ) { ?>
                              
                            <?php } else { ?>
                             <script>                          
                                  $(document).ready(function(){
                                  $('.houzez_agent-template-default.single').addClass('modal-open');
                                });
                             </script>
                            <div class="modal fade in" id="pop-login" tabindex="-1" role="dialog" style="display: block; ">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <ul class="login-tabs">
                    <li class="active"><?php esc_html_e( 'Login', 'houzez' ); ?></li>
                    <li><?php esc_html_e( 'Register', 'houzez' ); ?></li>

                </ul>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></button>

            </div>
            <div class="modal-body login-block class-for-register-msg">
                <?php get_template_part('template-parts/login-register'); ?>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="pop-reset-pass" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <ul class="login-tabs">
                    <li class="active"><?php esc_html_e( 'Reset Password', 'houzez' ); ?></li>
                </ul>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></button>

            </div>
            <div class="modal-body login-block">
                <p><?php esc_html_e( 'Please enter your username or email address. You will receive a link to create a new password via email.', 'houzez' ); ?></p>
                <div id="houzez_msg_reset" class="message"></div>
                <form>
                    <div class="form-group">
                        <div class="input-user input-icon">
                            <input name="user_login_forgot" id="user_login_forgot" placeholder="<?php esc_html_e( 'Enter your username or email', 'houzez' ); ?>" class="form-control">
                        </div>
                    </div>
                    <?php wp_nonce_field( 'fave_resetpassword_nonce', 'fave_resetpassword_security' ); ?>
                    <button type="button" id="houzez_forgetpass" class="btn btn-primary btn-block"><?php esc_html_e( 'Get new password', 'houzez' ); ?></button>
                </form>
            </div>
        </div>
    </div>
</div>       
                                  
                 <?php } ?>
            
            <?php }else{
                
            } ?><?php */?>
<div class="modal fade" id="pop-login" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <ul class="login-tabs">
                    <li class="active"><?php esc_html_e( 'Login', 'houzez' ); ?></li>
                    <li><?php esc_html_e( 'Register', 'houzez' ); ?></li>

                </ul>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></button>

            </div>
            <div class="modal-body login-block class-for-register-msg">
                <?php get_template_part('template-parts/login-register'); ?>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="pop-reset-pass" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <ul class="login-tabs">
                    <li class="active"><?php esc_html_e( 'Reset Password', 'houzez' ); ?></li>
                </ul>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></button>

            </div>
            <div class="modal-body login-block">
                <p><?php esc_html_e( 'Please enter your username or email address. You will receive a link to create a new password via email.', 'houzez' ); ?></p>
                <div id="houzez_msg_reset" class="message"></div>
                <form>
                    <div class="form-group">
                        <div class="input-user input-icon">
                            <input name="user_login_forgot" id="user_login_forgot" placeholder="<?php esc_html_e( 'Enter your username or email', 'houzez' ); ?>" class="form-control">
                        </div>
                    </div>
                    <?php wp_nonce_field( 'fave_resetpassword_nonce', 'fave_resetpassword_security' ); ?>
                    <button type="button" id="houzez_forgetpass" class="btn btn-primary btn-block"><?php esc_html_e( 'Get new password', 'houzez' ); ?></button>
                </form>
            </div>
        </div>
    </div>
</div>
