function delItem(item){
    let notifier = new AWN(options);
    control = item.getAttribute('data-control');
    id = item.getAttribute('data-id');
    table = item.getAttribute('data-table');
    let onOk = () => {
        $.post('index.php?module=admin&controller='+control+'&action=delete', {id: id,table:table}, function (data){
            if(table == 'product_image'){
                item.closest('.nav-item').remove();
                return false;
            }
            if (data.affected > 0){
                location.reload();
            }
        }, 'json');
    };
    notifier.confirm('Are you wante to delete?', onOk);
}

$(document).on('change','.filePhotoImage',function(){
    var $_this = $(this);
    console.log($_this);
    $_this.closest("form").ajaxSubmit({
        type: "POST",
        url: 'index.php?module=admin&controller=product&action=addImage',
        dataType: "json",
        success: function(res) {
            if(res.msg=='error'){
                alert('Upload fail!');
                return false;
            }
            $_this.closest('.images_block').find('.product_images').append(res.html);
        }
    });
    return false;
});
$(document).on('click','.btn_next_step_product',function(){
    var $_this = $(this);
    $_this.closest("form").ajaxSubmit({
        type: "POST",
        url: 'index.php?module=admin&controller=product&action=nextStep',
        dataType: "json",
        success: function(res) {
            if(res.msg!='ok'){
                alert('Update error');
                return false;
            }
        }
    });
    return false;
});
$(function () {
    // wizard
    $('#addproduct-nav-pills-wizard').bootstrapWizard({
        'tabClass': 'nav nav-pills nav-justified'
    });
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(document).on('change','.uploadImage',function () {
        var form = new FormData();
        var file_data = $('.uploadImage').prop('files')[0];
        form.append('file', file_data);
        console.log(form);
        $.ajax({
            processData: false,
            contentType: false,
            type:'POST',
            data: form,
            url: '/admin/upload/services',
            dataType:'json',
            success: function (res) {
                if(res.error === false){
                    $('.img_show').html('<img width="120" height="120" class="mt-3 border rounded mt-2 preview__image"\n' +
                        ' src="'+res.url+'">');
                    $('.file_input').val(res.url);
                }else {
                    alert(res.message);
                }
            }
        });
    });
});

function removeRow(id, url) {
    if (confirm('Bạn có chắc chắn muốn xóa')){
        $.ajax({
            type: "DELETE",
            url: url,
            data: {id:id},
            dataType: "json",
            success: function(res) {
                if (res.error == false){
                    alert(res.message);
                    location.reload();
                    return false;
                }
                alert(res.message);
            }
        });
    }
}
function changeStatusItem(id, url) {
    if (confirm('Bạn có chắc chắn muốn thay đổi trạng thái')){
        $.ajax({
            type: "POST",
            url: url,
            data: {id:id},
            dataType: "json",
            success: function(res) {

            }
        });
    }
}
