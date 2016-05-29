/**
 * User: Maxim Kiryanov
 * Date: 5/29/16
 */

function init() {
    function serialize() {
        return JSON.stringify({
            name: this.children('#name').val(),
            phone: this.children('#phone').val(),
            email: this.children('#email').val(),
            text: this.children('#addition').val()
        });
    }

    var orderForm = $('form');
    orderForm.serialize = serialize;
    orderForm.on("submit", function(event) {
        var data = orderForm.serialize();
        console.log(data);
        $.ajax({
            method: "POST",
            async: true,
            url: "TestMail.php",
            //contentType: "text/plain",
            data: { "data" : data }
        })
            .done(function(data) {
                // console.log(data);
            })
            .fail(function(data) {
                // console.log(data);
            })
            .always(function(data) {
                console.log(data);
            });
        event.preventDefault();
    });
}