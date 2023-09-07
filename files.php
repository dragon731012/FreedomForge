var files = <?php $out = array();
foreach (glob('/files/') as $filename) {
    $p = pathinfo($filename);
    $out[] = $p['filename'];
}
echo json_encode($out); ?>;
