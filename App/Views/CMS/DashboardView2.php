<!-- set site title -->
<?php $this->setSiteTitle('CMS Dashboard'); ?>
<!-- head -->
<?php $this->start('head'); ?>
<link rel="stylesheet" type="text/css" href="<?= PROOT ?>Public/StyleSheets/Cms/StyleSheet.css"><!-- Cms CSS -->
<?php $this->end(); ?>
<!-- body -->
<?php $this->start('body'); ?>
<?php $user = $this->UserModel;
$pathToImageFolder = PROOT . 'Public' . DS . 'Images' . DS;


?>
<div id="pageWrapper">
    <header id="pageHeader">
        <div id="pageTitle">
            <h1>Dashboard</h1>
            <!-- <p>Choose an event from the menu</p> -->
        </div>
    </header>
    <main id="pageMain" class="">

    <?php

    $this->partial('CMS', 'statsWidget');

    
        // <div id="u4">
        //     <div id="u4_state0" class="panel_state">
        //         <div id="u4_state0_content" class="panel_state_content">
        //             <div id="u5">
        //                 <div id="u6">
        //                     <div id="u7">
        //                         <div id="u7_div"></div>
        //                     </div>
        //                     <div id="u8">
        //                         <div id="u9" class=" paragraph">
        //                             <div id="u9_div"></div>
        //                             <div id="u9_text" class="text ">
        //                                 <p style="font-size:18px;"><span>revenue</span></p>
        //                                 <p style="font-size:24px;"><span>€ 8.490</span></p>
        //                             </div>
        //                         </div>
        //                         <div id="u10">
        //                             <div id="u11">
        //                                 <div id="u11_div"></div>
        //                             </div>
        //                             <div id="u12">
        //                                 <div id="u12_div"></div>
        //                             </div>
        //                             <div id="u13">
        //                                 <div id="u13_div"></div>
        //                             </div>
        //                             <div id="u14">
        //                                 <div id="u14_div"></div>
        //                             </div>
        //                             <div id="u15">
        //                                 <div id="u15_div"></div>
        //                             </div>
        //                         </div>
        //                     </div>
        //                     <div id="u16">
        //                         <div id="u17">
        //                             <div id="u18">
        //                                 <div id="u18_div"></div>
        //                             </div>
        //                             <div id="u19">
        //                                 <div id="u19_div"></div>
        //                             </div>
        //                             <div id="u20">
        //                                 <div id="u20_div"></div>
        //                             </div>
        //                             <div id="u21">
        //                                 <div id="u21_div"></div>
        //                             </div>
        //                             <div id="u22">
        //                                 <div id="u22_div"></div>
        //                             </div>
        //                         </div>
        //                         <div id="u23" class=" paragraph">
        //                             <div id="u23_div"></div>
        //                             <div id="u23_text" class="text ">
        //                                 <p style="font-size:18px;"><span>total visitors</span></p>
        //                                 <p style="font-size:16px;"><span>Saturday</span></p>
        //                                 <p style="font-size:24px;"><span>9195</span></p>
        //                             </div>
        //                         </div>
        //                     </div>
        //                     <div id="u24">
        //                         <div id="u25" class=" paragraph">
        //                             <div id="u25_div"></div>
        //                             <div id="u25_text" class="text ">
        //                                 <p style="font-size:18px;"><span>revenue</span></p>
        //                                 <p style="font-size:24px;"><span>€ 2.550</span></p>
        //                             </div>
        //                         </div>
        //                         <div id="u26">
        //                             <div id="u27">
        //                                 <div id="u27_div"></div>
        //                             </div>
        //                             <div id="u28">
        //                                 <div id="u28_div"></div>
        //                             </div>
        //                             <div id="u29">
        //                                 <div id="u29_div"></div>
        //                             </div>
        //                             <div id="u30">
        //                                 <div id="u30_div"></div>
        //                             </div>
        //                             <div id="u31">
        //                                 <div id="u31_div"></div>
        //                             </div>
        //                         </div>
        //                     </div>
        //                     <div id="u32">
        //                         <div id="u33">
        //                             <div id="u34">
        //                                 <div id="u34_div"></div>
        //                             </div>
        //                             <div id="u35">
        //                                 <div id="u35_div"></div>
        //                             </div>
        //                             <div id="u36">
        //                                 <div id="u36_div"></div>
        //                             </div>
        //                             <div id="u37">
        //                                 <div id="u37_div"></div>
        //                             </div>
        //                             <div id="u38">
        //                                 <div id="u38_div"></div>
        //                             </div>
        //                         </div>
        //                         <div id="u39" class=" paragraph">
        //                             <div id="u39_div"></div>
        //                             <div id="u39_text" class="text ">
        //                                 <p style="font-size:18px;"><span>total visitors</span></p>
        //                                 <p style="font-size:16px;"><span>Friday</span></p>
        //                                 <p style="font-size:24px;"><span>6789</span></p>
        //                             </div>
        //                         </div>
        //                     </div>
        //                     <div id="u40">
        //                         <div id="u41" class=" paragraph">
        //                             <div id="u41_div"></div>
        //                             <div id="u41_text" class="text ">
        //                                 <p style="font-size:18px;"><span>revenue</span></p>
        //                                 <p style="font-size:24px;"><span>€ 4.940</span></p>
        //                             </div>
        //                         </div>
        //                         <div id="u42">
        //                             <div id="u43">
        //                                 <div id="u43_div"></div>
        //                             </div>
        //                             <div id="u44">
        //                                 <div id="u44_div"></div>
        //                             </div>
        //                             <div id="u45">
        //                                 <div id="u45_div"></div>
        //                             </div>
        //                             <div id="u46">
        //                                 <div id="u46_div"></div>
        //                             </div>
        //                             <div id="u47">
        //                                 <div id="u47_div"></div>
        //                             </div>
        //                         </div>
        //                     </div>
        //                     <div id="u48">
        //                         <div id="u49">
        //                             <div id="u50">
        //                                 <div id="u50_div"></div>
        //                             </div>
        //                             <div id="u51">
        //                                 <div id="u51_div"></div>
        //                             </div>
        //                             <div id="u52">
        //                                 <div id="u52_div"></div>
        //                             </div>
        //                             <div id="u53">
        //                                 <div id="u53_div"></div>
        //                             </div>
        //                             <div id="u54">
        //                                 <div id="u54_div"></div>
        //                             </div>
        //                         </div>
        //                         <div id="u55" class=" paragraph">
        //                             <div id="u55_div"></div>
        //                             <div id="u55_text" class="text ">
        //                                 <p style="font-size:18px;"><span>total visitors</span></p>
        //                                 <p style="font-size:16px;"><span>Thursday</span></p>
        //                                 <p style="font-size:24px;"><span>3908</span></p>
        //                             </div>
        //                         </div>
        //                     </div>
        //                     <div id="u56">
        //                         <div id="u57" class=" paragraph">
        //                             <div id="u57_div"></div>
        //                             <div id="u57_text" class="text ">
        //                                 <p style="font-size:18px;"><span>revenue</span></p>
        //                                 <p style="font-size:24px;"><span>€ 5.981</span></p>
        //                             </div>
        //                         </div>
        //                         <div id="u58">
        //                             <div id="u59">
        //                                 <div id="u59_div"></div>
        //                             </div>
        //                             <div id="u60">
        //                                 <div id="u60_div"></div>
        //                             </div>
        //                             <div id="u61">
        //                                 <div id="u61_div"></div>
        //                             </div>
        //                             <div id="u62">
        //                                 <div id="u62_div"></div>
        //                             </div>
        //                             <div id="u63">
        //                                 <div id="u63_div"></div>
        //                             </div>
        //                         </div>
        //                     </div>
        //                     <div id="u64">
        //                         <div id="u65">
        //                             <div id="u66">
        //                                 <div id="u66_div"></div>
        //                             </div>
        //                             <div id="u67">
        //                                 <div id="u67_div"></div>
        //                             </div>
        //                             <div id="u68">
        //                                 <div id="u68_div"></div>
        //                             </div>
        //                             <div id="u69">
        //                                 <div id="u69_div"></div>
        //                             </div>
        //                             <div id="u70">
        //                                 <div id="u70_div"></div>
        //                             </div>
        //                         </div>
        //                         <div id="u71" class=" paragraph">
        //                             <div id="u71_div"></div>
        //                             <div id="u71_text" class="text ">
        //                                 <p style="font-size:18px;"><span>total visitors</span></p>
        //                                 <p style="font-size:16px;"><span>Sunday</span></p>
        //                                 <p style="font-size:24px;"><span>4518</span></p>
        //                             </div>
        //                         </div>
        //                     </div>
        //                 </div>
        //                 <div id="u72">
        //                     <div id="u73">
        //                         <div id="u73_div"></div>
        //                     </div>
        //                     <div id="u74" class=" paragraph" style="cursor: pointer;">
        //                         <div id="u74_div" tabindex="0"></div>
        //                         <div id="u74_text" class="text " style="top: 16px; transform-origin: 95px 10px 0px;">
        //                             <p><span>Historic</span></p>
        //                         </div>
        //                     </div>
        //                     <div id="u75" class=" paragraph" style="cursor: pointer;">
        //                         <div id="u75_div" tabindex="0"></div>
        //                         <div id="u75_text" class="text " style="top: 16px; transform-origin: 95px 10px 0px;">
        //                             <p><span>Food</span></p>
        //                         </div>
        //                     </div>
        //                     <div id="u76" class=" paragraph" style="cursor: pointer;">
        //                         <div id="u76_div" tabindex="0"></div>
        //                         <div id="u76_text" class="text " style="top: 16px; transform-origin: 95px 10px 0px;">
        //                             <p><span>Jazz</span></p>
        //                         </div>
        //                     </div>
        //                     <div id="u77" class=" paragraph" style="cursor: pointer;">
        //                         <div id="u77_div" tabindex="0"></div>
        //                         <div id="u77_text" class="text " style="top: 16px; transform-origin: 95px 10px 0px;">
        //                             <p><span>Dance</span></p>
        //                         </div>
        //                     </div>
        //                     <div id="u78" class=" paragraph selected" style="cursor: pointer;">
        //                         <div id="u78_div" class="selected" tabindex="0"></div>
        //                         <div id="u78_text" class="text " style="top: 16px; transform-origin: 95px 10px 0px;">
        //                             <p id="cache0"><span id="cache1" style="font-weight: bold;">Total</span></p>
        //                         </div>
        //                     </div>
        //                 </div>
        //             </div>
        //         </div>
        //     </div>
        //     <div id="u4_state1" class="panel_state" style="visibility: hidden; display: none;">
        //         <div id="u4_state1_content" class="panel_state_content">
        //             <div id="u79">
        //                 <div id="u80">
        //                     <div id="u81">
        //                         <div id="u81_div"></div>
        //                     </div>
        //                     <div id="u82" class=" paragraph" style="cursor: pointer;">
        //                         <div id="u82_div" tabindex="0"></div>
        //                         <div id="u82_text" class="text ">
        //                             <p><span>Historic</span></p>
        //                         </div>
        //                     </div>
        //                     <div id="u83" class=" paragraph" style="cursor: pointer;">
        //                         <div id="u83_div" tabindex="0"></div>
        //                         <div id="u83_text" class="text ">
        //                             <p><span>Food</span></p>
        //                         </div>
        //                     </div>
        //                     <div id="u84" class=" paragraph" style="cursor: pointer;">
        //                         <div id="u84_div" tabindex="0"></div>
        //                         <div id="u84_text" class="text ">
        //                             <p><span>Jazz</span></p>
        //                         </div>
        //                     </div>
        //                     <div id="u85" class=" paragraph selected" style="cursor: pointer;">
        //                         <div id="u85_div" class="selected" tabindex="0"></div>
        //                         <div id="u85_text" class="text ">
        //                             <p id="cache2"><span id="cache3" style="font-weight: bold;">Dance</span></p>
        //                         </div>
        //                     </div>
        //                     <div id="u86" class=" paragraph" style="cursor: pointer;">
        //                         <div id="u86_div" tabindex="0"></div>
        //                         <div id="u86_text" class="text ">
        //                             <p><span>Total</span></p>
        //                         </div>
        //                     </div>
        //                 </div>
        //                 <div id="u87">
        //                     <div id="u88">
        //                         <div id="u88_div"></div>
        //                     </div>
        //                     <div id="u89">
        //                         <div id="u90" class=" paragraph">
        //                             <div id="u90_div"></div>
        //                             <div id="u90_text" class="text ">
        //                                 <p style="font-size:18px;"><span>revenue</span></p>
        //                                 <p style="font-size:24px;"><span>€ 216.480</span></p>
        //                             </div>
        //                         </div>
        //                         <div id="u91">
        //                             <div id="u92">
        //                                 <div id="u92_div"></div>
        //                             </div>
        //                             <div id="u93">
        //                                 <div id="u93_div"></div>
        //                             </div>
        //                             <div id="u94">
        //                                 <div id="u94_div"></div>
        //                             </div>
        //                             <div id="u95">
        //                                 <div id="u95_div"></div>
        //                             </div>
        //                             <div id="u96">
        //                                 <div id="u96_div"></div>
        //                             </div>
        //                         </div>
        //                     </div>
        //                     <div id="u97">
        //                         <div id="u98">
        //                             <div id="u99">
        //                                 <div id="u99_div"></div>
        //                             </div>
        //                             <div id="u100">
        //                                 <div id="u100_div"></div>
        //                             </div>
        //                             <div id="u101">
        //                                 <div id="u101_div"></div>
        //                             </div>
        //                             <div id="u102">
        //                                 <div id="u102_div"></div>
        //                             </div>
        //                             <div id="u103">
        //                                 <div id="u103_div"></div>
        //                             </div>
        //                         </div>
        //                         <div id="u104" class=" paragraph">
        //                             <div id="u104_div"></div>
        //                             <div id="u104_text" class="text ">
        //                                 <p style="font-size:18px;"><span>total visitors</span></p>
        //                                 <p style="font-size:16px;"><span>Saterday</span></p>
        //                                 <p style="font-size:24px;"><span>2.890</span></p>
        //                             </div>
        //                         </div>
        //                     </div>
        //                     <div id="u105">
        //                         <div id="u106" class=" paragraph">
        //                             <div id="u106_div"></div>
        //                             <div id="u106_text" class="text ">
        //                                 <p style="font-size:18px;"><span>revenue</span></p>
        //                                 <p style="font-size:24px;"><span>€ 129.550</span></p>
        //                             </div>
        //                         </div>
        //                         <div id="u107">
        //                             <div id="u108">
        //                                 <div id="u108_div"></div>
        //                             </div>
        //                             <div id="u109">
        //                                 <div id="u109_div"></div>
        //                             </div>
        //                             <div id="u110">
        //                                 <div id="u110_div"></div>
        //                             </div>
        //                             <div id="u111">
        //                                 <div id="u111_div"></div>
        //                             </div>
        //                             <div id="u112">
        //                                 <div id="u112_div"></div>
        //                             </div>
        //                         </div>
        //                     </div>
        //                     <div id="u113">
        //                         <div id="u114">
        //                             <div id="u115">
        //                                 <div id="u115_div"></div>
        //                             </div>
        //                             <div id="u116">
        //                                 <div id="u116_div"></div>
        //                             </div>
        //                             <div id="u117">
        //                                 <div id="u117_div"></div>
        //                             </div>
        //                             <div id="u118">
        //                                 <div id="u118_div"></div>
        //                             </div>
        //                             <div id="u119">
        //                                 <div id="u119_div"></div>
        //                             </div>
        //                         </div>
        //                         <div id="u120" class=" paragraph">
        //                             <div id="u120_div"></div>
        //                             <div id="u120_text" class="text ">
        //                                 <p style="font-size:18px;"><span>total visitors</span></p>
        //                                 <p style="font-size:16px;"><span>Friday</span></p>
        //                                 <p style="font-size:24px;"><span>2.189</span></p>
        //                             </div>
        //                         </div>
        //                     </div>
        //                     <div id="u121">
        //                         <div id="u122" class=" paragraph">
        //                             <div id="u122_div"></div>
        //                             <div id="u122_text" class="text ">
        //                                 <p style="font-size:18px;"><span>revenue</span></p>
        //                                 <p style="font-size:24px;"><span>€ 218.920</span></p>
        //                             </div>
        //                         </div>
        //                         <div id="u123">
        //                             <div id="u124">
        //                                 <div id="u124_div"></div>
        //                             </div>
        //                             <div id="u125">
        //                                 <div id="u125_div"></div>
        //                             </div>
        //                             <div id="u126">
        //                                 <div id="u126_div"></div>
        //                             </div>
        //                             <div id="u127">
        //                                 <div id="u127_div"></div>
        //                             </div>
        //                             <div id="u128">
        //                                 <div id="u128_div"></div>
        //                             </div>
        //                         </div>
        //                     </div>
        //                     <div id="u129">
        //                         <div id="u130">
        //                             <div id="u131">
        //                                 <div id="u131_div"></div>
        //                             </div>
        //                             <div id="u132">
        //                                 <div id="u132_div"></div>
        //                             </div>
        //                             <div id="u133">
        //                                 <div id="u133_div"></div>
        //                             </div>
        //                             <div id="u134">
        //                                 <div id="u134_div"></div>
        //                             </div>
        //                             <div id="u135">
        //                                 <div id="u135_div"></div>
        //                             </div>
        //                         </div>
        //                         <div id="u136" class=" paragraph">
        //                             <div id="u136_div"></div>
        //                             <div id="u136_text" class="text ">
        //                                 <p style="font-size:18px;"><span>total visitors</span></p>
        //                                 <p style="font-size:16px;"><span>Sunday</span></p>
        //                                 <p style="font-size:24px;"><span>3.108</span></p>
        //                             </div>
        //                         </div>
        //                     </div>
        //                 </div>
        //             </div>
        //         </div>
        //     </div>
        //     <div id="u4_state2" class="panel_state" style="visibility: hidden; display: none;">
        //         <div id="u4_state2_content" class="panel_state_content">
        //             <div id="u137">
        //                 <div id="u138">
        //                     <div id="u139">
        //                         <div id="u139_div"></div>
        //                     </div>
        //                     <div id="u140">
        //                         <div id="u141" class=" paragraph">
        //                             <div id="u141_div"></div>
        //                             <div id="u141_text" class="text ">
        //                                 <p style="font-size:18px;"><span>Sales</span></p>
        //                                 <p style="font-size:24px;"><span>$980</span></p>
        //                             </div>
        //                         </div>
        //                         <div id="u142">
        //                             <div id="u143">
        //                                 <div id="u143_div"></div>
        //                             </div>
        //                             <div id="u144">
        //                                 <div id="u144_div"></div>
        //                             </div>
        //                             <div id="u145">
        //                                 <div id="u145_div"></div>
        //                             </div>
        //                             <div id="u146">
        //                                 <div id="u146_div"></div>
        //                             </div>
        //                             <div id="u147">
        //                                 <div id="u147_div"></div>
        //                             </div>
        //                         </div>
        //                     </div>
        //                     <div id="u148">
        //                         <div id="u149" class=" paragraph">
        //                             <div id="u149_div"></div>
        //                             <div id="u149_text" class="text ">
        //                                 <p style="font-size:18px;"><span>Today</span></p>
        //                                 <p style="font-size:24px;"><span>490</span></p>
        //                             </div>
        //                         </div>
        //                         <div id="u150">
        //                             <div id="u151">
        //                                 <div id="u151_div"></div>
        //                             </div>
        //                             <div id="u152">
        //                                 <div id="u152_div"></div>
        //                             </div>
        //                             <div id="u153">
        //                                 <div id="u153_div"></div>
        //                             </div>
        //                             <div id="u154">
        //                                 <div id="u154_div"></div>
        //                             </div>
        //                             <div id="u155">
        //                                 <div id="u155_div"></div>
        //                             </div>
        //                         </div>
        //                     </div>
        //                     <div id="u156">
        //                         <div id="u157">
        //                             <div id="u158">
        //                                 <div id="u158_div"></div>
        //                             </div>
        //                             <div id="u159">
        //                                 <div id="u159_div"></div>
        //                             </div>
        //                             <div id="u160">
        //                                 <div id="u160_div"></div>
        //                             </div>
        //                             <div id="u161">
        //                                 <div id="u161_div"></div>
        //                             </div>
        //                             <div id="u162">
        //                                 <div id="u162_div"></div>
        //                             </div>
        //                         </div>
        //                         <div id="u163" class=" paragraph">
        //                             <div id="u163_div"></div>
        //                             <div id="u163_text" class="text ">
        //                                 <p style="font-size:18px;"><span>Visits</span></p>
        //                                 <p style="font-size:24px;"><span>2908</span></p>
        //                             </div>
        //                         </div>
        //                     </div>
        //                 </div>
        //                 <div id="u164">
        //                     <div id="u165">
        //                         <div id="u165_div"></div>
        //                     </div>
        //                     <div id="u166" class=" paragraph" style="cursor: pointer;">
        //                         <div id="u166_div" tabindex="0"></div>
        //                         <div id="u166_text" class="text ">
        //                             <p><span>Historic</span></p>
        //                         </div>
        //                     </div>
        //                     <div id="u167" class=" paragraph" style="cursor: pointer;">
        //                         <div id="u167_div" tabindex="0"></div>
        //                         <div id="u167_text" class="text ">
        //                             <p><span>Food</span></p>
        //                         </div>
        //                     </div>
        //                     <div id="u168" class=" paragraph selected" style="cursor: pointer;">
        //                         <div id="u168_div" class="selected" tabindex="0"></div>
        //                         <div id="u168_text" class="text ">
        //                             <p id="cache4"><span id="cache5" style="font-weight: bold;">Jazz</span></p>
        //                         </div>
        //                     </div>
        //                     <div id="u169" class=" paragraph" style="cursor: pointer;">
        //                         <div id="u169_div" tabindex="0"></div>
        //                         <div id="u169_text" class="text ">
        //                             <p><span>Dance</span></p>
        //                         </div>
        //                     </div>
        //                     <div id="u170" class=" paragraph" style="cursor: pointer;">
        //                         <div id="u170_div" tabindex="0"></div>
        //                         <div id="u170_text" class="text ">
        //                             <p><span>Total</span></p>
        //                         </div>
        //                     </div>
        //                 </div>
        //             </div>
        //         </div>
        //     </div>
        //     <div id="u4_state3" class="panel_state" style="visibility: hidden; display: none;">
        //         <div id="u4_state3_content" class="panel_state_content">
        //             <div id="u171">
        //                 <div id="u172">
        //                     <div id="u173">
        //                         <div id="u173_div"></div>
        //                     </div>
        //                     <div id="u174">
        //                         <div id="u175" class=" paragraph">
        //                             <div id="u175_div"></div>
        //                             <div id="u175_text" class="text ">
        //                                 <p style="font-size:18px;"><span>Sales</span></p>
        //                                 <p style="font-size:24px;"><span>$980</span></p>
        //                             </div>
        //                         </div>
        //                         <div id="u176">
        //                             <div id="u177">
        //                                 <div id="u177_div"></div>
        //                             </div>
        //                             <div id="u178">
        //                                 <div id="u178_div"></div>
        //                             </div>
        //                             <div id="u179">
        //                                 <div id="u179_div"></div>
        //                             </div>
        //                             <div id="u180">
        //                                 <div id="u180_div"></div>
        //                             </div>
        //                             <div id="u181">
        //                                 <div id="u181_div"></div>
        //                             </div>
        //                         </div>
        //                     </div>
        //                     <div id="u182">
        //                         <div id="u183" class=" paragraph">
        //                             <div id="u183_div"></div>
        //                             <div id="u183_text" class="text ">
        //                                 <p style="font-size:18px;"><span>Today</span></p>
        //                                 <p style="font-size:24px;"><span>490</span></p>
        //                             </div>
        //                         </div>
        //                         <div id="u184">
        //                             <div id="u185">
        //                                 <div id="u185_div"></div>
        //                             </div>
        //                             <div id="u186">
        //                                 <div id="u186_div"></div>
        //                             </div>
        //                             <div id="u187">
        //                                 <div id="u187_div"></div>
        //                             </div>
        //                             <div id="u188">
        //                                 <div id="u188_div"></div>
        //                             </div>
        //                             <div id="u189">
        //                                 <div id="u189_div"></div>
        //                             </div>
        //                         </div>
        //                     </div>
        //                     <div id="u190">
        //                         <div id="u191">
        //                             <div id="u192">
        //                                 <div id="u192_div"></div>
        //                             </div>
        //                             <div id="u193">
        //                                 <div id="u193_div"></div>
        //                             </div>
        //                             <div id="u194">
        //                                 <div id="u194_div"></div>
        //                             </div>
        //                             <div id="u195">
        //                                 <div id="u195_div"></div>
        //                             </div>
        //                             <div id="u196">
        //                                 <div id="u196_div"></div>
        //                             </div>
        //                         </div>
        //                         <div id="u197" class=" paragraph">
        //                             <div id="u197_div"></div>
        //                             <div id="u197_text" class="text ">
        //                                 <p style="font-size:18px;"><span>Visits</span></p>
        //                                 <p style="font-size:24px;"><span>2908</span></p>
        //                             </div>
        //                         </div>
        //                     </div>
        //                 </div>
        //                 <div id="u198">
        //                     <div id="u199">
        //                         <div id="u199_div"></div>
        //                     </div>
        //                     <div id="u200" class=" paragraph" style="cursor: pointer;">
        //                         <div id="u200_div" tabindex="0"></div>
        //                         <div id="u200_text" class="text ">
        //                             <p><span>Historic</span></p>
        //                         </div>
        //                     </div>
        //                     <div id="u201" class=" paragraph selected" style="cursor: pointer;">
        //                         <div id="u201_div" class="selected" tabindex="0"></div>
        //                         <div id="u201_text" class="text ">
        //                             <p id="cache6"><span id="cache7" style="font-weight: bold;">Food</span></p>
        //                         </div>
        //                     </div>
        //                     <div id="u202" class=" paragraph" style="cursor: pointer;">
        //                         <div id="u202_div" tabindex="0"></div>
        //                         <div id="u202_text" class="text ">
        //                             <p><span>Jazz</span></p>
        //                         </div>
        //                     </div>
        //                     <div id="u203" class=" paragraph" style="cursor: pointer;">
        //                         <div id="u203_div" tabindex="0"></div>
        //                         <div id="u203_text" class="text ">
        //                             <p><span>Dance</span></p>
        //                         </div>
        //                     </div>
        //                     <div id="u204" class=" paragraph" style="cursor: pointer;">
        //                         <div id="u204_div" tabindex="0"></div>
        //                         <div id="u204_text" class="text ">
        //                             <p><span>Total</span></p>
        //                         </div>
        //                     </div>
        //                 </div>
        //             </div>
        //         </div>
        //     </div>
        //     <div id="u4_state4" class="panel_state" style="visibility: hidden; display: none;">
        //         <div id="u4_state4_content" class="panel_state_content">
        //             <div id="u205">
        //                 <div id="u206">
        //                     <div id="u207">
        //                         <div id="u207_div"></div>
        //                     </div>
        //                     <div id="u208">
        //                         <div id="u209" class=" paragraph">
        //                             <div id="u209_div"></div>
        //                             <div id="u209_text" class="text ">
        //                                 <p style="font-size:18px;"><span>Sales</span></p>
        //                                 <p style="font-size:24px;"><span>$980</span></p>
        //                             </div>
        //                         </div>
        //                         <div id="u210">
        //                             <div id="u211">
        //                                 <div id="u211_div"></div>
        //                             </div>
        //                             <div id="u212">
        //                                 <div id="u212_div"></div>
        //                             </div>
        //                             <div id="u213">
        //                                 <div id="u213_div"></div>
        //                             </div>
        //                             <div id="u214">
        //                                 <div id="u214_div"></div>
        //                             </div>
        //                             <div id="u215">
        //                                 <div id="u215_div"></div>
        //                             </div>
        //                         </div>
        //                     </div>
        //                     <div id="u216">
        //                         <div id="u217" class=" paragraph">
        //                             <div id="u217_div"></div>
        //                             <div id="u217_text" class="text ">
        //                                 <p style="font-size:18px;"><span>Today</span></p>
        //                                 <p style="font-size:24px;"><span>490</span></p>
        //                             </div>
        //                         </div>
        //                         <div id="u218">
        //                             <div id="u219">
        //                                 <div id="u219_div"></div>
        //                             </div>
        //                             <div id="u220">
        //                                 <div id="u220_div"></div>
        //                             </div>
        //                             <div id="u221">
        //                                 <div id="u221_div"></div>
        //                             </div>
        //                             <div id="u222">
        //                                 <div id="u222_div"></div>
        //                             </div>
        //                             <div id="u223">
        //                                 <div id="u223_div"></div>
        //                             </div>
        //                         </div>
        //                     </div>
        //                     <div id="u224">
        //                         <div id="u225">
        //                             <div id="u226">
        //                                 <div id="u226_div"></div>
        //                             </div>
        //                             <div id="u227">
        //                                 <div id="u227_div"></div>
        //                             </div>
        //                             <div id="u228">
        //                                 <div id="u228_div"></div>
        //                             </div>
        //                             <div id="u229">
        //                                 <div id="u229_div"></div>
        //                             </div>
        //                             <div id="u230">
        //                                 <div id="u230_div"></div>
        //                             </div>
        //                         </div>
        //                         <div id="u231" class=" paragraph">
        //                             <div id="u231_div"></div>
        //                             <div id="u231_text" class="text ">
        //                                 <p style="font-size:18px;"><span>Visits</span></p>
        //                                 <p style="font-size:24px;"><span>2908</span></p>
        //                             </div>
        //                         </div>
        //                     </div>
        //                 </div>
        //                 <div id="u232">
        //                     <div id="u233">
        //                         <div id="u233_div"></div>
        //                     </div>
        //                     <div id="u234" class=" paragraph selected" style="cursor: pointer;">
        //                         <div id="u234_div" class="selected" tabindex="0"></div>
        //                         <div id="u234_text" class="text ">
        //                             <p id="cache8"><span id="cache9" style="font-weight: bold;">Historic</span></p>
        //                         </div>
        //                     </div>
        //                     <div id="u235" class=" paragraph" style="cursor: pointer;">
        //                         <div id="u235_div" tabindex="0"></div>
        //                         <div id="u235_text" class="text ">
        //                             <p><span>Food</span></p>
        //                         </div>
        //                     </div>
        //                     <div id="u236" class=" paragraph" style="cursor: pointer;">
        //                         <div id="u236_div" tabindex="0"></div>
        //                         <div id="u236_text" class="text ">
        //                             <p><span>Jazz</span></p>
        //                         </div>
        //                     </div>
        //                     <div id="u237" class=" paragraph" style="cursor: pointer;">
        //                         <div id="u237_div" tabindex="0"></div>
        //                         <div id="u237_text" class="text ">
        //                             <p><span>Dance</span></p>
        //                         </div>
        //                     </div>
        //                     <div id="u238" class=" paragraph" style="cursor: pointer;">
        //                         <div id="u238_div" tabindex="0"></div>
        //                         <div id="u238_text" class="text ">
        //                             <p><span>Total</span></p>
        //                         </div>
        //                     </div>
        //                 </div>
        //             </div>
        //         </div>
        //     </div>
        // </div>
        // <div id="u239">
        //     <div id="u240">
        //         <div id="u240_div"></div>
        //     </div>
        //     <div id="u241" class=" paragraph">
        //         <div id="u241_div"></div>
        //         <div id="u241_text" class="text ">
        //             <p><span>Total amount of tickets sold</span></p>
        //         </div>
        //     </div>
        //     <div id="u242">
        //         <div id="u243">
        //             <div id="u244">
        //                 <img id="u244_img" class="img " src="images/administrator_dashboard/rectangle_u244.png">
        //             </div>
        //             <div id="u245" class=" paragraph">
        //                 <div id="u245_div"></div>
        //                 <div id="u245_text" class="text ">
        //                     <p><span>Dance</span></p>
        //                 </div>
        //             </div>
        //             <div id="u246">
        //                 <div id="u246_div"></div>
        //             </div>
        //             <div id="u247" class=" paragraph">
        //                 <div id="u247_div"></div>
        //                 <div id="u247_text" class="text ">
        //                     <p><span>75%</span></p>
        //                 </div>
        //             </div>
        //         </div>
        //         <div id="u248">
        //             <div id="u249">
        //                 <img id="u249_img" class="img " src="images/administrator_dashboard/rectangle_u249.png">
        //             </div>
        //             <div id="u251">
        //                 <div id="u251_div"></div>
        //             </div>
        //             <div id="u253">
        //                 <div id="u253_div"></div>
        //             </div>
        //             <div id="u254" class=" paragraph">
        //                 <div id="u254_div"></div>
        //                 <div id="u254_text" class="text ">
        //                     <p><span>Jazz</span></p>
        //                 </div>
        //             </div>
        //             <div id="u255" class=" paragraph">
        //                 <div id="u255_div"></div>
        //                 <div id="u255_text" class="text ">
        //                     <p><span>50%</span></p>
        //                 </div>
        //             </div>
        //         </div>
        //         <div id="u256">
        //             <div id="u257">
        //                 <img id="u257_img" class="img " src="images/administrator_dashboard/rectangle_u257.png">
        //             </div>
        //             <div id="u259">
        //                 <div id="u259_div"></div>
        //             </div>
        //             <div id="u260">
        //                 <div id="u260_div"></div>
        //             </div>
        //             <div id="u261" class=" paragraph">
        //                 <div id="u261_div"></div>
        //                 <div id="u261_text" class="text ">
        //                     <p><span>Food</span></p>
        //                 </div>
        //             </div>
        //             <div id="u262" class=" paragraph">
        //                 <div id="u262_div"></div>
        //                 <div id="u262_text" class="text ">
        //                     <p><span>25%</span></p>
        //                 </div>
        //             </div>
        //         </div>
        //         <div id="u263">
        //             <div id="u264">
        //                 <img id="u264_img" class="img " src="images/administrator_dashboard/rectangle_u264.png">
        //             </div>
        //             <div id="u266">
        //                 <div id="u266_div"></div>
        //             </div>
        //             <div id="u267">
        //                 <div id="u267_div"></div>
        //             </div>
        //             <div id="u268" class=" paragraph">
        //                 <div id="u268_div"></div>
        //                 <div id="u268_text" class="text ">
        //                     <p><span>Historic</span></p>
        //                 </div>
        //             </div>
        //             <div id="u269" class=" paragraph">
        //                 <div id="u269_div"></div>
        //                 <div id="u269_text" class="text ">
        //                     <p><span>25%</span></p>
        //                 </div>
        //             </div>
        //         </div>
        //     </div>
        // </div>
        // <!-- </div> -->
        // <div id="u270">
        //     <div id="u271">
        //         <div id="u271_div"></div>
        //     </div>
        //     <div id="u272">
        //         <div id="u273">
        //             <div id="u273_div"></div>
        //         </div>
        //         <div id="u274">
        //             <div id="u274_div"></div>
        //         </div>
        //     </div>
        //     <div id="u275" class=" paragraph">
        //         <div id="u275_div"></div>
        //         <div id="u275_text" class="text ">
        //             <p><span>Historic ticket revenue</span></p>
        //         </div>
        //     </div>
        //     <div id="u276" class=" paragraph">
        //         <div id="u276_div"></div>
        //         <div id="u276_text" class="text ">
        //             <p><span>€ 1.986</span></p>
        //         </div>
        //     </div>
        // </div>
        // <div id="u277">
        //     <div id="u278">
        //         <div id="u278_div"></div>
        //     </div>
        //     <div id="u279">
        //         <div id="u280">
        //             <div id="u280_div"></div>
        //         </div>
        //         <div id="u281">
        //             <div id="u281_div"></div>
        //         </div>
        //     </div>
        //     <div id="u282" class=" paragraph">
        //         <div id="u282_div"></div>
        //         <div id="u282_text" class="text ">
        //             <p><span>Historic unsold tickets</span></p>
        //         </div>
        //     </div>
        //     <div id="u283" class=" paragraph">
        //         <div id="u283_div"></div>
        //         <div id="u283_text" class="text ">
        //             <p><span>360</span></p>
        //         </div>
        //     </div>
        // </div>
        // <div id="u284">
        //     <div id="u285">
        //         <div id="u285_div"></div>
        //     </div>
        //     <div id="u286">
        //         <div id="u287">
        //             <div id="u287_div"></div>
        //         </div>
        //         <div id="u288">
        //             <div id="u288_div"></div>
        //         </div>
        //     </div>
        //     <div id="u289" class=" paragraph">
        //         <div id="u289_div"></div>
        //         <div id="u289_text" class="text ">
        //             <p><span>Historic sold tickets</span></p>
        //         </div>
        //     </div>
        //     <div id="u290" class=" paragraph">
        //         <div id="u290_div"></div>
        //         <div id="u290_text" class="text ">
        //             <p><span>120</span></p>
        //         </div>
        //     </div>
        // </div>
        // <div id="u291">
        //     <div id="u292">
        //         <div id="u292_div"></div>
        //     </div>
        //     <div id="u293">
        //         <div id="u294">
        //             <div id="u294_div"></div>
        //         </div>
        //         <div id="u295">
        //             <div id="u295_div"></div>
        //         </div>
        //     </div>
        //     <div id="u296" class=" paragraph">
        //         <div id="u296_div"></div>
        //         <div id="u296_text" class="text ">
        //             <p><span>Food reservation revenue</span></p>
        //         </div>
        //     </div>
        //     <div id="u297" class=" paragraph">
        //         <div id="u297_div"></div>
        //         <div id="u297_text" class="text ">
        //             <p><span>€ 11.753</span></p>
        //         </div>
        //     </div>
        // </div>
        // <div id="u298">
        //     <div id="u299">
        //         <div id="u299_div"></div>
        //     </div>
        //     <div id="u300">
        //         <div id="u301">
        //             <div id="u301_div"></div>
        //         </div>
        //         <div id="u302">
        //             <div id="u302_div"></div>
        //         </div>
        //     </div>
        //     <div id="u303" class=" paragraph">
        //         <div id="u303_div"></div>
        //         <div id="u303_text" class="text ">
        //             <p><span>Food total free seats</span></p>
        //         </div>
        //     </div>
        //     <div id="u304" class=" paragraph">
        //         <div id="u304_div"></div>
        //         <div id="u304_text" class="text ">
        //             <p><span>947</span></p>
        //         </div>
        //     </div>
        // </div>
        // <div id="u305">
        //     <div id="u306">
        //         <div id="u306_div"></div>
        //     </div>
        //     <div id="u307">
        //         <div id="u308">
        //             <div id="u308_div"></div>
        //         </div>
        //         <div id="u309">
        //             <div id="u309_div"></div>
        //         </div>
        //     </div>
        //     <div id="u310" class=" paragraph">
        //         <div id="u310_div"></div>
        //         <div id="u310_text" class="text ">
        //             <p><span>Food total reservations</span></p>
        //         </div>
        //     </div>
        //     <div id="u311" class=" paragraph">
        //         <div id="u311_div"></div>
        //         <div id="u311_text" class="text ">
        //             <p><span>79</span></p>
        //         </div>
        //     </div>
        // </div>
        // <div id="u312">
        //     <div id="u313">
        //         <div id="u313_div"></div>
        //     </div>
        //     <div id="u314">
        //         <div id="u315">
        //             <div id="u315_div"></div>
        //         </div>
        //         <div id="u316">
        //             <div id="u316_div"></div>
        //         </div>
        //     </div>
        //     <div id="u317" class=" paragraph">
        //         <div id="u317_div"></div>
        //         <div id="u317_text" class="text ">
        //             <p><span>Jazz ticket revenue</span></p>
        //         </div>
        //     </div>
        //     <div id="u318" class=" paragraph">
        //         <div id="u318_div"></div>
        //         <div id="u318_text" class="text ">
        //             <p><span>€ 104.198</span></p>
        //         </div>
        //     </div>
        // </div>
        // <div id="u319">
        //     <div id="u320">
        //         <div id="u320_div"></div>
        //     </div>
        //     <div id="u321">
        //         <div id="u322">
        //             <div id="u322_div"></div>
        //         </div>
        //         <div id="u323">
        //             <div id="u323_div"></div>
        //         </div>
        //     </div>
        //     <div id="u324" class=" paragraph">
        //         <div id="u324_div"></div>
        //         <div id="u324_text" class="text ">
        //             <p><span>Jazz unsold tickets</span></p>
        //         </div>
        //     </div>
        //     <div id="u325" class=" paragraph">
        //         <div id="u325_div"></div>
        //         <div id="u325_text" class="text ">
        //             <p><span>2.197</span></p>
        //         </div>
        //     </div>
        // </div>
        // <div id="u326">
        //     <div id="u327">
        //         <div id="u327_div"></div>
        //     </div>
        //     <div id="u328">
        //         <div id="u329">
        //             <div id="u329_div"></div>
        //         </div>
        //         <div id="u330">
        //             <div id="u330_div"></div>
        //         </div>
        //     </div>
        //     <div id="u331" class=" paragraph">
        //         <div id="u331_div"></div>
        //         <div id="u331_text" class="text ">
        //             <p><span>Jazz sold tickets</span></p>
        //         </div>
        //     </div>
        //     <div id="u332" class=" paragraph">
        //         <div id="u332_div"></div>
        //         <div id="u332_text" class="text ">
        //             <p><span>2.153</span></p>
        //         </div>
        //     </div>
        // </div>
        // <div id="u333">
        //     <div id="u334">
        //         <div id="u334_div"></div>
        //     </div>
        //     <div id="u335">
        //         <div id="u336">
        //             <div id="u336_div"></div>
        //         </div>
        //         <div id="u337">
        //             <div id="u337_div"></div>
        //         </div>
        //     </div>
        //     <div id="u338" class=" paragraph">
        //         <div id="u338_div"></div>
        //         <div id="u338_text" class="text ">
        //             <p><span>Dance ticket revenue</span></p>
        //         </div>
        //     </div>
        //     <div id="u339" class=" paragraph">
        //         <div id="u339_div"></div>
        //         <div id="u339_text" class="text ">
        //             <p><span>€ 565.681</span></p>
        //         </div>
        //     </div>
        // </div>
        // <div id="u340">
        //     <div id="u341">
        //         <div id="u341_div"></div>
        //     </div>
        //     <div id="u342">
        //         <div id="u343">
        //             <div id="u343_div"></div>
        //         </div>
        //         <div id="u344">
        //             <div id="u344_div"></div>
        //         </div>
        //     </div>
        //     <div id="u345" class=" paragraph">
        //         <div id="u345_div"></div>
        //         <div id="u345_text" class="text ">
        //             <p><span>Dance unsold tickets</span></p>
        //         </div>
        //     </div>
        //     <div id="u346" class=" paragraph">
        //         <div id="u346_div"></div>
        //         <div id="u346_text" class="text ">
        //             <p><span>2.577</span></p>
        //         </div>
        //     </div>
        // </div>
        // <div id="u347">
        //     <div id="u348">
        //         <div id="u348_div"></div>
        //     </div>
        //     <div id="u349">
        //         <div id="u350">
        //             <div id="u350_div"></div>
        //         </div>
        //         <div id="u351">
        //             <div id="u351_div"></div>
        //         </div>
        //     </div>
        //     <div id="u352" class=" paragraph">
        //         <div id="u352_div"></div>
        //         <div id="u352_text" class="text ">
        //             <p><span>Dance sold tickets</span></p>
        //         </div>
        //     </div>
        //     <div id="u353" class=" paragraph">
        //         <div id="u353_div"></div>
        //         <div id="u353_text" class="text ">
        //             <p><span>7.823</span></p>
        //         </div>
        //     </div>
        // </div>
        // <div id="u354">
        //     <div id="u355">
        //         <div id="u355_div"></div>
        //     </div>
        //     <div id="u356">
        //         <div id="u357">
        //             <div id="u357_div"></div>
        //         </div>
        //         <div id="u358">
        //             <div id="u358_div"></div>
        //         </div>
        //     </div>
        //     <div id="u359" class=" paragraph">
        //         <div id="u359_div"></div>
        //         <div id="u359_text" class="text ">
        //             <p><span>Total ticket revenue</span></p>
        //         </div>
        //     </div>
        //     <div id="u360" class=" paragraph">
        //         <div id="u360_div"></div>
        //         <div id="u360_text" class="text ">
        //             <p><span>€ 689.960</span></p>
        //         </div>
        //     </div>
        // </div>
        // <div id="u361">
        //     <div id="u362">
        //         <div id="u362_div"></div>
        //     </div>
        //     <div id="u363">
        //         <div id="u364">
        //             <div id="u364_div"></div>
        //         </div>
        //         <div id="u365">
        //             <div id="u365_div"></div>
        //         </div>
        //     </div>
        //     <div id="u366" class=" paragraph">
        //         <div id="u366_div"></div>
        //         <div id="u366_text" class="text ">
        //             <p><span>Total unsold tickets</span></p>
        //         </div>
        //     </div>
        //     <div id="u367" class=" paragraph">
        //         <div id="u367_div"></div>
        //         <div id="u367_text" class="text ">
        //             <p><span>6.342</span></p>
        //         </div>
        //     </div>
        // </div>

        ?>

    </main>
</div>
<?php $this->end(); ?>