<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<div class="page-sidebar navbar-collapse collapse">
			<!-- add "navbar-no-scroll" class to disable the scrolling of the sidebar menu -->
			<!-- BEGIN SIDEBAR MENU -->
			<ul class="page-sidebar-menu" data-auto-scroll="true" data-slide-speed="200">
				<li class="sidebar-toggler-wrapper">
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler hidden-phone">
					</div>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
				</li>
				<li class="sidebar-search-wrapper">
					<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
					<form class="sidebar-search" action="#" method="POST">
						<div class="form-container">
							<div class="input-box">
								<a href="javascript:;" class="remove">
								</a>
								<input type="text" placeholder="Search..."/>
								<input type="button" class="submit" value=" "/>
							</div>
						</div>
					</form>
					<!-- END RESPONSIVE QUICK SEARCH FORM -->
				</li>
				<li class="start active ">
					<a href="<?=base_url();?>admin/home/index">
						<i class="fa fa-home"></i>
						<span class="title">
							Anasayfa
						</span>
						<span class="selected">
						</span>
					</a>
				</li>
				<li>
					<a href="javascript:;">
						<i class="glyphicon glyphicon-road"></i>
						<span class="title">
							Transfer
						</span>
						<span class="arrow ">
						</span>
					</a>  
					<ul class="sub-menu">
						<li>
							<a href="<?=base_url();?>admin/home/transfer">
								 Transfer ayarları
							</a>
						</li>
						<li>
							<a href="<?=base_url();?>admin/Araclar/aracEkle">
								 Araç Ekle
							</a>
						</li>
						<li>
							<a href="<?=base_url();?>admin/Araclar/araclistele">
								 Araç Listele
							</a>
						</li>
						<li>
							<a href="<?=base_url();?>admin/home/hizmetyerilistele">
								 Hizmet Yeri Listele
							</a>
						</li>
						<li>
							<a href="<?=base_url();?>admin/Directions/yonler">
								 Yönler
							</a>
						</li>
						<li>
							<a href="<?=base_url();?>admin/Rezervasyonlar/rezervasyon_bekleyen">
								 Bekleyen Rezervasyonlar
							</a>
						</li>
						<li>
							<a href="<?=base_url();?>admin/Rezervasyonlar/rezervasyon_onaylanan">
								 Onaylanan Rezervasyonlar
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="<?=base_url();?>admin/home/odemeler">
						<i class="fa fa-shopping-cart"></i>
						<span class="title">
							Ödemeler
						</span>
						<span class="arrow ">
						</span>
					</a>
					
				</li>
				<li>
					<a href="javascript:;">
						<i class="fa fa-cogs"></i>
						<span class="title">
							Genel Ayarlar
						</span>
						<span class="arrow ">
						</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="<?=base_url();?>admin/home/siteayarlari">
								 Site Ayarları
							</a>
						</li>
						<li>
							<a href="<?=base_url();?>admin/home/popupayarlari">
								 Pop-Up Ayarları
							</a>
						</li>
						<li>
							<a href="<?=base_url();?>admin/home/galeriayarlari">
								 Galeri Ayarları
							</a>
						</li>
						<li>
							<a href="<?=base_url();?>admin/home/mailayarlari">
								 Mail Ayarları
							</a>
						</li>
						<li>
							<a href="<?=base_url();?>admin/home/smsayarlari">
								 Sms Ayarları
							</a>
						</li>
						<li>
							<a href="<?=base_url();?>admin/home/dilayarlari">
								 Dil Ayarları
							</a>
						</li>
						<li>
							<a href="<?=base_url();?>admin/home/parabirim">
								 Para Birim Ayarları
							</a>
						</li>
					</ul> 
				</li>
	<!--			<li>
					<a href="<?=base_url();?>admin/home/yetkilendirme">
						<i class="fa fa-sitemap"></i>
						<span class="title">
							Yetkilendirme
						</span>
						<span class="arrow ">
						</span>
					</a>
				</li>   -->
				<li>
					<a href="javascript:;">
						<i class="fa fa-user"></i>
						<span class="title">
							Kullanıcılar
						</span>
						<span class="arrow ">
						</span>
					</a>
					<ul class="sub-menu">
						<li>
					<a href="<?=base_url();?>admin/home/kullaniciekle">
								 Kullanıcı Ekle
							</a>
						</li>
						<li>
					<a href="<?=base_url();?>admin/home/kullanicilistesi">
								 Kullanıcı Listesi & Düzenle
							</a>
						</li>
						<li>
					<a href="<?=base_url();?>admin/home/profilim">
								 Profilim
							</a>
						</li>
					</ul>
				</li>
	<!--			<li>
					<a href="javascript:;">
						<i class="fa fa-file-text"></i>
						<span class="title">
							Sayfalar
						</span>
						<span class="arrow ">
						</span>
					</a>
					<ul class="sub-menu">
						<li>
					<a href="<?=base_url();?>admin/home/sayfaekle">
								 Sayfa Ekle
							</a>
						</li>
						<li>
					<a href="<?=base_url();?>admin/home/sayfalistele">
								 Sayfa Listele & Düzenle
							</a>
						</li>
						<li>
					<a href="<?=base_url();?>admin/home/sayfasirasi">
								 Sayfa Sırası
							</a>
						</li>
					</ul>
				</li>  -->
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
	</div>
	<!-- END SIDEBAR -->
