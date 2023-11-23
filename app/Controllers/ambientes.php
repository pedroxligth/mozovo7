<?php
namespace App\Controllers;


use \App\Models\AmbienteModel;

class ambientes extends BaseController
{
    protected $helpers = ['form'];
    public static function exibir(): string
    {
        $model = new AmbienteModel();
        
        
        $data['ambientes'] = $model->findAll();
      

        
        return view('pagina_ambientes', $data);
    }
}
