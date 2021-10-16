let mynav=document.querySelector('.navbar'),
myupper=document.querySelector('.upper-bar'),
wow =document.querySelectorAll('.wow'),
myNve_link=document.querySelectorAll('.nav-link'),

scrollto=document.querySelector('.scroll-to');

scrollto.classList.add('display_non');





scrollto.onclick=function(){
window.scrollTo(0, 0);

      }



//add active_link
myNve_link.forEach(links=>{
   
  links.addEventListener('click',()=>{
    removeAll();
    links.classList.add('active');
        const el=document.getElementById(links.getAttribute("data-link"));
        el.scrollIntoView({behavior:"smooth",block:"center"})
       //console.log(links.getAttribute('data-link'))
  })

})

// remveall active_link
function removeAll(){
  myNve_link.forEach(links1=>{
    links1.classList.remove('active')
})}


//function to make navbar fixed
document.onscroll=function(){
    if(pageYOffset>2){
      scrollto.classList.remove('display_non')
        mynav.classList.add('fixed')
        myupper.classList.add('top')
    }else{
      scrollto.classList.add('display_non')
        mynav.classList.remove('fixed')
        myupper.classList.remove('top')
    }
}

// to remove animate with resize <1000 

//-------------------------
// Open the Modal
