<?php
$koneksi = new mysqli("localhost","root","", "dbinventory");
$tgl = date("d-m-Y");




$htmlContent = '

<style>
.tabel{ padding-top: 40mm; border-collapse : collapse;}
.tabel th{padding : 10px 5px; background-color : #f60; color:#fff;}
.tabel td{padding : 10px 5px;}
</style>

';




$htmlContent .= '
<style>
.bem{ font-weight:bold; font-family:Times; font-size:12px; align="center"; line-height: 17px;}
</style>';
$htmlContent .= '
<style>
.word{ text-indent : 50px; margin-right:50px;}
</style>';
$htmlContent .= '
<style>
.tab{ display:inline-block; margin-left:20px;}
.namatab{ display:inline-block; margin-left:30px;}
.npmtab{ display:inline-block; margin-left:33px;}
.haltab{ display:inline-block; margin-left:30px;}
.notab{ display:inline-block; margin-left:33px;}
.lamptab{ display:inline-block; margin-left:17px;}
.p{line-height:20px;}
</style>';
$htmlContent .= '
<style>
.gambar{ height : 300px; width: 200px;}

</style>
';



$htmlContent .= ' <page backtop="80mm"  backbottom="7mm" backleft="4mm" backright="5mm">

	<page_header> 
    	<div style="padding:10mm; font-weight:bold; font-family:Times; font-size:16px; border:0px ;" align="center">
			<span> BADAN EKSEKUTIF MAHASISWA</span>
			<br><span> FAKULTAS ILMU KOMPUTER DAN TEKNOLOGI INFORMASI</span>
			<br><span> UNIVERSITAS GUNADARMA</span>
			<br><span class="bem"> Sekretariat : Pusat Kegiatan Mahasiswa (PUSGIWA) Kampus E</span>
			<br><span class="bem"> Jl. Komjen Pol. M. Jasin - Depok</span>
			<span> _______________________________________________________________________________________<br>
			 -----------------------------------------------------------------------------------------------------------------------------------</span>
		</div>
	';

	$tgl = mktime(date('m'), date('d'), date('Y'));
		$tgl1 = date("d F Y",$tgl);
		
		$htmlContent .='<p style="padding-left:137mm; padding-top:0mm;  font-family:Times; font-size:15px;">Depok,&nbsp;'.$tgl1.'</p>';

	$no= $_GET['id'];
	$sql = $koneksi-> query ("select * from form where id='$no'");
	$data = $sql-> fetch_assoc();
	

	$htmlContent .= '
	
    <div style=" padding-left:15mm; padding-top:5mm; font-family:Times; font-size:15px;">
		No<span class="notab">:&nbsp;'.$data ['id'].'/SPO/ADM18/BEM-FIKTI/VII/2018</span>
	</div>
	<div style="padding-left:15mm; padding-top:0mm; font-family:Times; font-size:15px;">
		Lamp<span class="lamptab">:&nbsp;-</span>
	</div>
	<div style="padding-left:15mm; padding-top:0mm; font-family:Times; font-size:15px;">
		Hal<span class="haltab">:<em>&nbsp;Peminjaman Barang</em></span>
	</div>
	<div style="padding-left:15mm; padding-top:10mm; font-family:Times; font-size:15px;">
		<span>Dengan hormat,</span>
	</div>
	<div style="padding-left:15mm; padding-top:4mm; font-family:Times; font-size:15px;">
		<span>Saya yang bertanda tangan di bawah ini</span>
	</div>
	<div style="padding-left:15mm; padding-top:1mm; font-family:Times; font-size:15px;">
		Nama<span class="namatab">:</span> 
	</div>

	<div style="padding-left:15mm; padding-top:1mm; font-family:Times; font-size:15px;">
		NPM<span class="npmtab">:</span>
	</div>
	<div style="padding-left:15mm; padding-top:1mm; font-family:Times; font-size:15px;">
		Jurusan<span class="tab">:</span>
	</div>
	<div  style="padding-left:15mm; padding-top:5mm; font-family:Times; font-size:15px;">
		<p align="justify" class="word">Memohon izin untuk meminjam barang BEM FIKTI dengan kriteria di bawah ini. Hal-hal mengenai barang yang saya pinjam menjadi tanggung jawab saya dan barang yang dipinjam akan dikembalikan dengan semula. </p>
	</div>
	<div style="padding-left:15mm; padding-top:5mm; font-family:Times; font-size:15px;">
		<p align="justify" class="word">Demikianlah surat peminjaman barang ini saya sampaikan. Atas perhatian dan izin yang diberikan, saya ucapkan terima kasih. </p>
	</div>
	


	</page_header>
	<page_footer>
	<div style="padding-left:15mm; padding-top:2mm; font-family:Times; font-size:15px;">
		<span> BEM FIKTI UNIVERSITAS GUNADARMA </span>
	</div>
	</page_footer>

	';



		


		$no=1;
		$id = $_GET['id'];
		$sql = $koneksi-> query ("select * from form where id='$id'");
		$data1 = $sql->fetch_assoc();

		$htmlContent .='<p  class="p" style="padding-left:33mm; padding-top:22.5mm;  font-family:Times; font-size:15px;">'.$data1 ['nama'].'<br>'.$data1 ['npm'].'<br>'.$data1 ['jurusan'].'</p>';
		
		$htmlContent .= '

		<table border="2px" class="tabel" align="center">
		<tr>
  				<th align="center">No</th>
  				<th align="center">Nama</th>
  				<th align="center">NPM</th>
  				<th align="center">Barang</th>
  				<th align="center">Jumlah</th>
  				<th align="center">Tanggal Pinjam</th>
  				<th align="center">Jurusan</th>
  				
          
		</tr>';

		$no=1;
		$id = $_GET['id'];
		$sql = $koneksi-> query ("select * from form where id='$id'");
		while ($data = $sql-> fetch_assoc()) {
			$htmlContent .= '
		<tr>
                                    	<td align="center">'.$no++.'</td>
                                    	<td align="left">'.$data ['nama'].'</td>
                                    	<td align="center">'.$data ['npm'].'</td>
                                    	<td align="center">'.$data ['barang'].'</td>
                                    	<td align="center">'.$data ['jumlah'].'</td>
                                    	<td align="center">'.$data ['tanggal'].'</td>
                                    	<td align="center">'.$data ['jurusan'].'</td>
                                    	
        </tr>
		</table>	
		';

		}
$htmlContent .='<p style="padding-left:138mm; padding-top:25mm;  font-family:Times; font-size:15px;">Mengetahui,</p>
<p style="padding-left:133mm; padding-top:15mm;  font-family:Times; font-size:15px;">Staff Administrasi</p>';
$htmlContent .='
		
</page> 

';


require __DIR__.'\vendor\autoload.php';
use Spipu\Html2Pdf\Html2Pdf;
$pdf = new \Spipu\Html2Pdf\Html2Pdf('P','A4','en'); 
$pdf->writeHTML($htmlContent); 
$pdf->Output('Laporan_Form.pdf'); 

?>