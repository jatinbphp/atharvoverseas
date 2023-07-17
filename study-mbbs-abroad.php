<?php 
include 'includes/header.php';
include "postRequest/dbConnection.php";

$EDUCATION_CONSULTANCY = [];
$sql1 = "SELECT * FROM section WHERE id= 8";
$result1 = mysqli_query($conn, $sql1);
if (mysqli_num_rows($result1) === 1) {
    $EDUCATION_CONSULTANCY = mysqli_fetch_assoc($result1);
} 

$STUDY_IN_ABROAD = [];
$sql2 = "SELECT * FROM section WHERE id= 9";
$result2 = mysqli_query($conn, $sql2);
if (mysqli_num_rows($result2) === 1) {
    $STUDY_IN_ABROAD = mysqli_fetch_assoc($result2);
}

$ACCORDING_TO_COUNTRY = [];
$sqlCountry = "SELECT * FROM country";
$resultCountry = mysqli_query($conn,$sqlCountry); ?>

<div id="Content">
    <div class="content_wrapper clearfix">
        <div class="sections_group">
            <div class="entry-content" itemprop="mainContentOfPage">
                <div class="section mcb-section   " style="padding-top:50px; padding-bottom:10px; background-color:#f4f4f4">
                    <div class="section_wrapper mcb-section-inner">
                        <div class="wrap mcb-wrap one  valign-top clearfix" style="">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one column_fancy_heading ">
                                    <div class="fancy_heading fancy_heading_icon">
                                        <div class="animate fadeInUp" data-anim-type="fadeInUp">
                                            <h2 class="title">
                                                <?php echo isset($EDUCATION_CONSULTANCY['title']) ? $EDUCATION_CONSULTANCY['title'] : "" ?>
                                            </h2>
                                            <div class="inside"><img class="scale-with-grid" src="assets/img/study_mbbs_abroad/slid.png" alt="line" style="
                                                width: 41%;
                                                height: 6px;
                                                "></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="column mcb-column two-third column_column  column-margin-">
                                    <div class="column_attr clearfix" style="">
                                        <?php echo isset($EDUCATION_CONSULTANCY['content']) ? $EDUCATION_CONSULTANCY['content'] : "" ?>
                                    </div>
                                </div>
                                <div class="column mcb-column one-third column_image ">
                                    <div class="image_frame image_item no_link scale-with-grid no_border">
                                        <div class="image_wrapper"><img class="scale-with-grid" src="assets/img/study_mbbs_abroad/img_banner.jpg" alt="img_banner" width="557" height="478"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                $bugetArray = [];
                if(!empty($resultCountry)){ ?>

                    <div class="section mcb-section   " style="padding-top:50px; padding-bottom:10px; background-color:#fdcc39">
                        <div class="section_wrapper mcb-section-inner">
                            <div class="wrap mcb-wrap one  valign-top clearfix" style="background-color:#fdcc39">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column one column_fancy_heading ">
                                        <div class="fancy_heading fancy_heading_icon">
                                            <h2 class="title">Choose the University According to Country</h2>
                                            <div class="inside"><img class="scale-with-grid" src="assets/img/study_mbbs_abroad/slid2.png" alt="line" style="
                                                width: 41%;
                                                height: 6px;
                                                "></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php
                            $ii==0; 

                            while($ACCORDING_TO_COUNTRY = mysqli_fetch_array($resultCountry)) {

                                if($ACCORDING_TO_COUNTRY['is_display']==1){
                                    $bugetArray[] = $ACCORDING_TO_COUNTRY;
                                }

                                if($ii==2){
                                    $ii=0;
                                }

                                if($ii==0){ ?>

                                    <div class="wrap mcb-wrap one-third row-with-12 valign-top clearfix" style="background-color:#fdcc39">
                                        <div class="mcb-wrap-inner">

                                <?php 
                                } ?>
                                    
                                            <div class="column mcb-column one-second column_how_it_works ">
                                                <div class="how_it_works no_border">
                                                    <a href="mbbs-in-<?php echo strtolower($ACCORDING_TO_COUNTRY['name']); ?>.php">
                                                        <div class="image">
                                                            <img src="assets/flags/<?php echo $ACCORDING_TO_COUNTRY['image']; ?>" class="scale-with-grid" alt="uzbekistan" width="256" height="256">
                                                        </div>
                                                    </a>
                                                    <h4>
                                                        <?php echo isset($ACCORDING_TO_COUNTRY['name']) ? $EDUCATION_CONSULTANCY['name'] : "" ?>
                                                    </h4>
                                                    <div class="desc"></div>
                                                </div>
                                            </div>
                                <?php
                                $ii++;
                                if($ii==2){ ?>
                                        </div>
                                    </div>
                            <?php
                                }
                            } ?>
                        </div>
                    </div>
                
                    <div class="section mcb-section   " style="padding-top:50px; padding-bottom:10px; background-color:#f4f4f4">
                        <div class="section_wrapper mcb-section-inner">
                            <div class="wrap mcb-wrap one  valign-top clearfix" style="background-color:#f4f4f4">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column one column_fancy_heading ">
                                        <div class="fancy_heading fancy_heading_icon">
                                            <h2 class="title">Budget of Different Countries</h2>
                                            <div class="inside"><img class="scale-with-grid" src="assets/img/study_mbbs_abroad/slid2.png" alt="line" style="
                                                width: 41%;
                                                height: 6px;
                                                "></div>
                                        </div>
                                    </div>

                                    <?php
                                    if(!empty($bugetArray)){  

                                        foreach ($bugetArray as $key => $value) { ?>

                                            <div class="column mcb-column one-fifth column_pricing_item ">
                                                <div class="pricing-box  pricing-box-box">
                                                    <div class="plan-header">
                                                        <h2>MBBS in <?php echo $value['name']; ?></h2>
                                                        <div class="price"><sup class="currency"></sup><span><?php echo $value['budget']; ?></span><sup class="period"></sup></div>
                                                        <hr class="hr_color">
                                                    </div>
                                                    <div class="plan-footer"><a href="mbbs-in-<?php echo strtolower($value['name']); ?>.php" class="button button_theme button_js "><span class="button_label">READ MORE</span></a></div>
                                                </div>
                                            </div>
                                    <?php 
                                        }
                                    } ?>

                                    
                                </div>
                            </div>
                        </div>
                    </div>
                <?php 
                }?>

                <div class="section mcb-section   " style="padding-top:50px; padding-bottom:10px; background-color:#fecd36">
                    <div class="section_wrapper mcb-section-inner">
                        <div class="wrap mcb-wrap three-fifth  valign-top clearfix" style="background-color:#fecd36">
                            <div class="mcb-wrap-inner">
                                <?php 
                                if(!empty($STUDY_IN_ABROAD['title'])){ ?>
                                    <div class="column mcb-column one column_column  column-margin-">
                                        <div class="column_attr clearfix align_center" style="">
                                            <div class="kf_convocation_wrap">
                                                <h4>
                                                    <span>
                                                        <?php echo isset($STUDY_IN_ABROAD['title']) ? $STUDY_IN_ABROAD['title'] : "" ?>
                                                    </span>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                <?php 
                                }?>

                                <?php echo isset($STUDY_IN_ABROAD['content']) ? $STUDY_IN_ABROAD['content'] : "" ?>
                            </div>
                        </div>
                        <div class="wrap mcb-wrap two-fifth  valign-top clearfix" style>
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one column_column  column-margin-">
                                    <div class="column_attr clearfix" style>
                                        <div class="clearfix" style="background: #01102f;padding: 30px 20px 15px;border: 3px Solid #282626;border-radius: 9px 8px 77px 8px;box-shadow: 10px 10px 5px #8080807d;">
                                            <div role="form" class="wpcf7" id="wpcf7-f6-p4148-o1" lang="en-US" dir="ltr">
                                                <div class="screen-reader-response">
                                                    <p role="status" aria-live="polite" aria-atomic="true"></p>
                                                    <ul></ul>
                                                </div>
                                                <form action="javascript:void(0)" method="post" class="wpcf7-form init wpcf7-form-home" novalidate="novalidate" data-status="init">
                                                    <p>
                                                        <label> <span class="wpcf7-form-control-wrap" data-name="your-name"><input type="text" name="your-name" id="home-your-name" value size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Name" /></span> </label><br/>
                                                    
                                                        <label> <span class="wpcf7-form-control-wrap" data-name="your-email"><input type="email" name="your-email" id="home-your-email" value size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Email Id" /></span> </label><br/>
                                                    
                                                        <label> <span class="wpcf7-form-control-wrap" data-name="telephone-number"><input type="tel" name="telephone-number" id="home-your-telephone_number" value size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" aria-required="true" aria-invalid="false" placeholder="Contact No." /></span> </label><br/>
                                                    
                                                        <label> <span class="wpcf7-form-control-wrap" data-name="text-message"><input type="text" name="your-message" id="home-your-message" value size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Message" /></span></label><br/>

                                                        <input type="button" value="Send" class="wpcf7-form-control has-spinner wpcf7-submitHome" />
                                                        <span class="wpcf7-spinner"></span>
                                                    </p>
                                                    <div class="wpcf7-response-output" aria-hidden="true"></div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section mcb-section   " style="padding-top:0px; padding-bottom:0px; background-color:#01102f">
                    <div class="section_wrapper mcb-section-inner">
                        <div class="wrap mcb-wrap one-second row-with-2 valign-top clearfix" style="">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one-second column_counter ">
                                    <div class="counter counter_vertical animate-math">
                                        <div class="icon_wrapper"><i class="icon-users"></i></div>
                                        <div class="desc_wrapper">
                                            <div class="number-wrapper"><span class="number" data-to="15">15</span></div>
                                            <p class="title">Study Countries</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="column mcb-column one-second column_counter ">
                                    <div class="counter counter_vertical animate-math">
                                        <div class="icon_wrapper"><i class="icon-graduation-cap"></i></div>
                                        <div class="desc_wrapper">
                                            <div class="number-wrapper"><span class="number" data-to="51">51</span></div>
                                            <p class="title">Courses</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wrap mcb-wrap one-second row-with-2 valign-top clearfix" style="">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one-second column_counter ">
                                    <div class="counter counter_vertical animate-math">
                                        <div class="icon_wrapper"><i class="icon-trophy"></i></div>
                                        <div class="desc_wrapper">
                                            <div class="number-wrapper"><span class="number" data-to="6">6</span></div>
                                            <p class="title">Number of Awards</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="column mcb-column one-second column_counter ">
                                    <div class="counter counter_vertical animate-math">
                                        <div class="icon_wrapper"><i class="icon-user"></i></div>
                                        <div class="desc_wrapper">
                                            <div class="number-wrapper"><span class="number" data-to="370">370</span></div>
                                            <p class="title">Students Enrolled</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section mcb-section   " style="padding-top:0px; padding-bottom:0px; background-color:">
                    <div class="section_wrapper mcb-section-inner">
                        <div class="wrap mcb-wrap one  valign-top clearfix" style="">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one column_fancy_heading ">
                                    <div class="fancy_heading fancy_heading_icon">
                                        <h1 class="title">Important Tips while taking admission to study MBBS in abroad.</h1>
                                        <div class="inside"><img class="scale-with-grid" src="assets/img/study_mbbs_abroad/slid.png" alt="line" style="
                                            width: 41%;
                                            height: 6px;
                                            "></div>
                                    </div>
                                </div>
                                <div class="column mcb-column one column_column  column-margin-">
                                    <div class="column_attr clearfix" style=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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