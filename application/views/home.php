<!DOCTYPE html>
<html>
<head>
	<title>CodeIgniter Upload Resize Image</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>

<body>
	<div class="container" style="margin-top: 50px">
		<div class="row">
			<div class="col-md-12">
				<?php echo $this->session->flashdata("notif") ?>
				<div class="card">
					<div class="card-header">
						UPLOAD IMAGE
					</div>
					<div class="card-body">
						<?php echo form_open_multipart('home/upload') ?>
							<div class="form-group">
							    <label>IMAGE</label>
							    <input type="file" class="form-control-file" name="userfile">
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-md btn-success">UPLOAD</button>
							</div>
						<?php echo form_close(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>