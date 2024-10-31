<div class="wrap">
<?php if(isset($_GET['settings-updated'])){?>
  <div class="notice notice-success is-dismissible">
        <p><?php _e( 'Done! Setting Has Been Saved Successfully', QUIXCHAT_DOMAIN ); ?></p>
    </div>
    <br>
<?php } ?>
        <div class="box">

                <img src="<?php echo QUIXCHAT_URL;?>/assets/img/quxchat_logo.png" height="40" width="150">
                <a href="https://infotheme.net/product/quixchat-pro/" target="_blank" class="button is-right is-link is-rounded peach-gradient-button" style="float:right;"><?php _e('Get Pro Version',QUIXCHAT_DOMAIN);?></a>
                <hr>
                <div class="columns">
                    <div class="column is-half">
                        <div class="box">
                            <h4><?php _e('Fill Below Details to Activate Your QuixChat Account',QUIXCHAT_DOMAIN);?></h4>
                            <hr>
                            <form class="QuixChatSettingForm" name="QuixChatSettingForm" id="QuixChatSettingForm" method="post" action="options.php" autocomplet="off">
                                <?php settings_fields( 'QuixChat-settings' ); ?>	
                                <?php do_settings_sections( 'QuixChat-settings' );?>
                                <div class="field">
                                <label class="label"><?php _e('Show In', QUIXCHAT_DOMAIN);?></label>
                                <div class="select select" style="width:100%;">
                                    <select class="is-info"  style="width:100%;" name="QuixChat_showIn" required>
                                        <option value="all"<?php if(get_option('QuixChat_showIn') == 'all') echo ' selected';?>><?php _e('Everywhere',QUIXCHAT_DOMAIN);?></option>
                                        <option value="none"<?php if(get_option('QuixChat_showIn') == 'none') echo ' selected';?>><?php _e('Specific Page',QUIXCHAT_DOMAIN);?></option>
                                    </select>
                                </div>
                                </div>

                                <div class="field">
                                <label class="label"><?php _e('Email', QUIXCHAT_DOMAIN);?></label>
                                <div class="control has-icons-left">
                                    <input class="input is-info" type="email" name="QuixChat_email" value="<?php if(get_option('QuixChat_email')) echo get_option('QuixChat_email'); else echo get_bloginfo('admin_email');?>" placeholder="<?php _e('Your Email Address',QUIXCHAT_DOMAIN);?>" required>
                                    
                                    <span class="icon is-small is-left">
                                        <i class="dashicons dashicons-email"></i>
                                    </span>
                                </div>
                                </div>
                                
                                <label class="label"><?php _e('Base ID', QUIXCHAT_DOMAIN);?></label>
                                <div class="field  has-addons">
                                <div class="control has-icons-left" style="width:100%">
                                    <input class="input is-info" type="text" name="QuixChat_Base_id" placeholder="<?php _e('QuixChat Base ID',QUIXCHAT_DOMAIN);?>" value="<?php echo get_option('QuixChat_Base_id');?>"/>
                                    
                                    <span class="icon is-small is-left">
                                        <i class="dashicons dashicons-lock"></i>
                                    </span>
                                </div>
                                <div class="control">
                                    <a class="button is-info" style="height:auto; padding:4px 8px; box-shadow:none;" target="_blank" href="https://quixchat.com/?wpsite=<?php echo site_url();?>">
                                    <?php _e('Get It Now', QUIXCHAT_DOMAIN);?>
                                    </a>
                                </div>
                                </div>
                                
                                <label class="label"><?php _e('License Key', QUIXCHAT_DOMAIN);?></label>
                                
                                <div class="field has-addons">
                                <div class="control has-icons-left" style="width:100%">
                                    <input class="input is-info" type="text" name="QuixChat_license_key" placeholder="<?php _e('QuixChat License Key',QUIXCHAT_DOMAIN);?>" value="<?php echo get_option('QuixChat_license_key');?>"/>
                                    
                                    <span class="icon is-small is-left">
                                        <i class="dashicons dashicons-admin-network"></i>
                                    </span>
                                </div>
                                <a class="button is-info"  style="height:auto; padding:4px 8px;box-shadow:none;" target="_blank" href="https://quixchat.com/?wpsite=<?php echo site_url();?>">
                                    <?php _e('Get It Now',QUIXCHAT_DOMAIN);?>
                                    </a>
                                </div>

                                <hr>
                                <input class="button is-link peach-gradient-button" type="submit" value="<?php _e('Save Changes',QUIXCHAT_DOMAIN);?>" style="height:auto; padding:4px 8px;">
                        </form>
                    </div>
                </div>
                <div class="column" style="text-align: center;">
                    <div class="QuixFlex">
                        <div>
                            <img src="<?php echo QUIXCHAT_URL;?>/assets/img/brand_logo.png" width="64"/>
                            <hr>
                            <p><?php _e('If you need any assistant regarding plugin, you can connect with us over',QUIXCHAT_DOMAIN);?></p><br>
                            <p><a href="https://tickets.infotheme.net" target="_blank" class="button is-link"><?php _e('Get Plugin Support',QUIXCHAT_DOMAIN);?></a> <a href="https://forum.infotheme.net" class="button is-primary" target="_blank"><?php _e('Ask A Question',QUIXCHAT_DOMAIN);?></a> <a href="https://infotheme.net/product/quixchat-pro/" class="button is-info" target="_blank"><?php _e('Buy Pro / Chat Support',QUIXCHAT_DOMAIN);?></a></p>
                               <br>
                                <article class="message is-warning">
                                    <div class="message-header">
                                        <p>Need Shortcode for Specific Page</p>
                                    </div>
                                    <div class="message-body">
                                            <p><?php _e('Please choose specific page from "Show In" option and paste it anywhere in your website where you want to show it.',QUIXCHAT_DOMAIN);?></p>
                                            <br>
                                            <pre><strong>[IT_QUIXCHAT]</strong></pre>
                                    </div>
                                    </article>
                            </div>
                    </div>
                </div>
                <div class="clear"></div>
          </div>
        </div>
        <div class="clear"></div>
                            </div>
                            <div class="clear"></div>