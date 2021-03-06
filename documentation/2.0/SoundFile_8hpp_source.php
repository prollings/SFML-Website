<?php
    $version = '2.0'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    include('../header.php');
?>
<!-- Generated by Doxygen 1.8.2 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="annotated.php"><span>Classes</span></a></li>
      <li class="current"><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="files.php"><span>File&#160;List</span></a></li>
    </ul>
  </div>
<div id="nav-path" class="navpath">
  <ul>
<li class="navelem"><a class="el" href="dir_a0fcb5a19f655e235834e6382998c7e0.php">sfml</a></li><li class="navelem"><a class="el" href="dir_29bf4fae8a8e962aff98775afacdab0f.php">sfml</a></li><li class="navelem"><a class="el" href="dir_e08987e907e430954db197f1220bd556.php">src</a></li><li class="navelem"><a class="el" href="dir_67163b7d99179e1ca51fe5e67c990233.php">SFML</a></li><li class="navelem"><a class="el" href="dir_65fc17c09da8fd5a072845d7851fa18b.php">Audio</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">SoundFile.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;</div>
<div class="line"><a name="l00002"></a><span class="lineno">    2</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00003"></a><span class="lineno">    3</span>&#160;<span class="comment">// SFML - Simple and Fast Multimedia Library</span></div>
<div class="line"><a name="l00004"></a><span class="lineno">    4</span>&#160;<span class="comment">// Copyright (C) 2007-2013 Laurent Gomila (laurent.gom@gmail.com)</span></div>
<div class="line"><a name="l00005"></a><span class="lineno">    5</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00006"></a><span class="lineno">    6</span>&#160;<span class="comment">// This software is provided &#39;as-is&#39;, without any express or implied warranty.</span></div>
<div class="line"><a name="l00007"></a><span class="lineno">    7</span>&#160;<span class="comment">// In no event will the authors be held liable for any damages arising from the use of this software.</span></div>
<div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;<span class="comment">// Permission is granted to anyone to use this software for any purpose,</span></div>
<div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;<span class="comment">// including commercial applications, and to alter it and redistribute it freely,</span></div>
<div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="comment">// subject to the following restrictions:</span></div>
<div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;<span class="comment">// 1. The origin of this software must not be misrepresented;</span></div>
<div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;<span class="comment">//    you must not claim that you wrote the original software.</span></div>
<div class="line"><a name="l00015"></a><span class="lineno">   15</span>&#160;<span class="comment">//    If you use this software in a product, an acknowledgment</span></div>
<div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;<span class="comment">//    in the product documentation would be appreciated but is not required.</span></div>
<div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;<span class="comment">// 2. Altered source versions must be plainly marked as such,</span></div>
<div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;<span class="comment">//    and must not be misrepresented as being the original software.</span></div>
<div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;<span class="comment">// 3. This notice may not be removed or altered from any source distribution.</span></div>
<div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;<span class="comment"></span></div>
<div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;<span class="preprocessor">#ifndef SFML_SOUNDFILE_HPP</span></div>
<div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;<span class="preprocessor"></span><span class="preprocessor">#define SFML_SOUNDFILE_HPP</span></div>
<div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;<span class="preprocessor"></span></div>
<div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;<span class="comment">// Headers</span></div>
<div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;<span class="comment"></span><span class="preprocessor">#include &lt;SFML/System/NonCopyable.hpp&gt;</span></div>
<div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;<span class="preprocessor">#include &lt;SFML/System/Time.hpp&gt;</span></div>
<div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;<span class="preprocessor">#include &lt;sndfile.h&gt;</span></div>
<div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;<span class="preprocessor">#include &lt;string&gt;</span></div>
<div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;</div>
<div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;</div>
<div class="line"><a name="l00037"></a><span class="lineno">   37</span>&#160;<span class="keyword">namespace </span>sf</div>
<div class="line"><a name="l00038"></a><span class="lineno">   38</span>&#160;{</div>
<div class="line"><a name="l00039"></a><span class="lineno">   39</span>&#160;<span class="keyword">class </span>InputStream;</div>
<div class="line"><a name="l00040"></a><span class="lineno">   40</span>&#160;</div>
<div class="line"><a name="l00041"></a><span class="lineno">   41</span>&#160;<span class="keyword">namespace </span>priv</div>
<div class="line"><a name="l00042"></a><span class="lineno">   42</span>&#160;{</div>
<div class="line"><a name="l00047"></a><span class="lineno">   47</span>&#160;<span class="keyword">class </span>SoundFile : NonCopyable</div>
<div class="line"><a name="l00048"></a><span class="lineno">   48</span>&#160;{</div>
<div class="line"><a name="l00049"></a><span class="lineno">   49</span>&#160;<span class="keyword">public</span> :</div>
<div class="line"><a name="l00050"></a><span class="lineno">   50</span>&#160;</div>
<div class="line"><a name="l00055"></a><span class="lineno">   55</span>&#160;    SoundFile();</div>
<div class="line"><a name="l00056"></a><span class="lineno">   56</span>&#160;</div>
<div class="line"><a name="l00061"></a><span class="lineno">   61</span>&#160;    ~SoundFile();</div>
<div class="line"><a name="l00062"></a><span class="lineno">   62</span>&#160;</div>
<div class="line"><a name="l00069"></a><span class="lineno">   69</span>&#160;    std::size_t getSampleCount() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00070"></a><span class="lineno">   70</span>&#160;</div>
<div class="line"><a name="l00077"></a><span class="lineno">   77</span>&#160;    <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> getChannelCount() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00078"></a><span class="lineno">   78</span>&#160;</div>
<div class="line"><a name="l00085"></a><span class="lineno">   85</span>&#160;    <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> getSampleRate() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00086"></a><span class="lineno">   86</span>&#160;</div>
<div class="line"><a name="l00095"></a><span class="lineno">   95</span>&#160;    <span class="keywordtype">bool</span> openRead(<span class="keyword">const</span> std::string&amp; filename);</div>
<div class="line"><a name="l00096"></a><span class="lineno">   96</span>&#160;</div>
<div class="line"><a name="l00106"></a><span class="lineno">  106</span>&#160;    <span class="keywordtype">bool</span> openRead(<span class="keyword">const</span> <span class="keywordtype">void</span>* data, std::size_t sizeInBytes);</div>
<div class="line"><a name="l00107"></a><span class="lineno">  107</span>&#160;</div>
<div class="line"><a name="l00116"></a><span class="lineno">  116</span>&#160;    <span class="keywordtype">bool</span> openRead(InputStream&amp; stream);</div>
<div class="line"><a name="l00117"></a><span class="lineno">  117</span>&#160;</div>
<div class="line"><a name="l00128"></a><span class="lineno">  128</span>&#160;    <span class="keywordtype">bool</span> openWrite(<span class="keyword">const</span> std::string&amp; filename, <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> channelCount, <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> sampleRate);</div>
<div class="line"><a name="l00129"></a><span class="lineno">  129</span>&#160;</div>
<div class="line"><a name="l00139"></a><span class="lineno">  139</span>&#160;    std::size_t read(Int16* data, std::size_t sampleCount);</div>
<div class="line"><a name="l00140"></a><span class="lineno">  140</span>&#160;</div>
<div class="line"><a name="l00148"></a><span class="lineno">  148</span>&#160;    <span class="keywordtype">void</span> write(<span class="keyword">const</span> Int16* data, std::size_t sampleCount);</div>
<div class="line"><a name="l00149"></a><span class="lineno">  149</span>&#160;</div>
<div class="line"><a name="l00156"></a><span class="lineno">  156</span>&#160;    <span class="keywordtype">void</span> seek(Time timeOffset);</div>
<div class="line"><a name="l00157"></a><span class="lineno">  157</span>&#160;</div>
<div class="line"><a name="l00158"></a><span class="lineno">  158</span>&#160;<span class="keyword">private</span> :</div>
<div class="line"><a name="l00159"></a><span class="lineno">  159</span>&#160;</div>
<div class="line"><a name="l00168"></a><span class="lineno">  168</span>&#160;    <span class="keywordtype">void</span> initialize(<a class="code" href="structSF__INFO.php">SF_INFO</a> fileInfo);</div>
<div class="line"><a name="l00169"></a><span class="lineno">  169</span>&#160;</div>
<div class="line"><a name="l00179"></a><span class="lineno">  179</span>&#160;    <span class="keyword">static</span> <span class="keywordtype">int</span> getFormatFromFilename(<span class="keyword">const</span> std::string&amp; filename);</div>
<div class="line"><a name="l00180"></a><span class="lineno">  180</span>&#160;</div>
<div class="line"><a name="l00185"></a><span class="lineno">  185</span>&#160;    <span class="keyword">struct </span>Memory</div>
<div class="line"><a name="l00186"></a><span class="lineno">  186</span>&#160;    {</div>
<div class="line"><a name="l00187"></a><span class="lineno">  187</span>&#160;        <span class="keyword">const</span> <span class="keywordtype">char</span>* DataStart;</div>
<div class="line"><a name="l00188"></a><span class="lineno">  188</span>&#160;        <span class="keyword">const</span> <span class="keywordtype">char</span>* DataPtr;</div>
<div class="line"><a name="l00189"></a><span class="lineno">  189</span>&#160;        sf_count_t  TotalSize;</div>
<div class="line"><a name="l00190"></a><span class="lineno">  190</span>&#160;</div>
<div class="line"><a name="l00191"></a><span class="lineno">  191</span>&#160;        <span class="keyword">static</span> sf_count_t getLength(<span class="keywordtype">void</span>* user);</div>
<div class="line"><a name="l00192"></a><span class="lineno">  192</span>&#160;        <span class="keyword">static</span> sf_count_t read(<span class="keywordtype">void</span>* ptr, sf_count_t count, <span class="keywordtype">void</span>* user);</div>
<div class="line"><a name="l00193"></a><span class="lineno">  193</span>&#160;        <span class="keyword">static</span> sf_count_t seek(sf_count_t offset, <span class="keywordtype">int</span> whence, <span class="keywordtype">void</span>* user);</div>
<div class="line"><a name="l00194"></a><span class="lineno">  194</span>&#160;        <span class="keyword">static</span> sf_count_t tell(<span class="keywordtype">void</span>* user);</div>
<div class="line"><a name="l00195"></a><span class="lineno">  195</span>&#160;    };</div>
<div class="line"><a name="l00196"></a><span class="lineno">  196</span>&#160;</div>
<div class="line"><a name="l00201"></a><span class="lineno">  201</span>&#160;    <span class="keyword">struct </span>Stream</div>
<div class="line"><a name="l00202"></a><span class="lineno">  202</span>&#160;    {</div>
<div class="line"><a name="l00203"></a><span class="lineno">  203</span>&#160;        <span class="keyword">static</span> sf_count_t getLength(<span class="keywordtype">void</span>* user);</div>
<div class="line"><a name="l00204"></a><span class="lineno">  204</span>&#160;        <span class="keyword">static</span> sf_count_t read(<span class="keywordtype">void</span>* ptr, sf_count_t count, <span class="keywordtype">void</span>* user);</div>
<div class="line"><a name="l00205"></a><span class="lineno">  205</span>&#160;        <span class="keyword">static</span> sf_count_t seek(sf_count_t offset, <span class="keywordtype">int</span> whence, <span class="keywordtype">void</span>* user);</div>
<div class="line"><a name="l00206"></a><span class="lineno">  206</span>&#160;        <span class="keyword">static</span> sf_count_t tell(<span class="keywordtype">void</span>* user);</div>
<div class="line"><a name="l00207"></a><span class="lineno">  207</span>&#160;    };</div>
<div class="line"><a name="l00208"></a><span class="lineno">  208</span>&#160;</div>
<div class="line"><a name="l00210"></a><span class="lineno">  210</span>&#160;    <span class="comment">// Member data</span></div>
<div class="line"><a name="l00212"></a><span class="lineno">  212</span>&#160;<span class="comment"></span>    SNDFILE*     m_file;         </div>
<div class="line"><a name="l00213"></a><span class="lineno">  213</span>&#160;    Memory       m_memory;       </div>
<div class="line"><a name="l00214"></a><span class="lineno">  214</span>&#160;    std::size_t  m_sampleCount;  </div>
<div class="line"><a name="l00215"></a><span class="lineno">  215</span>&#160;    <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> m_channelCount; </div>
<div class="line"><a name="l00216"></a><span class="lineno">  216</span>&#160;    <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> m_sampleRate;   </div>
<div class="line"><a name="l00217"></a><span class="lineno">  217</span>&#160;};</div>
<div class="line"><a name="l00218"></a><span class="lineno">  218</span>&#160;</div>
<div class="line"><a name="l00219"></a><span class="lineno">  219</span>&#160;} <span class="comment">// namespace priv</span></div>
<div class="line"><a name="l00220"></a><span class="lineno">  220</span>&#160;</div>
<div class="line"><a name="l00221"></a><span class="lineno">  221</span>&#160;} <span class="comment">// namespace sf</span></div>
<div class="line"><a name="l00222"></a><span class="lineno">  222</span>&#160;</div>
<div class="line"><a name="l00223"></a><span class="lineno">  223</span>&#160;</div>
<div class="line"><a name="l00224"></a><span class="lineno">  224</span>&#160;<span class="preprocessor">#endif // SFML_SOUNDFILE_HPP</span></div>
</div><!-- fragment --></div><!-- contents -->
<?php
    require("../footer.php");
?>
