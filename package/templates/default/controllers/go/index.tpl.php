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
