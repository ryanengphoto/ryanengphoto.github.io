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