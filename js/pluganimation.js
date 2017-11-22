var c = document.getElementById("PlugCanvas");
var ctx = c.getContext("2d");

var imgPlug = new Image();
imgPlug.onload = function(){
        ctx.drawImage(imgPlug, 0,0);
    };
imgPlug.src = "images/plug.png";

var imgOutlet = new Image();
imgOutlet.onload = function(){
        ctx.drawImage(imgOutlet, 500,0);
    };
imgOutlet.src = "images/outlet.png";

var isMouseDown = false;
c.onmousedown = mouseDown;
c.onmouseup = mouseUp;
c.onmousemove = mouseMove;
c.onmouseout = mouseOut;

function mouseDown(event)
{   
    isMouseDown = true;
}

function mouseUp(event)
{    
    isMouseDown = false;
}
function mouseMove(event)
{
    if(isMouseDown)
    {
        ctx.clearRect(0, 0, c.width, c.height);
        var canvasRect = c.getBoundingClientRect();
        var xval = event.clientX - canvasRect.left;
        var yval = event.clientY - canvasRect.top;
        ctx.drawImage(imgPlug, xval,0);
        ctx.drawImage(imgOutlet, 500,0);
        console.log('xval:' + xval + ' yval:' + yval);        
    }
}

function mouseOut(event)
{
    isMouseDown = false;
}