function check_input(){


    let id =$("#id").val();
    let password =$("#password").val();


    if(!id){
        alert("아이디를 입력해 주세요");
        return;
    }

    if(!password){
        alert("비밀번호를 입력해 주세요");
        return;
    }


    document.login_form.submit();

}