<?php
include('universal_functions.php');

// log_IP("index");

//header( 'Location: ./algo.php?view=results');
?>

<!DOCTYPE>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <meta name="description" content="SmartSoftware is an Artificial Intelligence development project" />
      <meta name="keywords" content="A.I., AI, Artificial, Intelligence, Artificial Intelligence, Machine Learning, Neural Networks, Bot, " />
      <title>Smart Software - A.I. Development</title>
      
      <?php include('code_header.php'); ?>

      <!-- <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" /> -->

      <script type="text/javascript">
         $(document).ready(function()
         {
            <?php
                include('required_jquery.php');
            ?>
         });
      </script>
   </head>
   <body>
        <?php include('index_header.php'); ?>
       
       <div class="content" style="border-top:none;">
           <p>Artificial Intelligence development. </p>
           <p>Smart Software has an algorithm for <a href="./algo.php" class="link">stock market predictions</a>, and <a href="./betting.php" class="link">sports team betting.</a> </p>
       </div>
       






       <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar">something?</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Project name</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                
            </div>
          </div>
        </nav>

        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron">
          <div class="container">
            <h1>Hello, world!</h1>
            <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
          </div>
        </div>

        <div class="container">
          <!-- Example row of columns -->
          <div class="row">
            <div class="col-md-4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-md-4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
           </div>
            <div class="col-md-4">
              <h2>Heading</h2>
              <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
              <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
            </div>
          </div>

          <hr>

          <footer>
            <p>&copy; 2016 Company, Inc.</p>
          </footer>
        </div> <!-- /container -->
       
       
       
       
       
              
       
       
       
       
       


      <?php include('footer.php'); ?>
   </body>
</html>