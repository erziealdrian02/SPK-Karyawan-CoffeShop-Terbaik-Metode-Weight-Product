const allSideMenu = document.querySelectorAll("#sidebar .side-menu.top li a");

allSideMenu.forEach((item) => {
   const li = item.parentElement;

   item.addEventListener("click", function () {
      allSideMenu.forEach((i) => {
         i.parentElement.classList.remove("active");
      });
      li.classList.add("active");
   });
});

// TOGGLE SIDEBAR
const menuBar = document.querySelector("#content nav .bx.bx-menu");
const sidebar = document.getElementById("sidebar");

menuBar.addEventListener("click", function () {
   sidebar.classList.toggle("hide");
});

const searchButton = document.querySelector(
   "#content nav form .form-input button"
);
const searchButtonIcon = document.querySelector(
   "#content nav form .form-input button .bx"
);
const searchForm = document.querySelector("#content nav form");

searchButton.addEventListener("click", function (e) {
   if (window.innerWidth < 576) {
      e.preventDefault();
      searchForm.classList.toggle("show");
      if (searchForm.classList.contains("show")) {
         searchButtonIcon.classList.replace("bx-search", "bx-x");
      } else {
         searchButtonIcon.classList.replace("bx-x", "bx-search");
      }
   }
});

if (window.innerWidth < 768) {
   sidebar.classList.add("hide");
} else if (window.innerWidth > 576) {
   searchButtonIcon.classList.replace("bx-x", "bx-search");
   searchForm.classList.remove("show");
}

window.addEventListener("resize", function () {
   if (this.innerWidth > 576) {
      searchButtonIcon.classList.replace("bx-x", "bx-search");
      searchForm.classList.remove("show");
   }
});

const switchMode = document.getElementById("switch-mode");

switchMode.addEventListener("change", function () {
   if (this.checked) {
      document.body.classList.add("dark");
   } else {
      document.body.classList.remove("dark");
   }
});

// Function to preview the uploaded image
function previewImageAdd(event) {
   var reader = new FileReader();
   reader.onload = function () {
      var output = document.getElementById("image-preview-img");
      output.src = reader.result;
      document.getElementById("image-preview").style.display = "block";
   };
   reader.readAsDataURL(event.target.files[0]);
}

function previewImageEdit(event, karyawan_id) {
   var reader = new FileReader();
   reader.onload = function () {
      var output = document.getElementById("image-preview-img" + karyawan_id);
      output.src = reader.result;
      document.getElementById("image-preview" + karyawan_id).style.display =
         "block";
   };
   reader.readAsDataURL(event.target.files[0]);
}

function calculateTotal(absen_id) {
   // Get the values of the inputs
   var sd = parseFloat(document.getElementById("sd" + absen_id).value) || 0;
   var pc = parseFloat(document.getElementById("pc" + absen_id).value) || 0;
   var dt = parseFloat(document.getElementById("dt" + absen_id).value) || 0;
   var i = parseFloat(document.getElementById("i" + absen_id).value) || 0;
   var s = parseFloat(document.getElementById("s" + absen_id).value) || 0;
   var a = parseFloat(document.getElementById("a" + absen_id).value) || 0;

   // Calculate the total
   var total = sd + pc + dt + i + s + a;

   // Set the value of the hidden input field
   document.getElementById("total_bobot" + absen_id).value = total;
}
