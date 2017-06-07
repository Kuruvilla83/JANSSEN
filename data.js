/*
   Deluxe Menu Data File
   Created by Deluxe Tuner v3.5
   http://deluxe-menu.com
*/


// -- Deluxe Tuner Style Names
var itemStylesNames=["Top Item",];
var menuStylesNames=["Top Menu",];

// -- End of Deluxe Tuner Style Names

//--- Common
var isHorizontal=1;
var smColumns=1;
var smOrientation=0;
var dmRTL=0;
var pressedItem=-2;
var itemCursor="default";
var itemTarget="_self";
var statusString="link";
var blankImage="data.files/blank.gif";
var pathPrefix_img="";
var pathPrefix_link="";

//--- Dimensions
var menuWidth="100%";
var menuHeight="";
var smWidth="";
var smHeight="";

//--- Positioning
var absolutePos=0;
var posX="10px";
var posY="10px";
var topDX=0;
var topDY=0;
var DX=3;
var DY=0;
var subMenuAlign="left";
var subMenuVAlign="top";

//--- Font
var fontStyle=["normal 11px Trebuchet MS, Tahoma","normal 11px Trebuchet MS, Tahoma"];
var fontColor=["#000000","#FFFFFF"];
var fontDecoration=["none","none"];
var fontColorDisabled="#DAEFFA";

//--- Appearance
var menuBackColor="#A7CFFE";
var menuBackImage="";
var menuBackRepeat="repeat";
var menuBorderColor="#29449D";
var menuBorderWidth=1;
var menuBorderStyle="solid";

//--- Item Appearance
var itemBackColor=["#A7CFFE","#68A8F5"];
var itemBackImage=["",""];
var beforeItemImage=["",""];
var afterItemImage=["",""];
var beforeItemImageW="";
var afterItemImageW="";
var beforeItemImageH="";
var afterItemImageH="";
var itemBorderWidth=1;
var itemBorderColor=["#89C6E7","#15546C  #FFFFFF"];
var itemBorderStyle=["solid","solid"];
var itemSpacing=2;
var itemPadding="2px 5px 2px 10px";
var itemAlignTop="left";
var itemAlign="left";

//--- Icons
var iconTopWidth=16;
var iconTopHeight=16;
var iconWidth=16;
var iconHeight=16;
var arrowWidth=7;
var arrowHeight=7;
var arrowImageMain=["data.files/arrv_white.gif",""];
var arrowWidthSub=0;
var arrowHeightSub=0;
var arrowImageSub=["data.files/arr_black.gif","data.files/arr_white.gif"];

//--- Separators
var separatorImage="";
var separatorWidth="100%";
var separatorHeight="3px";
var separatorAlignment="left";
var separatorVImage="";
var separatorVWidth="3px";
var separatorVHeight="100%";
var separatorPadding="0px";

//--- Floatable Menu
var floatable=0;
var floatIterations=6;
var floatableX=1;
var floatableY=1;
var floatableDX=15;
var floatableDY=15;

//--- Movable Menu
var movable=0;
var moveWidth=12;
var moveHeight=20;
var moveColor="#DECA9A";
var moveImage="";
var moveCursor="move";
var smMovable=0;
var closeBtnW=15;
var closeBtnH=15;
var closeBtn="";

//--- Transitional Effects & Filters
var transparency="100";
var transition=39;
var transOptions="maxSquare=5";
var transDuration=350;
var transDuration2=200;
var shadowLen=2;
var shadowColor="#B1B1B1";
var shadowTop=0;

//--- CSS Support (CSS-based Menu)
var cssStyle=0;
var cssSubmenu="";
var cssItem=["",""];
var cssItemText=["",""];

//--- Advanced
var dmObjectsCheck=0;
var saveNavigationPath=1;
var showByClick=0;
var noWrap=1;
var smShowPause=200;
var smHidePause=-1;
var smSmartScroll=1;
var topSmartScroll=0;
var smHideOnClick=1;
var dm_writeAll=1;
var useIFRAME=0;
var dmSearch=0;

//--- AJAX-like Technology
var dmAJAX=0;
var dmAJAXCount=0;
var ajaxReload=0;

