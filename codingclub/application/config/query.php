<?php
/*
  * data : ? bind data
  * btype : bind data type
  * null : not null check data list
*/
$config['query'] = array(
  'membership' => array( 
    'getUserInfo' => array( 
      'query' => 'SELECT u.usn, a.account, u.username, u.parent, u.type, u.regdate 
                    FROM users u , account a 
                   WHERE a.usn = ? 
                     AND u.usn = a.usn'
      ,'data' => array('usn')
      ,'btype'=> 'i'
      ,'null' => array('usn') 
    )
    ,'setUserInfo' => array( 
     'query' => 'INSERT INTO users ( username, parent, type, regdate )
                 VALUES (?,?,?,?)'
     ,'data' => array( 'username', 'parent', 'type', 'regdate')
     ,'btype'=> 'ssss'
     ,'null' => array('usernme','type','regdate')
    )
    ,'setAccountInfo' => array( 
     'query' => 'INSERT INTO account ( account_id, pwd, regdate )
                 VALUES (?,?,?)'
     ,'data' => array( 'account_id', 'pwd', 'regdate')
     ,'btype'=> 'sss'
     ,'null' => array('account_id','pwd','regdate')
    )
    ,'getPwd' => array( 
      'query' => 'SELECT pwd 
                    FROM account  
                   WHERE account_id = ?' 
      ,'data' => array('account_id')
      ,'btype'=> 's'
      ,'null' => array('account_id') 
    )
 
  )
  ,'course' => array( 
    'getCourseInfo' => array( 
      'query' => 'SELECT course_name, contents, student_count, sdate, edate, regdate 
                    FROM course 
                   WHERE course_idx = ?'
      ,'data' => array('course_idx')
      ,'btype'=> 'i'
      ,'null' => array('course_idx') 
    )
    ,'getCourseInfoToday' => array( 
      'query' => 'SELECT course_name, contents, student_count, sdate, edate, type, regdate 
                    FROM course 
                   WHERE type = ?
                     and sdate >= ?'
    
      ,'data' => array('type', 'sdate')
      ,'btype'=> 'ss'
      ,'null' => array('type', 'sdate') 
    )
    ,'setCouresInfo' => array( 
     'query' => 'INSERT INTO coures ( course_name, contents, student_count, sdate, edate, img_url, regdate)
                 VALUES (?,?,?,?,?,?,?)'
     ,'data' => array( 'course_name', 'contents', 'student_count', 'sdate', 'edate', 'img_url', 'regdate')
     ,'btype'=> 'ssissss'
     ,'null' => array( 'course_name', 'contents', 'sdate', 'edate', 'regdate')
    )
    
  )
  
     

);
?>
