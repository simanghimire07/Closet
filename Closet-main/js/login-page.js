var $isLoginPage = true;
$signuptrigger = document.querySelector('#openSignup');
    $('#openSignup').click(()=>{

        if ($isLoginPage){
            let loginText = "Hey, we would like to welcome you to closet. Using closet, you can buy any product from the market place of if you have some unused attire yourself, make sure to list them." +
                "<br>Already have an account?"
            $('#form-section').hide()
            $('#openSignup').text('Login now!')
            $('#mark-text').html(loginText)
            $('#signup-section').show()
        }else{
            let signupText = "Closet is here to provide you with a platform where you can sell or buy any attire you want.\n" +
                "                    So login now or if you don't have an account, you can create one right now."
            $('#signup-section').hide()
            $('#openSignup').text('Signup now!')
            $('#mark-text').html(signupText)
            $('#form-section').show()
        }

        $isLoginPage = !$isLoginPage

    })
