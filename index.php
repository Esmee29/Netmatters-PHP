<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>
    Full Service Digital Agency | Cambridgeshire & Norfolk
    | Netmatters
</title>
<link rel="canonical" href="https://www.netmatters.co.uk">
<link rel="stylesheet" type="text/css" href="js/slick-1.8.1/slick/slick.css">
<link rel="stylesheet" type="text/css" href="js/slick-1.8.1/slick/slick-theme.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700;900&display=swap" rel="stylesheet">
<link rel="icon" href="images/favicon.ico">
<script src="https://kit.fontawesome.com/356a53e20f.js" crossorigin="anonymous"></script>
</head>
<body>

<?php include ("php/sidebar.php") ?>
<?php include ("php/cookie.php") ?>
<div id="greetingContainer">
      
  <span class="icon-speechbubble">
    <button id="chat-button" type="button">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg"  viewBox="2 -6 20 36" class="icon-circle icon-circle-speechbubble">
          <path class ="speechbubble" d="M18 8.016v-2.016h-12v2.016h12zM18 11.016v-2.016h-12v2.016h12zM18 14.016v-2.016h-12v2.016h12zM20.016 2.016q0.797 0 1.383 0.586t0.586 1.383v18l-3.984-3.984h-14.016q-0.797 0-1.383-0.609t-0.586-1.406v-12q0-0.797 0.586-1.383t1.383-0.586h16.031z"></path>
        </svg>
        
    </button>
    
  </span>
