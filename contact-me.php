<?php require_once('header.php');?>     

    <section id="contact-me">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>
                        <span class="italic">Contact : </span><span class="uppercase">Me</span>
                    </h2>
                </div>
            </div>
           
            <div class="row">
                <div class="col-lg-4">
                    <blockquote class="italic text-left">
                       &laquo;Let's face it, a nice creamy chocolate cake does a lot for a lot of people; it does for me.&raquo; 
                       <p class="pull-right"><small>Audrey Hepburn</small></p>
                    </blockquote>
                </div>
                <div class="col-lg-8">
                    <form class="cmxform" id="messageForm" method="post" action="form.php">
                       <div class="form-group">
                            <label for="name" class="hidden">Name</label>
                            <input name="name" type="name" class="form-control" id="name" placeholder="Name" required minlength="4">
                        </div>
                        <div class="form-group">
                            <label for="email" class="hidden">Email</label>
                            <input name="email" type="email" class="form-control" id="email" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <label for="message" class="hidden">Message</label>
                            <textarea id="message" class="form-control" rows="3" name="message" required placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-lg btn-outline pull-right hvr-outline-in">Send</button>
                        </div>
                    </form>
                </div>
                
                <div id="test"></div>
            </div>
        </div>
    </section>
    
<?php require_once('footer.php');?>  

