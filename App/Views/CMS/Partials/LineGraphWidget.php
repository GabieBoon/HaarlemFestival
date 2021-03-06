<?php

function formatLineGrapData(array $dataArray)
{
    $dataString = "";
    $count = count($dataArray);
    for ($i = 0; $i < $count; $i++) {
        $dataObj = $dataArray[$i];

        $valueString = '[';
        $value_count = count($dataObj->value);
        for ($j=0; $j < $value_count; $j++) {
            $valueItem = $dataObj->value[$j];

            $valueString .= $valueItem . ', ';
        }
        $valueString = rtrim($valueString, ', ');
        $valueString .= ']';

        $dataString .= "{name: '" . $dataObj->name . "', data: " . $valueString . ", color: '" . CmsModel::getEventColor($dataObj->color) . "'}, ";
    }
    return rtrim($dataString, ', ');
}


function showLineGraphWidget(stdClass $dataObj)
{
    
    $dataString = formatLineGrapData($dataObj->data);
    //formatted_print_r($dataString);
    $widgetId = uniqid(toCamelCase($dataObj->title) . '_');
    ?>

    <article class=" widget">
        <header>
            <h3 class="title"><?= $dataObj->title ?></h3>
        </header>
        <!-- <p class="statsWidgetValue">< ?= $valuePrefix . commify($value)?></p> -->
        <section>
            <div id="<?= $widgetId ?>" class="lineGraphWidget">
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
                            zoomType: 'xy'
					        
                        },
                        title: {
                        text: null
                    },
                    xAxis: {
                        type: 'datetime',
                        categories: ['11/01','12/01','13/01','14/01','15/01','16/01','17/01','18/01','19/01','Yesterday']
                    },
                    credits: {
	                    enabled: false
	                },
                    series: <?= "[" . $dataString . "]" ?>
});

                        // chart: {
                        //     plotBackgroundColor: null,
                        //     plotBorderWidth: 0,
                        //     plotShadow: false,
                            
					    //     height: '200px'
                        // },
                        // credits: {
					    //         enabled: false
					    //     },
                        // title: {
                        //     text: null,
                        //     align: 'center',
                        //     verticalAlign: 'middle',
                        //     y: 40
                        // },
                        // tooltip: {
                        //     pointFormat: '<b>'+ <?= "'" . $dataObj->prefix . "'" ?> +'{point.y:,.0f}</b> {point.percentage:.1f}%'
                        // },
                        // legend:{
                        //     enabled: true,
                        //     floating: true,
                        //     labelFormatter: function() {
                        //         return '<span style="color:' + this.color + '">' + this.name + ': </span>(<b>'+ <?= "'" . $dataObj->prefix . "'" ?>  + this.y.toLocaleString() + ')';
                        //     }
                        // },
                        // plotOptions: {
                        //     pie: {
                        //         showInLegend: true,
                        //         startAngle: -90,
                        //         endAngle: 90,
                        //         center: ['50%', '90%'],
                        //         size: '175%'
                        //     }
                        // },
                        // series: [{
                        //     type: 'pie',
                        //     name: <?= "'" . $dataObj->title . "'" ?>,
                        //     innerSize: '75%',
                        //     data: [<?= $dataString ?>],
                        //     showInLegend: true,
                        //     dataLabels: {
                        //         enabled: true,
                        //         distance: -25,
                        //         format: '<b>'+ <?= "'" . $dataObj->prefix . "'" ?> +'{point.y:,.0f}</b>',
                        //         style: {
						//             fontWeight: 'bold',
                        //             color: 'black'                                    
					    //         }
                        //     }
                        // }]
                   // });


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