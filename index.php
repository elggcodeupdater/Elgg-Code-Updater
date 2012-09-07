<html>
<head>
<title>Elgg Code Updater</title>
</head>
<body style="font-family: Arial">
<h1>Welcome to the Elgg Code Updater</h1>
This is a system that will eventually save a lot of time with updating deprecated messages into the newest elgg version. Our plan is to create a large group of developers on github willing to spend there free time working on the system. People who don't want to the join the Organization can feel free to open a pull request. This was started by an 11 year old kid who didn't like fixing deprecated errors. All you will have to do is enter the code and it will make it compatable with the elgg version you select (Only supported elgg versions). We will also have an textbox that shows the code with no changes if this system doesn't work. We will be working on mostly the functions to update before we work on the design of the site.  
<h3 style="color:red">This is still being developed. DON'T use this on a production site.</h3>
<h3 style="color:blue">This system is open-source. You can download it from our github page.</h3>
<form name="submit" action="result.php" method="POST">
<b>The code to update. EX: elgg_get_site_url()</b><br><textarea style="width: 100%; height: 500px;" name="code"></textarea>
<input type="submit" value="Go" />
</form>
</body>
</html>