<?php
class SliderManager extends CI_Controller {
    
    var $url;
    var $per_page;
    var $session_data;
    var $userProfile;

    public function __construct()
    {
        parent::__construct();
     
        if($this->session->userdata('admin_login')){

            
            $this->load->model('admins_model');
            $this->load->model('uploadImage_model');
            $this->load->model('slider_model'); 
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
            $count = $this->slider_model->count_all_slider();
            $per_page = $this->per_page;

            $limit_end = $this->pagination_model->Paginate($url, $count, 4 , $per_page);    
            $query['query'] = $this->slider_model->get_Slider( null , $per_page , $limit_end );

        }
        
        $this->load->view('admin/element/head',$data);
        $this->load->view('admin/element/nav',$user);
        $this->load->view('admin/element/sidebar');
        $this->load->view('admin/slidermanager/slider_manager',$query);
       
    }

    public function UploadImage(){

      
        if($this->input->server('REQUEST_METHOD') === 'POST'){

            $id = $this->input->post('team_id', TRUE);
            $folder = 'img';
            $subfolder = strval($id);

            $NewImageName = $this->uploadImage_model->getImage( $id , $folder , '' ); 

            if (isset($NewImageName)){

                $this->slider_model->updateImagePath($id,$NewImageName);
            }
        }
    }

    public function checkOrderBy(){

        if($this->uri->segment(5) == 'desc'){

            return 'asc';

        }else{


            return 'desc';
        }
    }

    public function search($search_string , $suburl){

        $url = $this->url.'/'.$suburl.'/';
        $per_page = $this->per_page;

        if($suburl == 's'){

            $count = $this->team_model->count_team( $search_string, null);
            $limit_end = $this->pagination_model->Paginate($url, $count, 5 , $per_page); 
            return $this->team_model->get_Team_Search( $search_string , null,  null , $per_page , $limit_end);

        }else{

            $url = $this->url.'/'.$suburl.'/'.$this->uri->segment(5);
            $count = $this->team_model->count_all_team();
            $limit_end = $this->pagination_model->Paginate($url, $count, 6 , $per_page);
            return $this->team_model->get_Team_Search( null,  $suburl , $this->uri->segment(5) , $per_page , $limit_end);

        }

    }

    public function addSlider(){

            $this->form_validation->set_rules('slider_name', 'Slider Name', 'required|min_length[4]|max_length[25]');

            if($this->form_validation->run() == FALSE){ 

                 $return['error'] = 'error';
                 $return['message_error'] = validation_errors();
                 echo json_encode($return);

            }else{

                $success = $this->slider_model->addSlider($this->input->post('slider_name'));
        
                if($success == true){

                    $count = $this->slider_model->count_all_slider();
                    $limit_end = $this->pagination_model->Paginate( $this->url , $count, 4 , $this->per_page); 
                    $arr = $this->slider_model->get_Slider(null , $this->per_page , $limit_end);

                    $html ="";

                    foreach ( $arr as $querys ): 
                        

                            //echo $querys['team_id'];           
                            $html .=  '<tr>';
                            $html .= '<td><input type="checkbox"></td>';
                            $html .= '<td>'.$querys['slider_id'].'</td>';
                            $html .= '<td>'.$querys['slider_name'].'</td>';
                            $html .= '<td>';
                            $html .= '<a href="'.base_url().'backoffice/slidermanager/Edit/'.$querys['slider_id'].'" class="btn btn-success btn-xs"><i class="fa fa-edit"></i> edit </a>&nbsp;';
                            $html .= '<button name="delete_button" data-toggle="modal" data-target=".bs-modal-sm" class="btn btn-danger btn-xs del" value="'.$querys['slider_id'].'"><i class="fa fa-trash-o"></i> delete</button> </td></tr>';
                             
                            

                   endforeach; 

                   $return['success'] = $html;
                   echo json_encode($return);
                   
                }

            }

    }
    
    public function Edit(){

        if($this->input->server('REQUEST_METHOD') === 'POST'){

            $this->form_validation->set_rules('text_first', 'Text Top Required', 'required');
            $this->form_validation->set_rules('text_main', 'Text Main Required', 'required');
            $this->form_validation->set_rules('text_bottom', 'Text Bottom Required', 'required');
            if($this->form_validation->run() == FALSE){ 

                 $data['message'] = 2;
                 $data['message_error'] = validation_errors();
                 

            }else{

                $id = $this->input->post('slider_id');
                $text_first = $this->input->post('text_first');
                $text_main = $this->input->post('text_main');
                $text_bottom = $this->input->post('text_bottom');

                $active = 0;

                if($this->input->post('active')){

                    $active = $this->input->post('active');
                }
                
                $success = $this->slider_model->updateSlider( $id , $text_first , $text_main , $text_bottom , $active );

                if($success == 1){

                    $data['message'] = 1;
                }
            }
        }

        $user['userProfile'] = $this->userProfile;
        $data['slider_id'] = $this->uri->segment(4);

        $data['slider'] = $this->slider_model->get_Slider($data['slider_id']);

        //print_r($data['query']);
        $css = '<link rel="stylesheet" href="'.base_url().'assets/css/slider.css">';
        $css .= '<link rel="stylesheet" href="'.base_url().'assets/css/summernote.css">';
        $css .= '<link rel="stylesheet" href="'.base_url().'assets/css/bootstrap-spinedit.css">';
        $css .= '<link rel="stylesheet" href="'.base_url().'assets/css/bootstrap-select.css">';

        $data['css'] = $css;

        $this->load->view('admin/element/head',$data);
        $this->load->view('admin/element/nav',$user);
        $this->load->view('admin/element/sidebar');
        $this->load->view('admin/slidermanager/edit_slider',$data);

    }
    public function Del(){


        $id = $this->uri->segment(4);

        if($id != 1){

            $this->slider_model->delete($id);
            redirect('/backoffice/slidermanager/index/');

        }
        


    }
    

   
   


}
