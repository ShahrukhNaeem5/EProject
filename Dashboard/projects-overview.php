<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Project Overview | Vuesy - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    
    <body data-layout="horizontal" data-topbar="dark">

    <!-- <body data-layout="horizontal"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="assets/images/logo-sm.svg" alt="" height="26">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo-sm.svg" alt="" height="26"> <span class="logo-txt">Vuesy</span>
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="assets/images/logo-sm.svg" alt="" height="26">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo-sm.svg" alt="" height="26"> <span class="logo-txt">Vuesy</span>
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-16 d-lg-none header-item" data-bs-toggle="collapse" id="horimenu-btn" data-bs-target="#topnav-menu-content">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>

                        <div class="topnav">
                            <nav class="navbar navbar-light navbar-expand-lg topnav-menu">
        
                                <div class="collapse navbar-collapse" id="topnav-menu-content">
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a class="nav-link dropdown-toggle arrow-none" href="layout-vertical-dark.php" id="topnav-dashboard" role="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-home-circle icon"></i>
                                                <span data-key="t-dashboard">Dashboard</span>
                                            </a>
                                        </li>
         
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-uielement" role="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-tone icon"></i>
                                            <span data-key="t-elements">Elements</span> <div class="arrow-down"></div>
                                            </a>

                                            <div class="dropdown-menu mega-dropdown-menu px-2 dropdown-mega-menu-xl" aria-labelledby="topnav-uielement">
                                                <div class="ps-2 p-lg-0">
                                                    <div class="row">
                                                        <div class="col-lg-8">
                                                            <div>
                                                                <div class="menu-title">Components</div>
                                                                <div class="row g-0">
                                                                    <div class="col-lg-5">
                                                                        <div>
                                                                            <a href="ui-alerts.html" class="dropdown-item" data-key="t-alerts">Alerts</a>
                                                                            <a href="ui-buttons.html" class="dropdown-item" data-key="t-buttons">Buttons</a>
                                                                            <a href="ui-cards.html" class="dropdown-item" data-key="t-cards">Cards</a>
                                                                            <a href="ui-carousel.html" class="dropdown-item" data-key="t-carousel">Carousel</a>
                                                                            <a href="ui-dropdowns.html" class="dropdown-item" data-key="t-dropdowns">Dropdowns</a>
                                                                            <a href="ui-grid.html" class="dropdown-item" data-key="t-grid">Grid</a>
                                                                            <a href="ui-images.html" class="dropdown-item" data-key="t-images">Images</a>
                                                                            <a href="ui-modals.html" class="dropdown-item" data-key="t-modals">Modals</a>
                                                                            <a href="ui-offcanvas.html" class="dropdown-item" data-key="t-offcanvas">Offcanvas</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-5">
                                                                        <div>
                                                                            <a href="ui-placeholders.html" class="dropdown-item" data-key="t-placeholders">Placeholders</a>
                                                                            <a href="ui-progressbars.html" class="dropdown-item" data-key="t-progress-bars">Progress Bars</a>
                                                                            <a href="ui-tabs-accordions.html" class="dropdown-item" data-key="t-tabs-accordions">Tabs & Accordions</a>
                                                                            <a href="ui-typography.html" class="dropdown-item" data-key="t-typography">Typography</a>
                                                                            <a href="ui-video.html" class="dropdown-item" data-key="t-video">Video</a>
                                                                            <a href="ui-general.html" class="dropdown-item" data-key="t-general">General</a>
                                                                            <a href="ui-colors.html" class="dropdown-item" data-key="t-colors">Colors</a>
                                                                            <a href="ui-utilities.html" class="dropdown-item" data-key="t-utilities">Utilities</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                
                                                        <div class="col-lg-4">
                                                            <div>
                                                                <div class="menu-title">Extended</div>
                                                                <div>
                                                                    <a href="extended-lightbox.html" class="dropdown-item" data-key="t-lightbox">Lightbox</a>
                                                                    <a href="extended-rangeslider.html" class="dropdown-item" data-key="t-range-slider">Range Slider</a>
                                                                    <a href="extended-sweet-alert.html" class="dropdown-item" data-key="t-sweet-alert">SweetAlert 2</a>
                                                                    <a href="extended-rating.html" class="dropdown-item" data-key="t-rating">Rating</a>
                                                                    <a href="extended-notifications.html" class="dropdown-item" data-key="t-notifications">Notifications</a>
                                                                    <a href="extended-swiperslider.html" class="dropdown-item" data-key="t-swiperslider">Swiper Slider</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
        
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-pages" role="button">
                                                <i class="bx bx-customize icon"></i>
                                                <span data-key="t-apps">Apps</span> <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-pages">

                                                <a href="apps-calendar.html" class="dropdown-item" data-key="t-calendar">Calendar</a>
                                                <a href="apps-chat.html" class="dropdown-item" data-key="t-chat">Chat</a>
                                                <a href="apps-kanban-board.html" class="dropdown-item" data-key="t-kanban">Kanban Board</a>
                                                <a href="apps-file-manager.html" class="dropdown-item" data-key="t-filemanager">File Manager</a>

                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-ecommerce"
                                                        role="button">
                                                        <span data-key="t-ecommerce">Ecommerce</span> <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-ecommerce">
                                                        <a href="ecommerce-products.html" class="dropdown-item" data-key="t-products">Products</a>
                                                        <a href="ecommerce-product-detail.html" class="dropdown-item" data-key="t-product-detail">Product Detail</a>
                                                        <a href="ecommerce-orders.html" class="dropdown-item" data-key="t-orders">Orders</a>
                                                        <a href="ecommerce-customers.html" class="dropdown-item" data-key="t-customers">Customers</a>
                                                        <a href="ecommerce-cart.html" class="dropdown-item" data-key="t-cart">Cart</a>
                                                        <a href="ecommerce-checkout.html" class="dropdown-item" data-key="t-checkout">Checkout</a>
                                                        <a href="ecommerce-shops.html" class="dropdown-item" data-key="t-shops">Shops</a>
                                                        <a href="ecommerce-add-product.html" class="dropdown-item" data-key="t-add-product">Add Product</a>
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-email"
                                                        role="button">
                                                        <span data-key="t-email">Email</span> <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-email">
                                                        <a href="email-inbox.html" class="dropdown-item" data-key="t-inbox">Inbox</a>
                                                        <a href="email-read.html" class="dropdown-item" data-key="t-read-email">Read Email</a>
                                                    </div>
                                                </div>

                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-contact"
                                                        role="button">
                                                    <span data-key="t-contacts">Contacts</span> <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-contact">
                                                        <a href="contacts-grid.html" class="dropdown-item" data-key="t-user-grid">User Grid</a>
                                                        <a href="contacts-list.html" class="dropdown-item" data-key="t-user-list">User List</a>
                                                        <a href="contacts-settings.html" class="dropdown-item" data-key="t-user-settings">User Settings</a>
                                                    </div>
                                                </div>

                                                <a href="apps-gallery.html" class="dropdown-item" data-key="t-gallery">Gallery</a>

                                    
                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-projects"
                                                        role="button">
                                                    <span data-key="t-projects">Projects</span> <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-projects">
                                                        <a href="projects-grid.html" class="dropdown-item" data-key="t-p-grid">Projects Grid</a>
                                                        <a href="projects-list.html" class="dropdown-item" data-key="t-p-list">Projects List</a>
                                                        <a href="projects-overview.html" class="dropdown-item" data-key="t-p-overview">Project Overview</a>
                                                        <a href="projects-create.html" class="dropdown-item" data-key="t-create-new">Create New</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
        
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-components" role="button"
                                            >
                                                <i class="bx bx-layer icon"></i>
                                                <span data-key="t-components">Components</span> <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-components">
                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-form"
                                                        role="button">
                                                        <span data-key="t-forms">Forms</span> <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-form">
                                                        <a href="form-elements.html" class="dropdown-item" data-key="t-basic-elements">Basic Elements</a>
                                                        <a href="form-validation.html" class="dropdown-item" data-key="t-validation">Validation</a>
                                                        <a href="form-advanced.html" class="dropdown-item" data-key="t-advanced-plugins">Advanced Plugins</a>
                                                        <a href="form-editors.html" class="dropdown-item" data-key="t-editors">Editors</a>
                                                        <a href="form-uploads.html" class="dropdown-item" data-key="t-file-upload">File Upload</a>
                                                        <a href="form-wizard.html" class="dropdown-item" data-key="t-wizard">Wizard</a>
                                                        <a href="form-mask.html" class="dropdown-item" data-key="t-mask">Mask</a>
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-table"
                                                        role="button">
                                                        <span data-key="t-tables">Tables</span> <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-table">
                                                        <a href="tables-basic.html" class="dropdown-item" data-key="t-bootstrap-basic">Bootstrap Basic</a>
                                                        <a href="tables-advanced.html" class="dropdown-item" data-key="t-advanced-tables">Advance Tables</a>
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-charts"
                                                        role="button">
                                                        <span data-key="t-apex-charts">Apex Charts</span> <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-charts">
                                                        <a href="charts-line.html" class="dropdown-item" data-key="t-line">Line</a>
                                                        <a href="charts-area.html" class="dropdown-item" data-key="t-area">Area</a>
                                                        <a href="charts-column.html" class="dropdown-item" data-key="t-column">Column</a>
                                                        <a href="charts-bar.html" class="dropdown-item" data-key="t-bar">Bar</a>
                                                        <a href="charts-mixed.html" class="dropdown-item" data-key="t-mixed">Mixed</a>
                                                        <a href="charts-timeline.html" class="dropdown-item" data-key="t-timeline">Timeline</a>
                                                        <a href="charts-candlestick.html" class="dropdown-item" data-key="t-candlestick">Candlestick</a>
                                                        <a href="charts-boxplot.html" class="dropdown-item" data-key="t-boxplot">Boxplot</a>
                                                        <a href="charts-bubble.html" class="dropdown-item" data-key="t-bubble">Bubble</a>
                                                        <a href="charts-scatter.html" class="dropdown-item" data-key="t-scatter">Scatter</a>
                                                        <a href="charts-heatmap.html" class="dropdown-item" data-key="t-heatmap">Heatmap</a>
                                                        <a href="charts-treemap.html" class="dropdown-item" data-key="t-treemap">Treemap</a>
                                                        <a href="charts-pie.html" class="dropdown-item" data-key="t-pie">Pie</a>
                                                        <a href="charts-radialbar.html" class="dropdown-item" data-key="t-radialbar">Radialbar</a>
                                                        <a href="charts-radar.html" class="dropdown-item" data-key="t-radar">Radar</a>
                                                        <a href="charts-polararea.html" class="dropdown-item" data-key="t-polararea">Polararea</a>
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-icons"
                                                        role="button">
                                                        <span data-key="t-icons">Icons</span> <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-icons">
                                                        <a href="icons-unicons.html" class="dropdown-item" data-key="t-unicons">Unicons</a>
                                                        <a href="icons-feathericons.html" class="dropdown-item" data-key="t-feather-icons">Feather icons</a>
                                                        <a href="icons-boxicons.html" class="dropdown-item" data-key="t-boxicons">Boxicons</a>
                                                        <a href="icons-materialdesign.html" class="dropdown-item" data-key="t-material-design">Material Design</a>
                                                        <a href="icons-fontawesome.html" class="dropdown-item" data-key="t-font-awesome">Font Awesome 5</a>
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-map"
                                                        role="button">
                                                        <span data-key="t-maps">Maps</span> <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-map">
                                                        <a href="maps-google.html" class="dropdown-item" data-key="t-google">Google</a>
                                                        <a href="maps-vector.html" class="dropdown-item" data-key="t-vector">Vector</a>
                                                        <a href="maps-leaflet.html" class="dropdown-item" data-key="t-leaflet">Leaflet</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
        
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-more" role="button"
                                            >
                                                <i class="bx bx-file icon"></i>
                                                <span data-key="t-pages">Pages</span> <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-more">
                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-pricing"
                                                        role="button">
                                                        <span data-key="t-pricing">Pricing</span> <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-pricing">
                                                        <a href="pricing-basic.html" class="dropdown-item" data-key="t-basic">Basic</a>
                                                        <a href="pricing-table.html" class="dropdown-item" data-key="t-table">table</a>
                                                    </div>
                                                </div>

                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-invoices"
                                                        role="button">
                                                        <span data-key="t-invoices">Invoices</span> <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-invoices">
                                                        <a href="invoices-list.html" class="dropdown-item" data-key="t-invoice-list">Invoice List</a>
                                                        <a href="invoices-detail.html" class="dropdown-item" data-key="t-invoice-detail">Invoice Detail</a>
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-timeline"
                                                        role="button">
                                                        <span data-key="t-timeline">Timeline</span> <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-timeline">
                                                        <a href="timeline-center.html" class="dropdown-item" data-key="t-center-view">Center View</a>
                                                        <a href="timeline-left.html" class="dropdown-item" data-key="t-left-view">Left View</a>
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-auth"
                                                        role="button">
                                                        <span data-key="t-authentication">Authentication</span> <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-auth">
                                                        <div class="dropdown">
                                                            <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-auth-basic"
                                                                role="button">
                                                                <span data-key="t-basic">Basic</span> <div class="arrow-down"></div>
                                                            </a>
                                                            <div class="dropdown-menu" aria-labelledby="topnav-auth-basic">
                                                                <a href="auth-signin-basic.html" class="dropdown-item" data-key="t-signin">Sign In</a>
                                                                <a href="auth-signup-basic.html" class="dropdown-item" data-key="t-signup">Sign Up</a>
                                                                <a href="auth-signout-basic.html" class="dropdown-item" data-key="t-signout">Sign Out</a>
                                                                <a href="auth-lockscreen-basic.html" class="dropdown-item" data-key="t-lock-screen">Lock Screen</a>
                                                                <a href="auth-forgotpassword-basic.html" class="dropdown-item" data-key="t-forgot-password">Forgot Password</a>
                                                                <a href="auth-resetpassword-basic.html" class="dropdown-item" data-key="t-reset-password">Reset Password</a>
                                                                <a href="auth-emailverification-basic.html" class="dropdown-item" data-key="t-email-verification">Email Verification</a>
                                                                <a href="auth-2step-basic.html" class="dropdown-item" data-key="t-2step-verification">2-step Verification</a>
                                                                <a href="auth-thankyou-basic.html" class="dropdown-item" data-key="t-thankyou">Thank you</a>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown">
                                                            <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-auth-cover"
                                                                role="button">
                                                                <span data-key="t-cover">Cover</span> <div class="arrow-down"></div>
                                                            </a>
                                                            <div class="dropdown-menu" aria-labelledby="topnav-auth-cover">
                                                                <a href="auth-signin-cover.html" class="dropdown-item" data-key="t-signin">Sign In</a>
                                                                <a href="auth-signup-cover.html" class="dropdown-item" data-key="t-signup">Sign Up</a>
                                                                <a href="auth-signout-cover.html" class="dropdown-item" data-key="t-signout">Sign Out</a>
                                                                <a href="auth-lockscreen-cover.html" class="dropdown-item" data-key="t-lock-screen">Lock Screen</a>
                                                                <a href="auth-forgotpassword-cover.html" class="dropdown-item" data-key="t-forgot-password">Forgot Password</a>
                                                                <a href="auth-resetpassword-cover.html" class="dropdown-item" data-key="t-reset-password">Reset Password</a>
                                                                <a href="auth-emailverification-cover.html" class="dropdown-item" data-key="t-email-verification">Email Verification</a>
                                                                <a href="auth-2step-cover.html" class="dropdown-item" data-key="t-2step-verification">2-step Verification</a>
                                                                <a href="auth-thankyou-cover.html" class="dropdown-item" data-key="t-thankyou">Thank you</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-error"
                                                        role="button">
                                                        <span data-key="t-error-pages">Error Pages</span> <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-error">
                                                        <div class="dropdown">
                                                            <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-404"
                                                                role="button">
                                                                <span>404</span> <div class="arrow-down"></div>
                                                            </a>
                                                            <div class="dropdown-menu" aria-labelledby="topnav-404">
                                                                <a href="error-404-basic.html" class="dropdown-item" data-key="t-basic">Basic</a>
                                                                <a href="error-404-cover.html" class="dropdown-item" data-key="t-cover">Cover</a>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown">
                                                            <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-500"
                                                                role="button">
                                                                <span>500</span> <div class="arrow-down"></div>
                                                            </a>
                                                            <div class="dropdown-menu" aria-labelledby="topnav-500">
                                                                <a href="error-500-basic.html" class="dropdown-item" data-key="t-basic">Basic</a>
                                                                <a href="error-500-cover.html" class="dropdown-item" data-key="t-cover">Cover</a>
                                                            </div>
                                                        </div>
                                            
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-utility"
                                                        role="button">
                                                        <span data-key="t-utility">Utility</span> <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-utility">
                                                        <a href="pages-starter.html" class="dropdown-item" data-key="t-starter-page">Starter Page</a>
                                                        <a href="pages-profile.html" class="dropdown-item" data-key="t-profile">Profile</a>
                                                        <a href="pages-maintenance.html" class="dropdown-item" data-key="t-maintenance">Maintenance</a>
                                                        <a href="pages-comingsoon.html" class="dropdown-item" data-key="t-coming-soon">Coming Soon</a>
                                                        <a href="pages-faqs.html" class="dropdown-item" data-key="t-faqs">FAQs</a>
                                                    </div>
                                                </div>

                                                <a href="layout-vertical.html" class="dropdown-item" data-key="t-vertical">Vertical</a>
                                            </div>
                                        </li>
        
                                    </ul>
                                </div>
                            </nav>
                        </div>

                    </div>

                    <div class="d-flex">
                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-search icon-sm"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0">
                                <form class="p-2">
                                    <div class="search-box">
                                        <div class="position-relative">
                                            <input type="text" class="form-control rounded bg-light border-0" placeholder="Search...">
                                            <i class="bx bx-search search-icon"></i>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
            
                        <div class="dropdown d-inline-block language-switch">
                            <button type="button" class="btn header-item noti-icon"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img id="header-lang-img" src="assets/images/flags/us.jpg" alt="Header Language" height="16">
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                    
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="eng">
                                    <img src="assets/images/flags/us.jpg" alt="user-image" class="me-2" height="12"> <span class="align-middle">English</span>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="sp">
                                    <img src="assets/images/flags/spain.jpg" alt="user-image" class="me-2" height="12"> <span class="align-middle">Spanish</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="gr">
                                    <img src="assets/images/flags/germany.jpg" alt="user-image" class="me-2" height="12"> <span class="align-middle">German</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="it">
                                    <img src="assets/images/flags/italy.jpg" alt="user-image" class="me-2" height="12"> <span class="align-middle">Italian</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ru">
                                    <img src="assets/images/flags/russia.jpg" alt="user-image" class="me-2" height="12"> <span class="align-middle">Russian</span>
                                </a>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon" id="page-header-notifications-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-bell icon-sm"></i>
                                <span class="noti-dot bg-danger rounded-pill">3</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-notifications-dropdown">
                                <div class="p-3">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h5 class="m-0 font-size-15"> Notifications </h5>
                                        </div>
                                        <div class="col-auto">
                                            <a href="javascript:void(0);" class="small"> Mark all as read</a>
                                        </div>
                                    </div>
                                </div>
                                <div data-simplebar style="max-height: 250px;">
                                    <h6 class="dropdown-header bg-light">New</h6>
                                    <a href="" class="text-reset notification-item">
                                        <div class="d-flex border-bottom align-items-start">
                                            <div class="flex-shrink-0">
                                                <img src="assets/images/users/avatar-3.jpg"
                                                class="me-3 rounded-circle avatar-sm" alt="user-pic">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Justin Verduzco</h6>
                                                <div class="text-muted">
                                                    <p class="mb-1 font-size-13">Your task changed an issue from "In Progress" to <span class="badge badge-soft-success">Review</span></p>
                                                    <p class="mb-0 font-size-10 text-uppercase fw-bold"><i class="mdi mdi-clock-outline"></i> 1 hours ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="" class="text-reset notification-item">
                                        <div class="d-flex border-bottom align-items-start">
                                            <div class="flex-shrink-0">
                                                <div class="avatar-sm me-3">
                                                    <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                        <i class="uil-shopping-basket"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">New order has been placed</h6>
                                                <div class="text-muted">
                                                    <p class="mb-1 font-size-13">Open the order confirmation or shipment confirmation.</p>
                                                    <p class="mb-0 font-size-10 text-uppercase fw-bold"><i class="mdi mdi-clock-outline"></i> 5 hours ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <h6 class="dropdown-header bg-light">Earlier</h6>
                                    <a href="" class="text-reset notification-item">
                                        <div class="d-flex border-bottom align-items-start">
                                            <div class="flex-shrink-0">
                                                <div class="avatar-sm me-3">
                                                    <span class="avatar-title bg-soft-success text-success rounded-circle font-size-16">
                                                        <i class="uil-truck"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Your item is shipped</h6>
                                                <div class="text-muted">
                                                    <p class="mb-1 font-size-13">Here is somthing that you might light like to know.</p>
                                                    <p class="mb-0 font-size-10 text-uppercase fw-bold"><i class="mdi mdi-clock-outline"></i> 1 day ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="" class="text-reset notification-item">
                                        <div class="d-flex border-bottom align-items-start">
                                            <div class="flex-shrink-0">
                                                <img src="assets/images/users/avatar-4.jpg"
                                                    class="me-3 rounded-circle avatar-sm" alt="user-pic">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Salena Layfield</h6>
                                                <div class="text-muted">
                                                    <p class="mb-1 font-size-13">Yay ! Everything worked!</p>
                                                    <p class="mb-0 font-size-10 text-uppercase fw-bold"><i class="mdi mdi-clock-outline"></i> 3 days ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2 border-top d-grid">
                                    <a class="btn btn-sm btn-link font-size-14 btn-block text-center" href="javascript:void(0)">
                                        <i class="uil-arrow-circle-right me-1"></i> <span>View More..</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon right-bar-toggle" id="right-bar-toggle">
                                <i class="bx bx-cog icon-sm"></i>
                            </button>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item user text-start d-flex align-items-center" id="page-header-user-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-3.jpg"
                                alt="Header Avatar">
                                <span class="ms-2 d-none d-xl-inline-block user-item-desc">
                                    <span class="user-name">Marie N. <i class="mdi mdi-chevron-down"></i></span>
                                </span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end pt-0">
                                <h6 class="dropdown-header">Welcome Marie N!</h6>
                                <a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-account-circle text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Profile</span></a>
                                <a class="dropdown-item" href="apps-chat.html"><i class="mdi mdi-message-text-outline text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Messages</span></a>
                                <a class="dropdown-item" href="apps-kanban-board.html"><i class="mdi mdi-calendar-check-outline text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Taskboard</span></a>
                                <a class="dropdown-item" href="pages-faqs.html"><i class="mdi mdi-lifebuoy text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Help</span></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-wallet text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Balance : <b>$6951.02</b></span></a>
                                <a class="dropdown-item d-flex align-items-center" href="contacts-settings.html"><i class="mdi mdi-cog-outline text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Settings</span><span class="badge badge-soft-success ms-auto">New</span></a>
                                <a class="dropdown-item" href="auth-lockscreen-cover.html"><i class="mdi mdi-lock text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Lock screen</span></a>
                                <a class="dropdown-item" href="auth-signout-cover.html"><i class="mdi mdi-logout text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Logout</span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="collapse show dash-content" id="dashtoggle">
                    <div class="container-fluid">
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0">Project Overview</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Projects</a></li>
                                            <li class="breadcrumb-item active">Project Overview</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <!-- start dash info -->
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card dash-header-box shadow-none border-0">
                                    <div class="card-body p-0">
                                        <div class="row row-cols-xxl-6 row-cols-md-3 row-cols-1 g-0">
                                            <div class="col">
                                                <div class="mt-md-0 py-3 px-4 mx-2">
                                                    <p class="text-white-50 mb-2 text-truncate">Campaign Sent </p>
                                                    <h3 class="text-white mb-0">197</h3>
                                                </div>
                                            </div><!-- end col -->

                                            <div class="col">
                                                <div class="mt-3 mt-md-0 py-3 px-4 mx-2">
                                                    <p class="text-white-50 mb-2 text-truncate">Annual Profit</p>
                                                    <h3 class="text-white mb-0">$489.4k</h3>
                                                </div>
                                            </div><!-- end col -->

                                            <div class="col">
                                                <div class="mt-3 mt-md-0 py-3 px-4 mx-2">
                                                    <p class="text-white-50 mb-2 text-truncate">Lead Coversation</p>
                                                    <h3 class="text-white mb-0">32.89%</h3>
                                                </div>
                                            </div><!-- end col -->

                                            <div class="col">
                                                <div class="mt-3 mt-md-0 py-3 px-4 mx-2">
                                                    <p class="text-white-50 mb-2 text-truncate">Sales Forecast</p>
                                                    <h3 class="text-white mb-0">75.35%</h3>
                                                </div>
                                            </div><!-- end col -->

                                            <div class="col">
                                                <div class="mt-3 mt-lg-0 py-3 px-4 mx-2">
                                                    <p class="text-white-50 mb-2 text-truncate">Daily Average Income</p>
                                                    <h3 class="text-white mb-0">$1,596.5</h3>
                                                </div>
                                            </div><!-- end col -->

                                            <div class="col">
                                                <div class="mt-3 mt-lg-0 py-3 px-4 mx-2">
                                                    <p class="text-white-50 mb-2 text-truncate">Annual Deals</p>
                                                    <h3 class="text-white mb-0">2,659</h3>
                                                </div>
                                            </div><!-- end col -->

                                        </div><!-- end row -->
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                        </div>
                        <!-- end dash info -->
                    </div>
                </div>

                  <!-- start dash troggle-icon -->
                  <div>
                    <a class="dash-troggle-icon" id="dash-troggle-icon" data-bs-toggle="collapse" href="#dashtoggle" aria-expanded="true" aria-controls="dashtoggle">
                        <i class="bx bx-up-arrow-alt"></i>
                    </a>
                </div>
              <!-- end dash troggle-icon -->

            </header>

            <div class="hori-overlay"></div>
    


            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card pb-0">
                                        <ul class="nav nav-tabs nav-tabs-custom nav-justified project-tab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-bs-toggle="tab" href="#overview" role="tab">
                                                    <i class="mdi mdi-atom font-size-20"></i>
                                                  <span class="d-none d-sm-block">Overview</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#tasks" role="tab">
                                                    <i class="mdi mdi-clipboard-edit-outline font-size-20"></i>
                                                    <span class="d-none d-sm-block">Tasks</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#team" role="tab">
                                                    <i class="mdi mdi-account-multiple-outline font-size-20"></i>
                                                    <span class="d-none d-sm-block">Team</span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#activities" role="tab">
                                                    <i class="mdi mdi-chart-box-plus-outline font-size-20"></i>
                                                    <span class="d-none d-sm-block"></span>Activities</a>
                                            </li>
                                        </ul>
    
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="overview" role="tabpanel">
                                                <div class="card mb-0 border-0">
                                                    <div class="card-body">
                                                        <div class="row">
                                                           <!-- end col -->
                                                           <!-- end col -->
                                                            <!-- end col -->
                                                        </div>
                                                        <?php
                                                        include_once 'connect.php';
                                                        
                                                        if(isset($_POST["submit"])){
                                                            $check = getimagesize($_FILES["image"]["tmp_name"]);
                                                            if($check !== false){
                                                                $image = $_FILES['image']['tmp_name'];
                                                                $imgContent = addslashes(file_get_contents($image));
                                                            
                                                                /*
                                                                 * Insert image data into database
                                                                 */
                                                                
                                                                 //Create connection and select DB
                                                                $db = new mysqli($servername, $username, $password, $dbname);
                                                                
                                                                // Check connection
                                                                if($db->connect_error){
                                                                    die("Connection failed: " . $db->connect_error);
                                                                }
                                                                
                                                                $dataTime = date("Y-m-d H:i:s");
                                                                
                                                                //Insert image content into database
                                                                $insert = $db->query("INSERT into images (image, created) VALUES ('$imgContent', '$dataTime')");
                                                                if($insert){
                                                                    echo "File uploaded successfully. <a href='upload.html'>Upload More</a>";
                                                                }else{
                                                                    echo "File upload failed, <a href='upload.html'>please try again</a>.";
                                                                } 
                                                            }else{
                                                                echo "You have not selected any image. <a href='upload.html'>please try again</a>.";
                                                            }
                                                        }
                                                        ?>
                                                        <div class="row">
                                                            <div class="col-lg-8">
                                                                <div class="card h-100 mb-lg-0">
                                                                    <div class="card-body">
                                                                        <h1>Change Your Slider Images here..</h1>
