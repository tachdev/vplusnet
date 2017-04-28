<?php

class Pagination_model extends CI_Model {

  
	function Paginate($url,$count,$segment,$per_page){

		$this->load->library('pagination');

        $config['base_url'] = $url;
        $config['total_rows'] = $count;
        $config['uri_segment'] = $segment;
        $config['per_page'] = $per_page;
        $config['url_input'] = $url;

        $this->pagination->initialize($config); 

        $page = 0;

        if($this->uri->segment($segment)){

            $page = $this->uri->segment($segment); 

        }

        $limit_end = ($page * $config['per_page']) - $config['per_page'];

        if ($limit_end < 0){

            $limit_end = 0;
        }

        return $limit_end;

	}


}

