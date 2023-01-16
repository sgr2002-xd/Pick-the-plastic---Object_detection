
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selfmade Ninja Academy</title>
    <link rel="shortcut icon" href="/assets/favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="d-flex align-items-center justify-content-center login">
        <div class="background-wrapper"></div>
        <div class="wrapper justify-content-center bg-transparent">
            <div class="position-relative d-flex flex-column align-items-center justify-content-center p-5">
                <!-- <img class="wrapper-logo mb-4" src="/assets/images/ninja.svg" alt=""> -->
                <div class="wrapper-content"></div>
                <h2  style="z-index: 1" class="text-white text-center display-5 fw-bold">Welcome to Selfmade Ninja Academy</h2>    
                <p  style="z-index: 1" class="text-white text-center fs-3">With great power comes great responsibility.<br> Happy Learning.</p> 
                <button style="z-index: 1" type="submit" class="d-flex align-items-center px-4 my-5 btn text-white login-btn fw-bold"><i class="fa-brands fa-gitlab me-2"></i><a href="https://git.selfmade.ninja/oauth/authorize?response_type=code&client_id=5d0f18b8157951d412e8a1bea342a1cba857c688d63ec5bc7ffdf9db453809bd&client_secret=03e8ee38df7334106534ffbe07d09e1402c1994fa654dac0025a8a1f07d08f66&state=af866245b9&redirect_uri=https%3A%2F%2Facademy.selfmade.ninja%2Flogin.php&scope=openid+profile+email" class="text-white text-decoration-none">Login with our Gitlab</a></button>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="index.js"></script>
</body>
</html>