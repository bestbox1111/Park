function check_input() {
 



    let subject =$("#subject").val();
    let text_content =$("#text_content").val();


    if(!subject){
        alert("제목을 입력해 주세요");
        return;
    }

    if(!text_content){
        alert("내용을 입력해 주세요");
        return;
    }

    document.notice_modify_form.submit();
 }