


<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Start Your Project</title>
  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <link rel="stylesheet" href="start-updated.css">
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>

  <!-- CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
</head>
<style type="text/css">
  .error-box {
    color: #1c1414;
    font-family: Tahoma,Geneva,Arial,sans-serif;
    font-size: 18px;
    padding: 10px 10px 10px 36px;
    margin: 10px;
    background-color: #33dddd;
    border: 1px solid #2b45a7;
    /*width: 301px;*/
    text-align: center;
}
.error-box1 {
    color:#555;
    font-family:Tahoma,Geneva,Arial,sans-serif;font-size:11px;
    font-size: 18px;
    padding:10px 10px 10px 36px;
    margin:10px;
    background-color: #ffecec;
    border:1px solid #f5aca6;
   /* width: 300px;*/
   text-align:center;

}

.files input {
    outline: 2px dashed #92b0b3;
    outline-offset: -10px;
    -webkit-transition: outline-offset .15s ease-in-out, background-color .15s linear;
    transition: outline-offset .15s ease-in-out, background-color .15s linear;
    padding: 120px 0px 85px 35%;
    text-align: center !important;
    margin: 0;
    width: 100% !important;
}
.files input:focus{     outline: 2px dashed #92b0b3;  outline-offset: -10px;
    -webkit-transition: outline-offset .15s ease-in-out, background-color .15s linear;
    transition: outline-offset .15s ease-in-out, background-color .15s linear; border:1px solid #92b0b3;
 }
