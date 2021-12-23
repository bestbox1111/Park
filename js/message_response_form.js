
  function check_input() {

    let subject =$("#subject").val();
    let message_content =$("#message_content").val();

      if (!subject)
      {
          alert("제목을 입력하세요!");
       
          return;
      }
      if (! message_content)
      {
          alert("내용을 입력하세요!");    
        
          return;
      }
      document.message_form.submit();


   }
