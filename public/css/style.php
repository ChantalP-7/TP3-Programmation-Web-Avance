<?php
   header('content-type: text/css');
?>

@import url('https://fonts.googleapis.com/css2?family=Flamenco&family=Overlock&display=swap');

* {
    margin: 0;
    padding: 0;
}


.white > th {
    color: white;
}

.formel {
    font-family: Tahoma;
    font-weigth: 400px;
}

header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: rgb(1, 47, 107);
    padding: 20px;
}


header > h1 {
    font-weight: 400;    
    margin-bottom:0; 
}

.hero {
    margin: -20px;
    min-height: 450px;
    background-image: url('../image/burger.jpg');
    background-size: cover;
    background-position: center;
    margin-bottom: 50px;    
}


main { 
    min-height: 100vh;
}


footer {
    background-color: rgb(1, 47, 107);
    color: white;   
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
}

footer p {
    color: white;
    font-weight: 400;
    font-size: 18px;
}

nav {
    display: flex;
    flex-direction: row;
    gap: 50px;
}



ul  {
    display: flex;
    color: white;
    list-style: none;
}

ul li {
    margin-left: 20px;
}

nav a {
    text-decoration: none;
    color: inherit;
    font-size: 18px;
    font-weight: 400;
}

nav a:hover {
    text-decoration: underline;
}

.secondaire  {    
    margin-bottom: 100px;
}

.secondaire a {
    background-color: green;
    padding: 10px 22px;
    border-radius: 3px;
}

.complementaire {
    margin-bottom: 50px;
}

.complementaire ul {
    max-width: fit-content;
    background-color: rgb(1, 47, 107);
    padding: 10px 20px;
    gap: 20px;
    margin: auto;
}

.titre {
    color: white;
}

.div-un-article {
    display: block;
    margin: auto;
    justify-content: center;
    max-width: 1000px;
    margin-bottom: 60px;    
}

.div-un-article h2 {
    /*background-color: tomato;*/
    font-family: Flamenco;
    border-radius: 3px 3px 0px 0px;
    padding: 8px;
    font-size: 34px;
    font-weight: 400;
    text-align: center;
    margin-top: 60px;
}

.div-un-article p {
    font-size: 18px;
    line-height: 1.4em;
    padding-left: 10px;
    padding-right: 10px;
    text-align: justify;
    margin-top: 10px;
}

h1 {
    font-family: Flamenco;
    font-weight: 700;
    font-size: 40px;  
    margin-bottom: 50px;  
}

h2 {
    font-family: Overlock;
    font-size: 22px;
}

h3 {
    width: 
    font-family: Flamenco;
    font-weight: 400;
    margin-top: 20px;
    font-size: 28px;
    margin-bottom: 40px;
}

p, input, select, textarea, th, td, h4, a {
    font-family: Overlock;
    font-weigth: 400px;
}

p, input, select, textarea  {
    font-size: 22px;
}

main, header {
    text-align: center;
    gap: 20px;
}

main {
    padding: 20px;
}
.grille {
    /*overflow-x:auto;*/
    margin: 50px auto 60px auto;
    padding: 20px;
    max-width: 800px;
}

.div-centre {
    margin-left: auto;
    margin-right: auto;
}

.grille {
    
}

.grille-3-col {
    padding: 20px;    
    display: flex;   
    flex: 5 5 3;
    flex-wrap: wrap; 
    gap: 30px;    
}

.carte {
    max-width: 280px;
    border-radius: 10px;
    box-shadow: 0 0 14px rgba(197, 197, 197, 0.699);
    border: 1px solid rgba(197, 197, 197, 0.699);
}

.carte img { 
    width: 100%;
    border-radius: 10px 10px 0px 0px;
    
}

.info-carte {
    padding: 20px;
    text-align: left;
}

.carte h2 {
    margin-top: 4px;
    /*font-family: var(--newsCycle);*/
    text-align: left;
    margin-bottom: 2px;
}

/*.carte a {
    margin: 10px;
}*/

.carte p {
    margin-top: 10px;
    margin-bottom: 10px;
}

.carte img:hover {
    cursor: pointer;
}

.main {
    padding: 20px;
    text-align: left;
    line-height: 1.5rem;
}

.tiers {
    width: 20%
}

form  {
    border: dotted 1px rgba(1, 47, 107, 0.71);
    border-radius: 5px;
    display: block;
    margin: 50px auto;
    font-size: 20px;
    padding: 30px 50px;
    max-width: 500px;
}

