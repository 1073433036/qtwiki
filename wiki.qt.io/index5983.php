<!DOCTYPE html>
<html lang="en" dir="ltr" class="client-nojs">

<!-- Mirrored from wiki.qt.io/index.php?title=Qt_for_iOS_known_issues&printable=yes by HTTrack Website Copier/3.x [XR&CO'2013], Thu, 05 Nov 2015 13:02:18 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="UTF-8" />
<title>Qt for iOS known issues - Qt Wiki</title>
<meta http-equiv="X-UA-Compatible" content="IE=EDGE" />
<meta name="generator" content="MediaWiki 1.23.3" />
<meta name="robots" content="noindex,follow" />
<link rel="shortcut icon" href="favicon.ico" />
<link rel="search" type="application/opensearchdescription+xml" href="opensearch_desc.php" title="Qt Wiki (en)" />
<link rel="EditURI" type="application/rsd+xml" href="api251f.php?action=rsd" />
<link rel="alternate" type="application/atom+xml" title="Qt Wiki Atom feed" href="apidf90.php?title=Special:RecentChanges&amp;feed=atom" />
<link rel="stylesheet" href="load6077.css?debug=false&amp;lang=en&amp;modules=mediawiki.legacy.commonPrint%2Cshared%7Cmediawiki.skinning.interface%7Cmediawiki.ui.button%7Cskins.vector.styles&amp;only=styles&amp;printable=1&amp;skin=vector&amp;*" />
<meta name="ResourceLoaderDynamicStyles" content="" />
<link rel="stylesheet" href="load8b5e.css?debug=false&amp;lang=en&amp;modules=site&amp;only=styles&amp;printable=1&amp;skin=vector&amp;*" />
<style>a:lang(ar),a:lang(kk-arab),a:lang(mzn),a:lang(ps),a:lang(ur){text-decoration:none}
/* cache key: qtio_wiki:resourceloader:filter:minify-css:7:e91d7bc946738c8892a88ad5616a59ba */</style>
<script src="load041f.php?debug=false&amp;lang=en&amp;modules=startup&amp;only=scripts&amp;printable=1&amp;skin=vector&amp;*"></script>
<script>if(window.mw){
mw.config.set({"wgCanonicalNamespace":"","wgCanonicalSpecialPageName":false,"wgNamespaceNumber":0,"wgPageName":"Qt_for_iOS_known_issues","wgTitle":"Qt for iOS known issues","wgCurRevisionId":15497,"wgRevisionId":15497,"wgArticleId":1502,"wgIsArticle":true,"wgIsRedirect":false,"wgAction":"view","wgUserName":null,"wgUserGroups":["*"],"wgCategories":[],"wgBreakFrames":false,"wgPageContentLanguage":"en","wgPageContentModel":"wikitext","wgSeparatorTransformTable":["",""],"wgDigitTransformTable":["",""],"wgDefaultDateFormat":"dmy","wgMonthNames":["","January","February","March","April","May","June","July","August","September","October","November","December"],"wgMonthNamesShort":["","Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"wgRelevantPageName":"Qt_for_iOS_known_issues","wgIsProbablyEditable":false,"wgRestrictionEdit":[],"wgRestrictionMove":[],"wgWikiEditorEnabledModules":{"toolbar":true,"dialogs":true,"hidesig":true,"preview":true,"previewDialog":false,"publish":true}});
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
<body class="mediawiki ltr sitedir-ltr ns-0 ns-subject page-Qt_for_iOS_known_issues skin-vector action-view vector-animateLayout">
		<div id="mw-page-base" class="noprint"></div>
		<div id="mw-head-base" class="noprint"></div>
		<div id="content" class="mw-body" role="main">
			<a id="top"></a>
			<div id="mw-js-message" style="display:none;"></div>
						<h1 id="firstHeading" class="firstHeading" lang="en"><span dir="auto">Qt for iOS known issues</span></h1>
						<div id="bodyContent">
								<div id="siteSub">From Qt Wiki</div>
								<div id="contentSub"></div>
												<div id="jump-to-nav" class="mw-jump">
					Jump to:					<a href="#mw-navigation">navigation</a>, 					<a href="#p-search">search</a>
				</div>
				<div id="mw-content-text" lang="en" dir="ltr" class="mw-content-ltr"><p><br />
</p>
<div id="toc" class="toc"><div id="toctitle"><h2>Contents</h2></div>
<ul>
<li class="toclevel-1 tocsection-1"><a href="#Qt_for_iOS_known_issues_in_5.4.0"><span class="tocnumber">1</span> <span class="toctext">Qt for iOS known issues in 5.4.0</span></a></li>
<li class="toclevel-1 tocsection-2"><a href="#Qt_for_iOS_known_issues_in_5.3.1"><span class="tocnumber">2</span> <span class="toctext">Qt for iOS known issues in 5.3.1</span></a>
<ul>
<li class="toclevel-2 tocsection-3"><a href="#Qt_Positioning"><span class="tocnumber">2.1</span> <span class="toctext">Qt Positioning</span></a></li>
</ul>
</li>
<li class="toclevel-1 tocsection-4"><a href="#Qt_for_iOS_known_issues_in_5.3.0"><span class="tocnumber">3</span> <span class="toctext">Qt for iOS known issues in 5.3.0</span></a>
<ul>
<li class="toclevel-2 tocsection-5"><a href="#Qt_Creator"><span class="tocnumber">3.1</span> <span class="toctext">Qt Creator</span></a></li>
</ul>
</li>
<li class="toclevel-1 tocsection-6"><a href="#Qt_for_iOS_known_issues_in_5.2.x"><span class="tocnumber">4</span> <span class="toctext">Qt for iOS known issues in 5.2.x</span></a>
<ul>
<li class="toclevel-2 tocsection-7"><a href="#Building_.2F_running"><span class="tocnumber">4.1</span> <span class="toctext">Building / running</span></a></li>
<li class="toclevel-2 tocsection-8"><a href="#Qt_Creator_2"><span class="tocnumber">4.2</span> <span class="toctext">Qt Creator</span></a></li>
<li class="toclevel-2 tocsection-9"><a href="#Qt_Quick_2"><span class="tocnumber">4.3</span> <span class="toctext">Qt Quick 2</span></a></li>
<li class="toclevel-2 tocsection-10"><a href="#Examples"><span class="tocnumber">4.4</span> <span class="toctext">Examples</span></a></li>
</ul>
</li>
</ul>
</div>

<h1><span class="mw-headline" id="Qt_for_iOS_known_issues_in_5.4.0">Qt for iOS known issues in 5.4.0</span></h1>
<ul>
<li> Qt requires iPhoneOS.8.0.sdk and Xcode 6 (or newer) to be installed, and qmake will inform if this is not the case.
</li>
</ul>
<p>After installing latest version of Xcode you might still get a warning about the current Xcode version being
too old. The solution is to remove .qmake.stash inside your build folder before re-running qmake.
</p>
<ul>
<li> Line edits inside dialogs might not be able to get focus and bring up the keyboard. The solution is to
</li>
</ul>
<p>call QWidget::activateWindow() on the dialog after it has been shown.
</p>
<ul>
<li> QQuickWidget and QOpenGLWidget are not yet supported on iOS.
</li>
</ul>
<h1><span class="mw-headline" id="Qt_for_iOS_known_issues_in_5.3.1">Qt for iOS known issues in 5.3.1</span></h1>
<h2><span class="mw-headline" id="Qt_Positioning">Qt Positioning</span></h2>
<p>Linking of position based applications fails due to an incorrect CLASS_NAME. For more details and a temporary workaround see QTBUG-39843. The fix can be tracked via <a rel="nofollow" class="external free" href="https://codereview.qt.io/#/c/88290/">https://codereview.qt.io/#/c/88290/</a> .
</p>
<h1><span class="mw-headline" id="Qt_for_iOS_known_issues_in_5.3.0">Qt for iOS known issues in 5.3.0</span></h1>
<h2><span class="mw-headline" id="Qt_Creator">Qt Creator</span></h2>
<ul>
<li> When switching from simulator to device in insource building you should not import the old build settings (QTCREATORBUG-11067)
</li>
</ul>
<h1><span class="mw-headline" id="Qt_for_iOS_known_issues_in_5.2.x">Qt for iOS known issues in 5.2.x</span></h1>
<ul>
<li> Known and open <a rel="nofollow" class="external text" href="https://bugreports.qt.io/issues/?filter=14129">bugs</a>
</li>
</ul>
<h2><span class="mw-headline" id="Building_.2F_running">Building / running</span></h2>
<ul>
<li> <b>Imports in JavaScript files are not picked up automatically by QML import scanner</b> (QTBUG-35349) Workaround is to manually add the required library in the project file, eg <div dir="ltr" class="mw-geshi mw-code mw-content-ltr"><div class="cpp-qt source-cpp-qt"><pre class="de1">LIBS <span class="sy0">+=</span> <span class="sy0">-</span>L<span class="sy0">/</span>Users<span class="sy0">/</span>torarne<span class="sy0">/</span>build<span class="sy0">/</span>qt<span class="sy0">/</span><span class="nu16">5.2</span><span class="sy0">-</span>ios<span class="sy0">/</span>qtbase<span class="sy0">/</span>qml<span class="sy0">/</span>QtQuick<span class="sy0">/</span>LocalStorage <span class="sy0">-</span>lqmllocalstorageplugin</pre></div></div>
</li>
</ul>
<dl>
<dd>and then init the static library in one of your source files using eg <div dir="ltr" class="mw-geshi mw-code mw-content-ltr"><div class="cpp-qt source-cpp-qt"><pre class="de1">Q_IMPORT_PLUGIN<span class="br0">&#40;</span>QQmlLocalStoragePlugin<span class="br0">&#41;</span></pre></div></div>
</dd>
</dl>
<ul>
<li> <b>Default plugins for a module is not added automatically</b> Modules like QtSQL and QtMultimedia have backend plugins that are required for the module to work, and where the plugin is the only alternative on the platform. Qt does not add this plugin automatically (QTBUG-35195), so it has to be added manually in the project file, eg for QtSql: <div dir="ltr" class="mw-geshi mw-code mw-content-ltr"><div class="cpp-qt source-cpp-qt"><pre class="de1">QTPLUGIN<span class="sy0">+=</span> qsqlite</pre></div></div>
</li>
</ul>
<h2><span class="mw-headline" id="Qt_Creator_2">Qt Creator</span></h2>
<ul>
<li> Debugging on device has a slow startup (QTCREATORBUG-10884)
</li>
<li> Changing the shadow build directory does not update the run path (just in the ui, the correct one is used) (QTCREATORBUG-11080)
</li>
<li> When switching from simulator to device in insource building you should not import the old build settings (QTCREATORBUG-11067)
</li>
</ul>
<h2><span class="mw-headline" id="Qt_Quick_2">Qt Quick 2</span></h2>
<ul>
<li> Using the Drag attached property causes crash. Drag and drop is not supported on iOS in 5.2, and the QML2 implementation of the property does not handle a platform that doesn't support DnD.
</li>
</ul>
<h2><span class="mw-headline" id="Examples">Examples</span></h2>
<ul>
<li> Examples do not compile for iOS if they are located in a non-iOS Qt tree. If you are using Qt Creator, you need to explicitly select the iOS Qt version from the combo box in the examples browser before opening and compiling the example for iOS.
</li>
</ul>
<h3><span class="mw-headline" id="General">General</span></h3>
<ul>
<li> "QIOSBackingStore needs to have the same size as its window"
</li>
<li> Slow startup (due to font loading) (see also QTBUG-35704 )
</li>
<li> "This plugin does not support propagateSizeHints()"
</li>
</ul>
<h3><span class="mw-headline" id="sharedmemory:">sharedmemory:</span></h3>
<ul>
<li> Crashes: Program received signal SIGSYS, Bad system call. 0x3b23bbe4 in semget ()
</li>
</ul>
<h3><span class="mw-headline" id="openglwindow:">openglwindow:</span></h3>
<ul>
<li> Doesnt rotate after rotating to landingscape
</li>
</ul>
<h3><span class="mw-headline" id="http:">http:</span></h3>
<ul>
<li> Unable to save index.html, permission denied
</li>
</ul>
<h3><span class="mw-headline" id="googlesuggest:">googlesuggest:</span></h3>
<ul>
<li> full screen line edit, no place for suggestions
</li>
</ul>
<h3><span class="mw-headline" id="bearermonitor:">bearermonitor:</span></h3>
<ul>
<li> no configurations, probably missing plugin
</li>
</ul>
<h3><span class="mw-headline" id="network-chat:">network-chat:</span></h3>
<h3><span class="mw-headline" id="textures:">textures:</span></h3>
<h3><span class="mw-headline" id="hellowindow:">hellowindow:</span></h3>
<ul>
<li> only one out of 4 windows show up
</li>
<li> lots of "QIOSBackingStore needs to have the same size as its window"
</li>
</ul>
<h3><span class="mw-headline" id="paintedwindow:">paintedwindow:</span></h3>
<ul>
<li> "QOpenGLContext::swapBuffers() called with non-exposed window, behavior is undefined"
</li>
</ul>
<h3><span class="mw-headline" id="books:">books:</span></h3>
<ul>
<li> "This demo needs the SQLITE driver"
</li>
</ul>
<h3><span class="mw-headline" id="drilldown.2C_cachedtable.2C_relationaltablemodel.2C_sqlwidgetmapper.2C_masterdetail.2C_querymodel.2C_tablemodel:">drilldown, cachedtable, relationaltablemodel, sqlwidgetmapper, masterdetail, querymodel, tablemodel:</span></h3>
<ul>
<li> "QSqlDatabase: QSQLITE driver not loaded"
</li>
</ul>
<h3><span class="mw-headline" id="mandelbrot:">mandelbrot:</span></h3>
<ul>
<li> resizes on startup
</li>
</ul>
<h3><span class="mw-headline" id="knobs.2C_fingerpaint:">knobs, fingerpaint:</span></h3>
<ul>
<li> halts when using system gestures
</li>
</ul>
<h3><span class="mw-headline" id="states:">states:</span></h3>
<ul>
<li> layout way too big for screen, retina issue?
</li>
</ul>
<h3><span class="mw-headline" id="sub-attaq:">sub-attaq:</span></h3>
<ul>
<li> Crashes at startup due to QWidget synchronous resize logic
</li>
</ul>
<h3><span class="mw-headline" id="screenshot:">screenshot:</span></h3>
<ul>
<li> "QPixmap::scaled: Pixmap is a null pixmap"
</li>
</ul>
<h3><span class="mw-headline" id="systray:">systray:</span></h3>
<ul>
<li> no system tray detected (TODO: use notification center)
</li>
</ul>
<h3><span class="mw-headline" id="classwizard:">classwizard:</span></h3>
<ul>
<li> interaction between line edits not ideal, have to tap twice <i>something we have to look at</i>
</li>
</ul>
<h3><span class="mw-headline" id="draggabletext.2C_fridgemagnets.2C_puzzle:">draggabletext, fridgemagnets, puzzle:</span></h3>
<ul>
<li> Drag'n'drop not supported in Qt 5.2
</li>
</ul>
<h3><span class="mw-headline" id="lighting:">lighting:</span></h3>
<ul>
<li> shadow is clipped
</li>
</ul>
<h3><span class="mw-headline" id="fademessage:">fademessage:</span></h3>
<ul>
<li> missing fade button
</li>
</ul>
<h3><span class="mw-headline" id="dragdroprobot:">dragdroprobot:</span></h3>
<ul>
<li> Drag'n'drop not supported in 5.2
</li>
</ul>
<h3><span class="mw-headline" id="flowlayout:">flowlayout:</span></h3>
<ul>
<li> text not inside window and too big
</li>
<li> text does not move properly when window is moved
</li>
</ul>
<h3><span class="mw-headline" id="anchorlayout:">anchorlayout:</span></h3>
<ul>
<li> child graphics-view items completely busted
</li>
</ul>
<h3><span class="mw-headline" id="dockwidgets:">dockwidgets:</span></h3>
<ul>
<li> text becomes gray boxes when dragging container
</li>
</ul>
<h3><span class="mw-headline" id="mainwindow:">mainwindow:</span></h3>

<!-- 
NewPP limit report
CPU time usage: 0.064 seconds
Real time usage: 0.065 seconds
Preprocessor visited node count: 174/1000000
Preprocessor generated node count: 212/1000000
Post‐expand include size: 0/2097152 bytes
Template argument size: 0/2097152 bytes
Highest expansion depth: 2/40
Expensive parser function count: 0/100
-->

<!-- Saved in parser cache with key qtio_wiki:pcache:idhash:1502-0!*!*!!en!*!* and timestamp 20151105114500 and revision id 15497
 -->
</div>								<div class="printfooter">
				Retrieved from "<a href="indexd62a.html?title=Qt_for_iOS_known_issues&amp;oldid=15497">http://wiki.qt.io/index.php?title=Qt_for_iOS_known_issues&amp;oldid=15497</a>"				</div>
												<div id='catlinks' class='catlinks catlinks-allhidden'></div>												<div class="visualClear"></div>
							</div>
		</div>
		<div id="mw-navigation">
			<h2>Navigation menu</h2>
			<div id="mw-head">
				<div id="p-personal" role="navigation" class="" aria-labelledby="p-personal-label">
	<h3 id="p-personal-label">Personal tools</h3>
	<ul>
<li id="pt-anonuserpage"><a href="User_10.0.113.html" class="new" title="The user page for the IP address you are editing as [.]" accesskey=".">10.0.113.70</a></li><li id="pt-anontalk"><a href="User_talk_10.0.113.html" class="new" title="Discussion about edits from this IP address [n]" accesskey="n">Talk for this IP address</a></li><li id="pt-login"><a href="index7bf7.php?title=Special:QtLogin&amp;returnto=Qt+for+iOS+known+issues" title="You are encouraged to log in; however, it is not mandatory [o]" accesskey="o">Sign in</a></li>	</ul>
</div>
				<div id="left-navigation">
					<div id="p-namespaces" role="navigation" class="vectorTabs" aria-labelledby="p-namespaces-label">
	<h3 id="p-namespaces-label">Namespaces</h3>
	<ul>
					<li  id="ca-nstab-main" class="selected"><span><a href="Qt_for_iOS_known_issues.html"  title="View the content page [c]" accesskey="c">Page</a></span></li>
					<li  id="ca-talk" class="new"><span><a href="indexd4d2.php?title=Talk:Qt_for_iOS_known_issues&amp;action=edit&amp;redlink=1"  title="Discussion about the content page [t]" accesskey="t">Discussion</a></span></li>
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
					<li id="ca-view" class="selected"><span><a href="Qt_for_iOS_known_issues.html" >Read</a></span></li>
					<li id="ca-viewsource"><span><a href="index7d31.php?title=Qt_for_iOS_known_issues&amp;action=edit"  title="This page is protected.&#10;You can view its source [e]" accesskey="e">View source</a></span></li>
					<li id="ca-history" class="collapsible"><span><a href="index23ea.php?title=Qt_for_iOS_known_issues&amp;action=history"  title="Past revisions of this page [h]" accesskey="h">View history</a></span></li>
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
					<div id="p-logo" role="banner"><a style="background-image: url(skins/common/images/wiki.png);" href="Main_Page.html"  title="Visit the main page"></a></div>
				<div class="portal" role="navigation" id='p-navigation' aria-labelledby='p-navigation-label'>
	<h3 id='p-navigation-label'>Navigation</h3>
	<div class="body">
		<ul>
			<li id="n-mainpage-description"><a href="Main_Page.html" title="Visit the main page [z]" accesskey="z">Main page</a></li>
			<li id="n-recentchanges"><a href="Special_RecentChanges.html" title="A list of recent changes in the wiki [r]" accesskey="r">Recent changes</a></li>
			<li id="n-randompage"><a href="How_to_create_columns_in_a_QML_ListView.html" title="Load a random page [x]" accesskey="x">Random page</a></li>
			<li id="n-help"><a href="https://www.mediawiki.org/wiki/Special:MyLanguage/Help:Contents" title="The place to find out">Help</a></li>
		</ul>
	</div>
</div>
<div class="portal" role="navigation" id='p-tb' aria-labelledby='p-tb-label'>
	<h3 id='p-tb-label'>Tools</h3>
	<div class="body">
		<ul>
			<li id="t-whatlinkshere"><a href="Special_WhatLinksHere/Qt_for_iOS_known_issues" title="A list of all wiki pages that link here [j]" accesskey="j">What links here</a></li>
			<li id="t-recentchangeslinked"><a href="Special_RecentChangesLinked/Qt_for_iOS_known_issues" title="Recent changes in pages linked from this page [k]" accesskey="k">Related changes</a></li>
			<li id="t-specialpages"><a href="Special_SpecialPages.html" title="A list of all special pages [q]" accesskey="q">Special pages</a></li>
			<li id="t-permalink"><a href="indexd62a.html?title=Qt_for_iOS_known_issues&amp;oldid=15497" title="Permanent link to this revision of the page">Permanent link</a></li>
			<li id="t-info"><a href="index49f3.php?title=Qt_for_iOS_known_issues&amp;action=info">Page information</a></li>
		</ul>
	</div>
</div>
			</div>
		</div>
		<div id="footer" role="contentinfo">
							<ul id="footer-info">
											<li id="footer-info-lastmod"> This page was last modified on 7 April 2015, at 12:22.</li>
											<li id="footer-info-viewcount">This page has been accessed 1,709 times.</li>
									</ul>
							<ul id="footer-places">
											<li id="footer-places-terms"><a href='https://developer.qtcloudservices.com/legal/terms'>Käyttöehdot</a></li>
									</ul>
										<ul id="footer-icons" class="noprint">
					<li id="footer-poweredbyico">
						<a href="http://www.mediawiki.org/"><img src="skins/common/images/poweredby_mediawiki_88x31.png" alt="Powered by MediaWiki" width="88" height="31" /></a>
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
<script src="load2f85.php?debug=false&amp;lang=en&amp;modules=site&amp;only=scripts&amp;printable=1&amp;skin=vector&amp;*"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','http://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-54043535-2', 'auto');
  ga('send', 'pageview');

</script>
<script>if(window.mw){
mw.config.set({"wgBackendResponseTime":362});
}</script>
	</body>

<!-- Mirrored from wiki.qt.io/index.php?title=Qt_for_iOS_known_issues&printable=yes by HTTrack Website Copier/3.x [XR&CO'2013], Thu, 05 Nov 2015 13:02:18 GMT -->
</html>