.files{ position:relative}
.files:after {  pointer-events: none;
    position: absolute;
    top: 60px;
    left: 0;
    width: 50px;
    right: 0;
    height: 56px;
    content: "";
    background-image: url(https://image.flaticon.com/icons/png/128/109/109612.png);
    display: block;
    margin: 0 auto;
    background-size: 100%;
    background-repeat: no-repeat;
}
.color input{ background-color:#f1f1f1;}
.files:before {
    position: absolute;
    bottom: 10px;
    left: 0;  pointer-events: none;
    width: 100%;
    right: 0;
    height: 57px;
    content: " or drag it here. ";
    display: block;
    margin: 0 auto;
    color: #2ea591;
    font-weight: 600;
    text-transform: capitalize;
    text-align: center;
}



</style>


<body class="pr" data-spy="scroll" data-target="#navbar-example2" data-offset="50">
  <header>
    <div class="container">
      <a class="logo" href="/">
        <img
          src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHsAAAAaCAYAAACXbyOAAAAACXBIWXMAAC4jAAAuIwF4pT92AAAGZmlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNi4wLWMwMDIgNzkuMTY0NDYwLCAyMDIwLzA1LzEyLTE2OjA0OjE3ICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdEV2dD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlRXZlbnQjIiB4bWxuczpwaG90b3Nob3A9Imh0dHA6Ly9ucy5hZG9iZS5jb20vcGhvdG9zaG9wLzEuMC8iIHhtbG5zOmRjPSJodHRwOi8vcHVybC5vcmcvZGMvZWxlbWVudHMvMS4xLyIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgMjEuMiAoV2luZG93cykiIHhtcDpDcmVhdGVEYXRlPSIyMDIwLTA5LTE4VDEzOjM5OjM3KzA1OjMwIiB4bXA6TWV0YWRhdGFEYXRlPSIyMDIwLTA5LTE4VDEzOjM5OjM3KzA1OjMwIiB4bXA6TW9kaWZ5RGF0ZT0iMjAyMC0wOS0xOFQxMzozOTozNyswNTozMCIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo4MmNkZjMzMi1kODEyLTE5NDktYTdkNC01MGE3MWU1Y2UyZTIiIHhtcE1NOkRvY3VtZW50SUQ9ImFkb2JlOmRvY2lkOnBob3Rvc2hvcDoxOTQ1Yjk5MC02MzMzLTBhNDAtODVlZi0wNDJjY2RkMGUwMWIiIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDplZDU4MWUzOS00MjZiLTViNDAtYWUwZS1jMDg2ODdhMTA2MWYiIHBob3Rvc2hvcDpDb2xvck1vZGU9IjMiIGRjOmZvcm1hdD0iaW1hZ2UvcG5nIj4gPHhtcE1NOkhpc3Rvcnk+IDxyZGY6U2VxPiA8cmRmOmxpIHN0RXZ0OmFjdGlvbj0iY3JlYXRlZCIgc3RFdnQ6aW5zdGFuY2VJRD0ieG1wLmlpZDplZDU4MWUzOS00MjZiLTViNDAtYWUwZS1jMDg2ODdhMTA2MWYiIHN0RXZ0OndoZW49IjIwMjAtMDktMThUMTM6Mzk6MzcrMDU6MzAiIHN0RXZ0OnNvZnR3YXJlQWdlbnQ9IkFkb2JlIFBob3Rvc2hvcCAyMS4yIChXaW5kb3dzKSIvPiA8cmRmOmxpIHN0RXZ0OmFjdGlvbj0ic2F2ZWQiIHN0RXZ0Omluc3RhbmNlSUQ9InhtcC5paWQ6ODJjZGYzMzItZDgxMi0xOTQ5LWE3ZDQtNTBhNzFlNWNlMmUyIiBzdEV2dDp3aGVuPSIyMDIwLTA5LTE4VDEzOjM5OjM3KzA1OjMwIiBzdEV2dDpzb2Z0d2FyZUFnZW50PSJBZG9iZSBQaG90b3Nob3AgMjEuMiAoV2luZG93cykiIHN0RXZ0OmNoYW5nZWQ9Ii8iLz4gPC9yZGY6U2VxPiA8L3htcE1NOkhpc3Rvcnk+IDxwaG90b3Nob3A6RG9jdW1lbnRBbmNlc3RvcnM+IDxyZGY6QmFnPiA8cmRmOmxpPmFkb2JlOmRvY2lkOnBob3Rvc2hvcDo4ZDNhZmY4Zi1mNzM2LTZkNDQtOTQ0My1kNjUzM2U3N2U2YjM8L3JkZjpsaT4gPC9yZGY6QmFnPiA8L3Bob3Rvc2hvcDpEb2N1bWVudEFuY2VzdG9ycz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz69rcbfAAAGB0lEQVRoge3bf6wcVRXA8c+TihSojSACLSFWEyjQYggQCMQEkPoLTQqCIInE8iuEIEagTShgQaMtUAMkGoNSmxhtIPyKoaAxWFKEiqAQoBqhwaIINCmgpaXQlveWP84sOzs7P3Z254Gx/Sabt/fHnHtnzt5zzzl33kir1bKD7YMJRQ27Lp9zHqZWXL8FL2E1/lLR9xQcWmt2wTb8CBuS8sdwAT4wgKxH8Nvk+6fxmVTbC1gygEyYjutxNB7CJVg7oKyh2fylpbn1hcoWE55eY4z7cZV4oHl8HbNryEvzKx1l74NrBpTzUx1lzxLzbbPaYMreHXfhoKQ8G5/Esdg40CzHibLVUXeiJ2IFTi1of6OmvDabMZYqj+LtAWW9mfr+VqZtUMUcpaPoNjNxwIDyxo1BTGEZE8Xq+FSDMnfV3Dx3aUhOmlcK6jeNw1hDUWbGszyFuzGSlFvYE18QZqvNh7EQX6yQtxYrU/KK2Kp61a1M5FXJ+kNF+yA8iZ/hvFTdjXh2HMYaijrKfhRX59TvgVvFHthmljBjZTf8MObUGL+MxVjekKxBuFD4KjPxBH7xPs6lkDrK3rmg/jXMw2MpeRNwiHJl1xm7iibMc5VVKONt/LyBOYwrTT3wf+N1scrbTGlI9ntF22GbLCKH4/AR4dQ9h9uwquDaA3WHqS/imVR5WvJp8wLWiC1vDo7HJLyMZbgvI3+KCF2PFtEIscgex52JrEqaUvZuwpFKsyGvY4pBPeo8xqq7VPJX4VjeKj/kvBg34LKc8ebinFR5Cc5Nlc/BFanyQvwSt+PgjKxNOsoeEVvEVdg7Z06n4UrcjPki71FIHWWXKecSvab06Qp5U3FCRZ+t+JNIrJTxweRTxpgI24qYIuLlT5T0+bZYlTdk6rPzqyrPED7GNL3cnvydKPb+olC2zW7i+c/EyUpC3DrK3k+vcvbC6ckgaVaoVvbxyaeMjeKBvFrRbzG+U9HnDiwoac/ewyh2yuk3V+zPVZarjC8X1K/HH5PvC/Uq+vmkvSWykTNSbbOwCN8sGrSOsj+bfKp4XTyQJkzrFnFjVezXR5/9+xzzN7hJpIGnCzOZTvPuK/bzX/cpr4w1wpw/ksxvkkgiHYWLUv1aQvnX6fzIdhaKXahj1S4QWcLchdakR0wo+kzhODRB3soalKqtgFDg7FT5aRFlPCUU0Wa64ZX9OD4vVnOWy3Tf+yLdez6xxf1QKP0HSd0E4VzOyxuwKWW/hQdwuUgy9MNW4YyUZcde1d/K7oeq8GxUrJwsz+PvODJVt09OvzqM4lL5it5L/na5QG942NJ7WDVDAXWUvUGEFJNzBlguPMM63CuyTmXKHsN/+5D1E7ECy2Q9U9JGKPWxgrasz1CUc+iXZ/FgQds03SEs3Z59FXleO+op+x6cLVKkD+gOT2bhCPy5hrw3VTte/bJcb2xal/WKTX3WugxrbdYp9ml2H1J29ofyLnWUPSoexjrhCKzQWUmTsVQ4Fpv7lNfkIUw2xh+E9/ItjrKxsj+4LeJMoiyGHtN5nv8q6lRH2en9YqVwGuan6mbgWiWu/w764iWh8HTeYJ6I74dimNV1tV5n7CJ8pc/rm8yg/T+xVvdbPx8S4V8RJ4hDpTNULN5hvPFtIpW3MiNnsdjTX6u4/lj9HR5sFWFHU/v7/zpjuEXkwducLxzka3U/h5NEanZvHCNCtgXC+e1h2NBrlXhF6Hupuo/jx/haxbXZw4EyFtl+lE0kWs4WCmwzV+QwVgnndpp4jy7N4UpO75pwkr4vnLU0Z4hfYxNkX0vaHtiCb+CfmfqpIsQ9S6+iWyJEKzzXL1P2pEy5yONt4Vt6DxluFt551fVVZF9L2kmvRao6BMkjm2TJ3m+abDg0MVPO3lu2nB2rn/BqjdiP7++j73p8VcULk2Vm/CaRc24J0/BESd/V4kDkMJ2wYoLuM+1l+Jv6Ic42/CdVXofv6vwARkQ6sy6/T2S0768wZBF76IOpvtk3aO8U3nK7/dFM++/EYmi3P9fnHP+Bz4m9+XRhpj+azHuTWPl3J+OXzR+M7Pgnge2HdwCD3T1Gf+dD0AAAAABJRU5ErkJggg==">
      </a>
    </div>
  </header>

  <section class="form-details section_padding">
    <div class="container">
      <form action=""  method="POST" enctype="multipart/form-data" id="total_value">
        <div class="row">
          <div class="col-lg-8">
            <div class="left-panel">
              <div class="step-nav">
                <nav id="navbar-example2" class="navbar navbar-light bg-light">
                  <ul class="nav nav-pills">
                    <li class="nav-item">
                      <a class="nav-link" href="#step_1">Step
                        <span>1</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#step_2">Step
                        <span>2</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#step_3">Step
                        <span>3</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#step_4">Step
                        <span>4</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#step_5">Step
                        <span>5</span></a>
                    </li>
                  </ul>


                </nav>
              </div>

              <div class="step_1 section_title" id="step_1">
                <h2>Select Service</h2>
                <div class="form-wrap">
                  <div class="quote-service-select single-select">
                    <ul>
                      <a href="#" data-name="PSDTOHTML5" data-price="160" class="add-to-cart">
                      <li class="single-slect-list select" class="service" value="160" >
                       
                        <div class="block">
                          <input type="checkbox"   name="service" hidden="hidden" value="PSDtoHTML"  checked="checked">
                          <div class="icon"
                            data-src="https://www.pixelperfecthtml.com/wp-content/uploads/2019/04/psd-to-html5-1.svg">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                              width="60" height="60" viewbox="0 0 60 60" class="svg replaced-svg">
                              <defs>
                                <clippath id="clip-path">
                                  <rect id="Rectangle_25306" data-name="Rectangle 25306" width="60" height="60"></rect>
                                </clippath>
                                <filter id="Path_1895" x="1.492" y="-0.506" width="57.875" height="62.998"
                                  filterunits="userSpaceOnUse">
                                  <feoffset dy="1" input="SourceAlpha"></feoffset>
                                  <fegaussianblur stddeviation="0.5" result="blur"></fegaussianblur>
                                  <feflood flood-opacity="0.161"></feflood>
                                  <fecomposite operator="in" in2="blur"></fecomposite>
                                  <fecomposite in="SourceGraphic"></fecomposite>
                                </filter>
                              </defs>
                              <g id="psd-to-html5" clip-path="url(#clip-path)">
                                <rect id="Rectangle_25305" data-name="Rectangle 25305" width="60" height="60"
                                  fill="rgba(255,255,255,0)"></rect>
                                <g id="Group_1" data-name="Group 1" transform="translate(-271.804 -365.104)">
                                  <g transform="matrix(1, 0, 0, 1, 271.8, 365.1)" filter="url(#Path_1895)">
                                    <path id="Path_1895-2" data-name="Path 1895"
                                      d="M-708.225,629.327c8.678,0,17.356.027,26.034-.03,1.246-.008,1.44.466,1.34,1.516-.508,5.323-.976,10.649-1.474,15.973-.544,5.811-1.123,11.618-1.654,17.43-.454,4.96-.854,9.924-1.293,14.885-.13,1.463-.361,2.92-.439,4.385a1.084,1.084,0,0,1-1.014,1.136q-10.452,2.316-20.906,4.622a3.5,3.5,0,0,1-1.447-.056c-6.853-1.5-13.7-3.033-20.554-4.531a1.293,1.293,0,0,1-1.192-1.374c-.437-5.286-.935-10.567-1.431-15.848-.549-5.849-1.133-11.7-1.67-17.546-.37-4.024-.675-8.054-1.03-12.079-.2-2.236-.405-4.472-.67-6.7-.2-1.642-.12-1.784,1.488-1.784ZM-693,651.72h-20.322c-3.836,0-3.818,0-4.563-3.809-.134-.685.054-.921.7-.909.327.006.655,0,.982,0,7.656,0,15.313-.027,22.969.028,1.155.008,1.6-.41,1.741-1.465.227-1.657.534-3.3.775-4.957.229-1.571.211-1.582-1.443-1.582h-32.3c-1.594,0-1.6.037-1.389,1.566s.357,3.081.55,4.619c.545,4.332,1.151,8.657,1.615,13,.126,1.177.62,1.356,1.633,1.351,6.632-.033,13.265,0,19.9-.036,1.034-.006,1.269.36,1.134,1.31-.35,2.463-.589,4.942-.991,7.4a2.153,2.153,0,0,1-1.048,1.408c-5.026,2.25-5.036,2.229-10.175.131-.113-.046-.265-.055-.338-.136a4.326,4.326,0,0,1-1-1.218c-.381-1.073-.571-2.213-.915-3.3-.1-.323-.455-.8-.7-.806-2.2-.063-4.4-.037-6.658-.037a5.785,5.785,0,0,0,.007.963c.569,2.923,1.126,5.849,1.768,8.757a1.727,1.727,0,0,0,.979.943q5.5,2.261,11.04,4.418a2.1,2.1,0,0,0,1.389.06q5.716-2.213,11.384-4.549a1.664,1.664,0,0,0,.839-1.043,27.654,27.654,0,0,0,.311-2.794c.368-3.283.752-6.564,1.115-9.847C-693.678,658.1-693.356,655.022-693,651.72Z"
                                      transform="translate(738.7 -629.3)" fill="#e7582b"></path>
                                  </g>
                                </g>
                              </g>
                            </svg>
                          </div>
                          <h4>PSD TO HTML5</h4>
                        </div>
                        
                      </li>
</a>

  <a href="#" data-name="PSDTOBANNERS" data-price="170" class="add-to-cart">
                      <li  class="single-slect-list service" value="170" 
                       >
                       
                        <div class="block">
                          <input type="checkbox"  name="service" hidden="hidden" value="PSDtoBANNERS"  checked="checked">
                          <div class="icon"
                            data-src="https://www.pixelperfecthtml.com/wp-content/uploads/2019/04/psd-to-html5-1.svg">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                              width="60" height="60" viewbox="0 0 60 60" class="svg replaced-svg">
                              <defs>
                                <clippath id="clip-path">
                                  <rect id="Rectangle_25306" data-name="Rectangle 25306" width="60" height="60"></rect>
                                </clippath>
                                <filter id="Path_1895" x="1.492" y="-0.506" width="57.875" height="62.998"
                                  filterunits="userSpaceOnUse">
                                  <feoffset dy="1" input="SourceAlpha"></feoffset>
                                  <fegaussianblur stddeviation="0.5" result="blur"></fegaussianblur>
                                  <feflood flood-opacity="0.161"></feflood>
                                  <fecomposite operator="in" in2="blur"></fecomposite>
                                  <fecomposite in="SourceGraphic"></fecomposite>
                                </filter>
                              </defs>
                              <g id="psd-to-html5" clip-path="url(#clip-path)">
                                <rect id="Rectangle_25305" data-name="Rectangle 25305" width="60" height="60"
                                  fill="rgba(255,255,255,0)"></rect>
                                <g id="Group_1" data-name="Group 1" transform="translate(-271.804 -365.104)">
                                  <g transform="matrix(1, 0, 0, 1, 271.8, 365.1)" filter="url(#Path_1895)">
                                    <path id="Path_1895-2" data-name="Path 1895"
                                      d="M-708.225,629.327c8.678,0,17.356.027,26.034-.03,1.246-.008,1.44.466,1.34,1.516-.508,5.323-.976,10.649-1.474,15.973-.544,5.811-1.123,11.618-1.654,17.43-.454,4.96-.854,9.924-1.293,14.885-.13,1.463-.361,2.92-.439,4.385a1.084,1.084,0,0,1-1.014,1.136q-10.452,2.316-20.906,4.622a3.5,3.5,0,0,1-1.447-.056c-6.853-1.5-13.7-3.033-20.554-4.531a1.293,1.293,0,0,1-1.192-1.374c-.437-5.286-.935-10.567-1.431-15.848-.549-5.849-1.133-11.7-1.67-17.546-.37-4.024-.675-8.054-1.03-12.079-.2-2.236-.405-4.472-.67-6.7-.2-1.642-.12-1.784,1.488-1.784ZM-693,651.72h-20.322c-3.836,0-3.818,0-4.563-3.809-.134-.685.054-.921.7-.909.327.006.655,0,.982,0,7.656,0,15.313-.027,22.969.028,1.155.008,1.6-.41,1.741-1.465.227-1.657.534-3.3.775-4.957.229-1.571.211-1.582-1.443-1.582h-32.3c-1.594,0-1.6.037-1.389,1.566s.357,3.081.55,4.619c.545,4.332,1.151,8.657,1.615,13,.126,1.177.62,1.356,1.633,1.351,6.632-.033,13.265,0,19.9-.036,1.034-.006,1.269.36,1.134,1.31-.35,2.463-.589,4.942-.991,7.4a2.153,2.153,0,0,1-1.048,1.408c-5.026,2.25-5.036,2.229-10.175.131-.113-.046-.265-.055-.338-.136a4.326,4.326,0,0,1-1-1.218c-.381-1.073-.571-2.213-.915-3.3-.1-.323-.455-.8-.7-.806-2.2-.063-4.4-.037-6.658-.037a5.785,5.785,0,0,0,.007.963c.569,2.923,1.126,5.849,1.768,8.757a1.727,1.727,0,0,0,.979.943q5.5,2.261,11.04,4.418a2.1,2.1,0,0,0,1.389.06q5.716-2.213,11.384-4.549a1.664,1.664,0,0,0,.839-1.043,27.654,27.654,0,0,0,.311-2.794c.368-3.283.752-6.564,1.115-9.847C-693.678,658.1-693.356,655.022-693,651.72Z"
                                      transform="translate(738.7 -629.3)" fill="#e7582b"></path>
                                  </g>
                                </g>
                              </g>
                            </svg>
                          </div>
                          <h4>PSD TO BANNERS</h4>
                        </div>
                        
                      </li>
</a>
                    <a href="#" data-name="PSDTOEMAIL" data-price="180" class="add-to-cart">
                       <li  class="single-slect-list service" value="180" >
                       
                        <div class="block">
                          <input type="checkbox"  name="service" hidden="hidden" value="PSDtoEMAIL"  checked="checked">
                          <div class="icon"
                            data-src="https://www.pixelperfecthtml.com/wp-content/uploads/2019/04/psd-to-html5-1.svg">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                              width="60" height="60" viewbox="0 0 60 60" class="svg replaced-svg">
                              <defs>
                                <clippath id="clip-path">
                                  <rect id="Rectangle_25306" data-name="Rectangle 25306" width="60" height="60"></rect>
                                </clippath>
                                <filter id="Path_1895" x="1.492" y="-0.506" width="57.875" height="62.998"
                                  filterunits="userSpaceOnUse">
                                  <feoffset dy="1" input="SourceAlpha"></feoffset>
                                  <fegaussianblur stddeviation="0.5" result="blur"></fegaussianblur>
                                  <feflood flood-opacity="0.161"></feflood>
                                  <fecomposite operator="in" in2="blur"></fecomposite>
                                  <fecomposite in="SourceGraphic"></fecomposite>
                                </filter>
                              </defs>
                              <g id="psd-to-html5" clip-path="url(#clip-path)">
                                <rect id="Rectangle_25305" data-name="Rectangle 25305" width="60" height="60"
                                  fill="rgba(255,255,255,0)"></rect>
                                <g id="Group_1" data-name="Group 1" transform="translate(-271.804 -365.104)">
                                  <g transform="matrix(1, 0, 0, 1, 271.8, 365.1)" filter="url(#Path_1895)">
                                    <path id="Path_1895-2" data-name="Path 1895"
                                      d="M-708.225,629.327c8.678,0,17.356.027,26.034-.03,1.246-.008,1.44.466,1.34,1.516-.508,5.323-.976,10.649-1.474,15.973-.544,5.811-1.123,11.618-1.654,17.43-.454,4.96-.854,9.924-1.293,14.885-.13,1.463-.361,2.92-.439,4.385a1.084,1.084,0,0,1-1.014,1.136q-10.452,2.316-20.906,4.622a3.5,3.5,0,0,1-1.447-.056c-6.853-1.5-13.7-3.033-20.554-4.531a1.293,1.293,0,0,1-1.192-1.374c-.437-5.286-.935-10.567-1.431-15.848-.549-5.849-1.133-11.7-1.67-17.546-.37-4.024-.675-8.054-1.03-12.079-.2-2.236-.405-4.472-.67-6.7-.2-1.642-.12-1.784,1.488-1.784ZM-693,651.72h-20.322c-3.836,0-3.818,0-4.563-3.809-.134-.685.054-.921.7-.909.327.006.655,0,.982,0,7.656,0,15.313-.027,22.969.028,1.155.008,1.6-.41,1.741-1.465.227-1.657.534-3.3.775-4.957.229-1.571.211-1.582-1.443-1.582h-32.3c-1.594,0-1.6.037-1.389,1.566s.357,3.081.55,4.619c.545,4.332,1.151,8.657,1.615,13,.126,1.177.62,1.356,1.633,1.351,6.632-.033,13.265,0,19.9-.036,1.034-.006,1.269.36,1.134,1.31-.35,2.463-.589,4.942-.991,7.4a2.153,2.153,0,0,1-1.048,1.408c-5.026,2.25-5.036,2.229-10.175.131-.113-.046-.265-.055-.338-.136a4.326,4.326,0,0,1-1-1.218c-.381-1.073-.571-2.213-.915-3.3-.1-.323-.455-.8-.7-.806-2.2-.063-4.4-.037-6.658-.037a5.785,5.785,0,0,0,.007.963c.569,2.923,1.126,5.849,1.768,8.757a1.727,1.727,0,0,0,.979.943q5.5,2.261,11.04,4.418a2.1,2.1,0,0,0,1.389.06q5.716-2.213,11.384-4.549a1.664,1.664,0,0,0,.839-1.043,27.654,27.654,0,0,0,.311-2.794c.368-3.283.752-6.564,1.115-9.847C-693.678,658.1-693.356,655.022-693,651.72Z"
                                      transform="translate(738.7 -629.3)" fill="#e7582b"></path>
                                  </g>
                                </g>
                              </g>
                            </svg>
                          </div>
                          <h4>PSD TO EMAIL</h4>
                        </div>
                        
                      </li>
                      </a>
                      <a href="#" data-name="SKETCHTOHTML" data-price="190" class="add-to-cart">
                      <li class="single-slect-list service" value="190">
                        
                        <div class="block">
                          <input type="checkbox"  name="service"  hidden="hidden"  value="SKETCHtoHTML">
                          <div class="icon"
                            data-src="https://www.pixelperfecthtml.com/wp-content/uploads/2019/04/sketch-html.png">
                            <img src="https://www.pixelperfecthtml.com/wp-content/uploads/2019/04/sketch-html.png"
                              alt="" class="svg">
                          </div>
                          <h4>SKETCH TO HTML</h4>
                        </div>
                      </li>
                   </a>
                   <a href="#" data-name="XDTOHTML" data-price="200" class="add-to-cart">
                      <li class="single-slect-list service" value="200"  >
                        
                        <div class="block">
                          <input type="checkbox" name="service" hidden="hidden" class="radi" value="XDtoHTML">
                          <div class="icon"
                            data-src="https://www.pixelperfecthtml.com/wp-content/uploads/2019/04/icon_xd.svg">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                              version="1.1" id="Layer_1" width="60" height="60" x="0px" y="0px" viewbox="0 0 60 60"
                              style="enable-background:new 0 0 60 60;" xml:space="preserve" class="svg replaced-svg">
                              <style type="text/css">
                                .st0 {
                                  fill: #E44D26;
                                }

                                .st1 {
                                  fill: #F16529;
                                }

                                .st2 {
                                  fill: #EBEBEB;
                                }

                                .st3 {
                                  fill: #FFFFFF;
                                }

                                .st4 {
                                  fill-rule: evenodd;
                                  clip-rule: evenodd;
                                  fill: #EA6C00;
                                }

                                .st5 {
                                  fill-rule: evenodd;
                                  clip-rule: evenodd;
                                  fill: #FDAD00;
                                }

                                .st6 {
                                  fill-rule: evenodd;
                                  clip-rule: evenodd;
                                  fill: #FDD231;
                                }

                                .st7 {
                                  fill-rule: evenodd;
                                  clip-rule: evenodd;
                                  fill: #FEEEB7;
                                }

                                .st8 {
                                  fill: #FF26BE;
                                }

                                .st9 {
                                  fill: #2E001F;
                                }

                                .st10 {
                                  fill: #FFD9F2;
                                }

                                .st11 {
                                  fill: #00749A;
                                }

                                .st12 {
                                  fill: #28A8E0;
                                }

                                .st13 {
                                  fill: #EC6737;
                                }

                                .st14 {
                                  fill: #9B5C8F;
                                }

                                .st15 {
                                  fill: #F8761F;
                                }
                              </style>
                              <g>
                                <path class="st8"
                                  d="M49.4,59.2H10.6C4.7,59.2,0,54.5,0,48.6V11.4C0,5.5,4.7,0.8,10.6,0.8h38.8C55.3,0.8,60,5.5,60,11.4v37.3   C60,54.5,55.3,59.2,49.4,59.2z">
                                </path>
                                <path class="st9"
                                  d="M48.4,56.7H11.6c-5,0-9.1-4.1-9.1-9.1V12.3c0-5,4.1-9.1,9.1-9.1h36.8c5,0,9.1,4.1,9.1,9.1v35.3   C57.5,52.7,53.4,56.7,48.4,56.7L48.4,56.7z">
                                </path>
                                <path class="st10"
                                  d="M23.7,28.1l7,13.4c0.1,0.2,0.1,0.4-0.2,0.4h-4.4c-0.3,0-0.4-0.1-0.5-0.3c-1.6-3.3-3.2-6.6-4.9-10.1h-0.1   c-1.5,3.4-3.2,6.9-4.7,10.2c-0.1,0.2-0.2,0.3-0.5,0.3h-4.1c-0.2,0-0.3-0.2-0.1-0.4l6.8-13.1l-6.6-13.2c-0.2-0.2,0-0.4,0.1-0.4H16   c0.2,0,0.4,0.1,0.4,0.3c1.6,3.3,3.2,6.7,4.7,10h0.1c1.4-3.3,3.1-6.7,4.6-10c0.1-0.2,0.2-0.3,0.5-0.3h4c0.2,0,0.3,0.2,0.2,0.4   L23.7,28.1z M32,32.2c0-5.8,3.9-10.4,10-10.4c0.5,0,0.8,0,1.3,0.1v-6.6c0-0.2,0.1-0.2,0.2-0.2h4c0.2,0,0.2,0.1,0.2,0.2v23   c0,0.7,0,1.5,0.1,2.5c0,0.2-0.1,0.2-0.2,0.3c-2.1,1-4.3,1.4-6.4,1.4C35.8,42.3,31.9,39,32,32.2L32,32.2z M43.3,25.8   c-0.4-0.2-0.8-0.2-1.4-0.2c-3.2,0-5.3,2.4-5.3,6.5c0,4.6,2.3,6.5,5.1,6.5c0.6,0,1.3-0.1,1.7-0.3L43.3,25.8L43.3,25.8z">
                                </path>
                              </g>
                            </svg>
                          </div>
                          <h4>XD TO HTML</h4>
                        </div>
                        
                      </li>
                      </a>
                      <a href="#" data-name="PSDTOWORDPRESS" data-price="210" class="add-to-cart">
                      <li  class="single-slect-list service" value="210">
                         
                        <div class="block">
                          <input type="checkbox"  name="service" hidden="hidden" value="PSDtoWP">
                          <div class="icon"
                            data-src="https://www.pixelperfecthtml.com/wp-content/uploads/2019/04/psd-to-wordpress-1.svg">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                              width="60" height="60" viewbox="0 0 60 60" class="svg replaced-svg">
                              <defs>
                                <clippath id="clip-path">
                                  <rect id="Rectangle_25312" data-name="Rectangle 25312" width="60" height="60"></rect>
                                </clippath>
                              </defs>
                              <g id="psd-to-wordpress" clip-path="url(#clip-path)">
                                <rect id="Rectangle_25311" data-name="Rectangle 25311" width="60" height="60"
                                  fill="rgba(255,255,255,0)"></rect>
                                <g id="Group_312" data-name="Group 312" transform="translate(-487.141 522.836)">
                                  <path id="Union_6" data-name="Union 6"
                                    d="M29.7,60A30,30,0,0,1,.007,29.563,29.23,29.23,0,0,1,9.223,8.425,28.925,28.925,0,0,1,30.094,0a30,30,0,1,1-.029,60ZM1.211,30A28.894,28.894,0,1,0,30.2,1.235h-.075A28.724,28.724,0,0,0,1.211,30ZM28.068,55.634c-1.534-.111-3.044-.523-4.57-.768-.548-.088-.574-.316-.411-.778,1.256-3.592,2.49-7.19,3.735-10.788l3.6-10.385c.038-.113.085-.22.159-.4,2.673,7.285,5.319,14.5,8.008,21.836-1.1.287-2.135.585-3.185.831a22.131,22.131,0,0,1-5.046.543C29.591,55.72,28.829,55.689,28.068,55.634ZM7.2,41.885a24.942,24.942,0,0,1-.723-22.044L18.592,52.87l-.129.1A25.258,25.258,0,0,1,7.2,41.885Zm36.764,8.26c2.387-6.865,4.755-13.736,7.172-20.588a32.97,32.97,0,0,0,1.741-6.268,16.327,16.327,0,0,0,.176-1.861c.03-1.006.008-2.015.008-3.175a25.559,25.559,0,0,1-9.75,33.785ZM14.347,18.017c.935-.093,1.784-.188,2.635-.262s1.254-.49,1.215-1.254c-.036-.687-.47-1.064-1.288-1.024-2.05.1-4.1.236-6.146.339a9.775,9.775,0,0,1-2.012-.1,24.485,24.485,0,0,1,14.541-10.5C32.206,2.9,40.206,4.871,47.4,10.823a4.735,4.735,0,0,0-2.933,1.125,4.672,4.672,0,0,0-1.322,5.285A21.411,21.411,0,0,0,45.034,21a15.664,15.664,0,0,1,2.441,6.44,11.345,11.345,0,0,1-.385,4.36c-1.227,4.191-2.487,8.375-3.735,12.558-.085.284-.176.566-.317,1.014-3.1-9.194-6.158-18.236-9.238-27.357.953-.1,1.806-.187,2.661-.262a1.184,1.184,0,0,0,1.225-1.219,1.089,1.089,0,0,0-1.278-1.059c-2.07.1-4.136.28-6.208.33-1.467.035-2.937-.078-4.4-.143-1.025-.047-2.048-.15-3.074-.185a1.108,1.108,0,0,0-1.185,1.11,1.13,1.13,0,0,0,1.139,1.162c.7.068,1.4.181,2.1.208.442.018.578.266.7.607,1.082,2.971,2.122,5.958,3.284,8.9a4.067,4.067,0,0,1-.01,3.052c-1.7,4.892-3.312,9.809-4.958,14.717-.023.074-.053.145-.133.355Z"
                                    transform="translate(487.141 -523.201)" fill="#017ea4" stroke="rgba(0,0,0,0)"
                                    stroke-width="1"></path>
                                </g>
                              </g>
                            </svg>
                          </div>
                          <h4>PSD TO WORDPRESS</h4>
                        </div>
                      </li>
                   </a>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="step_2 section_title" id="step_2">
                <h2>Select Package</h2>
                <div class="form-wrap">
                  <div class="package-select">
                    <ul class="package-ul">
                        <a href="#" data-name="BasickPackage" data-price="10" class="add-to-cart">
                      <li class="select package-list" value="10">
                         
                        
                        <input type="radio"  name="package" hidden="hidden" value="Basic" checked="checked">
                        <h3>Basic</h3>
                        <div class="icon">
                          
                          <img
                            src="https://www.pixelperfecthtml.com/wp-content/uploads/2019/06/icon-_basic-pack.png"
                            alt=""></div>
                        <div class="package-features">
                          <ul>
                            <li>Custom Fonts, Google Fonts And Typekit</li>
                            <li>Bootstrap Framework Integration</li>
                            <li>Rollovers, Mouse Hover Effect</li>
                            <li>Responsive Html (Desktop. Tablet And Mobile)</li>
                            <li>Compatible With All Modern Browsers</li>
                            <li>SEO Semantic coding</li>
                            <li>Commented Code</li>
                            <li>Favicon</li>
                            <li>Sticky Header</li>
                            <li>Single Level Menu And Multi Level Menu</li>
                            <li>Popup box</li>
                          </ul>
                          <div class="cta-btn text-center">
                            <span class="cta-link cta-style2 read-more">Read <i class="more">More</i> <i
                                class="less">Less</i></span>
                          </div>
                        </div>
                      
                      </li>
                      </a>
                       <a href="#" data-name="PremiumPackage" data-price="20" class="add-to-cart">
                      <li class="package package-list" value="20">
                         
                        <input type="radio" name="package"  hidden="hidden" value="Premium">
                       
                        <h3>Premium</h3>
                        <div class="icon"><img
                            src="https://www.pixelperfecthtml.com/wp-content/uploads/2019/06/icon-_premium-pack.png"
                            alt=""></div>
                        <div class="package-features">
                          <ul>
                            <li>
                              <strong>All Basic Features plus</strong>
                            </li>
                            <li>Mega Menu</li>
                            <li>Masonry</li>
                            <li>Page Speed Optimization</li>
                            <li>Css Animation Effects</li>
                            <li>Retina Ready</li>
                            <li>Parallax Animation</li>
                            <li>Custom Scroll</li>
                          </ul>
                          <div class="cta-btn text-center">
                            <span class="cta-link cta-style2 read-more">Read <i class="more">More</i> <i
                                class="less">Less</i></span>
                          </div>
                        </div>
                     
                      </li>
                      </a>
                    </ul>
                  </div>
                </div>
              </div>


              <div class="step_3 section_title" id="step_3">
                <h2>Pages & Delivery</h2>
                <div class="number-of-pages">
                  <h3>Number of Pages</h3>

<!-- <div class='input-group'>
  <span class='minus-item input-group-addon btn btn-primary add-to-cart' data-name=" NumbersOfPages" data-price="10">-</span>
<input type='number' class='item-count form-control' readonly="readonly">
<span class='plus-item btn btn-primary input-group-addon add-to-cart' data-name=" NumbersOfPages" data-price="10">+</span>
</div> -->


                  <div class="qty">
                    <span class="minus handlar minus"> <a href="#" data-name="NumbersOfPages" data-price="10" class="add-to-cart1">-</a></span>
                    <input type="number" id="qty" name="qty" value="0" min="1" readonly="readonly" class="count">
                    <span class="plus handlar plus"> <a href="#" data-name="NumbersOfPages" data-price="10" class="add-to-cart">+</a></span>
                  </div>
                  
                </div>
                <div class="delivery-time-select">
                  <h3>Delivery Time</h3>
                  <ul class="delivery-time-ul">
                      <a href="#" data-name="Standard-5b.days" data-price="0" class="add-to-cart">
                    <li class="select delivery-time-list" value="0">
                     
                      <div class="icon"><img
                          src="https://www.pixelperfecthtml.com/wp-content/themes/pph/vendors/images/icon-_standar-delivery.png"
                          alt="tortoise"></div>
                           <input type="radio" name="delivery" value="Standard- 5 b. days" hidden="hidden" checked="checked">
                      <h3>Standard Delivery</h3>
                   
                    </li>
                    </a>
                    <a href="#" data-name="Express-3b.days" data-price="10" class="add-to-cart">
                    <li class=" delivery-time-list" value="10">
                     
                      <div class="icon"><img
                          src="https://www.pixelperfecthtml.com/wp-content/themes/pph/vendors/images/icon-_express-delivery.png"
                          alt="rabbit"></div>
                           <input type="radio" name="delivery" value="Express- 3 b. days" hidden="hidden">
                      <h3>Express Delivery</h3>
                     
                    </li>
                  </a>
                  </ul>
                </div>

              </div>
              <div class="step_4 section_title" id="step_4">
                <h2>Enter Your Order Details</h2>
                <div class="form-wrap small-wrap">
                  <div class="row">
                    <div class="col-md-6 col-sm-12">
                      <div class="form_group"><input type="text" placeholder="Your Name*" name="name"
                          class="form_control" aria-required="true" aria-invalid="false"> <span class="text-danger"
                          style="display: none;"></span></div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                      <div class="form_group"><input type="text" placeholder="Email Address*" name="email"
                          class="form_control" aria-required="true" aria-invalid="false"> <span class="text-danger"
                          style="display: none;"></span></div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 col-sm-12">
                      <div class="form_group"><input type="text" placeholder="Skype Name" name="skype_name"
                          class="form_control"></div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                      <div class="form_group"><input type="tel" placeholder="Phone*" name="phone" class="form_control"
                          aria-required="true" aria-invalid="false"> <span class="text-danger"
                          style="display: none;"></span></div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 col-sm-12">
                      <div class="form_group"><input type="text" placeholder="Project Name*" name="projectName"
                          class="form_control" aria-required="true" aria-invalid="false"> <span class="text-danger"
                          style="display: none;"></span></div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 col-sm-12">
                      <div class="form_group"><textarea placeholder="Project Note" name="project_note"
                          class="form_control"></textarea></div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 col-sm-12">
                      <div class="form-group files">
                <label>Upload Your File </label>
               <input type="file" class="form-control" name="files[]" multiple="multiple" /><br>
              
</div>

                    </div>
                  </div>
                </div>
              </div>
              <div class="step_5 section_title" id="step_5">
               <!--  <h2>Payment Option</h2> -->
    
                
                <div class="order-submit-wrap">
                  <div class="left">
                    <div class="row align-items-center">
                      <div class="col-xl-8 col-lg-6 col-md-6">
                        <div class="form-wrap">
                          <div class="form_group mb-md-0">
                           <!--  <div class="custom-control custom-checkbox"><input type="checkbox" name="agree_policy"
                                id="customCheck5" class="custom-control-input" aria-required="true" aria-invalid="false">
                              <label for="customCheck5" class="custom-control-label">By Submitting your request, you agree
                                with our
                                <a href="https://www.pixelperfecthtml.com/privacy-policy/"
                                  target="_blank">Policy</a></label>
                              <span class="text-danger" style="display: none;"></span></div> -->
                          </div>
                        </div>
                      </div>
                      <!--<div class="col-xl-4 col-lg-6 col-md-6">-->
                      <!--  <div class="cta-btn text-md-right">-->
                      <!--    <button type="submit" name="pay" id="pay" class="cta-link submit"><span>PLACE ORDER</span></button></div>-->
                      <!--    <?php if(isset($response)){echo $response;} ?> <div class='col-sm-offset-3 col-sm-9  text-danger payment-errors'></div>-->
                      <!--</div>-->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4">
            <div class="summary-box">
              <!-- <div class="selected-service">
                
              </div> -->
              
<!-- <img id="image" src="placeholder.jpg" alt=""> -->
              <!-- <div class="selected-service-list">
               
              </div> -->
              <!--<div class="service-total">-->

               
              <!--  <span class="tag">TOTAL</span><b>$</b><span class="total" id="price_total">160</span><input type="text" name="pay_total" id="pay_total" value="" hidden/>-->
              <!--</div>-->
<!-- <div class="service-total">
                          <a style="text-decoration:none" href=""><span class="tag" style="color:#ffffff;">Check Out</span></a></div> -->
<div >
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header selected-service">
        <h5 class="modal-title" id="exampleModalLabel">Cart</h5>
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
      </div>
      <div class="modal-body">
        <table class="show-cart table">
          
        </table>
        
      </div>
      <div class="modal-total"><span class="total-p">Total price:</span> <span class="total-r">$<span class="total-cart" id="price_total">0</span></span><input type="text" name="pay_total" id="pay_total" value="" hidden/></div>
      <div class="clear-fix"></div>
      <div class="modal-footer">
        
        <div class="cta-btn text-md-right">
                          <button type="submit" id="pay" onclick="testJS();" class="cta-link submit"><span>Check Out</span></button></div>
      </div>
    </div>
  </div>
</div> 
            </div>
      
                 

          </div>
        </div>
    </div>
   
    </div>

    </form>
    </div>
   
  </section>
  
 
<?php
if( $_POST){

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jsondb";

// Create connection
 $link = new mysqli($servername, $username, $password, $dbname);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
//print_r($_POST['pay_total']);
 $fileName = "";
        $errors = array();
        $uploadedFiles = array();
        $extension = array("jpeg","jpg","png","gif", "psd","PNG");
        $bytes = 10240;
        $KB = 10240;
        $totalBytes = $bytes * $KB;
       $data = $_POST['projectName'];


        $UploadFolder = 'uploads' . '/' . $data;
        if (!file_exists ( $UploadFolder )) {
        mkdir($UploadFolder);
        }
        $filename1 = $UploadFolder .'/'. '';

 


   file_put_contents( $filename1,  FILE_APPEND);
        
        $counter = 0;
        
        foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name){
          $temp = $_FILES["files"]["tmp_name"][$key];
          $name = $_FILES["files"]["name"][$key];
          
          if(empty($temp))
          {
            break;
          }
          
          $counter++;
          $UploadOk = true;
          
          if($_FILES["files"]["size"][$key] > $totalBytes)
          {
            $UploadOk = false;
            array_push($errors, $name." file size is larger than the 10 MB.");
          }
          
          $ext = pathinfo($name, PATHINFO_EXTENSION);
          if(in_array($ext, $extension) == false){
            $UploadOk = false;
            array_push($errors, $name." <div class='error-box1'>Is invalid file type.</div>");
          }
          
          if(file_exists($UploadFolder."/".$name) == true){
            $UploadOk = false;
            array_push($errors, $name." <div class='error-box1'>File already exits</div>");
          }
          
          if($UploadOk == true){
            move_uploaded_file($temp,$UploadFolder."/".$name);
            array_push($uploadedFiles, $name);
          }
        }
        
        if($counter>0){
          if(count($errors)>0)
          {
            echo "<b>Errors:</b>";
            echo "<br/><ul>";
            foreach($errors as $error)
            {
              echo "<li>".$error."</li>";
            }
            echo "</ul><br/>";
          }
          
          if(count($uploadedFiles)>0){
            //echo "<b>Uploaded Files:</b>";
            echo "<ul>";
            foreach($uploadedFiles as $fileName)
            {
             // echo "<li>".$fileName."</li>";
            }
            echo "</ul>";
            
           // echo "<div class='error-box'>file uploaded Successfully..</div>";


          }
          // header( "Location: index.php" );               
        }
        else{
          //echo "<div class='error-box1'>Please select to File Upload.</div>";
        }


     
//Escape user inputs for security

$service = mysqli_real_escape_string($link, $_POST['service']);
$package = mysqli_real_escape_string($link, $_POST['package']);
$qty = mysqli_real_escape_string($link, $_POST['qty']);
$delivery = mysqli_real_escape_string($link, $_POST['delivery']);
$name = mysqli_real_escape_string($link, $_POST['name']);
$email = mysqli_real_escape_string($link, $_POST['email']);
$skype_name = mysqli_real_escape_string($link, $_POST['skype_name']);
$phone = mysqli_real_escape_string($link, $_POST['phone']);
$projectName = mysqli_real_escape_string($link, $_POST['projectName']);
$project_note = mysqli_real_escape_string($link, $_POST['project_note']);
 //$card_number = mysqli_real_escape_string($link, $_POST['card_number']);
 
 
  $pay_total = mysqli_real_escape_string($link, $_POST['pay_total']);
   //print_r($total_price);exit;

 
 
// Attempt insert query execution
$sql = "INSERT INTO refhire (service, package, qty, delivery, name, email, skype_name, phone, projectName, project_note,pay_total)
 VALUES ('$service','$package', '$qty', '$delivery','$name', '$email', '$skype_name','$phone','$projectName','$project_note','$pay_total')";
 //$sql = mysql_insert_id();
if(mysqli_query($link, $sql)){
echo "<script type='text/javascript'>alert('Form Submitted Successfully. Goto Checkout page.!');
    window.location.href= 'checkout.php';
    </script>";
//  echo '<script>document.querySelector(".submit").addEventListener("click", function(){
//   swal("Our First Alert", "With some body text and success icon!", "success");
// });</script>';
//  echo '<script type="text/javascript">alert("Form Submitted Successfully. Goto Checkout page.!"),setTimeout(function () {
//     window.location.href = "checkout.php";
// }, 1000);</script>';
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);


}
 

?>
  
 <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script> -->
 <!-- TO DO : Place below JS code in js file and include that JS file -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

  <script>
    $(document).ready(function () {
      $('.less').hide();
      $('.read-more').click(function () {
        $('.package-select').toggleClass('features-show');
        $('.more').toggle();
        $('.less').toggle();


      });

// $('li').click(function(){
//   $parent_box = $(this).children('li');
//   $('li').addClass('select');
// });


 

    });

   $('.single-select a').click(function(){
   $(this).find('.single-slect-list').toggleClass('select');
  //  $(this).find('.select').removeClass('select');
});
 
// $(document).on('click', ".single-select li", function(e){
//   var index = $(".single-select li").removeClass('select').index(this);
//   $(this).addClass('select');
//   $('input[type="checkbox"]').eq(index).prop('checked', true);
// });
$(document).on('click', ".delivery-time-select li", function(e){
  var delivery = $(".delivery-time-select li").removeClass('select').index(this);
  $(this).addClass('select');
  $('input[type="radio"]').eq(delivery).prop('checked', true);
});
$(document).on('click', ".package-select li", function(e){
  var package = $(".package-select li").removeClass('select').index(this);
  $(this).addClass('select');
  $('input[type="radio"]').eq(package).prop('checked', true);
});
  </script>

  <script type="text/javascript">
 

 
 

     $(document).ready(function(){
$("#pay").mouseover(function(){
  var grandtotal = $('#price_total').html();
    $("#pay_total").val(grandtotal);
    });
});
//alert(total);


  </script>
 

 <!--  <script type="text/javascript">
    function newFunction() {
            document.getElementById('payment-form').reset();
         }
  </script> -->

  
<script type="text/javascript">
  // ************************************************
// Shopping Cart API
// ************************************************

var shoppingCart = (function() {
  // =============================
  // Private methods and propeties
  // =============================
  cart = [];
  
  // Constructor
  function Item(name, price, count) {
    this.name = name;
    this.price = price;
    this.count = count;
  }
  
  // Save cart
  function saveCart() {
    sessionStorage.setItem('shoppingCart', JSON.stringify(cart));
  }
  
    // Load cart
  function loadCart() {
    cart = JSON.parse(sessionStorage.getItem('shoppingCart'));
    sessionStorage.removeItem( 'shoppingCart' );
  }
  if (sessionStorage.getItem("shoppingCart") != null) {
    //sessionStorage.removeItem( 'shoppingCart' );
    loadCart();
  }
  

  // =============================
  // Public methods and propeties
  // =============================
  var obj = {};
  
  // Add to cart
  obj.addItemToCart = function(name, price, count) {
    for(var item in cart) {
      if(cart[item].name === name) {
        cart[item].count ++;
        //saveCart();
        return;
      }
    }
    var item = new Item(name, price, count);
    cart.push(item);
    saveCart();
  }
  // Set count from item
  obj.setCountForItem = function(name, count) {
    for(var i in cart) {
      if (cart[i].name === name) {
        cart[i].count = count;
        break;
      }
    }
  };
  // Remove item from cart
  obj.removeItemFromCart = function(name) {
      for(var item in cart) {
        if(cart[item].name === name) {
          cart[item].count --;
          if(cart[item].count === 0) {
            cart.splice(item, 1);
          }
          break;
        }
    }
    saveCart();
  }

  // Remove all items from cart
  obj.removeItemFromCartAll = function(name) {
    for(var item in cart) {
      if(cart[item].name === name) {
        cart.splice(item, 1);
        break;
      }
    }
    saveCart();
  }

  // Clear cart
  obj.clearCart = function() {
    cart = [];
    saveCart();
  }

  // Count cart 
  obj.totalCount = function() {
    var totalCount = 0;
    for(var item in cart) {
      totalCount += cart[item].count;
    }
    return totalCount;
  }

  // Total cart
  obj.totalCart = function() {
    var totalCart = 0;
    for(var item in cart) {
      totalCart += cart[item].price * cart[item].count;
    }
    return Number(totalCart.toFixed(2));
  }

  // List cart
  obj.listCart = function() {
    var cartCopy = [];
    for(i in cart) {
      item = cart[i];
      itemCopy = {};
      for(p in item) {
        itemCopy[p] = item[p];

      }
      itemCopy.total = Number(item.price * item.count).toFixed(2);
      cartCopy.push(itemCopy)
    }
    return cartCopy;
  }

  // cart : Array
  // Item : Object/Class
  // addItemToCart : Function
  // removeItemFromCart : Function
  // removeItemFromCartAll : Function
  // clearCart : Function
  // countCart : Function
  // totalCart : Function
  // listCart : Function
  // saveCart : Function
  // loadCart : Function
  return obj;
})();


// *****************************************
// Triggers / Events
// ***************************************** 
// Add item
$('.add-to-cart').click(function(event) {
  event.preventDefault();
  var name = $(this).data('name');
  var price = Number($(this).data('price'));
  shoppingCart.addItemToCart(name, price, 1);
  displayCart();
});

$('.add-to-cart1').click(function(event) {
  event.preventDefault();
  var name = $(this).data('name');
  var price = Number($(this).data('price'));
  shoppingCart.removeItemFromCart(name, price, 1);
  displayCart();
});

// Clear items
$('.clear-cart').click(function() {
  shoppingCart.clearCart();
  displayCart();
});


function displayCart() {
  var cartArray = shoppingCart.listCart();
  var output = "";
  for(var i in cartArray) {
    output += "<tr>"
      + "<td>" + cartArray[i].name + "</td>" 
      + "<td>(" + cartArray[i].price + ")</td>"
      
     
      
     
      + " = " 
       
      + "<td>" + cartArray[i].total + "</td>"
      + "<td><button class='delete-item btn btn-danger' data-name=" + cartArray[i].name + ">X</button></td>"
      +  "</tr>";
  }
  $('.show-cart').html(output);
  $('.total-cart').html(shoppingCart.totalCart());
  $('.total-count').html(shoppingCart.totalCount());
}

// Delete item button

$('.show-cart').on("click", ".delete-item", function(event) {
  var name = $(this).data('name')
  shoppingCart.removeItemFromCartAll(name);
  displayCart();
})


// $('.add-to-cart').on("click", ".minus-item", function(event) {
//    event.preventDefault();
//   var name = $(this).data('name');
//   var price = Number($(this).data('price'));
//   shoppingCart.removeItemFromCart(name,price);
//   displayCart();
// })
// // +1
// $('.add-to-cart').on("click", ".plus-item", function(event) {
//   event.preventDefault();
//   var name = $(this).data('name');
//   var price = Number($(this).data('price'));
//   shoppingCart.addItemToCart(name, price, 1);
//   displayCart();
// })

// // Item count input
// $('.add-to-cart').on("change", ".item-count", function(event) {
//     event.preventDefault();
//   var name = $(this).data('name');
//   var price = Number($(this).data('price'));
//    var count = Number($(this).val());
//   shoppingCart.setCountForItem(name,price, count);
//   displayCart();
// });

//displayCart();
 $(document).ready(function() {
      $('.minus').click(function () {
        var $input = $(this).parent().find('input');
        var count = parseInt($input.val()) - 1;
        count = count < 0 ? 0 : count;
        $input.val(count);
        $input.change();
        return false;
      });
      $('.plus').click(function () {
        var $input = $(this).parent().find('input');
        $input.val(parseInt($input.val()) + 1);
        $input.change();
        return false;
      });
    });



     
</script>

<script type="text/javascript">

      // Get a reference to the form so that we can set up an event handler
      // for its submit event
      var form = document.getElementById("total_value");

      // Now, set up a submit event handler for the form
      form.addEventListener("submit", function(){

        // Only when the form has been submitted do you want the textbox value
        var inputTest = document.getElementById('pay_total').value;
        localStorage.setItem( 'objectToPass', inputTest );

        window.location = "checkout.php";

      });

    
</script>

</body>

</html>