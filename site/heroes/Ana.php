<?PHP 
$pg = "Ana";  
include'../header.php' 
?>
<body id="active8" >
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
    <li role="presentation" ><a href="#Escort" aria-controls="Escort" role="tab" data-toggle="tab">Escort (4)</a></li>
    <li role="presentation"><a href="#Hybrid" aria-controls="Hybrid" role="tab" data-toggle="tab">Hybrid (1)</a></li>
    <li role="presentation"><a href="#Control" aria-controls="Control" role="tab" data-toggle="tab">Control (1)</a></li>
  </ul>
  
  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="Assault">
    <iframe src="https://www.youtube.com/embed/3uyXhVGVXnk" frameborder="0" allowfullscreen></iframe>
    </div>
    <div role="tabpanel" class="tab-pane " id="Escort">
    <iframe src="https://www.youtube.com/embed/RudI5qC8XJY" frameborder="0" allowfullscreen></iframe>
    <iframe src="https://www.youtube.com/embed/DBICNyMnoAo" frameborder="0" allowfullscreen></iframe>
     <iframe src="https://www.youtube.com/embed/okrzhLNo4Sw" frameborder="0" allowfullscreen></iframe>
    <iframe src="https://www.youtube.com/embed/e4eqJAfg_P0" frameborder="0" allowfullscreen></iframe>
    
    </div>
    <div role="tabpanel" class="tab-pane" id="Hybrid">
    <iframe src="https://www.youtube.com/embed/sDoLw3tKgWE" frameborder="0" allowfullscreen></iframe>
    </div>
    <div role="tabpanel" class="tab-pane" id="Control">
    <iframe src="https://www.youtube.com/embed/-L4USdPs3eU" frameborder="0" allowfullscreen></iframe>
    
    
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
