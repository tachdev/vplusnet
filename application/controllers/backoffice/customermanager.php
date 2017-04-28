<?php
class CustomerManager extends CI_Controller {
    
    var $url;
    var $per_page;
    var $session_data;
    var $userProfile;

    public function __construct(){

        parent::__construct();
     
        if($this->session->userdata('admin_login')){

            
            $this->load->model('admins_model');
            $this->load->model('uploadImage_model');
            $this->load->model('customer_model'); 
            $this->load->model('pagination_model');
            $this->userProfile = $this->session->all_userdata();

            if($this->uri->segment(3) == ""){

                $func ="index";

            }else{

                $func = $this->uri->segment(3);
            }

            $this->url = base_url($this->uri->segment(1).'/'.$this->uri->segment(2).'/'.$func);
            $this->per_page = 6;

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
            $count = $this->customer_model->count_all_customer();
            $per_page = $this->per_page;

            $limit_end = $this->pagination_model->Paginate($url, $count, 4 , $per_page);    
            $query['query'] = $this->customer_model->get_customer( null , $per_page , $limit_end );

            //print_r($query['query'] );

        }
        
        $this->load->view('admin/element/head',$data);
        $this->load->view('admin/element/nav',$user);
        $this->load->view('admin/element/sidebar');
        $this->load->view('admin/customermanager/customer_manager',$query);
       
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

            $count = $this->customer_model->count_customer( $search_string, null);
            $limit_end = $this->pagination_model->Paginate($url, $count, 5 , $per_page); 
            return $this->customer_model->get_customer_search( $search_string , null,  null , $per_page , $limit_end);

        }

    }

    public function Edit(){


        if($this->input->server('REQUEST_METHOD') === 'POST'){

                if($this->input->post('approve')){

                    if($this->input->post('banned')){

                        $success = $this->customer_model->approve_customer( 3 , $this->input->post('customer_id'));                    
                    }else{

                        $success = $this->customer_model->approve_customer( 2 , $this->input->post('customer_id'));
                    }                    
                    if($success == 1){

                        $data['message'] = 1;
                    }

                }else{

                    if($this->input->post('banned')){

                        $success = $this->customer_model->approve_customer( 4 , $this->input->post('customer_id'));
                    
                    }else{

                        $success = $this->customer_model->approve_customer( 1 , $this->input->post('customer_id'));
                    }
                    
                    if($success == 1){

                        $data['message'] = 1;
                    }

                }
               
        }

        $user['userProfile'] = $this->userProfile;
        $data['customer_id'] = $this->uri->segment(4);

        if(is_numeric($data['customer_id'])){

            $data['customer'] = $this->customer_model->get_customer($data['customer_id']);

            if(!empty($data['customer'])){

            if(isset($data['customer']['0']['package_active'])){

            	$data['package_active'] = $this->customer_model->get_order_id($data['customer']['0']['package_active']);
            	//print_r($data['package_active']);
            }

            //print_r($data['query']);
            $css = '<link rel="stylesheet" href="'.base_url().'assets/css/slider.css">';
            $css .= '<link rel="stylesheet" href="'.base_url().'assets/css/summernote.css">';
            $css .= '<link rel="stylesheet" href="'.base_url().'assets/css/bootstrap-spinedit.css">';
            $css .= '<link rel="stylesheet" href="'.base_url().'assets/css/bootstrap-select.css">';

            $data['css'] = $css;

            $this->load->view('admin/element/head',$data);
            $this->load->view('admin/element/nav',$user);
            $this->load->view('admin/element/sidebar');
            $this->load->view('admin/customermanager/edit_customer',$data);

            }

        }

    }
    public function Del(){


        $id = $this->uri->segment(4);
        $this->customer_model->delete($id);
        //redirect( base_url().'backoffice/customermanager/index/');
        echo '<script> window.location.href = "'.base_url().'backoffice/customermanager/index/";</script>';

    }
    

   
   


}

?>
