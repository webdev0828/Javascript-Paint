<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link href="https://v4-alpha.getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="paint.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <div class="toolbar-side">
        <ul class="toolbar" id="tools">
          <li class="section" id="tool-line">/</li>
          <ul id="tool-line-list">
            <li class="section" id="tool-line-black">/</li>
            <li class="section" id="tool-line-blue">/</li>
            <li class="section" id="tool-line-red">/</li>
            <li class="section" id="tool-line-green">/</li>
          </ul>          
          <li class="section" id="tool-highlighter">
            <i class="fa fa-paint-brush" aria-hidden="true"></i>
          </li>
          <ul id="tool-highlighter-list">
            <li class="section" id="tool-highlighter-black">
              <i class="fa fa-paint-brush" aria-hidden="true"></i>
            </li>
            <li class="section" id="tool-highlighter-blue">
              <i class="fa fa-paint-brush" aria-hidden="true"></i>
            </li>
            <li class="section" id="tool-highlighter-red">
              <i class="fa fa-paint-brush" aria-hidden="true"></i>
            </li>
            <li class="section" id="tool-highlighter-green">
              <i class="fa fa-paint-brush" aria-hidden="true"></i>
            </li>
          </ul>
          <li id="tool-eraser" class="section">
            <i class="fa fa-eraser" aria-hidden="true"></i>
          </li>
          <li id="tool-move-viewport" class="section">
            <i class="fa fa-hand-paper-o" aria-hidden="true"></i>
          </li>
          <li id="tool-zoom-out" class="section">
            <i class="fa fa-search-minus" aria-hidden="true"></i>
          </li>
          <li id="tool-zoom-1" class="section">
            <i class="fa fa-home" aria-hidden="true"></i>
          </li>
          <li id="tool-zoom-in" class="section">
            <i class="fa fa-search-plus" aria-hidden="true"></i>
          </li>
          <li id="reset" class="section">
            <i class="fa fa-trash-o" aria-hidden="true"></i>
          </li>
        </ul>
    </div>
    <div class="row">      
      <div class="col-md-12">
        <div id="sketchpad"></div>
      </div>
    </div>
  </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="sketch.min.js"></script>
<script src="paint.min.js"></script>
</html>