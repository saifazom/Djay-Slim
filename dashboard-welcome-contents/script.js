
jQuery(document).ready( function($){
    var value =  window.location.hash.replace('#', '').split('/');
        
    if(!value){
        return;
    }
    
    var section = decodeURIComponent(value[0]);
    var slide = decodeURIComponent(value[1]);
    
    var targettedParent = jQuery('[data-key="'+section+'"]');
    
    if(targettedParent.length){
        targettedParent.click();
    }
});     
