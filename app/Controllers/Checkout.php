<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ProductModel;
use App\Models\OrderModel;
use Wildanfuady\WFcart\WFcart;

class Checkout extends BaseController
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
		$model = new ProductModel();
        $session = session('cart');
        $data['items'] = $this->cart->totals();
        $data['jumlah'] = $this->cart->count_totals();
        $data['total'] = is_array($session)? array_values($session): array();
        $data['product']  = $model->getCat()->getResult();
		return view('checkout',$data);
	}

	//--------------------------------------------------------------------

	public function store()
    {

		$jumlah = $this->cart->count_totals();
    // Mengambil value dari form dengan method POST
    $nama = $this->request->getPost('order_nama');
	$email = $this->request->getPost('order_email');
	$barang = $this->request->getPost('barang');
	$total =$jumlah+25000;
    $kota = $this->request->getPost('kota');
	$kecamatan = $this->request->getPost('kecamatan');
	$alamat = $this->request->getPost('alamat');
	$telpon = $this->request->getPost('telpon');
	$shipping = $this->request->getPost('shipping');
	$pembayaran = $this->request->getPost('payment');
 
    // Membuat array collection yang disiapkan untuk insert ke table
    $order = [
        'order_nama' => $nama,
        'order_email' => $email,
        'barang' => $barang,
		'total' => $total,
		'kota' => $kota,
		'kecamatan' => $kecamatan,
		'alamat' => $alamat,
		'telpon' => $telpon,
		'shipping' => $shipping,
		'pembayaran' => $pembayaran
    ];
 
    /* 
    Membuat variabel simpan yang isinya merupakan memanggil function 
    insert_product dan membawa parameter data 
    */
    $simpan = $this->order->insert_product($order);
 
    // Jika simpan berhasil, maka ...
    if($simpan)
        {
        // Deklarasikan session flashdata dengan tipe success
        // Redirect halaman ke product
        return redirect()->to(base_url('/Home')); 
        }
    }


}
