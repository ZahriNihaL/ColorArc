
$(".dropdown-btn").click(function () {
  $(this).find("i").toggleClass("rotate-180");
})

$(".add-cart").click(function () {
  var pid = $(this).parent().find(".pid").val();
  $.ajax({
    url: "functions/functions.php",
    data: {
      add_cart: true,
      product_id: pid
    },
    type: "POST",
    success: function (response) {

      if (response == 0) {
        $(".popup").addClass("alert-danger");
        $(".popup").text("Invalid Product!");
      } else if (response == 1) {
        $(".popup").addClass("alert-success");
        $(".popup").text("Product added to cart!");
      } else if (response == 2) {
        $(".popup").addClass("alert-danger");
        $(".popup").text("Failed to add cart!");
      }
    }
  })
})


window.setTimeout(function () {
  $(".popup").fadeTo(500, 0).slideUp(500, function () {
    $(this).remove();
  });
}, 2000);



$(".qty-button").click(function () {
  var out;
  var type = $(this).attr("for");
  var output = $(this).parent().find(".qty-output").text();

  if (type == "decrement") {
    if (parseInt(output) !== 0) {
      out = parseInt(output) - 1;
      $(this).parent().find(".qty-output").text(out);
    }
  } else if (type == "increment") {
    out = parseInt(output) + 1;
    $(this).parent().find(".qty-output").text(out);
  }


  var cid = $(this).parent().find(".cid").val();
  var pro_price = $(this).parent().find(".pro_price_output").val();
  var total = 0;

  $.ajax({
    url: "functions/functions.php",
    data: {
      update_cart: true,
      cart_id: cid,
      qty: out
    },
    type: "POST",
    success: function (response) {
      if (response == 0) {
        $(".popup").addClass("alert-danger");
        $(".popup").text("Sorry");
      } else if (response == 1) {
        total = parseFloat(pro_price) * out;
        $(this).parents(".row").find(".ind-tot-price").text(total);
      } else if (response == 2) {
        $(".popup").addClass("alert-danger");
        $(".popup").text("Failed to change quantity!");
      }
    }
  })

})


$(".add-wishlist").click(function () {
  var pid = $(this).parent().find(".pid").val();

  $.ajax({

    url: "functions/functions.php",
    data: {

      add_wishlist: true,
      product_id: pid

    },

    type: "POST",
    success: function (response) {
      if (response == 0) {
        $(".popup").addClass("alert-danger");
        $(".popup").text("Invalid Product!");
      } else if (response == 1) {
        $(".popup").addClass("alert-success");
        $(".popup").text("Product added to wishlist!");
      } else if (response == 2) {
        $(".popup").addClass("alert-danger");
        $(".popup").text("Failed to add wishlist!");
      }
    }
  })
})

window.setTimeout(function () {
  $(".popup").fadeTo(500, 0).slideUp(500, function () {
    $(this).remove();
  });
}, 2000);




$(".cart_btn").click(function () {
  var pid = $(this).parent().find(".pid").val();
  $.ajax({
    url: "functions/functions.php",
    data: {
      cart_btn: true,
      product_id: pid
    },
    type: "POST",
    success: function (response) {

      if (response == 0) {
        $(".popup").addClass("alert-danger");
        $(".popup").text("Invalid Product!");
      } else if (response == 1) {
        $(".popup").addClass("alert-success");
        $(".popup").text("Product added to cart!");
      } else if (response == 2) {
        $(".popup").addClass("alert-danger");
        $(".popup").text("Failed to add cart!");
      }
    }
  })
})


window.setTimeout(function () {
  $(".popup").fadeTo(500, 0).slideUp(500, function () {
    $(this).remove();
  });
}, 2000);
