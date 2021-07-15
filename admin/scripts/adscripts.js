
// If 3 lines are Selected this Query will Minimize side Bar

// let sidebar = document.querySelector(".sidebar")
// let sidebarBtn = document.querySelector(".sidebarBtn")

// sidebarBtn.onclick =  function() {
//     sidebar.classList.toggle("active");
// }

// Query End Side Bar




// Admin Setting POP UP 

// document.getElementById('edadmin').addEventListener('click', function () {
//     document.querySelector('.setting').style.display = 'flex';
// });
// document.getElementsByID('finish').addEventListener('click', function () {
//     document.querySelector('.setting').style.display ='none';
// });
document.getElementsById('editadmin').addEventListener('click', function () {
    document.querySelector('.setting').style.display = 'flex';
});
document.getElementById('finish').addEventListener('click', function () {
    document.querySelector('.setting').style.display = 'none';
});

// .............END................




// New News Add POP UP 

document.getElementById('addnews').addEventListener('click', function () {
    document.querySelector('.news').style.display = 'flex';
});
document.getElementById('nclse').addEventListener('click', function () {
    document.querySelector('.news').style.display = 'none';
});

// ......................END.................