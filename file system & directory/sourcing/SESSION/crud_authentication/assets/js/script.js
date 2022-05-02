document.addEventListener('DOMContentLoaded',function() {
    var option  = document.querySelectorAll(".permission");
    for(i = 0; i < option.length; i++){
        option[i].addEventListener('click', function(e){
            if(!confirm("Do you want to delete this student")){
                e.preventDefault();
            }
        });
    }
});

