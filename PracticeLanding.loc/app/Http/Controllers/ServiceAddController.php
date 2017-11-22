<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Service;

class ServiceAddController extends Controller
{
    //
    public function execute(Request $request) {

        if($request->isMethod('post')) {

            $input = $request->except('_token');
            
            $validator = Validator::make($input, [
                    'name' => 'required|max:255|unique:services,name',
                    'text' => 'required|max:255',
                    'icon' => 'required|max:255'
            ]);

        if($validator->fails()) {
             return redirect()->route('serviceAdd')->withErrors($validator)->withInput();
        }
        
        $service = new Service;
        
            $service->fill($input);
                 
             if($service->save()) {
                    return redirect('services')->with('status','Ячейка портфолио добавлена');
            }
        
        }

        if(view()->exists('admin.service_add')) {
            $data = [
                'title' => 'Создание сервиса'
            ];
        return view('admin.service_add', $data);
        }
    }
}
