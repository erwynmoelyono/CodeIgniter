<footer class="bg-dark text-light pt-4">
	<div class="container">
		<div class="row">
			<!-- About Section -->
			<div class="col-md-4">
				<h5>About Us</h5>
				<p>
					We are committed to delivering quality services. Contact us for more details.
				</p>
			</div>
			<!-- Links Section -->
			<div class="col-md-4">
				<h5>Quick Links</h5>
				<ul class="list-unstyled">
					<li><a href="#" class="text-light text-decoration-none">Home</a></li>
					<li><a href="#" class="text-light text-decoration-none">About</a></li>
					<li><a href="#" class="text-light text-decoration-none">Services</a></li>
					<li><a href="#" class="text-light text-decoration-none">Contact</a></li>
				</ul>
			</div>
			<!-- Social Media Section -->
			<div class="col-md-4">
				<h5>Follow Us</h5>
				<div>
					<a href="#" class="text-light text-decoration-none me-3">
						<i class="bi bi-facebook"></i> Facebook
					</a>
					<a href="#" class="text-light text-decoration-none me-3">
						<i class="bi bi-twitter"></i> Twitter
					</a>
					<a href="#" class="text-light text-decoration-none">
						<i class="bi bi-instagram"></i> Instagram
					</a>
				</div>
			</div>
		</div>
		<hr class="my-4">
		<div class="text-center pb-3">
			<p class="mb-0">&copy; 2024 YourCompany. All rights reserved.</p>
		</div>
	</div>
</footer>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
	integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
	crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
	$(document).ready(function () {
		$('.confirm-delete').click(function (e) {
			e.preventDefault();

			var id = $(this).val();
			const deleteUrl = "<?= base_url('employee/delete/') ?>" + id;

			Swal.fire({
				title: 'Are you sure?',
				text: "You won't be able to revert this!",
				icon: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Yes, delete it!',
				cancelButtonText: 'No, cancel'
			}).then((result) => {
				if (result.isConfirmed) {
					$.ajax({
						type: 'DELETE',
						url: deleteUrl,
						success: function (resp) {
							console.log(resp);
							Swal.fire({
								title: 'Deleted!',
								text: 'Your item has been successfully deleted.',
								icon: 'success',
								confirmButtonText: 'OK'
							}).then(() => {
								window.location.reload();
							});
						},
						error: function (xhr, status, error) {
							Swal.fire({
								title: 'Error!',
								text: 'An error occurred while deleting the item.',
								icon: 'error',
								confirmButtonText: 'OK'
							});
						}
					});

					// window.location.href = deleteUrl;
				} else {

					Swal.fire(
						'Cancelled',
						'Your item is safe :)',
						'info'
					);
				}
			});
		})
	})
</script>
</body>

</html>
