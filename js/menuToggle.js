
function toggleMenu() {
	var y = document.getElementById('primaryNav');
if(document.getElementById('primaryNav').className==='closed') {
    	y.className='open';
    } else {
    	y.className='closed';
    }
}
var x = document.getElementById('hamburgerBtn');
x.onclick = toggleMenu; 