<?php
   function QuixChat_AddonScript_into_footer() { ?>
        <!--QUIXCHAT CODE START HERE-->
        <script type="text/javascript">
            var Quix_base_id = "<?php echo get_option('QuixChat_Base_id');?>";
            var Quix_license_key = "<?php echo get_option('QuixChat_license_key');?>";
        </script>
        <script type="text/javascript" src="https://api.quixchat.com/assets/js/quixchat.js"></script>
        <!--QUIXCHAT CODE END HERE-->
<?php }

if(get_option('QuixChat_Base_id') and get_option('QuixChat_license_key') and get_option('QuixChat_showIn') =='all'){
    add_action( 'wp_footer', 'QuixChat_AddonScript_into_footer' );
}

if(!function_exists('QuixChat_func_create_sc')){
    function QuixChat_func_create_sc($atts){
       
            return QuixChat_AddonScript_into_footer();
        
    }
    if(get_option('QuixChat_Base_id') and get_option('QuixChat_license_key') and get_option('QuixChat_showIn') =='none'){
        add_shortcode( 'IT_QUIXCHAT', 'QuixChat_func_create_sc' );
    }
    
}