<br>
                                                                        <form action="store.php" method="post" enctype="multipart/form-data">
                                                                            Select image to upload:<br><br>
                                                                            <input type="file" name="image"/><br><br>
                                                                            <input type="submit" name="submit" value="UPLOAD"/>
<br><br>
                                                                           <a href="SlideView.php"> <input type="button"  value="SLIDE VIEW"></a>
                                                                        </form>

                                                                        <!-- view Data -->

                                                                  
                                                                    </div><!-- end card body -->
                                                                </div><!-- end card -->
                                                            </div><!-- end col -->
                                                            <div class="col-lg-4">
                                                                <div class="card h-100 mb-lg-0">
                                                                    <div class="card-body">
                                                                        <h5 class="card-title mb-3">Task Status</h5>
        
                                                                        <div>
                                                                            <div class="py-3">
                                                                                <div class="d-flex">
                                                                                    <div class="flex-grow-1">
                                                                                        <h5 class="font-size-14">Design</h5>
                                                                                    </div>
                                                                                    <div class="flex-shrink-0">
                                                                                        <p class="text-muted mb-0">07/12</p>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="progress animated-progess custom-progress mt-2">
                                                                                    <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                                                </div>
                                                                            </div>
        
                                                                            <div class="py-3">
                                                                                <div class="d-flex">
                                                                                    <div class="flex-grow-1">
                                                                                        <h5 class="font-size-14">Development</h5>
                                                                                    </div>
                                                                                    <div class="flex-shrink-0">
                                                                                        <p class="text-muted mb-0">02/07</p>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="progress animated-progess custom-progress mt-2">
                                                                                    <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                                                </div>
                                                                            </div>
        
                                                                            <div class="py-3">
                                                                                <div class="d-flex">
                                                                                    <div class="flex-grow-1">
                                                                                        <h5 class="font-size-14">Other Tasks</h5>
                                                                                    </div>
                                                                                    <div class="flex-shrink-0">
                                                                                        <p class="text-muted mb-0">02/05</p>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="progress animated-progess custom-progress mt-2">
                                                                                    <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div><!-- end card -->
                                                                </div><!-- end card -->
                                                            </div><!-- end col -->
                                                        </div><!-- end row -->
                                                    </div><!-- end card body -->
                                                </div><!-- end card -->
                                            </div><!-- end tab pane -->
        
                                            <div class="tab-pane" id="tasks" role="tabpanel">
                                                <div class="card mb-0 border-0">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-start">
                                                            <div class="flex-grow-1">
                                                                <h5 class="card-title">Tasks</h5>
                                                            </div>
                                                            <div class="flex-shrink-0">
                                                                <div class="dropdown">
                                                                    <a class="btn btn-link text-dark dropdown-toggle shadow-none" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                        <i class="uil uil-ellipsis-h"></i>
                                                                    </a>
                                                                    
                                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                            <div class="table-responsive">
                                                                <table class="table align-middle table-nowrap mb-0">
                                                                    <thead>
                                                                        <tr>
                                                                            <th scope="col" style="width: 40px;"></th>
                                                                            <th scope="col" style="width: 140px;">Task ID</th>
                                                                            <th scope="col">Task</th>
                                                                            <th scope="col">Assignee</th>
                                                                            <th scope="col">Status</th>
                                                                            <th scope="col" style="width: 140px;">Action</th>
                                                                        </tr><!-- end tr -->
                                                                        </thead><!-- end thead -->
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="form-check font-size-16">
                                                                                    <input class="form-check-input" type="checkbox" value="" id="taskcheck01">
                                                                                    <label class="form-check-label" for="taskcheck01"></label>
                                                                                </div>
                                                                            </td>
                                                                            <td><a href="#">DS-045</a></td>
                                                                            <td>
                                                                                <h5 class="font-size-14"><a href="#" class="text-dark">Dashboard UI</a></h5>
                                                                                <p class="text-muted mb-0">09 Mar, 2020</p>
                                                                            </td>
        
                                                                            <td>
                                                                                <div class="avatar-group">
                                                                                    <div class="avatar-group-item">
                                                                                        <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Emily Surface">
                                                                                            <div class="avatar-sm">
                                                                                                <div class="avatar-title rounded-circle bg-primary">
                                                                                                    E
                                                                                                </div>
                                                                                            </div>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <span class="badge badge-soft-primary font-size-12">Open</span>
                                                                            </td>
                                                                            <td>
                                                                                <div class="dropdown">
                                                                                    <a class="font-size-16 px-2 text-muted dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                        <i class="uil uil-ellipsis-h"></i>
                                                                                    </a>
                                                                                
                                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                                        <a class="dropdown-item" href="#">Action</a>
                                                                                        <a class="dropdown-item" href="#">Another action</a>
                                                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr><!-- end tr -->
                                                                        <tr>
                                                                            <td>
                                                                                <div class="form-check font-size-16">
                                                                                    <input class="form-check-input" type="checkbox" value="" id="taskcheck02">
                                                                                    <label class="form-check-label" for="taskcheck02"></label>
                                                                                </div>
                                                                            </td>
                                                                            <td><a href="#">DS-044</a></td>
                                                                            <td>
                                                                                <h5 class="font-size-14"><a href="#" class="text-dark">Calendar App Page</a></h5>
                                                                                <p class="text-muted mb-0">08 Mar, 2020</p>
                                                                            </td>
        
                                                                            <td>
                                                                                <div class="avatar-group">
                                                                                    <div class="avatar-group-item">
                                                                                        <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="James Scott">
                                                                                            <div class="avatar-sm">
                                                                                                <img src="assets/images/users/avatar-2.jpg" alt="" class="img-fluid rounded-circle">
                                                                                            </div>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="avatar-group-item">
                                                                                        <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Lynn Hackett">
                                                                                            <div class="avatar-sm">
                                                                                                <div class="avatar-title rounded-circle bg-info">
                                                                                                    E
                                                                                                </div>
                                                                                            </div>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <span class="badge badge-soft-primary font-size-12">Open</span>
                                                                            </td>
                                                                            <td>
                                                                                <div class="dropdown">
                                                                                    <a class="font-size-16 px-2 text-muted dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                        <i class="uil uil-ellipsis-h"></i>
                                                                                    </a>
                                                                                
                                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                                        <a class="dropdown-item" href="#">Action</a>
                                                                                        <a class="dropdown-item" href="#">Another action</a>
                                                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr><!-- end tr -->
                                                                        <tr>
                                                                            <td>
                                                                                <div class="form-check font-size-16">
                                                                                    <input class="form-check-input" type="checkbox" value="" id="taskcheck03">
                                                                                    <label class="form-check-label" for="taskcheck03"></label>
                                                                                </div>
                                                                            </td>
                                                                            <td><a href="#">DS-043</a></td>
                                                                            <td>
                                                                                <h5 class="font-size-14"><a href="#" class="text-dark">Authentication Page Design</a></h5>
                                                                                <p class="text-muted mb-0">07 Mar, 2020</p>
                                                                            </td>
                                                                            <td>
                                                                                <div class="avatar-group">
                                                                                    <div class="avatar-group-item">
                                                                                        <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Emily Surface">
                                                                                            <div class="avatar-sm">
                                                                                                <div class="avatar-title rounded-circle bg-danger">
                                                                                                    E
                                                                                                </div>
                                                                                            </div>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <span class="badge badge-soft-warning font-size-12">Inprogress</span>
                                                                            </td>
                                                                            <td>
                                                                                <div class="dropdown">
                                                                                    <a class="font-size-16 px-2 text-muted dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                        <i class="uil uil-ellipsis-h"></i>
                                                                                    </a>
                                                                                
                                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                                        <a class="dropdown-item" href="#">Action</a>
                                                                                        <a class="dropdown-item" href="#">Another action</a>
                                                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr><!-- end tr -->
                                                                        <tr>
                                                                            <td>
                                                                                <div class="form-check font-size-16">
                                                                                    <input class="form-check-input" type="checkbox" value="" id="taskcheck04">
                                                                                    <label class="form-check-label" for="taskcheck04"></label>
                                                                                </div>
                                                                            </td>
                                                                            <td><a href="#">DS-042</a></td>
                                                                            <td>
                                                                                <h5 class="font-size-14"><a href="#" class="text-dark">Component Pages</a></h5>
                                                                                <p class="text-muted mb-0">06 Mar, 2020</p>
                                                                            </td>
        
                                                                            <td>
                                                                                <div class="avatar-group">
                                                                                    <div class="avatar-group-item">
                                                                                        <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="James Scott">
                                                                                            <div class="avatar-sm">
                                                                                                <img src="assets/images/users/avatar-2.jpg" alt="" class="img-fluid rounded-circle">
                                                                                            </div>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <span class="badge badge-soft-warning font-size-12">Inprogress</span>
                                                                            </td>
                                                                            <td>
                                                                                <div class="dropdown">
                                                                                    <a class="font-size-16 px-2 text-muted dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                        <i class="uil uil-ellipsis-h"></i>
                                                                                    </a>
                                                                                
                                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                                        <a class="dropdown-item" href="#">Action</a>
                                                                                        <a class="dropdown-item" href="#">Another action</a>
                                                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr><!-- end tr -->
                                                                        <tr>
                                                                            <td>
                                                                                <div class="form-check font-size-16">
                                                                                    <input class="form-check-input" type="checkbox" value="" id="taskcheck05">
                                                                                    <label class="form-check-label" for="taskcheck05"></label>
                                                                                </div>
                                                                            </td>
                                                                            <td><a href="#">DS-041</a></td>
                                                                            <td>
                                                                                <h5 class="font-size-14"><a href="#" class="text-dark">Admin layout design</a></h5>
                                                                                <p class="text-muted mb-0">05 Mar, 2020</p>
                                                                            </td>
        
                                                                            <td>
                                                                                <div class="avatar-group">
                                                                                    <div class="avatar-group-item">
                                                                                        <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="James Scott">
                                                                                            <div class="avatar-sm">
                                                                                                <img src="assets/images/users/avatar-2.jpg" alt="" class="img-fluid rounded-circle">
                                                                                            </div>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="avatar-group-item">
                                                                                        <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Lynn Hackett">
                                                                                            <div class="avatar-sm">
                                                                                                <div class="avatar-title rounded-circle bg-info">
                                                                                                    L
                                                                                                </div>
                                                                                            </div>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <span class="badge badge-soft-success font-size-12">Completed</span>
                                                                            </td>
                                                                            <td>
                                                                                <div class="dropdown">
                                                                                    <a class="font-size-16 px-2 text-muted dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                        <i class="uil uil-ellipsis-h"></i>
                                                                                    </a>
                                                                                
                                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                                        <a class="dropdown-item" href="#">Action</a>
                                                                                        <a class="dropdown-item" href="#">Another action</a>
                                                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr><!-- end tr -->
                                                                    </tbody><!-- end tbody -->
                                                                </table><!-- end table -->
                                                            </div>
                                                        
                                                    </div><!-- end card body -->
                                                </div><!-- end card -->
                                            </div><!-- end tab pane -->
        
                                            <div class="tab-pane" id="team" role="tabpanel">
                                                <div>
                                                    <div class="card mb-0 border-0">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-xl-4 col-sm-6">
                                                                    <div class="card">
                                                                        <div class="card-body p-4">
                                                                            <div class="d-flex align-items-start">
                                                                                <div class="flex-shrink-0 avatar rounded-circle me-3">
                                                                                    <img src="assets/images/users/avatar-1.jpg" alt="" class="img-fluid rounded-circle">
                                                                                </div>
                                                                                <div class="flex-grow-1 overflow-hidden">
                                                                                    <h5 class="font-size-15 mb-1 text-truncate"><a href="pages-profile.html" class="text-dark">Donald
                                                                                            Risher</a></h5>
                                                                                        <span class="badge badge-soft-success mb-0">Full Stack Developer</span>
                                                                                   
                                                                                </div>
                        
                                                                                
                                                                                <div class="flex-shrink-0 dropdown">
                                                                                    <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal icon-xs"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                                                                    </a>
                                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                                        <a class="dropdown-item" href="#">Edit</a>
                                                                                        <a class="dropdown-item" href="#">Action</a>
                                                                                        <a class="dropdown-item" href="#">Remove</a>
                                                                                    </div>
                                                                                </div><!-- end dropdown -->
                                                                            </div>
                                                                            <p class="mt-4 text-muted">Curabitur non magna lobortis est tempus gravida
                                                                                 ornare libero sed diam sed fringilla est.</p>
                                                                            <div class="pt-2">
                                                                                <button type="button" class="btn btn-soft-primary btn-sm w-md text-truncate"><i class="bx bx-user me-1 align-middle"></i> Contact</button>
                                                                                <button type="button" class="btn btn-primary btn-sm w-md text-truncate ms-2"><i class="bx bx-message-square-dots me-1 align-middle"></i> Profile</button>
                                                                            </div>
                                                                        </div>
                                                                        <!-- end card body -->
                                                                    </div><!-- end card -->
                                                                </div><!-- end col -->
                                                                <div class="col-xl-4 col-sm-6">
                                                                    <div class="card">
                                                                        <div class="card-body p-4">
                                                                            <div class="d-flex align-items-start">
                                                                                <div class="flex-shrink-0 avatar rounded-circle me-3">
                                                                                    <img src="assets/images/users/avatar-2.jpg" alt="" class="img-fluid rounded-circle">
                                                                                </div>
                                                                                <div class="flex-grow-1 overflow-hidden">
                                                                                    <h5 class="font-size-15 mb-1 text-truncate"><a href="pages-profile.html" class="text-dark">Helen
                                                                                            Barron</a></h5>
                                                                                    <span class="badge badge-soft-danger mb-0">Web Designer</span>
                                                                                </div>
                                                                                <div class="flex-shrink-0 dropdown">
                                                                                    <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal icon-xs"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                                                                    </a>
                                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                                        <a class="dropdown-item" href="#">Edit</a>
                                                                                        <a class="dropdown-item" href="#">Action</a>
                                                                                        <a class="dropdown-item" href="#">Remove</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <p class="mt-4 text-muted">Curabitur non magna lobortis est tempus gravida
                                                                                ornare libero sed diam sed fringilla est.</p>
                                                                           <div class="pt-2">
                                                                               <button type="button" class="btn btn-soft-primary btn-sm w-md text-truncate"><i class="bx bx-user me-1 align-middle"></i> Contact</button>
                                                                               <button type="button" class="btn btn-primary btn-sm w-md text-truncate ms-2"><i class="bx bx-message-square-dots me-1 align-middle"></i> Profile</button>
                                                                           </div>
                                                                        </div><!-- end cardbody -->
                                                                    </div><!-- end card -->
                                                                </div><!-- end col -->
                                                                <div class="col-xl-4 col-sm-6">
                                                                    <div class="card">
                                                                        <div class="card-body p-4">
                                                                            <div class="d-flex align-items-start">
                                                                                <div class="flex-shrink-0 avatar rounded-circle me-3">
                                                                                    <img src="assets/images/users/avatar-3.jpg" alt="" class="img-fluid rounded-circle">
                                                                                </div>
                                                                                <div class="flex-grow-1 overflow-hidden">
                                                                                    <h5 class="font-size-15 mb-1 text-truncate"><a href="pages-profile.html" class="text-dark">Philip
                                                                                            Theroux</a></h5>
                                                                                    <span class="badge badge-soft-warning mb-0">UI/UX Designer</span>
                                                                                </div>
                                                                                <div class="flex-shrink-0 dropdown">
                                                                                    <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal icon-xs"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                                                                    </a>
                                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                                        <a class="dropdown-item" href="#">Edit</a>
                                                                                        <a class="dropdown-item" href="#">Action</a>
                                                                                        <a class="dropdown-item" href="#">Remove</a>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- end dropdown -->
                                                                            </div>
                                                                            <p class="mt-4 text-muted">Curabitur non magna lobortis est tempus gravida
                                                                                ornare libero sed diam sed fringilla est.</p>
                                                                           <div class="pt-2">
                                                                               <button type="button" class="btn btn-soft-primary btn-sm w-md text-truncate"><i class="bx bx-user me-1 align-middle"></i> Contact</button>
                                                                               <button type="button" class="btn btn-primary btn-sm w-md text-truncate ms-2"><i class="bx bx-message-square-dots me-1 align-middle"></i> Profile</button>
                                                                           </div>
                                                                        </div><!-- end card -->
                                                                    </div><!-- end card -->
                                                                </div><!-- end col -->
                                                                <div class="col-xl-4 col-sm-6">
                                                                    <div class="card">
                                                                        <div class="card-body p-4">
                                                                            <div class="d-flex align-items-start">
                                                                                <div class="flex-shrink-0 avatar rounded-circle me-3">
                                                                                    <img src="assets/images/users/avatar-4.jpg" alt="" class="img-fluid rounded-circle">
                                                                                </div>
                                                                                <div class="flex-grow-1 overflow-hidden">
                                                                                    <h5 class="font-size-15 mb-1 text-truncate"><a href="pages-profile.html" class="text-dark">Donald
                                                                                            Risher</a></h5>
                                                                                    <span class="badge badge-soft-primary mb-0">Backend Developer</span>
                                                                                </div>
                                                                                <div class="flex-shrink-0 dropdown">
                                                                                    <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal icon-xs"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                                                                    </a>
                                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                                        <a class="dropdown-item" href="#">Edit</a>
                                                                                        <a class="dropdown-item" href="#">Action</a>
                                                                                        <a class="dropdown-item" href="#">Remove</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <p class="mt-4 text-muted">Curabitur non magna lobortis est tempus gravida
                                                                                ornare libero sed diam sed fringilla est.</p>
                                                                           <div class="pt-2">
                                                                               <button type="button" class="btn btn-soft-primary btn-sm w-md text-truncate"><i class="bx bx-user me-1 align-middle"></i> Contact</button>
                                                                               <button type="button" class="btn btn-primary btn-sm w-md text-truncate ms-2"><i class="bx bx-message-square-dots me-1 align-middle"></i> Profile</button>
                                                                           </div>
                                                                        </div>
                                                                        <!-- end card body -->
                                                                    </div><!-- end card -->
                                                                </div><!-- end col -->
                                                                <div class="col-xl-4 col-sm-6">
                                                                    <div class="card">
                                                                        <div class="card-body p-4">
                                                                            <div class="d-flex align-items-start">
                                                                                <div class="flex-shrink-0 avatar rounded-circle me-3">
                                                                                    <img src="assets/images/users/avatar-5.jpg" alt="" class="img-fluid rounded-circle">
                                                                                </div>
                                                                                <div class="flex-grow-1 overflow-hidden">
                                                                                    <h5 class="font-size-15 mb-1 text-truncate"><a href="pages-profile.html" class="text-dark">Gerald
                                                                                            Moyer</a></h5>
                                                                                    <span class="badge badge-soft-primary mb-0">Backend Developer</span>
                                                                                </div>
                                                                                <div class="flex-shrink-0 dropdown">
                                                                                    <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal icon-xs"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                                                                    </a>
                                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                                        <a class="dropdown-item" href="#">Edit</a>
                                                                                        <a class="dropdown-item" href="#">Action</a>
                                                                                        <a class="dropdown-item" href="#">Remove</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div><!-- end -->
                                                                            <p class="mt-4 text-muted">Curabitur non magna lobortis est tempus gravida
                                                                                ornare libero sed diam sed fringilla est.</p>
                                                                           <div class="pt-2">
                                                                               <button type="button" class="btn btn-soft-primary btn-sm w-md text-truncate"><i class="bx bx-user me-1 align-middle"></i> Contact</button>
                                                                               <button type="button" class="btn btn-primary btn-sm w-md text-truncate ms-2"><i class="bx bx-message-square-dots me-1 align-middle"></i> Profile</button>
                                                                           </div>
                                                                        </div><!-- end cardbody -->
                                                                        <!-- end btn-group -->
                                                                    </div><!-- end card -->
                                                                </div><!-- end col -->
                                                                <div class="col-xl-4 col-sm-6">
                                                                    <div class="card">
                                                                        <div class="card-body p-4">
                                                                            <div class="d-flex align-items-start">
                                                                                <div class="flex-shrink-0 avatar rounded-circle me-3">
                                                                                    <img src="assets/images/users/avatar-6.jpg" alt="" class="img-fluid rounded-circle">
                                                                                </div>
                                                                                <div class="flex-grow-1 overflow-hidden">
                                                                                    <h5 class="font-size-15 mb-1 text-truncate"><a href="pages-profile.html" class="text-dark">Sharon
                                                                                            Carver</a></h5>
                                                                                    <span class="badge badge-soft-info mb-0">Frontend Developer</span>
                                                                                </div>
                                                                                <div class="flex-shrink-0 dropdown">
                                                                                    <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal icon-xs"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                                                                    </a>
                                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                                        <a class="dropdown-item" href="#">Edit</a>
                                                                                        <a class="dropdown-item" href="#">Action</a>
                                                                                        <a class="dropdown-item" href="#">Remove</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <p class="mt-4 text-muted">Curabitur non magna lobortis est tempus gravida
                                                                                ornare libero sed diam sed fringilla est.</p>
                                                                           <div class="pt-2">
                                                                               <button type="button" class="btn btn-soft-primary btn-sm w-md text-truncate"><i class="bx bx-user me-1 align-middle"></i> Contact</button>
                                                                               <button type="button" class="btn btn-primary btn-sm w-md text-truncate ms-2"><i class="bx bx-message-square-dots me-1 align-middle"></i> Profile</button>
                                                                           </div>
                                                                        </div>
                                                                        <!-- end card body -->
                                                                        <!-- end button group -->
                                                                    </div>
                                                                    <!-- end card -->
                                                                </div><!-- end col -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end tab pane -->
        
                                            <div class="tab-pane" id="activities" role="tabpanel">
                                                <div class="card mb-0 border-0">
                                                    <div class="card-header bg-transparent border-bottom d-flex">
                                                        
                                                        <h5 class="card-title mb-0">Activities</h5>
        
                                                        <div class="ms-auto">
                                                            <ul class="nav nav-tabs card-header-tabs float-end border-bottom-0">
                                                                <li class="nav-item">
                                                                    <a class="nav-link active" href="#card-header-messages-tabs" data-bs-toggle="tab">
                                                                        <span class="d-block d-sm-none"><i class="uil uil-comment-alt-lines"></i></span>
                                                                        <span class="d-none d-sm-block">Messages</span>
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link" href="#card-header-attachment-tabs" data-bs-toggle="tab">
                                                                        <span class="d-block d-sm-none"><i class="uil uil-paperclip"></i></span>
                                                                        <span class="d-none d-sm-block">Attachments</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                
                                                    <div class="card-body">
                                                        <div class="tab-content">
                                                            <div class="tab-pane show active" id="card-header-messages-tabs">
                                                                <div>
                                                                   
                                                                    <div class="list-group list-group-flush">
                                                                        <div class="list-group-item py-3">
                                                                            <div class="d-flex aligm-items-start">
                                                                                <div class="flex-shrink-0 me-3">
                                                                                    <img src="assets/images/users/avatar-2.jpg" alt="" class="avatar rounded-circle">
                                                                                </div>
                                                                                <div class="flex-grow-1 overflow-hidden">
                                                                                    <h5 class="font-size-15 mb-1 text-truncate"><a href="javascript: void(0);" class="text-dark">John Patino</a> <small class="text-muted ms-1">09:34 AM</small></h5>
                                                                                    <p class="text-muted mb-0">Donec quam felis ultricies nec, pellentesque eu pretium quis</p>
                                                                                </div>
                                                                                <div class="flex-shrink-0 ms-2">
                                                                                    <ul class="list-inline mb-0">
                                                                                        <li class="list-inline-item">
                                                                                            <a href="javascript: void(0);" class="text-muted font-size-15 px-1">
                                                                                                <i class="uil uil-smile"></i>
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="list-inline-item">
                                                                                            <div class="dropdown">
                                                                                                <a class="dropdown-toggle text-muted font-size-15 px-2" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                                                    <i class="uil uil-ellipsis-h"></i>
                                                                                                </a>
                                                                                                
                                                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                                                    <a class="dropdown-item" href="#"><i class="uil uil-copy align-bottom text-muted me-2"></i> Copy</a>
                                                                                                    <a class="dropdown-item" href="#"><i class="uil uil-comment-alt-notes align-bottom text-muted me-2"></i> Reply</a>
                                                                                                    <a class="dropdown-item" href="#"><i class="uil uil-share align-bottom text-muted me-2"></i> Forward</a>
                                                                                                    <div class="dropdown-divider"></div>
                                                                                                    <a class="dropdown-item" href="#"><i class="uil uil-trash-alt align-bottom text-muted me-2"></i> Remove</a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </li>
                                                                                    </ul><!-- end ul -->
                                                                                </div>
                                                                            </div>
                                                                        </div><!-- end list group -->
                        
                                                                        <div class="list-group-item py-3">
                                                                            <div class="d-flex aligm-items-center">
                                                                                <div class="flex-shrink-0 me-3">
                                                                                    <img src="assets/images/users/avatar-1.jpg" alt="" class="avatar rounded-circle">
                                                                                </div>
                                                                                <div class="flex-grow-1 overflow-hidden">
                                                                                    <h5 class="font-size-15 mb-1 text-truncate"><a href="javascript: void(0);" class="text-dark">Kate Daniels</a> <small class="text-muted ms-1">09:45 AM</small></h5>
                                                                                    <p class="text-muted mb-0">Aenean imperdiet. etiam ultricies nisi vel augue.</p>
                                                                                </div>
                                                                                <div class="flex-shrink-0 ms-2">
                                                                                    <ul class="list-inline mb-0">
                                                                                        <li class="list-inline-item">
                                                                                            <a href="javascript: void(0);" class="text-muted font-size-15 px-1">
                                                                                                <i class="uil uil-smile"></i>
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="list-inline-item">
                                                                                            <div class="dropdown">
                                                                                                <a class="dropdown-toggle text-muted font-size-15 px-2" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                                                    <i class="uil uil-ellipsis-h"></i>
                                                                                                </a>
                                                                                                
                                                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                                                    <a class="dropdown-item" href="#"><i class="uil uil-copy align-bottom text-muted me-2"></i> Copy</a>
                                                                                                    <a class="dropdown-item" href="#"><i class="uil uil-comment-alt-notes align-bottom text-muted me-2"></i> Reply</a>
                                                                                                    <a class="dropdown-item" href="#"><i class="uil uil-share align-bottom text-muted me-2"></i> Forward</a>
                                                                                                    <div class="dropdown-divider"></div>
                                                                                                    <a class="dropdown-item" href="#"><i class="uil uil-trash-alt align-bottom text-muted me-2"></i> Remove</a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div><!-- end list group -->
                        
                                                                        <div class="list-group-item py-3">
                                                                            <div class="d-flex aligm-items-center">
                                                                                <div class="flex-shrink-0 me-3">
                                                                                    <img src="assets/images/users/avatar-2.jpg" alt="" class="avatar rounded-circle">
                                                                                </div>
                                                                                <div class="flex-grow-1 overflow-hidden">
                                                                                    <h5 class="font-size-15 mb-1 text-truncate"><a href="javascript: void(0);" class="text-dark">John Patino</a> <small class="text-muted ms-1">10:15 AM</small></h5>
                                                                                    <div class="row">
                                                                                        <div class="col-lg-4 col-sm-6">
                                                                                            <div class="card border p-2 shadow-none mt-2 mb-2">
                                                                                                <div class="d-flex align-items-center">
                                                                                                    <div class="flex-shrink-0 avatar-sm me-3">
                                                                                                        <span class="avatar-title bg-light text-primary rounded font-size-20">
                                                                                                            <i class="uil uil-scenery"></i>
                                                                                                        </span>
                                                                                                    </div>
                                                                                                    <div class="flex-grow-1 overflow-hidden">
                                                                                                        <h5 class="font-size-12 mb-1 text-truncate"><a href="javascript:void(0);" class="text-dark">Image-1.jpg</a></h5>
                                                                                                        <p class="text-muted mb-0 font-size-12">1.2 MB</p>
                                                                                                    </div>
                                                                                                    <div class="flex-shrink-0 ms-2">
                                                                                                        <a href="javascript:void(0);" class="px-2 font-size-18 text-muted">
                                                                                                            <i class="uil uil-download-alt"></i>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div><!-- end card -->
                                                                                        </div><!-- end col -->
                                                                                    </div><!-- end row -->
                                                                                </div>
                                                                                <div class="flex-shrink-0 ms-2">
                                                                                    <ul class="list-inline mb-0">
                                                                                        <li class="list-inline-item">
                                                                                            <a href="javascript: void(0);" class="text-muted font-size-15 px-1">
                                                                                                <i class="uil uil-smile"></i>
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="list-inline-item">
                                                                                            <div class="dropdown">
                                                                                                <a class="dropdown-toggle text-muted font-size-15 px-2" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                                                    <i class="uil uil-ellipsis-h"></i>
                                                                                                </a>
                                                                                                
                                                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                                                    <a class="dropdown-item" href="#"><i class="uil uil-copy align-bottom text-muted me-2"></i> Copy</a>
                                                                                                    <a class="dropdown-item" href="#"><i class="uil uil-comment-alt-notes align-bottom text-muted me-2"></i> Reply</a>
                                                                                                    <a class="dropdown-item" href="#"><i class="uil uil-share align-bottom text-muted me-2"></i> Forward</a>
                                                                                                    <div class="dropdown-divider"></div>
                                                                                                    <a class="dropdown-item" href="#"><i class="uil uil-trash-alt align-bottom text-muted me-2"></i> Remove</a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </li><!-- end li -->
                                                                                    </ul><!-- end ul -->
                                                                                </div>
                                                                            </div>
                                                                        </div><!-- end list group -->
    
                                                                        <div class="list-group-item py-3">
                                                                            <div class="d-flex aligm-items-center">
                                                                                <div class="flex-shrink-0 flex-shrink-0 avatar me-3">
                                                                                    <div class="avatar-title rounded-circle bg-light text-primary">
                                                                                        J
                                                                                    </div>
                                                                                </div>
                                                                                <div class="flex-grow-1 overflow-hidden">
                                                                                    <h5 class="font-size-15 mb-1 text-truncate"><a href="javascript: void(0);" class="text-dark">Jerry Macleod</a> <small class="text-muted ms-1">11:34 AM</small></h5>
                                                                                    <p class="text-muted mb-0">Sed consequat, leo eget augue velit</p>
                                                                                </div>
                                                                                <div class="flex-shrink-0 ms-2">
                                                                                    <ul class="list-inline mb-0">
                                                                                        <li class="list-inline-item">
                                                                                            <a href="javascript: void(0);" class="text-muted font-size-15 px-1">
                                                                                                <i class="uil uil-smile"></i>
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="list-inline-item">
                                                                                            <div class="dropdown">
                                                                                                <a class="dropdown-toggle text-muted font-size-15 px-2" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                                                    <i class="uil uil-ellipsis-h"></i>
                                                                                                </a>
                                                                                                
                                                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                                                    <a class="dropdown-item" href="#"><i class="uil uil-copy align-bottom text-muted me-2"></i> Copy</a>
                                                                                                    <a class="dropdown-item" href="#"><i class="uil uil-comment-alt-notes align-bottom text-muted me-2"></i> Reply</a>
                                                                                                    <a class="dropdown-item" href="#"><i class="uil uil-share align-bottom text-muted me-2"></i> Forward</a>
                                                                                                    <div class="dropdown-divider"></div>
                                                                                                    <a class="dropdown-item" href="#"><i class="uil uil-trash-alt align-bottom text-muted me-2"></i> Remove</a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </li>
                                                                                    </ul><!-- end ul -->
                                                                                </div>
                                                                            </div>
                                                                        </div><!-- end list group -->
                                                                    </div>
                                                                    <div class="d-flex chat-input-section align-items-start pt-3">
                                                                        <div class="flex-shrink-0 d-none d-sm-block me-3">
                                                                            <img src="assets/images/users/avatar-4.jpg" alt="" class="avatar-sm rounded-circle">
                                                                        </div>
                                                                        <div class="flex-grow-1">
                                                                            <div class="position-relative d-flex align-items-start">
                                                                                <input type="text" class="form-control chat-input" placeholder="Some text value...">
                                                                                <div class="chat-input-links d-flex align-items-start">
                                                                                    <button type="button" class="btn btn-link text-muted" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Emoji" aria-label="Emoji"><i class="uil uil-smile"></i></button>
                                                                                    <button type="button" class="btn btn-link text-muted" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Attachments" aria-label="Attachments"><i class="uil uil-paperclip"></i></button>
                                                                                    <button type="button" class="btn btn-primary"><i class="uil uil-message"></i></button>
        
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- end tab pane -->
                
                                                            <div class="tab-pane" id="card-header-attachment-tabs">
                                                                <div>
                                                                    <div class="list-group list-group-flush">
                                                                        <div class="list-group-item py-3">
                                                                            <div class="d-flex align-items-start">
                                                                                <div class="flex-shrink-0 avatar-sm me-3">
                                                                                    <span class="avatar-title bg-light text-primary rounded font-size-20">
                                                                                        <i class="uil uil-scenery"></i>
                                                                                    </span>
                                                                                </div>
                                                                                <div class="flex-grow-1 overflow-hidden">
                                                                                    <h5 class="font-size-13 mb-1 text-truncate"><a href="javascript:void(0);" class="text-dark">Image-1.jpg</a></h5>
                                                                                    <p class="text-muted mb-0 font-size-12">1.2 MB</p>
                                                                                </div>
                                                                                <div class="flex-shrink-0 ms-2">
                                                                                    <ul class="list-inline mb-0">
                                                                                        <li class="list-inline-item">
                                                                                            <a href="javascript: void(0);" class="text-muted font-size-18 px-2">
                                                                                                <i class="uil uil-download-alt"></i>
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="list-inline-item">
                                                                                            <div class="dropdown">
                                                                                                <a class="dropdown-toggle text-muted font-size-18 px-2" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                                                    <i class="uil uil-ellipsis-h"></i>
                                                                                                </a>
                                                                                                
                                                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                                                    <a class="dropdown-item" href="#">Action</a>
                                                                                                    <a class="dropdown-item" href="#">Another action</a>
                                                                                                    <div class="dropdown-divider"></div>
                                                                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div><!-- end list group -->
    
                                                                        <div class="list-group-item py-3">
                                                                            <div class="d-flex align-items-start">
                                                                                <div class="flex-shrink-0 avatar-sm me-3">
                                                                                    <span class="avatar-title bg-light text-primary rounded font-size-20">
                                                                                        <i class="uil uil-scenery"></i>
                                                                                    </span>
                                                                                </div>
                                                                                <div class="flex-grow-1 overflow-hidden">
                                                                                    <h5 class="font-size-13 mb-1 text-truncate"><a href="javascript:void(0);" class="text-dark">Image-2.jpg</a></h5>
                                                                                    <p class="text-muted mb-0 font-size-12">1.3 MB</p>
                                                                                </div>
                                                                                <div class="flex-shrink-0 ms-2">
                                                                                    <ul class="list-inline mb-0">
                                                                                        <li class="list-inline-item">
                                                                                            <a href="javascript: void(0);" class="text-muted font-size-18 px-2">
                                                                                                <i class="uil uil-download-alt"></i>
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="list-inline-item">
                                                                                            <div class="dropdown">
                                                                                                <a class="dropdown-toggle text-muted font-size-18 px-2" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                                                    <i class="uil uil-ellipsis-h"></i>
                                                                                                </a>
                                                                                                
                                                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                                                    <a class="dropdown-item" href="#">Action</a>
                                                                                                    <a class="dropdown-item" href="#">Another action</a>
                                                                                                    <div class="dropdown-divider"></div>
                                                                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div><!-- end list group -->
            
                                                                        <div class="list-group-item py-3">
                                                                            <div class="d-flex align-items-start">
                                                                                <div class="flex-shrink-0 avatar-sm me-3">
                                                                                    <span class="avatar-title bg-light text-primary rounded font-size-20">
                                                                                        <i class="uil uil-folder"></i>
                                                                                    </span>
                                                                                </div>
                                                                                <div class="flex-grow-1 overflow-hidden">
                                                                                    <h5 class="font-size-13 mb-1 text-truncate"><a href="javascript:void(0);" class="text-dark">Pages changes.zip</a></h5>
                                                                                    <p class="text-muted mb-0 font-size-12">2.1 MB</p>
                                                                                </div>
                                                                                <div class="flex-shrink-0 ms-2">
                                                                                    <ul class="list-inline mb-0">
                                                                                        <li class="list-inline-item">
                                                                                            <a href="javascript: void(0);" class="text-muted font-size-18 px-2">
                                                                                                <i class="uil uil-download-alt"></i>
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="list-inline-item">
                                                                                            <div class="dropdown">
                                                                                                <a class="dropdown-toggle text-muted font-size-18 px-2" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                                                    <i class="uil uil-ellipsis-h"></i>
                                                                                                </a>
                                                                                                
                                                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                                                    <a class="dropdown-item" href="#">Action</a>
                                                                                                    <a class="dropdown-item" href="#">Another action</a>
                                                                                                    <div class="dropdown-divider"></div>
                                                                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div><!-- end list group -->
            
                                                                        <div class="list-group-item py-3">
                                                                            <div class="d-flex align-items-start">
                                                                                <div class="flex-shrink-0 avatar-sm me-3">
                                                                                    <span class="avatar-title bg-light text-primary rounded font-size-20">
                                                                                        <i class="uil uil-scenery"></i>
                                                                                    </span>
                                                                                </div>
                                                                                <div class="flex-grow-1 overflow-hidden">
                                                                                    <h5 class="font-size-13 mb-1 text-truncate"><a href="javascript:void(0);" class="text-dark">Image-3.jpg</a></h5>
                                                                                    <p class="text-muted mb-0 font-size-12">1.2 MB</p>
                                                                                </div>
                                                                                <div class="flex-shrink-0 ms-2">
                                                                                    <ul class="list-inline mb-0">
                                                                                        <li class="list-inline-item">
                                                                                            <a href="javascript: void(0);" class="text-muted font-size-18 px-2">
                                                                                                <i class="uil uil-download-alt"></i>
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="list-inline-item">
                                                                                            <div class="dropdown">
                                                                                                <a class="dropdown-toggle text-muted font-size-18 px-2" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                                                    <i class="uil uil-ellipsis-h"></i>
                                                                                                </a>
                                                                                                
                                                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                                                    <a class="dropdown-item" href="#">Action</a>
                                                                                                    <a class="dropdown-item" href="#">Another action</a>
                                                                                                    <div class="dropdown-divider"></div>
                                                                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div><!-- end list group -->
            
                                                                        <div class="list-group-item py-3">
                                                                            <div class="d-flex align-items-start">
                                                                                <div class="flex-shrink-0 avatar-sm me-3">
                                                                                    <span class="avatar-title bg-light text-primary rounded font-size-20">
                                                                                        <i class="uil uil-scenery"></i>
                                                                                    </span>
                                                                                </div>
                                                                                <div class="flex-grow-1 overflow-hidden">
                                                                                    <h5 class="font-size-13 mb-1 text-truncate"><a href="javascript:void(0);" class="text-dark">Img-1.png</a></h5>
                                                                                    <p class="text-muted mb-0 font-size-12">1.3 MB</p>
                                                                                </div>
                                                                                <div class="flex-shrink-0 ms-2">
                                                                                    <ul class="list-inline mb-0">
                                                                                        <li class="list-inline-item">
                                                                                            <a href="javascript: void(0);" class="text-muted font-size-18 px-2">
                                                                                                <i class="uil uil-download-alt"></i>
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="list-inline-item">
                                                                                            <div class="dropdown">
                                                                                                <a class="dropdown-toggle text-muted font-size-18 px-2" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                                                    <i class="uil uil-ellipsis-h"></i>
                                                                                                </a>
                                                                                                
                                                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                                                    <a class="dropdown-item" href="#">Action</a>
                                                                                                    <a class="dropdown-item" href="#">Another action</a>
                                                                                                    <div class="dropdown-divider"></div>
                                                                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </li>
                                                                                    </ul><!-- end ul -->
                                                                                </div>
                                                                            </div>
                                                                        </div><!-- end list group -->
                                                                    </div>
                                                                      
                                                                </div>
                                                            </div>
                                                            <!-- end tab pane -->
                                                        </div>
                                                        <!-- end tab content -->
                                                        
                                                    </div>
                                                </div>
                                                <!-- end card -->
                                            </div>
                                        </div>
                                </div>

                            </div>
                        </div>
                        
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> &copy; Vuesy.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Crafted with <i class="mdi mdi-heart text-danger"></i> by <a href="https://1.envato.market/themesdesign" target="_blank">Themesdesign</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title d-flex align-items-center p-3">

                    <h5 class="m-0 me-2">Theme Customizer</h5>

                    <a href="javascript:void(0);" class="right-bar-toggle-close ms-auto">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                </div>

                <!-- Settings -->
                <hr class="m-0" />

                <div class="p-4">
                    <h6 class="mb-3">Layout</h6>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout"
                            id="layout-vertical" value="vertical">
                        <label class="form-check-label" for="layout-vertical">Vertical</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout"
                            id="layout-horizontal" value="horizontal">
                        <label class="form-check-label" for="layout-horizontal">Horizontal</label>
                    </div>

                    <h6 class="mt-4 mb-3">Layout Mode</h6>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-mode"
                            id="layout-mode-light" value="light">
                        <label class="form-check-label" for="layout-mode-light">Light</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-mode"
                            id="layout-mode-dark" value="dark">
                        <label class="form-check-label" for="layout-mode-dark">Dark</label>
                    </div>

                    <h6 class="mt-4 mb-3">Layout Width</h6>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-width"
                            id="layout-width-fluid" value="fluid" onchange="document.body.setAttribute('data-layout-size', 'fluid')">
                        <label class="form-check-label" for="layout-width-fluid">Fluid</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-width"
                            id="layout-width-boxed" value="boxed" onchange="document.body.setAttribute('data-layout-size', 'boxed')">
                        <label class="form-check-label" for="layout-width-boxed">Boxed</label>
                    </div>

                    <h6 class="mt-4 mb-3">Topbar Color</h6>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="topbar-color"
                            id="topbar-color-light" value="light" onchange="document.body.setAttribute('data-topbar', 'light')">
                        <label class="form-check-label" for="topbar-color-light">Light</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="topbar-color"
                            id="topbar-color-dark" value="dark" onchange="document.body.setAttribute('data-topbar', 'dark')">
                        <label class="form-check-label" for="topbar-color-dark">Dark</label>
                    </div>

                    <div id="sidebar-setting">
                    <h6 class="mt-4 mb-3 sidebar-setting">Sidebar Size</h6>

                    <div class="form-check sidebar-setting mt-1">
                        <input class="form-check-input" type="radio" name="sidebar-size"
                            id="sidebar-size-default" value="default" onchange="document.body.setAttribute('data-sidebar-size', 'lg')">
                        <label class="form-check-label" for="sidebar-size-default">Default</label>
                    </div>
                    <div class="form-check sidebar-setting mt-1">
                        <input class="form-check-input" type="radio" name="sidebar-size"
                            id="sidebar-size-compact" value="compact" onchange="document.body.setAttribute('data-sidebar-size', 'md')">
                        <label class="form-check-label" for="sidebar-size-compact">Compact</label>
                    </div>
                    <div class="form-check sidebar-setting mt-1">
                        <input class="form-check-input" type="radio" name="sidebar-size"
                            id="sidebar-size-small" value="small" onchange="document.body.setAttribute('data-sidebar-size', 'sm')">
                        <label class="form-check-label" for="sidebar-size-small">Small (Icon View)</label>
                    </div>

                    <h6 class="mt-4 mb-3 sidebar-setting">Sidebar Color</h6>

                    <div class="form-check sidebar-setting mt-1">
                        <input class="form-check-input" type="radio" name="sidebar-color"
                            id="sidebar-color-light" value="light" onchange="document.body.setAttribute('data-sidebar', 'light')">
                        <label class="form-check-label" for="sidebar-color-light">Light</label>
                    </div>
                    <div class="form-check sidebar-setting mt-1">
                        <input class="form-check-input" type="radio" name="sidebar-color"
                            id="sidebar-color-dark" value="dark" onchange="document.body.setAttribute('data-sidebar', 'dark')">
                        <label class="form-check-label" for="sidebar-color-dark">Dark</label>
                    </div>
                    <div class="form-check sidebar-setting mt-1">
                        <input class="form-check-input" type="radio" name="sidebar-color"
                            id="sidebar-color-brand" value="brand" onchange="document.body.setAttribute('data-sidebar', 'brand')">
                        <label class="form-check-label" for="sidebar-color-brand">Brand</label>
                    </div>
                </div>

                    <h6 class="mt-4 mb-3">Direction</h6>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-direction"
                            id="layout-direction-ltr" value="ltr">
                        <label class="form-check-label" for="layout-direction-ltr">LTR</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-direction"
                            id="layout-direction-rtl" value="rtl">
                        <label class="form-check-label" for="layout-direction-rtl">RTL</label>
                    </div>

                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenujs/metismenujs.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/feather-icons/feather.min.js"></script>

        <script src="assets/js/app.js"></script>

    </body>
</html>
