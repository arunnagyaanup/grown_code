<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

include "inc/theme-custom-functions.php";

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

// END ENQUEUE PARENT ACTION

function myDashboardLinks(){
	$html = '';
	$html .= '<div class="collapse navbar-collapse" id="navbarContainerNavDropdown">
              <ul class="navbar-nav">
                <!-- Dashboards -->
                <li class="hs-has-sub-menu nav-item">
                  <a id="dashboardsMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle active" href="#" role="button"><i class="bi-house-door dropdown-item-icon"></i> Dashboards</a>

                  <!-- Mega Menu -->
                  <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="dashboardsMegaMenu" style="min-width: 14rem;">
                    <a class="dropdown-item active" href="dashboard-wp">Default</a>
                    <a class="dropdown-item " href="dashboard-wp/dashboard-alternative">Alternative</a>
                  </div>
                  <!-- End Mega Menu -->
                </li>
                <!-- End Dashboards -->

                <!-- Pages -->
                <li class="hs-has-sub-menu nav-item">
                  <a id="pagesMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle " href="#" role="button"><i class="bi-files-alt dropdown-item-icon"></i> Pages</a>

                  <!-- Mega Menu -->
                  <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="pagesMegaMenu" style="min-width: 14rem;">
                    <!-- Users -->
                    <div class="hs-has-sub-menu nav-item">
                      <a id="usersMegaMenu" class="hs-mega-menu-invoker dropdown-item dropdown-toggle " href="#" role="button">Users</a>

                      <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="usersMegaMenu" style="min-width: 14rem;">
                        <a class="dropdown-item " href="dashboard-wp/users">Overview</a>
                        <a class="dropdown-item " href="dashboard-wp/users-leaderboard">Leaderboard</a>
                        <a class="dropdown-item " href="dashboard-wp/users-add-user">Add User <span class="badge bg-info rounded-pill ms-1">Hot</span></a>
                      </div>
                    </div>
                    <!-- End Users -->

                    <!-- User Profile -->
                    <div class="hs-has-sub-menu nav-item">
                      <a id="userProfileMegaMenu" class="hs-mega-menu-invoker dropdown-item dropdown-toggle " href="#" role="button">User Profile <span class="badge bg-primary rounded-pill ms-1">5</span></a>

                      <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="userProfileMegaMenu" style="min-width: 14rem;">
                        <a class="dropdown-item " href="dashboard-wp/user-profile">Profile</a>
                        <a class="dropdown-item " href="dashboard-wp/user-profile-teams">Teams</a>
                        <a class="dropdown-item " href="dashboard-wp/user-profile-projects">Projects</a>
                        <a class="dropdown-item " href="dashboard-wp/dashboard-wp/user-profile-connections">Connections</a>
                        <a class="dropdown-item " href="dashboard-wp/user-profile-my-profile">My Profile</a>
                      </div>
                    </div>
                    <!-- End User Profile -->

                    <!-- Account -->
                    <div class="hs-has-sub-menu nav-item">
                      <a id="accountMegaMenu" class="hs-mega-menu-invoker dropdown-item dropdown-toggle " href="#" role="button">Account</a>

                      <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="accountMegaMenu" style="min-width: 14rem;">
                        <a class="dropdown-item " href="dashboard-wp/account-settings">Settings</a>
                        <a class="dropdown-item " href="dashboard-wp/account-billing">Billing</a>
                        <a class="dropdown-item " href="dashboard-wp/account-invoice">Invoice</a>
                      </div>
                    </div>
                    <!-- End Account -->

                    <!-- E-commerce -->
                    <div class="hs-has-sub-menu nav-item">
                      <a id="ecommerceMegaMenu" class="hs-mega-menu-invoker dropdown-item dropdown-toggle " href="#" role="button">E-commerce</a>

                      <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="ecommerceMegaMenu" style="min-width: 14rem;">
                        <a class="dropdown-item " href="dashboard-wp/ecommerce">Overview</a>

                        <!-- Products -->
                        <div class="hs-has-sub-menu nav-item">
                          <a id="productsMegaMenu" class="hs-mega-menu-invoker dropdown-item dropdown-toggle " href="#" role="button">Products</a>

                          <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="productsMegaMenu" style="min-width: 14rem;">
                            <a class="dropdown-item " href="dashboard-wp/ecommerce-products">Products</a>
                            <a class="dropdown-item " href="dashboard-wp/ecommerce-product-details">Product Details</a>
                            <a class="dropdown-item " href="dashboard-wp/ecommerce-add-product">Add Product</a>
                          </div>
                        </div>
                        <!-- End Products -->

                        <!-- Products -->
                        <div class="hs-has-sub-menu nav-item">
                          <a id="ordersMegaMenu" class="hs-mega-menu-invoker dropdown-item dropdown-toggle " href="#" role="button">Orders</a>

                          <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="ordersMegaMenu" style="min-width: 14rem;">
                            <a class="dropdown-item " href="dashboard-wp/courses-orders">Orders</a>
                            <a class="dropdown-item " href="dashboard-wp/course-order-details">Order Details</a>
                          </div>
                        </div>
                        <!-- End Products -->

                        <!-- Customers -->
                        <div class="hs-has-sub-menu nav-item">
                          <a id="customersMegaMenu" class="hs-mega-menu-invoker dropdown-item dropdown-toggle " href="#" role="button">Customers</a>

                          <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="customersMegaMenu" style="min-width: 14rem;">
                            <a class="dropdown-item " href="dashboard-wp/ecommerce-customers">Customers</a>
                            <a class="dropdown-item " href="dashboard-wp/ecommerce-customer-details">Customer Details</a>
                            <a class="dropdown-item " href="dashboard-wp/ecommerce-add-customers">Add Customers</a>
                          </div>
                        </div>
                        <!-- End Customers -->

                        <a class="dropdown-item " href="dashboard-wp/ecommerce-referrals">Referrals</a>
                        <a class="dropdown-item " href="dashboard-wp/ecommerce-manage-reviews">Manage Reviews</a>
                        <a class="dropdown-item " href="dashboard-wp/ecommerce-checkout">Checkout</a>
                      </div>
                    </div>
                    <!-- End E-commerce -->

                    <!-- Projects -->
                    <div class="hs-has-sub-menu nav-item">
                      <a id="projectsMegaMenu" class="hs-mega-menu-invoker dropdown-item dropdown-toggle " href="#" role="button">Projects</a>

                      <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="projectsMegaMenu" style="min-width: 14rem;">
                        <a class="dropdown-item " href="dashboard-wp/projects">Overview</a>
                        <a class="dropdown-item " href="dashboard-wp/projects-timeline">Timeline</a>
                      </div>
                    </div>
                    <!-- End Projects -->

                    <!-- Project -->
                    <div class="hs-has-sub-menu nav-item">
                      <a id="projectMegaMenu" class="hs-mega-menu-invoker dropdown-item dropdown-toggle " href="#" role="button">Project</a>

                      <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="projectMegaMenu" style="min-width: 14rem;">
                        <a class="dropdown-item " href="dashboard-wp/project">Overview</a>
                        <a class="dropdown-item " href="dashboard-wp/project-files">Files</a>
                        <a class="dropdown-item " href="dashboard-wp/project-activity">Activity</a>
                        <a class="dropdown-item " href="dashboard-wp/project-teams">Teams</a>
                        <a class="dropdown-item " href="dashboard-wp/project-settings">Settings</a>
                      </div>
                    </div>
                    <!-- End Project -->

                    <!-- Authentication -->
                    <div class="hs-has-sub-menu nav-item">
                      <a id="authenticationMegaMenu" class="hs-mega-menu-invoker dropdown-item dropdown-toggle " href="#" role="button">Authentication</a>

                      <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="authenticationMegaMenu" style="min-width: 14rem;">
                        <!-- Log In -->
                        <div class="hs-has-sub-menu nav-item">
                          <a id="loginMegaMenu" class="hs-mega-menu-invoker dropdown-item dropdown-toggle " href="#" role="button">Log In</a>

                          <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="loginMegaMenu" style="min-width: 14rem;">
                            <a class="dropdown-item " href="dashboard-wp/authentication-login-basic">Basic</a>
                            <a class="dropdown-item " href="dashboard-wp/authentication-login-cover">Cover</a>
                          </div>
                        </div>
                        <!-- End Log In -->

                        <!-- Sign Up -->
                        <div class="hs-has-sub-menu nav-item">
                          <a id="signupMegaMenu" class="hs-mega-menu-invoker dropdown-item dropdown-toggle " href="#" role="button">Sign Up</a>

                          <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="signupMegaMenu" style="min-width: 14rem;">
                            <a class="dropdown-item " href="dashboard-wp/authentication-signup-basic">Basic</a>
                            <a class="dropdown-item " href="dashboard-wp/authentication-signup-cover">Cover</a>
                          </div>
                        </div>
                        <!-- End Sign Up -->

                        <!-- Reset Password -->
                        <div class="hs-has-sub-menu nav-item">
                          <a id="resetPasswordMegaMenu" class="hs-mega-menu-invoker dropdown-item dropdown-toggle " href="#" role="button">Reset Password</a>

                          <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="resetPasswordMegaMenu" style="min-width: 14rem;">
                            <a class="dropdown-item " href="dashboard-wp/authentication-reset-password-basic">Basic</a>
                            <a class="dropdown-item " href="dashboard-wp/authentication-reset-password-cover">Cover</a>
                          </div>
                        </div>
                        <!-- End Reset Password -->

                        <!-- Email Verification -->
                        <div class="hs-has-sub-menu nav-item">
                          <a id="emailVerificationMegaMenu" class="hs-mega-menu-invoker dropdown-item dropdown-toggle " href="#" role="button">Email Verification</a>

                          <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="emailVerificationMegaMenu" style="min-width: 14rem;">
                            <a class="dropdown-item " href="dashboard-wp/authentication-email-verification-basic">Basic</a>
                            <a class="dropdown-item " href="dashboard-wp/authentication-email-verification-cover">Cover</a>
                          </div>
                        </div>
                        <!-- End Email Verification -->

                        <!-- 2-step Verification -->
                        <div class="hs-has-sub-menu nav-item">
                          <a id="2stepVerificationMegaMenu" class="hs-mega-menu-invoker dropdown-item dropdown-toggle " href="#" role="button">2-step Verification</a>

                          <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="2stepVerificationMegaMenu" style="min-width: 14rem;">
                            <a class="dropdown-item " href="dashboard-wp/authentication-2-step-verification-basic">Basic</a>
                            <a class="dropdown-item " href="dashboard-wp/authentication-2-step-verification-cover">Cover</a>
                          </div>
                        </div>
                        <!-- End 2-step Verification -->

                        <a class="dropdown-item" href="javascript:;" data-bs-toggle="modal" data-bs-target="#welcomeMessageModal">Welcome Message</a>
                        <a class="dropdown-item " href="error-404.html">Error 404</a>
                        <a class="dropdown-item " href="error-500.html">Error 500</a>
                      </div>
                    </div>
                    <!-- End Authentication -->

                    <a class="dropdown-item " href="dashboard-wp/api-keys" data-placement="left">API Keys</a>
                    <a class="dropdown-item " href="dashboard-wp/welcome-page" data-placement="left">Welcome Page</a>
                    <a class="dropdown-item " href="dashboard-wp/landing" data-placement="left">Landing Page <span class="badge bg-info rounded-pill ms-1">New</span></a>
                  </div>
                  <!-- End Mega Menu -->
                </li>
                <!-- End Pages -->

                <!-- Apps -->
                <li class="hs-has-sub-menu nav-item">
                  <a id="appsMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle " href="#" role="button"><i class="bi-app-indicator dropdown-item-icon"></i> Apps</a>

                  <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="appsMegaMenu" style="min-width: 14rem;">
                    <a class="dropdown-item " href="dashboard-wp/apps-kanban">Kanban</a>
                    <a class="dropdown-item " href="dashboard-wp/apps-calendar">Calendar</a>
                    <a class="dropdown-item " href="dashboard-wp/apps-invoice-generator">Invoice Generator</a>
                    <a class="dropdown-item " href="dashboard-wp/apps-file-manager">File Manager</a>
                  </div>
                </li>
                <!-- End Apps -->

                <li class="nav-item">
                  <a class="nav-link " href="dashboard-wp/layouts/index">
                    <i class="bi-grid-1x2 dropdown-item-icon"></i> Layouts
                  </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link " href="dashboard-wp/documentation/index" data-placement="left">
                    <i class="bi-book dropdown-item-icon"></i> Docs
                  </a>
                </li>
              </ul>

            </div>';
    return $html;
}

