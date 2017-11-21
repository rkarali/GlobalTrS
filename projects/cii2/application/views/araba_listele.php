  <?php
  $toplam=0;
  for($i=0; $i<count($veri4);$i++)
  {
	$toplam+=$veri4[$i]->transfercompanysCarCount;
  }
  echo $toplam;
?>


<script type="text/javascript">


function veriGetir(){

        var data = {
            'fiyatBaslangic': $('.irs-from').html(),
            'fiyatBitis': $('.irs-to').html(),
        }
        
        $.ajax({
            type: "POST",
            url: "<?=base_url();?>home/veriGetir?parametreler="+JSON.stringify(data),
            contentType: "application/json; charset=utf-8",
            success: function(result) {
                $('.booking-list').html(result)
            },
            error: function() {
                
                alert('veri bulunamadı!');
                $('.booking-list').html('');
            }
        });
}

$( document ).ready(function() {

    $("#ionrange").ionRangeSlider({
            type: "double",
            min: 0,
            max: 375,
            from: 34,
            to: 165,
            step: 2,
            onStart: function(data) {
                
            },
            onChange: function(data) {
                
                
            },
            onFinish: function(data) {
               
                veriGetir();

            },
            onUpdate: function(data) {
                
            }
        });
});
</script>

<script type="text/javascript">
    $(document).ready(function(){
        var selected = [];
        var s_selected;
        console.log($("#class-check input[type=checkbox]"));
        $("#class-check input[type=checkbox]").on( "click", function(){
            if(this.checked){
                selected.push(this.name);
                s_selected = selected.join();
                console.log(s_selected);
            }else{
                if(selected.indexOf(this.name) == 0){
                    selected.shift();
                }else{
                    selected.splice(selected.indexOf(this.name),selected.indexOf(this.name));
                }
                
                s_selected = selected.join();
                console.log(s_selected);
            }
        });
    });
</script>
            

<div class="container">
            <ul class="breadcrumb">
                <li><a href="index.html">Home</a>
                </li>
                <li><a href="#">Turkey</a>
                </li>
                <li><a href="#"><?=$veri3[0]->TransferCompanysCity?></a>
                </li>
                <li class="active"><?=$veri3[0]->TransferCompanysCity?> City Rental Cars</li>
            </ul>
            <div class="mfp-with-anim mfp-hide mfp-dialog mfp-search-dialog" id="search-dialog">
                <h3>Search for Car</h3>
                <form id="form" method="post" action="<?=base_url()?>home/CarSearch"> 
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group form-group-icon-left"><i class="fa fa-map-marker input-icon input-icon-hightlight"></i>
                                <label>Pick Up Location</label>
                                <input class="typeahead form-control"  name="nereden" value="<?=$veri2[0]?>" placeholder="City or Airport" type="text" />
                            </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group form-group-icon-left"><i class="fa fa-map-marker input-icon input-icon-hightlight"></i>
                                <label>Drop Off Location</label>
                                <input class="typeahead form-control"  name="nereye" value="<?=$veri2[1]?>" placeholder="City or Airport" type="text" />
                            </div>
                        </div>
                    </div>
                    <div class="input-daterange" data-date-format="MM d, D">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                    <label>Pick-up Date</label>
                                    <input class="form-control" name="start" value="<?=$veri2[2]?>"  type="text" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-clock-o input-icon input-icon-highlight"></i>
                                    <label>Drop-off Time</label>
                                    <input class="time-pick form-control" value="12:00 AM" type="text" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                    <label>Drop-off Date</label>
                                    <input class="form-control" name="end" value="<?=$veri2[3]?>" type="text"/>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-clock-o input-icon input-icon-highlight"></i>
                                    <label>Pick-up Time</label>
                                    <input class="time-pick form-control" value="12:00 AM" type="text"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-lg" type="submit">Search for cars</button>
                </form>
            </div>
            <h3 class="booking-title"><?=$toplam?> Rental Cars in <?=$veri3[0]->TransferCompanysCity?> on <?=$veri2[2]?> - <?=$veri2[3]?><small><a class="popup-text" href="#search-dialog" data-effect="mfp-zoom-out">Change search</a></small></h3>
            <div class="booking-item-dates-change mb30">
                <form class="input-daterange" data-date-format="MM d, D">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group form-group-icon-left"><i class="fa fa-map-marker input-icon input-icon-hightlight"></i>
                                <label>Pick Up Location</label>
                                <input class="typeahead form-control" value="<?=$veri2[0]?>" placeholder="City or Airport" type="text" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-hightlight"></i>
                                        <label>Check in</label>
                                        <input class="form-control" value="<?=$veri2[2]?>"  type="text" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-group-icon-left"><i class="fa fa-clock-o input-icon input-icon-hightlight"></i>
                                        <label>Time</label>
                                        <input class="time-pick form-control" value="12:00 AM" type="text" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group form-group-icon-left"><i class="fa fa-map-marker input-icon input-icon-hightlight"></i>
                                <label>Drop Off Location</label>
                                <input class="typeahead form-control" value="<?=$veri2[1]?>" placeholder="City or Airport" type="text" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-hightlight"></i>
                                        <label>Check out</label>
                                        <input class="form-control" value="<?=$veri2[3]?>" type="text" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-group-icon-left"><i class="fa fa-clock-o input-icon input-icon-hightlight"></i>
                                        <label>Time</label>
                                        <input class="time-pick form-control" value="12:00 AM" type="text" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <aside class="booking-filters text-white">
                        <h3>Filter By:</h3>
                        <ul class="list booking-filters-list">
                            <li>
                                <h5 class="booking-filters-title">Passengers Quantity</h5>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />2 Passengers (11)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />3 Passengers (2)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />4 Passengers (17)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />4+ Passengers (60)</label>
                                </div>
                            </li>
                            <li>
                                <h5 class="booking-filters-title">Price </h5>
                               
                                <div id="ionrange"> </div>
                            </li>
                           <li>
    <h5 class="booking-filters-title" id="asd">Car group</h5>
    <div id="class-check">
    <div class="checkbox">
        <label>
            <input class="i-check" id="deneme" type="checkbox" name="economy" />Economy (20)</label>
    </div>
    <div class="checkbox">
        <label>
            <input class="i-check" id="deneme"  type="checkbox" name="compact"/>compact (20)</label>
    </div>
    <div class="checkbox">
        <label>
            <input class="i-check" id="deneme"  type="checkbox" name="midsize" />midsize (11)</label>
    </div>
    <div class="checkbox">
        <label>
            <input class="i-check" type="checkbox" />stabdart (12)</label>
    </div>
    <div class="checkbox">
        <label>
            <input class="i-check" type="checkbox" />Fullsize (5)</label>
    </div>
    <div class="checkbox">
        <label>
            <input class="i-check" type="checkbox" />Premium/Luxury (3)</label>
    </div>
    <div class="checkbox">
        <label>
            <input class="i-check" type="checkbox" />Minivan (5)</label>
    </div>
    <div class="checkbox">
        <label>
            <input class="i-check" type="checkbox" />Crossover (10)</label>
    </div>
    <div class="checkbox">
        <label>
            <input class="i-check" type="checkbox" />SUV (12)</label>
    </div>
    </div>
