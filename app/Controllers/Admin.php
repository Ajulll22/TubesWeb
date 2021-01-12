<?php 
 
namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\ProductModel;
use App\Models\OrderModel;
use App\Models\UserModel;


 
class Admin extends Controller
{
 
    public function __construct() {
 
        // Mendeklarasikan class ProductModel menggunakan $this->product
        $this->product = new ProductModel();
        $this->order = new OrderModel();
        $this->user = new UserModel();
        /* Catatan:
        Apa yang ada di dalam function construct ini nantinya bisa digunakan
        pada function di dalam class Product 
        */
    }
 
    public function index()
    {
        $who = session();
		$data['user'] = $who->get();
        $data['product'] = $this->product->getProduct();
        echo view('admin/index', $data );
    } 


    public function create()
    {
        $who = session();
		$data['user'] = $who->get();
        return view('Admin/create');
    }


    public function store()
    {
    // Mengambil value dari form dengan method POST
    $name = $this->request->getPost('product_name');
    $cat = $this->request->getPost('product_cat');
    $price = $this->request->getPost('product_price');
    $desc = $this->request->getPost('product_description');
    $img = $this->request->getPost('product_img');
 
    // Membuat array collection yang disiapkan untuk insert ke table
    $data = [
        'product_name' => $name,
        'product_cat' => $cat,
        'product_price' => $price,
        'product_description' => $desc,
        'product_img' => $img
    ];
 
    /* 
    Membuat variabel simpan yang isinya merupakan memanggil function 
    insert_product dan membawa parameter data 
    */
    $simpan = $this->product->insert_product($data);
 
    // Jika simpan berhasil, maka ...
    if($simpan)
        {
        // Deklarasikan session flashdata dengan tipe success
        session()->setFlashdata('success', 'Created product successfully');
        // Redirect halaman ke product
        return redirect()->to(base_url('/Admin')); 
        }
    }


    public function edit($id)
    {
        // Memanggil function getProduct($id) dengan parameter $id di dalam ProductModel dan menampungnya di variabel array product
        $data['product'] = $this->product->getProduct($id);
        $who = session();
		$data['user'] = $who->get();
        // Mengirim data ke dalam view
        return view('Admin/edit', $data);
    } 

    public function update($id)
{
    // Mengambil value dari form dengan method POST

    $name = $this->request->getPost('product_name');
    $cat = $this->request->getPost('product_cat');
    $price = $this->request->getPost('product_price');
    $desc = $this->request->getPost('product_description');
    $img = $this->request->getPost('product_img');
 
    // Membuat array collection yang disiapkan untuk insert ke table
    $data = [
        'product_name' => $name,
        'product_cat' => $cat,
        'product_price' => $price,
        'product_description' => $desc,
        'product_img' => $img
    ];
 
    /* 
    Membuat variabel ubah yang isinya merupakan memanggil function 
    update_product dan membawa parameter data beserta id
    */
    $ubah = $this->product->update_product($data, $id);
     
    // Jika berhasil melakukan ubah
    if($ubah)
    {
        // Deklarasikan session flashdata dengan tipe info
        session()->setFlashdata('info', 'Updated product successfully');
        // Redirect ke halaman product
        return redirect()->to(base_url('/Admin')); 
    }
}


public function delete($id)
{
    // Memanggil function delete_product() dengan parameter $id di dalam ProductModel dan menampungnya di variabel hapus
    $hapus = $this->product->delete_product($id);
 
    // Jika berhasil melakukan hapus
    if($hapus)
    {
            // Deklarasikan session flashdata dengan tipe warning
        session()->setFlashdata('warning', 'Deleted product successfully');
        // Redirect ke halaman product
        return redirect()->to(base_url('/Admin'));
    }
}

public function deleteOrder($id)
{
    // Memanggil function delete_product() dengan parameter $id di dalam ProductModel dan menampungnya di variabel hapus
    $hapus = $this->order->delete_order($id);
 
    // Jika berhasil melakukan hapus
    if($hapus)
    {
            // Deklarasikan session flashdata dengan tipe warning
        session()->setFlashdata('warning', 'Deleted order successfully');
        // Redirect ke halaman product
        return redirect()->to(base_url('/Admin/order'));
    }
}

    public function order()
    {
        $who = session();
		$data['user'] = $who->get();
        $data['order'] = $this->order->getOrder();
        echo view('/Admin/order', $data );
    } 


    public function status($id)
{
    // Mengambil value dari form dengan method POST

    $status = 'dikirim' ;
 
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
        return redirect()->to(base_url('/Admin/order')); 
    }
}

public function deleteUser($id)
{
    // Memanggil function delete_product() dengan parameter $id di dalam ProductModel dan menampungnya di variabel hapus
    $hapus = $this->user->delete_user($id);
 
    // Jika berhasil melakukan hapus
    if($hapus)
    {
            // Deklarasikan session flashdata dengan tipe warning
        session()->setFlashdata('warning', 'Deleted user successfully');
        // Redirect ke halaman product
        return redirect()->to(base_url('/Admin/user'));
    }
}

public function user()
{
    $who = session();
    $data['user'] = $who->get();
    $data['user'] = $this->user->getUser();
    echo view('/Admin/user', $data );
} 




}