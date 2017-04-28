<?php
class OrderManager extends CI_Controller {
    
    var $url;
    var $per_page;
    var $session_data;
    var $userProfile;

    public function __construct(){

        parent::__construct();
     
        if($this->session->userdata('admin_login')){

            
            $this->load->model('admins_model');
            $this->load->model('uploadImage_model');
            $this->load->model('order_model'); 
            $this->load->model('customer_model'); 
            $this->load->model('pagination_model'); 

            $this->userProfile = $this->session->all_userdata();

            if($this->uri->segment(3) == ""){

                $func ="index";

            }else{

                $func = $this->uri->segment(3);
            }

            $this->url = base_url($this->uri->segment(1).'/'.$this->uri->segment(2).'/'.$func);
            $this->per_page = 5;

        }else{

            redirect('backoffice');
        }
    }
 
    public function index(){         

        $css = '<link rel="stylesheet" href="'.base_url().'assets/css/bootstrap-select.css">';

        $data['css'] = $css;
        $user['userProfile'] = $this->userProfile;
        $query['pageurl'] = $this->url;

        if(isset($_GET["paginate"])){

            redirect($this->url."/".$_GET["paginate"]);

        }

        if(!is_numeric($this->uri->segment(4)) AND $this->uri->segment(4) != null){

            $query['query'] = $this->search($this->input->post('search_string'), $this->uri->segment(4));
            $query['order_type'] = $this->checkOrderBy();       

        }else{
       
            $url = $this->url;
            $count = $this->order_model->count_all_slider();
            $per_page = $this->per_page;

            $limit_end = $this->pagination_model->Paginate($url, $count, 4 , $per_page);    
            $query['query'] = $this->order_model->get_order( null , $per_page , $limit_end );

        }
        
        $this->load->view('admin/element/head',$data);
        $this->load->view('admin/element/nav',$user);
        $this->load->view('admin/element/sidebar');
        $this->load->view('admin/ordermanager/order_manager',$query);
       
    }



    protected function checkOrderBy(){

        if($this->uri->segment(5) == 'desc'){

            return 'asc';

        }else{


            return 'desc';
        }
    }

    protected function search($search_string , $suburl){

        $url = $this->url.'/'.$suburl.'/';
        $per_page = $this->per_page;

        if($suburl == 's'){

            $count = $this->order_model->count_order( $search_string, null);
            $limit_end = $this->pagination_model->Paginate($url, $count, 5 , $per_page); 
            return $this->order_model->get_order_search( $search_string , null,  null , $per_page , $limit_end);

        }

    }

    protected function encode($code){

        $code = $code+1985;
        return base_convert($code , 10 , 36 );

    }

    protected function decode($code){

        
        $code = base_convert($code , 36 , 10 );
        return $code = $code-1985;

    }


    
    public function Edit(){

        if($this->input->server('REQUEST_METHOD') === 'POST'){


                /*$active = 0;

                if($this->input->post('active')){

                    $order_id $this->input->post('order_id');

                    $this->customer_model->updateStatus(3,$order_id);

                }else{


                     $this->customer_model->updateStatus(2);
                }
                
                //$success = $this->customer_model->updateStatus();

                if($success == 1){

                    $data['message'] = 1;
                }*/

        }


        $user['userProfile'] = $this->userProfile;
        $data['order_id'] = $this->uri->segment(4);

        if(is_numeric($data['order_id'])){

            $data['order'] = $this->order_model->get_order($data['order_id']);

            if(!empty($data['order'])){

            $data['payment_confirm'] = $this->order_model->get_payment_confirm($data['order']['0']['tran_id']);
            $data['tran_id_encode'] = $this->encode($data['order']['0']['tran_id']);

            //print_r($data['query']);
            $css = '<link rel="stylesheet" href="'.base_url().'assets/css/slider.css">';
            $css .= '<link rel="stylesheet" href="'.base_url().'assets/css/summernote.css">';
            $css .= '<link rel="stylesheet" href="'.base_url().'assets/css/bootstrap-spinedit.css">';
            $css .= '<link rel="stylesheet" href="'.base_url().'assets/css/bootstrap-select.css">';

            $data['css'] = $css;

            $this->load->view('admin/element/head',$data);
            $this->load->view('admin/element/nav',$user);
            $this->load->view('admin/element/sidebar');
            $this->load->view('admin/ordermanager/edit_order',$data);

            }

        }

    }

    public function Del(){


        $id = $this->uri->segment(4);
        $order = $this->order_model->get_order($id , null , null);
        $customer = $this->customer_model->check_package_active($order['0']['mobile_number'],$id);

        $this->order_model->delete($id);
        //redirect(base_url().'backoffice/ordermanager/index/');
        echo '<script> window.location.href = "'.base_url().'backoffice/ordermanager/index/";</script>';

    }
    

   
   


}


?>
