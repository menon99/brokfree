<!DOCTYPE html>
<html lang="en" style="overflow-y:scroll">

<head>
    <title>Search for Homes</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>

body {
    opacity:0;
    transition: opacity 1s ease;
	background: linear-gradient(to right, #2600D9, #F2000D);
}

.loaded {
    opacity:1;
}

.page-cards{
    display:block;
    padding:25px;
}

.main-filter {
  background: rgba(19, 35, 47, .9);
  padding: 40px;
  max-width: 600px;
  margin: 40px auto;
  border-radius: 4px;
  box-shadow: 0 4px 10px 4px rgba(19, 35, 47, .3);
  font-size: 14px;
}

.filter-panel-header {
    color: white;
    font-weight: 400;
    display: block;
    padding:4px;
    font-size: 24px;
    font-weight: bold;
}

.proptype,.pref-tenant,.avail,.furn {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 18px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    color:white;
    padding-top:10px;
}

.proptype input,.pref-tenant input,.avail input,.furn input {
    position: relative;
    opacity: 0;
    cursor: pointer;
}

.checkmark,.checkmark1,.checkmark2,.checkmark3 {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: white;
    border-radius: 50%;
    margin-top:10px;
}

.proptype:hover input ~ .checkmark,.pref-tenant:hover input ~ .checkmark1,.avail:hover input ~ .checkmark2,.furn:hover input ~ .checkmark3 {
    background-color: white;
}

.proptype input:checked ~ .checkmark,.pref-tenant input:checked ~ .checkmark1,.avail input:checked ~ .checkmark2,.furn input:checked ~ .checkmark3 {
    background-color: rgb(91, 243, 77);
}

.checkmark:after,.checkmark1:after,.checkmark2:after,.checkmark3:after {
    content: "";
    position: absolute;
    display: none;
}

.proptype input:checked ~ .checkmark:after,.pref-tenant input:checked ~ .checkmark1:after,.avail input:checked ~ .checkmark2:after,.furn input:checked ~ .checkmark3:after {
    display: block;
}

.proptype .checkmark:after,.pref-tenant .checkmark1:after,.avail .checkmark2:after,.furn .checkmark3:after {
 	top: 9px;
	left: 9px;
	width: 8px;
	height: 8px;
	border-radius: 50%;
	background: white;
}

#slider,#range {
    font-weight: bold;
    margin-top:10px;
    color:white;
}

.home-card{
  background: peachpuff;
  padding: 40px;
  max-width: 600px;
  margin: 40px auto;
  border-radius: 4px;
  box-shadow: 0 4px 10px 4px rgba(19, 35, 47, .3);
  font-size: 14px;
}

.house-name{
    padding:5px;
    font-size:20px;
    font-weight: bold;
}

#house-detail{
    display: block;
    border-right:1px solid darkslategrey;
    font-size:16px;
    text-align: center;
    margin-top: 20px;
    margin-bottom:20px;
    font-weight: bold;
}

#something:hover {
    text-decoration: none;
    color:red;
}

