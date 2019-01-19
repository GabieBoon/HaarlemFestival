<?php


function fetchColor(string $color = '')
{
    $color = ucfirst($color);
    if ($color === 'Dance') {
        return "#3083D0";
    } elseif ($color === 'Jazz') {
        return "#440E62";
    } elseif ($color === 'Food') {
        return "#F0841B";
    } elseif ($color === 'Historic') {
        return "#DB1F1F";
    } elseif ($color === 'Schedule') {
        return "#DCC500";
    } elseif ($color === 'Cart') {
        return "#849A7D";
    } elseif ($color === 'Default') {
        return "#7cb5ec";
    } else {
        return "";
    }
}

function formatData(array $dataArray)
{
    $dataString = "";
    $count = count($dataArray);
    for ($i = 0; $i < $count; $i++) {
        $dataObj = $dataArray[$i];
        $dataString .= "{name: '" . $dataObj->name . "', y: " . $dataObj->value . ", color: '" . fetchColor($dataObj->color) . "'}, ";
    }
    return rtrim($dataString, ', ');
}

function showStatsWidget(object $dataObj)
{
    $dataString = formatData($dataObj->data);
    $widgetId = uniqid(toCamelCase($dataObj->title) . '_');
    ?>

    <article class="stats widget">
        <header>
            <h3 class="title"><?= $dataObj->title ?></h3>
        </header>
        <!-- <p class="statsWidgetValue">< ?= $valuePrefix . commify($value)?></p> -->
        <section>
            <div id="<?= $widgetId ?>" class="statsWidgetGraph">
                <script type="text/javascript">
                    Highcharts.setOptions({
                        lang: {
                            decimalPoint: ',',
                            thousandsSep: '.'
                        }
                    }); 
                    Highcharts.chart(<?= "'" . $widgetId . "'" ?> , {
                        chart: {
                            plotBackgroundColor: null,
                            plotBorderWidth: 0,
                            plotShadow: false,
                            
					        height: '200px'
                        },
                        credits: {
					            enabled: false
					        },
                        title: {
                            text: null,
                            align: 'center',
                            verticalAlign: 'middle',
                            y: 40
                        },
                        tooltip: {
                            pointFormat: '<b>'+ <?= "'" . $dataObj->prefix . "'" ?> +'{point.y:,.0f}</b> {point.percentage:.1f}%'
                        },
                        legend:{
                            enabled: true,
                            floating: true,
                            labelFormatter: function() {
                                return '<span style="color:' + this.color + '">' + this.name + ': </span>(<b>'+ <?= "'" . $dataObj->prefix . "'" ?>  + this.y.toLocaleString() + ')';
                            }
                        },
                        plotOptions: {
                            pie: {
                                showInLegend: true,
                                startAngle: -90,
                                endAngle: 90,
                                center: ['50%', '90%'],
                                size: '175%'
                            }
                        },
                        series: [{
                            type: 'pie',
                            name: <?= "'" . $dataObj->title . "'" ?>,
                            innerSize: '75%',
                            data: [<?= $dataString ?>],
                            showInLegend: true,
                            dataLabels: {
                                enabled: true,
                                distance: -25,
                                format: '<b>'+ <?= "'" . $dataObj->prefix . "'" ?> +'{point.y:,.0f}</b>',
                                style: {
						            fontWeight: 'bold',
                                    color: 'black'                                    
					            }
                            }
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
        </section>
    </article>

<?php

}
?>