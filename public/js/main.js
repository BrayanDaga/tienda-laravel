$(document).ready(function () {
    console.log('JQUERy funciona');
    $('#products').pinterest_grid({
        no_columns: 4,
        padding_x: 10,
        padding_y: 10,
        margin_bottom: 50,
        single_column_breakpoint: 700
        });


      /*update cart*/


    $('.btn-update-item').click(function (e) { 
      e.preventDefault();
      var id = $(this).data('id');
        var href = $(this).data('href');
        var quantity = $('#product_'+id).val();
        window.location.href = href + "/" + quantity;
    });
});