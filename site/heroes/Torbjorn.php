<?PHP 
$pg = "Torbjorn";  
include'../header.php' 
?>
<body id="active18" >
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
    <li role="presentation" class="active"><a href="#Assault" aria-controls="Assault" role="tab" data-toggle="tab">Assault (3)</a></li>
    <li role="presentation" ><a href="#Escort" aria-controls="Escort" role="tab" data-toggle="tab">Escort (1)</a></li>
    <li role="presentation"><a href="#Hybrid" aria-controls="Hybrid" role="tab" data-toggle="tab">Hybrid (2)</a></li>
    <li role="presentation"><a href="#Control" aria-controls="Control" role="tab" data-toggle="tab">Control (1)</a></li>
  </ul>
  
  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="Assault">
   <iframe src="https://www.youtube.com/embed/gyxIp4os2Go" frameborder="0" allowfullscreen></iframe>
	<iframe src="https://www.youtube.com/embed/u8UJM-Swpu4" frameborder="0" allowfullscreen></iframe>
  <iframe src="https://www.youtube.com/embed/t52IhVwLLmY" frameborder="0" allowfullscreen></iframe>
    </div>
    <div role="tabpanel" class="tab-pane " id="Escort">
     <iframe src="https://www.youtube.com/embed/oksREaqNlAM" frameborder="0" allowfullscreen></iframe>
    
    </div>
    <div role="tabpanel" class="tab-pane" id="Hybrid">
    <iframe src="https://www.youtube.com/embed/fdoTFhymQZ0" frameborder="0" allowfullscreen></iframe>
    <iframe src="https://www.youtube.com/embed/1GeHpwxdPyA" frameborder="0" allowfullscreen></iframe>
    
    </div>
    <div role="tabpanel" class="tab-pane" id="Control">
    <iframe src="https://www.youtube.com/embed/Hxl2IJn-zuo" frameborder="0" allowfullscreen></iframe>
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