function myDashboardLinksTwo(){
	$html = '';
	$html .= '<div class="navbar-vertical-content">
          <div id="navbarVerticalMenu" class="nav nav-pills nav-vertical card-navbar-nav">
            <!-- Collapse -->
            <div class="nav-item">
              <a class="nav-link dropdown-toggle " href="#navbarVerticalMenuDashboards" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuDashboards" aria-expanded="false" aria-controls="navbarVerticalMenuDashboards">
                <i class="bi-house-door nav-icon"></i>
                <span class="nav-link-title">Dashboards</span>
              </a>

              <div id="navbarVerticalMenuDashboards" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenu">
                <a class="nav-link " href="dashboard-wp">Default</a>
                <a class="nav-link " href="dashboard-wp/dashboard-alternative">Alternative</a>
              </div>
            </div>
            <!-- End Collapse -->

            <span class="dropdown-header mt-4">Pages</span>
            <small class="bi-three-dots nav-subtitle-replacer"></small>

            <!-- Collapse -->
            <div class="navbar-nav nav-compact">

            </div>
            <div id="navbarVerticalMenuPagesMenu">
              <!-- Collapse -->
              <div class="nav-item">
                <a class="nav-link dropdown-toggle " href="#navbarVerticalMenuPagesUsersMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuPagesUsersMenu" aria-expanded="false" aria-controls="navbarVerticalMenuPagesUsersMenu">
                  <i class="bi-people nav-icon"></i>
                  <span class="nav-link-title">Users</span>
                </a>

                <div id="navbarVerticalMenuPagesUsersMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuPagesMenu">
                  <a class="nav-link " href="dashboard-wp/users">Overview</a>
                  <a class="nav-link " href="dashboard-wp/users-leaderboard">Leaderboard</a>
                  <a class="nav-link " href="dashboard-wp/users-add-user">Add User <span class="badge bg-info rounded-pill ms-1">Hot</span></a>
                </div>
              </div>
              <!-- End Collapse -->

              <!-- Collapse -->
              <div class="nav-item">
                <a class="nav-link dropdown-toggle active" href="#navbarVerticalMenuPagesUserProfileMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuPagesUserProfileMenu" aria-expanded="true" aria-controls="navbarVerticalMenuPagesUserProfileMenu">
                  <i class="bi-person nav-icon"></i>
                  <span class="nav-link-title">User Profile <span class="badge bg-primary rounded-pill ms-1">5</span></span>
                </a>

                <div id="navbarVerticalMenuPagesUserProfileMenu" class="nav-collapse collapse show" data-bs-parent="#navbarVerticalMenuPagesMenu">
                  <a class="nav-link " href="dashboard-wp/user-profile">Profile</a>
                  <a class="nav-link active" href="dashboard-wp/user-profile-teams">Teams</a>
                  <a class="nav-link " href="dashboard-wp/user-profile-projects">Projects</a>
                  <a class="nav-link " href="dashboard-wp/user-profile-connections">Connections</a>
                  <a class="nav-link " href="dashboard-wp/user-profile-my-profile">My Profile</a>
                </div>
              </div>
              <!-- End Collapse -->

              <!-- Collapse -->
              <div class="nav-item">
                <a class="nav-link dropdown-toggle " href="#navbarVerticalMenuPagesAccountMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuPagesAccountMenu" aria-expanded="false" aria-controls="navbarVerticalMenuPagesAccountMenu">
                  <i class="bi-person-badge nav-icon"></i>
                  <span class="nav-link-title">Account</span>
                </a>

                <div id="navbarVerticalMenuPagesAccountMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuPagesMenu">
                  <a class="nav-link " href="dashboard-wp/account-settings">Settings</a>
                  <a class="nav-link " href="dashboard-wp/account-billing">Billing</a>
                  <a class="nav-link " href="dashboard-wp/account-invoice">Invoice</a>
                </div>
              </div>
              <!-- End Collapse -->

              <!-- Collapse -->
              <div class="nav-item">
                <a class="nav-link dropdown-toggle " href="#navbarVerticalMenuPagesEcommerceMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuPagesEcommerceMenu" aria-expanded="false" aria-controls="navbarVerticalMenuPagesEcommerceMenu">
                  <i class="bi-basket nav-icon"></i>
                  <span class="nav-link-title">E-commerce</span>
                </a>

                <div id="navbarVerticalMenuPagesEcommerceMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuPagesMenu">
                  <a class="nav-link " href="dashboard-wp/ecommerce">Overview</a>

                  <div id="navbarVerticalMenuPagesMenuEcommerce">
                    <!-- Collapse -->
                    <div class="nav-item">
                      <a class="nav-link dropdown-toggle" href="#navbarVerticalMenuPagesEcommerceProductsMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuPagesEcommerceProductsMenu" aria-expanded="false" aria-controls="navbarVerticalMenuPagesEcommerceProductsMenu">
                        Products
                      </a>

                      <div id="navbarVerticalMenuPagesEcommerceProductsMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuPagesMenuEcommerce">
                        <a class="nav-link " href="dashboard-wp/ecommerce-products">Products</a>
                        <a class="nav-link " href="dashboard-wp/ecommerce-product-details">Product Details</a>
                        <a class="nav-link " href="dashboard-wp/ecommerce-add-product">Add Product</a>
                      </div>
                    </div>
                    <!-- End Collapse -->

                    <!-- Collapse -->
                    <div class="nav-item">
                      <a class="nav-link dropdown-toggle" href="#navbarVerticalMenuPagesEcommerceOrdersMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuPagesEcommerceOrdersMenu" aria-expanded="false" aria-controls="navbarVerticalMenuPagesEcommerceOrdersMenu">
                        Orders
                      </a>

                      <div id="navbarVerticalMenuPagesEcommerceOrdersMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuPagesMenuEcommerce">
                        <a class="nav-link " href="dashboard-wp/courses-orders">Orders</a>
                        <a class="nav-link " href="dashboard-wp/course-order-details">Order Details</a>
                      </div>
                    </div>
                    <!-- End Collapse -->

                    <!-- Collapse -->
                    <div class="nav-item">
                      <a class="nav-link dropdown-toggle" href="#navbarVerticalMenuPagesEcommerceCustomersMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuPagesEcommerceCustomersMenu" aria-expanded="false" aria-controls="navbarVerticalMenuPagesEcommerceCustomersMenu">
                        Customers
                      </a>

                      <div id="navbarVerticalMenuPagesEcommerceCustomersMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuPagesMenuEcommerce">
                        <a class="nav-link " href="dashboard-wp/ecommerce-customers">Customers</a>
                        <a class="nav-link " href="dashboard-wp/ecommerce-customer-details">Customer Details</a>
                        <a class="nav-link " href="dashboard-wp/ecommerce-add-customers">Add Customers</a>
                      </div>
                    </div>
                    <!-- End Collapse -->
                  </div>

                  <a class="nav-link " href="dashboard-wp/ecommerce-referrals">Referrals</a>
                  <a class="nav-link " href="dashboard-wp/ecommerce-manage-reviews">Manage Reviews</a>
                  <a class="nav-link " href="dashboard-wp/ecommerce-checkout">Checkout</a>
                </div>
              </div>
              <!-- End Collapse -->

              <!-- Collapse -->
              <div class="nav-item">
                <a class="nav-link dropdown-toggle " href="#navbarVerticalMenuPagesProjectsMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuPagesProjectsMenu" aria-expanded="false" aria-controls="navbarVerticalMenuPagesProjectsMenu">
                  <i class="bi-stickies nav-icon"></i>
                  <span class="nav-link-title">Projects</span>
                </a>

                <div id="navbarVerticalMenuPagesProjectsMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuPagesMenu">
                  <a class="nav-link " href="dashboard-wp/projects">Overview</a>
                  <a class="nav-link " href="dashboard-wp/projects-timeline">Timeline</a>
                </div>
              </div>
              <!-- End Collapse -->

              <!-- Collapse -->
              <div class="nav-item">
                <a class="nav-link dropdown-toggle " href="#navbarVerticalMenuPagesProjectMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuPagesProjectMenu" aria-expanded="false" aria-controls="navbarVerticalMenuPagesProjectMenu">
                  <i class="bi-briefcase nav-icon"></i>
                  <span class="nav-link-title">Project</span>
                </a>

                <div id="navbarVerticalMenuPagesProjectMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuPagesMenu">
                  <a class="nav-link " href="dashboard-wp/project">Overview</a>
                  <a class="nav-link " href="dashboard-wp/project-files">Files</a>
                  <a class="nav-link " href="dashboard-wp/project-activity">Activity</a>
                  <a class="nav-link " href="dashboard-wp/project-teams">Teams</a>
                  <a class="nav-link " href="dashboard-wp/project-settings">Settings</a>
                </div>
              </div>
              <!-- End Collapse -->

              <!-- Collapse -->
              <div class="nav-item">
                <a class="nav-link dropdown-toggle  collapsed" href="#" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuAuthentication" aria-expanded="false" aria-controls="navbarVerticalMenuAuthentication">
                  <i class="bi-shield-lock nav-icon"></i>
                  <span class="nav-link-title">Authentication</span>
                </a>

                <div id="navbarVerticalMenuAuthentication" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenu">
                  <div id="navbarVerticalMenuAuthenticationMenu">
                    <!-- Collapse -->
                    <div class="nav-item">
                      <a class="nav-link dropdown-toggle " href="#navbarVerticalMenuAuthenticationLoginMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuAuthenticationLoginMenu" aria-expanded="false" aria-controls="navbarVerticalMenuAuthenticationLoginMenu">
                        Log In
                      </a>

                      <div id="navbarVerticalMenuAuthenticationLoginMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuAuthenticationMenu">
                        <a class="nav-link " href="dashboard-wp/authentication-login-basic">Basic</a>
                        <a class="nav-link " href="dashboard-wp/authentication-login-cover">Cover</a>
                      </div>
                    </div>
                    <!-- End Collapse -->

                    <!-- Collapse -->
                    <div class="nav-item">
                      <a class="nav-link dropdown-toggle " href="#navbarVerticalMenuAuthenticationSignupMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuAuthenticationSignupMenu" aria-expanded="false" aria-controls="navbarVerticalMenuAuthenticationSignupMenu">
                        Sign Up
                      </a>

                      <div id="navbarVerticalMenuAuthenticationSignupMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuAuthenticationMenu">
                        <a class="nav-link " href="dashboard-wp/authentication-signup-basic">Basic</a>
                        <a class="nav-link " href="dashboard-wp/authentication-signup-cover">Cover</a>
                      </div>
                    </div>
                    <!-- End Collapse -->

                    <!-- Collapse -->
                    <div class="nav-item">
                      <a class="nav-link dropdown-toggle " href="#navbarVerticalMenuAuthenticationResetPasswordMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuAuthenticationResetPasswordMenu" aria-expanded="false" aria-controls="navbarVerticalMenuAuthenticationResetPasswordMenu">
                        Reset Password
                      </a>

                      <div id="navbarVerticalMenuAuthenticationResetPasswordMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuAuthenticationMenu">
                        <a class="nav-link " href="dashboard-wp/authentication-reset-password-basic">Basic</a>
                        <a class="nav-link " href="dashboard-wp/authentication-reset-password-cover">Cover</a>
                      </div>
                    </div>
                    <!-- End Collapse -->

                    <!-- Collapse -->
                    <div class="nav-item">
                      <a class="nav-link dropdown-toggle " href="#navbarVerticalMenuAuthenticationEmailVerificationMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuAuthenticationEmailVerificationMenu" aria-expanded="false" aria-controls="navbarVerticalMenuAuthenticationEmailVerificationMenu">
                        Email Verification
                      </a>

                      <div id="navbarVerticalMenuAuthenticationEmailVerificationMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuAuthenticationMenu">
                        <a class="nav-link " href="dashboard-wp/authentication-email-verification-basic">Basic</a>
                        <a class="nav-link " href="dashboard-wp/authentication-email-verification-cover">Cover</a>
                      </div>
                    </div>
                    <!-- End Collapse -->

                    <!-- Collapse -->
                    <div class="nav-item">
                      <a class="nav-link dropdown-toggle " href="#navbarVerticalMenuAuthentication2StepVerificationMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuAuthentication2StepVerificationMenu" aria-expanded="false" aria-controls="navbarVerticalMenuAuthentication2StepVerificationMenu">
                        2-step Verification
                      </a>

                      <div id="navbarVerticalMenuAuthentication2StepVerificationMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuAuthenticationMenu">
                        <a class="nav-link " href="dashboard-wp/authentication-2-step-verification-basic">Basic</a>
                        <a class="nav-link " href="dashboard-wp/authentication-2-step-verification-cover">Cover</a>
                      </div>
                    </div>
                    <!-- End Collapse -->

                    <a class="nav-link" href="javascript:;" data-bs-toggle="modal" data-bs-target="#welcomeMessageModal">Welcome Message</a>
                    <a class="nav-link " href="dashboard-wp/error-404">Error 404</a>
                    <a class="nav-link " href="dashboard-wp/error-500">Error 500</a>
                  </div>
                </div>
              </div>
              <!-- End Collapse -->

              <div class="nav-item">
                <a class="nav-link " href="dashboard-wp/api-keys" data-placement="left">
                  <i class="bi-key nav-icon"></i>
                  <span class="nav-link-title">API Keys</span>
                </a>
              </div>

              <div class="nav-item">
                <a class="nav-link " href="dashboard-wp/welcome-page" data-placement="left">
                  <i class="bi-eye nav-icon"></i>
                  <span class="nav-link-title">Welcome Page</span>
                </a>
              </div>

              <div class="nav-item">
                <a class="nav-link " href="dashboard-wp/landing" data-placement="left">
                  <i class="bi-box-seam nav-icon"></i>
                  <span class="nav-link-title">Landing Page <span class="badge bg-info rounded-pill ms-1">New</span></span>
                </a>
              </div>
            </div>
            <!-- End Collapse -->

            <span class="dropdown-header mt-4">Apps</span>
            <small class="bi-three-dots nav-subtitle-replacer"></small>

            <div class="nav-item">
              <a class="nav-link " href="dashboard-wp/apps-kanban" data-placement="left">
                <i class="bi-kanban nav-icon"></i>
                <span class="nav-link-title">Kanban</span>
              </a>
            </div>

            <div class="nav-item">
              <a class="nav-link " href="dashboard-wp/apps-calendar" data-placement="left">
                <i class="bi-calendar-week nav-icon"></i>
                <span class="nav-link-title">Calendar</span>
              </a>
            </div>

            <div class="nav-item">
              <a class="nav-link " href="dashboard-wp/apps-invoice-generator" data-placement="left">
                <i class="bi-receipt nav-icon"></i>
                <span class="nav-link-title">Invoice Generator</span>
              </a>
            </div>

            <div class="nav-item">
              <a class="nav-link " href="dashboard-wp/apps-file-manager" data-placement="left">
                <i class="bi-folder2-open nav-icon"></i>
                <span class="nav-link-title">File Manager</span>
              </a>
            </div>

            <span class="dropdown-header mt-4">Layouts</span>
            <small class="bi-three-dots nav-subtitle-replacer"></small>

            <div class="nav-item">
              <a class="nav-link " href="dashboard-wp/layouts/index" data-placement="left">
                <i class="bi-grid-1x2 nav-icon"></i>
                <span class="nav-link-title">Layouts</span>
              </a>
            </div>

            <span class="dropdown-header mt-4">Documentation</span>
            <small class="bi-three-dots nav-subtitle-replacer"></small>

            <div class="nav-item">
              <a class="nav-link " href="dashboard-wp/documentation/index" data-placement="left">
                <i class="bi-book nav-icon"></i>
                <span class="nav-link-title">Documentation <span class="badge bg-primary rounded-pill ms-1">v2.0</span></span>
              </a>
            </div>

            <div class="nav-item">
              <a class="nav-link " href="dashboard-wp/documentation/typography" data-placement="left">
                <i class="bi-layers nav-icon"></i>
                <span class="nav-link-title">Components</span>
              </a>
            </div>
          </div>

        </div>';
	return $html;
}
function myDashboardRightHeader(){
  $current_user = wp_get_current_user();
  $html = '';
  $html .= '<div class="navbar-nav-wrap-content-end">
        <!-- Navbar -->
        <ul class="navbar-nav">
          <li class="nav-item d-none d-sm-inline-block">
            <!-- Notification -->
            <div class="dropdown">
              <button type="button" class="btn btn-ghost-secondary btn-icon rounded-circle" id="navbarNotificationsDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside" data-bs-dropdown-animation>
                <i class="bi-bell"></i>
                <span class="btn-status btn-sm-status btn-status-danger"></span>
              </button>

              <div class="dropdown-menu dropdown-menu-end dropdown-card navbar-dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="navbarNotificationsDropdown" style="width: 25rem;">
                <!-- Header -->
                <div class="card-header card-header-content-between">
                  <h4 class="card-title mb-0">Notifications</h4>

                  <!-- Unfold -->
                  <div class="dropdown">
                    <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary rounded-circle" id="navbarNotificationsDropdownSettings" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="bi-three-dots-vertical"></i>
                    </button>

                    <div class="dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="navbarNotificationsDropdownSettings">
                      <span class="dropdown-header">Settings</span>
                      <a class="dropdown-item" href="#">
                        <i class="bi-archive dropdown-item-icon"></i> Archive all
                      </a>
                      <a class="dropdown-item" href="#">
                        <i class="bi-check2-all dropdown-item-icon"></i> Mark all as read
                      </a>
                      <a class="dropdown-item" href="#">
                        <i class="bi-toggle-off dropdown-item-icon"></i> Disable notifications
                      </a>
                      <a class="dropdown-item" href="#">
                        <i class="bi-gift dropdown-item-icon"></i> '.htmlentities("What's") .'new?
                      </a>
                      <div class="dropdown-divider"></div>
                      <span class="dropdown-header">Feedback</span>
                      <a class="dropdown-item" href="#">
                        <i class="bi-chat-left-dots dropdown-item-icon"></i> Report
                      </a>
                    </div>
                  </div>
                  <!-- End Unfold -->
                </div>
                <!-- End Header -->

                <!-- Nav -->
                <ul class="nav nav-tabs nav-justified" id="notificationTab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" href="#notificationNavOne" id="notificationNavOne-tab" data-bs-toggle="tab" data-bs-target="#notificationNavOne" role="tab" aria-controls="notificationNavOne" aria-selected="true">Messages (3)</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#notificationNavTwo" id="notificationNavTwo-tab" data-bs-toggle="tab" data-bs-target="#notificationNavTwo" role="tab" aria-controls="notificationNavTwo" aria-selected="false">Archived</a>
                  </li>
                </ul>
                <!-- End Nav -->

                <!-- Body -->
                <div class="card-body-height">
                  <!-- Tab Content -->
                  <div class="tab-content" id="notificationTabContent">
                    <div class="tab-pane fade show active" id="notificationNavOne" role="tabpanel" aria-labelledby="notificationNavOne-tab">
                      <!-- List Group -->
                      <ul class="list-group list-group-flush navbar-card-list-group">
                        <!-- Item -->
                        <li class="list-group-item form-check-select">
                          <div class="row">
                            <div class="col-auto">
                              <div class="d-flex align-items-center">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="notificationCheck1" checked>
                                  <label class="form-check-label" for="notificationCheck1"></label>
                                  <span class="form-check-stretched-bg"></span>
                                </div>
                                <img class="avatar avatar-sm avatar-circle" src="'.get_stylesheet_directory_uri().'/assets/img/160x160/img3.jpg" alt="Image Description">
                              </div>
                            </div>
                            <!-- End Col -->

                            <div class="col ms-n2">
                              <h5 class="mb-1">Brian Warner</h5>
                              <p class="text-body fs-5">changed an issue from "In Progress" to <span class="badge bg-success">Review</span></p>
                            </div>
                            <!-- End Col -->

                            <small class="col-auto text-muted text-cap">2hr</small>
                            <!-- End Col -->
                          </div>
                          <!-- End Row -->

                          <a class="stretched-link" href="#"></a>
                        </li>
                        <!-- End Item -->

                        <!-- Item -->
                        <li class="list-group-item form-check-select">
                          <div class="row">
                            <div class="col-auto">
                              <div class="d-flex align-items-center">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="notificationCheck2" checked>
                                  <label class="form-check-label" for="notificationCheck2"></label>
                                  <span class="form-check-stretched-bg"></span>
                                </div>
                                <div class="avatar avatar-sm avatar-soft-dark avatar-circle">
                                  <span class="avatar-initials">K</span>
                                </div>
                              </div>
                            </div>
                            <!-- End Col -->

                            <div class="col ms-n2">
                              <h5 class="mb-1">Klara Hampton</h5>
                              <p class="text-body fs-5">mentioned you in a comment</p>
                              <blockquote class="blockquote blockquote-sm">
                                Nice work, love! You really nailed it. Keep it up!
                              </blockquote>
                            </div>
                            <!-- End Col -->

                            <small class="col-auto text-muted text-cap">10hr</small>
                            <!-- End Col -->
                          </div>
                          <!-- End Row -->

                          <a class="stretched-link" href="#"></a>
                        </li>
                        <!-- End Item -->

                        <!-- Item -->
                        <li class="list-group-item form-check-select">
                          <div class="row">
                            <div class="col-auto">
                              <div class="d-flex align-items-center">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="notificationCheck3" checked>
                                  <label class="form-check-label" for="notificationCheck3"></label>
                                  <span class="form-check-stretched-bg"></span>
                                </div>
                                <div class="avatar avatar-sm avatar-circle">
                                  <img class="avatar-img" src="'.get_stylesheet_directory_uri().'/assets/img/160x160/img10.jpg" alt="Image Description">
                                </div>
                              </div>
                            </div>
                            <!-- End Col -->

                            <div class="col ms-n2">
                              <h5 class="mb-1">Ruby Walter</h5>
                              <p class="text-body fs-5">joined the Slack group HS Team</p>
                            </div>
                            <!-- End Col -->

                            <small class="col-auto text-muted text-cap">3dy</small>
                            <!-- End Col -->
                          </div>
                          <!-- End Row -->

                          <a class="stretched-link" href="#"></a>
                        </li>
                        <!-- End Item -->

                        <!-- Item -->
                        <li class="list-group-item form-check-select">
                          <div class="row">
                            <div class="col-auto">
                              <div class="d-flex align-items-center">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="notificationCheck4">
                                  <label class="form-check-label" for="notificationCheck4"></label>
                                  <span class="form-check-stretched-bg"></span>
                                </div>
                                <div class="avatar avatar-sm avatar-circle">
                                  <img class="avatar-img" src="'.get_stylesheet_directory_uri().'/assets/svg/brands/google-icon.svg" alt="Image Description">
                                </div>
                              </div>
                            </div>
                            <!-- End Col -->

                            <div class="col ms-n2">
                              <h5 class="mb-1">from Google</h5>
                              <p class="text-body fs-5">Start using forms to capture the information of prospects visiting your Google website</p>
                            </div>
                            <!-- End Col -->

                            <small class="col-auto text-muted text-cap">17dy</small>
                            <!-- End Col -->
                          </div>
                          <!-- End Row -->

                          <a class="stretched-link" href="#"></a>
                        </li>
                        <!-- End Item -->

                        <!-- Item -->
                        <li class="list-group-item form-check-select">
                          <div class="row">
                            <div class="col-auto">
                              <div class="d-flex align-items-center">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="notificationCheck5">
                                  <label class="form-check-label" for="notificationCheck5"></label>
                                  <span class="form-check-stretched-bg"></span>
                                </div>
                                <div class="avatar avatar-sm avatar-circle">
                                  <img class="avatar-img" src="'.get_stylesheet_directory_uri().'/assets/img/160x160/img7.jpg" alt="Image Description">
                                </div>
                              </div>
                            </div>
                            <!-- End Col -->

                            <div class="col ms-n2">
                              <h5 class="mb-1">Sara Villar</h5>
                              <p class="text-body fs-5">completed <i class="bi-journal-bookmark-fill text-primary"></i> FD-7 task</p>
                            </div>
                            <!-- End Col -->

                            <small class="col-auto text-muted text-cap">2mn</small>
                            <!-- End Col -->
                          </div>
                          <!-- End Row -->

                          <a class="stretched-link" href="#"></a>
                        </li>
                        <!-- End Item -->
                      </ul>
                      <!-- End List Group -->
                    </div>

                    <div class="tab-pane fade" id="notificationNavTwo" role="tabpanel" aria-labelledby="notificationNavTwo-tab">
                      <!-- List Group -->
                      <ul class="list-group list-group-flush navbar-card-list-group">
                        <!-- Item -->
                        <li class="list-group-item form-check-select">
                          <div class="row">
                            <div class="col-auto">
                              <div class="d-flex align-items-center">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="notificationCheck6">
                                  <label class="form-check-label" for="notificationCheck6"></label>
                                  <span class="form-check-stretched-bg"></span>
                                </div>
                                <div class="avatar avatar-sm avatar-soft-dark avatar-circle">
                                  <span class="avatar-initials">A</span>
                                </div>
                              </div>
                            </div>
                            <!-- End Col -->

                            <div class="col ms-n2">
                              <h5 class="mb-1">Anne Richard</h5>
                              <p class="text-body fs-5">accepted your invitation to join Notion</p>
                            </div>
                            <!-- End Col -->

                            <small class="col-auto text-muted text-cap">1dy</small>
                            <!-- End Col -->
                          </div>
                          <!-- End Row -->

                          <a class="stretched-link" href="#"></a>
                        </li>
                        <!-- End Item -->

                        <!-- Item -->
                        <li class="list-group-item form-check-select">
                          <div class="row">
                            <div class="col-auto">
                              <div class="d-flex align-items-center">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="notificationCheck7">
                                  <label class="form-check-label" for="notificationCheck7"></label>
                                  <span class="form-check-stretched-bg"></span>
                                </div>
                                <div class="avatar avatar-sm avatar-circle">
                                  <img class="avatar-img" src="'.get_stylesheet_directory_uri().'/assets/img/160x160/img5.jpg" alt="Image Description">
                                </div>
                              </div>
                            </div>
                            <!-- End Col -->

                            <div class="col ms-n2">
                              <h5 class="mb-1">Finch Hoot</h5>
                              <p class="text-body fs-5">left Slack group HS projects</p>
                            </div>
                            <!-- End Col -->

                            <small class="col-auto text-muted text-cap">1dy</small>
                            <!-- End Col -->
                          </div>
                          <!-- End Row -->

                          <a class="stretched-link" href="#"></a>
                        </li>
                        <!-- End Item -->

                        <!-- Item -->
                        <li class="list-group-item form-check-select">
                          <div class="row">
                            <div class="col-auto">
                              <div class="d-flex align-items-center">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="notificationCheck8">
                                  <label class="form-check-label" for="notificationCheck8"></label>
                                  <span class="form-check-stretched-bg"></span>
                                </div>
                                <div class="avatar avatar-sm avatar-dark avatar-circle">
                                  <span class="avatar-initials">HS</span>
                                </div>
                              </div>
                            </div>
                            <!-- End Col -->

                            <div class="col ms-n2">
                              <h5 class="mb-1">Htmlstream</h5>
                              <p class="text-body fs-5">you earned a "Top endorsed" <i class="bi-patch-check-fill text-primary"></i> badge</p>
                            </div>
                            <!-- End Col -->

                            <small class="col-auto text-muted text-cap">6dy</small>
                            <!-- End Col -->
                          </div>
                          <!-- End Row -->

                          <a class="stretched-link" href="#"></a>
                        </li>
                        <!-- End Item -->

                        <!-- Item -->
                        <li class="list-group-item form-check-select">
                          <div class="row">
                            <div class="col-auto">
                              <div class="d-flex align-items-center">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="notificationCheck9">
                                  <label class="form-check-label" for="notificationCheck9"></label>
                                  <span class="form-check-stretched-bg"></span>
                                </div>
                                <div class="avatar avatar-sm avatar-circle">
                                  <img class="avatar-img" src="'.get_stylesheet_directory_uri().'/assets/img/160x160/img8.jpg" alt="Image Description">
                                </div>
                              </div>
                            </div>
                            <!-- End Col -->

                            <div class="col ms-n2">
                              <h5 class="mb-1">Linda Bates</h5>
                              <p class="text-body fs-5">Accepted your connection</p>
                            </div>
                            <!-- End Col -->

                            <small class="col-auto text-muted text-cap">17dy</small>
                            <!-- End Col -->
                          </div>
                          <!-- End Row -->

                          <a class="stretched-link" href="#"></a>
                        </li>
                        <!-- End Item -->

                        <!-- Item -->
                        <li class="list-group-item form-check-select">
                          <div class="row">
                            <div class="col-auto">
                              <div class="d-flex align-items-center">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="notificationCheck10">
                                  <label class="form-check-label" for="notificationCheck10"></label>
                                  <span class="form-check-stretched-bg"></span>
                                </div>
                                <div class="avatar avatar-sm avatar-soft-dark avatar-circle">
                                  <span class="avatar-initials">L</span>
                                </div>
                              </div>
                            </div>
                            <!-- End Col -->

                            <div class="col ms-n2">
                              <h5 class="mb-1">Lewis Clarke</h5>
                              <p class="text-body fs-5">completed <i class="bi-journal-bookmark-fill text-primary"></i> FD-134 task</p>
                            </div>
                            <!-- End Col -->

                            <small class="col-auto text-muted text-cap">2mts</small>
                            <!-- End Col -->
                          </div>
                          <!-- End Row -->

                          <a class="stretched-link" href="#"></a>
                        </li>
                        <!-- End Item -->
                      </ul>
                      <!-- End List Group -->
                    </div>
                  </div>
                  <!-- End Tab Content -->
                </div>
                <!-- End Body -->

                <!-- Card Footer -->
                <a class="card-footer text-center" href="#">
                  View all notifications <i class="bi-chevron-right"></i>
                </a>
                <!-- End Card Footer -->
              </div>
            </div>
            <!-- End Notification -->
          </li>

          <li class="nav-item d-none d-sm-inline-block">
            <!-- Apps -->
            <div class="dropdown">
              <button type="button" class="btn btn-icon btn-ghost-secondary rounded-circle" id="navbarAppsDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-dropdown-animation>
                <i class="bi-app-indicator"></i>
              </button>

              <div class="dropdown-menu dropdown-menu-end dropdown-card navbar-dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="navbarAppsDropdown" style="width: 25rem;">
                <!-- Header -->
                <div class="card-header">
                  <h4 class="card-title">Web apps &amp; services</h4>
                </div>
                <!-- End Header -->

                <!-- Body -->
                <div class="card-body card-body-height">
                  <a class="dropdown-item" href="#">
                    <div class="d-flex align-items-center">
                      <div class="flex-shrink-0">
                        <img class="avatar avatar-xs avatar-4x3" src="'.get_stylesheet_directory_uri().'/assets/svg/brands/atlassian-icon.svg" alt="Image Description">
                      </div>
                      <div class="flex-grow-1 text-truncate ms-3">
                        <h5 class="mb-0">Atlassian</h5>
                        <p class="card-text text-body">Security and control across Cloud</p>
                      </div>
                    </div>
                  </a>

                  <a class="dropdown-item" href="#">
                    <div class="d-flex align-items-center">
                      <div class="flex-shrink-0">
                        <img class="avatar avatar-xs avatar-4x3" src="'.get_stylesheet_directory_uri().'/assets/svg/brands/slack-icon.svg" alt="Image Description">
                      </div>
                      <div class="flex-grow-1 text-truncate ms-3">
                        <h5 class="mb-0">Slack <span class="badge bg-primary rounded-pill text-uppercase ms-1">Try</span></h5>
                        <p class="card-text text-body">Email collaboration software</p>
                      </div>
                    </div>
                  </a>

                  <a class="dropdown-item" href="#">
                    <div class="d-flex align-items-center">
                      <div class="flex-shrink-0">
                        <img class="avatar avatar-xs avatar-4x3" src="'.get_stylesheet_directory_uri().'/assets/svg/brands/google-webdev-icon.svg" alt="Image Description">
                      </div>
                      <div class="flex-grow-1 text-truncate ms-3">
                        <h5 class="mb-0">Google webdev</h5>
                        <p class="card-text text-body">Work involved in developing a website</p>
                      </div>
                    </div>
                  </a>

                  <a class="dropdown-item" href="#">
                    <div class="d-flex align-items-center">
                      <div class="flex-shrink-0">
                        <img class="avatar avatar-xs avatar-4x3" src="'.get_stylesheet_directory_uri().'/assets/svg/brands/frontapp-icon.svg" alt="Image Description">
                      </div>
                      <div class="flex-grow-1 text-truncate ms-3">
                        <h5 class="mb-0">Frontapp</h5>
                        <p class="card-text text-body">The inbox for teams</p>
                      </div>
                    </div>
                  </a>

                  <a class="dropdown-item" href="#">
                    <div class="d-flex align-items-center">
                      <div class="flex-shrink-0">
                        <img class="avatar avatar-xs avatar-4x3" src="'.get_stylesheet_directory_uri().'/assets/svg/illustrations/review-rating-shield.svg" alt="Image Description">
                      </div>
                      <div class="flex-grow-1 text-truncate ms-3">
                        <h5 class="mb-0">HS Support</h5>
                        <p class="card-text text-body">Customer service and support</p>
                      </div>
                    </div>
                  </a>

                  <a class="dropdown-item" href="#">
                    <div class="d-flex align-items-center">
                      <div class="flex-shrink-0">
                        <div class="avatar avatar-sm avatar-soft-dark">
                          <span class="avatar-initials"><i class="bi-grid"></i></span>
                        </div>
                      </div>
                      <div class="flex-grow-1 text-truncate ms-3">
                        <h5 class="mb-0">More Front products</h5>
                        <p class="card-text text-body">Check out more HS products</p>
                      </div>
                    </div>
                  </a>
                </div>
                <!-- End Body -->

                <!-- Footer -->
                <a class="card-footer text-center" href="#">
                  View all apps <i class="bi-chevron-right"></i>
                </a>
                <!-- End Footer -->
              </div>
            </div>
            <!-- End Apps -->
          </li>

          <li class="nav-item d-none d-sm-inline-block">
            <!-- Activity -->
            <button class="btn btn-ghost-secondary btn-icon rounded-circle" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasActivityStream" aria-controls="offcanvasActivityStream">
              <i class="bi-x-diamond"></i>
            </button>
            <!-- Activity -->
          </li>

          <li class="nav-item">
            <!-- Account -->
            <div class="dropdown">
              <a class="navbar-dropdown-account-wrapper" href="javascript:;" id="accountNavbarDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside" data-bs-dropdown-animation>
                <div class="avatar avatar-sm avatar-circle">
                  <img class="avatar-img" src="'.get_stylesheet_directory_uri().'/assets/img/160x160/img6.jpg" alt="Image Description">
                  <span class="avatar-status avatar-sm-status avatar-status-success"></span>
                </div>
              </a>

              <div class="dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless navbar-dropdown-account" aria-labelledby="accountNavbarDropdown" style="width: 16rem;">
                <div class="dropdown-item-text">
                  <div class="d-flex align-items-center">
                    <div class="avatar avatar-sm avatar-circle">
                      <img class="avatar-img" src="'.get_stylesheet_directory_uri().'/assets/img/160x160/img6.jpg" alt="Image Description">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h5 class="mb-0">'.$current_user->display_name.'</h5>
                      <p class="card-text text-body">'.$current_user->user_email.'</p>
                    </div>
                  </div>
                </div>

                <div class="dropdown-divider"></div>

                <!-- Dropdown -->
                <div class="dropdown">
                  <a class="navbar-dropdown-submenu-item dropdown-item dropdown-toggle" href="javascript:;" id="navSubmenuPagesAccountDropdown1" data-bs-toggle="dropdown" aria-expanded="false">Set status</a>

                  <div class="dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless navbar-dropdown-sub-menu" aria-labelledby="navSubmenuPagesAccountDropdown1">
                    <a class="dropdown-item" href="#">
                      <span class="legend-indicator bg-success me-1"></span> Available
                    </a>
                    <a class="dropdown-item" href="#">
                      <span class="legend-indicator bg-danger me-1"></span> Busy
                    </a>
                    <a class="dropdown-item" href="#">
                      <span class="legend-indicator bg-warning me-1"></span> Away
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#"> Reset status
                    </a>
                  </div>
                </div>
                <!-- End Dropdown -->

                <a class="dropdown-item" href="#">Profile &amp; account</a>
                <a class="dropdown-item" href="#">Settings</a>

                <!-- <div class="dropdown-divider"></div> -->

               <!--  <a class="dropdown-item" href="#">
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-sm avatar-dark avatar-circle">
                        <span class="avatar-initials">HS</span>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-2">
                      <h5 class="mb-0">Htmlstream <span class="badge bg-primary rounded-pill text-uppercase ms-1">PRO</span></h5>
                      <span class="card-text">hs.example.com</span>
                    </div>
                  </div>
                </a>

                <div class="dropdown-divider"></div>

                 Dropdown -->
                <!-- <div class="dropdown">
                  <a class="navbar-dropdown-submenu-item dropdown-item dropdown-toggle" href="javascript:;" id="navSubmenuPagesAccountDropdown2" data-bs-toggle="dropdown" aria-expanded="false">Customization</a>

                  <div class="dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless navbar-dropdown-sub-menu" aria-labelledby="navSubmenuPagesAccountDropdown2">
                    <a class="dropdown-item" href="#">
                      Invite people
                    </a>
                    <a class="dropdown-item" href="#">
                      Analytics
                      <i class="bi-box-arrow-in-up-right"></i>
                    </a>
                    <a class="dropdown-item" href="#">
                      Customize Front
                      <i class="bi-box-arrow-in-up-right"></i>
                    </a>
                  </div>
                </div>
                 End Dropdown -->

                <!-- <a class="dropdown-item" href="#">Manage team</a> -->
 
                <!-- <div class="dropdown-divider"></div> --> 

                <a class="dropdown-item" href="'.wp_logout_url( home_url()).'">Sign out</a>
              </div>
            </div>
            <!-- End Account -->
          </li>
        </ul>
        <!-- End Navbar -->
      </div>';
  return $html;
}
function get_courses_paid_orders() {
  global $wpdb;
  $userId = get_current_user_id();
  $sql = "SELECT * FROM `wp_posts` WHERE  `post_author` = $userId  AND `post_status` = 'lp-completed' AND `post_type` = 'lp_order' LIMIT 10";
  $customer_orders = $wpdb->get_results($sql);
  // print_r($customer_orders);die();
  return $customer_orders;
}
 

