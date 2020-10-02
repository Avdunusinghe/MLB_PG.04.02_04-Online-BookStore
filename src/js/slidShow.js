var i = 0; // Start point
var images = [];
var time = 4000;

// Image List
images[0] = '../src/Images/Slidshow_1.jpg';
images[1] = '../src/Images/Slideshow_2.jpg';
images[2] = '../src/Images/Slideshow_3.jpg';


// Change Image
function changeImg(){
    document.slide.src = images[i];

    if(i < images.length - 1){
        i++;
    } else {
        i = 0;
    }

        setTimeout("changeImg()", time);
    }

    window.onload = changeImg;