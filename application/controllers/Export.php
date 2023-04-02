<?php 


class Export extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		$this->load->model('Export_model','export');
		
	}

	 public function index()
	{
	    $data['title']='Display Feedback data';
	    $data['feedbackInfo']=$this->export->employeeList();

	    $this->load->view('users/feedbacklist',$data);
	    
	}


	  public function createXLS()
    {
        $this->load->library('excel');
        $object = new PHPExcel();

        $object->setActiveSheetIndex(0);
        $table_coulams = array("name","email","feedback");

        // print_r($table_coulams);
        // exit();
        $coulams = 0;
        foreach ($table_coulams as $fiels) {
            $object->getActiveSheet()->setCellValueByColumnAndRow($coulams,1,$fiels);
            $coulams++;
        }
        $feedbackInfo = $this->export->employeeList();
        $excel_row = 2;
        foreach ($feedbackInfo as $row) 
        {
            $object->getActiveSheet()->setCellValueByColumnAndRow(0,$excel_row,$row->name);
            $object->getActiveSheet()->setCellValueByColumnAndRow(1,$excel_row,$row->email);
            $object->getActiveSheet()->setCellValueByColumnAndRow(2,$excel_row,$row->feedback);
            $excel_row++;
        }
        //$object_writer = PHPExcel_IOFactory::createWriter($object,'Excel');
        $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
        $filename='just_some_random_name.xls'; //save our workbook as this file name
		header('Content-Type: application/vnd.ms-excel'); //mime type
		$k = header('Content-Disposition: attachment;filename="'.$filename.'"');
		print_r($k);
        $object_writer->save('php://output');
    }


}
?>
