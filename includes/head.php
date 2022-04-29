<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amziss</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/style.css"/>
    <!--Floawbite-->
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.2/dist/flowbite.min.css" />
    <!--Swiper css-->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <!-- Swiper slide-->
    <style>
      .swiper {
        width: 100%;
        height: 100%;
      }

      .swiper-slide {
        text-align: center;
        font-size: 18px;


        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
      }




      /*Custom Colors*/
      .my-bg1 {     
        background: #fc00ff;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to left, #00dbde, #fc00ff);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to left, #00dbde, #fc00ff); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
      }
      .my-bg2 {    
        background: #2193b0;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to left, #6dd5ed, #2193b0);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to left, #6dd5ed, #2193b0); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
      }
      .my-bg3{
        background: #12c2e9;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to left, #f64f59, #c471ed, #12c2e9);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to left, #f64f59, #c471ed, #12c2e9); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
      }
      .my-bg4{
        background: #00B4DB;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to left, #0083B0, #00B4DB);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to left, #0083B0, #00B4DB); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
      }
      .my-bg5{
        background: #00c6ff;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to left, #0072ff, #00c6ff);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to left, #0072ff, #00c6ff); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
      }
      .my-bg6{
        background: linear-gradient(to right, #B7DEED 0%, #71CEEF 25%, #21B4E2 75%, #B7DEED 100%);
      }
      .my-bg7{
        background: linear-gradient(90deg,#d1aad7,#c88bc4 25.17%,#7b8fdd 50%,#86bff2 73.09%,#bbdef2);
      }
      .tgrad {
        background: linear-gradient(to right, #0072ff , #00c6ff );
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
      }

     /* Background styles */
.hero {
    background-image: url('public/img/mesh.png');
    background-position: center;
    background-size:cover;
}

/* Glassmorphism card effect */
.hcard {
    backdrop-filter: blur(16px) saturate(180%);
    -webkit-backdrop-filter: blur(16px) saturate(180%);
    background-color: rgba(255, 255, 255, 0.75);
    border-radius: 12px;
    border: 1px solid rgba(209, 213, 219, 0.3);
}

    </style>

  
</head>