.large {
    max-width : 600px
}

.medium {
    max-width : 400px
}

 .small {
    max-width: 300px;
}


label {
    display: block;
    margin-top: 20px;
    margin-bottom: 10px;
    text-align: left;
    font-size: 20px;
    color:rgb(44, 44, 44)
}

select, input, textarea
{    
    border: 1px  solid rgba(1, 47, 107, 0.71);
    border-left: solid 4px rgba(1, 47, 107, 0.71);    
    color:rgb(1, 47, 107);
    font-size: 18px;
    padding: 10px;
    border-radius: 3px;
    output: none;
    display: block;
}

select {
    width: 100%;
}

input {
    width: 93%;
}

textarea {
    width: 95%;
}

option {
    color: black;
}

input
{
    padding: 15px;
    font-size: 22px;
    border-radius: 3px;
}

input[type="submit"] {
    margin-top: 50px;  
    font-size: 16px;     
}


button {
    border: none;
}


output {
    border: none;
}

::placeholder, textarea {
    font-size: 20px;
}

.bouton 
{   
    font-size: 20px;
    padding: 12px 20px;
    max-width: 200px;
    border-radius: 25px;
    display: block;
    background-color: rgb(1, 47, 107);
    border: none;
    color: white;
    margin: 50px auto 20px auto;
    text-decoration: none;
    text-align: center;

    &:hover {
    background-color: rgba(248, 76, 85, 0.79);
    color: black;
    cursor: pointer;
    }
}


.center {
    text-align: center;
}


.verte {
    color: green;
}

table {
    margin-left: auto;
    margin-right: auto;
}

th {
    background-color: rgb(170, 170, 170);
    font-size: 24px;
    font-weight: 600;
}

td {
    font-size: 20px;
}

th, td {
    border: dotted 1px rgb(170, 170, 170);
    border-radius: 5px;
    gap: 10px;
    padding: 10px;
}

.bleu {
    color: blue;
}

.tomato {
    background-color: tomato;
}

td.bleu:hover {
    cursor: pointer;
    text-decoration: underline;
}

span {
    font-family: Flamenco;
    font-size: 26px ;
    font-weight: 500;
}

hr {
    max-width: 50%;
    border: dashed 0,5px grey;
    margin: 50px auto 20px auto;
}

.no-border {
    border: none;
}

.tiny-form {
    padding: 0;
}

.deux-boutons {
    max-width: 400px;
    margin: -50px auto auto auto;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 50px;
}

.trois-boutons {
    max-with: 500px;
    margin: -50px auto auto auto;
    display: flex;    
    justify-content: center;
    align-items: center;
}

/* Section séparation */

.separation {
    display: flex;
    justify-content: center;
    margin-bottom: 80px;
    margin-top: 80px;
}

.separation p{
    min-width: 60%;
    border: 0.5px dashed black;
    color: black;
    /*color: var(--charbon);*/
    overflow: visible;
    text-align: center;
    height: 0.5px;
}

.separation p::after {
    background-color: white;
    content:  url(https://s2.svgbox.net/materialui.svg?ic=comment);    
    color: black;
    /*color: var(--charbon)*/;
    padding: 0 10px;
    position: relative;
    top: -10px;
    /*font-size: 25px;*/
}


.les-etoiles {
    display: flex;
    gap: 20px;
    align-items: center;
    margin-bottom: 20px;
}

.etoile {
    color: rgb(1, 47, 107);
    font-size: 2em;
    cursor: pointer; 
}

input[type="checkbox"] {
  visibility: hidden; 
  position: absolute;
}


input[name="etoiles"]:checked  {
    color: gold;
}

.gold {
    color: gold;
}

picture img {
    margin-bottom: 50px;
    border-radius: 10px;
    box-shadow: 0 0 14px rgba(197, 197, 197, 0.699);
}

.invisible {
    display: none !important;
}

.delete {
    border: none;
}

.error{ 
    
    border: 1px dotted red;
    padding: 5px 10px;
    border-radius: 3px;
    font-size: 1.2rem;
}

.success {
    color: green;
    border: 1px dotted green;
    padding: 5px 10px;
    border-radius: 3px;    
}

.bienvenue {
    margin-top: 50px;
    text-align: center;
    
}

.bienvenue span {
    font-weight: 700;
    font-size: 32px;

}