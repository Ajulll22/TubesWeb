<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\ProductModel;
use Wildanfuady\WFcart\WFcart;
 
class Home extends Controller
{
    public function __construct() {
 
        // Mendeklarasikan class ProductModel menggunakan $this->product
        $this->product = new ProductModel();
        $this->cart = new WFcart();
        helper('form');
        /* Catatan:
        Apa yang ada di dalam function construct ini nantinya bisa digunakan
        pada function di dalam class Product 
        */
    }


    public function index()
    {
        $model = new ProductModel();
        $session = session('cart');
        $data['items'] = $this->cart->totals();
        $data['jumlah'] = $this->cart->count_totals();
        $data['total'] = is_array($session)? array_values($session): array();
        $data['product']  = $model->getCat()->getResult();
        return view('home', $data);
    }

    public function Fashion()
    {
        $model = new ProductModel();
        $session = session('cart');
        $data['items'] = $this->cart->totals();
        $data['jumlah'] = $this->cart->count_totals();
        $data['total'] = is_array($session)? array_values($session): array();
        $data['product']  = $model->getFashion()->getResult();
        return view('home', $data);
    }

    public function Food()
    {
        $model = new ProductModel();
        $session = session('cart');
        $data['items'] = $this->cart->totals();
        $data['jumlah'] = $this->cart->count_totals();
        $data['total'] = is_array($session)? array_values($session): array();
        $data['product']  = $model->getFood()->getResult();
        return view('home', $data);
    }

    public function Otomotif()
    {
        $model = new ProductModel();
        $session = session('cart');
        $data['items'] = $this->cart->totals();
        $data['jumlah'] = $this->cart->count_totals();
        $data['total'] = is_array($session)? array_values($session): array();
        $data['product']  = $model->getOtomotif()->getResult();
        return view('home', $data);
    }

    public function Gadget()
    {
        $model = new ProductModel();
        $session = session('cart');
        $data['items'] = $this->cart->totals();
        $data['jumlah'] = $this->cart->count_totals();
        $data['total'] = is_array($session)? array_values($session): array();
        $data['product']  = $model->getGadget()->getResult();
        return view('home', $data);
    }

    public function Makeup()
    {
        $model = new ProductModel();
        $session = session('cart');
        $data['items'] = $this->cart->totals();
        $data['jumlah'] = $this->cart->count_totals();
        $data['total'] = is_array($session)? array_values($session): array();
        $data['product']  = $model->getMakeup()->getResult();
        return view('home', $data);
    }

    public function Kitchen()
    {
        $model = new ProductModel();
        $session = session('cart');
        $data['items'] = $this->cart->totals();
        $data['jumlah'] = $this->cart->count_totals();
        $data['total'] = is_array($session)? array_values($session): array();
        $data['product']  = $model->getKitchen()->getResult();
        return view('home', $data);
    }

    public function Decoration()
    {
        $model = new ProductModel();
        $session = session('cart');
        $data['items'] = $this->cart->totals();
        $data['jumlah'] = $this->cart->count_totals();
        $data['total'] = is_array($session)? array_values($session): array();
        $data['product']  = $model->getDecoration()->getResult();
        return view('home', $data);
    }
}