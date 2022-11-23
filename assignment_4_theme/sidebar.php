<?php
if(is_archive()){
    dynamic_sidebar('archive-author-widget');
}else{
    dynamic_sidebar('sidebar-widget');
}
    
?>