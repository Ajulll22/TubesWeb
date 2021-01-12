<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $allowedFields = ['user_name','user_email','user_password','user_created_at'];
    protected $primaryKey = "id";

    
    public function getUser($id = false)
    {
        if($id === false){
            return $this->table('user')
                        ->get()
                        ->getResultArray();
        } else {
            return $this->table('user')
                        ->where('user_id', $id)
                        ->get()
                        ->getRowArray();
        }   
    } 

    public function insert_user($data)
    {
        return $this->db->table($this->table)->insert($data);
    } 


    public function update_user($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['user_id' => $id]);
    } 


    public function delete_user($id)
    {
        return $this->db->table($this->table)->delete(['user_id' => $id]);
    } 


}