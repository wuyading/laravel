<select id="city" name="city" onchange="selectArea()">
    <option value="0">请选择市</option>
    <?php
    foreach($city as $k=>$v){
    ?>
    <option value='<?php echo $v->cityid ?>'><?php echo $v->city ?></option>
    <?php
    }
    ?>
</select>