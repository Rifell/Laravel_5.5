<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Portfolio;

class PortfolioController extends Controller
{
    //
    public function execute() {
            
             if(view()->exists('admin.portfolios')) {
                $portfolio = Portfolio::all();
        
                  $data = [
                      'title' => 'Портфолио',
                      'portfolios' => $portfolio
                   ];
        
              return view('admin.portfolios', $data);
            
            }
            
                    
     }
            

}
