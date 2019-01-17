<?php

function showStatsWidget(string $event, string $title ,int $value, int $maxValue = 0, $valuePrefix = '')
{
    $widgetId = uniqid(toCamelCase($title). '_');
    if ($maxValue === 0) {
        $maxValue = $value;
    }
?>

<div class="statsWidgetWrapper">
    <div class="statsWidget">
        <p class="statsWidgetTitle"><?= $title?></p>
        <p class="statsWidgetValue"><?= $valuePrefix . commify($value)?></p>
        
        <div id="<?= $widgetId ?>" class="statsWidgetGraph">
            <script type="text/javascript">

                Highcharts.chart(<?= "'" . $widgetId . "'" ?> , {
                    chart: {
                        // plotBackgroundColor: null,
                        plotBorderWidth: 0,
                        plotShadow: false
                    },
                    title: {
                        text: null,//<?= "'" . $value . "'" ?>,
                        align: 'center',
                        verticalAlign: 'middle',
                        y: 40
                    },
                    tooltip: {
                        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                    },
                    plotOptions: {
                        pie: {
                            dataLabels: {
                                enabled: false//true,
                                // distance: -50,
                                // style: {
                                //     fontWeight: 'bold',
                                //     color: 'white'
                                // }
                            },
                            startAngle: -90,
                            endAngle: 90,
                            // center: ['50%', '75%'],
                            size: '100%'
                        }
                    },
                    series: [{
                        type: 'pie',
                        name: <?= "'" . $value . "'" ?>,
                        innerSize: '50%',
                        data: [
                            [<?= "'" . $title . "'," . $value ?>], 
                            {
                                name: ' ',
                                y: <?= $maxValue - $value ?>,
                                dataLabels: {
                                    enabled: false
                                }
                            }
                        ]
                    }]
                });


            </script>
            <!-- <div id="u371">
                <div id="u371_div"></div>
            </div>
            <div id="u372">
                <div id="u372_div"></div>
            </div> -->
        </div>
    </div>
</div>

<?php
}
?>