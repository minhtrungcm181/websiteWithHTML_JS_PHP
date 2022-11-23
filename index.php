<?php
		if (isset($_GET['page']) && $_GET['page'] == 'home')
        { include("home.php");}

        else if (isset($_GET['page']) && $_GET['page'] == 'login')
        { include("login.html");}

        else if (isset($_GET['page']) && $_GET['page'] == 'contact')
        { include("contact.php");}

        else if (isset($_GET['page']) && $_GET['page'] == 'product')
        { include("product.php");}
        else {
            include("home.php");
          }
	?>