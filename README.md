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

								
  This file creates the number cell grid for secure password image used in passwd_square.php.
