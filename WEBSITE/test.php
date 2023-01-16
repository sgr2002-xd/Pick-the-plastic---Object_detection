
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selfmade Ninja Academy</title>
    <link rel="shortcut icon" href="/assets/favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="./assets/css/video-js.css" rel="stylesheet">
    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/shaka-player.compiled.debug.js"></script>
    <script src="./assets/js/video.js"></script>
    <script src="./assets/js/videojs-shaka.min.js"></script>
    <script src="./assets/js/shaka-player.ui.js"></script>
    <script src="./assets/js/videojs-seek-buttons.min.js"></script>
    <script src="https://player.vdocipher.com/playerAssets/1.6.10/vdo.js"></script>
    <script src="https://kmoskwiak.github.io/videojs-resolution-switcher/node_modules/videojs-resolution-switcher/lib/videojs-resolution-switcher.js"></script>
</head>

<body>
    <div class="bg-dark sidebar">
        <div class="logo">
            <img class="logo-img" src="logo_main.jpg" alt="">
        </div>
        <div class="fade-linker">
        </div>
        <ul class="nav-links">
            <li  class="active"><a href="/" class="nav-link fs-6"><i class="fa-solid fa-play"></i>
                    <p>Detect</p>
                </a></li>
            <!-- <li class="active"><a href="class.php" class="nav-link fs-6"><i class="fa-solid fa-play"></i>
                    <p>My Class</p>
                </a></li>
            <li><a href="" class="nav-link fs-6"><i class="fa-solid fa-user-group"></i>
                    <p>Classroom<br>(coming soon)</p>
                </a></li>
            <li><a href="/settings.php" class="nav-link fs-6"><i class="fa-solid fa-gear"></i>
                    <p>Settings<br>(coming soon)</p>
                </a></li> -->
        </ul>
        <!-- <button class="openbtn" onclick="openNav()">&#9776;</button> -->
    </div>

    <button class="btn btn-transparent closeBtn fs-3 d-none" onclick="onMenu()"><i class="fa-solid fa-xmark"></i></button>

    <section class="home-section bg-secondary main">
        <div class="top-navbar d-flex align-items-center flex-row justify-content-between shadow">
    <div class="d-flex align-items-center info">
        <button id="menu-bar" class="btn bg-transparent fs-5" onclick="onMenu()"><i
                class="fa-solid fa-bars text-light"></i></button>
        <h3 class="fw-normal fs-5 m-0 ms-4">Live</h3>
        <p class="course-title ms-4 m-0">Plastic Detector</p>
        </div>
        <div class="dropdown">
            <button id="profileDropdownMenu" data-bs-toggle="dropdown" aria-expanded="false" class="btn bg-transparent dropdown-toggle fs-2">
                <img src="https://secure.gravatar.com/avatar/c297199fc942efa75f529af5212b05ac?s=80&d=identicon" class="profile-picture" alt="">
            </button>
            <ul class="dropdown-menu" aria-labelledby="profileDropdownMenu">
                <li class="dropdown-item">
                    <p class="fw-bold text-dark m-0">Asvika .M</p>
                    <p class="text-light m-0">asvika07@gmail.com</p>
                </li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item my-2" href="#">Profile</a></li>
                <li><a class="dropdown-item my-2" href="/logout.php">Logout</a></li>
            </ul>
        </div>
    </div>
