<?php

class actionGoIndex extends cmsAction {

    public function run($target = false){

        $query = $this->request->get('q', '');
        $page  = $this->request->get('page', 1);

        if (!is_numeric($page)){ cmsCore::error404(); }

        if($target && $this->validate_sysname($target) !== true){
            cmsCore::error404();
        }

        // если есть отдельный шаблон, используем его
        $tpl = 'index_'.$target;
        if(!$this->cms_template->getTemplateFileName('controllers/go/'.$tpl, true)){
            $tpl = 'index';
        }

 
        $conn = mysqli_connect("127.0.0.1:9306", "", "", "");
              
        if (mysqli_connect_errno())
            die("failed to connect to Sphinx: " . mysqli_connect_error());

        
            // $querys = strip_tags(mb_strtolower(trim(urldecode($query))));
            
            $q = "SELECT * ,SNIPPET(content,'".$querys."','limit=180') as snippet FROM post WHERE MATCH('".$querys."') limit 50";  
   
            $result = mysqli_query($conn, $q);
    
        
        return $this->cms_template->render($tpl, array(
            'query'        => $query,  
            'page'         => $page,
            'perpage'      => 10,
            'results'      => (isset($results) ? $results : false)
        ));

    }

}
