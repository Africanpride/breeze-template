@extends('layouts.backend')


@section('content')

         <!-- Main Content -->

            <div class="row">


                  <div class="col-xl-2 col-lg-4">
                     <!-- Card -->
                     <div class="card mb-30">
                        <!-- Social Statics -->
                        <div class="social-statics">
                           <h4 class="statics-title">Twitter</h4>

                           <div class="d-flex justify-content-between align-items-center followers">
                              <div class="icon">
                                 <img src = " {{ asset('backend/assets/img/svg/twitter.svg') }} " alt="" class="svg">
                              </div>
                              <div class="content">
                                 <p class="font-14 mb-2 l-height1">Followers</p>
                                 <h3>261.6k</h3>
                              </div>
                           </div>

                           <div class="statics-bottom">
                              <div class="row align-items-center">
                                 <div class="col-6">
                                    <div class="content">
                                       <div class="mb-4">
                                          <p class="font-14 mb-1">Engagement</p>
                                          <h3>245k</h3>
                                       </div>
                                       <div class="mt-n1">
                                          <p class="font-14 mb-1">Impression</p>
                                          <h3>654k</h3>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-6">
                                    <div id="apex_column8-chart"></div>
                                    <span class="d-block text-center mt-1">Last 5days</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- End Social Statics -->
                     </div>
                     <!-- End Card -->
                  </div>

                  <div class="col-xl-2 col-lg-4">
                     <!-- Card -->
                     <div class="card mb-30">
                        <!-- Social Statics -->
                        <div class="social-statics style--two">
                           <h4 class="statics-title">Facebook</h4>

                           <div class="d-flex justify-content-between align-items-center followers">
                              <div class="icon">
                                 <img src = " {{ asset('backend/assets/img/svg/facebook.svg') }} " alt="" class="svg">
                              </div>
                              <div class="content">
                                 <p class="font-14 mb-2 l-height1">Followers</p>
                                 <h3>695k</h3>
                              </div>
                           </div>

                           <div class="statics-bottom">
                              <div class="row align-items-center">
                                 <div class="col-6">
                                    <div class="content">
                                       <div class="mb-4">
                                          <p class="font-14 mb-1">Engagement</p>
                                          <h3>245k</h3>
                                       </div>
                                       <div class="mt-n1">
                                          <p class="font-14 mb-1">Impression</p>
                                          <h3>654k</h3>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-6">
                                    <div id="apex_column9-chart"></div>
                                    <span class="d-block text-center mt-1">Last 5days</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- End Social Statics -->
                     </div>
                     <!-- End Card -->
                  </div>

                  <div class="col-xl-2 col-lg-4">
                     <!-- Card -->
                     <div class="card mb-30">
                        <!-- Social Statics -->
                        <div class="social-statics style--three">
                           <h4 class="statics-title">Linkedin</h4>

                           <div class="d-flex justify-content-between align-items-center followers">
                              <div class="icon">
                                 <img src = " {{ asset('backend/assets/img/svg/linkedin.svg') }} " alt="" class="svg">
                              </div>
                              <div class="content">
                                 <p class="font-14 mb-2 l-height1">Followers</p>
                                 <h3>246k</h3>
                              </div>
                           </div>

                           <div class="statics-bottom">
                              <div class="row align-items-center">
                                 <div class="col-6">
                                    <div class="content">
                                       <div class="mb-4">
                                          <p class="font-14 mb-1">Engagement</p>
                                          <h3>245k</h3>
                                       </div>
                                       <div class="mt-n1">
                                          <p class="font-14 mb-1">Impression</p>
                                          <h3>654k</h3>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-6">
                                    <div id="apex_column10-chart"></div>
                                    <span class="d-block text-center mt-1">Last 5days</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- End Social Statics -->
                     </div>
                     <!-- End Card -->
                  </div>


                  <div class="col-xl-12">
                     <div class="row">
                        <div class="col-xl-5">
                           <!-- Card -->
                           <div class="card mb-30 mb-xl-0">
                              <div class="card-body">
                                 <div class="d-flex justify-content-between media">
                                    <div class="d-flex justify-content-start justify-content-sm-between flex-column flex-sm-row mb-sm-n3  media-body">
                                       <div class="title-content mb-4 mb-sm-0">
                                          <h4>Users Activity</h4>
                                       </div>

                                       <!-- List Button -->
                                       <ul class="list-inline list-button m-0">
                                          <li class="active">Monthly</li>
                                          <li>Yearly</li>
                                       </ul>
                                       <!-- End List Button -->
                                    </div>

                                    <!-- Dropdown Button -->
                                    <div class="dropdown-button">
                                       <a href="#" data-toggle="dropdown">
                                          <div class="menu-icon style--two mt-0 mt-md-1 mr-0">
                                             <span></span>
                                             <span></span>
                                             <span></span>
                                          </div>
                                       </a>
                                       <div class="dropdown-menu dropdown-menu-right">
                                          <a href="#">Report</a>
                                          <a href="#">FAQ</a>
                                          <a href="#">Charts</a>
                                          <a href="#">Chat</a>
                                          <a href="#">Settings</a>
                                       </div>
                                    </div>
                                    <!-- End Dropdown Button -->
                                 </div>
                              </div>

                              <div class="table-responsive">
                                 <table class="style--four table-striped  text-nowrap">
                                    <thead>
                                      <tr>
                                        <th>Countries</th>
                                        <th>Users</th>
                                        <th>Likes</th>
                                        <th>Followers</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                          <td>
                                             <div class="d-flex align-items-center">
                                                <div class="country-flag">
                                                   <img src = " {{ asset('backend/assets/img/flag/f1.png" alt="">
                                                </div>
                                                <div class="country-name">USA</div>
                                             </div>
                                          </td>
                                          <td>265878</td>
                                          <td>5878</td>
                                          <td>878</td>
                                       </tr>

                                       <tr>
                                          <td>
                                             <div class="d-flex align-items-center">
                                                <div class="country-flag">
                                                   <img src = " {{ asset('backend/assets/img/flag/f2.png" alt="">
                                                </div>
                                                <div class="country-name">China</div>
                                             </div>
                                          </td>
                                          <td>265878</td>
                                          <td>64578</td>
                                          <td>4578</td>
                                       </tr>

                                       <tr>
                                          <td>
                                             <div class="d-flex align-items-center">
                                                <div class="country-flag">
                                                   <img src = " {{ asset('backend/assets/img/flag/f3.png" alt="">
                                                </div>
                                                <div class="country-name">Russia</div>
                                             </div>
                                          </td>
                                          <td>658745</td>
                                          <td>8745</td>
                                          <td>745</td>
                                       </tr>

                                       <tr>
                                          <td>
                                             <div class="d-flex align-items-center">
                                                <div class="country-flag">
                                                   <img src = " {{ asset('backend/assets/img/flag/f4.png" alt="">
                                                </div>
                                                <div class="country-name">Spain</div>
                                             </div>
                                          </td>
                                          <td>365985</td>
                                          <td>65478</td>
                                          <td>5478</td>
                                       </tr>

                                       <tr>
                                          <td>
                                             <div class="d-flex align-items-center">
                                                <div class="country-flag">
                                                   <img src = " {{ asset('backend/assets/img/flag/f5.png" alt="">
                                                </div>
                                                <div class="country-name">Brazil</div>
                                             </div>
                                          </td>
                                          <td>265478</td>
                                          <td>65478</td>
                                          <td>5478</td>
                                       </tr>

                                       <tr>
                                          <td>
                                             <div class="d-flex align-items-center">
                                                <div class="country-flag">
                                                   <img src = " {{ asset('backend/assets/img/flag/f6.png" alt="">
                                                </div>
                                                <div class="country-name">France</div>
                                             </div>
                                          </td>
                                          <td>123654</td>
                                          <td>23654</td>
                                          <td>3654</td>
                                       </tr>

                                       <tr>
                                          <td>
                                             <div class="d-flex align-items-center">
                                                <div class="country-flag">
                                                   <img src = " {{ asset('backend/assets/img/flag/f7.png" alt="">
                                                </div>
                                                <div class="country-name">Algeria</div>
                                             </div>
                                          </td>
                                          <td>654987</td>
                                          <td>54987</td>
                                          <td>4987</td>
                                       </tr>

                                       <tr>
                                          <td>
                                             <div class="d-flex align-items-center">
                                                <div class="country-flag">
                                                   <img src = " {{ asset('backend/assets/img/flag/f8.png" alt="">
                                                </div>
                                                <div class="country-name">Andora</div>
                                             </div>
                                          </td>
                                          <td>659874</td>
                                          <td>59874</td>
                                          <td>9874</td>
                                       </tr>

                                       <tr>
                                          <td>
                                             <div class="d-flex align-items-center">
                                                <div class="country-flag">
                                                   <img src = " {{ asset('backend/assets/img/flag/f9.png" alt="">
                                                </div>
                                                <div class="country-name">Australia</div>
                                             </div>
                                          </td>
                                          <td>564123</td>
                                          <td>64123</td>
                                          <td>4123</td>
                                       </tr>

                                       <tr>
                                          <td>
                                             <div class="d-flex align-items-center">
                                                <div class="country-flag">
                                                   <img src = " {{ asset('backend/assets/img/flag/f10.png" alt="">
                                                </div>
                                                <div class="country-name">Austria</div>
                                             </div>
                                          </td>
                                          <td>625498</td>
                                          <td>25498</td>
                                          <td>5498</td>
                                       </tr>

                                       <tr>
                                          <td>
                                             <div class="d-flex align-items-center">
                                                <div class="country-flag">
                                                   <img src = " {{ asset('backend/assets/img/flag/f11.png" alt="">
                                                </div>
                                                <div class="country-name">Canada</div>
                                             </div>
                                          </td>
                                          <td>365412</td>
                                          <td>65412</td>
                                          <td>5412</td>
                                       </tr>

                                       <tr>
                                          <td>
                                             <div class="d-flex align-items-center">
                                                <div class="country-flag">
                                                   <img src = " {{ asset('backend/assets/img/flag/f12.png" alt="">
                                                </div>
                                                <div class="country-name">Colombia</div>
                                             </div>
                                          </td>
                                          <td>265878</td>
                                          <td>65878</td>
                                          <td>5878</td>
                                       </tr>

                                       <tr>
                                          <td>
                                             <div class="d-flex align-items-center">
                                                <div class="country-flag">
                                                   <img src = " {{ asset('backend/assets/img/flag/f13.png" alt="">
                                                </div>
                                                <div class="country-name">Egypt</div>
                                             </div>
                                          </td>
                                          <td>264578</td>
                                          <td>64578</td>
                                          <td>4578</td>
                                       </tr>

                                       <tr>
                                          <td>
                                             <div class="d-flex align-items-center">
                                                <div class="country-flag">
                                                   <img src = " {{ asset('backend/assets/img/flag/f14.png" alt="">
                                                </div>
                                                <div class="country-name">Finland</div>
                                             </div>
                                          </td>
                                          <td>658745</td>
                                          <td>8745</td>
                                          <td>745</td>
                                       </tr>

                                       <tr>
                                          <td>
                                             <div class="d-flex align-items-center">
                                                <div class="country-flag">
                                                   <img src = " {{ asset('backend/assets/img/flag/f15.png" alt="">
                                                </div>
                                                <div class="country-name">Germany</div>
                                             </div>
                                          </td>
                                          <td>365985</td>
                                          <td>65985</td>
                                          <td>5985</td>
                                       </tr>

                                       <tr>
                                          <td>
                                             <div class="d-flex align-items-center">
                                                <div class="country-flag">
                                                   <img src = " {{ asset('backend/assets/img/flag/f16.png" alt="">
                                                </div>
                                                <div class="country-name">Iecland</div>
                                             </div>
                                          </td>
                                          <td>265478</td>
                                          <td>5478</td>
                                          <td>478</td>
                                       </tr>
                                    </tbody>
                                  </table>
                              </div>


                           </div>
                           <!-- End Card -->
                        </div>
                        <div class="col-xl-7">
                           <div class="row">
                              <div class="col-lg-5">
                                 <!-- Card -->
                                 <div class="card mb-30 progress_20">
                                    <div class="card-body">
                                       <div class="d-flex justify-content-between pb-2 mb-4">
                                          <div class="progress-title">
                                             <h4 class="mb-1">Country Performances</h4>
                                             <p class="font-14">Tell use paid law ever yet new. Meant to learn of </p>
                                          </div>

                                          <div class="dropdown-button">
                                             <a href="#" class="d-flex align-items-center" data-toggle="dropdown">
                                             <div class="menu-icon style--two mr-0">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                             </div>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right">
                                                <a href="#">Daily</a>
                                                <a href="#">Sort By</a>
                                                <a href="#">Monthly</a>
                                             </div>
                                          </div>
                                       </div>

                                       <div class="ProgressBar-wrap position-relative mb-3">
                                          <div class="ProgressBar ProgressBar_20" data-progress="70">
                                             <svg class="ProgressBar-contentCircle" viewBox="0 0 200 200">
                                                <!-- on défini le l'angle et le centre de rotation du cercle -->
                                                <circle transform="rotate(135, 100, 100)" class="ProgressBar-background" cx="100" cy="100" r="8" />
                                                <circle transform="rotate(135, 100, 100)" class="ProgressBar-circle" cx="100" cy="100" r="85" />
                                             </svg>
                                             <span class="ProgressBar-percentage--text">Increase</span>
                                             <span class="ProgressBar-percentage ProgressBar-percentage--count"></span>
                                          </div>
                                       </div>

                                       <div class="country-performance pt-3">
                                          <div class="process-bar-wrapper">
                                             <span class="process-name">Members Grow</span>
                                             <span class="process-width">35%</span>
                                             <span class="process-bar" data-process-width="35"></span>
                                          </div>

                                          <div class="process-bar-wrapper style--two">
                                             <span class="process-name">Targeted Order</span>
                                             <span class="process-width">68%</span>
                                             <span class="process-bar" data-process-width="68"></span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- End Card -->
                              </div>
                              <div class="col-lg-7">
                                 <!-- Card -->
                                 <div class="card mb-30">
                                    <div class="card-body">
                                       <div class="d-flex justify-content-between media">
                                          <div class="d-flex justify-content-start justify-content-sm-between flex-column flex-sm-row mb-sm-n3  media-body">
                                             <div class="title-content mb-4 mb-sm-0">
                                                <h4>Top Countries</h4>
                                             </div>

                                             <!-- List Button -->
                                             <ul class="list-inline list-button m-0">
                                                <li class="active">Monthly</li>
                                                <li>Yearly</li>
                                             </ul>
                                             <!-- End List Button -->
                                          </div>

                                          <!-- Dropdown Button -->
                                          <div class="dropdown-button">
                                             <a href="#" data-toggle="dropdown">
                                                <div class="menu-icon style--two mt-0 mt-md-1 mr-0">
                                                   <span></span>
                                                   <span></span>
                                                   <span></span>
                                                </div>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right">
                                                <a href="#">Report</a>
                                                <a href="#">FAQ</a>
                                                <a href="#">Charts</a>
                                                <a href="#">Chat</a>
                                                <a href="#">Settings</a>
                                             </div>
                                          </div>
                                          <!-- End Dropdown Button -->
                                       </div>
                                    </div>

                                    <div id="apex_pie3-chart"></div>

                                    <!-- Apex Pie Chart3 legend -->
                                    <div class="apex_pie3-chart-legend card-body mt-n5 font-14">
                                       <!-- Legend Single Item -->
                                       <div class="d-flex mb-10 align-items-center justify-content-between">
                                          <div class="d-flex align-items-center">
                                             <div class="color-box"></div>
                                             <div class="c_name">United States</div>
                                          </div>

                                          <div class="d-flex align-items-center">
                                             <div><span class="bold black mr-2">269k</span>Users</div>
                                          </div>
                                       </div>
                                       <!-- End Legend Single Item -->

                                       <!-- Legend Single Item -->
                                       <div class="d-flex mb-10 align-items-center justify-content-between">
                                          <div class="d-flex align-items-center">
                                             <div class="color-box two"></div>
                                             <div class="c_name">Australia</div>
                                          </div>

                                          <div class="d-flex align-items-center">
                                             <div><span class="bold black mr-2">156k</span>Users</div>
                                          </div>
                                       </div>
                                       <!-- End Legend Single Item -->

                                       <!-- Legend Single Item -->
                                       <div class="d-flex mb-10 align-items-center justify-content-between">
                                          <div class="d-flex align-items-center">
                                             <div class="color-box three"></div>
                                             <div class="c_name">Canada</div>
                                          </div>

                                          <div class="d-flex align-items-center">
                                             <div><span class="bold black mr-2">57k</span>Users</div>
                                          </div>
                                       </div>
                                       <!-- End Legend Single Item -->

                                       <!-- Legend Single Item -->
                                       <div class="d-flex align-items-center justify-content-between">
                                          <div class="d-flex align-items-center">
                                             <div class="color-box four"></div>
                                             <div class="c_name">China</div>
                                          </div>

                                          <div class="d-flex align-items-center">
                                             <div><span class="bold black mr-2">43k</span>Users</div>
                                          </div>
                                       </div>
                                       <!-- End Legend Single Item -->
                                    </div>
                                    <!-- End Apex Pie Chart3 legend -->
                                 </div>
                                 <!-- End Card -->
                              </div>
                              <div class="col-lg-7">
                                 <!-- Card -->
                                 <div class="card mb-30 mb-lg-0">
                                    <div class="card-body">
                                       <div class="title-content mb-4 mb-sm-0">
                                          <h4>Top Followers</h4>
                                       </div>
                                    </div>

                                    <!-- Table Responsive -->
                                    <div class="table-responsive">
                                       <table class="style--five text-nowrap">
                                          <thead>
                                             <tr>
                                                <th>Profile</th>
                                                <th>Country</th>
                                                <th>Action</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr>
                                                <td>
                                                   <div class="d-flex align-items-center">
                                                      <div class="img">
                                                         <img src = " {{ asset('backend/assets/img/avatar/f1.png" alt="">
                                                      </div>
                                                      <div class="name">Kary Threlkeld</div>
                                                   </div>
                                                </td>
                                                <td>USA</td>
                                                <td><a href="#" class="follow-btn">Follow <i class="icofont-arrow-right"></i></a></td>
                                             </tr>

                                             <tr>
                                                <td>
                                                   <div class="d-flex align-items-center">
                                                      <div class="img">
                                                         <img src = " {{ asset('backend/assets/img/avatar/f2.png" alt="">
                                                      </div>
                                                      <div class="name">Kizzy Savoy</div>
                                                   </div>
                                                </td>
                                                <td>China</td>
                                                <td><a href="#" class="follow-btn">Follow <i class="icofont-arrow-right"></i></a></td>
                                             </tr>

                                             <tr>
                                                <td>
                                                   <div class="d-flex align-items-center">
                                                      <div class="img">
                                                         <img src = " {{ asset('backend/assets/img/avatar/f3.png" alt="">
                                                      </div>
                                                      <div class="name">Tonette Baumgarten</div>
                                                   </div>
                                                </td>
                                                <td>Russia</td>
                                                <td><a href="#" class="follow-btn">Follow <i class="icofont-arrow-right"></i></a></td>
                                             </tr>

                                             <tr>
                                                <td>
                                                   <div class="d-flex align-items-center">
                                                      <div class="img">
                                                         <img src = " {{ asset('backend/assets/img/avatar/f4.png" alt="">
                                                      </div>
                                                      <div class="name">Luella Brumit</div>
                                                   </div>
                                                </td>
                                                <td>Spain</td>
                                                <td><a href="#" class="follow-btn">Follow <i class="icofont-arrow-right"></i></a></td>
                                             </tr>

                                             <tr>
                                                <td>
                                                   <div class="d-flex align-items-center">
                                                      <div class="img">
                                                         <img src = " {{ asset('backend/assets/img/avatar/f5.png" alt="">
                                                      </div>
                                                      <div class="name">Dionne Rosser</div>
                                                   </div>
                                                </td>
                                                <td>Brazil</td>
                                                <td><a href="#" class="follow-btn">Follow <i class="icofont-arrow-right"></i></a></td>
                                             </tr>

                                             <tr>
                                                <td>
                                                   <div class="d-flex align-items-center">
                                                      <div class="img">
                                                         <img src = " {{ asset('backend/assets/img/avatar/f6.png" alt="">
                                                      </div>
                                                      <div class="name">Earl Penton</div>
                                                   </div>
                                                </td>
                                                <td>France</td>
                                                <td><a href="#" class="follow-btn">Follow <i class="icofont-arrow-right"></i></a></td>
                                             </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                    <!-- End Table Responsive -->
                                 </div>
                                 <!-- End Card -->
                              </div>
                              <div class="col-lg-5">
                                 <!-- Card -->
                                 <div class="card">
                                    <div class="card-body">
                                       <div class="title-content mb-4">
                                          <h4>Browser Status</h4>
                                       </div>

                                       <div class="browser-status font-14 bold black mt-n1">
                                          <div class="d-flex justify-content-between align-items-center">
                                             <div class="browser-name font-12 regular text_color">Browser Name</div>
                                             <div class="using-rate font-12 regular text_color">Using Rate</div>
                                          </div>
                                          <div class="d-flex justify-content-between align-items-center">
                                             <div class="browser-name">Google Chrome</div>
                                             <div class="using-rate">74%</div>
                                          </div>
                                          <div class="d-flex justify-content-between align-items-center">
                                             <div class="browser-name">Firefox</div>
                                             <div class="using-rate">54%</div>
                                          </div>
                                          <div class="d-flex justify-content-between align-items-center">
                                             <div class="browser-name">Internet Explorer</div>
                                             <div class="using-rate">46%</div>
                                          </div>
                                          <div class="d-flex justify-content-between align-items-center">
                                             <div class="browser-name">Opera Mini</div>
                                             <div class="using-rate">23%</div>
                                          </div>
                                          <div class="d-flex justify-content-between align-items-center">
                                             <div class="browser-name">Android</div>
                                             <div class="using-rate">15%</div>
                                          </div>
                                          <div class="d-flex justify-content-between align-items-center">
                                             <div class="browser-name">Microsoft Edge</div>
                                             <div class="using-rate">36%</div>
                                          </div>
                                          <div class="d-flex justify-content-between align-items-center">
                                             <div class="browser-name">Safari</div>
                                             <div class="using-rate">65%</div>
                                          </div>
                                          <div class="d-flex justify-content-between align-items-center">
                                             <div class="browser-name">Google Chrome</div>
                                             <div class="using-rate">74%</div>
                                          </div>
                                          <div class="d-flex justify-content-between align-items-center">
                                             <div class="browser-name">Firefox</div>
                                             <div class="using-rate">54%</div>
                                          </div>
                                          <div class="d-flex justify-content-between align-items-center">
                                             <div class="browser-name">Internet Explorer</div>
                                             <div class="using-rate">46%</div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- End Card -->
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
            </div>

         <!-- End Main Content -->




@endsection
