<?php defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH.'models/Common_dao.php');
class Admin_dao extends Common_dao
{
  public function __construct()
  {
    $this->load->database('codingclub');
    $aQueryInfo = cc_get_config('query', 'query');  
    $this->queryInfoAdmin = $aQueryInfo['admin'];  
  }
  
  public function getUserList($aParam='')/*{{{*/
  {
    $aConfig = $this->queryInfoAdmin['getUserList'];
    return $this->actModelFuc($aConfig, $aParam);
  }/*}}}*/
  public function getExcelList($aParam='')/*{{{*/
  {
    $aConfig['btype'] = '';
    $aConfig['data']  = array();
    $aConfig['query'] = 
      'SELECT u.usn, u.name, u.school, u.grde, u.addrcode, u.pname, u.php, u.pemail, u.pjob, u.pschool, a.*
         FROM users u 
         LEFT OUTER JOIN 
         (
          SELECT m.usn,m. course_idx, m.state, q.recommend, q.motive, q.like_tf, q.experience, q.nature, q.favor, q.jr_hope, q.channel, q.club_hope, q.inquiry, q.exprogram
            FROM member_svc m, questionnaire q
           WHERE m.usn = q.usn 
             AND m.course_idx = q.course_idx
         ) a
           ON a.usn = u.usn
        WHERE a.course_idx in (';
    foreach($aParam as $key=>$val)
    {
      $aConfig['query'] .= '?,' ;
      $aConfig['btype'] .= "i";
      $aConfig['data'][] = $key;
    }
    $aConfig['query'] = substr($aConfig['query'], 0, -1) ;
    $aConfig['query'] .= ')';
    
    $aConfig['null']  = "";

    return $this->actModelFuc($aConfig, $aParam);
  }/*}}}*/
  public function getCourse($aParam='')/*{{{*/
  {
    $aConfig = $this->queryInfoAdmin['getCourse'];
    return $this->actModelFuc($aConfig, $aParam);
  }/*}}}*/
  public function updateState($aParam='')/*{{{*/
  {
    $aConfig = $this->queryInfoAdmin['updateState'];
    return $this->actModelFuc($aConfig, $aParam);
  }/*}}}*/
}
?>