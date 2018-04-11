<?php
    session_start();
    unset($_SESSION['name']);
    unset($_SESSION['email']);
    unset($_SESSION['phone']);
    unset($_SESSION['address']);
    include_once('tools.php');
    topPart('pumps');
    ?>
            <section>
                <h1>Gas Pumps</h1>
                <p>Bob's Garage restored vintage gas pumps are completely disassembled and motor and pump removed. In most cases, sandblasting/rust removal is required and a heavy epoxy primer is applied when rust is present. Each panel is then painted with multiple coats of automotive acrylic enamel paint mixed from the original paint codes. The meter is cleaned and reworked, lights rewired, all sheet metal trim, signs and decals are attached, and new glass and gaskets installed. All components are then mounted in the frame and the panels reattached and finally the proper globe affixed to the top. We spare no expense and pay strict attention to detail to ensure a first quality antique restoration that will last for years and appreciate in value. (scroll down to view pumps).
                    Do you have an old gas pump that you need to have restored? Send it to us and we'll send it back to you looking like new.   Call Bob 678 494-2996.
                </p>
                <p id="shippingTerm">* Free restoration and shipping quote estimates</p>
            </section>
            <section class="textCenter">
                <?php include_once('pumpGeneration.php'); ?>
            </section>
            <section class="textCenter">
                <form id="contactForm" method='post' action="receipt.php">
                    <label>Name: <br><input type="text" id="name" name="name" required placeholder="e.g. John Smith"></label>
                    <br>
                    <label>Email: <br><input type="email" id="email" name="email" required placeholder="e.g. john@email.com"></label>
                    <br>
                    <label>Phone: <br><input title="Please match the format requested" type="tel" id="phone" name="phone" placeholder="Your Phone Number" pattern="[0-9 x()+]+" onblur="myFunction()" onkeyup="checkNANP()">&nbsp;<img title="NANP" id="NANP" src="resources/NANP.png"></label>
                    <br>
                    <br>
                    <label>Address: <br><textarea id="address" name="address" cols="30" rows="8" placeholder="Your address" required></textarea></label>
                    <br>
                    <span class="textCenter">
                        <input type="reset" value="Reset">
                        <?php if (count($_SESSION['CART']) > 0){ 
                            echo "<input type='submit' value='Checkout'>";
                        }else{
                            echo "<input type='submit' value='Checkout' disabled 
                            title='Add items to cart to enbale checkout'>";} ?>    
                        <label>&nbsp;Remember me :<input type="checkbox" name="checkBox" id="checkBox" onchange="toggleCheckbox()"></label>
                        <br>
                        <p style="font-size:12px;text-align:left;">By clicking above button, you accept our <a href="#">Terms of Service</a> and Privacy Policy</p>
                    </span>
                </form>
                <article id="pumpFeatures">
                    <p>* Custom pump work done on request.</p>
                    <p>* Good selection of unrestored pumps available from $550 up</p>
                    <p>* Pump type limited to stock on hand. Call Bob for availability</p>
                    <p>* We also do gas pump and soda machine restoration estimates</p>
                    <p>* Rolling Gas Pump Stand not included in purchase of a gar pump</p>
                    <p>* For additional pricing and product information email Bob directly.</p>
                    <p>* To place an order or for product questions call: 678-494-2996</p>
                </article>
            </section>
        </main>
        <?php footer(); ?>

        <script src="form.js" type="text/javascript"></script>
    </body>

</html>