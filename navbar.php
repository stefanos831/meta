

<style>
 
body {
background-color: black;    
overflow: hidden;
} 
 
.navbar {
position: absolute;
top: 0px;
z-index: 9999999999999999999!important;
display: flex;
width: 100vw;
height: auto;

} 

.logoutBTN {
position: absolute;
top: 0px;
right: 0vw!important;
z-index: 9999999999!important;
height: 50px;
width: 50px; 
}
   
.searchBTN {
height: 50px;
width: 50px; 
display: none!important;
}   

.bookmarkBTN {
height: 50px;
width: 50px;    
} 

.profileBTN {
height: 50px;
width: 50px;    
} 

.navbar a.active {
	background-color: #C67C66;
	border: 1px solid white;
}
</style>


<div class="navbar">
<!-- <a class="searchBTN" > <img src="Images/Meta_Library-05.png" /> </a> -->
<a class="bookmarkBTN" id="bookmarkBTN" onclick="showSearchScreen();" > <img src="Images/Meta_Library-06.png" /> </a>
<a class="profileBTN" id="profileBTN"  onclick="showProfileScreen();"> <img src="Images/Meta_Library-07.png" /> </a>
</div>

<a class="logoutBTN" href='AccountComponent/logout.php'> <img src="Images/Meta_Library-08.png" /> </a>

 <script src='jquery.js'></script>
<script>
//$('.navbar a').click(function() {
//$('.navbar a').removeClass('active');
//$(this).addClass('active');
//});
</script>