function getOrderCourse($order_id){
  global $wpdb;
  $sql ="SELECT p.ID AS order_id , c.post_title AS course_title, c.ID AS course_id, it_data.meta_value AS quantity FROM wp_posts AS p LEFT JOIN wp_learnpress_order_items AS li ON p.ID = li.order_id LEFT JOIN wp_posts AS c ON c.ID = li.item_id LEFT JOIN wp_learnpress_order_itemmeta AS it_data ON li.order_item_id = it_data.learnpress_order_item_id WHERE p.ID = $order_id AND it_data.meta_key = '_quantity' ";
  $course = $wpdb->get_row($sql);

 return $course;
}

add_action('wp_ajax_term_change', 'term_change');
add_action('wp_ajax_nopriv_term_change', 'term_change');

function term_change()
{
	update_user_meta(get_current_user_id(),'terms_and_conditions',$_POST['response']);
}

add_action('wp_ajax_member_type', 'member_type');
add_action('wp_ajax_nopriv_member_type', 'member_type');

function member_type()
{
	update_user_meta(get_current_user_id(),'member_type',$_POST['member_type']);
}



add_action('wp_ajax_basic_form', 'basic_form');
add_action('wp_ajax_delete_account_form_action', 'delete_account_form_action');
add_action('wp_ajax_notifications_form_action', 'notifications_form_action');
add_action('wp_ajax_profile_pic_action', 'profile_pic_action');
add_action('wp_ajax_header_pic_action', 'header_pic_action');
add_action('wp_ajax_run_connected', 'run_connected');
add_action('wp_ajax_preferences_form_action', 'preferences_form_action');
add_action('wp_ajax_change_password_form_action', 'change_password_form_action');
add_action('wp_ajax_email_form_action', 'email_form_action');
add_action('wp_ajax_nopriv_change_password_form_action', 'change_password_form_action');
add_action('wp_ajax_nopriv_basic_form', 'basic_form');
add_action('wp_ajax_nopriv_email_form_action', 'email_form_action');
add_action('wp_ajax_nopriv_preferences_form_action', 'preferences_form_action');
add_action('wp_ajax_nopriv_run_connected', 'run_connected');
add_action('wp_ajax_nopriv_profile_pic_action', 'profile_pic_action');
add_action('wp_ajax_nopriv_header_pic_action', 'header_pic_action');
add_action('wp_ajax_nopriv_notifications_form_action', 'notifications_form_action');
add_action('wp_ajax_nopriv_delete_account_form_action', 'delete_account_form_action');

