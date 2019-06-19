<title>Pk4Tech</title>
<style type="text/css">
  body{
  width: 100%;
  height:100%;
  position:relative;
  overflow:hidden;
  background: 
    linear-gradient(
      rgba(0, 0, 0, 0.7), 
      rgba(0, 0, 0, 0.7)
    ),
    black url(img/wall.jpeg) 50% 50% no-repeat;
   //background: 
     linear-gradient(
      rgba(0, 0, 0, 0.7), 
      rgba(0, 0, 0, 0.7)
    ),
     rgba(220, 220, 220, 1) url() 50% 50% no-repeat;
 /* //background-blend-mode: exclusion;
  background-blend-mode: luminosity;*/
  
 
}
.container{


  height:100%;
 position: absolute;
    top: 60%;
    left: 50%;
    transform: translate(-50%, -50%);
}
.btn {
    margin-top: calc(50% + 25px);
    position: relative;
    display: inline-block;
    width: 277px;
    height: 50px;
    font-size: 1em;
    font-weight: bold;
    line-height: 60px;
    text-align: center;
    text-transform: uppercase;
    background-color: transparent;
    cursor: pointer;
    text-decoration:none;
    font-family: 'Roboto', sans-serif;
    font-weight:900;
    font-size:17px;
    letter-spacing: 0.045em;
}

.btn svg {
    position: absolute;
    top: 0;
    left: 0;
}

.btn svg rect {
    //stroke: #EC0033;
    stroke-width: 4;
    stroke-dasharray: 353, 0;
    stroke-dashoffset: 0;
    -webkit-transition: all 600ms ease;
    transition: all 600ms ease;
}

.btn span{
  background: rgb(255,130,130);
  background: -moz-linear-gradient(left,  rgba(255,130,130,1) 0%, rgba(225,120,237,1) 100%);
  background: -webkit-linear-gradient(left,  rgba(255,130,130,1) 0%,rgba(225,120,237,1) 100%);
  background: linear-gradient(to right,  rgba(255,130,130,1) 0%,rgba(225,120,237,1) 100%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ff8282', endColorstr='#e178ed',GradientType=1 );
  
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

.btn:hover svg rect {
    stroke-width: 4;
    stroke-dasharray: 196, 543;
    stroke-dashoffset: 437;
}
</style>