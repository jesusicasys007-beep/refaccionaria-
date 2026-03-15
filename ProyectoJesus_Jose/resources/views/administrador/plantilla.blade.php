<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title', 'Panel de administrador')</title>

	<!-- Bootstrap 5 CDN -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

	<style>
		body { min-height:100vh; }
		.admin-layout { display: flex; }
		.sidebar {
			width: 250px;
			background: #0d6efd;
			color: #fff;
			min-height: 100vh;
			transition: transform .2s ease-in-out;
		}
		.sidebar a { color: #fff; text-decoration: none; }
		.sidebar .nav-link { color: rgba(255,255,255,.9); }
		.sidebar.collapsed { transform: translateX(-250px); }
		.content { flex: 1; padding: 1.25rem; }
		@media (max-width: 768px) {
			.sidebar { position: fixed; z-index: 1030; }
			.content { padding-top: 4.5rem; }
		}
	</style>

	@stack('styles')
</head>
<body>

<div class="admin-layout">
	<aside id="adminSidebar" class="sidebar">
		<div class="p-3">
			<h4 class="mb-3">Administrador</h4>
			<hr class="border-white-25">
			<nav class="nav flex-column">
				<a class="nav-link" href="">Dashboard</a>
				<a class="nav-link" href="">Piezas</a>
				<a class="nav-link" href="">Componentes</a>
				<a class="nav-link" href="">Órdenes</a>
				<a class="nav-link" href="">Usuarios</a>
			</nav>
		</div>
	</aside>

	<div class="content w-100">
		<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow-sm">
			<div class="container-fluid">
				<button class="btn btn-primary me-2" id="sidebarToggle">☰</button>
				<a class="navbar-brand" href="#">Panel Admin</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topNav">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="topNav">
					<ul class="navbar-nav ms-auto">
						<li class="nav-item"><a class="nav-link" href="#">Perfil</a></li>
						<li class="nav-item"><a class="nav-link" href="#">Cerrar sesión</a></li>
					</ul>
				</div>
			</div>
		</nav>

		<main class="mt-4">
			@if(session('status'))
				<div class="alert alert-success">{{ session('status') }}</div>
			@endif

			@yield('content')
		</main>
	</div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
	(function(){
		const sidebar = document.getElementById('adminSidebar');
		const toggle = document.getElementById('sidebarToggle');
		toggle.addEventListener('click', function(e){
			e.preventDefault();
			sidebar.classList.toggle('collapsed');
		});
		// Close sidebar on small screens when clicking outside
		document.addEventListener('click', function(e){
			if(window.innerWidth <= 768){
				if(!sidebar.contains(e.target) && !toggle.contains(e.target)){
					sidebar.classList.add('collapsed');
				}
			}
		});
	})();
</script>

@stack('scripts')

</body>
</html>

