<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 21/11/2019
 * Time: 11:47 PM
 */

class Proveedor  extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        $this->load->helper("url");
    }

    public function index(){

        $data["title"] = "Proveedor";
        $this->load->view("layout/header",$data);
        $this->load->view("layout/sidebar");
        $this->load->view("layout/navbar");
        $this->load->view("proveedor/proveedor_view");
        $this->load->view("layout/footer");

    }
}