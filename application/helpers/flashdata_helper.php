<?php
function setflash($key,$value)
{
    $ci = get_instance();
    $ci->session->set_flashdata($key,$value);
}

function getflash($key)
{
    $ci = get_instance();
    return $ci->session->flashdata($key);
}