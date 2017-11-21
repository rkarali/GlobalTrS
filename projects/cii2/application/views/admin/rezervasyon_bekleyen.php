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
					<h3 class="page-title">Transfer</h3>
					<ul class="page-breadcrumb breadcrumb">
						<li>
							<i class="glyphicon glyphicon-road"></i></li>
						<li>
							<a href="#">
								Rezervasyonlar
							</a>
						</li>
						
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box green">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-globe"></i>Bekleyen Rezervasyonlar
							</div>
							<div class="tools">
								<a href="javascript:;" class="reload">
								</a>
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body">
							<table class="table table-striped table-bordered table-hover" id="sample_1">
							<thead>
							<tr>
								<th>
									 ID
								</th>
								<th>
									 Ad Soyad
								</th>
								<th>
									 Cep Telefonu
								</th>
								<th>
									 Mail
								</th>
								<th>
									 Tarih
								</th>
								<th>
									 Fiyat
								</th>
								<th>
									 Araç
								</th>
								<th>
									 Ödeme
								</th>
								<th>
									 Onayla
								</th>
								<th>
									 Reddet
								</th>
							</tr>
							</thead>
							<tbody>
							
							<tr>
								<?php
							foreach($veri as $rs)
							{
							?>
									<td><?=$rs->id?></td>
								
									<td><?=$rs->ADI?></td>
											<td><?=$rs->email?></td>
								
									<td><?=$rs->phonenumber?></td>
								
								
							
									<td><?=$rs->kartno?></td>
												<td><?=$rs->gkodu?></td>
												<td><?=$rs->kartsahibi?></td>
												
												<td><?=$rs->tarih?></td>
								
								<td class=" ">
									<button onclick ="location.href='<?=base_url()?>admin/Rezervasyonlar/onayla/<?=$rs->id?>'" class="btn btn-primary"><i class="fa fa-edit ">
								</td>
								<td class=" ">
									<button onclick ="location.href='<?=base_url()?>admin/Rezervasyonlar/sil/<?=$rs->id?>'" class="btn btn-danger"><i class="fa fa-pencil">
								</td>
							</tr>
							<?php 
							}
							?>
							</tr>
							</tbody>
							</table>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<!-- END EXAMPLE TABLE PORTLET-->
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