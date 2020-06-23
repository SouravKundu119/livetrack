<style type="text/css">

html {
    scroll-behavior: smooth;
}
* { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Muli', sans-serif;}
.row {
  margin-left: 0!important; margin-right: 0!important;
}

.nav_style{
    background-color: #000 !important;
}
.nav_style a{
    color: lightgreen !important;
}

/* -------------------------MAIN HEADER-------------------- */
.main_header {
    height: 450px;
    width: 100%;
}
    
.rightside h1{
    font-size: 3em;
}

.corona_rotate img {
    animation : gocorona 2s linear infinite;
}

@keyframes gocorona {
    0% {transform: rotate(0);}
    100% {transform: rotate(360deg);}      
    
}

.leftside img{ animation: heart 5s linear infinite;

}

@keyframes heart {
    0%{ transform: scale(.75);}
    20%{ transform: scale(1);}
    40%{ transform: scale(.75);}
    60%{ transform: scale(1);}
    80%{ transform: scale(.75);}
    100%{ transform: scale(1);}

}   

/* ----------------------------------Corona Update----------------------- */
.corona_update {
    margin: 0 0 30px 0;
}

.corona_update h3{ color: #ff7675; }

.corona_update h1{ font-size: 2em; text-align: center; }

/* -------------------------------------About Section--------------------------- */
.sub_section{
    background-color: #fbfafd;
}

/* ---------------------------------------Footer------------------------------ */

.footer_style {
    background-color: #000000;
}

.footer_style p{
    margin-bottom: 0 !important;
}

/* -----------------------------------------Top Scroll---------------------------- */
#myBtn {
    display: none;
    position: fixed;
    bottom: 30px;
    right: 40px;
    z-index: 99;/*Make sure doesn't overlap*/
    border: none;
    outline: none;/*Remove outline*/
    background-color: #00A8FF;
    color: #ffffff;
    cursor: pointer;/*Add mouse pointer on hover*/
    padding: 10px;
    border-radius: 10px;
}

#myBtn:hover {
    background: #606060;
}

/* -----------------------------Responsive----------------------------- */

@media(max-width: 768px){
    .main_header{ height: 700px; text-align: center;}

    .main_header h1{
        text-align: center;
        padding: 0;
        width: 100%;
        font-size: 30px;
    }

    .count_style{
        display: inline!important;
    }

    .count_style p{ text-align: center;}

    .about_res{ margin-left: 0!important}
}
    </style>