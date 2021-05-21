<aside class="main-sidebar">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
		<!-- Sidebar user panel -->
		<!-- search form -->
		<!-- sidebar menu: : style can be found in sidebar.less -->
		<ul class="sidebar-menu">

			<li class="header">
				<h5 class="text-center">
					<? foreach ($user as $s) {
						echo $s["username"];
					} ?>
				</h5>
			</li>
			<li class="treeview">
				<a href="<?php echo site_url() ?>">
					<i class="glyphicon glyphicon-envelope"></i><span>Verifikasi email</span>
				</a>
			</li>
			<li class="treeview">
				<a href="<?php echo site_url('welcome/akunverifi') ?>">
					<i class="glyphicon glyphicon-ok"></i><span>Email terverifikasi</span>
				</a>
			</li>
			<br>
			<li class="treeview">
				<div class="text-center">
					<a href="<?= base_url('login/logout') ?>">
						<button type="submit" class="btn btn-primary"><span>Keluar </span><i class="glyphicon glyphicon-off"></i></button>
					</a>
				</div>
			</li>
		</ul>
	</section>
	<!-- /.sidebar -->
</aside>