</div>
<div id="container">
    <div class="main">
        <div id="header">
      <header class="header">
          <div class="container-header">
              <div class="container header-large hidden-md hidden-sm">
                  <div class="hidden-md hidden-sm header-row">
                      <div class="logo-container">
                          <a href="#" ><img src="images/netmatters-logo-black.png" class="logo" alt="netmatters logo"></a>
                        </div>
                      <div class="support element">
                          <button type="button" class="btn btn-help btn-help-support">
                            <span class="pull-left">
                            <span class="icon-mouse mouse"></span>
                            </span>
                            Support
                          </button>
                        </div>
                        <div class="contact element">
                          <button type="button" class="btn btn-help btn-help-contact">
                            <span class="pull-left">
                              <span class="icon-paperplane plane"></span>
                            </span>
                            Contact
                          </button>
                        </div>
                        <div class="search-large">
                          <form class="search-bar">
                              <input type="text" placeholder="Search..." class="search-box-1 search-focus">
                              <button type="submit">
                                  <span class="icon-search icon-search-1"></span>
                              </button>
                            </form>
                      </div>
                      <div class="actions">
                          <div class="container-hamburger">
                            <button type="button" id="header-hamburger-lrg" class="btn btn-hamburger hamburger  is-active">
                              <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                              </span>
                            </button>
                          </div>
                        </div>
                  </div>
              </div>
              <div class="header-small hidden-lg hidden-xlg  hidden-xxlg">
                  <div class="header-small-logo">
                      <a href="#" class="nm-logo-black">
                          <img src="images/netmatters-logo-black.png" class="nm-logo-black" alt="Netmatters Logo Black">
                      </a>
                      <div class="visible-md hidden-sm">
                          <form class="search-bar">
                              <input type="text" placeholder="Search..." class="search-box search-focus hidden-lg hidden-xlg">
                              <button type="submit">
                                  <span class="icon-search icon-search-1"></span>
                              </button>
                            </form>  
                      </div>
                      <div class="container-mobile hidden-md">
                          <a class="phone" href="#">
                            <span class="icon-phone_in_talk"></span>
                          </a>
                        </div>
                        <div class="actions">
                          <div class="container-hamburger">
                            <button type="button" class="btn btn-hamburger hamburger  hamburger-small is-active">
                              <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                              </span>
                            </button>
                          </div>
                        </div>
                      </div>
                  <div class="search-small hidden-md">
                      <form class="search-2">
                          <input type="text" name="search-2" placeholder="Search.." class="search-box-2">
                          <span class="icon-search icon-search-2"></span>
                      </form>
                  </div>
                        
          </div>
          <div class="background-grey">
              <div class="nav-bg container hidden-md hidden-sm"><!-- Navigation -->
                  <ul class="nav-bar">
                      <div class="nav nav-bespoke">
                          <a href="#">
                              <span class="icon-laptop icon-format-nav-laptop"></span>
                              <br>
                            <span> 
                              <small>Bespoke</small>
                              <br>
                              Software
                            </span>
                          </a>
                            <div class="sub-menu-banner bespoke-software-banner ">
                                  <div class="menu-drop bespoke-color">
                                      <ul class="sub-menu sub-container bespoke-ul bespoke-color">
                                          <li class="h2 sub-menu-banner-title">Our Bespoke Software Services</li>
                                          <li class="nav-item nav-sub-menu">
                                                  <span class="icon-cogs"></span>
                                                  <span class="link-text">Bespoke CRM</span>
                                          </li>   
                                          <li class="nav-item nav-sub-menu">
                                              <a href="#">
                                                  <span class="icon-briefcase"></span>
                                                  <span class="link-text">Business Automation</span>
                                              </a>
                                          </li> 
                                          <li class="nav-item nav-sub-menu">
                                              <a href="#">
                                                  <span class="icon-shuffle"></span>
                                                  <span class="link-text">Software Integrations</span>
                                              </a>
                                          </li> 
                                          <li class="nav-item nav-sub-menu">
                                              <a href="#">
                                                  <span class="icon-mobile"></span>
                                                  <span class="link-text">Mobile App Development</span>
                                              </a>
                                          </li>
                                          <li class="nav-item nav-sub-menu">
                                              <a href="#">
                                                  <span class="icon-folder-open"></span>
                                                  <span class="link-text">Bespoke Databases</span>
                                              </a>
                                          </li>  
                                          <li class="nav-item nav-sub-menu">
                                              <a href="#">
                                                  <span class="icon-transfer"></span>
                                                  <span class="link-text">Sharepoint Development</span>
                                              </a>
                                          </li>  
                                          <li class="nav-item nav-sub-menu">
                                              <a href="#">
                                                  <span class="icon-download"></span>
                                                  <span class="link-text">Operational Systems</span>
                                              </a>
                                          </li>  
                                          <li class="nav-item nav-sub-menu">
                                              <a href="#">
                                                  <span class="icon-group"></span>
                                                  <span class="link-text">Business Central Implementation</span>
                                              </a>
                                          </li>  
                                          <li class="nav-item nav-sub-menu">
                                              <a href="#">
                                                  <span class="icon-laptop"></span>
                                                  <span class="link-text">Internet of Things (IoT) Software</span>
                                              </a>
                                          </li>  
                                          <li class="nav-item nav-sub-menu">
                                              <a href="#">
                                                  <span class="icon-cloud"></span>
                                                  <span class="link-text">Intranet Development</span>
                                              </a>
                                          </li>  
                                          <li class="nav-item nav-sub-menu">
                                              <a href="#">
                                                  <span class="icon-cloud-download"></span>
                                                  <span class="link-text">Customer Portal Development</span>
                                              </a>
                                          </li>  
                                          <li class="nav-item nav-sub-menu">
                                              <a href="#">
                                                  <span class="icon-earth"></span>
                                                  <span class="link-text">Reporting Hub</span>
                                              </a>
                                          </li>  
                                      </ul>
                                      
                                  </div>
                            </div>  
                  </div>  
                  <div class="nav nav-it">
                      <a href="#">
                          <span class="icon-display icon-format-nav icon-format-nav-monitor"></span>
                      <br>
                      <span> 
                          <small>IT</small>
                          <br>
                          SUPPORT
                      </span>
                      </a>
                      <div class="sub-menu-banner it-support-banner ">
                          <div class="menu-drop it-support-color">
                          
                              <ul class="sub-menu sub-container it-support-ul it-support-color">
                                  <li class="h2 sub-menu-banner-title">Our IT Support Services</li>
                                  <li class="nav-item nav-sub-menu">
                                          <span class="icon-headphones"></span>
                                          <span class="link-text">Managed IT Support</span>
                                  </li>
                                  <li class="nav-item nav-sub-menu">
              
                                          <span class="icon-briefcase"></span>
                                          <span class="link-text">Business IT Support</span>
                                
                                  </li>
                                  <li class="nav-item nav-sub-menu">
                                      <a href="#">
                                          <span class="icon-laptop"></span>
                                          <span class="link-text">Office 365 for Business</span>
                                      </a>
                                  </li>
                                  <li class="nav-item nav-sub-menu">
                                      <a href="#">
                                          <span class="icon-googlescholar"></span>
                                          <span class="link-text">IT Consultancy</span>
                                      </a>
                                  </li>
                                  <li class="nav-item nav-sub-menu">
                                      <a href="#">
                                          <span class="icon-cloud"></span>
                                          <span class="link-text">Cloud Service Provider</span>
                                      </a>
                                  </li>
                                  <li class="nav-item nav-sub-menu">
                                      <a href="#">
                                          <span class="icon-hdd-o"></span>
                                          <span class="link-text">Data Backup & Disaster Recovery</span>
                                      </a>
                                  </li>
                              </ul>
                          
                          </div>
                      </div>
                      </div>
                      <div class="nav nav-digital">
                          <a href="#">
                              <span class="icon-bar-graph icon-marketing icon-format-nav icon-format-nav-graph"></span>
                          <br>
                          <span> 
                          <small>DIGITAL</small>
                          <br>
                          MARKETING
                          </span>
                          </a>
                          <div class="sub-menu-banner digital-banner ">
                              <div class="menu-drop digital-color">
                                  <div class="align-center">
                                  <ul class="sub-menu sub-container digital-ul digital-color">
                                      <li class="h2 sub-menu-banner-title">Digital Marketing</li>
                                      <li class="nav-item nav-sub-menu">
                                              <span class="icon-search"></span>
                                              <span class="link-text">Search Engine Optimisation</span>
                                        
                                      </li>   
                                      <li class="nav-item nav-sub-menu">
                                          <a href="#">
                                              <span class="icon-money"></span>
                                              <span class="link-text">Pay Per Click Advertising (PPC)</span>
                                          </a>
                                      </li>   
                                      <li class="nav-item nav-sub-menu">
                                          <a href="#">
                                              <span class="icon-trending-up"></span>
                                              <span class="link-text">Conversion Rate Optimisation (CRO)</span>
                                          </a>
                                      </li>   
                                      <li class="nav-item nav-sub-menu">
                                          <a href="#">
                                              <span class="icon-envelope"></span>
                                              <span class="link-text">Email Marketing</span>
                                          </a>
                                      </li>   
                                      <li class="nav-item nav-sub-menu">
                                          <a href="#">
                                              <span class="icon-group"></span>
                                              <span class="link-text">Social Media Marketing</span>
                                          </a>
                                      </li>   
                                      <li class="nav-item nav-sub-menu">
                                          <a href="#">
                                              <span class="icon-pencil"></span>
                                              <span class="link-text">Content Marketing</span>
                                          </a>
                                      </li> 
                                  </ul>  
                                  </div>   
                              </div>
                          </div>
                      
                      </div>
                      <div class="nav nav-tel"> 
                          <a href="#">  
                          <span class="icon-phone_in_talk icon-format-nav icon-format-nav-telephone"></span>
                          <br>
                          <span> 
                          <small>TELECOMS</small>
                          <br>
                          SERVICES
                          </span>
                          </a>
                          <div class="sub-menu-banner telecoms-banner">
                              <div class="menu-drop telecoms-color">
                                  <ul class="sub-menu sub-container telecoms-ul telecoms-color">
                                      <li class="h2 sub-menu-banner-title">Our Telecoms Services</li>
                                      <li class="nav-item nav-sub-menu">
              
                                              <span class="icon-ticket"></span>
                                              <span class="link-text">Business Mobile</span>
                                      <li class="nav-item nav-sub-menu">
                                          <a href="#">
                                              <span class="icon-phone"></span>
                                              <span class="link-text">Hosted VoIP Provider</span>
                                          </a>
                                      <li class="nav-item nav-sub-menu">
                                          <a href="#">
                                              <span class="icon-phone-square"></span>
                                              <span class="link-text">Business VoIP Systems</span>
                                          </a>
                                      </li>    
                                      <li class="nav-item nav-sub-menu">
                                          <a href="#">
                                              <span class="icon-meter"></span>
                                              <span class="link-text">Business Broadband</span>
                                          </a> 
                                      </li>         
                                      <li class="nav-item nav-sub-menu">   
                                          <a href="#">
                                              <span class="icon-handshake-o1"></span>
                                              <span class="link-text">Leased Lines Provider</span>
                                          </a>
                                      </li>
                                      <li class="nav-item nav-sub-menu">
                                          <a href="#">
                                              <span class="icon-phone_in_talk"></span>
                                              <span class="link-text">3CX Systems</span>
                                          </a>
                                      </li>    
                                  </ul>
                              </div>
                          </div>
                    
                      </div>
                      <div class="nav nav-web">    
                          <a href="#">  
                              <span class="icon-code icon-ours icon-format-nav icon-format-nav-code"></span>
                          <br>
                          <span> 
                          <small>WEB</small>
                          <br>
                          DESIGN
                          </span>
                              </a>
                          <div class="sub-menu-banner web-banner ">
                              <div class="menu-drop web-color">
                                  <ul class="sub-menu sub-container web-ul web-color">
                                      <li class="h2 sub-menu-banner-title">Our Web Design Services</li>
                                      <li class="nav-item nav-sub-menu">
                                          <a href="#">
                                              <span class="icon-pencil"></span>
                                              <span class="link-text">Bespoke Website Design</span>
                                          </a>
                                      </li>    
                                      <li class="nav-item nav-sub-menu">
                                          <a href="#">
                                              <span class="icon-shopping-cart"></span>
                                              <span class="link-text">eCommerce Website Design</span>
                                          </a>
                                      </li>    
                                      <li class="nav-item nav-sub-menu">
                                          <a href="#">
                                              <span class="icon-monitor"></span>
                                              <span class="link-text">Pay Monthly Websites</span>
                                          </a>
                                      </li>    
                                      <li class="nav-item nav-sub-menu">
                                          <a href="#">
                                              <span class="icon-bullhorn"></span>
                                              <span class="link-text">Branding & Design</span>
                                          </a>
                                      </li>    
                                      <li class="nav-item nav-sub-menu">
                                          <a href="#">
                                              <span class="icon-mobile"></span>
                                              <span class="link-text">Mobile App Development</span>
                                          </a>
                                      </li>    
                                      <li class="nav-item nav-sub-menu">
                                          <a href="#">
                                              <span class="icon-cloud"></span>
                                              <span class="link-text">Web Hosting</span>
                                          </a>
                                      </li>    
                                  </ul>
                              </div>
                          </div>
                      
                      </div> 
                      <div class="nav nav-cyber">  
                          <a href="#">  
                              <span class="icon-security icon-format-nav icon-format-nav-security"></span>
                              <br>
                              <span> 
                              <small>CYBER</small>
                              <br>
                              SECURITY
                              </span>
                              </a>
                          <div class="sub-menu-banner cyber-banner ">
                              <div class="menu-drop cyber-color">
                                  <ul class="sub-menu sub-container cyber-ul cyber-color">
                                      <li class="h2 sub-menu-banner-title">Our Cyber Security Services</li>
                                      <li class="nav-item nav-sub-menu">
                                          <a href="#">
                                              <span class="icon-file_copy"></span>
                                              <span class="link-text">Cyber Security Assessment</span>
                                          </a>
                                      </li>    
                                      <li class="nav-item nav-sub-menu">
                                          <a href="#">
                                              <span class="icon-clock"></span>
                                              <span class="link-text">Cyber Security Management</span>
                                          </a>
                                      </li>    
                                      <li class="nav-item nav-sub-menu">
                                          <a href="#">
                                              <span class="icon-flask"></span>
                                              <span class="link-text">Cyber Penetration Testing</span>
                                          </a>
                                      </li>    
                                      <li class="nav-item nav-sub-menu">
                                          <a href="#">
                                              <span class="icon-googlescholar"></span>
                                              <span class="link-text">Cyber Essentials Certification</span>
                                          </a>
                                      </li>    
                                      <li class="nav-item nav-sub-menu">
                                          <a href="#">
                                              <span class="icon-security"></span>
                                              <span class="link-text">PCI Compliance</span>
                                          </a>
                                      </li>    
                                      <li class="nav-item nav-sub-menu">
                                          <a href="#">
                                              <span class="icon-lock"></span>
                                              <span class="link-text">Hacking Prevention</span>
                                          </a>
                                      </li>    
                                  </ul>
                              </div>
                          </div>
                      </div> 
                      <div class="nav nav-dev">
                          <a href="#">  
                              <span class="icon-googlescholar icon-format-nav-devloper"></span>
                            <br>
                            <span> 
                              <small>Developer</small>
                              <br>
                              Course
                            </span>
                              </a>
                            <div class="sub-menu-banner developer-banner ">
                                <div class="menu-drop developer-color">
                                    <ul class="sub-menu sub-container developer-ul developer-color">
                                        <li class="h2 sub-menu-banner-title">Our Developer Course Services</li>
                                        <li class="nav-item nav-sub-menu">
                                            <a href="#">
                                                <span class="icon-laptop"></span>
                                                <span class="link-text">Train For A Career In Tech</span>
                                            </a>
                                        </li>    
                                        <li class="nav-item nav-sub-menu">
                                            <a href="#">
                                                <span class="icon-code"></span>
                                                <span class="link-text">Skills Bootcamp</span>
                                            </a>
                                        </li>    
                                        <li class="nav-item nav-sub-menu">
                                            <a href="#">
                                                <span class="icon-question-mark"></span>
                                                <span class="link-text">Scion Scheme Frequently Asked Questions</span>
                                            </a>
                                        </li>    
                                        <li class="nav-item nav-sub-menu">
                                          <a href="#">
                                              <span class="icon-handshake-o1"></span>
                                              <span class="link-text">Scion Collaborators</span>
                                          </a>
                                      </li>   
                                    </ul>
                                </div>
                            </div>
                        </div> 
                  </ul>
              </div> 
              </div>
          </div>
      </header>
