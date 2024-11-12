@extends('website.layout.layout')
@section('title','Wishpik')


@section('content')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


<header class="done-header">
    <div class="container">
    <div class="d-flex justify-content-between">
        <div class="logo-img">
            <img src="{{url('public/auth/img/wishpik-logo.png')}}" alt="logo" />
         </div>
         <div class="profile-icon">
            <div class="d-flex align-items-center gap-2">
                <p class="pb-0 mb-0">Hey John's</p>
                <img src="{{url('public/auth/img/Man.png')}}" alt="logo" />
            </div>
         </div>
    </div>
    </div>
</header>

<section class="py-5">
    <div class="container">
       <div class="row">
           <div class="col-md-3">
               <div class="profile-sidebar">
                   <div class="profile-logo">
                       <div class="profile-image">
                           <img src="{{url('public/auth/img/user-logo.png')}}" alt="logo" />
                           <span><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9.71667 5.51667L10.4833 6.28333L2.93333 13.8333H2.16667V13.0667L9.71667 5.51667ZM12.7167 0.5C12.5083 0.5 12.2917 0.583333 12.1333 0.741667L10.6083 2.26667L13.7333 5.39167L15.2583 3.86667C15.5833 3.54167 15.5833 3.01667 15.2583 2.69167L13.3083 0.741667C13.1417 0.575 12.9333 0.5 12.7167 0.5ZM9.71667 3.15833L0.5 12.375V15.5H3.625L12.8417 6.28333L9.71667 3.15833Z" fill="#1C1C1C"/>
