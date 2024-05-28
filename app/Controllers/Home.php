<?php

namespace App\Controllers;

use App\Models\PersonalModel;

class Home extends BaseController
{
    public function index()
    {
        $model = new PersonalModel();
        $data['personal_info'] = $model->first();
        return view('index', $data);
    }

    
}
