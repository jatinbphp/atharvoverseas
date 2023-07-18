<?php 
include 'includes/header.php';

$MBBS_INDIA_DATA = [];
$sqlIndia = "SELECT * FROM section WHERE page_name = 'india' ORDER BY `section`.`id` ASC";
$resultIndia = mysqli_query($conn,$sqlIndia);

if(!empty($resultIndia)){  
    while($MBBS_INDIA = mysqli_fetch_array($resultIndia)) {
        $MBBS_INDIA_DATA[] = $MBBS_INDIA;
    }
} ?>

<div id="Content">
    <div class="content_wrapper clearfix">
        <div class="sections_group">
            <div class="entry-content" itemprop="mainContentOfPage">
                <div class="section mcb-section   " style="padding-top:0px; padding-bottom:0px; background-color:">
                    <div class="section_wrapper mcb-section-inner">
                        <div class="wrap mcb-wrap one  valign-top clearfix" style="padding:10">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one column_column  column-margin-">
                                    <div class="column_attr clearfix align_center" style>
                                        <div style="background-color: #01102f;padding: 22px 5px;margin: 9px;color: white;border-radius: 6px;">
                                            <h1 style="color: white;">MBBS Admission in India</h1>
                                            <h2 style="color: white;font-size: 16px;">Most Affordable Pvt Medical College of India.</h2>
                                            <p style="line-height: 29px;">Get Medical Admission direct in top rated Pvt Medical College in NRI and Management Quota at
                                                <br>
                                                <span style="font-size: 24px;font-weight: 900;color: #e11e27;">Low Cost packages </span>in India.
                                                <br>
                                                Call now to book your MBBS Seat with 100% Assurance
                                            </p>
                                            <a style="font-size: 24px;font-weight: 900;color: #dfdf00;" href="tel:+917425027051">+91-7425027051</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section mcb-section   " style="padding-top:0px; padding-bottom:0px; background-color:">
                    <div class="section_wrapper mcb-section-inner">
                        <div class="wrap mcb-wrap one-fifth  valign-top clearfix" style="padding:10">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one column_column  column-margin-">
                                    <div class="column_attr clearfix align_center" style>
                                        <div style="background-color: #01102f;
                                            padding: 22px;
                                            margin: 9px;
                                            color: white;
                                            border-radius: 6px;">
                                            <span><i class="fas fa-book" style="font-size: 36px;"></i></span><br>
                                            <hr>
                                            <h3 style="color: white;">MBBS</h3>
                                            <p>Bachelor of Medicine and Bachelor of Surgery</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wrap mcb-wrap one-fifth  valign-top clearfix" style="padding:10">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one column_column  column-margin-">
                                    <div class="column_attr clearfix align_center" style>
                                        <div style="background-color: #01102f;
                                            padding: 22px;
                                            margin: 9px;
                                            color: white;
                                            border-radius: 6px;">
                                            <span><i class="fas fa-book" style="font-size: 36px;"></i></span><br>
                                            <hr>
                                            <h3 style="color: white;">BHMS</h3>
                                            <p>Bachelor of Homeopathic Medicine & Surgery</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wrap mcb-wrap one-fifth  valign-top clearfix" style="padding:10">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one column_column  column-margin-">
                                    <div class="column_attr clearfix align_center" style>
                                        <div style="background-color: #01102f;
                                            padding: 22px;
                                            margin: 9px;
                                            color: white;
                                            border-radius: 6px;">
                                            <span><i class="fas fa-book" style="font-size: 36px;"></i></span><br>
                                            <hr>
                                            <h3 style="color: white;">BAMS</h3>
                                            <p>Bachelor of Ayurvedic Medicine & Surgery</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wrap mcb-wrap one-fifth  valign-top clearfix" style="padding:10">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one column_column  column-margin-">
                                    <div class="column_attr clearfix align_center" style>
                                        <div style="background-color: #01102f;
                                            padding: 22px;
                                            margin: 9px;
                                            color: white;
                                            border-radius: 6px;">
                                            <span><i class="fas fa-book" style="font-size: 36px;"></i></span><br>
                                            <hr>
                                            <h3 style="color: white;">BDS</h3>
                                            <p>Bachelor of Dental <br>Surgery</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wrap mcb-wrap one-fifth  valign-top clearfix" style="padding:10">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one column_column  column-margin-">
                                    <div class="column_attr clearfix align_center" style>
                                        <div style="background-color: #01102f;
                                            padding: 22px;
                                            margin: 9px;
                                            color: white;
                                            border-radius: 6px;">
                                            <span><i class="fas fa-book" style="font-size: 36px;"></i></span><br>
                                            <hr>
                                            <h3 style="color: white;">BVSC</h3>
                                            <p>Bachelor of <br>Veterinary Science </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php 
                if(!empty($MBBS_INDIA_DATA[0]['title']) || !empty($MBBS_INDIA_DATA[0]['content'])){ ?>
                    <div class="section mcb-section   " style="padding-top:60px; padding-bottom:0px; background-color:#0cc5b7">
                        <div class="section_wrapper mcb-section-inner">
                            <div class="wrap mcb-wrap one  valign-top clearfix" style="background-color:#0cc5b7">
                                <div class="mcb-wrap-inner">

                                    <?php 
                                    if(!empty($MBBS_INDIA_DATA[0]['title'])){ ?>
                                        <div class="column mcb-column one column_fancy_heading ">
                                            <div class="fancy_heading fancy_heading_icon">
                                                <h2 class="title"> 
                                                    <?php echo isset($MBBS_INDIA_DATA[0]['title']) ? $MBBS_INDIA_DATA[0]['title'] : "" ?>
                                                </h2>
                                                <div class="inside"><img class="scale-with-grid" src="assets/img/slid.png" alt="line" style="
                                                    width: 41%;
                                                    height: 6px;
                                                    " /></div>
                                            </div>
                                        </div>
                                    <?php
                                    } ?>

                                    <?php 
                                    if(!empty($MBBS_INDIA_DATA[0]['content'])){ ?>
                                        <div class="column mcb-column one column_column  column-margin-">
                                            <div class="column_attr clearfix" style>
                                                <?php echo isset($MBBS_INDIA_DATA[0]['content']) ? $MBBS_INDIA_DATA[0]['content'] : "" ?>      
                                            </div>
                                        </div>
                                    <?php
                                    } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                } ?>

                <?php 
                if(!empty($MBBS_INDIA_DATA[1]['title']) || !empty($MBBS_INDIA_DATA[1]['content'])){ ?>
                    <div class="section mcb-section   " style="padding-top:60px; padding-bottom:0px; background-color:">
                        <div class="section_wrapper mcb-section-inner">
                            <div class="wrap mcb-wrap one  valign-top clearfix" style>
                                <div class="mcb-wrap-inner">

                                    <?php 
                                    if(!empty($MBBS_INDIA_DATA[1]['title'])){ ?>
                                        <div class="column mcb-column one column_fancy_heading ">
                                            <div class="fancy_heading fancy_heading_icon">
                                                <div class="inside">
                                                    <h3 style="text-transform: uppercase;">
                                                        <?php echo isset($MBBS_INDIA_DATA[1]['title']) ? $MBBS_INDIA_DATA[1]['title'] : "" ?>
                                                    </h3>
                                                    <img class="scale-with-grid" src="assets/img/slid.png" alt="line" style="
                                                        width: 41%;
                                                        height: 6px;
                                                        " />
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    } ?>

                                    <?php 
                                    if(!empty($MBBS_INDIA_DATA[1]['content'])){ ?>
                                        <div class="column mcb-column one column_column  column-margin-">
                                            <div class="column_attr clearfix" style>
                                                <?php echo isset($MBBS_INDIA_DATA[1]['content']) ? $MBBS_INDIA_DATA[1]['content'] : "" ?>
                                            </div>
                                        </div>
                                    <?php
                                    } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                } ?>

                <?php 
                if(!empty($MBBS_INDIA_DATA[2]['title']) || !empty($MBBS_INDIA_DATA[2]['content'])){ ?>
                    <div class="section mcb-section   " style="padding-top:60px; padding-bottom:0px; background-color:#0cc5b7">
                        <div class="section_wrapper mcb-section-inner">
                            <div class="wrap mcb-wrap one  valign-top clearfix" style="background-color:#0cc5b7">
                                <div class="mcb-wrap-inner">

                                    <?php 
                                    if(!empty($MBBS_INDIA_DATA[2]['title'])){ ?>
                                        <div class="column mcb-column one column_fancy_heading ">
                                            <div class="fancy_heading fancy_heading_icon">
                                                <h2 class="title">
                                                    <?php echo isset($MBBS_INDIA_DATA[2]['title']) ? $MBBS_INDIA_DATA[2]['title'] : "" ?>
                                                </h2>
                                                <div class="inside"><img class="scale-with-grid" src="assets/img/slid.png" alt="line" style="
                                                    width: 41%;
                                                    height: 6px;
                                                    " /></div>
                                            </div>
                                        </div>
                                    <?php
                                    } ?>

                                    <div class="column mcb-column one-third column_image ">
                                        <div class="image_frame image_item no_link scale-with-grid no_border">
                                            <div class="image_wrapper"><img class="scale-with-grid" src="assets/img/mbbs_india/20803a11a27965f6cc4e8dcb554ceff9.jpg" alt="20803a11a27965f6cc4e8dcb554ceff9" width="791" height="484" /></div>
                                        </div>
                                    </div>

                                    <?php 
                                    if(!empty($MBBS_INDIA_DATA[2]['content'])){ ?>
                                        <div class="column mcb-column two-third column_column  column-margin-">
                                            <div class="column_attr clearfix" style>
                                                <?php echo isset($MBBS_INDIA_DATA[2]['content']) ? $MBBS_INDIA_DATA[2]['content'] : "" ?>
                                            </div>
                                        </div>
                                    <?php
                                    } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                } ?>

                <?php 
                if(!empty($MBBS_INDIA_DATA[3]['title']) || !empty($MBBS_INDIA_DATA[3]['content'])){ ?>
                    <div class="section mcb-section   " style="padding-top:60px; padding-bottom:0px; background-color:">
                        <div class="section_wrapper mcb-section-inner">
                            <div class="wrap mcb-wrap one  valign-top clearfix" style>
                                <div class="mcb-wrap-inner">

                                    <?php 
                                    if(!empty($MBBS_INDIA_DATA[3]['title'])){ ?>
                                        <div class="column mcb-column one column_fancy_heading ">
                                            <div class="fancy_heading fancy_heading_icon">
                                                <h2 class="title">
                                                    <?php echo isset($MBBS_INDIA_DATA[3]['title']) ? $MBBS_INDIA_DATA[3]['title'] : "" ?>
                                                </h2>
                                                <div class="inside"><img class="scale-with-grid" src="assets/img/slid.png" alt="line" style="
                                                    width: 41%;
                                                    height: 6px;
                                                    " /></div>
                                            </div>
                                        </div>
                                    <?php
                                    } ?>

                                    <?php echo isset($MBBS_INDIA_DATA[3]['content']) ? $MBBS_INDIA_DATA[3]['content'] : "" ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                } ?>

                <?php 
                if(!empty($MBBS_INDIA_DATA[4]['title']) || !empty($MBBS_INDIA_DATA[4]['content'])){ ?>
                    <div class="section mcb-section   " style="padding-top:60px; padding-bottom:0px; background-color:#0cc5b7">
                        <div class="section_wrapper mcb-section-inner">
                            <div class="wrap mcb-wrap one  valign-top clearfix" style="background-color:#0cc5b7">
                                <div class="mcb-wrap-inner">

                                    <?php 
                                    if(!empty($MBBS_INDIA_DATA[4]['title'])){ ?>
                                        <div class="column mcb-column one column_fancy_heading ">
                                            <div class="fancy_heading fancy_heading_icon">
                                                <div class="animate" data-anim-type="fadeInUp">
                                                    <h2 class="title">
                                                        <?php echo isset($MBBS_INDIA_DATA[4]['title']) ? $MBBS_INDIA_DATA[4]['title'] : "" ?>
                                                    </h2>
                                                    <div class="inside"><img class="scale-with-grid" src="assets/img/slid.png" alt="line" style="
                                                        width: 41%;
                                                        height: 6px;
                                                        " /></div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    } ?>

                                    <?php echo isset($MBBS_INDIA_DATA[4]['content']) ? $MBBS_INDIA_DATA[4]['content'] : "" ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                } ?>

                <?php 
                if(!empty($MBBS_INDIA_DATA[5]['title']) || !empty($MBBS_INDIA_DATA[5]['content'])){ ?>
                    <div class="section mcb-section   " style="padding-top:60px; padding-bottom:0px; background-color:">
                        <div class="section_wrapper mcb-section-inner">
                            <div class="wrap mcb-wrap one  valign-top clearfix" style>
                                <div class="mcb-wrap-inner">

                                    <?php 
                                    if(!empty($MBBS_INDIA_DATA[5]['title'])){ ?>
                                        <div class="column mcb-column one column_fancy_heading ">
                                            <div class="fancy_heading fancy_heading_icon">
                                                <div class="animate" data-anim-type="fadeInUp">
                                                    <h2 class="title">
                                                        <?php echo isset($MBBS_INDIA_DATA[5]['title']) ? $MBBS_INDIA_DATA[5]['title'] : "" ?>
                                                    </h2>
                                                    <div class="inside"><img class="scale-with-grid" src="assets/img/slid.png" alt="line" style="
                                                        width: 41%;
                                                        height: 6px;
                                                        " /></div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    } ?>

                                    <div class="column mcb-column one-fourth column_image ">
                                        <div class="image_frame image_item no_link scale-with-grid no_border">
                                            <div class="image_wrapper"><img class="scale-with-grid" src="assets/img/mbbs_india/20803a11a27965f6cc4e8dcb554ceff9.jpg" alt="20803a11a27965f6cc4e8dcb554ceff9" width="791" height="484" /></div>
                                        </div>
                                    </div>

                                    <?php 
                                    if(!empty($MBBS_INDIA_DATA[5]['content'])){ ?>
                                        <div class="column mcb-column three-fourth column_column  column-margin-">
                                            <div class="column_attr clearfix" style>
                                                <?php echo isset($MBBS_INDIA_DATA[5]['content']) ? $MBBS_INDIA_DATA[5]['content'] : "" ?>
                                            </div>
                                        </div>
                                    <?php
                                    } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                } ?>

                <?php 
                if(!empty($MBBS_INDIA_DATA[6]['title']) || !empty($MBBS_INDIA_DATA[6]['content'])){ ?>
                    <div class="section mcb-section   " style="padding-top:60px; padding-bottom:0px; background-color:#0cc5b7">
                        <div class="section_wrapper mcb-section-inner">
                            <div class="wrap mcb-wrap one  valign-top clearfix" style>
                                <div class="mcb-wrap-inner">

                                    <?php 
                                    if(!empty($MBBS_INDIA_DATA[6]['title'])){ ?>
                                        <div class="column mcb-column one column_fancy_heading ">
                                            <div class="fancy_heading fancy_heading_icon">
                                                <h2 class="title">
                                                    <?php echo isset($MBBS_INDIA_DATA[6]['title']) ? $MBBS_INDIA_DATA[6]['title'] : "" ?>
                                                </h2>
                                                <div class="inside"><img class="scale-with-grid" src="assets/img/slid.png" alt="line" style="
                                                    width: 41%;
                                                    height: 6px;
                                                    " /></div>
                                            </div>
                                        </div>
                                    <?php
                                    } ?>

                                    <?php echo isset($MBBS_INDIA_DATA[6]['content']) ? $MBBS_INDIA_DATA[6]['content'] : "" ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                } ?>

                <?php 
                if(!empty($MBBS_INDIA_DATA[7]['title']) || !empty($MBBS_INDIA_DATA[7]['content'])){ ?>
                    <div class="section mcb-section   " style="padding-top:60px; padding-bottom:0px; background-color:">
                        <div class="section_wrapper mcb-section-inner">
                            <div class="wrap mcb-wrap one  valign-top clearfix" style>
                                <div class="mcb-wrap-inner">

                                    <?php 
                                    if(!empty($MBBS_INDIA_DATA[7]['title'])){ ?>
                                        <div class="column mcb-column one column_fancy_heading ">
                                            <div class="fancy_heading fancy_heading_icon">
                                                <div class="animate" data-anim-type="fadeInUp">
                                                    <h2 class="title">
                                                        <?php echo isset($MBBS_INDIA_DATA[7]['title']) ? $MBBS_INDIA_DATA[7]['title'] : "" ?>
                                                    </h2>
                                                    <div class="inside"><img class="scale-with-grid" src="assets/img/slid.png" alt="line" style="
                                                        width: 41%;
                                                        height: 6px;
                                                        " /></div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    } ?>

                                    <div class="column mcb-column two-fifth column_image ">
                                        <div class="image_frame image_item no_link scale-with-grid no_border">
                                            <div class="image_wrapper"><img class="scale-with-grid" src="assets/img/mbbs_india/BAMS.jpg" alt="BAMS" width="960" height="540" /></div>
                                        </div>
                                    </div>

                                    <?php 
                                    if(!empty($MBBS_INDIA_DATA[7]['content'])){ ?>
                                        <div class="column mcb-column three-fifth column_column  column-margin-">
                                            <div class="column_attr clearfix" style>
                                                <?php echo isset($MBBS_INDIA_DATA[7]['content']) ? $MBBS_INDIA_DATA[7]['content'] : "" ?>
                                            </div>
                                        </div>
                                    <?php
                                    } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                } ?>

                <?php 
                if(!empty($MBBS_INDIA_DATA[8]['title']) || !empty($MBBS_INDIA_DATA[8]['content'])){ ?>
                    <div class="section mcb-section   " style="padding-top:60px; padding-bottom:0px; background-color:#0cc5b7">
                        <div class="section_wrapper mcb-section-inner">
                            <div class="wrap mcb-wrap one  valign-top clearfix" style>
                                <div class="mcb-wrap-inner">

                                    <?php 
                                    if(!empty($MBBS_INDIA_DATA[8]['title'])){ ?>
                                        <div class="column mcb-column one column_fancy_heading ">
                                            <div class="fancy_heading fancy_heading_icon">
                                                <h2 class="title">
                                                    <?php echo isset($MBBS_INDIA_DATA[8]['title']) ? $MBBS_INDIA_DATA[8]['title'] : "" ?>
                                                </h2>
                                                <div class="inside"><img class="scale-with-grid" src="assets/img/slid.png" alt="line" style="
                                                    width: 41%;
                                                    height: 6px;
                                                    " /></div>
                                            </div>
                                        </div>
                                    <?php
                                    } ?>
                                    <?php echo isset($MBBS_INDIA_DATA[8]['content']) ? $MBBS_INDIA_DATA[8]['content'] : "" ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                } ?>

                <?php 
                if(!empty($MBBS_INDIA_DATA[9]['title']) || !empty($MBBS_INDIA_DATA[9]['content'])){ ?>
                    <div class="section mcb-section   " style="padding-top:60px; padding-bottom:0px; background-color:">
                        <div class="section_wrapper mcb-section-inner">
                            <div class="wrap mcb-wrap one  valign-top clearfix" style>
                                <div class="mcb-wrap-inner">

                                    <?php 
                                    if(!empty($MBBS_INDIA_DATA[9]['title'])){ ?>
                                        <div class="column mcb-column one column_fancy_heading ">
                                            <div class="fancy_heading fancy_heading_icon">
                                                <div class="animate" data-anim-type="fadeInUp">
                                                    <h2 class="title">
                                                        <?php echo isset($MBBS_INDIA_DATA[9]['title']) ? $MBBS_INDIA_DATA[9]['title'] : "" ?>
                                                    </h2>
                                                    <div class="inside"><img class="scale-with-grid" src="assets/img/slid.png" alt="line" style="
                                                        width: 41%;
                                                        height: 6px;
                                                        " /></div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    } ?>
                                    
                                    <div class="column mcb-column two-fifth column_image ">
                                        <div class="image_frame image_item no_link scale-with-grid no_border">
                                            <div class="image_wrapper"><img class="scale-with-grid" src="assets/img/mbbs_india/gilbert-dentist-general-dentistry-800x400-1.jpg" alt="gilbert-dentist-general-dentistry-800x400" width="800" height="400" /></div>
                                        </div>
                                    </div>

                                    <?php 
                                    if(!empty($MBBS_INDIA_DATA[9]['content'])){ ?>
                                        <div class="column mcb-column three-fifth column_column  column-margin-">
                                            <div class="column_attr clearfix" style>
                                                <?php echo isset($MBBS_INDIA_DATA[9]['content']) ? $MBBS_INDIA_DATA[9]['content'] : "" ?>
                                            </div>
                                        </div>
                                    <?php
                                    } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                } ?>

                <?php 
                if(!empty($MBBS_INDIA_DATA[10]['title']) || !empty($MBBS_INDIA_DATA[10]['content'])){ ?>
                    <div class="section mcb-section   " style="padding-top:0px; padding-bottom:0px; background-color:">
                        <div class="section_wrapper mcb-section-inner">
                            <div class="wrap mcb-wrap one  clearfix" style>
                                <div class="mcb-wrap-inner">

                                    <?php 
                                    if(!empty($MBBS_INDIA_DATA[10]['title'])){ ?>
                                        <div class="column mcb-column one column_fancy_heading ">
                                            <div class="fancy_heading fancy_heading_icon">
                                                <h2 class="title">
                                                    <?php echo isset($MBBS_INDIA_DATA[10]['title']) ? $MBBS_INDIA_DATA[10]['title'] : "" ?>
                                                </h2>
                                                <div class="inside"><img class="scale-with-grid" src="assets/img/slid.png" alt="line" style="
                                                    width: 41%;
                                                    height: 6px;
                                                    " /></div>
                                            </div>
                                        </div>
                                    <?php
                                    } ?>
                                    <?php echo isset($MBBS_INDIA_DATA[10]['content']) ? $MBBS_INDIA_DATA[10]['content'] : "" ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                } ?>

                <div class="section the_content no_content">
                    <div class="section_wrapper">
                        <div class="the_content_wrapper"></div>
                    </div>
                </div>
                <div class="section section-page-footer">
                    <div class="section_wrapper clearfix">
                        <div class="column one page-pager"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'includes/footer.php' ?>