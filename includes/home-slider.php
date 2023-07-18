<div class="mfn-main-slider" id="mfn-rev-slider">
    <p class="rs-p-wp-fix"></p>
    <rs-module-wrap id="rev_slider_3_1_wrapper" data-source="gallery" style="padding:0;margin:0px auto;margin-top:0;margin-bottom:0;max-width:">
        <rs-module id="rev_slider_3_1" style="display:none;" data-version="6.1.0">
            <rs-slides>
                <rs-slide data-key="rs-5" data-title="Slide" data-thumb="assets/img/home/slide002-100x50.jpg" data-anim="ei:d;eo:d;s:600;r:0;t:fade;sl:7;">
                    <img src="assets/img/home/slide002.jpg" alt="study atharvoverseas" title="slide002" width="1990" height="726" data-bg="p:center top;" class="rev-slidebg" data-no-retina>
                </rs-slide>
                <rs-slide data-key="rs-6" data-title="Slide" data-thumb="assets/img/home/Atharv-Overseas-Web-Banner-100x50.jpg" data-anim="ei:d;eo:d;s:300;r:0;t:random;sl:7;">
                    <img src="assets/img/home/Atharv-Overseas-Web-Banner.jpg" title="Home main" data-bg="p:center top;" class="rev-slidebg" data-no-retina>
                </rs-slide>
                <rs-slide data-key="rs-7" data-title="Slide" data-thumb="assets/img/home/slide001-100x50.jpg" data-anim="ei:d;eo:d;s:600;r:0;t:fade;sl:7;">
                    <img src="assets/img/home/slide001.jpg" alt="study atharvoverseas" title="slide001" width="1990" height="726" data-bg="p:center top;" class="rev-slidebg" data-no-retina>
                </rs-slide>
                <rs-slide data-key="rs-8" data-title="Slide" data-thumb="assets/img/home/Atharv-Overseas-Web-Banner1-100x50.jpg" data-anim="ei:d;eo:d;s:600;r:0;t:fade;sl:7;">
                    <img src="assets/img/home/Atharv-Overseas-Web-Banner1.jpg" title="Home main" data-bg="p:center top;" class="rev-slidebg" data-no-retina>
                </rs-slide>
            </rs-slides>
            <rs-progress class="rs-bottom" style="visibility: hidden !important;"></rs-progress>
        </rs-module>        
        <!-- <script data-cfasync="false" src="assets/js/email-decode.min.js"></script> -->
        <script type="text/javascript">
            setREVStartSize({c: 'rev_slider_3_1',rl:[1240,1024,778,480],el:[726],gw:[1990],gh:[726],layout:'fullwidth',mh:"0"});
            var revapi3,
                tpj;
            jQuery(function() {
                tpj = jQuery;
                tpj.noConflict();
                if(tpj("#rev_slider_3_1").revolution == undefined){
                    revslider_showDoubleJqueryError("#rev_slider_3_1");
                }else{
                    revapi3 = tpj("#rev_slider_3_1").show().revolution({
                        jsFileLocation:"//atharvoverseas.com/wp-content/plugins/revslider/public/assets/js/",
                        duration:3000,
                        visibilityLevels:"1240,1024,778,480",
                        gridwidth:1990,
                        gridheight:726,
                        minHeight:"",
                        spinner:"spinner2",
                        editorheight:"726,768,960,720",
                        responsiveLevels:"1240,1024,778,480",
                        disableProgressBar:"on",
                        navigation: {
                            mouseScrollNavigation:false,
                            touch: {
                                touchenabled:true,
                                swipe_threshold:0
                            },
                            bullets: {
                                enable:true,
                                tmp:"",
                                style:"hesperiden"
                            }
                        },
                        fallbacks: {
                            allowHTML5AutoPlayOnAndroid:true
                        },
                    });
                }
                
            });
        </script>
        <script>
            var htmlDivCss = ' #rev_slider_3_1_wrapper rs-loader.spinner2{ background-color: #FFFFFF !important; } '
            var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
            if(htmlDiv) {
                htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
            }else{
                var htmlDiv = document.createElement('div');
                htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
                document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
            }
        </script>
        <script>
            var htmlDivCss = unescape("%23rev_slider_3_1_wrapper%20.hesperiden.tp-bullets%20%7B%0A%7D%0A%23rev_slider_3_1_wrapper%20.hesperiden.tp-bullets%3Abefore%20%7B%0A%09content%3A%27%20%27%3B%0A%09position%3Aabsolute%3B%0A%09width%3A100%25%3B%0A%09height%3A100%25%3B%0A%09background%3Atransparent%3B%0A%09padding%3A10px%3B%0A%09margin-left%3A-10px%3Bmargin-top%3A-10px%3B%0A%09box-sizing%3Acontent-box%3B%0A%20%20%20border-radius%3A8px%3B%0A%20%20%0A%7D%0A%23rev_slider_3_1_wrapper%20.hesperiden%20.tp-bullet%20%7B%0A%09width%3A12px%3B%0A%09height%3A12px%3B%0A%09position%3Aabsolute%3B%0A%09background%3A%20%23999999%3B%20%2F%2A%20old%20browsers%20%2A%2F%0A%20%20%20%20background%3A%20-moz-linear-gradient%28top%2C%20%20%23999999%200%25%2C%20%23e1e1e1%20100%25%29%3B%20%2F%2A%20ff3.6%2B%20%2A%2F%0A%20%20%20%20background%3A%20-webkit-linear-gradient%28top%2C%20%20%23999999%200%25%2C%23e1e1e1%20100%25%29%3B%20%2F%2A%20chrome10%2B%2Csafari5.1%2B%20%2A%2F%0A%20%20%20%20background%3A%20-o-linear-gradient%28top%2C%20%20%23999999%200%25%2C%23e1e1e1%20100%25%29%3B%20%2F%2A%20opera%2011.10%2B%20%2A%2F%0A%20%20%20%20background%3A%20-ms-linear-gradient%28top%2C%20%20%23999999%200%25%2C%23e1e1e1%20100%25%29%3B%20%2F%2A%20ie10%2B%20%2A%2F%0A%20%20%20%20background%3A%20linear-gradient%28to%20bottom%2C%20%20%23999999%200%25%2C%23e1e1e1%20100%25%29%3B%20%2F%2A%20w3c%20%2A%2F%0A%20%20%20%20filter%3A%20progid%3Adximagetransform.microsoft.gradient%28%20%0A%20%20%20%20startcolorstr%3D%27%23999999%27%2C%20endcolorstr%3D%27%23e1e1e1%27%2Cgradienttype%3D0%20%29%3B%20%2F%2A%20ie6-9%20%2A%2F%0A%09border%3A3px%20solid%20%23e5e5e5%3B%0A%09border-radius%3A50%25%3B%0A%09cursor%3A%20pointer%3B%0A%09box-sizing%3Acontent-box%3B%0A%7D%0A%23rev_slider_3_1_wrapper%20.hesperiden%20.tp-bullet%3Ahover%2C%0A%23rev_slider_3_1_wrapper%20.hesperiden%20.tp-bullet.selected%20%7B%0A%09background%3A%23666666%3B%0A%7D%0A%23rev_slider_3_1_wrapper%20.hesperiden%20.tp-bullet-image%20%7B%0A%7D%0A%23rev_slider_3_1_wrapper%20.hesperiden%20.tp-bullet-title%20%7B%0A%7D%0A%0A");
            var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
            if(htmlDiv) {
                htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
            }else{
                var htmlDiv = document.createElement('div');
                htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
                document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
            }
        </script>
    </rs-module-wrap>
</div>