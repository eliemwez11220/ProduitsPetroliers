<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Charroi extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Charroi_model');
    } 

    /*
     * Listing of charrois
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('charroi/index?');
        $config['total_rows'] = $this->Charroi_model->get_all_charrois_count();
        $this->pagination->initialize($config);

        $data['charrois'] = $this->Charroi_model->get_all_charrois($params);
        
        $data['_view'] = 'charroi/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new charroi
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('designation','Designation','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'etatDisponibilite' => $this->input->post('etatDisponibilite'),
				'designation' => $this->input->post('designation'),
				'poids' => $this->input->post('poids'),
            );
            
            $charroi_id = $this->Charroi_model->add_charroi($params);
            redirect('charroi/index');
        }
        else
        {            
            $data['_view'] = 'charroi/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a charroi
     */
    function edit($cha_id)
    {   
        // check if the charroi exists before trying to edit it
        $data['charroi'] = $this->Charroi_model->get_charroi($cha_id);
        
        if(isset($data['charroi']['cha_id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('designation','Designation','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'etatDisponibilite' => $this->input->post('etatDisponibilite'),
					'designation' => $this->input->post('designation'),
					'poids' => $this->input->post('poids'),
                );

                $this->Charroi_model->update_charroi($cha_id,$params);            
                redirect('charroi/index');
            }
            else
            {
                $data['_view'] = 'charroi/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The charroi you are trying to edit does not exist.');
    } 

    /*
     * Deleting charroi
     */
    function remove($cha_id)
    {
        $charroi = $this->Charroi_model->get_charroi($cha_id);

        // check if the charroi exists before trying to delete it
        if(isset($charroi['cha_id']))
        {
            $this->Charroi_model->delete_charroi($cha_id);
            redirect('charroi/index');
        }
        else
            show_error('The charroi you are trying to delete does not exist.');
    }
    
}
