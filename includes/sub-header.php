<?php
$pageName = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']); ?>
<div id="Subheader" style>
    <div class="container">
        <div class="column one">
            <h1 class="title"><?php echo ucwords(str_replace("-", " ", str_replace(".php", "", $pageName))); ?></h1>
            <ul class="breadcrumbs has-link">
                <li><a href="index.php">Home</a> <span><i class="icon-right-open"></i></span></li>
                <li><a href="javascript:void(0);"><?php echo ucwords(str_replace("-", " ", str_replace(".php", "", $pageName))); ?></a></li>
            </ul>
        </div>
    </div>
</div>