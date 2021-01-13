<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Affectation extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Affectation_model');
    } 

    /*
     * Listing of affectations
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('affectation/index?');
        $config['total_rows'] = $this->Affectation_model->get_all_affectations_count();
        $this->pagination->initialize($config);

        $data['affectations'] = $this->Affectation_model->get_all_affectations($params);
        
        $data['_view'] = 'affectation/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new affectation
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('chauffeur_sid','Chauffeur Sid','required');
		$this->form_validation->set_rules('charroi_sid','Charroi Sid','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'chauffeur_sid' => $this->input->post('chauffeur_sid'),
				'charroi_sid' => $this->input->post('charroi_sid'),
				'dateAffec' => $this->input->post('dateAffec'),
				'observation' => $this->input->post('observation'),
            );
            
            $affectation_id = $this->Affectation_model->add_affectation($params);
            redirect('affectation/index');
        }
        else
        {
			$this->load->model('Chauffeur_model');
			$data['all_chauffeurs'] = $this->Chauffeur_model->get_all_chauffeurs();

			$this->load->model('Charroi_model');
			$data['all_charrois'] = $this->Charroi_model->get_all_charrois();
            
            $data['_view'] = 'affectation/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a affectation
     */
    function edit($affec_id)
    {   
        // check if the affectation exists before trying to edit it
        $data['affectation'] = $this->Affectation_model->get_affectation($affec_id);
        
        if(isset($data['affectation']['affec_id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('chauffeur_sid','Chauffeur Sid','required');
			$this->form_validation->set_rules('charroi_sid','Charroi Sid','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'chauffeur_sid' => $this->input->post('chauffeur_sid'),
					'charroi_sid' => $this->input->post('charroi_sid'),
					'dateAffec' => $this->input->post('dateAffec'),
					'observation' => $this->input->post('observation'),
                );

                $this->Affectation_model->update_affectation($affec_id,$params);            
                redirect('affectation/index');
            }
            else
            {
				$this->load->model('Chauffeur_model');
				$data['all_chauffeurs'] = $this->Chauffeur_model->get_all_chauffeurs();

				$this->load->model('Charroi_model');
				$data['all_charrois'] = $this->Charroi_model->get_all_charrois();

                $data['_view'] = 'affectation/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The affectation you are trying to edit does not exist.');
    } 

    /*
     * Deleting affectation
     */
    function remove($affec_id)
    {
        $affectation = $this->Affectation_model->get_affectation($affec_id);

        // check if the affectation exists before trying to delete it
        if(isset($affectation['affec_id']))
        {
            $this->Affectation_model->delete_affectation($affec_id);
            redirect('affectation/index');
        }
        else
            show_error('The affectation you are trying to delete does not exist.');
    }
    
}