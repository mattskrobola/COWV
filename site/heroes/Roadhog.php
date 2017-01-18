<?PHP 
$pg = "Roadhog";  
include'../header.php' 
?>
<body id="active12" >
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
    <li role="presentation" ><a href="#Assault" aria-controls="Assault" role="tab" data-toggle="tab">Assault (1)</a></li>
    <li role="presentation" class="active"><a href="#Escort" aria-controls="Escort" role="tab" data-toggle="tab">Escort (5)</a></li>
    <li role="presentation"><a href="#Hybrid" aria-controls="Hybrid" role="tab" data-toggle="tab">Hybrid (1)</a></li>
    <li role="presentation"><a href="#Control" aria-controls="Control" role="tab" data-toggle="tab">Control (0)</a></li>
  </ul>
  
  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane " id="Assault">
   <iframe src="https://www.youtube.com/embed/50mr7dvrRlc" frameborder="0" allowfullscreen></iframe>
    </div>
    <div role="tabpanel" class="tab-pane active" id="Escort">
    <iframe src="https://www.youtube.com/embed/g9kWww7CC5Q" frameborder="0" allowfullscreen></iframe>
    <iframe src="https://www.youtube.com/embed/TvAQI1QW6Uk" frameborder="0" allowfullscreen></iframe>
     <iframe src="https://www.youtube.com/embed/-TIUluFgczU" frameborder="0" allowfullscreen></iframe>
    <iframe src="https://www.youtube.com/embed/Oj1KnuqdLDI" frameborder="0" allowfullscreen></iframe>
  <iframe src="https://www.youtube.com/embed/5Ml5QMKD3EQ" frameborder="0" allowfullscreen></iframe>
    <iframe src="https://www.youtube.com/embed/QhN8NCyBOHo" frameborder="0" allowfullscreen></iframe>
    </div>
    <div role="tabpanel" class="tab-pane" id="Hybrid">
    <iframe src="https://www.youtube.com/embed/zg_JGd6wiOg" frameborder="0" allowfullscreen></iframe>
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
