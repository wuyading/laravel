<select id="area" name="area" onchange="getArea()">
    <option value="0">请选择区</option>
    <?php
    foreach($area as $k=>$v){
    ?>
    <option value='<?php echo $v->areaid ?>'><?php echo $v->area ?></option>
    <?php
    }
    ?>
</select>