<?php
/**
 * Created by PhpStorm.
 * User: JC
 * Date: 21/11/2019
 * Time: 20:45
 */

class Muestra extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();
        $this->load->helper("url");
    }

    public function index(){
        $data["title"] = "Muestra";
        $this->load->view("layout/header",$data);
        $this->load->view("layout/sidebar");
        $this->load->view("layout/navbar");
        $this->load->view("muestra/muestra_view");
        $this->load->view("layout/footer");

    }

}