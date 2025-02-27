<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <title>Sekolah</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="shortcut icon" href="./Img/LogoSekolah.png" type="image">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
</head>
<body>
    <header class="bg-white">
        <nav class="flex justify-between items-center w-[92%] mx-auto">
            <div class="flex items-center">
                <img class="w-16 cursor-pointer" src="Img/LogoSekolah.png" alt="...">
                <p class="ml-2"><strong>Sekolah Gracia</strong></p> 
            </div>
            <div class="nav-links duration-500 md:static absolute bg-white md:min-h-fit min-h-[60vh] left-0 top-[-100%] md:w-auto w-full flex items-center px-5">
                <ul class="flex md:flex-row flex-col md:items-center gap-7">
                    <li>
                        <a class="hover:text-gray-500" href="#">Student Information</a>
                    </li>
                    <li>
                        <a class="hover:text-gray-500" href="#">Course Overview</a>
                    </li>
                    <li>
                        <a class="hover:text-gray-500" href="#">Contact Us</a>
                    </li>
                    <li>
                        <a class="hover:text-gray-500" href="#">About us</a>
                    </li>
                    <li>
                        <a class="hover:text-gray-500" href="#">Enroll Now</a>
                    </li>
                </ul>
            </div>
            <div class="flex items-center gap-6">
                <button class="bg-[#a6c1ee] text-white px-5 py-2 rounded-full hover:bg-[#87acec]">Login</button>
                <ion-icon onclick="onToggleMenu(this)" name="menu" class="text-3xl cursor-pointer md:hidden"></ion-icon>
            </div>
        </nav>
    </header>
    
    


    <section class="background firstSection">
        <div class="box-main">
            <div class="firstHalf">
                <p class="text-big">The Best Education You can Get.</p>
                <p class="text-small">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, optio labore doloremque veniam voluptatum nobis.</p>
                <button class="sbtn">Learn More</button>
            </div>

            <div class="secondHalf">
                <img src="img/LogoSekolah.png" alt="">
            </div>
        </div>
    </section>
    <br />
    <br />
    <br />
    <section class="section">
        <div class="paras">
        <p class="sectionTag text-big">Good Education Start from Here</p>
        <p class="sectionSubTag text-small">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro in molestias maxime. Iusto rem dolorum necessitatibus, reprehenderit nam, laborum tenetur eius ducimus officia, corrupti adipisci. Perspiciatis, sed excepturi saepe iure incidunt harum reiciendis eius consectetur neque error. Deleniti voluptatum totam accusantium, ipsum quas quidem cupiditate molestias porro, maiores vero praesentium sed dolore placeat delectus harum animi?</p>
        </div>
        <div class="thumbnail">
            <img src="img/siswa2.jpg" alt="laptop image" class="imgFluid">
        </div>
    </section>

    <section class="section secLeft">
        <div class="paras">
        <p class="sectionTag text-big">Let's Grow together</p>
        <p class="sectionSubTag text-small">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro in molestias maxime. Iusto rem dolorum necessitatibus, reprehenderit nam, laborum tenetur eius ducimus officia, corrupti adipisci. Perspiciatis, sed excepturi saepe iure incidunt harum reiciendis eius consectetur neque error. Deleniti voluptatum totam accusantium, ipsum quas quidem cupiditate molestias porro, maiores vero praesentium sed dolore placeat delectus harum animi?</p>
        </div>
        <div class="thumbnail">
            <img src="img/sekolah1.jpg" alt="laptop image" class="imgFluid">
        </div>
    </section> 

    <section class="section">
        <div class="paras">
        <p class="sectionTag text-big">Join s!!!</p>
        <p class="sectionSubTag text-small">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro in molestias maxime. Iusto rem dolorum necessitatibus, reprehenderit nam, laborum tenetur eius ducimus officia, corrupti adipisci. Perspiciatis, sed excepturi saepe iure incidunt harum reiciendis eius consectetur neque error. Deleniti voluptatum totam accusantium, ipsum quas quidem cupiditate molestias porro, maiores vero praesentium sed dolore placeat delectus harum animi?</p>
        </div>
        <div class="thumbnail">
            <img src="img/join-us.jpg" alt="laptop image" class="imgFluid hack">
        </div>
    </section>
    <br/>
    <br/>
    <section class="contact" id="contact">
        <div class="contact-container">
            <div class="contact-content">
                <h2 class="section-title">Contact Us</h2>
                <p class="section-description">We'd love to hear from you. Please fill out the form below.</p>
                <form class="contact-form">
                    <input type="text" class="form-input" name="name" id="name" placeholder="Your Name">
                    <input type="tel" class="form-input" name="phone" id="phone" placeholder="Your Phone Number">
                    <input type="email" class="form-input" name="email" id="email" placeholder="Your Email">
                    <textarea class="form-textarea" name="message" id="message" rows="5" placeholder="Your Message"></textarea>
                    <button class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </section>
    

    <footer class="background">
        <p class="text-footer">Copyright &copy;Sekolah Gracia 2023</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <script>
        AOS.init();
    </script>
    <script src="js/script.js"></script>
</body>
</html>
