$(function($){

    $(".modal-body__phone").mask("(999) 999-9999");

    $(".modal-body form").on("submit", function (e) {
        e.preventDefault();
        var name = $(".modal-body__name").val();
        var email = $(".modal-body__email").val();
        var phone = $(".modal-body__phone").val();
        var question = $(".modal-body__question").val();

        $.ajax({
            type: "POST",
            url:  "/local/templates/cargopress/ajax/addQuestion.php",
            data: {
                name: name,
                email: email,
                phone: phone,
                question: question
            },
            error: function () {
                alert("Ajax error");
            },
            success: function(result){
                result = JSON.parse(result);
                if (result['status']) {
                    $(".modal-body .message").html(result['message']);
                   // $(".modal-body .btn btn-primary");
                }
            }
        })
    })

})