<?php 
class Form
{
    public function __construct()
    {

    }

    public static function form()
    {
        $file = CUSTOM_POST_PLUGIN_DIR . 'views/addpost.php';
        include($file);
    }

}
new Form();

?>