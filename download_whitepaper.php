
<?php
  $file_name = 'pdf/top-30-content-marketing-tips-hospitality.pdf';

  //force download
  header("Content-type: application/octet-stream");
  header("Content-Disposition: attachment; filename=top-30-content-marketing-tips-hospitality.pdf");
  header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
  header("Pragma: no-cache");
  header("Expires: 0");
  header("Content-Description: File Transfer");
  header("Content-Length: " . filesize($file_name));
  readfile("$file_name");

?>
