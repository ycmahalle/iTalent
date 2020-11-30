  google.charts.load('current', { 'packages': ['corechart '] });
  oole.charts.setOnLoadCallback(drawChart);

  nction drawChart() {

          r data = google.visualization.arrayToDataTable([
                      ['Task', 'Hours per Day'],
                      ['Work', ]
                      ['Eat', ['Commute', ],
                          ['Watch TV', 2],
                          ['Sleep', ;

                              vr options = {
                                  title: 'My Daily Activities'
                              }

                              var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                              chart.draw(data, options);