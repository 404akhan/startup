<?php

class Payment extends CI_Controller
{
    public function index($id = NULL)
    {
        $data = $this->data->get_by_id($id);

        $this->load->view('layouts/header', $data);
        $this->load->view('payment', $data);
        $this->load->view('layouts/footer');
    }

    public function submit()
    {
        $data['amount'] = $this->input->post('amount');
        $data['startup_name'] = $this->input->post('startup_name');
        $data['roi'] = $this->input->post('roi');
        $this->load->view('layouts/header', $data);
        $this->load->view('transaction', $data);
        $this->load->view('layouts/footer');

    }
}

?>