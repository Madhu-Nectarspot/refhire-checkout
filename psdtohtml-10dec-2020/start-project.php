<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Start Project</title>
  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <link rel="stylesheet" href="start-project.css">
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">

</head>

<body>
  <div class="services-tabs">
    <div class="container">
      <form>
        <ul class="nav nav-pills ser-tab" id="pills-tab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="pills-development-tab" data-toggle="pill" href="#pills-development"
              role="tab" aria-controls="pills-development" aria-selected="true">
              <img width="64" height="64" class="img-fluid invert" alt="image" src="images/front-end.png">
              <span>Front-End</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="pills-campaigns-tab" data-toggle="pill" href="#pills-campaigns" role="tab"
              aria-controls="pills-campaigns" aria-selected="false">
              <img width="64" height="64" class="img-fluid invert" alt="image" src="images/email.png">
              <span>Email</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="pills-cro-tab" data-toggle="pill" href="#pills-cro" role="tab"
              aria-controls="pills-cro" aria-selected="false">
              <img width="64" height="64" class="img-fluid invert" alt="image" src="images/wordpress-logo.png">
              <span>WordPress</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="pills-marketing-tab" data-toggle="pill" href="#pills-marketing" role="tab"
              aria-controls="pills-marketing" aria-selected="false">
              <img width="64" height="64" class="img-fluid" alt="image" src="images/shopify-logo.png">
              <span>Shopify</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="pills-data-tab" data-toggle="pill" href="#pills-data" role="tab"
              aria-controls="pills-data" aria-selected="false">
              <img width="64" height="64" class="img-fluid invert" alt="image" src="images/banners.png">
              <span>Banners</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="pills-voice-tab" data-toggle="pill" href="#pills-voice" role="tab"
              aria-controls="pills-voice" aria-selected="false">
              <img width="64" height="64" class="img-fluid" alt="image" src="images/magento.png">
              <span>Magento</span>
            </a>
          </li>
        </ul>
        <div class="row">
          <div class="col-md-7">
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade pt-2 show active" id="pills-development" role="tabpanel"
                aria-labelledby="pills-development-tab">
                <center>
                  <h3>Front End Project Details</h3>
                </center>

                <div id="accordion" class="faq-wrapper">
                  <div class="card">
                    <div class="card-header" id="headingOne">
                      <h5 class="mb-0">
                        <button aria-label="button" class="btn-link" data-toggle="collapse" data-target="#collapseOne"
                          aria-expanded="true" aria-controls="collapseOne">
                          Markup Options <span> <i class="fas fa-chevron-down"></i>
                            <i class="fas fa-chevron-up"></i> </span>
                        </button>
                      </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                      <div class="card-body">
                        <p><b>Note:</b> Markup options’ total price is influenced directly by the amount of pages in the
                          project.</p>
                        <p><b>Framework</b></p>
                        <ul class="sub-list">
                          <li><label>
                              <span class="txt">None</span>
                              <input type="radio" class="" name="1" value="0" checked>
                              <span class="radio-btn"></span>
                              <span class="price">Free</span>
                            </label></li>
                          <li><label>
                              <span class="txt">Bootstrap</span>
                              <input type="radio" class="" name="1" value="40">
                              <span class="radio-btn"></span>
                              <span class="price">$40</span>
                            </label>
                          </li>
                        </ul>
                        <p><b>Layout & Look</b></p>
                        <ul class="sub-list">
                          <li>
                            <label class="f-b">
                              <span class="txt">Responsive </span>
                              <div class="tooltip-icon"><i class="fas fa-info-circle"></i>
                                <span class="tooltiptext">Responsive coding provides optimal viewing and interaction
                                  experience. Responsive coding provides optimal viewing and interaction experience.
                                  Responsive coding provides optimal viewing and interaction experience.</span>
                              </div>
                              <input type="checkbox" class="" name="1" value="0" checked>

                              <span class="chk-btn switcher"></span>
                              <div class="clear-fix"></div>
                              <div class="sub-div">
                                <ul class="sub-list">
                                  <li>
                                    <label>
                                      <span class="txt">at PSD2HTML® discretion</span>
                                      <input type="radio" name="radio" value="99">
                                      <span class="radio-btn"></span>
                                      <span class="price">$99</span>
                                    </label>
                                  </li>
                                  <li>
                                    <label>
                                      <span class="txt">I will provide design for 1 extra resolution</span>
                                      <input type="radio" name="radio" value="129">
                                      <span class="radio-btn"></span>
                                      <span class="price">$129</span>
                                    </label>
                                  </li>
                                  <li>
                                    <label>
                                      <span class="txt">I will provide design for 2 extra resolutions</span>
                                      <input type="radio" name="radio" value="159">
                                      <span class="radio-btn"></span>
                                      <span class="price">$159</span>
                                    </label>
                                  </li>

                                </ul>
                              </div>
                            </label>

                          </li>
                          <li><label>
                              <span class="txt">Retina <div class="tooltip-icon"><i class="fas fa-info-circle"></i>
                                  <span class="tooltiptext">Responsive coding provides optimal viewing and interaction
                                    experience. Responsive coding provides optimal viewing and interaction experience.
                                    Responsive coding provides optimal viewing and interaction experience.</span>
                                </div></span>

                              <select name="" id="" class="custom-select-type">
                                <option value="No">No</option>
                                <option value="Yes, SVG / icons only">Yes, SVG / icons only</option>
                                <option value="Yes, everything including images">Yes, everything including images
                                </option>
                              </select>
                              <span class="price">$40</span>
                            </label></li>
                          <li>
                            <label>
                              <span class="txt">Print version CSS</span>
                              <input type="checkbox" name="" value="99">
                              <span class="chk-btn"></span>
                              <span class="price">$99</span>
                            </label>
                          </li>

                        </ul>
                        <p><b>Coding Options</b></p>
                        <ul class="sub-list">

                          <li><label>
                              <span class="txt">CSS preprocessors <div class="tooltip-icon"><i
                                    class="fas fa-info-circle"></i>
                                  <span class="tooltiptext"></span>
                                </div></span>

                              <select name="" id="" class="custom-select-type">
                                <option value="SCSS">SCSS</option>
                                <option value="None">None</option>
                              </select>
                              <span class="price">$40</span>
                            </label></li>
                          <li>
                            <label>
                              <span class="txt">Commented HTML / CSS</span>
                              <input type="checkbox" name="" value="99">
                              <span class="chk-btn"></span>
                              <span class="price">$99</span>
                            </label>
                          </li>

                        </ul>
                        <p><b>Optimization and Accessibility</b></p>
                        <ul class="sub-list">


                          <li>
                            <label>
                              <span class="txt">Scemantic Coding</span>
                              <input type="checkbox" name="" value="0">
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>

                        </ul>
                        <p><b>Compatibility</b></p>
                        <ul class="sub-list">


                          <li>
                            <label>
                              <span class="txt">Google Chrome</span>
                              <input type="checkbox" name="" value="0" checked disabled>
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Mozilla Firefox</span>
                              <input type="checkbox" name="" value="0" checked disabled>
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Safari 11+</span>
                              <input type="checkbox" name="" value="0" checked disabled>
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Opera</span>
                              <input type="checkbox" name="" value="0" checked disabled>
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Edge</span>
                              <input type="checkbox" name="" value="0" checked disabled>
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">iOS 11+ (iPhone, iPad)</span>
                              <input type="checkbox" name="" value="0" checked disabled>
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Android 8+</span>
                              <input type="checkbox" name="" value="0" checked disabled>
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Other / Outdated browser</span>
                              <input type="checkbox" name="" value="0">
                              <span class="chk-btn"></span>
                              <!-- <span class="price">Free</span> -->
                            </label>
                          </li>

                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingTwo">
                      <h5 class="mb-0">
                        <button aria-label="button" class="btn-link collapsed" data-toggle="collapse"
                          data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Interactivity Options <span> <i class="fas fa-chevron-down"></i>
                            <i class="fas fa-chevron-up"></i> </span>
                        </button>
                      </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                      <div class="card-body">
                        <p><b>Note:</b> Markup options’ total price is influenced directly by the amount of pages in the
                          project.</p>
                        <p><b>Framework</b></p>
                        <ul class="sub-list">
                          <li><label>
                              <span class="txt">None</span>
                              <input type="radio" class="" name="1" value="0" checked>
                              <span class="radio-btn"></span>
                              <span class="price">Free</span>
                            </label></li>
                          <li><label>
                              <span class="txt">Bootstrap</span>
                              <input type="radio" class="" name="1" value="40">
                              <span class="radio-btn"></span>
                              <span class="price">$40</span>
                            </label>
                          </li>
                        </ul>
                        <p><b>Layout & Look</b></p>
                        <ul class="sub-list">
                          <li>
                            <label class="f-b">
                              <span class="txt">Responsive </span>
                              <div class="tooltip-icon"><i class="fas fa-info-circle"></i>
                                <span class="tooltiptext">Responsive coding provides optimal viewing and interaction
                                  experience. Responsive coding provides optimal viewing and interaction experience.
                                  Responsive coding provides optimal viewing and interaction experience.</span>
                              </div>
                              <input type="checkbox" class="" name="1" value="0" checked>

                              <span class="chk-btn switcher"></span>
                              <div class="clear-fix"></div>
                              <div class="sub-div">
                                <ul class="sub-list">
                                  <li>
                                    <label>
                                      <span class="txt">at PSD2HTML® discretion</span>
                                      <input type="radio" name="radio" value="99">
                                      <span class="radio-btn"></span>
                                      <span class="price">$99</span>
                                    </label>
                                  </li>
                                  <li>
                                    <label>
                                      <span class="txt">I will provide design for 1 extra resolution</span>
                                      <input type="radio" name="radio" value="129">
                                      <span class="radio-btn"></span>
                                      <span class="price">$129</span>
                                    </label>
                                  </li>
                                  <li>
                                    <label>
                                      <span class="txt">I will provide design for 2 extra resolutions</span>
                                      <input type="radio" name="radio" value="159">
                                      <span class="radio-btn"></span>
                                      <span class="price">$159</span>
                                    </label>
                                  </li>

                                </ul>
                              </div>
                            </label>

                          </li>
                          <li><label>
                              <span class="txt">Retina <div class="tooltip-icon"><i class="fas fa-info-circle"></i>
                                  <span class="tooltiptext">Responsive coding provides optimal viewing and interaction
                                    experience. Responsive coding provides optimal viewing and interaction experience.
                                    Responsive coding provides optimal viewing and interaction experience.</span>
                                </div></span>

                              <select name="" id="" class="custom-select-type">
                                <option value="No">No</option>
                                <option value="Yes, SVG / icons only">Yes, SVG / icons only</option>
                                <option value="Yes, everything including images">Yes, everything including images
                                </option>
                              </select>
                              <span class="price">$40</span>
                            </label></li>
                        </ul>
                      </div>
                    </div>
                  </div>



                </div>

              </div>
              <div class="tab-pane fade" id="pills-campaigns" role="tabpanel" aria-labelledby="pills-campaigns-tab">
              <center>
                  <h3>Email Project Details</h3>
                </center>

                <div id="accordion" class="faq-wrapper">
                  <div class="card">
                    <div class="card-header" id="headingOne">
                      <h5 class="mb-0">
                        <button aria-label="button" class="btn-link" data-toggle="collapse" data-target="#collapseOne"
                          aria-expanded="true" aria-controls="collapseOne">
                          Markup Options <span> <i class="fas fa-chevron-down"></i>
                            <i class="fas fa-chevron-up"></i> </span>
                        </button>
                      </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                      <div class="card-body">
                        <p><b>Note:</b> Markup options’ total price is influenced directly by the amount of pages in the
                          project.</p>
                        <p><b>Framework</b></p>
                        <ul class="sub-list">
                          <li><label>
                              <span class="txt">None</span>
                              <input type="radio" class="" name="1" value="0" checked>
                              <span class="radio-btn"></span>
                              <span class="price">Free</span>
                            </label></li>
                          <li><label>
                              <span class="txt">Bootstrap</span>
                              <input type="radio" class="" name="1" value="40">
                              <span class="radio-btn"></span>
                              <span class="price">$40</span>
                            </label>
                          </li>
                        </ul>
                        <p><b>Layout & Look</b></p>
                        <ul class="sub-list">
                          <li>
                            <label class="f-b">
                              <span class="txt">Responsive </span>
                              <div class="tooltip-icon"><i class="fas fa-info-circle"></i>
                                <span class="tooltiptext">Responsive coding provides optimal viewing and interaction
                                  experience. Responsive coding provides optimal viewing and interaction experience.
                                  Responsive coding provides optimal viewing and interaction experience.</span>
                              </div>
                              <input type="checkbox" class="" name="1" value="0" checked>

                              <span class="chk-btn switcher"></span>
                              <div class="clear-fix"></div>
                              <div class="sub-div">
                                <ul class="sub-list">
                                  <li>
                                    <label>
                                      <span class="txt">at PSD2HTML® discretion</span>
                                      <input type="radio" name="radio" value="99">
                                      <span class="radio-btn"></span>
                                      <span class="price">$99</span>
                                    </label>
                                  </li>
                                  <li>
                                    <label>
                                      <span class="txt">I will provide design for 1 extra resolution</span>
                                      <input type="radio" name="radio" value="129">
                                      <span class="radio-btn"></span>
                                      <span class="price">$129</span>
                                    </label>
                                  </li>
                                  <li>
                                    <label>
                                      <span class="txt">I will provide design for 2 extra resolutions</span>
                                      <input type="radio" name="radio" value="159">
                                      <span class="radio-btn"></span>
                                      <span class="price">$159</span>
                                    </label>
                                  </li>

                                </ul>
                              </div>
                            </label>

                          </li>
                          <li><label>
                              <span class="txt">Retina <div class="tooltip-icon"><i class="fas fa-info-circle"></i>
                                  <span class="tooltiptext">Responsive coding provides optimal viewing and interaction
                                    experience. Responsive coding provides optimal viewing and interaction experience.
                                    Responsive coding provides optimal viewing and interaction experience.</span>
                                </div></span>

                              <select name="" id="" class="custom-select-type">
                                <option value="No">No</option>
                                <option value="Yes, SVG / icons only">Yes, SVG / icons only</option>
                                <option value="Yes, everything including images">Yes, everything including images
                                </option>
                              </select>
                              <span class="price">$40</span>
                            </label></li>
                          <li>
                            <label>
                              <span class="txt">Print version CSS</span>
                              <input type="checkbox" name="" value="99">
                              <span class="chk-btn"></span>
                              <span class="price">$99</span>
                            </label>
                          </li>

                        </ul>
                        <p><b>Coding Options</b></p>
                        <ul class="sub-list">

                          <li><label>
                              <span class="txt">CSS preprocessors <div class="tooltip-icon"><i
                                    class="fas fa-info-circle"></i>
                                  <span class="tooltiptext"></span>
                                </div></span>

                              <select name="" id="" class="custom-select-type">
                                <option value="SCSS">SCSS</option>
                                <option value="None">None</option>
                              </select>
                              <span class="price">$40</span>
                            </label></li>
                          <li>
                            <label>
                              <span class="txt">Commented HTML / CSS</span>
                              <input type="checkbox" name="" value="99">
                              <span class="chk-btn"></span>
                              <span class="price">$99</span>
                            </label>
                          </li>

                        </ul>
                        <p><b>Optimization and Accessibility</b></p>
                        <ul class="sub-list">


                          <li>
                            <label>
                              <span class="txt">Scemantic Coding</span>
                              <input type="checkbox" name="" value="0">
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>

                        </ul>
                        <p><b>Compatibility</b></p>
                        <ul class="sub-list">


                          <li>
                            <label>
                              <span class="txt">Google Chrome</span>
                              <input type="checkbox" name="" value="0" checked disabled>
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Mozilla Firefox</span>
                              <input type="checkbox" name="" value="0" checked disabled>
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Safari 11+</span>
                              <input type="checkbox" name="" value="0" checked disabled>
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Opera</span>
                              <input type="checkbox" name="" value="0" checked disabled>
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Edge</span>
                              <input type="checkbox" name="" value="0" checked disabled>
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">iOS 11+ (iPhone, iPad)</span>
                              <input type="checkbox" name="" value="0" checked disabled>
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Android 8+</span>
                              <input type="checkbox" name="" value="0" checked disabled>
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Other / Outdated browser</span>
                              <input type="checkbox" name="" value="0">
                              <span class="chk-btn"></span>
                              <!-- <span class="price">Free</span> -->
                            </label>
                          </li>

                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingTwo">
                      <h5 class="mb-0">
                        <button aria-label="button" class="btn-link collapsed" data-toggle="collapse"
                          data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Interactivity Options <span> <i class="fas fa-chevron-down"></i>
                            <i class="fas fa-chevron-up"></i> </span>
                        </button>
                      </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                      <div class="card-body">
                        <p><b>Note:</b> Markup options’ total price is influenced directly by the amount of pages in the
                          project.</p>
                        <p><b>Framework</b></p>
                        <ul class="sub-list">
                          <li><label>
                              <span class="txt">None</span>
                              <input type="radio" class="" name="1" value="0" checked>
                              <span class="radio-btn"></span>
                              <span class="price">Free</span>
                            </label></li>
                          <li><label>
                              <span class="txt">Bootstrap</span>
                              <input type="radio" class="" name="1" value="40">
                              <span class="radio-btn"></span>
                              <span class="price">$40</span>
                            </label>
                          </li>
                        </ul>
                        <p><b>Layout & Look</b></p>
                        <ul class="sub-list">
                          <li>
                            <label class="f-b">
                              <span class="txt">Responsive </span>
                              <div class="tooltip-icon"><i class="fas fa-info-circle"></i>
                                <span class="tooltiptext">Responsive coding provides optimal viewing and interaction
                                  experience. Responsive coding provides optimal viewing and interaction experience.
                                  Responsive coding provides optimal viewing and interaction experience.</span>
                              </div>
                              <input type="checkbox" class="" name="1" value="0" checked>

                              <span class="chk-btn switcher"></span>
                              <div class="clear-fix"></div>
                              <div class="sub-div">
                                <ul class="sub-list">
                                  <li>
                                    <label>
                                      <span class="txt">at PSD2HTML® discretion</span>
                                      <input type="radio" name="radio" value="99">
                                      <span class="radio-btn"></span>
                                      <span class="price">$99</span>
                                    </label>
                                  </li>
                                  <li>
                                    <label>
                                      <span class="txt">I will provide design for 1 extra resolution</span>
                                      <input type="radio" name="radio" value="129">
                                      <span class="radio-btn"></span>
                                      <span class="price">$129</span>
                                    </label>
                                  </li>
                                  <li>
                                    <label>
                                      <span class="txt">I will provide design for 2 extra resolutions</span>
                                      <input type="radio" name="radio" value="159">
                                      <span class="radio-btn"></span>
                                      <span class="price">$159</span>
                                    </label>
                                  </li>

                                </ul>
                              </div>
                            </label>

                          </li>
                          <li><label>
                              <span class="txt">Retina <div class="tooltip-icon"><i class="fas fa-info-circle"></i>
                                  <span class="tooltiptext">Responsive coding provides optimal viewing and interaction
                                    experience. Responsive coding provides optimal viewing and interaction experience.
                                    Responsive coding provides optimal viewing and interaction experience.</span>
                                </div></span>

                              <select name="" id="" class="custom-select-type">
                                <option value="No">No</option>
                                <option value="Yes, SVG / icons only">Yes, SVG / icons only</option>
                                <option value="Yes, everything including images">Yes, everything including images
                                </option>
                              </select>
                              <span class="price">$40</span>
                            </label></li>
                        </ul>
                      </div>
                    </div>
                  </div>



                </div>
              </div>
              <div class="tab-pane fade" id="pills-cro" role="tabpanel" aria-labelledby="pills-cro-tab">
              <center>
                  <h3>WordPress Project Details</h3>
                </center>

                <div id="accordion" class="faq-wrapper">
                  <div class="card">
                    <div class="card-header" id="headingOne">
                      <h5 class="mb-0">
                        <button aria-label="button" class="btn-link" data-toggle="collapse" data-target="#collapseOne"
                          aria-expanded="true" aria-controls="collapseOne">
                          Markup Options <span> <i class="fas fa-chevron-down"></i>
                            <i class="fas fa-chevron-up"></i> </span>
                        </button>
                      </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                      <div class="card-body">
                        <p><b>Note:</b> Markup options’ total price is influenced directly by the amount of pages in the
                          project.</p>
                        <p><b>Framework</b></p>
                        <ul class="sub-list">
                          <li><label>
                              <span class="txt">None</span>
                              <input type="radio" class="" name="1" value="0" checked>
                              <span class="radio-btn"></span>
                              <span class="price">Free</span>
                            </label></li>
                          <li><label>
                              <span class="txt">Bootstrap</span>
                              <input type="radio" class="" name="1" value="40">
                              <span class="radio-btn"></span>
                              <span class="price">$40</span>
                            </label>
                          </li>
                        </ul>
                        <p><b>Layout & Look</b></p>
                        <ul class="sub-list">
                          <li>
                            <label class="f-b">
                              <span class="txt">Responsive </span>
                              <div class="tooltip-icon"><i class="fas fa-info-circle"></i>
                                <span class="tooltiptext">Responsive coding provides optimal viewing and interaction
                                  experience. Responsive coding provides optimal viewing and interaction experience.
                                  Responsive coding provides optimal viewing and interaction experience.</span>
                              </div>
                              <input type="checkbox" class="" name="1" value="0" checked>

                              <span class="chk-btn switcher"></span>
                              <div class="clear-fix"></div>
                              <div class="sub-div">
                                <ul class="sub-list">
                                  <li>
                                    <label>
                                      <span class="txt">at PSD2HTML® discretion</span>
                                      <input type="radio" name="radio" value="99">
                                      <span class="radio-btn"></span>
                                      <span class="price">$99</span>
                                    </label>
                                  </li>
                                  <li>
                                    <label>
                                      <span class="txt">I will provide design for 1 extra resolution</span>
                                      <input type="radio" name="radio" value="129">
                                      <span class="radio-btn"></span>
                                      <span class="price">$129</span>
                                    </label>
                                  </li>
                                  <li>
                                    <label>
                                      <span class="txt">I will provide design for 2 extra resolutions</span>
                                      <input type="radio" name="radio" value="159">
                                      <span class="radio-btn"></span>
                                      <span class="price">$159</span>
                                    </label>
                                  </li>

                                </ul>
                              </div>
                            </label>

                          </li>
                          <li><label>
                              <span class="txt">Retina <div class="tooltip-icon"><i class="fas fa-info-circle"></i>
                                  <span class="tooltiptext">Responsive coding provides optimal viewing and interaction
                                    experience. Responsive coding provides optimal viewing and interaction experience.
                                    Responsive coding provides optimal viewing and interaction experience.</span>
                                </div></span>

                              <select name="" id="" class="custom-select-type">
                                <option value="No">No</option>
                                <option value="Yes, SVG / icons only">Yes, SVG / icons only</option>
                                <option value="Yes, everything including images">Yes, everything including images
                                </option>
                              </select>
                              <span class="price">$40</span>
                            </label></li>
                          <li>
                            <label>
                              <span class="txt">Print version CSS</span>
                              <input type="checkbox" name="" value="99">
                              <span class="chk-btn"></span>
                              <span class="price">$99</span>
                            </label>
                          </li>

                        </ul>
                        <p><b>Coding Options</b></p>
                        <ul class="sub-list">

                          <li><label>
                              <span class="txt">CSS preprocessors <div class="tooltip-icon"><i
                                    class="fas fa-info-circle"></i>
                                  <span class="tooltiptext"></span>
                                </div></span>

                              <select name="" id="" class="custom-select-type">
                                <option value="SCSS">SCSS</option>
                                <option value="None">None</option>
                              </select>
                              <span class="price">$40</span>
                            </label></li>
                          <li>
                            <label>
                              <span class="txt">Commented HTML / CSS</span>
                              <input type="checkbox" name="" value="99">
                              <span class="chk-btn"></span>
                              <span class="price">$99</span>
                            </label>
                          </li>

                        </ul>
                        <p><b>Optimization and Accessibility</b></p>
                        <ul class="sub-list">


                          <li>
                            <label>
                              <span class="txt">Scemantic Coding</span>
                              <input type="checkbox" name="" value="0">
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>

                        </ul>
                        <p><b>Compatibility</b></p>
                        <ul class="sub-list">


                          <li>
                            <label>
                              <span class="txt">Google Chrome</span>
                              <input type="checkbox" name="" value="0" checked disabled>
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Mozilla Firefox</span>
                              <input type="checkbox" name="" value="0" checked disabled>
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Safari 11+</span>
                              <input type="checkbox" name="" value="0" checked disabled>
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Opera</span>
                              <input type="checkbox" name="" value="0" checked disabled>
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Edge</span>
                              <input type="checkbox" name="" value="0" checked disabled>
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">iOS 11+ (iPhone, iPad)</span>
                              <input type="checkbox" name="" value="0" checked disabled>
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Android 8+</span>
                              <input type="checkbox" name="" value="0" checked disabled>
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Other / Outdated browser</span>
                              <input type="checkbox" name="" value="0">
                              <span class="chk-btn"></span>
                              <!-- <span class="price">Free</span> -->
                            </label>
                          </li>

                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingTwo">
                      <h5 class="mb-0">
                        <button aria-label="button" class="btn-link collapsed" data-toggle="collapse"
                          data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Interactivity Options <span> <i class="fas fa-chevron-down"></i>
                            <i class="fas fa-chevron-up"></i> </span>
                        </button>
                      </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                      <div class="card-body">
                        <p><b>Note:</b> Markup options’ total price is influenced directly by the amount of pages in the
                          project.</p>
                        <p><b>Framework</b></p>
                        <ul class="sub-list">
                          <li><label>
                              <span class="txt">None</span>
                              <input type="radio" class="" name="1" value="0" checked>
                              <span class="radio-btn"></span>
                              <span class="price">Free</span>
                            </label></li>
                          <li><label>
                              <span class="txt">Bootstrap</span>
                              <input type="radio" class="" name="1" value="40">
                              <span class="radio-btn"></span>
                              <span class="price">$40</span>
                            </label>
                          </li>
                        </ul>
                        <p><b>Layout & Look</b></p>
                        <ul class="sub-list">
                          <li>
                            <label class="f-b">
                              <span class="txt">Responsive </span>
                              <div class="tooltip-icon"><i class="fas fa-info-circle"></i>
                                <span class="tooltiptext">Responsive coding provides optimal viewing and interaction
                                  experience. Responsive coding provides optimal viewing and interaction experience.
                                  Responsive coding provides optimal viewing and interaction experience.</span>
                              </div>
                              <input type="checkbox" class="" name="1" value="0" checked>

                              <span class="chk-btn switcher"></span>
                              <div class="clear-fix"></div>
                              <div class="sub-div">
                                <ul class="sub-list">
                                  <li>
                                    <label>
                                      <span class="txt">at PSD2HTML® discretion</span>
                                      <input type="radio" name="radio" value="99">
                                      <span class="radio-btn"></span>
                                      <span class="price">$99</span>
                                    </label>
                                  </li>
                                  <li>
                                    <label>
                                      <span class="txt">I will provide design for 1 extra resolution</span>
                                      <input type="radio" name="radio" value="129">
                                      <span class="radio-btn"></span>
                                      <span class="price">$129</span>
                                    </label>
                                  </li>
                                  <li>
                                    <label>
                                      <span class="txt">I will provide design for 2 extra resolutions</span>
                                      <input type="radio" name="radio" value="159">
                                      <span class="radio-btn"></span>
                                      <span class="price">$159</span>
                                    </label>
                                  </li>

                                </ul>
                              </div>
                            </label>

                          </li>
                          <li><label>
                              <span class="txt">Retina <div class="tooltip-icon"><i class="fas fa-info-circle"></i>
                                  <span class="tooltiptext">Responsive coding provides optimal viewing and interaction
                                    experience. Responsive coding provides optimal viewing and interaction experience.
                                    Responsive coding provides optimal viewing and interaction experience.</span>
                                </div></span>

                              <select name="" id="" class="custom-select-type">
                                <option value="No">No</option>
                                <option value="Yes, SVG / icons only">Yes, SVG / icons only</option>
                                <option value="Yes, everything including images">Yes, everything including images
                                </option>
                              </select>
                              <span class="price">$40</span>
                            </label></li>
                        </ul>
                      </div>
                    </div>
                  </div>



                </div>
              </div>
              <div class="tab-pane fade" id="pills-marketing" role="tabpanel" aria-labelledby="pills-marketing-tab">
              <center>
                  <h3>Shopify Project Details</h3>
                </center>

                <div id="accordion" class="faq-wrapper">
                  <div class="card">
                    <div class="card-header" id="headingOne">
                      <h5 class="mb-0">
                        <button aria-label="button" class="btn-link" data-toggle="collapse" data-target="#collapseOne"
                          aria-expanded="true" aria-controls="collapseOne">
                          Markup Options <span> <i class="fas fa-chevron-down"></i>
                            <i class="fas fa-chevron-up"></i> </span>
                        </button>
                      </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                      <div class="card-body">
                        <p><b>Note:</b> Markup options’ total price is influenced directly by the amount of pages in the
                          project.</p>
                        <p><b>Framework</b></p>
                        <ul class="sub-list">
                          <li><label>
                              <span class="txt">None</span>
                              <input type="radio" class="" name="1" value="0" checked>
                              <span class="radio-btn"></span>
                              <span class="price">Free</span>
                            </label></li>
                          <li><label>
                              <span class="txt">Bootstrap</span>
                              <input type="radio" class="" name="1" value="40">
                              <span class="radio-btn"></span>
                              <span class="price">$40</span>
                            </label>
                          </li>
                        </ul>
                        <p><b>Layout & Look</b></p>
                        <ul class="sub-list">
                          <li>
                            <label class="f-b">
                              <span class="txt">Responsive </span>
                              <div class="tooltip-icon"><i class="fas fa-info-circle"></i>
                                <span class="tooltiptext">Responsive coding provides optimal viewing and interaction
                                  experience. Responsive coding provides optimal viewing and interaction experience.
                                  Responsive coding provides optimal viewing and interaction experience.</span>
                              </div>
                              <input type="checkbox" class="" name="1" value="0" checked>

                              <span class="chk-btn switcher"></span>
                              <div class="clear-fix"></div>
                              <div class="sub-div">
                                <ul class="sub-list">
                                  <li>
                                    <label>
                                      <span class="txt">at PSD2HTML® discretion</span>
                                      <input type="radio" name="radio" value="99">
                                      <span class="radio-btn"></span>
                                      <span class="price">$99</span>
                                    </label>
                                  </li>
                                  <li>
                                    <label>
                                      <span class="txt">I will provide design for 1 extra resolution</span>
                                      <input type="radio" name="radio" value="129">
                                      <span class="radio-btn"></span>
                                      <span class="price">$129</span>
                                    </label>
                                  </li>
                                  <li>
                                    <label>
                                      <span class="txt">I will provide design for 2 extra resolutions</span>
                                      <input type="radio" name="radio" value="159">
                                      <span class="radio-btn"></span>
                                      <span class="price">$159</span>
                                    </label>
                                  </li>

                                </ul>
                              </div>
                            </label>

                          </li>
                          <li><label>
                              <span class="txt">Retina <div class="tooltip-icon"><i class="fas fa-info-circle"></i>
                                  <span class="tooltiptext">Responsive coding provides optimal viewing and interaction
                                    experience. Responsive coding provides optimal viewing and interaction experience.
                                    Responsive coding provides optimal viewing and interaction experience.</span>
                                </div></span>

                              <select name="" id="" class="custom-select-type">
                                <option value="No">No</option>
                                <option value="Yes, SVG / icons only">Yes, SVG / icons only</option>
                                <option value="Yes, everything including images">Yes, everything including images
                                </option>
                              </select>
                              <span class="price">$40</span>
                            </label></li>
                          <li>
                            <label>
                              <span class="txt">Print version CSS</span>
                              <input type="checkbox" name="" value="99">
                              <span class="chk-btn"></span>
                              <span class="price">$99</span>
                            </label>
                          </li>

                        </ul>
                        <p><b>Coding Options</b></p>
                        <ul class="sub-list">

                          <li><label>
                              <span class="txt">CSS preprocessors <div class="tooltip-icon"><i
                                    class="fas fa-info-circle"></i>
                                  <span class="tooltiptext"></span>
                                </div></span>

                              <select name="" id="" class="custom-select-type">
                                <option value="SCSS">SCSS</option>
                                <option value="None">None</option>
                              </select>
                              <span class="price">$40</span>
                            </label></li>
                          <li>
                            <label>
                              <span class="txt">Commented HTML / CSS</span>
                              <input type="checkbox" name="" value="99">
                              <span class="chk-btn"></span>
                              <span class="price">$99</span>
                            </label>
                          </li>

                        </ul>
                        <p><b>Optimization and Accessibility</b></p>
                        <ul class="sub-list">


                          <li>
                            <label>
                              <span class="txt">Scemantic Coding</span>
                              <input type="checkbox" name="" value="0">
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>

                        </ul>
                        <p><b>Compatibility</b></p>
                        <ul class="sub-list">


                          <li>
                            <label>
                              <span class="txt">Google Chrome</span>
                              <input type="checkbox" name="" value="0" checked disabled>
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Mozilla Firefox</span>
                              <input type="checkbox" name="" value="0" checked disabled>
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Safari 11+</span>
                              <input type="checkbox" name="" value="0" checked disabled>
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Opera</span>
                              <input type="checkbox" name="" value="0" checked disabled>
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Edge</span>
                              <input type="checkbox" name="" value="0" checked disabled>
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">iOS 11+ (iPhone, iPad)</span>
                              <input type="checkbox" name="" value="0" checked disabled>
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Android 8+</span>
                              <input type="checkbox" name="" value="0" checked disabled>
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Other / Outdated browser</span>
                              <input type="checkbox" name="" value="0">
                              <span class="chk-btn"></span>
                              <!-- <span class="price">Free</span> -->
                            </label>
                          </li>

                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingTwo">
                      <h5 class="mb-0">
                        <button aria-label="button" class="btn-link collapsed" data-toggle="collapse"
                          data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Interactivity Options <span> <i class="fas fa-chevron-down"></i>
                            <i class="fas fa-chevron-up"></i> </span>
                        </button>
                      </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                      <div class="card-body">
                        <p><b>Note:</b> Markup options’ total price is influenced directly by the amount of pages in the
                          project.</p>
                        <p><b>Framework</b></p>
                        <ul class="sub-list">
                          <li><label>
                              <span class="txt">None</span>
                              <input type="radio" class="" name="1" value="0" checked>
                              <span class="radio-btn"></span>
                              <span class="price">Free</span>
                            </label></li>
                          <li><label>
                              <span class="txt">Bootstrap</span>
                              <input type="radio" class="" name="1" value="40">
                              <span class="radio-btn"></span>
                              <span class="price">$40</span>
                            </label>
                          </li>
                        </ul>
                        <p><b>Layout & Look</b></p>
                        <ul class="sub-list">
                          <li>
                            <label class="f-b">
                              <span class="txt">Responsive </span>
                              <div class="tooltip-icon"><i class="fas fa-info-circle"></i>
                                <span class="tooltiptext">Responsive coding provides optimal viewing and interaction
                                  experience. Responsive coding provides optimal viewing and interaction experience.
                                  Responsive coding provides optimal viewing and interaction experience.</span>
                              </div>
                              <input type="checkbox" class="" name="1" value="0" checked>

                              <span class="chk-btn switcher"></span>
                              <div class="clear-fix"></div>
                              <div class="sub-div">
                                <ul class="sub-list">
                                  <li>
                                    <label>
                                      <span class="txt">at PSD2HTML® discretion</span>
                                      <input type="radio" name="radio" value="99">
                                      <span class="radio-btn"></span>
                                      <span class="price">$99</span>
                                    </label>
                                  </li>
                                  <li>
                                    <label>
                                      <span class="txt">I will provide design for 1 extra resolution</span>
                                      <input type="radio" name="radio" value="129">
                                      <span class="radio-btn"></span>
                                      <span class="price">$129</span>
                                    </label>
                                  </li>
                                  <li>
                                    <label>
                                      <span class="txt">I will provide design for 2 extra resolutions</span>
                                      <input type="radio" name="radio" value="159">
                                      <span class="radio-btn"></span>
                                      <span class="price">$159</span>
                                    </label>
                                  </li>

                                </ul>
                              </div>
                            </label>

                          </li>
                          <li><label>
                              <span class="txt">Retina <div class="tooltip-icon"><i class="fas fa-info-circle"></i>
                                  <span class="tooltiptext">Responsive coding provides optimal viewing and interaction
                                    experience. Responsive coding provides optimal viewing and interaction experience.
                                    Responsive coding provides optimal viewing and interaction experience.</span>
                                </div></span>

                              <select name="" id="" class="custom-select-type">
                                <option value="No">No</option>
                                <option value="Yes, SVG / icons only">Yes, SVG / icons only</option>
                                <option value="Yes, everything including images">Yes, everything including images
                                </option>
                              </select>
                              <span class="price">$40</span>
                            </label></li>
                        </ul>
                      </div>
                    </div>
                  </div>



                </div>
              </div>
              <div class="tab-pane fade" id="pills-data" role="tabpanel" aria-labelledby="pills-data-tab">
              <center>
                  <h3>Banners Project Details</h3>
                </center>

                <div id="accordion" class="faq-wrapper">
                  <div class="card">
                    <div class="card-header" id="headingOne">
                      <h5 class="mb-0">
                        <button aria-label="button" class="btn-link" data-toggle="collapse" data-target="#collapseOne"
                          aria-expanded="true" aria-controls="collapseOne">
                          Markup Options <span> <i class="fas fa-chevron-down"></i>
                            <i class="fas fa-chevron-up"></i> </span>
                        </button>
                      </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                      <div class="card-body">
                        <p><b>Note:</b> Markup options’ total price is influenced directly by the amount of pages in the
                          project.</p>
                        <p><b>Framework</b></p>
                        <ul class="sub-list">
                          <li><label>
                              <span class="txt">None</span>
                              <input type="radio" class="" name="1" value="0" checked>
                              <span class="radio-btn"></span>
                              <span class="price">Free</span>
                            </label></li>
                          <li><label>
                              <span class="txt">Bootstrap</span>
                              <input type="radio" class="" name="1" value="40">
                              <span class="radio-btn"></span>
                              <span class="price">$40</span>
                            </label>
                          </li>
                        </ul>
                        <p><b>Layout & Look</b></p>
                        <ul class="sub-list">
                          <li>
                            <label class="f-b">
                              <span class="txt">Responsive </span>
                              <div class="tooltip-icon"><i class="fas fa-info-circle"></i>
                                <span class="tooltiptext">Responsive coding provides optimal viewing and interaction
                                  experience. Responsive coding provides optimal viewing and interaction experience.
                                  Responsive coding provides optimal viewing and interaction experience.</span>
                              </div>
                              <input type="checkbox" class="" name="1" value="0" checked>

                              <span class="chk-btn switcher"></span>
                              <div class="clear-fix"></div>
                              <div class="sub-div">
                                <ul class="sub-list">
                                  <li>
                                    <label>
                                      <span class="txt">at PSD2HTML® discretion</span>
                                      <input type="radio" name="radio" value="99">
                                      <span class="radio-btn"></span>
                                      <span class="price">$99</span>
                                    </label>
                                  </li>
                                  <li>
                                    <label>
                                      <span class="txt">I will provide design for 1 extra resolution</span>
                                      <input type="radio" name="radio" value="129">
                                      <span class="radio-btn"></span>
                                      <span class="price">$129</span>
                                    </label>
                                  </li>
                                  <li>
                                    <label>
                                      <span class="txt">I will provide design for 2 extra resolutions</span>
                                      <input type="radio" name="radio" value="159">
                                      <span class="radio-btn"></span>
                                      <span class="price">$159</span>
                                    </label>
                                  </li>

                                </ul>
                              </div>
                            </label>

                          </li>
                          <li><label>
                              <span class="txt">Retina <div class="tooltip-icon"><i class="fas fa-info-circle"></i>
                                  <span class="tooltiptext">Responsive coding provides optimal viewing and interaction
                                    experience. Responsive coding provides optimal viewing and interaction experience.
                                    Responsive coding provides optimal viewing and interaction experience.</span>
                                </div></span>

                              <select name="" id="" class="custom-select-type">
                                <option value="No">No</option>
                                <option value="Yes, SVG / icons only">Yes, SVG / icons only</option>
                                <option value="Yes, everything including images">Yes, everything including images
                                </option>
                              </select>
                              <span class="price">$40</span>
                            </label></li>
                          <li>
                            <label>
                              <span class="txt">Print version CSS</span>
                              <input type="checkbox" name="" value="99">
                              <span class="chk-btn"></span>
                              <span class="price">$99</span>
                            </label>
                          </li>

                        </ul>
                        <p><b>Coding Options</b></p>
                        <ul class="sub-list">

                          <li><label>
                              <span class="txt">CSS preprocessors <div class="tooltip-icon"><i
                                    class="fas fa-info-circle"></i>
                                  <span class="tooltiptext"></span>
                                </div></span>

                              <select name="" id="" class="custom-select-type">
                                <option value="SCSS">SCSS</option>
                                <option value="None">None</option>
                              </select>
                              <span class="price">$40</span>
                            </label></li>
                          <li>
                            <label>
                              <span class="txt">Commented HTML / CSS</span>
                              <input type="checkbox" name="" value="99">
                              <span class="chk-btn"></span>
                              <span class="price">$99</span>
                            </label>
                          </li>

                        </ul>
                        <p><b>Optimization and Accessibility</b></p>
                        <ul class="sub-list">


                          <li>
                            <label>
                              <span class="txt">Scemantic Coding</span>
                              <input type="checkbox" name="" value="0">
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>

                        </ul>
                        <p><b>Compatibility</b></p>
                        <ul class="sub-list">


                          <li>
                            <label>
                              <span class="txt">Google Chrome</span>
                              <input type="checkbox" name="" value="0" checked disabled>
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Mozilla Firefox</span>
                              <input type="checkbox" name="" value="0" checked disabled>
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Safari 11+</span>
                              <input type="checkbox" name="" value="0" checked disabled>
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Opera</span>
                              <input type="checkbox" name="" value="0" checked disabled>
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Edge</span>
                              <input type="checkbox" name="" value="0" checked disabled>
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">iOS 11+ (iPhone, iPad)</span>
                              <input type="checkbox" name="" value="0" checked disabled>
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Android 8+</span>
                              <input type="checkbox" name="" value="0" checked disabled>
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Other / Outdated browser</span>
                              <input type="checkbox" name="" value="0">
                              <span class="chk-btn"></span>
                              <!-- <span class="price">Free</span> -->
                            </label>
                          </li>

                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingTwo">
                      <h5 class="mb-0">
                        <button aria-label="button" class="btn-link collapsed" data-toggle="collapse"
                          data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Interactivity Options <span> <i class="fas fa-chevron-down"></i>
                            <i class="fas fa-chevron-up"></i> </span>
                        </button>
                      </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                      <div class="card-body">
                        <p><b>Note:</b> Markup options’ total price is influenced directly by the amount of pages in the
                          project.</p>
                        <p><b>Framework</b></p>
                        <ul class="sub-list">
                          <li><label>
                              <span class="txt">None</span>
                              <input type="radio" class="" name="1" value="0" checked>
                              <span class="radio-btn"></span>
                              <span class="price">Free</span>
                            </label></li>
                          <li><label>
                              <span class="txt">Bootstrap</span>
                              <input type="radio" class="" name="1" value="40">
                              <span class="radio-btn"></span>
                              <span class="price">$40</span>
                            </label>
                          </li>
                        </ul>
                        <p><b>Layout & Look</b></p>
                        <ul class="sub-list">
                          <li>
                            <label class="f-b">
                              <span class="txt">Responsive </span>
                              <div class="tooltip-icon"><i class="fas fa-info-circle"></i>
                                <span class="tooltiptext">Responsive coding provides optimal viewing and interaction
                                  experience. Responsive coding provides optimal viewing and interaction experience.
                                  Responsive coding provides optimal viewing and interaction experience.</span>
                              </div>
                              <input type="checkbox" class="" name="1" value="0" checked>

                              <span class="chk-btn switcher"></span>
                              <div class="clear-fix"></div>
                              <div class="sub-div">
                                <ul class="sub-list">
                                  <li>
                                    <label>
                                      <span class="txt">at PSD2HTML® discretion</span>
                                      <input type="radio" name="radio" value="99">
                                      <span class="radio-btn"></span>
                                      <span class="price">$99</span>
                                    </label>
                                  </li>
                                  <li>
                                    <label>
                                      <span class="txt">I will provide design for 1 extra resolution</span>
                                      <input type="radio" name="radio" value="129">
                                      <span class="radio-btn"></span>
                                      <span class="price">$129</span>
                                    </label>
                                  </li>
                                  <li>
                                    <label>
                                      <span class="txt">I will provide design for 2 extra resolutions</span>
                                      <input type="radio" name="radio" value="159">
                                      <span class="radio-btn"></span>
                                      <span class="price">$159</span>
                                    </label>
                                  </li>

                                </ul>
                              </div>
                            </label>

                          </li>
                          <li><label>
                              <span class="txt">Retina <div class="tooltip-icon"><i class="fas fa-info-circle"></i>
                                  <span class="tooltiptext">Responsive coding provides optimal viewing and interaction
                                    experience. Responsive coding provides optimal viewing and interaction experience.
                                    Responsive coding provides optimal viewing and interaction experience.</span>
                                </div></span>

                              <select name="" id="" class="custom-select-type">
                                <option value="No">No</option>
                                <option value="Yes, SVG / icons only">Yes, SVG / icons only</option>
                                <option value="Yes, everything including images">Yes, everything including images
                                </option>
                              </select>
                              <span class="price">$40</span>
                            </label></li>
                        </ul>
                      </div>
                    </div>
                  </div>



                </div>
              </div>
              <div class="tab-pane fade" id="pills-voice" role="tabpanel" aria-labelledby="pills-voice-tab">
              <center>
                  <h3>Magento Project Details</h3>
                </center>

                <div id="accordion" class="faq-wrapper">
                  <div class="card">
                    <div class="card-header" id="headingOne">
                      <h5 class="mb-0">
                        <button aria-label="button" class="btn-link" data-toggle="collapse" data-target="#collapseOne"
                          aria-expanded="true" aria-controls="collapseOne">
                          Markup Options <span> <i class="fas fa-chevron-down"></i>
                            <i class="fas fa-chevron-up"></i> </span>
                        </button>
                      </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                      <div class="card-body">
                        <p><b>Note:</b> Markup options’ total price is influenced directly by the amount of pages in the
                          project.</p>
                        <p><b>Framework</b></p>
                        <ul class="sub-list">
                          <li><label>
                              <span class="txt">None</span>
                              <input type="radio" class="" name="1" value="0" checked>
                              <span class="radio-btn"></span>
                              <span class="price">Free</span>
                            </label></li>
                          <li><label>
                              <span class="txt">Bootstrap</span>
                              <input type="radio" class="" name="1" value="40">
                              <span class="radio-btn"></span>
                              <span class="price">$40</span>
                            </label>
                          </li>
                        </ul>
                        <p><b>Layout & Look</b></p>
                        <ul class="sub-list">
                          <li>
                            <label class="f-b">
                              <span class="txt">Responsive </span>
                              <div class="tooltip-icon"><i class="fas fa-info-circle"></i>
                                <span class="tooltiptext">Responsive coding provides optimal viewing and interaction
                                  experience. Responsive coding provides optimal viewing and interaction experience.
                                  Responsive coding provides optimal viewing and interaction experience.</span>
                              </div>
                              <input type="checkbox" class="" name="1" value="0" checked>

                              <span class="chk-btn switcher"></span>
                              <div class="clear-fix"></div>
                              <div class="sub-div">
                                <ul class="sub-list">
                                  <li>
                                    <label>
                                      <span class="txt">at PSD2HTML® discretion</span>
                                      <input type="radio" name="radio" value="99">
                                      <span class="radio-btn"></span>
                                      <span class="price">$99</span>
                                    </label>
                                  </li>
                                  <li>
                                    <label>
                                      <span class="txt">I will provide design for 1 extra resolution</span>
                                      <input type="radio" name="radio" value="129">
                                      <span class="radio-btn"></span>
                                      <span class="price">$129</span>
                                    </label>
                                  </li>
                                  <li>
                                    <label>
                                      <span class="txt">I will provide design for 2 extra resolutions</span>
                                      <input type="radio" name="radio" value="159">
                                      <span class="radio-btn"></span>
                                      <span class="price">$159</span>
                                    </label>
                                  </li>

                                </ul>
                              </div>
                            </label>

                          </li>
                          <li><label>
                              <span class="txt">Retina <div class="tooltip-icon"><i class="fas fa-info-circle"></i>
                                  <span class="tooltiptext">Responsive coding provides optimal viewing and interaction
                                    experience. Responsive coding provides optimal viewing and interaction experience.
                                    Responsive coding provides optimal viewing and interaction experience.</span>
                                </div></span>

                              <select name="" id="" class="custom-select-type">
                                <option value="No">No</option>
                                <option value="Yes, SVG / icons only">Yes, SVG / icons only</option>
                                <option value="Yes, everything including images">Yes, everything including images
                                </option>
                              </select>
                              <span class="price">$40</span>
                            </label></li>
                          <li>
                            <label>
                              <span class="txt">Print version CSS</span>
                              <input type="checkbox" name="" value="99">
                              <span class="chk-btn"></span>
                              <span class="price">$99</span>
                            </label>
                          </li>

                        </ul>
                        <p><b>Coding Options</b></p>
                        <ul class="sub-list">

                          <li><label>
                              <span class="txt">CSS preprocessors <div class="tooltip-icon"><i
                                    class="fas fa-info-circle"></i>
                                  <span class="tooltiptext"></span>
                                </div></span>

                              <select name="" id="" class="custom-select-type">
                                <option value="SCSS">SCSS</option>
                                <option value="None">None</option>
                              </select>
                              <span class="price">$40</span>
                            </label></li>
                          <li>
                            <label>
                              <span class="txt">Commented HTML / CSS</span>
                              <input type="checkbox" name="" value="99">
                              <span class="chk-btn"></span>
                              <span class="price">$99</span>
                            </label>
                          </li>

                        </ul>
                        <p><b>Optimization and Accessibility</b></p>
                        <ul class="sub-list">


                          <li>
                            <label>
                              <span class="txt">Scemantic Coding</span>
                              <input type="checkbox" name="" value="0">
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>

                        </ul>
                        <p><b>Compatibility</b></p>
                        <ul class="sub-list">


                          <li>
                            <label>
                              <span class="txt">Google Chrome</span>
                              <input type="checkbox" name="" value="0" checked disabled>
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Mozilla Firefox</span>
                              <input type="checkbox" name="" value="0" checked disabled>
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Safari 11+</span>
                              <input type="checkbox" name="" value="0" checked disabled>
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Opera</span>
                              <input type="checkbox" name="" value="0" checked disabled>
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Edge</span>
                              <input type="checkbox" name="" value="0" checked disabled>
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">iOS 11+ (iPhone, iPad)</span>
                              <input type="checkbox" name="" value="0" checked disabled>
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Android 8+</span>
                              <input type="checkbox" name="" value="0" checked disabled>
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Other / Outdated browser</span>
                              <input type="checkbox" name="" value="0">
                              <span class="chk-btn"></span>
                              <!-- <span class="price">Free</span> -->
                            </label>
                          </li>

                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingTwo">
                      <h5 class="mb-0">
                        <button aria-label="button" class="btn-link collapsed" data-toggle="collapse"
                          data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Interactivity Options <span> <i class="fas fa-chevron-down"></i>
                            <i class="fas fa-chevron-up"></i> </span>
                        </button>
                      </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                      <div class="card-body">
                        <p><b>Note:</b> Markup options’ total price is influenced directly by the amount of pages in the
                          project.</p>
                        <p><b>Framework</b></p>
                        <ul class="sub-list">
                          <li><label>
                              <span class="txt">None</span>
                              <input type="radio" class="" name="1" value="0" checked>
                              <span class="radio-btn"></span>
                              <span class="price">Free</span>
                            </label></li>
                          <li><label>
                              <span class="txt">Bootstrap</span>
                              <input type="radio" class="" name="1" value="40">
                              <span class="radio-btn"></span>
                              <span class="price">$40</span>
                            </label>
                          </li>
                        </ul>
                        <p><b>Layout & Look</b></p>
                        <ul class="sub-list">
                          <li>
                            <label class="f-b">
                              <span class="txt">Responsive </span>
                              <div class="tooltip-icon"><i class="fas fa-info-circle"></i>
                                <span class="tooltiptext">Responsive coding provides optimal viewing and interaction
                                  experience. Responsive coding provides optimal viewing and interaction experience.
                                  Responsive coding provides optimal viewing and interaction experience.</span>
                              </div>
                              <input type="checkbox" class="" name="1" value="0" checked>

                              <span class="chk-btn switcher"></span>
                              <div class="clear-fix"></div>
                              <div class="sub-div">
                                <ul class="sub-list">
                                  <li>
                                    <label>
                                      <span class="txt">at PSD2HTML® discretion</span>
                                      <input type="radio" name="radio" value="99">
                                      <span class="radio-btn"></span>
                                      <span class="price">$99</span>
                                    </label>
                                  </li>
                                  <li>
                                    <label>
                                      <span class="txt">I will provide design for 1 extra resolution</span>
                                      <input type="radio" name="radio" value="129">
                                      <span class="radio-btn"></span>
                                      <span class="price">$129</span>
                                    </label>
                                  </li>
                                  <li>
                                    <label>
                                      <span class="txt">I will provide design for 2 extra resolutions</span>
                                      <input type="radio" name="radio" value="159">
                                      <span class="radio-btn"></span>
                                      <span class="price">$159</span>
                                    </label>
                                  </li>

                                </ul>
                              </div>
                            </label>

                          </li>
                          <li><label>
                              <span class="txt">Retina <div class="tooltip-icon"><i class="fas fa-info-circle"></i>
                                  <span class="tooltiptext">Responsive coding provides optimal viewing and interaction
                                    experience. Responsive coding provides optimal viewing and interaction experience.
                                    Responsive coding provides optimal viewing and interaction experience.</span>
                                </div></span>

                              <select name="" id="" class="custom-select-type">
                                <option value="No">No</option>
                                <option value="Yes, SVG / icons only">Yes, SVG / icons only</option>
                                <option value="Yes, everything including images">Yes, everything including images
                                </option>
                              </select>
                              <span class="price">$40</span>
                            </label></li>
                        </ul>
                      </div>
                    </div>
                  </div>



                </div>
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <div class="order-section sticky-column">
              <!-- top container -->
              <div class="top-container">
                <div class="cell">
                  <label for="pages" class="title">Number of pages:</label>
                  <input type="text" id="pages" name="" min="1" max="999" maxlength="3" class="small">
                </div>
                <div class="cell">
                  <span class="info-text"><mark>$<span class="">149</span></mark>/inner, <mark>$<span
                        class="">298</span></mark>/first one</span>

                </div>
              </div>
              <div class="details-section">
                <div class="details-box">
                  <div class="row">
                    <div class="cell name">
                      <input type="text" id="order_user_name" name="" placeholder="Name" class="form-control">
                    </div>
                    <div class="cell required email">
                      <input type="email" id="order_user_email" name="" required="required" placeholder="Email *"
                        class="from-control">

                    </div>
                    <div class="cell phone">
                      <input type="text" id="order_user_phone" name="" maxlength="20" placeholder="Skype / Phone"
                        class="from-control">
                    </div>
                  </div>
                  <div class="required drop-area">
                    <div class="section">
                      <div class="textarea-box">
                        <textarea id="order_message" name="" required="required" rows="10"
                          placeholder="Notes / Project brief *" cols="30"></textarea>


                        <div class="file">

                          <span class="file-btn" id="order-new-choose-file">open</span>
                          <input type="hidden" id="order-new-attach-file" name="">
                          <!-- <span class="note-box" >Please remember to attach your fonts or provide us with all the necessary info to retrieve them.</span> -->
                          <ul class="file-bar">
                            <li><span style="position: relative; display: inline-block;"><a href="#">Browse</a><input
                                  type="file" size="1" multiple="" class="file-input"></span></li>
                            <li><a href="#">Link</a></li>
                            <li><span class="drag-drop">drop files here</span></li>
                          </ul>
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
  </div>


  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>