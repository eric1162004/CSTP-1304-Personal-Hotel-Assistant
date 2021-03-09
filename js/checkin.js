function resetForm(){
    inputs = document.getElementsByTagName("input");
    selects = document.getElementsByTagName("select");
    
    for(input of inputs){
        input.value = "";
    }
    for(select of selects){
        select.value = "";
    }
}