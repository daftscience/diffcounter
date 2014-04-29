<!DOCTYPE html>
<html lang="en" data-placeholder-focus="true">

<head>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <script>
        var hasIE_ughhh = false;
    </script>


    <!--[if lt IE 9]>
<script> 
var hasIE_ughhh = true;
</script>
<![endif]-->  
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Differential counter">
    <meta name="author" content="Thomas Perry">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">
    <title>Daftscience.com</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE8.js"></script> 
<![endif]--> 
    <link href="assets/css/nav.css" rel="stylesheet">
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/1.1.6/waypoints.min.js"></script>
    <!--[if !IE]>
<script src="assets/js/hover.zoom.js"></script>
<script src="assets/js/hover.zoom.conf.js"></script>
<audio id="tardis" src="tardis.wav" preload="auto"></audio>

<![endif]-->

    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
    
    
    
<!--[if IE 7]>
<script>var whichIE=7;</script>
<link href="assets/css/bootstrap-ie7.css" rel="stylesheet">
<link rel="stylesheet" media="all" href="assets/css/font-awesome-ie7.min.css">
<![endif]-->
    <script>
        window.focused = "#FFD387";
    </script>
    <script src="assets/js/counter.js"></script>
    
    
    
    
  
    <!--THe color scheme used in this site can be found here: -->
    <!--http://colorschemedesigner.com/#3c41TrpDHw0w0-->
    <!--http://colorschemedesigner.com/#3c31TrpDHw0w0-->

</head>

<body>
    <div id="non-printable">
        <nav role="navigation" id="nav" class="navbar navbar-inverse navbar-fixed-top ">
            <header>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a id="s1" class="navbar-brand" href="#">D<i class="fa fa-flask fa-white"></i>ftscience</a>
                </div>
                <div class="navbar-collapse collapse nav-container">
                    <ul class="nav navbar-nav pull-right">
                        <li>
                            <a id="s2" href="#counter">Counter</a>
                        </li>
                        <li>
                            <a id="s3" href="#tips">Tips</a>
                        </li>
                        <li>
                            <a id="s4" href="#4">References</a>
                        </li>
                        <li>
                            <a id="s5" href="http://daftscience.com">Contact</a>
                        </li>
                    </ul>
                </div>
            </header>
        </nav>
        <!-- +++++ Welcome Section +++++ -->
        <section id="1" class="home">
            <div id="ww">
                <div class="container">
                    <div class="row">
		       <div class="col-lg-8 col-lg-offset-2 centered">
                           <img src="assets/img/header.png" alt="soo realistic" class="img-responsive centered">
 <!--[if lt IE9 ]>
