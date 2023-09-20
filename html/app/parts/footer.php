<footer class="footer">
    <div class="footer__inner">
		<small class="footer__copy-right"><?php echo COPYRIGHT;?></small>
	</div>
</footer>
<!--JS-->
<script src="https://kit.fontawesome.com/1945c5b45f.js" crossorigin="anonymous"></script>
<script src="<?php echo JQCDN;?>"></script>
<script src="<?php echo URL;?>js/common.js"></script>
<?php
//グループJS及び個別JSのパス設定
if(!empty($group_name)){$target_group_js = $root_path . "js/" . $group_name . ".js";}
if(!empty($file_name)){$target_self_js = $root_path . "js/" . $file_name . ".js";}
//グループのJS出力
if(!empty($target_group_js)){
    if(file_exists($target_group_js)){
        echo "<script src='" . URL . "js/" . $group_name . ".js'></script>\n";
    }
}
//個別のJS出力
if(!empty($target_self_js)){
    if(file_exists($target_self_js)){
        echo "<script src='" . URL . "js/" . $file_name . ".js'></script>\n";
    }
}
?>