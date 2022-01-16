<?php
class Employee extends CI_Controller {
    public function index()
    {
        return $this->load->view('employee/index');
    }
    public function create()
    {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        if
        ($_SERVER['REQUEST_METHOD']=='POST'){
            if ($this->form_validation->run() == false) {
                $this->load->view('employee/create');
            } else {
                $this->load->model('User_model');
                //Save Record To Database
               
                $data = array();
                $data['name'] = $_POST['name'];
                $data['email'] = $_POST['email'];
                $data['phone'] = $_POST['phone'];
                $data['created_at'] = date('Y-m-d');
                $this->User_model->create($data);
                // $this->session->set_flashdata('success', 'Record Added Successfullly');
                redirect(base_url() . 'index.php/employee/index');
            }
        }else {
            return $this->load->view('employee/create');
        }
}
}
