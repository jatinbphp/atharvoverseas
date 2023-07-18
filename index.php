<?php 
include 'includes/header.php';
include 'includes/home-slider.php';

$EDUCATION_CONSULTANCY = [];
$sql1 = "SELECT * FROM section WHERE id= 1";
$result1 = mysqli_query($conn, $sql1);
if (mysqli_num_rows($result1) === 1) {
    $EDUCATION_CONSULTANCY = mysqli_fetch_assoc($result1);
}

$STUDY_IN_ABROAD = [];
$sql2 = "SELECT * FROM section WHERE id= 2";
$result2 = mysqli_query($conn, $sql2);
if (mysqli_num_rows($result2) === 1) {
    $STUDY_IN_ABROAD = mysqli_fetch_assoc($result2);
} ?>

<div id="Content">
    <div class="content_wrapper clearfix">
        <div class="sections_group">
            <div class="entry-content" itemprop="mainContentOfPage">

                <?php 
                if(!empty($EDUCATION_CONSULTANCY['title']) || !empty($EDUCATION_CONSULTANCY['content'])){ ?>

                    <div class="section mcb-section   " style="padding-top:50px; padding-bottom:10px; background-color:#f4f4f4">
                        <div class="section_wrapper mcb-section-inner">
                            <div class="wrap mcb-wrap one  valign-top clearfix" style>
                                <div class="mcb-wrap-inner">

                                    <?php 
                                    if(!empty($EDUCATION_CONSULTANCY['title'])){ ?>

                                        <div class="column mcb-column one column_fancy_heading ">
                                            <div class="fancy_heading fancy_heading_icon">
                                                <div class="animate" data-anim-type="fadeInUp">
                                                    <h2 class="title">
                                                        <?php 
                                                        if(!empty($EDUCATION_CONSULTANCY['title'])){
                                                            echo $EDUCATION_CONSULTANCY['title'];
                                                        } ?>
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

                                    <?php 
                                    if(!empty($EDUCATION_CONSULTANCY['content'])){ ?>
                                        <div class="column mcb-column three-fifth column_column  column-margin-">
                                            <div class="column_attr clearfix" style>
                                                <?php 
                                                if(!empty($EDUCATION_CONSULTANCY['content'])){
                                                    echo $EDUCATION_CONSULTANCY['content'];
                                                } ?>
                                            </div>
                                        </div>
                                    <?php
                                    } ?>

                                    <div class="column mcb-column two-fifth column_image ">
                                        <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                                            <div class="image_wrapper"><img class="scale-with-grid" src="assets/img/home/banner-new1.jpg" alt="banner-new1" width="778" height="755" /></div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                } ?>

                <div class="section mcb-section   " style="padding-top:50px; padding-bottom:10px; background-color:#fecd36">
                    <div class="section_wrapper mcb-section-inner">
                        <div class="wrap mcb-wrap three-fifth  valign-top clearfix" style="background-color:#fecd36">
                            <div class="mcb-wrap-inner">
                                <?php 
                                if(!empty($STUDY_IN_ABROAD['title'])){ ?>

                                    <div class="column mcb-column one column_column  column-margin-">
                                        <div class="column_attr clearfix align_center" style>
                                            <div class="kf_convocation_wrap">
                                                <h4>
                                                    <span>
                                                        <?php 
                                                        if(!empty($STUDY_IN_ABROAD['title'])){
                                                            echo $STUDY_IN_ABROAD['title'];
                                                        } ?>
                                                    </span>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                    
                                <?php
                                } ?>

                                <?php 
                                if(!empty($STUDY_IN_ABROAD['content'])){
                                    echo $STUDY_IN_ABROAD['content'];
                                } ?>
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
                <div class="section mcb-section   " style="padding-top:25px; padding-bottom:0px; background-color:">
                    <div class="section_wrapper mcb-section-inner">
                        <div class="wrap mcb-wrap one  valign-top clearfix" style>
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one column_fancy_heading ">
                                    <div class="fancy_heading fancy_heading_icon">
                                        <h1 class="title">Why choose Atharv Education for your study abroad experience?</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wrap mcb-wrap one-second  valign-top clearfix" style>
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one-second column_column why_choose_box column-margin-">
                                    <div class="column_attr clearfix align_center" style=" width: 100%;">
                                        <img src="assets/img/home/HandpickedProgramsAcrossPartnerUniversities1.svg">
                                        <p style="padding: 7px 30px;">
                                            Career Pathway Assessment and Planning.
                                        </p>
                                    </div>
                                </div>
                                <div class="column mcb-column one-second column_column why_choose_box column-margin-">
                                    <div class="column_attr clearfix align_center" style=" width: 100%;">
                                        <img src="assets/img/home/Expertadviceforcoursecountryuniversityselection1.svg">
                                        <p style="padding: 7px 30px;">
                                            Expert Counselling for Country, University & Course Selections.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wrap mcb-wrap one-second  valign-top clearfix" style>
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one-second column_column why_choose_box column-margin-">
                                    <div class="column_attr clearfix align_center" style=" width: 100%;">
                                        <img src="assets/img/home/TOEFLPreparation1.svg">
                                        <p style="padding: 7px 30px;">
                                            Application & Visa Assistance.
                                        </p>
                                    </div>
                                </div>
                                <div class="column mcb-column one-second column_column why_choose_box column-margin-">
                                    <div class="column_attr clearfix align_center" style=" width: 100%;">
                                        <img src="assets/img/home/Guidanceforapplicationeditingandprocessing1.svg">
                                        <p style="padding: 7px 30px;">
                                            Off-shore & On-shore Assistance.
                                        </p>
                                    </div>
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