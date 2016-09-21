<?php

namespace angularjs{
    
    /* Prevent Direct Access */
    defined('ADAPT_STARTED') or die;
    
    class bundle_angularjs extends \adapt\bundle{
        
        public function __construct($data){
            parent::__construct('angularjs', $data);
        }
        
        public function boot(){
            if (parent::boot()){
                
                $this->dom->attr('ng-app', '');
                $this->dom->head->add(new html_script(array('type' => 'text/javascript', 'src' => "/adapt/angularjs/angularjs-{$this->version}/static/js/angularjs.min.js")));
                return true;
            }
            
            return false;
        }
        
    }
    
    
}

?>