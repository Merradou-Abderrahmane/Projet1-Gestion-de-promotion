$(document).ready(function() {
    $('#search').keyup(function() {
        var input = $(this).val();
        // alert(input);

        if (input != ' ') {
            $.ajax({
                url: "search.php",
                method: "POST",
                data: {
                    key: input
                },
                success: function(data) {
                    $('#results').html(data);
                }
            });

        }

    });
});