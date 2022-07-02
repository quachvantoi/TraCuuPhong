<?php
function getdataPTot($link): array {
    $html = file_get_html($link);
    $tenKS = $html->find('.title a h1');
    $DiaChi = $html->find('.address a');//arr
    $dchi = "Địa chỉ: ";
    foreach ($DiaChi as $item) {
        $dchi = $dchi." - ".$item->plaintext;
    }
    $Gia = $html->find('.info-price a');
    $hinhanh = $html->find('#sync1 div img');//arr
    $dichvu = $html->find('.type a');//arr
    $Diadanh = $html->find('.content-item ul li');//chua co
    $GioiThieu = $html->find('div.dis-content');
    return [$tenKS[0]->plaintext, $dchi, $Gia[0]->plaintext, $hinhanh, $dichvu, null, $GioiThieu];
}
?>