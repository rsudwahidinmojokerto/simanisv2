<?php
//setting page
$pdf->SetMargins(1,1,1);
$pdf->AliasNbPages();

//begin
$pdf->AddPage();

//begin kop laporan
$pdf->Image('./assets/icons/mojokerto.png', 1.8, 1.6, 1.8, 2.3); //logo mojokerto
$pdf->Image('./assets/icons/lg_clr.png', 16.2, 2.2, 3.2, 1.2); //logo biogas
$pdf->SetFont('Arial', 'B', 11.5); //begin header baris 1
$pdf->Ln(0.6);
$pdf->SetX(3);
$pdf->MultiCell(15, 0.6, 'PEMERINTAH KABUPATEN MOJOKERTO', 0, 'C'); //end header baris 1
$pdf->SetFont('Arial', 'B', 12); //begin header baris 2
$pdf->SetX(3);
$pdf->MultiCell(15, 0.6, 'KECAMATAN PACET', 0, 'C'); //end header baris 2
$pdf->SetFont('Arial', 'B', 15); //begin header baris 3
$pdf->SetX(3);
$pdf->MultiCell(15, 0.6, 'KANTOR DESA CLAKET', 0, 'C'); //end header baris 3
$pdf->SetFont('Arial', '', 9); //begin header baris 4
$pdf->SetX(3);
$pdf->MultiCell(15, 0.6, 'Jalan Claket Inggil No. 155. Desa Claket, Kec. Pacet, Kab. Mojokerto', 0, 'C'); //end header baris 4
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
$pdf->Cell(2 , 0.7, 'No.' , 1, 'LR', 'C'); 
$pdf->Cell(4 , 0.7, 'ID Pembayaran' , 1, 'LR', 'C'); 
$pdf->Cell(4 , 0.7, 'ID Pelanggan' , 1, 'LR', 'C'); 
$pdf->Cell(4 , 0.7, 'Jumlah terbayar' , 1, 'LR', 'C'); 
$pdf->Cell(5 , 0.7, 'Tanggal' , 1, 'LR', 'C');
//end header
//
//begin body
if($dataRiwayatBayar == null){
	$pdf->Ln();
	$pdf->Cell(19 , 0.7, '-- Data tidak ada --', 1, 'LR', 'C');
} else {
	$i = 1;
	$total = 0;
	foreach ($dataRiwayatBayar as $riwayatBayar) {
		$pdf->Ln(); 
		$pdf->SetFont('Arial','',9.5); 
		$pdf->Cell(2 , 0.7, $i, 1, 'LR', 'L'); 
		$pdf->Cell(4 , 0.7, $riwayatBayar->idBayar  , 1, 'LR', 'L'); 
		$pdf->Cell(4 , 0.7, $riwayatBayar->idUser , 1, 'LR', 'L');
		$pdf->Cell(4 , 0.7, "Rp. ".$riwayatBayar->jumlah_bayar , 1, 'LR', 'L');
		$pdf->Cell(5 , 0.7, substr($riwayatBayar->tanggal, 0, 10) , 1, 'LR', 'L');
		$total += $riwayatBayar->jumlah_bayar;
		$i++;
	}
	$pdf->Ln();
	$pdf->SetFont('Arial','B',9.5);
	$pdf->Cell(10 , 0.7, "Total", 1, 'LR', 'L');
	$pdf->Cell(9 , 0.7, "Rp. ".$total , 1, 'LR', 'L');
}
//end body
//
//end table
//
//
//end isi

//begin footer
$pdf->SetY(-2.6); 
$pdf->SetFont('Times','',9); 
$pdf->Cell(0.5, 0.5, 'Dicetak pada : '.date('d/m/Y H:i').' | Oleh : '.$userdata->nama.' ('.$userdata->idGrup.')', 0, 'LR', 'L'); 
$pdf->Cell(18.5, 0.5, 'Hal. '.$pdf->PageNo().'/{nb}',0,0,'R');
// end footer

// cetak laporan
$pdf->Output('Rekap bayar (diunduh Tgl '.date('d/m/Y').').pdf', 'I');
?>