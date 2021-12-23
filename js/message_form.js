function check_input() {
 

    let rv_id =$("#rv_id").val();
    let subject =$("#subject").val();
    let message_content =$("#message_content").val();

    if(!rv_id){
        alert("받는 분 아이디를 입력해 주세요");
        return;
    }

    if(!subject){
        alert("제목 입력해 주세요");
        return;
    }


    if(!message_content){
        alert("내용을 입력해 주세요");
        return;
    }

    document.message_form.submit();
 }