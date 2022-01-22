<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CarlosAllenDev  website</title>
    <link rel="stylesheet" href="css/onepage1.css">
</head>
<body>
    <header>
        <nav>
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Service</a>
            <a href="#">Contact</a>
        </nav>
        <section class="header-text">
            <h1> Share your Photo Edits </h1>
            <h2>AllenCarlosDesigner</h2>
        </section>
        <div style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #08f;"></path></svg></div>
        <main>
            <section class="container about-me"></section>
                <h2 class="title"> Our design techniques</h2>
                <div class="container-about-me">
                    <img src="{{ asset('img/ourtecniquesallencarlos.svg') }}" alt="" class="image-our-tecniques">
                    <div class="content-texts">
                        <h3 class=""><span>1</span> The best design techniques </h3>
                        <p class="">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus veritatis minima ipsam. Accusantium eum, debitis vero laudantium officiis ut eligendi odio, corporis dolores dignissimos, repudiandae dolorum itaque facere magnam. Sapiente!</p>
                        <h3 class=""><span>2</span> The largest community of designers </h3>
                        <p class="">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus veritatis minima ipsam. Accusantium eum, debitis vero laudantium officiis ut eligendi odio, corporis dolores dignissimos, repudiandae dolorum itaque facere magnam. Sapiente!</p>
                        <h3 class=""><span>3</span> Monetize your designs </h3>
                        <p class="">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus veritatis minima ipsam. Accusantium eum, debitis vero laudantium officiis ut eligendi odio, corporis dolores dignissimos, repudiandae dolorum itaque facere magnam. Sapiente!</p>
                    </div>
                </div>
                <section class="gallery-of-designs">
                    <div class="container">
                        <h2 class="title">Gallery of Designs</h2>
                        <div class="gallery">
                            <div class="images-gallery">
                                <img src="{{ asset('img/gallery1.svg') }}" alt="">
                                <div class="hover-gallery">
                                    <h3> Image 1</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, qui.</p>
                                </div>
                            </div>
                            <div class="images-gallery">
                                <img src="{{ asset('img/gallery2.svg') }}" alt="">
                                <div class="hover-gallery">
                                    <h3> Image 2</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, qui.</p>
                                </div>
                            </div>
                            <div class="images-gallery">
                                <img src="{{ asset('img/gallery3.svg') }}" alt="">
                                <div class="hover-gallery">
                                    <h3> Image 3</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, qui.</p>
                                </div>
                            </div>
                            <div class="images-gallery">
                                <img src="{{ asset('img/gallery4.svg') }}" alt="">
                                <div class="hover-gallery">
                                    <h3> Image 4</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, qui.</p>
                                </div>
                            </div>
                            <div class="images-gallery">
                                <img src="{{ asset('img/gallery5.svg') }}" alt="">
                                <div class="hover-gallery">
                                    <h3> Image 5</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, qui.</p>
                                </div>
                            </div>
                            <div class="images-gallery">
                                <img src="{{ asset('img/gallery6.svg') }}" alt="">
                                <div class="hover-gallery">
                                    <h3> Image 6</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, qui.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="designer container">
                    <h2 class="title"> Designer</h2>
                    <div class="cards">
                        <div class="card">
                            <img src="{{ asset('img/designer1.svg') }}" alt="">
                            <div class="content-text-card">
                                <h4>Carlos Allen</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, ad!</p>
                            </div>
                        </div>
                    </div>
                    <div class="cards">
                        <div class="card">
                            <img src="{{ asset('img/designer1.svg') }}" alt="">
                            <div class="content-text-card">
                                <h4>Carlos Allen</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, ad!</p>
                            </div>
                        </div>
                    </div>
                </section>
        </main>
    </header>
</body>
</html>
