<?php
//setting page
$pdf->SetMargins(1,1,1);
$pdf->AliasNbPages();

//begin
$pdf->AddPage();

//begin kop laporan
$pdf->Image('assets/img/logo-big.png', 1, 1, 5, 3); //logo
$pdf->SetFont('Arial', 'B', 15.5); //begin header baris 1
$pdf->Ln(0.5);
$pdf->SetX(3);
$pdf->MultiCell(19.5, 0.5, 'PT. CITRA MEDIA SOLUSINDO', 0, 'C'); //end header baris 1
$pdf->SetFont('Arial', '', 10.5); //begin header baris 2
$pdf->SetX(3);
$pdf->MultiCell(19.5, 0.5, 'Ruko Soekarno Hatta Indah E-10, Malang, 65142, Indonesia', 0, 'C'); //end header baris 2
$pdf->SetFont('Arial', '', 9.5); //begin header baris 3
$pdf->SetX(3);
$pdf->MultiCell(19.5, 0.5, 'Telp: +62-341-404286; Fax: +62-3414345448', 0, 'C'); //end header baris 3
$pdf->SetFont('Arial', '', 9.5); //begin header baris 4
$pdf->SetX(3);
$pdf->MultiCell(19.5, 0.5, 'Website: http://www.cims.co.id   E-mail: info@cims.co.id', 0, 'C'); //end header baris 4
$pdf->Line(1,4.5,20,4.5); 
$pdf->Line(1,4.57,20,4.57);
//end kop laporan

$pdf->Ln(1.5);

//begin isi
//
//begin table
//
//begin header
$pdf->SetFont('Arial', 'B', 9.5);
$pdf->Cell(1 , 0.7, 'No.' , 1, 'LR', 'C'); 
$pdf->Cell(9 , 0.7, 'Nama Barang' , 1, 'LR', 'C'); 
$pdf->Cell(3 , 0.7, 'Harga' , 1, 'LR', 'C'); 
$pdf->Cell(3 , 0.7, 'Satuan' , 1, 'LR', 'C');
$pdf->Cell(3 , 0.7, 'Stok' , 1, 'LR', 'C');
//end header
//
//begin body
foreach ($detailStok as $detail) {
	$pdf->Ln(); 
	$pdf->SetFont('Arial','',9.5); 
	$pdf->Cell(1 , 0.7, $detail->id, 1, 'LR', 'L'); 
	$pdf->Cell(9 , 0.7, $detail->nama  , 1, 'LR', 'L'); 
	$pdf->Cell(3 , 0.7, $detail->harga , 1, 'LR', 'R');
	$pdf->Cell(3 , 0.7, $detail->satuan , 1, 'LR', 'R');
	$pdf->Cell(3 , 0.7, $detail->stok , 1, 'LR', 'R'); 
}
//end body
//
//end table
//
//end isi

//begin footer
$pdf->SetY(-2.6); 
$pdf->SetFont('Times','',9); 
$pdf->Cell(0.5, 0.5, 'Dicetak pada : '.date('d/m/Y H:i').' | Oleh : '.$userdata->nama, 0, 'LR', 'L'); 
$pdf->Cell(18.5, 0.5, 'Hal. '.$pdf->PageNo().'/{nb}',0,0,'R');
// end footer

// cetak laporan
$pdf->Output('Stok Barang (Tgl '.date('d/m/Y').').pdf', 'D');
?>