<?= $this->insert('overall/header') ?>
	<body>
		<div class="container">
			<div class="presentacion center">
				<div class="row">
					<?php if(isset($_GET['success'])): ?>
					<div class="col-xs-12">
						<div class="alert alert-success">
							<span>Acción realizada con éxito</span>
						</div>
					</div>
					<?php endif ?>
					<div class="col-xs-12">
						<h1>{{model}}</h1>
						{{tables}}
					</div>
					<div class="col-xs-12">
						<a href="{{view}}/crear" class="btn btn-sm btn-primary">
							<span>Crear</span>
						</a>
					</div>
				</div>
			</div>
		</div>
		<?= $this->insert('overall/footer') ?>
	</body>
</html>