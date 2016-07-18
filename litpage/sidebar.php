 <div class="sidebar">
  <ul> 
        <?php  include"calender.php";  ?>
        <div class="hh"></div>
        <li>
            <div class="panel">
                
                    
                    <div class="tit">文章分类</div>
                    <?php $this->widget('Widget_Metas_Category_List')->listCategories('wrapClass=widget-list'); ?>
               
            </div>
        </li>
        <div class="hh"></div>
        <li>
            <div class="panel">
                <ul>
                    
                    <div class="tit">最近文章</div>
                     <?php $this->widget('Widget_Contents_Post_Recent')
            ->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
                </ul>
            </div>
            

        </li>
        
        
    </ul>
    

    <!-- end .sidebar --></div>