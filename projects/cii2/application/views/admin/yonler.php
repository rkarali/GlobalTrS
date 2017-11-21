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
								Yönler
							</a>
						</li>
						
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
					<div class="portlet-body form">
							<form action="<?=base_url()?>admin/Directions/kaydet"  method="POST" >
								<div class="form-body">
									<div class="form-group">
										<input type="text" class="form-control" name="departurePoint" placeholder="Kalkış Noktası">
									</div>
								
								
									<div class="form-group">
											<input type="text" class="form-control" name="destination" placeholder="Varış Noktası">
									</div>
								
								
									<div class="form-group">
											<input type="text" class="form-control" name="duration" placeholder="Süre">
									</div>
								
								
									<div class="form-group">
											<input type="text" class="form-control" name="distance" placeholder="Mesafe">
									</div>
								
								
									<div class="form-group">
											<input type="text" class="form-control" name="minsBefore" placeholder="Dk. Önce Rezervasyon">
									</div>
								
								
									<div class="form-group">
											<input type="text" class="form-control" name="fee" placeholder="Ücret">
									</div>
								</div>
								<div class="form-actions">
									<button type="submit" class="btn blue">Kaydet</button>
									<button type="button" class="btn default">Vazgeç</button>
								</div>
							</form>
					</div>
									
						<span class="title"> 
							En Son Eklenen Yerler 
						</span>
						<div class="portlet-body">
							<div class="table-toolbar">
							</div>
							<div id="sample_editable_1_wrapper" class="dataTables_wrapper" role="grid"><div class="row"><div class="col-md-6 col-sm-12"><div id="sample_editable_1_length" class="dataTables_length"></a></div></div></div></div><div class="table-scrollable"><table class="table table-striped table-hover table-bordered dataTable" id="sample_editable_1" aria-describedby="sample_editable_1_info">
							<thead>
							<tr role="row">
							<th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" style="width: 174px;" aria-label="
									 Username">
									 Kalkış Noktası
							</th>
							<th class="sorting" role="columnheader" tabindex="0" aria-controls="sample_editable_1" rowspan="1" colspan="1" style="width: 233px;" aria-label="
									 Full Name
								: activate to sort column ascending">
									 Varış Noktası
							</th>
							<th class="sorting" role="columnheader" tabindex="0" aria-controls="sample_editable_1" rowspan="1" colspan="1" style="width: 125px;" aria-label="
									 Points
								: activate to sort column ascending">
									 Zaman
							</th>
							<th class="sorting" role="columnheader" tabindex="0" aria-controls="sample_editable_1" rowspan="1" colspan="1" style="width: 161px;" aria-label="
									 Notes
								: activate to sort column ascending">
									 Km
							</th>
							<th class="sorting" role="columnheader" tabindex="0" aria-controls="sample_editable_1" rowspan="1" colspan="1" style="width: 125px;" aria-label="
									 Points
								: activate to sort column ascending">
									 Dk. Önce Rezervasyon
							</th>
							<th class="sorting" role="columnheader" tabindex="0" aria-controls="sample_editable_1" rowspan="1" colspan="1" style="width: 125px;" aria-label="
									 Points
								: activate to sort column ascending">
									 Ücret
							</th>
							
							<th class="sorting" role="columnheader" tabindex="0" aria-controls="sample_editable_1" rowspan="1" colspan="1" style="width: 127px;" aria-label="
									 Delete
								: activate to sort column ascending">
									 Sil
							</th>
							</tr>
							</thead>
							
							<tbody role="alert" aria-live="polite" aria-relevant="all">
							<tr class="odd">
								<?php
								foreach($veri as $rs)
								{
								?>
								<td class="center ">
									 <?=$rs->departurePoint?>
								</td>
								<td class="center ">
									 <?=$rs->destination?>
								</td>
								<td class="center ">
									 <?=$rs->duration?>
								</td>
								<td class="center ">
									 <?=$rs->distance?>
								</td>
								<td class="center ">
									 <?=$rs->minsBefore?>
								</td>
								<td class="center ">
									 <?=$rs->fee?>
								</td>
								
								<td class=" ">
									<button onclick ="location.href='<?=base_url()?>admin/Directions/sil/<?=$rs->id?>'" class="btn btn-danger"><i class="fa fa-pencil">
								</td>
								
							</tr>
								<?php 
								}
								?></tbody></table></div><div class="row"><div class="col-md-5 col-sm-12"><div class="dataTables_info" id="sample_editable_1_info"></div></div><div class="col-md-7 col-sm-12"><div class="dataTables_paginate paging_bootstrap"><ul class="pagination" style="visibility: visible;"><li class="prev disabled"><a href="#" title="Prev"><i class="fa fa-angle-left"></i></a></li><li class="active"><a href="#">1</a></li><li><a href="#">2</a></li><li class="next"><a href="#" title="Next"><i class="fa fa-angle-right"></i></a></li></ul></div></div></div></div>
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