/**
 * Pricing stuff
 */

import "odometer/odometer.min.js";
import "odometer/themes/odometer-theme-minimal.css";

$(".pricing-plans").on("change", 'input[name="pricing-basis"]', function() {
    let period = this.value;

    $(".price", $(".pricing-plans")).each(function() {
        // add 'yearly' css class to 'this' if you want to display /yr label for the price when displayed a yearly basis
        $(this).removeClass("monthly yearly").addClass(period);
        this.innerHTML = $(this).data(period);
    });
  }
);
