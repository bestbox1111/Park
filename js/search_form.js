function check_input() {
 
   


    let search_content =$("#search_content").val();
  
    if(!search_content){
        alert("입력어를 정확하게 확인하여 주세요 ~");
        return;
    }


    document.search_form.submit();
 }