<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class MemberLibClass {

  public function __construct()/*{{{*/
  {
  }/*}}}*/

  public static function getMKPwd($sPWD)/*{{{*/
  {
    if(!$sPWD) return false;
  
    return SELF::_getMKPwd($sPWD); 
  }/*}}}*/

  private static function _getMKPwd($sPWD)/*{{{*/
  {
    return md5("coding".$sPWD."club");
  }/*}}}*/
} 
?>
