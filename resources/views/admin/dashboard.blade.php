@extends("layouts.master")
@section("content")


<div class = "container">
  
  <div id = "pie_chart" style = "width=500px; height:300px;"></div>  

  <div id="linechart" style="width: 900px; height: 500px"></div>

</div>



@endsection

@section("scripts")
<!-- pie chart -->


<!-- size -->

    <script type="text/javascript">

        var analytics = <?php echo $size; ?>;
        
        google.charts.load('current', {'packages':['corechart']});

        google.charts.setOnLoadCallback(drawChart);

        function drawChart()
        {
          var data = google.visualization.arrayToDataTable(analytics);
          
          var options = { title : 'Percentage of choice by size '};

          var chart = new google.visualization.PieChart(document.getElementById('pie_chart'));
        chart.draw(data, options);
        }
    </script>

    <!-- prices -->

    <script type="text/javascript">

          var total = <?php echo $total; ?>;

          google.charts.load('current', {'packages':['corechart']});

          google.charts.setOnLoadCallback(drawChart);

          function drawChart() {

            var data = google.visualization.arrayToDataTable(total);

            var options = {

              title: 'Price Line Chart',

              curveType: 'function',

              legend: { position: 'bottom' }

            };

            var chart = new google.visualization.LineChart(document.getElementById('linechart'));

            chart.draw(data, options);

          }

      </script>

    

@endsection 