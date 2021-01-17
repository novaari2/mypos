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
		<div class="box-title">Add Users</div>
		<div class="pull-right">
		<a href="<?= site_url('user') ?>" class="btn btn-warning btn-flat"><i class="fa fa-undo"></i>Kembali</a>
		</div>
		</div>
		<div class="box-body">
			<div class="row">
			<div class="col-md-4 col-md-offset-4">
			<!-- action dikosongkan karena langsung diarahkan ke page add -->
			<?= validation_errors() ?>
				<form action="" method="post">
					<div class="form-group">
					<label for="">Name *</label>
					<input type="text" name="fullname" value="<?= set_value('fullname') ?>" class="form-control">
					</div>
					<div class="form-group">
					<label for="">Username *</label>
					<input type="text" name="username" value="<?= set_value('username') ?>" class="form-control">
					</div>
					<div class="form-group">
					<label for="">Password *</label>
					<input type="password" name="password" value="<?= set_value('password') ?>" class="form-control">
					</div>
					<div class="form-group">
					<label for="">Password Confirmation *</label>
					<input type="password" name="passwordconfirm" value="<?= set_value('passwordconfirm') ?>" class="form-control">
					</div>
					<div class="form-group">
					<label for="">Address </label>
					<textarea type="text" name="address" value="<?= set_value('address') ?>" class="form-control"></textarea>
					</div>
					<div class="form-group">
					<label for="">Level *</label>
					<select name="level" class="form-control">
						<option value="">- Pilih - </option>
						<option value="1">Admin</option>
						<option value="2">Kasir</option>
					</select>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-success btn-flat">
						<i class="fa fa-paper-plane"></i>Save</button>
						<button type="reset" class="btn btn-danger btn-flat">Reset</button>
					</div>
				</form>
			</div>
			</div>
		</div>
	</div>
	</section>
