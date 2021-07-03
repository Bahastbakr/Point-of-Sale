function getTotal() {
    var total_array = [];
    $("#products tr").each(function () {
        var quantity = $(this).find(".quantity").text()
        var price = $(this).find(".price").text();
        var totalAll = parseInt(price) * parseInt(quantity);
        total_array.push(totalAll)

    });
    total_array.shift()
    var total = 0;
    for (var i = 0; i < total_array.length; i++) {
        total += total_array[i] << 0;
    }
    $("#total").text(total + " ");
}
function reset() {
    $("#number").val("")
    $("#total").text(0+" ")
    $("#added_products").text("0")
    $("#products tbody").empty()
    $("#sell").hide()
}


$(function () {
    $(".search_product").click(function () {
        var barcode = $("#number").val()
        $.ajax({
            url: '/product/sell/' + barcode,
            type: 'get',
            dataType: 'json',
            success: function (response) {
                if (!Object.keys(response.data).length) {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                    })

                    Toast.fire({
                        icon: 'error',
                        title: 'ببورە ئەم شتوومەکە بوونی نییە'
                    })
                }
                for (var i = 0; i < response['data'].length; i++) {
                    var id = response['data'][i].id;
                    var name = response['data'][i].name;
                    var sellprice = response['data'][i].sellprice;

                    var tr_str =
                        "<tr>" +
                        "<td class='d-none id'>" + id + "<input type='hidden' name='pr_id[]' value='"+ id +"'/> </td>" +
                        "<td>" + name + "<input name='pr_name[]' type='hidden' value='" + name +"'/></td>" +
                        "<td class='price'>" + sellprice +  "<input type='hidden' name='pr_sellprice[]' type='hidden' value='" + sellprice +"'/> </td>" +
                        "<td class='w-100 text-center'>" + "<span>" + "<button class='plus btn btn-success'> <i class='fa fa-plus' aria-hidden='true'> </i> </button>" + "<span class='quantity h6 ps-5 pe-5'> 1 <input type='hidden' name='pr_quantity[]' value='1'/> </span>" + "<button class='minus btn btn-danger'> <i class='fa fa-minus' aria-hidden='true'> </i> </button>" + "</span>" + "</td>" +
                        "   <td> <button class='btn remove btn-danger'><i class='fa fa-trash' aria-hidden='true'></i></button></td>" +
                        "</tr>";

                    if ($("#products tbody tr").length == 0) {
                        $("#products tbody").append(tr_str);
                        $("#added_products").text($("#products  tbody  tr").length) + 1;
                        getTotal()
                        $("#sell").show();

                    } else {
                        var flag = 0;
                        var current_row;
                        $("#products tbody tr").each(function () {
                            var id_exist = $(this).find(".id").text()
                            if (id == id_exist) {
                                flag = 1;
                                current_row = $(this);
                            }
                        });
                        if (flag == 1) {
                            var quantity_exist = current_row.find(".quantity").text()
                            var newQuantity = parseInt(quantity_exist) + 1;
                            var new_row =
                                "<tr>" +
                                "<td class='d-none id'>" + id + "<input type='hidden' name='pr_id[]' value='"+id+"'/> </td>" +
                                "<td>" + name + "<input name='pr_name[]' type='hidden' value='" + name +"'/></td>" +
                                "<td class='price'>" + sellprice +  "<input type='hidden' name='pr_sellprice[]' type='hidden' value='" + sellprice +"'/> </td>" +
                                "<td class='w-100 text-center'>" + "<span>" + "<button class='plus btn btn-success'> <i class='fa fa-plus' aria-hidden='true'> </i> </button>" + "<span class='quantity h6 ps-5 pe-5'>" + newQuantity + "<input type='hidden' name='pr_quantity[]' value='" + newQuantity +"'/> </span>" + "<button class='minus btn btn-danger'> <i class='fa fa-minus' aria-hidden='true'> </i> </button>" + "</span>" + "</td>" +
                                "   <td> <button class='btn remove btn-danger'><i class='fa fa-trash' aria-hidden='true'></i></button></td>" +
                                "</tr>";
                            current_row.replaceWith(new_row);
                            getTotal()
                        } else {
                            $("#products tbody").append(tr_str);
                            $("#added_products").text($("#products  tbody  tr").length) + 1;
                            getTotal()
                            $("#sell").show();

                        }

                    }
                }
            }
        });

    });

    $('input[type="number"]')[0].focus();
    $("#added_products").text($("#products  tbody  tr").length)


    $("#1").click(function () {
        $("#number").val(function (index, val) {
            return val + "1";
        });
    });
    $("#2").click(function () {
        $("#number").val(function (index, val) {
            return val + "2";
        });
    });
    $("#3").click(function () {
        $("#number").val(function (index, val) {
            return val + "3";
        });
    });
    $("#4").click(function () {
        $("#number").val(function (index, val) {
            return val + "4";
        });
    });
    $("#5").click(function () {
        $("#number").val(function (index, val) {
            return val + "5";
        });
    });
    $("#6").click(function () {
        $("#number").val(function (index, val) {
            return val + "6";
        });
    });
    $("#7").click(function () {
        $("#number").val(function (index, val) {
            return val + "7";
        });
    });
    $("#8").click(function () {
        $("#number").val(function (index, val) {
            return val + "8";
        });
    });
    $("#9").click(function () {
        $("#number").val(function (index, val) {
            return val + "9";
        });
    });

    $("#0").click(function () {
        $("#number").val(function (index, val) {
            return val + "0";
        });
    });
    $("#clear").click(function () {
        $("#number").val("")

    });
    $("#erase").click(function () {
        $("#number").val(
            function (index, value) {
                return value.substr(0, value.length - 1);
            })
    });
    $("tbody").on('click', ".plus", function (event) {
        event.preventDefault();
        var quantity = +$(this).next().text();
        var newQuantity = quantity + 1;
        $(this).next().text(newQuantity);
        getTotal()

    });


    $("tbody").on('click', ".minus", function (event) {
        event.preventDefault();
        var quantity = +$(this).prev().text();
        var newQuantity = quantity - 1;
        $(this).prev().text(newQuantity);
        if ($(this).prev().text() == 0) {
            $(this).parent().parent().parent().remove()
            $("#sell").hide()
            $("#added_products").text(0);

        }
        getTotal()
    });

    $("tbody").on('click', ".remove", function () {
        $(this).closest("tr").remove();
        $("#added_products").text($("#products  tbody  tr").length) - 1;
        getTotal()
        if ($("#products  tbody  tr").length == 0) {
            $("#sell").hide()
            $("#added_products").text(0);
        }

    });
    $('#product_form').on('submit', function(event){
        event.preventDefault();
        var formdata = $(this).serialize();

        var total = $("#total").text();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '/transaction',
            type: 'post',
            dataType: 'JSON',
            data: {
                total: total
            },
            success: function (response) {

                $.ajax({
                    url: '/transaction/transaction_details',
                    type: 'post',
                    dataType:'JSON',
                    data: {
                        formdata:formdata,
                        transaction_id:response
                    },
                    success: function (response1) {
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top',
                            showConfirmButton: false,
                            timer: 2000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.addEventListener('mouseenter', Swal.stopTimer)
                                toast.addEventListener('mouseleave', Swal.resumeTimer)
                            }
                        })
    
                        Toast.fire({
                            icon: 'success',
                            title: 'فرۆشرا'
                        })
                        reset()
                    },
                    error: function(error) {
                        console.log(error);
                    }
                })
            }
        });
    });

});
