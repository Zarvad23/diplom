$("#ajax-form-1").submit(function(e){
    let name = $("#ajax-form-1", "#name").value;
    let message = $("#ajax-form-1", "#form-text").value;
    e.preventDefault();
    $.ajax({
        type:"POST",
        url : "/php/sendMessage.php",
        data:{
            'name': name,
            'message': message
        },
    });
});