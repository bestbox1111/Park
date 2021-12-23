



  function check_input()
  {


   let id =$("#id").val();

     if (id=="") {
         alert("아이디를 입력하세요!");    
       //  id.focus();
         return;
     }

     
     let password =$("#password").val();

     if (password=="") {
         alert("비밀번호를 입력하세요!");    
         return;
     }

     let pass_confirm = $("#pass_confirm").val();
     if (pass_confirm=="") {
         alert("비밀번호확인을 입력하세요!");    
         
         return;
     }

     let name =$("#name").val();
     if (name=="") {
         alert("이름을 입력하세요!");    
       //   name.focus();
         return;
     }

     let email1 =$("#email1").val();
     if (email1=="") {
         alert("이메일 주소를 입력하세요!");    
       //   email1.focus();
         return;
     }

     let email2 =$("#email2").val();
     if (email2=="") {
         alert("이메일 주소를 입력하세요!");    
       //   email2.focus();
         return;
     }

     let gender =$("#gender").val();
     if (gender=="") {
         alert("성별을 선택하세요!");    
       //   gender.focus();
         return;
     }

     let location =$("#location").val();
     if (location=="") {
         alert("이메일 주소를 입력하세요!");    
       //   location.focus();
         return;
     }


   



     if (password != pass_confirm) {
         alert("비밀번호가 일치하지 않습니다.\n다시 입력해 주세요!");
         $("#pass_confirm").focus();
       //   pass_confirm.select();
         return;
     }

     document.member_formdle.submit();
   //   $("#member_formdle").submit();
  }






  function reset_form() {
    

     document.getElementById("password").value="";
     document.getElementById("pass_confirm").value="";
     document.getElementById("name").value="";
     document.getElementById("email1").value="";
     document.getElementById("email2").value="";
     document.getElementById("gender").value="남자";
     document.getElementById("location").value="천안";
     document.getElementById("password").focus();

     return;
   
  }

  

  






 





