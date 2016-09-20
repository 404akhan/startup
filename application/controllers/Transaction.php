<?php
class Transaction extends CI_Controller {


  public function index($ISIN = NULL)
  {
    $data = [];
    $this->load->view('layouts/header', $data);
    $this->load->view('transaction',$data);
    $this->load->view('layouts/footer');
  }

    public function submit()
    {
        //get form field
        $data['amount'] = $this->input->post('amount');
        $data['startup_name'] = $this->input->post('startup_name');
        $data['roi'] = $this->input->post('roi');

        $this->data->save_transactions($data);

        $this->load->view('layouts/header', $data);
        $this->load->view('thankYou',$data);
        $this->load->view('layouts/footer');

    }
}
?>