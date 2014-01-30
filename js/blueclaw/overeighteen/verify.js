document.observe("dom:loaded", function() {
    if(Mage.Cookies.get('ageverified'))
    {
        $('ageVerificationCheck').remove();
        $('ageVerificationCheckBG').remove(); 
    } else {
        
        $('verifyAge').on('click', 'button', function(){      
              $('ageVerificationCheck').remove();
              $('ageVerificationCheckBG').remove();        
              Mage.Cookies.set('ageverified', 1);
        });
        $('underAge').on('click', 'button', function(){
            $('underAgeMsg').show();
            $('ageVerificationCheck').addClassName('faded');
        });
        $('underAgeMsgBtn').on('click', 'button', function(){
            $('underAgeMsg').hide();
            $('ageVerificationCheck').removeClassName('faded');            
        });
    
    }
});