<div id="sticky-container">
  <div id="sticky" class="stickyState animated slideInDown sticky-hide"> <!-- The header thats slides down with you on the page-->
    <div class="container-header">
        <div class="container header-large hidden-md hidden-sm">
            <div class="hidden-md hidden-sm header-row">
                <div class="logo-container">
                    <a href="#" ><img src="images/netmatters-logo-black.png" class="logo" alt="netmatters logo"></a>
                  </div>
                <div class="support element">
                    <button type="button" class="btn btn-help btn-help-support">
                      <span class="pull-left">
                       <span class="icon-mouse mouse"></span>
                      </span>
                      Support
                    </button>
                  </div>
                  <div class="contact element">
                    <button type="button" class="btn btn-help btn-help-contact">
                      <span class="pull-left">
                        <span class="icon-paperplane plane"></span>
                      </span>
                      Contact
                    </button>
                  </div>
                  <div class="search-large">
                    <form class="search-bar">
                        <input type="text" placeholder="Search..." class="search-box-1 search-focus">
                        <button type="submit">
                            <span class="icon-search icon-search-1"></span>
                        </button>
                      </form>
                </div>
                <div class="actions">
                    <div class="container-hamburger">
                      <button type="button" id="header-hamburger-sml" class="btn btn-hamburger hamburger-sticky  is-active">
                        <span class="hamburger-box">
                          <span class="hamburger-inner"></span>
                        </span>
                      </button>
                    </div>
                  </div>
            </div>
        </div>
        <div class="header-small hidden-lg hidden-xlg  hidden-xxlg">
            <div class="header-small-logo">
                <a href="#" class="nm-logo-black">
                    <img src="images/netmatters-logo-black.png" class="nm-logo-black" alt="Netmatters Logo Black">
                </a>
                <div class="visible-md hidden-sm">
                    <form class="search-bar">
                        <input type="text" placeholder="Search..." class="search-box search-focus hidden-lg hidden-xlg">
                        <button type="submit">
                            <span class="icon-search icon-search-1"></span>
                        </button>
                      </form>  
                </div>
                <div class="container-mobile hidden-md">
                    <a class="phone" href="#">
                      <span class="icon-phone_in_talk"></span>
                    </a>
                  </div>
                  <div class="actions">
                    <div class="container-hamburger">
                      <button type="button" class="btn btn-hamburger hamburger  hamburger-small-sticky is-active">
                        <span class="hamburger-box">
                          <span class="hamburger-inner"></span>
                        </span>
                      </button>
                    </div>
                  </div>
                </div>
            <div class="search-small hidden-md">
                <form class="search-2">
                    <input type="text" name="search-2" placeholder="Search.." class="search-box-2">
                    <span class="icon-search icon-search-2"></span>
                </form>
            </div>
                  
    </div>
    <div class="background-grey">
        <div class="nav-bg container hidden-md hidden-sm"><!-- Navigation -->
            <ul class="nav-bar">
                <div class="nav nav-bespoke">
                    <a href="#">
                        <span class="icon-laptop icon-format-nav-laptop"></span>
                        <br>
                       <span> 
                        <small>Bespoke</small>
                        <br>
                        Software
                       </span>
                    </a>
                       <div class="sub-menu-banner bespoke-software-banner ">
                            <div class="menu-drop bespoke-color">
                                <ul class="sub-menu sub-container bespoke-ul bespoke-color">
                                    <li class="h2 sub-menu-banner-title">Our Bespoke Software Services</li>
                                    <li class="nav-item nav-sub-menu">
                                            <span class="icon-cogs"></span>
                                            <span class="link-text">Bespoke CRM</span>
                                    </li>   
                                    <li class="nav-item nav-sub-menu">
                                        <a href="#">
                                            <span class="icon-briefcase"></span>
                                            <span class="link-text">Business Automation</span>
                                        </a>
                                    </li> 
                                    <li class="nav-item nav-sub-menu">
                                        <a href="#">
                                            <span class="icon-shuffle"></span>
                                            <span class="link-text">Software Integrations</span>
                                        </a>
                                    </li> 
                                    <li class="nav-item nav-sub-menu">
                                        <a href="#">
                                            <span class="icon-mobile"></span>
                                            <span class="link-text">Mobile App Development</span>
                                        </a>
                                    </li>
                                    <li class="nav-item nav-sub-menu">
                                        <a href="#">
                                            <span class="icon-folder-open"></span>
                                            <span class="link-text">Bespoke Databases</span>
                                        </a>
                                    </li>  
                                    <li class="nav-item nav-sub-menu">
                                        <a href="#">
                                            <span class="icon-transfer"></span>
                                            <span class="link-text">Sharepoint Development</span>
                                        </a>
                                    </li>  
                                    <li class="nav-item nav-sub-menu">
                                        <a href="#">
                                            <span class="icon-download"></span>
                                            <span class="link-text">Operational Systems</span>
                                        </a>
                                    </li>  
                                    <li class="nav-item nav-sub-menu">
                                        <a href="#">
                                            <span class="icon-group"></span>
                                            <span class="link-text">Business Central Implementation</span>
                                        </a>
                                    </li>  
                                    <li class="nav-item nav-sub-menu">
                                        <a href="#">
                                            <span class="icon-laptop"></span>
                                            <span class="link-text">Internet of Things (IoT) Software</span>
                                        </a>
                                    </li>  
                                    <li class="nav-item nav-sub-menu">
                                        <a href="#">
                                            <span class="icon-cloud"></span>
                                            <span class="link-text">Intranet Development</span>
                                        </a>
                                    </li>  
                                    <li class="nav-item nav-sub-menu">
                                        <a href="#">
                                            <span class="icon-cloud-download"></span>
                                            <span class="link-text">Customer Portal Development</span>
                                        </a>
                                    </li>  
                                    <li class="nav-item nav-sub-menu">
                                        <a href="#">
                                            <span class="icon-earth"></span>
                                            <span class="link-text">Reporting Hub</span>
                                        </a>
                                    </li>  
                                </ul>
                                
                            </div>
                       </div>  
             </div>  
             <div class="nav nav-it">
                <a href="#">
                    <span class="icon-display icon-format-nav icon-format-nav-monitor"></span>
                <br>
                <span> 
                    <small>IT</small>
                    <br>
                    SUPPORT
                </span>
                </a>
                <div class="sub-menu-banner it-support-banner ">
                    <div class="menu-drop it-support-color">
                    
                        <ul class="sub-menu sub-container it-support-ul it-support-color">
                            <li class="h2 sub-menu-banner-title">Our IT Support Services</li>
                            <li class="nav-item nav-sub-menu">
                                    <span class="icon-headphones"></span>
                                    <span class="link-text">Managed IT Support</span>
                            </li>
                            <li class="nav-item nav-sub-menu">
        
                                    <span class="icon-briefcase"></span>
                                    <span class="link-text">Business IT Support</span>
                           
                            </li>
                            <li class="nav-item nav-sub-menu">
                                <a href="#">
                                    <span class="icon-laptop"></span>
                                    <span class="link-text">Office 365 for Business</span>
                                </a>
                            </li>
                            <li class="nav-item nav-sub-menu">
                                <a href="#">
                                    <span class="icon-googlescholar"></span>
                                    <span class="link-text">IT Consultancy</span>
                                </a>
                            </li>
                            <li class="nav-item nav-sub-menu">
                                <a href="#">
                                    <span class="icon-cloud"></span>
                                    <span class="link-text">Cloud Service Provider</span>
                                </a>
                            </li>
                            <li class="nav-item nav-sub-menu">
                                <a href="#">
                                    <span class="icon-hdd-o"></span>
                                    <span class="link-text">Data Backup & Disaster Recovery</span>
                                </a>
                            </li>
                        </ul>
                    
                    </div>
                </div>
                </div>
                <div class="nav nav-digital">
                    <a href="#">
                        <span class="icon-bar-graph icon-marketing icon-format-nav icon-format-nav-graph"></span>
                    <br>
                    <span> 
                     <small>DIGITAL</small>
                     <br>
                     MARKETING
                    </span>
                    </a>
                    <div class="sub-menu-banner digital-banner ">
                        <div class="menu-drop digital-color">
                            <div class="align-center">
                            <ul class="sub-menu sub-container digital-ul digital-color">
                                <li class="h2 sub-menu-banner-title">Digital Marketing</li>
                                <li class="nav-item nav-sub-menu">
                                        <span class="icon-search"></span>
                                        <span class="link-text">Search Engine Optimisation</span>
                                   
                                </li>   
                                <li class="nav-item nav-sub-menu">
                                    <a href="#">
                                        <span class="icon-money"></span>
                                        <span class="link-text">Pay Per Click Advertising (PPC)</span>
                                    </a>
                                </li>   
                                <li class="nav-item nav-sub-menu">
                                    <a href="#">
                                        <span class="icon-trending-up"></span>
                                        <span class="link-text">Conversion Rate Optimisation (CRO)</span>
                                    </a>
                                </li>   
                                <li class="nav-item nav-sub-menu">
                                    <a href="#">
                                        <span class="icon-envelope"></span>
                                        <span class="link-text">Email Marketing</span>
                                    </a>
                                </li>   
                                <li class="nav-item nav-sub-menu">
                                    <a href="#">
                                        <span class="icon-group"></span>
                                        <span class="link-text">Social Media Marketing</span>
                                    </a>
                                </li>   
                                <li class="nav-item nav-sub-menu">
                                    <a href="#">
                                        <span class="icon-pencil"></span>
                                        <span class="link-text">Content Marketing</span>
                                    </a>
                                </li> 
                            </ul>  
                            </div>   
                        </div>
                    </div>
                
                </div>
                <div class="nav nav-tel"> 
                    <a href="#">  
                    <span class="icon-phone_in_talk icon-format-nav icon-format-nav-telephone"></span>
                    <br>
                    <span> 
                     <small>TELECOMS</small>
                     <br>
                     SERVICES
                    </span>
                    </a>
                    <div class="sub-menu-banner telecoms-banner">
                        <div class="menu-drop telecoms-color">
                            <ul class="sub-menu sub-container telecoms-ul telecoms-color">
                                <li class="h2 sub-menu-banner-title">Our Telecoms Services</li>
                                <li class="nav-item nav-sub-menu">
        
                                        <span class="icon-ticket"></span>
                                        <span class="link-text">Business Mobile</span>
                                <li class="nav-item nav-sub-menu">
                                    <a href="#">
                                        <span class="icon-phone"></span>
                                        <span class="link-text">Hosted VoIP Provider</span>
                                    </a>
                                <li class="nav-item nav-sub-menu">
                                    <a href="#">
                                        <span class="icon-phone-square"></span>
                                        <span class="link-text">Business VoIP Systems</span>
                                    </a>
                                </li>    
                                <li class="nav-item nav-sub-menu">
                                    <a href="#">
                                        <span class="icon-meter"></span>
                                        <span class="link-text">Business Broadband</span>
                                    </a> 
                                </li>         
                                <li class="nav-item nav-sub-menu">   
                                    <a href="#">
                                        <span class="icon-handshake-o1"></span>
                                        <span class="link-text">Leased Lines Provider</span>
                                    </a>
                                </li>
                                <li class="nav-item nav-sub-menu">
                                    <a href="#">
                                        <span class="icon-phone_in_talk"></span>
                                        <span class="link-text">3CX Systems</span>
                                    </a>
                                </li>    
                            </ul>
                        </div>
                    </div>
               
                </div>
                <div class="nav nav-web">    
                    <a href="#">  
                        <span class="icon-code icon-ours icon-format-nav icon-format-nav-code"></span>
                    <br>
                    <span> 
                     <small>WEB</small>
                     <br>
                     DESIGN
                    </span>
                        </a>
                    <div class="sub-menu-banner web-banner ">
                        <div class="menu-drop web-color">
                            <ul class="sub-menu sub-container web-ul web-color">
                                <li class="h2 sub-menu-banner-title">Our Web Design Services</li>
                                <li class="nav-item nav-sub-menu">
                                    <a href="#">
                                        <span class="icon-pencil"></span>
                                        <span class="link-text">Bespoke Website Design</span>
                                    </a>
                                </li>    
                                <li class="nav-item nav-sub-menu">
                                    <a href="#">
                                        <span class="icon-shopping-cart"></span>
                                        <span class="link-text">eCommerce Website Design</span>
                                    </a>
                                </li>    
                                <li class="nav-item nav-sub-menu">
                                    <a href="#">
                                        <span class="icon-monitor"></span>
                                        <span class="link-text">Pay Monthly Websites</span>
                                    </a>
                                </li>    
                                <li class="nav-item nav-sub-menu">
                                    <a href="#">
                                        <span class="icon-bullhorn"></span>
                                        <span class="link-text">Branding & Design</span>
                                    </a>
                                </li>    
                                <li class="nav-item nav-sub-menu">
                                    <a href="#">
                                        <span class="icon-mobile"></span>
                                        <span class="link-text">Mobile App Development</span>
                                    </a>
                                </li>    
                                <li class="nav-item nav-sub-menu">
                                    <a href="#">
                                        <span class="icon-cloud"></span>
                                        <span class="link-text">Web Hosting</span>
                                    </a>
                                </li>    
                            </ul>
                        </div>
                    </div>
                
                </div> 
                <div class="nav nav-cyber">  
                    <a href="#">  
                        <span class="icon-security icon-format-nav icon-format-nav-security"></span>
                        <br>
                        <span> 
                         <small>CYBER</small>
                         <br>
                         SECURITY
                        </span>
                        </a>
                    <div class="sub-menu-banner cyber-banner ">
                        <div class="menu-drop cyber-color">
                            <ul class="sub-menu sub-container cyber-ul cyber-color">
                                <li class="h2 sub-menu-banner-title">Our Cyber Security Services</li>
                                <li class="nav-item nav-sub-menu">
                                    <a href="#">
                                        <span class="icon-file_copy"></span>
                                        <span class="link-text">Cyber Security Assessment</span>
                                    </a>
                                </li>    
                                <li class="nav-item nav-sub-menu">
                                    <a href="#">
                                        <span class="icon-clock"></span>
                                        <span class="link-text">Cyber Security Management</span>
                                    </a>
                                </li>    
                                <li class="nav-item nav-sub-menu">
                                    <a href="#">
                                        <span class="icon-flask"></span>
                                        <span class="link-text">Cyber Penetration Testing</span>
                                    </a>
                                </li>    
                                <li class="nav-item nav-sub-menu">
                                    <a href="#">
                                        <span class="icon-googlescholar"></span>
                                        <span class="link-text">Cyber Essentials Certification</span>
                                    </a>
                                </li>    
                                <li class="nav-item nav-sub-menu">
                                    <a href="#">
                                        <span class="icon-security"></span>
                                        <span class="link-text">PCI Compliance</span>
                                    </a>
                                </li>    
                                <li class="nav-item nav-sub-menu">
                                    <a href="#">
                                        <span class="icon-lock"></span>
                                        <span class="link-text">Hacking Prevention</span>
                                    </a>
                                </li>    
                            </ul>
                        </div>
                    </div>
                </div> 
                <div class="nav nav-dev">
                    <a href="#">  
                        <span class="icon-googlescholar icon-format-nav-devloper"></span>
                       <br>
                       <span> 
                        <small>Developer</small>
                        <br>
                        Course
                       </span>
                        </a>
                       <div class="sub-menu-banner developer-banner ">
                           <div class="menu-drop developer-color">
                               <ul class="sub-menu sub-container developer-ul developer-color">
                                   <li class="h2 sub-menu-banner-title">Our Developer Course Services</li>
                                   <li class="nav-item nav-sub-menu">
                                       <a href="#">
                                           <span class="icon-laptop"></span>
                                           <span class="link-text">Train For A Career In Tech</span>
                                       </a>
                                   </li>    
                                   <li class="nav-item nav-sub-menu">
                                       <a href="#">
                                           <span class="icon-code"></span>
                                           <span class="link-text">Skills Bootcamp</span>
                                       </a>
                                   </li>    
                                   <li class="nav-item nav-sub-menu">
                                       <a href="#">
                                           <span class="icon-question-mark"></span>
                                           <span class="link-text">Scion Scheme Frequently Asked Questions</span>
                                       </a>
                                   </li>    
                                   <li class="nav-item nav-sub-menu">
                                    <a href="#">
                                        <span class="icon-handshake-o1"></span>
                                        <span class="link-text">Scion Collaborators</span>
                                    </a>
                                </li>   
                               </ul>
                           </div>
                       </div>
                   </div> 
            </ul>
        </div> 
        </div>
    </div>
