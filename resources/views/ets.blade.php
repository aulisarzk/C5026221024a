<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DPR +IAN</title>
    <link rel="stylesheet" href="{{asset('/folderets/style.css')}}">
    <script src="script.js"></script>
</head>

<body>
    <div class="navbar flex justify-center">
        <a href="#about_me">ABOUT ME</a>
        <a href="#journey">JOURNEY</a>
        <a href="#music">MUSIC</a>
        <a href="#gallery">GALLERY</a>
        <a href="#shop">SHOP</a>
        <p>DPR +IAN</p>
    </div>

    <div class="about_me flex" id="about_me">
        <img src="{{asset('/folderets/bg_remove-removebg-preview.png')}}" alt="">

        <div class="about_me_content flex col">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <div class="about_me_box">
                            <p>Birth Name</p>
                        </div>
                    </div>
                    <div class="flip-card-back">
                        <div class="about_me_box">
                            <p>Christian Yu</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <div class="about_me_box">
                            <p>Korean name</p>
                        </div>
                    </div>
                    <div class="flip-card-back">
                        <div class="about_me_box">
                            <p>DPR IAN</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <div class="about_me_box">
                            <p>Birthday</p>
                        </div>
                    </div>
                    <div class="flip-card-back">
                        <div class="about_me_box">
                            <p>Sept 6,1990</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <div class="about_me_box">
                            <p>Nationality</p>
                        </div>
                    </div>
                    <div class="flip-card-back">
                        <div class="about_me_box">
                            <p>Korean-Australian</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <div class="about_me_box">
                            <p>Height</p>
                        </div>
                    </div>
                    <div class="flip-card-back">
                        <div class="about_me_box">
                            <p>174 (5'9)</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <div class="about_me_box">
                            <p>Weight</p>
                        </div>
                    </div>
                    <div class="flip-card-back">
                        <div class="about_me_box">
                            <p>60kg</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </div>
    <div class="journey flex align-center justify-center" id="journey">
        <div class="content flex perfect_center">
            <div class="card_content flex col align-center">
                <img src="{{asset('/folderets/child photo.jpg')}}" alt="">
                <p>child</p>
            </div>
            <div class="card_content flex col align-center">
                <img src="{{asset('/folderets/teenage.jpg')}}" alt="">
                <p>at 18</p>
            </div>
            <div class="card_content flex col align-center">
                <img src="{{asset('/folderets/cclown2.jpg')}}" alt="">
                <p>2012-2025</p>
            </div>
            <div class="card_content flex col align-center">
                <img src="{{asset('/folderets/dpr3.jpg')}}" alt="">
                <p>2015-now</p>
            </div>
        </div>
    </div>
    <div class="music flex perfect_center" id="music">
        <a href="https://open.spotify.com/artist/2o8gT0fQmFxGNbowbdgeZe?si=FQauVQbjTL2ivIvkd1lUvA"><img src="{{asset('/folderets/album3.png')}}" alt=""></a>
    </div>
    <div class="gallery" id="gallery">
        <div class="image_gallery flex align-center">
            <img src="{{asset('/folderets/photo5.jpg')}}" alt="">
            <img src="{{asset('/folderets/photo6.jpg')}}" alt="">
            <img src="{{asset('/folderets/20231022_174811.jpg')}}" alt="">
        </div>
        <p>...</p>
    </div>
    <div class="shop flex perfect_center" id="shop">
        <a href="#shop_1" class="btn_shop1">
            <div class="content_card flex col align-center">
                <img src="{{asset('/folderets/20231022_174849.jpg')}}" alt="">
                <img class="add_img" src="{{asset('/folderets/Group 10.png')}}" alt="">
            </div>
        </a>
        <a href="#shop_2" class="btn_shop2">
            <div class="content_card flex col align-center">
                <img src="{{asset('/folderets/20231022_174910.jpg')}}" alt="">
                <img class="add_img" src="{{asset('/folderets/Group 10.png')}}" alt="">
            </div>
        </a>
    </div>
    <div class="shop_1 flex perfect_center" id="shop_1">
        <img src="{{asset('/folderets/20231022_174849.jpg')}}" alt="">
        <div class="form_shop flex col align-center">
            <label for="nameInput_1">Name:</label>
            <input id="nameInput_1" placeholder="Enter your name" type="text">

            <label for="emailInput_1">Email:</label>
            <input id="emailInput_1" placeholder="Enter your email" type="email">

            <label for="phoneInput_1">Phone:</label>
            <input id="phoneInput_1" placeholder="Enter your phone number" type="number">

            <label for="addressInput_1">Address:</label>
            <input id="addressInput_1" placeholder="Enter the subject" type="text">

            <div class="message flex col">
                <label for="messageInput">Your message:</label>
                <textarea id="messageInput_1" name="" placeholder="Enter your message" class="message_input" cols="30"
                    rows="4"></textarea>
            </div>
            <button id="sendButton_1">Send Message</button>
        </div>
    </div>
    <div class="shop_1 flex perfect_center" id="shop_2">
        <img src="{{asset('/folderets/20231022_174910.jpg')}}" alt="">
        <div class="form_shop flex col align-center">
            <label for="nameInput_2">Name:</label>
            <input id="nameInput_2" placeholder="Enter your name" type="text">

            <label for="emailInput_2">Email:</label>
            <input id="emailInput_2" placeholder="Enter your email" type="email">

            <label for="phoneInput_2">Phone:</label>
            <input id="phoneInput_2" placeholder="Enter your phone number" type="number">

            <label for="addressInput_2">Address:</label>
            <input id="addressInput_2" placeholder="Enter the subject" type="text">

            <div class="message flex col">
                <label for="messageInput">Your message:</label>
                <textarea id="messageInput_2" name="" placeholder="Enter your message" class="message_input" cols="30"
                    rows="4"></textarea>
            </div>
            <button id="sendButton_2">Send Message</button>
        </div>
    </div>
    <div class="container-fluid tugas-pweb" >
        <a href="cobahello" target="_blank" style="color: grey">| Hello |</a>
        <a href="link" target="_blank" style="color: grey"> Link |</a>
        <a href="corkcicle" target="_blank" style="color: grey"> Linktree |</a>
        <a href="jumbotron" target="_blank" style="color: grey"> Tugas Kelompok |</a>
        <a href="genapperempuan" target="_blank" style="color: grey"> Layout |</a><br>
    </div>
</body>

</html>
