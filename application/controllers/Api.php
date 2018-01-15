<?php

/**
 * Created by PhpStorm.
 * User: sara
 * Date: 11/01/18
 * Time: 11:06 م
 */

class Api extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //add the header here
        header('Content-Type: application/json');
    }

    public function index() {

        $data= $this->Contact_model->listAllContact();

        echo json_encode( $data );
    }
    public function add() {

        $this->load->library('form_validation');

        $rules = $this->getValidationRules();
        /* Set validation rule for name field in the form */
        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == FALSE) {
            echo json_encode(validation_errors());
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

           $result =  $this->Contact_model->insert($data);
            echo json_encode( $result );
        }
    }


    public function edit($id) {

        $contact_id = $id;
        $data = $this->Contact_model->getContactById($contact_id);
        echo json_encode( $data );
    }

    public function update(){
        $this->load->library('form_validation');

        $rules = $this->getValidationRules();
        /* Set validation rule for name field in the form */
        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == FALSE) {

            echo json_encode(validation_errors());
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

            $contact_id = $this->input->post('contact_id');
            $result  = $this->Contact_model->update($data, $contact_id);

            echo json_encode( $result );
        }

    }

    public function delete($id) {

        $contact_id = $id;
        $result =  $this->Contact_model->delete($contact_id);

        echo json_encode( $result );
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