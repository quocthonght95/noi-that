$(document).ready(function()
{
    $(".update_cart").click(function()
    {
        var rowid = $(this).attr('id');
        var qty = $(this).parent().parent().find(".qty").val();
        var token = $("input[name='_token']").val();
        $.ajax(
        {
            url:'cap-nhat/'+rowid+'/'+qty,
            type:'GET',
            cache:false,
            data:{"_token":token, "id":rowid, "qty":qty},
            success:function (data){
                if(data){
                    $("span#total_product").html(data['total']);
                    $("span#total-item").html(data['total']);
                    $("span#cart-total").html(data['qty']);
                    $("strong#qty-item").html(data['qty1']);
                    $("span#total-price_"+data['id']).html(data['price']*data['qty1']);
                }
            }
        });

    });
})
// $("a#number_item").html("Giỏ Hàng ("+ data['qty'] +")");
// $("button#total_price").html(+data['total']+".000đ");
// $("strong#total_book").html(+data['total']+".000đ");
// $("#price_totals_"+data['id']).html(+data['price']*data['qty1']+".000đ");