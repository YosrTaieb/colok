<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../build/styles/navCalendar.css">
  <script src="https://kit.fontawesome.com/3b1384a103.js" crossorigin="anonymous"></script>
</head>
<body>
  <nav>
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
    <i class="fas fa-bars"></i>
    </label>
    <ul>
      <li>
        <a href="../view/form-idees.php"><i class="fas fa-lightbulb"></i>Boîte à idées
        </a>
      </li>
      <li>
        <a href="calendrier.php"><i class="far fa-calendar-alt"></i>Planning
        </a>
      </li>
    </ul>
    <div class="nav-img">
      <img src="../assets/images/logo-colok.svg" alt="">
    </div>
    <!-- <label class="logo" for="">Colok</label> -->
    <ul>
      <li>
        <a href="../view/mesTaches.php"><i class="fas fa-tasks"></i>Mes Tâches
        </a>
      </li>
      <li>
        <a href="../view/forms.php"><i class="fas fa-home"></i>Profil Maison
        </a>
      </li>
    </ul>
    <style>*{
	padding: 0px;
	margin: 0px;
}
body {
	font-family: sans-serif;
}
nav {
	display: flex;
	align-items: center;

	height: 60px;
	position: relative;
}
.icon {
	cursor: pointer;
	margin-right: 50px;
	line-height: 60px;
}
.icon span {
	background: #f00;
	padding: 7px;
	border-radius: 50%;
	color: #fff;
	vertical-align: top;
	margin-left: -25px;
}
.icon img {
	display: inline-block;
	width: 40px;
	margin-top: 20px;
}
.icon:hover {
	opacity: .7;
}

.logo {
	flex: 1;
	margin-left: 50px;
	color: #eee;
	font-size: 20px;
	font-family: monospace;
}

.notifi-box {
	width: 300px;
	height: 0px;
	opacity: 0;
	position: absolute;
	top: 63px;
	right: 35px;
	transition: 1s opacity, 250ms height;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.notifi-box h2 {
	font-size: 14px;
	padding: 10px;
	border-bottom: 1px solid #eee;
	color: #999;
}
.notifi-box h2 span {
	color: #f00;
}
.notifi-item {
	display: flex;
	border-bottom: 1px solid #eee;
	padding: 15px 5px;
	margin-bottom: 15px;
	cursor: pointer;
}
.notifi-item:hover {
	background-color: #eee;
}
.notifi-item img {
	display: block;
	width: 50px;
	margin-right: 10px;
	border-radius: 50%;
}
.notifi-item .text h4 {
	color: #777;
	font-size: 16px;
	margin-top: 10px;
}
.notifi-item .text p {
	color: #aaa;
	font-size: 12px;
}</style>
<div class="icon" onclick="toggleNotifi()">
			<img src="../assets/images/icons8-rappels-de-rendez-vous.gif" alt=""> <span>17</span>
		</div>
		<div class="notifi-box" id="box">
			<h2>Notifications <span>17</span></h2>
			<div class="notifi-item">
				<img src="img/avatar1.png" alt="img">
				<div class="text">
				   <h4>Elias Abdurrahman</h4>
				   <p>@lorem ipsum dolor sit amet</p>
			    </div> 
			</div>

			<div class="notifi-item">
				<img src="img/avatar2.png" alt="img">
				<div class="text">
				   <h4>John Doe</h4>
				   <p>@lorem ipsum dolor sit amet</p>
			    </div> 
			</div>

			<div class="notifi-item">
				<img src="img/avatar3.png" alt="img">
				<div class="text">
				   <h4>Emad Ali</h4>
				   <p>@lorem ipsum dolor sit amet</p>
			    </div> 
			</div>

			<div class="notifi-item">
				<img src="img/avatar4.png" alt="img">
				<div class="text">
				   <h4>Ekram Abu </h4>
				   <p>@lorem ipsum dolor sit amet</p>
			    </div> 
  </nav>
</body>
</html>