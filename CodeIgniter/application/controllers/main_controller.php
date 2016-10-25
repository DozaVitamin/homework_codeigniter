<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main_Controller extends CI_Controller
{


    public function index()
    {
        $products = $this->products_model->getAllProducts();

        $results = $this->products_model->fetchTables();
        $this->load->view("add_product_view", $results);
        $arrayToReturn = Array('array'=>$products);
        $this->load->view("products_view",$arrayToReturn);

    }


    public function addProduct(){
        $this->load->model("rules_model");
        $this->form_validation->set_rules($this->rules_model->config['check_product']);
        if ($this->form_validation->run()){
            $data_to_insert['brand_id'] = $this->input->post('brand_name');
            $data_to_insert['title'] = $this->input->post('title');
            $data_to_insert['description'] = $this->input->post('description');
            $data_to_insert['manufacturer_id'] = $this->input->post('manufacturer');
            $data_to_insert['price'] = $this->input->post('price');
            $data_to_insert['category_id'] = $this->input->post('category');
            $this->products_model->addProduct($data_to_insert);
            redirect(base_url());
        } else{
            $this->index();
        }

    }

    public function deleteProduct($id){
            $this->products_model->deleteProduct($id);
            redirect(base_url());
    }

    public function updateProduct($id){
        $data = $this->products_model->fetchTables();
        $data['object'] = $this->products_model->getParticularProduct($id);
        $this->load->view('update_product_view', $data);
    }

    public function performUpdateProduct(){
        $this->load->model("rules_model");
        $this->form_validation->set_rules($this->rules_model->config['check_product']);
        if ($this->form_validation->run()){
            $data_to_insert['id'] = $this->input->post('id');
            $data_to_insert['brand_id'] = $this->input->post('brand_name');
            $data_to_insert['title'] = $this->input->post('title');
            $data_to_insert['description'] = $this->input->post('description');
            $data_to_insert['manufacturer_id'] = $this->input->post('manufacturer');
            $data_to_insert['price'] = $this->input->post('price');
            $data_to_insert['category_id'] = $this->input->post('category');
            $this->products_model->updateProduct($data_to_insert, $data_to_insert['id']);
            redirect(base_url());
        } else{
            $this->updateProduct($this->input->post('id'));
        }

    }
}
?>