</div>
        <div class="mt-5 pb-5 d-flex flex-column align-self-center main-container">
                            <div class="media-player bg-white w-100 shadow-lg">
                                                <div class="course_title p-4 _0bad22fb54c74d859f1c32d60c1f38b5">
                                <h2 class="m-0 fs-4 text-dark">Live Stream Plastic Detector</h2>
                            </div>
                                                        <div class="course_title p-4 _4ca1046276b94d5c9102ddda5a0affdd">
                                <h2 class="m-0 fs-4 text-dark"></h2>
                            </div>
                                                        <div class="course_title p-4 _e6899d108fc04ff485888d606a4bd9a0">
                                <h2 class="m-0 fs-4 text-dark">Basic of C programming</h2>
                            </div>
                                                        <div class="course_title p-4 _83667a261cc24965b1046f04031e4848">
                                <h2 class="m-0 fs-4 text-dark">Operator & Control Structures</h2>
                            </div>
                                                        <div class="course_title p-4 _7d733e503d1c48a89ca18660c9189987">
                                <h2 class="m-0 fs-4 text-dark">Control Structures</h2>
                            </div>
                                                        <div class="course_title p-4 _e33fbec077df40a8a0cb528b91ca3d06">
                                <h2 class="m-0 fs-4 text-dark">Loop Structures</h2>
                            </div>
                                                        <div class="course_title p-4 _9345da6cf6d648658124e33babeb4fb9">
                                <h2 class="m-0 fs-4 text-dark">Arrays </h2>
                            </div>
                                                        <div class="course_title p-4 _cf1e728d6e2b40309f5363553a09cf84">
                                <h2 class="m-0 fs-4 text-dark">User-Defined Datatype</h2>
                            </div>
                                                        <div class="course_title p-4 _4e2e881c5bed4ade80b4de7efaf68600">
                                <h2 class="m-0 fs-4 text-dark">Pointers</h2>
                            </div>
                                                        <div class="course_title p-4 _94df468cb0eb4c60a4ce982ae26f6cd8">
                                <h2 class="m-0 fs-4 text-dark">Funciton's</h2>
                            </div>
                                                        <div class="course_title p-4 _b7e661ba99fe419784da6078eed08178">
                                <h2 class="m-0 fs-4 text-dark">Dynamic Memory Allocation</h2>
                            </div>
                                                        <div class="course_title p-4 _1a5ed27ea51f4d40b35294b753808224">
                                <h2 class="m-0 fs-4 text-dark">File Handling</h2>
                            </div>
                                                        <div class="course_title p-4 _be923f5b115e43deb5187b9a36f01041">
                                <h2 class="m-0 fs-4 text-dark">Problem-solving</h2>
                            </div>
                                                        <div class="course_title p-4 _89726e543fed41e3bc5a1034f310d3dc">
                                <h2 class="m-0 fs-4 text-dark"></h2>
                            </div>
                                                                        <div class="d-flex px-1 py-2 flex-nowrap overflow-scroll bg-white program">
                                                            <span class="program-section btn btn-transparent text-nowrap text-light px-3 mx-2  active" id="Internet-of-Things-(தமிழ்)">Live Stream</span>
                                                            <span class="program-section btn btn-transparent text-nowrap text-light px-3 mx-2 " id="C-Programming">Live Stream 1</span>
                                                    </div>
                                        <!-- <div class="d-flex px-1 py-2 flex-nowrap overflow-scroll bg-white program">
                        <span class="program-section btn btn-transparent text-nowrap text-light px-3 mx-2 active" id="C-Programming">C Programming</span>
                    </div> -->
                        <div id="video_content">
                        <!-- <div id="embedBox" style="width:1280px;max-width:100%;height:auto;"><img width="761px" height="500"
                            src="http://192.168.0.103:8080/?action=stream"> -->
                            <div id="embedBox" style="width:1280px;max-width:100%;height:auto;"><img width="761px" height="500"
                                src="https://firebasestorage.googleapis.com/v0/b/ideation-809c6.appspot.com/o/Sample.jpg?alt=media&token=f98e0b48-8f63-4228-b097-a2e7b4532950">
        </div>
                                                        <div class="d-flex px-1 py-2 flex-nowrap overflow-scroll bg-white days-content Internet-of-Things-(தமிழ்)" style="display: ">
                                                                            <span class="day-btn btn btn-transparent text-nowrap text-light px-3 mx-2 active" id="0bad22fb54c74d859f1c32d60c1f38b5">Live Stream</span>
                                                                            <span class="day-btn btn btn-transparent text-nowrap text-light px-3 mx-2" id="4ca1046276b94d5c9102ddda5a0affdd">LAB</span>
                                                                    </div>
                                                                    <div class="course-desc px-4 text-dark _0bad22fb54c74d859f1c32d60c1f38b5">
                                        <hr class="bg-dark" />
                                        <p></p>
                                        <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum molestias distinctio magni explicabo quas aspernatur illo aut sunt, et, quae incidunt voluptatibus eveniet perferendis vel consectetur pariatur suscipit quod, ad voluptatum fugit dignissimos? Repellendus cum optio iusto minima animi id, vitae doloribus quae, debitis magnam aspernatur in praesentium fugit vero. Laudantium, saepe accusamus repellendus ea eligendi quis totam odit deserunt minus exercitationem, reiciendis repudiandae vero tenetur autem voluptatum. Corporis veritatis necessitatibus harum omnis commodi recusandae sequi nemo quia? Nostrum accusamus ipsam sed eum ea, vel voluptas id eaque repellendus quas velit assumenda possimus magnam iure eius provident expedita, ratione saepe.</p> -->
                                    </div>
                                                                    <div class="course-desc px-4 text-dark _4ca1046276b94d5c9102ddda5a0affdd">
                                        <hr class="bg-dark" />
                                        <p></p>
                                        <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum molestias distinctio magni explicabo quas aspernatur illo aut sunt, et, quae incidunt voluptatibus eveniet perferendis vel consectetur pariatur suscipit quod, ad voluptatum fugit dignissimos? Repellendus cum optio iusto minima animi id, vitae doloribus quae, debitis magnam aspernatur in praesentium fugit vero. Laudantium, saepe accusamus repellendus ea eligendi quis totam odit deserunt minus exercitationem, reiciendis repudiandae vero tenetur autem voluptatum. Corporis veritatis necessitatibus harum omnis commodi recusandae sequi nemo quia? Nostrum accusamus ipsam sed eum ea, vel voluptas id eaque repellendus quas velit assumenda possimus magnam iure eius provident expedita, ratione saepe.</p> -->
                                    </div>
                                                                                                                    <div class="d-flex px-1 py-2 flex-nowrap overflow-scroll bg-white days-content C-Programming" style="display: none !important">
                                                                            <span class="day-btn btn btn-transparent text-nowrap text-light px-3 mx-2 active" id="e6899d108fc04ff485888d606a4bd9a0">Day 1</span>
                                                                            <span class="day-btn btn btn-transparent text-nowrap text-light px-3 mx-2" id="83667a261cc24965b1046f04031e4848">Day 2</span>
                                                                            <span class="day-btn btn btn-transparent text-nowrap text-light px-3 mx-2" id="7d733e503d1c48a89ca18660c9189987">Day 3 P1</span>
                                                                            <span class="day-btn btn btn-transparent text-nowrap text-light px-3 mx-2" id="e33fbec077df40a8a0cb528b91ca3d06">Day 3 P2</span>
                                                                            <span class="day-btn btn btn-transparent text-nowrap text-light px-3 mx-2" id="9345da6cf6d648658124e33babeb4fb9">Day 4</span>
                                                                            <span class="day-btn btn btn-transparent text-nowrap text-light px-3 mx-2" id="cf1e728d6e2b40309f5363553a09cf84">Day 5</span>
                                                                            <span class="day-btn btn btn-transparent text-nowrap text-light px-3 mx-2" id="4e2e881c5bed4ade80b4de7efaf68600">Day 6</span>
                                                                            <span class="day-btn btn btn-transparent text-nowrap text-light px-3 mx-2" id="94df468cb0eb4c60a4ce982ae26f6cd8">Day 7</span>
                                                                            <span class="day-btn btn btn-transparent text-nowrap text-light px-3 mx-2" id="b7e661ba99fe419784da6078eed08178">Day 8</span>
                                                                            <span class="day-btn btn btn-transparent text-nowrap text-light px-3 mx-2" id="1a5ed27ea51f4d40b35294b753808224">Day 9</span>
                                                                            <span class="day-btn btn btn-transparent text-nowrap text-light px-3 mx-2" id="be923f5b115e43deb5187b9a36f01041">Day 10</span>
                                                                            <span class="day-btn btn btn-transparent text-nowrap text-light px-3 mx-2" id="89726e543fed41e3bc5a1034f310d3dc">Day 11</span>
                                                                    </div>
                                                                    <div class="course-desc px-4 text-dark _e6899d108fc04ff485888d606a4bd9a0">
                                        <hr class="bg-dark" />
                                        <p><div class="ql-editor read-mode"><p>In this class we will look at the basics of C programming and why we learn C programming. That means it knows better about the header files, data types, format specifiers, number system, and how to get user input at the same time by looking briefly for buffer overflow. Briefly write a sample C program for all these topics.</p><h3>Study:</h3><p>Purpose of the return value of the main function in c programming -- <a href="https://discuss.selfmade.ninja/d/19-purpose-of-the-return-value-of-main-function-in-c-programming" rel="noopener noreferrer">https://discuss.selfmade.ninja/d/19-purpose-of-the-return-value-of-main-function-in-c-programming</a></p><p>Keep practice</p><p>- [Git repository link] =&nbsp;<a href="(https://git.selfmade.ninja/sibidharan/c-by-kamalraj)" rel="noopener noreferrer">https://git.selfmade.ninja/sibidharan/c-by-kamalraj</a></p><p><br></p><p><br></p><p><br></p></div></p>
                                        <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum molestias distinctio magni explicabo quas aspernatur illo aut sunt, et, quae incidunt voluptatibus eveniet perferendis vel consectetur pariatur suscipit quod, ad voluptatum fugit dignissimos? Repellendus cum optio iusto minima animi id, vitae doloribus quae, debitis magnam aspernatur in praesentium fugit vero. Laudantium, saepe accusamus repellendus ea eligendi quis totam odit deserunt minus exercitationem, reiciendis repudiandae vero tenetur autem voluptatum. Corporis veritatis necessitatibus harum omnis commodi recusandae sequi nemo quia? Nostrum accusamus ipsam sed eum ea, vel voluptas id eaque repellendus quas velit assumenda possimus magnam iure eius provident expedita, ratione saepe.</p> -->
                                    </div>
                                                                    <div class="course-desc px-4 text-dark _83667a261cc24965b1046f04031e4848">
                                        <hr class="bg-dark" />
                                        <p><div class="ql-editor read-mode"><p>In this class, we will first review what we learned in the previous class and then move on to learn the additional basic concepts in C. There will be examples of how to do arithmetic, bitwise, relational, and logical operations in C. Also, learn what the C program returns after the execution, and finally, learn the essential concept of control structure in each programming language.</p><p><br></p><h2><strong style="background-color: rgb(21, 26, 30); color: rgb(221, 221, 221);">Today Notes</strong></h2><ol><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>-[Git repository &nbsp;link] = &nbsp;<a href="(https://git.selfmade.ninja/sibidharan/c-by-kamalraj)" rel="noopener noreferrer">(https://git.selfmade.ninja/sibidharan/c-by-kamalraj)</a></li></ol><h2><br></h2></div></p>
                                        <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum molestias distinctio magni explicabo quas aspernatur illo aut sunt, et, quae incidunt voluptatibus eveniet perferendis vel consectetur pariatur suscipit quod, ad voluptatum fugit dignissimos? Repellendus cum optio iusto minima animi id, vitae doloribus quae, debitis magnam aspernatur in praesentium fugit vero. Laudantium, saepe accusamus repellendus ea eligendi quis totam odit deserunt minus exercitationem, reiciendis repudiandae vero tenetur autem voluptatum. Corporis veritatis necessitatibus harum omnis commodi recusandae sequi nemo quia? Nostrum accusamus ipsam sed eum ea, vel voluptas id eaque repellendus quas velit assumenda possimus magnam iure eius provident expedita, ratione saepe.</p> -->
                                    </div>
                                                                    <div class="course-desc px-4 text-dark _7d733e503d1c48a89ca18660c9189987">
                                        <hr class="bg-dark" />
                                        <p><div class="ql-editor read-mode"><p>During this class, we discuss more control structures of C with examples. These are switch case, nested if statement, and we briefly examine escape characters in C. We also discuss how to handle errors.</p></div></p>
                                        <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum molestias distinctio magni explicabo quas aspernatur illo aut sunt, et, quae incidunt voluptatibus eveniet perferendis vel consectetur pariatur suscipit quod, ad voluptatum fugit dignissimos? Repellendus cum optio iusto minima animi id, vitae doloribus quae, debitis magnam aspernatur in praesentium fugit vero. Laudantium, saepe accusamus repellendus ea eligendi quis totam odit deserunt minus exercitationem, reiciendis repudiandae vero tenetur autem voluptatum. Corporis veritatis necessitatibus harum omnis commodi recusandae sequi nemo quia? Nostrum accusamus ipsam sed eum ea, vel voluptas id eaque repellendus quas velit assumenda possimus magnam iure eius provident expedita, ratione saepe.</p> -->
                                    </div>
                                                                    <div class="course-desc px-4 text-dark _e33fbec077df40a8a0cb528b91ca3d06">
                                        <hr class="bg-dark" />
                                        <p><div class="ql-editor read-mode"><p>With the help of an example C program, we will learn about loop structure, how to use loops, where to use loops, and what types of loops exist. We will eventually solve some problems using loops.</p><p><br></p><h2><strong style="background-color: rgb(21, 26, 30); color: rgb(221, 221, 221);">Today Notes</strong></h2><h3><br></h3><p> [Git repository &nbsp;link] = <a href="(https://git.selfmade.ninja/sibidharan/c-by-kamalraj)" rel="noopener noreferrer">(https://git.selfmade.ninja/sibidharan/c-by-kamalraj)</a></p><p><br></p></div></p>
                                        <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum molestias distinctio magni explicabo quas aspernatur illo aut sunt, et, quae incidunt voluptatibus eveniet perferendis vel consectetur pariatur suscipit quod, ad voluptatum fugit dignissimos? Repellendus cum optio iusto minima animi id, vitae doloribus quae, debitis magnam aspernatur in praesentium fugit vero. Laudantium, saepe accusamus repellendus ea eligendi quis totam odit deserunt minus exercitationem, reiciendis repudiandae vero tenetur autem voluptatum. Corporis veritatis necessitatibus harum omnis commodi recusandae sequi nemo quia? Nostrum accusamus ipsam sed eum ea, vel voluptas id eaque repellendus quas velit assumenda possimus magnam iure eius provident expedita, ratione saepe.</p> -->
                                    </div>
                                                                    <div class="course-desc px-4 text-dark _9345da6cf6d648658124e33babeb4fb9">
                                        <hr class="bg-dark" />
                                        <p><div class="ql-editor read-mode"><p>We discuss one of the most important subjects in programming in this class: arrays. We will learn what an array is, how it works, as well as how to use it. Next, we'll learn how to associate with loops and use dynamic memory initialization for arrays. After that, we'll solve a few problems. </p></div></p>
                                        <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum molestias distinctio magni explicabo quas aspernatur illo aut sunt, et, quae incidunt voluptatibus eveniet perferendis vel consectetur pariatur suscipit quod, ad voluptatum fugit dignissimos? Repellendus cum optio iusto minima animi id, vitae doloribus quae, debitis magnam aspernatur in praesentium fugit vero. Laudantium, saepe accusamus repellendus ea eligendi quis totam odit deserunt minus exercitationem, reiciendis repudiandae vero tenetur autem voluptatum. Corporis veritatis necessitatibus harum omnis commodi recusandae sequi nemo quia? Nostrum accusamus ipsam sed eum ea, vel voluptas id eaque repellendus quas velit assumenda possimus magnam iure eius provident expedita, ratione saepe.</p> -->
                                    </div>
                                                                    <div class="course-desc px-4 text-dark _cf1e728d6e2b40309f5363553a09cf84">
                                        <hr class="bg-dark" />
                                        <p><div class="ql-editor read-mode"><p>First, we solved some programming problems in C. Then, we started learning about user-defined data types in C, which are structure and union. We looked at how to use them, where they could be used, and the difference between them. We discuss the basics of developing logic for solving a problem at the end of the class.</p></div></p>
                                        <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum molestias distinctio magni explicabo quas aspernatur illo aut sunt, et, quae incidunt voluptatibus eveniet perferendis vel consectetur pariatur suscipit quod, ad voluptatum fugit dignissimos? Repellendus cum optio iusto minima animi id, vitae doloribus quae, debitis magnam aspernatur in praesentium fugit vero. Laudantium, saepe accusamus repellendus ea eligendi quis totam odit deserunt minus exercitationem, reiciendis repudiandae vero tenetur autem voluptatum. Corporis veritatis necessitatibus harum omnis commodi recusandae sequi nemo quia? Nostrum accusamus ipsam sed eum ea, vel voluptas id eaque repellendus quas velit assumenda possimus magnam iure eius provident expedita, ratione saepe.</p> -->
                                    </div>
                                                                    <div class="course-desc px-4 text-dark _4e2e881c5bed4ade80b4de7efaf68600">
                                        <hr class="bg-dark" />
                                        <p><div class="ql-editor read-mode"><p>As we begin the class, we will briefly discuss ASCII (American Standard Code for Information Interchange). Next, we will learn the most important topic in C. Some say it is an incomprehensible topic, but we will learn it easily and efficiently. we learn how to associate with an array. We will also learn how to get user input through spaces and how to increment or decrement in C.</p></div></p>
                                        <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum molestias distinctio magni explicabo quas aspernatur illo aut sunt, et, quae incidunt voluptatibus eveniet perferendis vel consectetur pariatur suscipit quod, ad voluptatum fugit dignissimos? Repellendus cum optio iusto minima animi id, vitae doloribus quae, debitis magnam aspernatur in praesentium fugit vero. Laudantium, saepe accusamus repellendus ea eligendi quis totam odit deserunt minus exercitationem, reiciendis repudiandae vero tenetur autem voluptatum. Corporis veritatis necessitatibus harum omnis commodi recusandae sequi nemo quia? Nostrum accusamus ipsam sed eum ea, vel voluptas id eaque repellendus quas velit assumenda possimus magnam iure eius provident expedita, ratione saepe.</p> -->
                                    </div>
                                                                    <div class="course-desc px-4 text-dark _94df468cb0eb4c60a4ce982ae26f6cd8">
                                        <hr class="bg-dark" />
                                        <p><div class="ql-editor read-mode"><p>We are all learning the depth of the C program at a leisurely pace in this expedition. I want to introduce you to another essential topic in every programming language. In this session, we'll learn about functions that are different models of functions, why we use them, where we use them, and how to make a perfect function. Finally, we'll solve some problems.</p></div></p>
                                        <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum molestias distinctio magni explicabo quas aspernatur illo aut sunt, et, quae incidunt voluptatibus eveniet perferendis vel consectetur pariatur suscipit quod, ad voluptatum fugit dignissimos? Repellendus cum optio iusto minima animi id, vitae doloribus quae, debitis magnam aspernatur in praesentium fugit vero. Laudantium, saepe accusamus repellendus ea eligendi quis totam odit deserunt minus exercitationem, reiciendis repudiandae vero tenetur autem voluptatum. Corporis veritatis necessitatibus harum omnis commodi recusandae sequi nemo quia? Nostrum accusamus ipsam sed eum ea, vel voluptas id eaque repellendus quas velit assumenda possimus magnam iure eius provident expedita, ratione saepe.</p> -->
                                    </div>
                                                                    <div class="course-desc px-4 text-dark _b7e661ba99fe419784da6078eed08178">
                                        <hr class="bg-dark" />
                                        <p><div class="ql-editor read-mode"><p>In this class, we'll learn how to pass an array to a function. We'll also learn about the variable life cycle in C and Dynamic memory allocation with model C programs. We'll also discuss the previous task, which was password validation.</p></div></p>
                                        <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum molestias distinctio magni explicabo quas aspernatur illo aut sunt, et, quae incidunt voluptatibus eveniet perferendis vel consectetur pariatur suscipit quod, ad voluptatum fugit dignissimos? Repellendus cum optio iusto minima animi id, vitae doloribus quae, debitis magnam aspernatur in praesentium fugit vero. Laudantium, saepe accusamus repellendus ea eligendi quis totam odit deserunt minus exercitationem, reiciendis repudiandae vero tenetur autem voluptatum. Corporis veritatis necessitatibus harum omnis commodi recusandae sequi nemo quia? Nostrum accusamus ipsam sed eum ea, vel voluptas id eaque repellendus quas velit assumenda possimus magnam iure eius provident expedita, ratione saepe.</p> -->
                                    </div>
                                                                    <div class="course-desc px-4 text-dark _1a5ed27ea51f4d40b35294b753808224">
                                        <hr class="bg-dark" />
                                        <p><div class="ql-editor read-mode"><p>Today we are going to learn how to handle files in the C program with detailed examples. We will learn how to read, write, and append files. In the end, we learn how to develop our logical thinking. Knowledge is useless unless you put it into practice.</p></div></p>
                                        <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum molestias distinctio magni explicabo quas aspernatur illo aut sunt, et, quae incidunt voluptatibus eveniet perferendis vel consectetur pariatur suscipit quod, ad voluptatum fugit dignissimos? Repellendus cum optio iusto minima animi id, vitae doloribus quae, debitis magnam aspernatur in praesentium fugit vero. Laudantium, saepe accusamus repellendus ea eligendi quis totam odit deserunt minus exercitationem, reiciendis repudiandae vero tenetur autem voluptatum. Corporis veritatis necessitatibus harum omnis commodi recusandae sequi nemo quia? Nostrum accusamus ipsam sed eum ea, vel voluptas id eaque repellendus quas velit assumenda possimus magnam iure eius provident expedita, ratione saepe.</p> -->
                                    </div>
                                                                    <div class="course-desc px-4 text-dark _be923f5b115e43deb5187b9a36f01041">
                                        <hr class="bg-dark" />
                                        <p><div class="ql-editor read-mode"><p>This class focuses only on how to improve your problem-solving skills. You will learn how to solve problems and how to write algorithms correctly. Also in this session, we will solve a few examples. "Good ideas do not automatically become reality. They must be driven into practice with courage and patience."</p></div></p>
                                        <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum molestias distinctio magni explicabo quas aspernatur illo aut sunt, et, quae incidunt voluptatibus eveniet perferendis vel consectetur pariatur suscipit quod, ad voluptatum fugit dignissimos? Repellendus cum optio iusto minima animi id, vitae doloribus quae, debitis magnam aspernatur in praesentium fugit vero. Laudantium, saepe accusamus repellendus ea eligendi quis totam odit deserunt minus exercitationem, reiciendis repudiandae vero tenetur autem voluptatum. Corporis veritatis necessitatibus harum omnis commodi recusandae sequi nemo quia? Nostrum accusamus ipsam sed eum ea, vel voluptas id eaque repellendus quas velit assumenda possimus magnam iure eius provident expedita, ratione saepe.</p> -->
                                    </div>
                                                                    <div class="course-desc px-4 text-dark _89726e543fed41e3bc5a1034f310d3dc">
                                        <hr class="bg-dark" />
                                        <p><div class="ql-editor read-mode"><p>During this class, you will learn problem-solving skills appropriate for beginners. Most beginners get stuck in this step. This class will help you with a step-by-step guide to problem-solving using an example C program.</p></div></p>
                                        <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum molestias distinctio magni explicabo quas aspernatur illo aut sunt, et, quae incidunt voluptatibus eveniet perferendis vel consectetur pariatur suscipit quod, ad voluptatum fugit dignissimos? Repellendus cum optio iusto minima animi id, vitae doloribus quae, debitis magnam aspernatur in praesentium fugit vero. Laudantium, saepe accusamus repellendus ea eligendi quis totam odit deserunt minus exercitationem, reiciendis repudiandae vero tenetur autem voluptatum. Corporis veritatis necessitatibus harum omnis commodi recusandae sequi nemo quia? Nostrum accusamus ipsam sed eum ea, vel voluptas id eaque repellendus quas velit assumenda possimus magnam iure eius provident expedita, ratione saepe.</p> -->
                                    </div>
                                                                                                        </div>
                    <hr class="m-0 text-light" />
                </div>
                                    <div class="course-notes d-flex h-100 _0bad22fb54c74d859f1c32d60c1f38b5">
                            <div class="card w-100 shadow">
                                <div class="card-body">
                                    <h5 class="d-flex align-items-center card-title text-light text-uppercase fs-6 fw-bold"><i class="fa-solid fa-paperclip"></i>
                                        <p class="m-0 ms-2">Notes</p>
                                    </h5>
                                    <hr class="text-light">
                                    <div class="d-flex justify-content-between class-info">
                                                                                        <p class="text-light">Not available...</p>
                                                                                    </div>
                                </div>
                            </div>
                        </div>
                                                <div class="course-notes d-flex h-100 _4ca1046276b94d5c9102ddda5a0affdd">
                            <div class="card w-100 shadow">
                                <div class="card-body">
                                    <h5 class="d-flex align-items-center card-title text-light text-uppercase fs-6 fw-bold"><i class="fa-solid fa-paperclip"></i>
                                        <p class="m-0 ms-2">Notes</p>
                                    </h5>
                                    <hr class="text-light">
                                    <div class="d-flex justify-content-between class-info">
                                                                                        <p class="text-light">Not available...</p>
                                                                                    </div>
                                </div>
                            </div>
                        </div>
                                                <div class="course-notes d-flex h-100 _e6899d108fc04ff485888d606a4bd9a0">
                            <div class="card w-100 shadow">
                                <div class="card-body">
                                    <h5 class="d-flex align-items-center card-title text-light text-uppercase fs-6 fw-bold"><i class="fa-solid fa-paperclip"></i>
                                        <p class="m-0 ms-2">Notes</p>
                                    </h5>
                                    <hr class="text-light">
                                    <div class="d-flex justify-content-between class-info">
                                                                                        <p class="text-light">Not available...</p>
                                                                                    </div>
                                </div>
                            </div>
                        </div>
                                                <div class="course-notes d-flex h-100 _83667a261cc24965b1046f04031e4848">
                            <div class="card w-100 shadow">
                                <div class="card-body">
                                    <h5 class="d-flex align-items-center card-title text-light text-uppercase fs-6 fw-bold"><i class="fa-solid fa-paperclip"></i>
                                        <p class="m-0 ms-2">Notes</p>
                                    </h5>
                                    <hr class="text-light">
                                    <div class="d-flex justify-content-between class-info">
                                                                                        <p class="text-light">Not available...</p>
                                                                                    </div>
                                </div>
                            </div>
                        </div>
                                                <div class="course-notes d-flex h-100 _7d733e503d1c48a89ca18660c9189987">
                            <div class="card w-100 shadow">
                                <div class="card-body">
                                    <h5 class="d-flex align-items-center card-title text-light text-uppercase fs-6 fw-bold"><i class="fa-solid fa-paperclip"></i>
                                        <p class="m-0 ms-2">Notes</p>
                                    </h5>
                                    <hr class="text-light">
                                    <div class="d-flex justify-content-between class-info">
                                                                                        <p class="text-light">Not available...</p>
                                                                                    </div>
                                </div>
                            </div>
                        </div>
                                                <div class="course-notes d-flex h-100 _e33fbec077df40a8a0cb528b91ca3d06">
                            <div class="card w-100 shadow">
                                <div class="card-body">
                                    <h5 class="d-flex align-items-center card-title text-light text-uppercase fs-6 fw-bold"><i class="fa-solid fa-paperclip"></i>
                                        <p class="m-0 ms-2">Notes</p>
                                    </h5>
                                    <hr class="text-light">
                                    <div class="d-flex justify-content-between class-info">
                                                                                        <p class="text-light">Not available...</p>
                                                                                    </div>
                                </div>
                            </div>
                        </div>
                                                <div class="course-notes d-flex h-100 _9345da6cf6d648658124e33babeb4fb9">
                            <div class="card w-100 shadow">
                                <div class="card-body">
                                    <h5 class="d-flex align-items-center card-title text-light text-uppercase fs-6 fw-bold"><i class="fa-solid fa-paperclip"></i>
                                        <p class="m-0 ms-2">Notes</p>
                                    </h5>
                                    <hr class="text-light">
                                    <div class="d-flex justify-content-between class-info">
                                                                                        <p class="text-light">Not available...</p>
                                                                                    </div>
                                </div>
                            </div>
                        </div>
                                                <div class="course-notes d-flex h-100 _cf1e728d6e2b40309f5363553a09cf84">
                            <div class="card w-100 shadow">
                                <div class="card-body">
                                    <h5 class="d-flex align-items-center card-title text-light text-uppercase fs-6 fw-bold"><i class="fa-solid fa-paperclip"></i>
                                        <p class="m-0 ms-2">Notes</p>
                                    </h5>
                                    <hr class="text-light">
                                    <div class="d-flex justify-content-between class-info">
                                                                                        <p class="text-light">Not available...</p>
                                                                                    </div>
                                </div>
                            </div>
                        </div>
                                                <div class="course-notes d-flex h-100 _4e2e881c5bed4ade80b4de7efaf68600">
                            <div class="card w-100 shadow">
                                <div class="card-body">
                                    <h5 class="d-flex align-items-center card-title text-light text-uppercase fs-6 fw-bold"><i class="fa-solid fa-paperclip"></i>
                                        <p class="m-0 ms-2">Notes</p>
                                    </h5>
                                    <hr class="text-light">
                                    <div class="d-flex justify-content-between class-info">
                                                                                        <p class="text-light">Not available...</p>
                                                                                    </div>
                                </div>
                            </div>
                        </div>
                                                <div class="course-notes d-flex h-100 _94df468cb0eb4c60a4ce982ae26f6cd8">
                            <div class="card w-100 shadow">
                                <div class="card-body">
                                    <h5 class="d-flex align-items-center card-title text-light text-uppercase fs-6 fw-bold"><i class="fa-solid fa-paperclip"></i>
                                        <p class="m-0 ms-2">Notes</p>
                                    </h5>
                                    <hr class="text-light">
                                    <div class="d-flex justify-content-between class-info">
                                                                                        <p class="text-light">Not available...</p>
                                                                                    </div>
                                </div>
                            </div>
                        </div>
                                                <div class="course-notes d-flex h-100 _b7e661ba99fe419784da6078eed08178">
                            <div class="card w-100 shadow">
                                <div class="card-body">
                                    <h5 class="d-flex align-items-center card-title text-light text-uppercase fs-6 fw-bold"><i class="fa-solid fa-paperclip"></i>
                                        <p class="m-0 ms-2">Notes</p>
                                    </h5>
                                    <hr class="text-light">
                                    <div class="d-flex justify-content-between class-info">
                                                                                        <p class="text-light">Not available...</p>
                                                                                    </div>
                                </div>
                            </div>
                        </div>
                                                <div class="course-notes d-flex h-100 _1a5ed27ea51f4d40b35294b753808224">
                            <div class="card w-100 shadow">
                                <div class="card-body">
                                    <h5 class="d-flex align-items-center card-title text-light text-uppercase fs-6 fw-bold"><i class="fa-solid fa-paperclip"></i>
                                        <p class="m-0 ms-2">Notes</p>
                                    </h5>
                                    <hr class="text-light">
                                    <div class="d-flex justify-content-between class-info">
                                                                                        <p class="text-light">Not available...</p>
                                                                                    </div>
                                </div>
                            </div>
                        </div>
                                                <div class="course-notes d-flex h-100 _be923f5b115e43deb5187b9a36f01041">
                            <div class="card w-100 shadow">
                                <div class="card-body">
                                    <h5 class="d-flex align-items-center card-title text-light text-uppercase fs-6 fw-bold"><i class="fa-solid fa-paperclip"></i>
                                        <p class="m-0 ms-2">Notes</p>
                                    </h5>
                                    <hr class="text-light">
                                    <div class="d-flex justify-content-between class-info">
                                                                                        <p class="text-light">Not available...</p>
                                                                                    </div>
                                </div>
                            </div>
                        </div>
                                                <div class="course-notes d-flex h-100 _89726e543fed41e3bc5a1034f310d3dc">
                            <div class="card w-100 shadow">
                                <div class="card-body">
                                    <h5 class="d-flex align-items-center card-title text-light text-uppercase fs-6 fw-bold"><i class="fa-solid fa-paperclip"></i>
                                        <p class="m-0 ms-2">Notes</p>
                                    </h5>
                                    <hr class="text-light">
                                    <div class="d-flex justify-content-between class-info">
                                                                                        <p class="text-light">Logical Thinking 1.pdf</p>
                                                <button class="download-note btn btn-transparent text-primary fw-bold" id="CBK DAY 11"><i class="fa-solid fa-download me-1"></i>Download</button>
                                                                                    </div>
                                </div>
                            </div>
                        </div>
                            </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="index.js"></script>
    
    <script>
         var doesVideosExist = function(){
            if(document.querySelector(".program")){
                return document.getElementsByClassName(`${document.querySelector(".program > .active").id}`)[0]
            }else{
                return document.getElementsByClassName("Internet-of-Things-(தமிழ்)")[0]
            }
        }
        var videoId = document.querySelector(".day-btn.active");
        var courseDesc = document.querySelectorAll(".course-desc");
        var courseTitle = document.querySelectorAll(".course_title");
        var courseNotes = document.querySelectorAll(".course-notes");

        var notes = document.querySelectorAll(".download-note");
        notes.forEach((item)=>{
            item.addEventListener("click", onNoteDownload)
        });

        function onNoteDownload(e){
            window.location.assign(base['origin'] + "/lib/api/notes/download.php?id="+e.target.id)
        }
        hideElements(courseDesc)

        // courseTitle.forEach((item, i)=>{
        //     item.style.setProperty("display", "none", "important");
        // })
        hideElements(courseTitle)

        hideElements(courseNotes)

        if(doesVideosExist()){
            courseDesc[0].style.setProperty("display", "", "important");
            courseTitle[0].style.setProperty("display", "", "important");
            courseNotes[0].style.setProperty("display", "", "important");
            try {
                loadClassVideo("Asvika .M,asvika07@gmail.com,43.250.42.135", videoId.id)
            } catch (err) {

            }
        }

        var dayBtn = document.getElementsByClassName("day-btn");
        dayBtn = [...dayBtn]
        dayBtn.forEach((db) => {
            db.addEventListener("click", onDayEventClick)
        })

        function onDayEventClick(e) {
            dayBtn.forEach((db) => {
                db.classList.remove('active')
            })
            e.target.classList.add("active")
            hideElements(courseDesc)
            hideElements(courseTitle)
            hideElements(courseNotes)
            var toActive = document.querySelectorAll("._"+e.target.id)
            toActive = [...toActive]
            toActive.forEach((item)=>{
                item.style.setProperty("display", "", "important")
            })

            const base = window.location;
            var toke_data = '';
            loadClassVideo("Asvika .M,asvika07@gmail.com,43.250.42.135", e.target.id)
            // window.location.href = window.location['origin'] + "/class.php?id="+e.target.id
        }

        var videoUnavailContent = document.getElementById("video_unavail_content");
        var programSection = document.getElementsByClassName("program-section");
        programSection = [...programSection]
        programSection.forEach((ps) => {
            ps.addEventListener("click", onProgramSection)
        })

        function onProgramSection(e) {
            var currentDayContent = e.currentTarget.id
            programSection.forEach((ps) => {
                ps.classList.remove('active')
            })
            e.target.classList.add("active")

            var daysContent = document.getElementsByClassName("days-content");
            hideElements(daysContent)
            hideElements(courseDesc)
            hideElements(courseTitle)
            hideElements(courseNotes)
            try{
                document.getElementsByClassName(currentDayContent)[0].style.setProperty("display", "", "important")
            }catch(e){
                document.querySelector("#video_unavail_content").style.setProperty("display", "", "important")
            }

            var dayBtn = document.getElementsByClassName("day-btn")
            dayBtn = [...dayBtn]
            dayBtn.forEach((btn) => {
                btn.classList.remove("active")
            })
            if(!doesVideosExist()){
                document.querySelector("#video_unavail_content").style.setProperty("display", "", "important")
                document.querySelector("#embedBox").style.setProperty("display", "none", "important");
                return ;
            }else{
                document.getElementsByClassName(currentDayContent)[0].children[0].classList += " active"
                document.querySelector("#video_unavail_content").style.setProperty("display", "none", "important")
                document.querySelector("#embedBox").style.setProperty("display", "", "important");
            }
            var videoId = document.querySelector(".day-btn.active");
            var toActive = document.querySelectorAll("._" + videoId.id)
            toActive.forEach((item)=>{
                item.style.setProperty("display", "", "important")
            })

            loadClassVideo("Asvika .M,asvika07@gmail.com,43.250.42.135", videoId.id)
        }

        function hideElements(group){
            group = [...group]
            group.forEach((item, i)=>{
                item.style.setProperty("display", "none", "important");
            })
        }
    </script>
    <script>
        // const base = window.location;
        var toke_data = '';
        console.log(base['origin'] + "/drm/main.php")
        $(document).ready(function() {
            $.ajax({
                url: base['origin'] + "/drm/main.php",
                method: 'post',
                dataType: 'json',
                data: {
                    token: 'Array'
                },
                success: function(res) {
                    let dashUri = res.data.file_url;
                    let licenseUri = 'https://www.videocrypt.in/index.php/rest_api/courses/course/on_request_create_video_license';
                    let widevineToken = res.data.token;
                    //toke_data = res.data.token;


                    if (widevineToken == "") {
                        var player = videojs('my_video_1', {
                            controls: true,
                            // techOrder: ['shaka'],
                            playbackRates: [0.5, 1, 1.5, 2, 4],
                            plugins: {
                                videoJsResolutionSwitcher: {
                                    default: 'high',
                                    dynamicLabel: true
                                }
                            },
                            html5: {
                                nativeCaptions: false,
                                dash: {
                                    setLimitBitrateByPortal: true,
                                    // setMaxAllowedBitrateFor: ['video', 2000]
                                }
                            },
                            techOrder: ["html5"]
                        });
                        // player.qualityPickerPlugin();
                        var v_type = dashUri.includes('.mpd') ? 'application/dash+xml' : 'application/x-mpegURL';
                        player.src([{
                            src: dashUri,
                            type: v_type,
                            label: 'SD'
                        }]);
                        player.one("loadedmetadata", () => {
                            let calidades = player
                                .tech({
                                    IWillNotUseThisInPlugins: true
                                })
                                .hls.representations();

                            crearBotonesCalidades({
                                class: "item",
                                calidades: calidades,
                                father: player.controlBar.el_
                            });


                            // ---------------------------------------------- //

                            function crearBotonAutoCalidad(params) {
                                let button = document.createElement("div");

                                button.id = "auto";
                                button.innerText = `Auto`;

                                button.classList.add("selected");

                                if (params && params.class)
                                    button.classList.add(params.class);

                                button.addEventListener("click", () => {
                                    removeSelected(params);
                                    button.classList.add("selected");
                                    calidades.map((calidad) => calidad.enabled(true));
                                });

                                return button;
                            }

                            function crearBotonesCalidades(params) {
                                let contentMenu = document.createElement("div");
                                let menu = document.createElement("div");
                                let icon = document.createElement("div");

                                let fullscreen = params.father.querySelector(".vjs-fullscreen-control");
                                contentMenu.appendChild(icon);
                                contentMenu.appendChild(menu);
                                fullscreen.before(contentMenu);

                                menu.classList.add("menu");
                                icon.classList.add("icon", "vjs-icon-cog");
                                contentMenu.classList.add("contentMenu");

                                let botonAuto = crearBotonAutoCalidad(params);

                                menu.appendChild(botonAuto);

                                calidades.sort((a, b) => {
                                    return a.height > b.height ? 1 : 0;
                                });

                                calidades.map((calidad) => {
                                    let button = document.createElement("div");

                                    if (params && params.class)
                                        button.classList.add(params.class);

                                    button.id = `${calidad.height}`;
                                    button.innerText = calidad.height + "p";

                                    button.addEventListener("click", () => {
                                        resetCalidad(params);
                                        button.classList.add("selected");
                                        calidad.enabled(true);
                                    });

                                    menu.appendChild(button);
                                });

                                setInterval(() => {
                                    let auto = document.querySelector("#auto");
                                    current = player
                                        .tech({
                                            IWillNotUseThisInPlugins: true
                                        })
                                        .hls.selectPlaylist().attributes.RESOLUTION.height;
                                    // console.log(current);

                                    document.querySelector("#auto").innerHTML = auto.classList.contains(
                                            "selected"
                                        ) ?
                                        `Auto <span class='current'>${current}p</span>` :
                                        "Auto";
                                }, 1000);
                            }

                            function removeSelected(params) {
                                document.querySelector("#auto").classList.remove("selected");
                                [...document.querySelectorAll(`.${params.class}`)].map((calidad) => {
                                    calidad.classList.remove("selected");
                                });
                            }

                            function resetCalidad(params) {
                                removeSelected(params);

                                for (let calidad of params.calidades) {
                                    calidad.enabled(false);
                                }
                            }
                        });
                    } else {
                        var player = videojs('my_video_1', {
                            techOrder: ['shaka'],
                            playbackRates: [0.5, 1, 1.5, 2, 4],
                            headers: {
                                'custom-header': 'some value'
                            },
                            shaka: {
                                debug: false,
                                sideload: true,
                                configuration: {
                                    drm: {
                                        servers: {
                                            'com.widevine.alpha': licenseUri + "?pallyconCustomdataV2=" + widevineToken
                                        },
                                        advanced: {
                                            'com.widevine.alpha': {
                                                'videoRobustness': 'SW_SECURE_CRYPTO',
                                                'audioRobustness': 'SW_SECURE_CRYPTO'
                                            }
                                        }
                                    },
                                    // shaka player configuration - https://shaka-player-demo.appspot.com/docs/api/tutorial-config.html
                                },
                                licenseServerAuth: function(type, request) {
                                    if (type == shaka.net.NetworkingEngine.RequestType.LICENSE) {
                                        // This is the specific header name and value the server wants:
                                        //                                            request.allowCrossSiteCredentials = true;
                                        //                                            request.headers['Access-Control-Allow-Origin'] = "*";
                                        // request.headers['pallycon-customdata-v2'] = widevineToken;
                                    }

                                }
                            }

                        });
                        player.qualityPickerPlugin();
                        player.src([{
                            type: 'application/dash+xml',
                            src: dashUri
                        }]);
                    }

                    player.seekButtons({
                        forward: 30,
                        back: 10
                    });

                    player.on('error', function() {
                        console.log(JSON.parse(JSON.stringify(player.error())));
                    });

                    player.play().then(function() {
                        console.log("autoplay was successful!");
                    }).catch(function(error) {
                        console.log(error);
                    });
                }
            });
        });
    </script>

</body>

</html>