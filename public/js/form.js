$('body').on('click', '.modal-show', function (event) {
    event.preventDefault();

    var me = $(this),
        url = me.attr('href'),
        title = me.attr('title');

    $('#modal-title').text(title);
    $('#modal-btn-save').removeClass('hide')
    .text(me.hasClass('edit') ? 'Update' : 'Create');

    $.ajax({
        url: url,
        dataType: 'html',
        success: function (response) {
            $('#modal-body').html(response);
        }
    });

    $('#modal').modal('show');
});

$('#modal-btn-save').click(function (event) {
    event.preventDefault();

    var form = $('#modal-body form'),
        url = form.attr('action'),
        method = $('input[name=_method]').val() == undefined ? 'POST' : 'PUT';
    
    form.find('.help-block').remove();
    form.find('.form-group').removeClass('has-error');


    $.ajax({
        url : url,
        type: method,
        data : form.serialize(),
        // dataType: 'json', // this bit here
        success: function (response) {
            form.trigger('reset');



            // console.log(method, url);
            // $('.open').html(response);
            console.log(response);
            
            // $('#modal').modal('hide');
            // $('#datatable').DataTable().ajax.reload();

            // swal({
            //     type : 'success',
            //     title : 'Success!',
            //     text : 'Data has been saved!'
            // });

        },
        error : function (xhr) {
            var res = JSON.parse(xhr.responseText);
            
            // var res1 = JSON.parse(xhr);
            
            // $( ".open" ).html( res );
            // console.log(xhr);
            if ($.isEmptyObject(res) == false) {
                
                $.each(res.errors, function (key, value) {
                    $('#' + key)
                        .closest('.controls')
                        .addClass('has-error')
                        .append('<span class="help-block"  style="color:red" ><strong>' + value + '</strong></span>');
                });
            }
        }
    })
});

$('body').on('click', '.btn-delete', function (event) {
    event.preventDefault();

    var me = $(this),
        url = me.attr('href'),
        title = me.attr('title'),
        csrf_token = $('meta[name="csrf-token"]').attr('content');

    swal({
        title: 'Are you sure want to delete ' + title + ' ?',
        text: 'You won\'t be able to revert this!',
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.value) {
            $.ajax({
                url: url,
                type: "GET",
                data: {
                    '_method': 'DELETE',
                    '_token': csrf_token
                },
                success: function (response) {
                    $('#datatable').DataTable().ajax.reload();
                    
                    swal({
                        type: 'success',
                        title: 'Success!',
                        text: 'Data has been deleted!'
                    });
                },
                error: function (xhr) {
                    alert(response);
                    swal({
                        type: 'error',
                        title: 'Oops...',
                        text: 'Something went wrong!'
                        
                    });
                }
            });
        }
    });
});

$('body').on('click', '.btn-show', function (event) {
    event.preventDefault();

    var me = $(this),
        url = me.attr('href'),
        title = me.attr('title');

    $('#modal-title').text(title);
    $('#modal-btn-save').addClass('hide');

    $.ajax({
        url: url,
        dataType: 'html',
        success: function (response) {
            $('#modal-body').html(response);
        }
    });

    $('#modal').modal('show');
});

