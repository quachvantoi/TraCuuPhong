<?php
function getdataCT($link): array {
    $html = file_get_html($link);

    $tenKS = $html->find('.box-title.hotel-title h1');
    $DiaChi = $html->find('.box-address.hotel-address h3');
    $Gia = $html->find('.price-medium');
    $hinhanh = $html->find('.box-item-content img');
    $dichvu = $html->find('.content-facilities div');
    $Diadanh = $html->find('.content-item ul li');
    $GioiThieu = $html->find('.box-system-intro-inner.box-content-default .content-introduce p');
    return [$tenKS[0]->plaintext, $DiaChi[0]->plaintext, $Gia[0]->plaintext, $hinhanh, $dichvu, $Diadanh, $GioiThieu];
}

?>