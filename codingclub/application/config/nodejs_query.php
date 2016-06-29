<?php
/*
  * data : ? bind data
  * btype : bind data type
  * null : not null check data list
*/
$config['query'] = array(
  'test' => array( 
    'getInfo' => array( 
      'query' => 'SELECT idx, test_val1, test_val2 
                    FROM nodejs_test 
                   WHERE idx = ?'
      ,'data' => array('idx')
      ,'btype'=> 'i'
      ,'null' => array('idx') 
    )
  )
);
?>
