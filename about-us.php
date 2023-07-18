<?php
include 'includes/header.php';

$row = [];   
$sql = "SELECT * FROM section WHERE page_name = 'about-us'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    $data = array();
    while ($row = mysqli_fetch_assoc($result)){
        $data[] = $row; 
    }
} ?>

<div id="Content">
    <div class="content_wrapper clearfix">
        <div class="sections_group">
            <div class="entry-content" itemprop="mainContentOfPage">

                <?php 
                if(!empty($data[0]['title']) || !empty($data[0]['content'])){ ?>
                    <div class="section mcb-section   " style="padding-top:0px; padding-bottom:0px; background-color:">
                        <div class="section_wrapper mcb-section-inner">
                            <div class="wrap mcb-wrap one  valign-top clearfix" style>
                                <div class="mcb-wrap-inner">

                                    <?php 
                                    if(!empty($data[0]['title'])){ ?>
                                        <div class="column mcb-column one column_fancy_heading ">
                                            <div class="fancy_heading fancy_heading_icon">
                                                <h2 class="title">
                                                    <?php echo isset($data[0]['title']) ? $data[0]['title'] : "" ?>
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
                                    if(!empty($data[0]['content'])){ ?>
                                        <div class="column mcb-column one column_column  column-margin-">
                                            <div class="column_attr clearfix" style>
                                                <?php echo isset($data[0]['content']) ? $data[0]['content'] : ""; ?>
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
                if(!empty($data[1]['title']) || !empty($data[1]['content'])){ ?>
                    <div class="section mcb-section   " style="padding-top:50px; padding-bottom:0px; background-color:#fdcd3c">
                        <div class="section_wrapper mcb-section-inner">
                            <div class="wrap mcb-wrap one  valign-top clearfix" style="background-color:#fdcd3c">
                                <div class="mcb-wrap-inner">

                                    <?php 
                                    if(!empty($data[1]['title'])){ ?>
                                        <div class="column mcb-column one column_fancy_heading ">
                                            <div class="fancy_heading fancy_heading_icon">
                                                <h2 class="title">
                                                    <?php echo isset($data[1]['title']) ? $data[1]['title'] : "" ?>
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
                                    if(!empty($data[1]['content'])){ ?>
                                        <div class="column mcb-column two-third column_column  column-margin-">
                                            <div class="column_attr clearfix" style>
                                                <?php echo isset($data[1]['content']) ? $data[1]['content'] : "" ?>
                                            </div>
                                        </div>
                                    <?php
                                    } ?>

                                    <div class="column mcb-column one-third column_image ">
                                        <div class="image_frame image_item no_link scale-with-grid alignright no_border">
                                            <div class="image_wrapper"><img class="scale-with-grid" src="assets/img/about_us/service_banner1.png" alt="service_banner1" width="722" height="558" /></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                } ?>

                <?php 
                if((!empty($data[2]['title']) && !empty($data[2]['content'])) || (!empty($data[3]['title']) && !empty($data[3]['content']))){ ?>

                    <div class="section mcb-section   " style="padding-top:50px; padding-bottom:0px; background-color:">
                        <div class="section_wrapper mcb-section-inner">

                            <?php 
                            if(!empty($data[2]['title']) || !empty($data[2]['content'])){ ?>

                                <div class="wrap mcb-wrap one-second dmp valign-top clearfix" style="background-color:#83ba55">
                                    <div class="mcb-wrap-inner">

                                        <?php 
                                        if(!empty($data[2]['title'])){ ?>
                                            <div class="column mcb-column one column_fancy_heading ">
                                                <div class="fancy_heading fancy_heading_icon">
                                                    <h2 class="title">
                                                        <?php echo isset($data[2]['title']) ? $data[2]['title'] : "" ?>
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
                                        if(!empty($data[2]['content'])){ ?>
                                            <div class="column mcb-column one column_column  column-margin-">
                                                <div class="column_attr clearfix" style>
                                                    <?php echo isset($data[2]['content']) ? $data[2]['content'] : null ?>
                                                    </br>
                                                </div>
                                            </div>
                                        <?php
                                        } ?>
                                    </div>
                                </div>
                            <?php
                            } ?>

                            <?php 
                            if(!empty($data[3]['title']) && !empty($data[3]['content'])){ ?>

                                <div class="wrap mcb-wrap one-second dmce valign-top clearfix" style="background-color:#83ba55">
                                    <div class="mcb-wrap-inner">

                                        <?php 
                                        if(!empty($data[3]['title'])){ ?>
                                            <div class="column mcb-column one column_fancy_heading ">
                                                <div class="fancy_heading fancy_heading_icon">
                                                    <h2 class="title">
                                                        <?php echo isset($data[3]['title']) ? $data[3]['title'] : "" ?>
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
                                        if(!empty($data[3]['content'])){ ?>
                                            <div class="column mcb-column one column_column  column-margin-">
                                                <div class="column_attr clearfix" style>
                                                    <?php echo isset($data[3]['content']) ? $data[3]['content'] : null ?>
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
                if(!empty($data[4]['content'])){ ?>
                    <div class="section mcb-section   " style="padding-top:50px; padding-bottom:0px; background-color:#fdcd3c">
                        <div class="section_wrapper mcb-section-inner">
                            <div class="wrap mcb-wrap one  valign-top clearfix" style>
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column one column_column  column-margin-">
                                        <div class="column_attr clearfix" style>
                                            <?php echo isset($data[4]['content']) ? $data[4]['content'] : "" ?>
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