</svg></span>

                       </div>
                       
                   </div>
                   <div class="profile-links">
                         <ul>
          <li class="active"><svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M17.3526 9.69852L18.7498 11.0957L4.99065 24.8548H3.59348V23.4576L17.3526 9.69852ZM22.8198 0.556152C22.4401 0.556152 22.0453 0.708019 21.7567 0.996565L18.9776 3.77572L24.6726 9.47072L27.4517 6.69156C28.044 6.09928 28.044 5.14252 27.4517 4.55024L23.898 0.996565C23.5943 0.692832 23.2146 0.556152 22.8198 0.556152ZM17.3526 5.40069L0.556152 22.1971V27.8921H6.25115L23.0476 11.0957L17.3526 5.40069Z" fill="#1C1C1C" /></svg>
            <span>Edit profile</span>
          </li>
          <li><svg width="22" height="27" viewBox="0 0 22 27" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11.1993 26.5628C12.6842 26.5628 13.8991 25.3479 13.8991 23.8629H8.49945C8.49945 25.3479 9.71438 26.5628 11.1993 26.5628ZM19.2988 18.4632V11.7136C19.2988 7.56935 17.0985 4.10004 13.2242 3.18209V2.26414C13.2242 1.14371 12.3197 0.239258 11.1993 0.239258C10.0789 0.239258 9.17441 1.14371 9.17441 2.26414V3.18209C5.31363 4.10004 3.09975 7.55585 3.09975 11.7136V18.4632L0.399902 21.1631V22.513H21.9987V21.1631L19.2988 18.4632ZM16.599 19.8132H5.7996V11.7136C5.7996 8.3658 7.83799 5.63896 11.1993 5.63896C14.5606 5.63896 16.599 8.3658 16.599 11.7136V19.8132Z" fill="#858585" />
          </svg>
            <span>Notification</span></li>
          <li><svg width="22" height="29" viewBox="0 0 22 29" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M19.2988 9.47828H17.9489V6.77843C17.9489 3.05264 14.9251 0.0288086 11.1993 0.0288086C7.47351 0.0288086 4.44968 3.05264 4.44968 6.77843V9.47828H3.09975C1.61483 9.47828 0.399902 10.6932 0.399902 12.1781V25.6774C0.399902 27.1623 1.61483 28.3772 3.09975 28.3772H19.2988C20.7838 28.3772 21.9987 27.1623 21.9987 25.6774V12.1781C21.9987 10.6932 20.7838 9.47828 19.2988 9.47828ZM7.14953 6.77843C7.14953 4.53756 8.95842 2.72866 11.1993 2.72866C13.4402 2.72866 15.2491 4.53756 15.2491 6.77843V9.47828H7.14953V6.77843ZM19.2988 25.6774H3.09975V12.1781H19.2988V25.6774ZM11.1993 21.6276C12.6842 21.6276 13.8991 20.4127 13.8991 18.9278C13.8991 17.4428 12.6842 16.2279 11.1993 16.2279C9.71438 16.2279 8.49945 17.4428 8.49945 18.9278C8.49945 20.4127 9.71438 21.6276 11.1993 21.6276Z" fill="#858585" />
          </svg>
            <span>Security</span></li>
          <li><svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_927_431)">
              <path d="M26.2292 18.015C26.2832 17.5831 26.3237 17.1511 26.3237 16.6921C26.3237 16.2331 26.2832 15.8012 26.2292 15.3692L29.0776 13.1418C29.3341 12.9393 29.4016 12.5748 29.2396 12.2779L26.5397 7.60712C26.4182 7.39114 26.1887 7.26964 25.9457 7.26964C25.8648 7.26964 25.7838 7.28314 25.7163 7.31014L22.3549 8.66007C21.653 8.1201 20.897 7.67462 20.0736 7.33714L19.5606 3.75984C19.5201 3.43586 19.2366 3.19287 18.8991 3.19287H13.4994C13.162 3.19287 12.8785 3.43586 12.838 3.75984L12.325 7.33714C11.5016 7.67462 10.7456 8.13359 10.0436 8.66007L6.68233 7.31014C6.60133 7.28314 6.52033 7.26964 6.43934 7.26964C6.20985 7.26964 5.98036 7.39114 5.85887 7.60712L3.15902 12.2779C2.98353 12.5748 3.06453 12.9393 3.32101 13.1418L6.16935 15.3692C6.11536 15.8012 6.07486 16.2466 6.07486 16.6921C6.07486 17.1376 6.11536 17.5831 6.16935 18.015L3.32101 20.2424C3.06453 20.4449 2.99703 20.8094 3.15902 21.1064L5.85887 25.7771C5.98036 25.9931 6.20985 26.1146 6.45284 26.1146C6.53383 26.1146 6.61483 26.1011 6.68233 26.0741L10.0436 24.7242C10.7456 25.2641 11.5016 25.7096 12.325 26.0471L12.838 29.6244C12.8785 29.9484 13.162 30.1914 13.4994 30.1914H18.8991C19.2366 30.1914 19.5201 29.9484 19.5606 29.6244L20.0736 26.0471C20.897 25.7096 21.653 25.2506 22.3549 24.7242L25.7163 26.0741C25.7973 26.1011 25.8783 26.1146 25.9592 26.1146C26.1887 26.1146 26.4182 25.9931 26.5397 25.7771L29.2396 21.1064C29.4016 20.8094 29.3341 20.4449 29.0776 20.2424L26.2292 18.015ZM23.5564 15.7067C23.6104 16.1251 23.6239 16.4086 23.6239 16.6921C23.6239 16.9756 23.5969 17.2726 23.5564 17.6776L23.3674 19.203L24.5688 20.1479L26.0267 21.2819L25.0818 22.9153L23.3674 22.2268L21.9635 21.6598L20.7485 22.5778C20.1681 23.0098 19.6146 23.3337 19.0611 23.5632L17.6302 24.1437L17.4142 25.6691L17.1442 27.4915H15.2543L14.9979 25.6691L14.7819 24.1437L13.351 23.5632C12.7705 23.3202 12.2305 23.0098 11.6905 22.6048L10.4621 21.6598L9.03119 22.2403L7.31679 22.9288L6.37184 21.2954L7.82976 20.1614L9.03119 19.2165L8.8422 17.6911C8.80171 17.2726 8.77471 16.9621 8.77471 16.6921C8.77471 16.4221 8.80171 16.1116 8.8422 15.7067L9.03119 14.1813L7.82976 13.2363L6.37184 12.1024L7.31679 10.469L9.03119 11.1574L10.4351 11.7244L11.65 10.8064C12.2305 10.3745 12.784 10.0505 13.3375 9.821L14.7684 9.24053L14.9844 7.71512L15.2543 5.89272H17.1307L17.3872 7.71512L17.6032 9.24053L19.0341 9.821C19.6146 10.064 20.1546 10.3745 20.6945 10.7794L21.923 11.7244L23.3539 11.1439L25.0683 10.4555L26.0132 12.0889L24.5688 13.2363L23.3674 14.1813L23.5564 15.7067ZM16.1993 11.2924C13.216 11.2924 10.7996 13.7088 10.7996 16.6921C10.7996 19.6754 13.216 22.0918 16.1993 22.0918C19.1826 22.0918 21.599 19.6754 21.599 16.6921C21.599 13.7088 19.1826 11.2924 16.1993 11.2924ZM16.1993 19.392C14.7144 19.392 13.4994 18.177 13.4994 16.6921C13.4994 15.2072 14.7144 13.9923 16.1993 13.9923C17.6842 13.9923 18.8991 15.2072 18.8991 16.6921C18.8991 18.177 17.6842 19.392 16.1993 19.392Z" fill="#858585" />
            </g>
            <defs>
              <clipPath id="clip0_927_431">
                <rect width="32.3982" height="32.3982" fill="white" transform="translate(0 0.493164)" />
              </clipPath>
            </defs>
          </svg>
            <span>My Subscription</span></li>
          <li><svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12.849 22.4162H15.5489V19.7163H12.849V22.4162ZM14.199 0.817383C6.74737 0.817383 0.699707 6.86504 0.699707 14.3166C0.699707 21.7682 6.74737 27.8159 14.199 27.8159C21.6505 27.8159 27.6982 21.7682 27.6982 14.3166C27.6982 6.86504 21.6505 0.817383 14.199 0.817383ZM14.199 25.116C8.24578 25.116 3.39956 20.2698 3.39956 14.3166C3.39956 8.36346 8.24578 3.51723 14.199 3.51723C20.1521 3.51723 24.9983 8.36346 24.9983 14.3166C24.9983 20.2698 20.1521 25.116 14.199 25.116ZM14.199 6.21708C11.2156 6.21708 8.79925 8.63345 8.79925 11.6168H11.4991C11.4991 10.1319 12.714 8.91693 14.199 8.91693C15.6839 8.91693 16.8988 10.1319 16.8988 11.6168C16.8988 14.3166 12.849 13.9791 12.849 18.3664H15.5489C15.5489 15.3291 19.5986 14.9916 19.5986 11.6168C19.5986 8.63345 17.1823 6.21708 14.199 6.21708Z" fill="#858585" />
          </svg>
            <span>Help</span></li>
        </ul>
                   </div>
               </div>
           </div>
           <div class="col-md-9">
               <div class="user-form">
                   <h3>Edit Profile</h3>
                   <form>
                       <div class="row">
                           <div class="col-md-6">
                               <div class="form-group mb-2">
                            <label class="form-label">First Name</label>
                            <input type="text" class="form-control" placeholder="First Name">
                        </div>
                           </div>
                           <div class="col-md-6">
                               <div class="form-group mb-2">
                            <label class="form-label">Last Name</label>
                            <input type="text" class="form-control" placeholder="Last Name">
                        </div>
                           </div>
                           <div class="col-md-12">
                               <div class="form-group mb-2">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" placeholder="Email address here">
                        </div>
                           </div>
                           <div class="col-md-12">
                               <div class="form-group mb-2">
                            <label class="form-label">Address</label>
                            <input type="text" class="form-control" placeholder="Address">
                        </div>
                           </div>
                            <div class="col-md-12">
                               <div class="form-group mb-2">
                            <label class="form-label">Phone Number</label>
                            <input type="phone" class="form-control" placeholder="Mobile Number">
                        </div>
                           </div>
                           <div class="col-md-6">
                               <div class="form-group mb-2">
                            <label class="form-label">City</label>
                            <select>
                                <option>Amritsar</option>
                                <option>Mohali</option>
                                <option>Chandigarh</option>
                                
                            </select>
                        </div>
                       </div>
                       <div class="col-md-6">
                               <div class="form-group mb-2">
                            <label class="form-label">State</label>
                            <select>
                                <option>Punjab</option>
                                <option>Mohali</option>
                                <option>Chandigarh</option>
                                
                            </select>
                        </div>
                       </div>
                       </div>
                       <div class="d-flex gap-3">
                           <button class="cancel-btn btn">Cancel</button>
                           <button class="save-btn btn">Save</button>
                       </div>
                   </form>
               </div>
           </div>
       </div>
    </div>
    
</section>
