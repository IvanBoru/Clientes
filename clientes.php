<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Clientes|EcoBolsas</title>
	<!-- Tailwind  -->
	<script src="https://cdn.tailwindcss.com"></script>
	<!-- Font-awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
	<header class="bg-green-500 p-4 text-white text-center">
		<h1 class="text-2xl font-bold">Clientes de EcoBolsas</h1>
	</header>

	<main class="container mx-auto p-4">
		<section class="mb-8">
			<h2 class="text-2xl font-semibold mb-4"><i class="fa-solid fa-users-line"></i> Clientes</h2>

			<table class="w-fit mx-auto border-collapse md:border-separate border border-gray-400" ...">
				<thead>
					<tr>
						<th class="border border-gray-300 ...">Id</th>
						<th class="border border-gray-300 ...">Numero de Identificación Tributaria - NIT</th>
						<th class="border border-gray-300 ...">Razon Social</th>
						<th class="border border-gray-300 ...">Estado</th>
						<th class="border border-gray-300 ...">Acciones</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="border border-gray-300 ...">1</td>
						<td class="border border-gray-300 ...">123456789</td>
						<td class="border border-gray-300 ...">ECOBOLSAS</td>
						<td class="border border-gray-300 text-center">
							<span class="text-white text-sm bg-green-500 border border-green-500 rounded-md p-0.5 font-semibold">
								Activo
							</span>
						</td>

						<td class="border border-gray-300 ...">
							<div class="flex gap[2px]">
								<!-- Botón de check -->
								<button class="group p-2 rounded-md transition-colors duration-200" aria-label="Aprobar" title="Aprobar">
									<i class="fa-solid fa-check text-green-500 group-hover:bg-green-600 group-hover:text-white p-2 rounded transition-colors duration-200"></i>
								</button>

								<!-- Botón de editar -->
								<button class="group p-2 rounded-md transition-colors duration-200" aria-label="Editar" title="Editar">
									<i class="fa-solid fa-pen-to-square text-yellow-500 group-hover:bg-yellow-400 group-hover:text-white p-2 rounded transition-colors duration-200"></i>
								</button>

								<!-- Botón de eliminar -->
								<button class="group p-2 rounded-md transition-colors duration-200" aria-label="Eliminar" title="Eliminar">
									<i class="fa-solid fa-trash-can text-red-500 group-hover:bg-red-600 group-hover:text-white p-2 rounded transition-colors duration-200"></i>
								</button>
							</div>

						</td>
					</tr>
				</tbody>
			</table>
		</section>

		<section>
			<h2 class="text-xl font-semibold mb-4">Testimonios</h2>
			<blockquote class="border-l-4 border-green-500 pl-4 italic">
				"EcoBolsas ha transformado nuestra forma de empaquetar productos, haciéndolos más sostenibles y atractivos para nuestros clientes." - Cliente Satisfecho
			</blockquote>
		</section>
	</main>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<footer class="bg-gray-800 text-white text-center p-4 mt-8">
		<p>&copy; 2023 EcoBolsas. Todos los derechos reservados.</p>
	</footer>
</body>

</html>