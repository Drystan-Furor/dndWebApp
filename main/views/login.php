<?php $title = 'Login' ?>
<?php require 'components/header.php'; ?>

<body>

    <?php include 'components/menulist.php'; ?>

        <h1 class="login">Login to your account</h1>

        <div class="center">
            <form action="/login" method="post">
                <label for="username">Username</label>
                <input type="text" class="loginform" id="username" name="username" placeholder="Username" required>
                <br>
                <label for="password">Password</label>
                <input type="password" class="loginform" id="password" name="password" placeholder="Password" required>
                <br>

                <button class="submitbutton" type="submit" value="Submit">Submit</button>
            </form>   
        
    <?php if (isset($_SESSION['login_invalid'])) : ?>

        <p>Your credentials are incorrect. Please try again.</p>

    <?php endif; ?>
    </div>
    <?php require 'components/footer.php'; ?>