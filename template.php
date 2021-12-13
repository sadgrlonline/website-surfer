<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, width=device-width" />
    <title>WEBSURFER</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="javascript/surf.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
  
    <div id="miniPanel" class="ui-widget-content">
        <div class="draggable">I'm draggable!</div>
        <button style="margin:0 auto;" href="#" id="minSurf" class="minSurfBtn">Surf</button>
<a href="#" id="maximize">(bigger)</a>
</div>
    <div id="controls">
        <div class="minimize"><a href="#" id="minimize">minimize this panel</a></div>
        <div class="flex-wrapper">
            <div class="info"><a id="showInfo" href="#"><strong>What is this?</strong></a><br><br>
                <div id="info-hidden"> This tool loads a new website at random when the 'surf' button is clicked.</div>
                <br>
                
            </div>
            <div>
                <div id="filters"><strong><span class="rainbow-text"> Filter</span> your results to a certain type of
                        site!</strong><br><br> Or just click <strong class="rainbow-text">surf</strong>.<br><br>
                    <div style="display:flex; justify-content:space-between; flex-wrap:wrap;">
                        <div class="filter">
                            <label for="personal">Personal</label>
                            <input type="checkbox" id="personal" name="personal" value="personal">
                        </div>
                        <div class="filter">
                            <label for="fun">Fun</label>
                            <input type="checkbox" id="fun" name="fun" value="fun">
                        </div>
                        <div class="filter">
                            <label for="healing">Healing</label>
                            <input type="checkbox" id="healing" name="healing" value="healing">
                        </div>
                        <div class="filter">
                            <label for="serious">Serious</label>
                            <input type="checkbox" id="serious" name="serious" value="serious">
                        </div>
                        <div class="filter">
                            <label for="useful">Useful</label>
                            <input type="checkbox" id="useful" name="useful" value="useful">
                        </div>
                        <div class="filter">
                            <label for="social">Social</label>
                            <input type="checkbox" id="social" name="social" value="social">
                        </div>

                    </div>

                </div>
            </div>

            <div class="main">
                <h1 class="surf">Websurfer</h1>
                <div class="flex-wrapper">
                    <button href="#" id="surf" class="surfBtn">Surf</button>
                </div>
            </div>
            <div class="space">
                <div style="text-align:center;"> <strong>Visit this site </strong> <span id="results"></span></div>
            </div>
            <div class="submit"><br><br>There are currently <?php echo $totalCount; ?> websites.
            </div>
        </div>
        <div class="border"></div>
    </div>

    <iframe id="mainFrame" src="https://sadgrl.online/newoldweb/manifesto.html" width="100%"></iframe>
    </div>
</body>

</html>