<!DOCTYPE html>
<html>

<head>

        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Online Coding</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/style1.css">
   
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="js/vendor/jquery-1.12.0.min.js"></script>
		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
		
		
<style>
hr.new5 {
  border: 10px solid black;
  border-radius: 5px;
}
.footer-dark {
  padding:50px 0;
  color:#f0f9ff;
  background-color:#282d32;
}

.footer-dark h3 {
  margin-top:0;
  margin-bottom:12px;
  font-weight:bold;
  font-size:16px;
}

.footer-dark ul {
  padding:0;
  list-style:none;
  line-height:1.6;
  font-size:14px;
  margin-bottom:0;
}

.footer-dark ul a {
  color:inherit;
  text-decoration:none;
  opacity:0.6;
}

.footer-dark ul a:hover {
  opacity:0.8;
}

@media (max-width:767px) {
  .footer-dark .item:not(.social) {
    text-align:center;
    padding-bottom:20px;
  }
}

.footer-dark .item.text {
  margin-bottom:36px;
}

@media (max-width:767px) {
  .footer-dark .item.text {
    margin-bottom:0;
  }
}

.footer-dark .item.text p {
  opacity:0.6;
  margin-bottom:0;
}

.footer-dark .item.social {
  text-align:center;
}

@media (max-width:991px) {
  .footer-dark .item.social {
    text-align:center;
    margin-top:20px;
  }
}

.footer-dark .item.social > a {
  font-size:20px;
  width:36px;
  height:36px;
  line-height:36px;
  display:inline-block;
  text-align:center;
  border-radius:50%;
  box-shadow:0 0 0 1px rgba(255,255,255,0.4);
  margin:0 8px;
  color:#fff;
  opacity:0.75;
}

.footer-dark .item.social > a:hover {
  opacity:0.9;
}

.footer-dark .copyright {
  text-align:center;
  padding-top:24px;
  opacity:0.3;
  font-size:13px;
  margin-bottom:0;
}
.box{
  background-color: lightgrey;
  width: 500px;
  border: 10px solid green;
  padding: 50px;
  margin: 20px;
}
.flex-parent {
  display: flex;
  justify-content: center;
  align-items: center;
}
#myDIV {
 	
  width: 100%;
  padding: 50px 0;
  text-align: left;
  
  margin-top: 20px;
}

.hide{display:none;}
.showP{display:block}
  
</style>

</head>

