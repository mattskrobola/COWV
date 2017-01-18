<?PHP 
$pg = "Genji";  
include'../header.php' 
?>
<body id="active3" >
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
    <li role="presentation" ><a href="#Assault" aria-controls="Assault" role="tab" data-toggle="tab">Assault (2)</a></li>
    <li role="presentation" class="active"><a href="#Escort" aria-controls="Escort" role="tab" data-toggle="tab">Escort (1)</a></li>
    <li role="presentation"><a href="#Hybrid" aria-controls="Hybrid" role="tab" data-toggle="tab">Hybrid (3)</a></li>
    <li role="presentation"><a href="#Control" aria-controls="Control" role="tab" data-toggle="tab">Control (1)</a></li>
  </ul>
  
  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane " id="Assault">
    <iframe src="https://www.youtube.com/embed/AFIZgVz3ToM" frameborder="0" allowfullscreen></iframe>
    <iframe src="https://www.youtube.com/embed/DDlf2QbF7SA" frameborder="0" allowfullscreen></iframe>
    
    </div>
    <div role="tabpanel" class="tab-pane active" id="Escort">
    <iframe src="https://www.youtube.com/embed/u6-ChoM6TeQ" frameborder="0" allowfullscreen></iframe>

			<iframe src="https://www.youtube.com/embed/NyAZjhz4TvI" frameborder="0" allowfullscreen></iframe>    
    </div>
    <div role="tabpanel" class="tab-pane" id="Hybrid">
    <iframe src="https://www.youtube.com/embed/BdEVxQSD44w" frameborder="0" allowfullscreen></iframe>
      <iframe src="https://www.youtube.com/embed/XVZnNMAWNW8" frameborder="0" allowfullscreen></iframe>
      <iframe src="https://www.youtube.com/embed/FrR2XlbBvQY" frameborder="0" allowfullscreen></iframe>
      
    </div>
    <div role="tabpanel" class="tab-pane" id="Control">
    <iframe src="https://www.youtube.com/embed/Cysog5KRf8Y" frameborder="0" allowfullscreen></iframe>
    <iframe src="https://www.youtube.com/embed/4_64Be1gkWk" frameborder="0" allowfullscreen></iframe>
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
