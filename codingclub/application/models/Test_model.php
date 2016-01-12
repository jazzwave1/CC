<?php
class Test_model extends CI_Model
{
    function __construct()/*{{{*/
    {
        parent::__construct();
        $this->load->database('iot');
        //$this->load->library('ftt/Auth');
    }/*}}}*/

    private function getQuery($tableName)
    {
        // null : null 이 들어 오면 않되는 값들임 
        $aQuery = array(
            'step' => array( 'deleteService_step' =>
                        array(
                           array( 'query'=> 'UPDATE service SET is_remove = ? WHERE idx = ?'
                                 ,'data' => array('is_remove','idx')
                                 ,'btype'=> 'ii')
                          ,array( 'query'=> 'UPDATE menu SET is_remove = ? WHERE service_idx = ( SELECT idx FROM service WHERE idx = ? )'
                                 ,'data' => array('is_remove','idx')
                                 ,'btype'=> 'ii')
                          ,array( 'query'=> 'DELETE
                                               FROM menu_auth
                                                WHERE menu_idx in (
                                                      SELECT m.idx as menu_idx
                                                        FROM service s , menu m
                                                       WHERE m.service_idx = s.idx
                                                         AND s.idx = ? )'
                                 ,'data' => array('idx')
                                 ,'btype'=> 'i')
                        )
                )
            ,'test' => array(  'getTestALL' => 
                                    array( 'query'=> 'SELECT idx, val1, val2, contents, regdate 
                                                        FROM test'
                                           ,'data' => array()
                                           ,'btype'=> '')
                               ,'getTest' => 
                                    array( 'query'=> 'SELECT idx, val1, val2, contents, regdate 
                                                        FROM test
                                                       where idx = ?'
                                           ,'data' => array('idx')
                                           ,'btype'=> 'i'
                                           ,'null' => array('idx'))
                               ,'setTest'=>array( 'query'=> 'INSERT INTO test ( val1, val2, contents, regdate )
                                                             VALUES (?,?,?,?)'
                                                  ,'data' => array('val1', 'val2', 'contents', 'regdate')
                                                  ,'btype'=> 'iiss'
                                                  ,'null'=> array('val1','val2'))
                               ,'updateUser'=>array('query'=> 'UPDATE test 
                                                                   SET
                                                                       contents = ?
                                                                 WHERE idx = ?'
                                                     ,'data' => array('contents', 'idx')
                                                     ,'btype'=> 'si')
                               ,'deleteUser'=>array( 'query'=> 'DELETE FROM test WHERE idx = ?'
                                                     ,'data' => array('idx')
                                                     ,'btype'=> 'i')
                               )
            ,'user' => array( 
              'getUserInfo' => array( 
                 'query'=> 'SELECT usn, account_id, usernme, parent, type, regdate 
                             FROM test
                            where usn = ?'
                ,'data' => array('usn')
                ,'btype'=> 'i'
              )
            )
        ); // end aQuery
        return $aQuery[$tableName];
    }
    private function chkParam( $aConfig , $aParam, $aNull=array() )
    {
        $chkParam = true;

        foreach($aConfig as $key=>$val)
        {
            if( $aParam[$val]=='' && !in_array($val, $aNull) )
            {
                //echo $val;
                $chkParam = false;
                break;
            }
            if($aParam[$val] == '')
                $aParam[$val] = 'NULL';

            $aData[] = $aParam[$val];
        }
        
        if($chkParam)
            return $aData;
        else
            return $chkParam;
    }
    private function runQuery($query , $aInputData, $bType)
    {
        //echo "<pre>";
        //echo "Query : ".$query."<br>" ;
        //echo "bTtype : ".$bType."<br>" ;
        //echo "Array Input : ";
        //print_r($aInputData);

        if ($oResult = $this->db->query($query, $aInputData, true, $bType))
        {
            if(strstr(strtoupper( $query ),"SELECT") && !(strstr(strtoupper( $query ),"DELETE") || strstr(strtoupper( $query ),"UPDATE")))
            {
                $result = $oResult->result();
                return $result;
            }
            else
                return true;
        }
        else
        {
            print_r($this->db);
        }
            return false;
    }
    public function setStepQuery($aParam='')/*{{{*/
    {
        $cnt = 0;

        $aConfig = $this->getQuery("step");

        foreach($aConfig[$aParam['stepName']] as $key=>$val)
        {
            $aData = $val['data'];

            if ( ! $this->chkParam($aData, $aParam['param'][$cnt]) )
                return false;

                $cnt++;
        }

        $cnt = 0;
        $ret = true;
        foreach($aConfig[$aParam['stepName']] as $key=>$val)
        {
            $query = $val['query'];
            $aData = $val['data'];
            $bType = $val['btype'];

            $aInputData = array();
            $aInputData = $this->chkParam($aData, $aParam['param'][$cnt]) ;

            if (! $this->runQuery($query , $aInputData, $bType))
                $ret = false;

            $aLog['ival_str_temp'][] = implode('|',$aInputData);
            $cnt++;
        }

//       $aLog['menu'] = $aParam['stepName'] ;
//       $aLog['ival_str'] = implode(',',$aLog['ival_str_temp']);
//       $this->setLog($aLog);

        return $ret;
    }/*}}}*/


 
    public function getTestALL($aParam='')
    {
        $aConfig = $this->getQuery("test");
        $query = $aConfig['getTestALL']['query'];
        $aData = $aConfig['getTestALL']['data'];
        $bType = $aConfig['getTestALL']['btype'];
        
        $aInputData = array();

        if ($result = $this->runQuery($query , $aInputData, $bType))
            return $result;
        else
            return false;
    }
    public function getTest($aParam='')
    {
        $aConfig = $this->getQuery("test");
        $query = $aConfig['getTest']['query'];
        $aData = $aConfig['getTest']['data'];
        $bType = $aConfig['getTest']['btype'];
        $aNull = $aConfig['getTest']['null'];

        if ( ! $aInputData = $this->chkParam($aData, $aParam, $aNull) )
            return false;

//       if ( ! $aInputData = $this->chkParam($aData, $aParam) )
//           return false;

        if ($result = $this->runQuery($query , $aInputData, $bType))
            return $result;
        else
            return false;
    }
    public function setTest($aParam='')
    {
        $aConfig = $this->getQuery("test");
        $query = $aConfig['setTest']['query'];
        $aData = $aConfig['setTest']['data'];
        $bType = $aConfig['setTest']['btype'];
        $aNull = $aConfig['setTest']['null'];

        if ( ! $aInputData = $this->chkParam($aData, $aParam, $aNull) )
        {
            return false;
        }

        if ( $this->runQuery($query , $aInputData, $bType))
        {
//           $aLog['menu'] = 'setUser';
//           $aLog['ival_str'] = implode('|',$aInputData);
//
//           $this->setLog($aLog);
            return true;
        }
        else
            return false;
    }

/*
    public function updateUser($aParam='')
    {
        $aConfig = $this->getQuery("user");
        $query = $aConfig['updateUser']['query'];
        $aData = $aConfig['updateUser']['data'];
        $bType = $aConfig['updateUser']['btype'];

        if ( ! $aInputData = $this->chkParam($aData, $aParam) )
        {
            return false;
        }

        if ( $this->runQuery($query , $aInputData, $bType))
        {
            $aLog['menu'] = 'updateUser';
            $aLog['ival_str'] = implode('|',$aInputData);

            $this->setLog($aLog);
            return true;
        }
        else
            return false;
    }
    public function deleteUser($aParam='')
    {
        $aConfig = $this->getQuery("user");
        $query = $aConfig['deleteUser']['query'];
        $aData = $aConfig['deleteUser']['data'];
        $bType = $aConfig['deleteUser']['btype'];

        if ( ! $aInputData = $this->chkParam($aData, $aParam) )
        {
            return false;
        }

        if ( $this->runQuery($query , $aInputData, $bType))
        {
            $aLog['menu'] = 'deleteUser';
            $aLog['ival_str'] = implode('|',$aInputData);

            $this->setLog($aLog);
            return true;
        }
        else
            return false;
    }
*/

  public function getUserInfo($aParam='')
  {
    $aConfig = $this->getQuery("user");
    $query = $aConfig['getUserInfo']['query'];
    $aData = $aConfig['getUserInfo']['data'];
    $bType = $aConfig['getUserInfo']['btype'];
    $aNull = $aConfig['getUserInfo']['null'];

    if ( ! $aInputData = $this->chkParam($aData, $aParam, $aNull) ) 
      return false;

    if ($result = $this->runQuery($query , $aInputData, $bType)) 
      return $result;
    else
      return false;
  }
}
?>
