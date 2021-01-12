<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ProductModel;
use App\Models\OrderModel;
use Wildanfuady\WFcart\WFcart;

class Pesanan extends BaseController
{
	public function __construct() {
 
        // Mendeklarasikan class ProductModel menggunakan $this->product
		$this->product = new ProductModel();
		$this->order = new OrderModel();
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
		$model = new OrderModel();
        $session = session('cart');
        $data['items'] = $this->cart->totals();
        $data['jumlah'] = $this->cart->count_totals();
        $data['total'] = is_array($session)? array_values($session): array();
        $data['order']  = $model->getDetail()->getResult();
		return view('pesanan',$data);
    }

    public function bayar($nomor)
	{
        $who = session();
		$data['user'] = $who->get();
		$model = new OrderModel();
        $session = session('cart');
        $data['items'] = $this->cart->totals();
        $data['jumlah'] = $this->cart->count_totals();
        $data['total'] = is_array($session)? array_values($session): array();
        $data['order']  = $model->getDet($nomor)->getResult();
        return view('bayar', $data);
    }

    public function status($id)
{
    // Mengambil value dari form dengan method POST

    $status = 'sampai' ;
 
    // Membuat array collection yang disiapkan untuk insert ke table
    $data = [
        'status' => $status
    ];
 
    /* 
    Membuat variabel ubah yang isinya merupakan memanggil function 
    update_product dan membawa parameter data beserta id
    */
    $ubah = $this->order->update_order($data, $id);
     
    // Jika berhasil melakukan ubah
    if($ubah)
    {
        // Deklarasikan session flashdata dengan tipe info
        session()->setFlashdata('info', 'Updated order successfully');
        // Redirect ke halaman product
        return redirect()->to(base_url('Pesanan')); 
    }
}




}
