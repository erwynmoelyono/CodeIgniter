<div class="container">
	<div class="row">
		<div class="col-md-12 mt-4">
			<div class="card">
				<div class="card-header d-flex justify-content-between fw-bold align-items-center">

					How to insert data into database
					<a href="<?php echo base_url("employee/add") ?>" class="btn btn-primary ">Add
						Employee</a>

				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-striped table-hover table-borderless table-primary align-middle">
							<thead class="table-light">
								<caption>
									Employee Table
								</caption>
								<tr>
									<th>No.</th>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Phone Number</th>
									<th>Email</th>
									<th>Action</th>

								</tr>
							</thead>
							<tbody class="table-group-divider">
								<?php
								$counter = 1;
								foreach ($employee as $row): ?>
									<tr class="table-secondary">
										<td scope="row"><?= $counter++ ?></td>
										<td><?= $row->first_name ?></td>
										<td><?= $row->last_name ?></td>
										<td><?= $row->phone ?></td>
										<td><?= $row->email ?></td>
										<td>
											<div class="dropdown open">
												<button class="btn btn-warning dropdown-toggle" type="button" id="triggerId"
													data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													Action
												</button>
												<div class="dropdown-menu" aria-labelledby="triggerId">
													<a href="<?php echo base_url('employee/edit/' . $row->id) ?>"
														class="dropdown-item">Update</a>
													<a href="<?php echo base_url('employee/delete/' . $row->id) ?>"
														class="dropdown-item">Delete</a>
													<button class="dropdown-item confirm-delete"
														value="<?= $row->id ?>">Delete
														Confirmation</button>
												</div>
											</div>
										</td>
									</tr>
								<?php endforeach;
								?>
							</tbody>
							<tfoot>

							</tfoot>
						</table>
					</div>

				</div>
				<div class="card-footer text-muted">Footer</div>
			</div>
		</div>
	</div>
</div>