<body>
<script>
function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
function myFunction2() {
  var x = document.getElementById("myDIV1");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
function myFunction3() {
  var x = document.getElementById("myDIV2");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
function myFunction4() {
  var x = document.getElementById("myDIV3");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}




</script>

 <h1> &nbsp; &nbsp; C Language Simple Programming Questions</h1>

<div class="flex-parent">
  <div class="box">

  
<p><b><u>Excercise 1 : Create a Program to Find the Size of Variables (int, float, double and char)</b> </u><br>
    Step I    - Create a main class<br>
    Step II   - Get familiar with variable types<br>
	Step III  - Declare variables<br>
	Step IV   - Create printing statements 

</p>

<button onclick="myFunction()" >Hide Answer and Try</button>

<div id="myDIV">
<p> 
#include<stdio.h> <br><br>
int main() { <br> <br>
    int intType;<br>
    float floatType;<br>
    double doubleType;<br>
    char charType;<br>
<br>
    // sizeof evaluates the size of a variable<br>
  &nbsp;  printf("Size of int: %zu bytes\n", sizeof(intType));<br>
 &nbsp;   printf("Size of float: %zu bytes\n", sizeof(floatType));<br>
 &nbsp;   printf("Size of double: %zu bytes\n", sizeof(doubleType));<br>
&nbsp;    printf("Size of char: %zu byte\n", sizeof(charType));<br>
    <br>
    return 0;<br>
}<br>
<br>
</p>
</div>

</div>

  <div class="box">
  
  <p><b><u>Excercise 2 : Create a Program to Find the Largest Number Among Three Numbers</b> </u><br>
    Step I    - Create a main class<br>
    Step II   - Declare variables<br>
	Step III  - Using if-else statements create arguments<br>
	Step IV   - Create printing statements 
</p>

<button onclick="myFunction2()" >Hide Answer and Try</button>

<div id="myDIV1">
<p> <br>
#include<stdio.h> <br>
int main() {<br>
    double n1 = 10.2;<br>
   double n2 = 1.02;<br>
    double n3 = 50.5;<br>
<br>
<br>
    // if n1 is greater than both n2 and n3, n1 is the largest<br>
    if (n1 >= n2 && n1 >= n3)<br>
        printf("%.2f is the largest number.", n1);<br>
<br>
    // if n2 is greater than both n1 and n3, n2 is the largest<br>
    if (n2 >= n1 && n2 >= n3)<br>
        printf("%.2f is the largest number.", n2);<br>
<br>
    // if n3 is greater than both n1 and n2, n3 is the largest<br>
    if (n3 >= n1 && n3 >= n2)<br>
        printf("%.2f is the largest number.", n3);<br>

    return 0;<br>

}<br>
<br>
</p>
</div>

</div>

</div>
  
</div>

------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


<h1> &nbsp; &nbsp; JAVA Language Simple Programming Questions</h1>

<div class="flex-parent">
  <div class="box">

  
<p><b><u>Excercise 1 : Generate Multiplication Table using for loop</b> </u><br>
    Step I    - Create a main class<br>
    Step II   - Declare variables<br>
	Step III  - Create a loop<br>
	Step IV   - Create printing statements 

</p>

<button onclick="myFunction3()" >Hide Answer and Try</button>

<div id="myDIV2">
<p> 
#include<stdio.h> <br><br>
public class MultiplicationTable { <br>
<br>
    public static void main(String[] args) {<br>
<br>
        int num = 5;<br>
        for(int i = 1; i <= 10; ++i)<br>
        {<br>
            System.out.printf("%d * %d = %d \n", num, i, num * i);<br>
   &nbsp;   &nbsp;  }<br>
  &nbsp;  }<br>
}<br>
<br>
</p>
</div>

</div>

  <div class="box">
  
  <p><b><u>Excercise 2 : Create a Program to Check whether a number is even or odd using if...else statement</b> </u><br>
    Step I    - Import java.util.Scanner package<br>
	Step II - Create a main class<br>
    Step III   - Declare variables<br>
	Step IV - Create an object <br>
	Step V  - Using if-else statements create arguments<br>
	Step VI   - Create printing statements 
</p>

<button onclick="myFunction4()" >Hide Answer and Try</button>

<div id="myDIV3">
<p> <br>
import java.util.Scanner;<br>
<br>
public class EvenOdd {<br>
<br>
    public static void main(String[] args) {<br>
<br>
        Scanner reader = new Scanner(System.in);<br>
<br>
        System.out.print("Enter a number: ");<br>
        int num = reader.nextInt();<br>
<br>
        if(num % 2 == 0)<br>
            System.out.println(num + " is even");<br>
        else<br>
            System.out.println(num + " is odd");<br>
     &nbsp;  &nbsp;   }<br>
}<br>
<br>
</p>
</div>

</div>

</div>
  
</div>









<div class="col-sm-1">

</div>

<div class="col-sm-1">
  
</div>

</div>




<div class="row cspace">
<div class="col-sm-8">
<div class="form-group">
<form action="compile.php" id="form" name="f2" method="POST" >
&nbsp; &nbsp;  &nbsp; &nbsp; <label for="lang">Choose Language</label>

&nbsp; &nbsp;  &nbsp; &nbsp; <select class="form-control" name="language">
<option value="c">C</option>
<option value="cpp">C++</option>


<option value="java">Java</option>


</select><br><br>

&nbsp; &nbsp;  &nbsp; &nbsp;<label for="ta">Write Your Code</label>
&nbsp; &nbsp;  &nbsp; &nbsp;<textarea class="form-control" name="code" rows="10" cols="50"></textarea><br><br>

&nbsp; &nbsp;  &nbsp; &nbsp;<input type="submit" id="st" class="btn btn-success" value="Run Code"><br><br><br>


</form>

<script type="text/javascript">
  
  $(document).ready(function(){

     $("#st").click(function(){
  
           $("#div").html("Loading ......");


     });

  });


</script>

<script>
//wait for page load to initialize script
$(document).ready(function(){
    //listen for form submission
    $('form').on('submit', function(e){
      //prevent form from submitting and leaving page
      e.preventDefault();

      // AJAX 
      $.ajax({
            type: "POST", //type of submit
            cache: false, //important or else you might get wrong data returned to you
            url: "compile.php", //destination
            datatype: "html", //expected data format from process.php
            data: $('form').serialize(), //target your form's data and serialize for a POST
            success: function(result) { // data is the var which holds the output of your process.php

                // locate the div with #result and fill it with returned data from process.php
                $('#div').html(result);
            }
        });
    });
});


</script>

&nbsp; &nbsp;  &nbsp; &nbsp;<label for="out">Output</label>
<textarea id='div' class="form-control" name="output" rows="10" cols="50"></textarea><br><br>

<!--<script>
"use strict";
function submitForm(oFormElement)
{
  var xhr = new XMLHttpRequest();
  var display=document.getElementById('div');
  xhr.onload = function(){ display.innerHTML=xhr.responseText; }
  xhr.open (oFormElement.method, oFormElement.action, true);
  xhr.send (new FormData (oFormElement));
  return false;
}
</script>-->
<!--<label for="out">Output</label>
<textarea id='div' class="form-control" name="output" rows="10" cols="50"></textarea><br><br>-->




</div>
</div>

<div class="col-sm-4">

  
</div>
</div>
</div>



</div>
</div>
</div>
</div>




<hr class="new5">


<div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    
                    <div class="col-sm-6 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="http://bluechiptech.asia/about/">Company</a></li>
                            <li><a href="http://bluechiptech.asia/services/">Services</a></li>
                            <li><a href="http://bluechiptech.asia/technologies/">Technologies</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>BlueChip Technologies Asia</h3>
                        <p>hello@bluechiptech.asia <br>
Singapore +65 86738158 | Sri Lanka +94 716092918<br>
302, Crescent Building, 320 Balestier Road , Singapore | 365 Galle Road, Colombo 3</p>
                    </div>
                    <div class="col item social"><a href="https://www.facebook.com/BluechipTechnologiesAsia/"><i class="icon ion-social-facebook"></i></a><a href="https://twitter.com/bluechipasia"><i class="icon ion-social-twitter"></i></a><a href="https://www.linkedin.com/company/bluechip-technologies-asia/"><i class="icon ion-social-linkedin"></i></a><a href="https://www.youtube.com/channel/UCBEe8WVdN7Uv-SYKz9iWOqw"><i class="icon ion-social-youtube"></i></a></div>
                </div>
                <p class="copyright">BlueChip Technologies Asia © 2021</p>
            </div>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>








</body>
</html>