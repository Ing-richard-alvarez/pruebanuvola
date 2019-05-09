
$(document).ready(function() {

    $.ajax({
        url : "<?php site_url('users/dataGrafica') ?>",
        dataType : "JSON",
        success : function(result) {
            google.charts.load('current', {
                'packages' : [ 'corechart' ]
            });
            google.charts.setOnLoadCallback(function() {
                drawChart(result);
            });
        }
    });

    function drawChart(result) {

        var data = new google.visualization.DataTable();
        data.addColumn('string', 'edad');
        data.addColumn('number', 'Quantity');
        var dataArray = [];
        $.each(result, function(i, obj) {
            dataArray.push([ obj.name, parseInt(obj.quantity) ]);
        });

        data.addRows(dataArray);

        var piechart_options = {
            title : 'Pie Chart: How Much Products Sold By Last Night',
            width : 400,
            height : 300
        };
        var piechart = new google.visualization.PieChart(document
                .getElementById('piechart_div'));
        piechart.draw(data, piechart_options);

        var barchart_options = {
            title : 'Barchart: How Much Products Sold By Last Night',
            width : 400,
            height : 300,
            legend : 'none'
        };
        var barchart = new google.visualization.BarChart(document
                .getElementById('barchart_div'));
        barchart.draw(data, barchart_options);
    }

});