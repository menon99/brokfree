<html>

<head>
    <title>Signup for Brokfree</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="login.css" type="text/css">
</head>

<body onload="document.body.classList.add('loaded')">
    <div class="container">
        <div class="form">
        <?php if($error): echo $msg; endif;?>
            <div class="tab-content">
                <form action="change.php" method="POST">
                    <h1>Change Password</h1>
                    <div class="field-wrap">
                        <label>
                            Current Password<span class="req">*</span>
                        </label>
                        <input type="password" required autocomplete="off" name="password">
                    </div>

                    <div class="field-wrap">
                        <label>
                            New Password<span class="req">*</span>
                        </label>
                        <input type="password" required autocomplete="off" name="newpassword">
                    </div>

                    <button class="button button-block" type='submit' name='submit'>Change password</button>

                </form>
            </div>
        </div>
    </div>
    <script>
        $(function () {

            $('.form').find('input, textarea').on('keyup blur focus', function (e) {

                var $this = $(this),
                    label = $this.prev('label');

                if (e.type === 'keyup') {
                    if ($this.val() === '') {
                        label.removeClass('active highlight');
                    } else {
                        label.addClass('active highlight');
                    }
                } else if (e.type === 'blur') {
                    if ($this.val() === '') {
                        label.removeClass('active highlight');
                    } else {
                        label.removeClass('highlight');
                    }
                } else if (e.type === 'focus') {

                    if ($this.val() === '') {
                        label.removeClass('highlight');
                    }
                    else if ($this.val() !== '') {
                        label.addClass('highlight');
                    }
                }

            });
        });
    </script>
</body>

</html>