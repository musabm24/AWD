<style>
    
    *{
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
        font-family: sans-serif;
    }

    .logo {
        
        color: black;
        font-size: 30px;
    }

    body{
        background-color: #ffff;
    }

    .container{
        margin: 50px auto;
        max-width: 500px;
        background-color: white;
        padding: 30px;
        box-shadow: 0px 0px 10px rgba(0,0,0,0.2);
    }

    h1{
        text-align: center;
        font-size: 36px;
        margin-bottom: 40px;

    }

    form{
        display: flex;
        flex-direction: column;
    }

    label{
        font-size: 18px;
        margin-bottom: 5px;
    }
    input[type="text"],
    input[type="password"]{
        padding: 10px;
        margin-bottom: 20px;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        box-shadow: 0px 0px 5px 0px rgb(68, 68, 118);
    }

    .check{
        margin-bottom: 10px;
    }

    .check label{
        margin-top: 5px;
    }

    input[type="submit"]{
        padding: 10px;
        border: none;
        border-radius: 5px;
        color: #ffff;
        font-size: 18px;
        background-color: gray;
        cursor: pointer;
        box-shadow: 0px 0px 5px 0px rgb(68, 68, 118);
    }

    input[type="submit"]:hover{
        background-color: rgb(68, 68, 118);
    }
</style>

<div class="container">
        <h1 class="logo">Motor Market</h1>
        <?php if (isset($error)): ?>
            <p style="color: red;"><?= $error ?></p>
        <?php endif; ?>
        <form action="<?= base_url('motormarket/login') ?>" method="post">            
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" placeholder="Enter your username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>
            <input type="submit" value="Login">
        </form>
        
</div>