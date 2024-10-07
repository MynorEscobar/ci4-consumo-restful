<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\Client;

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
    public function nuevoPlan(){
        return view('planes_nuevos');
    }
    public function agregarPlanes(){
       
        // Crear una instancia del cliente HTTP
       
        $client = \Config\Services::curlrequest();
 
        // Datos que deseas enviar en formato JSON
        $data = [
            'nombre'  => $this->request->getvar('txtNombre'),
            'pago_mensual'  => $this->request->getvar('txtPagoMensual'),
            'cantidad_minutos'  => $this->request->getvar('txtCantidadMinutos'),
            'cantidad_mensajes'  => $this->request->getvar('txtCantidadMensajes'),
 
        ];
 
        // Enviar la solicitud POST con el encabezado y el cuerpo JSON
        $response = $client->request('POST', 'https://ejemploproyectos2024.x10.mx/ci4_telefonia/public/api/planes', [
            'headers' => [
                'Content-Type' => 'application/json',
                'Accept'       => 'application/json',
            ],
            'json' => $data  // Automáticamente convierte el array en JSON
        ]);
 
        // Obtener la respuesta
        $responseBody = $response->getBody();
 
        // Mostrar la respuesta de la API (puedes manejarla según tus necesidades)
        
        //return $responseBody;
        echo "datos almacenados";
     }
}