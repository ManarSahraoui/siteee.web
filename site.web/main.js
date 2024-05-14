var menuBtn = document.getElementById("menuBtn")
var sideNav = document.getElementById("sideNav")
var menu = document.getElementById("menu")

sideNav.style.right = "-250px";

menuBtn.onclick = function() {
if(sideNav.style.right == "-250px"){
    sideNav.style.right = "0px";
    menu.src ="images/close.png";
}
else{
    sideNav.style.right = "-250px";
    menu.src ="images/menu.png";
}
}

document.getElementById('searchButton').addEventListener('click', function() {
    window.location.href = 'form.php';
});


const menuItems = document.querySelectorA11('.menu-item');
 
   const changeActiveltem = () => { 
   menuItems. forEach(item => {
       item.classList.remove('active');
     })
    }

      menuItems. forEach(item =>{

      item-addEventListener('click', () =>{
        changeActiveItem();
        item. classList.add('active');

        if(item. id != 'notifications'){
      document. querySelector (' .notification-popup').
      style.display = 'none';
        }else {
            document. querySelector (' .notification-popup').
            style.display = 'block';
        }
})
})