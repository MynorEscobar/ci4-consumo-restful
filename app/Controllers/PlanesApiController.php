<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RequestInterface;

class PlanesApiController extends BaseController
{
    public function index()
    {
        // Cargamos el servicio HTTP
        $client = \Config\Services::curlrequest();
        // Realizamos la solicitud GET
        $response = $client->get('http://localhost/ci4_telefonia_api/public/api/planes');
        // Decodificamos el JSON de la respuesta
        $data = json_decode($response->getBody());
        
        // Retornamos la respuesta para mostrarla o procesarla
        //return $this->response->setJSON($data);
        
        print_r($this->response->setJSON($data));
        //return view('planes',$datos);
        
        
    }
}
