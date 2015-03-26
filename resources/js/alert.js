$( document ).ready(function() {
    $('.alert-close').on("click", function () {
        $(this).parents('.alert').fadeOut();
    });
});