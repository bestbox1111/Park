function check_input(){


    let email =$("#email").val();
 


    if(!email){
        alert("이메일을 입력해 주세요.");
        return;
    }



    document.log_email_form.submit();

}