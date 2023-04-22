function showenter()
{
    alert("welcome are you!");
}

function showleave()
{
    alert("welcome next are you!");
}
 
// windows.onload = showenter();
windows.onbeforeunload = showleave;
windows.closewindows = showleave;
function showmain()
{
    if (4.5 == 5) alert("4.5=5");
    else  alert(" 4.5 不等到5 ") ;
}

function disptime()
{
    
    var now = new Date();
    document.write("今日日期为："+now.getFullYear() +"月："+ now.getMonth()+"日"+now.getDate;
    
}

windows.onload = disptime;