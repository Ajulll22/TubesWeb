<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class OrderModel extends Model
{
    protected $table = "order";
 
    public function getOrder($id = false)
    {
        if($id === false){
            return $this->table('orders')
                        ->get()
                        ->getResultArray();
        } else {
            return $this->table('orders')
                        ->where('order_id', $id)
                        ->get()
                        ->getRowArray();
        }   
    } 

    public function getDetail()
    {
        $session = session();
        $detail = $session->get('user_id');
        $builder = $this->db->table('order');
        $builder->select('*')
                ->where(['user_id'=> $detail ]);
        return $builder->get();
    }

    public function getDet($id)
    {
        $builder = $this->db->table('order');
        $builder->select('*')
                ->where(['order_id'=> $id]);
        return $builder->get();
    }
    

    public function insert_order($data)
    {
        return $this->db->table($this->table)->insert($data);
    } 


    public function update_order($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['order_id' => $id]);
    } 


    public function delete_order($id)
    {
        return $this->db->table($this->table)->delete(['order_id' => $id]);
    } 


}