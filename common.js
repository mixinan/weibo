/*function $(id){
	return document.getElementById(id);
}*/
			
function createXhr(){
	var xhr=null;
	if(window.XMLHttpRequest){
		xhr=new XMLHttpRequest(); //��׼����
	}else{
		//IE8���µĴ�����ʽ
		xhr=new ActiveXObject("Microsoft.XMLHttp");
	}
	return xhr;
}


function isnull(val) {
	var str = val.replace(/(^\s*)|(\s*$)/g, '');//ȥ���ո�;

	if (str == '' || str == undefined || str == null) {
		return true;
	} else {
		return false;
	}
}