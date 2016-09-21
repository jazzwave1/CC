<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_model extends CI_model
{
  public function __construct()
  {
    $this->admin_dao = cc_get_instance('admin/admin_dao', 'model'); 
    $this->courseConfig = $this->getCourse();
    $this->memberSTATEConfig = cc_get_config('member_svc_state','member_config' );  
    $this->memberGRDEConfig  = cc_get_config('member_user_grde','member_config' );  
  }
  public function updateState($usn, $state, $courseIdx)/*{{{*/
  {
    if(!$usn || !$state || !$courseIdx) return false;
  
    $aInput = array('usn' => $usn, 'state'=>$state, 'course_idx'=>$courseIdx );
    return $this->admin_dao->updateState($aInput); 
  } /*}}}*/
  public function getUserList($courseIdx)/*{{{*/
  {
    if(!$courseIdx) return false;
    
    $aInput = array('course_idx' => $courseIdx);

    $aResult = $this->admin_dao->getUserList($aInput);
    
    if($aResult)
    {
      foreach($aResult as $key=>$val)
      {
        $val->courseIDX   = $val->course_idx;
        $val->course_idx  = $this->courseConfig[$val->course_idx];
        $val->state       = $this->memberSTATEConfig[$val->state];
        $val->grde        = $this->memberGRDEConfig[$val->grde];
      }
    }
    return $aResult;
  }/*}}}*/
  public function getCourse()/*{{{*/
  {
    $aInput = array('idx' => 1);
    $aResult = $this->admin_dao->getCourse($aInput); 
    foreach($aResult as $key=>$val)
    {
      $aRtn[$val->idx] = $val->name;
    }
    return $aRtn;
  } /*}}}*/
  public function chkAdminLogin($accountID, $passwd)/*{{{*/
  {
    if(!$accountID || !$passwd) return false;
    
    $aAdminInfo = $this->_getAdminInfo();
    
    if($aAdminInfo['accountID'] == $accountID && $aAdminInfo['passwd'] == $passwd)
    {
      $this->_sCookie($accountID);
      return true;
    }
    else
      return false;
  }/*}}}*/
  public function getUserInfoFromEmailID($sEmailID)/*{{{*/
  {
    if(!$sEmailID) return false; 
    $aInput = array('account_id' => $sEmailID);
    $aResult = $this->_getUserInfoFromEmailID($aInput);
   
    if($aResult)
    {
      foreach($aResult as $key=>$val)
      {
        $val->grde        = $this->memberGRDEConfig[$val->grde];
      }
    }
    return $aResult;
  }/*}}}*/
  public function getUserInfoFromName($sName)/*{{{*/
  {
    if(!$sName) return false; 
    $aInput = array('name' => $sName);
    $aResult = $this->_getUserInfoFromName($aInput);
    
    if($aResult)
    {
      foreach($aResult as $key=>$val)
      {
        $val->grde        = $this->memberGRDEConfig[$val->grde];
      }
    }
    return $aResult;
  }/*}}}*/
  public function getMemberSVC($usn)/*{{{*/
  {
    if(!$usn) return false; 
    $aInput = array('usn' => $usn);
    $aResult = $this->_getMemberSVC($aInput);
   
    if($aResult)
    {
      foreach($aResult as $key=>$val)
      {
        $val->state = $this->memberSTATEConfig[$val->state];
      }
    }
    return $aResult;
  }/*}}}*/
  public function getCourseList()/*{{{*/
  {
    $aInput = array('idx' => 1);
    $aResult = $this->_getCourseList($aInput);
    
    if(count($aResult) < 1 || !$aResult)return false;
    if(!$aResult[0]->name) return false;
   
    foreach($aResult as $key=>$val)
    {
      $val->sdate = setDateFormat($val->sdate,'YMD');
      $val->edate = setDateFormat($val->edate,'YMD');
    }

    return $aResult;
  }/*}}}*/
  public function getCourseInfo($idx)/*{{{*/
  {
    if(!$idx) return false;
    
    $aInput = array('idx' => $idx);
    $oCourseInfo= $this->_getCourseInfo($aInput);
    
    $oCourseInfo->sdateF = setDateFormat($oCourseInfo->sdate,'YMD');
    $oCourseInfo->edateF = setDateFormat($oCourseInfo->edate,'YMD');

    return $oCourseInfo;
  }/*}}}*/
  public function updateCourseInfo($aParam=array())/*{{{*/
  {
    if(!$aParam['idx']) return false; 
    
    if($this->_updateCourseInfo($aParam))
      return true;
    else
      return false;
  }/*}}}*/
  public function insertCourseInfo($aParam=array())/*{{{*/
  {
    if($this->_insertCourseInfo($aParam))
      return true;
    else
      return false;
  }/*}}}*/
  public function getQuestionInfo($usn, $courseIDX)/*{{{*/
  {
    if(!$usn || !$courseIDX) return false;
    
    $aInput = array(
       'usn' => $usn
      ,'course_idx'=>$courseIDX
    );
    
    $oCourseInfo= $this->_getQuestionInfo($aInput);

    return $oCourseInfo;
  }/*}}}*/

  public function getSummerCampFull()/*{{{ 2016 07 SummerCampList*/
  {
    $aCourseIDX = array(
       'course_idx1'=>20
      ,'course_idx2'=>21
      ,'course_idx3'=>22);
    
    $aMemConfig = cc_get_config('Mem', 'code');
    $aResult = $this->_getExcelList($aCourseIDX) ;
    $temp = '';
    foreach($aResult as $key=>$val)
    {
      $val->course_idx  = $this->courseConfig[$val->course_idx];
      $val->state       = $this->memberSTATEConfig[$val->state];
      $val->grde        = $this->memberGRDEConfig[$val->grde];
      $aProgram = explode("|", $val->exprogram);
      $val->exprogram = ''; 
      
      foreach($aProgram as $k=>$v)
      {
        if(trim($v) && is_numeric($v))
        {   
          $val->exprogram .= $this->courseConfig[$v].", ";
        }   
        else
        {   
          $val->exprogram .= $val->exprogram.", ";
        } 
      }
    }
    return $aResult;
  }/*}}}*/
  public function getAutumnCampFull()/*{{{ 2016 10 AutumnCampList*/
  {
    $aCourseIDX = array(
       'course_idx1'=>23
      ,'course_idx2'=>24
      ,'course_idx3'=>26
      ,'course_idx4'=>27
      ,'course_idx5'=>28);
    
    $aMemConfig = cc_get_config('Mem', 'code');
    $aResult = $this->_getExcelList($aCourseIDX) ;
    $temp = '';
    foreach($aResult as $key=>$val)
    {
      $val->course_idx  = $this->courseConfig[$val->course_idx];
      $val->state       = $this->memberSTATEConfig[$val->state];
      $val->grde        = $this->memberGRDEConfig[$val->grde];
      $aProgram = explode("|", $val->exprogram);
      $val->exprogram = ''; 
      
      foreach($aProgram as $k=>$v)
      {
        if(trim($v) && is_numeric($v))
        {   
          $val->exprogram .= $this->courseConfig[$v].", ";
        }   
        else
        {   
          $val->exprogram .= $val->exprogram.", ";
        } 
      }
    }
    return $aResult;
  }/*}}}*/
  public function adminsendmail($sMailList="")/*{{{*/
  {
    if(!$sMailList)
    {
      echo "리스트를 선택해 주세요";
      return;
    }
    
    if(! $aMailList = $this->_getMailList($sMailList) ) 
    {
      echo "대상자가 없습니다";
      return;
    }
    
    foreach($aMailList as $key=>$val)
    {
      echo $sMailList." | ".$val["name"]. " | " .$val["email"]. "<br>";
      $this->_sendMail($val["name"], $val["email"], $sMailList, $val["aInterterviewInfo"]);
      sleep(1);
    }
    return;
  }/*}}}*/


  private function _getQuestionInfo($aParam)/*{{{*/
  {
    $aResult= $this->admin_dao->getQuestionInfo($aParam); 
    return $aResult;
  }/*}}}*/
  private function _insertCourseInfo($aParam)/*{{{*/
  {
    $aResult= $this->admin_dao->insertCourseInfo($aParam); 
    return $aResult;
  }/*}}}*/
  private function _updateCourseInfo($aParam)/*{{{*/
  {
    $aResult= $this->admin_dao->updateCourseInfo($aParam); 
    return $aResult;
  }/*}}}*/
  private function _getCourseInfo($aParam)/*{{{*/
  {
    $aResult= $this->admin_dao->getCourseInfo($aParam); 
    return $aResult[0];
  }/*}}}*/
  private function _getCourseList($aParam)/*{{{*/
  {
    return $this->admin_dao->getCourseList($aParam); 
  }/*}}}*/
  private function _getMemberSVC($aParam)/*{{{*/
  {
    return $this->admin_dao->getMemberSVC($aParam); 
  }/*}}}*/
  private function _getUserInfoFromEmailID($aParam)/*{{{*/
  {
    return $this->admin_dao->getUserInfoFromEmailID($aParam); 
  }/*}}}*/
  private function _getUserInfoFromName($aParam)/*{{{*/
  {
    return $this->admin_dao->getUserInfoFromName($aParam); 
  }/*}}}*/
  private function _getMailList($type)/*{{{*/
  {
    if(!$type) return false;
    
    $aList = array(
      "P1T" => array(/*{{{*/
//        array("name"=>"김지현", "email"=>"jihyun6221@naver.com")
//       ,array("name"=>"권다은", "email"=>"eyor@naver.com")
//       ,array("name"=>"서가람", "email"=>"skekrkfka@gmail.com")
//       ,array("name"=>"김미진", "email"=>"ae878@naver.com")
//       ,array("name"=>"김하영", "email"=>"kimmayoung@gmail.com")

//        array("name"=>"이효정", "email"=>"hyon2224@naver.com")
//       ,array("name"=>"빈장은", "email"=>"binjang94@gmail.com")
//       ,array("name"=>"맹지은", "email"=>"jieun0652@naver.com")
//       ,array("name"=>"방누리", "email"=>"nury7230@naver.com")
//       ,array("name"=>"김혜영", "email"=>"artikhy@naver.com")
         
//       array("name"=>"추진주", "email"=>"jinju2424@naver.com")
//       ,array("name"=>"장혜린", "email"=>"hinayuyulol@gmail.com")
//       ,array("name"=>"김창균", "email"=>"changgyun96@gmail.com")
//       ,array("name"=>"박예람", "email"=>"rhdwn8885@naver.com")
//       ,array("name"=>"안예슬", "email"=>"iays11@naver.com")

//       array("name"=>"박지언", "email"=>"ccomzi950922@gmail.com")
//       ,array("name"=>"함나연", "email"=>"hamny88@gmail.com")
//       ,array("name"=>"최지은", "email"=>"lielieing@naver.com")
//       ,array("name"=>"김태희", "email"=>"asaswwj@naver.com")
//       ,array("name"=>"김정한", "email"=>"wjdgks7178@gmail.com")
//       
//       array("name"=>"고경석", "email"=>"bestvov@naver.com")
//       ,array("name"=>"문현구", "email"=>"moonhyunkoo@naver.com")
//       ,array("name"=>"이다혜", "email"=>"alsk0050@naver.com")
//       ,array("name"=>"김지은", "email"=>"xjpassion@naver.com")
//       ,array("name"=>"이성원", "email"=>"jusk2@naver.com")

//       array("name"=>"공병국", "email"=>"qudrnr1479@gmail.com")
//       ,array("name"=>"강은주", "email"=>"eunju_pro@naver.com")
//       ,array("name"=>"김민호", "email"=>"minmin0416@naver.com")
//       ,array("name"=>"이보빈", "email"=>"cultist_tp@naver.com")
//       ,array("name"=>"이원상", "email"=>"harryandws@naver.com")
//       
//       array("name"=>"김태용", "email"=>"designlab@taykim.com")
//       ,array("name"=>"전소영", "email"=>"thdud1282@daum.net")
//       ,array("name"=>"조미경", "email"=>"mikyung4088@gmail.com")
//       ,array("name"=>"이지원", "email"=>"ccc5770@naver.com")
//       ,array("name"=>"한혜선", "email"=>"hhs19962002@naver.com")

//       array("name"=>"전재범", "email"=>"jeon423@empas.com")
//       ,array("name"=>"김현재", "email"=>"dk1004hj@naver.com")
//       ,array("name"=>"구소희", "email"=>"kidater89@gmail.com")
//       ,array("name"=>"계성혁", "email"=>"lkay9495@hotmail.com")
//       ,array("name"=>"백지원", "email"=>"baikjo2@naver.com")
//       
//       array("name"=>"박보라", "email"=>"inshyk@naver.com")
//       ,array("name"=>"오승연", "email"=>"seuonn@hanmail.net")
//       ,array("name"=>"양진수", "email"=>"sinich99@naver.com")
//       ,array("name"=>"한예성", "email"=>"930805hys@naver.com")
//       ,array("name"=>"이정훈", "email"=>"ysw0732s@naver.com")

//       array("name"=>"하조은", "email"=>"imjoeunha@gmail.com")
//       ,array("name"=>"김성규", "email"=>"foxion@naver.com")
//       ,array("name"=>"박연진", "email"=>"h_tea@naver.com")
//       ,array("name"=>"양지현", "email"=>"jhnyang@nate.com")
//       ,array("name"=>"이호준", "email"=>"jazzwave14@gmail.com")


      )/*}}}*/
      ,"P1F" => array(/*{{{*/
      
//        array("name"=>"김지원", "email"=>"chocko@daum.net")
//       ,array("name"=>"이혜준", "email"=>"candy0543@naver.com")
//       ,array("name"=>"안경진", "email"=>"rudwls608401@naver.com")
//       ,array("name"=>"문솔이", "email"=>"ssol1226@naver.com")
//       ,array("name"=>"김병우", "email"=>"hyo99075@naver.com")
         
//       array("name"=>"박진용", "email"=>"jinfaithful@naver.com")
//       ,array("name"=>"김준하", "email"=>"mcjin89@naver.com")
//       ,array("name"=>"심수정", "email"=>"ssj977@naver.com")
//       ,array("name"=>"김지수", "email"=>"kjsrlawltn0119@maver.com")
//       ,array("name"=>"전지수", "email"=>"emilyjeon@naver.com")
//       
//       array("name"=>"정세영", "email"=>"shb04270@naver.com")
//       ,array("name"=>"안혜준", "email"=>"dksgPwns@naver.com")
//       ,array("name"=>"김예은", "email"=>"coalskye@naver.com")
//       ,array("name"=>"김경우", "email"=>"psj6395@naver.com")
//       ,array("name"=>"김학수", "email"=>"hot77godding@naver.com")
//       
//       array("name"=>"이병훈", "email"=>"o.ohmry@gmail.com")
//       ,array("name"=>"박찬영", "email"=>"pcy85048504@gmail.com")
//       ,array("name"=>"김민경", "email"=>"mkkim916@naver.com")
//       ,array("name"=>"이가영", "email"=>"leega0711@naver.com")
//       ,array("name"=>"박형주", "email"=>"maybeeflower@hanmail.net")
//       
//       array("name"=>"백혜인", "email"=>"qorgpdls97@naver.com")
//       ,array("name"=>"강윤지", "email"=>"kji9609@naver.com")
//       ,array("name"=>"은종찬", "email"=>"dmswhdcks@naver.com")
//       ,array("name"=>"김성욷", "email"=>"kim930422@naver.com")
//       ,array("name"=>"김지우", "email"=>"jik803@naver.com")
//       
//       array("name"=>"이서예", "email"=>"dltjdp9792@naver.com")
//       ,array("name"=>"방영선", "email"=>"bangys1995@gmail.com")
//       ,array("name"=>"신한영", "email"=>"shinhy4632@naver.com")
//       ,array("name"=>"이상원", "email"=>"style8914@naver.com")
//       ,array("name"=>"박영수", "email"=>"goodys1011@naver.com")
//       
//       array("name"=>"김효린", "email"=>"wwhurin0834@gmail.com")
//       ,array("name"=>"LEE URAM", "email"=>"uram999@naver.com")
//       ,array("name"=>"이재윤", "email"=>"iju9587@naver.com")
//       ,array("name"=>"김동진", "email"=>"djkim27666@naver.com")
//       ,array("name"=>"류영표", "email"=>"ryp1662@naver.com")
//       
//       array("name"=>"최낙초", "email"=>"nakcho.choi@gmail.com")
//       ,array("name"=>"윤재원", "email"=>"bunggl@naver.com")
//       ,array("name"=>"최현영", "email"=>"92hy.choi@gmail.com")
//       ,array("name"=>"변영섭", "email"=>"byssccb@naver.com")
//       ,array("name"=>"유상빈", "email"=>"ysbin0406@gmail.com")
//       
//       array("name"=>"이대현", "email"=>"zicow@naver.com")
//       ,array("name"=>"하선우", "email"=>"swha03@naver.com")
                  
      
      
      )/*}}}*/
      ,"INT" => array(/*{{{*/

//       면접 미 참가자.
//       ,array("name"=>"서가람", "email"=>"skekrkfka@gmail.com", "aInterterviewInfo"=>array("num"=>1, "time"=>"12시", "sbtime"=>"11시40분"))
//       ,array("name"=>"빈장은", "email"=>"binjang94@gmail.com", "aInterterviewInfo"=>array("num"=>2, "time"=>"13시", "sbtime"=>"12시40분"))
//       ,array("name"=>"김창균", "email"=>"changgyun96@gmail.com", "aInterterviewInfo"=>array("num"=>2, "time"=>"13시", "sbtime"=>"12시40분"))
//       ,array("name"=>"함나연", "email"=>"hamny88@gmail.com", "aInterterviewInfo"=>array("num"=>2, "time"=>"13시", "sbtime"=>"12시40분"))
//       ,array("name"=>"문현구", "email"=>"moonhyunkoo@naver.com", "aInterterviewInfo"=>array("num"=>3, "time"=>"14시", "sbtime"=>"13시40분"))
//       ,array("name"=>"이성원", "email"=>"jusk2@naver.com", "aInterterviewInfo"=>array("num"=>3, "time"=>"14시", "sbtime"=>"13시40분"))
//       array("name"=>"김태용", "email"=>"designlab@taykim.com", "aInterterviewInfo"=>array("num"=>4, "time"=>"15시", "sbtime"=>"14시40분"))
//       ,array("name"=>"이지원", "email"=>"ccc5770@naver.com", "aInterterviewInfo"=>array("num"=>4, "time"=>"15시", "sbtime"=>"14시40분"))
//       ,array("name"=>"하조은", "email"=>"imjoeunha@gmail.com", "aInterterviewInfo"=>array("num"=>5, "time"=>"16시", "sbtime"=>"15시40분"))
//       ,array("name"=>"양지현", "email"=>"jhnyang@nate.com", "aInterterviewInfo"=>array("num"=>5, "time"=>"16시", "sbtime"=>"15시40분"))
//       ,array("name"=>"이호준", "email"=>"jazzwave14@gmail.com", "aInterterviewInfo"=>array("num"=>5, "time"=>"16시", "sbtime"=>"15시40분"))



// 1조
//      array("name"=>"김지현", "email"=>"jihyun6221@naver.com", "aInterterviewInfo"=>array("num"=>1, "time"=>"12시", "sbtime"=>"11시40분"))
//     ,array("name"=>"권다은", "email"=>"eyor@naver.com", "aInterterviewInfo"=>array("num"=>1, "time"=>"12시", "sbtime"=>"11시40분"))
//     ,array("name"=>"김미진", "email"=>"ae878@naver.com", "aInterterviewInfo"=>array("num"=>1, "time"=>"12시", "sbtime"=>"11시40분"))
//     ,array("name"=>"김하영", "email"=>"kimmayoung@gmail.com", "aInterterviewInfo"=>array("num"=>1, "time"=>"12시", "sbtime"=>"11시40분"))

//      array("name"=>"이효정", "email"=>"hyon2224@naver.com", "aInterterviewInfo"=>array("num"=>1, "time"=>"12시", "sbtime"=>"11시40분"))
//     ,array("name"=>"맹지은", "email"=>"jieun0652@naver.com", "aInterterviewInfo"=>array("num"=>1, "time"=>"12시", "sbtime"=>"11시40분"))
//     ,array("name"=>"방누리", "email"=>"nury7230@naver.com", "aInterterviewInfo"=>array("num"=>1, "time"=>"12시", "sbtime"=>"11시40분"))
//     ,array("name"=>"구소희", "email"=>"kidater89@gmail.com", "aInterterviewInfo"=>array("num"=>1, "time"=>"12시", "sbtime"=>"11시40분"))
//     ,array("name"=>"이원상", "email"=>"harryandws@naver.com", "aInterterviewInfo"=>array("num"=>3, "time"=>"14시", "sbtime"=>"13시40분"))
// 2조
//     array("name"=>"김혜영", "email"=>"artikhy@naver.com", "aInterterviewInfo"=>array("num"=>2, "time"=>"13시", "sbtime"=>"12시40분"))
//     ,array("name"=>"박예람", "email"=>"rhdwn8885@naver.com", "aInterterviewInfo"=>array("num"=>2, "time"=>"13시", "sbtime"=>"12시40분"))
//     ,array("name"=>"안예슬", "email"=>"iays11@naver.com", "aInterterviewInfo"=>array("num"=>2, "time"=>"13시", "sbtime"=>"12시40분"))
//       
//      array("name"=>"박지언", "email"=>"ccomzi950922@gmail.com", "aInterterviewInfo"=>array("num"=>2, "time"=>"13시", "sbtime"=>"12시40분"))
//     ,array("name"=>"김태희", "email"=>"asaswwj@naver.com", "aInterterviewInfo"=>array("num"=>2, "time"=>"13시", "sbtime"=>"12시40분"))
//     ,array("name"=>"김정한", "email"=>"wjdgks7178@gmail.com", "aInterterviewInfo"=>array("num"=>2, "time"=>"13시", "sbtime"=>"12시40분"))

// 3조
//      array("name"=>"고경석", "email"=>"bestvov@naver.com", "aInterterviewInfo"=>array("num"=>3, "time"=>"14시", "sbtime"=>"13시40분"))
//     ,array("name"=>"이다혜", "email"=>"alsk0050@naver.com", "aInterterviewInfo"=>array("num"=>3, "time"=>"14시", "sbtime"=>"13시40분"))
//     ,array("name"=>"전재범", "email"=>"jeon423@empas.com", "aInterterviewInfo"=>array("num"=>4, "time"=>"15시", "sbtime"=>"14시40분"))
//     
//      array("name"=>"공병국", "email"=>"qudrnr1479@gmail.com", "aInterterviewInfo"=>array("num"=>3, "time"=>"14시", "sbtime"=>"13시40분"))
//     ,array("name"=>"강은주", "email"=>"eunju_pro@naver.com", "aInterterviewInfo"=>array("num"=>3, "time"=>"14시", "sbtime"=>"13시40분"))
//     ,array("name"=>"김민호", "email"=>"minmin0416@naver.com", "aInterterviewInfo"=>array("num"=>3, "time"=>"14시", "sbtime"=>"13시40분"))
//     ,array("name"=>"이보빈", "email"=>"cultist_tp@naver.com", "aInterterviewInfo"=>array("num"=>3, "time"=>"14시", "sbtime"=>"13시40분"))

// 4조
//     array("name"=>"전소영", "email"=>"thdud1282@daum.net", "aInterterviewInfo"=>array("num"=>4, "time"=>"15시", "sbtime"=>"14시40분"))
//     ,array("name"=>"조미경", "email"=>"mikyung4088@gmail.com", "aInterterviewInfo"=>array("num"=>4, "time"=>"15시", "sbtime"=>"14시40분"))
//     ,array("name"=>"한혜선", "email"=>"hhs19962002@naver.com", "aInterterviewInfo"=>array("num"=>4, "time"=>"15시", "sbtime"=>"14시40분"))
//     ,array("name"=>"김지은", "email"=>"xjpassion@naver.com", "aInterterviewInfo"=>array("num"=>3, "time"=>"14시", "sbtime"=>"13시40분"))
//     
//     array("name"=>"김현재", "email"=>"dk1004hj@naver.com", "aInterterviewInfo"=>array("num"=>4, "time"=>"15시", "sbtime"=>"14시40분"))
//     ,array("name"=>"계성혁", "email"=>"lkay9495@hotmail.com", "aInterterviewInfo"=>array("num"=>4, "time"=>"15시", "sbtime"=>"14시40분"))
//     ,array("name"=>"백지원", "email"=>"baikjo2@naver.com", "aInterterviewInfo"=>array("num"=>4, "time"=>"15시", "sbtime"=>"14시40분"))
//     ,array("name"=>"박보라", "email"=>"inshyk@naver.com", "aInterterviewInfo"=>array("num"=>4, "time"=>"15시", "sbtime"=>"14시40분"))

// 5조      
//      array("name"=>"장혜린", "email"=>"hinayuyulol@gmail.com", "aInterterviewInfo"=>array("num"=>1, "time"=>"12시", "sbtime"=>"11시40분"))
//     ,array("name"=>"오승연", "email"=>"seuonn@hanmail.net", "aInterterviewInfo"=>array("num"=>5, "time"=>"16시", "sbtime"=>"15시40분"))
//     ,array("name"=>"양진수", "email"=>"sinich99@naver.com", "aInterterviewInfo"=>array("num"=>5, "time"=>"16시", "sbtime"=>"15시40분"))
//     ,array("name"=>"한예성", "email"=>"930805hys@naver.com", "aInterterviewInfo"=>array("num"=>5, "time"=>"16시", "sbtime"=>"15시40분"))
//     
//      array("name"=>"이정훈", "email"=>"ysw0732s@naver.com", "aInterterviewInfo"=>array("num"=>5, "time"=>"16시", "sbtime"=>"15시40분"))
//     ,array("name"=>"박연진", "email"=>"h_tea@naver.com", "aInterterviewInfo"=>array("num"=>5, "time"=>"16시", "sbtime"=>"15시40분"))
//     ,array("name"=>"추진주", "email"=>"jinju2424@naver.com", "aInterterviewInfo"=>array("num"=>5, "time"=>"16시", "sbtime"=>"15시40분"))
//     ,array("name"=>"김성규", "email"=>"foxion@naver.com", "aInterterviewInfo"=>array("num"=>5, "time"=>"16시", "sbtime"=>"15시40분"))


      ) /*}}}*/
      ,"INT2" => array(/*{{{*/

//       면접 미 참가자.
//       ,array("name"=>"서가람", "email"=>"skekrkfka@gmail.com", "aInterterviewInfo"=>array("num"=>1, "time"=>"12시", "sbtime"=>"11시40분"))
//       ,array("name"=>"빈장은", "email"=>"binjang94@gmail.com", "aInterterviewInfo"=>array("num"=>2, "time"=>"13시", "sbtime"=>"12시40분"))
//       ,array("name"=>"김창균", "email"=>"changgyun96@gmail.com", "aInterterviewInfo"=>array("num"=>2, "time"=>"13시", "sbtime"=>"12시40분"))
//       ,array("name"=>"함나연", "email"=>"hamny88@gmail.com", "aInterterviewInfo"=>array("num"=>2, "time"=>"13시", "sbtime"=>"12시40분"))
//       ,array("name"=>"최지은", "email"=>"lielieing@naver.com", "aInterterviewInfo"=>array("num"=>2, "time"=>"13시", "sbtime"=>"12시40분"))
//       ,array("name"=>"문현구", "email"=>"moonhyunkoo@naver.com", "aInterterviewInfo"=>array("num"=>3, "time"=>"14시", "sbtime"=>"13시40분"))
//       ,array("name"=>"이성원", "email"=>"jusk2@naver.com", "aInterterviewInfo"=>array("num"=>3, "time"=>"14시", "sbtime"=>"13시40분"))
//       array("name"=>"김태용", "email"=>"designlab@taykim.com", "aInterterviewInfo"=>array("num"=>4, "time"=>"15시", "sbtime"=>"14시40분"))
//       ,array("name"=>"이지원", "email"=>"ccc5770@naver.com", "aInterterviewInfo"=>array("num"=>4, "time"=>"15시", "sbtime"=>"14시40분"))
//       ,array("name"=>"하조은", "email"=>"imjoeunha@gmail.com", "aInterterviewInfo"=>array("num"=>5, "time"=>"16시", "sbtime"=>"15시40분"))
//       ,array("name"=>"양지현", "email"=>"jhnyang@nate.com", "aInterterviewInfo"=>array("num"=>5, "time"=>"16시", "sbtime"=>"15시40분"))
//        array("name"=>"이호준", "email"=>"jazzwave14@naver.com", "aInterterviewInfo"=>array("num"=>5, "time"=>"16시", "sbtime"=>"15시40분"))



// 1조
//      array("name"=>"김지현", "email"=>"jihyun6221@naver.com", "aInterterviewInfo"=>array("num"=>1, "time"=>"12시", "sbtime"=>"11시40분"))
//     ,array("name"=>"권다은", "email"=>"eyor@naver.com", "aInterterviewInfo"=>array("num"=>1, "time"=>"12시", "sbtime"=>"11시40분"))
//     ,array("name"=>"김미진", "email"=>"ae878@naver.com", "aInterterviewInfo"=>array("num"=>1, "time"=>"12시", "sbtime"=>"11시40분"))
//     ,array("name"=>"김하영", "email"=>"kimmayoung@gmail.com", "aInterterviewInfo"=>array("num"=>1, "time"=>"12시", "sbtime"=>"11시40분"))

//      array("name"=>"이효정", "email"=>"hyon2224@naver.com", "aInterterviewInfo"=>array("num"=>1, "time"=>"12시", "sbtime"=>"11시40분"))
//     ,array("name"=>"맹지은", "email"=>"jieun0652@naver.com", "aInterterviewInfo"=>array("num"=>1, "time"=>"12시", "sbtime"=>"11시40분"))
//     ,array("name"=>"방누리", "email"=>"nury7230@naver.com", "aInterterviewInfo"=>array("num"=>1, "time"=>"12시", "sbtime"=>"11시40분"))
//     ,array("name"=>"구소희", "email"=>"kidater89@gmail.com", "aInterterviewInfo"=>array("num"=>1, "time"=>"12시", "sbtime"=>"11시40분"))
//     ,array("name"=>"이원상", "email"=>"harryandws@naver.com", "aInterterviewInfo"=>array("num"=>3, "time"=>"14시", "sbtime"=>"13시40분"))
// 2조
//     array("name"=>"김혜영", "email"=>"artikhy@naver.com", "aInterterviewInfo"=>array("num"=>2, "time"=>"13시", "sbtime"=>"12시40분"))
//     ,array("name"=>"박예람", "email"=>"rhdwn8885@naver.com", "aInterterviewInfo"=>array("num"=>2, "time"=>"13시", "sbtime"=>"12시40분"))
//     ,array("name"=>"안예슬", "email"=>"iays11@naver.com", "aInterterviewInfo"=>array("num"=>2, "time"=>"13시", "sbtime"=>"12시40분"))
//       
//      array("name"=>"박지언", "email"=>"ccomzi950922@gmail.com", "aInterterviewInfo"=>array("num"=>2, "time"=>"13시", "sbtime"=>"12시40분"))
//     ,array("name"=>"김태희", "email"=>"asaswwj@naver.com", "aInterterviewInfo"=>array("num"=>2, "time"=>"13시", "sbtime"=>"12시40분"))
//     ,array("name"=>"김정한", "email"=>"wjdgks7178@gmail.com", "aInterterviewInfo"=>array("num"=>2, "time"=>"13시", "sbtime"=>"12시40분"))

// 3조
//      array("name"=>"고경석", "email"=>"bestvov@naver.com", "aInterterviewInfo"=>array("num"=>3, "time"=>"14시", "sbtime"=>"13시40분"))
//     ,array("name"=>"이다혜", "email"=>"alsk0050@naver.com", "aInterterviewInfo"=>array("num"=>3, "time"=>"14시", "sbtime"=>"13시40분"))
//     ,array("name"=>"전재범", "email"=>"jeon423@empas.com", "aInterterviewInfo"=>array("num"=>4, "time"=>"15시", "sbtime"=>"14시40분"))
//     
//      array("name"=>"공병국", "email"=>"qudrnr1479@gmail.com", "aInterterviewInfo"=>array("num"=>3, "time"=>"14시", "sbtime"=>"13시40분"))
//     ,array("name"=>"강은주", "email"=>"eunju_pro@naver.com", "aInterterviewInfo"=>array("num"=>3, "time"=>"14시", "sbtime"=>"13시40분"))
//     ,array("name"=>"김민호", "email"=>"minmin0416@naver.com", "aInterterviewInfo"=>array("num"=>3, "time"=>"14시", "sbtime"=>"13시40분"))
//     ,array("name"=>"이보빈", "email"=>"cultist_tp@naver.com", "aInterterviewInfo"=>array("num"=>3, "time"=>"14시", "sbtime"=>"13시40분"))

// 4조
//     array("name"=>"전소영", "email"=>"thdud1282@daum.net", "aInterterviewInfo"=>array("num"=>4, "time"=>"15시", "sbtime"=>"14시40분"))
//     ,array("name"=>"조미경", "email"=>"mikyung4088@gmail.com", "aInterterviewInfo"=>array("num"=>4, "time"=>"15시", "sbtime"=>"14시40분"))
//     ,array("name"=>"한혜선", "email"=>"hhs19962002@naver.com", "aInterterviewInfo"=>array("num"=>4, "time"=>"15시", "sbtime"=>"14시40분"))
//     ,array("name"=>"김지은", "email"=>"xjpassion@naver.com", "aInterterviewInfo"=>array("num"=>3, "time"=>"14시", "sbtime"=>"13시40분"))
//     
//     array("name"=>"김현재", "email"=>"dk1004hj@naver.com", "aInterterviewInfo"=>array("num"=>4, "time"=>"15시", "sbtime"=>"14시40분"))
//     ,array("name"=>"계성혁", "email"=>"lkay9495@hotmail.com", "aInterterviewInfo"=>array("num"=>4, "time"=>"15시", "sbtime"=>"14시40분"))
//     ,array("name"=>"백지원", "email"=>"baikjo2@naver.com", "aInterterviewInfo"=>array("num"=>4, "time"=>"15시", "sbtime"=>"14시40분"))
//     ,array("name"=>"박보라", "email"=>"inshyk@naver.com", "aInterterviewInfo"=>array("num"=>4, "time"=>"15시", "sbtime"=>"14시40분"))

// 5조      
//      array("name"=>"장혜린", "email"=>"hinayuyulol@gmail.com", "aInterterviewInfo"=>array("num"=>1, "time"=>"12시", "sbtime"=>"11시40분"))
//     ,array("name"=>"오승연", "email"=>"seuonn@hanmail.net", "aInterterviewInfo"=>array("num"=>5, "time"=>"16시", "sbtime"=>"15시40분"))
//     ,array("name"=>"양진수", "email"=>"sinich99@naver.com", "aInterterviewInfo"=>array("num"=>5, "time"=>"16시", "sbtime"=>"15시40분"))
//     ,array("name"=>"한예성", "email"=>"930805hys@naver.com", "aInterterviewInfo"=>array("num"=>5, "time"=>"16시", "sbtime"=>"15시40분"))
//     
//      array("name"=>"이정훈", "email"=>"ysw0732s@naver.com", "aInterterviewInfo"=>array("num"=>5, "time"=>"16시", "sbtime"=>"15시40분"))
//     ,array("name"=>"박연진", "email"=>"h_tea@naver.com", "aInterterviewInfo"=>array("num"=>5, "time"=>"16시", "sbtime"=>"15시40분"))
//     ,array("name"=>"추진주", "email"=>"jinju2424@naver.com", "aInterterviewInfo"=>array("num"=>5, "time"=>"16시", "sbtime"=>"15시40분"))
//     ,array("name"=>"김성규", "email"=>"foxion@naver.com", "aInterterviewInfo"=>array("num"=>5, "time"=>"16시", "sbtime"=>"15시40분"))


      ) /*}}}*/
      ,"FIL" => array(/*{{{*/
//      array("name"=>"김지현", "email"=>"jihyun6221@naver.com", "aInterterviewInfo"=>array("num"=>1, "time"=>"12시", "sbtime"=>"11시40분"))
//     ,array("name"=>"권다은", "email"=>"eyor@naver.com", "aInterterviewInfo"=>array("num"=>1, "time"=>"12시", "sbtime"=>"11시40분"))
//     ,array("name"=>"김미진", "email"=>"ae878@naver.com", "aInterterviewInfo"=>array("num"=>1, "time"=>"12시", "sbtime"=>"11시40분"))
//     ,array("name"=>"김하영", "email"=>"kimmayoung@gmail.com", "aInterterviewInfo"=>array("num"=>1, "time"=>"12시", "sbtime"=>"11시40분"))
//     ,array("name"=>"이효정", "email"=>"hyon2224@naver.com", "aInterterviewInfo"=>array("num"=>1, "time"=>"12시", "sbtime"=>"11시40분"))

//    array("name"=>"맹지은", "email"=>"jieun0652@naver.com", "aInterterviewInfo"=>array("num"=>1, "time"=>"12시", "sbtime"=>"11시40분"))
//   ,array("name"=>"방누리", "email"=>"nury7230@naver.com", "aInterterviewInfo"=>array("num"=>1, "time"=>"12시", "sbtime"=>"11시40분"))
//   ,array("name"=>"구소희", "email"=>"kidater89@gmail.com", "aInterterviewInfo"=>array("num"=>1, "time"=>"12시", "sbtime"=>"11시40분"))
//   ,array("name"=>"이원상", "email"=>"harryandws@naver.com", "aInterterviewInfo"=>array("num"=>3, "time"=>"14시", "sbtime"=>"13시40분"))
//   ,array("name"=>"최지은", "email"=>"lielieing@naver.com", "aInterterviewInfo"=>array("num"=>2, "time"=>"13시", "sbtime"=>"12시40분"))
//   
//      array("name"=>"김혜영", "email"=>"artikhy@naver.com", "aInterterviewInfo"=>array("num"=>2, "time"=>"13시", "sbtime"=>"12시40분"))
//     ,array("name"=>"박예람", "email"=>"rhdwn8885@naver.com", "aInterterviewInfo"=>array("num"=>2, "time"=>"13시", "sbtime"=>"12시40분"))
//     ,array("name"=>"안예슬", "email"=>"iays11@naver.com", "aInterterviewInfo"=>array("num"=>2, "time"=>"13시", "sbtime"=>"12시40분"))
//     ,array("name"=>"박지언", "email"=>"ccomzi950922@gmail.com", "aInterterviewInfo"=>array("num"=>2, "time"=>"13시", "sbtime"=>"12시40분"))
//     ,array("name"=>"김태희", "email"=>"asaswwj@naver.com", "aInterterviewInfo"=>array("num"=>2, "time"=>"13시", "sbtime"=>"12시40분"))
//   
//    array("name"=>"김정한", "email"=>"wjdgks7178@gmail.com", "aInterterviewInfo"=>array("num"=>2, "time"=>"13시", "sbtime"=>"12시40분"))
//   ,array("name"=>"강은주", "email"=>"eunju_pro@naver.com", "aInterterviewInfo"=>array("num"=>3, "time"=>"14시", "sbtime"=>"13시40분"))
//   ,array("name"=>"고경석", "email"=>"bestvov@naver.com", "aInterterviewInfo"=>array("num"=>3, "time"=>"14시", "sbtime"=>"13시40분"))
//   ,array("name"=>"이다혜", "email"=>"alsk0050@naver.com", "aInterterviewInfo"=>array("num"=>3, "time"=>"14시", "sbtime"=>"13시40분"))
//   ,array("name"=>"공병국", "email"=>"qudrnr1479@gmail.com", "aInterterviewInfo"=>array("num"=>3, "time"=>"14시", "sbtime"=>"13시40분"))
//   
//      array("name"=>"김민호", "email"=>"minmin0416@naver.com", "aInterterviewInfo"=>array("num"=>3, "time"=>"14시", "sbtime"=>"13시40분"))
//     ,array("name"=>"전소영", "email"=>"thdud1282@daum.net", "aInterterviewInfo"=>array("num"=>4, "time"=>"15시", "sbtime"=>"14시40분"))
//     ,array("name"=>"조미경", "email"=>"mikyung4088@gmail.com", "aInterterviewInfo"=>array("num"=>4, "time"=>"15시", "sbtime"=>"14시40분"))
//     ,array("name"=>"한혜선", "email"=>"hhs19962002@naver.com", "aInterterviewInfo"=>array("num"=>4, "time"=>"15시", "sbtime"=>"14시40분"))
//     ,array("name"=>"김지은", "email"=>"xjpassion@naver.com", "aInterterviewInfo"=>array("num"=>3, "time"=>"14시", "sbtime"=>"13시40분"))
//     
//     ,array("name"=>"김현재", "email"=>"dk1004hj@naver.com", "aInterterviewInfo"=>array("num"=>4, "time"=>"15시", "sbtime"=>"14시40분"))
//     ,array("name"=>"계성혁", "email"=>"lkay9495@hotmail.com", "aInterterviewInfo"=>array("num"=>4, "time"=>"15시", "sbtime"=>"14시40분"))
//     ,array("name"=>"백지원", "email"=>"baikjo2@naver.com", "aInterterviewInfo"=>array("num"=>4, "time"=>"15시", "sbtime"=>"14시40분"))
//     ,array("name"=>"박보라", "email"=>"inshyk@naver.com", "aInterterviewInfo"=>array("num"=>4, "time"=>"15시", "sbtime"=>"14시40분"))
//     ,array("name"=>"장혜린", "email"=>"hinayuyulol@gmail.com", "aInterterviewInfo"=>array("num"=>1, "time"=>"12시", "sbtime"=>"11시40분"))
//   
//    array("name"=>"오승연", "email"=>"seuonn@hanmail.net", "aInterterviewInfo"=>array("num"=>5, "time"=>"16시", "sbtime"=>"15시40분"))
//   ,array("name"=>"양진수", "email"=>"sinich99@naver.com", "aInterterviewInfo"=>array("num"=>5, "time"=>"16시", "sbtime"=>"15시40분"))
//   ,array("name"=>"한예성", "email"=>"930805hys@naver.com", "aInterterviewInfo"=>array("num"=>5, "time"=>"16시", "sbtime"=>"15시40분"))
//   ,array("name"=>"이정훈", "email"=>"ysw0732s@naver.com", "aInterterviewInfo"=>array("num"=>5, "time"=>"16시", "sbtime"=>"15시40분"))
//   ,array("name"=>"추진주", "email"=>"jinju2424@naver.com", "aInterterviewInfo"=>array("num"=>5, "time"=>"16시", "sbtime"=>"15시40분"))
//   ,array("name"=>"김성규", "email"=>"foxion@naver.com", "aInterterviewInfo"=>array("num"=>5, "time"=>"16시", "sbtime"=>"15시40분"))
//   ,array("name"=>"전재범", "email"=>"jeon423@empas.com", "aInterterviewInfo"=>array("num"=>4, "time"=>"15시", "sbtime"=>"14시40분"))
      
// 탈락자2명
//     ,array("name"=>"이보빈", "email"=>"cultist_tp@naver.com", "aInterterviewInfo"=>array("num"=>3, "time"=>"14시", "sbtime"=>"13시40분"))
//     ,array("name"=>"박연진", "email"=>"h_tea@naver.com", "aInterterviewInfo"=>array("num"=>5, "time"=>"16시", "sbtime"=>"15시40분"))

      ) /*}}}*/
      ,"g1" => array(/*{{{*/

//    array("name"=>"김지현", "email"=>"jihyun6221@naver.com", "aInterterviewInfo"=>array("num"=>1, "time"=>"12시", "sbtime"=>"11시40분"))
//   ,array("name"=>"권다은", "email"=>"eyor@naver.com", "aInterterviewInfo"=>array("num"=>1, "time"=>"12시", "sbtime"=>"11시40분"))
//   ,array("name"=>"김미진", "email"=>"ae878@naver.com", "aInterterviewInfo"=>array("num"=>1, "time"=>"12시", "sbtime"=>"11시40분"))
//   ,array("name"=>"김하영", "email"=>"kimmayoung@gmail.com", "aInterterviewInfo"=>array("num"=>1, "time"=>"12시", "sbtime"=>"11시40분"))
//   ,array("name"=>"이효정", "email"=>"hyon2224@naver.com", "aInterterviewInfo"=>array("num"=>1, "time"=>"12시", "sbtime"=>"11시40분"))
//
//   , array("name"=>"맹지은", "email"=>"jieun0652@naver.com", "aInterterviewInfo"=>array("num"=>1, "time"=>"12시", "sbtime"=>"11시40분"))
//   ,array("name"=>"방누리", "email"=>"nury7230@naver.com", "aInterterviewInfo"=>array("num"=>1, "time"=>"12시", "sbtime"=>"11시40분"))
//   ,array("name"=>"구소희", "email"=>"kidater89@gmail.com", "aInterterviewInfo"=>array("num"=>1, "time"=>"12시", "sbtime"=>"11시40분"))
//   ,array("name"=>"이원상", "email"=>"harryandws@naver.com", "aInterterviewInfo"=>array("num"=>3, "time"=>"14시", "sbtime"=>"13시40분"))
//   ,array("name"=>"최지은", "email"=>"lielieing@naver.com", "aInterterviewInfo"=>array("num"=>2, "time"=>"13시", "sbtime"=>"12시40분"))
//   
//    array("name"=>"김혜영", "email"=>"artikhy@naver.com", "aInterterviewInfo"=>array("num"=>2, "time"=>"13시", "sbtime"=>"12시40분"))
//   ,array("name"=>"박예람", "email"=>"rhdwn8885@naver.com", "aInterterviewInfo"=>array("num"=>2, "time"=>"13시", "sbtime"=>"12시40분"))
//   ,array("name"=>"안예슬", "email"=>"iays11@naver.com", "aInterterviewInfo"=>array("num"=>2, "time"=>"13시", "sbtime"=>"12시40분"))
//   ,array("name"=>"박지언", "email"=>"ccomzi950922@gmail.com", "aInterterviewInfo"=>array("num"=>2, "time"=>"13시", "sbtime"=>"12시40분"))
//   ,array("name"=>"김태희", "email"=>"asaswwj@naver.com", "aInterterviewInfo"=>array("num"=>2, "time"=>"13시", "sbtime"=>"12시40분"))
// 
//   ,array("name"=>"김정한", "email"=>"wjdgks7178@gmail.com", "aInterterviewInfo"=>array("num"=>2, "time"=>"13시", "sbtime"=>"12시40분"))
//   ,array("name"=>"강은주", "email"=>"eunju_pro@naver.com", "aInterterviewInfo"=>array("num"=>3, "time"=>"14시", "sbtime"=>"13시40분"))
//   ,array("name"=>"고경석", "email"=>"bestvov@naver.com", "aInterterviewInfo"=>array("num"=>3, "time"=>"14시", "sbtime"=>"13시40분"))
//   ,array("name"=>"이다혜", "email"=>"alsk0050@naver.com", "aInterterviewInfo"=>array("num"=>3, "time"=>"14시", "sbtime"=>"13시40분"))
//   ,array("name"=>"공병국", "email"=>"qudrnr1479@gmail.com", "aInterterviewInfo"=>array("num"=>3, "time"=>"14시", "sbtime"=>"13시40분"))
//   
//   ,array("name"=>"김민호", "email"=>"minmin0416@naver.com", "aInterterviewInfo"=>array("num"=>3, "time"=>"14시", "sbtime"=>"13시40분"))
//   ,array("name"=>"전소영", "email"=>"thdud1282@daum.net", "aInterterviewInfo"=>array("num"=>4, "time"=>"15시", "sbtime"=>"14시40분"))
//   ,array("name"=>"조미경", "email"=>"mikyung4088@gmail.com", "aInterterviewInfo"=>array("num"=>4, "time"=>"15시", "sbtime"=>"14시40분"))
//   ,array("name"=>"한혜선", "email"=>"hhs19962002@naver.com", "aInterterviewInfo"=>array("num"=>4, "time"=>"15시", "sbtime"=>"14시40분"))
//   ,array("name"=>"김지은", "email"=>"xjpassion@naver.com", "aInterterviewInfo"=>array("num"=>3, "time"=>"14시", "sbtime"=>"13시40분"))
//     
//   ,array("name"=>"김현재", "email"=>"dk1004hj@naver.com", "aInterterviewInfo"=>array("num"=>4, "time"=>"15시", "sbtime"=>"14시40분"))
//   ,array("name"=>"계성혁", "email"=>"lkay9495@hotmail.com", "aInterterviewInfo"=>array("num"=>4, "time"=>"15시", "sbtime"=>"14시40분"))
//   ,array("name"=>"백지원", "email"=>"baikjo2@naver.com", "aInterterviewInfo"=>array("num"=>4, "time"=>"15시", "sbtime"=>"14시40분"))
//   ,array("name"=>"박보라", "email"=>"inshyk@naver.com", "aInterterviewInfo"=>array("num"=>4, "time"=>"15시", "sbtime"=>"14시40분"))
//   ,array("name"=>"장혜린", "email"=>"hinayuyulol@gmail.com", "aInterterviewInfo"=>array("num"=>1, "time"=>"12시", "sbtime"=>"11시40분"))
//   
//   ,array("name"=>"오승연", "email"=>"seuonn@hanmail.net", "aInterterviewInfo"=>array("num"=>5, "time"=>"16시", "sbtime"=>"15시40분"))
//   ,array("name"=>"양진수", "email"=>"sinich99@naver.com", "aInterterviewInfo"=>array("num"=>5, "time"=>"16시", "sbtime"=>"15시40분"))
//   ,array("name"=>"한예성", "email"=>"930805hys@naver.com", "aInterterviewInfo"=>array("num"=>5, "time"=>"16시", "sbtime"=>"15시40분"))
//   ,array("name"=>"이정훈", "email"=>"ysw0732s@naver.com", "aInterterviewInfo"=>array("num"=>5, "time"=>"16시", "sbtime"=>"15시40분"))
//   ,array("name"=>"추진주", "email"=>"jinju2424@naver.com", "aInterterviewInfo"=>array("num"=>5, "time"=>"16시", "sbtime"=>"15시40분"))
//   ,array("name"=>"김성규", "email"=>"foxion@naver.com", "aInterterviewInfo"=>array("num"=>5, "time"=>"16시", "sbtime"=>"15시40분"))
//   ,array("name"=>"전재범", "email"=>"jeon423@empas.com", "aInterterviewInfo"=>array("num"=>4, "time"=>"15시", "sbtime"=>"14시40분"))
      
// 탈락자2명
//     ,array("name"=>"이보빈", "email"=>"cultist_tp@naver.com", "aInterterviewInfo"=>array("num"=>3, "time"=>"14시", "sbtime"=>"13시40분"))
//     ,array("name"=>"박연진", "email"=>"h_tea@naver.com", "aInterterviewInfo"=>array("num"=>5, "time"=>"16시", "sbtime"=>"15시40분"))

      ) /*}}}*/
    
    ); 
    return $aList[$type]; 
  }/*}}}*/
  private function _getMailInfo($type, $sName, $aInterterviewInfo=array())/*{{{*/
  {
    if(!$type) return;

    $aMailConfig = array(
      "P1T" => array(/*{{{*/
         "subject" => "[코딩클럽] 청년샘 3기 서류전형 결과 입니다."
//      ,"content" => "안녕하세요 ".$sName."님 코딩클럽입니다.<br>
//        먼저 청년샘 3기를 지원해 주셔서 감사합니다.<br>
//        ".$sName."님 께서는 청년샘 3기 서류전형에 합격하셨습니다.<br>
//        진심으로 축하드립니다"
        ,"content" => "안녕하세요. ".$sName." 님 코딩클럽에 관심과 지원을 해주셔서 정말 감사합니다.<br><br>
        귀하께서는 코딩클럽 청년샘 3기 서류전형에 합격되었음을 알려드립니다.<br><br>
        서류전형 합격자 공지<br>
        일시 : 8월 27일 (토) 시간은 추후공지 (면접인원이 많은 관계로)<br>
        장소 : 디 캠프 6층 <br>
        문의메일 : contact.codingclub@gmail.com <br><br>
        코딩클럽 지상범 드림.<br>"
      )/*}}}*/
      ,"P1F" => array(/*{{{*/
         "subject" => "[코딩클럽] 청년샘 3기 서류전형 결과 입니다."
//      ,"content" => "안녕하세요 ".$sName."님 코딩클럽입니다.<br>
//        먼저 청년샘 3기를 지원해 주셔서 감사합니다.<br>
//        ".$sName."님 께서는 청년샘 3기 서류전형에 불합격하셨습니다.<br>
//        코딩클럽 커뮤니티에서도 많은 교류와 열정적인 관계가 지속되었으면 합니다"
        ,"content" => "코딩클럽 ".$sName." 님 청년샘 3기에 지원해주셔서 정말 감사합니다.<br><br>
        이번 청년샘 3기 모집에 감사하며 예상보다 많은 분들께서 지원해주셔서 서류심사 합격자를 선정하는 것이 매우 어려웠습니다.<br>
        코딩클럽 활동지역, 활동 필요 시간 및 지원자의 참여 동기, 코딩클럽에서 지원자께 도움이 될 수 있는 부분 등을 고려하여 심사를 진행하였습니다.<br><br>
        위 고려사항을 토대로 몇일간의 심사숙소를 한 결과 아쉽지만 청년샘 3기에 모시기 어렵게 되었습니다.<br><br>
        하지만 코딩클럽에서 앞으로 다양한 세미나, 워크샵, 교육과정이 개설될 예정이오니 다양한 기회를 통해 다시 만나뵙기를 희망합니다.<br>
        다음 기회에 정말 같이 할 수 있는 시간을 가졌으면 좋겠습니다.<br><br>
        감사합니다.<br>
        코딩클럽 지상범 드림.<br><br>
        문의메일 : contact.codingclub@gmail.com <br>
        "
      )/*}}}*/
      ,"INT" => array(/*{{{*/
         "subject" => "[코딩클럽] 청년샘 3기 면접 안내드립니다."
        ,"content" => "안녕하세요 ".$sName." 님 청년샘 3기에 지원해주셔서 정말 감사합니다.<br><br>
        ".$sName."님께서는 8월 27일(토) 청년샘 3기 오프라인 면접 대상자이십니다.<br>
        면접은 그룹면접으로 진행되며, ".$aInterterviewInfo['num']."조로 참여하시게 되었습니다.<br><br>
        ".$aInterterviewInfo['num']."조 면접<br>
        시간 : ".$aInterterviewInfo["time"]."에 시작하며 면접준비를 위해 ".$aInterterviewInfo["sbtime"]." 까지 <br>
        장소 : 디 캠프 ( 서울특별시 강남구 선릉로 551 (지번 : 서울특별시 강남구 역삼동 683-34 새롬빌딩 6층) )<br>
        &nbsp;&nbsp;&nbsp; 6층 다목적룸 으로 오셔서 대기 해 주시면 됩니다.<br><br>
        급한 연락은 010-5348-7688(청년샘1기 지상범)으로 부탁 드립니다.<br><br>
        감사합니다.
        "
      )/*}}}*/
      ,"INT2" => array(/*{{{*/
         "subject" => "[코딩클럽] 청년샘 3기 면접결과 공지 드립니다."
        ,"content" => "안녕하세요 ".$sName." 님 청년샘 3기에 지원해주셔서 정말 감사합니다.<br><br>
        청년샘 3기의 면접결과는 9월 1일(목) 에 메일로 발송 해 드리겠습니다.<br>
        혹시 못다한 이야기가 있으신 분은 꼭 저희에게 알려 주시기 바랍니다<br><br>
        문의 메일은 : contact.codingclub@gmail.com <br>
        코딩클럽 페이스북과 메신저를 이용해 주셔도 됩니다.<br>
        다시 한번 지원해 주셔서 감사합니다.<br><br>
        급한 연락은 010-5348-7688(청년샘1기 지상범)으로 부탁 드립니다.<br><br>
        "
      )/*}}}*/
      ,"FIL" => array(/*{{{*/
         "subject" => "[코딩클럽] 청년샘 3기 최종 면접결과 안내드립니다."
        ,"content" => "안녕하세요 ".$sName." 님 청년샘 3기에 지원해주셔서 정말 감사합니다.<br><br>
        축하드립니다. <br>
        ".$sName."님 께서는 청년샘3기에 최종 합격하셨습니다. <br><br>
        첫만남 공지<br>
        시간 : 9월 3일 토요일 오전 10시 (2시간)<br>
        장소 : 디 캠프 ( 서울특별시 강남구 선릉로 551 (지번 : 서울특별시 강남구 역삼동 683-34 새롬빌딩 6층) )<br>
        &nbsp;&nbsp;&nbsp; 6층 다목적룸 으로 오시면 됩니다..<br><br>
        
        9월 3일 오리엔테이션에서 서로간의 인사와 앞으로 코딩클럽 일정 및 공유 사항들을 전달할 예정입니다.<br>
        꼭 참석 부탁 드립니다.<br><br>

        문의 메일은 : contact.codingclub@gmail.com <br>
        코딩클럽 페이스북과 메신저를 이용해 주셔도 됩니다.<br>
        급한 연락은 010-5348-7688(청년샘1기 지상범)으로 부탁 드립니다.<br><br>
        "
      )/*}}}*/
      ,"g1" => array(/*{{{*/
         "subject" => "[코딩클럽] 청년샘 3기 공지 입니다."
        ,"content" => '
안녕하세요? 청년샘 3기 여러분.<br>
여러분의 오리엔테이션 및 연수 기획을 맡은 <br>
청년샘 2기 "전이슬"입니다.<br>
다들 주말을 잘보내고 계신가요?<br>
아님 스크래치 "about me" 만드느라 정신이 없으신가요?<br>
다음 주에 스크래치와 앱인벤터를 배울 생각에 <br>
혹시 설레지는 않으신가요?! :-)<br>
코딩클럽의 많은 소프트웨어 교육 활동은 "스크래치"를 통해 이루어지니, 이번 "about me" 를 통해, 스크래치의 기본적인 부분을 각자 익혀보아요.<br>
아마 스크래치의 매력에 푸욱 빠지게 될꺼에요!<br><br>
　
[스크래치 가입 및 공유 가이드 안내]<br>
1) 스크래치 가입하기 <br>
https://scratch.mit.edu<br><br>
　
　
2) 동영상 강의 시청<br>
스크래치의 기본 동작법 및 기능에 대한 내용을 아래 영상과 함께 익숙해지시기 바랍니다.<br>
필수 : http://codingclubs.org/scratch-basic<br>
심화 : http://codingclubs.org/scratch-making<br><br>
　
3) About Me 만들기<br>
코딩클럽에 처음 오는 아이들이 제일 처음으로 하는 프로젝트입니다. 스크래치로 자기를 소개하는 프로그램을 만드는 것이죠.<br>
여러분들도 한번 같이 해보아요! 멋진 자기소개를 기대할께요!<br>
(단, 너무 완벽하지 않아도 좋아요. 아이들이 처음 스크래치를 만나,자기소개를 만들 때 느낄 수 있는 어려움을 같이 공유해보려는 목적도 있으니, 최고의 작품보다 여러분의 최선의 작품을 보여주세요.)<br><br>
　
　
4) 코딩클럽 스크래치 스튜디오에 공유하기<br>
코딩클럽 스튜디오 : https://scratch.mit.edu/studios/689048/<br>
스크래치에서는 하나의 작품을 "프로젝트"라고 부르며, <br>
이들을 비슷한 주제로 모아놓은 것을 "스튜디오"라고 합니다. <br>
코딩클럽에 참여한 아이들이 만든 스크래치를 모으는 "코딩클럽 스튜디오"가 있습니다.여러분이 만든 About Me를 코딩클럽 스튜디오에 공유해주세요.<br>
서로 알아 볼 수 있도록 프로젝트 제목을 <br>
"청년샘3기_이름_자기소개"로 맞춰주세요. <br>
(이름 자리에는 여러분의 이름이 들어가야겠죠?)<br><br>
　
　
5) 페이스북 - 코딩클럽 그룹에 공유하기<br>
코딩클럽 페이스북 그룹 : https://www.facebook.com/groups/CodingClubKorea/<br>
이제는 코딩클럽의 모든 구성원 및 모든 사람들에게 자신의 작품을 자랑해봅시다! 자신의 작품 url과 함께 간단한 자기소개 멘트도 좋습니다. 스크래치를 처음 접한 느낌, 스스로 만들면서 느꼈던 감정들 <br>
재미있었던 점, 어려웠었던 점, 오리엔테이션 후기도 좋구요.<br>
청년샘 3기분들이 느낀 그 감정을 함께 공유하고 싶어요! <br><br>
　
　
**Due Date는 9/6(화요일) 오후 11:59까지 입니다!<br>
**앞으로의 모든 안내 및 공지사항은 <br>
코딩클럽 페이스북 그룹을 통해서 공지됩니다. <br>
두 눈 크게 뜨고 확인부탁드려요.<br><br>
　
그리고 예정대로 9월 10일(토) 13:30부터 <br>
청년샘 3기 스크래치 및 앱인벤터 연수가 진행됩니다.<br>
개인 노트북, 안드로이드 스마트폰(미개통 폰도 가능) 및 <br>
필기구 지참하셔서, 늦지 않게 참석해주세요.<br>
청년샘 3기 여러분 화이팅: -)<br>

        '
      )/*}}}*/
    );
    return $aMailConfig[$type]; 
  }/*}}}*/
  private function _sendMail($sName, $sEmail, $type="", $aInterterviewInfo)/*{{{*/
  {
    if(!$sName || !$sEmail || !$type) return false;
    
    // get type 
    /*
    P1T : 1차 합격
    P1F : 1차 불합격
    P2T : 2차 합격(최종)
    p2F : 2차 불합격( 서포터즈 권유 )
    */
     
    $config['mailtype'] = "html"; 
    $config['charset'] = "utf-8"; 
    $config['protocol'] = "smtp"; 
    $config['smtp_host'] = "ssl://smtp.googlemail.com"; 
    $config['smtp_port'] = 465; 
    
//  $config['smtp_user'] = "contact.codingclub@gmail.com"; 
//  $config['smtp_pass'] = "codingclub2016"; 
    $config['smtp_user'] = "jazzwave14@gmail.com"; 
    $config['smtp_pass'] = "dlghwns0610()("; 
    
    $config['smtp_timeout'] = 10; 

    $aMailInfo = $this->_getMailInfo($type, $sName, $aInterterviewInfo);
    $subject = $aMailInfo["subject"] ;
    $content = $aMailInfo["content"] ;

    $this->load->library('email', $config); 
    $this->email->set_newline("\r\n"); 
    $this->email->clear(); 
    $this->email->from("contact.codingclub@gmail.com", "CodingClub"); 
    $this->email->cc('contact.codingclub@gmail.com');
    $this->email->to($sEmail); 
    $this->email->subject($subject); 
    $this->email->message($content);
   
    $this->email->send(); 
    
    $this->email->set_newline("\r\n"); 
    return;
  }/*}}}*/
  private function _getExcelList($aCourseIDX)/*{{{*/
  {
    if(!is_array($aCourseIDX) || count($aCourseIDX) < 1) return false;

    return $this->admin_dao->getExcelList($aCourseIDX); 
  }/*}}}*/
  private function _sCookie($accountID)/*{{{*/
  {  
    $this->load->helper('cookie');
    $cookie = array(
      'name'   => 'AdminInfo',
      'value'  => json_encode(array('accountID' => $accountID)),
      'expire' => '0',
      'prefix' => 'codingclub_', 
      'domain' => CKDOMAIN,
    );
    set_cookie($cookie); 
    return; 
  }/*}}}*/
  private function _getAdminInfo()/*{{{*/
  {
    return array('accountID' => 'codingclub' , 'passwd' => 'codingclub2016');
  }/*}}}*/
}
?>
