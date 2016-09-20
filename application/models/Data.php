<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Model
{
    public function get_by_id($id)
    {
        return $this->db->get('startups')->row_array();
    }

    public function get_transactions($id)
    {
        $result = $this->db->where('id', $id)->get('users')->row_array();

        return json_decode($result['transaction_history'], true);
    }

    public function save_transactions($data)
    {
        $old_data = $this->get_transactions(1);
        array_push($old_data, $data);

        $this->db->set('transaction_history', json_encode($old_data));
        $this->db->update('users');
    }
}