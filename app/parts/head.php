<!doctype html>
<html lang="ja">
<head>
<meta name="robots" content="noindex, nofollow">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta name="keywords" content="<?php if(!empty($key)){echo $key;}?>">
<meta name="description" content="<?php if(!empty($desk)){echo $desk;}?>">
<title><?php if(!empty($title)){echo $title;}?></title>

<!--CSS-->
<link rel="stylesheet" href="<?php echo URL;?>css/reset.css">
<link rel="stylesheet" href="<?php echo URL;?>css/webfonts.css">
<link rel="stylesheet" href="<?php echo URL;?>css/forms.css">
<link rel="stylesheet" href="<?php echo URL;?>css/common_layout.css">
<link rel="stylesheet" href="<?php echo URL;?>css/common_parts.css">
<?php
//グループCSS及び個別CSSのパス設定
if(!empty($group_name)){$target_group_css = $root_path . "css/" . $group_name . ".css";}
if(!empty($file_name)){$target_self_css = $root_path . "css/" . $file_name . ".css";}
//グループのCSS出力
if(!empty($target_group_css)){
    if(file_exists($target_group_css)){
        echo "<link href='" . URL . "css/" . $group_name . ".css" . "' rel='stylesheet'>\n";
    }
}
//個別のCSS出力
if(!empty($target_self_css)){
    if(file_exists($target_self_css)){
        echo "<link href='" . URL . "css/" . $file_name . ".css" . "' rel='stylesheet'>\n";
    }
}
?>

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
	
<!--favicon Read-->
<link rel="shortcut icon" href="<?php echo URL;?>favicon.ico" type="image/vnd.microsoft.icon">
<link rel="icon" href="<?php echo URL;?>favicon.ico" type="image/vnd.microsoft.icon">

</head>
