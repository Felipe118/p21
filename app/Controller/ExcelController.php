<?php
    namespace App\Controller;

use App\Config\Container;
use App\Config\Controller;
    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

    class ExcelController extends Controller
    {
        public function exportPlanilha()
        {
            $clientes = Container::getModel('Torcedores');
            $spreadsheet = new Spreadsheet();
            $sheet = $spreadsheet->getActiveSheet();

            $sheet->setCellValue('A1','nome');
            $sheet->setCellValue('B1','documento');
            $sheet->setCellValue('C1','cep');
            $sheet->setCellValue('D1','endereco');
            $sheet->setCellValue('E1','bairro');
            $sheet->setCellValue('F1','cidade');
            $sheet->setCellValue('G1','uf');
            $sheet->setCellValue('H1','telefone');
            $sheet->setCellValue('I1','email');
            $sheet->setCellValue('J1','ativo');

            $row = 2;
            foreach($clientes->listFans() as $cliente){
                $sheet->setCellValue('A'.$row, $cliente['nome']);
                $sheet->setCellValue('B'.$row, $cliente['documento']);
                $sheet->setCellValue('C'.$row, $cliente['cep']);
                $sheet->setCellValue('D'.$row, $cliente['endereco']);
                $sheet->setCellValue('E'.$row, $cliente['bairro']);
                $sheet->setCellValue('F'.$row, $cliente['cidade']);
                $sheet->setCellValue('G'.$row, $cliente['uf']);
                $sheet->setCellValue('H'.$row, $cliente['telefone']);
                $sheet->setCellValue('I'.$row, $cliente['email']);
                $sheet->setCellValue('J'.$row, $cliente['ativo']);

                $row++;
             }
         
        

            $writer = new Xlsx($spreadsheet);

            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            header('Content-Disposition: attactment; filename="cliente.xlsx"');
            $writer->save('php://output');

            header('Location: /list');
            //writer->save('cliente.xlsx');
        }
    }