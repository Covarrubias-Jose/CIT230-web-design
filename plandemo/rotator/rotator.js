/* 
this now is configired to the assignment to manage the pictures
 */

// these link the location 
var mainImage = document.getElementById("mainImage");
var mainImageCaption = document.getElementById("mainImageCaption");

// these are the arrays
var imageArray = ["canyonpix/blooms.jpg", "canyonpix/colorado.jpg", "canyonpix/erosion.jpg", "canyonpix/riverbottom.jpg", "canyonpix/weather.jpg"];
var captionArray = ["Cacti in bloom in the Grand Canyon", "The Colorado River in the Canyon", "Erosion formed the Grand Canyon", "The Colorado from the trail", "Weather changes frequentlyin the canyon"];

// this gives  the starting value
var imageIndex = 1;
var captionIndex = 1;

// this is the array 
function changeImage(){
    mainImage.setAttribute("src", imageArray[imageIndex]);
    mainImage.setAttribute("alt", captionArray[captionIndex]);
    mainImageCaption.innerHTML = captionArray[captionIndex];
    imageIndex++;
    captionIndex++;
    if (imageIndex >= imageArray.length){
        imageIndex = 0;
        captinIndex = 0;
    }
}

// 1000 milliseconds = 1 second
// ratate the image using teh function every 5 seconds
var rotateAction = setInterval(changeImage, 5000);

// clearInterval stops the rotation from happening
mainImage.onmouseover = function (){
    clearInterval (rotateAction);
};

// restarts the rotation from it was before
mainImage.onmouseout = function (){
    rotateAction = setInterval(changeImage, 5000);
};