<?php

/**
 * check to see if any plugin is active for Plugins Customizer
 */
add_action( 'after_setup_theme', 'proper_lite_mt_plugins_support' );
    function proper_lite_mt_plugins_support() {
		
        if ( array(
            !in_array(
                'mt_services/services-by-mt.php', 
                apply_filters('active_plugins', get_option('active_plugins'))
             ),
			 !in_array(
                'mt_projects/projects-by-mt.php', 
                apply_filters('active_plugins', get_option('active_plugins'))
             ),
			 !in_array(
                'mt_skills/skills-by-mt.php', 
                apply_filters('active_plugins', get_option('active_plugins'))
             ),
			 !in_array(
                'mt_testimonials/testimonials-by-mt.php', 
                apply_filters('active_plugins', get_option('active_plugins'))
             ),
			 !in_array(
                'mt_members/members-by-mt.php', 
                apply_filters('active_plugins', get_option('active_plugins'))
             ),
			 !in_array(
                'mt_details/details-by-mt.php', 
                apply_filters('active_plugins', get_option('active_plugins'))
             ),
			 !in_array( 
                'mt_columns/columns-by-mt.php', 
                apply_filters('active_plugins', get_option('active_plugins'))
             ),
			 is_active_widget( '', '', 'proper_lite_home_news')
        )) {
            return;
        }
 
        add_theme_support('mt_plugins_customizer'); 
			
    }


/**
 * check to see if MT Services is active
 */
add_action( 'after_setup_theme', 'proper_lite_services_support' );
    function proper_lite_services_support() {
		
        if (
            !in_array(
                'mt_services/services-by-mt.php', 
                apply_filters('active_plugins', get_option('active_plugins'))
             )
        ) {
            return;
        }
 
        add_theme_support('mt_services'); 
			
    }

/**
 * check to see if MT Projects is active
 */
add_action( 'after_setup_theme', 'proper_lite_projects_support' );
    function proper_lite_projects_support() {
		 
		 	if (
        	!in_array(
                'mt_projects/projects-by-mt.php', 
                apply_filters('active_plugins', get_option('active_plugins'))
             )
        ) {
            return;
        }
 
        add_theme_support('mt_projects');  
		
	}
	
/**
 * check to see if MT Skills is active
 */
add_action( 'after_setup_theme', 'proper_lite_skills_support' );
    function proper_lite_skills_support() {
		
        if (
            !in_array(
                'mt_skills/skills-by-mt.php', 
                apply_filters('active_plugins', get_option('active_plugins'))
             )
        ) {
            return;
        }
 
        add_theme_support('mt_skills'); 
			
    }
	
/**
 * check to see if MT Testimonials is active
 */
add_action( 'after_setup_theme', 'proper_lite_testimonials_support' );
    function proper_lite_testimonials_support() {
		
        if (
            !in_array(
                'mt_testimonials/testimonials-by-mt.php', 
                apply_filters('active_plugins', get_option('active_plugins'))
             )
        ) {
            return;
        }
 
        add_theme_support('mt_testimonials'); 
			
    }
	
/**
 * check to see if MT Team Members is active
 */
add_action( 'after_setup_theme', 'proper_lite_members_support' );
    function proper_lite_members_support() {
		
        if (
            !in_array(
                'mt_members/members-by-mt.php', 
                apply_filters('active_plugins', get_option('active_plugins'))
             )
        ) {
            return;
        }
 
        add_theme_support('mt_members');
			
    }
	
/**
 * check to see if MT Details is active
 */
add_action( 'after_setup_theme', 'proper_lite_details_support' );
    function proper_lite_details_support() {
		
        if (
            !in_array(
                'mt_details/details-by-mt.php', 
                apply_filters('active_plugins', get_option('active_plugins'))
             )
        ) {
            return;
        }
 
        add_theme_support('mt_details'); 
			
    }
	
/**
 * check to see if MT Columns is active
 */
add_action( 'after_setup_theme', 'proper_lite_columns_support' );
    function proper_lite_columns_support() {
		
        if (
            !in_array(
                'mt_columns/columns-by-mt.php', 
                apply_filters('active_plugins', get_option('active_plugins'))
             )
        ) {
            return;
        }
 
        add_theme_support('mt_columns');   
			
    }


/**
 * check to see if Home News is active 
 */
function proper_lite_news_support() {
	
    if( is_active_widget( '', '', 'proper_lite_home_news') ) { 
		
        add_theme_support('mt_news'); 
  
	}
	
}
add_action('after_setup_theme', 'proper_lite_news_support');

