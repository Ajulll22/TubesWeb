<?php namespace App\Controllers;
 
 use CodeIgniter\Controller;
 use App\Models\ProductModel;
 use App\Models\OrderModel;
 use Wildanfuady\WFcart\WFcart;
 
class Dashboard extends Controller
{
    public function __construct() {
 
        // Mendeklarasikan class ProductModel menggunakan $this->product
        $this->product = new ProductModel();
		$this->order = new OrderModel();
        $this->cart = new WFcart();
        /* Catatan:
        Apa yang ada di dalam function construct ini nantinya bisa digunakan
        pada function di dalam class Product 
        */
    }


    public function index()
    {
        $who = session();
        $data['user'] = $who->get();
        $model = new ProductModel();
        $session = session('cart');
        $data['items'] = $this->cart->totals();
        $data['jumlah'] = $this->cart->count_totals();
        $data['total'] = is_array($session)? array_values($session): array();
        $data['product']  = $model->getCat()->getResult();
        return view('dashboard', $data);
    }
}