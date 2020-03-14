<?php
/**
 * Created by PhpStorm.
 * User: Anteny
 * Date: 3/7/2020
 * Time: 6:18 PM
 */

function bslink($path,$bsclass,$placeholder){
    echo '<a href="'.$path.'" class="'.$bsclass.'">'.$placeholder.'</a>';
}

function bsinpt($displayTxt,$name,$type,$rules=''){
    echo '<div class="form-group">';
    echo '   <label class="col-sm-3 col-form-label" for="'.$name.'">'.$displayTxt.'</label>';
    echo '    <div class="col-sm-9">';
    echo '        <input type="'.$type.'" class="form-control" name="'.$name.'" id="'.$name.'" placeholder="'.$displayTxt.'" '.$rules.'>';
    echo '    </div>';
    echo '</div>';
}

?>

<!--<div class="form-group">-->
<!--    <label class="col-sm-3 col-form-label">Gender</label>-->
<!--    <div class="col-sm-9 mt-2">-->
<!--        <label class="mb-0 mr-3">-->
<!--            <input type="radio" class="mr-1" name="gender" > Male-->
<!--        </label>-->
<!--        <label class="mb-0 mr-3">-->
<!--            <input type="radio" class="mr-1" name="gender"> Female-->
<!--        </label>-->
<!--    </div>-->
<!--</div>-->



