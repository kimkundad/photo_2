<?php
session_start();
$strLang = $_GET["lang"];

if(isset($strLang)){
  $_SESSION["lang"] = $strLang;
  function goback()
{
    header("Location: {$_SERVER['HTTP_REFERER']}");
    exit;
}

goback();
}

if($_SESSION["lang"] == null){
  $_SESSION["lang"] = "eng";
}

if($_SESSION["lang"] == "thai"){

  $thai = array(
      'index' => 'หน้าหลัก',
      'lang' => 'ไทย',
      'category' => 'หมวดหมู่',
      'test' => 'ทดสอบเปลี่ยนภาษาเป็น '
  );

}else{

  $thai = array(
    'index' => 'Home',
    'lang' => 'Eng',
    'category' => 'Category',
    'test' => 'Test change to Language Thai'
  );

}

?>
