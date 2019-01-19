<?php

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

function showLineGraphWidget()//object $dataObj)
{
    $dataObj = (object)['title'=>'Visitor count last 10 days'];
    //$dataString = formatData($dataObj->data);
    $widgetId = uniqid(toCamelCase($dataObj->title) . '_');
    ?>

    <article class="lineGraph widget">
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
    title: {
        text: null
    },
    credits: {
					enabled: false
		 },

    series: [{
    	name: 'Dance',
        data: [207,244,183,198,220,172,82,158,169,170],
        color: '#3083D0'
    }, {
    		name: 'Jazz',
        data: [212,124,180,93,63,221,71,135,148,57],
        color: '#440E62'
    }, {
    		name: 'Food',
        data: [197,68,76,191,189,96,73,144,99,215],
        color: '#F0841B'
    }, {
    		name: 'Historic',
        data: [160,196,66,144,157,169,87,112,137,90],
        color: '#DB1F1F'
    }]
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