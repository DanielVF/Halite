<nav class="navbar navbar-default" id="navvy">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Halite</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right loggedOut" id="loginNav">
                <ul class="nav navbar-nav">
                    <?php include 'includes/dropdowns.php'; ?>
                    <li>
                      <a href="https://github.com/login/oauth/authorize?scope=user:email&client_id=2b713362b2f331e1dde3">Login with Github</a>
                    </li>
                </ul>
            </ul>
            <form id="submitForm">
                <ul class="nav navbar-nav navbar-right loggedIn" id="logoutNav">
                    <?php include 'includes/dropdowns.php'; ?>
                    <li><a href="#" id="submitButton">Submit</a><input type="file" id="myFile" name="botFile"></li>
                    <li><a href="#" id="logoutButton">Logout</a></li>
                </ul>
            </form>
        </div>
    </div>
</nav>

<div id="messageBox"></div>

<div class="modal fade" id="submitModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h1 class="modal-title" id="myModalLabel">Halite Submission Instructions</h1>
            </div>
            <div class="modal-body">
                <h3>Upload a <b>zip file</b> of your source code.</h3>
                <h3>Name your main file <b>MyBot</b> with an appropriate file extension (e.g. MyBot.java).</h3>
                <h3>Once we have compile your code, you will get an email notification.</h3>
                <h3>Now, close this popup and submit your code!</h3>
            </div>
        </div>
    </div>
</div>
