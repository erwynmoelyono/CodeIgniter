<div class="container">
	<div class="row">
		<div class="col-md-12 mt-4">
			<div class="card">
				<div class="card-header d-flex justify-content-between fw-bold align-items-center">

					Edit Employee
					<a href="<?php echo base_url("employee") ?>" class="btn btn-danger ">Back</a>

				</div>
				<div class="card-body">
					<form action="<?php echo base_url('employee/update/' . $employee->id) ?>" method="POST">
						<div class="mb-3">
							<label for="" class="form-label">First Name</label>
							<input type="text" name="first_name" id="" class="form-control" placeholder=""
								aria-describedby="helpId" value="<?= $employee->first_name ?>" />
							<small><?php echo form_error("first_name") ?></small>

						</div>
						<div class="mb-3">
							<label for="" class="form-label">Last Name</label>
							<input type="text" name="last_name" id="" class="form-control" placeholder=""
								aria-describedby="helpId" value="<?= $employee->last_name ?>" />
							<small><?php echo form_error("last_name") ?></small>

						</div>
						<div class="mb-3">
							<label for="" class="form-label">Phone Number</label>
							<input type="tel" name="phone" id="" class="form-control" placeholder=""
								aria-describedby="helpId" value="<?= $employee->phone ?>" />
							<small><?php echo form_error("phone") ?></small>

						</div>
						<div class="mb-3">
							<label for="" class="form-label">Email</label>
							<input type="email" name="email" id="" class="form-control" placeholder=""
								aria-describedby="helpId" value="<?= $employee->email ?>" />
							<small><?php echo form_error("email") ?></small>

						</div>

						<div class="form-group">
							<button type="submit" class="btn btn-primary">Update</button>
						</div>

					</form>
				</div>
				<div class="card-footer text-muted">Footer</div>
			</div>
		</div>
	</div>
</div>
