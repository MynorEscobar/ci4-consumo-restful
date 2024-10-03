<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RequestInterface;

class PlanesApiController extends BaseController
{
    public function index()
    {
        // Cargamos el servicio HTTP
        $api = \Config\Services::curlrequest();
        // Realizamos la solicitud GET
        $respuesta = $api->get('http://localhost/ci4_telefonia_api/public/api/planes');
        // Decodificamos el JSON de la respuesta
        $data = json_decode($respuesta->getBody(), true);
        
        return view('planes',['data'=>$data]);
        
    }
}
