<?php
/**
 * Redy Chasby
 */
class Part extends CI_Controller
{
	
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('datatables');
		$this->load->model('Part_model');
	}


    public function ajax_list()
    {
        $this->load->helper('url');
        $list = $this->Part_model->get_datatables();
        $data = array();
        $no   = $_POST['start'];
        foreach ($list as $value) {
            $no++;
            $row = array();
            $row[] = '<input type="checkbox" class="data-check" value="'.$value->item_part.'">';
            $row[] = $value->item_part;
            $row[] = $value->nama_part;
            $row[] = $value->std_price;
            $row[] = $value->qty_use;
            $row[] = $value->satuan;


        //add html for action
            $row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="return edit_value('."'".$value->item_part."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
            <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_value('."'".$value->item_part."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';

            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->Part_model->count_all(),
            "recordsFiltered" => $this->Part_model->count_filtered(),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }

    public function ajax_add()
    {
        $this->_validate();

        $data = array(
            'item_part' => $this->input->post('item_part'),
            'nama_part' => $this->input->post('nama_part'),
            'std_price' => $this->input->post('std_price'),
            'qty_use'   => $this->input->post('qty_use'),
            'satuan'    => $this->input->post('satuan')
        );

        $insert = $this->Part_model->save($data);
        echo json_encode(array("status" => TRUE));
    }


    public function ajax_edit($id)
    {
        $data = $this->Part_model->get_by_id($id);
        //$data->dob = ($data->dob == '0000-00-00') ? '' : $data->dob; // if 0000-00-00 set tu empty for datepicker compatibility
        echo json_encode($data);
    }

    public function ajax_update()
    {
        $this->_validate();
        $data = array(
            'item_part' => $this->input->post('item_part'),
            'nama_part' => $this->input->post('nama_part'),
            'std_price' => $this->input->post('std_price'),
            'qty_use'   => $this->input->post('qty_use'),
            'satuan'    => $this->input->post('satuan')
        );

        $this->Part_model->update(array('item_part' => $this->input->post('id')), $data);
        echo json_encode(array("status" => TRUE));

    }

    public function ajax_delete($id)
    {
        $this->Part_model->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_bulk_delete()
    {
        $list_id = $this->input->post('id');
        foreach ($list_id as $id) {
            $this->Part_model->delete_by_id($id);
        }
        echo json_encode(array("status" => TRUE));
    }

    private function _validate()
    {
        $data = array();
        $data['error_string'] = array();
        $data['inputerror'] = array();
        $data['status'] = TRUE;

        if($this->input->post('item_part') == '')
        {
            $data['inputerror'][] = 'item_part';
            $data['error_string'][] = 'item part is required';
            $data['status'] = FALSE;
        }

        if($this->input->post('nama_part') == '')
        {
            $data['inputerror'][] = 'nama_part';
            $data['error_string'][] = 'Nama Part is required';
            $data['status'] = FALSE;
        }

        
        if($this->input->post('std_price') == '')
        {
            $data['inputerror'][] = 'std_price';
            $data['error_string'][] = 'Price is required';
            $data['status'] = FALSE;
        }

        if($this->input->post('qty_use') == '')
        {
            $data['inputerror'][] = 'qty_use';
            $data['error_string'][] = 'Using is required';
            $data['status'] = FALSE;
        }

        if($this->input->post('satuan') == '')
        {
            $data['inputerror'][] = 'satuan';
            $data['error_string'][] = 'status is required';
            $data['status'] = FALSE;
        }

        if($data['status'] === FALSE)
        {
            echo json_encode($data);
            exit();
        }
    }
}