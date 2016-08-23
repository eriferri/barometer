<!doctype html>
<html lang="no">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge" > <![endif]-->
  <title>Digital modenhet-barometer </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Marius Vikene" />
  <!-- css -->
  <link rel="stylesheet" type="text/css" href="css/metagrid.css" />
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
  <link type="text/css" rel="stylesheet" href="//fast.fonts.net/cssapi/cbde1ec3-980c-40de-a56b-21aa6237f5d2.css"/>
  <!--  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600,600italic,400italic,700,700italic,300italic' rel='stylesheet' type='text/css'>-->
  <link rel="stylesheet" type="text/css" href="css/main.css" />
  <!-- js -->
   <script src="js/slider.js"></script>
  <script src="js/jquery-1.11.1.min.js"></script>
  <script src="bootstrap/js/bootstrap.js" type="text/javascript"></script>
  <script src="js/jquery.matchHeight.js" type="text/javascript"></script>
  
 
  <!-- sass-style -->
  <!--
  $grey1: #FFFFFF;
  $grey2: #f5f5f5;
  $grey3: #E9E9E9;
  $grey4: #D7D8D7;
  $grey5: #C3C3C3;
  $grey6: #ACACAC;
  $grey7: #949494;
  $grey8: #7C7C7C;
  $grey9: #666565;
  $grey10: #505051;
  $grey11: #3F3F40;
  $grey12: #333333;

  $orange1: #FFF6F1;
  $orange2: #FFE1CF;
  $orange3: #FFCFB1;
  $orange4: #FFB586;
  $orange5: #FAA068;
  $orange6: #FF873D;
  $orange7: #ED762E;
  $orange8: #DA6B26;
  $orange9: #C65C1A;

  $red1: #FFEFEF;
  $red2: #FFD2D2;
  $red3: #FFAEAB;
  $red4: #FF8281;
  $red5: #F96464;
  $red6: #FF3F3F;
  $red7: #E53635;
  $red8: #CC2323;
  $red9: #AC1213;

  $green1: #E8FFF0;
  $green2: #BEF1CF;
  $green3: #91DEAC;
  $green4: #74D897;
  $green5: #5BCA82;
  $green6: #44BB6E;
  $green7: #38AF61;
  $green8: #259F4E;
  $green9: #0D963C;

  $blue1: #EDF8FF;
  $blue2: #C3E7FF;
  $blue3: #99D1F7;
  $blue4: #74BBED;
  $blue5: #53ABE7;
  $blue6: #3399E0;
  $blue7: #2C8FD4;
  $blue8: #2082C6;
  $blue9: #1574B6;

  $yellow1: #FFFEF6;
  $yellow2: #FFFBE1;
  $yellow3: #FFF7CD;
  $yellow4: #FDF2B1;
  $yellow5: #FFEE8D;
  $yellow6: #FFE763;
  $yellow7: #FDDE4F;
  $yellow8: #FAD133;
  $yellow9: #F4C216;

  $purple1: #FBF6FF;
  $purple2: #F3E2FF;
  $purple3: #E8CBFB;
  $purple4: #D8ACF5;
  $purple5: #C88BEF;
  $purple6: #BC75EA;
  $purple7: #AF65DE;
  $purple8: #9F52D2;
  $purple9: #8F38C8;


  body {
    background-color: #f5f5f5;
    font-size: 14px;
    padding: 20px;
    line-height: 21px;
    color: $grey12;
    font-family: "Avenir";
  }

  p {
    margin: 20px;
  }

  input[type="radio"], input[type="checkbox"] {
    display: none;  
    & + label {
      position: relative;
      display: inline-block;
      padding-left: 24px;
      margin-right: 32px;
      cursor: pointer;
      line-height: 16px;
      transition: all .2s ease-in-out;
      margin-bottom: 10px;
      &:before, &:after {
        content: '';
        position: absolute;
        top: -1px;
        left: 0;
        width: 16px;
        height: 16px;
        text-align: center;
        color: $grey2;
        font-family: Times;
        border-radius: 50%;
        transition: all .3s ease;
      }
    }
  }
  input[type="radio"] + label {
    &:before {    
      box-shadow:
        inset 0 0 0 1px $grey9,
        inset 0 0 0 16px $grey1,
        inset 0 0 0 16px $green6;
    }
    &:hover{
      color: $green6;
    }
    &:hover:before {
      //transition: all .3s ease;
      animation-duration: .5s;
      animation-name: change-size;
      animation-iteration-count: infinite;
      animation-direction: alternate;
      box-shadow:
        inset 0 0 0 1px $green6,
        inset 0 0 0 16px $grey1,
        inset 0 0 0 16px $green6;
    }
  }
  input[type="radio"]:checked + label {
    &:hover{
      color: $grey12;
      cursor: default;
    }
    &:before {
      //transition: all .3s ease;
      animation-duration: .2s;
      animation-name: select-radio;
      animation-iteration-count: 1;
      animation-direction: Normal;
      box-shadow:
        inset 0 0 0 1px $green6,
        inset 0 0 0 3px $grey1,
        inset 0 0 0 16px $green6;
    }

  }

  @keyframes change-size{
    from {
      box-shadow: 0 0 0 0 $green6,
        inset 0 0 0 1px $green6,
        inset 0 0 0 16px $grey1,
        inset 0 0 0 16px $green6;      
    }

    to {
      box-shadow: 0 0 0 1px $green6,
        inset 0 0 0 1px $green6,
        inset 0 0 0 16px $grey1,
        inset 0 0 0 16px $green6;
    }
  }


  @keyframes select-radio{
    0% {
      box-shadow:
        0 0 0 0 $green3,
        inset 0 0 0 2px $grey1,
        inset 0 0 0 3px $green6,
        inset 0 0 0 16px $grey1,
        inset 0 0 0 16px $green6;   
    }

    90% {
      box-shadow:
        0 0 0 10px $green1,
         inset 0 0 0 0 $grey1,
        inset 0 0 0 1px $green6,
        inset 0 0 0 2px $grey1,
        inset 0 0 0 16px $green6;
    }

    100% {
      box-shadow:
        0 0 0 12px $green1,
        inset 0 0 0 0 $grey1,
        inset 0 0 0 1px $green6,
        inset 0 0 0 3px $grey1,
        inset 0 0 0 16px $green6;
    }
  }

  @keyframes select-checkbox{
    0% {
      box-shadow:
        0 0 0 0 $green3,
        inset 0 0 0 2px $grey1,
        inset 0 0 0 3px $green6,
        inset 0 0 0 16px $grey1,
        inset 0 0 0 16px $green6;   
    }

    90% {
      box-shadow:
        0 0 0 10px $green1,
         inset 0 0 0 0 $grey1,
        inset 0 0 0 1px $green6,
        inset 0 0 0 0 $grey1,
        inset 0 0 0 16px $green6;
    }

    100% {
      box-shadow:
        0 0 0 12px $green1,
        inset 0 0 0 0 $grey1,
        inset 0 0 0 1px $green6,
        inset 0 0 0 0 $grey1,
        inset 0 0 0 16px $green6;
    }
  }

  input[type="checkbox"] + label {
    &:hover{
      color: $green6;
    }
    &:before {
      font: normal normal normal 14px/1 FontAwesome;
      text-rendering: auto;
      -webkit-font-smoothing: antialiased;
      content: '\f00c';
      line-height: 17px;
      border-radius: 0;
      background-color: $grey1;
      color: $grey1;
      box-shadow:
        inset 0 0 0 1px $grey9,
        inset 0 0 0 16px $grey1,
        inset 0 0 0 16px $green6;
    }
    &:hover:before {
      color: $grey1;
      animation-duration: .5s;
      animation-name: change-size;
      animation-iteration-count: infinite;
      animation-direction: alternate;
      box-shadow:
        inset 0 0 0 1px $green6,
        inset 0 0 0 16px $grey1,
        inset 0 0 0 16px $green6;
    }
  }
  input[type="checkbox"]:checked + label {
    &:before {
      background-color: $grey5;
      color: $grey1;
      animation-duration: .2s;
      animation-name: select-checkbox;
      animation-iteration-count: 1;
      animation-direction: Normal;
      box-shadow:
        inset 0 0 0 1px $green6,
        inset 0 0 0 0 $grey1,
        inset 0 0 0 16px $green6;
    }
  }
  -->
  
</head>
<body>

