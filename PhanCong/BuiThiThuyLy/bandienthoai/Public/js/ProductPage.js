// // Tym product
// const elmTymProducts = document.querySelectorAll(".tym-product");
// const protocol = window.location.protocol;
// const hostname = window.location.hostname;
// const port = window.location.port;

// var srcTymProduct = `${protocol}//${hostname}:${port}/assets/icon/tym-product.svg`;
// var srcTymProductAction = `${protocol}//${hostname}:${port}/assets/icon/tym-product-action.svg`;

// elmTymProducts.forEach((elm) => {
//     elm.onclick = function () {
//         if (elm.src.includes(srcTymProduct)) {
//             elm.setAttribute("src", srcTymProductAction);
//         } else {
//             elm.setAttribute("src", srcTymProduct);
//         }
//     };
// });

// //Page control

// var productItem = document.querySelectorAll(".product-item");
// var productPerPage = 9;
// var totalPage = Math.ceil(productItem.length / productPerPage);
// var controlNumber = document.querySelector(".main-control__number");
// var control = document.querySelector(".main-control");
// var currentPage = 1;

// var controlPrev = document.querySelector("main-control__prev");
// var controlNext = document.querySelector("main-control__next");


// showPage(currentPage);
// updatePageControl();
// function showPage(pageNumber) {
//     productItem.forEach((product, index) => {
//         if (
//             index >= (pageNumber - 1) * productPerPage &&
//             index < pageNumber * productPerPage
//         ) {
//             setTimeout(() => {
//                 product.classList.add("show");
//             }, 100);
//             product.style.display = "flex";
//         } else {
//             product.classList.remove("show");
//             product.style.display = "none";
//         }
//     });
// }

// function updatePageControl() {
//     controlNumber.innerHTML = "";
//     for (var i = 1; i <= totalPage; i++) {
//         var pageNumber = document.createElement("span");
//         pageNumber.classList.add("main-control__number-item");
//         if (i === currentPage) {
//             pageNumber.classList.add("main-control__number-action");
//         }
//         pageNumber.innerText = i;
//         controlNumber.appendChild(pageNumber);
//     }
// }

// control.onclick = function (e) {
//     if (e.target.classList.contains("main-control__prev")) {
//         currentPage--;
//         if (currentPage >= 1) {
//             showPage(currentPage);
//             updatePageControl();
//         }
//     } else if (e.target.classList.contains("main-control__next")) {
//         currentPage++;
//         if (currentPage <= totalPage) {
//             showPage(currentPage);
//             updatePageControl();
//         }
//     } else if (e.target.classList.contains("main-control__number-item")) {
//         currentPage = Number(e.target.innerText);
//         showPage(currentPage);
//         updatePageControl();
//     }
// };



// //Toast
// function toast({ title = "", msg = "", type = "success", duration = 3000 }) {
//     var main = document.getElementById("toast");
//     if (main) {
//         var toast = document.createElement("div");

//         //Auto remove toast
//         var autoRemoveToastID = setTimeout(function () {
//             main.removeChild(toast);
//         }, duration + 1000);

//         //Remove toast when click
//         toast.onclick = function (e) {
//             if (e.target.closest(".toast__close")) {
//                 main.removeChild(toast);
//                 clearTimeout(autoRemoveToastID);
//             }
//         };

//         toast.classList.add("toast", `toast-${type}`);
//         var delayTime = (duration / 1000).toFixed(2);
//         toast.style.animation = `slideInLeft ease 0.5s, fadeOut linear 1s ${delayTime}s forwards`;
//         toast.innerHTML = `
//             <div class="toast__icon">
//                 <img src="./assets/icon/${type}-icon.svg"/>
//             </div>
//             <div class="toast__body">
//                 <h3 class="toast__title">${title}</h3>
//                 <p class="toast__msg">${msg}</p>
//             </div>
//             <div class="toast__close">
//                 <img src="./assets/icon/close-toast.svg"/>
//             </div>`;
//         main.appendChild(toast);
//     }
// }

// var statusServer = document.getElementById("statusServer");
// window.onload = function () {

//     if (String(statusServer.value) === 'loginSuccess') {
//         toast({ title: "Login Success", msg: "Login successfully at Cyber", type: "userSuccess", duration: 8000 });
//     }
// }

// var inputCheckboxs = document.querySelectorAll(".checkbox__input");
// var formBrand = document.getElementById("formBrand");
// inputCheckboxs.forEach((inputCheckbox, index) => {
//     inputCheckbox.onchange = function () {
//         formBrand.submit();
//     }
// })

// // Responsive
// var menuOverlay = document.getElementById("menuOverlay");
// var menuDrawer = document.getElementById("menuDrawer");
// var toggleMenu = document.getElementById("toggleMenu");
// var mobileNav = document.getElementById("mobileNav");
// var pcNav = document.getElementById("pcNav");
// var mobileFormSearch = document.getElementById("mobileFormSearch");
// var formSearch = document.getElementById("formSearch");
// toggleMenu.onclick = function () {
//     menuOverlay.style.opacity = "1";
//     menuOverlay.style.visibility = "visible";
//     menuDrawer.style.transform = "translateX(0%)";
// };

// menuOverlay.onclick = function () {
//     menuOverlay.style.opacity = "0";
//     menuOverlay.style.visibility = "hidden";
//     menuDrawer.style.transform = "translateX(-100%)";
// };
// mobileNav.innerHTML = pcNav.innerHTML;
// mobileFormSearch.innerHTML = formSearch.innerHTML;

// // Filter
// var toggleFilter = document.getElementById("toggleFilter");
// var closeFilter = document.getElementById("closeFilter");
// var filterMobile = document.getElementById("filterMobile");

// toggleFilter.onclick = function () {
//     filterMobile.style.transform = "translateX(0%)";
// };
// closeFilter.onclick = function () {
//     filterMobile.style.transform = "translateX(-100%)";
// };

// var filter = document.getElementById("filter");
// var filterMobileBody = document.getElementById("filterMobileBody");
// //filterMobileBody.innerHTML = filter.innerHTML;

// //window.onresize = function () {
// //    if (window.innerWidth < 767.99) {
// //        filterMobileBody.innerHTML = filter.innerHTML;
// //        filter.innerHTML = "";

// //    } else {
// //        filter.innerHTML = filterMobileBody.innerHTML;
// //        filterMobileBody.innerHTML = "";
// //    }
// //}

// //if (window.innerWidth <= 767.99) {
// //    filterMobileBody.innerHTML = filter.innerHTML;
// //    filter.innerHTML = "";
// //}
// //else if (window.innerWidth >= 768) {
// //    filter.innerHTML = filterMobileBody.innerHTML;
// //    filterMobileBody.innerHTML = "";
// //}