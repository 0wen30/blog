document.getElementById('reg').addEventListener('click',(e)=>{	
	document.getElementById('form_log').style.display = 'none';
	document.getElementById('form_reg').style.display = 'flex';
});
document.getElementById('log').addEventListener('click',(e)=>{
	document.getElementById('form_log').style.display = 'flex';
	document.getElementById('form_reg').style.display = 'none';
});