</div>
</div>
    
<!-- carousel -->
<div id="banner">
    <div class="banner-carousel-container main-banner">
      <div class="banner-image-home-why">
          <div class="carousel-content why">
            <div class="carousel-text">
              <h1 class="h1">The East of England's Leading Technology Company</h1>
            <p> Performance-driven digital and technology services<br> with complete transparency.</p>
            <a href="#" class="btn btn-whyus">
              Why Choose Us?
              <span class="icon-arrow-right"></span>
            </a>
            </div>
          </div>
          <div class="img-container-banner carousel-img main-img">
            <img src="images/banner1.png" class="main-banner-image" alt="Home Page">
        </div>
      </div>
      <div class="banner-image-home">
          <div class="carousel-content">
            <div class="carousel-text">
              <h1 class="h1">Bespoke Software</h1>
            <p>Delivering expert bespoke software solutions<br> across a range of industries.</p>
            <a href="#" class="btn btn-bespoke">
              Find Out More
              <span class="icon-arrow-right"></span>
            </a>
            </div>
          </div>
          <div class="img-container-banner carousel-img">
            <img src="images/banner2.jpg" alt="Bespoke Software">
        </div>
      </div>
      
      <div>
          <div class="carousel-content">
            <div class="carousel-text">
              <h1 class="h1">IT Support</h1>
              <p>Fast and cost-effective IT support<br> services for your business.</p>
              <a href="#" class="btn btn-it-banner">
                Find Out More
                <span class="icon-arrow-right"></span>
              </a>
            </div>
          </div>
          <div class="img-container-banner carousel-img">
            <img src="images/banner3.png" alt="IT Support">
        </div>
      </div>
      
      <div>
          <div class="carousel-content">
            <div class="carousel-text"></div>
            <h1 class="h1">Digital Marketing</h1>
            <p>Generating your new business through<br> results-driven marketing activities.</p>
            <a href="#" class="btn btn-digital">
              Find Out More
              <span class="icon-arrow-right"></span>
            </a>
          </div>
          <div class="img-container-banner carousel-img">
            <img src="images/banner4.png" alt="Digital Marketing">
        </div>
      </div>
     
      <div>
          <div class="carousel-content">
            <div class="carousel-text">
              <h1 class="h1">Telecoms Services</h1>
              <p>A new approach to connectivity, see<br> how we can help your business.</p>
              <a href="#" class="btn btn-telecoms">
                Find Out More
                <span class="icon-arrow-right"></span>
              </a>
            </div>
          </div>
          <div class="img-container-banner carousel-img">
            <img src="images/banner5.png" alt="Telecoms Services">
        </div>
      </div>
      
      <div>
          <div class="carousel-content">
            <div class="carousel-text"><h1 class="h1">Web Design</h1>
              <p>For businesses looking to make a strong<br> and effective first impression.</p>
              <a href="#" class="btn btn-web">
                Find Out More
                <span class="icon-arrow-right"></span>
              </a>
            </div>
           </div>
          <div class="img-container-banner carousel-img">
            <img src="images/banner6.jpg" alt="Web Design">
        </div>
      </div>
      
      <div>
          <div class="carousel-content">
            <div class="carousel-text">
              <h1 class="h1">Cyber Security</h1>
              <p>Keeping businesses and their customers<br> sensitive information protected.</p>
              <a href="#" class="btn btn-cyber">
                Find Out More
                <span class="icon-arrow-right"></span>
              </a>
            </div>
          </div>
          <div class="img-container-banner carousel-img">
            <img src="images/banner7.png" alt="Cyber Security">
        </div>
      </div>
      
    </div>
    
      


  </div>
        <!-- Services area -->

        <div class="container container-section service">
            <div class="service-list">
                <div class="row">
                  <div class="service-heading">
                   <h2 class="h1">
                      <strong>Our Services</strong>
                    </h2>
    
                    <h3 class="view-all view-all-large">
                      <a href="#">View Our Work
                        <span class="icon-arrow-right"></span>
                      </a>
                    </h3>
                  </div>
    
                  
                  <div class="service-blocks">
                      
                      <span class="service-block-one float-container"> 
                        <a class="service-link" href="#"></a>
                        <span class="icon-circle icon-circle-software">
                          <span class="icon-laptop icon-format-services"></span>
                        </span>
                        <span class="h2">Bespoke Software</span>
                        <span class="p text-align-md">
                          Bespoke software solutions for all your business needs including integrations and reporting.
                        </span>
                        <span class="btn btn-software">Read More</span>
          
                      </span>
                    
    
                    <span class="service-block-two float-container">
                      <a class="service-link" href="#"></a>
                      <span class="icon-circle icon-circle-it">
                        <span class="icon-display icon-display-service icon-format-services"></span>
                      </span>
                        <span class="h2">IT Support</span>
                        <span class="p text-align-md">
                          Fully managed IT support and consultancy packages tailored to meet your exact business needs.
                        </span>
                        <span class="btn btn-it">Read More</span>
                      
                      
                    </span>
                  
    
                  
                    <span class="service-block-three float-container">
                      <a class="service-link" href="#"></a> 
                      <span class="icon-circle icon-circle-dm">
                       <span class="icon-bar-graph icon-digital icon-format-services"></span>
                      </span>
                      <span class="h2">Digital Marketing</span>
                      <span class="p text-align-md">
                        Driven brand awareness & ROI through creative digital marketing campaigns.
                      </span>
                      <span class="btn btn-dm">Read More</span>
                    </span>
                  
                  </div>
                  <div class="service-blocks-bottom">
                    <span class="service-block-four float-container">
                      <a class="service-link" href="#"></a> 
                      <span class="icon-circle icon-circle-ts">
                       <span class="icon-phone_in_talk icon-format-services"></span>
                      </span>
                      <span class="h2">Telecoms Service</span>
                      <span class="p text-align-md">
                        Business telephony solutions including mobile & connectivity solutions.
                      </span>
                      <span class="btn btn-ts">Read More</span>
                    </span>
                  
    
                  
                    <span class="service-block-five float-container">
                      <a class="service-link" href="#"></a> 
                      <span class="icon-circle icon-circle-wd" >
                        <span class="icon-code  icon-format-services"></span>
                      </span>
                      <span class="h2">Web Design</span>
                      <span class="p text-align-md">
                        Use-centric design for business looking to make a lasting impression.
                      </span>
                      <span class="btn btn-wd">Read More</span>
                    </span>
                  
    
                  
                    <span class="service-block-six float-container"> 
                      <a class="service-link" href="#"></a>
                      <span class="icon-circle icon-circle-cs">
                        <span class="icon-security icon-format-services"></span>
                      </span>
                      <span class="h2">Cyber Secruity</span>
                      <span class="p text-align-md">
                        Prevention, testing, consultancy & breach management services.
                      </span>
                      <span class="btn btn-cs">Read More</span>
                    </span>
                  
    
                  
                    <span class="service-block-seven float-container">
                      <a class="service-link" href="#"></a> 
                      
                      <span class="icon-circle icon-circle-dt">
                        <span class="icon-googlescholar icon-googlescholar-service icon-format-services"></span>
                      </span>
                      
                        <span class="h2">Developer Training</span>
                        <span class="p text-align-md">
                          Web design & software training courses designed to secure a job in tech.
                        </span>
                        <span class="btn btn-dt">Read More</span>
                      
                    </span>
                  </div>
              </div>
              <h3 class="view-all-mobile  view-all">
                <a href="#">View Our Work
                  <span class="icon-arrow-right"></span>
                </a>
              </h3>  
            </div>
        </div>
                  
    
                <div class="partner-slideshow"> <!--carousel-->
    
                  
                    
                    <img  src="images/google-partner.jpg" alt="Google Partner" class="colour-logo mono-logo">
                    <img  src="images/living_wage.png" alt="Living Wage Group" class="colour-logo mono-logo">
                    <img  src="images/norfolk_prohelp.png" alt="Norfolk Pro Help" class="colour-logo mono-logo">
                    <img  src="images/investing-in-future-growth.jpg" alt="Investing in Future Growth Winner" class="colour-logo mono-logo">
                    <img  src="images/norfolk-carbon-charter.jpg" alt="Carbon Charter Gold 2021" class="colour-logo mono-logo">
                    <img  src="images/PPC_logo.jpg" alt="Prompt Payment Code" class="colour-logo mono-logo">
                    <img  src="images/princess-royal-training.jpg" alt="Princess Royal Trust Training Award 2020" class="colour-logo mono-logo princess">
                    <img  src="images/future-50.jpg" alt="Future50 Member" class="colour-logo mono-logo">
                    
                    
                  
                </div>
    
                <!--Welcome to Netmatters-->
                <div class="background-grey">
                    <div class="welcome-netmatters container welcome-section">
                        <div class="align-center">
                            <div class="welcome-grid">
                            <div class="welcome-left">
                                <h2 class="h1 welcome-h1"><strong>Welcome to Netmatters</strong> </h2>
                                          <p>
                                            <strong>Netmatters is a leading 
                                              <a href="#">Bespoke Software</a>
                                              ,
                                              <a href="#">IT Support</a>
                                              , and
                                              <a href="#">Digital Marketing</a>
                                              company based in the East of England with offices in 
                                              <a href="#" target="_blank">London</a>
                                              ,&nbsp;
                                              <a href="#">Cambridge</a>
                                              ,
                                              <a href="#">Wymondham</a>
                                              , and
                                              <a href="#">Great Yarmouth</a>
                                              .
                                            </strong>
                                          </p>
                                          <p>We aren't tied into contracts with third-party providers, so you know that our recommendations for your business are based purely with one benefit in 
                                            mind: to help improve your business with the most appropriate solutions. 
                                          </p>
                                          <p> We pride ourselves on being an ethical business and have a unique business offering and cost model that ensures you get the most from our relationship
                                             in an upfront manner.
                                          </p>
                                          <div class="black-buttons">
                                            <a href="#" target="_blank" class="btn button-black">Why Choose us?
                                              <span class="icon-arrow-right"></span></a>
                                              <a href="#" target="_blank" class="btn button-black">Our Culture
                                                  <span class="icon-arrow-right"></span></a>
                                          </div>
                                          
                            </div>
                            <div class="welcome-right">
                                <h2 class="h1 welcome-h1"><strong>What Our Clients Think</strong></h2>
                                <div class="stars">
                                <div style="color: orange; margin-bottom: 25px; font-size: 50px;" class="icon-star-full" ></div>
                                <div style="color: orange; margin-bottom: 25px; font-size: 50px;" class="icon-star-full" ></div>
                                <div style="color: orange; margin-bottom: 25px; font-size: 50px;" class="icon-star-full" ></div>
                                <div style="color: orange; margin-bottom: 25px; font-size: 50px;" class="icon-star-full" ></div>
                                <div style="color: orange; margin-bottom: 25px; font-size: 50px;" class="icon-star-full" ></div>
                                </div>
                
                                <p class="quote"><strong><em>Netmatters stood out from the start. Great guys and very easy to work with. Both the build and digital marketing teams are clearly skilled -they know their stuff! They delivered a website to our (high!) expectations and went over and above to ensure we were satisfied clients - and we are!</em></strong></p>
                                <p ><cite>Eleanor Bishop, Head of Marketing -</cite><a class="author">Ashcroft Partnership LLP</a></p>
                                <div class="reviews">
                                    <a href="#" target="_blank" class="btn btn-reviews btn-reviews-google">Google Reviews
                                        <span class="icon-arrow-right"></span>
                                    </a>
                
                                    <a href="#" target="_blank" class="btn btn-reviews btn-reviews-trustpilot">Trustpilot Reviews
                                        <span class="icon-arrow-right"></span>
                                    </a>
                                  
                                </div>
                            </div>
                        </div>
                        </div>
                     </div>
                </div>
         <!-- Latest news section-->   
         <div class="latest-articles container center"></div>
         <div class="container">
           <div class="latest-articles">
             <div class="headings-bar">
               <h2 class="h1 float-left">
                 <strong>Latest News</strong>
               </h2>
               <h3 class="view-all view-all-top hidden-sm">
                <a href="#">View All <span class="icon-arrow-right"></span></a>
                <span class="icon-arrow-right2"></span>
              </h3> 
         </div>
             </div>
    
             <div class="article-content">
    
               <div class="article-blocks">
                 
                 <div class="block-one">
                   <a class="article-link" href ="#"></a>
                   <div class="img-container">
                     <a href="#" class="btn-tooltip btn-tooltip-one" title="View all: Developer Course / Careers">Career</a>
                     <a class="article-img">
                       <img src="images/scion-coalition-scheme-Ody3.webp" class ="img-responsive img-container" alt="Scion Coalition Scheme Trainee Web Developer">
                     </a> 
                   </div>
                   <div class="block-content">
                    <h3>
                        <a href="https://www.netmatters.co.uk/our-careers/scion-coalition-scheme-trainee-web-developer">
                            Scion Coalition Scheme Trainee Web Developer
                        </a>
                                    </h3>
                     <p>Salary Range £22,000 per annum Hours 40 Location Wymondham, Norfolk. Flexible working hours and part...</p>
                     <div class="btn btn-news btn-news-one">Read More</div>
                     
                     <div class="user">
                       <div class="avatar">
                         <img src="images/rebecca-moore-1fh7.webp" class="img-responsive" alt="Netmatters">
                       </div>
                       <div class="info">
                         <strong>Posted by Rebecca Moore</strong> <br>
                         5th January 2024
                       </div>
                     </div>
                   </div>
                   
                 </div>
                 
    
                 <div class="block-two">
                    <a class="article-link" href ="#"></a>
                    <div class="img-container">
                      <a href="#" class="btn-tooltip btn-tooltip-one" title="View all: Telecoms Services / News">News</a>
                      <a class="article-img">
                        <img src="images/east-anglian-air-1pHi.webp" class ="img-responsive img-container" alt="Gary Cullen - Octobers Notable of the Month">
                      </a> 
                    </div>
                    <div class="block-content">
                      <h3>
                        <a href="https://www.netmatters.co.uk/news/east-anglian-air-ambulance-introducing-a-3cx-call-flow">East Anglian Air Ambulance - Introducing a 3C...</a>
                        <span class="readtime">- 4 minute read</span>
                      </h3>
                      <p>At Netmatters, we highly value the dedication and accomplishments of our staff. That is why each and...</p>
                      <div class="btn btn-news btn-news-one">Read More</div>
                      
                      <div class="user">
                        <div class="avatar">
                          <img src="images/netmatters-ltd-VXAv.webp" class="img-responsive" alt="Netmatters">
                        </div>
                        <div class="info">
                          <strong>Posted by Netmatters</strong> <br>
                          2nd January 2024
                  </div>
                      </div>
                    </div>
                    
                  </div>
                 
    
    
                  <div class="block-three">
                    <a class="article-link" href ="#"></a>
                    <div class="img-container">
                      <a href="#" class="btn-tooltip btn-tooltip-three" title="View all: IT Support / News">News</a>
                      <a class="article-img">
                        <img src="images/jamie-slater-DJvi.webp" class ="img-responsive img-container" alt="Jamie Slater - Netmatters 5 Year Legend">
                      </a> 
                    </div>
                    <div class="block-content">
                      <h3>
                        <a href="https://www.netmatters.co.uk/news/jamie-slater-netmatters-5-year-legend">Jamie Slater - Netmatters 5 Year Legend</a>
                        <span class="readtime">- 3 minute read</span>
                      </h3>
                      <p>Today, we celebrate the brilliant accomplishments of Jamie Slater as he receives the Netmatters Long...</p>
                      <div class="btn btn-news btn-news-three">Read More</div>
                      
                      <div class="user">
                        <div class="avatar">
                          <img src="images/netmatters-ltd-VXAv.webp" class="img-responsive" alt="Netmatters">
                        </div>
                        <div class="info">
                          <strong>Posted by Netmatters</strong> <br>
                          15th December 2023
                        </div>
                      </div>
                    </div>
                    
                 </div>
                 <h3 class="view-all view-all-mobile ">
                    <a href="#">View All <span class="icon-arrow-right"></span></a>
                    <span class="icon-arrow-right2"></span>
                  </h3> 
                  </div>
                  
             
           </div>
         </div>
                 <!--Client slideshow section --> 
                 <div class="affiliation-banner sponsors-banner" id="high-affiliation">
                  <div class="up">
                      <img src="images/black_swan_logo.webp" alt="Black Swan " class="colour-logo mono-logo swan-logo item">
                      <div class="triangle-space"><span class="triangle-up"></span></div>
                      <div class="box"> <h3>Swan Care Group</h3>
                          <p>Black Swan Care Group own and manage 21 high-quality care and residential homes with a focus on putting the needs of their residents first.</p>
                          <a href="#" class="btn btn-swan"> VIEW OUR CASE STUDY   <span class="icon-arrow-right" ></span></a> 
                      </div>
                   </div>
              
                  <div class="up">
                        
                          <img  src="images/xupes_logo.png" alt="Xupes" class="colour-logo mono-logo item xupes-logo item">
                          <div class="triangle-space"><span class="triangle-up"></span></div>
                          <div class="box"> <h3>Xupes</h3>
                          </div>
           
                  </div>
                  <div class="up">
                              <img src="images/beat_logo.png" alt="Beat" class="colour-logo mono-logo item">
                              <div class="triangle-space"><span class="triangle-up"></span></div>
                              <div class="box"> 
                                  <h3>BEAT</h3>
                                  <p>The UK's eating disorder charity founded in 1989.</p>
                              </div>
                             
                   </div>
                  
                  <div class="up">
                      <img src="images/survey_solutions_logo.png" alt="Survey solutions" class="colour-logo mono-logo item survey-logo item">
                      <div class="triangle-space"><span class="triangle-up"></span></div>
                      <div class="box"> 
                          <h3>Survey Solutions</h3>
                     </div>
                  </div>
                  <div class="up">
                      <img src="images/girl_guides_anglia_logo.png" alt="Girl Guides" class="colour-logo mono-logo item">
                      <div class="triangle-space"><span class="triangle-up"></span></div>
                      <div class="box"> <h3>Girl Guiding Anglia</h3>
                          <p>Black Swan Care Group own and manage 21 high-quality care and residential homes with a focus on putting the needs of their residents first.</p>
                          <a href="#" class="btn btn-blue"> VIEW OUR CASE STUDY <span class="icon-arrow-right" ></span></a> 
                      </div>
                  </div>
                  <div class="up">
                      <img src="images/sweetzy_logo.png" alt="Sweetzy" class="colour-logo mono-logo item nav-item">
                      <div class="triangle-space"><span class="triangle-up sweet-triangle"></span></div>
                      <div class="box"> <h3>Sweetzy</h3>
                          <p>Sweetzy are an online sweets retailer, based in Wymondham.</p>
                          <a href="#" class="btn btn-green"> VIEW OUR CASE STUDY <span class="icon-arrow-right" ></span></a> 
                      </div>
                  </div>
                  <div class="up">
                      <img src="images/howespercivallogo.webp" alt="Howes Percival" class="colour-logo mono-logo item">
                      <div class="triangle-space howes-triangle"><span class="triangle-up"></span></div>
                      <div class="box"> 
                          <h3>Howes Pervival</h3>
                     </div>
                  </div>
                  <div class="up">
                      <img src="images/girls_day_school_trust_logob.webp" alt="Girls Day School Trust" class="colour-logo mono-logo school-logo item">
                      <div class="triangle-space"><span class="triangle-up GD-triangle"></span></div>
                      <div class="box"> <h3>GDST</h3>
                          <p>The <a href="#">Girl's Day School Trust (GDST)</a>is the UK's leading family of 25 independent girls' schools. </p>
                          <a href="#" class="btn btn-green"> VIEW OUR CASE STUDY <span class="icon-arrow-right" ></span></a> 
                      </div>
                  </div>
                  <div class="up">
                      <img  src="images/ashcroftlogo_landscape_goldblack_DP60P-small.png" alt="Ashcroft" class="colour-logo mono-logo ash-logo item">
                      <div class="triangle-space"><span class="triangle-up ash-triangle"></span></div>
                      <div class="box"> <h3>Ashcroft Partnership LLP</h3>
                          <p> Originally founded in 2006 as Ashcroft Anthony, they became Ashcroft Partnership LLP in 2020 and are one of the top chartered accountancy firms in Cambridge, advising entrepreneurs and families.</p>
                          <a href="#" class="btn btn-purple"> VIEW OUR CASE STUDY <span class="icon-arrow-right" ></span></a> 
                      </div>
                  </div>
                  <div class="up">
                    <img  src="images/onetravellerlogo_white_figuire.png" alt="One Traveler" class="colour-logo mono-logo item">
                      <div class="triangle-space"><span class="triangle-up"></span></div>
                      <div class="box"> <h3>One Traveller</h3>
                       <p> <a href='#'>One Traveller</a>, founded in 2007, is a leading provider of solo holidays for over 50s.</p>
                       
                          <a href="#" class="btn btn-green"> VIEW OUR CASE STUDY <span class="icon-arrow-right" ></span></a> 
                      </div>
                  </div>  
                  <div class="up">
                      <img src="images/searles_logo.jpg" alt="Searles" class="colour-logo mono-logo item">
                      <div class="triangle-space"><span class="triangle-up"></span></div>
                  <div class="box">
                       <h3>Searles Leisure Resort</h3>
                      <p>Searles Leisure Resort, on the beautiful North Norfolk coast, is an award-winning UK holiday resort for families.</p>
                         <a href="#" class="btn btn-green"> VIEW OUR CASE STUDY <span class="icon-arrow-right" ></span></a> 
                     </div>
                  </div>
                  <div class="up">
                      <img src="images/busseys_logo.png" alt="Busseys" class="colour-logo mono-logo item">
                      <div class="triangle-space"><span class="triangle-up"></span></div>
                      <div class="box">
                           <h3>Busseys</h3>
                          <p>One of the UK's leading Ford dealerships.</p>                    
                      </div>
                  </div>
                  <div class="up">
                      <img src="images/crane_logo.png" alt="Crane" class="colour-logo mono-logo crane-logo item">
                      <div class="triangle-space"><span class="triangle-up crane-triangle"></span></div>
                      <div class="box">
                          <h3>Crane Garden Buildings</h3>
                         <p>Leading manufacturer and supplier of high-end garden rooms, summerhouses, workshops and sheds in the UK.
                      </p>                    
                     </div>
                  </div>
              </div>
            <!-- Email Newsletter Sign up area-->
            <div class="email-background">
                <div class="email-newsletter container">
                    <form class="email-news align-center"  id="newsletter-form">
                        <h2 id="newsletter">Email Newsletter Sign-Up</h2>
                        <div class="news-input">
                            <div class="name-input">
                                <label class="required">Your Name</label>
                                <br>
                                <input id="newsletter-name" type="text" name="name">
                            </div>
                            <div class="email-input">
                                <label class="required">Your Email</label>
                                <br>
                                <input id="newsletter-email" type="text" name="email">
                                <br>
                            </div>
                    </div>
                    <br>
                        <div class="privacy-policy">
                            <div class="checkbox-container"></div>
                                <input type="checkbox" id="check">
                                <label for="check" id="label-checkmark"><bold>Please tick this box if you wish to receive marketing information from us. Please see our <a href='#'>Privacy Policy</a> for more information on how we keep your data safe.</bold></label>
                
                
                      
                        </div>
                        <button  class="btn-subscribe" >SUBSCRIBE</button>
                    </form>
                </div>
        
            </div>
        <div class="footer-background">
            <footer class="about-footer container-footer container"> <!-- Footer block (Not COPYRIGHT section)-->
                <div class="align-center footer-container">
                    <div class="about about-netmatters">
                        <div class="footer-logo"><img src="images/nm-logo-white-med.webp" class="nm-logo-w" alt="Netmatters White">
                        </div>
                    <h4 class="footer-h4">FOLLOW US ON</h4>
                    <div class="footer-socials">
                        <a class="facebook btn" href="#" target="_blank">
                            <span class="icon-facebook"></span>
                          </a>
                          <a class="linkedin btn" href="#" target="_blank">
                            <span class="icon-linkedin"></span>
                          </a>
                          <a class="twitter btn" href="#" target="_blank">
                            <span class="icon-twitter"></span>
                          </a>
                          <a class="instagram btn" href="#" target="_blank">
                            <span class="icon-instagram"></span>
                          </a>
                    </div>
                    </div>
            
                    <div class="links">
                        <div class="about our-stuff footer-menu">
                        <ul class="footer-li" >
                            <h4 class="footer-h4">ABOUT NETMATTERS</h4>
                            <li>
                                <a href "#" class="ftr-li">News</a>
                            </li>
                            <li>
                                <a href "#" class="ftr-li">Our Careers</a>
                            </li>    
                                <a href "#" class="ftr-li">Our Team</a>
                            <li>
                                <a href "#" class="ftr-li">Contact us</a>
                            </li>    
                            <li>
                                <a href "#" class="ftr-li">Privacy Policy</a>
                            </li>
                            <li>
                                <a href "#" class="ftr-li">Cookie Policy</a>
                            <li>
                                <a href "#" class="ftr-li">Data Retention & Disposal Policy</a>
                            </li>
                            <li>
                                <a href "#" class="ftr-li">CCTV Policy</a>
                            </li>
                            <li>
                                <a href "#" class="ftr-li">Environmental Policy</a>
                            </li>
                            <li>
                                <a href "#" class="ftr-li">Terms & Conditions</a>
                            </li>
                        </ul>
                     </div>
                        <div class="about our-srvc footer-menu">
                            <h4 class="footer-h4"> OUR SERVICES </h4>
                            <ul class="footer-li">
                                <li>
                                    <a href "#" class="ftr-li">Bespoke Software</a>
                                </li>
                                <li>
                                    <a href "#" class="ftr-li">IT Support</a>
                                </li>
                                <li>
                                    <a href "#" class="ftr-li">Digital Marketing</a>
                                <li>
                                    <a href "#" class="ftr-li">Telecoms Services</a>
                                </li>
                                    <a href "#" class="ftr-li">Web Design</a>
                                <li>
                                    <a href "#" class="ftr-li">Cyber Security</a>
                                </li>
                                    <a href "#" class="ftr-li">Developer Training</a>
                            </ul>
                            </div>
                
                        <div class="about our-indr footer-menu">
                                <h4 class="footer-h4"> OUR INDUSTRIES </h4>
                                <ul class="footer-li" >
                                    <li>
                                        <a href "#" class="ftr-li">Financial Services</a>
                                    </li>
                                    <li>
                                        <a href "#" class="ftr-li">Construction</a>
                                    </li>
                                    <li>
                                        <a href "#" class="ftr-li">Retail & E-commerce</a>
                                    </li>
                                    <li>
                                        <a href "#" class="ftr-li">Non-Profits</a>
                                    </li>
                                    <li>
                                        <a href "#" class="ftr-li">SME's</a>
                                    </li>
                                    <li>
                                        <a href "#" class="ftr-li">Healthcare</a>
                                    </li>
                                    <li>
                                        <a href "#" class="ftr-li">Education & Training</a>
                                    </li>
                                        <a href "#" class="ftr-li">Healthcare</a>
                                    <li>
                                        <a href "#" class="ftr-li">Education & Training</a>
                                    </li>
                                </ul>
                                </div>
                        <div class="about locations">
                            <h4 class="footer-h4"> LOCATIONS </h4>
                            <ul class="footer-li">
                                <li>
                                    <a href "#" class="ftr-li">London Office</a>
                                </li>
                                <li>
                                    <a href "#" class="ftr-li">Cambridge Office</a>
                                </li>
                                <li>
                                    <a href "#" class="ftr-li">Wymondham Office</a>
                                </li>
                                <li>
                                    <a href "#" class="ftr-li">Great Yarmouth Office</a>
                                </li>
                
                        </div>
                    </div>
                        </ul>
                    </div>
                    </footer> 
        </div>
                <!-- copyright footer -->
                <div class="copyright-background">
                    <div class="container bottom-footer">
                        <div class="licence">
                            <p>&copy; Copyright Netmatters 2023. All rights reserved.    - <a> Sitemap</a><p>
                        </div>  
                </div>
                     

</div>
</div>
</div>
</body>
<script src="js/jquery-3.7.1.min.js"></script>
<script src="js/slick-1.8.1/slick/slick.min.js"></script>
<script src="js/cookies.js"></script>
<script src="js/sticky-header.js"></script>
<script src="js/sidebar.js"></script>
<script src="js/carousel.js"></script>
        </html>