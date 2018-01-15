<?php

/**
 * Created by PhpStorm.
 * User: sara
 * Date: 11/01/18
 * Time: 11:06 م
 */

class Contact extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index() {

        $data['records']= $this->Contact_model->listAllContact();
        $this->load->view('contacts/index',$data);
    }
    public function add() {

        $this->load->helper('form');
        $this->load->view('contacts/add');
    }

    public function store() {
        $this->load->library('form_validation');

        $rules = $this->getValidationRules();
        /* Set validation rule for name field in the form */
        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('contacts/add');
        }
        else {

            $data = array(
                'firstname' => $this->input->post('firstname'),
                'lastname' => $this->input->post('lastname'),
                'company' => $this->input->post('company'),
                'phone' => $this->input->post('phone'),
                'address' => $this->input->post('address'),
                'city' => $this->input->post('city'),
                'country' => $this->input->post('country'),
            );

            $this->Contact_model->insert($data);
            redirect(base_url());
        }

    }

    public function edit() {
        $this->load->helper('form');
        $contact_id = $this->uri->segment('3');
        $result = $this->Contact_model->getContactById($contact_id);
        if($result){
            $data['records'] = $result;
            $data['contact_id'] = $contact_id;
            $this->load->view('contacts/edit',$data);
        }else{
            show_404();
        }

    }

    public function update(){
        $this->load->library('form_validation');

        $rules = $this->getValidationRules();
        /* Set validation rule for name field in the form */
        $this->form_validation->set_rules($rules);

            if ($this->form_validation->run() == FALSE) {

                $data['contact_id'] = $this->input->post('contact_id');
                $data['records'] = $this->Contact_model->getContactById($data['contact_id']);
                $this->load->view('contacts/edit', $data);
            } else {
                $data = array(
                    'firstname' => $this->input->post('firstname'),
                    'lastname' => $this->input->post('lastname'),
                    'company' => $this->input->post('company'),
                    'phone' => $this->input->post('phone'),
                    'address' => $this->input->post('address'),
                    'city' => $this->input->post('city'),
                    'country' => $this->input->post('country'),
                );

                $contact_id = $this->input->post('contact_id');
                $this->Contact_model->update($data, $contact_id);

                redirect(base_url());

            }

    }

    public function delete() {

        $contact_id = $this->uri->segment('3');
        $this->Contact_model->delete($contact_id);

         redirect(base_url());
    }

    public  function getValidationRules(){

        $config = array(
            array(
                'field' => 'firstname',
                'label' => 'Firstname',
                'rules' => 'required'
            ),
            array(
                'field' => 'lastname',
                'label' => 'Lastname',
                'rules' => 'required'
            ),
            array(
                'field' => 'company',
                'label' => 'Company Title',
                'rules' => 'max_length[100]'
            ),
            array(
                'field' => 'phone',
                'label' => 'Phone',
                'rules' => 'numeric'
            ),    array(
                'field' => 'address',
                'label' => 'Address',
                'rules' => 'max_length[100]'
            ),    array(
                'field' => 'country',
                'label' => 'Country',
                'rules' => 'max_length[100]'
            ),    array(
                'field' => 'city',
                'label' => 'City',
                'rules' => 'max_length[100]'
            ),
        );
        return $config;
    }

}