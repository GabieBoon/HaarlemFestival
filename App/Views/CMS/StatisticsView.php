<!-- set site title -->
<?php $this->setSiteTitle('CMS - Statistics'); ?>
<!-- head -->
<?php $this->start('head'); ?>
<link rel="stylesheet" type="text/css" href="<?= PROOT ?>Public/StyleSheets/Cms/StyleSheet.css"><!-- Cms CSS -->
<?php $this->end(); ?>
<!-- body -->
<?php $this->start('body'); ?>

<div id="pageWrapper">
    <header id="pageHeader">
        <div id="pageTitle">
            <h1><?= ucfirst($this->event); ?> Statistics</h1>
            <!-- <p>Choose an event from the menu</p> -->
        </div>
    </header>
    <main id="pageMain" class="d-flex flex-wrap">

    <?php $this->partial('CMS', 'statsWidget'); ?>
        
        


            <?php 
            $data0 = (object)[
                'title' => 'Total unsold tickets',
                'data' => [
                    (object)[
                        'name' => 'Total unsold tickets',
                        'value' => 6342,
                        'color' => 'Default'
                    ],
                    (object)[
                        'name' => 'Total tickets sold',
                        'value' => 9658,
                        'color' => ''
                    ]
                ],
                'prefix' => ''
            ];
            $data1 = (object)[
                'title' => 'Total sold tickets',
                'data' => [
                    (object)[
                        'name' => 'Total tickets sold',
                        'value' => 9658,
                        'color' => 'Default'
                    ],
                    (object)[
                        'name' => 'Total unsold tickets',
                        'value' => 6342,
                        'color' => ''
                    ]
                ],
                'prefix' => ''
            ];
            $data2 = (object)[
                'title' => 'Total ticket revenue',
                'data' => [
                    (object)[
                        'name' => 'Total ticket revenue',
                        'value' => 689960,
                        'color' => 'Default'
                    ]
                ],
                'prefix' => '€'
            ];
            $data3 = (object)[
                'title' => 'Ticket revenue',
                'data' => [
                    (object)[
                        'name' => 'Dance ticket revenue',
                        'value' => 565681,
                        'color' => 'Dance'
                    ],
                    (object)[
                        'name' => 'Jazz ticket revenue',
                        'value' => 104198,
                        'color' => 'Jazz'
                    ],
                    (object)[
                        'name' => 'Food reservation revenue',
                        'value' => 11753,
                        'color' => 'Food'
                    ],
                    (object)[
                        'name' => 'Historic ticket revenue',
                        'value' => 1986,
                        'color' => 'Historic'
                    ]
                ],
                'prefix' => '€'
            ];
            $data4 = (object)[
                'title' => 'Dance tickets',
                'data' => [
                    (object)[
                        'name' => 'Dance sold tickets',
                        'value' => 7823,
                        'color' => 'Dance'
                    ],
                    (object)[
                        'name' => 'Dance unsold tickets',
                        'value' => 2577,
                        'color' => ''
                    ]
                ],
                'prefix' => ''
            ];
            $data5 = (object)[
                'title' => 'Jazz tickets',
                'data' => [
                    (object)[
                        'name' => 'Jazz sold tickets',
                        'value' => 2153,
                        'color' => 'Jazz'
                    ],
                    (object)[
                        'name' => 'Jazz unsold tickets',
                        'value' => 2197,
                        'color' => ''
                    ]
                ],
                'prefix' => ''
            ];
            $data6 = (object)[
                'title' => 'Food total reservations',
                'data' => [
                    (object)[
                        'name' => 'Food total reservations made',
                        'value' => 947,
                        'color' => 'Food'
                    ],
                    (object)[
                        'name' => 'Food total open reservations',
                        'value' => 79,
                        'color' => ''
                    ]
                ],
                'prefix' => ''
            ];
            $data7 = (object)[
                'title' => 'Historic tickets',
                'data' => [
                    (object)[
                        'name' => 'Historic sold tickets',
                        'value' => 120,
                        'color' => 'Historic'
                    ],
                    (object)[
                        'name' => 'Historic unsold tickets',
                        'value' => 360,
                        'color' => ''
                    ]
                ],
                'prefix' => ''
            ];
             

            for ($i = 0; $i < 8; $i++) {
                showStatsWidget(${'data' . $i});
            }


            ?>
    </main>
</div>
<?php $this->end(); ?>