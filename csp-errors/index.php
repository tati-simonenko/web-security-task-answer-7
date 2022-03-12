<?php $data = file_get_contents('php://input');

if ($data = json_decode($data, true)) {
 $data = json_encode(
  $data,
  JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES
  );
 mail(EMAIL, SUBJECT, $data);
}
?>