<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>fadeToggle demo</title>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
 
<button>fadeToggle p1</button>
<button>fadeToggle p2</button>
<p>This paragraph has a slow, linear fade.</p>
<p>This paragraph has a fast animation.</p>
<div id="log"></div>
 
<script>
$( "button:first" ).click(function() {
  $( "p:first" ).fadeToggle( "slow", "linear" );
});
$( "button:last" ).click(function() {
  $( "p:last" ).fadeToggle( "fast", function() {
    $( "#log" ).append( "<div>finished</div>" );
  });
});
</script>
 
</body>
</html>