function header_pic_action()
{
	
	
	
	// These files need to be included as dependencies when on the front end.
    require_once( ABSPATH . 'wp-admin/includes/image.php' );
    require_once( ABSPATH . 'wp-admin/includes/file.php' );
    require_once( ABSPATH . 'wp-admin/includes/media.php' );

    // Let WordPress handle the upload.
     $img_id = media_handle_upload( 'file', 0 );
	
	update_user_meta(get_current_user_id(),'header_image',$img_id);
	
	/*$upload_dir = wp_upload_dir();
	$file_temp = $_FILES["header_pic"]["tmp_name"];
	$file_name = $_FILES["header_pic"]["name"];
	$image_data = file_get_contents( $file_temp );
	$filename = basename( $file_name );
	$filetype = wp_check_filetype($file_name);
	$filename = time().'.'.$filetype['ext'];

	if ( wp_mkdir_p( $upload_dir['path'] ) ) {
	  $file = $upload_dir['path'] . '/' . $filename;
	}
	else {
	  $file = $upload_dir['basedir'] . '/' . $filename;
	}

	file_put_contents( $file, $image_data );
	$wp_filetype = wp_check_filetype( $filename, null );
	$attachment = array(
	  'post_mime_type' => $wp_filetype['type'],
	  'post_title' => sanitize_file_name( $filename ),
	  'post_content' => '',
	  'post_status' => 'inherit'
	);

	echo $attach_id = wp_insert_attachment( $attachment, $file );
	require_once( ABSPATH . 'wp-admin/includes/image.php' );
	$attach_data = wp_generate_attachment_metadata( $attach_id, $file );
	wp_update_attachment_metadata( $attach_id, $attach_data );
	
	update_user_meta(get_current_user_id(),'header_image',$attach_id);
	echo get_user_meta(get_current_user_id(),'header_image',true);
	echo 'ajay';
	update_field("header_image", $attach_id, get_current_user_id()); // correct*/
	exit;
}
function delete_account_form_action()
{
	//wp_delete_user(get_current_user_id());
	exit;
}
function notifications_form_action()
{
	update_user_meta(get_current_user_id(),'new_for_you',$_POST['new_for_you']);
	update_user_meta(get_current_user_id(),'account_activity',$_POST['account_activity']);
	update_user_meta(get_current_user_id(),'a_new_browser_used_to_sign_in',$_POST['new_browser']);
	update_user_meta(get_current_user_id(),'a_new_device_is_linked',$_POST['device_linked']);
	update_user_meta(get_current_user_id(),'a_new_device_connected',$_POST['device_connected']);
	update_user_meta(get_current_user_id(),'when_should_we_send_you_notifications',$_POST['when_should_we_send_you_notifications']);
	update_user_meta(get_current_user_id(),'send_me_a_daily_summary_day',$_POST['send_me_a_daily_summary_day']);
	update_user_meta(get_current_user_id(),'send_me_a_daily_summary_time',$_POST['send_me_a_daily_summary_time']);
	exit;
}
function profile_pic_action()
{
	// These files need to be included as dependencies when on the front end.
    require_once( ABSPATH . 'wp-admin/includes/image.php' );
    require_once( ABSPATH . 'wp-admin/includes/file.php' );
    require_once( ABSPATH . 'wp-admin/includes/media.php' );

    // Let WordPress handle the upload.
      $img_id = media_handle_upload( 'file', 0 );
	
	update_user_meta(get_current_user_id(),'profile_pic',$img_id);
	update_user_meta(get_current_user_id(),'avatar',$img_id);
	
	
	exit;
}
function run_connected()
{
	if($_POST['name'] == 'google_con')
	{
		update_user_meta(get_current_user_id(),'google',$_POST['response']);
	}
	if($_POST['name'] == 'selina_con')
	{
		update_user_meta(get_current_user_id(),'selina',$_POST['response']);
	}
	if($_POST['name'] == 'spec_con')
	{
		update_user_meta(get_current_user_id(),'spec',$_POST['response']);
	}
	if($_POST['name'] == 'slack_con')
	{
		update_user_meta(get_current_user_id(),'slack',$_POST['response']);
	}
	if($_POST['name'] == 'mailchimp')
	{
		update_user_meta(get_current_user_id(),'mailchimp',$_POST['response']);
	}
	if($_POST['name'] == 'google_webdev')
	{
		update_user_meta(get_current_user_id(),'google_webdev',$_POST['response']);
	}
	
	exit;
}
function preferences_form_action()
{
	update_user_meta(get_current_user_id(),'language',$_POST['language_option']);
	update_user_meta(get_current_user_id(),'time_zone',$_POST['time_zone']);
	update_user_meta(get_current_user_id(),'early_release',$_POST['early_release']);
	update_user_meta(get_current_user_id(),'who_view_my_profile',$_POST['view_profile']);
	exit;
}
function change_password_form_action()
{
	$user = wp_get_current_user(); //trace($user);
    $x = wp_check_password( $_POST['currentPassword'], $user->user_pass, $user->data->ID );
	if($x)
    {
        
                $udata['ID'] = $user->data->ID;
                $udata['user_pass'] = $_POST['newPassword'];
				
                $uid = wp_update_user( $udata );
                if($uid) 
                {
                    $passupdatemsg = "The password has been updated successfully";
					$res = 1;
                    
                } else {
                    $passupdatemsg = "Sorry! Failed to update your account details.";
                    $passupdatetype = 'errored';
					$res = 2;
                }
            
            
        
        
    } 
    else 
    {
        $passupdatemsg = "Old Password doesn't match the existing password";
        $passupdatetype = 'errored';
		$res = 3;
    }
	echo $res;
exit;
}
function email_form_action()
{
	if($_POST['pre_email2'] != $_POST['email2'])
	{
		if(email_exists($_POST['email2']))
		{
			$res = 2;
		}
		else
		{
			$args = array(
				'ID'         => get_current_user_id(),
				'user_email' => esc_attr( $_POST['email2'] )
			);
			wp_update_user( $args );
		}
	}
	echo $res;
	exit;
}
function basic_form()
{
	
	if($_POST['pre_email'] == $_POST['email'])
	{
		update_user_meta(get_current_user_id(),'first_name',$_POST['firstName']);
		update_user_meta(get_current_user_id(),'last_name',$_POST['lastName']);
		update_user_meta(get_current_user_id(),'selina_id',$_POST['selina_id']);
		update_user_meta(get_current_user_id(),'phone',$_POST['phone']);
		update_user_meta(get_current_user_id(),'organization',$_POST['organization']);
		update_user_meta(get_current_user_id(),'department',$_POST['department']);
		update_user_meta(get_current_user_id(),'account_type',$_POST['userAccountTypeRadio']);
		update_user_meta(get_current_user_id(),'default_location',$_POST['default_location']);
		update_user_meta(get_current_user_id(),'country',$_POST['country']);
		update_user_meta(get_current_user_id(),'city',$_POST['city']);
		update_user_meta(get_current_user_id(),'state',$_POST['state']);
		update_user_meta(get_current_user_id(),'address_line_1',$_POST['addressLine1']);
		update_user_meta(get_current_user_id(),'address_line_2',$_POST['addressLine2']);
		update_user_meta(get_current_user_id(),'zip_code',$_POST['zipCode']);
		update_user_meta(get_current_user_id(),'disable_ads',$_POST['disable_ads']);
	}
	else
	{
		if(email_exists($_POST['email']))
		{
			$res = 2;
		}
		else
		{
			$args = array(
				'ID'         => get_current_user_id(),
				'user_email' => esc_attr( $_POST['email'] )
			);
			wp_update_user( $args );
			update_user_meta(get_current_user_id(),'first_name',$_POST['firstName']);
			update_user_meta(get_current_user_id(),'last_name',$_POST['lastName']);
			update_user_meta(get_current_user_id(),'selina_id',$_POST['selina_id']);
			update_user_meta(get_current_user_id(),'phone',$_POST['phone']);
			update_user_meta(get_current_user_id(),'organization',$_POST['organization']);
			update_user_meta(get_current_user_id(),'department',$_POST['department']);
			update_user_meta(get_current_user_id(),'account_type',$_POST['userAccountTypeRadio']);
			update_user_meta(get_current_user_id(),'country',$_POST['country']);
			update_user_meta(get_current_user_id(),'city',$_POST['city']);
			update_user_meta(get_current_user_id(),'state',$_POST['state']);
			update_user_meta(get_current_user_id(),'address_line_1',$_POST['addressLine1']);
			update_user_meta(get_current_user_id(),'address_line_2',$_POST['addressLine2']);
			update_user_meta(get_current_user_id(),'zip_code',$_POST['zipCode']);
			update_user_meta(get_current_user_id(),'disable_ads',$_POST['disable_ads']);
		}
	}
	echo $res;
	exit;
}

