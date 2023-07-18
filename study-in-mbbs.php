<?php 
include 'includes/header.php'; 

$universitydata = [];
$sql1 = "SELECT country_university.*, country.name FROM country_university LEFT JOIN country ON country_university.country = country.id WHERE slug= '".$_GET['slug']."'";
$resultUniversity = mysqli_query($conn, $sql1);
if(!empty($resultUniversity)){  
    $universitydata = mysqli_fetch_assoc($resultUniversity);
} ?>

<div id="Content">
    <div class="content_wrapper clearfix">
        <div class="sections_group">
            <div id="post-3474" class="no-share post-3474 post type-post status-publish format-standard has-post-thumbnail hentry category-belarus">
                

                <div class="post-wrapper-content">
		            <?php 
		            if(!empty($universitydata['overview_title']) || !empty($universitydata['overview_content'])){ ?>
	                    <div class="section mcb-section   " style="padding-top:0px; padding-bottom:0px; background-color:">
	                        <div class="section_wrapper mcb-section-inner">
	                            <div class="wrap mcb-wrap one  valign-top clearfix" style>
	                                <div class="mcb-wrap-inner">
	                                	<?php 
		            					if(!empty($universitydata['overview_title'])){ ?>
		                                    <div class="column mcb-column one column_fancy_heading ">
		                                        <div class="fancy_heading fancy_heading_icon">
		                                            <h2 class="title">
		                                            	<?php echo $universitydata['overview_title']; ?>
		                                            </h2>
		                                            <div class="inside"><img class="scale-with-grid" src="https://atharvoverseas.com/wp-content/uploads/2019/12/slid.png" alt="line" style="
		                                                width: 41%;
		                                                height: 6px;
		                                                " /></div>
		                                        </div>
		                                    </div>
	                                    <?php 
                						} ?>

	                                    <?php 
		            					if(!empty($universitydata['overview_content'])){ ?>
		                                    <div class="column mcb-column one column_column  column-margin-">
		                                        <div class="column_attr clearfix" style>
		                                        	<?php echo $universitydata['overview_content']; ?>
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
		            if(!empty($universitydata['admission_procedure_title']) || !empty($universitydata['admission_procedure_content'])){ ?>
	                    <div class="section mcb-section   " style="padding-top:50px; padding-bottom:50px; background-color:">
	                        <div class="section_wrapper mcb-section-inner">
	                            <div class="wrap mcb-wrap one  valign-top clearfix" style>
	                                <div class="mcb-wrap-inner">
	                                	<?php 
		            					if(!empty($universitydata['admission_procedure_title'])){ ?>
		                                    <div class="column mcb-column one column_fancy_heading ">
		                                        <div class="fancy_heading fancy_heading_icon">
		                                            <h2 class="title">
		                                            	<?php echo $universitydata['admission_procedure_title']; ?>
		                                            </h2>
		                                            <div class="inside"><img class="scale-with-grid" src="https://atharvoverseas.com/wp-content/uploads/2019/12/slid.png" alt="line" style="
		                                                width: 41%;
		                                                height: 6px;
		                                                " /></div>
		                                        </div>
		                                    </div>
	                                    <?php 
                						} ?>

                						<?php 
		            					if(!empty($universitydata['admission_procedure_content'])){ ?>
		                                    <div class="column mcb-column one column_column  column-margin-">
		                                        <div class="column_attr clearfix" style>
		                                        	<?php echo $universitydata['admission_procedure_content']; ?>
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
		            if(!empty($universitydata['gallery_title']) || !empty($universitydata['photo_gallery'])){ ?>
	                    <div class="section mcb-section   " style="padding-top:50px; padding-bottom:0px; background-color:#0cc5b7">
	                        <div class="section_wrapper mcb-section-inner">
	                            <div class="wrap mcb-wrap one  valign-top clearfix" style="background-color:#0cc5b7">
	                                <div class="mcb-wrap-inner">
	                                	<?php 
		            					if(!empty($universitydata['gallery_title'])){ ?>
		                                    <div class="column mcb-column one column_fancy_heading ">
		                                        <div class="fancy_heading fancy_heading_icon">
		                                            <h2 class="title">
		                                            	<?php echo $universitydata['gallery_title']; ?>
		                                            </h2>
		                                            <div class="inside"><img class="scale-with-grid" src="https://atharvoverseas.com/wp-content/uploads/2019/12/slid.png" alt="line" style="
		                                                width: 41%;
		                                                height: 6px;
		                                                " /></div>
		                                        </div>
		                                    </div>
	                                    <?php 
                						} ?>

                						<?php 
		            					if(!empty($universitydata['photo_gallery'])){ 
		            						$photo_galleryArray = explode(",", $universitydata['photo_gallery']);

		            						if(!empty($photo_galleryArray)){
			            						foreach ($photo_galleryArray as $key => $value) { 
			            							$gallery_image = 'uploads/'.$value;
			            							if (file_exists($gallery_image)) { ?>
			            								<div class="column mcb-column one-fifth column_image ">
					                                        <div class="image_frame image_item no_link scale-with-grid no_border">
					                                            <div class="image_wrapper">
					                                            	<img class="scale-with-grid" src="<?php echo $gallery_image; ?>" width="258" height="192" />
					                                            </div>
					                                        </div>
					                                    </div>
		            							<?php
		            								}
			            						} 
			            					}
                						} ?>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
                    <?php 
                	} ?>

                	<?php 
		            if(!empty($universitydata['highlight_of_the_medical_collage_title']) || !empty($universitydata['highlight_of_the_medical_collage_content'])){ ?>
	                    <div class="section mcb-section   " style="padding-top:50px; padding-bottom:0px; background-color:">
	                        <div class="section_wrapper mcb-section-inner">
	                            <div class="wrap mcb-wrap one  valign-top clearfix" style>
	                                <div class="mcb-wrap-inner">
	                                	<?php 
		            					if(!empty($universitydata['highlight_of_the_medical_collage_title'])){ ?>
		                                    <div class="column mcb-column one column_fancy_heading ">
		                                        <div class="fancy_heading fancy_heading_icon">
		                                            <h2 class="title">
		                                            	<?php echo $universitydata['highlight_of_the_medical_collage_title']; ?>
		                                            </h2>
		                                            <div class="inside"><img class="scale-with-grid" src="https://atharvoverseas.com/wp-content/uploads/2019/12/slid.png" alt="line" style="
		                                                width: 41%;
		                                                height: 6px;
		                                                " /></div>
		                                        </div>
		                                    </div>
	                                    <?php 
                						} ?>

            							<?php 
		            					if(!empty($universitydata['highlight_of_the_medical_collage_content'])){ ?>
		                                    <div class="column mcb-column one column_column  column-margin-">
		                                        <div class="column_attr clearfix" style>
		                                            <div class="column_attr clearfix" style>
		                                            	<?php echo $universitydata['highlight_of_the_medical_collage_content']; ?>
		                                            </div>
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
                    <div class="section the_content no_content">
                        <div class="section_wrapper">
                            <div class="the_content_wrapper"></div>
                        </div>
                    </div>
                    <div class="section section-post-footer">
                        <div class="section_wrapper clearfix">
                            <div class="column one post-pager"></div>
                        </div>
                    </div>
                    <div class="section section-post-about">
                        <div class="section_wrapper clearfix"></div>
                    </div>
                </div>
                <?php
                $otherUniversityData = [];
				if(!empty($universitydata)){  

					$sql = "SELECT * FROM country_university WHERE id != '".$universitydata['id']."'";
					$relatedUniversity = mysqli_query($conn, $sql);

					if(!empty($relatedUniversity)){  
				        while($otherUniversity = mysqli_fetch_array($relatedUniversity)) {
				            $otherUniversityData[] = $otherUniversity;
				        }
				    }
				} ?>

				<?php
				if(!empty($otherUniversityData)){ ?>
	                <div class="section section-post-related">
	                    <div class="section_wrapper clearfix">
	                        <div class="section-related-adjustment ">
	                            <h4>Related posts</h4>
	                            <div class="section-related-ul col-4">
	                            	<?php
	                            	foreach ($otherUniversityData as $key => $value) { ?>
	                            		
		                                <div class="column post-related post-3477 post type-post status-publish format-standard has-post-thumbnail hentry category-belarus">
		                                    <div class="single-photo-wrapper image">
		                                        <div class="image_frame scale-with-grid">
		                                            <div class="image_wrapper">
		                                                <a href="<?php echo $value['slug']; ?>">
		                                                    <div class="mask"></div>

		                                                    <?php
                                                            $profile_image = 'uploads/default.jpg';
                                                            if(!empty($value['profile_image'])){
                                                                if (file_exists('uploads/'.$value['profile_image'])) {
                                                                    $profile_image = 'uploads/'.$value['profile_image'];
                                                                }
                                                            } ?>

                                                        	<img width="540" height="300" src="<?php echo $profile_image; ?>" class="scale-with-grid wp-post-image" sizes="(max-width: 540px) 100vw, 540px" />
                                                                       
		                                                </a>
		                                                <div class="image_links double">
		                                                	<a href="<?php echo $profile_image; ?>" class="zoom" rel="prettyphoto"><i class="icon-search"></i>
		                                                	</a>
		                                                	<a href="<?php echo $value['slug']; ?>" class="link"><i class="icon-link"></i></a></div>
		                                            </div>
		                                        </div>
		                                    </div>
		                                    <div class="date_label">October 3, 2021</div>
		                                    <div class="desc">
		                                        <h4><a href="<?php echo $value['slug']; ?>"><?php echo $value['university_name']; ?> | Study MBBS in <?php echo $universitydata['name']; ?></a></h4>
		                                        <hr class="hr_color" />
		                                        <a href="<?php echo $value['slug']; ?>" class="button button_left button_js"><span class="button_icon"><i class="icon-layout"></i></span><span class="button_label">Read more</span></a>
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
            </div>
        </div>
    </div>
</div>