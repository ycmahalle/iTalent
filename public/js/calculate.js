// const item = document.getElementById("item");
// const quantity = document.getElementById("quantity");
// const amount = document.getElementById("amount");
// const selectItem = () => {
//     console.log(item.dataset.rate);
// }

// item.onchange = selectItem;
$(document).ready(function() {

    var Validator = $("#add_order_form").validate({

        rules: {
            date: {
                required: true,
            },
            item: {
                required: true,

            },

        },
        messages: {
            date: {
                required: 'date is Required.',
            },
            item: {
                required: 'please select item',

            },


        },
    });

    $("#item").change(function(e) {
        e.preventDefault();
        const item = $("#item").val();
        datastr = { item: item };
        console.log(item);
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            method: 'post',
            url: '/get/rate',
            data: datastr,
            success: function(response) {
                const rate = response[0].rate;
                $("#quantity").val(1);
                $("#amount").val(response[0].rate);
            },
            error: function(error) {
                console.log(error);
            }
        });
    });
    $("#quantity").change(function(e) {
        e.preventDefault();
        const item = $("#item").val();
        if (item == '') {
            $('#err').html('<p class="alert alert-danger animate__animated animate__zoomIn" style="border-left:5px solid red"> please select item first</p>');
        }
        setTimeout(function() {
            $('#err').fadeOut();
        }, 2000)
        const quantity = $("#quantity").val();
        datastr = { item: item };
        console.log(item);
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            method: 'post',
            url: '/get/rate',
            data: datastr,
            success: function(response) {
                const rate = response[0].rate;

                const newAmount = rate * quantity;
                $("#amount").val(newAmount);

            },
            error: function(error) {
                console.log(error);
            }
        });
    });
    // if ($("#add_order_form").length > 0) {
    //     var Validator = jQuery("#add_order_form").validate({
    //         rules: {
    //             date: {
    //                 required: true,
    //             },
    //             item: {
    //                 required: true,

    //             },

    //         },
    //         messages: {
    //             date: {
    //                 required: 'date is Required.',
    //             },
    //             item: {
    //                 required: 'please select item',

    //             },


    //         },
    //     });
    //     $("#add_order_submit").click(function(e) {
    //         e.preventDefault();
    //         if ($("#add_order_submit").valid()) {
    //             var name = $("#date").val();
    //             var email = $("#item").val();
    //             var contact = $("#quantity").val();
    //             var Tan = $("#amount").val();
    //             var datastr = { date: name, item: email, quantity: contact, amount: Tan };
    //             $.ajax({
    //                 headers: {
    //                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //                 },
    //                 method: 'post',
    //                 url: '/add/order',
    //                 data: datastr,
    //                 success: function(response) {
    //                     alert(response);
    //                     // console.log(response)
    //                     // if (response == 1) {
    //                     //     $('#form-errors').html('<p class="alert alert-success animate__animated animate__zoomIn" style="border-left:5px solid green"> Vendor Added Successfully</p>');
    //                     //     $("#vendor_register_form")[0].reset();
    //                     // } else {
    //                     //     $('#form-errors').html('<p class="alert alert-danger animate__animated animate__zoomIn" style="border-left:5px solid Red">00ps ! Unable to add Vendor , please try again.</p>');
    //                     // }
    //                 },
    //                 error: function(error) {
    //                     if (error.status == 422) {
    //                         var errors = error.responseJSON;
    //                         errorsHtml = '<div class="alert alert-danger animate__animated animate__zoomIn" style="border-left:5px solid Red"><ul>';
    //                         $.each(errors, function(key, value) {
    //                             errorsHtml += '<li>' + errors.message + '</li>'; //showing only the first error.
    //                         });
    //                         errorsHtml += '</ul></div>';
    //                         $('#form-errors').html(errorsHtml);
    //                         console.log(error);
    //                         console.log(error);
    //                     } else {
    //                         alert("Provided Info is Invalid");
    //                     }
    //                 }
    //             });

    //         } else {
    //             Validator();
    //         }

    //     })


    // }
});