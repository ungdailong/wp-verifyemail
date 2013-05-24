<?php

add_action('init', 'infoway_options');
if (!function_exists('infoway_options')) {

    function infoway_options() {
        // VARIABLES
        $themename = "InfoWay";
        $shortname = "of";
        // Populate OptionsFramework option in array for use in theme
        global $infoway_options;
        $infoway_options = infoway_get_option('infoway_options');
        // Background Defaults
        $background_defaults = array('color' => '', 'image' => '', 'repeat' => 'repeat', 'position' => 'top center', 'attachment' => 'scroll');
        //Stylesheet Reader
        $captcha_option = array("on" => "On", "off" => "Off");
        // Pull all the categories into an array
        $options_categories = array();
        $options_categories_obj = get_categories();
        foreach ($options_categories_obj as $category) {
            $options_categories[$category->cat_ID] = $category->cat_name;
        }
        // Pull all the pages into an array
        $options_pages = array();
        $options_pages_obj = get_pages('sort_column=post_parent,menu_order');
        $options_pages[''] = 'Select a page:';
        foreach ($options_pages_obj as $page) {
            $options_pages[$page->ID] = $page->post_title;
        }
        // If using image radio buttons, define a directory path
        $imagepath = get_stylesheet_directory_uri() . '/images/';

        $options = array(
            array("name" => "General Settings",
                "type" => "heading"),
            array("name" => "Custom Logo",
                "desc" => "Choose your own logo. Optimal Size: 300px Wide by 90px Height.",
                "id" => "infoway_logo",
                "type" => "upload"),
            array("name" => "Custom Favicon",
                "desc" => "Specify a 16px x 16px image that will represent your website's favicon.",
                "id" => "infoway_favicon",
                "type" => "upload"),
            array("name" => "Body Background Image",
                "desc" => "Select image to change your website background",
                "id" => "infoway_bodybg",
                "std" => "",
                "type" => "upload"),
            array("name" => "Top Right Contact Details",
                "desc" => "Enter your contact detail/number to display it at the top right corner.",
                "id" => "infoway_topright",
                "std" => "",
                "type" => "textarea"),
            array("name" => "Contact No.",
                "desc" => "Enter your contact number on which you want to receive call's 
			(Feature active only when site is viewed on moblie devices).
			example: +91-1800-548-783",
                "id" => "infoway_contact_number",
                "std" => "",
                "type" => "text"),
            array("name" => "Tracking Code",
                "desc" => "Paste your Google Analytics (or other) tracking code here.",
                "id" => "infoway_analytics",
                "std" => "",
                "type" => "textarea"),
            //front Page Topinfo Bar  Setting		
            array("name" => "Top Infobar Settings",
                "type" => "heading"),
            array("name" => "Top Infobar Text",
                "desc" => "Enter your Text",
                "id" => "infoway_topinfobar_text",
                "std" => "",
                "type" => "textarea"),
            array("name" => "Top Infobar button text",
                "desc" => "Enter your sitename",
                "id" => "infoway_topinfobar_sitename",
                "std" => "",
                "type" => "text"),
            array("name" => "Top Infobar Button Click Url",
                "desc" => "Enter your siteurl",
                "id" => "infoway_topinfobar_url",
                "std" => "",
                "type" => "text"),
            array("name" => "Home page Image Section Starts From Here.",
                "type" => "saperate",
                "class" => "saperator"),
            array("name" => "Upload Home Page Image",
                "desc" => "Choose Image for Top feature Area. Optimal size is 950px wide and 363px height.",
                "id" => "infoway_slideimage1",
                "std" => "",
                "type" => "upload"),
            array("name" => "Home Page Image Link",
                "desc" => "Enter yout link url for Home page image",
                "id" => "infoway_slidelink1",
                "std" => "",
                "type" => "text"),
            //Homepage Feature Area

            array("name" => "Feature Settings",
                "type" => "heading"),
            array("name" => "Feature Page Heading",
                "desc" => "Enter your text for Feature page heading. (just below the slider section)",
                "id" => "infoway_main_heading",
                "std" => "",
                "type" => "textarea"),
            array("name" => "Front Page Feature Section Starts From Here.",
                "type" => "saperate",
                "class" => "saperator"),
            //Left Feature Area
            array("name" => "First Feature Heading",
                "desc" => "Enter your text for first col heading.",
                "id" => "infoway_firsthead",
                "std" => "",
                "type" => "text"),
            array("name" => "First Feature Description",
                "desc" => "Enter your text description.",
                "id" => "infoway_firstdesc",
                "std" => "",
                "type" => "textarea"),
            array("name" => "First Feature Link URL",
                "desc" => "Enter your link url for first feature section.",
                "id" => "infoway_link1",
                "std" => "",
                "type" => "text"),
            //Second Feature Separetor
            array("name" => "Second Feature Heading",
                "desc" => "Enter your text for second Feature heading.",
                "id" => "infoway_secondhead",
                "std" => "",
                "type" => "text"),
            array("name" => "Second Feature Description",
                "desc" => "Enter your text for second Feature description.",
                "id" => "infoway_seconddesc",
                "std" => "",
                "type" => "textarea"),
            array("name" => "Second Feature Link URL",
                "desc" => "Enter your link url for Second feature section.",
                "id" => "infoway_link2",
                "std" => "",
                "type" => "text"),
            //Third Feature Separetor
            array("name" => "Third Feature Heading",
                "desc" => "Enter your text for Third Feature heading.",
                "id" => "infoway_thirdhead",
                "std" => "",
                "type" => "text"),
            array("name" => "Third Feature Description",
                "desc" => "Enter your text for Third Feature description.",
                "id" => "infoway_thirddesc",
                "std" => "",
                "type" => "textarea"),
            array("name" => "Third Feature Link URL",
                "desc" => "Enter your link url for fourth Feature section.",
                "id" => "infoway_link3",
                "std" => "",
                "type" => "text"),
            array("name" => "Bottom Feature Start From Here.",
                "type" => "saperate",
                "class" => "saperator"),
            array("name" => "Testimonial Heading",
                "desc" => "Enter your text Testimonial Heading.",
                "id" => "infoway_testimonial_head",
                "std" => "",
                "type" => "textarea"),
            array("name" => "Testimonial Description",
                "desc" => "Enter your text Testimonial Description.",
                "id" => "infoway_testimonial_desc",
                "std" => "",
                "type" => "textarea"),
//****=============================================================================****//
//****-----------This code is used for creating color styleshteet options----------****//							
//****=============================================================================****//				
            array("name" => "Styling Options",
                "type" => "heading"),
            array("name" => "Custom CSS",
                "desc" => "Quickly add some CSS to your theme by adding it to this block.",
                "id" => "infoway_customcss",
                "std" => "",
                "type" => "textarea"),
//****=============================================================================****//
//****-------------This code is used for creating social logos options-------------****//					
//****=============================================================================****//
            array("name" => "Social Logos",
                "type" => "heading"),
            array("name" => "Twitter URL",
                "desc" => "Enter your Twitter URL if you have one",
                "id" => "infoway_twitter",
                "std" => "",
                "type" => "text"),
            array("name" => "Facebook URL",
                "desc" => "Enter your Facebook URL if you have one",
                "id" => "infoway_facebook",
                "std" => "",
                "type" => "text"),
            array("name" => "Google+ URL",
                "desc" => "Enter your Google+ URL if you have one",
                "id" => "infoway_google",
                "std" => "",
                "type" => "text"),
            array("name" => "Linkedin Feed URL",
                "desc" => "Enter your Linkedin Feed URL if you have one",
                "id" => "infoway_link",
                "std" => "",
                "type" => "text"),
            array("name" => "YouTube Feed URL",
                "desc" => "Enter your YouTube Feed URL if you have one",
                "id" => "infoway_youtube",
                "std" => "",
                "type" => "text"),
            array("name" => "Pinterest Feed URL",
                "desc" => "Enter your Pinterest Feed URL if you have one",
                "id" => "infoway_pin",
                "std" => "",
                "type" => "text"));

        infoway_update_option('of_template', $options);
        infoway_update_option('of_themename', $themename);
        infoway_update_option('of_shortname', $shortname);
    }

}
?>
