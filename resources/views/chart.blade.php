<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <div style="width: 800px; height: 400px;">
            <canvas id="lineChart" width="800" height="280"></canvas>
        </div>
    </div>
</div>

<script src=https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js charset=utf-8></script>
<script>
    var newTotalArray = new Array();
    var newTotalMale = new Array();
    var newTotalFemale = new Array();
    var years = new Array();

    <?php
    foreach($totalYearTotal as $key=> $val){?>
    newTotalArray.push('<?php echo $val; ?>');
    <?php    }


    ?>

    <?php
    foreach($totalMalePerYear as $key=> $val){?>
    newTotalMale.push('<?php echo $val; ?>');
    <?php    }


    ?>

    <?php
    foreach($totalFemalePerYear as $key=> $val){?>
    newTotalFemale.push('<?php echo $val; ?>');
    <?php    }


    ?>

    <?php
    foreach($yearData as $key=> $val){?>
    years.push('<?php echo $val; ?>');
    <?php    }


        ?>


        window.onload = function() {
        const ctx = document.getElementById("lineChart").getContext("2d");
        window.myBar = new Chart(ctx, {
            type: 'line',
            data: {
                labels: years,
                datasets: [
                    {
                        label: "Male",
                        fill: false,
                        lineTension: 0.2,
                        backgroundColor: "rgba(75,192,192,0.4)",
                        borderColor: "rgba(75,192,192,1)",
                        borderCapStyle: 'butt',
                        borderDash: [],
                        BorderDashOffset: 0.0,
                        borderJoinStyle: 'miter',
                        pointBorderColor: "rgba(75,192,192,1)",
                        pointHoverRadius: 5,
                        pointHoverBackgroundColor: "rgba(75,192,192,1)",
                        pointHoverBorderColor: "rgba(220,220,220,1)",
                        pointHitRadius: 10,
                        pointBorderWidth: 1,
                        pointRadius: 1,
                        data: newTotalMale,
                    },

                    {
                        label: "Female",
                        fill: false,
                        lineTension: 0.2,
                        backgroundColor: "rgba(75,75,192,0.4)",
                        borderColor: "rgba(75,75,192,1)",
                        borderCapStyle: 'butt',
                        borderDash: [],
                        BorderDashOffset: 0.0,
                        borderJoinStyle: 'miter',
                        pointBorderColor: "rgba(75,75,192,1)",
                        pointHoverRadius: 5,
                        pointHoverBackgroundColor: "rgba(75,75,192,1)",
                        pointHoverBorderColor: "rgba(220,220,220,1)",
                        pointHitRadius: 10,
                        pointBorderWidth: 1,
                        pointRadius: 1,
                        data: newTotalFemale,
                    },

                    {
                        label: "Total",
                        fill: false,
                        lineTension: 0.2,
                        backgroundColor: "rgba(250,20,20,0.4)",
                        borderColor: "rgba(250,20,20,1)",
                        borderCapStyle: 'butt',
                        borderDash: [],
                        BorderDashOffset: 0.0,
                        borderJoinStyle: 'miter',
                        pointBorderColor: "rgba(250,20,20,1)",
                        pointHoverRadius: 5,
                        pointHoverBackgroundColor: "rgba(250,20,20,1)",
                        pointHoverBorderColor: "rgba(250,20,20,1)",
                        pointHitRadius: 10,
                        pointBorderWidth: 1,
                        pointRadius: 1,
                        data: newTotalArray,
                    }
                ]
            },
            options: {
                scales:{
                    yAxes:[{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        })
    }
</script>
</body>
</html>
