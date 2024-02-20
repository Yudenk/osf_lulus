<?php
function is_logged_in()
{
    $ci = get_instance();
    if (!$ci->session->userdata('email')){
        redirect('Auth');
    }else{
        $role = $ci->session->userdata('role');
        if ($role != 'Admin'){
            redirect('Admin_Dashboard');
        }
    }
}
?>