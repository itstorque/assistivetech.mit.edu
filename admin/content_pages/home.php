<h3 class="ui header">Our Mission Section</h3>

<div class="ui form">
  <div class="field">
    <label>Mission Statement</label>
    <textarea id="home-mission"></textarea>
  </div>
</div>

<br>

<h3 class="ui header">Watch Our Video Button</h3>

<div class="ui form">
  <div class="field">
    <label>Video URL</label>
    <input type="text" id="home-video">
  </div>
</div>

<br>

<h3 class="ui header">ATHack Section</h3>

<div class="ui form">
  <div class="field">
    <label>What is ATHack</label>
    <textarea rows="4" id="home-athack-what"></textarea>
  </div>
  <div class="field">
    <label>When is ATHack</label>
    <textarea rows="4" id="home-athack-when"></textarea>
  </div>
  <div class="field">
    <label>How Do I Sign Up</label>
    <textarea rows="4" id="home-athack-signup"></textarea>
  </div>
</div>

<?php  ?>

<br>

<h3 class="ui header">Sponsors Section</h3>

<br>

<div class="ui fluid multiple selection dropdown" id="home-sponsors">
  <!-- This will receive comma separated value like OH,TX,WY !-->
  <input name="states" type="hidden">
  <i class="dropdown icon"></i>
  <div class="default text">Sponsors</div>
  <div class="menu">
    <div class="item" data-value="microsoft">Microsoft</div>
    <div class="item" data-value="google">Google</div>
    <div class="item" data-value="beaverworks">Beaverworks</div>
    <div class="item" data-value="ODL">ODL</div>
    <div class="item" data-value="edg">Edgerton</div>
    <div class="item" data-value="MITEECS">MIT EECS</div>
    <div class="item" data-value="mitmeche2">MIT MECHE</div>
    <div class="item" data-value="akamai">Akamai</div>
    <div class="item" data-value="MITSAO2">MIT SAO</div>
    <div class="item" data-value="schoolOfEng">MIT School of Engineering</div>
    <div class="item" data-value="mitsds">MIT SDS</div>
    <div class="item" data-value="perkins">Perkins</div>
    <div class="item" data-value="mediaLab">Media Lab</div>
    <div class="item" data-value="spaulding2">Spaulding</div>
    <div class="item" data-value="TBP">Tau Beta Pi</div>
    <div class="item" data-value="oculus">Oculus</div>
    <div class="item" data-value="yahoo">Yahoo</div>
    <div class="item" data-value="eone">Eone</div>
    <div class="item" data-value="golden_microsoft">Golden Microsoft</div>
    <div class="item" data-value="golden_google">Golden Google</div>
    <div class="item" data-value="golden_beaverworks">Golden Beaverworks</div>
    <div class="item" data-value="golden_ODL">Golden ODL</div>
    <div class="item" data-value="golden_edg">Golden Edgerton</div>
    <div class="item" data-value="golden_MITEECS">Golden MIT EECS</div>
    <div class="item" data-value="golden_mitmeche2">Golden MIT MECHE</div>
    <div class="item" data-value="golden_akamai">Golden Akamai</div>
    <div class="item" data-value="golden_MITSAO2">Golden MIT SAO</div>
    <div class="item" data-value="golden_schoolOfEng">Golden MIT School of Engineering</div>
    <div class="item" data-value="golden_mitsds">Golden MIT SDS</div>
    <div class="item" data-value="golden_perkins">Golden Perkins</div>
    <div class="item" data-value="golden_mediaLab">Golden Media Lab</div>
    <div class="item" data-value="golden_spaulding2">Golden Spaulding</div>
    <div class="item" data-value="golden_TBP">Golden Tau Beta Pi</div>
    <div class="item" data-value="golden_oculus">Golden Oculus</div>
    <div class="item" data-value="golden_yahoo">Golden Yahoo</div>
    <div class="item" data-value="golden_eone">Golden Eone</div>
  </div>
</div>

<br><br>

<button class="ui fluid button positive large" id="updateHome">
  Update Page
</button>
<br>
<button class="ui fluid button large" id="clearHome">
  Clear Changes
</button>
<br>