</style>
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
        <div class="row">
            <div class="col-md-4">
                <form action="search.php" method="GET">
                    <div class="main-filter">
                    <div class="input-group" style='width:300px'>
                    <input type="text" placeholder="Search for a locality" style='height:34px; width:200px;' list='cities' required autocomplete="off" name='city'>
                        <datalist id='cities'>
                            <option value="Anna Nagar">
                            <option value="Arumbakkam">
                            <option value="Porur">
                            <option value="GST">
                            <option value="Velachery">
                            <option value="Mambakkam">
                            <option value="Tambaram">
                            <option value="Kandigai">
                            <option value="OMR">
                            <option value="ECR">
                            <option value="Chetpet">
                            <option value="Nungambakkam">
                            <option value="Nanganallur">
                            <option value="Chrompet">
                        </datalist>
                            <div class="input-group-btn">
                            <button class="btn btn-default" type="submit">
                                <i class="glyphicon glyphicon-search"></i>
                                    Search
                                </button>
                            </div>
                        </div>
                        <span class="filter-panel-header">Price range</span>
                        <input type="number" placeholder="Minimum rent" name="min" value=0>
                        <input type="number" placeholder="Maximum rent" name="max" value=100000>
                        <span class="filter-panel-header">Apartment Type</span>
                        <label class="proptype">1 BHK
                            <input type="radio" name="radio" value="1">
                            <span class="checkmark"></span>
                        </label>
                        <label class="proptype">2 BHK
                            <input type="radio" name="radio" value="2">
                            <span class="checkmark"></span>
                        </label>
                        <label class="proptype">3 BHK
                            <input type="radio" name="radio" value="3">
                            <span class="checkmark"></span>
                        </label>
                        <label class="proptype">4 BHK
                            <input type="radio" name="radio" value="4">
                            <span class="checkmark"></span>
                        </label>
                        <span class="filter-panel-header">Water Supply</span>
                        <label class="avail">Both
                            <input type="radio" name="radio1" value="Both">
                            <span class="checkmark2"></span>
                        </label>
                        <label class="avail">Corporation
                            <input type="radio" name="radio1" value="Corporation">
                            <span class="checkmark2"></span>
                        </label>
                        <label class="avail">Borewell
                            <input type="radio" name="radio1" value="Borewell">
                            <span class="checkmark2"></span>
                        </label>
                        <label class="avail">NA
                            <input type="radio" name="radio1" value="NA">
                            <span class="checkmark2"></span>
                        </label>
                        <span class="filter-panel-header">Preferred Tenants</span>
                        <label class="pref-tenant">Family
                            <input type="radio" name="radio2" value="Family">
                            <span class="checkmark1"></span>
                        </label>
                        <label class="pref-tenant">Bachelor
                            <input type="radio" name="radio2" value="Bachelor">
                            <span class="checkmark1"></span>
                        </label>
                        <label class="pref-tenant">Company
                            <input type="radio" name="radio2" value="Company">
                            <span class="checkmark1"></span>
                        </label>
                        <label class="pref-tenant">Doesn't matter
                            <input type="radio" name="radio2" value="Doesn't Matter">
                            <span class="checkmark1"></span>
                        </label>
                        <span class="filter-panel-header">Furnishing Type</span>
                        <label class="furn">Full
                            <input type="radio" name="radio3" value="Full">
                            <span class="checkmark3"></span>
                        </label>
                        <label class="furn">Semi
                            <input type="radio" name="radio3" value="Semi">
                            <span class="checkmark3"></span>
                        </label>
                        <label class="furn">Unfurnished
                            <input type="radio" name="radio3" value="Unfurnished">
                            <span class="checkmark3"></span>
                        </label>
                        <span class="filter-panel-header">
                            <button type="submit" style="color:black; margin-top:15px;">Confirmed?</button>
                        </span>
                    </div>
                </form>
            </div>
            <div class="col-md-8">
                <div class="page-cards">
                    <?php if($s1->rowCount()==0):?>
                    <div class="home-card" style="text-align: center;">
                        <h1 style="font-weight: bold; font-family: sans serif;">There are no houses matching your requirements</h1>
                    </div>
                    <?php else:
                        foreach($s1 as $row):
                    ?>
                    <a href="viewhome.php?id=<?=$row['id_house']?>" id="something">
                    <div class="home-card">
                        <div class="row" style="background-color: lightgrey; padding:5px;">
                            <p class="house-name">Name of the House :<?=$row['name']?></p>
                        </div>
                        <div class="row">
                            <div class="col-md-4" id="house-detail">
                                <p>Builtup</p>
                                <p><?=$row['builtup']?></p>
                            </div>
                            <div class="col-md-4" id="house-detail">
                                <p>Deposit</p>
                                <p><?=$row['deposit']?></p>
                            </div>
                            <div class="col-md-4" id="house-detail">
                                <p>Rent</p>
                                <p><?=$row['rent']?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6" style="color:black">
                                <i class="fa fa-couch" style="font-size:30px"></i>
                                <p>FURNISHING : <?=$row['furnishing']?></p>
                            </div>
                            <div class="col-md-6" style="color:black">
                                <i class="fa fa-birthday-cake" aria-hidden="true" style="font-size:30px"></i>
                                <p>AGE OF THE BUILDING : <?=$row['age']?></p>
                            </div>
                            <div class="col-md-6" style="color:black">
                                <i class="fa fa-user" aria-hidden="true" style="font-size:30px"></i>
                                <p>PREFERRED TENANTS : <?=$row['pt']?></p>
                            </div>
                            <div class="col-md-6" style="color:black">
                                <i class="fa fa-key" aria-hidden="true" style="font-size:30px"></i>
                                <p>AVAILABILITY : <?=$row['availability']?></p>
                            </div>
                        </div>
                    </div>
                    </a>
                    <?php
                        endforeach;
                        endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>