</li>
                <li>
                                <h5 class="booking-filters-title">Transmission</h5>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Automatic (80)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Manual (25)</label>
                                </div>
                            </li>
                            <li>
                                <h5 class="booking-filters-title">Engine</h5>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Gas (60)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Diesel (35)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Hybrid (22)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Electric (15)</label>
                                </div>
                            </li>
                            <li>
                                <h5 class="booking-filters-title">Equipment</h5>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Climate Control (47)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Air Conditioning (66)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Satellite Navigation (30)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Power Door Locks (35)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />FM Radio (70)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Stereo CD/MP3 (53)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Tilt Steering Wheel (42)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Power Windows (68)</label>
                                </div>
                            </li>
                            <li>
                                <h5 class="booking-filters-title">Pickup Options</h5>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Terminal Pickup (80)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Shuttle Bus to Car (25)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Meet and Greet (13)</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox" />Car with Driver (7)</label>
                                </div>
                            </li>
                        </ul>
                    </aside>
                </div>
                <div class="col-md-9">
                    <div class="nav-drop booking-sort">
                        <h5 class="booking-sort-title"><a href="#">Sort: Price (low to high)<i class="fa fa-angle-down"></i><i class="fa fa-angle-up"></i></a></h5>
                        <ul class="nav-drop-menu">
                            <li><a href="#">Price (high to low)</a>
                            </li>
                            <li><a href="#">Car Name (A-Z)</a>
                            </li>
                            <li><a href="#">Car Name (Z-A)</a>
                            </li>
                            <li><a href="#">Car Type</a>
                            </li>
                        </ul>
                    </div>
                    <ul class="booking-list">
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
											<p class="booking-item-car-title"><?=$row->ArabaMarkasi ?> </p>
											
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
                 
                            
                    </ul>
                    <div class="row">
                        <div class="col-md-6">
                            <p><small>108 rental cars in New York. &nbsp;&nbsp;Showing 1 – 15</small>
                            </p>
                            <ul class="pagination">
                                <li class="active"><a href="#">1</a>
                                </li>
                                <li><a href="#">2</a>
                                </li>
                                <li><a href="#">3</a>
                                </li>
                                <li><a href="#">4</a>
                                </li>
                                <li><a href="#">5</a>
                                </li>
                                <li><a href="#">6</a>
                                </li>
                                <li><a href="#">7</a>
                                </li>
                                <li class="dots">...</li>
                                <li><a href="#">43</a>
                                </li>
                                <li class="next"><a href="#">Next Page</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 text-right">
                            <p>Not what you're looking for? <a class="popup-text" href="#search-dialog" data-effect="mfp-zoom-out">Try your search again</a>
                            </p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="gap"></div>
        </div>
<script type="text/javascript">
    $(document).ready(function(){
        var selected = [];
        var s_selected;
        /*
        $("#class-check:first input[type=checkbox]").on( "click", function(){
            if(this.checked){
                selected.push(this.name);
                s_selected = selected.join();
                console.log(s_selected);
            }else{
                if(selected.indexOf(this.name) == 0){
                    selected.shift();
                }else{
                    selected.splice(selected.indexOf(this.name),selected.indexOf(this.name));
                }
                
                s_selected = selected.join();
                console.log(s_selected);
            }
        });
  */
        
    });
</script> 