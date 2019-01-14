<!-- head -->
<?php $this->start('head'); ?>
<link rel="stylesheet" type="text/css" href="<?= PROOT ?>Public/StyleSheets/Cms/Menu.css"><!-- Cms CSS -->


<?php $this->end(); ?>

<!-- body -->
<?php $this->start('menu'); ?>

<?php
$pathToImageFolder = PROOT . 'Public' . DS . 'Images' . DS;


// function deterActiveMenuItem($menuItem)
// {
//     $lc_menuItem = strtolower($menuItem);
//     $url = Router::getUrlAsArray();
 


//     $ucf_event = ucfirst($event);
//     if ($ucf_event === 'Dance') {
//             //Router::redirect('cms/edit/event/dance');
//         return $event;
//     } elseif ($ucf_event === 'Jazz') {
//         return $event;
//     } elseif ($ucf_event === 'Food') {
//         return $event;
//     } elseif ($ucf_event === 'Historic') {
//         return $event;
//     } else {
//         return 'Event';
//     }

//     return '';
// }


function getMenuItem(string $path, bool $isSubMenuItem = false)
{
    $url = Router::getUrlAsString();
    $currentPage = '';
    if ($url === $path) {
        $currentPage = ' currentPage';
    }
    $menuItemClass = 'menuItem';
    if ($isSubMenuItem) {
        $menuItemClass = 'subMenuItem';
    }
return 'href = "'. PROOT . $path . '" class="' . $menuItemClass .  $currentPage . '"';
}

?>


<!-- Menu (Group) -->
<nav id="menu">
    <ul>
        <li><a <?= getMenuItem('cms/dashboard'); ?>><i class="menuIcon fas fa-tachometer-alt"></i>Dashboard</a></li>
        <li><a <?= getMenuItem('cms/statistics'); ?>><i class="menuIcon fas fa-chart-line"></i>Statistics</a>
            <ul>
                <li><a <?= getMenuItem('cms/statistics/dance', true); ?>>Dance</a></li>
                <li><a <?= getMenuItem('cms/statistics/jazz', true); ?>>Jazz</a></li>
                <li><a <?= getMenuItem('cms/statistics/food', true); ?>>Food</a></li>
                <li><a <?= getMenuItem('cms/statistics/historic', true); ?>>Historic</a></li>
            </ul>
        </li>
        <li><a <?= getMenuItem('cms/edit/timetable'); ?>>
                    <i class="menuIcon far fa-calendar"></i>
                    <i class="menuIcon layer-2 fas fa-pen"></i>
                Edit Timetable</a>
            <ul>
                <li><a <?= getMenuItem('cms/edit/timetable/dance', true); ?>>Dance</a></li>
                <li><a <?= getMenuItem('cms/edit/timetable/jazz', true); ?>>Jazz</a></li>
                <li><a <?= getMenuItem('cms/edit/timetable/food', true); ?>>Food</a></li>
                <li><a <?= getMenuItem('cms/edit/timetable/historic', true); ?>>Historic</a></li>
            </ul>
        </li>
        <li><a <?= getMenuItem('cms/edit/event'); ?>><i class="menuIcon fas fa-edit"></i>Edit Event Pages</a>
            <ul>
                <li><a <?= getMenuItem('cms/edit/event/dance', true); ?>>Dance</a></li>
                <li><a <?= getMenuItem('cms/edit/event/dance', true); ?>>Jazz</a></li>
                <li><a <?= getMenuItem('cms/edit/event/dance', true); ?>>Food</a></li>
                <li><a <?= getMenuItem('cms/edit/event/dance', true); ?>>Historic</a></li>
            </ul>
        </li>
        <li><a <?= getMenuItem('cms/manageusers'); ?>><i class="menuIcon fas fa-users-cog"></i>ManageUsers</a></li>
        <li><a <?= getMenuItem('cms/settings'); ?>><i class="menuIcon fas fa-cog"></i>Settings</a></li>
    </ul>
</nav>




<?php $this->end(); ?>