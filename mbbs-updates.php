<?php
include 'includes/header.php';

$row = [];   
$sql = "SELECT * FROM section WHERE id = 21";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    $mbbsUpdates = mysqli_fetch_assoc($result);
} ?>

<div id="Content">
    <div class="content_wrapper clearfix">
        <div class="sections_group">
            <div class="entry-content" itemprop="mainContentOfPage">

                <?php 
                if(!empty($mbbsUpdates['content'])){ ?>
                    <div class="section mcb-section  section-border-top " style="padding-top:40px; padding-bottom:0px; background-color:#ffffff">
                        <div class="section_wrapper mcb-section-inner">
                            <div class="wrap mcb-wrap one  valign-top clearfix" style="">
                                <div class="mcb-wrap-inner">
                                    <?php echo $mbbsUpdates['content'] ?>
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