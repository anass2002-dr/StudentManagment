document.addEventListener("DOMContentLoaded", function(event) {
   
    const showNavbar = (toggleId, navId, bodyId, headerId) =>{
        const toggle = document.getElementById(toggleId),
        nav = document.getElementById(navId),
        bodypd = document.getElementById(bodyId),
        headerpd = document.getElementById(headerId)
        
        // Validate that all variables exist
        if(toggle && nav && bodypd && headerpd){
            var x = window.matchMedia("(max-width: 890px)")
           
            if(x.matches){
                toggle.addEventListener('click', ()=>{
                // show navbar
                nav.classList.toggle('_show')
                // change icon
                toggle.classList.toggle('bx-x')
                // add padding to body
                bodypd.classList.toggle('body-pd')
                // add padding to header
                headerpd.classList.toggle('body-pd')
            })
            }
            else{
                nav.addEventListener('mouseenter',()=>{
                // show navbar
                nav.classList.toggle('_show')
                // change icon
                toggle.classList.toggle('bx-x')
                // add padding to body
                bodypd.classList.toggle('body-pd')
                // add padding to header
                headerpd.classList.toggle('body-pd')           
                })
                nav.addEventListener('mouseleave',()=>{
                nav.classList.remove('_show')
                // change icon
                toggle.classList.remove('bx-x')
                // add padding to body
                bodypd.classList.remove('body-pd')
                // add padding to header
                headerpd.classList.remove('body-pd')   
                })
            }
            
            
        }
    }
    
    showNavbar('header-toggle','nav-bar','body-pd','header')
    
    /*===== LINK ACTIVE =====*/
    const linkColor = document.querySelectorAll('.nav_link')
    
    function colorLink(){
    if(linkColor){
    linkColor.forEach(l=> l.classList.remove('active'))
    this.classList.add('active')
    }
    }
    linkColor.forEach(l=> l.addEventListener('click', colorLink))
    
     // Your code to run since DOM is loaded and ready
    });
var edit=document.getElementsByClassName('edit_managment_calendar');
// const fun=add_calendar(i);

function edit_grades(index){
    var parent=document.getElementsByClassName('tr_grades');
    var input=parent[index].getElementsByTagName('input');
    if(edit[index].value=="Edit"){
        input[1].disabled=false;
        input[1].classList.remove('border-0');
        input[1].classList.remove('bg-transparent');
        edit[index].value="save"
    }
    else{
        input[1].disabled=true;
        input[1].classList.add('border-0');
        input[1].classList.add('bg-transparent');           
        edit[index].value="Edit"
    }
}
function add_calendar(index){
    var parent=document.getElementsByClassName('par');
    var input=parent[index].getElementsByTagName('select');
    if(edit[index].value=="Edit"){
        for(var j=0;j<6;j++){
            input[j].disabled=false;
            input[j].classList.remove('border-0');
            input[j].classList.remove('bg-transparent');
        }
        edit[index].value="save"
    }
    else{
        for(var j=0;j<6;j++){
            input[j].disabled=true;
            input[j].classList.add('border-0');
            input[j].classList.add('bg-transparent');           
        }
        edit[index].value="Edit"
    }
   
}
function test_password(pass,confirm_pass){
    if(pass==confirm_pass){
        return true;
    }
    else{
        return false;
    }
}
var btn=document.getElementById('pass_change');
btn.addEventListener('click',(event)=>{
    var new_pass=document.getElementById('new_pass');
    var confirm_pass=document.getElementById('confirm_pass');
    var error_pass=document.getElementById('error_pass');
    if(new_pass.value!=confirm_pass.value){
        event.preventDefault();
        error_pass.removeAttribute('hidden');
    }

})
// function show_hide(v){
//     if(v==true){
//         var userName=document.getElementById('name_user');
//         var messege=document.getElementById('messege');
//         var div_content_id=document.getElementById('div_content_id');
//         var icon=document.getElementById('icon');
//         icon.classList.remove('bi-arrow-left');
//         icon.classList.add('bi-arrow-right');
//         // userName.classList.add('collapse');
//         userName.classList.add('collapsing');
//         div_content_id.classList.remove('col-6');
//         div_content_id.classList.add('col-2');
//         messege.classList.remove('col-6');
//         messege.classList.add('col-10');
//     }
//     else{
//         var userName=document.getElementById('name_user');
//         var messege=document.getElementById('messege');
//         var div_content_id=document.getElementById('div_content_id');
//         var icon=document.getElementById('icon');

//         icon.classList.remove('bi-arrow-right');
//         icon.classList.add('bi-arrow-left');

//         userName.classList.remove('collapsing');
//         div_content_id.classList.remove('col-2');
//         div_content_id.classList.add('col-6');
//         messege.classList.remove('col-10');
//         messege.classList.add('col-6');
//     }
// }
// function myFunction(x) {
//     if (x.matches) { // If media query matches
//         show_hide(true)
//     } else {
//         show_hide(false)
//     }
// }
    
// var x = window.matchMedia("(max-width: 712px)")
// myFunction(x) // Call listener function at run time
// x.addListener(myFunction) // Attach listener function on state changes

// var btn_right=document.getElementById('btn_right');
// var click=false;
// btn_right.addEventListener('click',()=>{
//     if(!click){
//         show_hide(true);
//         click=true;
//     }
//     else{
//         show_hide(false);
//         click=false;
//     }
// });
// // var div_content_id=document.getElementById('div_content_id');
// // div_content_id.addEventListener('click',()=>{
// //     show_hide(false);
// // })
// var messege=document.getElementById('messege');
// messege.addEventListener('click',()=>{
//     if(x.matches){
//         show_hide(true);
//     }
// })
// btn_right.addEventListener('mouseleave',()=>{
//     if(x.matches){
//         show_hide(true);
//     }
// });
// btn_right.addEventListener('mouseenter',()=>{
//     if(x.matches){
//         show_hide(false);
//     }
// })
