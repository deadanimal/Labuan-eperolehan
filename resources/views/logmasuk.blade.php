<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="icon" type="image/png" href="/Pl.png">
	<title>ePerolehan</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-sm-center h-100">
				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
					<div class="text-center my-5">
						<img src="/Pl.png" alt="logo" width="250">
					</div>
					<div class="card shadow-lg">
						<div class="card-body p-5">
							<h1 class="fs-4 card-title fw-bold mb-4">Sistem ePerolehan</h1>
							<form>
								@csrf
								<div class="mb-3">
									<div class="mb-2 w-100">
										<label class="text-muted">Kad Pengenalan</label>
									</div>
									<input type="text" class="form-control" name="no-kp" value="" autofocus>
								</div>

								<div class="mb-3">
									<div class="mb-2 w-100">
										<label class="text-muted" for="password">Kata Laluan</label>
									</div>
									<input id="password" type="password" class="form-control" name="password">
								</div>

								<div class="d-flex align-items-center">
								
									{{-- <button type="submit" class="btn btn-primary ms-auto" >Log Masuk</button> --}}
									<a href="/perancangan" class="btn btn-primary ms-auto" >Log Masuk</a>
								</div>
							</form>
						</div>
						<div class="card-footer py-3 border-0">
							<div class="text-center">
								 <a href="register.html" class="text-dark"></a>
							</div>
						</div>
					</div>
					<div class="text-center mt-5 text-muted">
						Copyright &copy; &mdash; Perbadanan Labuan
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/login.js"></script>
</body>
</html>
