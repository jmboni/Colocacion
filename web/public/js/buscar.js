$(document).ready(function($){
    //$("#buscador").focus();
    
    $('#buscador').keyup(function(key)
    {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        };
        
        if(this.value.length >= 3 || this.value == '') {
            
            key.preventDefault();
            $('#loader').show();
            $('#trabajos').load(
                $(this).parents('form').attr('action'), { query: this.value ? this.value + '*': this.value }
            );
        }
        $('#loader').hide();
    });
    
    var cambio = false;
        $('.nav li a').each(function(index) {
        if(this.href.trim() == window.location){
            $(this).parent().addClass("active");
            cambio = true;
        }
        });
        if(!cambio){
        $('.nav li:first').addClass("active");
    }
});