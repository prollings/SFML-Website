<?php
    $version = '1.6'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'sf::WindowListener Class Reference'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header.php');
?>
<!-- Generated by Doxygen 1.8.2 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="namespaces.php"><span>Namespaces</span></a></li>
      <li class="current"><a href="annotated.php"><span>Classes</span></a></li>
      <li><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="annotated.php"><span>Class&#160;List</span></a></li>
      <li><a href="classes.php"><span>Class&#160;Index</span></a></li>
      <li><a href="hierarchy.php"><span>Class&#160;Hierarchy</span></a></li>
      <li><a href="functions.php"><span>Class&#160;Members</span></a></li>
    </ul>
  </div>
<div id="nav-path" class="navpath">
  <ul>
<li class="navelem"><b>sf</b></li><li class="navelem"><a class="el" href="classsf_1_1WindowListener.php">WindowListener</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#pub-methods">Public Member Functions</a> &#124;
<a href="#pro-methods">Protected Member Functions</a> &#124;
<a href="classsf_1_1WindowListener-members.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">sf::WindowListener Class Reference<span class="mlabels"><span class="mlabel">abstract</span></span></div>  </div>
</div><!--header-->
<div class="contents">

<p>Base class for classes that want to receive events from a window (for internal use only)  
 <a href="classsf_1_1WindowListener.php#details">More...</a></p>

<p><code>#include &lt;<a class="el" href="WindowListener_8hpp_source.php">WindowListener.hpp</a>&gt;</code></p>
<div class="dynheader">
Inheritance diagram for sf::WindowListener:</div>
<div class="dyncontent">
 <div class="center">
  <img src="classsf_1_1WindowListener.png" usemap="#sf::WindowListener_map" alt=""/>
  <map id="sf::WindowListener_map" name="sf::WindowListener_map">
<area href="classsf_1_1Input.php" title="Input handles real-time input from keyboard and mouse." alt="sf::Input" shape="rect" coords="0,56,117,80"/>
<area href="classsf_1_1Window.php" title="Window is a rendering window ; it can create a new window or connect to an existing one..." alt="sf::Window" shape="rect" coords="127,56,244,80"/>
<area href="classsf_1_1RenderWindow.php" title="Simple wrapper for sf::Window that allows easy 2D rendering." alt="sf::RenderWindow" shape="rect" coords="127,112,244,136"/>
</map>
 </div></div>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr class="memitem:a4703ddfaaa6604e38e1ff0d89e2cd00f"><td class="memItemLeft" align="right" valign="top">virtual void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1WindowListener.php#a4703ddfaaa6604e38e1ff0d89e2cd00f">OnEvent</a> (const <a class="el" href="classsf_1_1Event.php">Event</a> &amp;EventReceived)=0</td></tr>
<tr class="memdesc:a4703ddfaaa6604e38e1ff0d89e2cd00f"><td class="mdescLeft">&#160;</td><td class="mdescRight">Called each time an event is received from attached window.  <a href="#a4703ddfaaa6604e38e1ff0d89e2cd00f"></a><br/></td></tr>
<tr class="separator:a4703ddfaaa6604e38e1ff0d89e2cd00f"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pro-methods"></a>
Protected Member Functions</h2></td></tr>
<tr class="memitem:a0c5603bbe6dc4980cc4ed55019952ec0"><td class="memItemLeft" align="right" valign="top">virtual&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1WindowListener.php#a0c5603bbe6dc4980cc4ed55019952ec0">~WindowListener</a> ()</td></tr>
<tr class="memdesc:a0c5603bbe6dc4980cc4ed55019952ec0"><td class="mdescLeft">&#160;</td><td class="mdescRight">Destructor.  <a href="#a0c5603bbe6dc4980cc4ed55019952ec0"></a><br/></td></tr>
<tr class="separator:a0c5603bbe6dc4980cc4ed55019952ec0"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>Base class for classes that want to receive events from a window (for internal use only) </p>

<p>Definition at line <a class="el" href="WindowListener_8hpp_source.php#l00042">42</a> of file <a class="el" href="WindowListener_8hpp_source.php">WindowListener.hpp</a>.</p>
</div><h2 class="groupheader">Constructor &amp; Destructor Documentation</h2>
<a class="anchor" id="a0c5603bbe6dc4980cc4ed55019952ec0"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">virtual sf::WindowListener::~WindowListener </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inline</span><span class="mlabel">protected</span><span class="mlabel">virtual</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Destructor. </p>

<p>Definition at line <a class="el" href="WindowListener_8hpp_source.php#l00060">60</a> of file <a class="el" href="WindowListener_8hpp_source.php">WindowListener.hpp</a>.</p>

</div>
</div>
<h2 class="groupheader">Member Function Documentation</h2>
<a class="anchor" id="a4703ddfaaa6604e38e1ff0d89e2cd00f"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">virtual void sf::WindowListener::OnEvent </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="classsf_1_1Event.php">Event</a> &amp;&#160;</td>
          <td class="paramname"><em>EventReceived</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">pure virtual</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Called each time an event is received from attached window. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">EventReceived</td><td>: <a class="el" href="classsf_1_1Event.php" title="Event defines a system event and its parameters.">Event</a> received </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<hr/>The documentation for this class was generated from the following file:<ul>
<li><a class="el" href="WindowListener_8hpp_source.php">WindowListener.hpp</a></li>
</ul>
</div><!-- contents -->
<?php
    require("../footer.php");
?>
