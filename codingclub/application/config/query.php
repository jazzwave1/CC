<?php
/*
  * data : ? bind data
  * btype : bind data type
  * null : null check data list (null을 허용하는값)
*/
$config['query'] = array(
  'membership' => array( /*{{{*/
    'getAccountInfo' => array( 
      'query' => 'SELECT usn, account_id 
                    from account 
                   where usn=?'
      ,'data' => array('usn')
      ,'btype'=> 'i'
      ,'null' => array() 
    )
    ,'getAccountInfoID' => array( 
      'query' => 'SELECT usn, account_id 
                    from account 
                   where account_id=?'
      ,'data' => array('account_id')
      ,'btype'=> 's'
      ,'null' => array() 
    )
    ,'getUserInfo' => array( 
      'query' => 'SELECT usn, name, hp, school, grde, addrcode, pusn 
                    FROM users 
                   WHERE usn=?'
      ,'data' => array('usn')
      ,'btype'=> 'i'
      ,'null' => array() 
    )

    ,'setUserInfo' => array( 
       'query' => 'INSERT INTO users ( usn, name, school, grde, addrcode, pname, php, pemail, pjob, pschool, regdate)
                   VALUES (?,?,?,?,?,?,?,?,?,?,?)'
       ,'data' => array( 'usn', 'name', 'school', 'grde', 'addrcode', 'pname', 'php', 'pemail', 'pjob', 'pschool', 'regdate')
       ,'btype'=> 'issssssssss'
       ,'null' => array('school','grde','addrcode','pname','php','pemail','pjob','pschool','regdate')
    )
    ,'setAccountInfo' => array( 
      'query' => 'INSERT INTO account ( account_id, pwd, regdate )
                  VALUES (?,?,?)'
      ,'data' => array( 'account_id', 'pwd', 'regdate')
      ,'btype'=> 'sss'
      ,'null' => array()
    )
    ,'getPwd' => array( 
      'query' => 'SELECT usn, pwd 
                    FROM account  
                   WHERE account_id = ?' 
      ,'data' => array('account_id')
      ,'btype'=> 's'
      ,'null' => array() 
    )
    ,'getIDCount' => array( 
      'query' => 'SELECT count(*) as cnt 
                    FROM account  
                   WHERE account_id = ?' 
      ,'data' => array('account_id')
      ,'btype'=> 's'
      ,'null' => array() 
    )
    ,'setMemberSVC' => array( 
      'query' => 'INSERT INTO member_svc( usn, course_idx, state, regdate)
                  VALUES (?,?,?,?)'
      ,'data' => array( 'usn', 'course_idx', 'state', 'regdate')
      ,'btype'=> 'iiss'
      ,'null' => array()
    )
    ,'setQuestionInfo' => array( 
      'query' => 'INSERT INTO questionnaire( usn, course_idx, recommend, motive, like_tf, experience, nature, favor, jr_hope, channel, club_hope, inquiry)
                  VALUES (?,?,?,?,?,?,?,?,?,?,?,?)'
      ,'data' => array( 'usn', 'course_idx', 'recommend', 'motive', 'like_tf', 'experience', 'nature', 'favor', 'jr_hope', 'channel', 'club_hope', 'inquiry')
      ,'btype'=> 'iissssssssss'
      ,'null' => array()
    )
  )/*}}}*/
  ,'course' => array( /*{{{*/
    'getCourseInfo' => array( 
      'query' => 'SELECT course_name, contents, student_count, sdate, edate, regdate 
                    FROM course 
                   WHERE course_idx = ?'
      ,'data' => array('course_idx')
      ,'btype'=> 'i'
      ,'null' => array() 
    )
    ,'getCourseInfoToday' => array( 
      'query' => 'SELECT course_name, contents, student_count, sdate, edate, type, regdate 
                    FROM course 
                   WHERE type = ?
                     and sdate >= ?'
    
      ,'data' => array('type', 'sdate')
      ,'btype'=> 'ss'
      ,'null' => array() 
    )
    ,'setCouresInfo' => array( 
     'query' => 'INSERT INTO coures ( course_name, contents, student_count, sdate, edate, img_url, regdate)
                 VALUES (?,?,?,?,?,?,?)'
     ,'data' => array( 'course_name', 'contents', 'student_count', 'sdate', 'edate', 'img_url', 'regdate')
     ,'btype'=> 'ssissss'
     ,'null' => array()
    )
    
  )/*}}}*/
  
  ,'log' => array( /*{{{*/
    'setLoginLog' => array( 
     'query' => 'INSERT INTO login_log ( usn, account_id , regdate)
                 VALUES (?,?,?)'
     ,'data' => array( 'usn', 'account_id', 'regdate')
     ,'btype'=> 'iss'
     ,'null' => array( 'usn', 'account_id','regdate')
    )
    
  )/*}}}*/
     

);
?>
