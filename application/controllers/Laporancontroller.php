<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporancontroller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('jabatan_model', 'Jabatan_model');
    }

    public function index()
    {
        $data['getAllData'] = $this->Jabatan_model->getAllDataJabatan();
        $this->load->view('laporan/laporan_jabatan_excel', $data);
    }

    function doExport()
    {
        $this->load->library('excel');
        $object = new PHPExcel();
        $object->setActiveSheetIndex(0);
        $table_columns = array("kode_jabatan", "nama_jabatan", "tunjangan");
        $column = 0;

        foreach ($table_columns as $field) {

            $object->getActiveSheet()->setCellValueByColumnAndRow($column, 2, $field);

            $column++;
        }

        $data_pegawai = $this->Jabatan_model->getAllJabatan();
        $excel_rows = 3;
        foreach ($data_pegawai as $row) {

            $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_rows, $row->kode_jabatan);

            $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_rows, $row->nama_jabatan);

            $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_rows, $row->tunjangan);

            $excel_rows++;
        }
        $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');

        header('Content-Type: application/vnd.ms-excel');

        header('Content-Disposition: attachment;filename="Laporan Data Jabatan.xls"');

        $object_writer->save('php://output');
    }
}
