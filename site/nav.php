    <!-- Fixed navbar Bottom -->
    <nav class="navbar navbar-default navbar-fixed-bottom">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo $baseurl ?>">POWV</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="<?php if ($pg == '' ) {echo 'active' ;} ?> "><a href="<?php echo $baseurl ?>">Home</a></li>
            <li><a href="https://www.youtube.com/channel/UCgHk--E2R3G0gdQpU42e1NA" target="_blank">Youtube</a></li>
            <li class="<?php if ($pg != '' ) {echo 'active';} ?>  dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Heroes<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="<?PHP echo $baseurl ?>heroes/Bastion">Bastion</a></li>
                <li><a href="<?PHP echo $baseurl ?>heroes/D.VA">D.VA</a></li>
                <li><a href="<?PHP echo $baseurl ?>heroes/Genji">Genji</a></li>
                <li><a href="<?PHP echo $baseurl ?>heroes/Hanzo">Hanzo</a></li>
                <li><a href="<?PHP echo $baseurl ?>heroes/Junkrat">Junkrat</a></li>
                <li><a href="<?PHP echo $baseurl ?>heroes/Lucio">Lucio</a></li>
                <li><a href="<?PHP echo $baseurl ?>heroes/Mccree">Mccree</a></li>
                <li><a href="<?PHP echo $baseurl ?>heroes/Mei">Mei</a></li>
                <li><a href="<?PHP echo $baseurl ?>heroes/Mercy">Mercy</a></li>
                <li><a href="<?PHP echo $baseurl ?>heroes/Pharah">Pharah</a></li>
                <li><a href="<?PHP echo $baseurl ?>heroes/Reaper">Reaper</a></li>
                <li><a href="<?PHP echo $baseurl ?>heroes/Reinheart">Reinheart</a></li>
                <li><a href="<?PHP echo $baseurl ?>heroes/Roadhog">RoadHog</a></li>
                <li><a href="<?PHP echo $baseurl ?>heroes/Soldier">Soldier</a></li>
                <li><a href="<?PHP echo $baseurl ?>heroes/Symmetra">Symmetra</a></li>
                <li><a href="<?PHP echo $baseurl ?>heroes/Torbjorn">Torbjorn</a></li>
                <li><a href="<?PHP echo $baseurl ?>heroes/Tracer">Tracer</a></li>
                <li><a href="<?PHP echo $baseurl ?>heroes/Widowmaker">Widowmaker</a></li>
                <li><a href="<?PHP echo $baseurl ?>heroes/Winston">Winston</a></li>
                <li><a href="<?PHP echo $baseurl ?>heroes/Zarya">Zarya</a></li>
                <li><a href="<?PHP echo $baseurl ?>heroes/Zenyatta">Zenyatta</a></li>                
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?php echo $baseurl ?>js/bootstrap.min.js"></script>
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-28356809-19', 'auto');
  ga('send', 'pageview');

</script>