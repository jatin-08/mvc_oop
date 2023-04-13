<?php

class Contact extends Controller
{
    function index()
    {
        $user = new User();
        $data = $user->findAll();
        $this->view("contact", ['data' => $data]);
    }
}

?>