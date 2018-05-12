// Version constants
var bName = navigator.appName;
var bVer = parseInt(navigator.appVersion);
var NS6 = (bName == "Netscape" && bVer >= 5);
var NS4 = (bName == "Netscape" && bVer >= 4 && bVer < 5);
var IE4 = (bName == "Microsoft Internet Explorer" && bVer >= 4);
window.onerror = null;
var menuActive = 0;
var menuOn = 0;
var onLayer;
var timeOn = null;

var layerStyleRef;
var layerRef;
var styleSwitch;
var layerVis;
var layerHid;

// Set Version Constants
if (NS4 || IE4 || NS6)
{
	if (navigator.appName == "Netscape" && !document.getElementById)
	{
		layerStyleRef = "layer.";
		layerRef = "document.layers";
		styleSwitch = "";
		layerVis = "show";
		layerHid = "hide";
	}
	else if (document.getElementById)
	{
		layerStyleRef = "layer.style.";
		layerRef = "document.getElementById";
		styleSwitch = ".style";
		layerVis = "visible";
		layerHid = "hidden";
	}
	else
	{
		layerStyleRef = "layer.style.";
		layerRef = "document.all";
		styleSwitch = ".style";
		layerVis = "visible";
		layerHid = "hidden";
	}
}


// ========================================= Setup global constants and variables ========================================
// Setup browser version check
var bIS_NETSCAPE = (navigator.appName == "Netscape") ? true : false;
var bIS_IE		 = (navigator.appName == "Microsoft Internet Explorer") ? true : false;

var bWINDOWOPEN = false;				// Global flag to alert if image viewing popup is open
var oWindow = new Object();				// Create a globally accessible window object reference

// =================================== New Function for popup windows - for images =======================================
// This function opens a new window to display images
// iWidth				is the width of the window
// iHeight				is the height of the window
// strWindowTitle		is the title of the Window to be appended to school name
// strTitle				is the title to display in window
// strImageURL			is the URL of the image to load.
function createWindow(iWidth, iHeight, strWindowTitle, strTitle, strImageURL)
{
	// First check if popup is previously open...
	if (bWINDOWOPEN)
	{
		// Popup window is already open
		if (oWindow)
		{
			// Close window
			oWindow.close();
		}

		// Reset flag
		bWINDOWOPEN = false;
	}

	oWindow = window.open("","image","channelmode=no,directories=no,fullscreen=no,toolbar=no,scrollbars=no,location=no,status=no,menubar=no,top=0,left=0,width=" + iWidth + ",height=" + iHeight);

	// Begin building window content
	var strDocument = "<html>";
	strDocument += "<head>";
	strDocument += "<title>" + strWindowTitle + "</title>";
	strDocument += "<link rel='stylesheet' href='http://www.shouyuliang.com/css/template.css' type='text/css'>";
	strDocument += "</head><body>";
	strDocument += "<div id='imagePageTitle'>";
		strDocument += "<div><a href='javascript: window.close();'><b>[Close]</b></a></div>";
		strDocument += strTitle;
	strDocument += "</div>";
		strDocument += "<div id='imagePageBody'><img src='" + strImageURL + "' alt='" + strWindowTitle + "'></div>";
	strDocument += "</body></html>";

	// Write content in window
	oWindow.document.write(strDocument);

	// Activate window flag
	bWINDOWOPEN = true;
}

// ======================================= Function for popup windows =======================================
// THE createWindow FUNCTION REPLACES THIS ONE FOR IMAGES.
// Still used for panoramics
// This function opens a new window to display images
// strURL		is the URL of the webpage to load within the pop-up
// iWidth		is the width of the window
// iHeight		is the height of the window
function openwinsize(strURL, iWidth, iHeight)
{
	window.open(strURL,"image","toolbar=no,resize=yes,scrollbars=yes,location=no,directories=no,status=no,menubar=no,width=" + iWidth + ",height=" + iHeight);
}