<?php
class Menu
{
   
    public function __construct()
    {
        add_action('admin_menu', array($this, 'custom_post_menu_add'));
    }

    public function custom_post_menu_add()
    {
        add_menu_page('Custom Post','Custom Post', 'manage_options', 'custom_post_menu',array($this, 'custom_post_menu_add_form'));
        add_submenu_page('custom_post_menu','Add Post', 'Add Post', 'manage_options', 'custom_post_menu',array($this, 'custom_post_menu_add_form'));
        add_submenu_page('custom_post_menu','View Post', 'View Post', 'manage_options', 'custom_post_menu_view',array($this, 'custom_post_menu_view'));
    }
    public function custom_post_menu_add_form()
    {
        echo "form";
    }
    public function custom_post_menu_view()
    {
        echo "view";
    }

}

new Menu();