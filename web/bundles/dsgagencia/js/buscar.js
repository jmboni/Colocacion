$(document).ready(function()
{
    $('.buscador input[type="submit"]').hide();
 
    $('#buscador').keyup(function(key)
    {
        if(this.value.length >= 3 || this.value == '') {
            $('#loader').show();
            $('#trabajos').load(
                $(this).parent('form').attr('action'),
                { query: this.value ? this.value + '*' : this.value },
                function() {
                    $('#loader').hide();
                }
            );
        }
    });
});