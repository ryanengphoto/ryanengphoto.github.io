<!DOCTYPE html>

<head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
    <style>

        /* grid container */
        .left-sidebar-grid {
            display:grid;
            grid-template-areas:
                'header'
                'main-content'
                'left-sidebar'
                'footer';
            grid-template-rows:auto 1fr auto;
            grid-template-columns:100%;

            /* fallback height */
            min-height:100vh;

            /* new small viewport height for modern browsers */
            min-height:100svh;
        }

        /* general column padding */
        .left-sidebar-grid > * {
            padding:1rem;
        }

        /* assign columns to grid areas */
        .left-sidebar-grid > .header {
            grid-area:header;

            display: grid;
            grid-template-columns: subgrid;
            grid-template-columns: repeat(5, 1fr);
            align-items: center;
        
        }
        .left-sidebar-grid > .main-content {
            grid-area:main-content;
            background:#fff;
            display: grid;
            grid-template-columns: subgrid;
            grid-template-columns: repeat(4, 1fr);
        }

        .left-sidebar-grid > .left-sidebar {
            grid-area:left-sidebar;

            
        }
        .left-sidebar-grid > .right-sidebar {
            grid-area:right-sidebar;

        }
        .left-sidebar-grid > .footer {
            grid-area:footer;

            text-align: center;
            font-family: verdana;
            font-size: .8vw;
        }

        .header > .logo {
            grid-area: logo;

            text-align: center;
        }

        .header > .navigation {
            grid-area: navigation;

            text-align: center;
            font-size: 2vw;
            font-family:Verdana;
        }

        .header > .instagram {
            grid-area: instagram;

            text-align: center;
        }
        


        .main-content > .content {
            grid-area: content;
        }

        .content > p{
            font-family: Verdana;
            font-size: .7vw;
            text-align: left;
        }

        .content > h2 {
            font-family: Verdana;
            font-size: 1vw;
            text-align: left; 
            font-weight: 1;
        }

        .content > h3 {
            font-family: Verdana;
            font-size: .7vw;
            text-align: left; 
            font-weight: 1;
        }

        /* tablet breakpoint */
        @media (min-width:768px) {
            .left-sidebar-grid {
                grid-template-columns:repeat(5, 1fr);
                grid-template-areas:
                    'header header header header header'
                    'left-sidebar main-content main-content main-content main-content'
                    'footer footer footer footer footer';
            }

            .header {
                grid-template-areas: 
                'logo navigation navigation navigation instagram';
            }

            .main-content {
                grid-template-areas: 
                'content content content whitespace';
            }
        }

        .sidebarmenu {
            width: 70%;
            margin: 0 auto;
            height: 100%;
        }
        /* unvisited link */
        .navigation > a:link, .sidebarmenu a:link {
            color: black;
            text-decoration: none;
        }

        /* visited link */
        .navigation > a:visited, .sidebarmenu a:visited {
            color: black;
            text-decoration: none;
        }

        /* mouse over link */
        .navigation > a:hover, .sidebarmenu a:hover {
            background-color: #f5f5f5;
            text-decoration: none;

        }

        /* selected link */
        .navigation > a:active, .sidebarmenu a:active {
            background-color: #f5f5f5;
            text-decoration: none;
        }
        

        .dropbtn {
        color: black;
        padding: 4%;
        font-size: 1vw;
        font-family: verdana;
        border: none;
        background-color: white;
        }

        .dropdown {
        position: relative;
        display: block;
        text-align: center;
        background-color: white;
        }

        .dropdown-content {
        display: block;
        position: relative;
        background-color: white;
        min-width: 160px;
        box-shadow: 0% 2% 4% 0% rgba(0,0,0,0.2);
        z-index: 1;
        }

        .dropdown-content a {
        color: black;
        padding: 4%;
        text-decoration: none;
        font-family: verdana;
        font-size: .8vw;
        display: block;
        }

        .currentpage {
            background-color: #f5f5f5;
            padding: .5%;
        }

        .unselectedpage {
            background-color: white;
            padding: .5%;
        }

        .content img {
            width: 100% !important;
            height: auto !important;
            margin-bottom:5px; /* to match column gap */
        }

        .content {
            line-height:0;
            -webkit-column-count:3; /* split it into 5 columns */
            -webkit-column-gap:1%; /* give it a 5px gap between columns */
            -moz-column-count:3;
            -moz-column-gap:1%;
            column-count:3;
            column-gap:1%;
        }

        /* The Modal (background) */
        .modal {
        display: none;
        position: fixed;
        z-index: 1;
        padding-top: 100px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.7);
        }

        /* Modal Content */
        .modal-content {
        position: relative;
        background-color: #fefefe;
        margin: auto;
        padding: 0;
        height: 75vh;
        max-width: 80%;
        padding: 2%;
        }

        .modal-content img {
        height: 100%;
        width: auto;
        object-fit: contain;
        }

        /* The Close Button */
        .close {
        color: white;
        position: absolute;
        top: 5%;
        right: 4%;
        font-size: 2vw;
        font-weight: bold;
        }

        .close:hover,
        .close:focus {
        color: #999;
        text-decoration: none;
        cursor: pointer;
        }

        .mySlides {
        display: none;
        height: 100%;
        }

        .cursor {
        cursor: pointer;
        }

        /* Next & previous buttons */
        .prev,
        .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        padding: .8%;
        color: black;
        font-weight: bold;
        font-size: 2vw;
        transition: 0.6s ease;
        border-radius: 0 1% 1% 0;
        user-select: none;
        -webkit-user-select: none;
        }

        .prev {
        left: 2%;
        border-radius: 1% 0 0 1%;
        }
        /* Position the "next button" to the right */
        .next {
        right: 2%;
        border-radius: 1% 0 0 1%;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover,
        .next:hover {
        background-color: rgba(0, 0, 0, 0.212);
        }

        img {
        margin-bottom: -4px;
        }

        .demo {
        opacity: 0.6;
        }

        .active,
        .demo:hover {
        opacity: 1;
        }

        img.hover-shadow {
        transition: 0.3s;
        }

        .hover-shadow:hover {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
    </style>

    <title> Ryan Eng Photo | Cars and Street </title>
    <link rel="shortcut icon" type="image/png" href="C:\Users\Ryan\Downloads\photo logo v2.png"/>

</head>

<div class="left-sidebar-grid">

    <header class="header">
        <div class="logo">
            <img src="C:\Users\Ryan\Downloads\photo logo v2.png" alt="logo" style="width: 60%; height: 100%;">
        </div>

        <div class="navigation">
            <a class="currentpage" href="J:\VSCode C\website\index.html">Portfolio</a>
            <a class="unselectedpage"href="J:\VSCode C\website\about.html">About</a>
            
        </div>

        <div class="instagram">
            <a href="https://www.instagram.com/ryanengphoto/" target="_blank"><img src="C:\Users\Ryan\Downloads\instagram.png" alt="instagram logo" style="width:10%; height:100%;"></a>
        </div>


    </header>
    
    <section class="left-sidebar">
        <div class="sidebarmenu">
            <div class="dropdown">
              <button class="dropbtn">Florida</button>
              <div class="dropdown-content">
              <a href="J:\VSCode C\website\index.html" class="sidebarlink">Wildlife</a>
              <a href="J:\VSCode C\website\nature.html" class="sidebarlink">Nature and Landscape</a>
              <a href="J:\VSCode C\website\street.html" class="sidebarlink">Cars and Street</a>
              </div>
          </div>
      <div class="dropdown">
          <button class="dropbtn">Trips</button>
          <div class="dropdown-content">
          <a href="J:\VSCode C\website\iceland.html" class="sidebarlink">Iceland 2023</a>
          <a href="J:\VSCode C\website\tucson.html" class="sidebarlink">Tucson 2023</a>
          <a href="J:\VSCode C\website\montreal.html" class="sidebarlink">Montreal 2022</a>
          </div>
            </div>
        </div>
    </section>

    <main class="main-content">
        
        <div class="content">
            
            <?php
            // open this directory 
            $myDirectory = opendir("Street/");
             
            // get each entry
            while($entryName = readdir($myDirectory)) {
            $dirArray[] = $entryName;
            }
            
            // close directory
            closedir($myDirectory);
            
            //	count elements in array
            $indexCount	= count($dirArray);
            
            // loop through the array of files and print them all in a list
            for($index=0; $index < $indexCount; $index++) {
                $extension = substr($dirArray[$index], -3);
                if ($extension == 'jpg'){ // list only jpgs
                echo '<img src="Street/' . $dirArray[$index] . '" onclick="openModal();currentSlide(' . $index . ')" class="hover-shadow cursor"> 
                ';
            
            
                } 
                }
            
            echo '</div>
            
            <div id="myModal" class="modal">
                <span class="close cursor" onclick="closeModal()">&times;</span>
                <div class="modal-content">
                ';
            
            
            
            for($index=0; $index < $indexCount; $index++) {
                $extension = substr($dirArray[$index], -3);
                if ($extension == 'jpg'){ // list only jpgs
                    $actualindex = $index - 1;
                    echo '<div class="mySlides">
                    <img src="Street/' . $dirArray[$actualindex] . '" style="width:100%">
                  </div>
                  ';
                }
                }
                
            for($index=0; $index == $indexCount; $index++) {
                $extension = substr($dirArray[$index], -3);
                if ($extension == 'jpg'){ // list only jpgs
                    echo '<div class="mySlides">
                    <img src="Street/' . $dirArray[$index] . '" style="width:100%">
                    </div>
                    ';
                }
                }
            ?>

        
          
          <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides(1)">&#10095;</a>
      
      
      </div>
      
     
    </main>


    


    <footer class="footer">
        <p>© 2023 Ryan Eng</p>
        <p>ryanengphotobusiness@gmail.com</p>
    </footer>

    <script>
        function openModal() {
          document.getElementById("myModal").style.display = "block";
        }
        
        function closeModal() {
          document.getElementById("myModal").style.display = "none";

        }
        
        var slideIndex = 1;
        showSlides(slideIndex);
        
        function plusSlides(n) {
          showSlides(slideIndex += n);
        }
        
        function currentSlide(n) {
          showSlides(slideIndex = n);
        }
        
        function showSlides(n) {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("demo");
          var captionText = document.getElementById("caption");
          if (n > slides.length) {slideIndex = 1}
          if (n < 1) {slideIndex = slides.length}
          for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";
          }
          for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";
          dots[slideIndex-1].className += " active";
          captionText.innerHTML = dots[slideIndex-1].alt;
        }
        </script>
</div>