     <div class="container">

      <div class="starter-template">
        <div class="jumbotron">
            <h1><?php echo "Ahoj " . $meno;?></h1>
            <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
        </div>
          <div class="row">
            <div class="span-12 panel panel-default">
              <div class="panel-body">
                  Basic panel example
              </div>
            </div>
          </div>
          <div class="row">
              <div class="col-md-6">
                  <div class="span-6 panel panel-default">
                      <div class="panel-body">
                          <h2><?php echo $dnes;?></h2>
                      </div>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="span-6 panel panel-default">
                      <div class="panel-body">
                          <table class="table table-condensed table-striped">
                              <?php foreach ($teploty as $key => $value) {?>
                              <tr><td><?php echo $key;?></td><td><?php echo $value;?></td></tr>
                              <?php }?>
                          </table>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div><!-- /.container -->