//--- Dynamic Menu
var dynamic=0;

//--- Popup Menu
var popupMode=0;

//--- Keystrokes Support
var keystrokes=0;
var dm_focus=1;
var dm_actKey=113;

//--- Sound
var onOverSnd="";
var onClickSnd="";

var itemStyles = [
    ["itemBackImage=data.files/style04_n_back.gif,data.files/style04_s_back.gif","beforeItemImage=data.files/style04_n_left.gif,data.files/style04_s_left.gif","afterItemImage=data.files/style04_n_right.gif,data.files/style04_s_right.gif","itemBorderWidth=0","fontStyle='bold 12px Arial','bold 12px Arial'","fontColor=#000000,#000000"],
];
var menuStyles = [
    ["menuBackColor=transparent","menuBorderWidth=0","itemSpacing=0","itemPadding=0px 5px 0px 5px"],
];

var menuItems = [

    ["Home","main_screen.php", "", "", "", "", "0", "0", "", "", "", ],
    ["Trackers","", "", "", "Trackers", "", "0", "", "", "", "", ],
        ["|Call Back Tracker","calbck_schd.php", "", "", "", "", "", "", "", "", "", ],
        ["|Huddle Tracker","huddle.php", "", "", "", "", "", "", "", "", "", ],
        ["|Process Update","process_updater.php", "", "", "", "", "", "", "", "", "", ],
		["|Outage Tracker","outage_tracker.php", "", "", "", "", "", "", "", "", "", ],
		["|Late Login Form","latelog_form.php", "", "", "", "", "", "", "", "", "", ],
		["|Attendance","attdnce_queue.php", "", "", "", "", "", "", "", "", "", ],
      /*   ["|Outage Tracker","", "outage_tracker.php", "", "", "", "", "", "", "", "", ],
           ["||Windows OS","", "", "", "", "", "", "", "", "", "", ],
            ["||Internet Explorer","", "", "", "", "", "", "", "", "", "", ],
            ["||Firefox","", "", "", "", "", "", "", "", "", "", ],
            ["||Mozilla","", "", "", "", "", "", "", "", "", "", ],
            ["||Netscape","", "", "", "", "", "", "", "", "", "", ],
            ["||Opera","", "", "", "", "", "", "", "", "", "", ],
            ["||MAC OS","", "", "", "", "", "", "", "", "", "", ],
            ["||Firefox","", "", "", "", "", "", "", "", "", "", ],
            ["||Safari","", "", "", "", "", "", "", "", "", "", ],
            ["||Internet Explorer","", "", "", "", "", "", "", "", "", "", ],
            ["||Unix/Linux OS","", "", "", "", "", "", "", "", "", "", ],
            ["||Firefox","", "", "", "", "", "", "", "", "", "", ],
            ["||Konqueror","", "", "", "", "", "", "", "", "", "", ],*/
    ["Team Operation","", "", "", "Team Operation", "", "0", "", "", "", "", ],
        ["|Sample 1","testlink.html", "", "", "", "", "", "", "", "", "", ],
        ["|Sample 3","testlink.html", "", "", "", "", "", "", "", "", "", ],
        ["|Sample 4","testlink.html", "", "", "", "", "", "", "", "", "", ],
        ["|Sample 5","testlink.html", "", "", "", "", "", "", "", "", "", ],
        ["|Sample 6","testlink.html", "", "", "", "", "", "", "", "", "", ],
        ["|Sample 7","testlink.html", "", "", "", "", "", "", "", "", "", ],
        ["|Sample 8","testlink.html", "", "", "", "", "", "", "", "", "", ],
        ["|Sample 9","testlink.html", "", "", "", "", "", "", "", "", "", ],
    ["Reports","", "", "", "Reports", "_blank", "0", "", "", "", "", ],
    ["Administration","", "", "", "Administration", "", "0", "", "", "", "", ],
		["|Upload Attendance Data","shiftfile_sel.php", "", "", "", "", "", "", "", "", "", ],
	["Logout","logout.php", "", "", "", "", "0", "", "", "", "", ],	
];

dm_init();