<br />
<br />
<div id="iesucks" class="alert alert-danger">
<p>
<strong>
Why art thou still using ye olde internet explorer? Perchance <a href="../ye_olde_counter/">ye olde counter</a> will suit thee fancy.
</strong>
</p>
</div>
<![endif]-->
                            <h1>
                                <strong>welcome</strong>
                            </h1>
                            <p>This app was built to help Medical Laboratory Science students practice differentials. It works best using the 10 key pad. If you have any questions just click the "Tips" link at the top of the page, or scroll down.</p>
                            <p>
                                <u>IMPORTANT:</u>It is for practice purposes only, not intended for clinical differentials. There are known, and possibly unknown mathematical errors in how relative values and non-white cells are calculated. Please double check any values you get.
                            </p>
                        </div>
                        <!-- /col-lg-8 -->
                    </div>
                    <!-- /row -->
                </div>
                <!-- /container -->
            </div>
            <!-- /ww -->
        </section>
        <!-- +++++ Differential Section +++++ -->

    </div>
    <!--      Nonprintable-->
    <div id="gahh" class="counter">
        <section class="counter">
            <div id="non-printable">
                <div class="container pt counter" id="counter">
                    <div class="row mt centered">
                        <h1 class="counter">Electronic Diff-o-matic</h1>
                        <div id="ready" class="alert alert-success changeable">
                            <p>differential mode</p>
                            ready when you are.
                        </div>
                        <div id="done" class="alert alert-success changeable" hidden>
                            <p>done mode</p>
                            you're a champ!
                        </div>
                        <div id="subtract" class="alert alert-danger changeable" hidden>
                            <p>oops mode</p>
                            made a mistake? It's cool, you're now counting backwards. Press '+' to resume diff.
                        </div>
                        <div id="edit" class="alert alert-warning changeable" hidden>
                            <p>big oops mode</p>
                            that bad huh? Fix what you need, when you're done press 'e' or the edit button to recalculate and resume diff.
                        </div>
                        <div id="wylajb" class="alert alert-success alert-dismissable" hidden>
                            <p>konami mode:</p>
                            would you like a jelly baby?
                        </div>
                        <div id="debug" class="alert alert-warning debug" hidden></div>
                        <div id="numlock" class="alert alert-danger alert-dismissable" hidden>
                            <p>whoa, hang on a sec...</p>
                            That was close, you have to turn the number lock on before you start counting. It's usually somewhere above the 7 key.
                        </div>
                    </div>
                </div>
            </div>
            <!--          nonprintable-->

            <div class="row container-fluid centered counter">
                <div class="col-md-3 col-lg-3 visible-lg visible-md"></div>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">

                    <div class="btn-group" data-toggle-name="is_private" data-toggle="buttons-radio">
                        <button type="button" class="btn btn-primary" data-toggle="button" value="100" onclick="changeCount(this);" id="c100">100</button>
                        <button type="button" class="btn btn-primary" data-toggle="button" value="200" onclick="changeCount(this);">200</button>
                        <button type="button" class="btn btn-primary" data-toggle="button" value="300" onclick="changeCount(this);">300</button>
                        <input type="hidden" name="is_private" value="100" />
                    </div>
                    <div class="btn-group">
                		<button type="button" class="btn btn-default btn-warning" id="subtractBTN">
                            <i class="fa fa-minus" id="subtractIcon"></i></button>
                        <button type="button" class="btn btn-default btn-warning" id="editBTN">
                            <i class="fa fa-lock lockIcons"></i>Edit</button>
                        <button type="button" class="btn btn-default btn-danger" id="resetBTN">
                            <i class="fa fa-eraser"></i>Reset</button>
                        <button type="button" class="btn btn-default btn-success" id="printBTN">
                            <i class="fa fa-print"></i>Print</button>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 visible-lg visible-md"></div>
            </div>


            <div class="row mt container-fluid centered counter">
                <div class="col-md-3 col-lg-3 visible-lg visible-md"></div>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="input-group">
                        <span class="input-group-addon">
                        	<span class="fa-stack">
                                <i class="fa fa-lock lockIcons fa-stack-1x"></i> 
                                <i class="fa fa-barcode fa-stack-2x" id="safeFocus" onclick="toggleDisableX3();"></i>
                        	</span>
                        </span>
                        <input type="text" id="diffName" class="form-control" placeholder="scan barcode here">
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 visible-lg visible-md"></div>
            </div>




            <div class="row mt container-fluid centered counter">
                <div class="col-md-1 col-lg-2 visible-lg visible-md"></div>
                <div class="col-md-5 col-lg-4 col-sm-6 col-xs-6">
                    <script>
                        seedHTML("bargraph");
                    </script>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-6">
                    <form name="cellForm" id="cellForm">
                        <table>
                            <script>
                                seedHTML("cells");
                            </script>
                        </table>
                    </form>
                </div>
                <div class="col-md-2 col-lg-2 visible-lg visible-md"></div>
                <input type="text" id="totalNorm" value="0" class="alwaysDisable" readonly hidden>
            </div>
            <div class="row mt centered counter">

                <h2>
                    <span class="label label-info text-center total" id="total">0</span>
                </h2>
            </div>
            <!-- /container -->

        </section>
    </div>
    <div id="non-printable">
        <!-- +++++ Help Section +++++ -->
        <section id="tips">
            <div class="container pt" id="help">
                <div class="row mt">
                    <div class="col-lg-8 col-lg-offset-2 centered">
                        <h1>Tips and Tricks</h1>
                    </div>
                </div>
                <div class="row mt">
                    <div class="col-md-4">
                        <div class="centered">
                            <i class="fa fa-cogs fa-5x fa-green"></i>
                            <h3>How do I use this fancy thing?</h3>
                        </div>
                        <dl>
                            <dt>Subtract cells</dt>
                            <dd>
                                <p>Press the "-" key to start subtracting cells. Press the "+" key to to resume.</p>
                            </dd>
                            <dt>Manual edit</dt>
                            <dd>
                                <p>Press the "E" key or the "Edit" button to manually change the counts, press it again to resume. The <i class="fa fa-unlock"></i> icon on the edit button indicates you're in "Edit Mode" </p>
                            </dd>
                            <dt>Differential Name</dt>
                            <dd>
                                <p>In edit mode the name field is editable, when enter is pressed Diff-o-matic will exit edit mode.</p>
                            </dd>
                            <dt>Count more cells</dt>
                            <dd>
                                <p>Umm... basically what I said above.</p>
                            </dd>
                        </dl>
                    </div>
                    <div class="col-md-4">
                        <div class="centered">
                            <i class="fa fa-keyboard-o fa-5x fa-green"></i>
                            <h3>Keyboard layout</h3>
                        </div>
                        <ul class="fa-ul">
                            <strong class="keylist">Cells</strong>
                            <li>
                                <span class="mono">1</span>
                                <i class="fa fa-angle-double-right  fa-list"></i>Band Cells
                            </li>
                            <li>
                                <span class="mono">2</span>
                                <i class="fa fa-angle-double-right  fa-list"></i>Neutrophils
                            </li>
                            <li>
                                <span class="mono">3</span>
                                <i class="fa fa-angle-double-right  fa-list"></i>Lymphocytes
                            </li>
                            <li>
                                <span class="mono">4</span>
                                <i class="fa fa-angle-double-right  fa-list"></i>Basophils
                            </li>
                            <li>
                                <span class="mono">5</span>
                                <i class="fa fa-angle-double-right  fa-list"></i>Eosinophils
                            </li>
                            <li>
                                <span class="mono">6</span>
                                <i class="fa fa-angle-double-right  fa-list"></i>Monocytes
                            </li>
                            <li>
                                <span class="mono">7</span>
                                <i class="fa fa-angle-double-right  fa-list"></i>Metamyelocytes
                            </li>
                            <li>
                                <span class="mono">8</span>
                                <i class="fa fa-angle-double-right  fa-list"></i>Myelocytes
                            </li>
                            <li>
                                <span class="mono">9</span>
                                <i class="fa fa-angle-double-right  fa-list"></i>Promyelocyte
                            </li>
                            <li>
                                <span class="mono">.</span>
                                <i class="fa fa-angle-double-right  fa-list"></i>Blast
                            </li>
                            <li>
                                <span class="mono">0</span>
                                <i class="fa fa-angle-double-right  fa-list"></i>Nucleated Red Cells
                            </li>
                            <li>
                                <span class="mono">/</span>
                                <i class="fa fa-angle-double-right  fa-list"></i>Plasma Cells?
                            </li>
                            <li>
                                <span class="mono">*</span>
                                <i class="fa fa-angle-double-right  fa-list"></i>Megakaryocyte?
                            </li>
                            <li>
                                <span class="mono">o</span>
                                <i class="fa fa-angle-double-right  fa-list"></i>Other (O as in the letter)
                            </li>
                        </ul>
                        <ul class="fa-ul">
                            <strong class="keylist">Modes</strong>
                            <li>
                                <span class="mono">R</span>
                                <i class="fa fa-angle-double-right  fa-list"></i>Reset form
                            </li>
                            <li>
                                <span class="mono">E</span>
                                <i class="fa fa-angle-double-right  fa-list"></i>Edit Mode
                            </li>
                            <li>
                                <span class="mono">D</span>
                                <i class="fa fa-angle-double-right  fa-list"></i>Debug Mode
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <div class="centered">
                            <i class="fa fa-bug fa-5x fa-green"></i>
                            <h3>Normalization issues</h3>
                        </div>
                        <dl>
                            <dt>What is this?</dt>
                            <dd>
                                <p>The progress bars to the right were designed to give normalized percentages for 200 cell counts. Using cutting edge mathematical formulas, advanced super computing power and an old magic eight ball, the Diff-o-Matic is capable of providing that value in real time!
                                </p>
                            </dd>
                            <dt>DISCLAIMER:</dt>
                            <dd>
                                <p>In standard rounding rules it is common for numbers ending in 5 to be rounded up. However, because n.5 is exactly between its nearest integers, always rounding up will create a positive bias.</p>
                                <p>In order to correct that bias the Diff-o-Matic uses a
                                    <strong>Round to Even</strong>method. This will round any number ending in .5 to the nearest even integer (e.g. 2.5 -> 2 .)
                                </p>
                                <p>Unfortunately, this will cause relative counts of 0.5 to be rounded down to 0. The worlds top engineers, scientists, and barista have been working on this issue around the clock, a patch will be released shortly.</p>
                            </dd>
                        </dl>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </section>
        <section id="4">
            <!-- +++++ Reference material +++++ -->
            <div id="ref">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2 centered">
                            <!--<img src="header.png" alt="Stanley">-->
                            <h1>Reference Material</h1>
                            <p>Coming Soon:</p>
                            <p>A list of resources to help with performing differentials.</p>
                        </div>
                        <!-- /col-lg-8 -->
                    </div>
                    <!-- /row -->
                </div>
                <!-- /container -->
            </div>
            <!-- /ww -->
        </section>

<?php include 'footer.php';?>
