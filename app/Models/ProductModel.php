<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class ProductModel extends Model
{
    protected $table = "product";
    protected $primaryKey = "id";
 
    public function getProduct($id = false)
    {
        if($id === false){
            return $this->table('products')
                        ->get()
                        ->getResultArray();
        } else {
            return $this->table('products')
                        ->where('product_id', $id)
                        ->get()
                        ->getRowArray();
        }   
    } 
    

    public function getCat()
    {
        $builder = $this->db->table('product');
        $builder->select('*');
        return $builder->get();
    }

    public function getFood()
    {
        $builder = $this->db->table('product');
        $builder->select('*')
                ->where(['product_cat'=> 'FOOD']);
        return $builder->get();
    }

    public function getFashion()
    {
        $builder = $this->db->table('product');
        $builder->select('*')
                ->where(['product_cat'=> 'Fashion']);
        return $builder->get();
    }

    public function getMusic()
    {
        $builder = $this->db->table('product');
        $builder->select('*')
                ->where(['product_cat'=> 'Music']);
        return $builder->get();
    }

    public function getOtomotif()
    {
        $builder = $this->db->table('product');
        $builder->select('*')
                ->where(['product_cat'=> 'Otomotif']);
        return $builder->get();
    }

    public function getGadget()
    {
        $builder = $this->db->table('product');
        $builder->select('*')
                ->where(['product_cat'=> 'Gadget']);
        return $builder->get();
    }

    public function getMakeup()
    {
        $builder = $this->db->table('product');
        $builder->select('*')
                ->where(['product_cat'=> 'Makeup']);
        return $builder->get();
    }

    public function getKitchen()
    {
        $builder = $this->db->table('product');
        $builder->select('*')
                ->where(['product_cat'=> 'Kitchen']);
        return $builder->get();
    }

    public function getDecoration()
    {
        $builder = $this->db->table('product');
        $builder->select('*')
                ->where(['product_cat'=> 'Decoration']);
        return $builder->get();
    }

    public function insert_product($data)
    {
        return $this->db->table($this->table)->insert($data);
    } 


    public function update_product($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['product_id' => $id]);
    } 


    public function delete_product($id)
    {
        return $this->db->table($this->table)->delete(['product_id' => $id]);
    } 


}