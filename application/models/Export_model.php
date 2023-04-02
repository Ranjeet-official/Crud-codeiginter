<?php
class Export_model extends CI_Model
{
    public function employeeList()
    {
        $query=$this->db->select(['name','email','feedback'])
        ->from('feedback')  
        ->get();
        return $query->result();
    }

    public function createXLS()
    {
        $this->load->library('excel');
        $object = new PHPExcel();

        $object->setActiveSheetIndex(0);
        $table_coulams = array("name","email","feedback");
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
        $object_writer = PHPExcel_IOFactory::createWriter($object,'ExcelS');
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="feedbackDate.xls"');
        $object_writer->save('php://output');
    }
}

?>