<?php
/*** set the content type header ***/
/*** Without this header, it wont work ***/
header("Content-type: text/css");
?>

@import url('https://fonts.googleapis.com/css2?family=Markazi+Text&display=swap');
@import url('https://fonts.googleapis.com/css?family=Quicksand:400,700&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Dancing+Script&family=Markazi+Text&display=swap');

*
{
    box-sizing: border-box;
}

body 
{
    font-family: 'Markazi Text', sans-serif;
    font-size: large;
    margin: 0;
    padding: 0;
    background-color: white;
}

main 
{
    padding: 20px;
    overflow: auto;
}

h2, h3
{
    color: #7d00ea;
}
  
footer 
{
    padding: 50px;
    color: white;
    background-color: #0b0368;
    text-align: center;
    font-weight: lighter;
}

footer p
{
    display: inline;
    padding: 20px 100px;
}
nav a 
{
    font-size: 18px;
    font-weight: 400;
    text-decoration: none;
    color: blue;
}

nav a:hover 
{
    font-weight: bold;
}

.profile header 
{
    text-align: center;
}

.featured-image 
{
    width: 100%;
    max-height: 250px;
    border-radius: 20px;
    object-fit: cover;
    object-position: center;
}

 .profile img 
{
    max-width: 100%;
}

.card 
{
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    border-radius: 5px;
    padding: 20px;
    margin-top: 20px;
}

.header_atas
{
    padding: 120px 60px;
    background-image: url(assets/images/header3.jpeg);
    background-size: 100%;
    text-align: center;
    font-size: 20px;
    color: black;
}

.header_bawah
{
    list-style-type: none;
    margin-right: 0px;
    background-color: #B9E0FF;
    padding: 20px;
    position: sticky;
    top: 0;
}

.makanan, .minuman
{
    display: inline;
    list-style-type: none;
}

.makanan
{
    margin-left: 7px;
}

.minuman
{
    margin-left: 40.5%;
}




header
{
    display: inline;
}

#makanan
{
    float: left;
    width: 50%;
}

#minuman
{
    float: right;
    width: 50%;
    padding-left: 20px;
}

aside 
{

}

@media screen and (max-width: 1000px) 
{
    #content, aside 
    {
      width: 100%;
      padding: 0;
    }
  }


