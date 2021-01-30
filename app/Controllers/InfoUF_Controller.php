<?php namespace App\Controllers;
use App\Models\InfoUF_model;
class InfoUF_Controller extends BaseController
{

	public function index()
	{
        $infoUF_model = new InfoUF_model($db);
    
        $datos = $infoUF_model->findAll();
        $datos = array('datos' => $datos);

		return view('InfoUF', $datos ) ;
	}
	//-----------------------------------------------------EDITAR y AGREGAR--------------
    public function editar(){
        $infoUF_model = new InfoUF_model($db);
        $request = \Config\Services::request();

        $id=$request->getPostGet('id');
        $fecha=$request->getPostGet('fecha');
        $valor=$request->getPostGet('valor');
        
        $data=array(
            'fecha' => $request->getPostGet('fecha'),
            'valor' => $request->getPostGet('valor'),
        );

        if($request->getPostGet('id')){
            $data['id'] = $request->getPostGet('id');
        };

        if($infoUF_model->save($data) === false){
            var_dump($infoUF_model->errors());
        };

        if($request->getPostGet('id')){
            $datos_uf = $infoUF_model->find([$request->getPostGet('id')]); 
            $datos_uf = array('datos_uf' => $datos_uf);
        };
    }

    // ------------------------------------ BORRAR----------

    public function borrar() {
        $infoUF_model = new InfoUF_model($db);
    
        $request = \Config\Services::request();
        $id=$request->getPostGet('id');

        $infoUF_model->delete($id);
        $datos = $infoUF_model->findAll();
        $datos = array('datos' => $datos);

		return view('InfoUF', $datos ) ;
        

    }
    

}