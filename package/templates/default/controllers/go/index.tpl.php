<?php

    $this->setPageTitle(LANG_GO_TITLE);

?>    


    <h1><?php echo LANG_GO_TITLE; ?></h1>   

    <div id="search_go">
        <form action="<?php echo href_to('go'); ?>" method="get">
        
            <?php echo html_input('text', 'q', $query, array('placeholder'=>LANG_GO_QUERY_INPUT)); ?>
        
            <?php echo html_submit(LANG_GO_GO); ?>
        
        </form>
    </div>


<div id="search_results_list">
        
    <?php foreach($results as $go){ ?>
            
        <div class="go-telo"> 
                        
            <div class="go-header">  
                 
                <?php html(date("d/m, H:i", $go['date'])); ?>
                
            </div>
                    
            <a class="go-title" target="_blank" href="/post/<?php html($go['slug']); ?>.html">
                
                <?php echo $go['title']; ?>
                
            </a>
                  
            <div class="go-content">
                
                <?php echo $go['snippet']; ?>
                
            </div>

        </div>

    <?php } ?>
            
 </div>
