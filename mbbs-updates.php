<?php
    include 'includes/header.php';
    include "admin/postRequest/dbConnection.php";
    $row = [];   
    $sql = "SELECT * FROM section WHERE page_name = 'mbbs-update'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $data = array();
        while ($row = mysqli_fetch_assoc($result)){
            $data[] = $row; 
        }
        $mbbsUpdates = !empty($data[0]) ? $data[0] : null;
    }
?>
<div id="Content">
    <div class="content_wrapper clearfix">
        <div class="sections_group">
            <div class="entry-content" itemprop="mainContentOfPage">
                <div class="section mcb-section  section-border-top " style="padding-top:40px; padding-bottom:0px; background-color:#ffffff">
                    <div class="section_wrapper mcb-section-inner">
                        <div class="wrap mcb-wrap one  valign-top clearfix" style="">
                            <div class="mcb-wrap-inner">
                                <?php if(isset($mbbsUpdates['content']) && !empty($mbbsUpdates['content'])): ?>
                                    <?php echo $mbbsUpdates['content'] ?>
                                <?php else: ?>
                                    <div class="column mcb-column one-second column_column  column-margin-" style="height: 250px;">
                                        <div class="column_attr clearfix" style="">
                                            <h5>Update</h5>
                                            <ul class="list_mixed">
                                                <li class="list_check">No Updates Available.</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="column mcb-column one-second column_column  column-margin-">
                                        <div class="column_attr clearfix" style="">
                                            <h5>Update</h5>
                                            <ul class="list_mixed">
                                               <li class="list_check">No Updates Available.</li>
                                            </ul>
                                        </div>
                                    </div>
                                <?php endif; ?>
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