function ip_info($ip = NULL, $purpose = "location", $deep_detect = TRUE) {
    $output = NULL;
    if (filter_var($ip, FILTER_VALIDATE_IP) === FALSE) {
        $ip = $_SERVER["REMOTE_ADDR"];
        if ($deep_detect) {
            if (filter_var(@$_SERVER['HTTP_X_FORWARDED_FOR'], FILTER_VALIDATE_IP))
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
            if (filter_var(@$_SERVER['HTTP_CLIENT_IP'], FILTER_VALIDATE_IP))
                $ip = $_SERVER['HTTP_CLIENT_IP'];
        }
    }
    $purpose    = str_replace(array("name", "\n", "\t", " ", "-", "_"), NULL, strtolower(trim($purpose)));
    $support    = array("country", "countrycode", "state", "region", "city", "location", "address");
    $continents = array(
        "AF" => "Africa",
        "AN" => "Antarctica",
        "AS" => "Asia",
        "EU" => "Europe",
        "OC" => "Australia (Oceania)",
        "NA" => "North America",
        "SA" => "South America"
    );
    if (filter_var($ip, FILTER_VALIDATE_IP) && in_array($purpose, $support)) {
        $ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));
        if (@strlen(trim($ipdat->geoplugin_countryCode)) == 2) {
            switch ($purpose) {
                case "location":
                    $output = array(
                        "city"           => @$ipdat->geoplugin_city,
                        "state"          => @$ipdat->geoplugin_regionName,
                        "country"        => @$ipdat->geoplugin_countryName,
                        "country_code"   => @$ipdat->geoplugin_countryCode,
                        "continent"      => @$continents[strtoupper($ipdat->geoplugin_continentCode)],
                        "continent_code" => @$ipdat->geoplugin_continentCode
                    );
                    break;
                case "address":
                    $address = array($ipdat->geoplugin_countryName);
                    if (@strlen($ipdat->geoplugin_regionName) >= 1)
                        $address[] = $ipdat->geoplugin_regionName;
                    if (@strlen($ipdat->geoplugin_city) >= 1)
                        $address[] = $ipdat->geoplugin_city;
                    $output = implode(", ", array_reverse($address));
                    break;
                case "city":
                    $output = @$ipdat->geoplugin_city;
                    break;
                case "state":
                    $output = @$ipdat->geoplugin_regionName;
                    break;
                case "region":
                    $output = @$ipdat->geoplugin_regionName;
                    break;
                case "country":
                    $output = @$ipdat->geoplugin_countryName;
                    break;
                case "countrycode":
                    $output = @$ipdat->geoplugin_countryCode;
                    break;
            }
        }
    }
    return $output;
}