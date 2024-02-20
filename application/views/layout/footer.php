<div class="modal fade modal-notif modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel"
	aria-hidden="true">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="defaultModalLabel">Notifications</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="list-group list-group-flush my-n3">
					<div class="list-group-item bg-transparent">
						<div class="row align-items-center">
							<div class="col-auto">
								<span class="fe fe-box fe-24"></span>
							</div>
							<div class="col">
								<small><strong>Package has uploaded successfull</strong></small>
								<div class="my-0 text-muted small">Package is zipped and uploaded</div>
								<small class="badge badge-pill badge-light text-muted">1m ago</small>
							</div>
						</div>
					</div>
					<div class="list-group-item bg-transparent">
						<div class="row align-items-center">
							<div class="col-auto">
								<span class="fe fe-download fe-24"></span>
							</div>
							<div class="col">
								<small><strong>Widgets are updated successfull</strong></small>
								<div class="my-0 text-muted small">Just create new layout Index, form, table
								</div>
								<small class="badge badge-pill badge-light text-muted">2m ago</small>
							</div>
						</div>
					</div>
					<div class="list-group-item bg-transparent">
						<div class="row align-items-center">
							<div class="col-auto">
								<span class="fe fe-inbox fe-24"></span>
							</div>
							<div class="col">
								<small><strong>Notifications have been sent</strong></small>
								<div class="my-0 text-muted small">Fusce dapibus, tellus ac cursus commodo
								</div>
								<small class="badge badge-pill badge-light text-muted">30m ago</small>
							</div>
						</div> <!-- / .row -->
					</div>
					<div class="list-group-item bg-transparent">
						<div class="row align-items-center">
							<div class="col-auto">
								<span class="fe fe-link fe-24"></span>
							</div>
							<div class="col">
								<small><strong>Link was attached to menu</strong></small>
								<div class="my-0 text-muted small">New layout has been attached to the menu
								</div>
								<small class="badge badge-pill badge-light text-muted">1h ago</small>
							</div>
						</div>
					</div> <!-- / .row -->
				</div> <!-- / .list-group -->
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Clear All</button>
			</div>
		</div>
	</div>
</div>
</main> <!-- main -->
</div> <!-- .wrapper -->
<script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/popper.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/moment.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/simplebar.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/daterangepicker.js')?>"></script>
<script src="<?php echo base_url('assets/js/jquery.stickOnScroll.js')?>"></script>
<script src="<?php echo base_url('assets/js/tinycolor-min.js')?>"></script>
<script src="<?php echo base_url('assets/js/config.js')?>"></script>
<script src="<?php echo base_url('assets/js/apps.js')?>"></script>
<script src="<?php echo base_url('assets/js/special.js')?>"></script>
<script src="<?php echo base_url('assets/js/apexcharts.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/apexcharts.custom.js')?>"></script>
<script src="<?php echo base_url('assets/js/Chart.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/dataTables.bootstrap4.min.js')?>"></script>
<script src="https://kit.fontawesome.com/a41afa4626.js" crossorigin="anonymous"></script>

<script src="<?php echo base_url('assets/js/counter.js'); ?>"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
<script>
	window.dataLayer = window.dataLayer || [];

	function gtag() {
		dataLayer.push(arguments);
	}
	gtag('js', new Date());
	gtag('config', 'UA-56159088-1');

</script>
<script>
	$('.custom-file-input').on('change', function () {
		let fileName = $(this).val().split('\\').pop();
		$(this).next('.custom-file-label').addClass("selected").html(fileName);
	})

</script>
<script>
	$('#dataTable-1').DataTable({
		autoWidth: true,
		"lengthMenu": [
			[16, 32, 64, -1],
			[16, 32, 64, "All"]
		]
	});

</script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag()
      {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'UA-56159088-1');
    </script>
</body>

</html>
