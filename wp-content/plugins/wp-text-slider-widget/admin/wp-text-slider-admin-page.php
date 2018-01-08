<?php

class wpTextSlider{
    public function __construct(){
        add_action('admin_menu',[$this,'menuItem']);
        add_action('wp_ajax_ca_save_slider_text',[$this,'saveSliderText']);
    }

    public function menuItem(){
        add_menu_page('Wp Text Slider Widget','Wp Text Slider Widget','manage_options','wp-text-slider-widget',[$this,'wpTextSliderPage'],'dashicons-welcome-write-blog');
    }

    public function wpTextSliderPage(){
        $texts = get_option('ca_wp_text_slider_texts');
        if($texts == false)
            $texts = json_encode(['Please write your text']);

        $texts = json_decode($texts);
        $text_input = '';
        foreach($texts as $text){
            $text_input .= '<div><input type="text" name="mytext[]" value="'.$text.'"/><a href="#" class="remove_field">Remove</a></div>';
        }
        echo '
            <h1>Wp Text Slider Widget</h1>
            <p>Write the texts input fields then click the save button. For remove the texts please click remove link then click the save button. </p>
            <form id="ca-textSliderForm">
                <div class="ca-container">
                    '.$text_input.'
                </div>
            <button type="button" class="button button-primary" id="add_text">Add More Text</button>
            <button type="button" class="button button-primary" id="ca-submit">Save</button>
            </form>
            <script>
                jQuery(function($){ 
                    console.log("Wellcome to wp text slider plugin!");
                    $("#add_text").click(function() {
                        console.log("Adding new text.");
                        $(".ca-container").append(\'<div><input type="text" name="mytext[]"/><a href="#" class="remove_field">Remove</a></div>\');
                    });
                    
                    $(".ca-container").on("click",".remove_field",function() {
                        console.log("Removing");
                        $(this).parent("div").remove();
                    });
                    
                    $("#ca-textSliderForm").on("click","#ca-submit",function() {
                        console.log("Posting values");
                        var formValues = $("#ca-textSliderForm").serializeArray();
                        var data = {
                            \'action\' : \'ca_save_slider_text\',
                            \'data\'   : formValues 
                        };
                        
                        $.post(ajaxurl,data,function(response) {
                            console.log(response);
                            alert(response);
                        });
                    });
                });
            </script>
            <style>
                #ca-textSliderForm div{
                    padding: 10px;
                }
                #ca-textSliderForm div a{
                    margin-left: 10px;
                }
            </style>
            ';
    }

    public function saveSliderText(){
        foreach($_POST['data'] as $text){
            $fixed_texts[] = sanitize_text_field((string)$text['value']);
        }
        $texts = json_encode($fixed_texts);
        update_option('ca_wp_text_slider_texts',$texts);
        echo "Success";
        wp_die();
    }
}

new wpTextSlider();