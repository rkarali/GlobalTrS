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
					<h3 class="page-title">Ödemeler</h3>
					<ul class="page-breadcrumb breadcrumb">
						<li>
							<i class="fa fa-shopping-cart"></i></li>
						<li>
							<a href="#">
								Listele
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
								<i class="fa fa-money"></i>En Son Ödemeler
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
									 Ödeme Türü
								</th>
								<th>
									 Ödeme Durumu
								</th>
								<th>
									 IP
								</th>
								<th>
									 Tutar
								</th>
								<th>
									 İşlem Tarihi
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
									 <?=$rs->paymentMethod?>
								</td>
								<td>
									 <?=$rs->paymentStatus?>
								</td>
								<td>
									 <?=$rs->ip?>
								</td>
								<td>
									 <?=$rs->amount?>
								</td>
								<td>
									 <?=$rs->transactionDate?>
								</td>
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