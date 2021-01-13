<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Zone extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Zone_model');
    } 

    /*
     * Listing of zones
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('zone/index?');
        $config['total_rows'] = $this->Zone_model->get_all_zones_count();
        $this->pagination->initialize($config);

        $data['zones'] = $this->Zone_model->get_all_zones($params);
        
        $data['_view'] = 'zone/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new zone
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('abonne_sid','Abonne Sid','required');
		$this->form_validation->set_rules('designation','Designation','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'abonne_sid' => $this->input->post('abonne_sid'),
				'designation' => $this->input->post('designation'),
				'commune' => $this->input->post('commune'),
				'quartier' => $this->input->post('quartier'),
				'avenue' => $this->input->post('avenue'),
				'numero' => $this->input->post('numero'),
            );
            
            $zone_id = $this->Zone_model->add_zone($params);
            redirect('zone/index');
        }
        else
        {
			$this->load->model('Abonne_model');
			$data['all_abonnes'] = $this->Abonne_model->get_all_abonnes();
            
            $data['_view'] = 'zone/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a zone
     */
    function edit($zone_id)
    {   
        // check if the zone exists before trying to edit it
        $data['zone'] = $this->Zone_model->get_zone($zone_id);
        
        if(isset($data['zone']['zone_id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('abonne_sid','Abonne Sid','required');
			$this->form_validation->set_rules('designation','Designation','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'abonne_sid' => $this->input->post('abonne_sid'),
					'designation' => $this->input->post('designation'),
					'commune' => $this->input->post('commune'),
					'quartier' => $this->input->post('quartier'),
					'avenue' => $this->input->post('avenue'),
					'numero' => $this->input->post('numero'),
                );

                $this->Zone_model->update_zone($zone_id,$params);            
                redirect('zone/index');
            }
            else
            {
				$this->load->model('Abonne_model');
				$data['all_abonnes'] = $this->Abonne_model->get_all_abonnes();

                $data['_view'] = 'zone/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The zone you are trying to edit does not exist.');
    } 

    /*
     * Deleting zone
     */
    function remove($zone_id)
    {
        $zone = $this->Zone_model->get_zone($zone_id);

        // check if the zone exists before trying to delete it
        if(isset($zone['zone_id']))
        {
            $this->Zone_model->delete_zone($zone_id);
            redirect('zone/index');
        }
        else
            show_error('The zone you are trying to delete does not exist.');
    }
    
}
