<?php 
include 'includes/header.php'; 

$data = [];
$universitydata = [];
$sql = "SELECT country_section.*, country.name FROM country_section LEFT JOIN country ON country_section.country = country.id WHERE country_section.country= ".$_GET['countryId'];
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) === 1) {
    $data = mysqli_fetch_assoc($result);

    $sql1 = "SELECT * FROM country_university WHERE country= ".$_GET['countryId'];
    $resultUniversity = mysqli_query($conn, $sql1);
    if(!empty($resultUniversity)){  
        while($resultData = mysqli_fetch_array($resultUniversity)) {
            $universitydata[] = $resultData;
        }
    }
} ?>
<div id="Content">
    <div class="content_wrapper clearfix">
        <div class="sections_group">
            <div class="entry-content" itemprop="mainContentOfPage">

                <?php 
                if(!empty($data['image']) || !empty($data['content']) || !empty($data['highlights'])){ ?>
                    <div class="section mcb-section   " style="padding-top:0px; padding-bottom:0px; background-color:">
                        <div class="section_wrapper mcb-section-inner">

                            <?php
                            if(!empty($data['image'])){
                                $file_pointer = 'uploads/'.$data['image'];
                                if (file_exists($file_pointer)) { ?>
                                 
                                    <div class="wrap mcb-wrap one-third  valign-top clearfix" style>
                                        <div class="mcb-wrap-inner">
                                            <div class="column mcb-column one column_image ">
                                                <div class="image_frame image_item no_link scale-with-grid no_border">
                                                    <div class="image_wrapper">
                                                        <img class="scale-with-grid" src="<?php echo $file_pointer; ?>" alt="belarus" width="558" height="347" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php 
                                } 
                            } ?>

                            <?php 
                            if(!empty($data['content']) || !empty($data['highlights'])){ ?>
                                <div class="wrap mcb-wrap two-third  valign-top clearfix" style>
                                    <div class="mcb-wrap-inner">
                                        
                                        <?php 
                                        if(!empty($data['content'])){ ?>
                                            <div class="column mcb-column one-second column_column  column-margin-">
                                                <div class="column_attr clearfix" style>
                                                    <?php echo isset($data['content']) ? $data['content'] : "" ?>
                                                </div>
                                            </div>
                                        <?php 
                                        } ?>

                                        <?php 
                                        if(!empty($data['highlights'])){ 
                                            $highlightsArray = json_decode($data['highlights']); ?>

                                            <div class="column mcb-column one-second column_column  column-margin-">
                                                <div class="column_attr clearfix" style>
                                                    <h2 style="
                                                        font-size: 21px !important;
                                                        text-align: center;
                                                        ">MBBS in <?php echo strtoupper($data['name']);?> Highlights</h2>
                                                    <table>
                                                        <tbody>
                                                            <?php 
                                                            foreach ($highlightsArray as $key => $value) { ?>
                                                                
                                                                <tr>
                                                                    <td>
                                                                        <strong class="red_title">
                                                                        <?php echo ucwords(str_replace("_", " ", $key)); ?>
                                                                        </strong>
                                                                    </td>
                                                                    <td class="itbrood1"><?php echo $value; ?></td>
                                                                </tr>

                                                            <?php
                                                            } ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        <?php 
                                        } ?>
                                    </div>
                                </div>
                            <?php 
                            } ?>
                        </div>
                    </div>
                <?php 
                } ?>

                <?php 
                if(!empty($data['about_title']) || !empty($data['about_content'])){ ?>
                    <div class="section mcb-section   " style="padding-top:60px; padding-bottom:0px; background-color:#0cc5b7">
                        <div class="section_wrapper mcb-section-inner">
                            <div class="wrap mcb-wrap one  valign-top clearfix" style="background-color:#0cc5b7">
                                <div class="mcb-wrap-inner">
                                    <?php 
                                    if(!empty($data['about_title'])){ ?>
                                        <div class="column mcb-column one column_fancy_heading ">
                                            <div class="fancy_heading fancy_heading_icon">
                                                <h2 class="title">
                                                    <?php echo $data['about_title']; ?>
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
                                    if(!empty($data['about_content'])){ ?>
                                        <div class="column mcb-column one column_column  column-margin-">
                                            <div class="column_attr clearfix" style>
                                                <?php echo $data['about_content']; ?>
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
                if(!empty($data['study_title']) || !empty($data['about_content'])){ ?>
                    <div class="section mcb-section   " style="padding-top:60px; padding-bottom:0px; background-color:">
                        <div class="section_wrapper mcb-section-inner">
                            <div class="wrap mcb-wrap one  valign-top clearfix" style>
                                <div class="mcb-wrap-inner">
                                    <?php 
                                    if(!empty($data['study_title'])){ ?>
                                        <div class="column mcb-column one column_fancy_heading ">
                                            <div class="fancy_heading fancy_heading_icon">
                                                <h2 class="title">
                                                    <?php echo $data['study_title']; ?>
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
                                    if(!empty($data['study_content'])){ ?>
                                        <div class="column mcb-column one column_column  column-margin-">
                                            <div class="column_attr clearfix" style>
                                                <?php echo $data['study_content']; ?>
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
                if(!empty($data['benefit_mbbs_title']) || !empty($data['benefit_mbbs_content'])){ ?>
                    <div class="section mcb-section   " style="padding-top:60px; padding-bottom:0px; background-color:#0cc5b7">
                        <div class="section_wrapper mcb-section-inner">
                            <div class="wrap mcb-wrap one  valign-top clearfix" style="background-color:#0cc5b7">
                                <div class="mcb-wrap-inner">
                                    <?php 
                                    if(!empty($data['study_title'])){ ?>
                                        <div class="column mcb-column one column_fancy_heading ">
                                            <div class="fancy_heading fancy_heading_icon">
                                                <h2 class="title">
                                                    <?php echo $data['benefit_mbbs_title']; ?>
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
                                    if(!empty($data['benefit_mbbs_content'])){ ?>
                                        <div class="column mcb-column one column_column  column-margin-">
                                            <div class="column_attr clearfix" style>
                                                <?php echo $data['benefit_mbbs_content']; ?>
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
                if(!empty($data['admission_title']) || !empty($data['admission_content'])){ ?>
                    <div class="section mcb-section   " style="padding-top:60px; padding-bottom:0px; background-color:">
                        <div class="section_wrapper mcb-section-inner">
                            <div class="wrap mcb-wrap one  valign-top clearfix" style>
                                <div class="mcb-wrap-inner">
                                    <?php 
                                    if(!empty($data['admission_title'])){ ?>
                                        <div class="column mcb-column one column_fancy_heading ">
                                            <div class="fancy_heading fancy_heading_icon">
                                                <h2 class="title">
                                                    <?php echo $data['admission_title']; ?>
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
                                    if(!empty($data['admission_content'])){ ?>
                                        <div class="column mcb-column one column_column  column-margin-">
                                            <div class="column_attr clearfix" style>
                                                <?php echo $data['admission_content']; ?>
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
                if(!empty($data['fee_title']) || !empty($data['fee_content'])){ ?>
                    <div class="section mcb-section   " style="padding-top:60px; padding-bottom:0px; background-color:#0cc5b7">
                        <div class="section_wrapper mcb-section-inner">
                            <div class="wrap mcb-wrap one  valign-top clearfix" style="background-color:#0cc5b7">
                                <div class="mcb-wrap-inner">
                                    <?php 
                                    if(!empty($data['fee_title'])){ ?>
                                        <div class="column mcb-column one column_fancy_heading ">
                                            <div class="fancy_heading fancy_heading_icon">
                                                <div class="animate" data-anim-type="fadeInUp">
                                                    <h2 class="title">
                                                        <?php echo $data['fee_title']; ?>
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
                                    if(!empty($data['fee_content'])){ ?>
                                        <div class="column mcb-column one column_column  column-margin-">
                                            <div class="column_attr clearfix" style>
                                                <?php echo $data['fee_content']; ?>
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

                <div class="section mcb-section   " style="padding-top:60px; padding-bottom:0px; background-color:">
                    <div class="section_wrapper mcb-section-inner">
                        <div class="wrap mcb-wrap one  valign-top clearfix" style>
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one column_column  column-margin-">
                                    <div class="column_attr clearfix" style>
                                        <b>
                                            <h1>
                                                <p style="font-size: 14px;color: #000;letter-spacing: 1px;font-weight: bold;text-align:center;">"LET US ALL TOGETHER MAKE YOUR DREAM COME TRUE"</p>
                                            </h1>
                                        </b>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php 
                if(!empty($universitydata)){ ?>
                    <div class="section mcb-section   " style="padding-top:60px; padding-bottom:0px; background-color:#0cc5b7">
                        <div class="section_wrapper mcb-section-inner">
                            <div class="wrap mcb-wrap one  valign-top clearfix" style="background-color:#0cc5b7">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column one column_fancy_heading ">
                                        <div class="fancy_heading fancy_heading_icon">
                                            <div class="animate" data-anim-type="fadeInUp">
                                                <h2 class="title">
                                                    COLLEGES/UNIVERSITIES IN <?php echo strtoupper($data['name']);?>
                                                </h2>
                                                <div class="inside"><img class="scale-with-grid" src="assets/img/slid.png" alt="line" style="
                                                    width: 41%;
                                                    height: 6px;
                                                    " /></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column mcb-column one column_blog_slider ">
                                        <div class="blog_slider clearfix  hide-more flat">
                                            <div class="blog_slider_header"><a class="button button_js slider_prev" href="#"><span class="button_icon"><i class="icon-left-open-big"></i></span></a><a class="button button_js slider_next" href="#"><span class="button_icon"><i class="icon-right-open-big"></i></span></a></div>
                                            <ul class="blog_slider_ul">
                                                <?php 
                                                foreach ($universitydata as $key => $value) { ?>
                                                    <li class="post-3474 post type-post status-publish format-standard has-post-thumbnail hentry category-belarus">
                                                        <div class="item_wrapper" style="text-align: center;">
                                                            <div class="image_frame scale-with-grid">
                                                                <div class="image_wrapper">
                                                                    <a href="<?php echo $value['slug']; ?>">

                                                                        <?php
                                                                        $profile_image = 'uploads/default.jpg';
                                                                        if(!empty($value['profile_image'])){
                                                                            if (file_exists('uploads/'.$value['profile_image'])) {
                                                                                $profile_image = 'uploads/'.$value['profile_image'];
                                                                            }
                                                                        } ?>

                                                                        <img width="278" height="181" src="<?php echo $profile_image; ?>" class="scale-with-grid wp-post-image" sizes="(max-width: 278px) 100vw, 278px" />

                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="date_label">October 4, 2021</div>
                                                            <div class="desc">
                                                                <h4><a href="https://atharvoverseas.com/belarusian-state-medical-university-study-mbbs-in-belarus/">Belarusian state medical University | Study MBBS in Belarus</a></h4>
                                                                <hr class="hr_color" />
                                                                <a href="https://atharvoverseas.com/belarusian-state-medical-university-study-mbbs-in-belarus/" class="button button_left button_js"><span class="button_icon"><i class="icon-layout"></i></span><span class="button_label">Read more</span></a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                <?php
                                                } ?>
                                            </ul>
                                            <div class="slider_pagination"></div>
                                        </div>
                                    </div>
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