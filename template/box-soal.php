	
<!-- number scroll muncul hanya saat di device handphone -->
<div class="container-fluid hidden-lg hidden-md hidden-sm num-scroll-xs">
	<div class="scrollmenu" id="style-1">
		<?php for ($i=1; $i < 9 ; $i++) { ?>
			<button class="btn-arrow cs-btn-num-soal"><?php echo $i; ?></button>
		<?php } ?>
		<button class="btn-arrow cs-btn-num-soal right-btn-num-soal">
			<?php echo $i; ?>
		</button>
	</div>
</div>
<!-- number scroll muncul hanya saat di device handphone -->

<div class="container-fluid box-soal">

	<div class="col-md-8 col-sm-8">
		<!-- top-sec-soal -->
		<div class="top-section-soal">
			<p class="sub-sec-soal">
				<span class="word-soal">Soal Ke</span>&nbsp;
				<span class="nomor-soal">1</span>
				<span class="coutdown">
					<span id="day"></span>
					<span id="hour"></span>&nbsp;<span>:</span>
					<span id="minute"></span>&nbsp;<span>:</span>
					<span id="second"></span> 
					<span id="demo"></span> 
				</span>
			</p>	
		</div>
		<!-- top-sec-soal  -->

		<!-- middle-sec-soal -->
		<div class="panel panel-body isi-soal">

			<!-- isi soal -->
			<div class="sub-isi-soal">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat.</p>
			</div>
			<!-- isi-soal -->

			<!-- daftar-jawaban-soal -->
			<div class="funkyradio">
				<!-- loop -->
				<div class="funkyradio-default">			
					<input type="radio" name="radio" id="radio1" value="">	
					<label for="radio1" class="radio-label">
						<span class="alphabet">A</span>
						<span class="isi-jawaban">Jeruk nipis dapat dicampur dengan bahan lainnya</span>
					</label>
				</div>
				<!-- loop -->
				
				<!-- loop -->
				<div class="funkyradio-default">			
					<input type="radio" name="radio" id="radio2" value="">	
					<label for="radio2" class="radio-label">
						<span class="alphabet">B</span>
						<span class="isi-jawaban">Jeruk purut dapat dicampur dengan bahan lainnya</span>
					</label>
				</div>
				<!-- loop -->
			</div>
			<!-- daftar-jawaban-soal -->
		</div>
		<!-- middle-sec-soal -->

		<!-- bottom-sec-soal -->
		<div class="bottom-section-soal no-mt">
			<button class="btn-arrow">
				<i class="fas fa-chevron-left"></i>&nbsp;<span>Prev</span>
			</button>

			<button class="btn-arrow">
				<span>Next</span>&nbsp;<i class="fas fa-chevron-right"></i>
			</button>

			<button class="btn-arrow btn-akhiri-ujian" class="button-pilihan" data-toggle="modal" data-target=".bs-example-modal-sm">
				<i class="far fa-stop-circle"></i>&nbsp;<span>Akhiri Ujian</span>
			</button>
		</div>
		<!-- bottom-sec-soal -->
	</div>

	<!-- navigasi-soal -->
	<div class="col-md-4 col-sm-4 hidden-xs">
		<div class="top-section-soal num-soal">
			<p class="sub-sec-soal title-nav-soal">Navigasi Soal</p>	
		</div>
		<div class="panel panel-body isi-soal cs-panel-num-soal">	
			<div class="sub-isi-soal">

				<?php for ($i=1; $i <= 9 ; $i++) {?> 				
					<button class="btn-arrow cs-btn-num-soal"><?php echo $i; ?></button>
				<?php } ?>

				<!-- button hijau jika jawaban sudah terisi -->
				<button class="btn-arrow cs-btn-num-soal right-btn-num-soal">
					<?php echo $i; ?>
				</button>
				<!-- button hijau jika jawaban sudah terisi -->

			</div>
		</div>
	</div>
	<!-- navigasi-soal -->
</div>