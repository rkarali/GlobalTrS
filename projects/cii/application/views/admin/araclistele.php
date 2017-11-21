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
								Araç Listeleme Sayfası
							</a>
						</li>
						
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
	
						<div class="portlet-title">
							
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config">
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
							<div id="sample_editable_1_wrapper" class="dataTables_wrapper" role="grid"><div class="row"><div class="col-md-6 col-sm-12"><div id="sample_editable_1_length" class="dataTables_length"></a></div></div></div></div><div class="table-scrollable"><table class="table table-striped table-hover table-bordered dataTable" id="sample_editable_1" aria-describedby="sample_editable_1_info">
							<thead>
							<tr role="row">
								<th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" style="width: 30px;" aria-label="
									 Username">
									 ID
								</th>
								<th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" style="width: 174px;" aria-label="
									 Username">
									 Adı
								</th>
								<th class="sorting" role="columnheader" tabindex="0" aria-controls="sample_editable_1" rowspan="1" colspan="1" style="width: 233px;" aria-label="
									 Full Name
								: activate to sort column ascending">
									 Türü
								</th>
								<th class="sorting" role="columnheader" tabindex="0" aria-controls="sample_editable_1" rowspan="1" colspan="1" style="width: 40px;" aria-label="
									 Points
								: activate to sort column ascending">
									 Bagaj(kg)
								</th>
								<th class="sorting" role="columnheader" tabindex="0" aria-controls="sample_editable_1" rowspan="1" colspan="1" style="width: 40px;" aria-label="
									 Notes
								: activate to sort column ascending">
									 Yolcu
								</th>
								<th class="sorting" role="columnheader" tabindex="0" aria-controls="sample_editable_1" rowspan="1" colspan="1" style="width: 89px;" aria-label="
									 Edit
								: activate to sort column ascending">
									 Resim
								</th>
								<th class="sorting" role="columnheader" tabindex="0" aria-controls="sample_editable_1" rowspan="1" colspan="1" style="width: 89px;" aria-label="
									 Edit
								: activate to sort column ascending">
									 Düzenle
								</th>
								<th class="sorting" role="columnheader" tabindex="0" aria-controls="sample_editable_1" rowspan="1" colspan="1" style="width: 127px;" aria-label="
									 Delete
								: activate to sort column ascending">
									 Sil
								</th>
							</tr>
							</thead>
							
							<tbody role="alert" aria-live="polite" aria-relevant="all"><tr class="odd">
							<?php
							foreach($veri as $rs)
							{
							?>
									<td><?=$rs->id?></td>
								
									<td><?=$rs->tradeMark?></td>
								
								
									<td><?=$rs->type?></td>
								
								
									<td><?=$rs->baggage?></td>
								
								
									<td><?=$rs->capacity?></td>
								
								
									<td><?=$rs->image?></td>
								
								<td class=" ">
									<button onclick ="location.href='<?=base_url()?>admin/Araclar/duzenle/<?=$rs->id?>'" class="btn btn-primary"><i class="fa fa-edit ">
								</td>
								<td class=" ">
									<button onclick ="location.href='<?=base_url()?>admin/Araclar/sil/<?=$rs->id?>'" class="btn btn-danger"><i class="fa fa-pencil">
								</td>
							</tr>
							<?php 
							}
							?>
							
							</tbody>
							</table></div><div class="row"><div class="col-md-5 col-sm-12"><div class="dataTables_info" id="sample_editable_1_info"></div></div><div class="col-md-7 col-sm-12"><div class="dataTables_paginate paging_bootstrap"><ul class="pagination" style="visibility: visible;"><li class="prev disabled"><a href="#" title="Prev"><i class="fa fa-angle-left"></i></a></li><li class="active"><a href="#">1</a></li><li></li><li class="next"><a href="#" title="Next"><i class="fa fa-angle-right"></i></a></li></ul></div></div></div></div>
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