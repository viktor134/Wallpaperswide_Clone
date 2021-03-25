$(document).ready(function(){
   $("form").submit(function(event){
       event.preventDefault();
       let name=$("#form-name").val();
       let email=$("#form-name").val();
       let password=$("#form-name").val();
       let confirm=$("form-confirm").val();
       let submit=$("form-confirm").val();

       $(".form-message").load("/register",{
           name:name,
           email:email,
           password:password,
           confirm:confirm,
           submit:submit
       });
   });
});




