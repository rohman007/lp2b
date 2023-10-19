<?php 
	include "header.php";
	include "sidebar.php";
?>
	<!-- Disclaimer Modal -->
	<div class="modal fade show" id="disclaimerModal" tabindex="-1" role="dialog" aria-labelledby="disclaimerModal" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			<div class="modal-body">
				<div class="d-md-flex justify-content-center align-items-center">
					<span class="material-symbols-outlined">warning</span>
					<h1>KETAHANAN PANGAN<br/>
					LAHAN PERTANIAN PANGAN BERKELANJUTAN<br/>
					(LP2B)</h1>
				</div>
			</div>
			</div>
		</div>
	</div>

	<!-- Upload Map Modal -->
	<div class="modal fade" id="uploadMapModal" tabindex="-1" role="dialog" aria-labelledby="uploadMapModal" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered default-modal" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<form>
						<label class="upload-file-map">
							<span class="icon-upload material-symbols-outlined">cloud_upload</span>
							<div class="file-uploaded">
								<div class="file-uploaded-line">
									<input type="file" id="files-upload" required>
								</div>
							</div>
							<div class="label-upload">*Select File Shp.</div>
							<div class="size-upload text-black-50 mt-4">Upload file (max 20Mb)</div>
						</label>
						<input type="submit" class="btn btn-primary btn-user btn-block rounded-5 d-block mt-4 p-2" value="Upload">
					</form>
				</div>
			</div>
		</div>
	</div>

	<div id="maps-view">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11546704.014279757!2d116.37681060519851!3d-2.2670915161370018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!3m2!1sen!2sid!4v1697635404994!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
<?php 
	include "footer.php";
?>