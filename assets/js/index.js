document.addEventListener("DOMContentLoaded", function () {
   const buttons = document.querySelectorAll("button");
   buttons.forEach((button) => {
      button.addEventListener("click", function (e) {
         // If it's the toggle button, don't prevent default:
         if (button.getAttribute("onclick") === "toggleMobileMenu()") return;

         e.preventDefault();
         console.log("Button clicked:", this.textContent);
      });
   });

   const subscribeButton = document.getElementById("subscribeButton");
   if (subscribeButton) {
      subscribeButton.addEventListener("click", function (e) {
         e.preventDefault();
         const emailInput = document.querySelector('input[type="email"]');
         if (emailInput && emailInput.value) {
            alert("Thank you for subscribing!");
            emailInput.value = "";
         } else {
            alert("Please enter a valid email address.");
         }
      });
   }

   const mobileMenuButton = document.getElementById("mobileMenuButton");
   const mobileMenu = document.getElementById("mobileMenu");

   if (mobileMenuButton && mobileMenu) {
      mobileMenuButton.addEventListener("click", function () {
         mobileMenu.classList.toggle("hidden");
      });
   }
});
