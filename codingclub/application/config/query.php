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
      'query' => 'SELECT usn, name, school, grde, addrcode, pname, php, pemail, pjob, regdate 
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
    ,'getMemberSVC' => array( 
      'query' => 'SELECT m.usn, m.course_idx, m.state, c.name, m.regdate 
                    FROM member_svc m , course c
                   WHERE m.course_idx = c.idx 
                     AND m.usn = ? '
      ,'data' => array('usn')
      ,'btype'=> 'i'
      ,'null' => array() 
    )
    ,'setQuestionInfo' => array( 
      'query' => 'INSERT INTO questionnaire( usn, course_idx, recommend, motive, like_tf, experience, nature, favor, jr_hope, channel, club_hope, inquiry, exprogram)
                  VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)'
      ,'data' => array( 'usn', 'course_idx', 'recommend', 'motive', 'like_tf', 'experience', 'nature', 'favor', 'jr_hope', 'channel', 'club_hope', 'inquiry', 'exprogram')
      ,'btype'=> 'iisssssssssss'
      ,'null' => array('club_hope','inquiry','exprogram')
    )
    ,'updateAccountConfirm' => array( 
      'query' => 'UPDATE account 
                     SET confirm = ?  
                   WHERE usn = ?' 
      ,'data' => array('regdate','usn')
      ,'btype'=> 'si'
      ,'null' => array() 
    )
    ,'getConfirm' => array( 
      'query' => 'SELECT confirm 
                    FROM account  
                   WHERE account_id = ?' 
      ,'data' => array('account_id')
      ,'btype'=> 's'
      ,'null' => array() 
    )
    ,'updateUserInfo' => array( 
      'query' => 'UPDATE users 
                     SET name = ? 
                        ,school = ?
                        ,grde = ?
                        ,addrcode = ?
                        ,pname = ?
                        ,php= ?
                        ,pemail= ?
                        ,pjob= ?
                        ,pschool= ?
                   WHERE usn = ?' 
      ,'data' => array('name','school','grde','addrcode','pname','php','pemail','pjob','pschool', 'usn')
      ,'btype'=> 'sssssssssi'
      ,'null' => array('pschool') 
    )
  )/*}}}*/
  ,'course' => array( /*{{{*/
    'getCourseInfo' => array( 
      'query' => 'SELECT idx, name, content, target, schedule, need, recruit, location, sponsor, sdate, edate 
                    FROM course 
                   WHERE idx = ?'
      ,'data' => array('idx')
      ,'btype'=> 'i'
      ,'null' => array() 
    )
    ,'getCourseALL' => array( 
      'query' => 'SELECT idx as course_idx , name, content, target, schedule, need, recruit, sdate, edate 
                    FROM course 
                   WHERE idx >= ?'
      ,'data' => array('idx')
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

  
  ,'admin' => array( /*{{{*/
    'getUserList' => array( 
      'query' => 'SELECT u.usn, u.name, u.school, u.grde, u.pname, u.php, u.pemail, m.course_idx, m.state 
                    FROM users as u 
                    LEFT OUTER JOIN member_svc as m 
                      ON u.usn = m.usn
                   WHERE m.course_idx = ?'
      ,'data' => array('course_idx')
      ,'btype'=> 'i'
      ,'null' => array() 
    )
    ,'getCourse' => array( 
      'query' => 'SELECT idx, name 
                    FROM course
                   where idx >= ?  ' 
      ,'data' => array('idx')
      ,'btype'=> 'i'
      ,'null' => array() 
    )
    ,'updateState' => array( 
      'query' => 'UPDATE member_svc 
                     SET state = ?  
                   WHERE usn = ?
                     AND course_idx = ?' 
      ,'data' => array('state','usn','course_idx')
      ,'btype'=> 'sii'
      ,'null' => array() 
    )
    ,'getUserInfoFromEmailID' => array( 
      'query' => 'SELECT a.account_id, a.regdate, a.confirm, u.usn, u.name, u.school, u.grde, u.pname, u.php, u.pemail 
                    FROM users as u, account a  
                   WHERE u.usn = a.usn
                     and a.account_id = ?'
      ,'data' => array('account_id')
      ,'btype'=> 's'
      ,'null' => array() 
    )
    ,'getUserInfoFromName' => array( 
      'query' => 'SELECT a.account_id, a.regdate, a.confirm, u.usn, u.name, u.school, u.grde, u.pname, u.php, u.pemail 
                    FROM users as u, account a  
                   WHERE u.usn = a.usn
                     and u.name = ?'
      ,'data' => array('name')
      ,'btype'=> 's'
      ,'null' => array() 
    )
    ,'updateCourseInfo' => array( 
      'query' => 'UPDATE course 
                     SET content = ?
                       , target = ?
                       , schedule = ?
                       , need = ?
                       , recruit = ?
                       , location = ?
                       , sponsor = ?
                       , sdate = ?
                       , edate = ?
                   WHERE idx = ?'
      ,'data' => array('content','target','schedule','need','recruit','location','sponsor','sdate','edate','idx')
      ,'btype'=> 'sssssssssi'
      ,'null' => array('content','target','schedule','need','recruit','location','sponsor','sdate','edate') 
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
