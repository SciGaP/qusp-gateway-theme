<div class="container">
    <div class="text-center">
      <h2 class="text-center">About</h2>
      <hr class="separation-line blue-bg"/>
      <div class="col-md-6 credits">
        <div class="thumbnail" style="border:none">
          <img class="img-responsive" src=""{{ URL::to('/') }}/themes/{{Session::get('theme')}}/assets/img/scigap-header-logo.png" alt="SciGaP">
          <div class="caption">
            <p>
              SciGaP is a hosted service with a public API that science gateways can use to manage
              applications and workflows running on remote supercomputers, as well as other services. Gateway
              developers can thus concentrate their efforts on building their scientific communities and not
              worry about operations.
            </p>
            <p>
              Science Gateway Platform as a Service (SciGaP) provides application programmer interfaces (APIs)
              to hosted generic infrastructure services that can be used by domain science communities to
              create Science Gateways.
            </p>
            <p><a href="http://scigap.org/"
              target="_blank">Learn more <span class="glyphicon glyphicon-new-window"></span></a></p>
          </div>
        </div>
      </div>
      <div class="col-md-6 credits">
        <div class="thumbnail" style="border:none">
          <img src="{{ URL::to('/') }}/themes/{{Session::get('theme')}}/assets/img/airavata-logo.png" width="260px" alt="Apache Airavata">
          <div class="caption">
            <p>
              Apache Airavata is a software framework which is dominantly used to build Web-based science
              gateways and assist to compose, manage, execute and monitor large scale applications and
              workflows on distributed computing resources such as local clusters, supercomputers, national
              grids, academic and commercial clouds. Airavata mainly supports long running applications and
              workflows on distributed computational resources.
            </p>
            <p><a href="http://airavata.apache.org/" target="_blank">Learn more <span
              class="glyphicon glyphicon-new-window"></span></a></p>
    </div>
  </div>  
</div>