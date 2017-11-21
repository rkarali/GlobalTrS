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
							<i class="glyphicon glyphicon-user"></i></li>
						<li>
							<a href="#">
								Profilim
							</a>
						</li>
						
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
	<div class="row profile">
				<div class="col-md-12">
					<!--BEGIN TABS-->
					<div class="tabbable tabbable-custom tabbable-full-width">
						<ul class="nav nav-tabs">
							<li class="active">
								<a href="#tab_1_1" data-toggle="tab">
									 Genel Bakış
								</a>
							</li>
							<li>
								<a href="#tab_1_3" data-toggle="tab">
									 Hesap
								</a>
							</li>
							
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="tab_1_1">
								<div class="row">
									<div class="col-md-3">
										<ul class="list-unstyled profile-nav">
											<li>
												<img src="<?=base_url()?>assets/admin/img/profile/profile-img.png" class="img-responsive" alt=""/>
												<a href="#" class="profile-edit">
													 düzenle
												</a>
											</li>
											
										</ul>
									</div>
									<div class="col-md-9">
										<div class="row">
											<div class="col-md-8 profile-info">
												<h1>Ramazan KARALI</h1>
												<p>
													 Karabük Üniversitesi bilgisayar mühendisliği öğrencisi.
												</p>
												<p>
													<a href="#">
														 www.facebook.com/rkarali
													</a>
												</p>
												<ul class="list-inline">
													<li>
														<i class="fa fa-map-marker"></i> Türkiye
													</li>
													<li>
														<i class="fa fa-calendar"></i> 21 Mar 1992
													</li>
													<li>
														<i class="fa fa-briefcase"></i> Developer
													</li>
													
												</ul>
											</div>
											<!--end col-md-8-->
											<div class="col-md-4">
												</div>
											<!--end col-md-4-->
										</div>
										<!--end row-->
										</div>
								</div>
							</div>
							<!--tab_1_2-->
							<div class="tab-pane" id="tab_1_3">
								<div class="row profile-account">
									<div class="col-md-3">
										<ul class="ver-inline-menu tabbable margin-bottom-10">
											<li class="active">
												<a data-toggle="tab" href="#tab_1-1">
													<i class="fa fa-cog"></i> Kişisel Bilgiler
												</a>
												<span class="after">
												</span>
											</li>
											<li>
												<a data-toggle="tab" href="#tab_2-2">
													<i class="fa fa-picture-o"></i> Profil Resmi Değiştir
												</a>
											</li>
											<li>
												<a data-toggle="tab" href="#tab_3-3">
													<i class="fa fa-lock"></i> Şifre Değiştir
												</a>
											</li>
										</ul>
									</div>
									<div class="col-md-9">
										<div class="tab-content">
											<div id="tab_1-1" class="tab-pane active">
												<form role="form" action="#">
													<div class="form-group">
														<label class="control-label">Ad</label>
														<input type="text" placeholder="Ramazan" class="form-control"/>
													</div>
													<div class="form-group">
														<label class="control-label">Soyad</label>
														<input type="text" placeholder="KARALI" class="form-control"/>
													</div>
													<div class="form-group">
														<label class="control-label">Telefon</label>
														<input type="text" placeholder="(506)877 45 59" class="form-control"/>
													</div>
													<div class="form-group">
														<label class="control-label">İlgi Alanları</label>
														<input type="text" placeholder="Design, Web etc." class="form-control"/>
													</div>
													<div class="form-group">
														<label class="control-label">Meslek</label>
														<input type="text" placeholder="Web Developer" class="form-control"/>
													</div>
													<div class="form-group">
														<label class="control-label">Hakkında</label>
														<textarea class="form-control" rows="3" placeholder="hackerkisilik!!"></textarea>
													</div>
													<div class="form-group">
														<label class="control-label">Website Url</label>
														<input type="text" placeholder="http://www.facebook.com/rkarali" class="form-control"/>
													</div>
													<div class="margiv-top-10">
														<a href="#" class="btn green">
															 Değişiklikleri Kaydet
														</a>
														<a href="#" class="btn default">
															 Vazgeç
														</a>
													</div>
												</form>
											</div>
											<div id="tab_2-2" class="tab-pane">
											
												<form action="#" role="form">
													<div class="form-group">
														<div class="fileinput fileinput-new" data-provides="fileinput">
															<div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
																<img src="<?=base_url()?>assets/admin/img/profile/profile-img.png" alt=""/>
															</div>
															<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;">
															</div>
															<div>
																<span class="btn default btn-file">
																	
																	<input type="file" name="...">
																</span>
																<a href="#" class="btn default fileinput-exists" data-dismiss="fileinput">
																	 Kaldır
																</a>
															</div>
														</div>
													</div>
													<div class="margin-top-10">
														<a href="#" class="btn green">
															 Kaydet
														</a>
														<a href="#" class="btn default">
															 Vazgeç
														</a>
													</div>
												</form>
											</div>
											<div id="tab_3-3" class="tab-pane">
												<form action="#">
													<div class="form-group">
														<label class="control-label">Eski Şifre</label>
														<input type="password" class="form-control"/>
													</div>
													<div class="form-group">
														<label class="control-label">Yeni Şifre</label>
														<input type="password" class="form-control"/>
													</div>
													<div class="form-group">
														<label class="control-label">Şifreyi tekrar giriniz.</label>
														<input type="password" class="form-control"/>
													</div>
													<div class="margin-top-10">
														<a href="#" class="btn green">
															 Şifreyi Değiştir
														</a>
														<a href="#" class="btn default">
															 Vazgeç
														</a>
													</div>
												</form>
											</div>
											</div>
									</div>
									<!--end col-md-9-->
								</div>
							</div>
							
						</div>
					</div>
					<!--END TABS-->
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