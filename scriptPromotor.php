<script>
$( "select[name='tryb']" ).change(function () {
    var stateID = $(this).val();


    if(stateID) {


        $.ajax({
            url: "ajaxtryb.php",
            dataType: 'Json',
            data: {'id':stateID},
            success: function(data) {
                $('select[name="rok"]').empty();
                $.each(data, function(key, value) {
                    $('select[name="rok"]').append('<option value="'+ key +'">'+ value +'</option>');
                });
            }
        });


    }else{
        $('select[name="rok"]').empty();
    }
});

$( "select[name='promotor']" ).change(function () {
    var stateID = $(this).val();
	

    if(stateID) {


        $.ajax({
            url: "ajaxpro.php",
            dataType: 'Json',
            data: {'id':stateID},
            success: function(data) {
                $('select[name="praca"]').empty();
                $.each(data, function(key, value) {
                    $('select[name="praca"]').append('<option value="'+ key +'">'+ value +'</option>');
                });
            }
        });


    }else{
        $('select[name="praca"]').empty();
    }
});
</script>