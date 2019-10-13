$( document ).ready(function() {

    $('#addDept').click(function(){
        console.log('fffff')
        $('.Modal').append(addModal);
        $('#addModal').modal('show');
    });

    $('#btn_edit').click(function(){
        $('.Modal').append(editModal);
        $('#editModal').modal('show');
    });

});
