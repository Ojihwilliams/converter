
<!DOCTYPE html>

<html lang="en">
<head>
   <meta charset="utf-8">
   <title>untitled</title>
   <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
   <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
   <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
</head>
<body>
  <nav class="navbar navbar-custom" role="navigation">
    <div class="container">
    <div class="col-md-6 col-md-offset-4">
      <div class="navbar-header">
        <h1 class="navbar-brand text-center"><span><i class="fa fa-random"></i></span>  OWE-Simple Converter</h1>
      </div>
    </div>
    
    </div>      
  </nav>

    <!-- Main content -->
    <div class="container">
       
              <div class="vtabs">
                <ul class="nav nav-tabs tabs-vertical" role="tablist">
                  <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab"><span class="hidden-sm-up"><i class="fa fa-home"></i></span> <span class="hidden-xs-down">Home</span> </a> </li>
                  <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#length" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Length</span></a> </li>
                  <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#weight" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Weight</span></a> </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                  <div style="margin-bottom: 10px;" class="tab-pane active" id="home" role="tabpanel">

                    <div class="jumbotron">
                      <div class="text-center page-header">
                        <h1>WELCOME <br> TO <br>OWE CONVERTER</h1>
                        </div>
                      <p class="text-center">Convert your numerical length and weight from one unit to another</p>

                    </div>
                      <!--End jumbotron-->
                </div>
                 
                  <div style="margin-bottom: 50px;"  class="tab-pane p-20" id="length" role="tabpanel">
                    <div class="convertArea">
                      <form method="post">
                        <h1 class= "text-center">Convert</h1>
                        <div class="form-group">
                          <input id="lengthInput" type="text"  class="form-control input-lg" name="length" placeholder="Insert Length To be Converted">
                        </div>
                        
                        <div class="form-group"> 
                          <select class="custom-select form-control input-lg" id="inputUnit" name="inputUnit">
                            <option selected disabled value="">Select Unit</option>
                            <option value="meter">Meter</option>
                            <option value="inches">Inch</option>
                            <option value="yard">Yard</option>
                            <option value="feet">Feet</option>
                            <option value="mile">Mile</option>
                          </select>
                        </div>
                        <h1 class="text-center ini">Into</h1>
                        <div class="form-group"> 
                          <select class="form-control custom-select input-lg" id="outputUnit" name="outputUnit">
                            <option selected disabled value="">Select Unit</option>
                            <option value="meter">Meter</option>
                            <option value="inches">Inch</option>
                            <option value="yard">Yard</option>
                            <option value="feet">Feet</option>
                            <option value="mile">Mile</option>
                          </select>
                        </div>
                      </form>
                      <div style="margin-top: 50px;" class="text-center">
                      <i class="fa fa-arrow-down fa-2x"></i> 
                        <div class="form-group"> 
                          <input id="LengthOutput" type="text" class="form-control input-lg" name="lengthOutput" value="0">
                        </div>
                      </div>
                    </div>
                  </div>
                    
                  <div class="tab-pane p-20" id="weight" role="tabpanel">
                    <div style="margin-bottom: 50px;"  class="convertArea">
                      <form method="post">
                        <h1 class="text-center">Convert</h1>
                        <div class="form-group"> 
                          <input id="weigthInput" type="text" class="form-control input-lg" name="weigthInput" placeholder="Insert Weight To be Converted">
                        </div>
                        <div class="form-group"> 
                          <select class="form-control input-lg" id="weigthinputUnit" name="weigthinputUnit">
                            <option selected disabled value="">Select Unit</option>
                            <option value="kilo">Kilogram</option>
                            <option value="pound">Pound</option>
                            <option value="ounce">Ounce</option>
                            <option value="ton">Ton</option>
                            
                          </select>
                        </div>
                        <h1 class="text-center ini">Into</h1>
                        <div class="form-group"> 
                          <select class="form-control input-lg" id="weigthoutputUnit" name="weigthoutputUnit">
                            <option selected disabled value="">Select Unit</option>
                            <option value="kilo">Kilogram</option>
                            <option value="pound">Pound</option>
                            <option value="ounce">Ounce</option>
                            <option value="ton">Ton</option>
                            
                          </select>
                        </div>
                      </form>
                      <div style="margin-top: 50px;" class="text-center">
                      <i class="fa fa-arrow-down fa-2x"></i> 
                        <div class="form-group"> 
                          <input id="weigthOutput" type="text" class="form-control input-lg" name="weigthOutput" value="0">
                        </div>
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
              <footer class="main-footer">
    <div class="pull-right hidden-xs">Version 1.0</div>
    Copyright © 2018 Ojih All rights reserved.</footer>
    
</footer>
              </div>



              <script src="assets/js/jquery.js" type="text/javascript"></script>
              <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
              <script type="text/javascript" src="assets/js/length.js"></script>
              <script type="text/javascript" src="assets/js/weight.js"></script>
      </body>
</html>

