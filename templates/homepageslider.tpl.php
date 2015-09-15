<div id="slider1_container" style="position: relative; margin: 0 auto;
     top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
    <!-- Loading Screen -->
    <div u="loading" style="position: absolute; top: 0px; left: 0px;">
        <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block;
             top: 0px; left: 0px; width: 100%; height: 100%;">
        </div>
        <div style="position: absolute; display: block; background: url(<?php print drupal_get_path('module', 'fullwidthtouchslider') ?>/img/loading.gif) no-repeat center center;
             top: 0px; left: 0px; width: 100%; height: 100%;">
        </div>
    </div>
    <!-- Slides Container -->
    <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1300px; height: 500px; overflow: hidden;">
            <?php foreach ($data as $d => $value) { ?>
                <?php if($value->slide_fid!=0) { ?>
                    <div>
                        <img u="image" src="<?php print file_create_url(file_load($value->slide_fid)->uri) ?>" />
                        <?php if (isset($value->image_fid) && $value->image_fid != "") { ?>
                            <div class="slide_text" u="caption" t="NO" t3="RTT|2" r3="137.5%" du3="2000" d3="2500" style="position: absolute; width: 555px; height: 300px; top: 100px; left: 600px;">
                                <?php print $value->image_fid; ?>
                            </div>
                        <?php } ?>
                        <div style="position: absolute; width: 480px; height: 120px; top: 30px; left: 30px; padding: 5px;
                             text-align: left; line-height: 60px; text-transform: uppercase; font-size: 50px;
                             color: #FFFFFF;"><?php print $value->heading ?>
                        </div>
                        <div style="position: absolute; width: 480px; height: 120px; top: 300px; left: 30px; padding: 5px;
                             text-align: left; line-height: 36px; font-size: 30px;
                             color: #FFFFFF;"><?php print $value->description ?>

                        </div>
                    </div>
            <?php } ?>
        <?php } ?>
    </div>
    <div u="navigator" class="jssorb21" style="bottom: 26px; right: 6px;">
        <div u="prototype"></div>
    </div>
    <span u="arrowleft" class="jssora21l" style="top: 123px; left: 8px;">
    </span>
    <span u="arrowright" class="jssora21r" style="top: 123px; right: 8px;">
    </span>
</div>