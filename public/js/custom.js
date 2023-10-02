
$(document).ready(function () {
          $("#myTable").DataTable();
});
buttons = document.querySelectorAll("#cart");

total=document.querySelector('#total')
let noadd=false
// console.log(buttons);
buttons.forEach((el) => {
          el.addEventListener("click", () => {
            let countcart = document.getElementById("countcart");
            countcart.innerHTML = cart.length ;
            console.log(countcart.innerHTML -1);
	let allbaba = document.querySelectorAll(".cart-detail-product");
		allbaba.forEach((baba)=>{
			
if (el.getAttribute("namepr") === baba.childNodes[1].innerHTML) {
	 let countElement = baba.querySelector(".count");
           let currentQuantity = parseInt(
                     countElement.textContent.split(":")[1].trim()
           );
           countElement.textContent = `Quantity: ${currentQuantity + 1}`;
		   total.innerHTML=(currentQuantity + 1) * el.getAttribute("price") 
	
	noadd=true
}
		})
	
if (!noadd) {
			let productcart=document.createElement('div');
			productcart.classList.add("cart-detail");
			productcart.classList.add("row");
		
                  productcart.innerHTML = `
      <div class="col-lg-4 col-sm-4 col-4 cart-detail-img ">
                                    <img src="../${el.getAttribute("image")}" />
                                </div>
                                <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                    <p>${el.getAttribute("namepr")}</p>
                                    <span class="price text-success"> ${el.getAttribute(
                                              "price"
                                    )}</span> <span class="count">Quantity: 1</span>
                                </div>`;
								
                    let cart = document.querySelector("#baba");
					
						
						cart.appendChild(productcart);
									}



                    let valueToAdd = el.getAttribute("name");
                    console.log(valueToAdd);

                    axios.post("/add-product-to-session-array", {
                              data: valueToAdd,
                    })
                              .then(function (response) {
                                        console.log(response.data.message); // Output the response message
                                        // You can update the DOM or perform other actions here if needed
                              })
                              .catch(function (error) {
                                        console.error(error);
                              });
          });
           return false;
});

(function ($) {
          "use strict";

          /* ..............................................
	Loader 
    ................................................. */

          $(window).on("load", function () {
                    $(".preloader").fadeOut();
                    $("#preloader").delay(550).fadeOut("slow");
                    $("body").delay(450).css({ overflow: "visible" });
          });

          /* ..............................................
    Fixed Menu
    ................................................. */

          $(window).on("scroll", function () {
                    if ($(window).scrollTop() > 50) {
                              $(".top-header").addClass("fixed-menu");
                    } else {
                              $(".top-header").removeClass("fixed-menu");
                    }
          });

          /* ..............................................
    Gallery
    ................................................. */
$(document).ready(function () {     
          $("#slides").superslides({
                    inherit_width_from: ".cover-slides",
                    inherit_height_from: ".cover-slides",
                    play: 5000,
                    animation: "fade",
          });
});
          $(".cover-slides ul li").append(
                    "<div class='overlay-background'></div>"
          );

          /* ..............................................
    Map Full
    ................................................. */

          $(document).ready(function () {
                    $(window).on("scroll", function () {
                              if ($(this).scrollTop() > 100) {
                                        $("#back-to-top").fadeIn();
                              } else {
                                        $("#back-to-top").fadeOut();
                              }
                    });
                    $("#back-to-top").click(function () {
                              $("html, body").animate({ scrollTop: 0 }, 600);
                              return false;
                    });
          });

          /* ..............................................
    Special Menu
    ................................................. */

          var Container = $(".container");
          Container.imagesLoaded(function () {
                    var portfolio = $(".special-menu");
                    portfolio.on("click", "button", function () {
                              $(this)
                                        .addClass("active")
                                        .siblings()
                                        .removeClass("active");
                              var filterValue = $(this).attr("data-filter");
                              $grid.isotope({
                                        filter: filterValue,
                              });
                    });
                    var $grid = $(".special-list").isotope({
                              itemSelector: ".special-grid",
                    });
          });

          /* ..............................................
    BaguetteBox
    ................................................. */

          baguetteBox.run(".tz-gallery", {
                    animation: "fadeIn",
                    noScrollbars: true,
          });

          /* ..............................................
    Datepicker
    ................................................. */

          $(".datepicker").pickadate();

          $(".time").pickatime();
})(jQuery);





