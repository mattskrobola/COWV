<?PHP 
$pg = "Pharah";  
include'../header.php' 
?>
<body id="active13" >
<div class="container"> 
  <!-- Example row of columns -->
  <div class="row">
    <div class="col-md-12">
      <h1><?php echo $pg ?></h1>      <!-- PUT HERO HERE --> 
    </div>
  </div>
  <div class="row">
    <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist" id="myTabs" >
    <li role="presentation" class="active"><a href="#Assault" aria-controls="Assault" role="tab" data-toggle="tab">Assault (1)</a></li>
    <li role="presentation" ><a href="#Escort" aria-controls="Escort" role="tab" data-toggle="tab">Escort (0)</a></li>
    <li role="presentation"><a href="#Hybrid" aria-controls="Hybrid" role="tab" data-toggle="tab">Hybrid (2)</a></li>
    <li role="presentation"><a href="#Control" aria-controls="Control" role="tab" data-toggle="tab">Control (2)</a></li>
  </ul>
  
  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="Assault">
   <iframe src="https://www.youtube.com/embed/2EO7CY39sww" frameborder="0" allowfullscreen></iframe>
    </div>
    <div role="tabpanel" class="tab-pane " id="Escort">
    </div>
    <div role="tabpanel" class="tab-pane" id="Hybrid">
    <iframe src="https://www.youtube.com/embed/h_FNnYdFTVk" frameborder="0" allowfullscreen></iframe>
	<iframe src="https://www.youtube.com/embed/qNI_vDPnpKI" frameborder="0" allowfullscreen></iframe>
    </div>
    <div role="tabpanel" class="tab-pane" id="Control">
    <iframe src="https://www.youtube.com/embed/kCcFYwN3AsI" frameborder="0" allowfullscreen></iframe>
    <iframe src="https://www.youtube.com/embed/q5lcEO7Gkxo" frameborder="0" allowfullscreen></iframe>
    
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
