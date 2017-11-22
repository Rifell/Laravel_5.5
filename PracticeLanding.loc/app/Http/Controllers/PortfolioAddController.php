<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\Portfolio;


class PortfolioAddController extends Controller
{
    //
    public function execute(Request $request) {

        if($request->isMethod('post')) {

            $input = $request->except('_token');

           $validator = Validator::make($input, [
            'name' => 'required|max:255|unique:portfolios,name',
            'filter' => 'required|max:255'
        ]);

        if($validator->fails()) {
            return redirect()->route('portfolioAdd')->withErrors($validator)->withInput();
         }

         if($request->hasFile('images')) {
         $file = $request->file('images');

         $input['images'] = $file->getClientOriginalName();

         $file->move(public_path().'/assets/img', $input['images']);
         }

         $portfolio = new Portfolio;

         $portfolio->fill($input);
         
         if($portfolio->save()) {
            return redirect('portfolios')->with('status','Ячейка портфолио добавлена');
        }

        }

        if(view()->exists('admin.portfolio_add')) {
            $data = [
                'title' => 'Создание портфолио',


            ];
            return view('admin.portfolio_add', $data);

        }
    }
}
