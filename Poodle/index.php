<html>

<head>
    <link rel="stylesheet" type="text/css" href="assets/styles/style.css" />
    <title>Search</title>
</head>

<body>
    <div class="wrapper homepage">
        <div class="mainsection">
            <div class="image_container">
                <img src="assets/images/Logo-Poodle.jpg" />
            </div>
            <div class="search_container">
                <form action="results.php" method="GET">
                    <input type="text" class="search_box" name="searchTerm" />
                    <input type="submit" class="search_btn" value="Search" />
                </form>
            </div>
        </div>
    </div>
    <form action="webcrawler.php" method="GET">
                    <input type="text" name="searchTerm" />
                    <input type="submit" class="search_btn" value="Input link to Parse" />
                </form>
</body>
 
</html>