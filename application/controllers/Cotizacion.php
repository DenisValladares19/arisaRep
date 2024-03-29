<?php

/**
 * Created by PhpStorm.
 * User: JC
 * Date: 21/11/2019
 * Time: 20:14
 */

class Cotizacion extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();
        $this->load->helper("url");
        $this->load->model("Cotizacion_m");
    }

    public function index(){
        $data["title"] = "Cotización";
        $this->load->view("layout/header",$data);
        $this->load->view("layout/sidebar");
        $this->load->view("layout/navbar");
        $tipo['inventario'] = $this->Cotizacion_m->getAllInventario();
        $this->load->view("cotizacion/cotizacion_view",$tipo);
        $this->load->view("layout/footer");
    }
    
    public function getAllEstados(){
        $estados = $this->Cotizacion_m->getAllEstado();
        echo json_encode($estados);
    }
    
    public function getAllCliente(){
        $clientes = $this->Cotizacion_m->getAllCliente();
        echo json_encode($clientes);
    }
    
    public function getAllTipo(){
        $tipo = $this->Cotizacion_m->getAllTipoImpresion();
        echo json_encode($tipo);
    }
    
    public function  newMaterial(){
        $id = $this->input->post("id");
        $inv = $this->Cotizacion_m->getAllInventario($id);
        echo json_encode($inv);          
    }
        
    public function insertarCotizacion(){
        $idCliente = $_POST["cliente"];
        $fecha = $_POST["fecha"];
        $idTipo = $_POST["tipoImpresion"];
        $idEstado = $_POST["estado"];
        $data = array(
            "idCotizacion"=>0,
            "idCliente"=>$idCliente,
            "idEstado1"=>$idEstado,
            "idTipoImpresion"=>$idTipo,
            "fecha"=>$fecha,
            "borradoLogico"=>1
        );
        //$res = $this->Cotizacion_m->insertCotizacion($data);
    }
}