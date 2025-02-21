let ViewAllCourses = document.getElementById('ViewAllCourses');
ViewAllCourses.addEventListener('click',()=>{
    if(ViewAllCourses.innerHTML === "Close"){
        ViewAllCourses.innerHTML = "View All"
    }
    else{
        ViewAllCourses.innerHTML = "Close"
    }
    
})