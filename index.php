<?php
    include $_SERVER["DOCUMENT_ROOT"]."/Moritz/main.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="css/app.css">
        <link rel="stylesheet" href="node_modules/motion-ui/dist/motion-ui.min.css">
        <title>Home</title>
    </head>
    <body>
        <div class="sidebar">
            <div class="logo_container">
                <img class="logo" src="empire-state-building.jpg">
            </div>
            <ul class="menu vertical accordion-menu main_nav" data-accordion-menu>
                <?php echo menu($_SERVER["DOCUMENT_ROOT"]."/Moritz/folders"); ?>
            </ul>
        </div>
        <div class="site_content">
            <header>
                <h1 class="main_heading">Testseite</h1>
            </header>
            <div class="orbit" role="region" aria-label="Pictures" data-orbit data-options="animInFromLeft:slide-in-left;animInFromRight:slide-in-right;animOutToLeft:fade-out;animOutToRight:fade-out;">
                <div class="orbit-wrapper">
                    <div class="orbit-controls">
                        <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
                        <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
                    </div>
                    <ul class="orbit-container">
                        <li class="is-active orbit-slide">
                            <figure class="orbit-figure">
                                <img class="orbit-image" src="images/image.jpg" alt="Space">
                                <figcaption class="orbit-caption">Luftballons</figcaption>
                            </figure>
                        </li>
                        <li class="is-active orbit-slide">
                            <figure class="orbit-figure">
                                <img class="orbit-image" src="images/image2.jpg" alt="Space">
                                <figcaption class="orbit-caption">Tropfen</figcaption>
                            </figure>
                        </li>
                        <li class="is-active orbit-slide">
                            <figure class="orbit-figure">
                                <img class="orbit-image" src="images/image3.jpg" alt="Space">
                                <figcaption class="orbit-caption">Stifte</figcaption>
                            </figure>
                        </li>
                        <li class="is-active orbit-slide">
                            <figure class="orbit-figure">
                                <img class="orbit-image" src="images/image4.jpg" alt="Space">
                                <figcaption class="orbit-caption">See</figcaption>
                            </figure>
                        </li>
                    </ul>
                    <nav class="orbit-bullets">
                        <button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
                        <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
                        <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
                        <button data-slide="3"><span class="show-for-sr">Fourth slide details.</span></button>
                    </nav>
                </div>
            </div>
            <div class="placdeholder_text">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias delectus vitae aliquid minus non deserunt, dolorum officia natus cupiditate inventore reprehenderit animi neque accusantium, reiciendis ipsum explicabo beatae. Ab, exercitationem. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas commodi sequi facere cum quod neque rerum quae veniam doloribus magni dolorum nemo cumque, at voluptatibus! Reprehenderit provident placeat temporibus explicabo? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perferendis et, veritatis quo iure reprehenderit dolorum ipsa eius ut a quaerat, deserunt at exercitationem consequuntur consectetur labore! Consequatur minima quo eveniet. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea beatae quae, fuga quasi consequuntur quas placeat molestias dolorum impedit nostrum aliquam, nihil harum eveniet numquam quam exercitationem laborum excepturi facere. Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, consectetur temporibus nihil atque molestias fuga optio recusandae eveniet possimus voluptatem, doloribus distinctio quasi deserunt nesciunt minus vero quam aspernatur quibusdam? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate nesciunt amet possimus, aut odio vitae molestiae temporibus eum ratione quis commodi fugit laborum quaerat, deserunt repellendus. Nihil quam animi a? Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque dolorem amet itaque ab ducimus id voluptate iure deleniti eum accusamus. Soluta ut, molestiae odio reiciendis dolor deleniti similique! Dolore, repellendus?
            </div>
            <div class="animated_text">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias delectus vitae aliquid minus non deserunt, dolorum officia natus cupiditate inventore reprehenderit animi neque accusantium, reiciendis ipsum explicabo beatae. Ab, exercitationem. Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim culpa recusandae reiciendis pariatur provident voluptatibus amet necessitatibus hic nesciunt quaerat! Excepturi consectetur fugiat nostrum quibusdam debitis tempora dolor quidem aliquid? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur sunt quia laborum velit, qui praesentium doloremque accusamus culpa hic, repellat facere maxime dolor, libero eaque? Molestiae, unde. Tenetur, deleniti est! Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, aut dolores magnam itaque, quasi voluptatibus molestiae illo architecto autem suscipit omnis quibusdam laboriosam officia expedita blanditiis delectus ipsa, corporis asperiores! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore sapiente veniam labore. Dolor eius maiores recusandae soluta sequi, maxime dolorum culpa, ad libero at rem qui praesentium corporis incidunt perspiciatis? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Velit pariatur neque alias iure repellat itaque illo necessitatibus soluta consequatur reiciendis deleniti minus consequuntur, at mollitia libero hic, perspiciatis omnis est. Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit atque reprehenderit sapiente animi dolorem numquam, vitae modi obcaecati ex corporis rerum, excepturi voluptas culpa suscipit cum repellendus aspernatur! Minus, suscipit!
            </div>
            <div class="placdeholder_text">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias delectus vitae aliquid minus non deserunt, dolorum officia natus cupiditate inventore reprehenderit animi neque accusantium, reiciendis ipsum explicabo beatae. Ab, exercitationem. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas commodi sequi facere cum quod neque rerum quae veniam doloribus magni dolorum nemo cumque, at voluptatibus! Reprehenderit provident placeat temporibus explicabo? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perferendis et, veritatis quo iure reprehenderit dolorum ipsa eius ut a quaerat, deserunt at exercitationem consequuntur consectetur labore! Consequatur minima quo eveniet. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea beatae quae, fuga quasi consequuntur quas placeat molestias dolorum impedit nostrum aliquam, nihil harum eveniet numquam quam exercitationem laborum excepturi facere. Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, consectetur temporibus nihil atque molestias fuga optio recusandae eveniet possimus voluptatem, doloribus distinctio quasi deserunt nesciunt minus vero quam aspernatur quibusdam? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate nesciunt amet possimus, aut odio vitae molestiae temporibus eum ratione quis commodi fugit laborum quaerat, deserunt repellendus. Nihil quam animi a? Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque dolorem amet itaque ab ducimus id voluptate iure deleniti eum accusamus. Soluta ut, molestiae odio reiciendis dolor deleniti similique! Dolore, repellendus?
            </div> 
            <div class="placdeholder_text">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias delectus vitae aliquid minus non deserunt, dolorum officia natus cupiditate inventore reprehenderit animi neque accusantium, reiciendis ipsum explicabo beatae. Ab, exercitationem. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas commodi sequi facere cum quod neque rerum quae veniam doloribus magni dolorum nemo cumque, at voluptatibus! Reprehenderit provident placeat temporibus explicabo? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perferendis et, veritatis quo iure reprehenderit dolorum ipsa eius ut a quaerat, deserunt at exercitationem consequuntur consectetur labore! Consequatur minima quo eveniet. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea beatae quae, fuga quasi consequuntur quas placeat molestias dolorum impedit nostrum aliquam, nihil harum eveniet numquam quam exercitationem laborum excepturi facere. Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, consectetur temporibus nihil atque molestias fuga optio recusandae eveniet possimus voluptatem, doloribus distinctio quasi deserunt nesciunt minus vero quam aspernatur quibusdam? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate nesciunt amet possimus, aut odio vitae molestiae temporibus eum ratione quis commodi fugit laborum quaerat, deserunt repellendus. Nihil quam animi a? Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque dolorem amet itaque ab ducimus id voluptate iure deleniti eum accusamus. Soluta ut, molestiae odio reiciendis dolor deleniti similique! Dolore, repellendus?
            </div>
            <div class="placdeholder_text">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias delectus vitae aliquid minus non deserunt, dolorum officia natus cupiditate inventore reprehenderit animi neque accusantium, reiciendis ipsum explicabo beatae. Ab, exercitationem. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas commodi sequi facere cum quod neque rerum quae veniam doloribus magni dolorum nemo cumque, at voluptatibus! Reprehenderit provident placeat temporibus explicabo? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perferendis et, veritatis quo iure reprehenderit dolorum ipsa eius ut a quaerat, deserunt at exercitationem consequuntur consectetur labore! Consequatur minima quo eveniet. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea beatae quae, fuga quasi consequuntur quas placeat molestias dolorum impedit nostrum aliquam, nihil harum eveniet numquam quam exercitationem laborum excepturi facere. Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, consectetur temporibus nihil atque molestias fuga optio recusandae eveniet possimus voluptatem, doloribus distinctio quasi deserunt nesciunt minus vero quam aspernatur quibusdam? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate nesciunt amet possimus, aut odio vitae molestiae temporibus eum ratione quis commodi fugit laborum quaerat, deserunt repellendus. Nihil quam animi a? Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque dolorem amet itaque ab ducimus id voluptate iure deleniti eum accusamus. Soluta ut, molestiae odio reiciendis dolor deleniti similique! Dolore, repellendus?
            </div>
            <div class="placdeholder_text">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias delectus vitae aliquid minus non deserunt, dolorum officia natus cupiditate inventore reprehenderit animi neque accusantium, reiciendis ipsum explicabo beatae. Ab, exercitationem. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas commodi sequi facere cum quod neque rerum quae veniam doloribus magni dolorum nemo cumque, at voluptatibus! Reprehenderit provident placeat temporibus explicabo? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perferendis et, veritatis quo iure reprehenderit dolorum ipsa eius ut a quaerat, deserunt at exercitationem consequuntur consectetur labore! Consequatur minima quo eveniet. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea beatae quae, fuga quasi consequuntur quas placeat molestias dolorum impedit nostrum aliquam, nihil harum eveniet numquam quam exercitationem laborum excepturi facere. Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, consectetur temporibus nihil atque molestias fuga optio recusandae eveniet possimus voluptatem, doloribus distinctio quasi deserunt nesciunt minus vero quam aspernatur quibusdam? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate nesciunt amet possimus, aut odio vitae molestiae temporibus eum ratione quis commodi fugit laborum quaerat, deserunt repellendus. Nihil quam animi a? Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque dolorem amet itaque ab ducimus id voluptate iure deleniti eum accusamus. Soluta ut, molestiae odio reiciendis dolor deleniti similique! Dolore, repellendus?
            </div>
        </div>
        <script src="node_modules/jquery/dist/jquery.min.js"></script>
        <script src="node_modules/foundation-sites/dist/js/foundation.min.js"></script>
        <script src="node_modules/motion-ui/dist/motion-ui.min.js"></script>
        <script src="node_modules/scrollmagic/scrollmagic/minified/ScrollMagic.min.js"></script>
        <script src="node_modules/gsap/src/minified/TweenMax.min.js"></script>
        <script src="node_modules/scrollmagic/scrollmagic/minified/plugins/animation.gsap.min.js"></script>
        <script src="node_modules/scrollmagic/scrollmagic/minified/plugins/debug.addIndicators.min.js"></script>
        <script src="js/app.js"></script>
    </body>
</html>