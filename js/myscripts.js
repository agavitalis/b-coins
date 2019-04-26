jQuery(document).ready(function ($) {

    document.getElementById("password1").onchange = validatePassword;
    document.getElementById("password2").onchange = validatePassword;



    function validatePassword() {
        var pass2 = document.getElementById("password2").value;
        var pass1 = document.getElementById("password1").value;
        if (pass1 != pass2)
            document.getElementById("password2").setCustomValidity("Passwords Don't Match");
        else
            document.getElementById("password2").setCustomValidity('');
        //empty string means no validation error
    }

    //login logic

    $("#login").click(function (event) {
        event.preventDefault();
        var email = $('input[name=l_email]').val();
        var password = $('input[name=l_password]').val();

        $.ajax({
            type:"POST",
            url:"controllers/login_signup.php",
            data:{
                'action':'login',
                'email':email,
                'pass':password

            },
            success:function(data){
                if (data == 'ok') {
                    $('#login').val("Authenticating...");
                    setTimeout(function () {
                        window.location.replace("user/index.php")
                    }, 2000)
                }                   
                else {
                    $('.login_error').removeClass('hidden');
                    $('.login_error').removeClass('alert-danger');
                    $('.login_error').addClass('alert-info');
                    $('.login_error').text(data);
                }
            }
        });
        
    });


      $("#signup").click(function (event) {
          event.preventDefault();

        var f_n = $('input[name=r_fname]').val();
        var ln = $('input[name=r_lname]').val();
        var cty = $('input[name=r_country]').val();
        var em = $('input[name=r_email]').val();
        var ps = $('input[name=r_password]').val();

        if( fn ="" || ln == "" || cty =="" || em == "" ||ps ==""){
            $('.signup_error').removeClass('hidden');
            $('.signup_error').text('Please fill all fields');

        }
        else{

          $.ajax({
              type: "POST",
              url: "controllers/login_signup.php",
              data: {
                  'action': 'signup',
                  'fname': f_n,
                  'lname': ln,
                  'email': em,
                  'country': cty,
                  'pass': ps
              },
              success: function (data) {
                if(data == 'ok'){
                     $('#signup').val("Successful Signup...");
                    setTimeout(function () {
                        window.location.replace("user/index.php")
                    }, 2000)

                    
                }
               else{
                    $('.signup_error').removeClass('hidden');
                    $('.signup_error').removeClass('alert-danger');
                    $('.signup_error').removeClass('alert-info');
                    $('.signup_error').text(data);

               }

              }
          })

        }
         
      });

    //buy
    $("#b_buy").click(function (event) {
        event.preventDefault();

        var ad = $('input[name=b_address]').val();
        var amt = $('input[name=b_amount]').val();
        var pwd = $('input[name=b_password]').val();

        if (ad = "" || amt == "" || pwd == "") {
            $('.b_error').removeClass('hidden');
            $('.b_error').text('Please fill all fields');

        }
        else {

            $.ajax({
                type: "POST",
                url: "controllers/transactions.php",
                data: {
                    'action': 'b_b',
                    'ad': ad,
                    'amt': amt,
                    'pwd': pwd,
                   
                },
                success: function (response) {
                    if (response == 1) {

                        $('#b_buy').val("Successful Transaction...");
                        setTimeout(function () {
                            window.location.replace("transac.php")
                        }, 2000)
                       

                    }
                    else{
                        $('.b_error').removeClass('hidden');
                        $('.b_error').removeClass('alert-danger');
                        $('.b_error').addClass('alert-info');
                        $('.b_error').text(response);
                      
                    }

                }
            })

        }

    });

    //buy
    $("#s_sell").click(function (event) {
        event.preventDefault();

        var ad = $('input[name=s_address]').val();
        var amt = $('input[name=s_amount]').val();
        var pwd = $('input[name=s_password]').val();

        if (ad = "" || amt == "" || pwd == "") {
            $('.s_error').removeClass('hidden');
            $('.s_error').text('Please fill all fields');

        }
        else {

            $.ajax({
                type: "POST",
                url: "controllers/transactions.php",
                data: {
                    'action': 's_s',
                    'ad': ad,
                    'amt': amt,
                    'pwd': pwd,

                },
                success: function (response) {
                    if (response == 1) {

                        $('#b_buy').val("Successful Transaction...");
                        setTimeout(function () {
                            window.location.replace("transac.php")
                        }, 2000)


                    }
                    else {
                        $('.b_error').removeClass('hidden');
                        $('.b_error').removeClass('alert-danger');
                        $('.b_error').addClass('alert-info');
                        $('.b_error').text(response);

                    }

                }
            })

        }

    });

    
});


   
       