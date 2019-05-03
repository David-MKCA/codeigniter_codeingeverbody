<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('kdate')){
  function kdate($stamp){
    $tmp1 = strtotime("2019-05-02 18:00:00");
    $tmp2 = strtotime("2019-05-02 02:00:00");
    $tmp3 = $tmp1-$tmp2; //KST = UNIX_TIMESTAMP + 16h
    return date("o년 n월 j일, G시 i분 s초", $stamp+$tmp3);
//    return date("o년 n월 j일, G시 i분 s초", $stamp);
  }
}
