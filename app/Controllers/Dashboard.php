<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\ProductModel;
 
class Dashboard extends Controller
{



    public function index()
    {
        return view('dashboard');
    }
}