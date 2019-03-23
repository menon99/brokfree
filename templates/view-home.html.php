<!DOCTYPE html>
<html lang="en" style="overflow-y:scroll">

<head>
    <title>View a Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
body {
  margin:0;
  padding:0;
  content:'';
  width:100vw;
  height:100vh;
  background-image: url(https://i.imgur.com/w439mEw.jpg);
  background-attachment:fixed;
  background-repeat: no-repeat;
  background-position: center center;
  opacity:0;
  transition: opacity 1s ease;
}
.loaded {
    opacity:1;
}
.row-header{
    background: rgb(199, 195, 195);
    margin: 40px auto;
    border-radius: 4px;
    box-shadow: 0 4px 10px 4px rgba(19, 35, 47, .3);
    font-size: 14px;
}
.house-name{
    padding:5px;
    font-size:20px;
    font-weight: bold;
    margin-top: 10px;
}
.house-detail {
    padding:5px;
    font-size:15px;
    font-weight: bold;
    margin-top: 10px;
    display: block;
    border-right:solid 1px black;
}
.link {
    background-color:orange;
    margin: 10px 195px 10px 180px;
    font-size:16px;
    text-decoration: none;
    box-shadow: 0 4px 10px 4px rgba(19, 35, 47, .3);
}
#in-detail {
    display:block;
    border:0.5px solid black;
    border-radius: 5px;
    padding:20px;
    
}
.heading {
    text-align:center;
}
#overview{
    padding:inherit;
}
.description{
    padding:20px;
    box-shadow: 0 4px 10px 4px rgba(19, 35, 47, .3);
    margin:30px 30px 10px 30px;
}
.content {
    font-weight: bold;
}
</style>
</head>

