function check_input() {

  alert("관리자만 이용이 가능합니다");

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

    document.notice_form.submit();
 }