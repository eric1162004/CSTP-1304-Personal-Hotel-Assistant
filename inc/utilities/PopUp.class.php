<?php 

class PopUp {

    static function PopUpBoxes($boxContent, $boxID, $boxTitle){ 
        ?>

        <div class="popup" id="<?php echo $boxID?>">
            <div class="row valign-wrapper">
                <div class="col s9">
                    <h4><?php echo $boxTitle?></h4>
                </div>
                <div class="col s3 center">
                    <i class="far fa-times-circle white-text hoverable" id="<?php echo $boxID."Toggle"?>" style="font-size:40px"></i>
                </div>
            </div>
            <hr>
            <div class="popup-content row">
                <?php echo $boxContent ?>
            </div>
            <hr>
        </div>

    <?php }
    
}

?>