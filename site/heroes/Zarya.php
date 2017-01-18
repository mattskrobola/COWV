<?PHP 
$pg = "Zarya";  
include'../header.php' 
?>
<body id="active16" >
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
    <li role="presentation" ><a href="#Assault" aria-controls="Assault" role="tab" data-toggle="tab">Assault (4)</a></li>
    <li role="presentation" class="active"><a href="#Escort" aria-controls="Escort" role="tab" data-toggle="tab">Escort (2)</a></li>
    <li role="presentation"><a href="#Hybrid" aria-controls="Hybrid" role="tab" data-toggle="tab">Hybrid (3)</a></li>
    <li role="presentation"><a href="#Control" aria-controls="Control" role="tab" data-toggle="tab">Control (1)</a></li>
  </ul>
  
  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane " id="Assault">
    <iframe src="https://www.youtube.com/embed/5yc61Z9MeAU" frameborder="0" allowfullscreen></iframe>
    <iframe src="https://www.youtube.com/embed/6ngQOxH327U" frameborder="0" allowfullscreen></iframe>
   <iframe src="https://www.youtube.com/embed/09hF73xIMkk" frameborder="0" allowfullscreen></iframe>
   <iframe src="https://www.youtube.com/embed/wZ5VejQMM_M" frameborder="0" allowfullscreen></iframe>
    </div>
    <div role="tabpanel" class="tab-pane active" id="Escort">
    <iframe src="https://www.youtube.com/embed/YGjgYqkcwfg" frameborder="0" allowfullscreen></iframe>
    <iframe src="https://www.youtube.com/embed/0tmfNCNbGEY" frameborder="0" allowfullscreen></iframe>
<iframe src="https://www.youtube.com/embed/t2IOKQk0Xyo" frameborder="0" allowfullscreen></iframe>
    </div>
    <div role="tabpanel" class="tab-pane" id="Hybrid">
    <iframe src="https://www.youtube.com/embed/0tmfNCNbGEY" frameborder="0" allowfullscreen></iframe>
    <iframe src="https://www.youtube.com/embed/5hwuxEGGz3I" frameborder="0" allowfullscreen></iframe>
     <iframe src="https://www.youtube.com/embed/vY2-FmlBM3M" frameborder="0" allowfullscreen></iframe>
    
    </div>
    <div role="tabpanel" class="tab-pane" id="Control">
    <iframe src="https://www.youtube.com/embed/Yq5fiB6z0NU" frameborder="0" allowfullscreen></iframe>
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
