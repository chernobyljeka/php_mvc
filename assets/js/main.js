$(document).ready(function() {
    $(function() {

    $('#login-form-link').click(function(e) {
		$("#login-form").delay(100).fadeIn(100);
 		$("#register-form").fadeOut(100);
		$('#register-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	$('#register-form-link').click(function(e) {
		$("#register-form").delay(100).fadeIn(100);
 		$("#login-form").fadeOut(100);
		$('#login-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
        
        if (window.location.pathname === '/user/register')
        {
            $('#register-form-link').click();
        }
        else
        {
            $('#login-form-link').click();
        }
    });
    
    function validateEmail(email) {
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    }
    
    function validateRegister()
    {
        var result = true;
        var name = $.trim($("#register-form #username").val());
        if (name.length > 2) {
           $( "#e_username" ).css("display", "none").fadeOut(1000);
        }
        else
        {
            $( "#e_username" ).css("display", "block").fadeIn(1000);
            result = false;
        }
        var email = $.trim($("#register-form #email").val());
        if (validateEmail(email))
        {
           $( "#e_email" ).css("display", "none").fadeOut(1000);
        }
        else
        {
            $( "#e_email" ).css("display", "block").fadeIn(1000);
            result = false;
        }
        var pas1 = $.trim($("#register-form #password").val());
        if (pas1.length > 5)
        {
           $( "#e_pas1" ).css("display", "none").fadeOut(1000);
        }
        else
        {
            $( "#e_pas1" ).css("display", "block").fadeIn(1000);
            result = false;
        }
        
        var pas2 = $.trim($("#register-form #confirm-password").val());
        
        if (pas1 === pas2)
        {
           $( "#e_pas2" ).css("display", "none").fadeOut(1000);
        }
        else
        {
            $( "#e_pas2" ).css("display", "block").fadeIn(1000);
            result = false;
        }
        
        return result;
    }
    
    function validateLogin()
    {
        var result = true;
        var email = $.trim($("#login-form #l_email").val());
        if (validateEmail(email))
        {
           $( "#el_email" ).css("display", "none").fadeOut(1000);
        }
        else
        {
            $( "#el_email" ).css("display", "block").fadeIn(1000);
            result = false;
        }
        var pas1 = $.trim($("#login-form #l_password").val());
        if (pas1.length > 5)
        {
           $( "#el_pas" ).css("display", "none").fadeOut(1000);
        }
        else
        {
            $( "#el_pas" ).css("display", "block").fadeIn(1000);
            result = false;
        }
        return  result;
    }
    
    function checkEmail(email) {
        var tmp = null;
        $.ajax({
                'async': false,
                'global': false,
		type:'get',//тип запроса: get,post либо head
		url:'/user/register',//url адрес файла обработчика
		data:{'result': email},//параметры запроса
		response:'text',//тип возвращаемого ответа text либо xml
		success:function (data) {//возвращаемый результат от сервера
                tmp = data;
	}});
        return tmp;
    };
    
    $( "#register-form" ).on("submit", function( event ) {
        var email = $.trim($("#register-form #email").val());
        if (validateRegister() && checkEmail(email) == 'No') {
            $( "#e_email_exist" ).css("display", "none").fadeOut(1000);
            return;
        }
        else
        {
            $( "#e_email_exist" ).css("display", "block").fadeIn(1000);
        }
        event.preventDefault();
    });
    
    $( "#login-form" ).on("submit", function( event ) {
        if (validateLogin()) {
            return;
        }
        event.preventDefault();
    });
    
    $( "#form-add-departament" ).on("submit", function( event ) {
        var dep = $.trim($("#form-add-departament #departament").val());
        if (dep != "")
            return;
        event.preventDefault();
    });
    
    $("#login_after_register").bind("click", function(){
         $('#login-form-link').click();
    });
});


