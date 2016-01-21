<?php
	if ( wp_is_mobile() ) {
		$bookOnline = get_field('book_online_mobile', 'option');	
	} else {
		$bookOnline = get_field('book_online', 'option'); //Doesn't appear to be used anywhere?
	} 
?>

<div class="front-page-booker book-online-div clearfix">

  <a  target="_blank" href="<?php echo $bookOnline; ?>"><i class="icon-book-online-arrow [ book-online-btn-mobile ]"></i> Book Online</a>

  <form method="post" id="booker-form" class="clearfix">

    <div class="fp-booker-column">
      <!-- Arrival Date Picker -->
      <label class="bw-block__label u-textCapitalize u-block u-textLeft fp-booker-item" for="start">Arrival</label>
      <div class="datepicker-img-wrapper">
        <div class="datepicker-img"></div>
      </div>
      <span class="bw-block__field u-textCapitalize u-block fp-booker-item datepicker-wrapper">
        <input class="datepicker" placeholder="Date" id="start" type="text">  
      </span>
    </div>

    <div class="fp-booker-column">
      <!-- Duration picker -->
      <label class="bw-block__label u-textCapitalize u-block u-textLeft fp-booker-item" for="guests">Nights</label>
      <span class="bw-block__field u-textCapitalize u-block fp-booker-item"> 
        <select id="nights" name="">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
          <option value="19">19</option>
          <option value="20">20</option>
          <option value="21">21</option>
          <option value="22">22</option>
          <option value="23">23</option>
          <option value="24">24</option>
          <option value="25">25</option>
          <option value="26">26</option>
          <option value="27">27</option>
          <option value="28">28</option>
          <option value="29">29</option>
          <option value="30">30</option>
          <option value="31">31</option>
        </select>
      </span>
    </div>
    
    <div class="fp-booker-column bw-block clearfix">
      <a class="bookOnlineBtn fp-booker-item" href="" target="_blank" id="quickbooklink">Book Now</a>
    </div>

    <!--Hidden Field-->
    <input type="hidden" id="form-url" value="http://fe.avvio.com/convert/site/Gliffaes%20Country%20House%20Hotel/en/mda.php?"> <!-- Form Action -->
  
  </form>

  <p class="best-rates">Best rate Guaranteed at the only 4* location in the Brecon Beacons</p>

</div>

