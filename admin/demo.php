<html>
<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
       <div id="piechart" style="width: 500px; height: 500px;"></div>
</head>
<body>
    <script type="text/javascript">
          google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {


        var data = google.visualization.arrayToDataTable([
          ['Categories', 'Hours per Day'],
          ['Category', 300+Math.random()],
          ['SubCategory', 300+Math.random()*100],
          ['Product', 300+Math.random()*100],
          ['UserOrder', 300+Math.random()*100],
          ['ManageUser', 300+Math.random()*100]
          
        ]);

        var options = {
          colors:["#ff3300","#ff9933", "#ffcc00","#ff8800", "#99ff33", "#009900"],
          legend:"none"
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
</body>
</html>
