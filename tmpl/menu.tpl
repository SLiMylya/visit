<div class="menu">
    <?php for ($i=0;$i<count($this->menu);$i++){ ?>
    <li>
        <a href="<?=$this->menu[$i]["link"]?>" <?php if ($i==0){ ?>class="hover"<?php }?>>
        <?=$this->menu[$i]["title"]?>
        </a>
    </li>
    <?php } ?>
</div>