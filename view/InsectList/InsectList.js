$( document ).ready(function() {

    $('#addInsect').click(function(){
        console.log('fffff')
        $('.Modal').append(addModal);
        $('#addModal').modal('show');
    });
});