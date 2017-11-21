        <div class="gap"></div>
<div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h3>Customer</h3>
                    <p>Sign in to your <a href="#">Traveler account</a> for fast booking.</p>
                    <form id="form" method="post" action="<?=base_url()?>home/CreateReservation">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>First & Last Name</label>
                                    <input class="form-control" name="adi" type="text" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input class="form-control" name="telefon" type="text" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>E-mail</label>
                                    <input class="form-control" name="mail" type="text" />
                                </div>
                            </div>
                        </div>
                        <div class="checkbox">
                          
                             <div class="row">    
                    <div class="col-md-6">
                            <h4>Pay via Credit/Debit Card</h4>
                           
                                <div class="clearfix">
                                    <div class="form-group form-group-cc-number">
                                        <label>Card Number</label>
                                        <input class="form-control" name="kartno" placeholder="xxxx xxxx xxxx xxxx" type="text" /><span class="cc-card-icon"></span>
                                    </div>
                                    <div class="form-group form-group-cc-cvc">
                                        <label>CVC</label>
                                        <input class="form-control" name="gkodu" placeholder="xxxx" type="text" />
                                    </div>
                                </div>
                                <div class="clearfix">
                                    <div class="form-group form-group-cc-name">
                                        <label>Cardholder Name</label>
                                        <input class="form-control" name="kartsahibi" type="text" />
                                    </div>
                                    <div class="form-group form-group-cc-date">
                                        <label>Valid Thru</label>
                                        <input class="form-control" name="tarih" placeholder="mm/yy" type="text" />
                                    </div>
                                </div>
                                <div class="checkbox checkbox-small">
                                    <label>
                                        <input class="i-check" type="checkbox" checked/>Add to My Cards</label>
                                </div>
                                
                           
                        </div>
                    </div>
                             <button class="btn btn-primary btn-lg" type="submit">Create Reservation</button>
                        </div>
                    </form>
                    <hr>
                   
                </div>

                <div class="col-md-4">
                    <div class="booking-item-payment">
                        <header class="clearfix">
                            <a class="booking-item-payment-img" href="#">
                                <img src="<?= base_url(); ?>uploads/<?=$veri[0]->ArabaResim?>" alt="Image Alternative text" title="hotel 1" />
                            </a>
                            <h5 class="booking-item-payment-title"><a href="#">Duplex Greenwich</a></h5>
                            <ul class="icon-group booking-item-rating-stars">
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                            </ul>
                        </header>
                        <ul class="booking-item-payment-details">
                            <li>
                                <h5>Booking for 7 nights</h5>
                                <div class="booking-item-payment-date">
                                    <p class="booking-item-payment-date-day">April, 26</p>
                                    <p class="booking-item-payment-date-weekday">Saturday</p>
                                </div><i class="fa fa-arrow-right booking-item-payment-date-separator"></i>
                                <div class="booking-item-payment-date">
                                    <p class="booking-item-payment-date-day">May, 3</p>
                                    <p class="booking-item-payment-date-weekday">Saturday</p>
                                </div>
                            </li>
                            <li>
                                <h5>Property (2 Guests)</h5>
                                <ul class="booking-item-payment-price">
                                    <li>
                                        <p class="booking-item-payment-price-title">7 days</p>
                                        <p class="booking-item-payment-price-amount">$170<small>/per day</small>
                                        </p>
                                    </li>
                                    <li>
                                        <p class="booking-item-payment-price-title">Taxes</p>
                                        <p class="booking-item-payment-price-amount">$15<small>/per day</small>
                                        </p>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <p class="booking-item-payment-total">Total trip: <span>$1,295</span>
                        </p>
                    </div>
                </div>
            </div>
			  <div class="gap"></div>
			          </div>