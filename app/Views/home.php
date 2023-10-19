<!--
=========================================================
* Soft UI Design System - v1.0.9
=========================================================

* Product Page:  https://www.creative-tim.com/product/soft-ui-design-system 
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<?= $this->include('layouts/customer/home/header'); ?>

<body class="presentation-page">
    <!-- Navbar -->
    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
                <?= $this->include('layouts/customer/home/navbar'); ?>
                <!-- End Navbar -->
            </div>
        </div>
    </div>
    <header class="header-2">
        <div class="page-header min-vh-75 relative" style="background-image: url('<?= base_url('assets_customers/img/curved-images/curved.jpg'); ?>')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 text-center mx-auto">
                        <h1 class="text-white pt-3 mt-n5">Metro Glass Online Store</h1>
                        <p class="lead text-white mt-3">Made using Creative Tim, supported by Bootstrap 5. <br /> Begin shopping by scrolling down! </p>
                    </div>
                </div>
            </div>
            <div class="position-absolute w-100 z-index-1 bottom-0">
                <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 40" preserveAspectRatio="none" shape-rendering="auto">
                    <defs>
                        <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                    </defs>
                    <g class="moving-waves">
                        <use xlink:href="#gentle-wave" x="48" y="-1" fill="rgba(255,255,255,0.40" />
                        <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.35)" />
                        <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.25)" />
                        <use xlink:href="#gentle-wave" x="48" y="8" fill="rgba(255,255,255,0.20)" />
                        <use xlink:href="#gentle-wave" x="48" y="13" fill="rgba(255,255,255,0.15)" />
                        <use xlink:href="#gentle-wave" x="48" y="16" fill="rgba(255,255,255,0.95" />
                    </g>
                </svg>
            </div>
        </div>
    </header>
    <?= $this->include('layouts/customer/home/carousel'); ?>
    <section class="my-5 py-5">
        <div class="container">
            <div class="row">
                <div class="row justify-content-center text-center my-sm-5">
                    <div class="col-lg-6">
                        <h2 class="text-dark mb-0">Huge collection of sections</h2>
                        <h2 class="text-primary text-gradient">Infinite combinations</h2>
                        <p class="lead">We have created multiple options for you to put together and customise into pixel perfect pages. </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-sm-5 mt-3">
            <div class="row">
                <div class="col-lg-3">
                    <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
                        <h3>Design Blocks</h3>
                        <h6 class="text-secondary font-weight-normal pe-3">A selection of 45 page sections that fit perfectly in any combination</h6>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-md-4 mt-md-0">
                            <a href="./sections/page-sections/hero-sections.html">
                                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                    <img class="w-100 my-auto" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/sections/page-sections/page-headers/header-7.jpg" alt="">
                                </div>
                                <div class="mt-2 ms-2">
                                    <h6 class="mb-0">Page Headers</h6>
                                    <p class="text-secondary text-sm">10 Examples</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 mt-md-0 mt-4">
                            <a href="./sections/page-sections/features.html">
                                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                    <img class="w-100 my-auto" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/sections/page-sections/features/features-3.jpg" alt="">
                                </div>
                                <div class="mt-2 ms-2">
                                    <h6 class="mb-0">Features</h6>
                                    <p class="text-secondary text-sm">14 Examples</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 mt-md-0 mt-4">
                            <a href="javascript:;">
                                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                    <div class="position-absolute top-0 end-0 p-2 z-index-1">
                                        <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <circle fill="#1F2937" cx="12" cy="12" r="12"></circle>
                                                <g transform="translate(7.000000, 5.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                    <path d="M5,0 C3.16666667,0 1.66666667,1.5 1.66666667,3.33333333 L1.66666667,4.58333333 C0.666666667,5.5 0,6.83333333 0,8.33333333 C0,11.0833333 2.25,13.3333333 5,13.3333333 C7.75,13.3333333 10,11.0833333 10,8.33333333 C10,6.83333333 9.33333333,5.5 8.33333333,4.58333333 L8.33333333,3.33333333 C8.33333333,1.5 6.83333333,0 5,0 Z M5.83333333,8.91666667 L5.83333333,10.8333333 L4.16666667,10.8333333 L4.16666667,8.91666667 C3.66666667,8.66666667 3.33333333,8.08333333 3.33333333,7.5 C3.33333333,6.58333333 4.08333333,5.83333333 5,5.83333333 C5.91666667,5.83333333 6.66666667,6.58333333 6.66666667,7.5 C6.66666667,8.08333333 6.33333333,8.66666667 5.83333333,8.91666667 Z M6.66666667,3.66666667 C6.16666667,3.41666667 5.58333333,3.33333333 5,3.33333333 C4.41666667,3.33333333 3.83333333,3.41666667 3.33333333,3.66666667 L3.33333333,3.33333333 C3.33333333,2.41666667 4.08333333,1.66666667 5,1.66666667 C5.91666667,1.66666667 6.66666667,2.41666667 6.66666667,3.33333333 L6.66666667,3.66666667 Z"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <img class="w-100 my-auto opacity-6" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/sections/page-sections/pricing/pricing-3.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Pro Element" alt="pricing">
                                </div>
                                <div class="mt-2 ms-2">
                                    <h6 class="mb-0">Pricing</h6>
                                    <p class="text-secondary text-sm">8 Examples</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-4 mt-md-0 mt-3">
                            <a href="javascript:;">
                                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                    <div class="position-absolute top-0 end-0 p-2 z-index-1">
                                        <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <circle fill="#1F2937" cx="12" cy="12" r="12"></circle>
                                                <g transform="translate(7.000000, 5.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                    <path d="M5,0 C3.16666667,0 1.66666667,1.5 1.66666667,3.33333333 L1.66666667,4.58333333 C0.666666667,5.5 0,6.83333333 0,8.33333333 C0,11.0833333 2.25,13.3333333 5,13.3333333 C7.75,13.3333333 10,11.0833333 10,8.33333333 C10,6.83333333 9.33333333,5.5 8.33333333,4.58333333 L8.33333333,3.33333333 C8.33333333,1.5 6.83333333,0 5,0 Z M5.83333333,8.91666667 L5.83333333,10.8333333 L4.16666667,10.8333333 L4.16666667,8.91666667 C3.66666667,8.66666667 3.33333333,8.08333333 3.33333333,7.5 C3.33333333,6.58333333 4.08333333,5.83333333 5,5.83333333 C5.91666667,5.83333333 6.66666667,6.58333333 6.66666667,7.5 C6.66666667,8.08333333 6.33333333,8.66666667 5.83333333,8.91666667 Z M6.66666667,3.66666667 C6.16666667,3.41666667 5.58333333,3.33333333 5,3.33333333 C4.41666667,3.33333333 3.83333333,3.41666667 3.33333333,3.66666667 L3.33333333,3.33333333 C3.33333333,2.41666667 4.08333333,1.66666667 5,1.66666667 C5.91666667,1.66666667 6.66666667,2.41666667 6.66666667,3.33333333 L6.66666667,3.66666667 Z"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <img class="w-100 my-auto opacity-6" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/sections/page-sections/faq/faq-1.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Pro Element" alt="faq">
                                </div>
                                <div class="mt-2 ms-2">
                                    <h6 class="mb-0">FAQ</h6>
                                    <p class="text-secondary text-sm">1 Examples</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 mt-md-0 mt-4">
                            <a href="javascript:;">
                                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                    <div class="position-absolute top-0 end-0 p-2 z-index-1">
                                        <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <circle fill="#1F2937" cx="12" cy="12" r="12"></circle>
                                                <g transform="translate(7.000000, 5.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                    <path d="M5,0 C3.16666667,0 1.66666667,1.5 1.66666667,3.33333333 L1.66666667,4.58333333 C0.666666667,5.5 0,6.83333333 0,8.33333333 C0,11.0833333 2.25,13.3333333 5,13.3333333 C7.75,13.3333333 10,11.0833333 10,8.33333333 C10,6.83333333 9.33333333,5.5 8.33333333,4.58333333 L8.33333333,3.33333333 C8.33333333,1.5 6.83333333,0 5,0 Z M5.83333333,8.91666667 L5.83333333,10.8333333 L4.16666667,10.8333333 L4.16666667,8.91666667 C3.66666667,8.66666667 3.33333333,8.08333333 3.33333333,7.5 C3.33333333,6.58333333 4.08333333,5.83333333 5,5.83333333 C5.91666667,5.83333333 6.66666667,6.58333333 6.66666667,7.5 C6.66666667,8.08333333 6.33333333,8.66666667 5.83333333,8.91666667 Z M6.66666667,3.66666667 C6.16666667,3.41666667 5.58333333,3.33333333 5,3.33333333 C4.41666667,3.33333333 3.83333333,3.41666667 3.33333333,3.66666667 L3.33333333,3.33333333 C3.33333333,2.41666667 4.08333333,1.66666667 5,1.66666667 C5.91666667,1.66666667 6.66666667,2.41666667 6.66666667,3.33333333 L6.66666667,3.66666667 Z"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <img class="w-100 my-auto opacity-6" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/sections/page-sections/blog-posts/blog-7.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Pro Element" alt="blog posts">
                                </div>
                                <div class="mt-2 ms-2">
                                    <h6 class="mb-0">Blog Posts</h6>
                                    <p class="text-secondary text-sm">11 Examples</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 mt-md-0 mt-4">
                            <a href="javascript:;">
                                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                    <div class="position-absolute top-0 end-0 p-2 z-index-1">
                                        <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <circle fill="#1F2937" cx="12" cy="12" r="12"></circle>
                                                <g transform="translate(7.000000, 5.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                    <path d="M5,0 C3.16666667,0 1.66666667,1.5 1.66666667,3.33333333 L1.66666667,4.58333333 C0.666666667,5.5 0,6.83333333 0,8.33333333 C0,11.0833333 2.25,13.3333333 5,13.3333333 C7.75,13.3333333 10,11.0833333 10,8.33333333 C10,6.83333333 9.33333333,5.5 8.33333333,4.58333333 L8.33333333,3.33333333 C8.33333333,1.5 6.83333333,0 5,0 Z M5.83333333,8.91666667 L5.83333333,10.8333333 L4.16666667,10.8333333 L4.16666667,8.91666667 C3.66666667,8.66666667 3.33333333,8.08333333 3.33333333,7.5 C3.33333333,6.58333333 4.08333333,5.83333333 5,5.83333333 C5.91666667,5.83333333 6.66666667,6.58333333 6.66666667,7.5 C6.66666667,8.08333333 6.33333333,8.66666667 5.83333333,8.91666667 Z M6.66666667,3.66666667 C6.16666667,3.41666667 5.58333333,3.33333333 5,3.33333333 C4.41666667,3.33333333 3.83333333,3.41666667 3.33333333,3.66666667 L3.33333333,3.33333333 C3.33333333,2.41666667 4.08333333,1.66666667 5,1.66666667 C5.91666667,1.66666667 6.66666667,2.41666667 6.66666667,3.33333333 L6.66666667,3.66666667 Z"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <img class="w-100 my-auto opacity-6" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/sections/page-sections/testimonials/testimonials-2.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Pro Element" alt="testimonials">
                                </div>
                                <div class="mt-2 ms-2">
                                    <h6 class="mb-0">Testimonials</h6>
                                    <p class="text-secondary text-sm">11 Examples</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-4 mt-md-0 mt-3">
                            <a href="javascript:;">
                                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                    <div class="position-absolute top-0 end-0 p-2 z-index-1">
                                        <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <circle fill="#1F2937" cx="12" cy="12" r="12"></circle>
                                                <g transform="translate(7.000000, 5.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                    <path d="M5,0 C3.16666667,0 1.66666667,1.5 1.66666667,3.33333333 L1.66666667,4.58333333 C0.666666667,5.5 0,6.83333333 0,8.33333333 C0,11.0833333 2.25,13.3333333 5,13.3333333 C7.75,13.3333333 10,11.0833333 10,8.33333333 C10,6.83333333 9.33333333,5.5 8.33333333,4.58333333 L8.33333333,3.33333333 C8.33333333,1.5 6.83333333,0 5,0 Z M5.83333333,8.91666667 L5.83333333,10.8333333 L4.16666667,10.8333333 L4.16666667,8.91666667 C3.66666667,8.66666667 3.33333333,8.08333333 3.33333333,7.5 C3.33333333,6.58333333 4.08333333,5.83333333 5,5.83333333 C5.91666667,5.83333333 6.66666667,6.58333333 6.66666667,7.5 C6.66666667,8.08333333 6.33333333,8.66666667 5.83333333,8.91666667 Z M6.66666667,3.66666667 C6.16666667,3.41666667 5.58333333,3.33333333 5,3.33333333 C4.41666667,3.33333333 3.83333333,3.41666667 3.33333333,3.66666667 L3.33333333,3.33333333 C3.33333333,2.41666667 4.08333333,1.66666667 5,1.66666667 C5.91666667,1.66666667 6.66666667,2.41666667 6.66666667,3.33333333 L6.66666667,3.66666667 Z"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <img class="w-100 my-auto opacity-6" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/sections/page-sections/teams/team-6.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Pro Element" alt="teams">
                                </div>
                                <div class="mt-2 ms-2">
                                    <h6 class="mb-0">Teams</h6>
                                    <p class="text-secondary text-sm">6 Examples</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 mt-md-0 mt-4">
                            <a href="javascript:;">
                                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                    <div class="position-absolute top-0 end-0 p-2 z-index-1">
                                        <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <circle fill="#1F2937" cx="12" cy="12" r="12"></circle>
                                                <g transform="translate(7.000000, 5.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                    <path d="M5,0 C3.16666667,0 1.66666667,1.5 1.66666667,3.33333333 L1.66666667,4.58333333 C0.666666667,5.5 0,6.83333333 0,8.33333333 C0,11.0833333 2.25,13.3333333 5,13.3333333 C7.75,13.3333333 10,11.0833333 10,8.33333333 C10,6.83333333 9.33333333,5.5 8.33333333,4.58333333 L8.33333333,3.33333333 C8.33333333,1.5 6.83333333,0 5,0 Z M5.83333333,8.91666667 L5.83333333,10.8333333 L4.16666667,10.8333333 L4.16666667,8.91666667 C3.66666667,8.66666667 3.33333333,8.08333333 3.33333333,7.5 C3.33333333,6.58333333 4.08333333,5.83333333 5,5.83333333 C5.91666667,5.83333333 6.66666667,6.58333333 6.66666667,7.5 C6.66666667,8.08333333 6.33333333,8.66666667 5.83333333,8.91666667 Z M6.66666667,3.66666667 C6.16666667,3.41666667 5.58333333,3.33333333 5,3.33333333 C4.41666667,3.33333333 3.83333333,3.41666667 3.33333333,3.66666667 L3.33333333,3.33333333 C3.33333333,2.41666667 4.08333333,1.66666667 5,1.66666667 C5.91666667,1.66666667 6.66666667,2.41666667 6.66666667,3.33333333 L6.66666667,3.66666667 Z"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <img class="w-100 my-auto opacity-6" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/sections/page-sections/stats/stats-2.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Pro Element" alt="stats">
                                </div>
                                <div class="mt-2 ms-2">
                                    <h6 class="mb-0">Stats</h6>
                                    <p class="text-secondary text-sm">3 Examples</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 mt-md-0 mt-4">
                            <a href="javascript:;">
                                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                    <div class="position-absolute top-0 end-0 p-2 z-index-1">
                                        <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <circle fill="#1F2937" cx="12" cy="12" r="12"></circle>
                                                <g transform="translate(7.000000, 5.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                    <path d="M5,0 C3.16666667,0 1.66666667,1.5 1.66666667,3.33333333 L1.66666667,4.58333333 C0.666666667,5.5 0,6.83333333 0,8.33333333 C0,11.0833333 2.25,13.3333333 5,13.3333333 C7.75,13.3333333 10,11.0833333 10,8.33333333 C10,6.83333333 9.33333333,5.5 8.33333333,4.58333333 L8.33333333,3.33333333 C8.33333333,1.5 6.83333333,0 5,0 Z M5.83333333,8.91666667 L5.83333333,10.8333333 L4.16666667,10.8333333 L4.16666667,8.91666667 C3.66666667,8.66666667 3.33333333,8.08333333 3.33333333,7.5 C3.33333333,6.58333333 4.08333333,5.83333333 5,5.83333333 C5.91666667,5.83333333 6.66666667,6.58333333 6.66666667,7.5 C6.66666667,8.08333333 6.33333333,8.66666667 5.83333333,8.91666667 Z M6.66666667,3.66666667 C6.16666667,3.41666667 5.58333333,3.33333333 5,3.33333333 C4.41666667,3.33333333 3.83333333,3.41666667 3.33333333,3.66666667 L3.33333333,3.33333333 C3.33333333,2.41666667 4.08333333,1.66666667 5,1.66666667 C5.91666667,1.66666667 6.66666667,2.41666667 6.66666667,3.33333333 L6.66666667,3.66666667 Z"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <img class="w-100 my-auto opacity-6" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/sections/page-sections/call-to-actions/prefooter-1.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Pro Element" alt="CTA">
                                </div>
                                <div class="mt-2 ms-2">
                                    <h6 class="mb-0">Call to Actions</h6>
                                    <p class="text-secondary text-sm">8 Examples</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-4 mt-md-0 mt-3">
                            <a href="javascript:;">
                                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                    <div class="position-absolute top-0 end-0 p-2 z-index-1">
                                        <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <circle fill="#1F2937" cx="12" cy="12" r="12"></circle>
                                                <g transform="translate(7.000000, 5.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                    <path d="M5,0 C3.16666667,0 1.66666667,1.5 1.66666667,3.33333333 L1.66666667,4.58333333 C0.666666667,5.5 0,6.83333333 0,8.33333333 C0,11.0833333 2.25,13.3333333 5,13.3333333 C7.75,13.3333333 10,11.0833333 10,8.33333333 C10,6.83333333 9.33333333,5.5 8.33333333,4.58333333 L8.33333333,3.33333333 C8.33333333,1.5 6.83333333,0 5,0 Z M5.83333333,8.91666667 L5.83333333,10.8333333 L4.16666667,10.8333333 L4.16666667,8.91666667 C3.66666667,8.66666667 3.33333333,8.08333333 3.33333333,7.5 C3.33333333,6.58333333 4.08333333,5.83333333 5,5.83333333 C5.91666667,5.83333333 6.66666667,6.58333333 6.66666667,7.5 C6.66666667,8.08333333 6.33333333,8.66666667 5.83333333,8.91666667 Z M6.66666667,3.66666667 C6.16666667,3.41666667 5.58333333,3.33333333 5,3.33333333 C4.41666667,3.33333333 3.83333333,3.41666667 3.33333333,3.66666667 L3.33333333,3.33333333 C3.33333333,2.41666667 4.08333333,1.66666667 5,1.66666667 C5.91666667,1.66666667 6.66666667,2.41666667 6.66666667,3.33333333 L6.66666667,3.66666667 Z"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <img class="w-100 my-auto opacity-6" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/sections/page-sections/applications/project-6.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Pro Element" alt="applications">
                                </div>
                                <div class="mt-2 ms-2">
                                    <h6 class="mb-0">Applications</h6>
                                    <p class="text-secondary text-sm">6 Examples</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 mt-md-0 mt-4">
                            <a href="javascript:;">
                                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                    <div class="position-absolute top-0 end-0 p-2 z-index-1">
                                        <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <circle fill="#1F2937" cx="12" cy="12" r="12"></circle>
                                                <g transform="translate(7.000000, 5.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                    <path d="M5,0 C3.16666667,0 1.66666667,1.5 1.66666667,3.33333333 L1.66666667,4.58333333 C0.666666667,5.5 0,6.83333333 0,8.33333333 C0,11.0833333 2.25,13.3333333 5,13.3333333 C7.75,13.3333333 10,11.0833333 10,8.33333333 C10,6.83333333 9.33333333,5.5 8.33333333,4.58333333 L8.33333333,3.33333333 C8.33333333,1.5 6.83333333,0 5,0 Z M5.83333333,8.91666667 L5.83333333,10.8333333 L4.16666667,10.8333333 L4.16666667,8.91666667 C3.66666667,8.66666667 3.33333333,8.08333333 3.33333333,7.5 C3.33333333,6.58333333 4.08333333,5.83333333 5,5.83333333 C5.91666667,5.83333333 6.66666667,6.58333333 6.66666667,7.5 C6.66666667,8.08333333 6.33333333,8.66666667 5.83333333,8.91666667 Z M6.66666667,3.66666667 C6.16666667,3.41666667 5.58333333,3.33333333 5,3.33333333 C4.41666667,3.33333333 3.83333333,3.41666667 3.33333333,3.66666667 L3.33333333,3.33333333 C3.33333333,2.41666667 4.08333333,1.66666667 5,1.66666667 C5.91666667,1.66666667 6.66666667,2.41666667 6.66666667,3.33333333 L6.66666667,3.66666667 Z"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <img class="w-100 my-auto opacity-6" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/sections/page-sections/logo-areas/logos-3.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Pro Element" alt="logo areas">
                                </div>
                                <div class="mt-2 ms-2">
                                    <h6 class="mb-0">Logo Areas</h6>
                                    <p class="text-secondary text-sm">4 Examples</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 mt-md-0 mt-4">
                            <a href="javascript:;">
                                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                    <div class="position-absolute top-0 end-0 p-2 z-index-1">
                                        <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <circle fill="#1F2937" cx="12" cy="12" r="12"></circle>
                                                <g transform="translate(7.000000, 5.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                    <path d="M5,0 C3.16666667,0 1.66666667,1.5 1.66666667,3.33333333 L1.66666667,4.58333333 C0.666666667,5.5 0,6.83333333 0,8.33333333 C0,11.0833333 2.25,13.3333333 5,13.3333333 C7.75,13.3333333 10,11.0833333 10,8.33333333 C10,6.83333333 9.33333333,5.5 8.33333333,4.58333333 L8.33333333,3.33333333 C8.33333333,1.5 6.83333333,0 5,0 Z M5.83333333,8.91666667 L5.83333333,10.8333333 L4.16666667,10.8333333 L4.16666667,8.91666667 C3.66666667,8.66666667 3.33333333,8.08333333 3.33333333,7.5 C3.33333333,6.58333333 4.08333333,5.83333333 5,5.83333333 C5.91666667,5.83333333 6.66666667,6.58333333 6.66666667,7.5 C6.66666667,8.08333333 6.33333333,8.66666667 5.83333333,8.91666667 Z M6.66666667,3.66666667 C6.16666667,3.41666667 5.58333333,3.33333333 5,3.33333333 C4.41666667,3.33333333 3.83333333,3.41666667 3.33333333,3.66666667 L3.33333333,3.33333333 C3.33333333,2.41666667 4.08333333,1.66666667 5,1.66666667 C5.91666667,1.66666667 6.66666667,2.41666667 6.66666667,3.33333333 L6.66666667,3.66666667 Z"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <img class="w-100 my-auto opacity-6" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/sections/page-sections/footers/footer-9.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Pro Element" alt="footers">
                                </div>
                                <div class="mt-2 ms-2">
                                    <h6 class="mb-0">Footers</h6>
                                    <p class="text-secondary text-sm">10 Examples</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-4 mt-md-0 mt-3">
                            <a href="javascript:;">
                                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                    <div class="position-absolute top-0 end-0 p-2 z-index-1">
                                        <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <circle fill="#1F2937" cx="12" cy="12" r="12"></circle>
                                                <g transform="translate(7.000000, 5.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                    <path d="M5,0 C3.16666667,0 1.66666667,1.5 1.66666667,3.33333333 L1.66666667,4.58333333 C0.666666667,5.5 0,6.83333333 0,8.33333333 C0,11.0833333 2.25,13.3333333 5,13.3333333 C7.75,13.3333333 10,11.0833333 10,8.33333333 C10,6.83333333 9.33333333,5.5 8.33333333,4.58333333 L8.33333333,3.33333333 C8.33333333,1.5 6.83333333,0 5,0 Z M5.83333333,8.91666667 L5.83333333,10.8333333 L4.16666667,10.8333333 L4.16666667,8.91666667 C3.66666667,8.66666667 3.33333333,8.08333333 3.33333333,7.5 C3.33333333,6.58333333 4.08333333,5.83333333 5,5.83333333 C5.91666667,5.83333333 6.66666667,6.58333333 6.66666667,7.5 C6.66666667,8.08333333 6.33333333,8.66666667 5.83333333,8.91666667 Z M6.66666667,3.66666667 C6.16666667,3.41666667 5.58333333,3.33333333 5,3.33333333 C4.41666667,3.33333333 3.83333333,3.41666667 3.33333333,3.66666667 L3.33333333,3.33333333 C3.33333333,2.41666667 4.08333333,1.66666667 5,1.66666667 C5.91666667,1.66666667 6.66666667,2.41666667 6.66666667,3.33333333 L6.66666667,3.66666667 Z"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <img class="w-100 my-auto opacity-6" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/sections/page-sections/general-cards/card-4.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Pro Element" alt="general cards">
                                </div>
                                <div class="mt-2 ms-2">
                                    <h6 class="mb-0">General Cards</h6>
                                    <p class="text-secondary text-sm">9 Examples</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 mt-md-0 mt-4">
                            <a href="javascript:;">
                                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                    <div class="position-absolute top-0 end-0 p-2 z-index-1">
                                        <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <circle fill="#1F2937" cx="12" cy="12" r="12"></circle>
                                                <g transform="translate(7.000000, 5.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                    <path d="M5,0 C3.16666667,0 1.66666667,1.5 1.66666667,3.33333333 L1.66666667,4.58333333 C0.666666667,5.5 0,6.83333333 0,8.33333333 C0,11.0833333 2.25,13.3333333 5,13.3333333 C7.75,13.3333333 10,11.0833333 10,8.33333333 C10,6.83333333 9.33333333,5.5 8.33333333,4.58333333 L8.33333333,3.33333333 C8.33333333,1.5 6.83333333,0 5,0 Z M5.83333333,8.91666667 L5.83333333,10.8333333 L4.16666667,10.8333333 L4.16666667,8.91666667 C3.66666667,8.66666667 3.33333333,8.08333333 3.33333333,7.5 C3.33333333,6.58333333 4.08333333,5.83333333 5,5.83333333 C5.91666667,5.83333333 6.66666667,6.58333333 6.66666667,7.5 C6.66666667,8.08333333 6.33333333,8.66666667 5.83333333,8.91666667 Z M6.66666667,3.66666667 C6.16666667,3.41666667 5.58333333,3.33333333 5,3.33333333 C4.41666667,3.33333333 3.83333333,3.41666667 3.33333333,3.66666667 L3.33333333,3.33333333 C3.33333333,2.41666667 4.08333333,1.66666667 5,1.66666667 C5.91666667,1.66666667 6.66666667,2.41666667 6.66666667,3.33333333 L6.66666667,3.66666667 Z"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <img class="w-100 my-auto opacity-6" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/sections/page-sections/content-sections/content-6.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Pro Element" alt="content sections">
                                </div>
                                <div class="mt-2 ms-2">
                                    <h6 class="mb-0">Content Sections</h6>
                                    <p class="text-secondary text-sm">8 Examples</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-lg-6">
                <div class="col-lg-3">
                    <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
                        <h3>Navigation</h3>
                        <h6 class="text-secondary font-weight-normal pe-3">30+ components that will help go through the pages</h6>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row mt-3">
                        <div class="col-md-4">
                            <a href="./sections/navigation/navbars.html">
                                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                    <img class="w-100 m-auto" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/sections/navigation/navbars/navbar-large.jpg" alt="">
                                </div>
                                <div class="mt-2 ms-2">
                                    <h6 class="mb-0">Navbars</h6>
                                    <p class="text-secondary text-sm">4 Examples</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 mt-md-0 mt-4">
                            <a href="./sections/navigation/nav-tabs.html">
                                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                    <img class="w-100 m-auto" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/sections/navigation/nav-tabs/tab-large.jpg" alt="">
                                </div>
                                <div class="mt-2 ms-2">
                                    <h6 class="mb-0">Nav Tabs</h6>
                                    <p class="text-secondary text-sm">2 Nav Tabs</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 mt-md-0 mt-4">
                            <a href="./sections/navigation/pagination.html">
                                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                    <img class="w-100 m-auto" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/sections/navigation/pagination/pagination-large.jpg" alt="">
                                </div>
                                <div class="mt-2 ms-2">
                                    <h6 class="mb-0">Pagination</h6>
                                    <p class="text-secondary text-sm">3 Examples</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-lg-6">
                <div class="col-lg-3">
                    <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
                        <h3>Input Areas</h3>
                        <h6 class="text-secondary font-weight-normal pe-3">50+ elements that you need for text manipulation and insertion</h6>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row mt-3">
                        <div class="col-md-4">
                            <a href="javascript:;">
                                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                    <div class="position-absolute top-0 end-0 p-2 z-index-1">
                                        <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <circle fill="#1F2937" cx="12" cy="12" r="12"></circle>
                                                <g transform="translate(7.000000, 5.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                    <path d="M5,0 C3.16666667,0 1.66666667,1.5 1.66666667,3.33333333 L1.66666667,4.58333333 C0.666666667,5.5 0,6.83333333 0,8.33333333 C0,11.0833333 2.25,13.3333333 5,13.3333333 C7.75,13.3333333 10,11.0833333 10,8.33333333 C10,6.83333333 9.33333333,5.5 8.33333333,4.58333333 L8.33333333,3.33333333 C8.33333333,1.5 6.83333333,0 5,0 Z M5.83333333,8.91666667 L5.83333333,10.8333333 L4.16666667,10.8333333 L4.16666667,8.91666667 C3.66666667,8.66666667 3.33333333,8.08333333 3.33333333,7.5 C3.33333333,6.58333333 4.08333333,5.83333333 5,5.83333333 C5.91666667,5.83333333 6.66666667,6.58333333 6.66666667,7.5 C6.66666667,8.08333333 6.33333333,8.66666667 5.83333333,8.91666667 Z M6.66666667,3.66666667 C6.16666667,3.41666667 5.58333333,3.33333333 5,3.33333333 C4.41666667,3.33333333 3.83333333,3.41666667 3.33333333,3.66666667 L3.33333333,3.33333333 C3.33333333,2.41666667 4.08333333,1.66666667 5,1.66666667 C5.91666667,1.66666667 6.66666667,2.41666667 6.66666667,3.33333333 L6.66666667,3.66666667 Z"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <img class="w-100 my-auto opacity-6" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/sections/input-areas/newsletters/newsletter-large.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Pro Element" alt="newsletter">
                                </div>
                                <div class="mt-2 ms-2">
                                    <h6 class="mb-0">Newsletters</h6>
                                    <p class="text-secondary text-sm">6 Examples</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 mt-md-0 mt-4">
                            <a href="javascript:;">
                                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                    <div class="position-absolute top-0 end-0 p-2 z-index-1">
                                        <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <circle fill="#1F2937" cx="12" cy="12" r="12"></circle>
                                                <g transform="translate(7.000000, 5.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                    <path d="M5,0 C3.16666667,0 1.66666667,1.5 1.66666667,3.33333333 L1.66666667,4.58333333 C0.666666667,5.5 0,6.83333333 0,8.33333333 C0,11.0833333 2.25,13.3333333 5,13.3333333 C7.75,13.3333333 10,11.0833333 10,8.33333333 C10,6.83333333 9.33333333,5.5 8.33333333,4.58333333 L8.33333333,3.33333333 C8.33333333,1.5 6.83333333,0 5,0 Z M5.83333333,8.91666667 L5.83333333,10.8333333 L4.16666667,10.8333333 L4.16666667,8.91666667 C3.66666667,8.66666667 3.33333333,8.08333333 3.33333333,7.5 C3.33333333,6.58333333 4.08333333,5.83333333 5,5.83333333 C5.91666667,5.83333333 6.66666667,6.58333333 6.66666667,7.5 C6.66666667,8.08333333 6.33333333,8.66666667 5.83333333,8.91666667 Z M6.66666667,3.66666667 C6.16666667,3.41666667 5.58333333,3.33333333 5,3.33333333 C4.41666667,3.33333333 3.83333333,3.41666667 3.33333333,3.66666667 L3.33333333,3.33333333 C3.33333333,2.41666667 4.08333333,1.66666667 5,1.66666667 C5.91666667,1.66666667 6.66666667,2.41666667 6.66666667,3.33333333 L6.66666667,3.66666667 Z"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <img class="w-100 m-auto opacity-6" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/sections/input-areas/contact-sections/contactus-large.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Pro Element" alt="contact sections">
                                </div>
                                <div class="mt-2 ms-2">
                                    <h6 class="mb-0">Contact Sections</h6>
                                    <p class="text-secondary text-sm">8 Examples</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 mt-md-0 mt-4">
                            <a href="./sections/input-areas/forms.html">
                                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                    <img class="w-100 m-auto" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/sections/input-areas/forms/forms-large.jpg" alt="forms">
                                </div>
                                <div class="mt-2 ms-2">
                                    <h6 class="mb-0">Forms</h6>
                                    <p class="text-secondary text-sm">3 Examples</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-4">
                            <a href="./sections/input-areas/inputs.html">
                                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                    <img class="w-100 my-auto" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/sections/input-areas/inputs/input-large.jpg" alt="">
                                </div>
                                <div class="mt-2 ms-2">
                                    <h6 class="mb-0">Inputs</h6>
                                    <p class="text-secondary text-sm">6 Examples</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-lg-6">
                <div class="col-lg-3">
                    <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
                        <h3>Attention Catchers</h3>
                        <h6 class="text-secondary font-weight-normal pe-3">20+ Fully coded components that popup from different places of the screen</h6>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row mt-3">
                        <div class="col-md-4">
                            <a href="./sections/attention-catchers/alerts.html">
                                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                    <img class="w-100 my-auto" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/sections/attention-catchers/alerts/alert-large.jpg" alt="">
                                </div>
                                <div class="mt-2 ms-2">
                                    <h6 class="mb-0">Alerts</h6>
                                    <p class="text-secondary text-sm">4 Examples</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 mt-md-0 mt-4">
                            <a href="javascript:;">
                                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                    <div class="position-absolute top-0 end-0 p-2 z-index-1">
                                        <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <circle fill="#1F2937" cx="12" cy="12" r="12"></circle>
                                                <g transform="translate(7.000000, 5.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                    <path d="M5,0 C3.16666667,0 1.66666667,1.5 1.66666667,3.33333333 L1.66666667,4.58333333 C0.666666667,5.5 0,6.83333333 0,8.33333333 C0,11.0833333 2.25,13.3333333 5,13.3333333 C7.75,13.3333333 10,11.0833333 10,8.33333333 C10,6.83333333 9.33333333,5.5 8.33333333,4.58333333 L8.33333333,3.33333333 C8.33333333,1.5 6.83333333,0 5,0 Z M5.83333333,8.91666667 L5.83333333,10.8333333 L4.16666667,10.8333333 L4.16666667,8.91666667 C3.66666667,8.66666667 3.33333333,8.08333333 3.33333333,7.5 C3.33333333,6.58333333 4.08333333,5.83333333 5,5.83333333 C5.91666667,5.83333333 6.66666667,6.58333333 6.66666667,7.5 C6.66666667,8.08333333 6.33333333,8.66666667 5.83333333,8.91666667 Z M6.66666667,3.66666667 C6.16666667,3.41666667 5.58333333,3.33333333 5,3.33333333 C4.41666667,3.33333333 3.83333333,3.41666667 3.33333333,3.66666667 L3.33333333,3.33333333 C3.33333333,2.41666667 4.08333333,1.66666667 5,1.66666667 C5.91666667,1.66666667 6.66666667,2.41666667 6.66666667,3.33333333 L6.66666667,3.66666667 Z"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <img class="w-100 my-auto opacity-6" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/sections/attention-catchers/notifications/toast-large.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Pro Element" alt="notifications">
                                </div>
                                <div class="mt-2 ms-2">
                                    <h6 class="mb-0">Notifications</h6>
                                    <p class="text-secondary text-sm">3 Examples</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 mt-md-0 mt-4">
                            <a href="./sections/attention-catchers/tooltips-popovers.html">
                                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                    <img class="w-100 my-auto" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/sections/attention-catchers/tooltips-popovers/popover-large.jpg" alt="">
                                </div>
                                <div class="mt-2 ms-2">
                                    <h6 class="mb-0">Tooltips & Popovers</h6>
                                    <p class="text-secondary text-sm">2 Examples</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-4 mt-md-0 mt-3">
                            <a href="./sections/attention-catchers/modals.html">
                                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                    <img class="w-100 my-auto" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/sections/attention-catchers/modals/modal-large.jpg" alt="">
                                </div>
                                <div class="mt-2 ms-2">
                                    <h6 class="mb-0">Modals</h6>
                                    <p class="text-secondary text-sm">5 Examples</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
                        <h3>Elements</h3>
                        <h6 class="text-secondary font-weight-normal pe-3">80+ carefully crafted small elements that come with multiple colors and shapes</h6>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row mt-3">
                        <div class="col-md-4">
                            <a href="./sections/elements/buttons.html">
                                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                    <img class="w-100 my-auto" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/sections/elements/buttons/button-large.jpg" alt="">
                                </div>
                                <div class="mt-2 ms-2">
                                    <h6 class="mb-0">Buttons</h6>
                                    <p class="text-secondary text-sm">6 Examples</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 mt-md-0 mt-4">
                            <a href="./sections/elements/avatars.html">
                                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                    <img class="w-100 my-auto" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/sections/elements/avatars/avatar-large.jpg" alt="avatars">
                                </div>
                                <div class="mt-2 ms-2">
                                    <h6 class="mb-0">Avatars</h6>
                                    <p class="text-secondary text-sm">2 Examples</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 mt-md-0 mt-4">
                            <a href="./sections/elements/dropdowns.html">
                                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                    <img class="w-100 my-auto" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/sections/elements/dropdowns/dropdown-large.jpg" alt="">
                                </div>
                                <div class="mt-2 ms-2">
                                    <h6 class="mb-0">Dropdowns</h6>
                                    <p class="text-secondary text-sm">2 Examples</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-4">
                            <a href="./sections/elements/toggles.html">
                                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                    <img class="w-100 my-auto" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/sections/elements/toggles/toggle-large.jpg" alt="toggles">
                                </div>
                                <div class="mt-2 ms-2">
                                    <h6 class="mb-0">Toggles</h6>
                                    <p class="text-secondary text-sm">2 Examples</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 mt-md-0 mt-4">
                            <a href="javascript:;">
                                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                    <div class="position-absolute top-0 end-0 p-2 z-index-1">
                                        <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <circle fill="#1F2937" cx="12" cy="12" r="12"></circle>
                                                <g transform="translate(7.000000, 5.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                    <path d="M5,0 C3.16666667,0 1.66666667,1.5 1.66666667,3.33333333 L1.66666667,4.58333333 C0.666666667,5.5 0,6.83333333 0,8.33333333 C0,11.0833333 2.25,13.3333333 5,13.3333333 C7.75,13.3333333 10,11.0833333 10,8.33333333 C10,6.83333333 9.33333333,5.5 8.33333333,4.58333333 L8.33333333,3.33333333 C8.33333333,1.5 6.83333333,0 5,0 Z M5.83333333,8.91666667 L5.83333333,10.8333333 L4.16666667,10.8333333 L4.16666667,8.91666667 C3.66666667,8.66666667 3.33333333,8.08333333 3.33333333,7.5 C3.33333333,6.58333333 4.08333333,5.83333333 5,5.83333333 C5.91666667,5.83333333 6.66666667,6.58333333 6.66666667,7.5 C6.66666667,8.08333333 6.33333333,8.66666667 5.83333333,8.91666667 Z M6.66666667,3.66666667 C6.16666667,3.41666667 5.58333333,3.33333333 5,3.33333333 C4.41666667,3.33333333 3.83333333,3.41666667 3.33333333,3.66666667 L3.33333333,3.33333333 C3.33333333,2.41666667 4.08333333,1.66666667 5,1.66666667 C5.91666667,1.66666667 6.66666667,2.41666667 6.66666667,3.33333333 L6.66666667,3.66666667 Z"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <img class="w-100 my-auto opacity-6" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/sections/elements/social-buttons/social-btn-large.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Pro Element" alt="social buttons">
                                </div>
                                <div class="mt-2 ms-2">
                                    <h6 class="mb-0">Social Buttons</h6>
                                    <p class="text-secondary text-sm">2 Examples</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 mt-md-0 mt-4">
                            <a href="javascript:;">
                                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                    <div class="position-absolute top-0 end-0 p-2 z-index-1">
                                        <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <circle fill="#1F2937" cx="12" cy="12" r="12"></circle>
                                                <g transform="translate(7.000000, 5.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                    <path d="M5,0 C3.16666667,0 1.66666667,1.5 1.66666667,3.33333333 L1.66666667,4.58333333 C0.666666667,5.5 0,6.83333333 0,8.33333333 C0,11.0833333 2.25,13.3333333 5,13.3333333 C7.75,13.3333333 10,11.0833333 10,8.33333333 C10,6.83333333 9.33333333,5.5 8.33333333,4.58333333 L8.33333333,3.33333333 C8.33333333,1.5 6.83333333,0 5,0 Z M5.83333333,8.91666667 L5.83333333,10.8333333 L4.16666667,10.8333333 L4.16666667,8.91666667 C3.66666667,8.66666667 3.33333333,8.08333333 3.33333333,7.5 C3.33333333,6.58333333 4.08333333,5.83333333 5,5.83333333 C5.91666667,5.83333333 6.66666667,6.58333333 6.66666667,7.5 C6.66666667,8.08333333 6.33333333,8.66666667 5.83333333,8.91666667 Z M6.66666667,3.66666667 C6.16666667,3.41666667 5.58333333,3.33333333 5,3.33333333 C4.41666667,3.33333333 3.83333333,3.41666667 3.33333333,3.66666667 L3.33333333,3.33333333 C3.33333333,2.41666667 4.08333333,1.66666667 5,1.66666667 C5.91666667,1.66666667 6.66666667,2.41666667 6.66666667,3.33333333 L6.66666667,3.66666667 Z"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <img class="w-100 my-auto opacity-6" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/sections/elements/button-groups/button-groups-large.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Pro Element" alt="button groups">
                                </div>
                                <div class="mt-2 ms-2">
                                    <h6 class="mb-0">Button Groups</h6>
                                    <p class="text-secondary text-sm">5 Examples</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-4 mt-md-0 mt-3">
                            <a href="./sections/elements/breadcrumbs.html">
                                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                    <img class="w-100 my-auto" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/sections/elements/breadcrumbs/breadcrumbs-large.jpg" alt="breadcrumbs">
                                </div>
                                <div class="mt-2 ms-2">
                                    <h6 class="mb-0">Breadcrumbs</h6>
                                    <p class="text-secondary text-sm">1 Example</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 mt-md-0 mt-4">
                            <a href="./sections/elements/badges.html">
                                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                    <img class="w-100 my-auto" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/sections/elements/badges/badge-large.jpg" alt="badges">
                                </div>
                                <div class="mt-2 ms-2">
                                    <h6 class="mb-0">Badges</h6>
                                    <p class="text-secondary text-sm">3 Example</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 mt-md-0 mt-4">
                            <a href="./sections/elements/progress-bars.html">
                                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                    <img class="w-100 my-auto" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/sections/elements/progress-bars/progress-large.jpg" alt="">
                                </div>
                                <div class="mt-2 ms-2">
                                    <h6 class="mb-0">Progress Bars</h6>
                                    <p class="text-secondary text-sm">4 Examples</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-4 mt-md-0 mt-3">
                            <a href="javascript:;">
                                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                    <div class="position-absolute top-0 end-0 p-2 z-index-1">
                                        <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <circle fill="#1F2937" cx="12" cy="12" r="12"></circle>
                                                <g transform="translate(7.000000, 5.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                    <path d="M5,0 C3.16666667,0 1.66666667,1.5 1.66666667,3.33333333 L1.66666667,4.58333333 C0.666666667,5.5 0,6.83333333 0,8.33333333 C0,11.0833333 2.25,13.3333333 5,13.3333333 C7.75,13.3333333 10,11.0833333 10,8.33333333 C10,6.83333333 9.33333333,5.5 8.33333333,4.58333333 L8.33333333,3.33333333 C8.33333333,1.5 6.83333333,0 5,0 Z M5.83333333,8.91666667 L5.83333333,10.8333333 L4.16666667,10.8333333 L4.16666667,8.91666667 C3.66666667,8.66666667 3.33333333,8.08333333 3.33333333,7.5 C3.33333333,6.58333333 4.08333333,5.83333333 5,5.83333333 C5.91666667,5.83333333 6.66666667,6.58333333 6.66666667,7.5 C6.66666667,8.08333333 6.33333333,8.66666667 5.83333333,8.91666667 Z M6.66666667,3.66666667 C6.16666667,3.41666667 5.58333333,3.33333333 5,3.33333333 C4.41666667,3.33333333 3.83333333,3.41666667 3.33333333,3.66666667 L3.33333333,3.33333333 C3.33333333,2.41666667 4.08333333,1.66666667 5,1.66666667 C5.91666667,1.66666667 6.66666667,2.41666667 6.66666667,3.33333333 L6.66666667,3.66666667 Z"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <img class="w-100 my-auto opacity-6" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/sections/elements/tables/table-2.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Pro Element" alt="tables">
                                </div>
                                <div class="mt-2 ms-2">
                                    <h6 class="mb-0">Tables</h6>
                                    <p class="text-secondary text-sm">3 Examples</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 mt-md-0 mt-4">
                            <a href="./sections/elements/typography.html">
                                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                    <img class="w-100 my-auto" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/sections/elements/typography/typography-2.jpg" alt="">
                                </div>
                                <div class="mt-2 ms-2">
                                    <h6 class="mb-0">Typography</h6>
                                    <p class="text-secondary text-sm">2 Examples</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="row text-center my-sm-5 mt-5">
                    <div class="col-lg-6 mx-auto">
                        <h2 class="text-primary text-gradient mb-0">Boost creativity</h2>
                        <h2 class="">With our coded pages</h2>
                        <p class="lead">The easiest way to get started is to use one of our <br /> pre-built example pages. </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-8">
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <a href="./pages/about-us.html">
                                <div class="card move-on-hover">
                                    <img class="w-100" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/section-pages/about-us.jpg" alt="">
                                </div>
                                <div class="mt-2 ms-2">
                                    <h6 class="mb-0">About Us Page</h6>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 mt-md-0 mt-5">
                            <a href="./pages/contact-us.html">
                                <div class="card move-on-hover">
                                    <img class="w-100" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/section-pages/contact-us.jpg" alt="">
                                </div>
                                <div class="mt-2 ms-2">
                                    <h6 class="mb-0">Contact Us Page</h6>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 mt-md-0 mt-6">
                            <a href="./pages/sign-in.html">
                                <div class="card move-on-hover">
                                    <img class="w-100" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/section-account/sign-in.jpg" alt="">
                                </div>
                                <div class="mt-2 ms-2">
                                    <h6 class="mb-0">Sign In Page</h6>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 mt-md-0 mt-6">
                            <a href="./pages/author.html">
                                <div class="card move-on-hover">
                                    <img class="w-100" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/section-pages/author.jpg" alt="">
                                </div>
                                <div class="mt-2 ms-2">
                                    <h6 class="mb-0">Author Page</h6>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mx-auto mt-md-0 mt-5">
                    <div class="position-sticky" style="top:100px !important">
                        <h4 class="">Presentation Pages for Company, Sign In Page, Author and Contact</h4>
                        <h6 class="text-secondary">These is just a small selection of the multiple possibitilies you have. Focus on the business, not on the design.</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- -------- START Content Presentation Docs ------- -->
    <div class="container mt-sm-5">
        <div class="page-header min-vh-50 my-sm-3 mb-3 border-radius-xl" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/desktop.jpg');">
            <span class="mask bg-gradient-dark"></span>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 ms-lg-5">
                        <h4 class="text-white mb-0">Built by developers</h4>
                        <h1 class="text-white">Complex Documentation</h1>
                        <p class="lead text-white opacity-8">From colors, cards, typography to complex elements, you will find the full documentation. Play with the utility classes and you will create unlimited combinations for our components.</p>
                        <a href="https://www.creative-tim.com/learning-lab/bootstrap/license/soft-ui-design-system" class="text-white icon-move-right">
                            Read docs
                            <i class="fas fa-arrow-right text-sm ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="info-horizontal bg-gradient-primary border-radius-xl p-5">
                    <div class="icon">
                        <svg class="text-white" width="25px" height="25px" viewBox="0 0 46 43" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>delivery-fast</title>
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g transform="translate(-2320.000000, -741.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                    <g transform="translate(1716.000000, 291.000000)">
                                        <g id="delivery-fast" transform="translate(604.000000, 450.000000)">
                                            <rect class="color-background" opacity="0.601143973" x="0" y="0" width="17.25" height="3.83333333"></rect>
                                            <rect class="color-background" opacity="0.601143973" x="3.83333333" y="7.66666667" width="13.4166667" height="3.83333333"></rect>
                                            <rect class="color-background" opacity="0.601143973" x="7.66666667" y="15.3333333" width="9.58333333" height="3.83333333"></rect>
                                            <rect class="color-background" opacity="0.601888021" x="11.5" y="23" width="5.75" height="3.83333333"></rect>
                                            <path class="color-foreground" d="M44.9400833,19.3679167 L38.0611667,15.9294167 L36.3591667,9.1195 C36.1464167,8.26466667 35.37975,7.66666667 34.5,7.66666667 L31.3854167,7.66666667 L21.0833333,7.66666667 C21.0833333,7.66666667 21.0833333,31.5310833 21.0833333,32.5833333 C21.0833333,33.6355833 21.1810833,34.5 21.1810833,34.5 C21.6640833,38.801 25.2808333,42.1666667 29.7083333,42.1666667 C34.1358333,42.1666667 37.7525833,38.801 38.2355833,34.5 L44.0833333,34.5 C45.1413333,34.5 46,33.6413333 46,32.5833333 L46,21.0833333 C46,20.3569167 45.5898333,19.69375 44.9400833,19.3679167 Z M29.7083333,38.3333333 C27.0671667,38.3333333 24.9166667,36.18475 24.9166667,33.5416667 C24.9166667,30.8985833 27.0671667,28.75 29.7083333,28.75 C32.3495,28.75 34.5,30.8985833 34.5,33.5416667 C34.5,36.18475 32.3495,38.3333333 29.7083333,38.3333333 Z M24.9166667,17.25 L24.9166667,11.5 L33.2426667,11.5 L34.5,17.25 L24.9166667,17.25 Z"></path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div class="description ps-5">
                        <h5 class="text-white">Getting Started</h5>
                        <p class="text-white">Check the possible ways of working with our product and the necessary files for building your own project.</p>
                        <a href="https://www.creative-tim.com/learning-lab/bootstrap/license/soft-ui-design-system" class="text-white icon-move-right">
                            Let's start
                            <i class="fas fa-arrow-right text-sm ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 px-lg-1 mt-lg-0 mt-4">
                <div class="info-horizontal bg-gray-100 border-radius-xl p-5">
                    <div class="icon">
                        <svg class="text-primary" width="25px" height="25px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>document</title>
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                    <g transform="translate(1716.000000, 291.000000)">
                                        <g transform="translate(154.000000, 300.000000)">
                                            <path class="color-foreground" d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z" opacity="0.603585379"></path>
                                            <path class="color-background" d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z"></path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div class="description ps-5">
                        <h5>Plugins</h5>
                        <p>Get inspiration and have an overview about the plugins that we used to create the Soft UI Design System.</p>
                        <a href="" class="text-primary icon-move-right">
                            Read more
                            <i class="fas fa-arrow-right text-sm ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mt-lg-0 mt-4">
                <div class="info-horizontal bg-gray-100 border-radius-xl p-5">
                    <div class="icon">
                        <svg class="text-primary" width="25px" height="25px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>ungroup</title>
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g transform="translate(-2170.000000, -442.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                    <g transform="translate(1716.000000, 291.000000)">
                                        <g id="ungroup" transform="translate(454.000000, 151.000000)">
                                            <path class="color-background" d="M38.1818182,10.9090909 L32.7272727,10.9090909 L32.7272727,30.9090909 C32.7272727,31.9127273 31.9127273,32.7272727 30.9090909,32.7272727 L10.9090909,32.7272727 L10.9090909,38.1818182 C10.9090909,39.1854545 11.7236364,40 12.7272727,40 L38.1818182,40 C39.1854545,40 40,39.1854545 40,38.1818182 L40,12.7272727 C40,11.7236364 39.1854545,10.9090909 38.1818182,10.9090909 Z"></path>
                                            <path class="color-foreground" d="M27.2727273,29.0909091 L1.81818182,29.0909091 C0.812727273,29.0909091 0,28.2781818 0,27.2727273 L0,1.81818182 C0,0.814545455 0.812727273,0 1.81818182,0 L27.2727273,0 C28.2781818,0 29.0909091,0.814545455 29.0909091,1.81818182 L29.0909091,27.2727273 C29.0909091,28.2781818 28.2781818,29.0909091 27.2727273,29.0909091 Z"></path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div class="description ps-5">
                        <h5>Utility Classes</h5>
                        <p>Soft UI Design System is giving you a lot of pre-made elements. For those who want flexibility, we included many utility classes.</p>
                        <a href="" class="text-primary icon-move-right">
                            Read more
                            <i class="fas fa-arrow-right text-sm ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- -------- END Content Presentation Docs ------- -->
    <section class="py-7">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto text-center">
                    <h2 class="mb-0">Trusted by over</h2>
                    <h2 class="text-gradient text-primary mb-3">1,435,000 web developers</h2>
                    <p class="lead">Many Fortune 500 companies, startups, universities and governmental institutions love Creative Tim's products. </p>
                </div>
            </div>
            <div class="row mt-6">
                <div class="col-lg-4 col-md-8">
                    <div class="card card-plain">
                        <div class="card-body">
                            <div class="author">
                                <div class="name">
                                    <h6 class="mb-0 font-weight-bolder">Nick Willever</h6>
                                    <div class="stats">
                                        <i class="far fa-clock"></i> 1 day ago
                                    </div>
                                </div>
                            </div>
                            <p class="mt-4">"This is an excellent product, the documentation is excellent and helped me get things done more efficiently."</p>
                            <div class="rating mt-3">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 ms-md-auto">
                    <div class="card bg-gradient-primary">
                        <div class="card-body">
                            <div class="author align-items-center">
                                <div class="name">
                                    <h6 class="text-white mb-0 font-weight-bolder">Shailesh Kushwaha</h6>
                                    <div class="stats text-white">
                                        <i class="far fa-clock"></i> 1 week ago
                                    </div>
                                </div>
                            </div>
                            <p class="mt-4 text-white">"I found solution to all my design needs from Creative Tim. I use them as a freelancer in my hobby projects for fun! And its really affordable, very humble guys !!!"</p>
                            <div class="rating mt-3">
                                <i class="fas fa-star text-white"></i>
                                <i class="fas fa-star text-white"></i>
                                <i class="fas fa-star text-white"></i>
                                <i class="fas fa-star text-white"></i>
                                <i class="fas fa-star text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8">
                    <div class="card card-plain">
                        <div class="card-body">
                            <div class="author">
                                <div class="name">
                                    <h6 class="mb-0 font-weight-bolder">Samuel Kamuli</h6>
                                    <div class="stats">
                                        <i class="far fa-clock"></i> 3 weeks ago
                                    </div>
                                </div>
                            </div>
                            <p class="mt-4">"Great product. Helped me cut the time to set up a site. I used the components within instead of starting from scratch. I highly recommend for developers who want to spend more time on the backend!."</p>
                            <div class="rating mt-3">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="horizontal dark my-5">
            <div class="row">
                <div class="col-lg-2 col-md-4 col-6 ms-auto">
                    <img class="w-100 opacity-6" src="<?= base_url('assets_customers/img/logos/gray-logos/logo-apple.svg'); ?>" alt="Logo">
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <img class="w-100 opacity-6" src="<?= base_url('assets_customers/img/logos/gray-logos/logo-facebook.svg'); ?>" alt="Logo">
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <img class="w-100 opacity-6" src="<?= base_url('assets_customers/img/logos/gray-logos/logo-nasa.svg'); ?>" alt="Logo">
                </div>
                <div class="col-lg-2 col-md-4 col-6 ms-lg-0 ms-md-auto">
                    <img class="w-100 opacity-6" src="<?= base_url('assets_customers/img/logos/gray-logos/logo-vodafone.svg'); ?>" alt="Logo">
                </div>
                <div class="col-lg-2 col-md-4 col-6 me-md-auto mx-md-0 mx-auto">
                    <img class="w-100 opacity-6" src="<?= base_url('assets_customers/img/logos/gray-logos/logo-digitalocean.svg'); ?>" alt="Logo">
                </div>
            </div>
        </div>
    </section>
    <section class="py-sm-7" id="download-soft-ui">
        <div class="bg-gradient-dark position-relative m-3 border-radius-xl overflow-hidden">
            <img src="<?= base_url('assets_customers/img/shapes/waves-white.svg'); ?>" alt="pattern-lines" class="position-absolute start-0 top-md-0 w-100 opacity-6">
            <div class="container py-7 postion-relative z-index-2 position-relative">
                <div class="row">
                    <div class="col-md-7 mx-auto text-center">
                        <h3 class="text-white mb-0">Do you love this awesome</h3>
                        <h3 class="text-primary text-gradient mb-4">Design System for Bootstrap 5?</h3>
                        <p class="text-white mb-5">Cause if you do, it can be yours for FREE. Hit the button below to navigate to Creative Tim where you can find the Design System in HTML. Start a new project or give an old Bootstrap project a new look!</p>
                        <a href="https://www.creative-tim.com/product/soft-ui-design-system" class="btn btn-primary btn-lg mb-3 mb-sm-0">Download HTML</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-6 mx-auto">
                    <div class="text-center">
                        <h3 class="mt-5 mb-4">Available on these technologies</h3>
                        <div class="row justify-content-center">
                            <div class="col-lg-2 col-4">
                                <a href="https://www.creative-tim.com/product/soft-ui-design-system" target="_blank">
                                    <img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/logos/bootstrap5.jpg" class="img-fluid" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Bootstrap 5 - Most popular front-end component library">
                                </a>
                            </div>
                            <div class="col-lg-2 col-4">
                                <a href="javascript:;">
                                    <img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/logos/icon-tailwind.jpg" class="img-fluid opacity-6" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Comming soon">
                                </a>
                            </div>
                            <div class="col-lg-2 col-4">
                                <a href="javascript:;">
                                    <img src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/vue.jpg" class="img-fluid opacity-6" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Comming soon">
                                </a>
                            </div>
                            <div class="col-lg-2 col-4">
                                <a href="javascript:;">
                                    <img src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/angular.jpg" class="img-fluid opacity-6" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Comming soon">
                                </a>
                            </div>
                            <div class="col-lg-2 col-4">
                                <a href="javascript:;">
                                    <img src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/react.jpg" class="img-fluid opacity-6" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Comming soon">
                                </a>
                            </div>
                            <div class="col-lg-2 col-4">
                                <a href="javascript:;" target="_blank">
                                    <img src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/sketch.jpg" class="img-fluid opacity-6" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Comming soon">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-12 my-auto">
                    <h3 class="text-gradient text-primary mb-0">You liked it and</h3>
                    <h3>Want more?</h3>
                    <p class="pe-md-5 mb-4">
                        Most complex and innovative Design System Made by <a href="https://creative-tim.com/" target="_blank">Creative Tim </a> . Check our latest Premium Bootstrap 5 UI Kit.
                        Designed for those who like bold elements and beautiful websites. Made of hundred of elements, designed blocks and fully coded pages, Soft UI Design System is ready to help you create stunning websites and webapps.
                    </p>
                    <div class="github-buttons">
                        <a href="https://www.creative-tim.com/product/soft-ui-design-system-pro" target="_blank" rel="nofollow" class="btn bg-gradient-primary mb-5 mb-sm-0">Upgrade to Pro</a>
                        <div class="github-button">
                            <span></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-12 my-auto">
                    <a href="https://www.creative-tim.com/product/soft-ui-design-system-pro">
                        <img class="w-100 border-radius-lg shadow-lg" src="https://s3.amazonaws.com/creativetim_bucket/products/414/original/opt_sds_thumbnail.png?1612539858" alt="Product Image">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- START Section Content W/ 2 images aside of icon title description -->
    <section class="pt-lg-7 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-8 order-2 order-md-2 order-lg-1">
                    <div class="position-relative ms-lg-5 mb-0 mb-md-7 mb-lg-0 d-none d-md-block d-lg-block d-xl-block h-75">
                        <div class="bg-gradient-primary w-100 h-100 border-radius-xl position-absolute d-lg-block d-none"></div>
                        <img src="<?= base_url('assets_customers/img/curved-images/curved11.jpg'); ?>" class="w-100 border-radius-xl mt-6 ms-lg-5 position-relative z-index-5" alt="">
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 ms-auto order-1 order-md-1 order-lg-1">
                    <div class="p-3 pt-0">
                        <div class="icon icon-shape bg-gradient-primary rounded-circle shadow text-center mb-4">
                            <i class="ni ni-building"></i>
                        </div>
                        <h4 class="text-gradient text-primary mb-0">Special Thanks</h4>
                        <h4 class="mb-4"><a href="https://twitter.com/dnyivn" target="blank" rel="nofollow">3D Images by Danny Ivan</a></h4>
                        <p>We are more than happy to use the great images made by Danny inside Soft UI Design System. They come with a high level of quality and bright colors, fitting perfect with our product's colors.<br><br> Danny is a important designer that is active into the 3D Image space. His war was awarded many times in different categories in Behance, Digital Art or Motion Graphics.</p>
                        <a href="https://www.behance.net/dannyivan" target="blank" rel="nofollow" class="text-dark icon-move-right">Check Danny's work
                            <i class="fas fa-arrow-right text-sm ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END Section Content -->
    <!-- -------   START PRE-FOOTER 2 - simple social line w/ title & 3 buttons    -------- -->
    <div class="pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 ms-auto">
                    <h4 class="mb-1">Thank you for your support!</h4>
                    <p class="lead mb-0">We deliver the best web products</p>
                </div>
                <div class="col-lg-5 me-lg-auto my-lg-auto text-lg-end mt-5">
                    <a href="https://twitter.com/intent/tweet?text=Check%20Soft%20UI%20Design%20System%20made%20by%20%40CreativeTim%20%23webdesign%20%23designsystem%20%23bootstrap5&url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-design-system" class="btn btn-info mb-0 me-2" target="_blank">
                        <i class="fab fa-twitter me-1"></i> Tweet
                    </a>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/soft-ui-design-system" class="btn btn-primary mb-0 me-2" target="_blank">
                        <i class="fab fa-facebook-square me-1"></i> Share
                    </a>
                    <a href="https://www.pinterest.com/pin/create/button/?url=https://www.creative-tim.com/product/soft-ui-design-system" class="btn btn-dark mb-0 me-2" target="_blank">
                        <i class="fab fa-pinterest me-1"></i> Pin it
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- -------   END PRE-FOOTER 2 - simple social line w/ title & 3 buttons    -------- -->
    <footer class="footer pt-5 mt-5">
        <hr class="horizontal dark mb-5">
        <div class="container">
            <div class=" row">
                <div class="col-md-3 mb-4 ms-auto">
                    <div>
                        <h6 class="text-gradient text-primary font-weight-bolder">Soft UI Design System</h6>
                    </div>
                    <div>
                        <h6 class="mt-3 mb-2 opacity-8">Social</h6>
                        <ul class="d-flex flex-row ms-n3 nav">
                            <li class="nav-item">
                                <a class="nav-link pe-1" href="https://www.facebook.com/CreativeTim/" target="_blank">
                                    <i class="fab fa-facebook text-lg opacity-8"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pe-1" href="https://twitter.com/creativetim" target="_blank">
                                    <i class="fab fa-twitter text-lg opacity-8"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pe-1" href="https://dribbble.com/creativetim" target="_blank">
                                    <i class="fab fa-dribbble text-lg opacity-8"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pe-1" href="https://github.com/creativetimofficial" target="_blank">
                                    <i class="fab fa-github text-lg opacity-8"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pe-1" href="https://www.youtube.com/channel/UCVyTG4sCw-rOvB9oHkzZD1w" target="_blank">
                                    <i class="fab fa-youtube text-lg opacity-8"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 col-6 mb-4">
                    <div>
                        <h6 class="text-gradient text-primary text-sm">Company</h6>
                        <ul class="flex-column ms-n3 nav">
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.creative-tim.com/presentation" target="_blank">
                                    About Us
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.creative-tim.com/templates/free" target="_blank">
                                    Freebies
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.creative-tim.com/templates/premium" target="_blank">
                                    Premium Tools
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.creative-tim.com/blog" target="_blank">
                                    Blog
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 col-6 mb-4">
                    <div>
                        <h6 class="text-gradient text-primary text-sm">Resources</h6>
                        <ul class="flex-column ms-n3 nav">
                            <li class="nav-item">
                                <a class="nav-link" href="https://iradesign.io/" target="_blank">
                                    Illustrations
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.creative-tim.com/bits" target="_blank">
                                    Bits & Snippets
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.creative-tim.com/affiliates/new" target="_blank">
                                    Affiliate Program
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 col-6 mb-4">
                    <div>
                        <h6 class="text-gradient text-primary text-sm">Help & Support</h6>
                        <ul class="flex-column ms-n3 nav">
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.creative-tim.com/contact-us" target="_blank">
                                    Contact Us
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.creative-tim.com/knowledge-center" target="_blank">
                                    Knowledge Center
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://services.creative-tim.com/?ref=ct-soft-ui-footer" target="_blank">
                                    Custom Development
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.creative-tim.com/sponsorships" target="_blank">
                                    Sponsorships
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 col-6 mb-4 me-auto">
                    <div>
                        <h6 class="text-gradient text-primary text-sm">Legal</h6>
                        <ul class="flex-column ms-n3 nav">
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.creative-tim.com/terms" target="_blank">
                                    Terms &amp; Conditions
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.creative-tim.com/privacy" target="_blank">
                                    Privacy Policy
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.creative-tim.com/license" target="_blank">
                                    Licenses (EULA)
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12">
                    <div class="text-center">
                        <p class="my-4 text-sm">
                            All rights reserved. Copyright © <script>
                                document.write(new Date().getFullYear())
                            </script> Soft UI Design System by <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <?= $this->include('layouts/customer/home/script'); ?>
    <script type="text/javascript">
        if (document.getElementById('state1')) {
            const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
            if (!countUp.error) {
                countUp.start();
            } else {
                console.error(countUp.error);
            }
        }
        if (document.getElementById('state2')) {
            const countUp1 = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
            if (!countUp1.error) {
                countUp1.start();
            } else {
                console.error(countUp1.error);
            }
        }
        if (document.getElementById('state3')) {
            const countUp2 = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
            if (!countUp2.error) {
                countUp2.start();
            } else {
                console.error(countUp2.error);
            };
        }
    </script>
</body>

</html>