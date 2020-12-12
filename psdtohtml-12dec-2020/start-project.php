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
        <span class="des-none">Scroll ➞</span>
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
                        <p class="note-text"><b>Note:</b> Markup options’ total price is influenced directly by the amount of pages in the
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
                              <span class="txt info-visible"><span>Retina</span> <span>  <div class="tooltip-icon"><i class="fas fa-info-circle"></i>
                                  <span class="tooltiptext">Responsive coding provides optimal viewing and interaction
                                    experience. Responsive coding provides optimal viewing and interaction experience.
                                    Responsive coding provides optimal viewing and interaction experience.</span>
                                </div></span>
                                </span>
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
                              <span class="txt info-visible"><span>CSS preprocessors</span> <span><div class="tooltip-icon"><i
                                    class="fas fa-info-circle"></i>
                                  <span class="tooltiptext">Our favorite CSS preprocessor used by dafault in all projects is Sass, please, indicate if you have other preferences.</span>
                                </div></span>
                                </span>

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
                              <span class="txt info-visible"><span>Semantic Coding</span>
                              <span><div class="tooltip-icon"><i
                                    class="fas fa-info-circle"></i>
                                  <span class="tooltiptext">Semantically correct code that accurately describes the content of each page. Search-engine-bots-friendly code.</span>
                                </div></span>
                                </span>
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
                        <p><b>Delivery Options</b></p>
                        <ul class="sub-list">


                          <li>
                            <label>
                              <span class="txt info-visible"><span>SSI Templates</span>
                              <span><div class="tooltip-icon"><i
                                    class="fas fa-info-circle"></i>
                                  <span class="tooltiptext">SSI is used to ensure that common components such as a copyright notice, contact info, header, footer etc. stay the same on all pages throughout the site and are easily editable.</span>
                                </div></span>
                                </span>
                              <input type="checkbox" name="" value="20">
                              <span class="chk-btn"></span>
                              <span class="price">$20</span>
                            </label>
                          </li>
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
                        <p class="note-text"><b>Note:</b> Markup options’ total price is influenced directly by the amount of pages in the
                          project.</p>
                        <p><b>Framework</b></p>
                        <ul class="sub-list">
                        <li>
                            <label>
                              <span class="txt">Burger menu</span>
                              <input type="checkbox" name="" value="0">
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Carousel</span>
                              <input type="checkbox" name="" value="19">
                              <span class="chk-btn"></span>
                              <span class="price">$19</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Tabs</span>
                              <input type="checkbox" name="" value="19">
                              <span class="chk-btn"></span>
                              <span class="price">$19</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Accordion / Open/close</span>
                              <input type="checkbox" name="" value="0">
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Lightbox</span>
                              <input type="checkbox" name="" value="49">
                              <span class="chk-btn"></span>
                              <span class="price">$49</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Popup</span>
                              <input type="checkbox" name="" value="49">
                              <span class="chk-btn"></span>
                              <span class="price">$49</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Tooltip</span>
                              <input type="checkbox" name="" value="39">
                              <span class="chk-btn"></span>
                              <span class="price">$39</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Custom forms</span>
                              <input type="checkbox" name="" value="49">
                              <span class="chk-btn"></span>
                              <span class="price">$49</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Slider</span>
                              <input type="checkbox" name="" value="59">
                              <span class="chk-btn"></span>
                              <span class="price">$59</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Custom scroll</span>
                              <input type="checkbox" name="" value="39">
                              <span class="chk-btn"></span>
                              <span class="price">$39</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Animated sorting / Filter</span>
                              <input type="checkbox" name="" value="59">
                              <span class="chk-btn"></span>
                              <span class="price">$59</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Calendar / Datepicker</span>
                              <input type="checkbox" name="" value="59">
                              <span class="chk-btn"></span>
                              <span class="price">$59</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Form validation</span>
                              <input type="checkbox" name="" value="39">
                              <span class="chk-btn"></span>
                              <span class="price">$39</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Anchor navigation with smooth scroll</span>
                              <input type="checkbox" name="" value="59">
                              <span class="chk-btn"></span>
                              <span class="price">$59</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt info-visible">
                                <span class="">Masonry</span>
                                <span><div class="tooltip-icon"><i
                                    class="fas fa-info-circle"></i>
                                  <span class="tooltiptext">Check if you need blocks with aliquot widths, but varying height to be rebuilt filling all the allotted space.</span>
                                </div></span>
                                </span>
                              <input type="checkbox" name="" value="59">
                              <span class="chk-btn"></span>
                              <span class="price">$59</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Background video</span>
                              <input type="checkbox" name="" value="119">
                              <span class="chk-btn"></span>
                              <span class="price">$119</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Parallax on background</span>
                              <input type="checkbox" name="" value="99">
                              <span class="chk-btn"></span>
                              <span class="price">$99</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Animation on scroll</span>
                              <input type="checkbox" name="" value="59">
                              <span class="chk-btn"></span>
                              <span class="price">$59</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Autocomplete</span>
                              <input type="checkbox" name="" value="59">
                              <span class="chk-btn"></span>
                              <span class="price">$59</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Preloader</span>
                              <input type="checkbox" name="" value="59">
                              <span class="chk-btn"></span>
                              <span class="price">$39</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Custom video player</span>
                              <input type="checkbox" name="" value="79">
                              <span class="chk-btn"></span>
                              <span class="price">$79</span>
                            </label>
                          </li>
                        </ul>
                        <p><b>Advanced Interactivity Options</b></p>
                        <p class="note-text"><b>Note:</b> Advanced interactivity options' development rates start from $42 per hour. The final price for it will be provided upon thorough analysis of your designs and requirements.</p>
                        <ul class="sub-list">
                        <li>
                            <label>
                              <span class="txt">Advanced CSS3 animation</span>
                              <input type="checkbox" name="">
                              <span class="chk-btn"></span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">jQuery</span>
                              <input type="checkbox" name="">
                              <span class="chk-btn"></span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">jQuery UI</span>
                              <input type="checkbox" name="">
                              <span class="chk-btn"></span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Google maps</span>
                              <input type="checkbox" name="">
                              <span class="chk-btn"></span>
                            </label>
                          </li>
                        </ul>
                        <p><b>Your needs are not on the list? Let us know.</b></p>
                      </div>
                    </div>
                  </div>



                </div>

              </div>
              <div class="tab-pane fade" id="pills-campaigns" role="tabpanel" aria-labelledby="pills-campaigns-tab">
              <center>
                  <h3>Email Project Details</h3>
                </center>

                <div id="accordion2" class="faq-wrapper">
                  <div class="card">
                    <div class="card-header" id="emailone">
                      <h5 class="mb-0">
                        <button aria-label="button" class="btn-link" data-toggle="collapse" data-target="#emailcollapseOne"
                          aria-expanded="true" aria-controls="emailcollapseOne">
                          Markup Options <span> <i class="fas fa-chevron-down"></i>
                            <i class="fas fa-chevron-up"></i> </span>
                        </button>
                      </h5>
                    </div>

                    <div id="emailcollapseOne" class="collapse show" aria-labelledby="emailone" data-parent="#accordion2">
                      <div class="card-body">
                        <ul class="sub-list">
                        <li>
                            <label>
                            <span class="txt info-visible">
                                <span class="red-color">ASAP</span>
                                <span><div class="tooltip-icon"><i
                                    class="fas fa-info-circle"></i>
                                  <span class="tooltiptext">If you need your email template to be delivered twice as fast, we give your project the highest priority and ensure the maximum development speed.</span>
                                </div></span>
                                </span>
                              <input type="checkbox" name="">
                              <span class="chk-btn"></span>
                              <span class="price">X2</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Responsive</span>
                              <input type="checkbox" name="" value="79">
                              <span class="chk-btn"></span>
                              <span class="price">$79</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Retina display ready</span>
                              <input type="checkbox" name="" value="79">
                              <span class="chk-btn"></span>
                              <span class="price">$79</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Animated GIF Email</span>
                              <input type="checkbox" name="" value="79">
                              <span class="chk-btn"></span>
                              <span class="price">$79</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">RTL</span>
                              <input type="checkbox" name="" value="79">
                              <span class="chk-btn"></span>
                              <span class="price">$79</span>
                            </label>
                          </li>

                          <li>
                            <label>
                              <span class="txt">Outlook File Template</span>
                              <input type="checkbox" name="" value="79">
                              <span class="chk-btn"></span>
                              <span class="price">$79</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">MailChimp</span>
                              <input type="checkbox" name="" value="79">
                              <span class="chk-btn"></span>
                              <span class="price">$79</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Campaign Monitor</span>
                              <input type="checkbox" name="" value="79">
                              <span class="chk-btn"></span>
                              <span class="price">$79</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Salesforce Pardot</span>
                              <input type="checkbox" name="" value="79">
                              <span class="chk-btn"></span>
                              <span class="price">$79</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">HubSpot</span>
                              <input type="checkbox" name="" value="79">
                              <span class="chk-btn"></span>
                              <span class="price">$79</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Marketo</span>
                              <input type="checkbox" name="" value="79">
                              <span class="chk-btn"></span>
                              <span class="price">$79</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">SendGrid</span>
                              <input type="checkbox" name="" value="79">
                              <span class="chk-btn"></span>
                              <span class="price">$79</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">CleverReach</span>
                              <input type="checkbox" name="" value="79">
                              <span class="chk-btn"></span>
                              <span class="price">$79</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Klaviyo</span>
                              <input type="checkbox" name="" value="79">
                              <span class="chk-btn"></span>
                              <span class="price">$79</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Constant Contact</span>
                              <input type="checkbox" name="" value="79">
                              <span class="chk-btn"></span>
                              <span class="price">$79</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">ActiveCampaign</span>
                              <input type="checkbox" name="" value="79">
                              <span class="chk-btn"></span>
                              <span class="price">$79</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">StampReady</span>
                              <input type="checkbox" name="" value="79">
                              <span class="chk-btn"></span>
                              <span class="price">$79</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Mandrill</span>
                              <input type="checkbox" name="" value="79">
                              <span class="chk-btn"></span>
                              <span class="price">$79</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">iContact</span>
                              <input type="checkbox" name="" value="79">
                              <span class="chk-btn"></span>
                              <span class="price">$79</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">VerticalResponse</span>
                              <input type="checkbox" name="" value="79">
                              <span class="chk-btn"></span>
                              <span class="price">$79</span>
                            </label>
                          </li>


                        </ul>
                        <p><b>Desktop Compatibility</b></p>
                        <ul class="sub-list">


                          <li>
                            <label>
                              <span class="txt">Outlook 365 (Windows)</span>
                              <input type="checkbox" name="" value="0" checked disabled>
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Outlook 2019 (Windows)</span>
                              <input type="checkbox" name="" value="0" checked disabled>
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Outlook 2016 (Windows, macOS)</span>
                              <input type="checkbox" name="" value="0" checked disabled>
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Outlook 2013 (Windows)</span>
                              <input type="checkbox" name="" value="0" checked disabled>
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Outlook 2010 (Windows)</span>
                              <input type="checkbox" name="" value="0" checked disabled>
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Outlook 2007 (Windows)</span>
                              <input type="checkbox" name="" value="0" checked disabled>
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Outlook 2007+ (Windows 120dpi)</span>
                              <input type="checkbox" name="" value="0" checked disabled>
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Apple Mail (Dark Mode)</span>
                              <input type="checkbox" name="" value="0" checked disabled>
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Apple Mail</span>
                              <input type="checkbox" name="" value="0" checked disabled>
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Windows 10 Mail</span>
                              <input type="checkbox" name="" value="0" checked disabled>
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Thunderbird (Windows, macOS)</span>
                              <input type="checkbox" name="" value="0" checked disabled>
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>
                        </ul>
                        <p><b>Web (Chrome, Safari, IE, FF) Compatibility</b></p>
                        <ul class="sub-list">


                          <li>
                            <label>
                              <span class="txt">Gmail</span>
                              <input type="checkbox" name="" value="0" checked disabled>
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Outlook.com</span>
                              <input type="checkbox" name="" value="0" checked disabled>
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Yahoo! Mail</span>
                              <input type="checkbox" name="" value="0" checked disabled>
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">AOL Mail</span>
                              <input type="checkbox" name="" value="0" checked disabled>
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">GMX</span>
                              <input type="checkbox" name="" value="0" checked disabled>
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">WEB.DE</span>
                              <input type="checkbox" name="" value="0" checked disabled>
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Mail.ru</span>
                              <input type="checkbox" name="" value="0" checked disabled>
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Zoho Mail</span>
                              <input type="checkbox" name="" value="0" checked disabled>
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">ProtonMail</span>
                              <input type="checkbox" name="" value="0" checked disabled>
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>
                          
                        </ul>
                        <p><b>Android & iOS (iPhone, iPad) Compatibility</b></p>
                        <ul class="sub-list">


                          <li>
                            <label>
                              <span class="txt">Gmail App</span>
                              <input type="checkbox" name="" value="0" checked disabled>
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Outlook App</span>
                              <input type="checkbox" name="" value="0" checked disabled>
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Yahoo Mail App</span>
                              <input type="checkbox" name="" value="0" checked disabled>
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">AOL App</span>
                              <input type="checkbox" name="" value="0" checked disabled>
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">GMX Mail App</span>
                              <input type="checkbox" name="" value="0" checked disabled>
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">WEB.DE Mail App</span>
                              <input type="checkbox" name="" value="0" checked disabled>
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Mail.ru App</span>
                              <input type="checkbox" name="" value="0" checked disabled>
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Zoho Mail App</span>
                              <input type="checkbox" name="" value="0" checked disabled>
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">ProtonMail App</span>
                              <input type="checkbox" name="" value="0" checked disabled>
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Native mail App</span>
                              <input type="checkbox" name="" value="0" checked disabled>
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>
                          
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

                <div id="accordion3" class="faq-wrapper">
                  <div class="card">
                    <div class="card-header" id="wordpressheadingOne">
                      <h5 class="mb-0">
                        <button aria-label="button" class="btn-link collapsed" data-toggle="collapse" data-target="#wordpresscollapseOne"
                          aria-expanded="false" aria-controls="wordpresscollapseOne">
                          Markup Options <span> <i class="fas fa-chevron-down"></i>
                            <i class="fas fa-chevron-up"></i> </span>
                        </button>
                      </h5>
                    </div>

                    <div id="wordpresscollapseOne" class="collapse" aria-labelledby="wordpressheadingOne" data-parent="#accordion3">
                    <div class="card-body">
                        <p class="note-text"><b>Note:</b> Markup options’ total price is influenced directly by the amount of pages in the
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
                              <span class="txt info-visible"><span>Retina</span> <span>  <div class="tooltip-icon"><i class="fas fa-info-circle"></i>
                                  <span class="tooltiptext">Responsive coding provides optimal viewing and interaction
                                    experience. Responsive coding provides optimal viewing and interaction experience.
                                    Responsive coding provides optimal viewing and interaction experience.</span>
                                </div></span>
                                </span>
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
                              <span class="txt info-visible"><span>CSS preprocessors</span> <span><div class="tooltip-icon"><i
                                    class="fas fa-info-circle"></i>
                                  <span class="tooltiptext">Our favorite CSS preprocessor used by dafault in all projects is Sass, please, indicate if you have other preferences.</span>
                                </div></span>
                                </span>

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
                              <span class="txt info-visible"><span>Semantic Coding</span>
                              <span><div class="tooltip-icon"><i
                                    class="fas fa-info-circle"></i>
                                  <span class="tooltiptext">Semantically correct code that accurately describes the content of each page. Search-engine-bots-friendly code.</span>
                                </div></span>
                                </span>
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
                        <p><b>Delivery Options</b></p>
                        <ul class="sub-list">


                          <li>
                            <label>
                              <span class="txt info-visible"><span>SSI Templates</span>
                              <span><div class="tooltip-icon"><i
                                    class="fas fa-info-circle"></i>
                                  <span class="tooltiptext">SSI is used to ensure that common components such as a copyright notice, contact info, header, footer etc. stay the same on all pages throughout the site and are easily editable.</span>
                                </div></span>
                                </span>
                              <input type="checkbox" name="" value="20">
                              <span class="chk-btn"></span>
                              <span class="price">$20</span>
                            </label>
                          </li>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="wordpressheadingTwo">
                      <h5 class="mb-0">
                        <button aria-label="button" class="btn-link collapsed" data-toggle="collapse"
                          data-target="#wordpresscollapseTwo" aria-expanded="false" aria-controls="wordpresscollapseTwo">
                          Interactivity Options <span> <i class="fas fa-chevron-down"></i>
                            <i class="fas fa-chevron-up"></i> </span>
                        </button>
                      </h5>
                    </div>
                    <div id="wordpresscollapseTwo" class="collapse" aria-labelledby="wordpressheadingTwo" data-parent="#accordion3">
                    <div class="card-body">
                        <p class="note-text"><b>Note:</b> Markup options’ total price is influenced directly by the amount of pages in the
                          project.</p>
                        <p><b>Framework</b></p>
                        <ul class="sub-list">
                        <li>
                            <label>
                              <span class="txt">Burger menu</span>
                              <input type="checkbox" name="" value="0">
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Carousel</span>
                              <input type="checkbox" name="" value="19">
                              <span class="chk-btn"></span>
                              <span class="price">$19</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Tabs</span>
                              <input type="checkbox" name="" value="19">
                              <span class="chk-btn"></span>
                              <span class="price">$19</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Accordion / Open/close</span>
                              <input type="checkbox" name="" value="0">
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Lightbox</span>
                              <input type="checkbox" name="" value="49">
                              <span class="chk-btn"></span>
                              <span class="price">$49</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Popup</span>
                              <input type="checkbox" name="" value="49">
                              <span class="chk-btn"></span>
                              <span class="price">$49</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Tooltip</span>
                              <input type="checkbox" name="" value="39">
                              <span class="chk-btn"></span>
                              <span class="price">$39</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Custom forms</span>
                              <input type="checkbox" name="" value="49">
                              <span class="chk-btn"></span>
                              <span class="price">$49</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Slider</span>
                              <input type="checkbox" name="" value="59">
                              <span class="chk-btn"></span>
                              <span class="price">$59</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Custom scroll</span>
                              <input type="checkbox" name="" value="39">
                              <span class="chk-btn"></span>
                              <span class="price">$39</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Animated sorting / Filter</span>
                              <input type="checkbox" name="" value="59">
                              <span class="chk-btn"></span>
                              <span class="price">$59</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Calendar / Datepicker</span>
                              <input type="checkbox" name="" value="59">
                              <span class="chk-btn"></span>
                              <span class="price">$59</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Form validation</span>
                              <input type="checkbox" name="" value="39">
                              <span class="chk-btn"></span>
                              <span class="price">$39</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Anchor navigation with smooth scroll</span>
                              <input type="checkbox" name="" value="59">
                              <span class="chk-btn"></span>
                              <span class="price">$59</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt info-visible">
                                <span class="">Masonry</span>
                                <span><div class="tooltip-icon"><i
                                    class="fas fa-info-circle"></i>
                                  <span class="tooltiptext">Check if you need blocks with aliquot widths, but varying height to be rebuilt filling all the allotted space.</span>
                                </div></span>
                                </span>
                              <input type="checkbox" name="" value="59">
                              <span class="chk-btn"></span>
                              <span class="price">$59</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Background video</span>
                              <input type="checkbox" name="" value="119">
                              <span class="chk-btn"></span>
                              <span class="price">$119</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Parallax on background</span>
                              <input type="checkbox" name="" value="99">
                              <span class="chk-btn"></span>
                              <span class="price">$99</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Animation on scroll</span>
                              <input type="checkbox" name="" value="59">
                              <span class="chk-btn"></span>
                              <span class="price">$59</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Autocomplete</span>
                              <input type="checkbox" name="" value="59">
                              <span class="chk-btn"></span>
                              <span class="price">$59</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Preloader</span>
                              <input type="checkbox" name="" value="59">
                              <span class="chk-btn"></span>
                              <span class="price">$39</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Custom video player</span>
                              <input type="checkbox" name="" value="79">
                              <span class="chk-btn"></span>
                              <span class="price">$79</span>
                            </label>
                          </li>
                        </ul>
                        <p><b>Advanced Interactivity Options</b></p>
                        <p class="note-text"><b>Note:</b> Advanced interactivity options' development rates start from $42 per hour. The final price for it will be provided upon thorough analysis of your designs and requirements.</p>
                        <ul class="sub-list">
                        <li>
                            <label>
                              <span class="txt">Advanced CSS3 animation</span>
                              <input type="checkbox" name="">
                              <span class="chk-btn"></span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">jQuery</span>
                              <input type="checkbox" name="">
                              <span class="chk-btn"></span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">jQuery UI</span>
                              <input type="checkbox" name="">
                              <span class="chk-btn"></span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Google maps</span>
                              <input type="checkbox" name="">
                              <span class="chk-btn"></span>
                            </label>
                          </li>
                        </ul>
                        <p><b>Your needs are not on the list? Let us know.</b></p>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="wordpressheadingThree">
                      <h5 class="mb-0">
                        <button aria-label="button" class="btn-link" data-toggle="collapse"
                          data-target="#wordpresscollapseThree" aria-expanded="true" aria-controls="wordpresscollapseThree">
                          WordPress <span> <i class="fas fa-chevron-down"></i>
                            <i class="fas fa-chevron-up"></i> </span>
                        </button>
                      </h5>
                    </div>
                    <div id="wordpresscollapseThree" class="collapse show" aria-labelledby="wordpressheadingThree" data-parent="#accordion3">
                    <div class="card-body">
                    <p class="note-text"><b>Note:</b> Wordpress implementation starts from $199, however, the final price for the whole project will be provided upon thorough analysis of your designs and requirements, based on $47 per hour rate.</p>
                        <p><b>WordPress</b></p>
                        <ul class="sub-list">
                        <li><label>
                              <span class="txt info-visible"><span>Delivery Method</span> <span>  <div class="tooltip-icon"><i class="fas fa-info-circle"></i>
                                  <span class="tooltiptext">Choose a preferred method of your theme delivery from the list below:</span>
                                </div></span>
                                </span>
                                <select name="" id="" class="custom-select-type">
                                <option value="Theme files in an archive">Theme files in an archive</option>
                                <option value="Theme activation only">Theme activation only</option>
                                <option value="CMS installation and theme activation">CMS installation and theme activation
                                </option>
                              </select>
                              <span class="price">$40</span>
                            </label></li>
                            <li>
                            <label>
                              <span class="txt info-visible"><span>GuideMe</span>
                              <span><div class="tooltip-icon"><i
                                    class="fas fa-info-circle"></i>
                                  <span class="tooltiptext">GuideMe is a simple and easy to use plugin that allows you to create helpful tips for site admins.</span>
                                </div></span>
                                </span>
                              <input type="checkbox" name="" value="39">
                              <span class="chk-btn"></span>
                              <span class="price">$39</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt info-visible"><span>Breadcrumb-navXT</span>
                              <span><div class="tooltip-icon"><i
                                    class="fas fa-info-circle"></i>
                                  <span class="tooltiptext">Generates locational breadcrumb trails for the blog. These represent the hierarchy leading up to the current page and can provide SEO benefits.</span>
                                </div></span>
                                </span>
                              <input type="checkbox" name="" value="39">
                              <span class="chk-btn"></span>
                              <span class="price">$39</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt info-visible"><span>Contact Form 7</span>
                              <span><div class="tooltip-icon"><i
                                    class="fas fa-info-circle"></i>
                                  <span class="tooltiptext">Allows to flexibly design the form and mail as well as to manage multiple contact forms. Supports many features including AJAX submitting, CAPTCHA, Akismet spam filtering, file uploading, etc.</span>
                                </div></span>
                                </span>
                              <input type="checkbox" name="" value="39">
                              <span class="chk-btn"></span>
                              <span class="price">$39</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt info-visible"><span>Advanced Custom Fields</span>
                              <span><div class="tooltip-icon"><i
                                    class="fas fa-info-circle"></i>
                                  <span class="tooltiptext">Advanced Custom Fields plugin helps you take full control of your edit screens & custom field data.</span>
                                </div></span>
                                </span>
                              <input type="checkbox" name="" value="39">
                              <span class="chk-btn"></span>
                              <span class="price">$39</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt info-visible"><span>WP-PageNavi</span>
                              <span><div class="tooltip-icon"><i
                                    class="fas fa-info-circle"></i>
                                  <span class="tooltiptext">Adds advanced paging navigation (1,2,3..)  to the site.</span>
                                </div></span>
                                </span>
                              <input type="checkbox" name="" value="39">
                              <span class="chk-btn"></span>
                              <span class="price">$39</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt info-visible"><span>Share This</span>
                              <span><div class="tooltip-icon"><i
                                    class="fas fa-info-circle"></i>
                                  <span class="tooltiptext">Allows to share the content through email, 50+ social networks including Facebook, Twitter, Google Buzz, and through text message and AIM.</span>
                                </div></span>
                                </span>
                              <input type="checkbox" name="" value="39">
                              <span class="chk-btn"></span>
                              <span class="price">$39</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt info-visible"><span>MailPoet Newsletters</span>
                              <span><div class="tooltip-icon"><i
                                    class="fas fa-info-circle"></i>
                                  <span class="tooltiptext">MailPoet Newsletters sends newsletters post notifications or autoresponders from WordPress easily, and beautifully.</span>
                                </div></span>
                                </span>
                              <input type="checkbox" name="" value="39">
                              <span class="chk-btn"></span>
                              <span class="price">$39</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt info-visible"><span>Image Gallery and Slide Show</span>
                              <span><div class="tooltip-icon"><i
                                    class="fas fa-info-circle"></i>
                                  <span class="tooltiptext">Gallery and slide show are done using jQuery framework and integrated into the theme by means of custom fields or post thumbnails. The quote includes a default JavaScript gallery creation.</span>
                                </div></span>
                                </span>
                              <input type="checkbox" name="" value="39">
                              <span class="chk-btn"></span>
                              <span class="price">$39</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt info-visible"><span>WordPress Popular Posts</span>
                              <span><div class="tooltip-icon"><i
                                    class="fas fa-info-circle"></i>
                                  <span class="tooltiptext">WordPress Popular Posts is a highly customizable sidebar widget that displays the most popular posts on your blog.</span>
                                </div></span>
                                </span>
                              <input type="checkbox" name="" value="39">
                              <span class="chk-btn"></span>
                              <span class="price">$39</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt info-visible"><span>Post Rating</span>
                              <span><div class="tooltip-icon"><i
                                    class="fas fa-info-circle"></i>
                                  <span class="tooltiptext">Adds an AJAX rating system for the blog's post/page.</span>
                                </div></span>
                                </span>
                              <input type="checkbox" name="" value="39">
                              <span class="chk-btn"></span>
                              <span class="price">$39</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt info-visible"><span>WooCommerce</span>
                              <span><div class="tooltip-icon"><i
                                    class="fas fa-info-circle"></i>
                                  <span class="tooltiptext">Easy to use shopping cart application suitable for selling the products, services, and\/or fees online.</span>
                                </div></span>
                                </span>
                              <input type="checkbox" name="" value="39">
                              <span class="chk-btn"></span>
                              <span class="price">$39</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt info-visible"><span>WP-Polls</span>
                              <span><div class="tooltip-icon"><i
                                    class="fas fa-info-circle"></i>
                                  <span class="tooltiptext">Adds an AJAX poll system to the blog post\/page. Supports multiple selection of answers.</span>
                                </div></span>
                                </span>
                              <input type="checkbox" name="" value="39">
                              <span class="chk-btn"></span>
                              <span class="price">$39</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt info-visible"><span>AddThis</span>
                              <span><div class="tooltip-icon"><i
                                    class="fas fa-info-circle"></i>
                                  <span class="tooltiptext">Allows site users to bookmark your site easily with over 250 popular services, and to share it via email.</span>
                                </div></span>
                                </span>
                              <input type="checkbox" name="" value="39">
                              <span class="chk-btn"></span>
                              <span class="price">$39</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt info-visible"><span>Xhanch - My Twitter</span>
                              <span><div class="tooltip-icon"><i
                                    class="fas fa-info-circle"></i>
                                  <span class="tooltiptext">Displays your latest tweets, replies, direct messages and retweets. Provides multiple account support.</span>
                                </div></span>
                                </span>
                              <input type="checkbox" name="" value="39">
                              <span class="chk-btn"></span>
                              <span class="price">$39</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt info-visible"><span>Disqus Comment System</span>
                              <span><div class="tooltip-icon"><i
                                    class="fas fa-info-circle"></i>
                                  <span class="tooltiptext">Replaces default WordPress comment system with comments hosted and powered by Disqus.</span>
                                </div></span>
                                </span>
                              <input type="checkbox" name="" value="39">
                              <span class="chk-btn"></span>
                              <span class="price">$39</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt info-visible"><span>WP Postviews</span>
                              <span><div class="tooltip-icon"><i
                                    class="fas fa-info-circle"></i>
                                  <span class="tooltiptext">Provides the ability to display the number of times a post\/page had been viewed.</span>
                                </div></span>
                                </span>
                              <input type="checkbox" name="" value="39">
                              <span class="chk-btn"></span>
                              <span class="price">$39</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt info-visible"><span>The Events Calendar</span>
                              <span><div class="tooltip-icon"><i
                                    class="fas fa-info-circle"></i>
                                  <span class="tooltiptext">Allows you to create and manage events quickly and easily, displaying the events on your website in a calendar or an event list.</span>
                                </div></span>
                                </span>
                              <input type="checkbox" name="" value="39">
                              <span class="chk-btn"></span>
                              <span class="price">$39</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt info-visible"><span>All in One SEO Pack</span>
                              <span><div class="tooltip-icon"><i
                                    class="fas fa-info-circle"></i>
                                  <span class="tooltiptext">WordPress SEO plugin that allows you to automatically optimize your blog for search engines.</span>
                                </div></span>
                                </span>
                              <input type="checkbox" name="" value="39">
                              <span class="chk-btn"></span>
                              <span class="price">$39</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt info-visible"><span>Multilanguage</span>
                              <span><div class="tooltip-icon"><i
                                    class="fas fa-info-circle"></i>
                                  <span class="tooltiptext">WPML makes it easy to build multilingual sites and run them. It\u2019s powerful enough for corporate sites, yet simple for blogs.</span>
                                </div></span>
                                </span>
                              <input type="checkbox" name="" value="39">
                              <span class="chk-btn"></span>
                              <span class="price">$39</span>
                            </label>
                          </li>
                        </ul>
                    </div></div></div>

                </div>
              </div>
              <div class="tab-pane fade" id="pills-marketing" role="tabpanel" aria-labelledby="pills-marketing-tab">
              <center>
                  <h3>Shopify Project Details</h3>
                </center>
                <div id="accordion4" class="faq-wrapper">
                  <div class="card">
                    <div class="card-header" id="shopifyheadingOne">
                      <h5 class="mb-0">
                        <button aria-label="button" class="btn-link collapsed" data-toggle="collapse" data-target="#shopifycollapseOne"
                          aria-expanded="false" aria-controls="shopifycollapseOne">
                          Markup Options <span> <i class="fas fa-chevron-down"></i>
                            <i class="fas fa-chevron-up"></i> </span>
                        </button>
                      </h5>
                    </div>

                    <div id="shopifycollapseOne" class="collapse" aria-labelledby="shopifyheadingOne" data-parent="#accordion4">
                    <div class="card-body">
                        <p class="note-text"><b>Note:</b> Markup options’ total price is influenced directly by the amount of pages in the
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
                              <span class="txt info-visible"><span>Retina</span> <span>  <div class="tooltip-icon"><i class="fas fa-info-circle"></i>
                                  <span class="tooltiptext">Responsive coding provides optimal viewing and interaction
                                    experience. Responsive coding provides optimal viewing and interaction experience.
                                    Responsive coding provides optimal viewing and interaction experience.</span>
                                </div></span>
                                </span>
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
                              <span class="txt info-visible"><span>CSS preprocessors</span> <span><div class="tooltip-icon"><i
                                    class="fas fa-info-circle"></i>
                                  <span class="tooltiptext">Our favorite CSS preprocessor used by dafault in all projects is Sass, please, indicate if you have other preferences.</span>
                                </div></span>
                                </span>

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
                              <span class="txt  info-visible"><span>Semantic Coding</span>
                              <span><div class="tooltip-icon"><i
                                    class="fas fa-info-circle"></i>
                                  <span class="tooltiptext">Semantically correct code that accurately describes the content of each page. Search-engine-bots-friendly code.</span>
                                </div></span>
                                </span>
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
                        <p><b>Delivery Options</b></p>
                        <ul class="sub-list">


                          <li>
                            <label>
                              <span class="txt info-visible"><span>SSI Templates</span>
                              <span><div class="tooltip-icon"><i
                                    class="fas fa-info-circle"></i>
                                  <span class="tooltiptext">SSI is used to ensure that common components such as a copyright notice, contact info, header, footer etc. stay the same on all pages throughout the site and are easily editable.</span>
                                </div></span>
                                </span>
                              <input type="checkbox" name="" value="20">
                              <span class="chk-btn"></span>
                              <span class="price">$20</span>
                            </label>
                          </li>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="shopifyheadingTwo">
                      <h5 class="mb-0">
                        <button aria-label="button" class="btn-link collapsed" data-toggle="collapse"
                          data-target="#shopifycollapseTwo" aria-expanded="false" aria-controls="shopifycollapseTwo">
                          Interactivity Options <span> <i class="fas fa-chevron-down"></i>
                            <i class="fas fa-chevron-up"></i> </span>
                        </button>
                      </h5>
                    </div>
                    <div id="shopifycollapseTwo" class="collapse" aria-labelledby="shopifyheadingTwo" data-parent="#accordion4">
                    <div class="card-body">
                        <p class="note-text"><b>Note:</b> Markup options’ total price is influenced directly by the amount of pages in the
                          project.</p>
                        <p><b>Framework</b></p>
                        <ul class="sub-list">
                        <li>
                            <label>
                              <span class="txt">Burger menu</span>
                              <input type="checkbox" name="" value="0">
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Carousel</span>
                              <input type="checkbox" name="" value="19">
                              <span class="chk-btn"></span>
                              <span class="price">$19</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Tabs</span>
                              <input type="checkbox" name="" value="19">
                              <span class="chk-btn"></span>
                              <span class="price">$19</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Accordion / Open/close</span>
                              <input type="checkbox" name="" value="0">
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Lightbox</span>
                              <input type="checkbox" name="" value="49">
                              <span class="chk-btn"></span>
                              <span class="price">$49</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Popup</span>
                              <input type="checkbox" name="" value="49">
                              <span class="chk-btn"></span>
                              <span class="price">$49</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Tooltip</span>
                              <input type="checkbox" name="" value="39">
                              <span class="chk-btn"></span>
                              <span class="price">$39</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Custom forms</span>
                              <input type="checkbox" name="" value="49">
                              <span class="chk-btn"></span>
                              <span class="price">$49</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Slider</span>
                              <input type="checkbox" name="" value="59">
                              <span class="chk-btn"></span>
                              <span class="price">$59</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Custom scroll</span>
                              <input type="checkbox" name="" value="39">
                              <span class="chk-btn"></span>
                              <span class="price">$39</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Animated sorting / Filter</span>
                              <input type="checkbox" name="" value="59">
                              <span class="chk-btn"></span>
                              <span class="price">$59</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Calendar / Datepicker</span>
                              <input type="checkbox" name="" value="59">
                              <span class="chk-btn"></span>
                              <span class="price">$59</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Form validation</span>
                              <input type="checkbox" name="" value="39">
                              <span class="chk-btn"></span>
                              <span class="price">$39</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Anchor navigation with smooth scroll</span>
                              <input type="checkbox" name="" value="59">
                              <span class="chk-btn"></span>
                              <span class="price">$59</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt info-visible">
                                <span class="">Masonry</span>
                                <span><div class="tooltip-icon"><i
                                    class="fas fa-info-circle"></i>
                                  <span class="tooltiptext">Check if you need blocks with aliquot widths, but varying height to be rebuilt filling all the allotted space.</span>
                                </div></span>
                                </span>
                              <input type="checkbox" name="" value="59">
                              <span class="chk-btn"></span>
                              <span class="price">$59</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Background video</span>
                              <input type="checkbox" name="" value="119">
                              <span class="chk-btn"></span>
                              <span class="price">$119</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Parallax on background</span>
                              <input type="checkbox" name="" value="99">
                              <span class="chk-btn"></span>
                              <span class="price">$99</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Animation on scroll</span>
                              <input type="checkbox" name="" value="59">
                              <span class="chk-btn"></span>
                              <span class="price">$59</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Autocomplete</span>
                              <input type="checkbox" name="" value="59">
                              <span class="chk-btn"></span>
                              <span class="price">$59</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Preloader</span>
                              <input type="checkbox" name="" value="59">
                              <span class="chk-btn"></span>
                              <span class="price">$39</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Custom video player</span>
                              <input type="checkbox" name="" value="79">
                              <span class="chk-btn"></span>
                              <span class="price">$79</span>
                            </label>
                          </li>
                        </ul>
                        <p><b>Advanced Interactivity Options</b></p>
                        <p class="note-text"><b>Note:</b> Advanced interactivity options' development rates start from $42 per hour. The final price for it will be provided upon thorough analysis of your designs and requirements.</p>
                        <ul class="sub-list">
                        <li>
                            <label>
                              <span class="txt">Advanced CSS3 animation</span>
                              <input type="checkbox" name="">
                              <span class="chk-btn"></span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">jQuery</span>
                              <input type="checkbox" name="">
                              <span class="chk-btn"></span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">jQuery UI</span>
                              <input type="checkbox" name="">
                              <span class="chk-btn"></span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Google maps</span>
                              <input type="checkbox" name="">
                              <span class="chk-btn"></span>
                            </label>
                          </li>
                        </ul>
                        <p><b>Your needs are not on the list? Let us know.</b></p>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="shopifyheadingThree">
                      <h5 class="mb-0">
                        <button aria-label="button" class="btn-link" data-toggle="collapse"
                          data-target="#shopifycollapseThree" aria-expanded="true" aria-controls="shopifycollapseThree">
                          Shopify <span> <i class="fas fa-chevron-down"></i>
                            <i class="fas fa-chevron-up"></i> </span>
                        </button>
                      </h5>
                    </div>
                    <div id="shopifycollapseThree" class="collapse show" aria-labelledby="shopifyheadingThree" data-parent="#accordion4">
                    <div class="card-body">
                    <p class="note-text"><b>Note:</b> Shopify implementation starts from $329, however, the final price for the whole project will be provided upon thorough analysis of your designs and requirements, based on $47 per hour rate.</p>
                        <ul class="sub-list">
                        <li><label>
                              <span class="txt info-visible"><span>Delivery Method</span> <span>  <div class="tooltip-icon"><i class="fas fa-info-circle"></i>
                                  <span class="tooltiptext">Choose a preferred method of your theme delivery from the list below:</span>
                                </div></span>
                                </span>
                                <select name="" id="" class="custom-select-type">
                                <option value="Theme files in an archive">Theme files in an archive</option>
                                <option value="Theme activation only">Theme activation only</option>
                                <option value="CMS installation and theme activation">CMS installation and theme activation
                                </option>
                              </select>
                              <span class="price">$40</span>
                            </label></li>
                            <li>
                            <label>
                              <span class="txt">AddThis Sharing Tool</span>
                              <input type="checkbox" name="" value="24">
                              <span class="chk-btn"></span>
                              <span class="price">$24</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Yotpo Reviews</span>
                              <input type="checkbox" name="" value="24">
                              <span class="chk-btn"></span>
                              <span class="price">$24</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Product Reviews</span>
                              <input type="checkbox" name="" value="24">
                              <span class="chk-btn"></span>
                              <span class="price">$24</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">MetaFields Editor</span>
                              <input type="checkbox" name="" value="24">
                              <span class="chk-btn"></span>
                              <span class="price">$24</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Digital Downloads</span>
                              <input type="checkbox" name="" value="24">
                              <span class="chk-btn"></span>
                              <span class="price">$24</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">MailChimp for Shopify</span>
                              <input type="checkbox" name="" value="24">
                              <span class="chk-btn"></span>
                              <span class="price">$24</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Campaignified</span>
                              <input type="checkbox" name="" value="24">
                              <span class="chk-btn"></span>
                              <span class="price">$24</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Socialify</span>
                              <input type="checkbox" name="" value="24">
                              <span class="chk-btn"></span>
                              <span class="price">$24</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">LiveChat</span>
                              <input type="checkbox" name="" value="24">
                              <span class="chk-btn"></span>
                              <span class="price">$24</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Related Blog Posts</span>
                              <input type="checkbox" name="" value="49">
                              <span class="chk-btn"></span>
                              <span class="price">$49</span>
                            </label>
                          </li>
                        </ul>
                    </div></div></div>

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
                        <p class="note-text"><b>Note:</b> Markup options’ total price is influenced directly by the amount of pages in the
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
                        <p class="note-text"><b>Note:</b> Markup options’ total price is influenced directly by the amount of pages in the
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
                <div id="accordion6" class="faq-wrapper">
                  <div class="card">
                    <div class="card-header" id="magentoheadingOne">
                      <h5 class="mb-0">
                        <button aria-label="button" class="btn-link collapsed" data-toggle="collapse" data-target="#magentocollapseOne"
                          aria-expanded="false" aria-controls="magentocollapseOne">
                          Markup Options <span> <i class="fas fa-chevron-down"></i>
                            <i class="fas fa-chevron-up"></i> </span>
                        </button>
                      </h5>
                    </div>

                    <div id="magentocollapseOne" class="collapse" aria-labelledby="magentoheadingOne" data-parent="#accordion6">
                    <div class="card-body">
                        <p class="note-text"><b>Note:</b> Markup options’ total price is influenced directly by the amount of pages in the
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
                              <span class="txt info-visible"><span>Retina</span> <span>  <div class="tooltip-icon"><i class="fas fa-info-circle"></i>
                                  <span class="tooltiptext">Responsive coding provides optimal viewing and interaction
                                    experience. Responsive coding provides optimal viewing and interaction experience.
                                    Responsive coding provides optimal viewing and interaction experience.</span>
                                </div></span>
                                </span>
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
                              <span class="txt info-visible"><span>CSS preprocessors</span> <span><div class="tooltip-icon"><i
                                    class="fas fa-info-circle"></i>
                                  <span class="tooltiptext">Our favorite CSS preprocessor used by dafault in all projects is Sass, please, indicate if you have other preferences.</span>
                                </div></span>
                                </span>

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
                              <span class="txt info-visible"><span>Semantic Coding</span>
                              <span><div class="tooltip-icon"><i
                                    class="fas fa-info-circle"></i>
                                  <span class="tooltiptext">Semantically correct code that accurately describes the content of each page. Search-engine-bots-friendly code.</span>
                                </div></span>
                                </span>
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
                        <p><b>Delivery Options</b></p>
                        <ul class="sub-list">


                          <li>
                            <label>
                              <span class="txt info-visible"><span>SSI Templates</span>
                              <span><div class="tooltip-icon"><i
                                    class="fas fa-info-circle"></i>
                                  <span class="tooltiptext">SSI is used to ensure that common components such as a copyright notice, contact info, header, footer etc. stay the same on all pages throughout the site and are easily editable.</span>
                                </div></span>
                                </span>
                              <input type="checkbox" name="" value="20">
                              <span class="chk-btn"></span>
                              <span class="price">$20</span>
                            </label>
                          </li>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="magentoheadingTwo">
                      <h5 class="mb-0">
                        <button aria-label="button" class="btn-link collapsed" data-toggle="collapse"
                          data-target="#magentocollapseTwo" aria-expanded="false" aria-controls="magentocollapseTwo">
                          Interactivity Options <span> <i class="fas fa-chevron-down"></i>
                            <i class="fas fa-chevron-up"></i> </span>
                        </button>
                      </h5>
                    </div>
                    <div id="magentocollapseTwo" class="collapse" aria-labelledby="magentoheadingTwo" data-parent="#accordion6">
                    <div class="card-body">
                        <p class="note-text"><b>Note:</b> Markup options’ total price is influenced directly by the amount of pages in the
                          project.</p>
                        <p><b>Framework</b></p>
                        <ul class="sub-list">
                        <li>
                            <label>
                              <span class="txt">Burger menu</span>
                              <input type="checkbox" name="" value="0">
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Carousel</span>
                              <input type="checkbox" name="" value="19">
                              <span class="chk-btn"></span>
                              <span class="price">$19</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Tabs</span>
                              <input type="checkbox" name="" value="19">
                              <span class="chk-btn"></span>
                              <span class="price">$19</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Accordion / Open/close</span>
                              <input type="checkbox" name="" value="0">
                              <span class="chk-btn"></span>
                              <span class="price">Free</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Lightbox</span>
                              <input type="checkbox" name="" value="49">
                              <span class="chk-btn"></span>
                              <span class="price">$49</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Popup</span>
                              <input type="checkbox" name="" value="49">
                              <span class="chk-btn"></span>
                              <span class="price">$49</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Tooltip</span>
                              <input type="checkbox" name="" value="39">
                              <span class="chk-btn"></span>
                              <span class="price">$39</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Custom forms</span>
                              <input type="checkbox" name="" value="49">
                              <span class="chk-btn"></span>
                              <span class="price">$49</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Slider</span>
                              <input type="checkbox" name="" value="59">
                              <span class="chk-btn"></span>
                              <span class="price">$59</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Custom scroll</span>
                              <input type="checkbox" name="" value="39">
                              <span class="chk-btn"></span>
                              <span class="price">$39</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Animated sorting / Filter</span>
                              <input type="checkbox" name="" value="59">
                              <span class="chk-btn"></span>
                              <span class="price">$59</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Calendar / Datepicker</span>
                              <input type="checkbox" name="" value="59">
                              <span class="chk-btn"></span>
                              <span class="price">$59</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Form validation</span>
                              <input type="checkbox" name="" value="39">
                              <span class="chk-btn"></span>
                              <span class="price">$39</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Anchor navigation with smooth scroll</span>
                              <input type="checkbox" name="" value="59">
                              <span class="chk-btn"></span>
                              <span class="price">$59</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt info-visible">
                                <span class="">Masonry</span>
                                <span><div class="tooltip-icon"><i
                                    class="fas fa-info-circle"></i>
                                  <span class="tooltiptext">Check if you need blocks with aliquot widths, but varying height to be rebuilt filling all the allotted space.</span>
                                </div></span>
                                </span>
                              <input type="checkbox" name="" value="59">
                              <span class="chk-btn"></span>
                              <span class="price">$59</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Background video</span>
                              <input type="checkbox" name="" value="119">
                              <span class="chk-btn"></span>
                              <span class="price">$119</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Parallax on background</span>
                              <input type="checkbox" name="" value="99">
                              <span class="chk-btn"></span>
                              <span class="price">$99</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Animation on scroll</span>
                              <input type="checkbox" name="" value="59">
                              <span class="chk-btn"></span>
                              <span class="price">$59</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Autocomplete</span>
                              <input type="checkbox" name="" value="59">
                              <span class="chk-btn"></span>
                              <span class="price">$59</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Preloader</span>
                              <input type="checkbox" name="" value="59">
                              <span class="chk-btn"></span>
                              <span class="price">$39</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Custom video player</span>
                              <input type="checkbox" name="" value="79">
                              <span class="chk-btn"></span>
                              <span class="price">$79</span>
                            </label>
                          </li>
                        </ul>
                        <p><b>Advanced Interactivity Options</b></p>
                        <p class="note-text"><b>Note:</b> Advanced interactivity options' development rates start from $42 per hour. The final price for it will be provided upon thorough analysis of your designs and requirements.</p>
                        <ul class="sub-list">
                        <li>
                            <label>
                              <span class="txt">Advanced CSS3 animation</span>
                              <input type="checkbox" name="">
                              <span class="chk-btn"></span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">jQuery</span>
                              <input type="checkbox" name="">
                              <span class="chk-btn"></span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">jQuery UI</span>
                              <input type="checkbox" name="">
                              <span class="chk-btn"></span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Google maps</span>
                              <input type="checkbox" name="">
                              <span class="chk-btn"></span>
                            </label>
                          </li>
                        </ul>
                        <p><b>Your needs are not on the list? Let us know.</b></p>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="magentoheadingThree">
                      <h5 class="mb-0">
                        <button aria-label="button" class="btn-link" data-toggle="collapse"
                          data-target="#magentocollapseThree" aria-expanded="true" aria-controls="magentocollapseThree">
                          Magento <span> <i class="fas fa-chevron-down"></i>
                            <i class="fas fa-chevron-up"></i> </span>
                        </button>
                      </h5>
                    </div>
                    <div id="magentocollapseThree" class="collapse show" aria-labelledby="magentoheadingThree" data-parent="#accordion6">
                    <div class="card-body">
                    <p class="note-text"><b>Note:</b> Shopify implementation starts from $329, however, the final price for the whole project will be provided upon thorough analysis of your designs and requirements, based on $47 per hour rate.</p>
                        <ul class="sub-list">
                        <li><label>
                              <span class="txt info-visible"><span>Delivery Method</span> <span>  <div class="tooltip-icon"><i class="fas fa-info-circle"></i>
                                  <span class="tooltiptext">Choose a preferred method of your theme delivery from the list below:</span>
                                </div></span>
                                </span>
                                <select name="" id="" class="custom-select-type">
                                <option value="Theme files in an archive">Theme files in an archive</option>
                                <option value="Theme activation only">Theme activation only</option>
                                <option value="CMS installation and theme activation">CMS installation and theme activation
                                </option>
                              </select>
                              <span class="price">$40</span>
                            </label></li>
                            <li>
                            <label>
                              <span class="txt">Blog - Community Edition by aheadWorks</span>
                              <input type="checkbox" name="" value="24">
                              <span class="chk-btn"></span>
                              <span class="price">$24</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Magento WordPress Integration</span>
                              <input type="checkbox" name="" value="24">
                              <span class="chk-btn"></span>
                              <span class="price">$24</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Gallery</span>
                              <input type="checkbox" name="" value="24">
                              <span class="chk-btn"></span>
                              <span class="price">$24</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Layered Navigation</span>
                              <input type="checkbox" name="" value="24">
                              <span class="chk-btn"></span>
                              <span class="price">$24</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">One Step Checkout</span>
                              <input type="checkbox" name="" value="24">
                              <span class="chk-btn"></span>
                              <span class="price">$24</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Mass Product Actions</span>
                              <input type="checkbox" name="" value="24">
                              <span class="chk-btn"></span>
                              <span class="price">$24</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Out of Stock Notification</span>
                              <input type="checkbox" name="" value="24">
                              <span class="chk-btn"></span>
                              <span class="price">$24</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Search Pro</span>
                              <input type="checkbox" name="" value="24">
                              <span class="chk-btn"></span>
                              <span class="price">$24</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Mass Order Actions</span>
                              <input type="checkbox" name="" value="24">
                              <span class="chk-btn"></span>
                              <span class="price">$24</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Order Status</span>
                              <input type="checkbox" name="" value="49">
                              <span class="chk-btn"></span>
                              <span class="price">$49</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Shop By Brand</span>
                              <input type="checkbox" name="" value="49">
                              <span class="chk-btn"></span>
                              <span class="price">$49</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Sociable</span>
                              <input type="checkbox" name="" value="49">
                              <span class="chk-btn"></span>
                              <span class="price">$49</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <span class="txt">Layered Navigation SEO</span>
                              <input type="checkbox" name="" value="49">
                              <span class="chk-btn"></span>
                              <span class="price">$49</span>
                            </label>
                          </li>
                        </ul>
                    </div></div></div>

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
                        class="form-control">

                    </div>
                    <div class="cell phone">
                      <input type="text" id="order_user_phone" name="" maxlength="20" placeholder="Skype / Phone"
                        class="form-control">
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