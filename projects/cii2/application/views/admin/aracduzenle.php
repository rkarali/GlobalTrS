<script src="<?=base_url()?>ckeditor/ckeditor.js"></script>
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
					<h3 class="page-title">Araçlar</h3>
					<ul class="page-breadcrumb breadcrumb">
						<li>
							<i class="glyphicon glyphicon-road"></i></li>
						<li>
							<a href="#">
								Araç Düzenle
							</a>
						</li>
						
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
	<div class="portlet-body">
							<div class="tabbable">
								<ul class="nav nav-tabs nav-tabs-lg">
									<li class="active">
										<a href="#tab_1" data-toggle="tab">
											 Genel Ayarlar
										</a>
									</li>
	<!--								<li>
										<a href="#tab_2" data-toggle="tab">
											 Araç Özellikleri
										</a>
									</li>
									<li>
										<a href="#tab_3" data-toggle="tab">
											 Diğer Ayarlar
										</a>
									</li> -->
								</ul>
								<div class="tab-content">
									<div class="tab-pane active" id="tab_1">
									<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-reorder"></i> Araç Özellikleri
							</div>
							
						</div>
						<div class="portlet-body form">
							 
								<form action="<?=base_url()?>admin/Araclar/guncelle/<?=$veri[0]->id?>"  method="POST" >
								<div class="form-body">
									<div class="form-group">
										
										<input type="text" value="<?=$veri[0]->tradeMark?>" class="form-control" name="tradeMark" placeholder="Araç Adı">
									</div>
									<div class="form-group">
										
										<input type="text" value="<?=$veri[0]->type?>" class="form-control" name="type" placeholder="Araç Türü">
									</div>
									<div class="form-group">
										
										<input type="text" value="<?=$veri[0]->capacity?>" class="form-control" name="capacity" placeholder="Koltuk Sayısı">
									</div>
									<div class="form-group">
										
										<input type="text" value="<?=$veri[0]->baggage?>" class="form-control" name="baggage" placeholder="Bagaj(kg)">
									</div>
									<div class="fileinput fileinput-new" data-provides="fileinput">
															<div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
																<img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt=""/>
															</div>
															<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;">
															</div>
															<div>
																<span class="btn default btn-file">
																	<span class="fileinput-new">
																		 Gözat..
																	</span>	
															</div>
									</div>
									<div class="form-group">
										
										<textarea class="form-control" value="<?=$veri[0]->explanation?>" name="explanation" rows="10" >Ek Özellikler</textarea>
										
									</div>
									<script>
									// Replace the <textarea id="editor1"> with a CKEditor
									// instance, using default configuration.
									CKEDITOR.replace( 'explanation' );
									</script>
								</div>
								<div class="form-actions">
									<button type="submit" class="btn blue">Kaydet</button>
									<button type="button" class="btn default">Vazgeç</button>
								</div>
							</form>   
						
						</div>
					</div>
					
				<!--							<div class="tab-pane" id="tab_2">
											
													<div class="tab-pane" id="tab_3">
													
													</div>
											</div> -->
									</div>
								</div>
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