<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Surat Pengantar - {{$users->nama}}</title>
		<style media="screen">
		.tabel{ padding-top: 40mm; border-collapse : collapse;}
		.tabel th{padding : 10px 5px; background-color : #f60; color:#fff;}
		.tabel td{padding : 10px 5px;}
		.bem{ font-weight:bold; font-family:Times; font-size:22px; align="center"; line-height: 17px;}
		.word{ text-indent : 50px; margin-right:50px;}
		.tab{ display:inline-block; margin-left:20px;}
		.tujuantab{ display:inline-block; margin-left:64px;}
		.alamattab{ display:inline-block; margin-left:140px;}
		.nkktab{ display:inline-block; margin-left:19px;}
		.niktab{ display:inline-block; margin-left:71px;}
		.jktab{ display:inline-block; margin-left:78px;}
		.agamatab{ display:inline-block; margin-left:142px;}
		.npmtab{ display:inline-block; margin-left:48px;}
		.namatab{ display:inline-block; margin-left:151px;}
		.haltab{ display:inline-block; margin-left:38px;}
		.notab{ display:inline-block; margin-left:33px;}
		.lamptab{ display:inline-block; margin-left:17px;}
		.p{line-height:20px;}
		.gambar{ height : 300px; width: 200px;}
		.row{display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-15px;margin-left:-15px}
		.col,.col-1,.col-2,.col-3,.col-4,.col-5,.col-6,.col-7,.col-8,.col-9,.col-10,.col-11,.col-12,.col-auto,
		.col-lg,.col-lg-1,.col-lg-2,.col-lg-3,.col-lg-4,.col-lg-5,.col-lg-6,.col-lg-7,.col-lg-8,.col-lg-9,.col-lg-10,.col-lg-11,.col-lg-12,.col-lg-auto,
		.col-md,.col-md-1,.col-md-2,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9,.col-md-10,.col-md-11,.col-md-12,.col-md-auto,
		.col-sm,.col-sm-1,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9,.col-sm-10,.col-sm-11,.col-sm-12,.col-sm-auto,
		.col-xl,.col-xl-1,.col-xl-2,.col-xl-3,.col-xl-4,.col-xl-5,.col-xl-6,.col-xl-7,.col-xl-8,.col-xl-9,.col-xl-10,.col-xl-11,.col-xl-12,.col-xl-auto{
			position:relative;
			width:100%;
			min-height:1px;
			padding-right:15px;
			padding-left:15px
		}
		.col{-ms-flex-preferred-size:0;flex-basis:0;-webkit-box-flex:1;-ms-flex-positive:1;flex-grow:1;max-width:100%}
		.col-auto{-ms-flex:0 0 auto;flex:0 0 auto;width:auto;max-width:none}
		.col-1,.col-auto{-webkit-box-flex:0}
		.col-1{-ms-flex:0 0 8.33333333%;flex:0 0 8.33333333%;max-width:8.33333333%}
		.col-2{-ms-flex:0 0 16.66666667%;flex:0 0 16.66666667%;max-width:16.66666667%}
		.col-2,.col-3{-webkit-box-flex:0}
		.col-3{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}
		.col-4{-ms-flex:0 0 33.33333333%;flex:0 0 33.33333333%;max-width:33.33333333%}
		.col-4,.col-5{-webkit-box-flex:0}
		.col-5{-ms-flex:0 0 41.66666667%;flex:0 0 41.66666667%;max-width:41.66666667%}
		.col-6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}
		.col-6,.col-7{-webkit-box-flex:0}
		.col-7{-ms-flex:0 0 58.33333333%;flex:0 0 58.33333333%;max-width:58.33333333%}
		.col-8{-ms-flex:0 0 66.66666667%;flex:0 0 66.66666667%;max-width:66.66666667%}
		.col-8,.col-9{-webkit-box-flex:0}
		.col-9{-ms-flex:0 0 75%;flex:0 0 75%;max-width:75%}
		.col-10{-ms-flex:0 0 83.33333333%;flex:0 0 83.33333333%;max-width:83.33333333%}
		.col-10,.col-11{-webkit-box-flex:0}.col-11{-ms-flex:0 0 91.66666667%;flex:0 0 91.66666667%;max-width:91.66666667%}
		.col-12{-webkit-box-flex:0;-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}

		</style>
	</head>
	<body>
		<page backtop="80mm"  backbottom="7mm" backleft="4mm" backright="5mm">

			<page_header>
		    	<div style="padding:10mm; font-weight:bold; font-family:Times; font-size:26px; border:0px ;" align="center">
					<span> RUKUN TETANGGA 012 </span>
					<br><span> RUKUN WARGA 013 </span>
					<!-- <br><span>  </span> -->
					<br><span class="bem"> KELURAHAN MEKARSARI </span>
					<br><span class="bem"> KECAMATAN CIMANGGIS DEPOK</span><br><hr style="border-width: 2px; border-style:solid;">
				</div>

				<div style="padding:3mm; font-weight:bold; font-family:Times; font-size:26px; border:0px ;" align="center">
					<u>SURAT PENGANTAR</u>
				</div>
				<div style="font-weight:bold; font-family:Times; font-size:23px; border:0px ;" align="center">
					Nomor<span class="">:&nbsp;{{$urutan}}/A/SP/012/013/{{$bulan}}/{{$tahun}}</span>
				</div>

				<!-- no surat -->
				<div style=" padding-left:15mm; padding-top:5mm; font-family:Times; font-size:23px;">
				</div>
				<div style="padding-left:15mm; padding-top:0mm; font-family:Times; font-size:23px;">
					Lamp<span class="lamptab">:&nbsp;-</span>
				</div>
				<div style="padding-left:15mm; padding-top:0mm; font-family:Times; font-size:23px;">
					Hal<span class="haltab">:<em>&nbsp;Surat Pengantar</em></span>
				</div>

				<!-- pendahuluan -->
				<div	class="word" align="justify" style="padding-left:15mm; padding-top:10mm; font-family:Times; font-size:23px;">
					<span>Yang bertanda tangan di bawah ini, Ketua RT. 012 RW. 013 Kelurahan Mekarsari Kecamatan Cimanggis menerangkan bahwa:</span>
				</div>
				<div style="padding-left:15mm; padding-top:4mm; font-family:Times; font-size:23px;">
					<!-- <span>Saya yang bertanda tangan di bawah ini</span> -->
				</div>
				<div style="padding-left:20mm; padding-top:1mm; font-family:Times; font-size:23px;">
					nama<span class="namatab">:</span>
					{{ strtoupper($users->nama) }}
				</div>
				<div style="padding-left:20mm; padding-top:1mm; font-family:Times; font-size:23px;">
					tempat/tgl. Lahir<span class="npmtab">:</span>
					{{ strtoupper($users->tempat_lahir) }}, {{date('d-m-Y', strtotime('$users->tanggal_lahir'))}}
				</div>
				<div style="padding-left:20mm; padding-top:1mm; font-family:Times; font-size:23px;">
					jenis kelamin<span class="jktab">:</span>
					@if ($users->j_kelamin == 'p')
					PEREMPUAN
					@else
					LAKI-LAKI
					@endif
				</div>
				<div style="padding-left:20mm; padding-top:1mm; font-family:Times; font-size:23px;">
					agama<span class="agamatab">:</span>
					{{ strtoupper($users->agama) }}
				</div>
				<div style="padding-left:20mm; padding-top:1mm; font-family:Times; font-size:23px;">
					NIK/No. KTP<span class="niktab">:</span>
					{{ $users->nik }}
				</div>
				<div style="padding-left:20mm; padding-top:1mm; font-family:Times; font-size:23px;">
					No. Kartu Keluarga<span class="nkktab">:</span>
					{{ $users->nkk }}
				</div>
				<div style="padding-left:20mm; padding-top:1mm; font-family:Times; font-size:23px;">
					alamat<span class="alamattab">:</span>
					{{strtoupper($users->alamat) }} RT/RW. 012/013. <br>
					<span style="padding-left:56.5mm">
						MEKARSARI. CIMANGGIS. DEPOK.
					</span>
				</div>
				<div style="padding-left:20mm; padding-top:1mm; font-family:Times; font-size:23px;">
					maksud/tujuan<span class="tujuantab">:</span>
					{{$request->keperluan}}
				</div>

				<!-- penutup -->
				<!-- <div  style="padding-left:15mm; padding-top:5mm; font-family:Times; font-size:15px;">
					<p align="justify" class="word">Memohon izin untuk meminjam barang BEM FIKTI dengan kriteria di bawah ini. Hal-hal mengenai barang yang saya pinjam menjadi tanggung jawab saya dan barang yang dipinjam akan dikembalikan dengan semula. </p>
				</div> -->
				<div style="padding-left:15mm; padding-top:5mm; font-family:Times; font-size:23px;">
					<p align="justify" class="word">Demikian surat pengantar ini kami buat dengan sebenarnya untuk dipergunakan seperlunya. </p>
				</div>
			</page_header>

			<!-- footer -->
				<!-- <div style="padding-left:15mm; padding-top:2mm; font-family:Times; font-size:15px; text-align:center;">
					<span> BEM FIKTI UNIVERSITAS GUNADARMA </span>
				</div> -->
			<page_footer>

			<!-- <p  class="p" style="padding-left:33mm; padding-top:22.5mm;  font-family:Times; font-size:15px;">'.$data1 ['nama'].'<br>'.$data1 ['npm'].'<br>'.$data1 ['jurusan'].'</p> -->

			<div class="row">
				<div class="col" style="text-align:center;">
					<p style="padding-top:25mm;  font-family:Times; font-size:23px;">
						Nomor<span style="display:inline-block; margin-left:20px; padding-top:1mm;">: ................................</span><br>
						Tanggal<span style="display:inline-block; margin-left:14.5px; padding-top:1mm;">: ................................</span><br>
						<span style="display:inline-block;padding-top:1mm;"></span>Mengetahui,<br>
						<b><span style="display:inline-block;padding-top:1mm;">PENGURUS RW. 013</span></b>
					</p>
					<p style="padding-top:40mm;  font-family:Times; font-size:23px;">(...........................................)</p>
				</div>
				<div class="col" style="text-align:center;">
					<p style="padding-top:25mm;  font-family:Times; font-size:23px;">
						Depok,<span style="display:inline-block; padding-top:9mm;"> ................................ </span><br>
						<span style="display:inline-block;padding-top:1mm;"></span>Mengetahui,<br>
						<b><span style="display:inline-block;padding-top:1mm;">PENGURUS RT. 012/013</span></b>
					</p>
					<p style="padding-top:40mm;  font-family:Times; font-size:23px;">(...........................................)</p>
<!-- padding-left:138mm; -->
<!-- padding-left:133mm;  -->
				</div>
			</div>

			</page_footer>
			</page>

	<!-- </body> -->
</html>
