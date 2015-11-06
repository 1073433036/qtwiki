<!DOCTYPE html>
<html lang="en" dir="ltr" class="client-nojs">

<!-- Mirrored from wiki.qt.io/index.php?title=IOS_sound_from_QML_(AVAudioPlayer)&oldid=18062 by HTTrack Website Copier/3.x [XR&CO'2013], Thu, 05 Nov 2015 13:02:20 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="UTF-8" />
<title>IOS sound from QML (AVAudioPlayer) - Qt Wiki</title>
<meta http-equiv="X-UA-Compatible" content="IE=EDGE" />
<meta name="generator" content="MediaWiki 1.23.3" />
<meta name="robots" content="noindex,nofollow" />
<link rel="shortcut icon" href="http://wiki.qt.io/favicon.ico" />
<link rel="search" type="application/opensearchdescription+xml" href="http://wiki.qt.io/opensearch_desc.php" title="Qt Wiki (en)" />
<link rel="EditURI" type="application/rsd+xml" href="http://wiki.qt.io/api.php?action=rsd" />
<link rel="alternate" type="application/atom+xml" title="Qt Wiki Atom feed" href="http://wiki.qt.io/index.php?title=Special:RecentChanges&amp;feed=atom" />
<link rel="stylesheet" href="http://wiki.qt.io/load.php?debug=false&amp;lang=en&amp;modules=mediawiki.legacy.commonPrint%2Cshared%7Cmediawiki.skinning.interface%7Cmediawiki.ui.button%7Cskins.vector.styles&amp;only=styles&amp;skin=vector&amp;*" />
<meta name="ResourceLoaderDynamicStyles" content="" />
<link rel="stylesheet" href="http://wiki.qt.io/load.php?debug=false&amp;lang=en&amp;modules=site&amp;only=styles&amp;skin=vector&amp;*" />
<style>a:lang(ar),a:lang(kk-arab),a:lang(mzn),a:lang(ps),a:lang(ur){text-decoration:none}
/* cache key: qtio_wiki:resourceloader:filter:minify-css:7:e91d7bc946738c8892a88ad5616a59ba */</style>
<script src="http://wiki.qt.io/load.php?debug=false&amp;lang=en&amp;modules=startup&amp;only=scripts&amp;skin=vector&amp;*"></script>
<script>if(window.mw){
mw.config.set({"wgCanonicalNamespace":"","wgCanonicalSpecialPageName":false,"wgNamespaceNumber":0,"wgPageName":"IOS_sound_from_QML_(AVAudioPlayer)","wgTitle":"IOS sound from QML (AVAudioPlayer)","wgCurRevisionId":18062,"wgRevisionId":18062,"wgArticleId":4037,"wgIsArticle":true,"wgIsRedirect":false,"wgAction":"view","wgUserName":null,"wgUserGroups":["*"],"wgCategories":["HowTo"],"wgBreakFrames":false,"wgPageContentLanguage":"en","wgPageContentModel":"wikitext","wgSeparatorTransformTable":["",""],"wgDigitTransformTable":["",""],"wgDefaultDateFormat":"dmy","wgMonthNames":["","January","February","March","April","May","June","July","August","September","October","November","December"],"wgMonthNamesShort":["","Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"wgRelevantPageName":"IOS_sound_from_QML_(AVAudioPlayer)","wgIsProbablyEditable":false,"wgRestrictionEdit":[],"wgRestrictionMove":[],"wgWikiEditorEnabledModules":{"toolbar":true,"dialogs":true,"hidesig":true,"preview":true,"previewDialog":false,"publish":true}});
}</script><script>if(window.mw){
mw.loader.implement("user.options",function($,jQuery){mw.user.options.set({"ccmeonemails":0,"cols":80,"date":"default","diffonly":0,"disablemail":0,"editfont":"default","editondblclick":0,"editsectiononrightclick":0,"enotifminoredits":0,"enotifrevealaddr":0,"enotifusertalkpages":1,"enotifwatchlistpages":1,"extendwatchlist":0,"fancysig":0,"forceeditsummary":0,"gender":"unknown","hideminor":0,"hidepatrolled":0,"imagesize":2,"math":1,"minordefault":0,"newpageshidepatrolled":0,"nickname":"","norollbackdiff":0,"numberheadings":0,"previewonfirst":0,"previewontop":1,"rcdays":7,"rclimit":50,"rows":25,"showhiddencats":0,"shownumberswatching":1,"showtoolbar":1,"skin":"vector","stubthreshold":0,"thumbsize":2,"underline":2,"uselivepreview":0,"usenewrc":0,"watchcreations":1,"watchdefault":1,"watchdeletion":0,"watchlistdays":3,"watchlisthideanons":0,"watchlisthidebots":0,"watchlisthideliu":0,"watchlisthideminor":0,"watchlisthideown":0,"watchlisthidepatrolled":0,"watchmoves":0,"wllimit":250,
"useeditwarning":1,"prefershttps":1,"usebetatoolbar":1,"usebetatoolbar-cgd":1,"wikieditor-preview":1,"wikieditor-publish":1,"language":"en","variant-gan":"gan","variant-iu":"iu","variant-kk":"kk","variant-ku":"ku","variant-shi":"shi","variant-sr":"sr","variant-tg":"tg","variant-uz":"uz","variant-zh":"zh","searchNs0":true,"searchNs1":false,"searchNs2":false,"searchNs3":false,"searchNs4":false,"searchNs5":false,"searchNs6":false,"searchNs7":false,"searchNs8":false,"searchNs9":false,"searchNs10":false,"searchNs11":false,"searchNs12":false,"searchNs13":false,"searchNs14":false,"searchNs15":false,"searchNs500":false,"searchNs501":false,"searchNs700":false,"searchNs701":false,"variant":"en"});},{},{});mw.loader.implement("user.tokens",function($,jQuery){mw.user.tokens.set({"editToken":"+\\","patrolToken":false,"watchToken":false});},{},{});
/* cache key: qtio_wiki:resourceloader:filter:minify-js:7:9743cb8b8019d46de5946bfe6dfa04d7 */
}</script>
<script>if(window.mw){
mw.loader.load(["mediawiki.page.startup","mediawiki.legacy.wikibits","mediawiki.legacy.ajax","skins.vector.js"]);
}</script>
<style type="text/css">/*<![CDATA[*/
.source-cpp-qt {line-height: normal;}
.source-cpp-qt li, .source-cpp-qt pre {
	line-height: normal; border: 0px none white;
}
/**
 * GeSHi Dynamically Generated Stylesheet
 * --------------------------------------
 * Dynamically generated stylesheet for cpp-qt
 * CSS class: source-cpp-qt, CSS id: 
 * GeSHi (C) 2004 - 2007 Nigel McNie, 2007 - 2008 Benny Baumann
 * (http://qbnz.com/highlighter/ and http://geshi.org/)
 * --------------------------------------
 */
.cpp-qt.source-cpp-qt .de1, .cpp-qt.source-cpp-qt .de2 {font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;font-family: monospace, monospace;}
.cpp-qt.source-cpp-qt  {font-family:monospace;}
.cpp-qt.source-cpp-qt .imp {font-weight: bold; color: red;}
.cpp-qt.source-cpp-qt li, .cpp-qt.source-cpp-qt .li1 {font-weight: normal; vertical-align:top;}
.cpp-qt.source-cpp-qt .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;}
.cpp-qt.source-cpp-qt .li2 {font-weight: bold; vertical-align:top;}
.cpp-qt.source-cpp-qt .kw1 {color: #000000; font-weight:bold;}
.cpp-qt.source-cpp-qt .kw2 {color: #0057AE;}
.cpp-qt.source-cpp-qt .kw3 {color: #2B74C7;}
.cpp-qt.source-cpp-qt .kw4 {color: #0057AE;}
.cpp-qt.source-cpp-qt .kw5 {color: #22aadd;}
.cpp-qt.source-cpp-qt .co1 {color: #888888;}
.cpp-qt.source-cpp-qt .co2 {color: #006E28;}
.cpp-qt.source-cpp-qt .coMULTI {color: #888888; font-style: italic;}
.cpp-qt.source-cpp-qt .es0 {color: #000099; font-weight: bold;}
.cpp-qt.source-cpp-qt .es1 {color: #000099; font-weight: bold;}
.cpp-qt.source-cpp-qt .es2 {color: #660099; font-weight: bold;}
.cpp-qt.source-cpp-qt .es3 {color: #660099; font-weight: bold;}
.cpp-qt.source-cpp-qt .es4 {color: #660099; font-weight: bold;}
.cpp-qt.source-cpp-qt .es5 {color: #006699; font-weight: bold;}
.cpp-qt.source-cpp-qt .br0 {color: #006E28;}
.cpp-qt.source-cpp-qt .sy0 {color: #006E28;}
.cpp-qt.source-cpp-qt .st0 {color: #BF0303;}
.cpp-qt.source-cpp-qt .nu0 {color: #B08000;}
.cpp-qt.source-cpp-qt .nu6 {color: #208080;}
.cpp-qt.source-cpp-qt .nu8 {color: #208080;}
.cpp-qt.source-cpp-qt .nu12 {color: #208080;}
.cpp-qt.source-cpp-qt .nu16 {color:#800080;}
.cpp-qt.source-cpp-qt .nu17 {color:#800080;}
.cpp-qt.source-cpp-qt .nu18 {color:#800080;}
.cpp-qt.source-cpp-qt .nu19 {color:#800080;}
.cpp-qt.source-cpp-qt .me1 {color: #2B74C7;}
.cpp-qt.source-cpp-qt .me2 {color: #2B74C7;}
.cpp-qt.source-cpp-qt .me3 {color: #2B74C7;}
.cpp-qt.source-cpp-qt .ln-xtra, .cpp-qt.source-cpp-qt li.ln-xtra, .cpp-qt.source-cpp-qt div.ln-xtra {background-color: #ffc;}
.cpp-qt.source-cpp-qt span.xtra { display:block; }

/*]]>*/
</style><!--[if lt IE 7]><style type="text/css">body{behavior:url("/skins/vector/csshover.min.htc")}</style><![endif]--></head>
<body class="mediawiki ltr sitedir-ltr ns-0 ns-subject page-IOS_sound_from_QML_AVAudioPlayer skin-vector action-view vector-animateLayout">
		<div id="mw-page-base" class="noprint"></div>
		<div id="mw-head-base" class="noprint"></div>
		<div id="content" class="mw-body" role="main">
			<a id="top"></a>
			<div id="mw-js-message" style="display:none;"></div>
						<h1 id="firstHeading" class="firstHeading" lang="en"><span dir="auto">IOS sound from QML (AVAudioPlayer)</span></h1>
						<div id="bodyContent">
								<div id="siteSub">From Qt Wiki</div>
								<div id="contentSub"><div id="mw-revision-info">Revision as of 18:14, 26 June 2015 by <a href="http://wiki.qt.io/index.php?title=User:M_andrej&amp;action=edit&amp;redlink=1" class="new mw-userlink" title="User:M andrej (page does not exist)">M andrej</a>  <span class="mw-usertoollinks">(<a href="http://wiki.qt.io/index.php?title=User_talk:M_andrej&amp;action=edit&amp;redlink=1" class="new" title="User talk:M andrej (page does not exist)">Talk</a> | <a href="http://wiki.qt.io/Special:Contributions/M_andrej" title="Special:Contributions/M andrej">contribs</a>)</span></div><br />
				<div id="mw-revision-nav">(diff) ← Older revision | Latest revision (diff) | Newer revision → (diff)</div></div>
												<div id="jump-to-nav" class="mw-jump">
					Jump to:					<a href="#mw-navigation">navigation</a>, 					<a href="#p-search">search</a>
				</div>
				<div id="mw-content-text" lang="en" dir="ltr" class="mw-content-ltr"><p>There is a couple of articles here, which allegedly contain instructions on how to get sound working on iOS via standard Qt classes QMediaPlayer and QML Audio element. I tried all of them and failed. Maybe they worked on earlier versions of iOS or Xcode, but not on iOS 8. So I was forced to write native code for the sound part of my app.
</p>
<h3><span class="mw-headline" id="Bundle_audio_files_in_application">Bundle audio files in application</span></h3>
<p>You can either play *.mp3 or *.aac files in iOS. Unfortunately *.ogg files won't work. I chose *.aac, because it appeared to have lower latency than mp3, which was important in my app (game). You can't use Qt resource system, instead, you have to include the audio files in your *.pro:
</p>
<div dir="ltr" class="mw-geshi mw-code mw-content-ltr"><div class="cpp-qt source-cpp-qt"><pre class="de1">ios<span class="sy0">:</span> <span class="br0">&#123;</span>
    BUNDLE_DATA.<span class="me1">files</span> <span class="sy0">=</span> $$files<span class="br0">&#40;</span>$$PWD<span class="sy0">/</span>ios<span class="coMULTI">/*.aac)
    QMAKE_BUNDLE_DATA += BUNDLE_DATA
&#160;
    HEADERS += CAudio.h
    OBJECTIVE_SOURCES += CAudio.mm
}</span></pre></div></div>
<p>Make sure that your source code directory contains directory "ios" (on the same level as the *.pro), which contains your audio files. The second part of the snippet ensures that Objective-C++ source doesn't produce compile erros on other platforms.
</p>
<h3><span class="mw-headline" id="The_audio_class_itself">The audio class itself</span></h3>
<p>I wrote my audio class to substitute QML Audio element, so it supports properties <i>source</i> and <i>muted</i>.
</p><p>File CAudio.h:
</p>
<div dir="ltr" class="mw-geshi mw-code mw-content-ltr"><div class="cpp-qt source-cpp-qt"><pre class="de1"><span class="co2">#pragma once</span>
&#160;
<span class="co2">#include &lt;QObject&gt;</span>
&#160;
<span class="kw2">class</span> CAudio <span class="sy0">:</span> <span class="kw2">public</span> <span class="kw5">QObject</span>
<span class="br0">&#123;</span>
	<span class="kw2">Q_OBJECT</span>
&#160;
	Q_PROPERTY<span class="br0">&#40;</span><span class="kw5">QString</span> source READ source WRITE setSource<span class="br0">&#41;</span>
	Q_PROPERTY<span class="br0">&#40;</span><span class="kw4">bool</span> muted READ muted WRITE setMuted<span class="br0">&#41;</span>
&#160;
<span class="kw2">public</span><span class="sy0">:</span>
	CAudio<span class="br0">&#40;</span><span class="kw5">QObject</span> <span class="sy0">*</span>parent <span class="sy0">=</span> <span class="nu0">0</span><span class="br0">&#41;</span> <span class="sy0">:</span> <span class="kw5">QObject</span><span class="br0">&#40;</span>parent<span class="br0">&#41;</span> <span class="br0">&#123;</span><span class="br0">&#125;</span>
&#160;
	<span class="kw5">QString</span> source<span class="br0">&#40;</span><span class="br0">&#41;</span> <span class="kw4">const</span> <span class="br0">&#123;</span> <span class="kw1">return</span> m_source<span class="sy0">;</span> <span class="br0">&#125;</span>
	<span class="kw4">void</span> setSource<span class="br0">&#40;</span><span class="kw4">const</span> <span class="kw5">QString</span> <span class="sy0">&amp;</span>value<span class="br0">&#41;</span> <span class="br0">&#123;</span> m_source <span class="sy0">=</span> value<span class="sy0">;</span> <span class="br0">&#125;</span>
	<span class="kw4">bool</span> muted<span class="br0">&#40;</span><span class="br0">&#41;</span> <span class="kw4">const</span> <span class="br0">&#123;</span> <span class="kw1">return</span> m_muted<span class="sy0">;</span> <span class="br0">&#125;</span>
	<span class="kw4">void</span> setMuted<span class="br0">&#40;</span><span class="kw4">const</span> <span class="kw4">bool</span> <span class="sy0">&amp;</span>value<span class="br0">&#41;</span> <span class="br0">&#123;</span> m_muted <span class="sy0">=</span> value<span class="sy0">;</span> <span class="br0">&#125;</span>
&#160;
	Q_INVOKABLE <span class="kw4">void</span> play<span class="br0">&#40;</span><span class="br0">&#41;</span> const<span class="sy0">;</span>
&#160;
<span class="kw2">private</span><span class="sy0">:</span>
	<span class="kw5">QString</span> m_source<span class="sy0">;</span>
	<span class="kw4">bool</span> m_muted<span class="sy0">;</span>
<span class="br0">&#125;</span><span class="sy0">;</span></pre></div></div>
<p>The only method that is defined in *.mm file is play():
</p><p>CAudio.mm:
</p>
<div dir="ltr" class="mw-geshi mw-code mw-content-ltr"><div class="cpp-qt source-cpp-qt"><pre class="de1"><span class="co2">#include &quot;CAudio.h&quot;</span>
<span class="co2">#import &lt;AVFoundation/AVFoundation.h&gt;</span>
<span class="co2">#include &lt;QDebug&gt;</span>
&#160;
<span class="kw4">void</span> CAudio<span class="sy0">::</span><span class="me2">play</span><span class="br0">&#40;</span><span class="br0">&#41;</span> <span class="kw4">const</span>
<span class="br0">&#123;</span>
	<span class="kw1">if</span><span class="br0">&#40;</span>m_muted<span class="br0">&#41;</span>
		return<span class="sy0">;</span>
&#160;
	<span class="kw5">QStringList</span> splitPath <span class="sy0">=</span> m_source.<span class="me1">split</span><span class="br0">&#40;</span><span class="st0">&quot;/&quot;</span><span class="br0">&#41;</span><span class="sy0">;</span>	<span class="co1">// extract only filename from the path</span>
	<span class="kw1">if</span><span class="br0">&#40;</span>splitPath.<span class="me1">length</span><span class="br0">&#40;</span><span class="br0">&#41;</span> <span class="sy0">&lt;</span> <span class="nu0">2</span><span class="br0">&#41;</span>
		return<span class="sy0">;</span>
	<span class="kw5">QString</span> fileName <span class="sy0">=</span> splitPath.<span class="me1">at</span><span class="br0">&#40;</span><span class="nu0">1</span><span class="br0">&#41;</span><span class="sy0">;</span>
	<span class="kw1">if</span><span class="br0">&#40;</span>fileName.<span class="me1">length</span><span class="br0">&#40;</span><span class="br0">&#41;</span> <span class="sy0">&lt;</span> <span class="nu0">4</span><span class="br0">&#41;</span>
		return<span class="sy0">;</span>
	fileName.<span class="me1">chop</span><span class="br0">&#40;</span><span class="nu0">4</span><span class="br0">&#41;</span><span class="sy0">;</span>		<span class="co1">// remove file extension</span>
	fileName <span class="sy0">+=</span> <span class="st0">&quot;.aac&quot;</span><span class="sy0">;</span>
&#160;
	NSString <span class="sy0">*</span>soundFilePath <span class="sy0">=</span> fileName.<span class="me1">toNSString</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
	NSURL <span class="sy0">*</span>soundFileURL <span class="sy0">=</span> <span class="br0">&#91;</span>NSURL fileURLWithPath<span class="sy0">:</span>soundFilePath<span class="br0">&#93;</span><span class="sy0">;</span>
	<span class="kw4">static</span> AVAudioPlayer <span class="sy0">*</span>audioPlayer <span class="sy0">=</span> <span class="br0">&#91;</span>AVAudioPlayer alloc<span class="br0">&#93;</span><span class="sy0">;</span>
	<span class="br0">&#91;</span>audioPlayer initWithContentsOfURL<span class="sy0">:</span>soundFileURL error<span class="sy0">:</span>nil<span class="br0">&#93;</span><span class="sy0">;</span>
	<span class="br0">&#91;</span>audioPlayer play<span class="br0">&#93;</span><span class="sy0">;</span>
<span class="br0">&#125;</span></pre></div></div>
<p>On Android I'm playing files in Ogg vorbis format from Qt resource file. On iOS I prepared files in 'ios' directory with the same base name, but different extension. This code replaces the extension with ".aac". <b>Note: The Objective-C part of the above code probably leaks memory. It appears to crash my application after ca. 30 minutes of game play. I attempted to eliminate the memory leak by making <i>audioPlayer</i> static, but the problem persists. You are welcome to submit corrections to this code.</b>
</p>
<h3><span class="mw-headline" id="The_QML_part">The QML part</span></h3>
<p>I'm registering my class only in iOS. This ensures that on other platforms the standard QML Audio element is used.
</p><p>main.cpp:
</p>
<div dir="ltr" class="mw-geshi mw-code mw-content-ltr"><div class="cpp-qt source-cpp-qt"><pre class="de1"><span class="co2">#ifdef Q_OS_IOS</span>
	qmlRegisterType<span class="sy0">&lt;</span>CAudio<span class="sy0">&gt;</span><span class="br0">&#40;</span><span class="st0">&quot;ios_audio&quot;</span><span class="sy0">,</span> <span class="nu0">1</span><span class="sy0">,</span> <span class="nu0">0</span><span class="sy0">,</span> <span class="st0">&quot;Audio&quot;</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="co2">#else</span>
	qmlRegisterType<span class="sy0">&lt;</span><span class="kw5">QObject</span><span class="sy0">&gt;</span><span class="br0">&#40;</span><span class="st0">&quot;ios_audio&quot;</span><span class="sy0">,</span> <span class="nu0">1</span><span class="sy0">,</span> <span class="nu0">0</span><span class="sy0">,</span> <span class="st0">&quot;DummyObject&quot;</span><span class="br0">&#41;</span><span class="sy0">;</span>		<span class="co1">// import nothing if not in iOS</span>
<span class="co2">#endif</span></pre></div></div>
<p>Finally, we can write cross-platform QML code like this:
</p>
<div dir="ltr" class="mw-geshi mw-code mw-content-ltr"><div class="cpp-qt source-cpp-qt"><pre class="de1">import QtMultimedia <span class="nu16">5.4</span>
import ios_audio <span class="nu16">1.0</span>
&#160;
...
    <span class="me1">Audio</span> <span class="br0">&#123;</span>
        id<span class="sy0">:</span> click
        source<span class="sy0">:</span> <span class="st0">&quot;resources/click-1-off.ogg&quot;</span>
	muted<span class="sy0">:</span> <span class="sy0">!</span>settings.<span class="me1">soundsEnabled</span>
    <span class="br0">&#125;</span></pre></div></div>

<!-- 
NewPP limit report
CPU time usage: 0.095 seconds
Real time usage: 0.095 seconds
Preprocessor visited node count: 44/1000000
Preprocessor generated node count: 116/1000000
Post‐expand include size: 0/2097152 bytes
Template argument size: 0/2097152 bytes
Highest expansion depth: 2/40
Expensive parser function count: 0/100
-->

<!-- Saved in parser cache with key qtio_wiki:pcache:idhash:4037-0!*!*!!*!*!* and timestamp 20151105114511 and revision id 18062
 -->
</div>								<div class="printfooter">
				Retrieved from "<a href="http://wiki.qt.io/index.php?title=IOS_sound_from_QML_(AVAudioPlayer)&amp;oldid=18062">http://wiki.qt.io/index.php?title=IOS_sound_from_QML_(AVAudioPlayer)&amp;oldid=18062</a>"				</div>
												<div id='catlinks' class='catlinks'><div id="mw-normal-catlinks" class="mw-normal-catlinks"><a href="http://wiki.qt.io/Special:Categories" title="Special:Categories">Category</a>: <ul><li><a href="http://wiki.qt.io/Category:HowTo" title="Category:HowTo">HowTo</a></li></ul></div></div>												<div class="visualClear"></div>
							</div>
		</div>
		<div id="mw-navigation">
			<h2>Navigation menu</h2>
			<div id="mw-head">
				<div id="p-personal" role="navigation" class="" aria-labelledby="p-personal-label">
	<h3 id="p-personal-label">Personal tools</h3>
	<ul>
<li id="pt-anonuserpage"><a href="http://wiki.qt.io/User:10.0.113.70" class="new" title="The user page for the IP address you are editing as [.]" accesskey=".">10.0.113.70</a></li><li id="pt-anontalk"><a href="http://wiki.qt.io/User_talk:10.0.113.70" class="new" title="Discussion about edits from this IP address [n]" accesskey="n">Talk for this IP address</a></li><li id="pt-login"><a href="http://wiki.qt.io/index.php?title=Special:QtLogin&amp;returnto=IOS+sound+from+QML+%28AVAudioPlayer%29" title="You are encouraged to log in; however, it is not mandatory [o]" accesskey="o">Sign in</a></li>	</ul>
</div>
				<div id="left-navigation">
					<div id="p-namespaces" role="navigation" class="vectorTabs" aria-labelledby="p-namespaces-label">
	<h3 id="p-namespaces-label">Namespaces</h3>
	<ul>
					<li  id="ca-nstab-main" class="selected"><span><a href="http://wiki.qt.io/IOS_sound_from_QML_(AVAudioPlayer)"  title="View the content page [c]" accesskey="c">Page</a></span></li>
					<li  id="ca-talk" class="new"><span><a href="http://wiki.qt.io/index.php?title=Talk:IOS_sound_from_QML_(AVAudioPlayer)&amp;action=edit&amp;redlink=1"  title="Discussion about the content page [t]" accesskey="t">Discussion</a></span></li>
			</ul>
</div>
<div id="p-variants" role="navigation" class="vectorMenu emptyPortlet" aria-labelledby="p-variants-label">
	<h3 id="mw-vector-current-variant">
		</h3>
	<h3 id="p-variants-label"><span>Variants</span><a href="#"></a></h3>
	<div class="menu">
		<ul>
					</ul>
	</div>
</div>
				</div>
				<div id="right-navigation">
					<div id="p-views" role="navigation" class="vectorTabs" aria-labelledby="p-views-label">
	<h3 id="p-views-label">Views</h3>
	<ul>
					<li id="ca-view" class="selected"><span><a href="http://wiki.qt.io/IOS_sound_from_QML_(AVAudioPlayer)" >Read</a></span></li>
					<li id="ca-viewsource"><span><a href="http://wiki.qt.io/index.php?title=IOS_sound_from_QML_(AVAudioPlayer)&amp;action=edit"  title="This page is protected.&#10;You can view its source [e]" accesskey="e">View source</a></span></li>
					<li id="ca-history" class="collapsible"><span><a href="http://wiki.qt.io/index.php?title=IOS_sound_from_QML_(AVAudioPlayer)&amp;action=history"  title="Past revisions of this page [h]" accesskey="h">View history</a></span></li>
			</ul>
</div>
<div id="p-cactions" role="navigation" class="vectorMenu emptyPortlet" aria-labelledby="p-cactions-label">
	<h3 id="p-cactions-label"><span>Actions</span><a href="#"></a></h3>
	<div class="menu">
		<ul>
					</ul>
	</div>
</div>
<div id="p-search" role="search">
	<h3><label for="searchInput">Search</label></h3>
	<form action="http://wiki.qt.io/index.php" id="searchform">
					<div id="simpleSearch">
					<input type="search" name="search" placeholder="Search" title="Search Qt Wiki [f]" accesskey="f" id="searchInput" /><input type="hidden" value="Special:Search" name="title" /><input type="submit" name="fulltext" value="Search" title="Search the pages for this text" id="mw-searchButton" class="searchButton mw-fallbackSearchButton" /><input type="submit" name="go" value="Go" title="Go to a page with this exact name if exists" id="searchButton" class="searchButton" />		</div>
	</form>
</div>
				</div>
			</div>
			<div id="mw-panel">
					<div id="p-logo" role="banner"><a style="background-image: url(http://wiki.qt.io/skins/common/images/wiki.png);" href="http://wiki.qt.io/Main_Page"  title="Visit the main page"></a></div>
				<div class="portal" role="navigation" id='p-navigation' aria-labelledby='p-navigation-label'>
	<h3 id='p-navigation-label'>Navigation</h3>
	<div class="body">
		<ul>
			<li id="n-mainpage-description"><a href="http://wiki.qt.io/Main_Page" title="Visit the main page [z]" accesskey="z">Main page</a></li>
			<li id="n-recentchanges"><a href="http://wiki.qt.io/Special:RecentChanges" title="A list of recent changes in the wiki [r]" accesskey="r">Recent changes</a></li>
			<li id="n-randompage"><a href="http://wiki.qt.io/Special:Random" title="Load a random page [x]" accesskey="x">Random page</a></li>
			<li id="n-help"><a href="https://www.mediawiki.org/wiki/Special:MyLanguage/Help:Contents" title="The place to find out">Help</a></li>
		</ul>
	</div>
</div>
<div class="portal" role="navigation" id='p-tb' aria-labelledby='p-tb-label'>
	<h3 id='p-tb-label'>Tools</h3>
	<div class="body">
		<ul>
			<li id="t-whatlinkshere"><a href="http://wiki.qt.io/Special:WhatLinksHere/IOS_sound_from_QML_(AVAudioPlayer)" title="A list of all wiki pages that link here [j]" accesskey="j">What links here</a></li>
			<li id="t-recentchangeslinked"><a href="http://wiki.qt.io/Special:RecentChangesLinked/IOS_sound_from_QML_(AVAudioPlayer)" title="Recent changes in pages linked from this page [k]" accesskey="k">Related changes</a></li>
			<li id="t-specialpages"><a href="http://wiki.qt.io/Special:SpecialPages" title="A list of all special pages [q]" accesskey="q">Special pages</a></li>
			<li id="t-print"><a href="http://wiki.qt.io/index.php?title=IOS_sound_from_QML_(AVAudioPlayer)&amp;oldid=18062&amp;printable=yes" rel="alternate" title="Printable version of this page [p]" accesskey="p">Printable version</a></li>
			<li id="t-permalink"><a href="http://wiki.qt.io/index.php?title=IOS_sound_from_QML_(AVAudioPlayer)&amp;oldid=18062" title="Permanent link to this revision of the page">Permanent link</a></li>
			<li id="t-info"><a href="http://wiki.qt.io/index.php?title=IOS_sound_from_QML_(AVAudioPlayer)&amp;action=info">Page information</a></li>
		</ul>
	</div>
</div>
			</div>
		</div>
		<div id="footer" role="contentinfo">
							<ul id="footer-info">
											<li id="footer-info-lastmod"> This page was last modified on 26 June 2015, at 18:14.</li>
											<li id="footer-info-viewcount">This page has been accessed 188 times.</li>
									</ul>
							<ul id="footer-places">
											<li id="footer-places-terms"><a href='https://developer.qtcloudservices.com/legal/terms'>Käyttöehdot</a></li>
									</ul>
										<ul id="footer-icons" class="noprint">
					<li id="footer-poweredbyico">
						<a href="http://www.mediawiki.org/"><img src="http://wiki.qt.io/skins/common/images/poweredby_mediawiki_88x31.png" alt="Powered by MediaWiki" width="88" height="31" /></a>
					</li>
				</ul>
						<div style="clear:both"></div>
		</div>
		<script>/*<![CDATA[*/window.jQuery && jQuery.ready();/*]]>*/</script><script>if(window.mw){
mw.loader.state({"site":"loading","user":"ready","user.groups":"ready"});
}</script>
<script>if(window.mw){
mw.loader.load(["mediawiki.action.view.postEdit","mediawiki.user","mediawiki.hidpi","mediawiki.page.ready","mediawiki.searchSuggest","skins.vector.collapsibleNav"],null,true);
}</script>
<script src="http://wiki.qt.io/load.php?debug=false&amp;lang=en&amp;modules=site&amp;only=scripts&amp;skin=vector&amp;*"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','http://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-54043535-2', 'auto');
  ga('send', 'pageview');

</script>
<script>if(window.mw){
mw.config.set({"wgBackendResponseTime":339});
}</script>
	</body>

<!-- Mirrored from wiki.qt.io/index.php?title=IOS_sound_from_QML_(AVAudioPlayer)&oldid=18062 by HTTrack Website Copier/3.x [XR&CO'2013], Thu, 05 Nov 2015 13:02:20 GMT -->
</html>
