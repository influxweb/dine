    <body>
        <div class="alert <?php echo $_SESSION['alertType']; ?>"><?php echo $_SESSION['message']; ?></div>
         <div class="row" id="header">
            <div class="large-12 columns">   
               <form method="POST" action="controllers/login.php?action=login">
                    <h2>Sign In To Edit <br><?php echo $title->content; ?>.</h2>
                   
                    <fieldset>
                        <div class="clearfix">
                            <label for="username">Username</label>
                            <div class="input">
                                <input type="text" name="username" id="username" value="admin">
                            </div>
                        </div>
                        <div class="clearfix">
                            <label for="password">Password</label>
                            <div class="input">
                                <input type="password" name="password" id="password" value="admin">
                            </div>
                        </div>
                        <div>
                           <br><input type="submit" class="button green" value="Sign In">
                        </div>
                    </fieldset>
                    <p><a class="brand" href="../">&larr; Back to <?php echo $title->content; ?></a></p>
                </form>    
            </div>    
        </div>    
        <span id="viewtoggle"></span>
        
        <script src="../js/vendor/jquery.min.js"></script>       
        <script src="../js/editor/editor.js"></script>     
    </body>
</html>

<?php 
// Clear alert after each page reload
$_SESSION['alertType'] = ''; 
$_SESSION['message'] = ''; 
?> 
