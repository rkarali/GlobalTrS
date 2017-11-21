	<?php
							foreach($veri3 as $row) {
							?>
							
                        <li>
                            <a class="booking-item" href="<?= base_url(); ?>home/rezervasyonYap/<?=$row->CarsID ?>">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="booking-item-car-img">
                                            <img src="<?=base_url() ?>uploads/<?=$row->ArabaResim ?>" alt="Image Alternative text" title="Image Title" />
                                            
											<h3><p class="booking-title">Sirket:<?=$row->TransferCompanysName ?> </p></h3>
											<p class="booking-item-car-title">Maserati GranTurismo: </p>
											
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <ul class="booking-item-features booking-item-features-sign clearfix">
                                                    <li rel="tooltip" data-placement="top" title="Passengers"><i class="fa fa-male"></i><span class="booking-item-feature-sign">x 6</span>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="Doors"><i class="im im-car-doors"></i><span class="booking-item-feature-sign">x 2</span>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="Baggage Quantity"><i class="fa fa-briefcase"></i><span class="booking-item-feature-sign">x 1</span>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="Automatic Transmission"><i class="im im-shift-auto"></i><span class="booking-item-feature-sign">auto</span>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="Diesel Vehicle"><i class="im im-diesel"></i><span class="booking-item-feature-sign">diesel</span>
                                                    </li>
                                                </ul>
                                                <ul class="booking-item-features booking-item-features-small clearfix">
                                                    <li rel="tooltip" data-placement="top" title="Air Conditioning"><i class="im im-air"></i>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="Satellite Navigation"><i class="im im-satellite"></i>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="FM Radio"><i class="im im-fm"></i>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="Stereo CD/MP3"><i class="im im-stereo"></i>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="Tilt Steering Wheel"><i class="im im-car-wheel"></i>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="Power Windows"><i class="im im-car-window"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4">
                                                <ul class="booking-item-features booking-item-features-dark">
                                                    <li rel="tooltip" data-placement="top" title="Terminal Pickup"><i class="fa fa-plane"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3"><span class="booking-item-price"><?=$row->CarsPrice ?></span><span>/day</span>
                                        <p class="booking-item-flight-class">Luxury</p>
                                        <span class="btn btn-primary">Select</span>
                                    </div>
                                </div>
                            </a>
                        </li>
						<?php 
                        } 
                    ?>