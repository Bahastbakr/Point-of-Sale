function getTotal() {
    var total_array = [];
    $("#products tr").each(function () {
        var quantity = $(this).find(".quantity").text()
        var price = $(this).find(".price").text();
       var  totalAll=parseInt(price)*parseInt(quantity);
       total_array.push(totalAll)

    });
    total_array.shift()
    var total = 0;
    for (var i = 0; i < total_array.length; i++) {
        total += total_array[i] << 0;
    }
    $("#total").text(total+" ");

}
$(function () {
    $(".search_product").click(function () {
        var barcode = $("#number").val()
        $.ajax({
            url: '/product/sell/' + barcode,
            type: 'get',
            dataType: 'json',
            success: function (response) {

                for (var i = 0; i < response['data'].length; i++) {
                    var id = response['data'][i].id;
                    var name = response['data'][i].name;
                    var sellprice = response['data'][i].sellprice;

                    var tr_str =
                        "<tr>" +
                        "<td>" + name + "</td>" +
                        "<td class='price'>" + sellprice + "</td>" +
                        "<td class='w-100 text-center'>" + "<span>" + "<button class='plus btn btn-primary'> <i class='fa fa-plus' aria-hidden='true'> </i> </button>" + "<span class='quantity h6 ps-5 pe-5'> 1 </span>" + "<button class='minus btn btn-danger'> <i class='fa fa-minus' aria-hidden='true'> </i> </button>" + "</span>" + "</td>" +
                        "   <td> <button class='btn remove btn-danger'><i class='fa fa-trash' aria-hidden='true'></i></button></td>" +
                        "</tr>";

                    $("#products tbody").append(tr_str);
                    $("#added_products").text($("#products  tbody  tr").length) + 1;
                    getTotal()                    
                    
                    
                 

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
    $("tbody").on('click', ".plus", function () {
        var quantity = +$(this).next().text();
        var newQuantity = quantity + 1;
        $(this).next().text(newQuantity);
        getTotal()

    });


    $("tbody").on('click', ".minus", function () {
        var quantity = +$(this).prev().text();
        var newQuantity = quantity - 1;
        $(this).prev().text(newQuantity);
        getTotal()
    });

    $("tbody").on('click', ".remove", function () {
        $(this).closest("tr").remove();
        $("#added_products").text($("#products  tbody  tr").length) - 1;
        getTotal()
    });




});
