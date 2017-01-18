<?PHP 
$pg = "Hanzo";  
include'../header.php' 
?>
<body id="active4" >
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
    <li role="presentation"><a href="#Hybrid" aria-controls="Hybrid" role="tab" data-toggle="tab">Hybrid (0)</a></li>
    <li role="presentation"><a href="#Control" aria-controls="Control" role="tab" data-toggle="tab">Control (0)</a></li>
  </ul>
  
  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane " id="Assault">
   <iframe src="https://www.youtube.com/embed/yy-gs8Y0wPw" frameborder="0" allowfullscreen></iframe>					
					<iframe src="https://www.youtube.com/embed/bvk1vzT0Gu0" frameborder="0" allowfullscreen></iframe>					
					<iframe src="https://www.youtube.com/embed/A2ony4j1s48" frameborder="0" allowfullscreen></iframe>
          <iframe src="https://www.youtube.com/embed/kxrsSYmWpFY" frameborder="0" allowfullscreen></iframe>
          
    </div>
    <div role="tabpanel" class="tab-pane active" id="Escort">
    <iframe src="https://www.youtube.com/embed/orCsOT4Yx30" frameborder="0" allowfullscreen></iframe>					
		<iframe src="https://www.youtube.com/embed/ywqvxIyWPwY" frameborder="0" allowfullscreen></iframe>
    </div>
    <div role="tabpanel" class="tab-pane" id="Hybrid">
    </div>
    <div role="tabpanel" class="tab-pane" id="Control">
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
