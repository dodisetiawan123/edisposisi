<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// Include librari PhpSpreadsheet
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
class Export extends CI_Controller {
  public function __construct(){
    parent::__construct();
    
    $this->load->model('data_karyawan_model');
  }
  
 
  public function exportexcell(){

    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();
    // Buat sebuah variabel untuk menampung pengaturan style dari header tabel
    $style_col = [
      'font' => ['bold' => true], // Set font nya jadi bold
      'alignment' => [
        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
        'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
      ],
      'borders' => [
        'top' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN], // Set border top dengan garis tipis
        'right' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN],  // Set border right dengan garis tipis
        'bottom' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN], // Set border bottom dengan garis tipis
        'left' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN] // Set border left dengan garis tipis

      ],

    ];
    // Buat sebuah variabel untuk menampung pengaturan style dari isi tabel
    $style_row = [
      'alignment' => [
        'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
      ],
      'borders' => [
        'top' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN], // Set border top dengan garis tipis
        'right' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN],  // Set border right dengan garis tipis
        'bottom' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN], // Set border bottom dengan garis tipis
        'left' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN] // Set border left dengan garis tipis
      ]
    ];
    $spreadsheet->getActiveSheet()->getStyle('A3:Z3')->getFill()
    ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
    ->getStartColor()->setARGB('e9e9ef');
    $sheet->setCellValue('A2', "PERSONAL BACKGROUND"); // Set kolom A1 dengan tulisan "DATA SISWA"
    $sheet->mergeCells('A2:I2'); // Set Merge Cell pada kolom A1 sampai E1
    $sheet->getStyle('A2:I2')->applyFromArray($style_col); // Set bold kolom A1

    $sheet->setCellValue('J2', "CONTACT PERSON"); // Set kolom A1 dengan tulisan "DATA SISWA"
    $sheet->mergeCells('J2:L2'); // Set Merge Cell pada kolom A1 sampai E1
    $sheet->getStyle('J2:L2')->applyFromArray($style_col); // Set bold kolom A1

    $sheet->setCellValue('M2', "CAREER"); // Set kolom A1 dengan tulisan "DATA SISWA"
    $sheet->mergeCells('M2:Z2'); // Set Merge Cell pada kolom A1 sampai E1
    $sheet->getStyle('M2:Z2')->applyFromArray($style_col); // Set bold kolom A1

    // Buat header tabel nya pada baris ke 3
    $sheet->setCellValue('A3', "NO"); // Set kolom A3 dengan tulisan "NO"
    $sheet->setCellValue('B3', "NAMA KARYAWAN"); // Set kolom B3 dengan tulisan "NIS"
    $sheet->setCellValue('C3', "NPK"); // Set kolom C3 dengan tulisan "NAMA"
    $sheet->setCellValue('D3', "TEMPAT LAHIR"); // Set kolom D3 dengan tulisan "JENIS KELAMIN"
    $sheet->setCellValue('E3', "TGL LAHIR"); // Set kolom E3 dengan tulisan "ALAMAT"
    $sheet->setCellValue('F3', "JENIS KELAMIN");
    $sheet->setCellValue('G3', "AGAMA");
    $sheet->setCellValue('H3', "STATUS");
    $sheet->setCellValue('I3', "NIK");
    $sheet->setCellValue('J3', "ALAMAT");
    $sheet->setCellValue('K3', "NO. HP");
    $sheet->setCellValue('L3', "E-MAIL");
    $sheet->setCellValue('M3', "TINGKAT PENDIDIKAN");
    $sheet->setCellValue('N3', "FAKULTAS/JURUSAN");
    $sheet->setCellValue('O3', "INSTITUSI");
    $sheet->setCellValue('P3', "TAHUN LULUS");
    $sheet->setCellValue('Q3', "MULAI BEKERJA");
    $sheet->setCellValue('R3', "JADI KARY TETAP");
    $sheet->setCellValue('S3', "STATUS JABATAN");
    $sheet->setCellValue('T3', "NAMA JABATAN");
    $sheet->setCellValue('U3', "STATUS + JABATAN");
    $sheet->setCellValue('V3', "TMT JABATAN");
    $sheet->setCellValue('W3', "BIDANG / BAGIAN");
    $sheet->setCellValue('X3', "SATUAN ORGANISASI");
    $sheet->setCellValue('Y3', "KATEGORI FUNGSI");
    $sheet->setCellValue('Z3', "LEVEL JABATAN");
    // Apply style header yang telah kita buat tadi ke masing-masing kolom header
    $sheet->getStyle('A3')->applyFromArray($style_col);
    $sheet->getStyle('B3')->applyFromArray($style_col);
    $sheet->getStyle('C3')->applyFromArray($style_col);
    $sheet->getStyle('D3')->applyFromArray($style_col);
    $sheet->getStyle('E3')->applyFromArray($style_col);
    $sheet->getStyle('F3')->applyFromArray($style_col);
    $sheet->getStyle('G3')->applyFromArray($style_col);
    $sheet->getStyle('H3')->applyFromArray($style_col);
    $sheet->getStyle('I3')->applyFromArray($style_col);
    $sheet->getStyle('J3')->applyFromArray($style_col);
    $sheet->getStyle('K3')->applyFromArray($style_col);
    $sheet->getStyle('L3')->applyFromArray($style_col);
    $sheet->getStyle('M3')->applyFromArray($style_col);
    $sheet->getStyle('N3')->applyFromArray($style_col);
    $sheet->getStyle('O3')->applyFromArray($style_col);
    $sheet->getStyle('P3')->applyFromArray($style_col);
    $sheet->getStyle('Q3')->applyFromArray($style_col);
    $sheet->getStyle('R3')->applyFromArray($style_col);
    $sheet->getStyle('S3')->applyFromArray($style_col);
    $sheet->getStyle('T3')->applyFromArray($style_col);
    $sheet->getStyle('U3')->applyFromArray($style_col);
    $sheet->getStyle('V3')->applyFromArray($style_col);
    $sheet->getStyle('W3')->applyFromArray($style_col);
    $sheet->getStyle('X3')->applyFromArray($style_col);
    $sheet->getStyle('Y3')->applyFromArray($style_col);
    $sheet->getStyle('Z3')->applyFromArray($style_col);
    // Panggil function view yang ada di SiswaModel untuk menampilkan semua data siswanya
    $database = $this->data_karyawan_model->get_karyawan();
    // var_dump($database);
    // exit;
    $no = 1; // Untuk penomoran tabel, di awal set dengan 1
    $numrow = 4; // Set baris pertama untuk isi tabel adalah baris ke 4
    foreach($database as $data){ // Lakukan looping pada variabel siswa
      $sheet->setCellValue('A'.$numrow, $no);
      $sheet->setCellValue('B'.$numrow, $data->nama);
      $sheet->setCellValue('C'.$numrow, $data->npk);
      $sheet->setCellValue('D'.$numrow, $data->tempatlahir);
      $sheet->setCellValue('E'.$numrow, $data->tgllahir);
      $sheet->setCellValue('F'.$numrow, $data->jeniskelamin);
      $sheet->setCellValue('G'.$numrow, $data->agama);
      $sheet->setCellValue('H'.$numrow, $data->idmd_marital);
      $sheet->setCellValue('I'.$numrow, $data->nik);
      $sheet->setCellValue('J'.$numrow, $data->alamatsekarang);
      $sheet->setCellValue('K'.$numrow, $data->nohp);
      $sheet->setCellValue('L'.$numrow, $data->email);
      $sheet->setCellValue('M'.$numrow, $data->levelpendidikan);
      $sheet->setCellValue('N'.$numrow, $data->jurusan);
      $sheet->setCellValue('O'.$numrow, $data->institusi);
      $sheet->setCellValue('P'.$numrow, $data->tahunlulus);
      $sheet->setCellValue('Q'.$numrow, $data->mulaibekerja);
      $sheet->setCellValue('R'.$numrow, $data->tgldiangkat);
      $sheet->setCellValue('S'.$numrow, $data->statusjabatan);
      $sheet->setCellValue('T'.$numrow, $data->namajabatan);
      $sheet->setCellValue('U'.$numrow, $data->statusjabatan.' '.$data->namajabatan);
      $sheet->setCellValue('V'.$numrow, $data->tmt_jabatan);
      $sheet->setCellValue('W'.$numrow, $data->namabidang);
      $sheet->setCellValue('X'.$numrow, $data->namaorganisasi);
      $sheet->setCellValue('Y'.$numrow, $data->kategorifungsi);
      $sheet->setCellValue('Z'.$numrow, $data->level);
      
      // Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
      $sheet->getStyle('A'.$numrow)->applyFromArray($style_row);
      $sheet->getStyle('B'.$numrow)->applyFromArray($style_row);
      $sheet->getStyle('C'.$numrow)->applyFromArray($style_row);
      $sheet->getStyle('D'.$numrow)->applyFromArray($style_row);
      $sheet->getStyle('E'.$numrow)->applyFromArray($style_row);
      $sheet->getStyle('F'.$numrow)->applyFromArray($style_row);
      $sheet->getStyle('G'.$numrow)->applyFromArray($style_row);
      $sheet->getStyle('H'.$numrow)->applyFromArray($style_row);
      $sheet->getStyle('I'.$numrow)->applyFromArray($style_row);
      $sheet->getStyle('J'.$numrow)->applyFromArray($style_row);
      $sheet->getStyle('K'.$numrow)->applyFromArray($style_row);
      $sheet->getStyle('L'.$numrow)->applyFromArray($style_row);
      $sheet->getStyle('M'.$numrow)->applyFromArray($style_row);
      $sheet->getStyle('N'.$numrow)->applyFromArray($style_row);
      $sheet->getStyle('O'.$numrow)->applyFromArray($style_row);
      $sheet->getStyle('P'.$numrow)->applyFromArray($style_row);
      $sheet->getStyle('Q'.$numrow)->applyFromArray($style_row);
      $sheet->getStyle('R'.$numrow)->applyFromArray($style_row);
      $sheet->getStyle('S'.$numrow)->applyFromArray($style_row);
      $sheet->getStyle('T'.$numrow)->applyFromArray($style_row);
      $sheet->getStyle('U'.$numrow)->applyFromArray($style_row);
      $sheet->getStyle('V'.$numrow)->applyFromArray($style_row);
      $sheet->getStyle('W'.$numrow)->applyFromArray($style_row);
      $sheet->getStyle('X'.$numrow)->applyFromArray($style_row);
      $sheet->getStyle('Y'.$numrow)->applyFromArray($style_row);
      $sheet->getStyle('Z'.$numrow)->applyFromArray($style_row);
      
      $no++; // Tambah 1 setiap kali looping
      $numrow++; // Tambah 1 setiap kali looping
    }
    // Set width kolom
    $sheet->getColumnDimension('A')->setWidth(5); // Set width kolom A
    $sheet->getColumnDimension('B')->setWidth(25); // Set width kolom B
    $sheet->getColumnDimension('C')->setWidth(15); // Set width kolom C
    $sheet->getColumnDimension('D')->setWidth(20); // Set width kolom D
    $sheet->getColumnDimension('E')->setWidth(20); // Set width kolom E
    $sheet->getColumnDimension('F')->setWidth(20);
    $sheet->getColumnDimension('G')->setWidth(20);
    $sheet->getColumnDimension('H')->setWidth(20);
    $sheet->getColumnDimension('I')->setWidth(20);
    $sheet->getColumnDimension('J')->setWidth(20);
    $sheet->getColumnDimension('K')->setWidth(20);
    $sheet->getColumnDimension('L')->setWidth(20);
    $sheet->getColumnDimension('M')->setWidth(20);
    $sheet->getColumnDimension('N')->setWidth(20);
    $sheet->getColumnDimension('O')->setWidth(20);
    $sheet->getColumnDimension('P')->setWidth(20);
    $sheet->getColumnDimension('Q')->setWidth(20);
    $sheet->getColumnDimension('R')->setWidth(20);
    $sheet->getColumnDimension('S')->setWidth(20);
    $sheet->getColumnDimension('T')->setWidth(20);
    $sheet->getColumnDimension('U')->setWidth(20);
    $sheet->getColumnDimension('V')->setWidth(20);
    $sheet->getColumnDimension('W')->setWidth(20);
    $sheet->getColumnDimension('X')->setWidth(20);
    $sheet->getColumnDimension('Y')->setWidth(20);
    $sheet->getColumnDimension('Z')->setWidth(20);
    
    // Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
    $sheet->getDefaultRowDimension()->setRowHeight(-1);
    // Set orientasi kertas jadi LANDSCAPE
    $sheet->getPageSetup()->setOrientation(\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::ORIENTATION_LANDSCAPE);
    // Set judul file excel nya
    $sheet->setTitle("List Karyawan Organik");
    // Proses file excel
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment; filename="List Karyawan Organik.xlsx"'); // Set nama file excel nya
    header('Cache-Control: max-age=0');
    $writer = new Xlsx($spreadsheet);
    $writer->save('php://output');
  }
}











