<?PHP 
$pg = "D.VA";  
include'../header.php' 
?>
<body id="active1">
<div class="container"> 
  <!-- Example row of columns -->
  <div class="row">
    <div class="col-md-12">
      <h1><?php echo $pg ?></h1>
      <!-- PUT HERO HERE --> 
    </div>
  </div>
  <div class="row">
    <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist" id="myTabs" >
    <li role="presentation" class="active"><a href="#Assault" aria-controls="Assault" role="tab" data-toggle="tab">Assault (2)</a></li>
    <li role="presentation"><a href="#Escort" aria-controls="Escort" role="tab" data-toggle="tab">Escort (3)</a></li>
    <li role="presentation"><a href="#Hybrid" aria-controls="Hybrid" role="tab" data-toggle="tab">Hybrid (0)</a></li>
    <li role="presentation"><a href="#Control" aria-controls="Control" role="tab" data-toggle="tab">Control (1)</a></li>
  </ul>
  
  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="Assault">
    <iframe src="https://www.youtube.com/embed/ZaiHsMdetvk" frameborder="0" allowfullscreen></iframe>
    <iframe src="https://www.youtube.com/embed/OaYuAo7Jnxk" frameborder="0" allowfullscreen></iframe>
    </div>
    <div role="tabpanel" class="tab-pane" id="Escort">
     <iframe src="https://www.youtube.com/embed/GctJADTRuG0" frameborder="0" allowfullscreen></iframe>
    <iframe src="https://www.youtube.com/embed/Y2xC7qvmFkA" frameborder="0" allowfullscreen></iframe>
	<iframe src="https://www.youtube.com/embed/BYG2xP_mpyM" frameborder="0" allowfullscreen></iframe>
    </div>
    <div role="tabpanel" class="tab-pane" id="Hybrid">
    </div>
    <div role="tabpanel" class="tab-pane" id="Control">
    <iframe src="https://www.youtube.com/embed/TvTSbgykvBo" frameborder="0" allowfullscreen></iframe>
    </div>
  </div>

  </div>
</div>
<?php include '../nav.php';?>
<script>
$('#myTabs a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})
</script>
</body>