<body onload="document.body.classList.add('loaded')">

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="homepage.php">BrokFree</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                <?php if($val):?>
                        <li><a href="profile.php"><span class="" style="font-weight: bold;"><?=$username?></span></a></li>
                        <li><a href="logout.php"><span class="">Logout</span></a></li>
                <?php else: ?>
                        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                <?php endif;?>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row row-header">
            <div class="col-md-6" style="display:block; border-radius: 4px; box-shadow: 0 4px 10px 4px rgba(19, 35, 47, .3);">
                <p class="house-name">Name of the House :<?=$row['name']?> </p>
            </div>
            <div class="col-md-2">
                <p class="house-detail">Rent : <?=$row['rent']?></p>
            </div>
            <div class="col-md-2">
                <p class="house-detail">Builtup : <?=$row['builtup']?></p>
            </div>
            <div class="col-md-2">
                <p class="house-detail" style="border-right: none">Deposit : <?=$row['deposit']?></p>
            </div>
        </div>
        <div class="row row-header">
            <div class="col-md-7">
                <div class="link">
                    <a id="get_location" href="#" style="color:white;">Click here to get the home's location</a>
                </div>
                <div id="Map">
                    <iframe id="google_map" width="640" height="650" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                        src="https://maps.google.co.in?output=embed"></iframe>
                </div>
            </div>
            <div class="col-md-5" style="margin-top:40px;">
                <div class="row" style="padding:7px;">
                    <div class="col-md-6" id="in-detail">
                        <i class="fa fa-bed" aria-hidden="true" style="font-size: 51px;"></i>
                        <p><?=$row['bedroom']?></p>
                        <p>No. of Bedrooms</p>
                    </div>
                    <div class="col-md-6" id="in-detail">
                        <i class="fa fa-building" aria-hidden="true" style="font-size: 51px;"></i>
                        <p><?=$row['house_type']?></p>
                        <p>Property type</p>
                    </div>
                </div>
                <div class="row" style="padding:7px;">
                    <div class="col-md-6" id="in-detail">
                        <i class="fa fa-user" aria-hidden="true" style="font-size: 51px;"></i>
                        <p><?=$row['pt']?></p>
                        <p>Tenants preferred</p>
                    </div>
                    <div class="col-md-6" id="in-detail">
                        <i class="fa fa-key" aria-hidden="true" style="font-size: 51px;"></i>
                        <p><?=$row['availability']?></p>
                        <p>Availability</p>
                    </div>
                </div>
                <div class="row" style="padding:7px;">
                    <div class="col-md-6" id="in-detail">
                        <i class="fa fa-parking"  style="font-size: 51px;"></i>
                        <p><?=$row['parking']?></p>
                        <p>Parking facility</p>
                    </div>
                    <div class="col-md-6" id="in-detail">
                        <i class="fa fa-birthday-cake"  style="font-size: 51px;"></i>
                        <p><?=$row['age']?></p>
                        <p>Age of the Building</p>
                    </div>
                </div>
                <div class="row" style="padding:7px;">
                    <div class="col-md-6" id="in-detail">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAIfSURBVGhD7ZkxaxVBFEZfOiuTTlGwSSFaiEkqbfwBtipBC4tgERDRLqCNIKidIYgEBLFIHUFEDYQQlDRaqEFsLBLBX5BCREXPB2/gYxmdXVx3VpgDh/Dmzr3Z74Xs2903KBQK/4xT+LplNbNzZvFny2pm55Qgf7AXQT7g6Yaqx2f0IsgLbIp6fEYJ8jeUIEYJ0iYliFGCtEkJYpQgbVK9H7mPTVGPz8hyP/LfsGv4s080OqYp/ITf8Z4WesIi6ph0bBNaSPEc/R/wGObmOPoxPcMkK+hNfbRWkEncxtiAPqhj0zHW4iDGhuT2B+7H2tzG2KA+eA1rMYKf0Zv1CayzmVwYrgWfYqi5J9D3Sa3F9mqG73uAofZmuBbUA4taHEVvlDMYmEOvLWGMUfR9UmsxNMP33cTAFfSaHMck1cYvuBsDXQfZg9/Q6/7G/hb9Wb3pMTpdBxFr6PU7mOQletNVdHIE0WuvP8Ek79GbptHJEeQCen0Dk1Q/DE+ikyPIWfT6O0yyid50Dp0cQS6h19cxiTZ503V0cgS5i15/hEl01+ZNq+jkCPIWvX4Lk1xEb9I5fC8Gug5yGL0mz2CSI1htvIyBroPcQK/pwnEf1uIjerNOAOHLmeov1XWYf3kTPI++T2ottrf6NGUZQ21ruBasdeoN6B3x5j6pS6jaHMCvGBuU0x0cw0Y8xNiwnM5jYw6hPzzL7StsdHdYKBQCg8Evm0cT/kkHSrIAAAAASUVORK5CYII=">
                        <p><?=$row['balcony']?></p>
                        <p>No. of Balconies</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-header">
            <div class="heading">
                <h3><span style="border-bottom:2px solid black; font-weight:bolder; font-size: 30px;">Overview</span></h3>
            </div>
            <div class="content" style="padding:20px;">
                <div class="row" id="overview">
                    <div class="col-md-6">
                        <div style="box-shadow: 0 4px 10px 4px rgba(19, 35, 47, .3);">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAKNSURBVGhD7dc/yE1xHMfxx5+BkqL8KYOYDAwGUlIKg00ig0QKGRikWAkpi2yeQjFYsCGDzd8MimTwb6AMYsDiv/f78Zz6dft6zrn3nHtu8vvUK/c5f77f73XvOed3h3JycnJycnJyKmUBduPoKF+77Z/JUtzFr7+4gyUYaMZjMXbhALZiGdxu9uI7ojeQ+oY9MJ5rjW2wprXtUdRsPA79DNFgL3EOP5NtZTzWczw32m+vLWgsk3EFUbM2XMYk1MoEXEfUoE1XUeurth9R4UHYh54yFR8QFR2E95iCrrMZz3Ef7xAVb4O97+EFnKnrdF5gi3AB3dyZemWP81iIND1f9NMxFxNH/voT7/dfEA3QBGt7qy/iDccZpo381WXm4QZ+wOIfcQQWNQfROUBTfCgaex3GJ7jdWa7BN1UpM/AanQ10FsZP6DGiY+p4hOLTH0Z0jLM5Y2mOIyogv7sbYfw3OqaOovZyjHUtHkNpxlrwyaWDH7sPqCej25pgreKhdxvRMQUXnqW5iejk1CaYDbiFizgBF4LrsRLe5ebAJY587Tb3eYzHeo7nWsNaZg2inilnLM0hRCenHmIc+hHfVNQz5Yyl8Yn+ClGB1Fp4Yc6H/4s7YYMzcG30AE/hxSlfu819HuOxO7Aa1rBWlU/D2ZyxUmbDVedXRMX0Gf6uiPb1wlrWjPbJWS5hFrrOKkRFB8FZeo53kbeICrfJGWr/YjyFqHibnKF2ViAq3iZnqB0/0jeIGrTB3rW/VkVOImrSBns3Ftc+UZM22LuxuHSOmrSh8rK9SjqX1P5WcZXcD9ZOe9m7kbh8SJ/wPn1nol+xdvqEt7cz1M46nE5sR79jj7SnM+Tk5OTk5OT8Jxka+g3y0C4ev5y9igAAAABJRU5ErkJggg==">
                            <p style="display:inline; margin-left:30px; font-size: 20px; text-align: center; ">Furnishing status</p>
                            <p style="display:inline; font-size: 20px"> : <?=$row['furnishing']?></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div style="box-shadow: 0 4px 10px 4px rgba(19, 35, 47, .3);">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAMQSURBVGhD7Zq5qhRBFIZHMFBx1/sammqqL+BuolxN1NgHENdXEBdwyVweQtGrGIhbZuySuKJiJvp/MC1N8ff0qd7mBv3DB0P31KkqajnLzGTUqFGDaqvYLy6K++KheD6Fz/cE7/aJLWJZab04JZ6KP+JvEL77RJwQ2JibNogL4rtwA83hqzgn1olBdUh8FG5QbfggDojetUbcFG4QXXJdrBa9iMP5TLiO+4Azt1l0qgXxRrgO++S14CbsRGynIVcihb4ZQ2vdEK6DIbkmWumwcIbnwUHRSDipPq7YKj4Lrl/3Dt6LRn7mknAGuwbvflRsEp+mz6o4K7KE1/4mnLEu+CEui+2iEJNx3y3DmLLCGWInZ6gtLwW214pUrIxrk3JShIUzckaa8FvcFjtElbYJ19axJELCAeVEsVW8FadFxDuzzZwNB2MLeXzyCWcgCrnHLrFCRMQ248w4W1XsFbUi8XGNo+wWOWpyHs+LWpHFucYR2E7pSqycUqVXwtmaxR1Rq0fCNY7AmSjruPg1ZZEHiXYKZ6cO0uZavRCucR3cTuVDyCowgeI9n9OVuSXKNqIwxlo1nQiDKiudyM/ps0JMmsmXbUQJTaTp1mKbpDommAAc4UFJbENnJ0Joa90VrvEsOLBVYhXSLcWFwMXgbEUIHfYm1y9XaI64op2dKFRcapXrEHFmLnZyYiVwljhNZytKyCFSZMgJUQgv6sTB5ky02U4FjI2QP6RoJAoEfFUiUCRgbHo7OR6LsAiVnZEUJpyKbcaZIWR3bdpCiTUskpdIYkUyVIgkiW2WGwDmQGk1eh7/i5vBGSsgLWWvMpmcrdiGMyJbrAoJvzMIFAooGLh3ffBOZK9GIUowzug84DeVVqKg7AwPyRXRWsuhZNpZZZ48noKy66hP6HOj6FR45y6rK3X08rNCIZb4qnAddwl9rBK9i5/HZtVpm8IVS9A6qLjTcZp4WzeoHL4InF1jP9GFcJzEP3j3nKiZ7xIA0nbwX3PrxOEkV6DuRKb5QBR/GOAzmR3v9ojeDvKoUaNSTSb/AMQYoi923/4sAAAAAElFTkSuQmCC">
                            <p style="display:inline; margin-left:30px; font-size: 20px; text-align: center; ">Facing</p> 
                            <p style="display:inline; font-size: 20px"> : <?=$row['facing']?></p>                           
                        </div>
                    </div>
                </div>
                <div class="row" id="overview">
                    <div class="col-md-6">
                        <div style="box-shadow: 0 4px 10px 4px rgba(19, 35, 47, .3);">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAIYSURBVGhD7dk9axRRFMbxVVQwWIliqoSAiIWCEMFeQUjAiIhdwA8gWPiCiGARfAExvZJoChU/g5XYhAgiRAsFQTFN8BVBUYRE/T+wC0EezSb33rMzsA/8YBjYc87M7LIzdxoB2ddU62zH+yZt1zJb8Qq/m7StfbVKD2bQOogW7duIWmQN7uHvg2i5i1rkPNwBLHUOlc4wfsENv9QChlDJ9OMT3ODOR/ShUtkA9+NezjT02cpkHG7QdlxHJTKCdn4X/6LPHkJHsxnzcAOuhGqoVsdyH26w1biDjuQI3EApVDM0W/AObpgU4V+xW3CD5DCBkOyG/pndEDksYi+K5wHcADnpj1I3n8VyEK5xCYdRJGsxC9e0hOdQz+zRGXINSypyVR7BNSvpIbJmD1yjCLuQLdfgmkS4imx5A9ckwmtkidajXINIA0jOcbjikUaRnCtwxSNdQnIm4YpH0gzJ+d9iWxTNkJybcMUj3UByLsIVj3QByTkGVzzSUSSnF654FC0XZXsd8QSuSYTHyJaTcE0inEC2bMJnuEYlfYB6Z81ZuGYlnUL2rMczuIYlPMU6FMlOfINrnNMX7EDRHMBPuAFyUO39CIlem5W4Ml+hJafQ6Dn+JdxAq/ECWZ/PVxK9M7+MH3DDteM7xlCJ9++6jdED2BzcsM5b6CRsQ+WilUEtQJ/BFLQupdsb0fZtnMYgiqwidtNNNy6Nxh+dWwBr5ffX8gAAAABJRU5ErkJggg==">
                            <p style="display:inline; margin-left:30px; font-size: 20px; text-align: center; ">Water Supply</p>
                            <p style="display:inline; font-size: 20px"> : <?=$row['water']?></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div style="box-shadow: 0 4px 10px 4px rgba(19, 35, 47, .3);">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAK8SURBVGhD7dlLiI5RHMfx1yX3xCzcF4okESkLkYSslEsRpcRCuSXFUMoKJREWyC1JzWbKThZqpizkUmwskLuU3BcWksv3F2+dTv/zeN73OfM4bz2/+jTTMzPvOeeZc55zeWpVqlRpiUxFB27hDMag5TIBn/HL8QSD0RKZjFN4CLcRdXdwGCOQbNSVvsJqgO812pBkNB6sSofsRZK5DavCIeeQZE7DqnDIRiSZUXgMq9K+D+iPZHMDVsUtGlN9kFz06LUqnCXJxhyFVdksX7AGyaQf3sGqrOUu1qPpmX7Y36+xswpWhX1q7Er0QqFcxpI/30ZNN6yKu95jIqLkIn5C/XmgLkTIHFgV951EtLgD8hEWoEg0NtTf3QqHHEe0bIZfwFXMRDM5Bv/zQrSEiZaFsAqRLqxGnhlX3fICrM/JMg1Rol2aVYBLS/FraIceDLMwDuMxD/vwEtbf/ssJRIvGhlVIGd6gN6JEOzirkLLMRpRoQrIKKMsmRMlQ5N2S9oT9iJZLsAop4rtxzRJ1wE+HZniroGZ8hJ501s98hxA1nbAKapRuyDK8cK5l2YqoGQvtB6zCGrEHi71rWTQvRc8KFOliR6Al+U3nWpbnKLyED2U7fsAqOESN3wVFpyHW71i2oUejPp53h6e7qjWbotXzN1i/59PBRCn7c+0eD0IVtSryFDsxBMp8+AfVIW+htVrpmQItGDdgLbTMr6+RBkENzjtv6MZMQjKZgQNo5JDhCkbjv0V3fQfO4jrUNayKhtzDUiQRbZ60o9QgzfOI1n/qPBYh2QyHBvdu+A1QY/VuJMnjTz+axJbjPvyGfIKOmTS59kWy0eM277rsGbYgyZN2nc02sozRfn4AkozustuYV9ALT6uBmnuSjhqj1fI61CfHkdCyXG9r1YgHaIlBn/Umdi50fFqlSpVSUqv9BssToqmLSO/wAAAAAElFTkSuQmCC">
                            <p style="display:inline; margin-left:30px; font-size: 20px; text-align: center;">Non veg allowed</p>
                            <p style="display:inline; font-size: 20px"> : <?=$row['non_veg']?></p>
                        </div>
                    </div>
                </div>
                <div class="row" id="overview">
                    <div class="col-md-6">
                        <div style="box-shadow: 0 4px 10px 4px rgba(19, 35, 47, .3);">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAJNSURBVGhD7dk7axRRGMbxlWAjIajgJQRTi1iIFn6DlCJiChMUsRMsRAVBy6i5fQKLBBIRgo2KBAU1hYI2NvoFVPACguAN4jXJ/ykGXg5nN5mZMzMneB74NTvZ877vzOxOdqaVkpKyrtKHETzGCzzCGPZiXaQLk/iFZY9/mMYmRJuNuAPfAK5niHaYS/A13Y6OTFTpxgkswjb6HTrNTkKfl8+w23WaRfOZOYyPsA1mnmAnsuyCO8w1NJ4hLME25nqLbchyBXb7QzQa7d0fsE21cxdZjsNue4lGMwrbUCc6anug6Cjaba/QaHSRsw2t5gyU6AbRVfp6DkehRDdI0aRBYksaJLYUGkTf3Qcicxm5B9Ef2TfFKA0SmzRIbP6vQXqwBc9h33weer1Oqml7UE96XT2uOU9hFzmNuqOatgf1lDtpkIAJMsgD2EUuoO6opu1BPeWOfqHZRW6g7szA9qCecke/l+0iuvthb9FUna34CttD9hs+V7bjD+xCc6gr7hnxF/bGXa7Mwi4mulm2AVXmHNy6pXai9sAXuIveRj9CR6eub+fptC5d7xB0WN3Ff+M+ruJiSVpDjxZ+wq2jG3XHECSn4H5e6qAhziJoBvAJvoJV+IYjqCSbMQVf4ZBuohdBcxCDGIbO5Q9wC+vu+K2C9F53vffQQx7VVG31UDraO24h6zX0r3XR6ML3Br61M+qhdDoN8g77UDb7oaPgqyGVDaJvk3vYgVDRNWsevqdZQQbRlVzPNUQP8sexG1VFNwgnsICsrnpISUkpnFZrBe65rlnvhfhkAAAAAElFTkSuQmCC">
                            <p style="display:inline; margin-left:30px; font-size: 20px; text-align: center;">Bathrooms</p>
                            <p style="display:inline; font-size: 20px"> : <?=$row['bathroom']?></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div style="box-shadow: 0 4px 10px 4px rgba(19, 35, 47, .3);">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAJjSURBVGhD7di9ahRRGMbxRVDUTkViIWphKsUb0CLRa/CTlNrZRcFKvAZRK1EQY6GVNl6AjYXRykZtA4mIiCgqmuj/gT0gh/fM7jnzzu5Zsg/8IExm3jlPMjs7u71pNlnm8bRPP09UtmEBy/gb0Tb9TvtUm924hhXEBWLaR/vqmGoyi9v4BmvRTXSMjtWMsWUOuvbXYS0yh2ZolmaOJFuRuv69hNeRzuWenOvfi+vr6DBKr38v4XWktRTlJjyufy9ai9aUnRewBo6T1pSdaZEOTYtYw8ZpIoronf15tC1WfRGV0BPxdjSVqbpIKBHSVKbaIs9gfTa5DGv/KoukSlzCBqxjqiuSKnERqRLSaZGveBtta1JaQoqKDLoVikqcwB686W9r0qaEaE3ZeQJrWKASxxEyqEzbEvIY2bkHa1iwiDipMh4l5C6ycwPWsOA7TiJOXMarhFxHds7DGva/QWU8S8gZZOcYrGGxVBl91vYsIUeQnS34BGtgLFUmTpsSH6E1FUV3CWuoZVCZNiXkEYqj75esoSmpMm1LyDkUZwe+wBqcojKnEOJR4jP0VNwqt2ANbxLKeJSQoq+B4hzAL1gnaPIDHiV+Yj9ccgfWSUbB5b8Rojc43f6sE3VpFbvgmguwTtals+gk92GdsAtFD4jDZieG+dzR1kvo1t9p9uI9rAV40GydYyQ5hA+wFtLGOxzESLMPr2EtqMQrzGAs0WtGD3PWwnI8ROeviWGiB7o1WItsomNOo6roTVN/2WEeS7TPA+iYaqNPlkv4g7jAb+h3RzEx0Z3tKvSlmlzpb5tmE6TX+wcxzabJ2DvpYwAAAABJRU5ErkJggg==">
                            <p style="display:inline; margin-left:30px; font-size: 20px; text-align: center; ">Gated Security</p>
                            <p style="display:inline; font-size: 20px"> : <?=$row['security']?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-header">
            <div class="heading">
                <h3><span style="border-bottom:2px solid black; font-weight:bolder; font-size: 30px;">Description</span></h3>
            </div>
            <div class="description">
                <p><?=$row['description']?></p>
            </div>
        </div>
        <div class="row row-header">
            <div class="heading">
                <h3><span style="border-bottom:2px solid black; font-weight:bolder; font-size: 30px;">Amenities</span></h3>
            </div>
            <div class="content" style="padding:10px;">
                <div class="row">
                    <div class="col-md-4" style="padding:10px">
                        <div style="box-shadow: 0 4px 10px 4px rgba(19, 35, 47, .3);">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAKTSURBVGhD7dnLq01hGMfxjRiYiJJjrqQYkEudOhLyBygTciuXjCnKyD8gxiYKAw4TJSbkNlAuA/4BhQkluebu+zutt97enr3ey2mdszreX33aZ737ede7nn322nvtvQc1NTWdZRZOYcHEVl724UnEY6xC5zmJv7iFORrIiOpvQPOHOYHOsx1/4BY9i9zoP/kC/sE7F9F5VuMLwsUPIzfL8Bb+fh5hHjrNUryCv7DzHZuRm03QXO1D+16MTjMferTCBnzvoEc5Nweg//KUnNzLcSjBFpSk5AH4vzKCgzjeE3r6LUFWduMrrPNgOn3GLiRlA37B2lEf6NjWI5pLsHbQJ0lvmM9gTdZLq16V1jS32rbqfOMYw0Zca8bapK7xFNE8hzV5K/xsg1XnPIAuLF3090NYtU7qGjrGaKxGPsI/KEXbnxDWOscQRmNWreSsUdzIb4SX64ug8bDWOY0wZ2DVSs4axY3IBbiLOd3qhLPqHL1UroXLOmjMqnVS15hUI/IS15tb6/7QD9xp/GzGYlLWmHQj8t4Ya6M31m/BWExsjeJGdDBHsRCKbrXddoD3oDcunbAyivuwaiVnjaJGdLIN+5yhK13rZLyNuQijsbsI63PXKGrkCtpyFX69rMCwrERYn7tGUSO66myL3oH9+teI5Q38OblrFDWyE23R/X59yiJTsUZtxKmNtKQ24k+aMY3ouyy9zuuzgR9tazz8rusDNH4eYTSm+1Tjz8ldo6gR5wj8aNuqc3SwYcIGQqlr1EakNuKlNhKojciMaeQcdni0bdU5+r3Drxfrly5f6hpJjejHTWtyn9xENPthTe6TPYhmNqyPr31xGeE3kkOjZvZCTzPrx/zpoGPRMSU3UVNT4zIY/AOugQP9Mbw3pgAAAABJRU5ErkJggg==">
                            <p style="display:inline; margin-left:30px; font-size: 16px; text-align: center; ">Lift</p>
                            <p style="display:inline; font-size: 16px"> : <?=$row['lift']?></p>
                        </div>
                    </div>
                    <div class="col-md-4" style="padding:10px">
                        <div style="box-shadow: 0 4px 10px 4px rgba(19, 35, 47, .3);">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAADJSURBVGhD7ZhBCsIwEEVzBe/gkbryAB5JcOGlCp5H5y+EMUwoxTHR9j34i4QmM28xFFIAAABgp5wsVxets+lRo1wsDxets+lRA5E1pNaYLGeXo0WMFFEPvif1uMhs8Ze9Bm6kiHrw++pxEUQSQCQCkQQQEYcqd4s/1BK5Weqzn0Z3+hotEfVYn337IEpLpEdaIlHCTR9EErJPkXpo/nbYa/iPJIBIBCIJIBKxGZHNPD60GCmSCiIr6CKigfv2A3OPGgAAAPDjlPIERkUYQ4QZ/XcAAAAASUVORK5CYII=">
                            <p style="display:inline; margin-left:30px; font-size: 16px; text-align: center; ">Gym</p>
                            <p style="display:inline; font-size: 16px"> : <?=$row['gym']?></p>
                        </div>
                    </div>
                    <div class="col-md-4" style="padding:10px">
                        <div style="box-shadow: 0 4px 10px 4px rgba(19, 35, 47, .3);">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAKJSURBVGhD7dfLyw1xHMfxx6Uo5RYiFrK0dQmJDUsLKzu3haQsJLdQ2NuxU4o/wMatUKwsUG6xEgtWFFm4hHi/H+dX0/jOOTPnmTmdo/nUq+aZ87t9z5nL7xlr06ZNmzZt2rQpzFyswXYcxhmc7fDYc35mG9sOTZZgNy7jLX5XZJ9L2IXFGGhmYCdu4ReiBfbDsRxzB5yjsczBSXxAtJA6vccJzEJtmYpD+Ixo0iZ9xAG4hgllPZ4jmmSQnmAdKmcyvIx+Ihq4Fy+NB/Cav9Lhsef8LOrTyw8chWsrFe+F24gGi1is7S18A2ajV2yzEfa5gypf2E30nMNH4DNEA+Q9xT7Mx0SzAI7lmNFceV5qixDGG8oGUcese9iESag7jrkZ9xHNnfUYUxBmLT4h6vgaW1E20+C3tqzDY8+VjXO9QbQW1+hauyYq5gJmoih+k6txHNfhAqKXpef87BqOYRW6/bLO6dzZMUoVkZKK+YJtnijIQpyGv1Z2sirsewqOVRTX4FoqFZFihxV/D/+JN/h5fEe0uH58wznMQxTXUrmIongZ7EWTb3nf5nvQxMNkPG67byCavAneR77Tao2PuUeIJmzSQxQ+YvuNe5380yzPbYTvGd/YW+A/UEs7PPacn9nGttEYiXP1tb8qk/Q0y0/6DgdRZdvtNsM+9s2P12gRKdlifCS6za7yosvHvo7xFQMrIsVi7mL5+F/1xLEcc2BF9Io3p29st9wXcbXD4yNYidpv4DozHfvxCtnrPWIb29pnqOI+6yWiRXfzAvYdmpR5NEcGemOXTdVihrKIlLLFDHURKb2KGYkiUoqKGakiUvLFjGQRKamYkS4ixQJGvog2bdq0afM/Z2zsD3EnEmwMrRvmAAAAAElFTkSuQmCC">
                            <p style="display:inline; margin-left:30px; font-size: 16px; text-align: center; ">Internet Services</p>
                            <p style="display:inline; font-size: 16px"> : <?=$row['internet']?></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4" style="padding:10px">
                        <div style="box-shadow: 0 4px 10px 4px rgba(19, 35, 47, .3);">                            
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAJFSURBVGhD7ZjPSxVRFMefugq0X5IiBCGEuQuxZUsJQTeCBC1MN0mtwoXQKlQEIShd2CJoJQjiol2QuLNFpKta9C+0CKlcJEGhny++C4fLjDNP78zD5/3AhzeceffOOTpz73lTiUQikUikIOZw3XgPy0bXtDkop5r5iAfGJ1g2uqbNQTnl5jm+we9oJ3GFDKLOF+kICr8Q5aTzyjGTr2gHO10hzzDpfEgXUPiFOJVjJrGQgAYppGGeEceZX7UcDbOPRCIFcQv7jdewbHRNm4Nyqpkzv2pdxCv4Ce0krpDm6mcWTfgQ3+EK3q/G8tBS/fQLUU7KTTlmkrWzT+N7fIAXFEigF7fQn0OxPkxCyY3jBs4rAH4hzuAtyi98iwPYit04i3/RjrX+x9d4B6/jKK7hH3Tfib2WJWQhO6j/kG6VL9VYHoMUkvWwd+IUphUsf+JjtAuDjh/hD0waI7fxKXag8Aup6WF35Fl+b+MrdJ3yP1RP1IVpXMZl3EON+YYz2IM+fiEnahpr3RBvYNvRYS60xF46OkwlyIZ4btBfZwk/4OYp1RyLeBNLZRj30d6/IdReormDkvbDqh1/Y1IiIdSKp5VJFPqCbgJtvAjVo4lTrVpZLx/8DfEzTuILE5O6TRS32jZEaozimsPGtYkKv5BCX9CtoriLNq4+zEcx+x2NEZrDxuvSosRCsNBCGuYZcdRz1RpD4Rdyol4rbR+5iv4tEtJdDLqPHId2X/82CaHmHMJSUV+kFj5Ur/USS++1IpFIpB5UKocHXtkJB7nxGwAAAABJRU5ErkJggg==">
                            <p style="display:inline; margin-left:30px; font-size: 16px; text-align: center; ">Air Conditioner</p>
                            <p style="display:inline; font-size: 16px"> : <?=$row['AC']?></p>
                        </div>
                    </div>
                    <div class="col-md-4" style="padding:10px">
                        <div style="box-shadow: 0 4px 10px 4px rgba(19, 35, 47, .3);">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAK/SURBVGhD7dnP6wxxHMfx9StO5FcpblwUSTjLlVyIIpGLhCLCCQccuLgpJXGRH1GKyD+g/EjJicTBwQUHHPyK5/PbTE2fPmtmdmd3Pr7tqx61+9n5vD+fz87szs5sZ5RRRmklM7AbN/Eo42PbfC35TMB+fMafLj5hD5LNRFxGPuFXOIy1mSN4jfz1S3DhyeUsnOAvHMBkhLHtIH7DbU8jqSyHC3ByO2wgc7AXFzMeTrNgdiJftH2TyXU4sbtjzzqd9fgI24psWwdzD7ZdGXuWQKbgG5zUQ/juf8+ex/ia27itz78idhgOPasQTrYua7SeLYhNrg5rtJ6tiE2uDmu0nnGzkKXIzwu98Ct4CZLIRlzFDZxB2beW27itfTYg2WzGF4SLsG0T/qvMx3HczhzL2kZpI56pZ2IBFmbcG7ZNQrKZi0O4hXcIPxuhN/DDvg/TkUTWIPYDsar3WIFW457419VgVR9grdZyHrGJ9cJarWQxfiI2qV5Yy5pDzx3EJtQPaw41qxGbSBOsPZR45+MxYpNogrWHcneliZ/tZQb+s34aYie8l5G2qmJ9HcOxBhZvuIWDejLcFrTVYd/YCdWxBpLZiJ38/GniLZ6wvSr7WiNsdyzHbDznEA72FlPR70KsYa3wNcdsNIsQu+rLP5T9LsTEvkQc07Eby0rsKriGp8i/JptYiLWsae3iWI490HhtkaeJhZhizb7j3wNecx/twnfJ26TFNLUQY23HiI0tr/mdY2lOITZg0XMsQx4f9/Jz3j5hHWvHti06idI8Q6xz6AdOIN878+B/JBcqclv7GGtYy5qxsUJPUJoXiHXuJtw7dVN1LxQ5x9LUXYh8Jz0kPX7rsE/VvVBUaSEPEOuckvsoTf63WMq2ozR+tXmrJlYgBZ4wK1+vuBj/1PQw82ybAg8n5zSUi65RRhlf6XT+ApC+HMBMXThkAAAAAElFTkSuQmCC">
                            <p style="display:inline; margin-left:30px; font-size: 16px; text-align: center; ">Club House</p>
                            <p style="display:inline; font-size: 16px"> : <?=$row['club_house']?></p>
                        </div>
                    </div>
                    <div class="col-md-4" style="padding:10px">
                        <div style="box-shadow: 0 4px 10px 4px rgba(19, 35, 47, .3);">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAHrSURBVGhD7dk9SBxBGIDhk4hFogSFFP6QQhLBQgkpNIJioQRbQ2IVRPEvKVJoIZK0FjbpgoVgZafYiI0kIhbBxkIMWAim0Ea0USwE/98PHJhiCOfNzHfsZV94mi125mPvXHcvk5aWFrUyTOE3FtCMxPUIMsCt5RJNSFQdsIcw5pGoRuAaZAuJ6jNcg2wjURXsIDfYwwwSlRlkA72owEMbxAF28AUlUO/DPbsiVKEF79CP4Xt96IbcayrxAlewr+ou6pG3OiE3xCPYG/uXC8cxsQT1avALrg3lSs6n2kscwrUZHx+hVin+wrURH+d4ArW+w7WREL5BJbkapzALy5/Pn56OYc4nH9diRK8LZlExDd+WYZ/zDaI3CnvRGIPI/Sd6E7AXjTHIJ0RvAPaisyj3tAL7nO8RvXbYi8bwCtGrhmvxUOS/6MdQ6Qxm4dDfkX05oNUfxBpkXQ5oZS8cepA5OaDVD8QaZFIOaDUOs7A8g2x6OoE53xDU6oFZOLS3UKsNrk2E0Ai1WuHaRAgNUCsdJAsFM4jq66DXcG0ihOdQSy6/axMhqA4S86NVB7XSL3sW0kFyqRauTfi6Ri4/T3glD0CuzfhYhHryJl5+oXJtKBfy1PkMeekpvmINrueMbKxiDGovHNLS/r8ymTsAEoiWJJDArAAAAABJRU5ErkJggg==">
                            <p style="display:inline; margin-left:30px; font-size: 16px; text-align: center; ">Intercom</p>
                            <p style="display:inline; font-size: 16px"> : <?=$row['intercom']?></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4" style="padding:10px">
                        <div style="box-shadow: 0 4px 10px 4px rgba(19, 35, 47, .3);">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAANySURBVGhD7dpbiFVVHMfx0UQLxVsloeiDoYKZdKWCQMRQETQQVBQlLyl2gaIiLXpRAhO0BxWfxAfFSyiGIiJeUES7GQb2EIj5IIrgJZXwgvfv90xDi8U6M2efPZsZxv2DD7i327XP/8xel1nbhjJlyhSarpiHHfgNv2Mr8qQ3Psce2J6+RWF5CX/jYeQk6s0EXEHc5iYUkiG4hviGqreQMbiHVJuFFXIIqRuqnkKexFmk2lMhhYxAfKOfYF+ZgrHImqmI29yJWbDNN9Dq+QDhDc+jO/JkFcI2j6ITCs1ihDfdjrzx0QnbXI7CExfSGs9vXMgyFJ6ykGbSrgp5Dgvq9CvCNtu0kLcRns+jLCRLOnwhzvj763QBYZttWkie2EbYZllIlnT4QrqgT522IWyzTQsph9+EspAs6fCFdJjOnie2EbZZFpIlYSF/YDzyJizkIF5Dq+Z5+O2479SUvnB7pn/lqDH2j6V4uXLUfEZhEcJdkgF4HU9XjhrTEyswsHJUZ/rhS1yF39KfmAb3esNYwCQch9fdwnfwg8XxS1mNu/Daw3gHTyDMU5iLpu3YS/gCDgqZ4vZO081iN3AMP+II/kXqOv2F3XAz+vR/51L+gUXZ5s+4jdR1bqf6KLtxtwYtxi3PVEPtSU3bsmEhblRvxIPgXDU/IP4FKeUMdkXnUvwJrIdPQfx3NRdyH/4Ih3qCvItqP6lTmA7jALABdxBfZ/9ZC591O/pCVNu4/gWjYV6Ej2f4ZdZUyDikOqs3H4n5cNTxg7yKzojzDCbDFzafYSJ6IY6DxVv4CLY5B8OQyiDMgIOQg8HjGYdGx/da4hwSzjfV4vzwQuMfW8ybyL0rb//YB/uLk6Lv9lLxlcLXcMj2fV9zs7KTocOy/eVjdEMqzmP2J/uDA4NzUOa4hXkA8Wuw69iMT2Dn9oPYsZ0Hwuvki58leA+z4RdxAvF1jnLr8CFs0/7kPHYT4XV+lr34CjPhJNxiqo1O7UnNw2/4jy5Hx9VcTJxL8VGttU2XJ6nzmQpx+eHj0wMtTYq+Z3fB53qs2s11Dk3Du6vc1DWyv7kuc/BwtR1PijUVshKf4tnK0f8ZDle4DgB2avuRC8RXEMbO/z62wInN/mJf8tmOF53+evw9XGvZphPfNxiMMH4W+4/rMReoef9TQpkyj1kaGh4Bj0/CuG8kTL8AAAAASUVORK5CYII=">
                            <p style="display:inline; margin-left:30px; font-size: 16px; text-align: center; ">Swimming Pool</p>
                            <p style="display:inline; font-size: 16px"> : <?=$row['swimming_pool']?></p>
                        </div>
                    </div>
                    <div class="col-md-4" style="padding:10px">
                        <div style="box-shadow: 0 4px 10px 4px rgba(19, 35, 47, .3);">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAKiSURBVGhD7dlNyE1BHMfx6y0bQolHscNCZGeBlZVnZcNGsUA2XrJQLCwkZSErL6We2EjKRjaSJCU2krCzwEo2ZIm8fH91p/5NM3PPuWfOufPo/OrT7Tln5px+PXPunec+gz59+mTNOtwavs7a7MF3/B2+6udZlYW4DBXw6bjOFx8toZcIlXB0vuilZpfSKEUutdRSGqWopbYFhxvQ/D45cwCnGtD8IvIGofVfleYXkViRH3iE68PXnwiNK7rIa6yFjT47dNwfW2yRr1iBUFZC5+14V2QBprEZq3Sg6/hFLiKVS7DjXZElsMffQ2M3oJP4RfYhlf2w42NFnF+4iqVoNX6Ro0jlGOz4UUWct1iN1uIXeYJUnsKOr1pEPmA5WolfRI4gFP22/LF1isgDzEX2hIr8wU1sxRpsG/7sj5O6ReQgsidUpI5xinzGYmTNJIrISRQbvcVuhJ6ldwgVcD5hPorPPJyDnrdQEdmFbHkGbTuc3UhF5+14zU/lDEIl5D6yxX9G9iIVnbfj3TMSyxxo92znOPrUj+3raqftIsom/Iad55xAlnRRRLkHO895hSyJFTkOLQmf9kx2fNUiO2DnWXqna5xYkWuwx2OqFtGz8hGha2i73zhdFVHOI3SNb1iERumyyHqEriGn0SixItsR+kJuBnZ8nSLKC9j5jr6GncLYiRWJReft+LpFDsHOt7TF145grHRdRM+CdgT2GpaW9Fhlui6inIW9hu8x9CFaK7EibT0jyjJ8gb1OyHNcQaU/xGJF2njXsvF/symV7jGpIkrWe0yyiB7quwhd12pUJPdeKxZtXfQ3i7b09rpWoyKx+Gu7aREXfUl+A/ovgL1+5Xvcgf5T6+xEKjpvx2t+zuhzRve4gNt4iNz36NPnP89g8A9HZoJFC7QyBQAAAABJRU5ErkJggg==">
                            <p style="display:inline; margin-left:30px; font-size: 16px; text-align: center; ">Children's play area</p>
                            <p style="display:inline; font-size: 16px"> : <?=$row['cpa']?></p>
                        </div>
                    </div>
                    <div class="col-md-4" style="padding:10px">
                        <div style="box-shadow: 0 4px 10px 4px rgba(19, 35, 47, .3);">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAHLSURBVGhD7dq7LwVBGMbhI3QSUSI6SiLUCkTplpAoFBK3RKUQUSmIhITOpRMV/4SGKEiodEoVjY5o3H6fmGQyGbt7ds7uIt+bPAVnZmfe4+zZKZQ0Gk3uacV1DBmTJDXowBR2sYPc0o6PGDLGjb3pPVziBfa8c2QW2UAv1nCIM9iL+1zgBG2QbMDdtE8mReohG3iEb9EkuiE5gu91V8WLTCCkgFFYkSpswrdIGoUVWYdvgVfIvbGF7e/fRVnFHBogGcExbvEO3xxRkSLjcBd5wz6aYJL2W8ukDj1YhFsuuEgtHmBv5hkDcCPvsnz8opi/RNKYcqNfPwVkBXYJeYeG8aciN/gd7CLyvHDTCfncl0Pm5JYu2CVEC+z04wnuuDgypw+5ZAH24jewIzdukqfyT2Ru1M1fschXqr3wAUzkeCKHQPv1NK5QjUyzBDkXGbMwkQOeb2NpTKKwJDkgJnWKQtKMqKdwueRajcg9Q/BtKMQgcs8MfJsJMY3cMw/fZkLINXPPvy/iPjB9kTG+uVokJFqEaJEsokWIFskiWoRokSzy74vcYzmGjPHN/VVFQmiRkGiRCFokJFokQiFFxuD+I0AouaZGo6l4SqVPuz/bVPRxlKkAAAAASUVORK5CYII=">
                            <p style="display:inline; margin-left:30px; font-size: 16px; text-align: center; ">Fire Safety</p>
                            <p style="display:inline; font-size: 16px"> : <?=$row['fire_safety']?></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4" style="padding:10px">
                        <div style="box-shadow: 0 4px 10px 4px rgba(19, 35, 47, .3);">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAKVSURBVGhD7ZnL60xhGMd/RC65JLKwsLRDWSBLOwulJCVyKynZ+AMoK0rZUDZuy1/YKUnJJZKFhSUr2VBILqVcPx/m1NPpnZkzZ86ZOZPzrU9N7/u83+f5/i5n5pyZatWq1di0Go7Dow6+dq3xmgEb4RS8hN9dcM8aaz3TCM2CzXAOXkNq8F54xrN66DVSzYWtcAneQWrAMuilp972qEULYSdMwydIDVIl9rCXPe09lJbBAbgJ3yDVMM9P8B/7GKztrEVcc88aa/P7KeztDM7iTIW1D+7CD0gZ57HuHhyFFZBpMeRrXctkrWc8O0gvZ3PGvnoOKZPId7gNh2A5pNQvSJQeeumpd/5cHmfsq25Bsl/xflgK/TRIkCi97dHrT7pUkAewGxbBICobJMqe9naG6FMqyC4ooyqCZHKG6FNrEN/QNvx7+Vf9glhb9E2w9iDzYRtcgffwCjL1C2KtZzyrh17dVEuQJbAHbsBXiLWDBol7eumptz2iagnyEOJ+ZJggEXtEtUHioTYI5PfbIBD32yBRqSC/4D7sgEwTFeQtnIZVkFfjg/iTvwXbYbYLXdT4IHGYXmp8kKKa+CAzYQtch+gj18BHPz7PamyQlXASeg2Y8QK+5NYiIw8yB7zk3oGiT0WKMLIgPsM9C95PxNqqqDWI988+6XgCcb8O3oCPfBaAqiTIGbgMn8PaqLCnvZ0hrpcK0kT+ryAn4AOkDJqAszljIc2DvfAYUmbjwFmcydlKaQ2ch4+QalAn9rS3M1QmL4UH4SmkmlaJPeyVXX5r0zq4AFVekvXSU++Ry2+TDsMzSA1XBM/qMfQ3U1VpPVyEXh8GM6yx1jONlfccRyD1fuSae/G+ZCK0Ca528HWrVq3GoqmpP6sD7HBmGVSiAAAAAElFTkSuQmCC">
                            <p style="display:inline; margin-left:30px; font-size: 16px; text-align: center; ">Servant Room</p>
                            <p style="display:inline; font-size: 16px"> : <?=$row['servant_room']?></p>
                        </div>
                    </div>
                    <div class="col-md-4" style="padding:10px">
                        <div style="box-shadow: 0 4px 10px 4px rgba(19, 35, 47, .3);">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAHVSURBVGhD7dhNK0RRHMfxSRF2SCyEBSvyGngRHvMyKCt5DcJKlLBgZeUF2Fh42GOrkGRhQR6/v5op3f6mOWfOvedq7q8+pZl7/+d/xjl37txSkQbLBI7K9Pe/SgvmcY7vBL2m93RMbtOJJdwiOYEkHaNjdU5uMox1vMBquhqdo3NVI1rGobX/CatJF6qhWqqZSZrx1/oPpbKPNFbwuKz/UILuoyH4rv9QKvtIvXhlFSHWfyjqRT055wRWwZjUk3OKiaSomIhVLKZiIlaxmIqJWMViKiZiFYupsSdyDKtYTOrJOYewisV0AOdswSoW0yacswKrWEzLcM4srGIxTcE5Y7CKxTQC5zThEVbBGB6gnryiq4RVNIZ9eEfPl6yiMczAO214hlU4S09oRV1Zg1U8S16PgZLpxxusAbLwij4EyQasQbIQ5L9RSRd0+bMGStMdOhA0c7AGS9M0Usk2rAHT4HWDWGvacQlr4JBOoUt/qunGNawGQlBtjZFJBnEDq5F6XGEAmaYXF7Aa8nGGHkSJ9oxu5qzGXOwi9T1RS3RDdw+ryWp0ziRyFX1p6pP9gtX0bzpmBzont9Evyz18IDmBd+i9Ufyb6Mq2CD1Uk4Xya0UaIKXSD9+VIM8RVCy4AAAAAElFTkSuQmCC">
                            <p style="display:inline; margin-left:30px; font-size: 16px; text-align: center; ">Security</p>
                            <p style="display:inline; font-size: 16px"> : <?=$row['security']?></p>
                        </div>
                    </div>
                    <div class="col-md-4" style="padding:10px">
                        <div style="box-shadow: 0 4px 10px 4px rgba(19, 35, 47, .3);">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAIySURBVGhD7do7aBRRFIfxlaAY0EILBUuJETSFWlkIWmghRIKI2ipImogIFmIpggghKAimDTGQxHRqIaSx0M7GwsYHGgWxUQsfiIL6/YuBy3I2u3PnnrsMzAe/MvfMNbvziq2mpqaee4hnhjc4jtq0gn8dPEZtWm0jMoJa1G0j06hFozgZmEG4ke+41yeLuIQ1KN02/EG4mX7TZqJagrVgv9xHVIdgLdgv5xGVPpMvYC2a22usQ3T6V7AWzu0EKrUR32AtnstTRJ2x2rsDa0AOf7EfSdoNa0gOuoYkTfdb1iBPv7AdSTsFa5inKSRvLT7CGujhMzbBpauwhnq4CLdy3X9Vvvj1Uo77r8oXv17yvv9KdvHrloa8hHUQVSW9+HVrF37DOpCqJpEl/TaewDqIKt5BN6dZPlJqHO0HcQM638fagKxtwReEm3iF9ahV1xBuQo6gdum0GG7iLmpZ+5f8OZadXUDyriPcSA56oEveVnyCNdCLy0bUHuhMZQ314LYRNYDDOAddVzwdQFO3BqHH3ss4g82omtY4C62pF+ia4do+vEf4Of4KvcmPbQxaI1zzLfbCJb2o6/TM/gM7ULad+AlrzQ9wuQ/Tl88aWIh543EL1loFnVCSdxPWsMIjlE0/Y61VcHkddAXWsMIsyjYHa62CvvzJG8Zqb1COomzHYK0lmjUEl3QTp+fq9qG3EZv1glwzJuCa3qIsQP+ZQH8K03m/aqfxAFpzHgfR1NSUrFbrP4crPcxfrBdlAAAAAElFTkSuQmCC">
                            <p style="display:inline; margin-left:30px; font-size: 16px; text-align: center; ">Shopping center</p>
                            <p style="display:inline; font-size: 16px"> : <?=$row['shopping_center']?></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4" style="padding:10px">
                        <div style="box-shadow: 0 4px 10px 4px rgba(19, 35, 47, .3);">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAJdSURBVGhD7Zmvi1VRFIUfg/iDcVBEm0yZZLKIiBhtBotJDBZtw5QBFYUxmGTSBDHYBP8Aixi0WC0WkyIIRnWCjCjI+K1wYLE5vHseOHe/K3fBV87eZ3PWe7yzLvdNRo0atac6BbfhDbyGF/AUNuEGnIP9MBgtwnV4D7uBbXgGZ2Aw2gcPIJoRf+ARqGcwegk1M+IhDELH4BPUTIgfcADmVkuwCp+hZsBZgbnTQdiAX1A7dOQrHIK51TLoKn4FP6Fm4gtcgMFIn/h50JV8C9bgEgwqU/476dO/GRjkN3IE4m9Ea4PTaCRLx+FihcsQjWit1qsZ6boG8cCzohnpuge1w82CZqTrCdQONwuakS49kvih9HT7Db7bWkFrqqnH1zUjXR/BD6UftDTt1ooXgWakagF+gx/qNEjTjKjH1zVDs9J0EvxA4ihI04yoJ9Y0K016JPfD6EVD0TQjknq9lvp4HzPkHRR1GVGv11KzJGbIcyjqMqJer6VmScyQLSjqMqJer6VmScyQdSjqMqJer6VmScyQK1DUZUS9XkvLEt378c3JWSjqMqJer2lWSpbUMuQEFHUZUW+sp2RJzJAdcHUZkbTH6ylZEjNEb+JdLUbi2/uULIkZov9GXC1GtMfrKVkSM+QxuFqMaI/XU7IkZsgdcLUY0R6vp2TJB/BDXAVXixHt8bpm9qpahuhdr6vFiPZ4vfcsqWVIzIAWIy1z9lQxQ2qfZIuR2jfba5bEDKk9J7UYkeLzWq9ZEjOkdtu0Gom3X69ZchfeGvch6jB4j9BalPZ6j2aPGjXqn2oy+QsMgLaTAyPBTQAAAABJRU5ErkJggg==">
                            <p style="display:inline; margin-left:30px; font-size: 16px; text-align: center; ">Gas Pipeline</p>
                            <p style="display:inline; font-size: 16px"> : <?=$row['gas']?></p>
                        </div>
                    </div>
                    <div class="col-md-4" style="padding:10px">
                        <div style="box-shadow: 0 4px 10px 4px rgba(19, 35, 47, .3);">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAMZSURBVGhD7dpbqA1RHMfx4x4iRPIiJBFJeOKBKN49SC4hD5IIOS4v7pHyQClE4UWSWykKueZBuUXuEaFcEg/u9+9PM1mt/ntm9hx7z9q1f/XpHNPsdf6r2bMuMxrqqaeeiqcjjuJK5DwOYxvmYQBqJmPwO8FFDEdN5BysTsQ+oCWCz2xYHYhdQk2kP6wOxCZAaRX9DDbtYHVAjqE5luMzLmAxuiHIfIPfiYcYioPOsdgXbEYnBJW38Iu9A10F/7jrFUYhiLSAe0WuOr9n8R0axgtPT6igT4i//36xaUai8KgjC9Hj77/+dSyrJ9CAEFx6wSq4lOkIMrp5rYIt+xBncPQzmMyBVbTvCFqjCw5Fx85iIILIDvhF+3ZBE+ksvImOxb5Cy55C0wwv4Bbm+oHdWIGn0bFS1kPtFZJhsIrKaxUKyVa4hdzHZe9YOdag6mmL6ziFtRgCZQ+sIrMYj2ByA1aRaV4imKW/Znvd4FahaeYimGjtZRWZ5gy0GA1i6aIi7sIqNMktaOGpiVJPZwpfwkyDVWiS01AH+uJBdOwXpqCQtIdWtX6hpbzDAujrNAP+Ru0j+qHq0UM6t5BSVOBOjMMi3IN1nuhqVXWm1x+bBE2OJ6HiHkFb32uwisxqKoJI3lEspgVp4dHTxrSFYhJdUd17qdmEA/+BliRWsu5TLK+hkSxTbsJqpFzv4ac7NDJZ56fR58raPVaqI7r59brBOjfNY5S9Y6xURzSsWuel0Va4K8pOJToyAtq6WuclaUTuVKIjG/Ec1nlJJiJ3tI/W5fQb3Q+N3z5rw3QCejjtRw/tNHtrAbgES6ElyWToRtbfdtuZjyZFjbsNanOj9U+p3IZ7/jrkyTK47axGk6J3fm6DWjMlRQ8H3PO1HMkTXUW3nQ3IHe3mfsJtcCySMgju+VLucKmHdFqLuW1sR+74M69m06SvVRx/xboSWdMGe+F+XvRsrA9yRQW4L2Z0Q2eJ7ov4M3pPsgVpUQf0Lt6/Eq5n6I1c6QCNJBq9RutAhmjUOY6Z6KwDGaJ5Iv6PBkk0wtVTTz2509DwBy7Fuvb+LSI5AAAAAElFTkSuQmCC">
                            <p style="display:inline; margin-left:30px; font-size: 16px; text-align: center; ">Park</p>
                            <p style="display:inline; font-size: 16px"> : <?=$row['park']?></p>
                        </div>
                    </div>
                    <div class="col-md-4" style="padding:10px">
                        <div style="box-shadow: 0 4px 10px 4px rgba(19, 35, 47, .3);">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAKkSURBVGhD7dlLyA5RHMfxcY1y7U2klIWycUmUXrHFBoVs2VBS1oRyWXgXiq0o5JLbRsm1pNiIXMICZaEsEeWS+/f35H067/F/Zs5cn4n51WfxnnfOmfnP88zMOfNETZo0afLfZyJWog8ncQkXcQR7sQJjUMsMwipcwXf8SvAN17AEtUkv7sI64BD3MQ9dyxDshM6udYBpfMV2aMxKMwynYB1UHkdRWTG6HnQRWwdShGPQPkrPFlgHUKTNKDUzoO+ztfMifcEsFJ4RmI/bsHZchqsoJLqg9Wy4jio+BYtOXq4sxFNYg1fpBDJnG37AGrhqb5DpdrwP1oDdtBypilkHa6A60F3sFjZgFDpmGj7CGqRuXmMNzOhpanWqMy0TBswApqKIiZ9Pn/BbT9Gf+h60o+mAtVFWWkjNRqfMwWVYfdP6iaVoRTu2NsriDEImfINxDtYYaT2Gxoue/2nISyvDSQjNZISsJkPoFh19cBryeIC0eQhrrLQOIfrkNIQ4jUXQ2R/vGA03esHgX+z+Swc9G6x9pKXpVPTSaUii6UtoxsLvrzY3RRWikxTdcBriPEKalVtIIdMx16OH3U34feN8RrTVaYizC2kSUkin6IQdgN+/kxeIZjoNcTbCzTJordJvP9zkKUQZimfwx7DoBWArIc8SvxD97f5f33c3eQtR9GbSH8OyHq1oJZZ0Ty+jkN0461gMN5vgj+F7jx60o2vA2rBfGYX4d62kfVh0jQ+IFi/nYW0sdSxE/Yfjr+gCOw6rU90KeYIJiM1avIPbsU6FXEDwTxPjoO/fK6hztwvRlP0O2tP2LNETWMthN0mFjMRBj9rcJBWyADug9wlT1FBGkgoJSVIhlaQpxElTSJH5ZwpZjXuOw0gb9XHH0JhNmjQpPFH0G6p4BolpaLg3AAAAAElFTkSuQmCC">
                            <p style="display:inline; margin-left:30px; font-size: 16px; text-align: center; ">Rainwater Harvesting</p>
                            <p style="display:inline; font-size: 16px"> : <?=$row['water_harvest']?></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4" style="padding:10px;">
                        <div style="box-shadow: 0 4px 10px 4px rgba(19, 35, 47, .3);">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAHcSURBVGhD7Zo9SgRBFIQnMjUwNfIGnkAzMdEbaGYmxoJgqGBgqHgAwRsIBgYighgbi2BsoqE/VbANzePZM6P12g36gy/p7ZnqgmV33rJdo9Gozi586JF7ppp9+DVQ7q3CMbwa4S30DlyS13j3+kmeaTQ30Av/T3mm0bQigf6qyBrcmjJ5pkZjGtmE3nu2hsyW8Qi9T5EaMlvGJfRCashsGWfQC6khs2XsQS8k9xXmz0XX0O7hWr6H19g9VmbL2IBeSK791p2Fdg/XcoY8PTBbxjL0QnKjijBbxgL0QnKjijBbxgz8gF5QMqIIM5kt5QV6YcmIIsyUcwe9sGREEWbKuYBeWDKiCDPlHEEvLBlRhJlytqEXlowowkw569ALS0YUYaacReiFJSOKMFPOHPTCkhFFmBnCG/QCqboIs8IoDVjqItKBylIasNRFpAOVpTRgqYtIBypLacBSF5EOVJbSgKUuIh2oLKUByz7gDSlSehCVDlSW0oD1Dudhoq8I9/IauycpHagsfQPWE+R7mz+s7UzWcrnG17jnebLmGTJQWfoGLIUhA5Wlb8BSGDJQWU6hF670BIYz5Kehv/gJl2AVDqF3CIUHsCqr8BzeQ+9PAWPkPXivFdhoNOR03Tf9i2u6uYQhZQAAAABJRU5ErkJggg==">
                            <p style="display:inline; margin-left:30px; font-size: 16px; text-align: center; ">Sewage Treatment Plant</p>
                            <p style="display:inline; font-size: 16px"> : <?=$row['sewage_treatment']?></p>
                        </div>
                    </div>
                    <div class="col-md-4" style="padding:10px;">
                        <div style="box-shadow: 0 4px 10px 4px rgba(19, 35, 47, .3);">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAQbSURBVGhD7dlZyK1THMfx13iQKZkypLhAhguOkDE65gs3hpKSGxwSTsqFOSRFOSJcIAmFkjGEMoW4UYZwwUFmKXHMfL+nverfv7Wf99nPszpX+1efznn3Xs9ae3ie/7PW2gvzzDPPqByL23DUmr/WfjbE0dhrzV8Dcxz+xX/4G8dgbWZ9vAHH93VchEG5AXZSrMJmqGUf3Iyn8BgcdHOMyQmI43+MQfErjR3pDsSsg+tQvrnoGxyMoVmJ2N/rGJxHEDvzBR+BkvMRn89+ws4Ykk8R+7oCg7MDfkbs0K94YxgLQXyu5nbMmt2R+9kPo3Iecqc3wXjNfIH8fOS1ZQ7ANRP+vysXIvbhaeppPCrr4i3Ejq1iS2FOQnwus60Xf7yO/sG5mJbnEPu4D6OzNb5F7FjvwTpvHkJ+PvLN5Md+w6bI8bT9HbHtKRidKxE7jXzObIsfUGvTZX/knIjY5k9sgdE5G3dNfIA4yB8od11PsdKury2RY4mPY7yC5tkXfyEO5PWzHloll93LMDibwPOyxk8oDqRLUOLUpnZcl0Ng9kDu21nD4GwAz83c6TS/YjeY5ai16eL9yFyM+PjnGJ33ETtdzMuw1luuX5s81lcpxbns3o3RydOTPs6B2RO5hHY5FJbifMzJGJ2rETu17r+T/IjYxunMLjCeJrm9PkI8RpbXXHZ9U7X7zMw5FbHj75HjGiW2kS/gTpSbZY4Xd2xfroNcdj3NmmRvxI7ljS/nfuR2ck5VS/6mn4H5DPHxFWgSK1e+ZxyJnGWIbQqLRS0PTnijPR2HoVZ2faxZcuWytOYchNimeBe11L5VP/14rDfFpsmVq7a2WIJaqfZi75vnEY+9FU3jeR4H8F5RizfDl+Cp6KrwKng/mRZPW6ceVrCvkU9hK1jTnIY4gNP5rmw0+bcrVrNnEfvNLodvtllqlcv1yZjk3ZlpHsfoVWFJrXIdjqFxD2A1Yn9djkez5DWIa/ihuRSxr8Xk7adReRSx8zJTHZLtcBYeRp7e1DyBZsmV60W0iIsxN/CuxdtwQyKOI8t/s+TKZbkcknvgXq4bbW4H5fK8Dc7AA/gOjnU9msUVWnwj2gqzxNMp9+GLdZ7mB5X78036Zt2oaxbrfq5crh/6xu2d2nZS5HZR17fVLB8iDlwWUH1yJuKxfXj6Tps9j0quXLPMhdwljMf25Q2xeawscZAX0DevIh7bl7+1NI/rhjjIV+iboW/kEzRPrXLVdglruRf52L7cxGiaWuVyGp432or4AlwJxuNm8SSaJ1euLi6USvzmfkGtXR9dPz8Mij9y1gaqcbqxE0puQa1dH/6uMstqc9FcgNpA08RlsftWX6LWrq+nsStGx0nejXD3vbbxltluR5QciFq7WbwJNyq2xzzzzNM7Cwv/A9Th9N9+G5gdAAAAAElFTkSuQmCC">
                            <p style="display:inline; margin-left:30px; font-size: 16px; text-align: center; ">House Keeping</p>
                            <p style="display:inline; font-size: 16px"> : <?=$row['house_keeping']?></p>
                        </div>
                    </div>
                    <div class="col-md-4" style="padding:10px;">
                        <div style="box-shadow: 0 4px 10px 4px rgba(19, 35, 47, .3);">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAEVSURBVGhD7dkxCsJAEAXQYK14EsHOxmuIZ/AE2mlhKdh5Am08hCcQrAQLG8FCrbyB/oEEFnYSk2yMI/wPr9pJdn+zQYwYhgnOHPYZZD00dewRbeCVQdZDU8ceLFIktRTpwSCDrIemjj0YJjQNGML4T8hZ5cxelqDdGJYtwMsVtGHL5MxenqANWyZn9sIiP8Qi1pgpcgL3d8cDtLk0Zor0wc0KtLk0LFI1FomVKjKCPOmA9rxoQ5HIntp7EiySJyyi5CtFLuB+vNIcQXteHMCd7YKbCbjrsqf2nkSpIt/A6zfGIlXbwdZxBm0ujZkioVjEGhaxRi1yB23Ysht4+fRni0Vr8NKCGbj3umVTaALDMAzDBCaK3l2F8UXRGSG8AAAAAElFTkSuQmCC">
                            <p style="display:inline; margin-left:30px; font-size: 16px; text-align: center; ">Power Backup</p>
                            <p style="display:inline; font-size: 16px"> : <?=$row['power_backup']?></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4" style="padding:10px;">
                        <div style="box-shadow: 0 4px 10px 4px rgba(19, 35, 47, .3);">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAK/SURBVGhD7djLq01hHMbxQ25lhIEUcsk1JsqIv8FASK4ZGogYmIiJRJkYOAZSJBElAyGZkJiIEpkqlwlTA+Tyfeq89bZ69llrnXe9ay9ZT31qd9Zv/d73t/c+e6+1R/r06TPULMD5MXr8z2URLuA7/ozRY/1NxzqfxbiIeIAiHVONajuXpbiEH3Cbd1Src3Tu0LMMl/ETbrNV6Fz1UK/WswJXkTJAkXqpp3pnzypcwy+4zTRBvbWG1mo8a3AdOQco0lpaU2snZy1uoc0BirS29qC91M4c6Nn4Ddd8GLQXDTQflTITr+GadcEHzEVpjsE16JJTKM1juJOd97iNm4nU4x3cGo72WJqqbytdZkxBkzkIt1aR9liaKoN8gf6XcuQ53JqxxgY5i1zZAbdmrJFB9DEYXxfp8Ve42io+YglCpkGvuKsNGhnkEeJcgaurQz3inIGrCxoZZAtC5mG8e4+q1EO9QnRpP96XcfIgnzEVIcfh6iZCveI8hKuT5EFOIkTvZQ3m6iZCvdQzZDNcnSQNoou3hQjZA1eXQj1D9B31Ca4uaRC91HFewtWlUM84p+HqkgY5gZBJmJWJeodsgttL0iD70XY2wu2lsUFm4xyeIfUuLtx9qpd6qndI1kFm4C3iY9+wHHWjHxp0btzrDaZDyTrINrjjo6gb/fLoemkNJesgh+CO30Hd6BzXS2soWQdZD3f5cBh1cwTFPuq9Dkr2f3ZdTsS/rNxFfOlSNfomv4fQRz11qx2SfRBlJXZjA+LP/rrRueqhXuoZp5VB2kirg6zG0UTq4dLqIFVuTcuoh0s/iDJokANw2QVXX8dOuAy6J0ka5BX0zG2NbMdTuPo6nkC94t5aS2u6+kqDPIA7uUvuozT74E7ukvhOcmAmQ7/HugZdcAOVv4A1zF7obfaiI/R20p5SriL69PlPMzLyF9NmOnEaUXeeAAAAAElFTkSuQmCC">
                            <p style="display:inline; margin-left:30px; font-size: 16px; text-align: center; ">Visitor Parking Area</p>
                            <p style="display:inline; font-size: 16px"> : <?=$row['parking']?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        var c = function (pos) {
                var lat =<?=$row['lat']?>,
                long = <?=$row['lon']?>,
                coords = lat + ', ' + long;
            document.getElementById('google_map').setAttribute('src', 'https://maps.google.co.in/?q=' + coords + '&z=60&output=embed');
        }
        document.getElementById('get_location').onclick = function () {
            navigator.geolocation.getCurrentPosition(c);
            return false;
        }
    </script>
    
</body>
</html>