$(document).ready(function() {

    $('#field').keyup(function() {
        $('form').submit(function() {
            var data = $(this).serialize();

            $.ajax({
                url: 'process.php',
                type: 'POST',
                dataType: 'html',
                data,
                success: function(data) {
                    $('#result').empty().html(data);
                }
            })

            return false;
        })

        $('form').trigger('submit');
    });


});