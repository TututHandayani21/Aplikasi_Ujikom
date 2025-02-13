<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
          <!--Boxicons -->
          <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
         
          <!--My Css-->
          <link rel="stylesheet" href="style.css">
          <title>AdminHub</title>
          <style>
                   @import url('https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Poppins:wght@400;500;600;700&display=swap');
                   
                   *{
                    margin: 0;
                    padding: 0;
                    box-sizing: border-box;
                   }

                   a {
                    text-decoration: none;
                   } 

                   li {
                    list-style: none;
                   }

                   :root {
                    --poppins: 'Poppins', sans-serif;
                    --lato: 'Lato', sans-serif;

                    --light: #F9F9F9;
                    --blue: #3C91E6;
                    --ligt-blue: #CFE8FF;
                    --grey: #eee;
                    --dark-grey: #AAAAAA;
                    --dark: #342E37;
                    --red : #DB504A;
                    --yellow : #FFCE26;
                    --light-yellow : #FFF2C6;
                    --orange : #FD7238;
                    --lihgt-orange : #FFE0D3;
                   }

                   body {
                    background:var(--grey); 
                   }

                   

                   /* Sidebar */
                   #sidebar {
                    position: fixed;
                    top: 0;
                    left: 0;
                    width: 280px;
                    height: 100%;
                    background: var(--light);
                    z-index: 1000; 
                    font-family: var(--lato);
                   }
                   #sidebar .brand {
                    font-size: 24px;
                    font-weight: 700;
                    height: 56px;
                    display: flex;
                    align-items: center;
                    color: var(--blue);
                   } 
                   #sidebar .brand .bx {
                    min-width: 60px;
                    justify-content: center;
                   }
                   #sidebar .side-menu {
                    width: 100%;
                    margin-top: 48px; 
                   }
                   #sidebar .side-menu li {
                    height: 48px;
                    background: transparent;
                    margin-left: 6px;
                    border-radius: 48px 0 0 48px;
                    padding: 4px; 
                   }
                   #sidebar .side-menu li.active {
                    background: var(--grey);
                    position: relative;
                   }
                   #sidebar .side-menu li.active a {
                    color: var(--blue);
                   }
                   #sidebar .side-menu li.active::before {
                    content: '';
                    position: absolute;
                    width: 40px;
                    height: 40px;
                    border-radius: 50%;
                    top: -40px;
                    right: 0;
                    box-shadow: 20px 20px 0 var(--grey);
                    z-index: -1;
                   }
                   #sidebar .side-menu li.active::after {
                    content: '';
                    position: absolute;
                    width: 40px;
                    height: 40px;
                    border-radius: 50%;
                    bottom: -40px;
                    right: 0;
                    box-shadow: 20px -20px 0 var(--grey);
                    z-index: -1;
                   }
                   #sidebar .side-menu li a {
                    width: 100%;
                    height: 100%;
                    background: var(--light);
                    display: flex;
                    align-items: center;
                    border-radius: 48px;
                    font-size: 16px;
                    color: var(--dark);
                   }
                   #sidebar .side-menu li a .logout {
                    color: var(--red);
                   }
                   #sidebar .side-menu.top li a:hover {
                    color: var(--blue)
                   }
                   #sidebar .side-menu li a .bx {
                    min-width:  calc(60px - ((4px + 6px) * 2));
                    display: flex;
                    justify-content: center;
                   }
                   
                   /* Content */
                   #content {
                    position: relative;
                    width: calc(100% - 280px);
                    left:280px ;
                   }
                   /* Content */
                   /* Navbar */
                   #content nav {
                    height: 56px;
                    background: var(--light);
                    padding: 0 24px;
                    align-items: center;
                    grid-gap: 24px;
                    font-display: var(--lato)
                   }
                   #content nav a {
                    color: var(--dark);
                   }
                   #content nav .bx.bx-menu {
                    cursor: pointer;
                   }
                   #content nav .nav-link {
                    font-size: 16px;
                    transition: .3s ease;
                   }
                   #content nav .nav-link:hover {
                    color: var(--blue);
                   }
                   #content nav form {
                    max-width: 400px;
                    width: 100%;
                    margin-right: auto;
                   }
                   #content nav form .form-input {
                    display: flex;
                    align-items: center;
                    height: 36px;
                   }
                   #content nav form .form-input  input {
                    flex-grow: 1;
                    padding: 0 16px;
                    height: 100%;
                    border: none;
                    background: var(--grey);
                    border-radius: 36 0 0 36;
                    outline: none;
                   }
                   #content nav form .form-input button {
                    width: 36px;
                    height: 100%;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    background: var(--blue);
                    font-size: 18px;
                    border: none;
                    outline: none;
                    border-radius: 0 36px 36px 0;
                    cursor: pointer;
                   }
                   #content nav .notification {
                    font-size: 20px;
                    position: relative
                   }
                   #content nav .notification .num {
                    position: absolute;
                    top: -6px;
                    right: -6px;
                    width: 20px;
                    height: 20px;
                    border-radius: 50%;
                    border: 2px solid var(--light);
                    background: var(--red);
                    color: var(--light);
                    font-weight: 700%;
                    font-size: 12px;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                   }
                   /* Navbar */
                   /* Sidebar */
          </style>
</head>
<body>
          {{-- Sidebar --}}
          <section id="sidebar">
                    <a href="#" class="brand">
                              <i class='bx bx-receipt h1'></i>
                               <span class="text">To Do List</span>
                    </a>
                    <ul class="side-menu top">
                              <li class="active">
                                        <a href="#">
                                                  <i class='bx bxs-dashboard' ></i>
                                                  <span class="text">Dashboard</span>
                                        </a>
                              </li>
                              <li>
                                        <a href="#">
                                                  <i class='bx bxs-shopping-bag-alt'></i>
                                                  <span class="text">My Store</span>
                                        </a>
                              </li>
                              <li>
                                        <a href="#">
                                                  <i class='bx bxs-doughnut-chart'></i>
                                                  <span class="text">Analytics</span>
                                        </a>
                              </li>
                              <li>
                                        <a href="#">
                                                  <i class='bx bxs-message-dots'></i>
                                                  <span class="text">Message</span>
                                        </a>
                              </li>
                              <li>
                                        <a href="#">
                                                  <i class='bx bxs-group'></i>
                                                  <span class="text">Team</span>
                                        </a>
                              </li>
                    </ul>
                    <ul class="side-menu">
                              <li>
                                        <a href="#">
                                                  <i class='bx bxs-cog'></i>
                                                  <span class="text">Settings</span>
                                        </a>
                              </li>
                              <li>
                                        <a href="#" class="loguot">
                                                  <i class='bx bxs-log-out-circle'></i>
                                                  <span class="text">Loguot</span>
                                        </a>
                              </li>
                    </ul>
          </section>
          {{-- Sidebar --}}

          {{-- Conten --}}
          <section id="content">
                    {{-- Navabr --}}
                    <nav>
                              <i class='bx bx-menu h2'></i>
                              <a href="#" class="nav-link">Categories</a>
                              <form action="#">
                                        <div class="form-input">
                                        <input type="search" placeholder="search...">
                                        <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
                                        </div>
                              </form>
                              <a href="#" class="notification">
                                        <i class='bx bxs-bell'></i>
                                        <span class="num">8</span>
                              </a>
                              <a href="#">
                                        <img src="img/people.png">
                              </a>
                    </nav>
                    {{-- Navbar --}}
          </section>
          {{-- Conten --}}
          <script src="script.js"></script>
</body>
</html>