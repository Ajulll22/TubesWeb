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
        $who = session();
		$data['user'] = $who->get();
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
        $who = session();
		$data['user'] = $who->get();
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
        $who = session();
		$data['user'] = $who->get();
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
        $who = session();
		$data['user'] = $who->get();
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
        $who = session();
		$data['user'] = $who->get();
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
        $who = session();
		$data['user'] = $who->get();
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
        $who = session();
		$data['user'] = $who->get();
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
        $who = session();
		$data['user'] = $who->get();
        $model = new ProductModel();
        $session = session('cart');
        $data['items'] = $this->cart->totals();
        $data['jumlah'] = $this->cart->count_totals();
        $data['total'] = is_array($session)? array_values($session): array();
        $data['product']  = $model->getDecoration()->getResult();
        return view('home', $data);
    }
}