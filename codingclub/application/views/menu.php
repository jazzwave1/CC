      <!--Left menu--> 
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
              
            <?php
              foreach($aMenu as $key=>$val)
              {
                if(count($val['child'] > 0))
                {
                  if($val['active'])
                    echo '<li class="active treeview">';
                  else
                    echo '<li class="treeview">';
                  
                  echo '  <a href="#">';
                  echo '    <i class="fa fa-files-o"></i>';
                  echo '      <span>'.$val['title'].'</span>';
                  echo '  </a>';
                  
                  if(is_array($val['child']))
                  {
                    echo '<ul class="treeview-menu">';
                    foreach($val['child'] as $k=>$v)
                    {
                      echo '<li><a href="'.$v['link'].'"><i class="fa fa-circle-o"></i>'.$v['title'].'</a></li>';
                    }
                    echo '  </ul>';
                    echo '</li>';
                  }
                }
              }
            ?> 
            
            
          </ul>
        </section>
      </aside>
      <!--Left menu--> 
 
