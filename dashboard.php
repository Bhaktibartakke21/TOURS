<!DOCTYPE html> 
<html lang="en"> 

<head> 
	<meta charset="UTF-8"> 
	<meta http-equiv="X-UA-Compatible"
		content="IE=edge"> 
	<meta name="viewport"
		content="width=device-width, 
				initial-scale=1.0"> 
	<title> Tour Admin </title> 
	<link rel="stylesheet"
		href="Adminstyle.css"> 
	<link rel="stylesheet"
		href="adminresponsive.css"> 
</head> 

<body> 
	
	<!-- for header part -->
	<header> 

		<div class="logosec"> 
			<div class="logo">TOUR</div> 
			<img src= "https://media.geeksforgeeks.org/wp-content/uploads/20221210182541/Untitled-design-(30).png"
				class="icn menuicn"
				id="menuicn"
				alt="menu-icon"> 
		</div> 

		<div class="searchbar"> 
			<input type="text"
				placeholder="Search"> 
			<div class="searchbtn"> 
			<img src= "https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png"
					class="icn srchicn"
					alt="search-icon"> 
			</div> 
		</div> 

		<div class="message"> 
			<div class="circle"></div> 
			<img src= "https://media.geeksforgeeks.org/wp-content/uploads/20221210183322/8.png"
				class="icn"
				alt=""> 
			<div class="dp"> 
			<img src= "https://media.geeksforgeeks.org/wp-content/uploads/20221210180014/profile-removebg-preview.png"
					class="dpicn"
					alt="dp"> 
			</div> 
		</div> 

	</header> 

	<div class="main-container"> 
		<div class="navcontainer"> 
			<nav class="nav"> 
				<div class="nav-upper-options"> 
					<div class="nav-option option1"> 
						<img src= "https://media.geeksforgeeks.org/wp-content/uploads/20221210182148/Untitled-design-(29).png"
							class="nav-img"
							alt="dashboard"> 
						<h3> Dashboard</h3> 
					</div> 

					<div class="option2 nav-option"> 
						<img src= "https://cdn-icons-png.flaticon.com/128/456/456212.png"
							class="nav-img"
							alt="articles"> 
							<a href="report.php"><h3> User</h3></a>
					</div> 

					<div class="nav-option option3"> 
						<img src= "https://cdn-icons-png.flaticon.com/128/5067/5067238.png"
							class="nav-img"
							alt="report"> 
						<a href="packagereport.php"><h3> Packages</h3></a>
					</div> 

					<div class="nav-option option4"> 
						<img src= "https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/6.png"
							class="nav-img"
							alt="institution"> 
							<a href="contactreport.php"><h3> Contact</h3></a>
					</div> 

					<div class="nav-option option5"> 
						<img src= "https://cdn-icons-png.flaticon.com/128/5067/5067238.png"
							class="nav-img"
							alt="blog"> 
							<a href="feedreport.php"><h3> Feedback</h3></a>
					</div> 

					<div class="nav-option option6"> 
						<img src= "https://cdn-icons-png.flaticon.com/128/2460/2460737.png"
							class="nav-img"
							alt="settings"> 
							<a href="bookingreport.php"><h3> Booking</h3></a> 
					</div> 

					<div class="nav-option logout"> 
						<img src= "https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/7.png"
							class="nav-img"
alt="logout"> 
						<a href="Home.php"><h3>Logout</h3></a>
					</div> 

				</div> 
			</nav> 
		</div> 
		<div class="main"> 

			<div class="searchbar2"> 
				<input type="text"
					name=""
					id=""
					placeholder="Search"> 
				<div class="searchbtn"> 
				<img src= "https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png"
						class="icn srchicn"
						alt="search-button"> 
				</div> 
			</div> 

			<div class="box-container"> 

				<div class="box box1"> 
					<div class="text"> 
						<a href="report.php"><h2 class="topic-heading">User</h2></a>
						
					</div> 

					<img src= "https://cdn-icons-png.flaticon.com/128/456/456212.png"
						alt="Views"> 
				</div> 

				<div class="box box2"> 
					<div class="text"> 
						<a href="packagereport.php"><h2 class="topic-heading">Packages</h2></a> 
						
					</div> 

					<img src= "https://cdn-icons-png.flaticon.com/128/5067/5067238.png"
						alt="likes"> 
				</div> 

				<div class="box box3"> 
					<div class="text"> 
						<a href="contactreport.php"><h2 class="topic-heading">Contact</h2></a>
					</div> 

					<img src= "https://cdn-icons-png.flaticon.com/128/10439/10439779.png"
						alt="comments"> 
				</div> 

				<div class="box box4"> 
					<div class="text"> 
						<a href="feedreport.php"><h2 class="topic-heading">Feedback</h2></a>
						 
					</div> 

					<img src= "https://cdn-icons-png.flaticon.com/128/2931/2931239.png" alt="published"> 
				</div> 

                <div class="box box5"> 
					<div class="text"> 
						<a href="bookingreport.php"><h2 class="topic-heading">Booking</h2></a>
						
					</div> 

					<img src= "https://cdn-icons-png.flaticon.com/128/2460/2460737.png" alt="published"> 
				</div> 


                <div class="box box6"> 
					<div class="text"> 
						<h2 class="topic-heading">Report</h2> 
						<h2 class="topic">6</h2> 
					</div> 

					<img src= "https://cdn-icons-png.flaticon.com/128/9909/9909941.png" alt="published"> 
				</div> 

            
			</div> 
				</div> 
			</div> 
		</div> 
	</div> 

	<script src="./index.js"></script> 
</body> 
</html>