<?PHP 
$pg = "Mccree";  
include'../header.php' 
?>
<body id="active7" >
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
    <li role="presentation" ><a href="#Escort" aria-controls="Escort" role="tab" data-toggle="tab">Escort (3)</a></li>
    <li role="presentation" class="active"><a href="#Hybrid" aria-controls="Hybrid" role="tab" data-toggle="tab">Hybrid (3)</a></li>
    <li role="presentation"><a href="#Control" aria-controls="Control" role="tab" data-toggle="tab">Control (4)</a></li>
  </ul>
  
  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane " id="Assault">
     <iframe src="https://www.youtube.com/embed/4QmFxYjnFYE" frameborder="0" allowfullscreen></iframe>
    <iframe src="https://www.youtube.com/embed/ETyNGkgFlf4" frameborder="0" allowfullscreen></iframe>
    <iframe src="https://www.youtube.com/embed/3qFHoffcO_E" frameborder="0" allowfullscreen></iframe>
    <iframe src="https://www.youtube.com/embed/mm-kdNBiqgM" frameborder="0" allowfullscreen></iframe>
    </div>
    <div role="tabpanel" class="tab-pane " id="Escort">
    <iframe src="https://www.youtube.com/embed/AcM3kIenjOs" frameborder="0" allowfullscreen></iframe>
    <iframe src="https://www.youtube.com/embed/zuH0gh-r9Eg" frameborder="0" allowfullscreen></iframe>
    <iframe src="https://www.youtube.com/embed/64TRFmjBaVM" frameborder="0" allowfullscreen></iframe>
    <iframe src="https://www.youtube.com/embed/CZ6Ox5o7GrA" frameborder="0" allowfullscreen></iframe>

    </div>
    <div role="tabpanel" class="tab-pane active" id="Hybrid">
    <iframe src="https://www.youtube.com/embed/jqsDpN1OHxE" frameborder="0" allowfullscreen></iframe>
    <iframe src="https://www.youtube.com/embed/NDNaso-JBBM" frameborder="0" allowfullscreen></iframe>
	  <iframe src="https://www.youtube.com/embed/EqOM1tBvW6g" frameborder="0" allowfullscreen></iframe>
    </div>
    <div role="tabpanel" class="tab-pane" id="Control">
    <iframe src="https://www.youtube.com/embed/Ry__IVmf7sM" frameborder="0" allowfullscreen></iframe>
    <iframe src="https://www.youtube.com/embed/hGjk52_sjTE" frameborder="0" allowfullscreen></iframe>
    <iframe src="https://www.youtube.com/embed/uZAQlCxsrB4" frameborder="0" allowfullscreen></iframe>
     <iframe src="https://www.youtube.com/embed/9ohNYfasvL4" frameborder="0" allowfullscreen></iframe>
     
    
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
