 @extends('components.containers.appLanding')
 @section('pageTitle', $title)
 @section('content')


 <script>
	
	document.addEventListener('keyup', (e) => {
		if (e.key == 'PrintScreen') {
			window.navigator.clipboard.writeText('');
		}
	});
	 
	document.addEventListener("keyup", function (e) {
    var keyCode = e.keyCode ? e.keyCode : e.which;
            if (keyCode == 44) {
                stopPrntScr();
            }
        });
	function stopPrntScr() {

            var inpFld = document.createElement("input");
            inpFld.setAttribute("value", ".");
            inpFld.setAttribute("width", "0");
            inpFld.style.height = "0px";
            inpFld.style.width = "0px";
            inpFld.style.border = "0px";
            document.body.appendChild(inpFld);
            inpFld.select();
            document.execCommand("copy");
            inpFld.remove(inpFld);
        }
       function AccessClipboardData() {
            try {
                window.clipboardData.setData('text', "Access   Restricted");
            } catch (err) {
            }
        }
        setInterval("AccessClipboardData()", 300);


	</script>
	
 <section class="page-header">
     <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <h1>NPCT1 General Condition</h1>
                 <h6><a href="{{ url('/') }}">Home</a> <i class="fas fa-angle-right"></i> News <i class="fas fa-angle-right"></i>  General Condition </h6>
             </div>
         </div>
     </div>
 </section>
 
 <style>
 	div {
 		
 		font-family: Calibri, sans-serif;
 	}
 	.paragraph p {
 		text-align: justify;
 		width: 100%;
 	}
 	
 	.sub-modul {
 		margin:  0;
 	}
 	
 	.modul {
 			font-size: 14px !important;
			border-right: solid 0.5px black;
			border-left: solid 0.5px black;
 	}
	.sub-modul {
 			font-size: 14px !important;
			border-right: solid 0.5px black;
			border-left: solid 0.5px black;
 	}
 </style>
 
 
	
	<script language="JavaScript"> 
	
	<!--
	function noway(go) { if 
	(document.all) { if (event.button == 2) { alert(popup); return false; } } if (document.layers) 
	{ if (go.which == 3) { alert(popup); return false; } } } if (document.layers) 
	{ document.captureEvents(Event.MOUSEDOWN); } document.onmousedown=noway; 
	// --> 
	
	</script>
	
	<script > 
	document.onkeydown = function(e) {
	  if(event.keyCode == 123) {
		 return false;
	  }
	  if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
		 return false;
	  }
	  if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
		 return false;
	  }
	  if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
		 return false;
	  }
	  if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
		 return false;
	  }
	  
	  if (e.key == 'PrintScreen') {
			window.navigator.clipboard.writeText('');
			setTimeout(async()=>console.log(
				await window.navigator.clipboard.readText()), 3000)
			}
		
		if (e.keyCode == 44) {
			window.navigator.clipboard.writeText('');
			setTimeout(async()=>console.log(
				await window.navigator.clipboard.readText()), 3000)
			}
		
		if (e.altKey &&  e.keyCode == 44) {
			window.navigator.clipboard.writeText('');
			setTimeout(async()=>console.log(
				await window.navigator.clipboard.readText()), 3000)
			}
		}
	}
	
	</script>
	
	
	
 
 <div class="clearfix">&nbsp;</div>
 
     <div class=""> 
         <div class="">
             <div class="contents">
                 
                 <html oncontextmenu="return false">
 <head>
 	
 	
 </head>
 <div style="width:100%">
 <body ondragstart="return false" onselectstart="return false" oncontextmenu="return false">
 	<div style="padding: 5% 10%; font-size:20px">
 		<div align="center" style="margin-bottom: 7%">
 			<div>
 				<p>GENERAL CONDITIONS</p>
 				<p style="color: blue"><i>KETENTUAN UMUM</i></p>
 			</div>
 			<div>
 				<p>FOR SERVICES AND FACILITIES AT NPCT1</p>
 				<p style="color: blue"><i>UNTUK LAYANAN DAN FASILITAS DI NPCT1</i></p>
 			</div>
 		</div>
 		
 		<section>
 			<div class="container">
 				<div class="row" style="border-top: solid black 1px;border-bottom: solid black 1px;">
 							
							<!-- S:MODUL POINT 1 --->
 							<!-- S:MODUL POINT --->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph" align="center" style="margin-bottom:20px;">
 										<b>
 											DEFINITIONS AND INTERPRETATION
 										</b>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph" align="center" style="margin-bottom:20px;">
 										<b>
 											DEFINISI DAN PENAFSIRAN
 										</b>
 									</div>
 								</div>
 							</div>
 							<!-- E:MODUL POINT --->
 							
 							<!-- S:POINT 1 --->
 							
 							<!-- S:MODUL POINT 1 --->
 							<!-- S:MODUL POINT --->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>1.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											Definitions
 										</b>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>1.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											Definisi
 										</b>
 									</div>
 								</div>
 							</div>
 							<!-- E:MODUL POINT --->
 							
 							
 						
 								<!-- S:POINT 1.1 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>1.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Each of the following expressions and their grammatical
 												 variations used in the Contract shall have the following
 												 meaning unless the context of the Contract requires
 												 otherwise.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>1.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Setiap pernyataan dan variasi gramatikal yang digunakan
 												 dalam Kontrak ini memiliki arti sebagaimana di bawah ini,
 												 kecuali konteks Kontrak mensyaratkan sebaliknya.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 1.1 --->
 								
 								
 								
 								
 								<!-- S:POINT 1.1.1 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>1.1.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<b>“Application”</b> means the application for the Services/Facilities, made by or for the Customer to NPCT1 in writing or by any other mode required or accepted by NPCT1 and granted by NPCT1, including but not limited to Terminal Service Agreement entered into between NPCT1 with Customer.
 											</p>
 										</div>
 									</div>
 								</div>
 								
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1"><p>1.1.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<b>“Permohonan”</b> berarti permohonan untuk Layanan/Fasilitas yang dibuat oleh atau untuk Pelanggan dan ditujukan kepada NPCT1, secara tertulis atau dengan cara lain yang diperlukan atau diterima oleh NPCT1, termasuk namun tidak terbatas pada Perjanjian Layanan Terminal antara NPCT1 dengan Pelanggan.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 1.1.1 --->
 								
 								
 								
 								<!-- S:POINT 1.1.2 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>1.1.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<b>“Claim”</b> means any loss, damage, cost, expense and/or liability incurred due to any circumstances, including but not limited to any property or environmental damage, death or personal injury, economic or consequential loss, or legal obligations and all related legal costs.
 											</p>
 										</div>
 									</div>
 								</div>
 								
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1"><p>1.1.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<b>“Klaim”</b> berarti setiap kerugian, kerusakan, biaya, beban dan/atau kewajiban yang timbul karena keadaan apapun, termasuk namun tidak terbatas terhadap kerusakan properti atau lingkungan, kematian atau cedera pribadi, ekonomi atau konsekuensi kehilangan atau kewajiban hukum dan semua biaya hukum yang terkait.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 1.1.2 --->
 								
 								
 								
 								<!-- S:POINT 1.1.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>1.1.3</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<b>“Conditions”</b> means these General Conditions and <b>“Condition”</b> means each one of them.
 											</p>
 										</div>
 									</div>
 								</div>
 								
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1"><p>1.1.3</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<b>“Ketentuan-Ketentuan”</b> berarti Ketentuan Umum dan <b>“Ketentuan”</b> berarti masing-masing dari Ketentuan tersebut.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 1.1.3 --->
 								
 								<!-- S:POINT 1.1.4 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>1.1.4</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<b>“Container”</b> means a receptacle 6.1 metres or more in length
 												 equipped with corner castings to facilitate handling by
 												 mechanical equipment
 											</p>
 										</div>
 									</div>
 								</div>
 								
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1"><p>1.1.4</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<b>“Peti Kemas”</b> berarti sebuah wadah ukuran panjang 6.1
 												 meter or lebih, yang dilengkapi dengan kait di setiap
 												 ujung sisi wadah untuk fasilitas penanganan dengan
 												 peralatan mekanis.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 1.1.4 --->
 								
 								<!-- S:POINT 1.1.5 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>1.1.5</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<b>“Contract”</b> means the contract constituted by the
 												 Application including the Conditions and any other document
 												 expressly agreed between the Parties as forming part of such
 												 contract.
 											</p>
 										</div>
 									</div>
 								</div>
 								
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1"><p>1.1.5</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<b>“Kontrak”</b> berarti kontrak yang didasari oleh
 												 Permohonan, termasuk ketentuan-Ketentuan dan
 												 dokumen lainnya yang telah disepakati antara Para Pihak
 												 sebagai bagian dari kontrak.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 1.1.5 --->
 								
 								<!-- S:POINT 1.1.6 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>1.1.6</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-12 col-md-12 col-sm-12 col-xm-12 paragraph">
 													<p>
 														<b>“Contract Period”</b> means the period of the Contract from the
 														 commencement date until the expiry date both stipulated in
 														 the Application or in the absence of such stipulation:
 
 													</p>
 												</div>
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(a)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														until the complete performance of the Contract; or
 													</p>
 												</div>	
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(b)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														until the termination of the Contract in accordance with the provisions of the Contract,
 													</p>
 												</div>	
 												<div class="col-lg-12 col-md-12 col-sm-12 col-xm-12 paragraph">
 													<p>
 														whichever shall be earlier.
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>1.1.6</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-12 col-md-12 col-sm-12 col-xm-12 paragraph">
 													<p>
 														<b>“Masa Kontrak”</b> berarti periode Kontrak sejak tanggal
 														 dimulainya hingga tanggal berakhirnya, di mana kedua
 														 tanggal tersebut telah diatur dalam Permohonan atau
 														 tanpa adanya ketentuan-ketentuan seperti:
 
 													</p>
 												</div>
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(a)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														hingga pelaksanaan Kontrak tersebut selesai; atau
 													</p>
 												</div>	
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(b)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														hingga pemutusan Kontrak yang dilakukan sesuai dengan ketentuan dalam Kontrak
 													</p>
 												</div>	
 												<div class="col-lg-12 col-md-12 col-sm-12 col-xm-12 paragraph">
 													<p>
 														yang mana terjadi terlebih dahulu.
 													</p>
 												</div>	
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 1.1.6 --->
 								
 								
 								<!-- S:POINT 1.1.7 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>1.1.7</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<b>“Contract Sum”</b> means all or any sums payable by or for the
 												 Customer to NPCT1 under the Contract or at law in
 												 accordance (where applicable) with the rate stipulated in the
 												 Contract or in the absence of such stipulation, in accordance
 												 with the rate stipulated in the NPCT1 Tariff, and shall include
 												 without limitation any and all interest due on the same.
 											</p>
 										</div>
 									</div>
 								</div>
 								
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1"><p>1.1.7</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<b>“Nilai Kontrak”</b> berarti semua atau jumlah tertentu yang
 												 harus dibayar oleh atau untuk Pelanggan kepada NPCT1,
 												 sesuai dengan Kontrak atau hukum sehubungan dengan
 												 (apabila berlaku) nilai yang telah ditentukan dalam tarif
 												 yang berlaku di NPCT1, dan harus tanpa batasan
 												 mencakup setiap dan semua bunga yang sudah jatuh
 												 tempo
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 1.1.7 --->
 								
 								
 								
 								<!-- S:POINT 1.1.8 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>1.1.8</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<b>“Customer”</b> means the person whose Application has been
 												 granted by NPCT1, or the successors and permitted assigns of
 												 such person.
 											</p>
 										</div>
 									</div>
 								</div>
 								
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1"><p>1.1.8</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<b>“Pelanggan”</b> berarti pihak/orang yang Permohonannya
 												 telah disetujui oleh NPCT1, atau pihak/orang
 												 penggantinya dan pihak/orang yang dikuasakan.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 1.1.8 --->
 								
 								
 								
 								<!-- S:POINT 1.1.9 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>1.1.9</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<b>“Customer's Representative”</b> means any one or more
 												 persons authorised by the Customer and approved by NPCT1
 												 under <b>Condition 13.1</b>.
 											</p>
 										</div>
 									</div>
 								</div>
 								
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1"><p>1.1.9</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<b>“Perwakilan Pelanggan”</b> berarti satu orang atau lebih
 												 yang diberikan kuasa oleh Pelanggan dan yang telah
 												 disetujui oleh NPCT1 sesuai dengan <b>Ketentuan 13.1</b>.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 1.1.9 --->
 								
 								
 								
 								<!-- S:POINT 1.1.10 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>1.1.10</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<b>“Data”</b> means the data described in this Contract and/or as
 												 may be agreed between NPCT1 and Customer from time to
 												 time, and any other information, material and data made
 												 available to NPCT1 in connection with or pursuant to the
 												 Contract.
 											</p>
 										</div>
 									</div>
 								</div>
 								
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1"><p>1.1.10</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<b>“Data”</b> berarti data yang dijelaskan dalam Kontrak ini
 												 dan/atau sebagaimana yang disepakati antara NPCT1 dan
 												 Pelanggan dari waktu ke waktu, serta informasi, bahan
 												 dan data lain yang diberikan kepada NPCT1 sehubungan
 												 dengan atau sesuai dengan Kontrak
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 1.1.10 --->
 								
 								
 								
 								<!-- S:POINT 1.1.11 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>1.1.11</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<b>“Derived Data”</b> means any information, material and data
 												 aggregated, collected, created, derived, developed,
 												 generated, modified, observed, summarized, reproduced
 												 and/or otherwise, in whole or part, arising from or pursuant
 												 to Data, and includes usage data
 											</p>
 										</div>
 									</div>
 								</div>
 								
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1"><p>1.1.11</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<b>“Data Turunan”</b> berarti segala informasi, materi dan data
 												 yang dihimpun, dikumpulkan, dibuat, diperoleh,
 												 dijabarkan, dikembangkan, ditimbulkan dimodifikasi,
 												 diamati, dirangkum, direproduksi dan/atau sebaliknya,
 												 baik secara keseluruhan atau sebagian, yang timbul dari
 												 atau berdasarkan Data, termasuk penggunaan data.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 1.1.11 --->
 								
 								
 								
 								<!-- S:POINT 1.1.12 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>1.1.12</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<b>“Dangerous Goods”</b> means cargo falling into any of the
 												 classes of dangerous goods set out in the International
 												 Maritime Dangerous Goods Code and any empty receptacles
 												 previously used for the carriage of such goods unless already
 												 rendered safe.
 											</p>
 										</div>
 									</div>
 								</div>
 								
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1"><p>1.1.12</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<b>“Barang Berbahaya”</b> berarti kargo yang termasuk dalam
 												 salah satu jenis barang berbahaya yang diatur dalam
 												 Kode Maritim Internasional untuk Barang Berbahaya (The
 												 International Maritime Dangerous Goods Code),
 												 termasuk juga semua wadah kosong yang sebelumnya
 												 digunakan untuk membawa barang sejenis kecuali telah
 												 dinyatakan aman.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 1.1.12 --->
 								
 								
 								<!-- S:POINT 1.1.13 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>1.1.13</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<b>“Delivery/Shipment Note”</b> means the document issued by
 												 NPCT1 in respect of the Goods pursuant to <b>Condition 7.4.1(c)</b>
 												 or its duplicate issued by NPCT1 pursuant to <b>Condition 7.4.3</b>.
 											</p>
 										</div>
 									</div>
 								</div>
 								
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1"><p>1.1.13</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<b>“Nota Pengiriman/Pengapalan”</b> berarti dokumen yang
 													 dikeluarkan oleh NPCT1 terhadap Barang yang sesuai
 													 dengan <b>Ketentuan 7.4.1(c)</b> atau salinannya yang
 													 dikeluarkan oleh NPCT1 berdasarkan <b>Ketentuan 7.4.3</b>.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 1.1.13 --->
 								
 								
 								<!-- S:POINT 1.1.14 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>1.1.14</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<b>“ECON”</b> is abbreviated of <b>Express Container Online System</b>
 												 that means a web-based billing application operated by
 												 NPCT1 that allows Customers or Customer’s Representative
 												 to pay NPCT1 Tariff via online and to issue Gate Pass
 											</p>
 										</div>
 									</div>
 								</div>
 								
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1"><p>1.1.14</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												 <b>“ECON”</b> merupakan singkatan dari <b>Express Container
 												 Online System</b>, yang berarti aplikasi penagihan berbasis
 												 web yang dioperasikan oleh NPCT1, yang memungkinkan
 												 Pelanggan atau Perwakilan Pelanggan untuk melakukan
 												 pembayaran Tarif NPCT1 via online serta untuk
 												 menerbitkan Gate Pass.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 1.1.14 --->
 								
 								
 								<!-- S:POINT 1.1.15 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>1.1.15</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<b>“Facilities”</b> means all or any part of the facilities described as
 												 such in the Application or any facilities provided by NPCT1,
 												 whether for use in themselves or for use in connection with
 												 the provision of the Services.
 											</p>
 										</div>
 									</div>
 								</div>
 								
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1"><p>1.1.15</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<b>“Fasilitas”</b> berarti seluruh atau sebagian dari fasilitas
 												 yang disebutkan dalam Permohonan atau yang
 												 disediakan oleh NPCT1, baik itu untuk digunakan sendiri
 												 atau digunakan untuk tujuan yang terkait dengan
 												 ketentuan tentang Layanan.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 1.1.15 --->
 								
 								
 								<!-- S:POINT 1.1.16 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>1.1.16</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-12 col-md-12 col-sm-12 col-xm-12 paragraph">
 													<p>
 														<b>“Force Majeure”</b> means any of the following events:
 													</p>
 												</div>
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(a)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														acts of God, plague, epidemic, pandemic, natural
 														 disaster such as but not limited to violent storm,
 														 cyclone, typhoon, hurricane, tornado, blizzard,
 														 earthquake, volcanic activity landslide, tidal wave,
 														 tsunami, flood, damage or destruction by lightning,
 														 drought;
 													</p>
 												</div>	
 												
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(b)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														terrorist or cyber-terrorist attack, riots, war, threat of or
 														 preparation for war, armed conflict or the serious
 														 threat of same including but not limited to hostile
 														 attack, blockade, embargo, hostilities, invasion, act of a
 														 foreign enemy, extensive military mobilisation,
 														 imposition of sanctions, embargo, or breaking off of
 														 diplomatic relations, civil war, rebellion and revolution,
 														 military or usurped power, insurrection, civil
 														 commotion or disorder, mob violence, act of civil
 														 disobedience;<br/><br/>
 													</p>
 												</div>
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(c)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														any law or action taken by a government or public
 														 authority, including but not limited to imposition of an
 														 export or import restriction, quota or prohibition;<br/>
 													</p>
 												</div>
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(d)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														act of authority whether lawful or unlawful, compliance
 														 with any law or governmental order, rule, regulation or
 														 direction, curfew restriction, expropriation, compulsory
 														 acquisition, seizure of works, requisition,
 														 nationalization;
 													</p>
 												</div>	
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(e)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														any fire, explosion, nuclear reaction, destruction of
 														 machines, equipment, ports and of any kind of
 														 installation, prolonged break-down of transport,
 														 telecommunication or electric current, shortage of
 														 power, fuel, transport or materials necessary for the
 														 performance of the Contract, abnormally high prices,
 														 obstruction of access to NPCT1, or accident including
 														 but not limited to the breaking adrift of any vessel from
 														 any NPCT1;
														 <br/></br/>
 													</p>
 												</div>
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(f)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														any labour or trade dispute, strikes, industrial action,
  lockouts or sabotage, boycott, go-slow, occupation of
  port and premises;<br/><br/>
 													</p>
 												</div>
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(g)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														any defect, inherent vice or natural property of the
  Goods and/or change in quality of the Goods or its
  packaging, containers or means of transport, and
  damage caused by other goods, delay in delivery of the
  Goods to or from any NPCT1 on the part of any person
  other than NPCT1, its employees or agents, failure in or
  delayed arrival of packing materials, containers or
  means of transport used in respect of the Goods or a
  third party’s interference with the Services/Facilities;
  and/or;<br/><br/>
 													</p>
 												</div>	
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(h)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														any other circumstances the occurrence or extent of
  which NPCT1 could not reasonably have controlled,
  foreseen, avoided, prevented or forestalled, including,
  without limitation, a third party’s interference with
  NPCT1’s computer systems, hacking, cyber-attack,
  computer viruses, the stability or availability of the
  Internet or a portion thereof or a network or device
  failure external to NPCT1’s data centre.
 
 													</p>
 												</div>													
 											</div>
 										</div>
 									</div>
 								</div>
 								
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1"><p>1.1.16</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-12 col-md-12 col-sm-12 col-xm-12 paragraph">
 													<p>
 														<b>“Keadaan Kahar”</b> berarti setiap peristiwa berikut:
 													</p>
 												</div>
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(a)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
  kejadian alam (Acts of God), wabah, epidemi,
  pandemi, bencana alam tetapi tidak terbatas pada
  badai dahsyat, angin topan, badai salju, gempa
  bumi, aktivitas longsor gunung berapi, gelombang
  pasang, tsunami, banjir, kerusakan atau
  kehancuran oleh petir, kekeringan;
 													</p>
 												</div>
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(b)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														serangan teroris atau cyber-teroris, kerusuhan,
  perang, ancaman atau persiapan untuk perang,
  konflik bersenjata atau ancaman serius yang sama
  termasuk tetapi tidak terbatas pada serangan
  musuh, blokade, embargo, permusuhan, invasi,
  tindakan musuh asing, mobilisasi militer yang luas,
  pengenaan sanksi, embargo, atau putusnya
  hubungan diplomatik, perang saudara,
  pemberontakan dan revolusi, kekuatan militer atau
  perebutan kekuasaan, pemberontakan, keributan
  atau kekacauan sipil, kekerasan massa, tindakan
  pembangkangan sipil;
 													</p>
 												</div>	
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(c)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														setiap hukum atau tindakan yang dilakukan
  pemerintah atau otoritas publik, termasuk namun
  tidak terbatas pada pengenaan pembatasan, kuota
  atau pelarangan ekspor atau impor;
 													</p>
 												</div>
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(d)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														tindakan otoritas apakah sah atau melanggar
  hukum, kepatuhan terhadap hukum atau perintah
  dari pemerintah, aturan, peraturan atau arahan,
  pembatasan jam malam, pengambilalihan, akuisisi
  wajib, perampasan pekerjaan, permintaan,
  nasionalisasi;
 													</p>
 												</div>	
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(e)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														 setiap kebakaran, ledakan, reaksi nuklir,
  penghancuran mesin, peralatan, pelabuhan dan
  segala jenis instalasi, kerusakan transportasi,
  telekomuniksi maupun arus listrik yang
  berkepanjangan, kurangnya daya listrik, bahan
  bakar, transportasi atau material yang diperlukan
  untuk pelaksanaan Kontrak, harga tinggi yang tidak
  wajar, halangan akses menuju NPCT1, atau
  kecelakaan termasuk tetapi tidak terbatas pada
  pelanggaran atas tidak terkontrolnya suatu kapal
  dari NPCT1;
 													</p>
 												</div>
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(f)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														setiap perselisihan, pemogokan, aksi industri,
  larangan bekerja atau sabotase pekerja atau
  perdagangan, boikot, perlambatan, pendudukan
  pelabuhan dan bangunan terkait buruh atau
  perdagangan;
 													</p>
 												</div>	
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(g)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														setiap kerusakan, kerusakan sendiri atau sifat
  alamiah dari Barang itu sendiri dan/atau perubahan
  dalam kualitas Barang atau kemasannya, peti
  kemas atau sarana pengangkutan, dan kerusakan
  akibat barang lainnya, keterlambatan pengiriman
  Barang kepada atau dari NPCT1 sebagai bagian dari
  orang/pihak lain selain dari NPCT1, karyawan atau
  agen NPCT1, kegagalan atau keterlambatan
  kedatangan material kemasan, peti kemas atau
  sarana pengangkutan yang digunakan sehubungan
  dengan Barang atau pihak ketiga yang menganggu
  Layanan/Fasilitas; dan/atau
 													</p>
 												</div>
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(h)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														keadaan lain yang terjadi atau batas-batas di mana
  NPCT1 tidak dapat mengontrol, memperkirakan,
  menghindarkan, mencegah atau mengantisipasi,
  termasuk tanpa Batasan, gangguan pihak ketiga
  melalui sistem computer NPCT1, peretasan,
  serangan dunia maya, virus computer, stabilitas
  atau ketersediaan Internet atau sebagian
  daripadanya atau kegagalan jaringan atau
  perangkat diluar pusat data NPCT1.
 
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 1.1.16 --->
 								
 								
 								
 								<!-- S:POINT 1.1.17 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>1.1.17</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<b>“Goods”</b> means all or any part of any property of any kind
  whatsoever brought into NPCT1 by the Customer or for the
  Customer for the purposes of the Contract including any
  Container.
 											</p>
 										</div>
 									</div>
 								</div>
 								
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1"><p>1.1.17</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<b>“Barang”</b> berarti semua atau setiap bagian dari properti
  jenis apapun yang dibawa masuk ke NPCT1 oleh
  Pelanggan atau untuk Pelanggan demi memenuhi tujuan
  Kontrak, termasuk setiap Peti Kemas.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 1.1.17 --->
 								
 								
 								
 								<!-- S:POINT 1.1.18 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>1.1.18</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-12 col-md-12 col-sm-12 col-xm-12 point">
 													<p>
 														<b>“Goods Handling”</b> means all or any of the following services
  and facilities provided by NPCT1 which are the subject of the Application:<br/><br/>
 													</p>
 												</div> 
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(a)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 													shifting Goods between any Vessel and NPCT1;
 													</p>
 												</div>
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(b)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 													shifting Goods from place to place within NPCT1;<br/>
 													</p>
 												</div>
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(c)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 													shifting Containers from place to place within any Vessel;<br/>
 													</p>
 												</div>
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(d)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 													shifting goods from NPCT1 to Depo Line 2;
 													</p>
 												</div>
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(e)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 													loading or unloading Dangerous Goods in containerised or breakbulk form;
 													<br/><br/>
 													</p>
 												</div>
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(f)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 													lashing/unlashing Goods;
 													</p>
 												</div>
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(g)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 													stowage planning of any Vessel;
 													</p>
 												</div>
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(h)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 													storing Goods in NPCT1;
 													</p>
 												</div>
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(i)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 													storing Goods classified by NPCT1 as Valuable Articles;<br/><br/>
 													</p>
 												</div>
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(j)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 													delivery of any Container; and
 													</p>
 												</div>
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(k)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 													pre-trip inspection of any Container.
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>1.1.18</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-12 col-md-12 col-sm-12 col-xm-12 point">
 													<p>
 														<b>“Penanganan Barang”</b> berarti semua atau salah satu
 layanan dan fasilitas di bawah ini yang disediakan oleh
 NPCT1 yang merupakan subyek dari Permohonan:
 													</p>
 												</div> 
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(a)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 													pemindahan Barang antara Kapal dan NPCT1;
 													</p>
 												</div>
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(b)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 													 pemindahan Barang dari satu tempat ke tempat lain dalam wilayah NPCT1;
 													</p>
 												</div>
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(c)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 													pemindahan Peti kemas dari satu tempat ke tempat lain di sekitar area Kapal;
 													</p>
 												</div>
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(d)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 													 pemindahan barang dari NPCT1 ke TPS Lini 2;
 													</p>
 												</div>
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(e)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 													 memuat atau membongkar Barang Berbahaya dalam bentuk peti kemas atau curah;
 													</p>
 												</div>
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(f)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 													mengikat/tidak mengikat Barang;
 													</p>
 												</div>
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(g)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 													rencana pengaturan peti kemas pada Kapal;
 													</p>
 												</div>
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(h)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 													penyimpanan Barang di NPCT1;
 													</p>
 												</div>
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(i)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 													penyimpanan Barang yang diklasifikasikan oleh NPCT1 sebagai Barang Berharga;
 													</p>
 												</div>
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(j)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 													pengiriman Peti Kemas; dan
 													</p>
 												</div>
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(k)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 													pra-pemeriksaan Peti Kemas
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 1.1.18 --->
 								
 								
 								
 								<!-- S:POINT 1.1.19 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>1.1.19</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<b>“IMO”</b> means the International Maritime Organization.
 											</p>
 										</div>
 									</div>
 								</div>
 								
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1"><p>1.1.19</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<b>“IMO”</b> berarti Organisasi Maritim Internasional
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 1.1.19 --->
 								
 								
 								
 								<!-- S:POINT 1.1.20 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>1.1.20</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<b>“Party”</b> means NPCT1 or the Customer.
 											</p>
 										</div>
 									</div>
 								</div>
 								
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1"><p>1.1.20</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<b>“Pihak”</b> berarti NPCT1 atau Pelanggan.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 1.1.20 --->
 								
 								
 								
 								<!-- S:POINT 1.1.21 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>1.1.21</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<b>“Personal Data Protection Act”</b> means all applicable laws,
 rules, regulations, regulatory requirements and code of
 practice on Personal Data Protection in the Republic of
 Indonesia, included but not limited to applicable laws, rules,
 regulations, regulatory requirements and code of practice on
 Personal Data Protection in the state, country or countries
 where personal data is collected or held or otherwise
 processed. 
 											</p>
 										</div>
 									</div>
 								</div>
 								
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1"><p>1.1.21</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<b>“Undang-Undang Perlindungan Data Pribadi”</b> berarti
 semua undang-undang, peraturan, ketentuan,
 persyaratan peraturan dan kode praktik tentang
 Perlindungan Data Pribadi yang berlaku di negara
 Republik Indonesia, termasuk namun tidak terbatas pada
 undang-undang, peraturan, ketentuan, persyaratan
 peraturan dan kode praktik tentang Perlindungan Data
 Pribadi yang berlaku di negara bagian, negara atau
 negara-negara dimana data pribadi tersebut
 dikumpulkan atau disimpan atau diproses. 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 1.1.21 --->
 								
 								
 								
 								<!-- S:POINT 1.1.22 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>1.1.22</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<b>“NPCT1”</b> means the party designated and/or defined as such
 in the Application, its successors and assigns.
 											</p>
 										</div>
 									</div>
 								</div>
 								
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1"><p>1.1.22</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<b>“NPCT1”</b> berarti pihak yang ditunjuk dan/atau yang
 ditetapkan seperti dalam Permohonan,
 penerus/pengganti dan perwakilannya.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 1.1.22 --->
 								
 								
 								<!-- S:POINT 1.1.23 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>1.1.23</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<b>“NPCT1 Safety Rules”</b> meansthe document titled as such and
 containing the rules set by NPCT1 from time to time
 governing the safety of activities and persons within
 NPCT1, the current edition of which has been made available
 to the Customer (which the Customer hereby acknowledges
 as having read and agreed to).
 											</p>
 										</div>
 									</div>
 								</div>
 								
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1"><p>1.1.23</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<b>“Peraturan Keselamatan NPCT1”</b> berarti dokumen
 dengan judul dan konten yang berisi peraturan yang
 diterapkan oleh NPCT1 dari waktu ke waktu, yang
 mengatur keselamatan dalam beraktivitas, termasuk
 keselamatan setiap orang yang berada di lingkungan
 NPCT1, yang berlaku saat ini dan tersedia bagi Pelanggan
 (untuk itu Pelanggan mengakui telah membaca dan
 menyetujui).
 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 1.1.23 --->
 								
 								
 								<!-- S:POINT 1.1.24 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>1.1.24</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<b>“NPCT1 Security Rules”</b> means the document titled as such
 and containing the rules set by NPCT1 from time to time
 governing the security of persons and property within the
 NPCT1, the current edition of which has been made
 available to the Customer (and which the Customer hereby
 acknowledges as having read and agreed to).
 											</p>
 										</div>
 									</div>
 								</div>
 								
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1"><p>1.1.24</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<b>“Peraturan Keamanan NPCT1”</b> berarti dokumen dengan
 judul dan konten yang berisi peraturan yang ditetapkan
 oleh NPCT1 dari waktu ke waktu yang mengatur
 keamanan setiap orang dan properti yang ada di
 lingkungan NPCT1, yang berlaku saat ini dan tersedia bagi
 Pelanggan (untuk itu Pelanggan mengakui telah
 membaca dan menyetujui).
 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 1.1.24 --->
 								
 								
 								<!-- S:POINT 1.1.25 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>1.1.25</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<b>“NPCT1 Tariff”</b> means the document titled as such and listing
 charges payable to NPCT1 from time to time for the use of
 the Services/Facilities, the current edition of which has been
 made available to the Customer and which the Customer
 hereby acknowledges as having read and agreed to.
 
 											</p>
 										</div>
 									</div>
 								</div>
 								
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1"><p>1.1.25</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												 <b>“Tarif NPCT1”</b> berarti dokumen yang memiliki judul yang
 sama atau daftar biaya yang dibayarkan ke NPCT1 dari
 waktu ke waktu, atas penggunaan Layanan/Fasilitas, di
 mana selalu tersedia edisi terbarunya untuk Para
 Pelanggan sehingga Pelanggan dianggap telah membaca
 dan menyetujuinya.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 1.1.25 --->
 								
 								<!-- S:POINT 1.1.26 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>1.1.26</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												 <b>“NPCT1 Terminal”</b> means all or any part of any land, place,
 structure or building in which the Services/Facilities shall be
 provided by NPCT1 irrespective of whether or not such land,
 place, structure, or building shall be owned, operated,
 managed or controlled by NPCT1, including any berth, jetty or
 wharf.
 											</p>
 										</div>
 									</div>
 								</div>
 								
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1"><p>1.1.26</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												 <b>“Terminal NPCT1”</b> berarti seluruh atau sebagian dari
 tanah, tempat, struktur atau bangunan di mana
 Layanan/Fasilitias yang harus disediakan oleh NPCT1,
 terlepas dari apakah benar atau tidaknya tanah, tempat,
 struktur atau bangunan tersebut harus dimiliki,
 dioperasikan, dikelola atau dikontrol oleh NPCT1,
 termasuk setiap dermaga (berth, jetty or wharf).
 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 1.1.26 --->
 								
 								<!-- S:POINT 1.1.27 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>1.1.27</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<b>“NPCT1 Traffic Rules”</b> means the document titled as such and
 containing the rules set by NPCT1 from time to time
 governing the movement, use and parking of vehicles within
 NPCT1, the current edition of which has been made
 available to the Customer (and which the Customer hereby
 acknowledges as having read and agreed to).
 											</p>
 										</div>
 									</div>
 								</div>
 								
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1"><p>1.1.27</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<b>“NPCT1 Traffic Rules”</b> berarti dokumen dengan judul dan
 konten yang berisi peraturan yang ditetapkan oleh NPCT1
 dari waktu ke waktu, yang mengatur lalu-lintas
 penggunaan ruang parker untuk kendaraan di lingkungan
 NPCT1, yang berlaku saat ini dan tersedia bagi Pelanggan
 (untuk itu Pelanggan mengakui telah membaca dan
 menyetujui).
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 1.1.27 --->
 								
 								<!-- S:POINT 1.1.28 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1"><p>1.1.28</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-12 col-md-12 col-sm-12 col-xm-12 paragraph">
 													<p>
 														<b>“Reefer Services”</b> means all or any of the following services
 and facilities provided by NPCT1 which are the subject of the
 Application:<br/>
 													</p>
 												</div>
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(a)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														connecting or disconnecting any refrigerated
  Container to or from power plugs in any reefer
  yard forming part of NPCT1;<br/><br/>
 
 													</p>
 												</div>
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(b)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														supplying electricity to any refrigerated Container and monitoring the temperature within the Container;
 
 													</p>
 												</div>
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(c)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														pre-trip inspection of any refrigerated Container
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1"><p>1.1.28</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-12 col-md-12 col-sm-12 col-xm-12 paragraph">
 													<p>
 														<b>“Layanan Reefer”</b> berarti seluruh atau salah satu dari
 layanan dan fasilitas berikut yang disediakan oleh NPCT1
 yang merupakan subyek dari Permohonan:
 													</p>
 												</div>
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(a)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														menyambungkan atau tidak menyambungkan setiap
 Peti Kemas dengan alat pendingin ke atau dari
 sakelar listrik yang ada di setiap lapangan reefer yang
 merupakan bagian dari NPCT1;
 													</p>
 												</div>
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(b)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														memasok listrik untuk setiap Peti Kemas dengan
 mesin pendingin dan memonitor suhu dalam Peti
 Kemas;
 													</p>
 												</div>
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(c)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														inspeksi awal atas setiap Peti Kemas dengan mesin
 pendingin.
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 1.1.28 --->
 								
 								<!-- S:POINT 1.1.29 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>1.1.29</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<b>“Related Companies”</b> means as to any Party, that NPCT1’s
 subsidiary, holding or other associated companies
 											</p>
 										</div>
 									</div>
 								</div>
 								
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1"><p>1.1.29</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<b>“Perusahaan Terkait”</b> berarti setiap pihak lain, yang
 merupakan anak perusahaan, perusahaan induk atau
 perusaahaan terkait lainnya dari NPCT1.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 1.1.29 --->
 								
 								<!-- S:POINT 1.1.30 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1"><p>1.1.30</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-12 col-md-12 col-sm-12 col-xm-12 paragraph">
 													<p>
 											<b>“Services”</b> means any service described as such in the
 Application and/or any operation, work or services
 performed or provided by NPCT1 in connection with Goods
 or a Vessel, including without limitation:
 													</p>
 												</div>
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(a)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 												Goods Handling;
 													</p>
 												</div>
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(b)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 												shifting or hauling of Vessel;
 													</p>
 												</div>
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(c)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 											surveyor inspection of any Goods and their
 contents to ascertain the nature and extent of
 any loss or damage of the same;
 													</p>
 												</div>
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(d)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 											distribution of power supply to any Vessel;
 													</p>
 												</div>
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(e)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 											supply of mechanical equipment and manpower
 for the lifting and moving of any Goods;
 													</p>
 												</div>
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(f)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 											Reefer Services; and
 													</p>
 												</div>
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(g)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 											Warehousing.
 
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1"><p>1.1.30</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-12 col-md-12 col-sm-12 col-xm-12 paragraph">
 													<p>
 											<b>“Layanan”</b> berarti setiap layanan yang telah dijelaskan
 dalam Permohonan dan/atau setiap operasional,
 pekerjaan atau jasa yang dilakukan atau disediakan oleh
 NPCT1 sehubungan dengan Barang atau Kapal, termasuk
 tanpa batasan:
 													</p>
 												</div>
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(a)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 												penanganan Barang;
 													</p>
 												</div>
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(b)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 												pemindahan atau pengangkutan dengan Kapal;
 													</p>
 												</div>
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(c)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 											surveyor melakukan pemeriksaan atas setiap Barang
 dan isinya untuk memastikan sifat dan tingkat
 kerugian atau kerusakan;
 													</p>
 												</div>
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(d)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 											penyaluran listrik ke setiap Kapal;
 													</p>
 												</div>
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(e)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 											Penyediaan peralatan mekanis dan tenaga kerja
 untuk proses pengangkatan dan pemindahan setiap
 Barang;
 													</p>
 												</div>
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(f)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 											Layanan Reefer; dan
 													</p>
 												</div>
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(g)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 											Pergudangan.
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 1.1.30 --->
 								
 								<!-- S:POINT 1.1.31 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>1.1.31</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<b>“Services/Facilities”</b> means the Services and/or the Facilities, as the case may be.
 											</p>
 										</div>
 									</div>
 								</div>
 								
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1"><p>1.1.31</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<b>“Layanan/Fasilitas”</b> berarti Layanan-layanan dan/atau Fasilitas-Fasilitas.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 1.1.31 --->
 								
 								<!-- S:POINT 1.1.32 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>1.1.32</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<b>“Valuable Articles”</b> means any article of extraordinary value
 											</p>
 										</div>
 									</div>
 								</div>
 								
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1"><p>1.1.32</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<b>“Barang Berharga”</b> berarti setiap barang yang memiliki nilai yang sangat tinggi.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 1.1.32 --->
 								
 								<!-- S:POINT 1.1.33 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>1.1.33</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<b>“Vessel”</b> means the vessel in respect of which any
 Service/Facilities is provided or to be provided under the
 Contract.
 											</p>
 										</div>
 									</div>
 								</div>
 								
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1"><p>1.1.33</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<b>“Kapal”</b> berarti kapal sehubungan dengan setiap
 Layanan/Fasilitas yang disediakan atau yang akan
 disedikan berdasarkan Kontrak
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 1.1.33 --->
 								
 								<!-- S:POINT 1.1.34 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>1.1.34</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<b>“Warehousing”</b> means all or any of the following services or
 facilities provided by NPCT1 and which are the subject of the
 Application such as provision of space, either open or
 covered, for the storage, loading, unloading, or inspection of
 any Goods
 											</p>
 										</div>
 									</div>
 								</div>
 								
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1"><p>1.1.34</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<b>“Pergudangan”</b> berarti seluruh atau sebagian dari
 layanan atau fasilitas berikut yang disediakan oleh NPCT1
 dan yang merupakan subyek dari Permohonan seperti
 penyediaan ruang terbuka atau tertutup, untuk
 penyimpanan, pemuatan, pembongkaran atau
 pemeriksaan atas setiap Barang.
 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 1.1.34 --->
 								
 								<!-- S:POINT 1.2 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>1.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>Interpretation</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>1.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>Penafsiran</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 1.2 --->
 								
 								<!-- S:POINT 1.2.1 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>1.2.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 Where the context so admits or requires, words denoting the
 singular include the plural and vice versa, and words denoting
 any gender include all genders.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>1.2.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Dalam hal konteks mengakui atau membutuhkan, katakata yang menunjukkan bentuk tunggal adalah termasuk
 bentuk jamak dan sebaliknya, dan kata-kata yang
 menunjukkan satu jenis adalah mencakup semua jenis.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 1.2.1 --->
 								
 								<!-- S:POINT 1.2.2 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>1.2.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-12 col-md-12 col-sm-12 col-xm-12 paragraph"><p>Unless expressly provided otherwise in the Contract:
 </p></div> 
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(a)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 these Conditions shall prevail in the event of any
 contradiction or inconsistency between any Condition
 and any other provision of the Contract; or
 
 													</p>
 												</div>
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(b)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 in the event of any other contradiction or inconsistency
 between any provision of the Contract (except the
 Conditions) and any other provision of the Contract, the
 provision with a later date shall prevail.
 
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>1.2.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-12 col-md-12 col-sm-12 col-xm-12 paragraph"><p>Kecuali secara tegas ditentukan lain dalam Kontrak:</p></div> 
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(a)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 Ketentuan ini berlaku dalam hal terjadi
 pertentangan atau inkonsistensi antara Ketentuan
 dan ketentuan lainnya dari Kontrak; atau<br/><br/>
 													</p>
 												</div>
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(b)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 dalam hal terjadi kontradiksi atau inkonsistensi
 antara suatu Ketentuan dalam Kontrak (kecuali
 Kondisi) dan ketentuan lain dari Kontrak, ketentuan
 dengan tanggal terbaru yang akan berlaku.
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 1.2.2 --->
 								
 								<!-- S:POINT 1.2.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>1.2.3</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 All agreements and undertakings on the part of either Party
 which comprise more than one person or entity shall be joint
 and several.
 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>1.2.3</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Seluruh perjanjian dan usaha atas bagian dari salah satu
 Pihak yang terdiri atas lebih dari satu orang atau badan,
 harus dibuat menjadi satu dan beberapa.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 1.2.3 --->
 								
 								<!-- S:POINT 1.2.4 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>1.2.4</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 All applications, orders, instructions, notices, requests,
 descriptions, directions, declarations, permissions, consents
 and all other communication under the Contract to be made
 or given to NPCT1 shall be made or given in writing or in a
 mode acceptable by NPCT1.
 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>1.2.4</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Semua aplikasi, perintah, instruksi, pemberitahuan,
 permohonan, deskripsi, petunjuk, deklarasi, izin,
 persetujuan dan komunikasi lainnya berdasarkan Kontrak
 yang akan dibuat atau diberikan kepada NPCT1 harus
 dibuat atau diberikan secara tertulis atau dalam format
 yang dapat diterima oleh NPCT1.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 1.2.4 --->
 								
 								<!-- S:POINT 1.2.5 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>1.2.5</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 Reference in the Contract to any statute includes a reference
 to such statute in force from time to time and any regulations
 or orders made under such statute.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>1.2.5</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Referensi dalam Kontrak untuk undang-undang
 manapun, termasuk referensi untuk undang-undang yang
 berlaku dari waktu ke waktu dan setiap peraturan atau
 perintah yang dibuat berdasarkan undang-undarng
 tersebut.
 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 1.2.5 --->
 								
 								<!-- S:POINT 1.2.6 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>1.2.6</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 If the whole or any part of any provision of the Contract shall
 be or become illegal, invalid or unenforceable for any reason
 whatsoever including by reason of any statutory provision or
 by reason of any decision of any Court or any other body or
 authority having jurisdiction over the Parties or the Contract,
 such whole or part of such provision shall be deemed to be
 deleted from the Contract Provided that if any such deletion
 substantially affects or alters the commercial basis of the
 Contract, the Parties shall negotiate in good faith to amend
 the provisions of the Contract where necessary or desirable
 in the circumstances.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>1.2.6</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Apabila seluruh atau sebagian dari ketentuan dalam
 Kontrak harus atau menjadi tidak sah, cacat atau tidak
 dapat diterapkan untuk alasan apapun, termasuk alasan
 ketentuan hukum atau keputusan Pengadilan atau Badan
 atau Otoritas lain yang memiliki yurisdiksi atas Para Pihak
 atau atas Kontrak, seluruh atau sebagian dari ketentuan
 tersebut harus dianggap akan dihapuskan dari Kontrak
 Hanya jika penghapusan tersebut secara substansial
 mempengaruhi atau mengubah Kontrak secara
 komersial, Para Pihak wajib melakukan negosiasi dengan
 itikad baik untuk mengubah ketentuan Kontrak di mana
 diperlukan atau diinginkan.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 1.2.6 --->
 								
 								<!-- S:POINT 1.2.7 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>1.2.7</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 The headings of the provisions of the Contract are for
 reference and the convenience of the Parties only and do not
 define, limit or enlarge the meaning, interpretation or scope
 of the provisions.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>1.2.7</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 Judul dari ketentuan-ketentuan dalam Kontrak adalah
 untuk referensi dan kenyamanan Para Pihak semata dan
 tidak akan menentukan, membatasi, atau memperluas
 arti, interpretasi maupun cakupan dari ketentuan.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 1.2.7 --->
 								
 								<!-- S:POINT 1.2.8 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>1.2.8</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 NPCT1 reserves the right to review, revise, amend or replace
 all or any part of these General Conditions and/or the specific
 conditions from time to time without notice. The prevailing
 version of these General Conditions and/or the specific
 conditions applicable from time to time may be found on:
 https://www.npct1.co.id.
 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>1.2.8</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												 NPCT1, dari waktu ke waktu tanpa pemberitahuan,
 berhak untuk meninjau, merevisi, mengubah atau
 mengganti seluruh atau sebagian dari Ketentuan Umum
 ini dan/atau ketentuan khusus. Edisi yang berlaku dari
 Ketentuan Umum ini dan/atau ketentuan khusus yang
 berlaku dari waktu ke waktu dapat ditemukan di:
 https://www.npct1.co.id.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 1.2.8 --->
 								
 							<!-- E:POINT 1 --->
 							
 							<!-------------------------- S:POINT 2 -------------------------->
 							
 							<!-- S:MODUL POINT --->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>2.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											CONTRACT
 										</b>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>2.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											KONTRAK
 										</b>
 									</div>
 								</div>
 							</div>
 							<!-- E:MODUL POINT 2 --->
 							
 								<!-- S:POINT 2.1 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>2.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>The Contract</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>2.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>Kontrak</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 2.1 --->
 								
 								
 								<!-- S:POINT 2.1.1 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>2.1.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												NPCT1 shall provide and the Customer shall accept the
 Services/Facilities during the Contract Period in consideration
 of the payment of the Contract Sum, all in accordance with
 the terms and conditions of the Contract.
 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>2.1.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												NPCT1 harus menyediakan dan Pelanggan harus
 menerima Layanan/Fasilitas selama Periode Kontrak
 dengan pertimbangan bahwa pembayaran Nilai Kontrak,
 seluruhnya sesuai dengan syarat dan ketentuan dalam
 Kontrak.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 2.1.1 --->
 								
 								
 								<!-- S:POINT 2.1.2 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>2.1.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 											Any undertaking by NPCT1 under the Contract to do any act
 may be carried out by its authorised employees, agents or
 contractors, and all protection from liability afforded to
 NPCT1 by the Contract in respect of such acts or omissions
 shall also be afforded to such persons to which end NPCT1
 contracts on the Contract on its own behalf and as agent for
 and trustee for the benefit of its employees and contractors.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>2.1.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Setiap usaha yang dilakukan oleh NPCT1 berdasarkan
 Kontrak untuk melakukan tindakan apapun yang dapat
 dilakukan oleh Karyawan, agen atau kontraktor dari
 NPCT1 yang berwenang, dan semua perlindungan dari
 kewajiban yang diberikan kepada NPCT1 sesuai dengan
 Kontrak, sehubungan dengan tindakan atau kelalaian
 harus diberikan kepada orang-orang tersebut yang mengakibatkan berakhirnya kontrak NPCT1 atas Kontrak
 atas namanya sendiri dan atas agen atau perwakilan
 untuk kepentingan karyawan dan kontraktor.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 2.1.2 --->
 								
 								
 								<!-- S:POINT 2.2 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>2.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														<u>Early Termination</u>
 													</p>
 											<div class="row">
 												<div class="col-lg-12 col-md-12 col-sm-12 col-xm-12 paragraph">
 													<p>
 														Notwithstanding the other provisions of the Contract, NPCT1
 														may terminate the Contract forthwith at any time without
 														any claim or charge by the Customer if NPCT1 deems it
 														necessary to do so for the protection of its legal, commercial
 														and/or financial position and below reasons included but not
 														limited to:<br/><br/><br/>
 													</p>
 												</div>
 													<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(a)</p></div> 
 													<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 														<p>
 															if the Customer shall fail to observe or perform any
 															of its obligations under the Contract and shall not
 															remedy its failure within a reasonable time after NPCT1
 															has notified the Customer of such failure;<br/><br/>
 														</p>
 													</div>
 													
 													<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(b)</p></div> 
 													<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 														<p>
 															if NPCT1 shall be of the opinion that the presence of the
 															Goods at NPCT1 may lead to any Claim against NPCT1,
 															its employee or agents; and/or<br/><br/>
 														</p>
 													</div>
 													
 													<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(c)</p></div> 
 													<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 														<p>
 															if NPCT1 shall be prevented from providing the
 															Services/Facilities or if the Services/Facilities shall
 															become unsuitable in any way for use due to any Force
 															Majeure.
 														</p>
 													</div>
 													
 												
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>2.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														<u>Pemutusan Awal</u>
 													</p>
 											<div class="row">
 												<div class="col-lg-12 col-md-12 col-sm-12 col-xm-12 paragraph">
 													<p>
 														Tanpa mengurangi ketentuan lain yang terdapat dalam
 Kontrak, NPCT1 dapat mengakhiri Kontrak setiap saat
 tanpa mendapatkan tuntutan dan pembebanan biaya
 dari Pelanggan apabila NPCT1 memandang perlu untuk
 melakukan pengakhiran Kontrak tersebut demi untuk
 perlindungan hukum, kedudukan komersial dan/atau
 keuangan, dan dibawah ini adalah yang termasuk alasanalasannya, akan tetapi tidak terbatas pada:
 													</p>
 												</div>
 													<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(a)</p></div> 
 													<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 														<p>
 															Jika Pelanggan gagal dalam mematuhi atau
 melaksanakan kewajibannya berdasarkan Kontrak
 dan tidak dapat memperbaiki kegagalannya dalam
 waktu yang wajar, setelah NPCT1 mengirimkan
 pemberitahuan kepada Pelanggan tentang kegagalan
 tersebut;
 														</p>
 													</div>
 													
 													<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(b)</p></div> 
 													<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 														<p>
 															Jika NPCT1 berpendapat bahwa
 kehadiran/keberadaan Barang di NPCT1 dapat
 menimbulkan klaim terhadap NPCT1, karyawan atau
 agen dari NPCT1; dan/atau
 
 														</p>
 													</div>
 													
 													<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(c)</p></div> 
 													<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 														<p>
 															Jika NPCT1 akan terhalangi dalam menyediakan
 Layanan/Fasilitas atau jika Layanan/Fasilitas menjadi
 tidak sesuai dengan cara apapun untuk digunakan
 sebagai akibat Keadaan Kahar.
 
 														</p>
 													</div>
 													
 												
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 2.2 --->
 							<!-------------------------- E:POINT 2 -------------------------->
 							
 							
 							
 							<!-------------------------- E:POINT 3 -------------------------->
 							<!-- S:MODUL POINT --->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>3.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											FACILITIES
 										</b>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>3.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											FASILITAS
 										</b>
 									</div>
 								</div>
 							</div>
 							<!-- E:MODUL POINT 3 --->
 							
 							<!-- S:POINT 3.1 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>3.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-12 col-md-12 col-sm-12 col-xm-12 paragraph">
 													<p>
 														<u>Selection by NPCT1</u>
 													</p>
 												</div>
 												<div class="col-lg-12 col-md-12 col-sm-12 col-xm-12 paragraph">
 													<p>
 														Unless expressly provided otherwise in the Contract, NPCT1
 shall allocate the Facilities in its absolute discretion.
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>3.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-12 col-md-12 col-sm-12 col-xm-12 paragraph">
 													<p>
 														<u>Pemilihan oleh NPCT1</u>
 													</p>
 												</div>
 												<div class="col-lg-12 col-md-12 col-sm-12 col-xm-12 paragraph">
 													<p>
 														Kecuali secara tegas ditentukan lain dalam Kontrak,
 NPCT1 memiliki kewenangan mutlak mengalokasikan
 Fasiltas
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 3.1 --->
 								
 								
 								<!-- S:POINT 3.2 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>3.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-12 col-md-12 col-sm-12 col-xm-12 paragraph">
 													<p>
 														<u>Replacement Facilities
 </u>
 													</p>
 												</div>
 												<div class="col-lg-12 col-md-12 col-sm-12 col-xm-12 paragraph">
 													<p>
 														If the Facilities shall become damaged or destroyed or shall
 become unfit for use due to the wilful intent or recklessness
 of NPCT1, NPCT1 shall use its best endeavours to make other
 facilities available for the Customer's use in replacement for
 the Facilities.
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>3.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-12 col-md-12 col-sm-12 col-xm-12 paragraph">
 													<p>
 														<u>Penggantian Fasilitas</u>
 													</p>
 												</div>
 												<div class="col-lg-12 col-md-12 col-sm-12 col-xm-12 paragraph">
 													<p>
 														Jika Fasilitas akan menjadi rusak atau hancur atau menjadi
 tidak layak untuk digunakan dikarenakan adanya maksud
 yang disengaja atau dikarenakan kecerobohan NPCT1,
 maka NPCT1 akan melakukan upaya terbaiknya untuk
 menyediakan fasilitas lain yang dapat digunakan oleh
 Pelanggan sebagai penggantinya.
 
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 3.2 --->
 							<!-------------------------- E:POINT 3 -------------------------->
 							
 							
 							<!-------------------------- S:POINT 4 -------------------------->
 							<!-- S:MODUL POINT --->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>4.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											INFORMATION RELATING TO GOODS
 										</b>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>4.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											INFORMASI TERKAIT BARANG
 										</b>
 									</div>
 								</div>
 							</div>
 							<!-- E:MODUL POINT 3 --->
 							
 							
 								<!-- S:POINT 4.1 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>4.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>General</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>4.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>Umum</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 4.1 --->
 								
 								<!-- S:POINT 4.1.1 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>4.1.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												The Customer shall on or before the delivery of any Goods to
 												NPCT1 and within timelines stipulated by NPCT1, provide, or
 												procure to be provided on its behalf, all information as may
 												be necessary for the safe, proper and efficient handling
 												of the Goods including all information as may be required
 												by NPCT1 such as:
 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>4.1.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Pelanggan, sebelum atau pada waktu pengiriman Barang
 												ke NPCT1 maupun dalam jangka waktu yang ditentukan
 												oleh NPCT1, atas nama Pelanggan sendiri, harus
 												menyediakan atau memberikan seluruh informasi yang
 												diperlukan dalam hal penanganan Barang yang aman,
 												tepat dan efisien, termasuk informasi yang diperlukan
 												NPCT1 seperti:
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 4.1.1 --->
 								
 								
 								<!-- S:POINT 4.1.1 a --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p></p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(a)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														information of the physical properties of the Goods;
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(a)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														informasi tentang sifat fisik Barang;
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 4.1.1 a --->
 								
 								<!-- S:POINT 4.1.1 b --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p></p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(b)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														information knowledge of which are or may be of importance to NPCT1;
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(b)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														informasi yang penting atau yang dianggap penting bagi NPCT1;
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 4.1.1 b --->
 								
 								
 								<!-- S:POINT 4.1.1 c --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p></p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(c)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														information necessary for the compliance with Applicable Laws; and 
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(c)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														informasi yang diperlukan demi kepatuhan terhadap peraturan perundang-undangan yang Berlaku; dan
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 4.1.1 c --->
 								
 								
 								
 								<!-- S:POINT 4.1.1 d --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p></p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(d)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														information which is of such a nature that the Contract
 														 would not have been entered into on the same
 														 conditions, if NPCT1 had knowledge of those particulars
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(d)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														informasi yang bersifat sedemikian rupa sehingga
 														 Kontrak tidak akan berlaku atau mungkin tidak akan
 														 berlaku sesuai ketentuan yang sama, jika NPCT1
 														 memiliki informasi tentang rincian tersebut.
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 4.1.1 d --->
 								
 								
 								
 								<!-- S:POINT 4.1.2 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>4.1.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												NPCT1 shall not be deemed to have knowledge such
 												 information relating to the Goods, if the information referred
 												 to in <b>Condition 4.1.1</b> is incomplete or incorrect. NPCT1 shall
 												 be entitled, in its absolute discretion, to rely on and accept,
 												 prima facie, any information communicated to and received
 												 by NPCT1 pursuant to <b>Condition 4.1.1</b>.
 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>4.1.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												NPCT1 tidak akan dianggap memiliki informasi tentang
 												 hal-hal yang berkaitan dengan Barang, apabila informasi
 												 yang dimaksud sebagaimana <b>Ketentuan 4.1.1</b> adalah
 												 tidak lengkap atau tidak benar. NPCT1 memiliki hak
 												 secara mutlak untuk mengandalkan dan menerima,
 												 prima facie, setiap informasi yang dikomunikasikan dan
 												 diterima oleh NPCT1 sesuai dengan <b>Ketentuan 4.1.1</b>.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 4.1.2 --->
 								
 								
 								
 								<!-- S:POINT 4.1.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>4.1.3</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Customer hereto acknowledges and agrees that NPCT1 may
 												 share any information provided by the Customer concerning
 												 the Goods, as referred to in Condition 4.1.1 with external
 												 truck market place application operated by any other third
 												 party, through ECON, for the purpose of the Customer to be
 												 able to access ECON through such external truck market place
 												 application.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>4.1.3</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Pelanggan mengakui dan menyetujui bahwa NPCT1 dapat
 												 berbagi informasi yang diberikan oleh Pelanggan tentang
 												 Barang, sebagaimana dimaksud dalam Ketentuan 4.1.1,
 												 dengan aplikasi eksternal truck market place yang
 												 dioperasikan oleh pihak ketiga, melalui ECON, untuk
 												 tujuan agara Pelanggan dapat meng-akses ECON melalui
 												 aplikasi eksternal truck market place.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 4.1.3 --->
 								
 								
 								
 								
 								<!-- S:POINT 4.1.4 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>4.1.4</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Notwithstanding any other provision in this Contract,
 												 Customer acknowledges and agrees that during and after the
 												 Term, NPCT1 and its Related Companies may collect and use
 												 Data and Derived Data (including reproducing, developing,
 												 modifying, transforming, creating derivative matter from,
 												 summarizing, aggregating, anonymizing, customizing,
 												 monitoring, analyzing, improving, disclosing, distributing,
 												 selling, re-selling, sublicensing, storing and archiving such
 												 Data and Derived Data) for internal and/or other business
 												 purposes including provision of services, market research,
 												 service enhancement, security and risk management and
 												 legal compliance. If NPCT1 and its Related Companies shall
 												 use any Data and Derived Data for any purpose or in any
 												 manner not materially contemplated by the foregoing, NPCT1
 												 will notify Customer to extent practicably. Under no
 												 circumstances shall NPCT1 bear any liability for any claims or
 												 losses arising out of the use or disclosure of Data for the
 												 purposes contemplated under this Contract.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>4.1.4</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Tanpa mengesampingkan ketentuan lain dalam Kontrak
 												 ini, Pelanggan mengakui dan menyetujui bahwa selama
 												 maupun setelah Jangka Waktu Kontrak, NPCT1 dan
 												 Perusahaan Terkait dapat mengumpulkan dan
 												 menggunakan Data dan Data Turunan (termasuk
 												 mereproduksi, mengembangkan, memodifikasi,
 												 mengubah, menciptakan data turunan darinya,
 												 meringkas, mengumpulkan, menganonimkan,
 												 menyesuaikan, memantau, menganalisis, meningkatkan,
 												 mengungkapkan, mendistribusikan, menjual, menjual
 												 kembali, mensub-lisensikan, menyimpan dan
 												 mengarsipkan Data dan Data Turunan tersebut), untuk
 												 keperluan usaha secara internal dan/atau tujuan usaha
 												 lainnya termasuk layanan, riset pasar, peningkatan
 												 layanan, keamanan dan manajenemen risiko serta
 												 kepatuhan hukum. Jika NPCT1 dan Perusahaan Terkait
 												 akan menggunakan Data dan Data Turunan untuk tujuan
 												 atau dengan cara apapun yang tidak secara material
 												 terkait dengan hal-hal tersebut di atas, NPCT1 akan
 												 memberitahu Pelanggan sejauh mungkin secara praktis.
 												 Dalam siatuasi apapun, NPCT1 tidak akan bertanggung
 												 jawab atas segala klaim atau kerugian yang timbul dari
 												 penggunaan atau pengungkapan Data untuk tujuan
 												 sebagaimana yang dimaksud dalam Kontrak ini.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 4.1.4 --->
 								
 								
 								<!-- S:POINT 4.1.5 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>4.1.5</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												NPCT1 shall be entitled, at any time, to inspect, weigh and/or
 												 test the Goods and do any acts necessary for this purpose.
 												 Costs arising therefrom, as determined by NPCT1, shall be
 												 borne by the Customer if the inspection, weighing and/or
 												 testing:
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>4.1.5</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												NPCT1 berhak setiap saat untuk melakukan pemeriksaan,
 												 penimbangan dan/atau pengujian Barang dan tindakan
 												 lain yang diperlukan untuk tujuan ini. Biaya yang timbul
 												 daripadanya, sebagaimana ditentukan oleh NPCT1, akan
 												 menjadi tanggungan Pelanggan, apabila pemeriksaan,
 												 penimbangan dan/atau pengujian tersebut: 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 4.1.5 --->
 								
 
 								<!-- S:POINT 4.1.5 a --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p></p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(a)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														shows that the information provided in respect of the Goods is incomplete and/or inaccurate;
 
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(a)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														menunjukkan bahwa informasi yang diberikan terkait Barang adalah tidak lengkap dan/atau tidak akurat;
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 4.1.5 a --->
 								
 								<!-- S:POINT 4.1.5 b --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p></p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(b)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														is requested by the Customer and/or any competent authority; or
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(b)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														diminta oleh Pelanggan dan/atau otoritas yang berwenang; atau
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 4.1.5 b --->
 								
 								<!-- S:POINT 4.1.5 c --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p></p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(c)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														is conducted by NPCT1 to comply with any law or regulation or IMO requirement. 
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(c)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														dilakukan oleh NPCT1 untuk mematuhi hukum atau peraturan atau persyaratan IMO.
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 4.1.5 c --->
 								
 								
 								
 								<!-- S:POINT 4.1.6 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>4.1.6</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												NPCT1 may accept delivery of the Goods notwithstanding
 												 NPCT1’s knowledge of any incorrect or incomplete
 												 information relating to the Goods and in that event:
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>4.1.6</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												NPCT1 dapat menerima pengirman Barang meskipun
 												 NPCT1 mengetahui adanya informasi yang tidak sesuai
 												 atau tidak lengkap terkait dengan Barang dan dalam hal:
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 4.1.6 --->
 								
 
 								<!-- S:POINT 4.1.6 a --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p></p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(a)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														the Customer shall bear the risk and expense of any
 necessary or desirable measures carried out by NPCT1
 in respect of the Goods arising from such incorrect or
 incomplete information and indemnify NPCT1 against
 all Claims made by NPCT1, its employees or agents, or
 any third party arising from such measures; and
 
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(a)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														Pelanggan harus menanggung risiko dan biaya atas
 setiap tindakan yang diperlukan atau diinginkan
 untuk dilakukan oleh NPCT1 sehubungan dengan
 Barang, yang timbul akibat informasi yang tidak
 sesuai atau tidak lengkap tersebut, dan mengganti
 kerugian NPCT1 atas setiap Klaim yang diajukan oleh
 NPCT1, karyawan atau agen NPCT1, ataupun pihak
 ketiga, yang timbul akibat tindakan yang diambil
 tersebut; dan
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 4.1.6 a --->
 								
 								<!-- S:POINT 4.1.6 b --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p></p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(b)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														NPCT1 shall not be liable for any Claim arising from
 NPCT1’s acceptance of delivery of the Goods.
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(b)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														NPCT1 tidak bertanggung jawab atas Klaim yang
 timbul akibat penerimaan NPCT1 atas pengiriman
 Barang. 
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 4.1.6 b --->
 								
 								
 								
 								
 								<!-- S:POINT 4.1.7 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>4.1.7</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												NPCT1 shall be entitled to refuse to accept delivery of the
 												 Goods or refuse to provide any Services/Facilities in respect
 												 thereof, without responsibility for any loss or any liability,
 												 consequential or otherwise, if in the opinion of NPCT1:
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>4.1.7</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												NPCT1 berhak untuk menolak mengirimkan Barang atau
 												 menolak untuk menyediakan Layanan/Fasilitas dalam hal
 												 tersebut, tanpa perlu bertanggung jawab atas setiap
 												 kerugian atau kewajiban apapun, akibat yang timbul atau
 												 sebaliknya, apabila menurut NPCT1:
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 4.1.7 --->
 								
 
 								<!-- S:POINT 4.1.7 a --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p></p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(a)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														the Goods do not conform with the information
 provided by the Customer under <b>Condition 4.1.1</b>;
 
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(a)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														Barang tidak sesuai dengan informasi yang diberikan
 oleh Pelanggan sesuai yang diatur dalam <b>Ketentuan 4.1.1</b>;
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 4.1.7 a --->
 								
 								<!-- S:POINT 4.1.7 b --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p></p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(b)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														the Goods are delivered in an apparently damaged or
 defective condition; or
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(b)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														Barang dikirimkan dalam kondisi yang tampaknya
 rusak atau cacat; atau
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 4.1.7 b --->
 								
 								<!-- S:POINT 4.1.7 c --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p></p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(c)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														the provision of such Services/ Facilities may lead to a
 Claim against NPCT1, its employees or agents.
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(c)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														penyediaan Layanan/Fasilitas yang dapat
 menimbulkan Klaim terhadap NPCT1, karyawan dan
 agen NPCT1.
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 4.1.7 c --->
 								
 								
 								
 								
 								<!-- S:POINT 4.1.8 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>4.1.8</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												NPCT1 shall be entitled to require payment from the
 Customer of any cost or expense incurred by NPCT1 in respect
 of the Services /Facilities provided prior to NPCT1’s refusal to
 accept delivery of the Goods pursuant to <b>Condition 4.1.7</b>.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>4.1.8</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												NPCT1 berhak untuk meminta pembayaran dari
 Pelanggan atas setiap biaya dan pengeluaran yang
 dikeluarkan oleh NPCT1 sehubungan dengan
 Layanan/Fasilitas yang disediakan sebelum penolakan
 NPCT1 untuk menerima pengiriman Barang, sesuai
 dengan <b>Ketentuan 4.1.7</b>.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 4.1.8 --->
 								
 								
 								<!-- S:POINT 4.1.9 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>4.1.9</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												The Customer shall be liable to NPCT1 for and shall indemnify
 NPCT1 against all Claims suffered by or made against NPCT1,
 its employees or agents arising from any incorrect or
 incomplete description, statement, indication, information,
 notice, direction or instruction made or given by the
 Customer to NPCT1, in addition to the costs payable by the
 Customer under <b>Condition 4.1.5</b>.
 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>4.1.9</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Pelanggan bertanggung jawab mengganti kerugian
 kepada NPCT1 atas setiap Klaim yang ditujukan atau
 diajukan kepada NPCT1, karyawan atau agen NPCT1, yang
 timbul akibat penjelasan, pernyataan, indikasi, informasi,
 pemberitahuan, petunjuk atau instruksi yang tidak sesuai
 atau tidak lengkap, yang dibuat atau diberikan oleh
 Pelanggan kepada NPCT1, di luar kewajiban pembayaran
 oleh Pelanggan sesuai <b>Ketentuan 4.1.5</b>.
 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 4.1.9 --->
 								
 								
 								
 								
 								<!-- S:POINT 4.2 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>4.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>For Duties, Taxes and Charges</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>4.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>Bea, Pajak dan Biaya</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 4.2 --->
 								
 								<!-- S:POINT 4.2.1 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>4.2.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												For Goods subject (or that may be subject) to duties, taxes or
 other charges by the competent authorities, the Customer
 shall, reasonably in advance, provide to NPCT1 all information
 required of NPCT1 by such authorities in respect of such
 Goods. 
 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>4.2.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Terhadap Barang yang dikenakan (atau yang dapat
 dikenakan) bea, pajak atau biaya lain oleh otoritas yang
 berwenang, Pelanggan harus, selayaknya di awal,
 memberikan kepada NPCT1 seluruh informasi yang
 diminta oleh otoritas yang berwenang tersebut
 sehubungan dengan Barang.
 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 4.2.1 --->
 								
 								<!-- S:POINT 4.2.2 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>4.2.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												The Customer shall be liable for and indemnify NPCT1 against
 any Claim, penalties, taxes or duties suffered or payable by
 NPCT1 arising from any delay in or complete or partial failure
 to provide the required information and/or documents. 
 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>4.2.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Pelanggan bertanggung jawab mengganti kerugian
 kepada NPCT1 atas setiap Klaim, denda, pajak atau bea
 yang ditanggung dan dibayar oleh NPCT1 yang timbul
 akibat keterlambatan atau kegagalan dalam memberikan
 informasi dan/atau dokumen yang diminta secara
 lengkap maupun sebagian.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 4.2.2 --->
 								
 								<!-- S:POINT 4.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>4.3</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												The Customer shall not deposit any arms, explosives or
 Dangerous Goods with NPCT1 unless NPCT1 has provided
 written agreement to the same. 
 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>4.3</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Pelanggan dilarang untuk menyimpan senjata, bahan
 peledak atau Barang Berbahaya di NPCT1, kecuali NPCT1
 telah memberikan persetujuan tertulis untuk hal
 tersebut.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 4.3 --->
 								
 								
 							<!-------------------------- E:POINT 4 -------------------------->
 							
 							
 							<!-------------------------- S:POINT 5 -------------------------->
 							<!-- S:MODUL POINT --->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>5.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											TRANSPORTATION, PACKING MATERIALS AND CONTAINERS
 										</b>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>5.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											SARANA PENGANGKUTAN, MATERIAL KEMASAN DAN PETI KEMAS
 										</b>
 									</div>
 								</div>
 							</div>
 							<!-- E:MODUL POINT --->
 							
 							
 							
 							
 							<!-- S:POINT 5.1 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>5.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Standards
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>5.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Standar
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 5.1 --->
 								
 								<!-- S:POINT 5.1 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												The Customer shall ensure at all times that the means of
 transportation, packing materials and containers and their
 accessories used in the delivery of the Goods to NPCT1 shall
 be in a sound, clean, tight and staunch condition, fit for use in
 respect of the Goods and in compliance with the
 requirements of the competent authorities. NPCT1 will not be
 liable for any Claim arising from such standards not being met
 and the Customer shall indemnify NPCT1 against such Claim.
 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Pelanggan harus memastikan setiap saat bahwa sarana
 pengangkutan, material kemasan, dan peti kemas
 termasuk aksesorinya, yang digunakan dalam pengiriman
 Barang ke NPCT1 harus selalu dalam keadaan baik, bersih,
 rapi dan kokoh, tepat untuk digunakan sesuai dengan
 Barang dan sesuai dengan persyaratan dari otoritas yang
 berwenang. NPCT1 tidak akan bertanggung jawab
 terhadap Klaim apapun yang timbul akibat standar yang
 telah ditetapkan tidak terpenuhi dan Pelanggan harus
 mengganti kerugian kepada NPCT1 atas Klaim tersebut.
 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 5.1 --->
 								
 								
 								<!-- S:POINT 5.2 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>5.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Inspection
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>5.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Pemeriksaan
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 5.2 --->
 								
 								<!-- S:POINT 5.2 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 											NPCT1 shall be entitled at any time on, before or after
 accepting delivery of the Goods, to open, weigh, measure,
 test or examine such means of transportation, packing
 materials and containers for the purposes of inspection.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 											NPCT1 berhak setiap saat, sebelum maupun setelah
 menerima pengiriman Barang, untuk membuka,
 menimbang, mengukur, menguji atau memeriksa sarana
 pengangkutan, material kemasan dan peti kemas untuk
 tujuan pemeriksaan.
 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 5.2 --->
 								
 								
 								
 								<!-- S:POINT 5.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>5.3</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Refusal to Accept Delivery
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>5.3</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Penolakan Penerimaan Pengiriman
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 5.3 --->
 								
 								<!-- S:POINT 5.2 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 											If in the opinion of NPCT1, such means of transportation,
 packing materials or containers are not as that described in
 <b>Condition 5.1</b>, NPCT1 is entitled to refuse to accept delivery
 of the Goods and/or remove or require immediate removal
 of the Goods at the risk and expense of the Customer.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 											Apabila menurut NPCT1, sarana pengangkutan, material
 kemasan atau peti kemas tidak seperti yang ditetapkan
 dalam <b>Ketentuan 5.1</b>, NPCT1 berhak untuk menolak
 menerima pengiriman Barang dan/atau memindahkan
 atau mengharuskan pemindahkan Barang dengan segera,
 di mana risiko dan biaya yang timbul adalah menjadi
 tanggung jawab Pelanggan.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 5.2 --->
 							<!-------------------------- E:POINT 5 -------------------------->
 							
 							
 							<!-------------------------- S:POINT 6 -------------------------->
 							<!-- S:MODUL POINT --->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>6.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											GENERAL CONDITION ON ARRIVAL
 										</b>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>6.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											KETENTUAN UMUM TERKAIT KEDATANGAN
 										</b>
 									</div>
 								</div>
 							</div>
 							
 							
 							<!-- S:POINT 6.1 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>6.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Acceptance of Delivery Not Proof of Condition
 
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>6.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Penerimaan Pengiriman yang Tidak Memiliki Bukti Atas Kondisinya
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.1 --->
 								
 								<!-- S:POINT 6.1 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 											Any acceptance of delivery of the Goods by NPCT1 shall be
 											without prejudice to <b>Condition 5</b> and shall not constitute
 											proof that the Goods were delivered in a good and
 											undamaged condition or that the means of transportation,
 											packing materials or containers used in respect thereof
 											conformed with the requirements of <b>Condition 5</b>.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 											Setiap penerimaan atas pengiriman Barang oleh NPCT1,
 											tanpa mengurangi ketentuan dalam <b>Ketentuan 5</b> dan
 											bukan merupakan bukti bahwa Barang yang dikirimkan
 											adalah dalam kondisi baik dan tidak rusak atau bahwa
 											sarana pengangkutan, material kemasan atau peti kemas
 											yang digunakan untuk hal tersebut telah sesuai dengan
 											persyaratan yang ditetapkan dalam <b>Ketentuan 5</b>.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.1 --->
 								
 								<!-- S:POINT 6.2 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>6.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Notice of Damage, Defect or Deterioration
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>6.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Pemberitahuan Kerusakan, Cacat dan Kehancuran
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.2 --->
 								
 								<!-- S:POINT 6.2 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 											NPCT1 shall, as soon as practicable, notify the Customer of
 any damage or defect of the Goods or of such means of
 transportation, materials or containers which is apparent at
 the time of delivery thereof but the Customer shall not make
 any Claim against NPCT1, its employees or agents by reason
 of the fact that it has not been so notified.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 											NPCT1 harus, dengan segera, memberitahukan
 Pelanggan atas setiap kerusakan atau cacat atas Barang
 atau sarana pengangkutan, material atau peti kemas yang
 jelas terlihat pada saat pengiriman, namun Pelanggan
 tidak dapat mengajukan Klaim apapun kepada NPCT1,
 karyawan atau agen NPCT1 dengan alasan tidak adanya
 pemberitahuan atas hal tersebut.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.2 --->
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>6.3</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Remedial Measures
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>6.3</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Langkah-Langkah untuk Perbaikan
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 											NPCT1 shall be entitled, at the expense of the Customer, to
 do all things deemed by NPCT1 to be necessary to remedy
 such damage or defect or to prevent or reduce further
 damage, defect or deterioration in the condition of the Goods
 or of such means of transportation, materials or containers
 and to arrange for a report to be made on the condition of
 the Goods or of such means, materials or containers without
 being liable for any Claim arising from doing such things and
 the Customer shall indemnify NPCT1, its employees and
 agents against such Claim.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 											NPCT1 berhak, atas biaya Pelanggan, melakukan semua
 tindakan yang dianggap perlu dilakukan untuk
 memperbaiki kerusakan atau cacat atau untuk mencegah
 atau mengurangi kerusakan, cacat atau kehancuran yang
 lebih parah atas kondisi Barang atau alat pengangkutan,
 material atau peti kemas dan untuk membuat laporan
 atas kondisi Barang atau material atau peti kemas tanpa
 menjadi bertanggung jawab atas setiap Klaim yang timbul
 dari tindakan tersebut, dan Pelanggan wajib mengganti
 kerugian kepada NPCT1, karyawan dan agen NPCT1 atas
 Klaim tesebut.
 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 							<!-------------------------- E:POINT 6 -------------------------->
 							
 							
 							<!-------------------------- S:POINT 7 -------------------------->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>7.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											DELIVERY OR RE-DELIVERY
 										</b>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>7.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											PENGIRIMAN ATAU PENGIRIMAN KEMBALI
 										</b>
 									</div>
 								</div>
 							</div>
 							
 							<!-- S:POINT 7.1 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>7.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Point of Delivery to NPCT1
 
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>7.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Titik Lokasi Pengiriman ke NPCT1
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 7.1 --->
 								
 								<!-- S:POINT 7.1 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 											The Goods shall be deemed to have been delivered to NPCT1
 at the Facilities immediately after the Goods have been
 unloaded from a Vessel or a vehicle at the Facilities or NPCT1,
 as the case may be.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 											Barang akan dianggap telah dikirimkan ke NPCT1 di
 Bagian Fasilitas, segera setelah Barang dibongkar dari
 Kapal atau kendaraan di Bagian Fasilitas atau di NPCT1.
 
 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 7.1 --->
 								
 								<!-- S:POINT 7.2 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>7.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Point of Re-Delivery to Customer
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>7.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Titik Lokasi untuk Pengiriman Kembali kepada Pelanggan
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 7.2 --->
 								
 								<!-- S:POINT 7.2 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 											The Goods shall be deemed to have been re-delivered to the
 Customer from the Facilities or NPCT1, immediately after
 such Goods are loaded onto or into the Vessel or vehicle [or
 re-delivery accepted by the Customer whether expressly or
 by conduct at NPCT1].
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 											Barang akan dianggap telah dikirim ulang kepada
 Pelanggan dari Bagian Fasilitas atau dari NPCT1, segera
 setelah Barang tersebut dimuat ke atau di Kapal atau
 kendaraan [atau pengiriman kembali diterima oleh
 Pelanggan secara langsung atau dilakukan di NPCT1].
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 7.2 --->
 								
 								<!-- S:POINT 7.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>7.3</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Time and Date To Be Notified
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>7.3</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Pemberitahuan Waktu dan Tanggal
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 7.3 --->
 								
 								<!-- S:POINT 7.3.1 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>7.3.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 											The Customer shall agree with NPCT1 the time and date when
 the Goods shall be delivered to NPCT1 or re-delivered to the
 Customer.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>7.3.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 											Pelanggan harus setuju dengan NPCT1 mengenai waktu
 dan tanggal Barang akan dikirimkan ke NPCT1 atau
 dikirimkan ulang ke Pelanggan.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 7.3.1 --->
 								
 								<!-- S:POINT 7.3.2 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>7.3.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 											If the Goods shall not be delivered or taken re-delivery of at
 the times and dates agreed under <b>Condition 7.3.1</b>:
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>7.3.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 											Apabila Barang tidak harus dikirimkan atau dikirimkan
 kembali pada waktu dan tanggal sebagaimana disetujui
 berdasarkan <b>Ketentuan 7.3.1</b>:
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 7.3.2 --->
 								
 								<!-- S:POINT 7.3.2 a --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(a)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 													the Customer shall be liable for any Claim suffered by
 													 NPCT1, its employees and agents arising therefrom and
 													 indemnify NPCT1, its employees and agents against
 													 such Claim; and	
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(a)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														Pelanggan harus bertanggung jawab atas setiap
 														 Klaim yang ditujukan ke NPCT1, karyawan dan agen
 														 NPCT1 atas hal tersebut dan mengganti kerugian
 														 yang diderita oleh NPCT1, karyawan dan agen NPCT1
 														 akibat Klaim tersebut; dan
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 7.3.2 a --->
 								
 								<!-- S:POINT 7.3.2 b --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(b)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														in the case of delivery of the Goods, NPCT1 shall no
 														 longer be required to make available the Facilities
 														 pursuant to the Contract or in the case of re-delivery of
 														 the Goods, NPCT1 shall be entitled to remove the Goods
 														 forthwith from the Facilities at the risk and expense of
 														 the Customer. 
 
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(b)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														Dalam hal pengiriman Barang, NPCT1 tidak perlu
 														 untuk menyediakan Fasilitas sesuai dengan Kontrak
 														 atau dalam hal pengiriman kembali atas Barang,
 														 NPCT1 berhak untuk segera memindahkan Barang
 														 dari Bagian Fasilitas, di mana risiko dan biaya yang
 														 timbul menjadi tanggungan Pelanggan.
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 7.3.2 b --->
 								
 								<!-- S:POINT 7.3.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>7.3.3</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 											Time shall be of the essence for the purposes of this
 											 <b>Condition 7.3</b> and the Customer shall not be entitled to any
 											 notice of such failure.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>7.3.3</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 											Kepastian waktu haruslah menjadi pokok tujuan dari
 											 <b>Ketentuan 7.3</b> dan Pelanggan tidak berhak untuk
 											 mendapatkan pemberitahuan atas kegagalan tersebut.
 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 7.3.3 --->
 								
 								<!-- S:POINT 7.4 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>7.4</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Re-Delivery Requirements
 
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>7.4</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Persyaratan Pengiriman Kembali
 
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 7.4 --->
 								
 								<!-- S:POINT 7.4.1 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>7.4.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Subject to <b>Conditions 18.1</b> and <b>18.2</b>, NPCT1 shall re-deliver
 												 the Goods to the Customer:
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>7.4.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Tunduk pada <b>Ketentuan 18.1</b> dan <b>18.2</b>, NPCT1 akan
 												 melakukan pengiriman kembali Barang kepada
 												 Pelanggan:
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 7.4.1 --->
 								
 								
 								<!-- S:POINT 7.4.1 a --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(a)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 if so instructed by the Customer;
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(a)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														apabila diinstruksikan oleh Pelanggan;
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 7.4.1 a --->
 								
 								
 								
 								<!-- S:POINT 7.4.1 b --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(b)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
  against the presentation of a receipt in a form approved
 by NPCT1 and duly signed and stamped by the
 Customer; or
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(b)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														terhadap tanda terima yang diberikan adalah sesuai
 dengan format yang telah disetujui oleh NPCT1 dan
 telah ditandatangani dan diberikan stempel oleh
 Pelanggan; atau
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 7.4.1 b --->
 								
 								
 								<!-- S:POINT 7.4.1 c --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(c)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 against the surrender of a Delivery/Shipment Note (if
 any) issued in respect of such Goods.
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(c)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														Terhadap penyerahan dari Nota
 Pengiriman/Pengapalan (apabila ada) sehubungan
 dengan Barang tersebut.
 
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 7.4.1 c --->
 								
 								
 								<!-- S:POINT 7.4.1 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<b>Provided that</b> the Customer shall have performed and
 												observed the provisions of the Contract and of any other
 												contract made between NPCT1 and the Customer in respect
 												of other goods at NPCT1, up to the date of such re-delivery.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<b>Hanya apabila</b> Pelanggan telah melakukan dan
 												memperhatikan ketentuan-ketentuan dalam Kontrak dan
 												kontrak lainnya yang dibuat antara NPCT1 dan Pelanggan,
 												dalam hal barang-barang lain di NPCT1, sampai dengan
 												tanggal pengiriman kembalinya.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 7.4.1 --->
 								
 								
 								<!-- S:POINT 7.4.2 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>7.4.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												NPCT1 shall be entitled but not obliged:
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>7.4.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												NPCT1 berhak namun tidak berkewajiban:
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 7.4.2 --->
 								
 								
 								<!-- S:POINT 7.4.2 a --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(a)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 to demand from any person purporting to be entitled or
 authorised to take re-delivery of the Goods, satisfactory
 proof of the person's identity and of such entitlement
 and authority; and
 
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(a)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														untuk meminta dari setiap orang yang mengaku
 memiliki hak atau memiliki wewenang untuk
 mengambil kembali Barang, dengan bukti yang
 jelas akan indentitasnya, termasuk juga bukti hak
 dan kewenangannya; dan
 
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 7.4.2 a --->
 								
 								
 								
 								<!-- S:POINT 7.4.2 b --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(b)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 to satisfy itself that the signature and stamp appearing
 on the instructions, receipts and the Delivery/Shipment
 Note are correct and valid as at the date of re-delivery.
 
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(b)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														untuk melakukan sendiri tandatangan dan
 stempel/cap yang tertera dalam surat instruksi,
 tanda terima dan Nota Pengiriman/Pengapalan
 yang benar dan berlaku sesuai tanggal pengiriman
 kembali.
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 7.4.2 b --->
 								
 								
 								<!-- S:POINT 7.4.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>7.4.3</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												In the event that a Delivery/Shipment Note has been issued
 												in respect of the Goods and the re-delivery of a part of the
 												Goods by NPCT1 to the Customer such re-delivery shall be
 												recorded in the Delivery/Shipment Note surrendered
 												pursuant to <b>Condition 7.4.1(c)</b> and NPCT1 may then at its
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>7.4.3</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Dalam hal Nota Pengiriman/Pengapalan telah
 												dikeluarkan sehubungan dengan Barang dan pengiriman
 												kembali sebagian dari Barang oleh NPCT1 kepada
 												Pelanggan di mana pengiriman kembali tersebut harus
 												dicatat dalam Nota Pengiriman/Pengapalan yang tunduk
 												pada <b>Ketentuan 7.4.1(c)</b> dan NPCT1 dalam
 												kewenangannya yang mutlak dapat untuk:
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 7.4.3 --->
 								
 								
 								<!-- S:POINT 7.4.3 a --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(a)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 return the Delivery/Shipment Note to the Customer; or
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(a)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														mengembalikan Nota Pengiriman/Pengapalan ke
 Pelanggan; atau
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 7.4.3 a --->
 								
 								
 								
 								<!-- S:POINT 7.4.3 b --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(b)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 issue a fresh Delivery/Shipment Note to the Customer
 in respect of the remaining part of the Goods.
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(b)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														mengeluarkan Nota Pengiriman/Pengapalan
 terbaru kepada Pelanggan sehubungan dengan sisa
 bagian dari Barang.
 
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 7.4.3 b --->
 								
 								
 								<!-- S:POINT 7.4.4 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>7.4.4</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												In the event of any partial or total loss or destruction of the
 												 Goods due to any cause whatsoever, the date of
 												 commencement of such loss or destruction shall be deemed
 												 to be the date of re-delivery of the Goods by NPCT1 to the
 												 Customer.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>7.4.4</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Dalam hal terjadinya kehilangan atau kerusakan atau
 												 kerugian akibat sebagian atau seluruh Barang
 												 dikarenakan sebab apapun, tanggal dimulainya
 												 kehilangan atau kerusakan tersebut harus dianggap
 												 sebagai tanggal pengiriman kembali Barang dari NPCT1
 												 ke Pelanggan.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 7.4.4 --->
 								
 								
 								<!-- S:POINT 7.5 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>7.5</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Discharge From Liability
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>7.5</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Penghapusan Tanggung Jawab
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 7.5 --->
 								
 								
 								<!-- S:POINT 7.5.1 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>7.5.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												NPCT1 shall be discharged from all liability in respect of the
 Goods by re-delivery thereof to the Customer or other person
 presenting a bill of lading, Delivery/Shipment Note or letter
 of authorisation as the case may be, relating thereto and shall
 not be bound to make any enquiry whatsoever as to the legal
 entitlement or otherwise of the Customer or such person to
 the Goods.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>7.5.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												NPCT1 harus dibebaskan dari seluruh tanggung jawab
 sehubungan dengan pengiriman kembali Barang kepada
 Pelanggan atau orang lain yang menunjukkan Bill of
 Lading, Nota Pengiriman/Pengapalan atau surat kuasa
 jika demikian halnya, yang berhubungan dengannya dan
 tidak akan terikat untuk mengajukan permintaan atas hak
 secara hukum atau sebaliknya terhadap Barang dari
 Pelanggan atau orang lain yang dimaksud.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 7.5.1 --->
 								
 								<!-- S:POINT 7.5.2 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>7.5.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												NPCT1 shall be discharged from all liability for wrongful
 delivery of the Goods where the carrying vessel advises
 NPCT1 that it is unable to discharge the Goods therefrom by
 marks.
 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>7.5.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												NPCT1 harus dibebaskan dari seluruh tanggung jawab
 atas kesalahan pengiriman Barang di mana kapal yang
 membawa Barang menginformasikan kepada NPCT1
 bahwa kapal tersebut tidak mampu untuk membongkar
 Barang dengan tanda/kode.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 7.5.2 --->
 								
 								
 								<!-- S:POINT 7.5.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>7.5.3</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												NPCT1 shall not be bound to make any enquiry as to the
 correctness, proper authentication or otherwise of any
 endorsement appearing or purporting to have been made on
 any of the aforesaid bill of lading, Delivery/Shipment Note or
 letter of authorisation.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>7.5.3</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												NPCT1 tidak akan terikat untuk melakukan penyelidikan
 terhadap kebenaran, tindakan pengidentifikasian yang
 tepat atau seballiknya atas permintaan apapun yang
 timbul atau diakui telah dibuat atas apapun sebagaimana
 telah dimaksud dalam bill of lading, Nota
 Pengiriman/Pengapalan atau surat kuasa.
 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 7.5.3 --->
 							<!-------------------------- E:POINT 7 -------------------------->
 							
 							
 							<!-------------------------- S:POINT 8 -------------------------->
 							<!-- S:MODUL POINT --->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>8.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											 MOVEMENT OF GOODS
 										</b>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>8.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											PEMINDAHAN BARANG
 										</b>
 									</div>
 								</div>
 							</div>
 							<!-- E:MODUL POINT 8 --->
 							
 							<!-- S:POINT 8.1 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>8.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													By NPCT1
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>8.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Oleh NPCT1
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 8.1 --->
 								
 								<!-- S:POINT 8.1 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												NPCT1 shall be entitled to move the Goods from the Facilities
 to any other part of NPCT1 or to depot line 2 from time to
 time.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												NPCT1 berhak dari waktu ke waktu untuk menindahkan
 Barang dari Bagian Fasilitas ke bagian lain di NPCT1 atau
 ke Depo/TPS Lini 2.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 8.1 --->
 								
 								<!-- S:POINT 8.2 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>8.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Storage of Goods
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>8.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Penyimpangan Barang
 
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 8.2 --->
 								
 								<!-- S:POINT 8.2 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												NPCT1 may store the Goods in the open if deemed appropriate and suitable by NPCT1. 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												NPCT1 dapat menyimpan Barang di tempat terbuka apabila dianggap sesuai dan cocok oleh NPCT1.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 8.2 --->
 							<!-------------------------- E:POINT 8 -------------------------->
 							
 							
 							<!-------------------------- S:POINT 9 -------------------------->
 							<!-- S:MODUL POINT --->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>9.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											 SPECIFIC MEASURES
 										</b>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>9.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											LANGKAH-LANGKAH KHUSUS
 										</b>
 									</div>
 								</div>
 							</div>
 							
 							
 							<!-- S:POINT 9.1 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>9.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Fixtures, Fittings and Measures
 
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>9.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Peralatan, Perlengkapan dan Ukuran
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 9.1 --->
 								
 								<!-- S:POINT 9.1 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Notwithstanding the other provisions of the Contract, NPCT1
 shall be entitled immediately, and at the risk and expense of
 the Customer, to install or modify any fixture or fitting to the
 Facilities and take every measure reasonably deemed by
 NPCT1 to be necessary (including the cessation of the
 provision of the Services/Facilities or the removal or disposal
 of Goods) as required by any Government or public authority,
 and/or in order to prevent or reduce any damage (to property
 and the environment, personal injury or death) and/or to
 prevent or reduce the risk of any Claim or potential Claim
 against NPCT1. Such fixture or fitting shall be the property of
 NPCT1
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Dengan tidak mengesampingkan ketentuan-ketentuan
 lain dalam Kontrak, NPCT1 berhak untuk segera, atas
 risiko dan biaya yang ditanggung oleh Pelanggan, untuk
 memasang atau memodifikasi peralatan atau
 perlengkapan pada Bagian Fasilitas dan mengambil setiap
 langkah yang dianggap diperlukan oleh NPCT1 (termasuk
 penghentian penyediaan Layanan/Fasilitas atau
 pemindahan atau pelepasan Barang) yang disyaratkan
 oleh Pemerintah maupun otoritas publik, dan/atau untuk
 mencegah atau mengurangi kerusakan (terhadap
 properti dan lingkungan, cedera atau kematian individu)
 dan/atau untuk mencegah atau mengurangi risiko
 apapun terhadap Klaim atau potensial Klaim terhadap
 NPCT1. Perlengkapan dan Peralatan haruslah menjadi
 milik NPCT1.
 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 9.1 --->
 								
 								<!-- S:POINT 9.2 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>9.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Notification to Customer
 
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>9.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Pemberitahuan kepada Pelanggan
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 9.2 --->
 								
 								
 								<!-- S:POINT 9.2 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												NPCT1 shall as soon as possible, notify the Customer of such
 installation, modification and measures but any failure by
 NPCT1 to notify the Customer shall not entitle the Customer
 to make any Claim against NPCT1 in respect thereof.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												NPCT1 harus, dengan segera memberitahukan Pelanggan
 terhadap setiap pemasangan, modifikasi dan ukuranukuran/langkah-langkah namun kegagalan dalam
 memberitahukan kepada Pelanggan oleh NPCT1 tidak
 akan memberikan hak kepada Pelanggan untuk
 mengajukan Klaim terhadap NPCT1.
 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 9.2 --->
 							<!-------------------------- E:POINT 9 -------------------------->
 							
 							
 							<!-------------------------- S:POINT 10 -------------------------->
 							<!-- S:MODUL POINT 10 --->
 							<!-- S:MODUL POINT --->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>10.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											 INSPECTION AND WORKS
 										</b>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>10.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											PEMERIKSAAN DAN PEKERJAAN
 										</b>
 									</div>
 								</div>
 							</div>
 							
 							<!-- S:POINT 10 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												NPCT1 is entitled to conduct any inspection of or any works
 to the Facilities which is required, in NPCT1’s opinion, due to
 or pursuant to any law effective during the Contract Period,
 at the risk and expense of the Customer. The Contract Sum
 remains payable in the event of such inspection/works even
 if the Customer is deprived of the use of the
 Services/Facilities. NPCT1 is entitled to do all acts necessary
 for such inspection or works to take place and the Customer
 shall not make any claim arising therefrom where there has
 been wilful intent or recklessness on the part of NPCT1.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												NPCT1 berhak untuk melakukan pemeriksaan atau
 												 pekerjaan yang diperlukan atas Fasilitas yang menurut
 												 NPCT1 adalah dikarenakan atau sesuai dengan hukum
 												 yang berlaku selama Periode Kontrak, yang mana risiko
 												 dan biaya adalah menjadi tanggungan Pelanggan. Nilai
 												 Kontrak tetap dibayarkan dalam hal
 												 pemeriksaan/pekerjaan, bahkan apabila Pelanggan telah
 												 dicabut haknya atas penggunaan Layanan/Fasilitas.
 												 NPCT1 berhak untuk melakukan segala tindakan yang
 												 diperlukan untuk pemeriksaan atau pekerjaan tersebut
 												 dan Pelanggan tidak dapat mengajukan klaim yang timbul
 												 daripadanya, walaupun kesengajaan atau kecerobohan
 												 itu adalah bagian dari NPCT1
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 10 --->
 							<!-------------------------- E:POINT 10 -------------------------->
 							
 							
 							<!-------------------------- S:POINT 11 -------------------------->
 							<!-- S:MODUL POINT 11 --->
 							<!-- S:MODUL POINT --->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>11.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											 REMOVAL OF VESSELS
 										</b>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>11.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											KEBERANGKATAN KAPAL
 										</b>
 									</div>
 								</div>
 							</div>
 							
 							<!-- S:POINT 11 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												The Customer shall ensure that the Vessel shall be removed
 from NPCT1 immediately upon completion of the
 discharge/loading of the Goods or at any time as deemed
 necessary by NPCT1.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Pelanggan harus memastikan bahwa Kapal harus
 diberangkatkan dari NPCT1 segera setelah selesainya
 bongkar/muat Barang atau setiap saat yang dianggap
 perlu oleh NPCT1.
 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 11 --->
 							<!-------------------------- E:POINT 11 -------------------------->
 							
 							
 							<!-------------------------- S:POINT 12 -------------------------->
 							<!-- S:MODUL POINT 12 --->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>12.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											 WORKING HOURS
 										</b>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>12.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											WAKTU KERJA
 										</b>
 									</div>
 								</div>
 							</div>
 							
 							<!-- S:POINT 12.1 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>12.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													 Normal Working Hours
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>12.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Waktu Kerja Normal
 
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 12.1 --->
 								
 								
 								<!-- S:POINT 12.1 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 											Except where expressly agreed otherwise, the
 Services/Facilities shall be provided by NPCT1 during the
 normal working hours stipulated by NPCT1 from time to time.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Kecuali jika disetujui sebaliknya, Layanan/Fasilitas akan
 diberikan NPCT1 selama waktu kerja normal yang telah
 ditentukan oleh NPCT1 dari waktu ke waktu.
 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 12.1 --->
 								
 								
 								<!-- S:POINT 12.2 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>12.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Outside Normal Working Hours
 
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>12.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Diluar Waktu Kerja Normal
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 12.2 --->
 								
 								<!-- S:POINT 12.2.1 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>12.2.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 											Notwithstanding the other provisions of the Contract, NPCT1
 may at its absolute discretion provide any Services/Facilities
 outside the normal working hours if NPCT1 shall reasonably
 deem it necessary to do so or if required by the competent
 authorities.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>12.2.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Tanpa mengesampingkan ketentuan lain dalam Kontrak,
 NPCT1 dengan kewenangan mutlak dapat menyediakan
 Layanan/Fasilitas diluar jam kerja normal, jika NPCT1
 menganggap hal tersebut perlu dilakukan atau jika
 diminta oleh otoritas yang berwenang.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 12.2.1 --->
 								
 								
 								<!-- S:POINT 12.2.2 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>12.2.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 											 Any cost or expense incurred by NPCT1 arising from providing
 any Services or Facilities outside the normal working hours
 pursuant to <b>General Condition 12.2.1</b> shall also be payable by
 the Customer to NPCT1.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>12.2.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Setiap biaya atau pengeluaran yang dikeluarkan oleh
 NPCT1 yang timbul akibat penyediaan Layanan atau
 Fasilitas diluar jam kerja normal, sebagaimana <b>Ketentuan
 Umum 12.2.1</b> adalah juga harus dibayarkan oleh
 Pelanggan kepada NPCT1.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 12.2.2 --->
 							<!-------------------------- E:POINT 12 -------------------------->
 							
 							
 							<!-------------------------- S:POINT 13 -------------------------->
 							<!-- S:MODUL POINT 13 --->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>13.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											CUSTOMER’S REPRESENTATIVE
 										</b>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>13.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											PERWAKILAN PELANGGAN
 										</b>
 									</div>
 								</div>
 							</div>
 							
 							
 							
 								<!-- S:POINT 13.1 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>13.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													NPCT1’s Approval
 
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>13.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Persetujuan NPCT1
 
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 13.1 --->
 								
 								<!-- S:POINT 13.1 a --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(a)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 NPCT1 may grant approval for any one or more persons
 authorised by the Customer to deal with NPCT1, its
 employees and agents for the purposes of the Contract.
 All acts or omissions by such authorised person shall be
 deemed to be acts or omissions of the Customer.
 
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(a)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														NPCT1 dapat memberikan persetujuan atas setiap
 satu atau lebih orang yang diberikan wewenang oleh
 Pelanggan untuk berhubungan dengan NPCT1,
 karyawan dan agen NPCT1 untuk hal-hal yang terkait
 dengan Kontrak. Semua tindakan atau kelalaian yang
 dilakukan oleh orang yang diberikan wewenang
 tersebut dianggap merupakan tindakan atau kelalaian
 dari Pelanggan.
 
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 13.1 a --->
 								
 								
 								<!-- S:POINT 13.1 b --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(b)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 . Without prejudice to the foregoing General Condition
 13.1(a), NPCT1 shall be entitled to deem that any
 person actually (whether expressly or impliedly by
 way of conduct, course of dealing, usage or custom,
 or otherwise) or ostensibly or apparently authorised
 by the Customer to deal with NPCT1, its employees and
 agents for the purposes of or in connection with the
 Contract (including without limitation hauliers and
 truckers) is the Customer’s Representative, in which
 event all acts or omissions by such person shall be
 deemed to be acts or omissions of the Customer.
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(b)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														Tanpa mengesampingkan Ketentuan Umum 13.1(a),
 NPCT1 berhak untuk menganggap bahwa setiap orang
 adalah benar (baik secara tersurat maupun tersirat
 melalui perilaku, proses transaksi, penggunaan atau
 kebiasaan atau sebaliknya) atau seolah-olah disahkan
 atau tampaknya disahkan oleh Pelanggan dalam
 berhubungan/berkomunikasi dengan NPCT1,
 karyawan dan agen dari NPCT1, untuk tujuan
 sehubungan dengan Kontrak (termasuk namun tidak
 terbatas pada sarana pengangkutan dan
 pengemudinya) yang merupakan perwakilan
 Pelanggan, dimana semua tindakan atau kelalaian
 orang tersebut akan dianggap sebagai tidnakan atau
 kelalaian Pelanggan.
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 13.1 b --->
 								
 								<!-- S:POINT 13.2 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>13.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Customer’s Responsibility
 
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>13.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Tanggung Jawab Pelanggan
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 13.2 --->
 								
 								<!-- S:POINT 13.2.1 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>13.2.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												The Customer shall ensure that only the Customer itself or
 the Customer’s Representative shall deal with NPCT1 for the
 purposes of the Contract. Notwithstanding the provisions of
 this <b>Condition 13.2</b>, the Customer remains responsible for
 the due observance of and compliance with the Contract.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>13.2.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Pelanggan harus memastikan bahwa hanya Pelanggan
 sendiri atau Perwakilannya yang berhubungan dengan
 NPCT1 dalam hal Kontrak. Dengan tidak
 mengesampingkan ketentuan dalam <b>Ketentuan 13.2</b>,
 Pelanggan tetap bertanggung jawab untuk
 memperhatikan dan memenuhi isi Kontrak.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 13.2.1 --->
 								
 								<!-- S:POINT 13.2.2 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>13.2.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Any undertaking by the Customer under the Contract shall be
 deemed to include an obligation to ensure that the same shall
 be carried out by the Customer’s Representative.
 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>13.2.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Setiap usaha yang dilakukan Pelanggan berdasarkan
 Kontrak, harus dianggap termasuk kewajiban untuk
 memastikan bahwa hal yang sama dilakukan juga oleh
 Perwakilan Pelanggan.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 13.2.2 --->
 								
 								<!-- S:POINT 13.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>13.3</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Liability and Indemnity for Customer’s Representative
 
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>13.3</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Tanggung Jawab dan Ganti Rugi Terhadap Perwakilan Pelanggan
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 13.3 --->
 								
 								
 								<!-- S:POINT 13.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												NPCT1 shall not be liable for any Claim suffered by any person
 due to any cause whatsoever arising from the act or omission
 of any Customer’s Representative or any other person
 ostensibly or apparently engaged or authorised by the
 Customer to deal with NPCT1 and the Customer shall absolve
 NPCT1, its employees and agents in respect of such Claim and
 shall indemnify NPCT1, its employees and agents in respect
 of such Claim.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												NPCT1 tidak bertanggung jawab atas Klaim dari setiap
 orang yang disebabkan oleh apapun yang timbul dari
 tindakan atau kelalaian Perwakilan Pelanggan atau orang
 lain yang kelihatannya atau seolah-olah terlibat atau
 diberikan wewenang oleh Pelanggan untuk berhubungan
 dengan NPCT1 dan Pelanggan harus membebaskan
 NPCT1, karyawan dan agen NPCT1 sehubungan dengan
 Klaim tersebut serta harus mengganti kerugian NPCT1,
 karyawan dan agen NPCT1.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 13.3 --->
 							<!-------------------------- E:POINT 13 -------------------------->
 							
 							
 							
 							<!-------------------------- S:POINT 14 -------------------------->
 							<!-- S:MODUL POINT 3 --->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>14.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											ACCESS TO AND PRESENCE AT NPCT1 TERMINALS
 										</b>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>14.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											AKSES DAN KEHADIRAN DI TERMINAL NPCT1
 										</b>
 									</div>
 								</div>
 							</div>
 							
 					
 							
 							<!-- S:POINT 14.1 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>14.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Except with the written permission of NPCT1 (evidenced by
 any permanent or temporary pass or permit issued by NPCT1
 subject to such terms and conditions as may be imposed by
 NPCT1], all persons or property shall only enter or exit NPCT1
 through entrances or exits or means designated by NPCT1 for
 that purpose. NPCT1 has the right to deny entry/exit to any
 NPCT1 Terminal and any part thereof or revoke permission
 for the same, and to require the Customer to remove any
 person or property accordingly at any time.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>14.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 													Kecuali dengan izin tertulis dari NPCT1 [dibuktikan dengan
  tanda masuk/izin masuk permanen atau sementara yang
  diterbitkan oleh NPCT1 yang tunduk pada syarat dan
  ketentuan yang mungkin diberlakukan oleh NPCT1],
  setiap orang atau properti hanya akan masuk atau keluar
  NPCT1 melalui pintu masuk atau pintu keluar atau cara
  lain yang ditentukan oleh NPCT1 untuk tujuan tersebut.
  NPCT1 berhak untuk menolak masuk/keluarnya
  seseorang atau properti ke Terminal NPCT1 dan setiap
  bagian daripadanya ataupun mencabut izin yang sama,
  dan meminta Pelanggan untuk setiap saat memindahkan
  orang atau properti sebagaimana mestinya.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 14.1 --->
 								
 								<!-- S:POINT 14.2 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>14.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Obedience to Directions
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>14.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Ketaatan terhadap Petunjuk/Arahan
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 14.2 --->
 								
 								
 								<!-- S:POINT 14.2 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>14.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												The Customer shall, while it remains at NPCT1, obey all
 directions given by NPCT1 in respect of the Services/Facilities
 and or as indicated by any signboard placed by NPCT1.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>14.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Pelanggan harus, selama berada di NPCT1, mematuhi
 setiap arahan yang diberikan oleh NPCT1 sehubungan
 dengan Layanan/Fasilitas dan atau sebagaimana tedapat
 pada papan petunjuk yang ada di lokasi NPCT1. 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 14.2 --->
 								
 								
 								<!-- S:POINT 14.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>14.3</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													During Normal Working Hours and For Contract Purposes
 
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>14.3</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Selama Waktu Kerja Normal dan Untuk Tujuan Kontrak
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 14.3 --->
 								
 								
 								<!-- S:POINT 14.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>14.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Subject to the foregoing paragraphs of <b>this General
 Condition</b>, NPCT1 shall grant the Customer and the
 Customer's Representative, access to the Facilities or the
 NPCT1, as the case may be, during the normal working
 hours referred to in <b>General Condition 12.1</b> or if applicable,
 outside the normal working hours, only for the purposes of
 the Contract subject to their compliance with the
 operational, safety, security and other requirements of
 NPCT1 from time to time.
 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>14.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Tunduk pada ketentuan sebelumnya dalam <b>Ketentuan
 Umum</b> ini, NPCT1 akan memberikan kepada Pelanggan
 dan Perwakilan Pelanggan akses ke Fasilitas atau ke
 NPCT1, sebagaimana halnya selama waktu kerja normal
 sebagaimana disebutkan dalam <b>Ketentuan Umum 12.1</b>,
 atau jika berlaku, diluar waktu kerja normal, hanya untuk
 tujuan Kontrak yang tunduk pada kepatuhan Pelanggan
 dan Perwakilan Pelanggan terhadap operasional,
 keselamatan, keamanan dan persyaratan NPCT1 lainnya
 dari waktu ke waktu.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 14.3 --->
 							<!-------------------------- E:POINT 14 -------------------------->
 							
 							
 							<!-------------------------- S:POINT 15 -------------------------->
 							<!-- S:MODUL POINT 3 --->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>15.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											ENVIRONMENT
 										</b>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>15.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											LINGKUNGAN
 										</b>
 									</div>
 								</div>
 							</div>
 							
 							<!-- S:POINT 15 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 The Customer shall not cause or permit any waste matter to
 be discharged in any manner onto NPCT1 and no Vessel shall
 emit smoke, soot, ash, grit or oil beyond levels deemed as
 reasonable by NPCT1 at NPCT1. 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 Pelanggan tidak menyebabkan atau mengizinkan untuk
 membuang sampah dengan cara apapun ke/di NPCT1 dan
 tidak ada Kapal yang diizinkan utnuk membuang asap,
 jelaga, abu, pasir atau minyak yang melampaui batas yang
 dianggap wajar oleh NPCT1 di lingkungan NPCT1.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 15 --->
 								
 								
 								
 								<!-- S:POINT 15 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 											The Customer shall:
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 											Pelanggan wajib:
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 15 --->
 								
 								
 								
 								
 								<!-- S:POINT 15 a --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(a)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 Solely responsible for the response and recovery cost of
 oil and chemical spills at sea, in port and onboard the
 vessel if their vessels act as polluter. These costs to
 ensure the response party is able to perform an oil and
 chemical spill response at sea, in port and onboard the
 vessel. This includes maintaining personnel, assessment,
 infrastructure, information management, equipment
 and maintenance.
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(a)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														Bertanggung jawab sepenuhnya atas biaya
 penanggulangan dan pemulihan tumpahan minyak
 dan bahan kimia yang terjadi di laut, pelabuhan dan
 diatas kapal, jika kapal Pelanggan merupakan pelaku
 pencemaran tersebut. Biaya penanggunangan dan
 pemuliha tersebut adalah untuk memastikan pihak
 yang bertanggung jawab mampu untuk melakukan
 penanggulanan atas tumpahan minyak dan bahan
 kimia di laur, pelabuhan dan diatas kapal. Hal ini
 termasuk memastikan keberadaan personil,
 penilaian, infrastruktur, manajemen informasi,
 peralatan dan pemeliharaan. 
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 15 a --->
 								
 								
 								<!-- S:POINT 15 b --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(b)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 When a response party is deployed in the event of a spill,
 the costs associated with the response party’s time and
 resources during clean-up are additional to the
 additional to the annual fees and are paid by the polluter
 as required by the polluter pays principle.
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(b)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														Ketika pihak yang bertanggung jawab dikerahkan jika
 terjadi tumpahan, biaya yang terkait dengan waktu
 dan sumber daya pihak yang bertanggung jawab
 selama waktu pembersihan adalah merupakan
 tambahan atas biaya tahunan dan harus dibayarkan
 oleh Pihak Pencemar sebagaimana disyaratkan
 dalam prinsip pencemar merupakan pihak yang
 bertanggung jawab membayar.
 
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 15 b --->
 								
 								
 								<!-- S:POINT 15 c --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(c)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 Oil and chemical response party is a party engaged by
 NPCT1 and certified by government to perform oil and
 chemical response according to the law.
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(c)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														Pihak yang bertanggung jawab atas pencemaran
 minyak dan bahan kimia berdasarkan hukum dan
 ketentuan.
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 15 c --->
 								
 								
 								<!-- S:POINT 15 d --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(d)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 The below response and recovery costs calculated in
 daily rate, but not limited to:
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(d)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														Berikut ini adalah biaya penanggulan dan pemulihan
 yang dihitung dalam tarif harian, tetapi tidak
 terbatas pada:
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 15 d --->
 								
 								
 								
 								<!-- S:POINT 15 d i --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<div class="row">
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>i.</p></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 														<p>
 																24” Oil boom with 1,800 meters length – 
 																IDR73.896.000.
 														</p>
 														</div>
 													</div>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<div class="row">
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>i.</p></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 														<p>
 																24” Bom Minyak dengan Panjang 1,800 meters – Rp.73.896.000,-.
 														</p>
 														</div>
 													</div>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 15 d i --->
 								
 								
 								<!-- S:POINT 15 d ii --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<div class="row">
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>ii.</p></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 														<p>
 																2 Skimmers – IDR1.824.000.
 														</p>
 														</div>
 													</div>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<div class="row">
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>ii.</p></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 														<p>
 																2 Skimmers – Rp.1.824.000,-.
 														</p>
 														</div>
 													</div>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 15 d ii --->
 								
 								
 								<!-- S:POINT 15 d iii --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<div class="row">
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>iii.</p></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 														<p>
 																. 2 Temporary oil storage tank @6 tons – IDR1.094.760.
 														</p>
 														</div>
 													</div>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<div class="row">
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>iii.</p></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 														<p>
 																2 Tangki Sementara untuk Penyimpanan Minyak @6 tons – Rp.1.094.760,-.
 														</p>
 														</div>
 													</div>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 15 iii --->
 								
 								
 								<!-- S:POINT 15 d iv --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<div class="row">
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>iv.</p></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 														<p>
 																2 Dispersant spray system – IDR912.300.
 														</p>
 														</div>
 													</div>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<div class="row">
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>iv.</p></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 														<p>
 																2 Sistem Semprotan Dispersant – Rp.912.300,-.
 														</p>
 														</div>
 													</div>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 15 d iv --->
 								
 								
 								<!-- S:POINT 15 d v --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<div class="row">
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>v.</p></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 														<p>
 																Oil transfer pump – iDR669.020.
 														</p>
 														</div>
 													</div>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<div class="row">
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>v.</p></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 														<p>
 																Pompa pemindahan minyak – Rp.669.020,-.
 														</p>
 														</div>
 													</div>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 15 d v --->
 								
 								
 								<!-- S:POINT 15 d vi --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<div class="row">
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>vi.</p></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 														<p>
 															1 set sorbent material – IDR1.216.400
 														</p>
 														</div>
 													</div>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<div class="row">
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>vi.</p></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 														<p>
 															1 set material sorbent– Rp.1.216.400,-.
 														</p>
 														</div>
 													</div>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 15 d vi --->
 								
 								
 								<!-- S:POINT 15 d vii --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<div class="row">
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>vii.</p></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 														<p>
 															Manpower IMO Level-1 @1 Pax – IDR5.400.000.
 														</p>
 														</div>
 													</div>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<div class="row">
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>vii.</p></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 														<p>
 															Tenaga kerja IMO Level-1 @1 orang – Rp.5.400.000,-.
 														</p>
 														</div>
 													</div>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 15 d vii --->
 								
 								
 								<!-- S:POINT 15 d viii --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<div class="row">
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>viii.</p></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 														<p>
 																Manpower IMO Level-2 @1 Pax – IDR10.800.000.
 														</p>
 														</div>
 													</div>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<div class="row">
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>viii.</p></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 														<p>
 															Tenaga kerja IMO Level-2 @1 orang – Rp.10.800.000,-
 														</p>
 														</div>
 													</div>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 15 d viii --->
 								
 								
 								<!-- S:POINT 15 d ix --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<div class="row">
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>ix.</p></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 														<p>
 																Hazardous liquid waste disposal to licensed waste
 management @1 drum – IDR600.000.
 														</p>
 														</div>
 													</div>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<div class="row">
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>ix.</p></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 														<p>
 																Pembuangan limbah cair berbahaya melalui
 pihak yang bersertifikat @1 drum – IDR600.000.
 
 														</p>
 														</div>
 													</div>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 15 d ix --->
 								
 								
 								<!-- S:POINT 15 d x --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<div class="row">
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>x.</p></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 														<p>
 																Hazardous solid waste disposal to licensed waste
 management @1 Kg – IDR2,500.
 
 														</p>
 														</div>
 													</div>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<div class="row">
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>x.</p></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 														<p>
 																Pembuangan limbah padat berbahaya melalui
 pihak yang bersertifikat @ 1 Kg – Rp.2.500,-.
 														</p>
 														</div>
 													</div>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 15 d x --->
 								
 								
 								<!-- S:POINT 15 d xi --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<div class="row">
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>xi.</p></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 														<p>
 																Tug boats – according to pilotage rate
 														</p>
 														</div>
 													</div>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<div class="row">
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>xi.</p></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 														<p>
 																Kapal Tunda – sesuai dengan harga yang ditetapkan terkait kepanduan.
 														</p>
 														</div>
 													</div>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 15 d xi --->
 								
 								
 								<!-- S:POINT 15 e --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(e)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 Oil and chemical spill response and recovery is declared
 as completed if approved by local authorities such as
 Harbor Master, Port Authority, Ministry of Environment
 and Directorate General of Sea Transportation
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(e)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 													Penanggulangan dan pemulihan atas tumpahan
 minyak dan bahan kimia dinyatakan selesai jika telah
 disetujui oleh Otoritas Setempat, seperti:
 Kesyahbandaran, Otoritas Pelabuhan, Kementerian
 Perhubungan dan Direktorat Jenderal Perhubungan
 Laut.	
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 15 e --->
 								
 							<!-------------------------- E:POINT 15 -------------------------->
 							
 							
 							<!-------------------------- S:POINT 16 -------------------------->
 							<!-- S:MODUL POINT 3 --->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>16.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											PAYMENT FOR SERVICES OR FACILITIES
 										</b>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>16.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											PEMBAYARAN ATAS LAYANAN DAN FASILTIAS
 										</b>
 									</div>
 								</div>
 							</div>
 							
 							
 							<!-- S:POINT 16.1 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>16.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Charges and Other Sums
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>16.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Biaya-Biaya dan Pengeluaran Lainnya
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 16.1 --->
 								
 								
 								
 								<!-- S:POINT 16.1 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												In consideration of the provision of the Services/Facilities by
 NPCT1, the Customer shall pay to NPCT1 all charges and other
 sums which shall be imposed by NPCT1 under the NPCT1
 Tariff or under the Contract or at law.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Dalam pertimbangan penyediaan Layanan/Fasilitas oleh
 NPCT1, Pelanggan harus membayar kepada NPCT1 atas
 semua biaya dan pengeluaran lainnya yang dikenakan
 oleh NPCT1 berdasarkan Tarif NPCT1 atau berdasarkan
 Kontrak atau hukum yang berlaku.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 16.1 --->
 								
 								
 								
 								
 								
 								
 								<!-- S:POINT 16.2 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>16.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													 Conditions of Payment
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>16.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Ketentuan Pembayaran
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 16.2 --->
 								
 								
 								
 								<!-- S:POINT 16.2 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Except as expressly agreed otherwise between the Parties:
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 											Kecuali sebagaimana secara tegas telah disetujui sebaliknya oleh Para Pihak:
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 16.2 --->
 								
 								
 								
 								<!-- S:POINT 16.2 a --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(a)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 The applicable credit period is 7 (seven) calendar days
 from invoice date.
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(a)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														Jangka waktu kredit yang berlaku adalah 7 (tujuh)
 hari kalender, terhitung sejak tanggal
 penagihan/faktur.
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 16.2 a --->
 								
 								
 								<!-- S:POINT 16.2 b --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(b)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 The Contract Sum shall be:
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(b)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														Nilai Kontrak harus :
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 16.2 b --->
 								
 								
 								<!-- S:POINT 16.2 b i --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<div class="row">
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(i)</p></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 														<p>
 															payable without demand and without deduction
 not later than the date for payment stipulated in
 the NPCT1 Tariff or under the Contract, as the
 case may be; and
 														</p>
 														</div>
 													</div>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<div class="row">
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(i)</p></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 														<p>
 																dibayarkan tanpa permintaan dan tanpa
 pengurangan dan tidak lebih dari tanggal
 pembayaran yang telah ditetapkan dalam 
 														</p>
 														</div>
 													</div>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 16 b i --->
 								
 								<!-- S:POINT 16 b ii --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<div class="row">
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(ii)</p></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 														<p>
 															recoverable against the Goods and any other
 property delivered by the Customer to NPCT1
 under any other contract made between NPCT1
 and the Customer.
 														</p>
 														</div>
 													</div>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<div class="row">
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(ii)</p></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 														<p>
 																dapat dipulihkan terhadap Barang dan
 properti lainnya yang dikirimkan ke NPCT1
 oleh Pelanggan berdasarkan kontrak lain
 yang dibuat dan disepakati oleh NPCT1 dan
 Pelanggan.
 
 														</p>
 														</div>
 													</div>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 16 b ii --->
 								
 								
 								
 								<!-- S:POINT 16.2 c --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(c)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 NPCT1 may at any time and from time to time require
 the Customer to open and maintain for the duration of
 the Contract Period an account with NPCT1 subject to
 the terms and conditions provided in the NPCT1 Tariff.
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(c)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														NPCT1 dapat, setiap saat dan dari waktu ke waktu,
 meminta Pelanggan untuk membuka atau
 menggunakan 1 (satu) rekening selama Periode
 Kontrak dengan NPCT1, yang tunduk pada syarat
 dan ketentuan yang terdapat dalam Tarif NPCT1.
 
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 16.2 c --->
 								
 								
 								<!-- S:POINT 16.2 d --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(d)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 The Customer shall furnish security for a sum and of a
 form approved by NPCT1 for the prompt and proper
 performance and observance by the Customer of the
 Contract (including without limitation the obligation to
 pay the Contract Sum).
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(d)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														Pelanggan wajib memberikan jaminan sejumlah dan
 dalam bentuk yang disetujui oleh NPCT1 untuk
 kinerja yang cepat dan tepat serta ketaatan
 Pelanggan terhadap Kontrak (termasuk tanpa
 batasan terhadap kewajiban untuk membayar Nilai
 Kontrak).
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 16.2 d --->
 								
 								
 								<!-- S:POINT 16.2 e --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(e)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 The sums due from the Customer or any of its related
 corporations to NPCT1 or any of its related corporations
 may be deducted from any sum due from NPCT1 to the
 Customer or any of its related corporations, including
 sums due pursuant to the Contract or otherwise. Each
 Party shall procure that its related corporations comply
 with the terms of this <b>Condition 16.2(d)</b>.
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(e)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														Jumlah piutang Pelanggan atau perusahaan yang
 terkait kepada NPCT1 atau perusahaan yang terkait
 lainnya, dapat dikurangkan dari jumlah piutang yang
 lain dari NPCT1 kepada Pelanggan atau perusahaan
 terkait lainnya tersebut, termasuk jumlah yang
 sesuai dengan Kontrak atau sebaliknya. Setiap Pihak
 harus mengetahui bahwa perusahaan lain yang
 terkait harus mematuhi ketentuan dalam <b>Ketentuan 16.2(d)</b>.
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 16.2 e --->
 								
 								
 								<!-- S:POINT 16.2 f --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(f)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 Notwithstanding the period for payment stipulated
 pursuant to paragraph (a) above:
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(f)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														Dengan tidak mengesampingkan periode
 pembayaran sebagaimana ditetapkan dalam ayat (a)
 di atas:
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 16.2 f --->
 								
 								
 								
 								<!-- S:POINT 16.2 f i --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<div class="row">
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(i)</p></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 														<p>
 															if the Customer is or is presumed or deemed to be
 unable or admits inability to pay its debts as they
 fall due, suspends making payments on any of its
 debts or, by reason of actual or anticipated
 financial difficulties, commences negotiations
 with one or more of its creditors with a view to
 rescheduling any of its indebtedness;
 														</p>
 														</div>
 													</div>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<div class="row">
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(i)</p></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 														<p>
 																Apabila Pelanggan adalah atau diduga atau
 dianggap tidak mampu atau mengakui
 ketidakmampuannya untuk membayar
 hutang pada saat jatuh tempo, menunda
 melakukan pembayaran atas setiap hutang,
 atau, dengan alasan kesulitan keuangan
 secara aktual atau yang telah diantisipasi,
 memulai negosiasi dengan 1 (satu) atau lebih
 kreditur dengan maksud untuk penjadwalan
 ulang atas setiap hutang tersebut;
 														</p>
 														</div>
 													</div>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 16 f i --->
 								
 								<!-- S:POINT 16 f ii --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<div class="row">
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(ii)</p></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 														<p>
 															if the value of the assets of the Customer is less
 than its liabilities (taking into account contingent
 and prospective liabilities);
 														</p>
 														</div>
 													</div>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<div class="row">
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(ii)</p></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 														<p>
 																Apabila nilai aset Pelanggan adalah kurang
 dari jumlah hutangnya (mempertimbangkan
 syarat dan prospek tanggungannya);
 														</p>
 														</div>
 													</div>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 16 f ii --->
 								
 								
 								<!-- S:POINT 16.2 f iii --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<div class="row">
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(iii)</p></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 														<p>
 															if a moratorium is declared in respect of any
 indebtedness of the Customer;
 														</p>
 														</div>
 													</div>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<div class="row">
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(iii)</p></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 														<p>
 																Apabila sebuah moratorium dinyatakan
 dalam setiap hutang Pelanggan;
 														</p>
 														</div>
 													</div>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 16 f iii --->
 								
 								<!-- S:POINT 16 f iv --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<div class="row">
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(iv)</p></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 														<p>
 															if any corporate action, legal proceedings or other
 procedure or step is taken in relation to:
 														</p>
 														</div>
 													</div>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<div class="row">
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(iv)</p></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 														<p>
 																Apabila terdapat tindakan, proses hukum
 atau prosedur atau langkah lain yang diambil
 perusahaan dalam kaitannya dengan:
 
 														</p>
 														</div>
 													</div>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 16 f iv --->
 								
 								
 								
 								<!-- S:POINT 16 f iv a --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<div class="row">
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 															<div class="row">
 																<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(A)</p></div> 
 																<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 																	<p>
 																	the suspension of payments, a moratorium
 of any indebtedness, winding-up,
 dissolution, administration, judicial
 management, provisional supervision or
 reorganisation by way of voluntary
 arrangement, scheme of arrangement or
 otherwise of the Customer other than a
 solvent reorganisation of the Customer; 
 																	</p>
 																</div>
 															</div>
 														</div>
 													</div>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<div class="row">
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 															<div class="row">
 																<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(A)</p></div> 
 																<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 																	<p>
 																	penangguhan pembayaran,
 moratorium atas hutang apapun,
 pengakhiran, pembubaran,
 administrasi, manajemen peradilan,
 pengawasan sementara atau
 berorganisasi kembali dengan cara
 pengaturan sukarela, skema
 pengaturan atau ditentukan sebaliknya
 oleh Pelanggan, selain dari peleburan
 perusahaan Pelanggan;
 																	</p>
 																</div>
 															</div>
 														</div>
 													</div>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 16 f iv a --->
 								
 								
 								<!-- S:POINT 16 f iv a --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<div class="row">
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 															<div class="row">
 																<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(B)</p></div> 
 																<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 																	<p>
 																	a composition or arrangement with any
 creditor of the Customer, or an assignment
 for the benefit of creditors generally of the
 Customer or a class of such creditors;
 																	</p>
 																</div>
 															</div>
 														</div>
 													</div>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<div class="row">
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 															<div class="row">
 																<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(B)</p></div> 
 																<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 																	<p>
 																	sebuah komposisi atau pengaturan
 dengan kreditur dari Pelanggan, atau
 suatu tugas untuk kepentingan para
 kreditur dari Pelanggan pada
 umumnya, atau kelompok krediturkreditur;
 																	</p>
 																</div>
 															</div>
 														</div>
 													</div>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 16 f iv a --->
 								
 								
 								<!-- S:POINT 16 f iv a --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<div class="row">
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 															<div class="row">
 																<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(C)</p></div> 
 																<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 																	<p>
 																	the appointment of a liquidator, receiver,
 trustee, judicial manager, administrator,
 administrative receiver, compulsory
 manager, provisional supervisor or other
 similar officer in respect of the Customer or
 any of its assets; or
 
 																	</p>
 																</div>
 															</div>
 														</div>
 													</div>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<div class="row">
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 															<div class="row">
 																<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(C)</p></div> 
 																<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 																	<p>
 																	penunjukan likuidator, penerima, wali,
 manajer pengadilan, administrator,
 penerima tugas administrasi, manajer
 utama, pengawas sementara atau
 petugas lainnya yang sejenis
 sehubungan dengan Pelanggan atau
 aset miliknya; atau
 																	</p>
 																</div>
 															</div>
 														</div>
 													</div>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 16 f iv a --->
 								
 								
 								<!-- S:POINT 16 f iv a --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<div class="row">
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 															<div class="row">
 																<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(D)</p></div> 
 																<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 																	<p>
 																	enforcement of any mortgage, charge,
 pledge, lien or other security interest (or
 any other agreement or arrangement
 having a similar effect) over any assets of
 the Customer (including the Goods),
 																	</p>
 																</div>
 															</div>
 														</div>
 													</div>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<div class="row">
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 															<div class="row">
 																<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(D)</p></div> 
 																<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 																	<p>
 																	penegakan atas setiap hipotek, biaya,
 jaminan, hak atas jaminan atau bunga
 jaminan lainnya (atau perjanjian atau
 pengaturan lainnya yang memiliki efek
 sejenis) terhadap setiap aset yang
 dimiliki oleh Pelanggan (termasuk
 Barang),
 																	</p>
 																</div>
 															</div>
 														</div>
 													</div>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 16 f iv a --->
 								
 								
 								
 								<!-- S:POINT 16 f iv a --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<div class="row">
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 															
 																	<p>
 																	or any analogous procedure or step is taken in any jurisdiction; or
 																	</p>
 																
 														</div>
 													</div>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<div class="row">
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 															
 																	<p>
 																	atau prosedur atau langkah yang sama yang diambil dalam setiap yurisdiksi; atau
 																	</p>
 																
 														</div>
 													</div>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 16 f iv a --->
 								
 								
 								<!-- S:POINT 16.2 f v --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<div class="row">
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(v)</p></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 														<p>
 															if the Customer ceases or threatens to cease to
 carry on the whole or any substantial part of its
 core business as at the date of the Application;
 														</p>
 														</div>
 													</div>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<div class="row">
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(v)</p></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 														<p>
 															apabila Pelanggan berhenti atau mengancam untuk
 berhenti melakukan seluruh atau sebagian besar
 dari bisnis utama pada tanggal Permohonan;	
 														</p>
 														</div>
 													</div>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 16 f v --->
 								
 								<!-- S:POINT 16 f vi --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<div class="row">
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(vi)</p></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 														<p>
 															if the Customer shall fail to perform or observe
 any term or condition of the Contract,
 														</p>
 														</div>
 													</div>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<div class="row">
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(vi)</p></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 														<p>
 																apabila Pelanggan gagal untuk melakukan atau
 memahami syarat dan ketentuan Kontrak;
 														</p>
 														</div>
 													</div>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 16 f vi --->
 								
 								<!-- S:POINT 16.2 g --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(g)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														Without prejudice to the generality of <b>paragraph (e)</b>
 														 above, if due to any reason whatsoever (except the
 														 default of NPCT1) the Customer shall not pay the
 														 Contract Sum on or before the due date for payment
 														 referred to in <b>paragraphs (a), (d)</b> and/or <b>(e)</b> above:
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(g)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														 Dengan tidak mengurangi keadaan umum yang
 disebutkan dalam <b>ayat (e)</b> di atas, apabila karena
 alasan apapun (kecuali kelalaian dari NPCT1),
 Pelanggan tidak diwajibkan untuk membayar Nilai
 Kontrak pada atau sebelum tanggal jatuh tempo
 pembayaran sebagaimana disebutkan dalam <b>ayat (a), (d)</b> dan/atau <b>(e)</b> di atas:
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 16.2 g --->
 								
 								
 								
 								<!-- S:POINT 16.2 g i --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<div class="row">
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(i)</p></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 														<p>
 															NPCT1 shall be entitled to engage the services
 of any person(s) to recover such sum from
 the Customer, at the Customer’s cost; and
 														</p>
 														</div>
 													</div>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<div class="row">
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(i)</p></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 														<p>
 																NPCT1 berhak untuk menggunakan jasa
 orang lain untuk mengembalikan sejumlah
 nilai dari Pelanggan, atas tanggungan
 Pelanggan; dan
 
 														</p>
 														</div>
 													</div>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 16 g i --->
 								
 								<!-- S:POINT 16 g ii --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<div class="row">
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(ii)</p></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 														<p>
 															Notwithstanding <b>sub-paragraph (i)</b> above,
 the Customer shall in addition to the Contract
 Sum and the costs described in <b>subparagraph (i)</b> above (if any), pay to NPCT1
 interest on such sums at the rate of 2% per
 month or such other rate as may be notified
 to the Customer and the costs at the rate
 equivalent to the rate stipulated in the NPCT1
 Tariff or in the Contract (as the case may be),
 which interest shall be payable on a day to
 day basis from the date immediately after the
 due date for payment to the date of actual
 payment of such sums, the costs and interest
 thereon or to the date of expiry or sooner
 termination of the Contract, whichever is
 earlier.
 														</p>
 														</div>
 													</div>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<div class="row">
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(ii)</p></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 														<p>
 															Dengan tidak mengesampingkan bagian dari
 <b>ayat (i)</b> di atas, Pelanggan harus, selain dari
 Nilai Kontrak dan biaya-biaya yang
 disebutkan pada bagian dari <b>ayat (i)</b> di atas
 (apabila ada), untuk membayar kepada
 NPCT1, bunga atas jumlah tersebut sebesar
 2% per bulan atau sebesar tingkat bunga
 yang diinformasikan kepada Pelanggan dan
 biaya-biaya di tingkat yang setara kepada
 tingkat bunga yang telah ditetapkan dalam
 Tarif NPCT1 atau dalam Kontrak
 (sebagaimana kemungkinan kasus), di mana
 bunga harus dibayarkan dari hari ke hari,
 terhitung dari tanggal paling dekat dengan
 tanggal jatuh tempo pembayaran sampai
 dengan tanggal pembayaran aktual atas
 jumlah tersebut, biaya-biaya dan bunganya
 atau sejak tanggal jatuh tempo atau segera
 setelah pemutusan Kontrak, mana yang lebih
 dahulu.	
 														</p>
 														</div>
 													</div>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 16 g ii --->
 								
 								
 								<!-- S:POINT 16.2 g iii --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<div class="row">
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(iii)</p></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 														<p>
 															NPCT1 shall be entitled to:
 														</p>
 														</div>
 													</div>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<div class="row">
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(iii)</p></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 														<p>
 																NPCT1 berhak untuk:
 
 														</p>
 														</div>
 													</div>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 16 g iii --->
 								
 								
 								<!-- S:POINT 16 f iv a --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<div class="row">
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 															<div class="row">
 																<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>a.</p></div> 
 																<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 																	<p>
 																	suspend forthwith upon notice to the
 Customer any or all of NPCT1’s
 obligations under the Contract
 including, without prejudice to the
 generality of the foregoing, the
 provision of Services and/or
 Facilities; and/or
 																	</p>
 																</div>
 															</div>
 														</div>
 													</div>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<div class="row">
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 															<div class="row">
 																<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>a.</p></div> 
 																<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 																	<p>
 													Segera melakukan penangguhan suatu
 atau seluruh kewajiban NPCT1
 berdasarkan Kontrak, melalui
 pemberitahuan kepada Pelanggan,
 termasuk namun tanpa mengurangi
 garis besar dari Ketentuan diatas,
 penyediaan Layanan dan/atau Fasilitas;
 dan/atau
 																	</p>
 																</div>
 															</div>
 														</div>
 													</div>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 16 f iv a --->
 								
 								
 								<!-- S:POINT 16 f iv a --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<div class="row">
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 															<div class="row">
 																<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>b.</p></div> 
 																<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 																	<p>
 																	terminate the Contract forthwith upon
 notice to the Customer.
 																	</p>
 																</div>
 															</div>
 														</div>
 													</div>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<div class="row">
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 															<div class="row">
 																<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>b.</p></div> 
 																<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 																	<p>
 													Mengakhiri Kontrak dengan segera
 setelah pemberitahuan kepada
 Pelanggan.
 																	</p>
 																</div>
 															</div>
 														</div>
 													</div>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 16 f iv a --->
 								
 								
 								<!-- S:POINT 16.2 g iii --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<div class="row">
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 														<p>
 															In the event that NPCT1 elects to suspend any
 or all of its obligations under the Contract,
 such suspension shall subsist unless
 otherwise notified by NPCT1. For the
 avoidance of doubt, NPCT1’s rights of
 suspension and termination are cumulative
 and not in the alternative, and NPCT1’s
 exercise of its right of suspension shall not
 in any way be construed as a suspension
 and/or waiver of NPCT1’s rights and the
 Customer’s obligations under the Contract
 and/or the Customer’s breach(es) of the
 Contract.
 														</p>
 														</div>
 													</div>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<div class="row">
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 														<p>
 																Dalam hal NPCT1 memilih untuk
 menangguhkan sebagian atau seluruh
 kewajibannya berdasarkan Kontrak,
 penangguhan tersebut haruslah berlaku,
 kecuali dinyatakan lain oleh NPCT1. Untuk
 menghindari keraguan, hak penangguhan
 dan penghentian dari NPCT1 bersifat
 kumulatif dan tidak bersifat alternatif, dan
 pelaksanaan hak penangguhan dari NPCT1
 tidak dapat ditafsirkan sebagai bentuk
 penangguhan dan/atau pengabaian hak
 NPCT1 dan kewajiban Pelanggan berdasarkan
 Kontrak dan/atau pelanggaran Pelanggan
 terhadap Kontrak. 
 
 														</p>
 														</div>
 													</div>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 16 g iii --->
 								
 								<!-- S:POINT 16.2 h --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(h)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														Time shall be of the essence for the purposes of this General Condition.
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(h)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														Waktu haruslah menjadi pokok dari tujuan Ketentuan Umum ini.
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 16.2 h --->
 							<!-------------------------- E:POINT 16 -------------------------->
 							
 							
 							<!-------------------------- S:POINT 17 -------------------------->
 							<!-- S:MODUL POINT 17 --->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>17.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											THIRD PARTY CHARGES AND SUMS ON GOODS
 										</b>
 									</div>
 								</div> 
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>17.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											BIAYA PIHAK KETIGA DAN NILAI BARANG
 										</b>
 									</div>
 								</div>
 							</div>
 							
 							
 								<!-- S:POINT 17.1 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>17.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Goods to be Free of Third Party Charges or Sums
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>17.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Barang yang Dibebaskan Akibat Biaya dan Nilai dari Pihak Ketiga
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 17.1 --->
 								
 								
 								<!-- S:POINT 17.1.1 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>17.1.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												The Customer shall ensure that the Goods are delivered to
 NPCT1 free of any charges or sums due to third parties
 including any freight, port charges, taxes, duties,
 contributions, fines and any other costs.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>17.1.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Pelanggan harus memastikan bahwa pengiriman Barang
 ke NPCT1 adalah bebas dari biaya atau jumlah hutang
 kepada pihak ketiga, termasuk biaya pengangkuan, biaya pelabuhan, pajak, bea, kontribusi, denda dan biaya-biaya
 lainnya.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 17.1.1 --->
 								
 								
 								<!-- S:POINT 17.1.2 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>17.1.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												NPCT1 shall be entitled to refuse to take delivery of any
 Goods in respect of which NPCT1 is not satisfied that all such
 charges and sums have been paid.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>17.1.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												NPCT1 berhak untuk menolak pengiriman Barang
 sehubungan dengan NPCT1 tidak puas terhadap seluruh
 biaya dan jumlah yang telah dibayarkan tersebut.
 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 17.1.2 --->
 								
 								
 								
 								<!-- S:POINT 17.1.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>17.1.3</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												NPCT1 shall not be liable for nor be obliged to recover any
 such unpaid charges or sums or other charges or sums which
 have been overpaid or mistakenly paid by the Customer to
 any third party.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>17.1.3</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 NPCT1 tidak bertanggung jawab ataupun berkewajiban
 untuk mengembalikan kepada pihak ketiga biaya atau
 jumlah yang belum dibayarkan tersebut atau biaya atau
 jumlah lainnya yang telah dibayarkan lebih atau
 kekeliruan pembayaran oleh Pelanggan.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 17.1.3 --->
 								
 								<!-- S:POINT 17.2 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>17.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Cost of Professional Services
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>17.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Biaya atas Jasa Profesional
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 17.2 --->
 								
 								<!-- S:POINT 17.2 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												If NPCT1, in its absolute discretion, deems it necessary to seek
 professional services or to commence legal proceedings or to
 take other legal measures in relation to such unpaid charges
 or sums payable to the third parties, all costs and expenses
 incurred by NPCT1 in respect of such services, proceedings
 and measures shall be borne by the Customer.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Apabila NPCT1, dalam kewenangannya yang mutlak,
 memandang perlu untuk mendapatkan layanan jasa
 profesional atau untuk memulai proses hukum atau
 untuk mengambil tindakan hukum dalam kaitannya
 dengan biaya atau jumlah yang belum dibayar kepada
 pihak ketiga, maka seluruh biaya dan pengeluaranpengeluaran yang timbul dan yang dibayarkan oleh
 NPCT1 sehubungan dengan jasa, prosedur dan langkahlangkah tersebut akan menjadi tanggungan Pelanggan.
 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 17.2 --->
 								
 								<!-- S:POINT 17.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>17.3</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Customer’s Liability
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>17.3</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Kewajiban Pelanggan
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 17.3 --->
 								
 								<!-- S:POINT 17.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Notwithstanding that NPCT1 may have taken delivery of the
 Goods, the Customer shall be liable for such unpaid charges
 and sums and shall indemnify NPCT1, its employees and
 agents against any Claims against NPCT1, its employees or
 agents arising in respect of such unpaid charges and sums,
 regardless of the location of the Goods at that point in time
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Tanpa mengesampingkan bahwa NPCT1 mungkin telah
 melakukan pengiriman atas Barang, Pelanggan
 bertanggung jawab atas biaya dan jumlah yang belum
 dibayar dan harus mengganti kerugian NPCT1, karyawan
 dan agen NPCT1 atas setiap Klaim terhadap NPCT1,
 Karyawan dan agen NPCT1, yang timbul sehubungan
 dengan biaya dan jumlah yang belum dibayarkan
 tersebut, terlepas dari lokasi Barang.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 17.3 --->
 							<!-------------------------- E:POINT 17 -------------------------->
 							
 							
 							<!-------------------------- S:POINT 18 -------------------------->
 							<!-- S:MODUL POINT 18 --->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>18.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											RIGHTS OVER GOODS AND VESSELS
 										</b>
 									</div>
 								</div> 
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>18.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											HAK ATAS BARANG DAN KAPAL
 										</b>
 									</div>
 								</div>
 							</div>
 							
 							
 								<!-- S:POINT 18.1 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>18.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Right of Lien and Retention
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>18.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Hak Gadai dan Hak Kontro
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 18.1 --->
 								
 								
 								
 								<!-- S:POINT 18.1.1 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>18.1.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												NPCT1 shall have the right of lien and retention over all
 property (including the Goods) and all sums (including any
 sums collected by NPCT1 from third parties on behalf of the
 Customer) and all documents which NPCT1 shall now or
 hereafter hold of or for the Customer or which is now or
 hereafter due to the Customer, to secure the payment of the
 Contract Sum and the discharge of all liabilities of the
 Customer to NPCT1 under the Contract or at law.
 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>18.1.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												NPCT1 berhak atas hak gadai dan hak kontrol atas
 seluruh properti (termasuk Barang) dan seluruh jumlah
 (termasuk setiap nilai/jumlah yang dikumpulkan oleh
 NPCT1 dari pihak ketiga atas nama Pelanggan) dan semua
 dokumen di mana NPCT1, mulai dari sekarang hingga
 waktu yang akan datang, dikarenakan oleh Pelanggan,
 untuk mengamankan pembayaran atas Nilai Kontrak dan
 pelepasan seluruh kewajiban Pelanggan kepada NPCT1
 berdasarkan Kontrak atau hukum yang berlaku.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 18.1.1 --->
 								
 								
 								
 								<!-- S:POINT 18.1.2 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>18.1.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												In the exercise of NPCT1’s right of lien and retention, NPCT1
 shall be entitled to seize and detain such property, sums and
 documents until the sums due from the Customer to NPCT1
 are fully paid.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>18.1.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Dalam pelaksanaan hak NPCT1 atas hak gadai dan hak
 kontrol, NPCT1 berhak untuk menduduki dan menahan
 misalnya properti, jumlah/nilai dan dokumen-dokumen
 hingga jumlah/nilai terutang Pelanggan kepada NPCT1
 telah dibayarkan penuh. 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 18.1.2 --->
 								
 								
 								<!-- S:POINT 18.1.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>18.1.3</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												NPCT1’s lien shall have priority over all other liens and claims
 in respect of such property, sums and documents.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>18.1.3</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Hak gadai yang dimiliki oleh NPCT1 harus menjadi yang
 utama atas hak gadai dan klaim lainnya sehubungan
 dengan properti, jumlah/nilai dan dokumen-dokumen
 tersebut.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 18.1.3 --->
 								
 								<!-- S:POINT 18.2 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>18.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Power to Dispose of Goods Remaining in Custody
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>18.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Kuasa untuk Melepaskan Barang yang Masih Dalam Penahanan
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 18.2 --->
 								
 								
 								<!-- S:POINT 18.2.1 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>18.2.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												If the Goods are not removed from the Facilities within the
 period stipulated by NPCT1 under the Contract or if the
 Customer fails to pay to NPCT1 the Contract Sum for any
 reason, NPCT1 may dispose of the Goods by sale or in such
 other manner as it thinks fit <b>Provided that</b> in the case of a
 hazard or an emergency or if the Goods are of a perishable
 nature NPCT1 may direct or effect their removal or disposal
 immediately or within such shorter period as NPCT1 deems
 fit.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>18.2.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Apabila Barang tidak dipindahkan dari Bagian Fasilitas
 dalam periode waktu yang telah ditentukan oleh NPCT1
 dalam Kontrak atau apabila Pelanggan gagal untuk
 membayar kepada NPCT1 sejumlah Nilai Kontrak dengan
 alasan apapun, NPCT1 dapat melepaskan Barang melalui
 cara dijual atau dengan cara lainnya yang dianggap
 sesuai, <b>HANYA JIKA</b> dalam kasus berbahaya atau darurat
 atau apabila Barang tersebut memiliki sifat yang mudah
 rusak, maka NPCT1 dapat secara langsung atau
 mempengaruhi pemindahan atau pelepasan dengan
 segera atau dalam jangka waktu yang lebih pendek
 sepanjang dianggap sesuai oleh NPCT1.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 18.2.1 --->
 								
 								
 								<!-- S:POINT 18.2.2 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>18.2.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												NPCT1 shall render the surplus proceeds of sale after
 deducting payments of any and all sums due to NPCT1,
 including the Contract Sum, and any other sums due to third
 parties payable by NPCT1 in relation to the Goods and/or the
 Customer whether under the Contract or any other contract
 or at law, if any, to the Customer and any other person
 entitled thereto on demand, and, in case no such demand is
 made within one year from the date of the sale of such
 property the surplus shall be paid to the account of NPCT1,
 whereupon all rights to the same by such person shall be
 extinguished. If the proceeds of sale of the Goods by NPCT1
 pursuant to this condition is insufficient to satisfy in full any
 claim of NPCT1 under the Contract, under any other contract
 made between NPCT1 and the Customer or at law, NPCT1
 shall be entitled to recover the balance from the Customer as
 a debt in any court of competent jurisdiction.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>18.2.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												NPCT1 akan mengembalikan kelebihan hasil penjualan
 setelah dikurangi pembayaran atas setiap atau seluruh
 jumlah tagihan yang belum diselesaikan kepada NPCT1,
 termasuk Nilai Kontrak, dan jumlah tagihan lain yang
 disebabkan oleh kewajiban pembayaran kepada pihak
 ketiga oleh NPCT1 dalam kaitannya dengan Barang
 dan/atau Pelanggan, baik itu berdasarkan Kontrak atau
 kontrak lainnya atau sesuai dengan hukum yang berlaku,
 apabila ada, kepada Pelanggan dan pihak lain yang
 berhak atas permintaan, dan, apabila tidak ada
 permintaan dalam jangka waktu satu tahun semenjak
 tanggal penjualan properti, kelebihan hasil penjualan
 akan dibayarkan kepada NPCT1, di mana semua hak yang
 dimiliki oleh orang/pihak tersebut menjadi tidak lagi
 berlaku. Apabila hasil penjualan Barang oleh NPCT1
 berdasarkan persyaratan ini adalah tidak cukup untuk
 menutupi setiap klaim dari NPCT1 berdasarkan Kontak,
 berdasarkan kontak lainnya yang dibuat antara NPCT1
 dan Pelanggan atau hukum yang berlaku, NPCT1 berhak
 untuk mendapatkan kembali saldo dari Pelanggan
 sebagai hutang di pengadilan yang berwenang. 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 18.2.2 --->
 								
 								<!-- S:POINT 18.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>18.3</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Power to Distrain for Non-Payment of Contract Sum
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>18.3</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Kuasa untuk Menyita Jumlah Nilai Kontrak yang Tidak Dibayar
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 18.3 --->
 								
 								<!-- S:POINT 18.3.1 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>18.3.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												If the Customer fails to pay the Contract Sum in accordance
 with the Contract, NPCT1 may, in addition to any other
 remedy, distrain or arrest the Vessel in respect of which such
 Contract Sum is payable and the tackle, apparel or furniture
 belonging thereto or any part thereof, and detain the same
 until the amount so due is paid.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>18.3.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Apabila Pelanggan tidak dapat membayar Nilai Kontrak
 sesuai dengan Kontrak yang berlaku, NPCT1 akan,
 sebagai tambahan kewenangan lainnya, menyita atau
 menahan Kapal yang memiliki kaitan dengan Nilai
 Kontrak yang harus dibayar dan diselesaikan,
 perlengkapan atau perabotan yang dimiliki atau bagian
 daripadanya, dan menahannya sampai dengan jumlah
 yang belum terbayarkan itu lunas.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 18.3.1 --->
 								
 								<!-- S:POINT 18.3.2 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>18.3.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												In case any part of the Contract Sum or of the costs of the
 distress or arrest, or of the keeping of the Vessel, tackle,
 apparel or furniture, remains unpaid for a period of not less
 than 14 days after any such distress or arrest has been so
 made, NPCT1 may cause the Vessel or other thing so
 distrained or arrested to be sold, and with the proceeds of
 the sale may satisfy those charges, other sums and costs,
 including the costs of sale remaining unpaid, rendering the
 surplus, if any, to the master or owner of the Vessel on
 demand.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>18.3.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Dalam bagian apapun dari Nilai Kontrak atau biaya dari
 penyitaan atau penahanan, atau penahanan Kapal,
 penyelesaian, perlengkapan atau perabotan, yang tetap
 belum dibayarkan dalam jangka waktu tidak kurang dari
 14 hari setelah penyitaan atau penahanan yang terjadi,
 NPCT1 dapat mengambil Kapal atau hal lainnya untuk
 dijual, di mana proses penjualan tersebut dapat
 digunakan untuk menutupi beban, jumlah dan biaya lain,
 termasuk biaya penjualan yang tersisa yang belum
 dibayar, mengembalikan kelebihan, apabila ada, kepada
 Nakhoda atau pemilik Kapal, sesuai permintaan. 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 18.3.2 --->
 							<!-------------------------- E:POINT 18 -------------------------->
 							
 							
 							<!-------------------------- S:POINT 19 -------------------------->
 							<!-- S:MODUL POINT 19 --->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>19.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											TRANSFER OF RIGHT OR INTEREST IN GOODS
 										</b>
 									</div>
 								</div> 
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>19.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											PENGALIHAN HAK ATAU KEPENTINGAN ATAS BARAN
 										</b>
 									</div>
 								</div>
 							</div>
 							
 							
 							<!-- S:POINT 19.1 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>19.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													NPCT1 Not Bound
 
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>19.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													NPCT1 Tidak Terikat
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 19.1 --->
 								
 								
 								<!-- S:POINT 19.1.1 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>19.1.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												NPCT1 shall not be obliged to recognise nor be bound by any
 transfer of ownership or the right to delivery or possession or
 other right or interest in respect of the Goods.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>19.1.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												NPCT1 tidak berkewajiban untuk mengakui atau terikat
 dengan pengalihan kepemilikan atau pelepasan hak atau
 kepemilikan atau hak lain atau kepentingan lain
 sehubungan dengan Barang.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 19.1.1 --->
 								
 								
 								<!-- S:POINT 19.1.2 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>19.1.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												The Customer shall be liable for all Claims arising from any
 refusal of NPCT1 to recognise or to be bound by the intended
 transfer of ownership or other interest in the Goods and shall
 indemnify NPCT1, its employees and agents in respect of such
 Claims. 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>19.1.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Pelanggan bertanggung jawab atas semua Klaim yang
 timbul dari penolakan NPCT1 untuk mengakui atau untuk
 terikat dengan pengalihan kepemilikan yang dimaksud
 atau kepentingan lain atas Barang dan harus mengganti
 kerugian NPCT1, karyawan dan agen NPCT1 sehubungan
 dengan Klaim tersebut.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 19.1.2 --->
 								
 								<!-- S:POINT 19.2 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>19.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Disputes
 
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>19.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Perselisihan
 
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 19.2 --->
 								
 								
 								<!-- S:POINT 19.2.1 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>19.2.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												If there shall be any dispute between NPCT1 and the
 Customer or between NPCT1 and any third party relating to
 the ownership of or other right, title or interest in the Goods
 or if the Goods shall be attached, detained or seized by a third
 party in any way, NPCT1 shall be entitled to detain the Goods
 until the dispute is resolved by the competent court or
 otherwise settled.
 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>19.2.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Apabila terdapat perselisihan antara NPCT1 dengan
 Pelanggan atau antara NPCT1 dengan pihak ketiga terkait
 dengan kepemilikan atau hak, penunjukan/penetapan
 atau kepentingan lain atas Barang atau apabila Barang
 harus disertakan, ditahan atau disita oleh pihak ketiga
 dengan cara apapun, NPCT1 berhak untuk menahan
 Barang hingga perselisihan tersebut diselesaikan oleh
 pengadilan yang berwenang atau telah dilakukan
 pelunasan.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 19.2.1 --->
 								
 								
 								<!-- S:POINT 19.2.2 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>19.2.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												NPCT1 shall be entitled:
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>19.2.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												NPCT1 berhak:
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 19.2.2 --->
 								
 								
 								
 								<!-- E:POINT 19.2.2 a --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(a)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 to seek any legal and other professional services or
 to commence any legal proceedings or to take any
 measure which it deems necessary to protect its
 interest in such dispute, attachment, detention or
 seizure or to resolve such dispute, in which event
 the risk and expense of such services, proceedings
 and measure shall be borne by the Customer; and
 
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(a)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														untuk mencari jasa hukum dan jasa profesional
 lainnya atau untuk memulai proses hukum atau
 untuk mengambil tindakan yang dianggap perlu
 untuk melindungi kepentingan seperti perselisihan,
 keterikatan, penahanan atau penguasaan atau
 untuk menyelesaikan perselisihan tersebut di mana
 faktor risiko dan biaya atas layanan, proses dan
 penilaian tersebut harus ditanggung oleh
 Pelanggan; dan 
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 19.2.2 a --->
 								
 								<!-- E:POINT 19.2.2 b --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(b)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 notwithstanding <b>Condition 7</b>, to retain the Goods
 and such other goods forming part of the Goods at
 the risk and expense of the Customer until the
 resolution or settlement of such dispute to NPCT1’s
 satisfaction.
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(b)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														dengan tidak mengesampingkan <b>Ketentuan 7</b>,
 untuk mempertahankan Barang dan barang lain
 yang merupakan bagian dari Barang dengan risiko
 dan biaya dari Pelanggan hingga keputusan atau
 penyelesaian perselisihan tersebut memenuhi
 harapan NPCT1.
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 19.2.2 b --->
 								
 								<!-- S:POINT 19.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>19.3</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Responsibility of Customer
 
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>19.3</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Tanggung Jawab Pelanggan
 
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 19.3 --->
 								
 								
 								<!-- S:POINT 19.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Notwithstanding the transfer of any right or interest in the
 Goods, until and unless NPCT1 shall have agreed to recognise
 and be bound by such transfer, the Customer shall continue
 to perform and observe the conditions of the Contract
 (including the obligation to pay the Contract Sum and all
 Claims) even insofar as they relate to any Services/Facilities
 provided after the transfer.
 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Dengan tidak mengesampingkan pengalihan hak atau
 kepentingan atas Barang, hingga dan kecuali NPCT1 harus
 telah memberikan persetujuannya untuk mengakui dan
 terikat dengan peralihan tersebut, Pelanggan harus terus
 melakukan dan mematuhi ketentuan-ketentuan dalam
 Kontrak (termasuk kewajiban pembayaran Nilai Kontrak
 dan seluruh Klaim), bahkan sepanjang yang berkaitan
 dengan setiap Layanan/Fasilitas yang disediakan setelah
 peralihan.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 19.3 --->
 								
 								<!-- S:POINT 19.4 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>19.4</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													When Transferee Deemed To Be Customer
 
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>19.4</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Dimana Penerima Peralihan Menjadi Pelanggan
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 19.4 --->
 								
 								<!-- S:POINT 19.4 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Upon NPCT1’s recognition and contract to be bound by the
 transfer, the transferee shall be deemed to be the Customer
 for the purposes of the Contract and shall also be jointly and
 severally liable with its predecessor in title for the
 performance and observance of the Contract as described.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Atas pengakuan NPCT1 dan kontrak menjadi terikat oleh
 karena peralihan, Pihak Penerima Peralihan akan
 dianggap menjadi Pelanggan untuk tujuan Kontrak, dan
 akan bertanggung jawab secara masing-masing dan
 bersama-sama dengan pendahulunya dalam pelaksanaan
 dan kepatuhan terhadap Kontrak seperti yang telah
 dijelaskan.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 19.4 --->
 							<!-------------------------- E:POINT 19 -------------------------->
 							
 							
 							<!-------------------------- S:POINT 20 -------------------------->
 							<!-- S:MODUL POINT 20 --->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>20.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											REMOVAL OF GOODS
 										</b>
 									</div>
 								</div> 
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>20.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											PEMINDAHAN BARANG
 										</b>
 									</div>
 								</div>
 							</div>
 							
 							
 								<!-- S:POINT 7.4.2 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Notwithstanding the other provisions of the Contract, NPCT1
 may require the Customer to remove any Goods at any time
 by giving 14 (fourteen) days’ prior notice or shorter notice (as
 determined by NPCT1) for perishable Goods. The Customer
 shall remove all Goods from the Facilities upon expiry or
 termination of the Contract.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Dengan tidak mengesampingkan ketentuan lain dalam
 Kontrak, NPCT1 dapat meminta kepada Pelanggan untuk
 memindahkan Barang setiap saat dengan memberikan
 pemberitahuan empat belas hari sebelum atau lebih awal
 (sebagaimana ditentukan oleh NPCT1) untuk Barang yang
 tahan lama. Pelanggan harus memindahkan semua
 Barang dari Bagian Fasilitas pada saat berakhirnya atau
 pemutusan Kontrak.
 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 7.4.2 --->
 							
 							
 							<!-------------------------- E:POINT 20 -------------------------->
 							
 							
 							<!-------------------------- S:POINT 21 -------------------------->
 							<!-- S:MODUL POINT 21 --->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>21.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											RIGHT OF DISPOSAL
 										</b>
 									</div>
 								</div> 
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>21.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											HAK NTUK PEMBUANGAN
 										</b>
 									</div>
 								</div>
 							</div>
 						
 							
 							
 								<!-- S:POINT 21.1 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>21.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													NPCT1 Shall Be Entitled to Dispose
 
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>21.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													NPCT1 Berhak untuk Melakukan Pembuangan
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 21.1 --->
 								
 								
 								<!-- S:POINT 21.1 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												If due to any reason whatsoever the Customer fails:
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Jika dikarenakan alasan apapun, Pelanggan gagal:
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 21.1 --->
 								
 								
 								<!-- S:POINT 7.4.2 a --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(a)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 to remove the Goods due to any reason whatsoever
 upon the expiry of the notice given by NPCT1 therefor or
 upon the expiry or sooner termination of the Contract;
 or
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(a)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														untuk memindahkan Barang, dengan alasan
 apapun, hingga saat berakhirnya pemberitahuan
 yang diberikan oleh NPCT1 maupun saat diputusnya
 Kontrak lebih awal; atau
 
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 7.4.2 a --->
 								<!-- S:POINT 7.4.2 a --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(b)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 to pay to NPCT1 the Contract Sum due to any reason
 whatsoever,
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(b)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														untuk melakukan pembayaran kepada NPCT1, atas
 dasar alasan apapun, atas sejumlah nilai Kontrak,
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 7.4.2 a --->
 								
 								
 								
 								<!-- S:POINT 21.1 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												NPCT1 shall be entitled, without further notice or demand
 to the Customer to remove the Goods from the Facilities
 to any place whether in or outside NPCT1 and dispose of
 or destroy the Goods in such manner as NPCT1 deems fit,
 carried out in accordance with prevailing laws and regulations
 and at the risk and expense of the Customer.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												NPCT1 berhak, tanpa pemberitahuan lebih lanjut atau
 atas permintaan kepada Pelanggan untuk memindahkan
 Barang dari Fasilitas ke tempat mana pun, baik di dalam
 maupun diluar NPCT1 dan melakukan pembuangan atau
 penghancuran Barang dengan cara yang dianggap sesuai
 oleh NPCT1, dilakukan sesuai hukum dan peraturan yang
 berlaku, dimana resiko serta biaya merupakan
 tanggungjawab Pelanggan.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 21.1 --->
 								
 								<!-- S:POINT 21.2 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>21.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Disposal by Sale
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>21.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Pembuangan melalui Penjualan
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 21.1 --->
 								
 								
 								<!-- S:POINT 21.2.1 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>21.2.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												If NPCT1 shall decide to dispose of the Goods by sale by private treaty or public auction:
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>21.2.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Jika NPCT1 memutuskan untuk membuang Barang dengan cara dijual melalui perjanjian tertutup atau lelang terbuka
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 21.2.1 --->
 								
 								
 								<!-- S:POINT 7.4.2 a --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(a)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 NPCT1 shall be entitled to open or break open without
 being liable for any damage caused thereby, any
 container or any other package containing the Goods;
 and
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(a)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														NPCT1 berhak untuk membuka atau membuka paksa
 setiap peti kemas atau jenis pengiriman lain yang
 berisi Barang, tanpa perlu bertanggung jawab atas
 kerusakan yang diakibatkan oleh proses membuka
 atau membuka paksa tersebut; dan
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 7.4.2 a --->
 								
 								<!-- S:POINT 7.4.2 a --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(b)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														any proceeds of sale shall be applied by NPCT1 in the following manner:
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(b)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														proses penjualan akan dilakukan oleh NPCT1 sebagai berikut:
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 7.4.2 a --->
 								
 								
 								<!-- S:POINT 7.4.2 a --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<div class="row">
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>i.</p></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 															<p>
 																firstly, in payment of the Contract Sum or any
 other sum due from the Customer to NPCT1
 under any other contract between NPCT1 and
 the Customer;
 															</p>
 														</div>
 													</div>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<div class="row">
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>i.</p></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 															<p>
 																pertama-tama adalah dalam hal pembayaran
 atau jumlah Kontrak atau jumlah lain yang
 dibayarkan oleh Pelanggan kepada NPCT1
 berdasarkan kontrak lain NPCT1 dengan
 Pelanggan;
 															</p>
 														</div>
 													</div>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 7.4.2 a --->
 								
 								
 								<!-- S:POINT 7.4.2 a --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<div class="row">
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>ii.</p></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 															<p>
 																secondly, in payment of the expenses of the
 removal and disposal and any storage of the
 Goods in the period between such removal and
 disposal;
 
 															</p>
 														</div>
 													</div>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<div class="row">
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>ii.</p></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 															<p>
 																kedua adalah untuk pembayaran biaya
 pemindahan dan oembuangan Barang dalam
 periode antara proses pemindahan dan proses
 pembuangan terserbut;
 
 															</p>
 														</div>
 													</div>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 7.4.2 a --->
 								
 								
 								<!-- S:POINT 7.4.2 a --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<div class="row">
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>iii.</p></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 															<p>
 																thirdly, in payment of any sums due from the
 Customer to the competent authorities; and
 															</p>
 														</div>
 													</div>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<div class="row">
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>iii.</p></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 															<p>
 																ketiga adalah dalam hal pembayaran atas jumlah
 yang telah jatuh tempo dari Pelanggan kepada
 pihak yang berwenang; dan
 															</p>
 														</div>
 													</div>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 7.4.2 a --->
 								
 								
 								<!-- S:POINT 7.4.2 a --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<div class="row">
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>iv.</p></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 															<p>
 																fourthly, in payment of other claims or liens of
 which notice has been given by third parties to
 NPCT1,and lastly by rendering any surplus to the Customer on
 demand and if no such demand is made within one
 year from the date of such sale, by retaining the
 surplus whereupon all rights of the Customer to the
 surplus shall be extinguished.
 															</p>
 														</div>
 													</div>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<div class="row">
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>iv.</p></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 															<p>
 																keempat adalah dalam hal pembayaran klaim
 atau hak gadai yang pemberitahuannya telah
 diberikan oleh pihak ketiga kepada NPCT1,
 dan terakhir, dengan memberikan kelebihan kepada
 Pelanggan atas permintaan dan jika tidak ada
 permintaan akan hal tersebut dalam kurun waktu 1
 (satu) tahun sejak tanggal penjualan yang dimaksud,
 maka dengan mempertahankan kelebihan tersebut,
 seluruh hak Pelanggan atas kelebihan tersebut akan
 dihapus.
 
 															</p>
 														</div>
 													</div>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 7.4.2 a --->
 								
 								
 								
 								
 								<!-- S:POINT 21.2.2 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>21.2.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												If the proceeds of any sale of the Goods by NPCT1 pursuant
 to <b>Condition 21.2.1</b> shall be insufficient to satisfy in full any
 claim of NPCT1 under the Contract and under any other
 contract made between NPCT1 and the Customer, NPCT1
 shall be entitled to recover the balance from the Customer as
 a debt in any court of competent jurisdiction
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>21.2.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Jika setiap hasil penjualan Barang oleh NPCT1 berdasarkan
 <b>Ketentuan 21.2.1</b> tidak cukup untuk memenuhi seluruh
 klaim terhadap NPCT1 berdasarkan Kontrak dan juga
 kontrak lain yang dibuat antara NPCT1 dengan Pelanggan,
 maka NPCT1 berhak untuk memperoleh kekurangan
 pembayaran kewajiban dari Pelanggan, yang akan
 ditetapkan sebagai hutang Pelanggan kepada NPCT1,
 melalui Pengadilan manapun sesuai yurisdiksinya. 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 21.2.2 --->
 								
 								
 								
 								<!-- S:POINT 21.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>21.3</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													 No Liability
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>21.3</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Tanpa Pertanggungjawaban
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 21.3 --->
 								
 								
 								<!-- S:POINT 21.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												NPCT1 shall not be liable for any Claim arising from the
 removal, disposal, destruction and intermediate storage of
 the Goods and the Customer shall indemnify NPCT1, its
 employees and agents against such Claims.
 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												NPCT1 tidak akan bertanggung jawab atas Klaim yang
 timbuk akibat penghapusan, pemusnahan, perusakan dan
 penyimpanan di tempat sementara atas Barang dan
 Pelanggan wajib mengganti kerugian NPCT1, karyawan,
 agen dari NPCT1 terhadap Klaim tersebut.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 21.3 --->
 							<!-------------------------- E:POINT 21 -------------------------->
 							
 							
 							
 							<!-------------------------- S:POINT 22 -------------------------->
 							<!-- S:MODUL POINT 3 --->
 							<!-- S:MODUL POINT --->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>22.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											OPERATING REQUIREMENTS AND NPCT1 RULES
 										</b>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>22.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											PERSYARATAN OPERASIONAL PERATURAN NPCT1
 										</b>
 									</div>
 								</div>
 							</div>
 							
 							
 							<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>22.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												NPCT1 may impose operating requirements for the
 maintenance, control, operation and management of NPCT1
 and generally for carrying out the purposes of the Contract.
 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>22.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												NPCT1 dalam memberlakukan persyaratan operasional
 untuk pemeliharaan, pengendalian operasional dan
 manajemen NPCT1 dan secara umum untuk
 melaksanakan tujuan Kontrak.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>22.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												The Customer shall comply, and shall ensure that its
 employees, subcontractors and agents comply, with NPCT1’s
 operating requirements set out in port circulars available to
 the Customer (which the Customer hereby acknowledges as
 having read and agreed to) or hereafter notified to the
 Customer, as well as all rules, conditions, policies and
 directions set by NPCT1 in respect of the NPCT1 Terminals
 and activities therein.
 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>22.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Pelanggan wajib mematuhi dan harus memastikan bahwa
 karyawan sub-kontraktor dan agen dari Pelanggan
 mematuhi persyaratan operasi di NPCT1, yang telah
 ditetapkan dalam edaran pelabuhan yang tersedia bagi
 pelanggan (yang mana melalui Pasal ini, persyaratan
 operasional tersebut telah dibaca, diakui dan disetujui
 oleh Pelanggan) atau selanjutnya diberitahukan kepada
 Pelanggan, serta semua aturan, ketentuan, kebijakan dan
 arahan yang ditetapkan oleh NPCT1 sehubungan dengan
 Terminal NPCT1 dan aktivitas di dalamnya.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 							<!-------------------------- E:POINT 22 -------------------------->
 							
 							
 							
 							<!-------------------------- S:POINT 23 -------------------------->
 							<!-- S:MODUL POINT 3 --->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>23.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											FORCE MAJEURE
 										</b>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>23.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											KEADAAN KAHAR
 										</b>
 									</div>
 								</div>
 							</div>
 							
 							
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>23.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													 Affecting Performance or Observance by Customer
 
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>23.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Dampak Terhadap Kinerja atau Kepatuhan Pelanggan
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>23.1.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												If the Customer shall be prevented by any Force Majeure
 from performing or observing its obligations under the
 Contract and shall suffer undue hardship due to such Force
 Majeure, the Customer shall immediately notify NPCT1
 thereof and identify the Force Majeure, whereupon the
 Customer shall be released from such performance or
 observance to the extent that and for so long as such
 performance or observance shall be prevented by the Force
 Majeure and such undue hardship.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>23.1.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Jika Pelanggan dikarenakan Keadaan Kahar tidak dapat
 melakukan atau mematuhi kewajibannya berdasarkan
 Kontrak dan mengalami kendala yang tidak semestinya
 dikarenakan Keadaan Kahar tersebut, Pelanggan harus
 segera memberitahukan NPCT1 dan mengidentifikasikan
 hal tersebut, sehingga Pelanggan dapat dibebaskan dari
 kewajibannya berdasarkan Kontrak selama periode
 Keadaan Kahar tersebut. 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>23.1.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												The Customer shall perform and observe its other obligations
 under the Contract insofar as they shall not be affected by the
 Force Majeure.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>23.1.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Pelanggan harus melakukan dan mematuhi kewajibannya
 berdasarkan Kontrak, sejauh hal tersebut tidak
 terpengaruh oleh Keadaan Kahar.
 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>23.1.3</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Notwithstanding <b>General Condition 23.1.1</b>, the Customer
 shall fulfil such obligation immediately upon the cessation of
 the Force Majeure regardless of whether or not the Force
 Majeure shall cease during or after the Contract Period.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>23.1.3</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Tanpa mengesampingkan <b>Ketentuan Umum 23.1.1</b>,
 Pelanggan harus memenuhi kewajiban tersebut, segera
 setelah Keadaan Kahar dapat diatasi, terlepas dari apakah
 Keadaan Kahar akan berhenti selama atau setelah Periode
 Kontrak. 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>23.1.4</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Notwithstanding <b>General Conditions 23.1.1</b> and <b>23.1.2</b>, if the
 Force Majeure shall continue for a period longer than that
 which NPCT1 considers reasonable for the release of the
 Customer from such performance or observance, NPCT1 shall
 be entitled to terminate the Contract immediately by notice
 to the Customer.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>23.1.4</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Tanpa mengesampingkan <b>Ketentuan Umum 23.1.1</b> dan
 <b>23.1.2</b>, jika Keadaan Kahar berlanjut hingga jangka waktu
 yang lebih lama dari yang dianggap wajar oleh NPCT1,
 maka agar Pelanggan dibebaskan dari kinerja dan
 ketaatan terhadap Kontrak, NPCT1 berhak untuk
 mengakhiri Kontak dengan segera mellui pemberitahuan
 kepada Palanggan.
 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								<!-- S:POINT 23.2 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>23.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Affecting Performance or Observance by NPCT1
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>23.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Dampak Pelaksanaan dan Kepatuhan NPCT1
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 23.2 --->
 								
 								
 								<!-- S:POINT 23.2 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												NPCT1 shall be released from performing or observing its
 obligations under the Contract if such performance or
 observance shall be prevented by any Force Majeure. 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												NPCT1 harus dibebaskan dari pelaksanaan atau
 kepatuhan akan kewajibannya berdasarkan Kontrak,
 apabila pelaksanaan dan kepatuhan tersebut tidak dapat
 dilaksanakan akibat Keadaan Kahar, dalam bentuk
 apapun.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 23.2 --->
 							<!-------------------------- E:POINT 23 -------------------------->
 							
 							
 							
 							<!-------------------------- S:POINT 24 -------------------------->
 							<!-- S:MODUL POINT 3 --->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>24.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											LIABILITY AND INDEMNITY
 										</b>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>24.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											KEWAJIBAN DAN GANTI RUGI
 										</b>
 									</div>
 								</div>
 							</div>
 							
 							
 							<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>24.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Extent of Liability
 
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>24.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Ruang Lingkup Kewajiban
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>24.1.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Except Where Expressly Agreed Otherwise The Parties:
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>24.1.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Kecuali Disepakati Berbeda oleh Para Pihak:
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								<!-- S:POINT 7.4.2 a --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(a)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 NPCT1 shall not be liable for any claim arising from:
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(a)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														NPCT1 tidak bertanggung jawab atas klaim yang
 timbul dari:
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 7.4.2 a --->
 								
 								<!-- S:POINT 7.4.2 a --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<div class="row">
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>I.</p></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 															<p>
 																Force Majeure;
 															</p>
 														</div>
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>II.</p></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 															<p>
 																Any delay or error in the delivery of the Foods to
 NPCT1 or Re-delivery of the Goods to the
 Customer;
 															</p>
 															
 														</div>
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>III.</p></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 															<p>
 																Breach of any legal duty (to the extent permitted
 by such law);<br/><br/>
 															</p>
 															
 														</div>
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>OR</p></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 															
 														</div>
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>IV.</p></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 															<p>
 															Any other cause unless it is first proven by the
 Customer that such claim has arisen from the
 Gross Negligence or the Wilful Act of NPCT1.
 															</p>
 															
 														</div>
 													</div>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<div class="row">
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>I.</p></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 															<p>
 																Keadaan Kahar;
 															</p>
 														</div>
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>II.</p></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 															<p>
 																Setiap penundaan atau kesalahan dalam
 pengirman Barang ke NPCT1 atau pengiriman
 kembali Barang kepada Pelanggan;
 															</p>
 															
 														</div>
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>III.</p></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 															<p>
 																 Pelanggaran atau kewajiban hukum apa pun
 (sejauh diizinkan oleh hukum tersebut);
 															</p>
 															
 														</div>
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>ATAU</p></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 															
 														</div>
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>IV.</p></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 															<p>
 																Sebab lain kecuali terlebih dahulu dibuktikan
 oleh Pelanggan bahwa klaim tersebut timbuk
 akibat Kelalaian atau Perbuatan yang
 Disengaja oleh NPCT1.
 															</p>
 															
 														</div>
 													</div>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 7.4.2 a --->
 								
 								<!-- S:POINT 7.4.2 a --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(b)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 In the event of any claim against NPCT1, NPCT1 shall not
 be liable for:
 
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(b)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														Dalam hal klaim terhadap NPCT1, NPCT1 tidak
 bertanggung jawab atas:
 
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 7.4.2 a --->
 								
 								
 								
 								<!-- S:POINT 7.4.2 a --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<div class="row">
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>I.</p></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 															<p>
 																Any sum exceeding USD$100,000.00 in aggregate
 per incident or series of connected incidents; OR
 															</p>
 														</div>
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>II.</p></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 															<p>
 																Any damage to or loss of Goods in a sum
 exceeding:
 															</p>
 															<div class="row">
 																<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(A)</p></div> 
 																<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 																	<p>
 																		USD$100,000.00 in the case of a vessel;
 																	</p>
 																</div>
 																<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(B)</p></div> 
 																<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 																	<p>
 																		USD$20,000.00 in the case of a container
 (including any contents therein) exceeding
 6.1 meters in length;
 																	</p>
 																</div>
 																<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(C)</p></div> 
 																<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 																	<p>
																	 USD$30,000.00 in the case of a container
(including any contents) exceeding 6.1
meters in length;
 																	</p>
 																</div>
 																<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(D)</p></div> 
 																<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 																	<p>
 																		The reasonable cost of repairs as agreed
 between Surveyor(s) appointed by NPCT1
 and the Customer,Whichever is less; OR
 <br/><br/>
 																	</p>
 																</div>
 															</div>
 														</div>
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>III.</p></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 															<p>
 																Any damage to or loss of Goods less than  USD$3,000. <br/><br/>
 															</p>
 														</div>
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>IV.</p></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 															<p>
 																Any loss of profit, consequential loss or any
 indirect loss or damage.
 															</p>
 														</div>
 													</div>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<div class="row">
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>I.</p></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 															<p>
 																Setiap nilai yang melebihi USD$100,000.00
 dengan rata-rata per kejadian atau rangkaian
 kejadian yang saling berkaitan; ATAU
 															</p>
 														</div>
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>II.</p></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 															<p>
 																Setiap kerusakan atau kehilangan Barang
 dengan nilai yang melebihi:
 
 															</p>
 															<div class="row">
 																<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(A)</p></div> 
 																<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 																	<p>
 																		USD$100,000.00 dalam setiap kasus per
 kapal;
 																	</p>
 																</div>
 																<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(B)</p></div> 
 																<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 																	<p>
 																		USD$20,000.00 dalam setiap kasus per
 peti kemas (termasuk isi di dalamnya)
 dengan Panjang melebihi 6,1 meter;
 																	</p>
 																</div>
 																<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(C)</p></div> 
 																<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 																	<p>
 																		USD30,000.00 dalam hal peti kemas
 (termasuk isi di dalamnya) dengan
 panjang melebihi 6.1 meter;
 																	</p>
 																</div>
 																<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(D)</p></div> 
 																<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 																	<p>
 																		Biaya perbaikan yang dapat diterima
 sebagaimana disepakati anatara
 Penyurvei yang ditunjuk NPCT1 dan
 Pelanggan, Apapun yang lebih kecil dari nilai tersebut;
 ATAU
 																	</p>
 																</div>
 															</div>
 														</div>
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>III.</p></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 															<p>
 																Setiap kerusakan atau kehilangan Barang yang
 nilainya kurang dari USD3,000.00.
 
 															</p>
 														</div>
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>IV.</p></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 															<p>
 															 Setiap hilangnya keuntungan, konsekuensi
 kerugian atau kerugian atau kerusakan tidak
 langsung.
 															</p>
 														</div>
 													</div>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 7.4.2 a --->
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>24.1.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												NPCT1 shall not be liable for any claim arising before delivery
 of the Goods to NPCT1 or after re-delivery of the Goods to
 the Customer.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>24.1.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												NPCT1 tidak bertanggung jawab atas klaim yang timbul
 sebelum pengiriman Barang ke NPCT1 atau setelah
 pengiriman kembali Barang kepada Pelanggan. 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>24.1.3</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												The limitation of liability granted under this General
 Condition 24 shall relate to the whole of any losses and
 damages which may arise upon any one incident or series of
 incidents, although such losses or damages maybe sustained
 by more than one person, and shall apply whether the liability
 arises at Common Law or under any written Law and
 notwithstanding anything contained in such written Law.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>24.1.3</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Batasan tanggung jawab yang diberikan berdasarkan
 Ketentuan Umum 24 akan berkaitan dengan seluruh
 kerugian dan kerusakan yang mungkin timbul pada satu
 insiden atau serangkaian insiden, meskipun kerugian
 atau kerusakan tersebut mungkin ditanggung oleh lebih
 dari satu orang, dan akan berlaku apakah tanggung
 jawab timbul terhadap Hukum tertulis apapun dan
 terlepas dari apapun yang terkandung dalam hukum
 tertulis tersebut.
 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>24.1.4</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												The Claim will be void if the Customer shall not have notified
 NPCT1 thereof in writing:
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>24.1.4</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Klaim akan menjadi batal jika Pelanggan tidak
 memberikan notofikasi kepada NPCT1 secara tertulis
 akan hal-hal berikut:
 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								
 								<!-- S:POINT 7.4.2 a --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(a)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 If damage alleged to have been caused to a vessel or
 any goods, and to permit inspection thereof, prior to
 such vessel or goods leaving the Facilities or NPCT1
 Terminals;
 
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(a)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														Jika kerusakan yang diduga disebabkan oleh kapal
 atau barang apapun, dan untuk memberikan izin
 untuk pemeriksaan, sebelum kapal atau barang
 tersebut keluar dari Fasilitas atau Terminal NPCT1;
 
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 7.4.2 a --->
 								
 								<!-- S:POINT 7.4.2 a --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(b)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 Within one week after the occurrence of the event
 giving rise to the Claim; or
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(b)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														Dalam waktu satu minggu setelah terjadinya
 kejadian yang berdampak menimbulkan Klaim;
 atau
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 7.4.2 a --->
 								
 								<!-- S:POINT 7.4.2 a --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(c)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 Within one week after the Re-delivery of the Goods to
 the Customer;
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(c)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														Dalam waktu satu minggu setelah Pengiriman
 Ulang Barang kepada Pelanggan,
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 7.4.2 a --->
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 										Whichever is earliest.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 										Yang mana yang lebih dahulu.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Such notified Claim will become void if no legal proceedings
 in respect thereof are commenced within 6 (six) months after
 the Date of Notice.
 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Klaim yang telah diinformasikan tersebut akan menjadi
 batal jika tidak ada proses hukum sehubungan dengan itu
 yang dimulai dalam 6 (enam) bulan setelah Tanggal
 Pemberitahuan. 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>24.1.5</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Where a container, pallet or similar article is used to
 consolidate Goods, notwithstanding that the packages or
 other shipping units have been separately enumerated in the
 Bill of Lading as have been packed or consolidated in such
 container, pallet or article, the resultant consolidation shall
 be deemed and shall count as one package or shipping unit.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>24.1.5</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Jika suatu peti kemas, palet atau barang sejenis
 digunakan untuk menyatukan Barang, tanpa
 mengesampingkan paket atau pengiriman lain secara
 terpisah dalam Bill of Lading, sebagaimana telah dikemas
 atau disatukan dalam peti kemas, palet atau barang
 sejenis, penggabungan yang dihasilkan harus dianggap
 dan akan diperthitungkan sebagai satu paket atau satu
 unit pengiriman.
 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>24.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Apportionment of Compensation
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>24.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Pembagian Kompensasi
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												If any claim shall be made against NPCT1 by more than 1 (one)
 person and NPCT1 Shall decide to pay compensation in
 respect of the Claim, NPCT1 shall be entitled to apportion
 such compensation among such persons according to the
 extent of proven loss or damage suffered by each of them.
 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Jika ada klaim yang diajukan terhadap NPCT1 oleh lebih
 dari satu orang dan NPCT1 memutuskan untuk
 membayar kompensasi sehubungan dengan Klaim,
 NPCT1 berhak untuk membagi nilai kompensasi dengan
 pihak-pihak terkait, sebagaimana bukti kerugian atau
 kerusakan yang diderita oleh masing-masing pihak. 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>24.3</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													 Hired Vehicle Or Equipment
 
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>24.3</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Kendaraan atau Peralatan yang Disewa
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Notwithstanding the other provisions of the contract,
 if the customer shall hire any crane, forklift or other
 vehicle or equipment from npct1, the customer shall
 notwithstanding that the same be driven or operated by
 the employees or agent of npct1 be liable for any injury,
 loss or damage howsoever caused by the vehicle or
 equipment and such person shall indemnify npct1 in
 respect of any claim preferred against npct1 by any person
 on that account.
 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Tanpa mengesampingkan ketentuan lain dalam Kontrak,
 jika Pelanggan akan menyewa crane, forklift maupun
 kendaraan atau peralatan lain dari NPCT1, Pelanggan,
 tanpa mengesampingkan bahwa crane, forklift maupun
 kendaraan atau peralatan lain tersebut digerakkan atau
 dioperasikan oleh Karyawan atau Agen NPCT1, akan
 bertanggung jawab atas cedera, kehilangan atau
 kerusakan apapun yang disebabkan oleh kendaraan atau
 peralatan dan orang tersebut akan mengganti kerugian
 NPCT1 sehubungan dengan klaim terhadap NPCT1 yang
 diajukan oleh pihak yang berkepentingan dengannya
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>24.4</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Personal Liability
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>24.4</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Tanggung Jawab Perseorangan
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 											Notwithstanding the other provisions of the contract, no
 matter or thing done and no contract of any kind entered into
 by npct1 and no matter or thing done by any employee or
 agent of npct1 or any other person whomsoever acting under
 the direction of npct1 shall, if the matter or thing was done
 or the contract was entered into bona fide for the purpose of
 providing the services/facilities, subject any such person
 personally to any action, liability, claim or demand
 whatsoever in respect thereof.
 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Tanpa mengesampingkan ketentuan lain dalam Kontrak,
 tidak ada masalah atau hal yang dilakukan dan tidak ada
 perjanjian dalam bentuk apapun yang berlaku terhadap
 NPCT1 dan tidak ada masalah atau hal yang dilakukan
 oleh karyawan atau agen NPCT1 atau pihak lain yang
 bertindak berdasarkan arahan NPCT1 yang akan, jika
 masalah atau hal itu dilakukan atau Kontrak berlaku
 secara bona fide untuk tujuan penyediaan
 Layanan/Fasilitas, tunduk kepada orang terkait secara
 pribadi atas setiap tindakan, kewajiban klaim atau
 permintaan apapun sehubungan dengan hal tersebut.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>24.5</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Reasonableness
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>24.5</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Kelayakan
 
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												The customer expressly acknowledges that general condition
 24 satisfies the requirements of reasonableness under any
 applicable law relating to the effectiveness of contractual
 provisions that seek to exclude or limit liability.
 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Pelanggan secara tegas mengakui bahwa Ketentuan
 Umum 24 memenuhi persyaratan kewajaran
 berdasarkan Hukum yang berlaku terkait dengan
 efektivitas ketentuan kontrak yang berupaya
 mengecualikan atau membatasi kewajiban.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 							<!-------------------------- E:POINT 24 -------------------------->
 							
 							
 							
 							<!-------------------------- S:POINT 25 -------------------------->
 							<!-- S:MODUL POINT 3 --->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>25.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											DAMAGE TO NPCT1 TERMINAL OR OTHER NPCT1 PROPERTY
 										</b>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>25.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											KERUSAKAN DI TERMINAL NPCT1 ATAU PROPERTI NPCT1 LAINNYA
 										</b>
 									</div>
 								</div>
 							</div>
 						
 							
 							<!-- S:POINT 7.4.2 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 											If any damage is caused to any NPCT1 Terminal or other
 property arising out of the provision of the Services/Facilities,
 NPCT1 may in its discretion carry out such repairs or
 replacements as it thinks necessary, in which event the cost
 of such repairs or replacements, together with all interests,
 expenses and legal fees that may be incurred in the collection
 of such costs, shall be borne by the Customer.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Jika ada kerusakan yang diakibatkan pada Terminal atau
 property NPCT1 lain, yang timbul akibat penyediaan
 Layanan/Fasilitas, NPCT1 dengan kebijakannya sendiri,
 dapat melakukan perbaikan atau penggantian
 sebagaimana yang dianggap perlu, dalam hal mana biaya
 perbaikan atau penggantian tersebut, bersama-sama
 dengan seluruh bunga, biaya dan biaya perkara, yang
 mungkin timbul pada waktu penagihan atas biaya, yang
 akan ditanggung oleh Pelanggan.
 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 7.4.2 --->
 							<!-------------------------- E:POINT 25 -------------------------->
 							
 							
 							
 							<!-------------------------- S:POINT 26 -------------------------->
 							<!-- S:MODUL POINT 3 --->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>26.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											CUMULATIVE RIGHTS AND REMEDIES
 										</b>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>26.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											HAK DAN PERBAIKAN KUMULATIF
 										</b>
 									</div>
 								</div>
 							</div>
 							
 							
 							<!-- S:POINT 7.4.2 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 											NPCT1’s rights and remedies under the Contract are
 cumulative and shall not prejudice any other rights or
 remedies of NPCT1 contained in the Contract or at law or the
 right of action or other remedy of NPCT1 for the recovery of
 any sums due to NPCT1 from the Customer or in respect of
 any breach of the Contract by the Customer.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Hak dan solusi NPCT1 berdasarkan Kontrak adalah
 bersifat kumulatif dan tidak mengurangi hak dan solusi
 NPCT1 lainnya yang terkandung dalam Kontrak atau
 menurut hukum atau hak tindakan atau solusi lain NPCT1
 untuk pemulihan sejumlah biaya yang disebabkan oleh
 NPCT1 dari Pelanggan atau sehubungan dengan setiap
 pelanggaran Kontrak oleh Pelanggan. 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 7.4.2 --->
 							<!-------------------------- E:POINT 26 -------------------------->
 							
 							
 							
 							<!-------------------------- S:POINT 27 -------------------------->
 							<!-- S:MODUL POINT 3 --->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>27.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											INSURANCE
 										</b>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>27.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											INSURANCE
 										</b>
 									</div>
 								</div>
 							</div>
 							
 							
 							
 							<!-- S:POINT 7.4.2 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 											The Customer shall effect adequate insurance of the Goods
 for so long as they remain at any NPCT1 Terminal, except
 where expressly agreed otherwise between NPCT1 and the
 Customer.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Pelanggan memiliki asuransi yang mencukupi atas Barang
 selama Barang tetap berada di Terminal NPCT1 manapun,
 kecuali jika secara tegas disepakati sebaliknya antara
 NPCT1 dan Pelanggan.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 7.4.2 --->
 							<!-------------------------- E:POINT 27 -------------------------->
 							
 							
 							<!-------------------------- S:POINT 28 -------------------------->
 							<!-- S:MODUL POINT --->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>29.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											COMPLIANCE WITH LAW
 										</b>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>29.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											KEPATUHAN TERHADAP HUKUM
 										</b>
 									</div>
 								</div>
 							</div>
 							
 							
 							<!-- S:POINT 7.4.2 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 											The Parties shall comply with all laws, rules and regulations
 affecting the Contract. The Customer shall obtain all requisite
 permissions, approvals and consents from the competent
 authorities and indemnify NPCT1 against any fines, penalties,
 losses, costs or expenses incurred by NPCT1 in respect of any
 non-compliance with such laws, rules and regulations.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Para Pihak harus mematuhi semua hukum, peraturan
 dan regulasi yang mempengaruhi Kontrak. Pelanggan
 harus mendapatkan semua izin, persetujuan dan
 rekomendasi dari otoritas yang berkompeten dan
 mengganti kerugian NPCT1 atas denda, hukuman,
 kerugian, biaya atau pengeluaran yang dikeluarkan oleh
 NPCT1 sehubungan dengan ketidakpatuhan terhadap
 hukum, aturan dan peraturan tersebut.
 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 7.4.2 --->
 							<!-- E:MODUL POINT --->
 							<!-------------------------- E:POINT 28 -------------------------->
 							
 							
 							
 							<!-------------------------- S:POINT 29 -------------------------->
 							<!-- S:MODUL POINT --->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>29.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											ASSIGNMENT OF CONTRACT
 										</b>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>29.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											TUJUAN KONTRAK
 										</b>
 									</div>
 								</div>
 							</div>
 							
 							
 							<!-- S:POINT 7.4.2 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 											Save as expressly permitted by the Contract, the rights and
 obligations of the Customer shall not be assigned to or shared
 in any way with any person without NPCT1’s prior written
 consent.
 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Keamanan sebagaimana secara tegas diizinkan oleh
 Kontrak, hak dan kewajiban Pelanggan tidak dapat
 dialihkan atau dibagi dengan cara apapun dengan
 siapapun tanpa persetujuan tertulis terlebih dahulu dari
 NPCT1.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 7.4.2 --->
 							<!-- E:MODUL POINT --->
 							<!-------------------------- E:POINT 29 -------------------------->
 							
 							
 							<!-------------------------- S:POINT 30 -------------------------->
 							<!-- S:MODUL POINT --->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>30.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											CONFIDENTIALITY
 										</b>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>30.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											KERAHASIAAN
 										</b>
 									</div>
 								</div>
 							</div>
 							
 							<!-- E:MODUL POINT --->
 							
 							<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>30.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												No Party shall disclose to any other person any information
 related to the Contract without the prior consent of the other
 Party.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>30.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Tidak ada satu Pihak pun yang dapat mengungkapkan
 kepada siapa pun informasi apa pun yang terkait dengan
 Kontrak tanpa persetujuan terlebih dahulu dari Pihak
 lainnya.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>30.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Notwithstanding <b>General Condition 30.1</b>, either Party may
 disclose information related to the Contract to: 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>30.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Tanpa mengesampingkan <b>Ketentuan Umum 30.1</b>, salah
 satu Pihak dapat mengungkapkan informasi terkait
 dengan Kontrak kepada:
 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								
 								<!-- S:POINT 7.4.2 a --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(a)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 such Party’s agents or contractors who have a need to
 know the same provided that such agents and
 contractors are first subject to the same confidentiality
 restrictions contained herein;
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(a)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														agen atau kontraktor Pihak tersebut yang memiliki
 kepentingan untuk mengetahui hal yang sama,
 dengan catatan agen atau kontraktor tersebut
 terlebih dahulu telah mengetahui dan menyetujui
 aturan pembatasan kerahasiaan yang sama yang
 terkandung dalam Kontrak ini;
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 7.4.2 a --->
 								
 								<!-- S:POINT 7.4.2 a --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(b)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 any other person pursuant to a legal requirement to
 disclose or pursuant to any judicial authority which
 requires disclosure; or
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(b)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														orang lain berdasarkan persyaratan hukum untuk
 mengungkapkan atau berdasarkan otoritas
 peradilan yang membutuhkan pengungkapan; atau
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 7.4.2 a --->
 								
 								<!-- S:POINT 7.4.2 a --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(c)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 any other person to the extent that such information
 shall already be known to such Party not due to a
 breach of this <b>General Condition 30</b> or is already a
 matter of public knowledge through no fault of the
 disclosing Party
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(c)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 													orang lain sejauh informasi tersebut harus suah
 diketahui oleh Pihak tersebut, bukan dikarenakan
 pelanggaran terhadap <b>Ketentuan Umum 30</b> ini
 atau sudah menjadi hal yang telah diketahui oleh
 umum dan bukan dikarenakan kesalahan Pihak
 pengungkap.	
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 7.4.2 a --->
 								
 							<!-------------------------- E:POINT 30 -------------------------->
 							
 							<!-------------------------- S:POINT 31 -------------------------->
 							<!-- S:MODUL POINT --->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>31.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											NON-DEMISE
 										</b>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>31.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											TANPA-PENGAKHIRAN
 										</b>
 									</div>
 								</div>
 							</div>
 							
 							<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												 The Contract shall not confer on the Customer any lease,
 tenancy or other greater interest in or possession of the
 Facilities or NPCT1, which possession is retained by NPCT1
 subject however to the terms and conditions of the Contract.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Kontrak tidak akan memberikan kepada Pelanggan hak
 atas sewa, kontrak atau kepentingan lain yang lebih besar
 dalam maupun kepemilikan Fasilitas atau NPCT1, dimana
 kepemilikannya dipertahankan oleh NPCT1 dengan
 tunduk pada syarat dan ketentuan Kontrak. 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 							<!-- E:MODUL POINT --->
 							<!-------------------------- E:POINT 31 -------------------------->
 							
 							<!-------------------------- S:POINT 32 -------------------------->
 							<!-- S:MODUL POINT --->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>32.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											NO GRANT OF INTELLECTUAL PROPERTY RIGHT
 										</b>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>32.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											TIDAK ADA PEMBERIAN HAK KEKAYAAN INTELEKTUAL
 										</b>
 									</div>
 								</div>
 							</div>
 							
 							
 							<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												No express or implied intellectual property right or licence
 belonging to either Party is hereby granted to the other Party.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Tidak ada kekayaan intelektual atau izin yang tersurat
 maupun tersirat milik salah satu Pihak yang diberikan
 kepada Pihak Lain berdasarkan Kontrak.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 							<!-- E:MODUL POINT --->
 							<!-------------------------- E:POINT 32 -------------------------->
 							
 							<!-------------------------- S:POINT 33 -------------------------->
 							<!-- S:MODUL POINT --->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>33.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											COMMUNICATION
 										</b>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>33.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											KOMUNIKASI
 										</b>
 									</div>
 								</div>
 							</div>
 							
 							<!-- E:MODUL POINT --->
 							
 							<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>33.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													 Definitions
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>33.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Definisi
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												For the purposes of this General Condition, the following
 expressions shall have the following meanings unless the
 context requires otherwise:
 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Untuk kepentingan Ketentuan Umum ini, hal-hal berikut
 ini harus memiliki definisi sebagai berikut, kecuali
 konteks menentukan lain:
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								
 								<!-- S:POINT 7.4.2 a --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(a)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 <b>“Data Message”</b> means a notice or information
 generated, sent, received or stored by electronic,
 optical or similar means acceptable to NPCT1,
 including but not limited to Electronic Data
 Interchange, electronic mail, telegram or telex;
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(a)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 <b>“Pesan Data”</b> berarti pemberitahuan atau informasi
 yang dihasilkan, dikirim, diterima atau disimpan
 dengan cara elektronik, optik atau sejenisnya, yang
 dapat diterima oleh NPCT1, termasuk namun tidak
 terbatas pada Pertukaran Data Elektronik, surat
 elektronik, telegram ata teleks;
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 7.4.2 a --->
 								
 								<!-- S:POINT 7.4.2 a --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(b)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 <b>“Electronic Data Interchange”</b> means the electronic
 transfer from computer to computer of
 information using an agreed standard to structure
 the notice or information;
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(b)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 <b>“Pertukaran Data Elektronik”</b> berarti transfer secara
 elektronik dari komputer ke komputer informasi
 dengan menggunakan standar yang telah disepakati
 untuk menyusun suatu pemberitahuan atau
 informasi;
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 7.4.2 a --->
 								
 								<!-- S:POINT 7.4.2 a --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(c)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 <b>“Originator”</b> in relation to a Data Message
 means the Customer or any Customer's
 Representative by whom or on whose behalf the
 Data Message purports to have been sent or
 generated prior to storage.
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(c)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 												 <b>“Penggagas”</b> sehubungan dengan Pesan Data berarti
 Pelanggan atau Perwakilan Pelanggan dengan siapa
 atau atas nama siapa Pesan Data dimaksudkan telah
 dikirim atau dibuat sebelum disimpan.		
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 7.4.2 a --->
 								
 								
 								
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>33.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													 Original
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>33.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Keaslian
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>33.2.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Where the Contract requires any notice or information to be
 presented or retained in its original form, that requirement is
 met by a Data Message if:
 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>33.2.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Jika Kontrak mengharuskan adanya pemberitahuan atau
 informasi apapun untuk diserahkan atau disimpan dalam
 bentuk asli-nya, persyaratan tersebut dapat dipenuhi
 melalui Pesan Data jika:
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								
 								<!-- S:POINT 7.4.2 a --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(a)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 there exists a reliable assurance as to the integrity
 of the notice or information from the time when it
 was first generated to its final form, as a Data
 Message or otherwise; and
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(a)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														Terdapat jaminan yang dapat diandalkan terhadap
 integritas pemberitahuan atau pemberitahuan sejak
 saat pertama kasi dihasilkan hingga ke dalam format
 akhir dalambentuk Pesan Data atau sebaliknya; dan
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 7.4.2 a --->
 								
 								<!-- S:POINT 7.4.2 a --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(b)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														where it is required that that notice or information
 be presented, that notice or information is capable
 of being displayed to the person to whom it is to
 be presented.
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(b)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														Dimana adalah diharuskan agar pemberitahuan atau
 informasi diserahkan, dimana pemberitahuan atau
 informasi tersebut dapat disampaikan kepada orang
 yang dituju.
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 7.4.2 a --->
 								
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>33.2.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												For the purposes of <b>General Condition 33.2.1</b>:
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>33.2.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Untuk tujuan <b>Ketentuan Umum 33.2.1</b>:
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								
 								
 								<!-- S:POINT 7.4.2 a --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(a)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 the criteria for assessing integrity shall be whether the
 notice or information has remained complete and
 unaltered, apart from the introduction of any
 endorsement and any change which arises in the
 normal course of communication, storage and display;
 and
 
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(a)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														Kriteria untuk menilai integritas adalah bahwa
 pemberitahuan atau informasi adalah telah lengkap
 dan tidak berubah, selain perubahan yang telah
 mendapakan pengesahan dan perubahan tersebut
 timbul dalam batas komunikasi, penimpangan dan
 tampilan yang normal; dan
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 7.4.2 a --->
 								
 								
 								<!-- S:POINT 7.4.2 a --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(b)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 the standard of reliability required shall be assessed in
 the light of the purpose for which the notice or
 information was generated and in the light of all the
 relevant circumstances.
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(b)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														Standar keandalan yang diperlukan harus dinilai
 berdasarkan tujuan untuk mana pemberitahuan atau
 informasi dihasilkan dan mempertimbangkan semua
 keadaan yang relevan.
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 7.4.2 a --->
 								
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>33.3</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													 Signature and Attribution
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>33.3</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Tanda Tangan dan Atribusi
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>33.3.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Where the Contract requires a signature of the Originator,
 that requirement is met in relation to a Data Message if:
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>33.3.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Bilamana Kontrak membutuhkan tandatangan
 Penggagas, persyaratan itu dapat dipenuhi sehubungan
 dengan Pesan Data jika:
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								<!-- S:POINT 7.4.2 a --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(a)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
  a method is used to identify the Originator and to
 indicate their intention in respect of the notice or the
 information contained in the Data Message; and
 
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(a)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														Suatu metode yang digunakan untuk
 mengidentifikasi Penggagas dan untuk menunjukkan
 tujuan mereka sehubungan dengan pemberitahuan
 atau informasi yang terkandung dalam Manajemen
 Data; dan
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 7.4.2 a --->
 								
 								<!-- S:POINT 7.4.2 a --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(b)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 that method is as reliable as appropriate for the
 purpose for which the Data Message was generated
 or communicated, in the light of all the
 circumstances, including the Contract or is proven in
 fact to have fulfilled the functions described in subparagraph (a), by itself or together with further
 evidence.
 
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(b)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														Bahwa metode tersebut adalah dapat diandalkan
 sebagaimana mestinya untuk tujuan dimana Pesan
 Data dihasilkan atau dikomunikasikan, mengingat
 semua keadaan, termasuk Kontrak atau terbukti
 telah memenuhi fungsi sebagaimana yang dijelaskan
 dalam sub-ayat (a), dengan sendirinya atau Bersama
 dengan bukti lebih lanjut. 
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 7.4.2 a --->
 								
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>33.3.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												A Data Message is that of the Originator if it was sent by the
 Originator itself.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>33.3.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Pesan Data adalah pesan dari Penggagas jika dikirim oleh
 Penggagas itu sendiri.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>33.3.3</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												As between the Originator and NPCT1, a Data Message
 is deemed to be that of the Originator if it was sent:
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>33.3.3</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Sebagaimana antara Penggagas dan NPCT1, Pesan Data
 akan dianggap milik Penggagas apabila dikirim: 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								
 								<!-- S:POINT 7.4.2 a --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(a)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 by a person who had the actual, ostensible or apparent
 authority to act on behalf of the Originator in respect
 of that Data Message; or
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(a)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														Oleh seseorang yang memiliki otoritas aktual, nyata
 atau jelas untuk bertindak atas nama Penggagas
 sehubungan dengan Pesan Data tersebut; atau
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 7.4.2 a --->
 								
 								<!-- S:POINT 7.4.2 a --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(b)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 by a system for generating, sending, receiving,
 storing or otherwise processing data messages,
 programmed by or on behalf of the Originator to
 operate automatically, and such Data Message
 shall not be denied validity or enforceability solely
 on the ground that no natural person reviewed or
 intervened in each of the individual actions carried out
 by the automated systems.
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(b)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														Oleh sistem untuk menghasilkan, mengirim,
 menerima, menyimpan atau memproses pesan
 data, deprogram oleh atau atas nama Penggagas
 untuk beroperasi secara otomatis, dan Pesan Data
 tersebut tidak boleh ditolak validitas atau
 keberlakuannya semata-mata dengan alasan bahwa
 tidak ada orang yang memberikan ulasan atau
 intervendi dalam setiap tindakan individu yang
 dilakukan secara otomatis.
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 7.4.2 a --->
 								
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>33.3.4</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 											As between the Originator and NPCT1, itsservants and agents,
 NPCT1, its employees and agents are entitled to regard a Data
 Message as being that of the Originator and to act on that
 assumption, if the Data Message as received by NPCT1, its
 employees or agents resulted from the actions of a person
 whose relationship with the Originator enabled that person to
 gain access to a method used by the Originator to identify
 Data Messages as its own.	
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>33.3.4</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Sebagaimana antara Penggagas dan NPCT1, para
 karyawan dan agennya berhak untuk menganggap Pesan
 Data sebagai milik Penggagas dan bertindak berdasarkan
 asumsi tersebut, jika Pesan Data yang diterima oleh
 NPCT1, karyawan atau agennya sebagai hasil dari
 tindakan seseorang yang memiliki hubungan dengan
 Penggagas yang memungkinkan orang tersebut untuk
 mendapatkan akses ke metode yang digunakan oleh
 Penggagas untuk mengidentifikasi Pesan Data sebagai
 miliknya. 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>33.3.5</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<b>General Condition 33.3.4</b> shall not apply as of the time when
 NPCT1, its employees or agents have both received notice
 from the Originator that the Data Message is not that of the
 Originator and NPCT1, its employees or agents had
 reasonable time to act accordingly.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>33.3.5</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<b>Keadaan Umum 33.3.4</b> tidak akan berlaku pada saat
 NPCT1, karyawan atau agennya telah menerima
 pemberitahuan dari Penggagas bahwa Pesan Data
 tersebut bukan dari Penggagas dan NPCT1, karyawan
 atau agennya memiliki waktu yang wajar untuk
 melakukan tindakan yang diperlukan.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>33.3.6</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Where a Data Message is that of the Originator or is deemed
 to be that of the Originator, NPCT1, its employee or agent
 is entitled to act on that assumption, then, as between
 the Originator, and NPCT1, its employees or agents, NPCT1,
 its employees or agents is entitled to regard the Data
 Message as received as being what the Originator intended to
 send and to act on that assumption.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>33.3.6</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Jika Pesan Data adalah milik Penggagas atau dianggap
 sebagai milik Penggagas, NPCT1, karyawan atau agennya
 berhak untuk bertindak berdasarkan asumsi tersebut,
 kemudia, sebagaimana antara Penggagas dan NPCT1,
 karyawan atau agennya berhak untuk menganggap
 Pesan Data yang diterima sebagai apa yang dimaksudkan
 oleh pengirim untuk mengirim atau bertindak
 berdasarkan asumsi tersebut
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>33.3.7</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<b>NPCT1</b>, its employee or agent is entitled to regard each Data
 Message received as a separate Data Message and to act on
 that assumption, except to the extent that it duplicates
 another Data Message and NPCT1, its employee or agent
 knew that the Data Message was a duplicate.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>33.3.7</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<b>NPCT1</b>, karyawan atau agennya berhak untuk
 menganggap setiap Pesan Data yang diterima sebagai
 Pesan Data terpisah dan untuk bertindak berdasarkan
 asumsi itu, kecuali sejauh hal itu menggandakan Pesan
 Data lain dan NPCT1, karyawan atau agennya
 mengetahui bahwa Pesan Data itu adalah duplikasi.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>33.4</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Other Forms of Writing
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>33.4</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Bentuk Lain dari Penulisan
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Where the Contract requires any notice or information to be
 in writing, that requirement is also met by electronic mail
 (assuming that there exists a reliable assurance as to the
 integrity of any such notice and can be easily presented)]
 (<b>“Data Message”</b>). 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Jika Kontrak mensyaratkan pemberitahuan atau
 informasi apapun secara tertulis, persyaratan itu juga
 dipernuhi melalui surat elektronik [(dengan asumsi
 bahwa terdapat jaminan yang dapat diandalkan terkait
 integritas pemberitahuan tersebut dan dapat dengan
 mudah disajikan)] (<b>“Pesan Data”</b>).
 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>33.5</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													 Acknowledgement of Receipt
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>33.5</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Bukti Penerimaan
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Except where expressly agreed otherwise, NPCT1, its
 employee or agent is deemed to have received a Data
 Message when it acknowledges receipt by any
 communication in writing by NPCT1, its employee or agent
 sufficient to indicate to the sender that the Data Massage has
 been received.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Kecuali jika secara tegas disetujui sebaliknya, NPCT1,
 karyawan atau agennya dianggap telah menerima Pesan
 Data melalui bukti penerimaan melalui komunikasi
 secara tertulis dari NPCT1, karyawan atau ageenya,
 cukup untuk menunjukkan kepada pengirim bahwa
 Pesan Data telah diterima.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>33.6</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													 Service
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>33.6</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Layanan
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>33.6.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Subject to <b>Conditions 33.1</b> to <b>33.5</b> (inclusive), any notice to
 be given by either Party under the Contract shall be deemed
 to be received by the other Party if sent by:
 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>33.6.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Tunduk pada <b>Ketentuan 33.1</b> hingga <b>33.5</b> (inklusif),
 setiap pemberitahuan yang akan diberikan oleh salah
 satu Pihak berdasarkan Kontrak akan dianggap diterima
 oleh Pihak lain jika dikirim olehy:
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								
 								<!-- S:POINT 7.4.2 a --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(a)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 hand or local urgent mail or express mail or other fast
 postal service, or
 
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(a)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														Pengantaran langsung atau surat local khusus atau
 surat kilat atau Layanan pos cepat lainnya; atau
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 7.4.2 a --->
 								
 								<!-- S:POINT 7.4.2 a --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(b)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 registered post
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(b)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														pos tercatat,
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 7.4.2 a --->
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												to the registered or representative office of the recipient, or
 by telex, facsimile or other electronic media, followed
 immediately by a posted confirmation copy.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												ke kantor terdaftar atau perwakilan penerima, atau
 melalui teleks, faksimili atau media elektronik lainnya,
 yang segera diikuti oleh salinan konfirmasi yang
 dicatatkan.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>33.6.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Notwithstanding the provisions of <b>General Condition 33.6.1</b>,
 NPCT1 may in its absolute discretion where NPCT1 considers
 appropriate or conducive to efficiency or expediency, choose
 to give any notice to the Customer required under the
 Contract, by writing addressed to users of the
 Services/Facilities generally or by posting a copy of such
 notice at NPCT1.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>33.6.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Tanpa mengesampingkan <b>Ketentuan Umum 33.6.1</b>,
 NPCT1 dapat dengan kebijaksanaan mutlaknya dimana
 NPCT1 menganggap pantas atau konduktif untuk secara
 efisiensi atau manfaat, memilih untuk memberikan
 pemberitahuan kepada Pelanggan yang diperlukan
 dalam Kontrak, dengan pemberitahuan secara tertulis
 kepada pengguna Layanan/Fasilitas yang umumnya atay
 dengan memposting Salinan pemberitahuan tersebut di
 NPCT1.
 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 							<!-------------------------- E:POINT 33 -------------------------->
 							
 							<!-------------------------- S:POINT 34 -------------------------->
 							<!-- S:MODUL POINT --->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>34.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											PERSONAL DATA PROTECTION
 										</b>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>34.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											PERLINDUNGAN DATA PRIBADI
 										</b>
 									</div>
 								</div>
 							</div>
 							
 							<!-- E:MODUL POINT --->
 							
 							<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>34.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Definitions
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>34.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Definisi
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												For the purposes of this General Condition and unless
 the context requires otherwise, <b>“Personal Data”</b> means
 data, whether true or not, about an individual who can
 be identified:
 
 											</p> 
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Untuk keperluan Ketentuan Umum ini dan kecuali jika
 konteksnya menentukan lain, <b>“Data Pribadi”</b> berarti data,
 apakah benar atau tidak, tentang seorang individu yang
 dapat diidentifikasi:
 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								<!-- S:POINT 7.4.2 a --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(a)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														from that data; or
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(a)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														 Dari data itu; atau
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 7.4.2 a --->
 								
 								<!-- S:POINT 7.4.2 a --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(b)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 from that data and other information to which
 NPCT1 and/or the Customer has or is likely to
 have access.
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>(b)</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														Dari data dan informasi lain yang NPCT1 dan/atau
 Pelanggan memiliki atau kemungkinan akan memiliki
 akses.
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 7.4.2 a --->
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>34.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												In the event that the Customer provides Personal Data to
 NPCT1 in the course of exercising any rights, fulfilling any
 obligations, or doing anything related to or arising out of
 the Contract, the Customer undertakes and warrants that
 it has obtained all necessary consents required under the
 Personal Data Protection Act for NPCT1 to collect, use
 and/or disclose such Personal Data for all the relevant
 purposes which NPCT1 requires.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>34.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Dalam hal Pelanggan memberikan Data Pribadi kepada
 NPCT1 dalam rangka melaksanakan hal apapun,
 memenuhi kewajiban apapun, atau melakukan apapun
 yang berkaitan dengan atau timbul akibat Kontrak,
 Pelanggan berjanji dan menjamin bahwa Pelanggan telah
 memperoleh semua persetujuan yang diperlukan
 berdasarkan Undang-Undang Perlindungan Data Pribadi
 guna NPCT1 dapat mengumpulkan, menggunakan
 dan/atau mengungkapkan Data Pribadi tersebut untuk
 semua tujuan relevan yang diperlukan oleh NPCT1.
 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>34.3</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												The Customer agrees to fully indemnify NPCT1 against any
 and all actions, claims, legal costs, damages and/or other
 expenses which may arise out of the Customer’s breach of
 General <b>Condition 34.2</b>.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>34.3</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Pelanggan setuju untuk mengganti rugi NPCT1 secara
 penuh terhadap segala dan semua tindakan, klaim, biaya
 hukum, kerusakan dan/atau biaya lain yang mungkin
 timbul akibat Pelanggan melanggar <b>Ketentuan Umum 34.2</b>.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 							<!-------------------------- E:POINT 34 -------------------------->
 							
 							<!-------------------------- S:POINT 35 -------------------------->
 							<!-- S:MODUL POINT --->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>35.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											CONSENT OR WAIVER
 										</b>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>35.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											PERSETUJUAN ATAU PENGECUALIAN
 										</b>
 									</div>
 								</div>
 							</div>
 							
 							<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												No consent or express or implied waiver by NPCT1 to or of
 any breach of any General Condition or any covenant or duty
 of the Customer shall be construed as a consent or waiver by
 NPCT1 to or of any other breach of the same or any other
 General Condition, covenant or duty by the Customer and
 shall not prejudice in any way the rights, powers and
 remedies of NPCT1 contained in the Contract or at law.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Tidak ada persetujuan atau pengungkapan yang tersurat
 maupun tersirat oleh NPCT1 terhadap atau setiap
 pelanggaran terhadap Ketentuan Umum atau perjanjian
 atau kewajiban Pelanggan yang akan ditafsirkan sebagai
 persetujuan atau pengecualian oleh NPCT1 terhadap
 atau dari pelanggaran lain yang sama atau Ketentuan
 Umum lainnya, perjanjian atau tugas oleh Pelanggan dan
 tidak akan berprasangka dengan cara apapun atas hak,
 kekuasaan dan pemulihan NPCT1 sebagaimana
 terkadung dalam Kontrak atau berdasarkan hukum.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 							<!-- E:MODUL POINT --->
 							<!-------------------------- E:POINT 35 -------------------------->
 							
 							<!-------------------------- S:POINT 36 -------------------------->
 							<!-- S:MODUL POINT --->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>36.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											ARBITRATION
 										</b>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>36.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											ARBITRASE
 										</b>
 									</div>
 								</div>
 							</div>
 							
 							<!-- E:MODUL POINT --->
 							
 							<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>36.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													 By Consultation
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>36.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Melalui Konsultasi
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												It is the firm intention of the Parties that all disputes arising
 under, out of or in connection with the Contract (including
 any question regarding its existence, validity or termination)
 shall be settled amicably by consultation between the Parties.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Adalah niat yang tegas dari Para Pihak bahwa semua
 perselisihan yang timbul akibat Perjanjian ini, diluar atau
 sehubungan dengan Kontrak (termasuk pertanyaan
 tentang pelaksanaan, keabsahan atau pengakhiran) akan
 diselesaikan secara damai melalui konsultasi antara Para
 Pihak.
 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>36.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													 By Arbitration
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>36.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Melalui Arbitrase
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>36.2.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												If and to the extent that amicable settlement of any dispute
 arising hereunder or in connection with the Contract may not
 be possible, such dispute shall be referred to and finally
 resolved by arbitration in Indonesia in accordance with the
 Arbitration Rules of the Indonesia National Arbitration Centre
 (“BANI”) for the time being in force, which rules are deemed
 to be incorporated by reference into this clause.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>36.2.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Jika dan sejauh penyelesaian damai dari setiap
 perselisihan yang timbul berdasarkan Perjanjian ini atau
 sehubungan dengan Kontrak mungkin tidak dapat
 dilakukan, perselisihan tersebut harus dirujuk dan pada
 akhirnya diselesaikan melalui arbitrase di Indonesia
 sesuai dengan Peraturan Arbitrase dari Pusat Arbitrase
 Nasional Indonesia (“BANI”) yang berlaku saat ini, aturan
 mana yang dianggap dimasukkan sebgai referensi dalam
 pasal ini.
 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>36.2.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												The tribunal shall consist of 3 (three) Arbitrators
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>36.2.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Pengadilan Arbitrase harus terdiri dari 3 (tiga) Arbiter.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>36.2.3</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												The language of the arbitration shall be English.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>36.2.3</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Bahasa arbitrase adalah Bahasa Inggris
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>36.3</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													 Notification of Award
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>36.3</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Pemberitahuan Keputusan
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												When and so far as it may be necessary that any award,
 instrument or order issued by the arbitrators or any appeal
 therefrom should be served on the Customer in any
 proceedings to be taken for the enforcement of the Contract,
 the Customer hereby agrees and consents that the service of
 such award, instrument or order on the Customer in
 accordance with <b>General Condition 33.6</b>, shall be in all
 respects as operative and effective as if the same were its
 office.
 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Pada waktu dan sejauh diperlukan bahwa setiap
 keputusan, instumen atau perintah yang dikeluarkan
 oleh arbiter atau banding daripadanya harus diberikan
 kepada Pelanggan dalam setiap tindakan yang akan
 diambil untuk pelaksanaan Kontrak, Pelanggan dengan
 ini setuju dan menyetujui bahwa Layanan terhadap
 keputusan, instrument atau instruksi terhadap
 Pelanggan adalah sesuai dengan <b>Ketentuan Umum 33.6</b>,
 harus dalam segala hal bersifat operatif dan efektif
 seolah-olah memiliki kantor yang sama.
 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 							<!-------------------------- E:POINT 36 -------------------------->
 							
 							<!-------------------------- S:POINT 37 -------------------------->
 							<!-- S:MODUL POINT --->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>37.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											SURVIVAL OF OBLIGATIONS
 										</b>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>37.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											KELANJUTAN KEWAJIBAN
 										</b>
 									</div>
 								</div>
 							</div>
 							
 							
 							
 							<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Notwithstanding the complete performance of the Contract
 or the termination of the Contract insofar as it relates to the
 Customer, the terms and conditions of the Contract shall
 remain in full force and effect between the NPCT1 and the
 Customer insofar as such terms and conditions shall remain
 unfulfilled or relevant.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Tanpa mengesampingkan kinerja lengkap dari Kontrak
 atau pengakhiran Kontrak, sejauh yang berkaitan dengan
 Pelanggan, syarat dan ketentuan Kontrak akan tetap
 berlaku penuh dan efektif antara NPCT1 dengan
 Pelanggan, sejauh syarat dan ketentuan tersebut akan
 tetap tidak terpenuhi maupun relevan.
 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 							<!-- E:MODUL POINT --->
 							<!-------------------------- E:POINT 37 -------------------------->
 							
 							<!-------------------------- S:POINT 38 -------------------------->
 							<!-- S:MODUL POINT --->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>38.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											STAMP DUTY
 										</b>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>38.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											BEA MATERAI
 										</b>
 									</div>
 								</div>
 							</div>
 							
 							
 							<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												The Customer shall bear the costs of and incidental to the
 stamping of all documents evidencing the Contract and the
 duplicate thereof.
 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Pelanggan harus menanggung biaya dan hal-hal terkait
 atas cap pada semua dokumen yang membuktikan
 Kontrak dan salinannya.
 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 							<!-- E:MODUL POINT --->
 							<!-------------------------- E:POINT 38 -------------------------->
 							
 							<!-------------------------- S:POINT 39 -------------------------->
 							<!-- S:MODUL POINT --->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>39.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											GOVERNING LAW
 										</b>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>39.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											PERATURAN YANG BERLAKU
 										</b>
 									</div>
 								</div>
 							</div>
 							
 							<!-- E:MODUL POINT --->
 							
 							<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>39.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												The Contract will be governed by, and construed in all
 respects in accordance with, the laws of Republic of
 Indonesia.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>39.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Kontrak diatur oleh, dan ditafsirkan dalam segala hal
 sesuai dengan hukum yang berlaku di Republik
 Indonesia.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>39.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												The Customer hereby irrevocably agrees for the benefit of
 NPCT1 that the courts of Republic of Indonesia shall have
 exclusive jurisdiction over any dispute arising under, out of or
 in connection with the Contract (including any question
 regarding its existence, validity or termination), save that
 nothing in this <b>General Condition 39.2</b> shall limit the right of
 NPCT1 to take proceedings against the Customer in any other
 court of competent jurisdiction, nor shall the taking of
 proceedings in any one or more jurisdictions preclude the
 taking of proceedings in any other jurisdictions, whether
 concurrently or not, to the extent permitted by the law of
 such other jurisdiction.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>39.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Pelanggan dengan ini setuju, adalah untuk kepentingan
 NPCT1, bahwa pengadilan Republik Indonesia
 merupakan yurisdiksi ekslusif atas setiap perselisihan
 yang timbul akibat, diluar atau sehubungan dengan
 Kontrak (termasuk setiap pertanyaan mengenai
 keberadaannya, keabsahan atau pengakhiran), kecuali
 bahwa tidak ada dalam <b>Ketentuan Umum 39.2</b> ini akan
 membatasi hak NPCT1 untuk mengambil tindakan
 terhadap Pelanggan di pengadilan lain dari yurisdiksi
 yang berkompeten, juga tidak akan mengambil proses di
 salah satu atau lebih dari satu yurisdiksi yang
 menghalangi proses di yurisdiksi lain, baik secara
 bersamaan atau tidak, sejauh diizinkan oleh hukum dari
 yurisdiksi lain tersebut.
 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 							<!-------------------------- E:POINT 39 -------------------------->
 							
 							<!-------------------------- S:POINT 40 -------------------------->
 							<!-- S:MODUL POINT --->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>40.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											NPCT1 SAFETY RULES
 										</b>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>40.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											PERATURAN KESELAMATAN NPCT1
 										</b>
 									</div>
 								</div>
 							</div>
 							
 							<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												During at NPCT1 Terminal and/or Premises, the Customer shall
 guarantee that every person (“Individual”) or party
 (“Company”) representing the Customer, shall always comply
 with prevailing Safety Rules applicable to NPCT1.
 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Selama di Terminal dan/atau Lokasi NPCT1, Pelanggan
 harus menjamin bahwa setiap orang (“Individu”) atau pihak
 (“Perusahaan” adalah mewakili Pelanggan, yang harus
 selalu mematuhi Peraturan Keselamatan yang berlaku di
 NPCT1.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 							<!-- E:MODUL POINT --->
 							
 							
 							<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>40.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													INDIVIDUAL SAFETY SYSTEM
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>40.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												SISTEM KESELAMATAN INDIVIDU
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								<!-- S:POINT 40.1 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 											Any breach by an employees, agent or any representative of
 											 the Customer of the Safety Rules (Individual) shall result in
 											 demerit points accruing to, and enforcement charges levied on,
 											 such individual, as set out in the table below in relation to less
 											 serious offences (indicated by an “L” prefix to the safety rule
 											 number), serious offences (indicated by an “S” prefix to the
 											 safety rule number) and very serious offences (indicated by a
 											 “V” prefix to the safety rule number):
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Setiap pelanggaran oleh karyawan, agen atau perwakilan
 												 Pelanggan terhadap Peraturan Keselamatan (Individu)
 												 akan mengakibatkan timbulnya pengurangan poin, dan
 												 pengenaan sanksi denda akan dikenakan terhadap individu
 												 tersebut, sebagaimana tercantum dalam table dibawah ini
 												 terkait pelanggaran yang kurang serius (ditandai dengan
 												 awalan “L” pada nomor aturan keselamatan), pelanggaran
 												 serius (ditandai dengan awalan “S” pada nomor aturan
 												 keselamatan) dan pelanggaran yang sangat serius (ditandai
 												 dengan awalan “V” pada nomor aturan keselamatan):
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 40.1 --->
 								
 								<!-- S:POINT 40.1 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 paragraph">
 													<p>
 														<b>
 															<i>
 																Type of Safety & Traffic Offence
 															</i>
 														</b>
 													</p>
 												</div>
 												<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 paragraph">
 													<p>
 														<b>
 															<i>
 																Penalty
 															</i>
 														</b>
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 paragraph">
 													<p>
 														<b>
 															<i>
 																Jenis Hukuman Keselamatan & Lalu Lintas
 															</i>
 														</b>
 													</p>
 												</div>
 												<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 paragraph">
 													<p>
 														<b>
 															<i>
 																Denda
 															</i>
 														</b>
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 40.1 --->
 								
 								
 								
 								<!-- S:POINT 40.1 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 paragraph">
 													<p>
 														Less Serious Offence (L)
 													</p>
 												</div>
 												<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 paragraph">
 													<p>
 														2 demerit points 
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 paragraph">
 													<p>
 														Pelanggaran Kurang Serius (L) 
 													</p>
 												</div>
 												<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 paragraph">
 													<p>
 														2 (dua) Poin Pengurangan
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 40.1 --->
 								
 								
 								
 								<!-- S:POINT 40.1 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 paragraph">
 													<p>
 														Serious Offence (S)
 													</p>
 												</div>
 												<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 paragraph">
 													<p>
 														4 demerit points
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 paragraph">
 													<p>
 														Pelanggaran Serius (S)
 													</p>
 												</div>
 												<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 paragraph">
 													<p>
 														4 (empat) Poin Pengurangan
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 40.1 --->
 								
 								
 								<!-- S:POINT 40.1 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 paragraph">
 													<p>
 														Very Serious Offence (V)
 													</p>
 												</div>
 												<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 paragraph">
 													<p>
 														8 demerit points
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 paragraph">
 													<p>
 														Pelanggaran Sangat Serius (V)  
 													</p>
 												</div>
 												<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 paragraph">
 													<p>
 														8 (delapan) Poin Pengurangan
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 40.1 --->
 								
 								
 								<!-- S:POINT 40.1 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-12 col-md-12 col-sm-12 col-xm-12 paragraph">
 													<p>
 														On accumulation of 24 demerit points or more for offences committed within a 24-month period:-
 													</p>
 												</div>
 												
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-12 col-md-12 col-sm-12 col-xm-12 paragraph">
 													<p>
 														Pada waktu akumulasi mencapai 24 (dua puluh empat) Poin Pengurangan atau lebih atas Pelanggaran yang dilakukan selama periode 24 bulan:-
 													</p>
 												</div>
 												
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 40.1 --->
 								
 								
 								
 								
 								<!-- S:POINT 40.1 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 paragraph">
 													<p>
 														1st infringement period
 													</p>
 												</div>
 												<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 paragraph">
 													<p>
 														3 months debarment & Safety Refresher Course.
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 paragraph">
 													<p>
 														Periode Pelanggaran Ke-1
 													</p>
 												</div>
 												<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 paragraph">
 													<p>
 														3 (tiga) bulan Pencekalan & Keamanan Sesi Pemahaman Peraturan
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 40.1 --->
 								
 								
 								<!-- S:POINT 40.1 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 paragraph">
 													<p>
 														2nd infringement period
 													</p>
 												</div>
 												<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 paragraph">
 													<p>
 														6 months debarment & Safety Refresher Course.
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 paragraph">
 													<p>
 														Periode Pelanggaran Ke-2 
 													</p>
 												</div>
 												<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 paragraph">
 													<p>
 														6 (enam)bulan Pencekalan & Keamanan Sesi Pemahaman Peraturan
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 40.1 --->
 								
 								
 								
 								<!-- S:POINT 40.1 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 paragraph">
 													<p>
 														3rd infringement period
 													</p>
 												</div>
 												<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 paragraph">
 													<p>
 														Permanent debarment (immediate).
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 paragraph">
 													<p>
 														Periode Pelanggaran Ke-3
 													</p>
 												</div>
 												<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 paragraph">
 													<p>
 														Pencekalan Permanen (Segera)
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 40.1 --->
 								
 								<!-- S:POINT 40.1 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-12 col-md-12 col-sm-12 col-xm-12 paragraph">
 													<p>
 														Serious infringement resulting in death or serious injuries or serious damage to equipment or property.
 													</p>
 												</div>
 												
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-12 col-md-12 col-sm-12 col-xm-12 paragraph">
 													<p>
 														Pelanggaran serius yang mengakibatkan kematian atau cedera serius atau kerusakan serius pada peralatan atau properti. 
 													</p>
 												</div>
 												
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 40.1 --->
 								
 								
 								<!-- S:POINT 40.1 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-12 col-md-12 col-sm-12 col-xm-12 paragraph">
 													<p>
 														Fine and immediate debarment irrespective of whether or not
 it is the first infringement. (The Offender must attend a Safety
 Refresher Course and the NPCT1 Pass may be re-issued to such
 offender thereafter.)
 													</p>
 												</div>
 												
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-12 col-md-12 col-sm-12 col-xm-12 paragraph">
 													<p>
 														Denda dan pencekalan segera, terlepas dari apakah itu
 merupakan pelanggaran ke-1 atau bukan. (Pelanggar harus
 mengikuti Sesi Pemahaman Peraturan Keselamatan dan
 setelahnya Kartu Pas NPCT1 dapat diterbitkan kembali
 kepada Pelanggar).
 													</p>
 												</div>
 												
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 40.1 --->
 								
 								<!-- S:POINT 40.1 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-12 col-md-12 col-sm-12 col-xm-12 paragraph">
 													<p>
 														Safety Rules applicable to NPCT1 are as follows:
 													</p>
 												</div>
 												
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-12 col-md-12 col-sm-12 col-xm-12 paragraph">
 													<p>
 														Aturan Keselamatan yang berlaku di NPCT1 adalah sebagai berikut:
 													</p>
 												</div>
 												
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 40.1 --->
 								
								
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>40.1.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<b>
 													SAFETY RULES (INDIVIDUAL)
 												</b>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>40.1.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<b>
 													PERATURAN KESELAMATAN (INDIVIDU)
 												</b>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>40.1.1.1</p></div> 
  										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  											<p>
  												<u>
  													&nbsp; Proper Protective Apparel
  												</u>
  											</p>
  										</div>
  									</div>
  								</div>
  								<!-- E:ENGLISH --->
  								<!-- S:INDONESIA --->
  								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
  									<div class="row">
  										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>40.1.1.1</p></div> 
  										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  											<p>
  												<u>
  													&nbsp; Perlengkapan Pelindung yang Tepat
  												</u>
  											</p>
  										</div>
  									</div>
  								</div>
  								<!-- E:INDONESIA --->
  								<!-- E:POINT 6.3 --->
  								
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 									<p>
 										The Customer shall:
 									</p>
 								</div>
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 									<p>
 										Pelanggan harus:
 									</p>
 								</div>
 								
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>L101</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that a safety helmet is properly worn in compulsory
 “Safety Helmet” areas at all times.
 
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>L101</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											Memastikan bahwa helm pengaman telah dikenakan dengan
 benar di area dimana “Helm Pengaman” wajib dikenakan
 setiap saat.
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>L102</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that suitable protective footwear acceptable to NPCT1
 are properly worn at all times.
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>L102</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											Memastikan sepatu pelindung yang sesuai dan yang dapat
 diterima oleh NPCT1 dikenakan dengan benar setiap saat.
 
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>V103</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											 To ensure that a safety belt/harnessis properly worn at all times
 when working from heights or when riding on quay crane
 spreaders.
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>V103</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											Memastikan bahwa sabuk pengaman/harness dikenakan
 dengan benar setiap saat pada waktu melakukan pekerjaan
 di ketinggian atau pada saat mengendarai quay crane
 spreaders.
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>V104</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that a seat belt is properly worn at all
 times when driving any equipment/vehicle.
 
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>V104</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											Memastikan bahwa sabuk pengaman dipakai dengan benar
 setiap saat saat mengendarai peralatan/kendaraan.
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S106</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that a high visibility vest acceptable to NPCT1 is
 properly worn at all times
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S106</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											Memastikan bahwa rompi visibiltas tinggi yang dapat
 diterima oleh NPCT1 dikenakan dengan benar setiap saat.
 
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>V107</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that a life jacket acceptable to NPCT1 is properly worn
 at all times when working at all ship edge/wharf edge.
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>V107</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											Untuk memastikan bahwa jaket pelampung yang dapat
 diterima NPCT1 dikenakan dengan benar setiap waktu saat
 bekerja di semua tepi kapal / dermaga.
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>L149</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that all other suitable protective apparels acceptable
 to NPCT1 are properly worn at all times.
 
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>L149</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											Memastikan bahwa semua pakaian pelindung keselamatan
 adalah sesuai dan dapat diterima oleh NPCT1 adalah
 dikenakan dengan benar setiap saat.
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 								
 								
 								
  								<!-- S:POINT 6.3 --->
  								<!-- S:ENGLISH --->
  								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
  									<div class="row">
  										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>40.1.1.2</p></div> 
  										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  											<p>&nbsp; 
  												<u>
  													Safe Lifting Equipment / Slinging Operations
  												</u>
  											</p>
  										</div>
  									</div>
  								</div>
  								<!-- E:ENGLISH --->
  								<!-- S:INDONESIA --->
  								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
  									<div class="row">
  										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>40.1.1.2</p></div> 
  										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  											<p>&nbsp; 
  												<u>
  													Peralatan Angkat / Slinging Operation yang Aman
  												</u>
  											</p>
  										</div>
  									</div>
  								</div>
  								<!-- E:INDONESIA --->
  								<!-- E:POINT 6.3 --->
  								
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 									<p>
 										The Customer shall:
 									</p>
 								</div>
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 									<p>
 										Pelanggan harus:
 									</p>
 								</div>
 								
 								<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>L201</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that proper guide ropes of adequate length are used
 when handling heavy or lengthy loads.
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>L201</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											Memastikan bahwa tali penuntun yang tepat dengan
 panjang yang memdai digunakan saat menangani beban
 yang berat atau yang panjang
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S202</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that only lifting machines/appliances/gear marked with
 “SWL” and with valid test certificates are used.
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S202</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											Memastikan bahwa hanya mesin/peralatan/roda gigi
 pengangkat yang ditandai dengan “SWL” dan yang memiliki
 sertifikat pengujian yang berlaku.
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S203</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											 To ensure that appropriate lifting machines / appliance / gear /
 method e.g. self-locking spreaders, etc. are used for containerhandling.
 
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S203</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											Memastikan bahwa mesin / peralatan / perlengkapan /
 metode pengangkat adalah sesuai, misalnya self-locking
 spreaders, dll, digunakan untuk penanganan peti kemas
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S204</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that lifting machines / appliances / gear and pallets
 used for the slinging, loading and stacking of goods/materials are
 free from defects and properly used.
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S204</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											Memastikan bahwa mesin / peralatan / gigi dan palet
 pengangkat yang digunakan untuk slinging, pemuatan dan
 penumpukan barang/bahan adalah bebas dari cacat dan
 dapat digunakan dengan benar dan sebagaimana layaknya.
 
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S205</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that the 3-steps lifting operational procedure is
 properly observed and that loads are lifted with due care and
 attention.
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S205</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											Memastikan prosedur operasional 3-langkah pengangkatan
 adalah telah diperhatikan dengan benar dan beban adalah
 diangkat dengan penuh kehati-hatian dan penuh perhatian.
 
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S206</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that lifting operations are properly guided by a
 signaler, lifting supervisor and/or Ship Traffic Assistant and
 Wharf Operations Supervisor.
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S206</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											Memastikan bahwa proses pengangkatan dipandu dengan
 benar oleh pemberi perintah, pengawas proses
 pengangkatan dan/atau Asisten Lalu Lintas Kapal dan
 Pengawas Operasional Dermaga.
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S207</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that any person performing the duties of a signaler,
 lifting supervisor, Ship Traffic Assistant or Wharf Operations
 Supervisor is stationed at the proper vantage position.
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S207</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											Memastikan bahwa setiap orang yang melakukan tugas
 Pemberi Perintah, Pengawas Proses Pengangkatan atau
 Pengawas Operasional Dermaga adalah ditempatkan di
 posisi yang tepat.
 
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S208</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that the handling of heavy equipment, including
 overheight containers, hatch cover, etc, is properly supervised.
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S208</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											Memastikan bahwa penanganan alat berat, termasuk peti
 kemas dengan kelebihan tinggi, tutup palka dll, adalah
 diawasi dengan benar.
 
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>V209</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that no lifting equipment/gear/machine is to be
 loaded beyond the safe working load.
 
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>V209</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											 Memastikan bahwa tidak ada peralatan/perlengkapan/mesin
 yang dimuat diluar beban kerja yang aman.
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>V210</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that no load is suspended over or near any person at
 all times and that no person is allowed to work under or near a
 suspender load.
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>V210</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											Memastikan bahwa tidak ada beban yang ditanggugkan
 diatas atau di dekat orang setiap saat dan bahwa tidak ada
 orang yang diizinkan untuk bekerja dibawah atau di dekat
 beban yang ditangguhkan.
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S249</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that lifting machines/appliances/gear are operated in
 a safe manner and compliant with relevant safety requirements
 at law and/or regulations stipulated by NPCT1.
 
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S249</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											Memastikan bahwa mesin pengangkat / peralatan /
 perlengkapan dioperasikan dengan cara yang aman dan
 sesuai persyaratan keselamatan yang relevan menurut
 hukum dan/atau peraturan yang ditetapkan oleh NPCT1.
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 								
 								 
 								
 								
  								<!-- S:POINT 6.3 --->
  								<!-- S:ENGLISH --->
  								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
  									<div class="row">
  										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>40.1.1.3</p></div> 
  										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  											<p>&nbsp; 
  												<u>
  													Safe Equipment Operations (Including Prime Movers, Forklifts, Mobile Cranes, etc.)
  												</u>
  											</p>
  										</div>
  									</div>
  								</div>
  								<!-- E:ENGLISH --->
  								<!-- S:INDONESIA --->
  								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
  									<div class="row">
  										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>40.1.1.3</p></div> 
  										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  											<p>&nbsp; 
  												<u>
  													Pengoperasian Peralatan dengan Aman (Termasuk Prime Movers, Forklifts, Mobile Cranes, etc.)
  												</u>
  											</p>
  										</div>
  									</div>
  								</div>
  								<!-- E:INDONESIA --->
  								<!-- E:POINT 6.3 --->
 								
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 									<p>
 										The Customer shall:
 									</p>
 								</div>
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 									<p>
 										Pelanggan harus:
 									</p>
 								</div>
  								
 								<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S301</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that any equipment used is installed with proper and
 standard safety features e.g. brakes, horns, meter gauges,
 blinker lights, reverse buzzer, etc.
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S301</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											Memastikan bahwa setiap peralatan yang digunakan adalah
 terpasang dengan fitur keselamatan yang tepat dan sesuai
 standar, misalnya: rem, klakson, pengukur jarak, lampu
 tanda bahaya, signal mundur, dll.
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S302</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that headlights of all equipment are switched on when
 operating in or around the warehouse/freight station/vessel
 between 7.00 p.m. and 7.00 a.m. and whenever visibility is
 poor.
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S302</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											Memastikan bahwa lampu depan semua peralakan telah
 dinyalakan pada waktu beroperasi, baik didalam atau di
 sekitar Gudang/lokasi pengangkutan/kapal antara pukul
 19:00 hingga pukul 07:00 (waktu setempat) dan setiap saat
 pada waktu jarak pandang buruk.
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S303</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that only proper equipment for the intended work
 purpose is used and that such equipment is used carefully
 according to its function and operational instructions.
 
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S303</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											Memastikan bahwa hanya peralatan yang tepat untuk tujuan
 kerja yang dimaksud adalah yang digunakan dan bahwa
 peralatan tersebut digunakan dengan penuh kehati-hatian
 sesuai dengan fungsi dan instruksi pemakaiannya.
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S304</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											 To ensure that the engine of a piece of equipment is promptly
 switched off and the hand brake is engaged during refuelling or
 before leaving the cabin.
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S304</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											Memastikan bahwa mesin dari suatu peralatan dimatikan
 dengan segera dan rem tangan diaktifkan selama pengisian
 bahan bakar atau sebelum meninggalkan kabin.
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S305</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that loads are lifted or transported in a stable and
 safe manner and within the load limit.
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S305</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											Memastikan bahwa muatan diangkat atau diangkut dengan
 cara yang stabil dan aman serta dalam batas beban angkut.
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>LSV349</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											 To ensure that all equipment are driven or operated with due
 care and attention and compliant with safety
 procedures/guidelines/instructions of the law and/or
 regulations stipulated by NPCT1. 
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>LSV349</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											Memastikan bahwa semua peralatan digerakkan atau
 dioperasikan dengan perhatian dan perawatan yang sesuai
 dengan prosedur/pedoman/instruksi keamanan hukum
 dan/atau peraturan yang ditetapkan oleh NPCT1.
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 								
 								
  								<!-- S:POINT 6.3 --->
  								<!-- S:ENGLISH --->
  								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
  									<div class="row">
  										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>40.1.1.4</p></div> 
  										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  											<p>&nbsp; 
  												<u>
  													 Safe Work Method / Procedures
  
  												</u>
  											</p>
  										</div>
  									</div>
  								</div>
  								<!-- E:ENGLISH --->
  								<!-- S:INDONESIA --->
  								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
  									<div class="row">
  										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>40.1.1.4</p></div> 
  										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  											<p>&nbsp; 
  												<u>
  													Metode / Prosedur Keamanan Bekerja
  												</u>
  											</p>
  										</div>
  									</div>
  								</div>
  								<!-- E:INDONESIA --->
  								<!-- E:POINT 6.3 --->
  								
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 									<p>
 										The Customer shall:
 									</p>
 								</div>
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 									<p>
 										Pelanggan harus:
 									</p>
 								</div>
 								
 								<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>L401</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that means of access and fire/life-saving appliances
 are free from obstruction at all times.
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>L401</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											Memastikan bahsa sarana akses dan peralatan
 kebakaran/keselamatan jiwa adalah bebas dan tidak ada
 rintangan/halangan di sekitranya setiap saat.
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>L402</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that work areas are kept free from obstruction
 and tripping hazards at all times.
 
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>L402</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											Memastikan bahwa area kerja adalah setiap saat bebas dari
 rintangan dan bahaya akan tersandung.
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S403</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that work areas or any unguarded
 openings are adequately illuminated/barricaded before
 work.
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S403</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											Memastikan bahwa sebelum pekerjaan dilakukan, area kerja
 atau wilayah terbuka yang tidak dijaga adalah cukup
 terang/cukup pengamanan.
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S404</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that safety warning signs/devices, including traffic
 cones/blinkers, etc., as required by NPCT1.
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S404</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											 Memastikan bahwa tanda.perangkat peringatan keselamatan,
 termasuk kerucut lalu lintas, dll, adalah sebagaimana
 disyaratkan oleh NPCT1.
 
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S405</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that prompt action is taken to rectify any unstable
 stacking, obstruction to fire fighting/life saving equipment and
 means of access, and any other sub-standard condition.
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S405</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											Memastikan bahwa Tindakan segera diambul untuk
 memperbaiki stacking yang tidak stabil, rintangan/halangan
 terhadap peralatan dan sarana akses pemadan
 kebakaran/keselamatan,s erta kondisi standar lainnya.
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S406</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that wheel chocks and/or proper support stands are
 used for vehicles or other equipment under repair.
 
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S406</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											Memastikan bahwa wheel chocks dan/atau sarana
 pendukung yang tepat adalah digunakan untuk kendaraan
 atau peralatan lain yang sedang diperbaiki.
 
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S407</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that there is compliance with all fire safety
 requirements, safety instructions, permit to work system and
 hot work procedures required at law and regulations as
 stipulated by NPCT1.
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S407</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											Memastikan bahwa terdapat kepatuhan terhadap semua
 persyaratan keselamatan kebakaran, instruksi keselamatan,
 izin untuk system bekerja dan prosedur hot work yang
 diharuskan oleh hukum dan peraturan sebagaimana
 ditentukan oleh NPCT1.
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S408</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that safe work practices are adopted when working
 at a height.
 
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S408</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											Memastikan bahwa praktek keamanan dalam bekerja telak
 dilaksanakan dalam pekerjaan yang berhubungan dengan
 ketinggian.
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S409</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that signallers, Ship Traffic Assistants or Wharf
 Operations Supervisors are to remain at the relevant work
 stations during operation at all times unless there are
 suitable and proper replacement.
 
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S409</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											 Memastikan bahwa Pemberi Kode/Tanda, Asisten Lalu Lintas
 Kapal atau Pengawas Operasional Dermaga setiap saat harus
 tetap berada di lokasi kerja yang relevan selama waktu
 beroperasi, terkecuali ada penggantian yang tepat dan
 sesuai.
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S410</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that all trailer twistlocks are properly unlocked before
 offloading of containers and properly locked after loading of
 containers.
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S410</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											Memastikan bahwa semua twist locks pada trailer adalah
 dalam kondisi dibuka secara benar, sebelum peti kemas
 diturunkan dan dalam kondisi terkunci secara benar setelah
 peti kemas dimuat
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S411</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that no person is to perform work for more than 12
 (twelve) continuous hours.
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S411</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											Untuk memastikan bahwa tidak ada pekerja yang melakukan
 pekerjaan selama lebih dari 12 jam secara terus menerus..
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S412</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that save-all nets are properly rigged at the shipside
 as required by NPCT1.
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S412</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											Untuk memastikan bahwa semua jaring pengaman disimpan
 dengan baik di sisi kapal sebagaimana disyaratkan oleh
 NPCT1.
 
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S413</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that safety devices are not tampered with and suitable
 and proper tools and equipment are used.
 
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S413</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											Memastikan bahwa perangkat keselamatan tidak dalam
 kondisi rusak dan penggunaan perlengkapan dan peralatan
 adalah sesuai dan tepat.
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>V414</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that proper and safe means are used to access to and
 from high work places.
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>V414</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											Memastikan bahwa proses dan cara yang tepat serta aman
 digunakan dalam mengakses tempat kerja dengan
 ketinggian. 
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S415</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that no tool, gear or equipment and means of access
 (e.g. ladder, platform, man-cage, gondola, scaffold, etc.) which
 is defective, untested or uncertified is put into use, and any
 such item is immediately removed from NPCT1 premises.
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S415</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											 Memastikan tidak ada peralatan, peralatan mekanik atau
 perlengkapan dan sarana akses (misalnya tangga, platform,
 man-cage, gondola, scaffold dan lain-lain) yang dalam
 kondisi rusak, belum diuji atau tidak memiliki sertifikat
 sebelum digunakan, dan setiap peralatan, peralatan
 mekanik atau perlengkapan tersebut segera dipindahkan
 dari Lokasi NPCT1.
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S416</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that proper tools, receptacles and aids for
 lashing/unlashing are used.
 
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S416</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											Memastikan bahwa yang digunalan dalam pekerjaan
 lashing/unlashing adalah peralatan, tempat
 penyimpanan/penampungan dan alat bantu yang tepat.
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S417</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that there is a sufficient number of trained
 workers to handle each stevedoring/lashing/berthing
 operation.
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S417</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											Memastikan terdapat jumlah pekerja terlatih yang
 cukup/memadai untuk menangani setiap aktivitas bongkar
 muat/lashing/berlabuh.
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S418</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that all loose items on the surfaces of, or which are
 not properly secured to, the hatch covers or containers are
 removed before such hatch covers or containers are handled.
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S418</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											Memastikan semua benda lepas yang ada di lapangan, atau
 yang tidak ditempatkan dengan aman dan benar, penutup
 atau wadah palka dipastikan dilepas sebelum penutup atau
 wadah palka tersebut ditangani
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S419</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that no equipment or tool is thrown or dropped from
 any worksite at a height.
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S419</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											Memastikan tidak ada peralatan atau perlengkapan yang
 terlempar atau jatuh dari tempat kerja yang berada di
 ketinggian.
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S420</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that only quay crane spreaders are used to get to and
 from container tops and workers using such spreaders are
 properly secured within the man-cage by safety belt/harness
 before such spreaders are activated. No more than 2 workers
 are to use one such spreader at any one time
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S420</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											Memastikan hanya quay crane spreader yang digunakan
 untuk mencapai atau dari puncak peti kemas dan pekerja
 yang menggunakan spreader adalah telah aman di dalam
 man-cage dengan penggunaan tali pengaman/haness
 sebelum spreaders diaktifkan. Tidak ada 2 (dua) atau lebih
 pekerja dapat menggunakan satu spreader tersebut dalam
 satu waktu.
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>V421</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that no Ship Traffic Assistant performs Ship Traffic
 Assistant duties and worker duties simultaneously.
 
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>V421</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											Memastikan tidak ada Asisten Lalu Lintas Kapal yang
 melakukan tugas Asisten Lalu Lintas Kapal dan tugas Pekerja
 secara bersamaan.
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>V422</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that deep tanks or confined spaces are properly
 ventilated and certified safe before allowing workers to enter.
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>V422</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											Memastikan kedalaman tanki atau ruang terbatas memiliki
 ventilasi dan sertifikasi yang sesuai sebelum mengizinkan
 pekerja untuk masuk.
 
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>LSV449</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that all necessary precautionary measure are taken
 at all times when working in NPCT1 Premises.
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>LSV449</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											 Memastikan bahwa semua Tindakan pencegahan yang
 diperlukan adalah diambil setiap saat Ketika bekerja di
 Lokasi NPCT1.
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 								
 								
 								
  								<!-- S:POINT 6.3 --->
  								<!-- S:ENGLISH --->
  								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
  									<div class="row">
  										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>40.1.1.5</p></div> 
  										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  											<p>&nbsp; 
  												<u>
  													 Safe Stacking / Unstacking Operations
  												</u>
  											</p>
  										</div>
  									</div>
  								</div>
  								<!-- E:ENGLISH --->
  								<!-- S:INDONESIA --->
  								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
  									<div class="row">
  										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>40.1.1.5</p></div> 
  										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  											<p>&nbsp; 
  												<u>
  													Operasional Penumpukan / Pembongkaran yang Aman
  												</u>
  											</p>
  										</div>
  									</div>
  								</div>
  								<!-- E:INDONESIA --->
  								<!-- E:POINT 6.3 --->
  								
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 									<p>
 										The Customer shall:
 									</p>
 								</div>
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 									<p>
 										Pelanggan harus:
 									</p>
 								</div>
 								
 								<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>L501</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that goods are stacked within safe height limits
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>L501</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											Memastikan barang yang ditumpuk adalah dalam batas ketinggian yang aman.
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>L502</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that adequate space clearance is provided between stacks and between stacks and walls.
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>L502</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											 Memastikan bahwa jarak ruang yang memadai disediakan di
 antara tumpukan dan dinding.
 
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S503</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that adequate space clearance is provided
 between incompatible goods/materials.
 
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S503</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											Memastikan ruang yang memadai disediakan di antara
 barang atau bahan yang tidak sama/sejenis.
 
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S549</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that goods/materials are properly stacked and
 compliant with safe work practices required by NPCT1.
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S549</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											 Memastikan bahwa barang/bahan ditumpuk dengan benar
 dan sesuai dengan praktek kerja yang aman sebagaimana
 disyaratkan oleh NPCT1.
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
  								
  								<!-- S:POINT 6.3 --->
  								<!-- S:ENGLISH --->
  								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
  									<div class="row">
  										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>40.1.1.6</p></div> 
  										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  											<p>&nbsp; 
  												<u>
  													 Authorized / Trained Workers
  												</u>
  											</p>
  										</div>
  									</div>
  								</div>
  								<!-- E:ENGLISH --->
  								<!-- S:INDONESIA --->
  								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
  									<div class="row">
  										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>40.1.1.6</p></div> 
  										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  											<p>&nbsp; 
  												<u>
  													Pekerja Resmi / Terlatih
  												</u>
  											</p>
  										</div>
  									</div>
  								</div>
  								<!-- E:INDONESIA --->
  								<!-- E:POINT 6.3 --->
  								
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 									<p>
 										The Customer shall:
 									</p>
 								</div>
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 									<p>
 										Pelanggan harus:
 									</p>
 								</div>
 								
 								<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S601</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that any person who performs or is permitted to
 perform stevedoring works is properly trained and within the
 authorised age limit.
 
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S601</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											Memastikan bahwa setiap orang yang melakukan atau
 diizinkan untuk melakukan pekerjaan bongkar muat adalah
 yang telah dilatih dengan baik dan dalam batas usia yang
 diizinkan.
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S602</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											 To ensure that the requisite authorisation is obtained before
 any person performs or is permitted to perform wharfinger
 duties and/or berthing/unberthing.
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S602</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											Memastikan bahwa otorisasi yang diperlukan telah
 didapatkan sebelum orang melakukan pekerjaan atau
 diizinkan untuk melakukan pekerjaan wharfinger dan/atau
 berthing/unberthing.
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S603</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that the requisite authorisation is obtained before
 any person performs or is permitted to perform the duties of a
 Safety Supervisor, Foreman or Ship Checker.
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S603</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											 Memastikan bahwa otorisasi yang diperlukan telah diperoleh
 sebelum orang melakukan atau diizinkan untuk melakukan
 tugas-tugas Pengawas Keselamatan, Mandor atau
 Pemeriksa Kapal.
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S604</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											 To ensure that any person who performs or is permitted
 to perform plug/unplug jobs onboard vessel and/or in the
 yard is properly trained and has obtained the prior requisite
 authorisation.
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S604</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											Memastikan bahwa setiap orang yang melakukan atau
 diizinkan untuk melakukan pekerjaan plug/unplug diatas
 kapal dan/atau di lapangan adalah telah mendapatkan
 pelatihan dengan baik dan telah mendapatkan izin terlebih
 dahulu.
 
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S605</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that the requisite authorisation is obtained before any
 person performs or is permitted to perform the duties of Ship
 Traffic Assistant or Wharf Operations Supervisor.
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S605</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											Memastikan bahwa otorisasi yang diperlukan telah diperoleh
 sebelum ada orang yang melakukan atau diizinkan untuk
 melakukan tugas-tugas Asisten Lalu Lintas Kapal atau
 Pengawas Operasional Dermaga.
 
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S606</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that the requisite authorisation is obtained before
 any person performs or is permitted to perform engineering
 or hot work only after obtaining the requisite
 authorisation.
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S606</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  										Memastikan bahwa otorisasi yang diperlukan telah diperoleh
 sebelum ada orang yang melakukan atau diizinkan
 melakukan pekerjaan teknis atau hot work hanya setelah
 mendapatkan izin yang diperlukan	
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>V607</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that the requisite authorisation is obtained before
 any person drives or operates or is permitted to drive or
 operate forklifts, machines, vehicles, prime movers or other
 port equipment.
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>V607</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											 Memastikan bahwa otorisasi yang diperlukan telah diperoleh
 sebelum seseorang mengemudikan atau mengoperasikan
 atau diizinkan untuk mengemudi atau mengoperasikan
 forklifts, mesin, kendaraan, prime movers atau peralatan
 Pelabuhan lainnya.
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>V608</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that the requisite authorisation is obtained before
 any person operates or is permitted to operate winches, cranes
 or other lifting equipment.
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>V608</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											Memastikan bahwa otorisasi yang diperlukan telah diperoleh
 sebelum orang melakukan operasi atau diizinkan
 mengoperasikan winches, cranes atau peralatan pengangkat
 lainnya
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>V609</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that any person who performs or is permitted to
 perform stevedoring works, including lashing/unlashing
 works, etc., is properly trained and obtains the requisite
 authorisation before performing such works.
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>V609</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											 Memastikan bahwa setiap orang yang melakukan pekerjaan
 atau diizinkan melakukan pekerjaan bongkar muat,
 termasuk pekerjaan stevedoring, termasuk pekerjaan
 lashing/unlashing dan lain-lain, adalah telah mendapatkan
 pelatihan yang seharusnya dan telah mendapatkan izin
 untuk melakukan pekerjaan tersebut..
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S649</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that only persons authorised by NPCT1 perform or
 are permitted to perform work in NPCT1 premises.
 
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S649</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											Memastikan bahwa hanya orang yang telah mendapatkan
 izin dari NPCT1 yang dapat melakukan atau diizinkan
 melakukan pekerjaan di lokasi NPCT1.
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
  								
  								<!-- S:POINT 6.3 --->
  								<!-- S:ENGLISH --->
  								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
  									<div class="row">
  										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>40.1.1.7</p></div> 
  										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  											<p>&nbsp; 
  												<u>
  													Submission of Documents
  												</u>
  											</p>
  										</div>
  									</div>
  								</div>
  								<!-- E:ENGLISH --->
  								<!-- S:INDONESIA --->
  								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
  									<div class="row">
  										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>40.1.1.7</p></div> 
  										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  											<p>&nbsp; 
  												<u>
  													Penyerahan Dokumen
  												</u>
  											</p>
  										</div>
  									</div>
  								</div>
  								<!-- E:INDONESIA --->
  								<!-- E:POINT 6.3 --->
  								
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 									<p>
 										The Customer shall:
 									</p>
 								</div>
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 									<p>
 										Pelanggan harus:
 									</p>
 								</div>
 								
 								<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>L701</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that an accurate and current checklist of safety
 measures and other requisite measures is submitted in the
 form, and within the time, required by NPCT1.
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>L701</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											Memastikan bahwa Daftar Pengecekan untuk Tindakan
 Keselamatan adalah akurat dan terkini serta Tindakan
 lainnya yang diperlukan telah diserahkan dalam suatu
 format dan dalam suatu waktu sebagaimana ditetapkan oleh
 NPCT1.
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>L702</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that an accurate and current Labour Attendance
 Sheet is submitted in the form, and within the time, required
 by NPCT1.
 
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>L702</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											Memastikan bahwa Daftar Kehadiran Tenaga Kerja adalah
 akurat dan terkini serta disampaikan dalam suatu format
 dan dalam suatu waktu sebagaimana ditetapkan oleh
 NPCT1.
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>LV703</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that any safety document, report or plan as required
 by NPCT1 is promptly updated at all times.
 
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>LV703</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											Memastikan bahwa dokumen, laporan atau rencana
 keselamatan adalah sebagaimana diperlukan oleh NPCT1
 adalah diperbarui segera setiap saat.
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
  								
  								<!-- S:POINT 6.3 --->
  								<!-- S:ENGLISH --->
  								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
  									<div class="row">
  										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>40.1.1.8</p></div> 
  										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  											<p>&nbsp; 
  												<u>
  													Safety Behaviour / Conduct
  
  												</u>
  											</p>
  										</div>
  									</div>
  								</div>
  								<!-- E:ENGLISH --->
  								<!-- S:INDONESIA --->
  								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
  									<div class="row">
  										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>40.1.1.8</p></div> 
  										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  											<p>&nbsp; 
  												<u>
  													Perilaku / Tindakan Keselamatan
  												</u>
  											</p>
  										</div>
  									</div>
  								</div>
  								<!-- E:INDONESIA --->
  								<!-- E:POINT 6.3 --->
  								
 								<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>L801</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that a safe distance from equipment gantry paths is
 maintained at all times.
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>L801</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											Memastikan bahwa jarak yang aman dari jalur peralatan
 gantry terus dijaga secara terus menerus.
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>L802</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure no cycling except in authorised operational areas
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>L802</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											Memastikan tidak ada yang bersepeda, kecuali di area
 operasional yang resmi.
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>L803</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that discipline and order are properly maintained at
 the work areas at all times.
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>L803</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											Memastikan bahwa disiplin dan ketertiban selalu dijaga dan
 dilaksanakan dengan baik di area kerja.
 
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S804</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that rest is taken only at places authorised by NPCT1.
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S804</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											Memastikan bahwa kelebihan/sisa hanya diambil di temapt
 yang disetujui oleh NPCT1.
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S805</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that any person who climbs ladders, stairs, containers,
 stacks, spreaders or equipment does so in a proper and safe
 manner.
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S805</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											Memastikan bahwa setiap orang yang menaiki tangga, anak
 tangga, peti kemas, tumpukan, spreaders atau peralatan
 adalah melakukannya dengan cara yang benar dan aman.
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>V806</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that a safe distance from a container which is lifted
 or lowered is maintained. 
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>V806</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											Memastikan bahwa jarak aman dari peti kemas terus dijaga
 saat peti kemas diangkat atau diturunkan.
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S807</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that a safe position is maintained at the edge of ships,
 hatches, cargo stacks, container tops, unguarded openings,
 wharf aprons, equipment or work areas at all times.
 
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S807</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											Memastikan bahwa setiap waktu posisi aman tetap dijaga di
 tepi kapal, palka, tumpukan kargo, di atas peti kemas,
 tempat terbuka yang tidak dijaga, wharf aprons, peralatan
 atau area kerja.
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S808</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that all persons are kept clear from all areas between
 suspended load and stationary object.
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S808</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											Memastikan bahwa semua orang telah dijauhkan dari semua
 area antara suspended load dan obyek stationary.
 
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>V809</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that all persons are kept clear from any suspended
 load, path of suspended load, unstable stack or path of moving
 equipment at all times.
 
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>V809</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											Memastikan bahwa setiap saat semua orang dijauhkan dari
 suspended load, jalur suspended load, tumpukan yang tidak
 stabil atau jalur peralatan yang bergerak.
 
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>V810</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that persons who are permitted to work are not under
 the influence of alcohol or drug or any substance which may
 impair their judgment or action at work.
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>V810</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											Memastikan bahwa orang yang diizinkan bekerja tidak di
 bawah pengaruh alcohol atau narkoba atau zat apa pun yang
 dapat menganggu penilaian atau Tindakan mereka di
 tempat kerja.
 
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>V811</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that no smoking is allowed at all times, except in
 smoking areas.
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>V811</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											Memastikan baha larangan merokok berlaku setiap saat,
 selain di area merokok.
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S812</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that no port or other property is vandalised or
 otherwise tampered with, damaged, impaired or destroyed.
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S812</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											Memastikan bahwa tidak ada perlabuhan atau properti lain
 yang dirusak, diutak-atik, mengalami kerusakan, diganggu
 atau dihancurkan.
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S813</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that there is no littering or spitting at all times
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S813</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											Memastikan setiap saat tidak adanya sampah yang dibuang
 sembarangan atau meludah.
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S849</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that a safe position is maintained in and around the
 operational areas at all times
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S849</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											Memastikan bahwa posisi aman selalu dijaga didalam atau di
 sekitar area operasional.
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							
 							<!-- S:POINT 40.1 --->
  								<!-- S:ENGLISH --->
  								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
  									<div class="row">
  										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
  										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  											<p>
 												<b>
 													COMPANY SAFETY SYSTEM
 												</b>
  											</p>
  										</div>
  									</div>
  								</div>
  								<!-- E:ENGLISH --->
  								<!-- S:INDONESIA --->
  								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
  									<div class="row">
  										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
  										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  											<p>
 												<b>
 													SISTEM KEAMANAN PERUSAHAAN
 												</b>
  											</p>
  										</div>
  									</div>
  								</div>
  								<!-- E:INDONESIA --->
  								<!-- E:POINT 40.1 --->
 								
 							<!-- S:POINT 40.1 --->
  								<!-- S:ENGLISH --->
  								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
  									<div class="row">
  										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
  										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  											<p>
  											Any breach by an employees, agent or any representative of
  											 the Customer of the Safety Rules (Individual) shall result in
  											 demerit points accruing to, and enforcement charges levied on,
  											 such individual, as set out in the table below in relation to less
  											 serious offences (indicated by an “L” prefix to the safety rule
  											 number), serious offences (indicated by an “S” prefix to the
  											 safety rule number) and very serious offences (indicated by a
  											 “V” prefix to the safety rule number):
  											</p>
  										</div>
  									</div>
  								</div>
  								<!-- E:ENGLISH --->
  								<!-- S:INDONESIA --->
  								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
  									<div class="row">
  										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
  										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  											<p>
  												Setiap pelanggaran oleh karyawan, agen atau perwakilan
  												 Pelanggan terhadap Peraturan Keselamatan (Individu)
  												 akan mengakibatkan timbulnya pengurangan poin, dan
  												 pengenaan sanksi denda akan dikenakan terhadap individu
  												 tersebut, sebagaimana tercantum dalam table dibawah ini
  												 terkait pelanggaran yang kurang serius (ditandai dengan
  												 awalan “L” pada nomor aturan keselamatan), pelanggaran
  												 serius (ditandai dengan awalan “S” pada nomor aturan
  												 keselamatan) dan pelanggaran yang sangat serius (ditandai
  												 dengan awalan “V” pada nomor aturan keselamatan):
  											</p>
  										</div>
  									</div>
  								</div>
  								<!-- E:INDONESIA --->
  								<!-- E:POINT 40.1 --->
  								
  								<!-- S:POINT 40.1 --->
  								<!-- S:ENGLISH --->
  								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
  									<div class="row">
  										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
  										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  											<div class="row">
  												<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 paragraph">
  													<p>
  														<b>
  															<i>
  																Type of Safety & Traffic Offence
  															</i>
  														</b>
  													</p>
  												</div>
  												<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 paragraph">
  													<p>
  														<b>
  															<i>
  																Penalty
  															</i>
  														</b>
  													</p>
  												</div>
  											</div>
  										</div>
  									</div>
  								</div>
  								<!-- E:ENGLISH --->
  								<!-- S:INDONESIA --->
  								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
  									<div class="row">
  										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
  										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  											<div class="row">
  												<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 paragraph">
  													<p>
  														<b>
  															<i>
  																Jenis Hukuman Keselamatan & Lalu Lintas
  															</i>
  														</b>
  													</p>
  												</div>
  												<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 paragraph">
  													<p>
  														<b>
  															<i>
  																Denda
  															</i>
  														</b>
  													</p>
  												</div>
  											</div>
  										</div>
  									</div>
  								</div>
  								<!-- E:INDONESIA --->
  								<!-- E:POINT 40.1 --->
  								
  								
  								
  								<!-- S:POINT 40.1 --->
  								<!-- S:ENGLISH --->
  								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
  									<div class="row">
  										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
  										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  											<div class="row">
  												<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 paragraph">
  													<p>
  														Less Serious Offence (L)
  													</p>
  												</div>
  												<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 paragraph">
  													<p>
  														2 demerit points 
  													</p>
  												</div>
  											</div>
  										</div>
  									</div>
  								</div>
  								<!-- E:ENGLISH --->
  								<!-- S:INDONESIA --->
  								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
  									<div class="row">
  										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
  										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  											<div class="row">
  												<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 paragraph">
  													<p>
  														Pelanggaran Kurang Serius (L) 
  													</p>
  												</div>
  												<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 paragraph">
  													<p>
  														2 (dua) Poin Pengurangan
  													</p>
  												</div>
  											</div>
  										</div>
  									</div>
  								</div>
  								<!-- E:INDONESIA --->
  								<!-- E:POINT 40.1 --->
  								
  								
  								
  								<!-- S:POINT 40.1 --->
  								<!-- S:ENGLISH --->
  								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
  									<div class="row">
  										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
  										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  											<div class="row">
  												<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 paragraph">
  													<p>
  														Serious Offence (S)
  													</p>
  												</div>
  												<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 paragraph">
  													<p>
  														4 demerit points
  													</p>
  												</div>
  											</div>
  										</div>
  									</div>
  								</div>
  								<!-- E:ENGLISH --->
  								<!-- S:INDONESIA --->
  								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
  									<div class="row">
  										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
  										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  											<div class="row">
  												<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 paragraph">
  													<p>
  														Pelanggaran Serius (S)
  													</p>
  												</div>
  												<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 paragraph">
  													<p>
  														4 (empat) Poin Pengurangan
  													</p>
  												</div>
  											</div>
  										</div>
  									</div>
  								</div>
  								<!-- E:INDONESIA --->
  								<!-- E:POINT 40.1 --->
  								
  								
  								<!-- S:POINT 40.1 --->
  								<!-- S:ENGLISH --->
  								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
  									<div class="row">
  										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
  										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  											<div class="row">
  												<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 paragraph">
  													<p>
  														Very Serious Offence (V)
  													</p>
  												</div>
  												<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 paragraph">
  													<p>
  														8 demerit points
  													</p>
  												</div>
  											</div>
  										</div>
  									</div>
  								</div>
  								<!-- E:ENGLISH --->
  								<!-- S:INDONESIA --->
  								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
  									<div class="row">
  										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
  										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  											<div class="row">
  												<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 paragraph">
  													<p>
  														Pelanggaran Sangat Serius (V)  
  													</p>
  												</div>
  												<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 paragraph">
  													<p>
  														8 (delapan) Poin Pengurangan
  													</p>
  												</div>
  											</div>
  										</div>
  									</div>
  								</div>
  								<!-- E:INDONESIA --->
  								<!-- E:POINT 40.1 --->
  								
  								
  								<!-- S:POINT 40.1 --->
  								<!-- S:ENGLISH --->
  								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
  									<div class="row">
  										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
  										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  											<div class="row">
  												<div class="col-lg-12 col-md-12 col-sm-12 col-xm-12 paragraph">
  													<p>
  														<i><b>On accumulation of 24 demerit points or more for offences committed within a 24-month period:-</b></i>
  													</p>
  												</div>
  												
  											</div>
  										</div>
  									</div>
  								</div>
  								<!-- E:ENGLISH --->
  								<!-- S:INDONESIA --->
  								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
  									<div class="row">
  										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
  										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  											<div class="row">
  												<div class="col-lg-12 col-md-12 col-sm-12 col-xm-12 paragraph">
  													<p>
  														<i><b>Pada waktu akumulasi mencapai 24 (dua puluh empat) Poin Pengurangan atau lebih atas Pelanggaran yang dilakukan selama periode 24 bulan:-</b></i>
  													</p>
  												</div>
  												
  											</div>
  										</div>
  									</div>
  								</div>
  								<!-- E:INDONESIA --->
  								<!-- E:POINT 40.1 --->
  								
  								
  								
  								
  								<!-- S:POINT 40.1 --->
  								<!-- S:ENGLISH --->
  								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
  									<div class="row">
  										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
  										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  											<div class="row">
  												<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 paragraph">
  													<p>
  														1st infringement period
  													</p>
  												</div>
  												<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 paragraph">
  													<p>
  														The Infringing Company must
 submit to NPCT1 a letter of
 undertaking and safety
 improvement action plan to the
 satisfaction of NPCT1.
  													</p>
  												</div>
  											</div>
  										</div>
  									</div>
  								</div>
  								<!-- E:ENGLISH --->
  								<!-- S:INDONESIA --->
  								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
  									<div class="row">
  										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
  										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  											<div class="row">
  												<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 paragraph">
  													<p>
  														Periode Pelanggaran Ke-1
  													</p>
  												</div>
  												<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 paragraph">
  													<p>
  														Kepada NPCT1, Perusahaan
 Pelanggar harus menyerahkan
 surat yang menjelaskan rencana
 Langkah/Tindakan dan
 peningkatan keselamatan untuk
 kepuasan NPCT1.
 
  													</p>
  												</div>
  											</div>
  										</div>
  									</div>
  								</div>
  								<!-- E:INDONESIA --->
  								<!-- E:POINT 40.1 --->
 								
 								<!-- S:POINT 40.1 --->
  								<!-- S:ENGLISH --->
  								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
  									<div class="row">
  										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
  										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  											<div class="row">
  												<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 paragraph">
  													<p>
  														
  													</p>
  												</div>
  												<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 paragraph">
  													<p>
  														NPCT1 reserves the right to
 suspend or terminate all licences
 and/or contracts held by the
 Infringing Company.
  													</p>
  												</div>
  											</div>
  										</div>
  									</div>
  								</div>
  								<!-- E:ENGLISH --->
  								<!-- S:INDONESIA --->
  								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
  									<div class="row">
  										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
  										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  											<div class="row">
  												<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 paragraph">
  													<p>
  														
  													</p>
  												</div>
  												<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 paragraph">
  													<p>
  														NPCT1 berhak untuk
 menangguhkan atau
 menghentikan semua izin
 dan/atau kontrak yang masih
 berlaku dengan Perusahaan
 Pelanggar
 
  													</p>
  												</div>
  											</div>
  										</div>
  									</div>
  								</div>
  								<!-- E:INDONESIA --->
  								<!-- E:POINT 40.1 --->
  								
  								
  								<!-- S:POINT 40.1 --->
  								<!-- S:ENGLISH --->
  								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
  									<div class="row">
  										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
  										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  											<div class="row">
  												<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 paragraph">
  													<p>
  														2nd infringement period
  													</p>
  												</div>
  												<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 paragraph">
  													<p>
  														NPCT1 reserves the right to
 suspend or terminate all licences
 and/or contracts held by the
 Infringing Company with
 immediate effect.
  													</p>
  												</div>
  											</div>
  										</div>
  									</div>
  								</div>
  								<!-- E:ENGLISH --->
  								<!-- S:INDONESIA --->
  								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
  									<div class="row">
  										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
  										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  											<div class="row">
  												<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 paragraph">
  													<p>
  														Periode Pelanggaran Ke-2 
  													</p>
  												</div>
  												<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 paragraph">
  													<p>
  														NPCT1 berhak untuk dengan
 segera menangguhkan atau
 menghentikan semua izin
 dan/atau kontrak yang saat ini
 masih berlaku dengan
 Perusahaan Pelanggar.
  													</p>
  												</div>
  											</div>
  										</div>
  									</div>
  								</div>
  								<!-- E:INDONESIA --->
  								<!-- E:POINT 40.1 --->
  								
  								
  								
  								<!-- S:POINT 40.1 --->
  								<!-- S:ENGLISH --->
  								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
  									<div class="row">
  										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
  										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  											<div class="row">
  												<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 paragraph">
  													<p>
  														Serious infringement resulting in
 death or serious injuries or
 serious damage to equipment or
 property
  													</p>
  												</div>
  												<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 paragraph">
  													<p>
  														NPCT1 reserves the right to
 suspend or terminate all licences
 and/or service contracts held by
 the Infringing Company with
 immediate effect.
  													</p>
  												</div>
  											</div>
  										</div>
  									</div>
  								</div>
  								<!-- E:ENGLISH --->
  								<!-- S:INDONESIA --->
  								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
  									<div class="row">
  										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
  										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  											<div class="row">
  												<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 paragraph">
  													<p>
  														Pelanggaran Serius yang
 mengakibatkan kematian
 atau cedera serius atau
 kerusakan serius pada
 peralatan atau properti
  													</p>
  												</div>
  												<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 paragraph">
  													<p>
  														NPCT1 berhak untuk dengan
 segera menangguhkan atau
 menghentikan semua izin
 dan/atau kontrak yang saat ini
 masih berlaku dengan
 Perusahaan Pelanggar.
 
  													</p>
  												</div>
  											</div>
  										</div>
  									</div>
  								</div>
  								<!-- E:INDONESIA --->
  								<!-- E:POINT 40.1 --->
  								
 							
 							
 							
 							
 							
  								<!-- S:POINT 6.3 --->
  								<!-- S:ENGLISH --->
  								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
  									<div class="row">
  										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>40.2</p></div> 
  										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  											<p>
  												<b>
  													SAFETY RULES (COMPANY)
  												</b>
  											</p>
  										</div>
  									</div>
  								</div>
  								<!-- E:ENGLISH --->
  								<!-- S:INDONESIA --->
  								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
  									<div class="row">
  										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>40.2</p></div> 
  										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  											<p>
  												<b>
  													PERATURAN KESELAMATAN (PERUSAHAAN)
  												</b>
  											</p>
  										</div>
  									</div>
  								</div>
  								<!-- E:INDONESIA --->
  								<!-- E:POINT 6.3 --->
  								
  								
  								
  								<!-- S:POINT 6.3 --->
  								<!-- S:ENGLISH --->
  								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
  									<div class="row">
  										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>40.2.1</p></div> 
  										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  											<p>
  												<u>
  													Proper Protective Apparel
  												</u>
  											</p>
  										</div>
  									</div>
  								</div>
  								<!-- E:ENGLISH --->
  								<!-- S:INDONESIA --->
  								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
  									<div class="row">
  										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>40.2.1</p></div> 
  										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  											<p>
  												<u>
  													Perlengkapan Pelindung yang Tepat
  												</u>
  											</p>
  										</div>
  									</div>
  								</div>
  								<!-- E:INDONESIA --->
  								<!-- E:POINT 6.3 --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 									<p>
 										The Customer shall:
 									</p>
 								</div>
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 									<p>
 										Pelanggan harus:
 									</p>
 								</div>
  								
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>L151</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that sufficient quantities of safety helmets are
 provided to workers.
 
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>L151</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											Memastikan bahwa helm pengaman tersedia dalam jumlah
 yang memadai untuk para pekerjanya.
 
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>L152</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that sufficient quantities of other protective
 apparel, including high visibility clothing, etc., acceptable to
 NPCT1 are provided for workers.
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>L152</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											Memastikan bahwa perlengkapan pelindung diri lainnya,
 termasuk pakaian dengan visibilitas tinggi dan lain
 sebagainya, adalah dapat diterima oleh NPCT1 untuk
 digunakan oleh pekerjanya.
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S153</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that safety belts/harnesses are provided to workers
 working from a height or riding on quay crane spreaders.
 
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S153</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											Memastikan sabuk pengaman / harnesses disediakan bagi
 pekerja yang melakukan pekerjaan di ketinggian atau yang
 menggunakan quay crane spreaders.
 
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S154</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that life jackets acceptable to NPCT1 are provided for
 workers working at all ship edge/wharf edge.
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S154</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											Memastikan jaket penyelamata dapat diterima oleh NPCT1
 untuk digunakan oleh pekerja yang melakukan pekerjaan di
 setiap tepi kapal / tepi dermaga.
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>L199</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that all other requisite personal protective apparel
 acceptable to NPCT1 are adequately provided for workers.
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>L199</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											Memastikan bahwa semua perlengkapan pelindung diri yang
 diperlukan adalah dapat diterima oleh NPCT1 dan
 disediakan dalam jumlah yang memadai untuk para
 pekerjanya.
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 								
 								
  								<!-- S:POINT 6.3 --->
  								<!-- S:ENGLISH --->
  								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
  									<div class="row">
  										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>40.2.2</p></div> 
  										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  											<p>
  												<u>
  													Safe Lifting Equipment / Slinging Operations
  												</u>
  											</p>
  										</div>
  									</div>
  								</div>
  								<!-- E:ENGLISH --->
  								<!-- S:INDONESIA --->
  								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
  									<div class="row">
  										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>40.2.2</p></div> 
  										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  											<p>
  												<u>
  													Peralatan Angkat / Slinging Operation yang Aman
  												</u>
  											</p>
  										</div>
  									</div>
  								</div>
  								<!-- E:INDONESIA --->
  								<!-- E:POINT 6.3 --->
 								
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<p>
  									The Customer shall:
  								</p>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<p>
  									Pelanggan harus:
  								</p>
  							</div>
  								
 								
 								<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>L251</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that guide ropes of adequate length and strength are
 used for handling heavy and lengthy loads.
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>L251</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											Memastikan tali pemandu yang digunakan memiliki panjang
 dan kekuatan yang memadai untuk menangani beban berat
 dan panjang.
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S252</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that only lifting machines/appliances/gear marked
 with “SWL” and with valid test certificates are used.
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S252</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											Memastikan hanya mesin/peralatan/gear pengangkat yang
 telah diberi tanda “SWL” dan yang memiliki sertifikat uji
 yang valid adalah yang digunakan.
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S253</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that appropriate lifting machines/appliances/gear,
 including self-locking spreaders, etc., are used for container
 handling operations.
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S253</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											Memastikan mesin/peralatan/gear pengangkat telah sesuai,
 termasuk self-locking spreaders dan lain-lain adalah
 digunakan untuk operasional penanganan peti kemas
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S254</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that proper and defect-free lifting
 machines/appliances/gear, including pallets, etc., are used.
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S254</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											Memastikan mesin/peralatan/perlengkapan/gear pengangkat
 yang digunakan adalah tepat dan tidak memiliki cacat,
 termasuk palet, dan lain-lain.
 
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S299</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure there is compliance with all safety requirements of
 the law and as stipulated by NPCT1 regarding the use of lifting
 machines/appliances/gears.
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S299</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											Memastikan telah dipenuhinya seluruh persyaratan
 keselamatan sebagaimana ditetapkan oleh ketentuan
 peraturan yang berlaku dan NPCT1 mengenai penggunaan
 mesin/peralatan/gear pengangkat.
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 								
 								
  								<!-- S:POINT 6.3 --->
  								<!-- S:ENGLISH --->
  								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
  									<div class="row">
  										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>40.2.3</p></div> 
  										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  											<p>
  												<u>
  													Safe Equipment Operations (Including Prime Movers, Forklifts, Mobile Cranes, etc.)
  												</u>
  											</p>
  										</div>
  									</div>
  								</div>
  								<!-- E:ENGLISH --->
  								<!-- S:INDONESIA --->
  								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
  									<div class="row">
  										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>40.2.3</p></div> 
  										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  											<p>
  												<u>
  													Pengoperasian Peralatan dengan Aman (Termasuk Prime Movers, Forklifts, Mobile Cranes, etc.)
  												</u>
  											</p>
  										</div>
  									</div>
  								</div>
  								<!-- E:INDONESIA --->
  								<!-- E:POINT 6.3 --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<p>
  									The Customer shall:
  								</p>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<p>
  									Pelanggan harus:
  								</p>
  							</div>
  								
 								<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S351</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that only equipment installed with proper and standard
 safety features, e.g. brakes, horns, meter gauges, blinker lights,
 reversed buzzer, good tyres, etc., are used.
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S351</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											Memastikan bahwa yang digunakan hanyalah peralatan yang
 telah dipasang dengan fitur keselamatan yang tepat dan
 standar, seperti rem, klakson, pengukur meter/jarak, lampu
 pemberi tanda bahaya, reserved buzzer, ban dengan kondisi
 baik, dan lain-lain.
 
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S352</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that any equipment which is not in use is properly
 parked and secured to prevent any unauthorised use.
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S352</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											Memastikan setiap peralatan yang tidak digunakan telah
 diparkir dan diamankan secara benar untuk mencegah
 penggunaan yang tidak diizinkan.
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S358</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that only lifting machines/appliances/gears with valid
 statutory certificates are used.
 
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S358</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											Memastikan bahwa yang digunakan hanya
 mesin/peralatan/gears dengan sertifikat yang masih berlaku
 yang sesuai ketentuan peraturan
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 							
 							<!----- S: LT01 --------->
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S399</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											To ensure that only proper and defect-free equipment are used
  										</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
  								<div class="row">
  									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S399</p></div>
  									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  										<p>
  											 Memastikan bahwa yang digunakan hanyalah peralatan yang
 tepat dan tidak memiliki cacat.
 
  										</p>
  									</div>
  								</div>
  							</div>
  							<!----- E: LT01 --------->
 								
 								
  								<!-- S:POINT 6.3 --->
  								<!-- S:ENGLISH --->
  								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
  									<div class="row">
  										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>40.2.4</p></div> 
  										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  											<p>
  												<u>
  													 Safe Work Method / Procedures
  												</u>
  											</p>
  										</div>
  									</div>
  								</div>
  								<!-- E:ENGLISH --->
  								<!-- S:INDONESIA --->
  								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
  									<div class="row">
  										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>40.2.4</p></div> 
  										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
  											<p>
 												<u>
 													Metode / Prosedur Bekerja yang Aman
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<p>
 									The Customer shall:
 								</p>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<p>
 									Pelanggan harus:
 								</p>
 							</div>
								
								<!----- S: LT01 --------->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S451</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											To ensure that workers are not deployed for more than 12
continuous hours.
 										</p>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S451</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											 Memastikan bahwa pekerja tidak melakukan pekerjaannya
lebih dari 12 (dua belas) jam secara terus menerus.
 										</p>
 									</div>
 								</div>
 							</div>
 							<!----- E: LT01 --------->
							
							<!----- S: LT01 --------->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S452</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											To ensure that proper save-all nets are used for rigging at
shipside.

 										</p>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S452</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											Memastikan penyimpanan keseluruhan tali secara benar
telah digunakan untuk tali-temali di sisi kapal.
 										</p>
 									</div>
 								</div>
 							</div>
 							<!----- E: LT01 --------->
							
							<!----- S: LT01 --------->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S453</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 										To ensure that only proper and defect-free tools/gears/appliances
are used.	
 										</p>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S453</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											Memastikan bahwa peralatan / gears / perlengkapan yang
tepat dan bebas dari cacat adalah yang digunakan. 
 										</p>
 									</div>
 								</div>
 							</div>
 							<!----- E: LT01 --------->
							
							<!----- S: LT01 --------->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S454</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											To ensure only proper and safe means of access to and from
worksites at a height, e.g. cargo stacks, container tops, etc., are
used.
 										</p>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S454</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											Memastikan yang digunakan hanya sarana akses yang tepat
dan aman, ke dan dari tempat kerja di ketinggian, seperti
tumpukan kargo, atas peti kemas, dan lain-lain. 
 										</p>
 									</div>
 								</div>
 							</div>
 							<!----- E: LT01 --------->
							
							<!----- S: LT01 --------->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S455</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											 To ensure that any tool, gear, appliance, machine, equipment
and means of access (e.g. ladder, platform, man-cages,
gondola, scaffold, etc.) which is defective and/or without valid
test certificates is immediately removed from NPCT1 premises.

 										</p>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S455</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											Memastikan setiap alat, perkakas, peralatan, mesin,
perlengkapan dan sarana akses (misalnya tangga, platform,
man-cage, gondola, scaffold, dan lain-lain) yang rusak
dan/atau tanpa memiliki sertifikat yang resmi dan masih
berlaku adalah segera dipindahkan keluar dari lokasi NPCT1.

 										</p>
 									</div>
 								</div>
 							</div>
 							<!----- E: LT01 --------->
							
							<!----- S: LT01 --------->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S456</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											To ensure that only proper lashing/unlashing tools,
receptacles and aids in lashing/unlashing operations are
used.
 										</p>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S456</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											Memastikan bahwa hanya peralatan lashing/unlashing,
tempat penyimapan dan alat bantu yang tepat yang
dipergunakan dalam operasional lashing/unlashing .

 										</p>
 									</div>
 								</div>
 							</div>
 							<!----- E: LT01 --------->
							
							<!----- S: LT01 --------->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>V457</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											To ensure that there is at all times a sufficient number of
properly trained workers as required by NPCT1 to perform
cargo handling/lifting operations or other services.
 										</p>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>V457</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											Memastikan bahwa selalu tersedia jumlah pekerja yang
terlatih dengan baik sebagaimana yang disyaratkan oleh
NPCT1 dalam melakukan operasional penanganan
kargo/pengangkatan atau Layanan lainnya.

 										</p>
 									</div>
 								</div>
 							</div>
 							<!----- E: LT01 --------->
							
							<!----- S: LT01 --------->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S498</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											To ensure that all workers strictly comply with all necessary
precautionary measures at all times when working in NPCT1
premises.
 										</p>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S498</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											Memastikan bahwa semua pekerja secara disiplin mematuhi
setiap tindakan pencegahan yang diperlukan setiap saat
selama pekerja melakukan pekerjaan di lokasi NPCT1.
 										</p>
 									</div>
 								</div>
 							</div>
 							<!----- E: LT01 --------->
							
							<!----- S: LT01 --------->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>LSV499</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											9 To ensure that all workers strictly comply with all safety
requirements of the law and as stipulated by PCT1 at all times
when working in NPCT1 premises.
 										</p>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>LSV499</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											 Memastikan secara ketat bahwa semua pekerja mematuhi
seluruh persyaratan keselamatan hukum dan sebagaimana
ditetapkan oleh NPCT1 setiap waktu selama melakukan
pekerjaannya di lokasi NPCT1.
 										</p>
 									</div>
 								</div>
 							</div>
 							<!----- E: LT01 --------->
							
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>40.2.5</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Safe Stacking / Unstacking Operations
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>40.2.5</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Operasional Penumpukan / Pembongkaran yang Aman
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<p>
 									The Customer shall:
 								</p>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<p>
 									Pelanggan harus:
 								</p>
 							</div>
 								
								<!----- S: LT01 --------->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>L551</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											To ensure the stacking of goods/materials is within the height
limits.
 										</p>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>L551</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											Memastikan penumpukan barang/material adalah berada
dalam batas ketinggian.
 										</p>
 									</div>
 								</div>
 							</div>
 							<!----- E: LT01 --------->
							
							<!----- S: LT01 --------->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>L552</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											To ensure that adequate space clearance is provided
between stacks and between stacks and walls.
 										</p>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>L552</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											 Memastikan jarak yang memadai diberikan diantara
tumpukan-tumpukan dan diantara tumpukan dengan
dinding.
 										</p>
 									</div>
 								</div>
 							</div>
 							<!----- E: LT01 --------->
							
							<!----- S: LT01 --------->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S553</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											To ensure that adequate space clearance is provided
between incompatible goods/materials.
 										</p>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S553</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											Memastikan jarak yang memadai diberikan diantara
barang/material yang tidak kompatibel.
 										</p>
 									</div>
 								</div>
 							</div>
 							<!----- E: LT01 --------->
							
							<!----- S: LT01 --------->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S599</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											To ensure that goods/materials are properly and safely
stacked in compliance with all safety requirements of the law
and as stipulated by NPCT1.
 										</p>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S599</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											Memastikan barang/material adalah ditumpuk dengan benar
dan aman sesuai dengan seluruh persyaratan keamanan
yang disyaratkan oleh peraturan perundang-undangan yang
berlaku dan sebagaimana yang ditetapkan oleh NPCT1.
 										</p>
 									</div>
 								</div>
 							</div>
 							<!----- E: LT01 --------->
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>40.2.6</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Authorized / Trained Workers
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>40.2.6</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Pekerja Resmi / Terlatih
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<p>
 									The Customer shall:
 								</p>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<p>
 									Pelanggan harus:
 								</p>
 							</div>
								<!----- S: LT01 --------->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S651</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											To ensure that only duly authorized/trained workers who are
within the authorized age limits are employed to perform
stevedoring work.
 										</p>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S651</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											Memastikan hanya pekerja yang telah memiliki izin/pekerja
yang terlatih yang berada dalam batas usia yang diizinkan
untuk dipekerjakan melakukan pekerjaan bongkar muat.
 										</p>
 									</div>
 								</div>
 							</div>
 							<!----- E: LT01 --------->
							<!----- S: LT01 --------->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S652</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											To ensure that only duly authorized/trained persons are
employed to perform Wharfinger duties and/or
berthing/unberthing operations.
 										</p>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S652</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											Memastikan bahwa hanya orang yang diberikan izin/terlatih
yang dipekerjakan untuk melakukan tugas Wharfinger
dan/atau operasional berthing/unberthing.

 										</p>
 									</div>
 								</div>
 							</div>
 							<!----- E: LT01 --------->
							<!----- S: LT01 --------->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S653</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											To ensure that only duly authorized/trained persons are
employed as Safety Supervisors, Foremen or Ship Checkers.
 										</p>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S653</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											Memastikan bahwa hanya orang-orang yang diberikan
izin/terlatih yang dipekerjakan sebagai Pengawas
Keselamatan, Mandora tau Pemeriksa Kapal.
 										</p>
 									</div>
 								</div>
 							</div>
 							<!----- E: LT01 --------->
							<!----- S: LT01 --------->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>V654</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											 To ensure that only duly authorized/trained persons are
employed to perform stevedoring works and/or
lashing/unlashing.
 										</p>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>V654</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											Memastikan bahwa hanya orang yang diberikan izin/terlatih
yang dipekerjakan untuk melakukan pekerjaan bongkar
muat dan/atau lashing/unlashing.

 										</p>
 									</div>
 								</div>
 							</div>
 							<!----- E: LT01 --------->
							<!----- S: LT01 --------->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>V655</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											To ensure that only duly authorized/trained persons are
employed as Ship Traffic Assistants and/or Wharf Operations
Supervisors.
 										</p>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>V655</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 										Memastikan bahwa hanya orang yang diberikan izin/terlatih
yang dipekerjakan sebagai Asisten Lalu Lintas Kapal
dan/atay Pengawas Operasional Dermaga.	
 										</p>
 									</div>
 								</div>
 							</div>
 							<!----- E: LT01 --------->
							<!----- S: LT01 --------->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S656</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											 To ensure that only duly authorized/trained persons are
employed to perform engineering and/or hot works.
 										</p>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S656</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											 Memastikan bahwa hanya orang yang diberikan izin/terlatih
yang dipekerjakan untuk melakukan pekerjaan Teknik
dan/atau hot works.
 										</p>
 									</div>
 								</div>
 							</div>
 							<!----- E: LT01 --------->
							<!----- S: LT01 --------->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>V657</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											To ensure that only duly authorized/trained persons are
employed to drive/operate forklifts, vehicles, machines, prime
movers or other port equipment.
 										</p>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>V657</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											Memastikan bahwa hanya orang yang diberikan izin/terlatih
yang dipekerjakan untuk mengemudikan / mengoperasikan
forklifts, kendaraan, mesin, prime movers atau peralatan
Pelabuhan lainnya.
 										</p>
 									</div>
 								</div>
 							</div>
 							<!----- E: LT01 --------->
							<!----- S: LT01 --------->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>V658</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 										To ensure that only duly authorized/trained persons are
employed to operate winches, cranes and/or other lifting
equipment.
	
 										</p>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>V658</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 										Memastikan bahwa hanya orang yang diberikan izin/terlatih
yang dipekerjakan untuk pengoperasikan derek / cranes dan
/ atau peralatan angkat lainnya.	
 										</p>
 									</div>
 								</div>
 							</div>
 							<!----- E: LT01 --------->
							<!----- S: LT01 --------->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S699</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											To ensure that only persons who are duly authorized by NPCT1
are employed to perform work in NPCT1 premises.

 										</p>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S699</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											Memastikan bahwa hanya orang yang diberikan izin oleh
NPCT1 yang dipekerjakan untuk melakukan pekerjaan di
lokasi NPCT1.

 										</p>
 									</div>
 								</div>
 							</div>
 							<!----- E: LT01 --------->
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>40.2.7</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Submission of Documents
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>40.2.7</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Penyerahan Dokumen
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<p>
 									The Customer shall:
 								</p>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<p>
 									Pelanggan harus:
 								</p>
 							</div>
								<!----- S: LT01 --------->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>L751</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											To ensure that an accurate and current checklist of safety
measures or other measures, that is to NPCT1’s satisfaction, is
submitted in the form, and within the time, stipulated by
NPCT1
 										</p>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>L751</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											Memastikan daftar pengecekan tindakan keselamatan atau
tindakan lain adalah akurat dan terbaru, sesuai dengan
kepuasan NPCT1, disampaikan dalam suatu format, dan
dalam waktu yang ditentukan oleh NPCT1.
 										</p>
 									</div>
 								</div>
 							</div>
 							<!----- E: LT01 --------->
							<!----- S: LT01 --------->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>L752</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											To ensure that an accurate and current Labour Attendance
Sheet, that is to NPCT1’s satisfaction, is submitted within the
time stipulated by NPCT1.

 										</p>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>L752</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											Memastikan Lembar Kehadiran Pekerja adalah akurat dan
terbaru, untuk kepuasan NPCT1, dan disampaikan dalam
waktu yang ditentukan oleh NPCT1.
 										</p>
 									</div>
 								</div>
 							</div>
 							<!----- E: LT01 --------->
							<!----- S: LT01 --------->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S753</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											To ensure that accurate and current information, e.g. weight
of equipment, load, container, etc., is provided promptly to
NPCT1 and whenever required by NPCT1.
 										</p>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>S753</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											Memastikan informasi yang akurat dan terbaru, misalnya:
berat peralatan, muatan, peti kemas, dan lain-lain,
disediakan segera kepada NPCT1 dan kapanpun diperlukan
oleh NPCT1.
 										</p>
 									</div>
 								</div>
 							</div>
 							<!----- E: LT01 --------->
							<!----- S: LT01 --------->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>LSV799</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											To ensure that any safety document, report or plan as required
by NPCT1, and that is to NPCT1’s satisfaction, is submitted
within the time stipulated by NPCT1.
 										</p>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>LSV799</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											Memastikan setiap dokumen, laporan atau rencana
keselamatan adalah sebagaimana disyaratkan oleh NPCT1,
dan untuk kepuasan NPCT1, disampaikan sesuai waktu yang
ditentukan oleh NPCT1.
 										</p>
 									</div>
 								</div>
 							</div>
 							<!----- E: LT01 --------->
							<!----- S: LT01 --------->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xm-12 paragraph">
 								<p>
								In addition to NPCT1 Safety Rules “Individual” and “The Company”
above, the Customer also shall guarantees that every person
(“Individual) and/or party (“Company”) representing the Customer or
invited to NPCT1’s premises by the Customer, will comply with NPCT1’s
Operational Safety Rules on Traffic and Security as follows:
								</p>
								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xm-12 paragraph">
 								<p>
								Selain Aturan Keselamatan NPCT1 untuk “Individu” dan
“Perusahaan” di atas, Pelanggan juga harus menjamin bahwa setiap
orang (“Individu”) dan/atau pihak (“Perusahaan”) yang mewakili
Pelanggan, akan mematuhi Aturan Keselamatan Operasional
NPCT1 tentang Lalu Lintas dan Keselamatan sebagai berikut:

								</p>
								</div>
 							</div>
 							<!----- E: LT01 --------->
 							<!-------------------------- E:POINT 40 -------------------------->
 							
 							<!-------------------------- S:POINT 41 -------------------------->
 							<!-- S:MODUL POINT --->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>41.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											NPCT1 TRAFFIC RULES
 										</b>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>41.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											PERATURAN NPCT1 TENTANG LALU LINTAS
 										</b>
 									</div>
 								</div>
 							</div>
 							
 							
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<p>
 									The Customer shall:
 								</p>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<p>
 									Pelanggan harus:
 								</p>
 							</div>
 							
 							<!-- E:MODUL POINT --->
 							
 							
 							<!----- S: LT01 --------->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>LT01</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											To ensure compliance with all traffic signs and markings, traffic lights and height restrictions at all times
 										</p>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>LT01</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											Setiap saat memastikan kepatuhan terhadap semua rambu dan marka jalan, lampu lalu lintas dan aturan batas ketinggian maksimum.
 										</p>
 									</div>
 								</div>
 							</div>
 							<!----- E: LT01 --------->
 							
 							
 							<!----- S: LT02 --------->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>LT02</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											To ensure compliance with all traffic directions given by any
 authorized officer in and around NPCT1 premises at all times.
 										</p>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>LT02</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											Setiap saat memastikan kepatuhan terhadap semua arahan
 lalu lintas yang diberikan oleh petugas yang berwenang di
 dan sekitar lokasi NPCT1.
 										</p>
 									</div>
 								</div>
 							</div>
 							<!----- E: LT02 --------->
 							
 							<!----- S: LT03 --------->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>LT03</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 										To ensure that loads are properly secured when being conveyed by vehicles.
 										</p>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>LT03</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											Memastikan muatan telah dalam kondisi aman dan benar saat diangkut oleh kendaraan.
 										</p>
 									</div>
 								</div>
 							</div>
 							<!----- E: LT03 --------->
 							
 							<!----- S: LT04 --------->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>LT04</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											To ensure that passengers are carried on motor and/or goods vehicles only when authorized to do so and in a safe manner.
 										</p>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>LT04</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											Memastikan bahwa penumpang diangkut dengan kendaraan bermotor dan/atau kendaraan barang, hanya jika diizinkan dan dilakukan dengan cara yang aman.
 										</p>
 									</div>
 								</div>
 							</div>
 							<!----- E: LT04 --------->
 							
 							<!----- S: ST05 --------->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>ST05</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											To ensure that passengers are carried on prime movers only when authorized and in a safe manner.
 										</p>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>ST05</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											Memastikan bahwa penumpang diangkut dengan prime movers, hanya jika diizinkan dan dilakukan dengan cara yang aman.
 										</p>
 									</div>
 								</div>
 							</div>
 							<!----- E: ST05 --------->
 							
 							<!----- S: LSVT06 --------->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>LSVT06</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											 To ensure compliance with the speed limit of 40 kmph at all times.
 										</p>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>LSVT06</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											Selalu memastikan kepatuhan terhadap batas kecepatan 40 kmph.
 										</p>
 									</div>
 								</div>
 							</div>
 							<!----- E: LSVT06 --------->
 							
 							<!----- S: LSVT07 --------->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>LSVT07</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											To ensure compliance with the speed limit of 15 kmph or 25 kmph (where applicable) in the operational areas at all times
 										</p>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>LSVT07</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											 Setiap saat memastikan kepatuhan terhadap batas kecepatan 15 kmph atau 25 kmph (jika berlaku) di area operasional.
 										</p>
 									</div>
 								</div>
 							</div>
 							<!----- E: LSVT07 --------->
 							
 							<!----- S: LT08 --------->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>LT08</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											To ensure that unbroken white lines are not crossed
 										</p>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>LT08</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											Memastikan garis putih tidak terputus tidak dilintasi.
 										</p>
 									</div>
 								</div>
 							</div>
 							<!----- E: LT08 --------->
 							
 							<!----- S: LT09 --------->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>LT09</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 										To ensure that there is no obstruction to the flow of traffic at all
 times.
 										</p>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>LT09</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											Setiap saat memastikan tidak ada rintangan terhadap arus
 lalu lintas.
 										</p>
 									</div>
 								</div>
 							</div>
 							<!----- E: LT09 --------->
 							
 							<!----- S: ST10 --------->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>ST10</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											 To ensure that no accident is caused by any obstruction to the
 flow of traffic.
 										</p>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>ST10</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											Memastikan tidak ada kecelakaan yang terjadi akibat
 rintangan pada arus lalu lintas.
 
 										</p>
 									</div>
 								</div>
 							</div>
 							<!----- E: ST10 --------->
 							
 							<!----- S: LT11 --------->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>LT11</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											To ensure that there is no obstruction at box junctions at all
 times.
 										</p>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>LT11</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											Setiap saat memastikan tidak ada rintangan di box junctions
 										</p>
 									</div>
 								</div>
 							</div>
 							<!----- E: LT11 --------->
 							
 							<!----- S: ST12 --------->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>ST12</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											To ensure that there is no obstruction on gantry paths at all times.
 										</p>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>ST12</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											 Setiap saat memastikan tidak ada rintangan di jalur gantry.
 										</p>
 									</div>
 								</div>
 							</div>
 							<!----- E: ST12 --------->
 							
 							<!----- S: VT13 --------->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>VT13</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											To ensure that no accident is caused by any obstruction on gantry paths. 
 										</p>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>VT13</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											Memastikan tidak ada kecelakaan yang terjadi akibat adanya rintangan pada jalur gantry.
 										</p>
 									</div>
 								</div>
 							</div>
 							<!----- E: VT13 --------->
 							
 							<!----- S: ST14 --------->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>ST14</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											To ensure that there is no overtaking at emerging lanes
 										</p>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>ST14</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											 Memastikan tidak ada yang menyalip pada jalur emerging.
 										</p>
 									</div>
 								</div>
 							</div>
 							<!----- E: ST14 --------->
 							
 							<!----- S: LT15 --------->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>LT15</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											To ensure that vehicle lights are switched on when driving at night or when visibility is low.
 										</p>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>LT15</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											Memastikan lampu kendaraan dinyalakan saat berkendara di malam hari atau saat jarak pandang rendah.
 										</p>
 									</div>
 								</div>
 							</div>
 							<!----- E: LT15 --------->
 							
 							<!----- S: LT16 --------->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>LT16</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											To ensure that there is no driving at the wharf and in the operational areas unless permission is granted.
 										</p>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>LT16</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											Memastikan tidak ada yang mengemudi di dermaga dan dia area operasional, kecuali yang diberikan izin.
 										</p>
 									</div>
 								</div>
 							</div>
 							<!----- E: LT16 --------->
 							
 							<!----- S: LT17 --------->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>LT17</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											To ensure that ambulances, fire brigades and/or police vehicles
 are given way to. 
 										</p>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>LT17</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											Memastikan ambulans, pemadam kebakaran dan/atau
 kendaraan polisi diberikan prioritas untuk jalan terlebih
 dahulu.
 										</p>
 									</div>
 								</div>
 							</div>
 							<!----- E: LT17 --------->
 							
 							<!----- S: LT18 --------->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>LT18</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											To ensure that persons on pedestrian crossings are given way to.
 										</p>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>LT18</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											Memastikan orang yang menyeberang jalan di jalur penyeberangan diberikan prioritas untuk menyeberang.
 										</p>
 									</div>
 								</div>
 							</div>
 							<!----- E: LT18 --------->
 							
 							<!----- S: LT19 --------->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>LT19</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											To ensure that only vehicles with tyres in good condition are used.
 										</p>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>LT19</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											Memastikan hanya kendaraan dengan ban yang dalam kondisi baik yang digunakan.
 										</p>
 									</div>
 								</div>
 							</div>
 							<!----- E: LT19 --------->
 							
 							<!----- S: LT20 --------->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>LT20</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											To ensure that vehicles are parked only at authorised or designated parking areas. 
 										</p>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>LT20</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											Memastikan kendaraan hanya diparkir pada tempat parker resmi yang ditentukan.
 										</p>
 									</div>
 								</div>
 							</div>
 							<!----- E: LT20 --------->
 							
 							<!----- S: ST21 --------->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>ST21</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											To ensure that there is no driving against the flow of traffic
 										</p>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>ST21</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											 Memastikan tidak ada kendaraan yang dikemudikan melawan arah lalu lintas
 										</p>
 									</div>
 								</div>
 							</div>
 							<!----- E: ST21 --------->
 							
 							<!----- S: ST22 --------->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>ST22</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											To ensure that there is no driving under the backreach of quay cranes. 
 										</p>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>ST22</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											Memastikan tidak ada kendaraan yang dikemudikan dibawah jangkauan quay cranes.
 										</p>
 									</div>
 								</div>
 							</div>
 							<!----- E: ST22 --------->
 							
 							<!----- S: ST23 --------->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>ST23</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											To ensure that there is no cutting across from any yard block to another.
 										</p>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>ST23</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											Memastikan tidak ada yang memotong jalur dari satu blok ke blok lain di lapangan.
 										</p>
 									</div>
 								</div>
 							</div>
 							<!----- E: ST23 --------->
 							
 							<!----- S: ST24 --------->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>ST24</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											To ensure that there is no driving between any 2 quay cranes,
 except for the purpose of entering the wharf and where there
 is at least 80 feet clearance between any 2 such quay
 cranes. 
 										</p>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>ST24</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											Memastikan tidak ada yang mengemudikan kendaraan
 diantara 2 (dua) quay cranes kecuali untuk tujuan memasuki
 dermaga dan ada jarak aman minimum 80 (delapan puluh)
 kaki di antara setiap 2 (dua) quay cranes
 										</p>
 									</div>
 								</div>
 							</div>
 							<!----- E: ST24 --------->
 							
 							<!----- S: ST25 --------->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>ST25</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											To ensure that yard cranes engaging in cross-gantrying are given way to. 
 										</p>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>ST25</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											Memastikan yard cranes yang melakukan cross-gantrying diberikan prioritas jalan terlebih dahulu.
 										</p>
 									</div>
 								</div>
 							</div>
 							<!----- E: ST25 --------->
 							
 							
 							<!----- S: VT26 --------->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>VT26</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											To ensure that no hand-held communication device is used while
 driving.
 										</p>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>VT26</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											Memastikan tidaka da perangkat komunikasi hand-held yang
 digunakan saat mengemudi.
 										</p>
 									</div>
 								</div>
 							</div>
 							<!----- E: VT26 --------->
 							
 							
 							<!----- S: ST27 --------->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>ST27</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											To ensure that accurate and current information, e.g. weight
 of equipment, load, container, etc., as required by NPCT1 is
 provided promptly.
 										</p>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>ST27</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											Memastikan informasi yang akurat dan terbaru, misalnya:
 berat peralatan, muatan, peti kemas dan lain-lain, adalah
 sebagaimana disyaratkan oleh NPCT1, dan disediakan
 dengan segera.
 										</p>
 									</div>
 								</div>
 							</div>
 							<!----- E: ST27 --------->
 							
 							
 							<!----- S: ST28 --------->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>ST28</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											To ensure that all drivers maintain road discipline in
 congested areas and avoid unnecessary horning.
 										</p>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>ST28</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											Memastikan semua pengemudi menjalankan disiplin
 berkendaraan di daerah yang padat dan menggunakan
 klakson apabila diperlukan saja.
 										</p>
 									</div>
 								</div>
 							</div>
 							<!----- E: ST28 --------->
 							
 							
 							<!----- S: VT46 --------->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>VT46</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 										 To ensure that there is no reckless and/or dangerous driving at
 all times.
 										</p>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>VT46</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											Setiap saat memastikan tidak ada pengemudi yang sembrono
 dan/atau membahayakan dalam mengendarai kendaraan.
 										</p>
 									</div>
 								</div>
 							</div>
 							<!----- E: VT46 --------->
 							
 							
 							<!----- S: DVT47 --------->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>DVT47</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											To ensure that all drivers carry with them valid driving licenses at all times.
 										</p>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>DVT47</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											Setiap saat memastikan semua pengemudi selalu membawa surat izin mengemudi yang masih berlaku.
 										</p>
 									</div>
 								</div>
 							</div>
 							<!----- E: DVT47 --------->
 							
 							
 							<!----- S: ST48 --------->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>ST48</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											To ensure that all drivers drive with due care and attention at
 all times.
 										</p>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>ST48</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											Setiap saat memastikan semua pengemudia selalu berhatihati dan penuh perhatian saat mengemudi kendaraan.
 dan sekitar lokasi NPCT1.
 										</p>
 									</div>
 								</div>
 							</div>
 							<!----- E: LT02 --------->
 							
 							
 							<!----- S: VT49 --------->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>VT49</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											To ensure that no accident is caused by careless, negligent or
 inattentive driving.
 
 										</p>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>VT49</p></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<p>
 											Memastikan tidak ada kecelakaan yang disebabkan oleh
 kecerobohan, kelalaian atau kurangnya perhatian saat
 mengemudi kendaraan.
 
 										</p>
 									</div>
 								</div>
 							</div>
 							<!----- E: VT49 --------->
 							
 							
 							<!-------------------------- E:POINT 41 -------------------------->
 							
 							<!-------------------------- S:POINT 42 -------------------------->
 							<!-- S:MODUL POINT --->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>42.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											NPCT1 SECURITY RULES
 										</b>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>42.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											PERATURAN NPCT1 TENTANG KEAMANAN
 										</b>
 									</div>
 								</div>
 							</div>
 							
 							
 							<!-- E:MODUL POINT --->
 							
 							<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>42.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													 Goods, Cargoes and/or Containers
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>42.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Barang, Kargo dan/atau Peti Kemas
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										
 										<div class="col-lg-12 col-md-12 col-sm-12 col-xm-12 paragraph">
 											<p>
 												The Customer shall: 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										 
 										<div class="col-lg-12 col-md-12 col-sm-12 col-xm-12 paragraph">
 											<p>
 												<u>
 													Pelanggan harus:
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>42.1.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												To ensure that only the correct quantity or weight of goods, cargoes and/or containers are taken delivery of.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>42.1.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Memastikan hanya jumlah atau berat yang benar atas barang, kargo dan/atau peti kemas yang diambil untuk pengiriman.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>42.1.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												To ensure that only goods, cargoes and/or containers of the correct markings are taken delivery of.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>42.1.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Memastikan hanya barang, kargo dan/atau peti kemas yang diberikan tanda benar adalah yang diambil untuk pengiriman.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>42.1.3</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												To ensure that no goods, cargo and/or container is removed from NPCT1’s Restricted Areas without due authority or permission.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>42.1.3</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Memastikan tidak ada barang, kargo dan/atau peti kemas yang dipindahkan dari Area Terbatas milik NPCT1 tanpa mendapatkan izin atau persetujuan terlebih dahulu.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>42.1.4</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												To ensure that all dutiable goods, cargoes and/or containers are properly declared to the relevant authority and their requisite duties are duly paid before they are brought into or removed from NPCT1’s Restricted Areas.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>42.1.4</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Memastikan semua barang, kargo dan/atau peti kemas yang terkena pajak/cukai adalah telah dilaporkan dengan semestinya kepada otoritas yang relevan dan setiap pajak atau biaya telah dibayarkan sebagaimana mestinya, sebelum dibawa masuk atau keluar dari Area Terbatas milik NPCT1.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>42.1.5</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												To ensure that there is no dealing whatsoever of contraband, smuggled or unauthorized goods, cargoes and/or containers within NPCT1’s Restricted Areas.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>42.1.5</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Memastikan tidak ada transaksi illegal, penyelundupan atautidak sah atas barang, kargo dan/atau peti kemas di dalam Area Terbatas milik NPCT1.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>42.1.6</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												To ensure that only goods, cargoes and/or containers of the correct markings are taken delivery of.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>42.1.6</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Memastikan tidak ada segel atau perangkat keamanan lainnya pada barang, kargo dan/atau peti kemas yang diutak-atik, dirusak atau ditangani, tanpa izin atau persetujuan terlebih dahulu.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>42.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Port Property and Other Properties
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>42.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Properti dan Properti Lainnya milik Pelabuhan
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												
 													The Customer shall ensure that no port property or other
 property is removed from NPCT1’s Restricted Areas without
 due authority or permission.
 												
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												
 													Pelanggan harus memastikan bahwa tidak ada properti atau
 property lain milik Pelabuhan yang dipindahkan dari Area
 Terbatas milik NPCT1 tanpa izin atau persetujuan terlebih
 dahulu.
 												
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>42.3</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													 Persons
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>42.3</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Orang
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 									<p>
 										The Customer shall:
 									</p>
 								</div>
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 									<p>
 										Pelanggan harus:
 									</p>
 								</div>
 								
 								
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>42.3.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												To ensure that no person enters or causes another to enter
 												 and/or remains or causes another to remain in NPCT1’s
 												 Restricted Areas without a valid personal NPCT1 Pass.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>42.3.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Mematikan tidak ada orang yang masuk atau menyebankan
 												 orang lain untuk masuk dan/atau menyebabkan orang lain
 												 tetap berada di Area Terbatas milik NPCT1 tanpa memiliki
 												 Pas Individu yang sah dari NPCT1.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>42.3.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												To ensure that no person enters and/or remains in NPCT1’s
 Restricted Areas for purposes other than purposes for which
 such person is issued with a pass.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>42.3.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Memastikan tidak ada orang yang masuk dan/atau tetap
 berada di Area Terbatas milik NPCT1 untuk tujuan lain selain
 tujuan atas izin yang diberikan atas orang tersebut.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>42.3.3</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												To ensure that there is no stowaway on board any vessel.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>42.3.3</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Memastikan tidak adanya penumpang tanpa izin di atas semua kapal.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>42.3.4</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												To ensure that the relevant authority and NPCT1 are notified
 immediately when a stowaway is found on board any vessel,
 and that such stowaway shall not leave the vessel until that
 stowaway is handed over to the relevant authority.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>42.3.4</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Memastikan otoritas terkait dan NPCT1 segera
 diinformasikan saat penumpang tanpa izin ditemukan diatas
 kapal, dan penumpang tanpa izin tersebut tidak akan
 meninggalkan kapan hingga diserahkan kepada otoritas
 terkait.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>42.3.5</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												To ensure that no person engages in any act of nuisance,
 coercion or harassment, or any act using force or any act which
 causes or may cause fear or hurt to any other person.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>42.3.5</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Memastikan tidak ada orang yang terlibat dalam Tindakan
 gangguan, paksaan atau pelecepan, maupun Tindakan lain
 apapun yang menggunakan kekerasan atau Tindakan lain
 apapun yang mengakibatkan atau mungkin mengakibatkan
 ketakutan atau cedera pada orang lain.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>42.3.6</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												To ensure that no person engages in any act which disrupts or
 interferes or may disrupt or interfere with any operation in or
 around NPCT1’s Restricted Areas.
 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>42.3.6</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Memastikan tidak ada orang yang terlibat dalam tindakan
 apapun yang menganggu atau memanipulasi dengan
 melakukan aktivitas operasional dalam bentuk apapun di
 atau sekitar Area Terbatas milik NPCT1.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>42.3.7</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												To ensure that no person engages in any betting, wagering,
 gambling or moneylending activity in or around NPCT1’s
 Restricted Areas.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>42.3.7</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Memastikan tidak ada orang yang terlibat dalam aktivitas
 taruhan, wagering, perjudian atau peminjaman uang dengan
 bunga di atau sekitar Area Terbatas milik NPCT1.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>42.4</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													 Environment
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>42.4</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Lingkungan
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 									<p>
 										The Customer shall:
 									</p>
 								</div>
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 									<p>
 										Pelanggan harus:
 									</p>
 								</div>
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>42.4.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												To ensure that there is no pollution of, or harmful emission to,
 the environment within or around NPCT1’s Restricted Areas at
 all times.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>42.4.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Setiap saat memastikan tidak ada polusi atau emisi
 berbahaya terhadap lingkungan di dalam atau di sekitar Area
 Terbatas milik NPCT1.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>42.4.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												To ensure that there is no photo-taking, video-taping or
 capturing of images, using electronic equipment, of any part
 of NPCT1’s Restricted Areas or of any activity within or
 around such Restricted Areas without authority or permission.
 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>42.4.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Memastikan tidak ada pengambilan gambar, pengambilan
 video atau pengambilan cuplikan, yang menggunakan
 peralatan elektronik, atas bagaian apapun dari Area
 Terbatas milik NPCT1, atau aktivitas lain dalam bentuk
 apapun di dalam atau di sekitar Area Terbatas, tanpa
 mendapatkan izin atau persetujuan terlebih dahulu.
 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>42.5</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													 Illegal and/or Prohibited Dealings or Conduct
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>42.5</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Transaksi atau Perilaku Ilegal dan/atau Dilarang
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 									<p>
 										The Customer shall:
 									</p>
 								</div>
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 									<p>
 										Pelanggan harus:
 									</p>
 								</div>
 								
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>42.5.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												To ensure that no person deals or engages in or assists or
 abets the dealing or engagement of any other act or conduct
 which contravenes any legislation, rule stipulated by NPCT1 or
 other written law.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>42.5.1</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												 Memastikan tidak ada pihak yang melakukan transaksi atau
 terlibat dalam atau membantu atau bersekongkol untuk
 bertransaksi, terlibat dalam tindakan atau perilaku yang
 bertentangan dengan peraturan perundang-undangan,
 peraturan yang ditetapkan oleh NPCT1 atau peraturan
 perundang-undangan tertulis lainnya. 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>42.5.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												To ensure that no person deals or engages in or assists or
 abets the dealing or engagement of any activity which is or
 may be prohibited by NPCT1 from time to time.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>42.5.2</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												 Memastikan tidak ada pihak yang melakukan transaksi atau
 terlibat dalam atau membatu atau bersekongkol dalam
 berhubungan atau terlibat dalam aktivitas apaun yang atau
 mungkin dilarang oleh NPCT1 dari waktu ke waktu.
 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>42.5.3</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												To ensure that no person brings into and/or possess and/or use
 within NPCT1’s Restricted Areas any article, item, device,
 equipment or property which is or may be used in any
 illegal or prohibited dealing or engagement or in the assistance
 or abetment thereof.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>42.5.3</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 Memastikan di dalam Area Terbatas milik NPCT1 tidak ada
 pihak yang membawa dan/atau memiliki dan/atau
 menggunakan obyek, barang, perangkat peralatan atau
 properti apapun yang dapat atau mungkin dapat digunakan
 dalam transaksi atau perjanjian ilegal atau dilarang atau
 dalam bantuan atau kemampuannya.
 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								
 								
 								<!-- S:POINT 7.4.2 a --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>A</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 Any person who represent the Customer, who infringes
 any of the aforesaid Security Rules shall be subject to
 the following:-
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>A</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														Setiap pihak yang mewakili Pelanggan, yang melanggar
 salahs atu dari Aturan Keamanan tersebut diatas, akan
 tunduk pada hal-hal berikut:
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 7.4.2 a --->
 								
 								
 								
 								<!-- S:POINT 7.4.2 a --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<div class="row">
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>I.</p></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 															<p>
 																immediate eviction from NPCT1’s Restricted Areas
 																and revocation of such person’s NPCT1 Pass,
 																irrespective of the number of infringements;
 																and/or
 															</p>
 														</div>
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>II.</p></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 															<p>
 																ban from entering NPCT1’s Restricted Areas for:
 															</p>
 															<div class="row">
 																<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>a.</p></div> 
 																<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 																	<p>
 																		in respect of the 1st infringement, 3 to 6 months as NPCT1 deems fit;
 																	</p>
 																</div>
 																<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>b.</p></div> 
 																<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 																	<p>
 																		in respect of the 2nd infringement, 6 to 12 months as NPCT1 deems fit; and
 																	</p>
 																</div>
 																<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>c.</p></div> 
 																<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 																	<p>
 																		in respect of the 3rd and any subsequent infringement, 12 to 18 months as NPCT1 deems fit.
 																	</p>
 																</div>
 															</div>
 														</div>
 													</div>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<div class="row">
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>I.</p></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 															<p>
 																Pengusiran langsung dari Area Terbatas milik NPCT1
 dan pencabutan Pas NPCT1 yang telah diberikan
 kepada pihak tersebut, terlepas dari jumlah
 pelanggaran; dan/atau
 															</p>
 														</div>
 														<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>II.</p></div> 
 														<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 															<p>
 																Larangan untuk memasuki Area Terbatas milik NPCT1:
 															</p>
 															<div class="row">
 																<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>a.</p></div> 
 																<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 																	<p>
 																		Sehubungan dengan pelanggaran pertama, 3 sampai 6 bulan sebagaimana dianggap sesuai oleh NPCT1;
 																	</p>
 																</div>
 																<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>b.</p></div> 
 																<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 																	<p>
 																		Sehubungan dengan pelanggaran kedua, 6 sampai 12 bulan, sebagaimana dianggap sesuai oleh NPCT1; dan
 																	</p>
 																</div>
 																<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>c.</p></div> 
 																<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 																	<p>
 																		Sehubungan dengan pelanggaran ketiga dan selanjutnya, 12 hingga 18 bulan, sebagaimana dianggap sesuai oleh NPCT1.
 																	</p>
 																</div>
 															</div>
 														</div>
 													</div>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 7.4.2 a --->
 								
 								
 								
 								<!-- S:POINT 7.4.2 a --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>B</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 In the event of a breach of General <b>Condition 42.5.3</b>,
 NPCT1 may remove, confiscate and/or detain any such
 prohibited articles, items, devices, equipment or property
 from anyone or anywhere within NPCT1’s Restricted
 Areas, and dispose of them as NPCT1 deems fit.
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<div class="row">
 												<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>B</p></div> 
 												<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 													<p>
 														Dalam hal terjadi pelanggaran terhadap <b>Ketentuan
 Umum 42.5.3</b>, NPCT1 dapat menghapus, menyita
 dan/atau menahan barang, benda, perangkat,
 peralatan atau property apapun yang dilarang, dari 
 pihak manapun atau di lokasi manapun di dalam Area
 Terbatas milik NPCT1, dan menghancurkannya
 sebagaimana dianggap sesuai oleh NPCT1.
 													</p>
 												</div>
 											</div>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 7.4.2 a --->
 								
 								
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>42.6</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													 Clamping and Towing of Vehicles
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><p>42.6</p></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												<u>
 													Penguncian dan Derek Kendaraan
 												</u>
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 								
 								<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												The Customer shall guarantee that any of Customer’s employee
 or agent or representative whom holds NPCT1 Pass shall park
 their vehicles at designated parking lots and, failing which, their
 vehicles shall be wheel clamped and/or towed away.
 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Pelanggan menjamin bahwa karyawan atau agen atau
 perwakilan Pelanggan yang memiliki Pas dari NPCT1 selalu
 memarkir kendaraan mereka di tempat parkir yang telah
 ditentukan dan, jika tidak, ban kendaraan mereka akan
 dikunci dan/atau diderek keluar.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 							<!-------------------------- E:POINT 42 -------------------------->
 							
 							<!-------------------------- S:POINT 43 -------------------------->
 							<!-- S:MODUL POINT --->
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>43.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											MISCELLANEOUS
 										</b>
 									</div>
 								</div>
 							</div>
 							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 modul">
 								<div class="row">
 									<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"><b>43.</b></div>
 									<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 										<b>
 											LAIN-LAIN
 										</b>
 									</div>
 								</div>
 							</div>
 							<!-- E:MODUL POINT --->
 							<!-- S:POINT 6.3 --->
 								<!-- S:ENGLISH --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												This General Conditions is made in dual language, Bahasa
 												Indonesia and English. In the event of a dispute over any matter
 												or the interpretation of the provisions of this General
 												Conditions related to the implementation to this General
 												Conditions, the English language will prevail. 
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:ENGLISH --->
 								<!-- S:INDONESIA --->
 								<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 sub-modul">
 									<div class="row">
 										<div class="col-lg-1 col-md-1 col-sm-1 col-xm-1 point"></div> 
 										<div class="col-lg-11 col-md-11 col-sm-11 col-xm-11 paragraph">
 											<p>
 												Ketentuan Umum ini dibuat dalam 2 (dua) Bahasa, Bahasa
 												Indonesia dan Bahasa Inggris. Dalam hal terjadi perselisihan
 												atas salah satu atau interpretasi atas ketentuan dalam
 												Ketentuan Umum ini, terkait dengan penerapan Ketentuan
 												Umum ini, maka Bahasa Inggris yang akan berlaku.
 											</p>
 										</div>
 									</div>
 								</div>
 								<!-- E:INDONESIA --->
 								<!-- E:POINT 6.3 --->
 							
 							<!-------------------------- E:POINT 43 -------------------------->
 				</div>
 			</div>
 		</section>
 	</div>
 <body>
 </div>
 </html>
             
             </div>
         </div>
     </div>
 
 @endsection