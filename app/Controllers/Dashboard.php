<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\ProductModel;
 
class Dashboard extends Controller
{
    public function __construct() {
 
        // Mendeklarasikan class ProductModel menggunakan $this->product
        $this->product = new ProductModel();
        /* Catatan:
        Apa yang ada di dalam function construct ini nantinya bisa digunakan
        pada function di dalam class Product 
        */
    }


    public function index()
    {
        $model = new ProductModel();
        $session = session('cart');
        $data['total'] = is_array($session)? array_values($session): array();
        $data['product']  = $model->getCat()->getResult();
        return view('dashboard', $data);
    }
}