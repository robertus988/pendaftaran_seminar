<?php
// Load file koneksi.php
include "koneksi.php";

// Load plugin PHPExcel nya
require_once 'PHPExcel/PHPExcel.php';

// Panggil class PHPExcel nya
$excel = new PHPExcel();

// Settingan awal file excel
$excel->getProperties()->setCreator('Robertus')
 ->setLastModifiedBy('Robertus')
 ->setTitle("Data Peserta Seminar")
 ->setSubject("Peserta")
 ->setDescription("Laporan Semua Data Peserta Seminar")
 ->setKeywords("Data Peserta");

// Buat sebuah variabel untuk menampung pengaturan style dari header tabel
$style_col = array(
 'font' => array('bold' => true), // Set font nya jadi bold
 'alignment' => array(
 'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal
 'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middl
 ),
 'borders' => array(
 'top' => array('style' => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
 'right' => array('style' => PHPExcel_Style_Border::BORDER_THIN), // Set border right dengan garis tipis
 'bottom' => array('style' => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipi
 'left' => array('style' => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
 )
);

// Buat sebuah variabel untuk menampung pengaturan style dari isi tabel
$style_row = array(
 'alignment' => array(
 'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middl
 ),
 'borders' => array(
 'top' => array('style' => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
 'right' => array('style' => PHPExcel_Style_Border::BORDER_THIN), // Set border right dengan garis tipis
 'bottom' => array('style' => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipi
 'left' => array('style' => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
 )
);

$excel->setActiveSheetIndex(0)->setCellValue('A1', "DATA PESERTA SEMINAR"); // Set kolom A1 dengan tulisan "DATA PESERTA SEMINAR"
$excel->getActiveSheet()->mergeCells('A1:I1'); // Set Merge Cell pada kolom A1 sampai F1
$excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE); // Set bold kolom A1
$excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(15); // Set font size 15 untuk kolom A1
$excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
// Set text center untuk kolom A1

// Buat header tabel nya pada baris ke 3
$excel->setActiveSheetIndex(0)->setCellValue('A3', "NO"); // Set kolom A3 dengan tulisan "NO"
$excel->setActiveSheetIndex(0)->setCellValue('B3', "STAMBUK"); // Set kolom B3 dengan tulisan "NIS"
$excel->setActiveSheetIndex(0)->setCellValue('C3', "NAMA LENGKAP"); // Set kolom C3 dengan tulisan "NAMA"
$excel->setActiveSheetIndex(0)->setCellValue('D3', "ALAMAT"); // Set kolom D3 dengan tulisan "ALAMAT
$excel->setActiveSheetIndex(0)->setCellValue('E3', "JENIS KELAMIN"); // Set kolom E3 dengan tulisan "JENIS KELAMIN"
$excel->setActiveSheetIndex(0)->setCellValue('F3', "EMAIL"); // Set kolom F3 dengan tulisan "EMAIL"
$excel->setActiveSheetIndex(0)->setCellValue('G3', "NO. HP"); // Set kolom F3 dengan tulisan "NO. HP"
$excel->setActiveSheetIndex(0)->setCellValue('H3', "ANGKATAN"); // Set kolom F3 dengan tulisan "ANGKATAN"
$excel->setActiveSheetIndex(0)->setCellValue('I3', "KELAS"); // Set kolom F3 dengan tulisan "KELAS"

// Apply style header yang telah kita buat tadi ke masing-masing kolom header
$excel->getActiveSheet()->getStyle('A3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('B3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('C3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('D3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('E3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('F3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('G3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('H3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('I3')->applyFromArray($style_col);

// Set height baris ke 1, 2 dan 3
$excel->getActiveSheet()->getRowDimension('1')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('2')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('3')->setRowHeight(20);

// // Buat query untuk menampilkan semua data siswa
// $sql = $pdo->prepare("SELECT * FROM siswa");
// $sql->execute(); // Eksekusi querynya

$query = "SELECT * FROM peserta"; // Query untuk menampilkan semua data peserta seminar
        $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query

$no = 1; // Untuk penomoran tabel, di awal set dengan 1
$numrow = 4; // Set baris pertama untuk isi tabel adalah baris ke 4
while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
 $excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $no);
 $excel->setActiveSheetIndex(0)->setCellValue('B'.$numrow, $data['stambuk']);
 $excel->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $data['nama_lengkap']);
 $excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $data['alamat']);
 $excel->setActiveSheetIndex(0)->setCellValue('E'.$numrow, $data['jenis_kelamin']);
 $excel->setActiveSheetIndex(0)->setCellValue('F'.$numrow, $data['email']);
 // $excel->setActiveSheetIndex(0)->setCellValue('G'.$numrow, $data['no_hp']);
 $excel->setActiveSheetIndex(0)->setCellValue('H'.$numrow, $data['angkatan']);
 $excel->setActiveSheetIndex(0)->setCellValue('I'.$numrow, $data['kelas']);

 // Khusus untuk no telepon. kita set type kolom nya jadi STRING
 $excel->setActiveSheetIndex(0)->setCellValueExplicit('G'.$numrow, $data['no_hp'],
PHPExcel_Cell_DataType::TYPE_STRING);

 // Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
 $excel->getActiveSheet()->getStyle('A'.$numrow)->applyFromArray($style_row);
 $excel->getActiveSheet()->getStyle('B'.$numrow)->applyFromArray($style_row);
 $excel->getActiveSheet()->getStyle('C'.$numrow)->applyFromArray($style_row);
 $excel->getActiveSheet()->getStyle('D'.$numrow)->applyFromArray($style_row);
 $excel->getActiveSheet()->getStyle('E'.$numrow)->applyFromArray($style_row);
 $excel->getActiveSheet()->getStyle('F'.$numrow)->applyFromArray($style_row);
 $excel->getActiveSheet()->getStyle('G'.$numrow)->applyFromArray($style_row);
 $excel->getActiveSheet()->getStyle('H'.$numrow)->applyFromArray($style_row);
 $excel->getActiveSheet()->getStyle('I'.$numrow)->applyFromArray($style_row);

 $excel->getActiveSheet()->getRowDimension($numrow)->setRowHeight(20);

 $no++; // Tambah 1 setiap kali looping
 $numrow++; // Tambah 1 setiap kali looping
}

// Set width kolom
$excel->getActiveSheet()->getColumnDimension('A')->setWidth(5); // Set width kolom A
$excel->getActiveSheet()->getColumnDimension('B')->setWidth(15); // Set width kolom B
$excel->getActiveSheet()->getColumnDimension('C')->setWidth(40); // Set width kolom C
$excel->getActiveSheet()->getColumnDimension('D')->setWidth(25); // Set width kolom D
$excel->getActiveSheet()->getColumnDimension('E')->setWidth(15); // Set width kolom E
$excel->getActiveSheet()->getColumnDimension('F')->setWidth(30); // Set width kolom F
$excel->getActiveSheet()->getColumnDimension('G')->setWidth(15); // Set width kolom G
$excel->getActiveSheet()->getColumnDimension('H')->setWidth(15); // Set width kolom H
$excel->getActiveSheet()->getColumnDimension('I')->setWidth(6); // Set width kolom I

// Set orientasi kertas jadi LANDSCAPE
$excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);

// Set judul file excel nya
$excel->getActiveSheet(0)->setTitle("Data Peserta Seminar");
$excel->setActiveSheetIndex(0);

// Proses file excel
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment; filename="Data Peserta Seminar.xlsx"'); // Set nama file excel nya
header('Cache-Control: max-age=0');

$write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
$write->save('php://output');
?>