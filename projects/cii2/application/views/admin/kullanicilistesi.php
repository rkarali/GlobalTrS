<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Modal title</h4>
						</div>
						<div class="modal-body">
							 Widget settings form goes here
						</div>
						<div class="modal-footer">
							<button type="button" class="btn blue">Save changes</button>
							<button type="button" class="btn default" data-dismiss="modal">Close</button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<div class="row">
			  <div class="col-md-12">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<h3 class="page-title">Kullanıcılar</h3>
					<ul class="page-breadcrumb breadcrumb">
						<li>
							<i class="fa fa-user"></i></li>
						<li>
							<a href="#">
								Listele
							</a>
						</li>
						
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
	<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-edit"></i>Kullanıcılar Tablosu
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								
								<a href="javascript:;" class="reload">
								</a>
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body">
							<div class="table-toolbar">
								
							</div>
							<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
							<thead>
							<tr>
								<th>
									 Kullanıcı Adı
								</th>
								<th>
									 Email
								</th>
								<th>
									 IP
								</th>
								<th>
									 Son Giriş
								</th>
								<th>
									 Düzenle
								</th>
								<th>
									 Sil
								</th>
							</tr>
							</thead>
							<tbody>
							<tr>
							<?php
							foreach($veri as $rs)
							{
							?>
								<td>
									 <?=$rs->username?>
								</td>
								<td>
									 <?=$rs->email?>
								</td>
								<td>
									 <?=$rs->ip?>
								</td>
								<td class="center">
								<?=$rs->lastLogin?>
								</td>
								<td>
									<a href="#" class="btn red">
												<i class="fa fa-edit"></i>
											</a>
								</td>
								<td>
									<a href="#" class="btn purple">
												<i class="fa fa-times"></i>
											</a>
								</td>
							<?php 
							}
							?>
							</tr>
							</tbody>
							</table>
						</div>
					</div>
					
					
											
<div class="clearfix">
			</div>
			
			<div class="clearfix">
			</div>
			
			</div>
			<div class="clearfix">
			</div>
			
			
					<!-- END PORTLET-->
				</div>
			</div>
		</div>
	</div>
	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->