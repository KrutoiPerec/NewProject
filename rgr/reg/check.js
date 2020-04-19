(function( $ ){
    jQuery.fn.exists = function() {
        return jQuery(this).length;
     }
     $(function() {
        if( $('.form_check').exists()){
            $('.form_check').each(function(){ 
            var form = $(this),
            btn = form.find('.ForButton');
            btn.addClass('disabled')
            btn.css("opacity","0.2") 
            function checkInput()
            {
                form.find('.rfield').each(function(){
                    if($(this).hasClass('mailfield')) {
                        var mailfield = $(this);
                        var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
                        if(pattern.test(mailfield.val())){
                          mailfield.removeClass('empty_field');
                          $(this).css("border","2px solid green");
                        } else {
                          mailfield.addClass('empty_field');
                          $(this).css("border","2px solid red");
                        }
                      
                      } else if($(this).hasClass('Rpass'))
                      {
                        if($(this).val() != '' && $(this).val() == form.find('.pass').val())
                        {
                            $(this).removeClass("empty_field");
                            $(this).css("border","2px solid green");
                        }
                        else
                        {
                            $(this).css("border","2px solid red");
                            $(this).addClass("empty_field");
                        }
                      }
                    else
                    if($(this).val() == '')
                    {
                        $(this).css("border","2px solid red");
                        $(this).addClass("empty_field");
                    }
                    else
                    {
                        $(this).removeClass("empty_field");
                        $(this).css("border","2px solid green");
                    }
                });
            }
            setInterval(function(){
                checkInput();
                var sizeEmpty = form.find('.empty_field').length;
                if(sizeEmpty > 0){
                  if(btn.hasClass('disabled')){
                    btn.css("opacity","0.2")  
                    return false
                  } else {
                    btn.addClass('disabled')
                    btn.css("opacity","0.2")
                  }
                } else {
                  btn.removeClass('disabled')
                  btn.css("opacity","1")
                }
              },100);
            btn.click(function(){
                if($(this).hasClass("disabled"))
                {
                    return false;
                }
                else
                {
                    form.submit(); 
                }
            });
        });
        }
     });
})( jQuery );