<!doctype html>
 
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>jQuery UI Tooltip - Custom Styling</title>
    <!--<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" />-->
    <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
    <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
    <!--<link rel="stylesheet" href="/resources/demos/style.css" />-->
    <script>

    </script>
    <style>
    html, body, div, span, applet, object, iframe,
    h1, h2, h3, h4, h5, h6, p, blockquote, pre,
    a, abbr, acronym, address, big, cite, code,
    del, dfn, em, img, ins, kbd, q, s, samp,
    small, strike, strong, sub, sup, tt, var,
    b, u, i, center,
    dl, dt, dd, ol, ul, li,
    fieldset, form, label, legend,
    table, caption, tbody, tfoot, thead, tr, th, td,
    article, aside, canvas, details, embed, 
    figure, figcaption, footer, header, hgroup, 
    menu, nav, output, ruby, section, summary,
    time, mark, audio, video {
    	margin: 0;
    	padding: 0;
    	border: 0;
    	font-size: 100%;
    	font: inherit;
    	vertical-align: baseline;
    }
    /* HTML5 display-role reset for older browsers */
    article, aside, details, figcaption, figure, 
    footer, header, hgroup, menu, nav, section {
    	display: block;
    }
    body {
    	line-height: 1;
    }
    ol, ul {
    	list-style: none;
    }
    blockquote, q {
    	quotes: none;
    }
    blockquote:before, blockquote:after,
    q:before, q:after {
    	content: '';
    	content: none;
    }
    table {
    	border-collapse: collapse;
    	border-spacing: 0;
    }
    body {background:#BAC4D1;}
    #container {background:#fff; width:1000px; margin:0 auto; padding:1px 0; position:relative;} /* 1 pixel in padding top and bottom allows the 15px margin top and bottom for content to work */
    .content {width:970px; margin:15px;}
    #header {width:100%; min-height:400px; position:relative;}
    #header a.menu {display:inline-block; border:1px solid #ff0000; background:#fff; color:#000;}
    #header div.about {display:none; background:#006699; color:#000; position:absolute; width:1000px; height:300px; left:0; top:45;}
    #menu {margin:15px 15px 0 15px;}
    #menu li {display:inline; margin:0 10px 0 0;}
    #menu li a {}
    #menu li a:hover, #menu li a:active, #menu li a:focus {text-decoration:none;}
    div.dropdown {display:none; position:absolute; left:0; top:20; background:#006699; min-height:200px; width:100%; z-index:1;}
    div.dropdown2 {display:none; position:absolute; left:0; top:20; background:#A56868; min-height:200px; width:100%; z-index:1;}
    </style>
</head>
<body>
<div id='container'>
  <div id='header'>
    <ul id="menu">
      <li class="link1">
        <a href="#">Link</a>
      </li>
      <li class="link2">
        <a href="#">Link2</a>
      </li>
    </ul>
    <div class="dropdown">dropdown</div>
    <div class="dropdown2">dropdown2</div>
  </div><!-- end header -->
  <div class='content'> 
<script type="text/javascript"><!--
      $(document).ready(function() { 
      
      /* from original flowplayer 1.3 tooltip */
        $('#menu').tooltip({position: 'bottom'});                      // triggers about tooltip
        $('div.programs').tooltip({position: 'bottom'});                   // triggers programs tooltip
        $('div.onlineservices').tooltip({position: 'bottom'});             // triggers onlineservices tooltip            
        $('.aboutoverview')
          .mouseover(function(){$(this).css("background-color","#c9e5e8")})
          .mouseout(function(){$(this).css("background-color","transparent")})
      /* end original jq from flowplayer 1.3 tooltip */
          
        $('.link1').mouseover(function(){$('div.dropdown').show()}); // if link1 is moused over, show div
        $('.link1').mouseout(function(){$('div.dropdown').hide()}); // if link1 is moused out, hide div
        $('div.dropdown').mouseover(function(){$(this).show()}); // if dropdown div is moused over, show itself
        $('div.dropdown').mouseout(function(){$(this).hide()}); // if dropdown div is moused out, hide itself

        
        $('.link2').mouseover(function(){$('div.dropdown2').show()});
        $('.link2').mouseout(function(){$('div.dropdown2').hide()});
        $('div.dropdown2').mouseover(function(){$(this).show()});
        $('div.dropdown2').mouseout(function(){$(this).hide()});
        
      });
    //done hiding code--></script>

  </div><!-- end content -->
</div><!-- end container -->
 
</body>
</html>