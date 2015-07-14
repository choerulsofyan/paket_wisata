<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * custome loader file extends CI_Loader
 */

class MY_Loader extends CI_Loader
{
    
    public function template_public($template_name, $vars = array(), $return = FALSE)
    {
        $content = $this->view('templates_public/header', $vars, $return); // header
        $content .= $this->view($template_name, $vars, $return); // view
        $content .= $this->view('templates_public/footer', $vars, $return); // footer

        if ($return) {
            return $content;
        }
    }

    public function template_admin($template_name, $vars = array(), $return = FALSE)
    {
        $content = $this->view('templates_admin/header', $vars, $return); // header
        $content .= $this->view($template_name, $vars, $return); // view
        $content .= $this->view('templates_admin/footer', $vars, $return); // footer

        if ($return) {
            return $content;
        }
    }
}