<?PHP 
$pg = "Widowmaker";  
include'../header.php' 
?>
<body id="active17" >
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
    <li role="presentation" ><a href="#Assault" aria-controls="Assault" role="tab" data-toggle="tab">Assault (0)</a></li>
    <li role="presentation" class="active"><a href="#Escort" aria-controls="Escort" role="tab" data-toggle="tab">Escort (4)</a></li>
    <li role="presentation"><a href="#Hybrid" aria-controls="Hybrid" role="tab" data-toggle="tab">Hybrid (1)</a></li>
    <li role="presentation"><a href="#Control" aria-controls="Control" role="tab" data-toggle="tab">Control (1)</a></li>
  </ul>
  
  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane " id="Assault">
   
    </div>
    <div role="tabpanel" class="tab-pane active" id="Escort">
    <iframe src="https://www.youtube.com/embed/sCjy1EV9lIc" frameborder="0" allowfullscreen></iframe>
    <iframe src="https://www.youtube.com/embed/KKSp14U848Y" frameborder="0" allowfullscreen></iframe>
<iframe src="https://www.youtube.com/embed/k1zzAgxRoso" frameborder="0" allowfullscreen></iframe>
<iframe src="https://www.youtube.com/embed/DjTTNqGu0kA" frameborder="0" allowfullscreen></iframe>
<iframe src="https://www.youtube.com/embed/wNCmnV2E7q8" frameborder="0" allowfullscreen></iframe>


   </div>
    <div role="tabpanel" class="tab-pane" id="Hybrid">
    <iframe src="https://www.youtube.com/embed/Ot5D_ju9Wu8" frameborder="0" allowfullscreen></iframe>
    <iframe src="https://www.youtube.com/embed/mh_46VinlXU" frameborder="0" allowfullscreen></iframe>
    
    </div>
    <div role="tabpanel" class="tab-pane" id="Control">
    <iframe src="https://www.youtube.com/embed/M_3hwjGV16Y" frameborder="0" allowfullscreen></iframe>
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
