<html>
	<body>
		<form method="POST" action="/cliente">
			@csrf
			<input type="hidden" name="id" value="{{ $cliente->id }}" />
			<div>
				<label for="nome">Nome:</label>
				<input type="text" name="nome" value="{{ $cliente->nome }}" />
			</div>
			<div>
				<label for="email">E-mail:</label>
				<input type="email" name="email" value="{{ $cliente->email }}"/>
			</div>
			<div>
				<button type="submit">Salvar</button>
			</div>
		</form>
		<table border="1">
			<thead>
				<tr>
					<th>Nome</th>
					<th>E-mail</th>
					<th>Editar</th>
					<th>Excluir</th>
				</tr>
			</thead>
			<tbody>
				@foreach($clientes as $cliente)
					<tr>
						<td>{{ $cliente->nome }}</td>
						<td>{{ $cliente->email }}</td>
						<td>
							<a href="/cliente/{{ $cliente->id }}/edit">Editar</a>
						</td>
						<td>
							<form action="/cliente/{{ $cliente->id }}" method="POST">
								@csrf
								<input type="hidden" name="_method" value="DELETE" />
								<button type="submit">Excluir</button>
							</form>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</body>
</html>