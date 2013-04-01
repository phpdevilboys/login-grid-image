Secure Login Grid Image
========================

This file is used to create image with random numbers on different Cells And do the login validation. For this i have followed certain steps:

  1) Create local variables for loop to be select random numbers ("numberSequence", "numberDisplaySequence").
  
  2) Create mapImage array for matrix.
  
  3) Create blank image of 139 X 129.
  
  4) Create color code with "imagecolorallocate".
  
  5) DRAW horizontal lines on image "imageline".
  
  6) DRAW vertical lines on image "imageline".
  
  7) Fill background as white to the number "imagefilledrectangle" "imagefttext";
  
  8) Store Number Information in session.
  
  9)  Save image with name as session ID "imagepng".
						
  This file creates the number cell grid for secure password image used in codecheck.php.
  
Secure Login Grid Image: Usage
===============================

1) Point browser to codecheck.php this will generate a image with random number on image. Now to you need to click on numbers of your choice and press GO.
2) Screen 2 will show you the exact number which you have clicked on Image.
3) You can use this as Login verification code.

Contact Me
===========
Feel free to contact me you need any help or have some suggestion on this.
Email:
	anoop.immortal@gmail.com
	phpdevilboys@gmail.com
Skype:
	anoop.immortal
	phpdevilboys	
