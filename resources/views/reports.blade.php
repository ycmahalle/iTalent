<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
         <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />

     <script src="{{asset('js/calculate.js')}}"></script>
     <link rel="stylesheet" href="{{asset('css/app.css')}}">
     <title>iTalent | Dashboard</title>
      {{-- <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <script src="graph.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Work',     1],
          ['Eat',      2],
          ['Commute',  2],
          ['Watch TV', 2],
          ['Sleep',    7]
        ]);

        var options = {
          title: 'My Daily Activities'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script> --}}
<style type="text/css">
   .box{

   }
  </style>
  <script type="text/javascript">
   var analytics = <?php echo $item; ?>

   google.charts.load('current', {'packages':['corechart']});

   google.charts.setOnLoadCallback(drawChart);

   function drawChart()
   {
    var data = google.visualization.arrayToDataTable(analytics);
    var options = {
     title :  'Percentage of  products sold by quantity'
    };
    var chart = new google.visualization.PieChart(document.getElementById('pie_chart'));
    chart.draw(data, options);
   }
  </script>
</head>

<body>

 <div class="container d-flex justify-content-center" style="flex-direction: column">
     <div class="buttons row  col-md-12 col-sm-12 d-flex justify-content-center">
        <a class="col-md-3 col-sm-7 btn btn-outline-light p-4 w-25 m-4" href="{{url('/add-order')}}">Add Order</a>
        <a class="col-md-3 col-sm-7 btn btn-outline-light p-4 w-25 m-4" href="{{url('/view-report')}}">View Report</a>
    </div>
    <br><br><br>
    <br />
  <div class="container">

   <div class="panel panel-default">
    <div class="panel-heading">
     <h3 class="panel-title">Percentage of  products sold by quantity</h3>
    </div>
    <div class="panel-body" align="center">
     <div id="pie_chart" style="width:750px; height:450px;">

     </div>
    </div>
   </div>

  </div>

  {{-- <div id="piechart" style="width: 900px; height: 500px;background:transparent !important"></div> --}}
 </div>

 </body>
</html>

