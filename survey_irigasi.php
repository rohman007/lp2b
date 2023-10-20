	<!-- Upload Map Modal -->
	<div class="modal fade" id="surveyIrigasiModal" tabindex="-1" role="dialog" aria-labelledby="surveyIrigasiModal" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered form-modal" role="document">
			<div class="modal-content rounded-20 border-0">
				<div class="modal-body p-4 pt-5 pb-4 p-md-5">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					<div class="text-center">
						<h1 class="h2 text-gray-900 mb-2 fw-bold">Survey Irigasi</h1>
						<h5 class="fs-6 text-black-50 mb-4">Partisipasi dalam Survei Kami</h5>
					</div>
					<form class="">
						<div class="form-group mb-3">
							<input type="text" class="form-control form-control-user py-2" id="" placeholder="Nama Irigasi">
						</div>
						<div class="form-group mb-3">
							<select class="form-control form-control-user py-2">
								<option>Klasifikasi Irigasi</option>
								<option>Primer</option>
								<option>Sekunder</option>
								<option>Tersier</option>
								<!-- <option>Cacing</option> -->
							</select>
						</div>
						<div class="form-group mb-3">
							<input type="text" class="form-control form-control-user py-2" id="" placeholder="RT">
						</div>
						<div class="form-group mb-3">
							<input type="text" class="form-control form-control-user py-2" id="" placeholder="RW">
						</div>
						<div class="form-group mb-3">
							<select class="form-control form-control-user py-2">
								<option>Kondisi Fisik</option>
								<option>Baik</option>
								<option>Sedang</option>
								<option>Rusak</option>
							</select>
						</div>
						<div class="input-group mb-3">
							<input type="text" class="form-control" placeholder="Luas" aria-label="Luas" aria-describedby="luas">
							<div class="input-group-prepend">
								<span class="input-group-text" id="luas">m<pre>2</pre></span>
							</div>
						</div>
						<input type="submit" class="btn btn-primary btn-user btn-block rounded-5 d-block mt-4 p-2" value="Submit">
					</form>
				</div>
			</div>
		</div>
	</div>