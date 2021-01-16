<section class="content-header">
      <h1>
			<!-- ini view dashboard -->
        Users
        <small>Pengguna</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Users</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

	<div class="box">
		<div class="box-header">
		<div class="box-title">Data Users</div>
		<div class="pull-right">
		<a href="<?= site_url('user/add') ?>" class="btn btn-primary btn-flat"><i class="fa fa-user-plus"></i>Create</a>
		</div>
		</div>
		<div class="box-body table-responsive">
			<table class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>#</th>
						<th>Username</th>
						<th>Name</th>
						<th>Address</th>
						<th>Level</th>
						<th>Aksi</th>
					</tr>
				</thead>
			<tbody>
			<?php $no = 1 ?>
			<?php foreach ($row->result() as $key => $data): ?>
			<tr>
				<td><?= $no++ ?></td>
				<td><?= $data->username ?></td>
				<td><?= $data->name ?></td>
				<td><?= $data->address ?></td>
				<!-- ternary operator: jika datanya 1 maka admin, jika 2 maka kasir -->
				<td><?= $data->level == 1 ? "Admin" : "Kasir" ?></td>
				<td width="160px" class="text-center">
				<a href="<?= site_url('user/edit/') ?>" class="btn btn-warning btn-xs">
				<i class="fa fa-pencil"></i>Edit
				</a>
				<a href="<?= site_url('user/delete/') ?>" class="btn btn-danger btn-xs">
				<i class="fa fa-trash"></i>Delete
				</a>
				</td>
				
			</tr>
			<?php endforeach; ?>
			</tbody>
			</table>
		</div>
	</div>
	</section>
