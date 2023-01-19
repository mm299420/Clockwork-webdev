<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <script src="../JS/script.js"></script>
    <link rel="icon" href="../IMG/cicada.png" type="image/png">
    <link rel="stylesheet" type="text/css" href="../CSS/style.css">
    <script>
	function home() {
    		menu = document.getElementById("HomeMenu");
    		if (menu.style.display == "none") {
			menu.style.display = "block";
    		} else {
        		menu.style.display = "none";
    		}
	}
    </script>
</head>
<body onclick="home()">
    <div id="HomeBTN" class="btn home img" onclick="home()">
        <img class="img" id="HomeIMG" onclick="home()" src="../images/menu.png" height="96" width="96"/>
    </div>
</body>
</html>
