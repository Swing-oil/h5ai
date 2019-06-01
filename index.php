<?php
echo hello;
?php>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">















<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>温中双语网络学习空间</title>
<link rel="stylesheet" type="text/css"
	href="https://static2.kouyu100.com/css_v3/customer/courseRead.css" />

<link rel="stylesheet" type="text/css"
	href="https://static2.kouyu100.com/css2/footer.css" />

<script type="text/javascript"
	src="https://static2.kouyu100.com/js/jquery-1.3.2.min.js"></script>
<script type="text/javascript">var staticServer="https://static2.kouyu100.com/";var headServer="http://head.kouyu100.com/";var flashServer="http://047.kouyu100.com:80/";</script>
<script type="text/javascript" src="https://static2.kouyu100.com/js/head/head2.js"></script>
<script type="text/javascript" src="https://static2.kouyu100.com/js/flash.js"></script>
<script type="text/javascript"
	src="https://static2.kouyu100.com/js/coursetraining/training5.js"></script>
<script type="text/javascript" src="https://static2.kouyu100.com/js/AC_OETags.js"></script>
<script type="text/javascript"
	src="https://static2.kouyu100.com/js/jquery.tools.min.js"></script>
<script type="text/javascript"
	src="https://static2.kouyu100.com/iepngfix/iepngfix_tilebg.js"></script>
<script type="text/javascript" src="https://static2.kouyu100.com/js/jquery.cookie.js"></script>
<script type="text/javascript" src="https://static2.kouyu100.com/js/chatuMove.js"></script>
<script type="text/javascript">var img_url="https://static2.kouyu100.com/";</script>
<script type="text/javascript" src="https://static2.kouyu100.com/js/topMenu/changePassword.js"></script>
<script type="text/javascript" src="https://static2.kouyu100.com/js/coursetraining/word.js"></script>


	<script type="text/javascript"
		src="https://static2.kouyu100.com/js/head/background.js"></script>

<script language="JavaScript" type="text/javascript">

document.onkeydown =keydown;
var curUserId = "171923";
var logflag = "";
var pw = "AD0A4CFBAA2569D2BD622AD2411C8017";
var uType = "1";
var uPTel= "13867680403";
var userId = "171923";
var domainType = "1";
var dId = "wzsyczx";
var buyType = "1";
var customType = "null";
var hwid=null;
var hwmessage = null;
var hwcreatetime =  null;
var hwendtime = null;
var massage=null;
var mouseX=0;
var mouseY=0;
var hwCount=0;//作业总数
var hwciCount = 0;//完成作业总数
var domain="wzsyczx";

var hType = null;//作业类型
var orgId = null;
var orgType = null;



hwid = "90845";
hwType = "null";
orgId = "3522";
orgType = "1";

hwmessage = "请认真完成跟读。&nbsp;<a style='text-decoration:underline;' href='checkHomeWork.action?orgId=3522&orgType=1&bookId=903&lessonId=36740'>新目标英语八年级下(new)-U9SA3a Have you ever been to a museum</a>&nbsp;<a style='text-decoration:underline;' href='checkHomeWork.action?orgId=3522&orgType=1&bookId=903&lessonId=36742'>新目标英语八年级下(new)-U9SB2b Have you ever been to a museum_1</a>&nbsp;<a style='text-decoration:underline;' href='checkHomeWork.action?orgId=3522&orgType=1&bookId=903&lessonId=36743'>新目标英语八年级下(new)-U9SB2b Have you ever been to a museum_2</a>&nbsp;<a style='text-decoration:underline;' href='checkHomeWork.action?orgId=3522&orgType=1&bookId=903&lessonId=36958'>新目标英语八年级下(new)-U9 Words_1</a>&nbsp;<a style='text-decoration:underline;' href='checkHomeWork.action?orgId=3522&orgType=1&bookId=903&lessonId=36959'>新目标英语八年级下(new)-U9 Words_2</a>&nbsp;";
hwcreatetime = "06-01";
hwendtime = "06-02";

massage="36740,"
if (massage==""){
	massage="0";
}



	hType = "1";
	

	var isBuckle = 0;
	var buckleWords = "";
	var recite = "";
	if (GetQueryString("guideLessonId")!=null&&(GetQueryString("hwid")!=null||GetQueryString("hwid1")!=null)){

		$.ajax({
			type: "POST",	
			dataType:"json",
			url: "findHomeWorkInfoBuckleWords.action",
			data:{
				aaa:Math.random(),
				lessonId:GetQueryString("guideLessonId"),
				homeWorkId:hwid
			},
			cache: false,
			async:false,
			success: function(data){
				if(data.result ==1){
					buckleWords = data.words;
					isBuckle = data.isBuckle;
				}else{
					isBuckle = 0;
				}
			}
		}) 
	}
$(function(){
	
	/* getBrowserInfo(); */
	$(document).mousemove(function (e) {
		 mouseX=parseInt(e.pageX);
		 mouseY=parseInt(e.pageY);
		 })
	if (GetQueryString("guideLessonId")!=null&&(GetQueryString("hwid")!=null||GetQueryString("hwid1")!=null)){
		
		$("#cover1").css("display","block");
		$("#cover").css("margin-left","10px");
		$("#showhomeworknext").css("display" ,"none");
		$("#showhomeworknext2").css("display" ,"none");
		$(".linfo").css("width","260px");
		$("#bookname1").css("width","260px");
		$("#lessonname1").css("width","260px"); 
		$("#cover1html").css("display","none");
		//$("#showhomeworkcreatetime").text(hwcreatetime);
		$("#showhomeworkendtime").text(hwendtime);		
		$("#cover2").css("display","block");
		/* 同步 */
		$.ajaxSettings.async = false;
		/* 获取完成作业总数 */
		var url='queryPersonalHomeWorkCompleteInfo.action?t='+Math.random()+"&homeWorkId="+hwid;
		$.getJSON(url,function(jsonData){
			var count = jsonData.personalHomeWorkCompleteInfoCount;
			hwciCount = count;
		}); 
		
		//假期作业
		if(hType == 16){
			var sbin = "";
			var s=hwmessage.split("&nbsp;");
			var LessonIds=massage.split(",");
			var lessonId = "";
			var lessonName="";
			var html="";
			var title="";
			s[0]="要求："+s[0];
			title=s[0];
		 	var alltitle=title.length;
		 	var nochtitle=title.replace(/[\u4e00-\u9fa5]+/g, "").length;
			var alltitle2=(alltitle-nochtitle)*2+nochtitle;
			
			if(alltitle2<=41){
				html+="<div id=\"cover1html111\" style=\"height:20px;width:340px;\"><span id=\"cover1htmspanl111\" style=\"font-family: 宋体; line-height: 20px; font-size: 14px;font-weight: bold\" title=\""+title+"\">"+s[0]+"</span></div><div id=\"cover1htmlspan111\" style=\"margin-top: 5px;\">";
			}else{
				var se=s[0].substring(0,41)+"...";
				html+="<div id=\"cover1html111\" style=\"height:40px;width:340px; word-break:break-all;\"><span id=\"cover1htmlspan111\" style=\"font-family: 宋体; line-height: 20px; font-size: 14px;font-weight: bold\" title=\""+title+"\">"+se+"</span></div><div id=\"cover1htmlspan111\"  style=\"margin-top: 5px;\">";
			}
			var arrays=new Array();
			
			var bin=s[1].indexOf("bookId=")+7;
			var end=s[1].lastIndexOf("'>");
			var bookId=s[1].substring(bin,end);
			
			
			for (var ins = 1; ins < s.length-1; ins++) {
				var bin=s[ins].indexOf(">")+1;
				var end=s[ins].lastIndexOf("</");
				var text=s[ins].substring(bin,end);
					if (text.indexOf("-")!=-1){
						$("#bookname1").text(text.split("-")[0]);
						$("#bookname1").attr("title", text.split("-")[0]);
						$("#lessonname1").text(text.substring(text.indexOf("-")+1));
						$("#lessonname1").attr("title", text.substring(text.indexOf("-")+1));
					}else{
						$("#bookname1").text(text.split("-")[0]);
						$("#bookname1").attr("title", text);
					}						
		    }
			
			//查询暑假作业书的所有课
			 $.ajax({
				dataType: "json",
				type: "POST",
				url:"findLessonByBookId.action",
				data:"bId="+bookId,
				success:function(data){
					hwCount = data.length;
					for(var i=0;i<data.length;i++){						
						for (var ind = 0; ind < LessonIds.length; ind++) {
						    sbin = "<a style=\"text-decoration:underline;\" href=\"courseValidate.action?hwid="+hwid+"&guideType=aa2&orgId="+orgId+"&orgType="+orgType+"&guideBookId="+bookId+"&guideLessonId="+data[i].id+"\">";

							if(data[i].id == LessonIds[ind]){
								if (data[i].cname.length<45){
									des="<div id=\"cover1htmlspan111\"  style=\"height:14px;width:340px; word-break:break-all;\">"+sbin+"<span id=\"cover1htmlspan111\"  title=\""+data[i].cname+"\" style=\"font-family: 宋体;line-height: 20px; font-size: 14px;color:#8f8f8f\">"+data[i].cname+"</span></a></div><div id=\"cover1htmlspan111\"  style=\"height:14px;width:340px;\"></div>";
								}else{
									des="<div id=\"cover1htmlspan111\"  style=\"height:44px;width:340px; word-break:break-all;\">"+sbin+"<span id=\"cover1htmlspan111\"  title=\""+data[i].cname+"\" style=\"font-family: 宋体;line-height: 18px; font-size: 14px;color:#8f8f8f\">"+data[i].cname+"</span></a></div>";
								}
								break;
							}else{
								if (data[i].cname.length<45){
									des="<div id=\"cover1htmlspan111\"  style=\"height:14px;width:340px; word-break:break-all;\">"+sbin+"<span id=\"cover1htmlspan111\"  title=\""+data[i].cname+"\" style=\"font-family: 宋体;line-height: 20px; font-size: 14px;color:#000000\">"+data[i].cname+"</span></a></div><div id=\"cover1htmlspan111\"  style=\"height:14px;width:340px;\"></div>";
								}else{
									des="<div id=\"cover1htmlspan111\"  style=\"height:44px;width:340px; word-break:break-all;\">"+sbin+"<span id=\"cover1htmlspan111\"  title=\""+data[i].cname+"\" style=\"font-family: 宋体;line-height: 18px; font-size: 14px;color:#000000\">"+data[i].cname+"</span></a></div>";
								}
							}
						}						
						html+=des;
						
						if (des.indexOf("#8f8f8f")!=-1){
							arrays.push(data[i].id+"####");
						}else{
							arrays.push(data[i].id+"####"+sbin.substring(sbin.indexOf("href=\"")+6,sbin.indexOf("\">")));
						}
					}
					
					//下一练习
					if(arrays.length>1){
						var indt=0;
							for (var ind = 0; ind < arrays.length; ind++) {
								var se=arrays[ind].split("####");
								if (se[0]==GetQueryString("guideLessonId")){
									indt=ind;
								}
							}
						for (var ind2 = 0; ind2 < arrays.length; ind2++) {
							var se2=arrays[(indt+1+ind2)%arrays.length].split("####");
							if (se2[1]!=""){
								$("#showhomeworknext").attr("href",se2[1]);
								$("#showhomeworknext").css("display","block");
								$("#showhomeworknext2").attr("href",se2[1]);
								$("#showhomeworknext2").css("display","block");
								break;
							}else{
								$("#showhomeworknext").css("display" ,"none");
								$("#showhomeworknext2").css("display" ,"none");
							}				
						}
					}
					
					//完成进度
					var hwciStr = hwciCount+"/"+hwCount;
					$("#showhomeworkcreatetime").text(hwciStr);
					var isCssNone = $("#showhomeworknext").css("display");
					if (isCssNone == "none") {
						$("#showhomeworkcreatetime2").text(hwciStr);
					} else {
						$("#showhomeworkcreatetime2").text(hwciStr+" ,");
					}
					
					//课展示
					$("#cover1htmlmoddiv").html(html+"</div>");
					$("#cover1html").css("display","none");
				}
			});
			
		}else{
			var s=hwmessage.split("&nbsp;");
			var LessonIds=massage.split(",");
			var html="";
			var title="";
			s[0]="要求："+s[0];
			title=s[0];
		 	var alltitle=title.length;
		 	var nochtitle=title.replace(/[\u4e00-\u9fa5]+/g, "").length;
			var alltitle2=(alltitle-nochtitle)*2+nochtitle;
			/* if(alltitle2<=41){
				html+="<div id=\"cover1html111\" style=\"height:20px;width:340px;\"><span id=\"cover1htmspanl111\" style=\"font-family: 宋体; line-height: 20px; font-size: 14px;font-weight: bold\" title=\""+title+"\">"+s[0]+"</span></div><div id=\"cover1htmlspan111\" style=\"margin-top: 5px;\">";
			}else if (alltitle2>41&&s[0].length<82){
				html+="<div id=\"cover1html111\" style=\"height:40px;width:340px; word-break:break-all;\"><span id=\"cover1htmlspan111\" style=\"font-family: 宋体;line-height: 20px; font-size: 14px;font-weight: bold\" title=\""+title+"\">"+s[0]+"</span></div><div id=\"cover1htmlspan111\" style=\"margin-top: 5px;\">";
			}else if(alltitle2>=82){
				var se=s[0].substring(0,43)+"...";
				html+="<div id=\"cover1html111\" style=\"height:40px;width:340px; word-break:break-all;\"><span id=\"cover1htmlspan111\" style=\"font-family: 宋体; line-height: 20px; font-size: 14px;font-weight: bold\" title=\""+title+"\">"+se+"</span></div><div id=\"cover1htmlspan111\"  style=\"margin-top: 5px;\">";
			} */
			if(alltitle2<=41){
				html+="<div id=\"cover1html111\" style=\"height:20px;width:340px;\"><span id=\"cover1htmspanl111\" style=\"font-family: 宋体; line-height: 20px; font-size: 14px;font-weight: bold\" title=\""+title+"\">"+s[0]+"</span></div><div id=\"cover1htmlspan111\" style=\"margin-top: 5px;\">";
			}else{
				var se=s[0].substring(0,41)+"...";
				html+="<div id=\"cover1html111\" style=\"height:40px;width:340px; word-break:break-all;\"><span id=\"cover1htmlspan111\" style=\"font-family: 宋体; line-height: 20px; font-size: 14px;font-weight: bold\" title=\""+title+"\">"+se+"</span></div><div id=\"cover1htmlspan111\"  style=\"margin-top: 5px;\">";
			}
			var arrays=new Array();
			
			for (var ins = 1; ins < s.length-1; ins++) {
				hwCount=ins;
			s[ins] = s[ins].replace("checkHomeWork.action?","courseValidate.action?hwid="+hwid+"&guideType=aa2&")
			s[ins] = s[ins].replace("bookId","guideBookId")
			s[ins] = s[ins].replace("lessonId","guideLessonId");
			var bin=s[ins].indexOf(">")+1;
			var end=s[ins].lastIndexOf("</");
			var text=s[ins].substring(bin,end);
			var id=s[ins].substring(s[ins].indexOf("guideLessonId=")+14,s[ins].indexOf("'>"));
			if (id==GetQueryString("guideLessonId")){
				if (text.indexOf("-")!=-1){
					$("#bookname1").text(text.split("-")[0]);
					$("#bookname1").attr("title", text.split("-")[0]);
					$("#lessonname1").text(text.substring(text.indexOf("-")+1));
					$("#lessonname1").attr("title", text.substring(text.indexOf("-")+1));
				}else{
					$("#bookname1").text(text.split("-")[0]);
					$("#bookname1").attr("title", text);
					$("#lessonname1").text(text.split("-")[0]);
					$("#lessonname1").attr("title", text);
				}
			}
			
			
			
			var text=s[ins].substring(bin,end);
			var sbin=s[ins].substring(0,bin);
			var send=s[ins].substring(end);
			var guideLessonId=parseInt(sbin.substring(sbin.indexOf("guideLessonId=")).replace("guideLessonId=",""));
			var des="";
			 	var alltext=text.length;
			 	var nochtext=text.replace(/[\u4e00-\u9fa5]+/g, "").length;
				var alltext2=(alltext-nochtext)*2+nochtext;
					for (var ind = 0; ind < LessonIds.length; ind++) {
						if(guideLessonId==LessonIds[ind]){
							if (alltext2<45){
								des="<div id=\"cover1htmlspan111\"  style=\"height:14px;width:340px; word-break:break-all;\">"+sbin+"<span id=\"cover1htmlspan111\"  title=\""+text+"\" style=\"font-family: 宋体;line-height: 20px; font-size: 14px;color:#8f8f8f\">"+text+"</span>"+send+"</div><div id=\"cover1htmlspan111\"  style=\"height:14px;width:340px;\"></div>";
							}else{
								des="<div id=\"cover1htmlspan111\"  style=\"height:44px;width:340px; word-break:break-all;\">"+sbin+"<span id=\"cover1htmlspan111\"  title=\""+text+"\" style=\"font-family: 宋体;line-height: 18px; font-size: 14px;color:#8f8f8f\">"+text+"</span>"+send+"</div>";
							}
							break;
						}else{
							if (alltext2<45){
								des="<div id=\"cover1htmlspan111\"  style=\"height:14px;width:340px; word-break:break-all;\">"+sbin+"<span id=\"cover1htmlspan111\"  title=\""+text+"\" style=\"font-family: 宋体;line-height: 20px; font-size: 14px;color:#000000\">"+text+"</span>"+send+"</div><div id=\"cover1htmlspan111\"  style=\"height:14px;width:340px;\"></div>";
							}else{
								des="<div id=\"cover1htmlspan111\"  style=\"height:44px;width:340px; word-break:break-all;\">"+sbin+"<span id=\"cover1htmlspan111\"  title=\""+text+"\" style=\"font-family: 宋体;line-height: 18px; font-size: 14px;color:#000000\">"+text+"</span>"+send+"</div>";
							}
						}
					}
					html+=des;
				if (des.indexOf("#8f8f8f")!=-1){
					arrays.push(guideLessonId+"####");
				}else{
					arrays.push(guideLessonId+"####"+sbin.substring(sbin.indexOf("href='")+6,sbin.indexOf("'>")));
				}
				
			}
				
			if(arrays.length>1){
				var indt=0;
					for (var ind = 0; ind < arrays.length; ind++) {
						var se=arrays[ind].split("####");
						if (se[0]==GetQueryString("guideLessonId")){
							indt=ind;
						}
					}
				for (var ind2 = 0; ind2 < arrays.length; ind2++) {
					var se2=arrays[(indt+1+ind2)%arrays.length].split("####");
					if (se2[1]!=""){
						$("#showhomeworknext").attr("href",se2[1]);
						$("#showhomeworknext").css("display","block");
						$("#showhomeworknext2").attr("href",se2[1]);
						$("#showhomeworknext2").css("display","block");
						break;
					}else{
						$("#showhomeworknext").css("display" ,"none");
						$("#showhomeworknext2").css("display" ,"none");
					}				
				}
			}
			
			var hwciStr = hwciCount+"/"+hwCount;
			$("#showhomeworkcreatetime").text(hwciStr);
			var isCssNone = $("#showhomeworknext").css("display");
			if (isCssNone == "none") {
				$("#showhomeworkcreatetime2").text(hwciStr);
			} else {
				$("#showhomeworkcreatetime2").text(hwciStr+" ,");
			}
			
			$("#cover1htmlmoddiv").html(html+"</div>");
			$("#cover1html").css("display","none");
	  }
	
		$("#showhomeworkimg").mouseover(function(){
			$("#cover1html").css("display","block");
			if ((document.getElementById("cover1htmlmoddiv").offsetHeight)<201) {
				$("#cover1htmlmod1").css("width","375px");
				$("#cover1htmlmoddiv").css("width","350px");
				$("#cover1htmlmoddiv div").css("width","350px");
			}
		});
		
		$("#showhomeworkimg").mouseout(function(e){
			if(((e.target.id).indexOf("showhomeworkimg")==-1)||(e.target.id).indexOf("cover1html")==-1){
				$("#cover1html").css("display","none");
			}
		});
		$("#cover1html").mouseover(function(e){
			if(((e.target.id).indexOf("showhomeworkimg")==-1)||(e.target.id).indexOf("cover1html")==-1){
				$("#cover1html").css("display","block");
				if ((document.getElementById("cover1htmlmoddiv").offsetHeight)<201) {
					$("#cover1htmlmod1").css("width","375px");
					$("#cover1htmlmoddiv").css("width","350px");
					$("#cover1htmlmoddiv div").css("width","350px");
				}
			}
		});
		$("#cover1html").mouseout(function(e){
				$("#cover1html").css("display","none");
		});
		getOtherBook();
	}else{
		$("#cover1").css("display","none"); 
		$("#cover1html").css("display","none");
		$("#cover2").css("display","none");
	}
	 if (buyType != 2) {//校园版不弹修改密码
		 if(customType !=null && customType == 1){
			 
		 }else{
			 passWordCookieCount();
			 parentTelphoneCookieCount(); 
		 }		
	}
	 
	$("#scctu").hover(function(){
		$("#scctu").attr("src","http://static2.kouyu100.com/images2/customer/scctu.png");
	},function(){
		$("#scctu").attr("src","http://static2.kouyu100.com/images2/customer/scctu2.png");
	});
	$("#chaTu").Drags({handler:"#panel-header",zIndex:10000,opacity:1});
	if (customType == null || customType == "null" || customType != 1){
		tipBindHomeSchool();
	}
});


function keydown(e){
	var e=e||event;
	var currKey=e.keyCode||e.which||e.charCode;
	if(currKey=='46'){
		logflag = "";
	}else{
		logflag = logflag+currKey;
	}
	if(logflag=='767971'){
		$("#logDiv").height(400);
		$("#logDiv").width(800);
		$("#logDiv").show();
		$("#selectred5").show();
		$("#selectred5_btn").show();
	}
}

function setSeed(s){
	setCookies('read_seed', s);
}
function setNews(){
	window.open ('frameset.action', 'newwindow', 'height=520, width=660, top=30, left=50, toolbar=no, menubar=no, scrollbars=no, resizable=no,location=no, status=no,resizable=no');
}
function getSeed(){
	return setCookies('read_seed');
}

function getTotalWidth (){ 
	if($.browser.msie){ 
		return document.compatMode == "CSS1Compat"? document.documentElement.clientWidth : document.body.clientWidth; 
	} 
	else{ 
		return self.innerWidth; 
	} 
}

var l = getTotalWidth()/2-375;

function showListenSentenceScore(score){
	
	if(score > -2){
		if ($("#listenAvatar").length == 0){
			logW("not exist");
			$("body").append("<div id='listenAvatar'><img id='listenAvatarImg' src=''></img></div>");
			$("#listenAvatar").css({
				position:"absolute",
				top:"250"+"px", 
				left:l+"px",
				zIndex:999
			});
		}else{
			logW("is exist");
		}
	}
	
	if(score == -2){
		try{
			$("#listenAvatarImg").remove();
			$("#listenAvatar").remove();
		}catch(err){}
	}else if(score == -1){
		$("#listenAvatarImg").attr("src","http://static2.kouyu100.com/images2/courseRead/listen00.gif");
	}else if(score<60){
		$("#listenAvatarImg").attr("src","http://static2.kouyu100.com/images2/courseRead/listen0-59.gif");
	}else if(score<70){
		$("#listenAvatarImg").attr("src","http://static2.kouyu100.com/images2/courseRead/listen60-69.gif");
	}else if(score<80){
		$("#listenAvatarImg").attr("src","http://static2.kouyu100.com/images2/courseRead/listen70-79.gif");
	}else if(score<86){
		$("#listenAvatarImg").attr("src","http://static2.kouyu100.com/images2/courseRead/listen80-85.gif");
	}else if(score<90){
		$("#listenAvatarImg").attr("src","http://static2.kouyu100.com/images2/courseRead/listen86-89.gif");
	}else if(score<96){
		$("#listenAvatarImg").attr("src","http://static2.kouyu100.com/images2/courseRead/listen90-95.gif");
	}else if(score<100){
		$("#listenAvatarImg").attr("src","http://static2.kouyu100.com/images2/courseRead/listen96-99.gif");
	}else if(score==100){
		$("#listenAvatarImg").attr("src","http://static2.kouyu100.com/images2/courseRead/listen100.gif");
	}
}

function hideOrShowChatu(flag){
	if(flag==1){
		$("#chatu").attr("href","javascript:void(0);");
		$("#chatu").css("cursor","auto");
		$("#chatu").html("<img src='http://static2.kouyu100.com/images2/customer/chatu_hui.jpg'>");
		closeChatu();
	}else{
		$("#chatu").attr("href","javascript:chaTu()");
		$("#chatu").css("cursor","pointer");
		$("#chatu").html("<img src='http://static2.kouyu100.com/images2/customer/chatu.png'>");
		var fla=$("#chatu").attr("href");
		if(fla=="javascript:chaTu()"&&$("#flashDiv2").css("display")=="none"){
			$.post('checkChatuStatus.action?v='+Math.random()
					,{lessonId:curLessonId},function(data){
						var dat=data.split("@");
						if(dat[0]==1){
							chaTu1(dat[1]);
						}else if(dat[0]==2){
							chaTu1(dat[0]+"@@"+dat[1]);
						}
			});
		}
	}
}

//根据单词听选成绩展示不同图片
function showWordsToChooseScore(score){
	if(score > -2 && score != 1){
		if ($("#listenAvatar").length == 0){
			$("body").append("<div id='listenAvatar'><img id='listenAvatarImg' src=''></img></div>");
			$("#listenAvatar").css({
				position:"absolute",
				top:"250"+"px", 
				left:l+"px",
				zIndex:999
			});
		}
	}
	
	if(score == 1){//结束
		try{
			$("#listenAvatarImg").remove();
			$("#listenAvatar").remove();
		}catch(err){}
	}else if(score == -1){//错误
		$("#listenAvatarImg").attr("src","http://static2.kouyu100.com/images2/courseRead/listen60-69.gif");
	}else if(score == 0){//正确
		$("#listenAvatarImg").attr("src","http://static2.kouyu100.com/images2/courseRead/listen100.gif");
	}else if(score == 2){
		$("#listenAvatarImg").attr("src","http://static2.kouyu100.com/images2/courseRead/listen00.gif");
	}
}


	function logW(msg){ 
		//document.getElementById("logDiv").innerHTML = msg+"<br/>"+document.getElementById("logDiv").innerHTML;
	}

	var serverTime = 1559376802515;
	var serverTime2 = new Date(serverTime);
	var clientTime = new Date().getTime();
	var clientTime2 = new Date();
	var diff = (serverTime-clientTime);
	var timeDiff = true;


	if( diff > 31536000000){
		timeDiff = false;
	}



	var requiredMajorVersion = 11;
	var requiredMinorVersion = 1;
	var requiredRevision = 0;
	var curBookId;
	var curLessonId;
	var curLessonXML;
	var displayTranslation;

	var hasTreeIds = new Array();
	var tabType;
	hasTreeIds.push('903');curBookId='903'; 
	curLessonId='36742'; 
	var hasProductInstall = DetectFlashVer(6, 0, 65);
	
	var hasRequestedVersion = DetectFlashVer(requiredMajorVersion, requiredMinorVersion, requiredRevision);

	if ( hasProductInstall && !hasRequestedVersion ) {
		var MMPlayerType = (isIE == true) ? "ActiveX" : "PlugIn";
		var MMredirectURL = window.location;
	    document.title = document.title.slice(0, 47) + " - Flash Player Installation";
	    var MMdoctitle = document.title;
	    confirmation("您的flash player版本过低，您将无法完成听写和跟读练习，是否安装最新版本？");
	} else if (hasRequestedVersion) {

	} else {
		var browser = {
	             versions: function () {
	               var u = navigator.userAgent, app = navigator.appVersion;
	               return {     //移动终端浏览器版本信息
	            	   trident : u.indexOf('Trident') > -1, //IE内核                                  
		   	            presto : u.indexOf('Presto') > -1, //opera内核                                  
		   	            webKit : u.indexOf('AppleWebKit') > -1, //苹果、谷歌内核                                  
		   	            gecko : u.indexOf('Gecko') > -1 && u.indexOf('KHTML') == -1, //火狐内核                                 
		   	            mobile : !!u.match(/AppleWebKit.*Mobile.*/) 
		   	                    || !!u.match(/AppleWebKit/), //是否为移动终端                                  
		   	            ios : !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/), //ios终端                  
		   	            android : u.indexOf('Android') > -1 || u.indexOf('Linux') > -1, //android终端或者uc浏览器                                  
		   	            iPhone : u.indexOf('iPhone') > -1 || u.indexOf('Mac') > -1, //是否为iPhone或者QQHD浏览器                     
		   	            iPad: u.indexOf('iPad') > -1, //是否iPad        
		   	            webApp : u.indexOf('Safari') == -1,//是否web应该程序，没有头部与底部 
		   	            google:u.indexOf('Chrome')>-1 
	               };
	             }(),
	             language: (navigator.browserLanguage || navigator.language).toLowerCase()
	           }            
	           if (browser.versions.mobile) {//判断是否是移动设备打开。browser代码在下面
	             
	           } else {
	              
	        	   confirmation("未检测到flash插件，您将无法完成听写和跟读练习，是否安装最新版本？"); 
	           }
			
	}
	
	function confirmation(msg) {
		var answer = confirm(msg);
		if (answer){
			window.location.href="http://www.adobe.com/go/getflash/";
		}
		else{
			alert("放弃安装，您将无法完成听写和跟读练习。");
		}
	}
	function initListen(lessonid,dataUrl){
		try{
			document.getElementById("listen").load(lessonid,dataUrl);
		}catch(err){
		}
	}

	function initRead(lessonid,dataUrl){
		try{
			document.getElementById("follow").load(lessonid,dataUrl);
		}catch(err){
		}
	}

	function initRead1(lessonid,dataUrl,displayTranslation){
		try{
			document.getElementById("follow").load(lessonid,dataUrl,displayTranslation);
		}catch(err){
		}
	}

	function getCnTextDisplay(){
		return displayTranslation;
	}


	function tiaoguoListen(){		
		setTimeout("tiaoguoListen1()",3000);
	}

	function tiaoguoListen1(){
		try{
			document.getElementById("listen").stopListen();	//智能听写
			document.getElementById("wordsToChoose").onStop();//单词听选
		}catch(err){
			showFlashAlert("检测到浏览器禁用了flash跟读插件，请设置允许<br>访问后刷新页面。");
			return false;
		}		
		document.getElementById("flashDiv2").style.display = "none";
		$("#chatu").attr("href","javascript:chaTu()");
		$("#chatu").css("cursor","pointer");
		$("#chatu").html("<img src='http://static2.kouyu100.com/images2/customer/chatu.png'>");
		//alert("111  这是第一个地方");
		newFuncTip();
		$.post('checkChatuStatus.action?v='+Math.random()
				,{lessonId:curLessonId},function(data){
					var dat=data.split("@");
					if(dat[0]==1){
						chaTu1(dat[1]);
					}else if(dat[0]==2){
						chaTu1(dat[0]+"@@"+dat[1]);
					}
		});
		//initWordsToChoose(curLessonId);//单词听选
	}
	
	/*严格与鼓励提示*/
	function newFuncTip(){
	
		if(isHaveCookie("newFunc_Tip")==0){
			document.cookie="newFunc_Tip=1;";
		}
		//if(isHaveCookie("newFunc_Tip")==1||isHaveCookie("newFunc_Tip")==11||isHaveCookie("newFunc_Tip")==111){
		if(isHaveCookie("newFunc_Tip")==1){
			$("body").append("<div id=\"newFuncTips\">"+
							 "<p style=\"position:absolute;top:70px;left:40px;\">口语训练新增“严格拒绝”和<br/>“鼓励为主”两个功能。</p>"+
							 "<p style=\"position:absolute;left:200px;top:130px;color:red;\">"+
							 "<a style=\"color:red;text-decoration:underline;\" target=\"_blank\" href=\"http://047.kouyu100.com:80/wzsyczx/help.action#A4_2_3\">详细见帮助</a>"+
							 "</p>"+
							 
							 "<img style=\"cursor:pointer;margin-top:160px;margin-left:90px;\" onclick=\"closenewFuncTips()\" src=\"http://static2.kouyu100.com/images2/customer/iknow.png\"/>"+			
							 "</div>");
			$("body").append("<div id=\"newFuncTipsblack\"></div>");
			$("#newFuncTips").css({
				background:"url(http://static2.kouyu100.com/images2/customer/newFuncTip.png) no-repeat scroll 0% 0% transparent", 
				position:"absolute",
				top:"480"+"px", 
				left:"50%",
				marginLeft:"-50px",
			 	width:"357px",
				height:"220px",
				fontFamily:"微软雅黑",
				color:"#1b5279",
				fontSize:"19px",
				zIndex:10005,
				fontWeight:"800",
				align:"center"
			});
			$("#newFuncTipsblack").css({
				backgroundColor:"#000000",
				position:"fixed",
				top:"0"+"px",
				left:"0"+"px",
				width:"100%",
				height:"100%",
				fontFamily:"微软雅黑",
				fontSize:"19px",
				fontWeight:"600",
				zIndex:10004,
				opacity:"0.7",
				filter:"alpha(opacity=70)"
			});
			//if(!+[1,]){document.getElementById("newFuncTips").style.left="100px";}
			var itimes = isHaveCookie("newFunc_Tip");
			var times = itimes+"1";
			var date = new Date();
			date.setTime(date.getTime()+10*365*24*3600*1000);
			document.cookie="newFunc_Tip="+times+"; expires="+date.toGMTString();

		}				
    }
	function closenewFuncTips(){$("#newFuncTips").remove();$("#newFuncTipsblack").remove();}
	function isHaveCookie(lcookie){//判断是否含有cookie值，含有返回cookie值，不含有返回0.
		var allCookie1 = document.cookie;
		var arrCookie1 = allCookie1.split("; ");
		for(var i=0;i<arrCookie1.length;i++){
		var arrNode=arrCookie1[i].split("=");
		if(arrNode[0]==lcookie)return arrNode[1];
		}
		return 0;
	}
	
	
	function notify(override){
		document.getElementById("flashDiv2").style.display = "";
		$("#chatu").attr("href","javascript:void(0);");
		$("#chatu").css("cursor","auto");
		$("#chatu").html("<img src='http://static2.kouyu100.com/images2/customer/chatu_hui.jpg'>");
		closeChatu();
		document.getElementById("follow").onReadStopBtnClick_1();
		//alert("222  这是第2个地方");
	}

	function notify2(){//单词听选
		document.getElementById("flashDiv2").style.display = "";
		$("#chatu").attr("href","javascript:void(0);");
		$("#chatu").css("cursor","auto");
		$("#chatu").html("<img src='http://static2.kouyu100.com/images2/customer/chatu_hui.jpg'>");
		closeChatu();
		//alert("222  这是第2个地方");
		//initWordsToChoose(curLessonId);
		initRead(curLessonId,getLessonXML());
	}

	function getLessonId(){
		logW("curLessonId:"+curLessonId);
		return curLessonId;
	}

	function getLessonXML(){
		return 'http://047.kouyu100.com:80/wzsyczx/getLessonXml.action';
	}
	
	var isFlashLoadCompleted = false;
	function flashLoadCompleted(){
		logW("flashLoadCompleted");
		isFlashLoadCompleted = true;
	}

	function onLessonClick(div){
		modeChoose2(1);
		closeScore();
		logW("onLessonClick  1111");
		var s = $('#book'+div.getAttribute("bookId")).attr("title");
		logW("onLessonClick  0000");
		curBookId = div.getAttribute("bookId");
		closeHighLine();
		div.className = "lessonName1";
		var newLessonId = div.getAttribute("lessonId");
		var flag=document.getElementById("flashDiv2").style.display;
		//alert("333  这是第3个地方"); 
		showLessonDetails(newLessonId);
		if(newLessonId == curLessonId){
			changeGroup();
		}
		curLessonId = newLessonId;
		displayTranslation = div.getAttribute("displayTranslation");
		curLessonXML = div.getAttribute("xml");
		saveCoursePosition();
		if(isFlashLoadCompleted){
			initListen(div.getAttribute("lessonId"),getLessonXML());
			initRead1(div.getAttribute("lessonId"),getLessonXML(),div.getAttribute("displayTranslation"));
			logW("onLessonClick  isFlashLoadCompleted");
			//alert(div.getAttribute("lessonId"));
			if(flag=="none"){
				$.post('checkChatuStatus.action?v='+Math.random()
						,{lessonId:curLessonId},function(data){
							var dat=data.split("@");
							if(dat[0]==1){
								chaTu1(dat[1]);
							}else if(dat[0]==2){
								chaTu1(dat[0]+"@@"+dat[1]);
							}
				});
			}else{
				$("#chatu").attr("href","javascript:chaTu()");
				$("#chatu").css("cursor","pointer");
				$("#chatu").html("<img src='http://static2.kouyu100.com/images2/customer/chatu.png'>");
			}
		}else{
			logW("onLessonClick  else");
		}
		
		if(div.offsetTop-divTree2.scrollTop>500){
			divTree2.scrollTop = div.offsetTop-300;
		}
		/*$.post('checkChatuStatus.action?v='+Math.random()
				,{lessonId:curLessonId},function(data){
					var dat=data.split("@");
					if(dat[0]==1){
						chaTu1(dat[1]);
					}
		});*/
		//初始化单词听选
		initWordsToChoose(div.getAttribute("lessonId"));
		wordSelectionCheck(div.getAttribute("lessonId"));
	 }
	
	function showLessonDetails(lessonId){
		$.ajax({
			dataType: "json",
			type: "POST",
			url:"showLessonDetails.action",
			data:"lessonId="+lessonId,
			success:function(data){
				var img = new Image();
				img.src = "http://image.kouyu100.com/book/book"+data.pbid+".png";
				
				/* if(img.fileSize > 0 || (img.width > 0 && img.heigth > 0))
					document.getElementById("isCover").src="http://image.kouyu100.com/book/book"+data.pbid+".png";
				else
					document.getElementById("isCover").src = "http://image.kouyu100.com/book/weixuanze.png"; */
				document.getElementById("isCover").src="http://image.kouyu100.com/book/book"+data.pbid+".png";
				
				$("#lxInfo").html("有"+data.rcount+"人跟读，"+data.lcount+"人听写。<br/>我最后的跟读成绩："+data.lastScore);
				$("#faid").attr("lessonid",lessonId);
				$('#bookname1').html(data.dcname);
				$('#bookname1').attr("title",data.dcname);
				$('#lessonname1').html(data.lcname); 
				$('#lessonname1').attr("title",data.lcname); 
			}
		});
	}
	
	function showLesson(divNodeListId,nodeId){
		   var listDiv = document.getElementById(divNodeListId);
		   if(listDiv.style.display == ""){
			   listDiv.style.display = "none";
		   }else{
			   listDiv.style.display = "";
			   if(listDiv.getAttribute("load") == 'false'){
				   getLessons(divNodeListId,nodeId);
			   }
		   }
	} 

	function closeHighLine(){		
		var lessonNodes = $("*[name='lessonNode']");
		 for(var k=0;k<lessonNodes.length;k++){
			 lessonNodes[k].className = "lessonName";
		}
	} 

	function getParasValue(type){
		
		//openGai();
		
		return "";
	}

	function toPay(){
		//location.href="http://047.kouyu100.com:80/wzsyczx/paymentProduct.action?domain=wzsyczx";
		//window.open("http://jiazhang.kouyu100.com/index.html?to=ppp");
		location.href="http://047.kouyu100.com:80/wzsyczx";
	}
	function backHome(){
		location.href="http://047.kouyu100.com:80/wzsyczx";
	}
	function onFlashStartBtnClicked(){
		try{
			document.getElementById("listen").stopListen();
			
		}catch(err){
			logW(err.message);	
		}
		//openGai();
	}
	
	
	var sssId=0;
	function disGai(){
		 var gai = document.getElementById("gai");
	//	 if(gai.offsetWidth>0)
		//  {
	//		 gai.style.width=gai.offsetWidth-2+"px";
	//		 setTimeout("disGai()",1);
	//	  }
	//	  else if(gai.offsetWidth<=0){
	//	   gai.style.display="none";
	//	   }
		clearTimeout(sssId);
		gai.style.display="none";
		gai.style.width="0px";
		    }
	function openGai(){
		 var gai = document.getElementById("gai");
			var	w = gai.offsetWidth;
			var wid = 0;
		 gai.style.display="";

//		 if(gai.offsetWidth<208)
//		  {
//			 gai.style.width=gai.offsetWidth+2+"px";
//			 sssId = setTimeout("openGai()",1);
//		  }else if(gai.offsetWidth>=208){
//		   gai.style.display="";
//		   }
		 
		 function ad()
			{
			 if(wid<208)
			  {
				 gai.style.width=wid+2+"px";
				wid+=2;
			  }else if(wid>=208){
			   gai.style.display="";
			   }
			}
			sssId = setInterval(ad,1);
		 
		 
	}
	


	function getServerIPs(){
		
		var ipStr = "rec32.kouyu100.com";
		
		return ipStr.split(",");		
	}
	
	function changeRed5(){
		try{
			document.getElementById("follow").setRed5($("#selectred5").val());
		}catch(err){}
	}

	function getServerNames(){
		
		var nameStr = "默认";
				
		return nameStr.split(",");		
	}
	function alertp(str){
		if(str==1){
			alert("口语训练，需要韧劲，而不仅仅是冲动，每天30分钟，每周3个多小时，就足够了。坚持才是王道。");
		}
		
		crossDomainRequest();
	}
	
	var xhr = new XMLHttpRequest();   
	function crossDomainRequest() {   
	  if (xhr) {   
	   	xhr.open('GET', "https://047.kouyu100.com:443//guide/blank.mp3", true);
	    xhr.onreadystatechange = handler;   
	    xhr.send();   
	  } 
	}   
	
	var http302 = false;
	
	function handler(evtXHR) {
		try{
			if(xhr.status!=200){
				http302 = true;
			}
			logW("handler:"+xhr.status);
		}catch(e){
			
		}
	} 
	
	function getHttp302(){
		return http302;
	}

	
	function changeGroup(){
		var orglist = document.getElementById("orglist");
		
		if(orglist.length!=0){
			$.get(
					//显示好友
					'getUserGroupScore.action?aaa=' + Math.random(), {
						orginfo:orglist.value,
						lessonNode:curLessonId
					}, function(data) {
						$("#groupinfo").html(data);
					});
		}
	}
	
	function checkTips(){
		$.get(
				'isNeedTips.action?t='+Math.random(),
				{
					cookieName : "trainingTip"
				},
				function(data){
					if(data==1){
						$("body").append("<div id=\"tips\"><div style='text-align:right;width:358px;margin-top:45px;'><img style=\"margin-right:80px;cursor:pointer\" onclick=\"closeTips(1)\" src=\"http://static2.kouyu100.com/images2/customer/close.png\" /></div><p style=\"margin-top:10px;text-align:center\">这是选中的课（也可自己<br/>在左侧选课），先听写，后跟<br/>读。跟读录音在个人页</p><div style=\"width:358px;text-align:center\"><img style=\"cursor:pointer\" onclick=\"closeTips(2)\" src=\"http://static2.kouyu100.com/images2/customer/iknow.png\"></div></div>");
						$("body").append("<div id=\"tipsblack\"></div>");
						$("#tips").css({
							background:"url(http://static2.kouyu100.com/images2/customer/tips3.png) no-repeat", 
							position:"absolute",
							top:"190"+"px", 
							left:"180"+"px",
							width:"358px", 
							height:"225px",
							fontFamily:"微软雅黑",
							color:"#1b5279",
							fontSize:"19px",
							zIndex:10005,
							fontWeight:"800",
							align:"center"
						});
						$("#tipsblack").css({
							backgroundColor:"#000000",
							position:"fixed",
							top:"0"+"px",
							left:"0"+"px",
							width:"100%",
							height:"100%",
							fontFamily:"微软雅黑",
							fontSize:"19px",
							fontWeight:"600",
							zIndex:10004,
							opacity:"0.5",
							filter:"alpha(opacity=50)"
						});
					}
				}
			);	
	}
	function checkTips2(){
		$("body").append("<div id='lftips'><div style='text-align:right;width:358px;margin-top:45px;'><img style='margin-right:80px;cursor:pointer;' onclick='closeTips2(1);' src='http://static2.kouyu100.com/images2/customer/close.png'/></div><p style='margin-top:10px;text-align:center;'>点击\"录放音测试助手\" ,<br/>测试计算机的录音放音功能<br/>和音量调整</p><div style='width:358px;text-align:center;margin-top:15px;'><img style='cursor:pointer;' onclick='closeTips2(2);' src='http://static2.kouyu100.com/images2/customer/iknow.png'></div></div>");
		$("body").append("<div id='tipsblack2'></div>");
		$("#lftips").css({
			background:"url(http://static2.kouyu100.com/images2/customer/tips3.png) no-repeat", 
			position:"absolute",
			top:"470"+"px", 
			left:"705"+"px",
			width:"358px", 
			height:"225px",
			fontFamily:"微软雅黑",
			color:"#1b5279",
			fontSize:"19px",
			zIndex:10005,
			fontWeight:"800",
			align:"center"
		});
		$("#tipsblack2").css({
			backgroundColor:"#000000",
			position:"fixed",
			top:"0"+"px",
			left:"0"+"px",
			width:"100%",
			height:"100%",
			fontFamily:"微软雅黑",
			fontSize:"19px",
			fontWeight:"600",
			zIndex:10004,
			opacity:"0.5",
			filter:"alpha(opacity=50)"
		});
		/* $.get(
				'isNeedTips2.action?t='+Math.random(),
				{
					cookieName : "trainingTip2"
				},
				function(data){
					if(data==1){
						$("body").append("<div id='lftips'><div style='text-align:right;width:358px;margin-top:45px;'><img style='margin-right:80px;cursor:pointer;' onclick='closeTips2(1);' src='http://static2.kouyu100.com/images2/customer/close.png'/></div><p style='margin-top:10px;text-align:center;'>点击\"录放音测试助手\" ,<br/>测试计算机的录音放音功能<br/>和音量调整</p><div style='width:358px;text-align:center;margin-top:15px;'><img style='cursor:pointer;' onclick='closeTips2(2);' src='http://static2.kouyu100.com/images2/customer/iknow.png'></div></div>");
						$("body").append("<div id='tipsblack2'></div>");
						$("#lftips").css({
							background:"url(http://static2.kouyu100.com/images2/customer/tips3.png) no-repeat", 
							position:"absolute",
							top:"425"+"px", 
							left:"620"+"px",
							width:"358px", 
							height:"225px",
							fontFamily:"微软雅黑",
							color:"#1b5279",
							fontSize:"19px",
							zIndex:10005,
							fontWeight:"800",
							align:"center"
						});
						$("#tipsblack2").css({
							backgroundColor:"#000000",
							position:"fixed",
							top:"0"+"px",
							left:"0"+"px",
							width:"100%",
							height:"100%",
							fontFamily:"微软雅黑",
							fontSize:"19px",
							fontWeight:"600",
							zIndex:10004,
							opacity:"0.5",
							filter:"alpha(opacity=50)"
						});
					}
				}
			);	 */
	}
	
	function checkTips3(){
		$("body").append("<div id='lftips'><div style='text-align:right;width:358px;margin-top:45px;'><img style='margin-right:80px;cursor:pointer;' onclick='closeTips3(1);' src='http://static2.kouyu100.com/images2/customer/close.png'/></div><p style='margin-top:14px;text-align:center;width: 340px;'>单句分是针对错误严重度，<br>整段分数是综合评价，<br>详细看这里</p><div style='width:358px;text-align:center;margin-top:15px;'><img style='cursor:pointer;' onclick='closeTips3(2);' src='http://static2.kouyu100.com/images2/customer/iknow.png'></div></div>");
		$("body").append("<div id='tipsblack3'></div>");
		$("#lftips").css({
			background:"url(http://static2.kouyu100.com/images2/customer/tips3.png) no-repeat", 
			position:"absolute",
			top:"470"+"px", 
			left:"50%",
			width:"358px", 
			marginLeft:"42px", 
			height:"225px",
			fontFamily:"微软雅黑",
			color:"#1b5279",
			fontSize:"19px",
			zIndex:10005,
			fontWeight:"800",
			align:"center"
		});
		$("#tipsblack3").css({
			backgroundColor:"#000000",
			position:"fixed",
			top:"0"+"px",
			left:"0"+"px",
			width:"100%",
			height:"100%",
			fontFamily:"微软雅黑",
			fontSize:"19px",
			fontWeight:"600",
			zIndex:10004,
			opacity:"0.5",
			filter:"alpha(opacity=50)"
		});
		
	}
	
	function closeTips(c){
		$.get(
				'iknow.action?t='+Math.random(),
				{
					cookieName : "trainingTip",
					clickcount:c
				},
				function(data){
				}
			);	
		$("#tipsblack").remove();
		$("#tips").remove();
		
		// 第二个提示
		checkTips2();
	}
	function closeTips2(c){
		$.get(
				'iknow2.action?t='+Math.random(),
				{
					cookieName : "trainingTip2",
					clickcount:c
				},
				function(data){
				}
			);	
		$("#tipsblack2").remove();
		$("#lftips").remove();
		
		// 第三个提示
		checkTips3();
	}
	
	function closeTips3(c){
		$.get(
				'iknow3.action?t='+Math.random(),
				{
					cookieName : "trainingTip3",
					clickcount:c
				},
				function(data){
				}
			);	
		$("#tipsblack3").remove();
		$("#lftips").remove();
	}
	
	// 听写错误回顾
	function showMistakeWord() {
		var goToPage =1;
		$.get(
				'showDictationMistakeMsg.action?t='+Math.random(),{
					goToPage :goToPage
				},
				function(data){
					document.getElementById("listenMistakeDiv").style.display='block';
					/* var left =window.screen.width/2-780;
					$("#listenMistakeDiv").css({
						left:left,
						top:"160px"
					}); */
					$("#showBody").html(data);
					
				}
			);	
	}
	
	
	 //下一页
	/* function nextPageBtn(){
		var nowPage = parseInt(document.getElementById("presentPageValue").value);
		var goToPage = nowPage+1;
		$.get(
			'showDictationMistakeMsg.action?t='+Math.random(),
			{
				goToPage :goToPage
			},	
			function(data){
				$("#showBody").html(data);
			}
		); 
	} */
	//上一页
	/* function lastPageBtn(){
		var nowPage = parseInt(document.getElementById("presentPageValue").value);
		var goToPage = nowPage-1;
		$.get(
			'showDictationMistakeMsg.action?t='+Math.random(),
			{
				goToPage :goToPage
			},	
			function(data){
				$("#showBody").html(data);
			}
		); 
	} */
	function showPage(){
		var nowPage = parseInt(document.getElementById("presentPageValue").value);
		$.get(
			'showDictationMistakeMsg.action?t='+Math.random(),
			{
				goToPage :nowPage
			},	
			function(data){
				$("#showBody").html(data);
			}
		); 
	}
	//关闭
	function closeListenMistDiv() {
		document.getElementById("listenMistakeDiv").style.display='none';
	}
	
	function replayError(mediaUrl){
		mediaUrl= 'http://course2.kouyu100.com/'+"course/"+mediaUrl;
		try{
		document.getElementById("miniMp3Player").callPlay(mediaUrl);
		}catch(err){}
	}
	function deleteError(id){
		$.get(
				'deleteDictationMistakeMsg.action?t='+Math.random(),
				{
					clmid :id
				},	
				function(data){
					if(data == 1) {
						showPage();
					}else{
						alert("删除失败！");
					}
				}
			); 
	}
	function getOtherBook(){
		$('#divTree2').html("");
		$.get('showBook.action',{r:Math.random()},function(data){
			$('#divTree2').html(data);
			for(var i=0;i<hasTreeIds.length;i++){
				var bookdiv = document.getElementById("book"+hasTreeIds[i]+"List");			
				if(bookdiv==null){
					alert("您选择的课程已经下架.");
					break;
				}
				if(bookdiv != undefined){
					$('#lessonname1').html("");
					$('#lessonname2').html("");
					$('#bookname1').html(bookdiv.getAttribute("bookName"));
				   	$('#bookname2').html(bookdiv.getAttribute("bookName"));
					document.getElementById("book"+hasTreeIds[i]+"List").style.display = "";
					getLessons(hasTreeIds[i]);
					
				}
			}
		});
	}
	
	function showBook(bookId){
		logW("showBook");
		$('#lessonname1').html("");
	   	$('#lessonname2').html("");
	   	//document.getElementById("divTree2").scrollTop=getAbsoluteTop(document.getElementById(bookId))-290;
		var bookNodes = new Array();
		var es = document.getElementsByTagName("DIV");
		var lessonListDiv = document.getElementById(bookId+'List');
		var bookDiv = document.getElementById(bookId);
		
		$.ajax({
			dataType: "json",
			type: "POST",
			url:"showBookDetails.action",
			data:"bookId="+bookId.replace("book",""),
			success:function(data){
				var img = new Image();
				img.src = "http://image.kouyu100.com/book/book"+data.pbid+".png";
				/* if(img.fileSize > 0 || (img.width > 0 && img.height > 0))
					document.getElementById("isCover").src="http://image.kouyu100.com/book/book"+data.pbid+".png";
				else
					document.getElementById("isCover").src = "http://image.kouyu100.com/book/weixuanze.png"; */
				document.getElementById("isCover").src="http://image.kouyu100.com/book/book"+data.pbid+".png";
				$('#bookname1').html(data.dcname);
				$('#bookname1').attr("title",data.dcname);
				
			}
		});
		if(lessonListDiv.style.display==""){
			lessonListDiv.style.display="none";
			//document.getElementById("strong"+bookId.replace("book","")).className= document.getElementById("strong"+bookId.replace("book","")).className.replace("checked","unchecked");
			$("#strong" + bookId.replace("book","")).removeClass("checked").addClass("unchecked");
			return;
		}
		
		for(var i = 0; i < es.length; i++){
			if(es[i].getAttribute("name") == "bookNode") {
				bookNodes.push(es[i]);
			}
		}
		  for(var i=0;i<bookNodes.length;i++){
		   var lessonListDiv = bookNodes[i];
		   if(lessonListDiv.id==(bookId+"List")){
			   	lessonListDiv.style.display = "";
			   		var bn = lessonListDiv.getAttribute("bookName");
			   		//if(bn.length>9){
			   		//	bn = bn.substring(0,9);
			   		//}
			   	$('#bookname1').html(bn);
			   	$('#bookname1').attr("title",bn);
			   	$('#bookname2').html(lessonListDiv.getAttribute("bookName"));
		    	if(lessonListDiv.getAttribute("load") == 'false'){
		    		getLessons(lessonListDiv.getAttribute("bookId"));
		    	}
		    	
		   }else{
			   lessonListDiv.style.display = "none";
		   }
		  }
		  var divcount = 0;
		  for(var i=0;i<$("#divTree2").children("div").size();i++){		  
			  if($("#divTree2").children("div")[i].id==bookId){
				  divcount++;
				  break;
			  }else{
				if($("#divTree2").children("div")[i].id.indexOf("List")==-1){
					divcount++;
				}  
			  } 
			  }
		  
		  //if(bookDiv.offsetTop>300){-290;
		  divTree2.scrollTop = (divcount*25)-50;
		  //}
		  
	} 
	
	function  showMember(str1,str2,str3,str4,e){
		$.ajax({
			type:"post",
				url:'showMyMember2.action?aaa='+Math.random(),
				dataType:"json",
				data:"orgId="+str1+"&orgType="+str2+"&groupNo="+str3+"&lessonId="+str4,
				success:function(data) {
					
					var mhg = data.length*20+47+11;
					var html="<div id='gm'></div>";
					for(var i=0;i<data.length;i++){
						html+="<div class='mi'><p class='mip'>"+data[i].name+"</p></div>";
					}
					var t=0;
					var l=0;
					if($.browser.msie) {
						t=getAbsoluteTop(document.getElementById("ga"))-mhg;
						l=getAbsoluteLeft(document.getElementById("ga"));
					}else{
						t=(e.pageY-mhg);
						l=(e.pageX+30);
					}
					html+="<div id='sbm'></div>";
					if(document.getElementById("preview")){
						$("#preview").remove();
					}
					$("body").append("<div id='preview'>"+html+"</div>");
					$("#preview").css({
						position:"absolute",
						top:t + "px",
						left:l+"px",
						zIndex:1000,
						width:"160px",
						height:mhg+"px",
						lineHeight:"20px",
						textIndent:"15px"
					});
					$(".mi").css({
						width:"160px",
						height:"20px",
						lineHeight:"20px",
						background:"url(http://static2.kouyu100.com/images2/teacher/fz_zh.png) repeat-y",
						textIndent:"15px"
					});
					$(".mip").css({
						width:"140px",
						height:"20px",
						lineHeight:"20px",
						margin:"0 auto",
						borderBottom:"1px solid #3D3D3D",
						textIndent:"15px"
					});
					$("#gm").css({
						width:"160px",
						height:"47px",
						lineHeight:"20px",
						background:"url(http://static2.kouyu100.com/images2/teacher/fz_sh.png) no-repeat",
						textAlign:"center",
						fontFamily:"微软雅黑",
						fontSize:"16px",
						fontWeight:"bold"
					});
					$("#sbm").css({
						width:"160px",
						height:"11px",
						background:"url(http://static2.kouyu100.com/images2/teacher/fz_xia.png) no-repeat",
						textAlign:"center",
						fontFamily:"微软雅黑",
						fontSize:"16px",
						fontWeight:"bold"
					});
				}
		});
	}

	function removeMemberView(obj){
		$("#preview").remove();
	}
	function getAbsoluteTop(ob){
		if(!ob){return null;}
		var mendingOb = ob;
		var mendingTop = mendingOb .offsetTop;
		while( mendingOb != null && mendingOb .offsetParent != null && mendingOb .offsetParent.tagName != "BODY" ){
		    mendingTop += mendingOb .offsetParent.offsetTop;
		    mendingOb = mendingOb .offsetParent;
		}
		return mendingTop ;
		}
	
	function getAbsoluteLeft(ob){
		if(!ob){return null;}
		    var mendingOb = ob;
		    var mendingLeft = mendingOb .offsetLeft;
		    while( mendingOb != null && mendingOb .offsetParent != null && mendingOb .offsetParent.tagName != "BODY" ){
		      mendingLeft += mendingOb .offsetParent.offsetLeft;
		      mendingOb = mendingOb .offsetParent;
		    }
		return mendingLeft ;
		}
	
	//重点词
	function keyWord(){
		document.getElementById("isShowKeyWord").style.display='block';
		getkeyWord();
	}
	function keyword_close(){
		document.getElementById("isShowKeyWord").style.display='none';
	}
	 
	function dealChar(xml_str){
		try{
			xml_str = xml_str.replace("^_^"," ");	
        }catch(e){
        	
        }
		try{
			if(xml_str.indexOf("^_^")!=-1){
				return dealChar(xml_str);
			}
		}catch(e){
			
		}
		return xml_str;
	}
	var xml_str = dealChar(xml_str);
	
	function setLessonXMLContent(str){
        try{
        	xml_str="<xml>"+str+"</xml>";	
        }catch(e){
        	
        }
		if(document.getElementById("showContent")){
		document.getElementById("showContent").innerHTML="<img src='http://static2.kouyu100.com/images3/teacher/ckqw_1.png' style='margin-top:-5px;*margin-top:0px;margin-right:10px'/>";
		document.getElementById("showContent").onclick=keyWord;
		}
	} 
	
	function getkeyWord(){
		var bookName = $("#bookname1").text();
		var lessonName =$("#lessonname1").text();
		$("#lessonBody").html(bookName+"&nbsp;&nbsp;-->&nbsp;&nbsp;"+lessonName);
		$("#lessonBody").attr('title',bookName+lessonName);
		var str = "";
		$(xml_str).find('pratices').find('sentence').each(function (i){
			var textArray = $(this).find("text").text();
			 while(textArray.indexOf("{")>-1){
				 textArray = textArray.substring(0,textArray.lastIndexOf("{"))+textArray.substring(textArray.lastIndexOf("}")+1,textArray.length);
			    }
			textArray = textArray.split(" ");
			var implWordArray = $(this).find("impWord").text().split(" ");
			for(var i=0;i<textArray.length;i++){
				var a=0;
				for(var j=0;j<implWordArray.length;j++){
					if(textArray[i]==implWordArray[j]){
						a++;
					}
				 }
				if(a>0){
					 str += "<font color='red'> "+textArray[i]+"</font>"+" ";
					
				}else{
					 str += textArray[i]+" ";
				}
				}
			 str += "</br>";
		}); 
		$("#keyWordBody").html(str);
	}  
		
		
	function flashToBig(){
		flashSize = 1.3;
		var wth = document.body.clientWidth/2-450;
		var tth = 10;		
		$("body").append("<div id=\"newFuncTipsblack1\"></div>");

		$("#newFuncTipsblack1").css({
			backgroundColor:"#cccccc",
			position:"absolute",
			top:"0"+"px",
			left:"0"+"px",
			width:"1440px",
			height:"980px",
			fontFamily:"微软雅黑",
			fontSize:"19px",
			fontWeight:"600",
			zIndex:9999999,
			opacity:"0.8",
			filter:"alpha(opacity=70)"

		});
		
		$("body").append("<div id=\"newFuncTipsblack2\"></div>");
		
		var divWidth = 718*flashSize;
		var divHeight = 411*flashSize;
		
		$("#newFuncTipsblack2").css({
			backgroundColor:"#000000",
			borderColor:"#4a62dd",
			borderWidth:"4px",
			borderStyle:"solid",
			paddingTop:"1px",
			position:"absolute",
			top:tth+"px",
			left:wth+"px",
			width:divWidth+"px",
			height:divHeight+"px",
			fontFamily:"微软雅黑",
			fontSize:"19px",
			fontWeight:"600",
			zIndex:9999999
		});
		
		$("#newFuncTipsblack2").append(resizeFlash());
		window.scrollTo(0,0);
	}
	
	
	function flashToNormal(){
		flashSize = 1;
		$("#newFuncTipsblack1").remove();
		$("#flashDiv").prepend(resizeFlash());
		$("#newFuncTipsblack2").remove();
		window.scrollTo(0,400);
	}
		
	function resizeFlash(){			
		var rd = $("#follow");
		rd.width(718*flashSize);
		rd.height(412*flashSize);
		return rd;
	}
	
	
	function forRank(obj){
		/* var str = obj.getAttribute("lessonId"); */
		var str = getLessonId();
		$("body").append("<div id='blackDiv' onclick='closeRank()'>&nbsp;</div>");
		$("#blackDiv").css({
			display:"",
			position:"absolute",
			height:document.body.clientHeight+"px",
			width:document.body.clientWidth+"px",
			backgroundColor:"#000000",
			zIndex:"10001",
			top:"0px",
			left:"0px",
			opacity:"0.7",
			filter:"alpha(opacity=70)"
		});
					 $.ajax({
					    url: "showRank.action",
						type: "get",
					   	dataType: "json",
					    data: "lessonId="+str,
					    //contentType: 'application/json, charset=utf8',
					    success: function(data) {
							/* var data = new Array();
							data =  eval("("+data2+")"); */
					    	var domainlist = data.domain;
					    	var alllist = data.all;
					    	var initObj;
					    	$("body").append("<div id='ranklist' style='line-height: 12px;'><div style='width:400px;height:33px;float:left'><div style='cursor: pointer;float:right;width:20px;margin-right:10px;*margin-right:5px;_margin-right:5px;margin-top:5px;' onclick='closeRank()'>&nbsp;</div></div><div id='domainlist'></div>" +
					    			"<div style='width:400px;height:30px;float:left'></div>" +
					    			"<div id='alllist'></div>" +
					    			"<div class='now' id='nowId'>&nbsp;</div>" +
					    			"<div id='flashdiv3'></div>" +
					    			"</div>");
					    	/*如果没有上90分的,提示"还没有人超过90分, 赶紧加油吧"*/
					    	if(domainlist.length==0){
					    		$("#domainlist").append("<div id=\"listTips1\" style=\"text-align: center;fontSize:20px;\">" +
					    						"<p style=\"margin-right:auto; margin-left:auto;" +
					    									"height:100px;color:#B7B7B7;vertical-align:middle;line-height:110px;" +
					    									"font-size:18px;font-family:微软正黑体;font-weight:600;\">" +
					    						"还没有人超过90分，赶紧加油吧！</p></div>");
					    	 }
					    	/*如果没有上90分的,提示"还没有人超过90分, 赶紧加油吧"*/
					     	if(alllist.length==0){
					    		$("#alllist").append("<div id=\"listTips1\" style=\"text-align: center;\">" +
			    							"<p style=\"margin-right:auto; margin-left:auto;" +
			    										"height:100px;color:#B7B7B7;vertical-align:middle;line-height:150px;" +
			    										"font-size:18px;font-family:微软正黑体;font-weight:600;\">" +
					    								"还没有人超过90分，赶紧加油吧！</p></div>");
					    	} 
					    	for(var i=0;i<domainlist.length;i++){
					    		var surl = domainlist[i].url;
					    		var index = surl.indexOf("//");
					    		var url1 = surl.substring(index+2, surl.length - 1);
					    		var index1 = url1.indexOf("/");
					    		var url2 = url1.substring(index1+1, url1.length - 1);
					    		var index2 = url2.indexOf("/");
					    		var domain = url2.substring(0,index2);
					    		if(i==0){
					    			initObj = domainlist[i];
					    		}
					    		var score  = " ";
				    			if(listSwitch == 1){
				    				score  = domainlist[i].score;
				    			}
					    		if(i%2==0){
					    			//$("#domainlist").append("<div class='pr'><a href='http://047.kouyu100.com:80/wzsyczx/saveVisitor.action?visitId="+domainlist[i].userId+"'>"+domainlist[i].userName+"</a>于"+domainlist[i].endTime.substring(0,10)+"取得"+domainlist[i].score+"分"+"<img src='http://static2.kouyu100.com/images/sound.gif' onclick=startRankPlayer(\""+domainlist[i].url+"\",\'rankplayer\')></img></div>");					    			
					    			$("#domainlist").append("<div class='pr'><table border=0 width=177 style='color:#565656'><tr>" +
					    					"<td rowspan='2' style='height:35px;line-height:35px'><a href='http://047.kouyu100.com:80/wzsyczx/saveVisitor.action?visitId="+domainlist[i].userId+"'><img style='width:31px;height:31px' src='http://head.kouyu100.com/"+domain+"/"+domainlist[i].userId+".jpg'></img></a></td>" +
					    							"<td><a href='http://047.kouyu100.com:80/wzsyczx/saveVisitor.action?visitId="+domainlist[i].userId+"'>"+domainlist[i].userName+"</a></td>" +
					    									"<td rowspan='2' style='height:35px;line-height:35px' align=right><div style='cursor: pointer;width:57px;height:23px;background-image:url(http://static2.kouyu100.com/images/customer/listenbutton.png);font-size:17px;font-weight:700;text-align:right;line-height:23px;' onclick='initRank(\""+domainlist[i].url+"\",\""+domainlist[i].userName+"\",\""+domainlist[i].score+"\")'>"+score+"</div></td>" +
					    									"</tr>" +
					    							"<tr><td>"+domainlist[i].endTime.substring(0,10)+"</td></tr></table></div>");
					    		}else{
					    			$("#domainlist").append("<div class='prh'><table border=0 width=177 style='color:#565656'><tr>" +
					    					"<td rowspan='2' style='height:35px;'><a href='http://047.kouyu100.com:80/wzsyczx/saveVisitor.action?visitId="+domainlist[i].userId+"'><img style='width:31px;height:31px' src='http://head.kouyu100.com/"+domain+"/"+domainlist[i].userId+".jpg'></img></a></td>" +
					    							"<td><a href='http://047.kouyu100.com:80/wzsyczx/saveVisitor.action?visitId="+domainlist[i].userId+"'>"+domainlist[i].userName+"</a></td>" +
					    									"<td rowspan='2' align=right><div style='cursor: pointer;width:57px;height:23px;background-image:url(http://static2.kouyu100.com/images/customer/listenbutton.png);font-size:17px;font-weight:700;text-align:right;line-height:23px;' onclick='initRank(\""+domainlist[i].url+"\",\""+domainlist[i].userName+"\",\""+domainlist[i].score+"\")'>"+score+"</div></td>" +
					    									"</tr>" +
					    							"<tr><td>"+domainlist[i].endTime.substring(0,10)+"</td></tr></table></div>");
					    		}
					    	}
					    	for(var i=0;i<alllist.length;i++){
					    		var surl = alllist[i].url;
					    		var index = surl.indexOf("//");
					    		var url1 = surl.substring(index+2, surl.length - 1);
					    		var index1 = url1.indexOf("/");
					    		var url2 = url1.substring(index1+1, url1.length - 1);
					    		var index2 = url2.indexOf("/");
					    		var domain = url2.substring(0,index2);
					    		var score = " ";
					    		if(listSwitch == 1){
				    				score  = alllist[i].score;
				    			}
					    		if(i%2==0){
					    		//$("#alllist").append("<div class='apr'>"+alllist[i].userName+"于"+alllist[i].endTime.substring(0,10)+"取得"+alllist[i].score+"分<img src='http://static2.kouyu100.com/images/sound.gif' onclick=startRankPlayer(\""+alllist[i].url+"\",\'rankplayer\')></img></div>");
					    		$("#alllist").append("<div class='apr'><table border=0 style='color:#565656;heigth:52px;width:177px;overflow:hidden;'>" +
					    				"<tr height=12>" +
				    					"<td rowspan='2' style='vertical-align:middle;'><a href='http://047.kouyu100.com:80/wzsyczx/saveVisitor2.action?visitId="+alllist[i].userId+"' target='_blank'><img style='width:31px;height:31px' src='http://head.kouyu100.com/"+domain+"/"+alllist[i].userId+".jpg'></img></a></td>" +
				    							"<td style='height:15px;'>"+alllist[i].userName+"</td>" +
				    									"<td rowspan='2' align=right><div style='cursor: pointer;width:57px;height:23px;background-image:url(http://static2.kouyu100.com/images/customer/listenbutton.png);font-size:17px;font-weight:700;text-align:right;line-height:23px;' onclick='initRank(\""+alllist[i].url+"\",\""+alllist[i].userName+"\",\""+alllist[i].score+"\")'>"+score+"</div></td>" +
				    									"</tr>" +
				    							"<tr ><td >"+alllist[i].endTime.substring(0,10)+"</td></tr>" +
				    							"<tr ><td colspan='3' align=center style='vertical-align:text-top;overflow:hidden;'><div style='overflow: hidden;text-overflow:ellipsis;white-space: nowrap; width: 156px;' title='" + alllist[i].domainname + "'>"+alllist[i].domainname+"</div></td></tr>" +
				    									"</table></div>");
					    		}else{
					    			$("#alllist").append("<div class='aprh'><table border=0 width=177 style='color:#565656;overflow:hidden;'><tr>" +
					    					"<td rowspan='2' style='height:35px;'><a href='http://047.kouyu100.com:80/wzsyczx/saveVisitor2.action?visitId="+alllist[i].userId+"' target='_blank'><img style='width:31px;height:31px' src='http://head.kouyu100.com/"+domain+"/"+alllist[i].userId+".jpg'></img></a></td>" +
					    							"<td>"+alllist[i].userName+"</td>" +
					    									"<td rowspan='2' align=right><div style='cursor: pointer;width:57px;background-image:url(http://static2.kouyu100.com/images/customer/listenbutton.png);font-size:17px;font-weight:700;text-align:right;line-height:23px;height:23px;' onclick='initRank(\""+alllist[i].url+"\",\""+alllist[i].userName+"\",\""+alllist[i].score+"\")'>"+score+"</div></td>" +
					    									"</tr>" +
					    							"<tr><td>"+alllist[i].endTime.substring(0,10)+"</td></tr>" +
					    									"<tr><td colspan='3' align=center style='vertical-align:text-top;_width:160px;overflow:hidden;'><div  style='overflow: hidden;text-overflow:ellipsis; white-space: nowrap; width: 156px;' title='" + alllist[i].domainname + "'>"+alllist[i].domainname+"</div></td></tr>" +
					    									"</table></div>");	
					    		}
					    	}
					    	document.getElementById("flashdiv3").innerHTML = ("<div class='showMp3' id='mp3' style='height:149px;float:left;background-image:url(http://static2.kouyu100.com/images/customer/xiabj.png);'>" +
					    			"<p id='forrankplayer'>" +
					    			"<object classid='clsid:d27cdb6e-ae6d-11cf-96b8-444553540000' " +
					    			"codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0'" +
					    			" width='398' height='148' id='rankplayer' align='middle'>" +
					    			"<param name='allowScriptAccess' value='true' />" +
					    			"<param name='allowFullScreen' value='false' />" +
					    			"<param name='movie' value='/flash/player.swf' />" +
					    			"<param name='wmode' value='transparent' />" +
					    			"<param name='quality' value='high' />" +				    			
					    			"<embed src='/flash/player.swf' quality='high'" +
					    			"wmode='transparent' width='400' height='148' name='rankplayer'" +
					    			"align='middle' allowScriptAccess='true' allowFullScreen=''false'" +
					    			"type='application/x-shockwave-flash'" +
					    			"pluginspage='http://www.macromedia.com/go/getflashplayer'" +				    			
					    			" /></object></p></div></div>");
					    	var s="13px";
					    	var r ="22px";
					    	var bt="2px";
					    	var bm = "1px";
					    	var imgurl = "http://static2.kouyu100.com/images/customer/ranklist.jpg";
					    	var rh = "404px";
					    	if($.browser.msie) {
					    		if($.browser.version=="6.0"){
					    			s="5px";
					    			r="15px";
					    			bt="0px";
					    			bm="0px";
					    			imgurl = "http://static2.kouyu100.com/images/customer/ranklistIE6.jpg";
					    			rh="414px";
					    		} 
					    	}
					    	var t = ($("#blackDiv").outerHeight()/2)-380;
					    	var l = ($("#blackDiv").width()/2)-150; 
					    	$("#ranklist").css({
					    		display:"",
					    		position:"absolute",
					    		width:"400px",
					    		height:rh,
					    		background:"url("+imgurl+") no-repeat",
								/*  top:(obj.offsetTop-200)+"px",
								left:(obj.offsetLeft-500)+"px", */
								/* top:180,
					    		left:636, */
					    		top:t,
					    		left:l,
								zIndex:"10005"
					    	});
					    	$("#domainlist").css({
					    		
					    		float:"left",
					    		width:"400px",
					    		height:"120px"
					    		
					    	});
					    	$("#alllist").css({
					    		float:"left",
					    		width:"400px",
					    		height:"170px"
					    	});
					    
					    	startRankPlayer(initObj.url,'rankplayer');
					    	
					    },
					    error:function(data,status){
					    }

					});  
	}
	
	function closeRank(){
		$("#ranklist").remove();
		$("#blackDiv").remove();
		
	}
	function initRank(str1,str2,str3){
		if(listSwitch != 1){
			str3  = "";
		}
		$("#nowId").html("<p style='float:right;margin-top:5px;margin-bottom:5px;margin-right:10px;_margin-bottom:0px;_margin-top:0px;font-size:14px;'>"+str2+"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"+str3+"</p>");
		startRankPlayer(str1,'rankplayer');
	}
	function uploadLogPicEx(){
		 document.getElementById("upPic").style.display='block';
		 $("#upPic").css({
				backgroundColor:"#FFF",
				position:"absolute",
				top:"46%", 
				left:"33%",
				width:"580px", 
				height:"563px",
				border:"2px solid #ccc",
				fontFamily:"微软雅黑",
				fontSize:"19px",
				fontWeight:"600",
				zIndex:10001
			});   
		 $("#syc_gb").html('<img src="http://static2.kouyu100.com/images2/teacher/syc_gb.png"/>');
	}
	function colseFlashDiv(){
		$("#upPic").hide();
		var html=$("#scc").html();
		$("#scc").html("<p style='margin-top:116px;color:gray;' >请耐心等待，图片上传中...</p>");
		//var lessonId=$("#faid").attr("lessonId");
		var lessonId=curLessonId;
		$.post('findChatuPic.action?v='+Math.random()
				,{lessonId:lessonId,type:html}
		,function(data){
			if(data.indexOf("<img")!=-1||data.indexOf("<IMG")!=-1){
				$("#scc").html(data);
				$("#syc_gb").html('<img onclick="closeChatu()" src="http://static2.kouyu100.com/images2/teacher/syc_gb.png"/>');
			}else{
				var html="<img width='400' src='http://oss.aliyuncs.com/lessonpicture/"+data+"' /><br/>";
				$("#scc").html(html);
			    $("#chatuStatus").html("插图操作：等待审核");
			    $("#syc_gb").html('<img onclick="closeChatu()" src="http://static2.kouyu100.com/images2/teacher/syc_gb.png"/>');
			}
		});
	}
	function chaTu1(obj){
		var width=document.body.clientWidth;
		//alert(document.body.clientWidth);
		$("#chaTu").css({
			background:"url(http://static2.kouyu100.com/images2/customer/ct_bj_1.png) no-repeat ",
			position:"absolute",
			top:"340px", 
			left:"0px",
			width:"413px", 
			height:"344px",
			border:"none",
			fontFamily:"微软雅黑",
			fontSize:"13px",
			zIndex:10001
		});
		if(obj.indexOf("@@")==-1){
			$("#scc").html("<img width='400' src='http://oss.aliyuncs.com/lessonpicture/"+obj+".jpg' /><br/>");
			$("#chatuStatus").html("插图操作：<input type='button' style='border:none;color:rgb(255,136,0);cursor:pointer;' onclick='uploadLogPicEx()' value='更新插图' />");
		}else{
			var dat=obj.split("@@");
			$("#scc").html("<img width='400' src='http://oss.aliyuncs.com/lessonpicture/"+dat[1]+".jpg' /><br/>");
			$("#chatuStatus").html("插图操作：<input type='button' style='border:none;color:rgb(255,136,0);' value='等待审核' />");
		}
		$("#scctu").show();
		$("#chaTu").show();
	}
	function chaTu(){
		var width=document.body.clientWidth;
		//alert(document.body.clientWidth);
		$("#chaTu").css({
			background:"url(http://static2.kouyu100.com/images2/customer/ct_bj_1.png) no-repeat ",
			position:"absolute",
			top:"340px", 
			left:"0px",
			width:"413px", 
			height:"344px",
			border:"none",
			fontFamily:"微软雅黑",
			fontSize:"13px",
			zIndex:10001
		});
		var lessonId=curLessonId;
		var flag=$("#lessonname1").html();
		if(flag==null||flag==""){
			alert("请选择课程");
			return ;
		}
		$("#chaTu").show();
		$("#scctu").show();
		$.post('findChatuStatus.action?v='+Math.random()
				,{lessonId:lessonId}
		,function(data){
			if(data=="该课没有图片"){
				$("#chatuStatus").html("插图操作：上传插图");
				$("#scc").html('<img id="scctu" src="http://static2.kouyu100.com/images2/customer/scctu2.png" onclick="uploadLogPicEx()" style="margin-top:116px;cursor:pointer;"/>');
			}else if(data.indexOf("@@")!=-1){
				var dat=data.split("@@");
				if(dat[0]==1){
					$("#chatuStatus").html("插图操作：<input type='button' style='border:none;color:rgb(255,136,0);cursor:pointer;' onclick='uploadLogPicEx()' value='更新插图' />");
				}else if(dat[0]==-1){
					$("#chatuStatus").html("插图操作：等待审核");
				}
				$("#scc").html("<img width='400' src='"+dat[1]+"' /><br/>");
			}else{
				var les=(data.split("_"))[1];
				if(les==lessonId){
					var html="<img width='400' src='http://oss.aliyuncs.com/lessonpicture/"+data+"' /><br/>";
					$("#scc").html(html);
					$("#chatuStatus").html("插图操作：等待审核");
				}else{
					$("#chatuStatus").html("插图操作：上传插图");
					$("#scc").html('<img id="scctu" src="http://static2.kouyu100.com/images2/customer/scctu2.png" onclick="uploadLogPicEx()" style="margin-top:116px;cursor:pointer;"/>');
				}
			}
		});
	}
	function closeChatu(){
		$("#chaTu").hide();
		$("#scc").html("");
		$("#chatuStatus").html("");
	}
	
	//初始化单词听选
	function initWordsToChoose(lid){
		try{
		$.ajax({
			type : 'POST',
			url : 'initWordChoose.action?aaa='+Math.random(),
			dataType:'text',
			data : 'lessonId='+lid,
			async:false,
			success : function(data) {	
				var dat = data.split('&&&');
				var str = dat[0];
				var num = dat[1];
				var lesssonId = dat[2];
				var isWord = dat[3];
				var url = 'http://047.kouyu100.com:80/wzsyczx';
				 if (isWord == 1) {
					//modeChoose2(2);//单词听选 
					showWordsToChooseScore(1);
					$("#wordsChoose").show(); 
					document.getElementById("wordsToChoose").initWord(str,num,lesssonId,url);//初始化
				} else if(isWord != 1){
					modeChoose2(1);//智能听写
					document.getElementById("wordsToChoose").initWord(str,num,lesssonId,url);//初始化
				}                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
				
			}
		});
		
		
		}catch(err){}
	} 
	function pushOff(){
		window.location.href = "unLoginNew1.action?domain="+domain+"";
	}
	
	function gotoHelp(){
		window.window.open( "help.action#A4",'_blank');
	}
</script>
<style type="text/css">
</style>
</head>
<body onload='alertp(0);'>
	<div id="wrap" style="height:auto;">
		<div class="sy_1">
			<div class="sy_1k">
				<div class="sy_1k1">
					<div class="sy_dh fd">
						<img src="http://static2.kouyu100.com/images2/login/dh.png" />
					</div>
					<div class="qg fd">全国统一客服咨询热线：400-016-0066 (09:00-21:30)</div>
					<div class="kf fd">
						<a href="javascript:showQQBox();"> <img
							src="http://static2.kouyu100.com//images2/wykf.png" border="0" />
						</a>
					</div>
					<div class="kf2 fd">
						<a href="#" title="意见反馈"
							onclick="document.getElementById('feedback').style.display='';setSugEmail()"><img
							src="http://static2.kouyu100.com/images2/login/yjfk.png" /> </a>
					</div>
					<div class="kf2 fd">
						<a href="mailto:cs@kouyu100.com" target="_"
							title="cs@kouyu100.com"><img
							src="http://static2.kouyu100.com/images2/login/kfyx.png" /> </a>
					</div>
				</div>
			</div>
		</div>

		












<link href="https://static2.kouyu100.com/css_v3/topMenu/style.css" type="text/css" rel="stylesheet" />
<link href="https://static2.kouyu100.com/css_v3/topMenu/nav.css" type="text/css" rel="stylesheet" />
<link href="https://static2.kouyu100.com/css_v3/topMenu/dongtai.css" type="text/css" rel="stylesheet" />

<link href="https://static2.kouyu100.com/css_v3/topMenu/wordsDict.css" type="text/css" rel="stylesheet" />
<script type="text/javascript">
var staticServer="https://static2.kouyu100.com/";var topMenuDomain="wzsyczx";var customType = '0';var payFlag=1;var topUserType=1;var classAssistant=0;var menuIndex = 3;var tempMatch=0;var userStatus = "0";var isForeign = "null";
var programmeText = {"type1":"此模式的纠错打分功能属于VIP功能，非VIP用户只能使用录音模式,请家长登录家长通中\"最新情况\"了解详情","type2":"您不是VIP用户，不能发起挑战，请家长登录家长通中\"最新情况\"了解详情","type3":"此功能为VIP用户附属功能，可先使用免费听写模式。请家长登录家长通中\"最新情况\"了解详情","type4":"本功能属于vip用户的附赠功能，非vip用户此作业只能完成一次，请家长登录家长通中\"最新情况\"了解详情","type5":"本功能属于vip用户的附赠功能，非vip用户每天体验一次。请家长登录家长通中\"最新情况\"了解详情","type6":"您不是VIP用户，不能发起挑战，请家长登录家长通中\"最新情况\"了解详情","type7":"非VIP用户只能完成老师布置的通用试卷，请家长登录家长通中\"最新情况\"了解详情","type8":"非VIP用户不能使用VIP试卷， 请家长登录家长通中\"最新情况\"了解详情","type9":"非VIP用户不能使用VIP试卷，请家长登录家长通中\"最新情况\"了解详情","type10":"本功能属于vip用户的附赠功能，非vip用户此作业只能完成一次，请家长登录家长通中\"最新情况\"了解详情","type11":"本功能属于vip用户的附赠功能，非vip用户每天体验一次，请家长登录家长通中\"最新情况\"了解详情","type12":"您不是VIP用户，不能自主发起合作邀请。请家长登录家长通中\"最新情况\"了解详情","type13":"本功能属于vip用户的附赠功能，非vip用户每天体验一次，请家长登录家长通中\"最新情况\"了解详情","type14":"本功能属于vip用户的附赠功能，非vip用户每天体验一次，请家长登录家长通中\"最新情况\"了解详情","type15":"本功能属于vip用户的附赠功能，非vip用户此作业只能完成一次。请家长登录家长通中\"最新情况\"了解详情","type16":"本功能属于vip用户的附赠功能，非vip用户每天体验一次，请家长登录家长通中\"最新情况\"了解详情"};
var programme = 3 ; 
var parentSwitch = 1;
var listSwitch = 1;
var squareSwitch = 1;

</script>
<script type="text/javascript" src="https://static2.kouyu100.com/js/jquery.tools.min.js"></script>
<script type="text/javascript" src="https://static2.kouyu100.com/js/plugins/jquery.json-2.3.js"></script>
<script type="text/javascript" src="https://static2.kouyu100.com/js/plugins/jquery.blockUI.js"></script>
<script type="text/javascript" src="https://static2.kouyu100.com/js/topMenu/topMenu.js"></script>
<script type="text/javascript" src="https://static2.kouyu100.com/js/plugins/jquery.imagePreview.1.0.js"></script>

<script type="text/javascript" src="https://static2.kouyu100.com/js/topMenu/topMenuCookie.js"></script>

<script type="text/javascript" src="https://static2.kouyu100.com/js/topMenu/wordsDict.js"></script>
<script type="text/javascript" src="https://static2.kouyu100.com/js/AC_OETags.js" ></script>
<script type="text/javascript">
	var basePath = 'http://static2.kouyu100.com/';
	var basePath_local = 'http://047.kouyu100.com:80/';
	var dict_domain = 'wzsyczx';
	var requiredMajorVersion = 11;
	var requiredMinorVersion = 1;
	var requiredRevision = 0;
	
	var hasRequestedVersion = DetectFlashVer(requiredMajorVersion, requiredMinorVersion, requiredRevision);
	var ExamTypeVal=0;
	var uid='171923';
	var examType='null';
	var userId=0;
	
    $(function(){
    	
    });
    function gotoLastExam(){
    	var examTypeKey="domainId_"+dict_domain+"_userId_"+uid;
 		ExamTypeVal=getCookie(examTypeKey);
 		if(ExamTypeVal==examTypeKey){
 			ExamTypeVal=1;
 		}
    	if(ExamTypeVal==1){
    		window.location.href="listenExam.action";
    	}else if(ExamTypeVal==2){
    		window.location.href="spokenExam.action";
    	}else if(ExamTypeVal==3){
    		window.location.href="fantingExam.action";
    	}else if(ExamTypeVal==4){
    		window.location.href="yueduExam.action";//dict_domain+
    	}
    }
    function gotoPay(){
		location.href="http://047.kouyu100.com:80/wzsyczx/paymentProduct.action?domain=wzsyczx";
	}
	function gotoBackHome(){
		location.href="http://047.kouyu100.com:80/wzsyczx";
	}
	function gotoParentCommunication(){
		window.open("http://jiazhang.kouyu100.com/index.html?to=ppp");
	}
	function getProgramme(){
		var obj = {
				"programme":programme,
				"text" : programmeText
				}
		return obj;
	}
	
</script>
<div class="qing topbg">
	<div class="qing juzhong">
    	
        <div class="lf ttel" id="showslogan"></div>      
        <div class="rf hy">
        	<ul id="sddm">
            	<li id='rname'><a >陈昱帆，欢迎您</a></li>
            	<li><a href="javascript:void(0)" id="wdid" onclick="showWordsDictDialog(this)">
            		<img src="http://static2.kouyu100.com/images3/topMenu/wordsDict/words_book.png" width="15" height="12"/>电子词典
            		
            		</a>
            	</li>
            	 
                <li id="sysmessage"><a href="message.action" id="dtid"><img src="http://static2.kouyu100.com/images3/topMenu/laba.png" width="15" height="12" />动态</a>
                    
                </li>
                <li><a href="http://047.kouyu100.com:80/wzsyczx/help.action?domain=wzsyczx" ><img src="http://static2.kouyu100.com/images3/topMenu/help.png" width="16" height="16" />帮助</a></li>
                
                	 <li><a href="http://047.kouyu100.com:80/wzsyczx/logout.action?domain=wzsyczx" ><img src="http://static2.kouyu100.com/images3/topMenu/tui.png" width="16" height="17" />退出</a></li> 
                  
            </ul>
        </div>
    </div>   
</div>
<div class="qing navbg">
	<div class="qing juzhong">
        <a href="http://047.kouyu100.com:80/wzsyczx" class="lf" id="logo"><img src="http://static2.kouyu100.com/wzsyczx/images/logo_wzsyczx.png"></a>
        <div class=" rf">
            <ul class="nav"  id="nav">
                
                
            
            
                <li class="sy "><a href="http://047.kouyu100.com:80/wzsyczx">首页</a>
                
            
	            
                
                
                
                
                <li class='nann'><a href="http://047.kouyu100.com:80/wzsyczx/courseValidate.action">听说练习</a></li>
                
                
				<li  class="sy "><a href="javascript:gotoLastExam()">测试</a>
					<ul style="margin-left:-14px;">
						<li class="qing erji1"></li>
						<li><a href="http://047.kouyu100.com:80/wzsyczx/listenExam.action">听力测试</a></li>
						<li><a href="http://047.kouyu100.com:80/wzsyczx/spokenExam.action">听说测试</a></li>
						<li><a href="http://047.kouyu100.com:80/wzsyczx/yueduExam.action">阅读测试</a></li>
						<li><a href="http://047.kouyu100.com:80/wzsyczx/fantingExam.action">泛视听</a></li>
						<li class="qing erji2"></li>
					</ul>
				</li>	
				
				<li  id="zyjs"><a href="http://047.kouyu100.com:80/wzsyczx/gotoClassRooms.action">专用教室</a>
					<ul>
                        <li class="qing erji1"></li>
                        
                        
                        <li><a href="http://047.kouyu100.com:80/wzsyczx/getStdInfo.action" target='tpage'>我是小导演</a></li>
                        
                        <li><a href="http://047.kouyu100.com:80/wzsyczx/gotoStuWTM.action">单词两分钟</a></li>
                        
                        <li><a href="http://047.kouyu100.com:80/wzsyczx/gotoDubbing.action">影视配音 </a></li>
                        
                        <li><a href="http://047.kouyu100.com:80/wzsyczx/contestMatch.action">海选展示</a></li>
                        
                        <li><a href="http://047.kouyu100.com:80/wzsyczx/tinyVideo.action">老师微课<!-- <img style="margin-right: 2px;margin-top: 5px;float: right;vertical-align:text-top;" src="http://static2.kouyu100.com/images3/teacher/new.png" /> --></a></li>
                       
                         	<li><a href="http://047.kouyu100.com:80/wzsyczx/gotoMicroVideoGraphic.action">微视频/图文</a></li>
                        
                        
                        <li><a href="http://047.kouyu100.com:80/wzsyczx/gotoAutoDialogue.action">人机对话</a></li>
                        
                        
                        <li><a href="http://047.kouyu100.com:80/wzsyczx/gotoMindList.action">脑图</a></li>
                        <li><a href="http://047.kouyu100.com:80/wzsyczx/gotoWriteHomeWork.action">作文批改</a></li>

                        <li><a href="http://047.kouyu100.com:80/wzsyczx/Chat.action">A.I.智能对话<img style=" margin-right: 2px;margin-top: 5px;*margin-top: -30px;float: right; vertical-align:text-top;position: relative;z-index: 10001;" src="http://static2.kouyu100.com/images3/teacher/new.png" /></a></li>
                        
                        <li><a href="http://047.kouyu100.com:80/wzsyczx/gotopaipaiSaySquare.action">拍拍说广场<img style=" margin-right: 2px;margin-top: 5px;*margin-top: -30px;float: right; vertical-align:text-top;position: relative;z-index: 10001;" src="http://static2.kouyu100.com/images3/teacher/new.png" /></a></li>
                        
                        
                        
                        
                        <li class="qing erji2"></li>
                    </ul>
                     <iframe style="position:absolute; top:160px; width:107px; 
height:263px;background:none;z-index:99; border:none;display:none;" frameborder="0" src="about:blank" id="zyjs_iframe"></iframe>
				</li>
							
                <li  id="grkj"><a href="http://047.kouyu100.com:80/wzsyczx/saveVisitor.action">个人空间</a>
                    <ul>
                        <li class="qing erji1"></li>
                        <li><a href="http://047.kouyu100.com:80/wzsyczx/showMyClass.action">我的班级</a></li>
                        
                        
                        
                       	<li><a href="http://047.kouyu100.com:80/wzsyczx/saveVisitor.action">个人空间</a></li>
                        <li class="qing erji2"></li>
                    </ul>
                    <iframe style="position:absolute; top:160px;width:107px; 
height:47px;background:none;z-index:99; border:none;display:none;" frameborder="0" src="about:blank" id="grkj_iframe"></iframe>
                    
                </li>
                	
               
                <li >
                  
                 <a href="http://047.kouyu100.com:80/wzsyczx/gotoLibrary.action" style="position:relative">图书馆
                  
                 	
                  
                 </a>
                	<ul>
						
                        
                        
                        
                         
                       	
                        
                        
                          
                            
                          	 
							
                          
                        
                           
                    </ul>
                    <iframe style="position:absolute; top:160px; width:107px; 
height:263px;background:none;z-index:99; border:none;display:none;" frameborder="0" src="about:blank" id="zyjs_iframe"></iframe>
                </li>
                 
                 	
				
					
						
					
				
				
				
				
            </ul>
        </div>

    </div>
</div>
<div class="qing xian"></div>


<script>
$(function(){
	$("#zyjs").hover(function()
		{
			$("#zyjs_iframe").css({
				display:"block",
				opacity:"0",
				filter:"alpha(opacity=0)"
			})
			
		},function(){
			$("#zyjs_iframe").css('display','none');
		})
		$("#grkj").hover(function()
				{
			$("#grkj_iframe").css('display','block');	
		},function(){
			$("#grkj_iframe").css('display','none');
		})

})
</script>
<!-- 播放mp3开始 -->
   <div style="height: 1px; width: 1px; margin-left: auto; margin-right: auto; z-index: 1003;">
			<script language="JavaScript" type="text/javascript">
						if(hasRequestedVersion){
							AC_FL_RunContent(
									"src", "https://047.kouyu100.com:443/flash/miniPlayer3.swf",
									"wmode","transparent",
									"FlashVars", "mp3Url=http://047.kouyu100.com:80//findSignatureMp3.action",
									"width", "10",
									"height", "10",
									"align", "middle",
									"id", "miniMp4Player",
									"quality", "high",
									"bgcolor", "#869ca7",
									"name", "miniMp4Player",
									"allowScriptAccess","sameDomain",
									"allowNetworking","all",
									"type", "application/x-shockwave-flash",
									"pluginspage", "http://www.adobe.com/go/getflashplayer"
							);
						}
						//FLASH加载MP3
					</script>
			<noscript>
				<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
					id="miniMp4Player" width="555" height="120"
					codebase="http://fpdownload.macromedia.com/get/flashplayer/current/swflash.cab">
					<param name="wmode" value="transparent" />
					<param name="movie"
						value="https://047.kouyu100.com:443/flash/miniPlayer3.swf" />
					<param name="quality" value="high" />
					<param name="bgcolor" value="#869ca7" />
					<param name="allowScriptAccess" value="sameDomain" />
					<param name="allowNetworking" value="all" />
					<embed src="https://047.kouyu100.com:443/flash/miniPlayer.swf"
						wmode="transparent" quality="high" bgcolor="#869ca7" width="1"
						height="1" name="miniMp4Player" align="middle" play="true"
						loop="false" quality="high" allowScriptAccess="sameDomain"
						allowNetworking="all" type="application/x-shockwave-flash"
						pluginspage="http://www.adobe.com/go/getflashplayer"> </embed>
				</object>
			</noscript>
		</div> 
  <!-- 播放mp3结束 -->


		<div class="sy_4" style="padding-bottom:20px;margin-top:10px;">
			<div class="main">
				<div class="lessonTree fd">
					<div class="sclass"></div>
					<div class="treehead">
						<img style="cursor: pointer" class="fr"
							src="http://static2.kouyu100.com/images3/courseRead/wenhao.png"
							onclick="window.open('http://047.kouyu100.com:80/wzsyczx/help.action?helpNum=2','help');"></img>
					</div>
					<div class="four">
						<div class="UseConT">
							<div class="UseCon haha" style="display: none;" id="addAdd1">
								<div
									style="float: left; margin-left: 0px; text-transform: capitalize">
									<select style="width: 100px" )" id="selectGrade"></select><select
										style="width: 100px" id="selectSubject"></select>
								</div>
								<div id="divTree1"
									style="margin-top: 25px; overflow-y: scroll; border: 1px solid #CCC; width: 200px; height: 490px; clear: both"></div>
							</div>
							<div class="treebottom" style="display: block" id="addAdd2">
								
								<div class="UseConText">
									<div id="divTree2" style="" onmouseover="disGai()"></div>
								</div>

							</div>
						</div>

						<div style="cursor: pointer; float: right; margin-top: 5px"
							title="点击这里查看基础发音教学">
							<a href="#" onclick="setNews()"><img
								src="http://static2.kouyu100.com/images2/courseRead/jcfyjx.png" /> </a>
						</div>

					</div>
					<div id="gai"
						style="display: none; width: 4px; height: 490px; position: absolute; left: 0px; top: 75px; *top: 75px;"
						onmouseover="disGai()" onclick="disGai()"></div>
				</div>

				<div class="course fr" style=' position:relative; height:auto;'>
					<div class="lessonDetail">
						<div class="detailLeft fd">
							<div id="cover1" class="cover1 fd ">
								<div style="height: 35px; ">
									<div id="showhomeworkimg"
										style="line-height: 38px; float: left;">
										<span id="showhomeworkimg"
											style="font-size: 16px; font-weight: 900">作业</span><img
											id="showhomeworkimg"
											src="http://static2.kouyu100.com/images3/coursetraining/zhankai.png" />
									</div>
									<div style="float: left; width: 2px;"></div>
									<div style="float: left; margin-top: 13px;margin-left: 13px; ">
										<a id="showhomeworknext"><span id="showhomeworknexttext" style="vertical-align:middle; color:blue; font-size: 12px"><u>下一练习</u></span></a>
									</div>
								</div>
								<div id="cover1html"
									style="width: 390px; position: absolute; background-color: white; overflow-x: hidden;z-index: 1;">
									<div id="cover1htmltop" style="width: 390px; height: 9px; background: url(http://static2.kouyu100.com/images3/coursetraining/zybj_sh.png) no-repeat; _behavior: url(http://static2.kouyu100.com/iepngfix/iepngfix.htc);"></div>
									<div id="cover1htmlmod2" style="width: 390px; height: 4px; background: url(http://static2.kouyu100.com/images3/coursetraining/zybj_zh.png ) repeat; _behavior: url(http://static2.kouyu100.com/iepngfi/iepngfix.htc); " ></div>
									<div id="cover1htmlmod" style="width: 390px; height: 201px; background: url(http://static2.kouyu100.com/images3/coursetraining/zybj_zh.png ) repeat; _behavior: url(http://static2.kouyu100.com/iepngfi/iepngfix.htc); " >
									<div id="cover1htmlmod1" style="width: 385px; height: 201px; overflow-y: auto; overflow-x: hidden">
										<div id="cover1htmlmoddiv" style="margin-left: 15px; margin-top: 5px; width: 340px; word-break: break-all;"></div>
									</div>
									</div>
									<div id="cover1htmlmod2" style="width: 390px; height: 5px; background: url(http://static2.kouyu100.com/images3/coursetraining/zybj_zh.png ) repeat; _behavior: url(http://static2.kouyu100.com/iepngfi/iepngfix.htc); " ></div>
									<div id="cover1htmldown"
										style="width: 390px; height: 5px; background: url(http://static2.kouyu100.com/images3/coursetraining/zybj_xia.png) no-repeat; _behavior: url(http://static2.kouyu100.com/iepngfix/iepngfix.htc);"></div>
								</div>
								<div  style="height: 3px;"></div>
								<div style="line-height: 20px;">
									<span style="font-size: 14px">进度：</span><span
										id="showhomeworkcreatetime" style="font-size: 14px;color:#0000ff;font-family: 宋体;font-weight: bold;"></span>
								</div>
								<div style="line-height: 20px;">
									<span style="font-size: 14px">截止时间：</span><span
										id="showhomeworkendtime" style="font-size: 14px"></span>
								</div>
								
								
							</div>
							<div id="cover" class="cover fd">
								<img id="isCover"
									src="http://image.kouyu100.com/book/weixuanze.png" />
							</div>
							<div class="linfo fd">
								<div class="bookName" id='bookname1'></div>
								<div class="leName" id='lessonname1'></div>
							</div>
							
						</div>
						<div class="detailRight fd">
							<div class='lxInfo fd' id="lxInfo"></div>
							<div id="fanwen_chatu" class="fanwen fd">
								<a id="faid" lessonId="" onclick="forRank(this);"> <img
									src="http://static2.kouyu100.com//images2/customer/fanwen.png" />
								</a>
								<div style="height: 5px\0;height: 5px\9;height: 3px"></div>
								<a id="chatu" lessonId="" href="javascript:chaTu();">
									<img src="http://static2.kouyu100.com//images2/customer/chatu.png" />
								</a>
							</div>
						</div>
					</div>
					<table width="100%" border="0" cellpadding="0" cellspacing="0"
						class="listenhead">
						<tr>

							<td width="550px" align="right">
								<div class="clearfix">
									
									<div id="chooseB2" class="chooseB1">
										<div id="intelligenceDictation" class="dictation1"
											title="超强高效提高听力的方法（注意是英语听力，而不是听力理解，我们相信您的理解力没问题）。听不懂的地方会自动反复督促你去细听和分辨。"
											onclick="modeChoose(1);">智能听写</div>
										<div id="wordsChoose" style="display: none;" class="removeDictation2"
											onclick="modeChoose(2);" title="单词听选">单词听选</div>
										<div id="picChoose" class="picChoose" onclick="picChoose();">看词选图 <img src="http://static2.kouyu100.com/images3/courseRead/new.png" width="21" height="9"></div>
									</div>
								</div>
							</td>
							<TD width=434><STRONG><SPAN></SPAN><SPAN style="TEXT-TRANSFORM: capitalize"></SPAN></STRONG></TD>
							<td width="110px"><a href="javascript:showMistakeWord()"><img
									src="http://static2.kouyu100.com/images3/coursetraining/txcwhg.png"
									style="_width: 80px; _height: 20px; margin-top: -5px; *margin-top: 0px; margin-right: 10px"
									id="errorReview" /></a></td>
							<td width="5px">
								
							</td>
							<td width="50px"><img
								src="http://static2.kouyu100.com/images3/courseRead/wenhao.png"
								style="float: left; margin-top: -5px; *margin-top: 0px; cursor: pointer;"
								onclick="window.open('http://047.kouyu100.com:80/wzsyczx/help.action?helpNum=3','help');"
								id="helpImg"></img></td>
						</tr>
					</table>
					<div class="listenbottom">
						<div id="modeChooseDiv1" class='modeChooseDiv1'>
							<script language="JavaScript" type="text/javascript">
					
		if(hasRequestedVersion){
			
				AC_FL_RunContent(
						"src", "https://047.kouyu100.com:443/flash/listen",
						"wmode","transparent",
						
						"FlashVars", "baseUrl=http://047.kouyu100.com:80/&saveUrl=http://047.kouyu100.com:80/courseListen.action&teacherMp3Server=http://course2.kouyu100.com/&userFlag=1&domain=wzsyczx&hwId=90845",
						"width", "722",
						"height", "102",
						"align", "middle",
						"id", "listen",
						"quality", "high",
						"bgcolor", "#869ca7",
						"name", "listen",
						"allowScriptAccess","always",
						"allowNetworking","all",
						"type", "application/x-shockwave-flash",
						"pluginspage", "http://www.adobe.com/go/getflashplayer"
				);
			
		}
	</script>
							<noscript>
								<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
									id="listen" width="722" height="102"
									codebase="http://fpdownload.macromedia.com/get/flashplayer/current/swflash.cab">
									<param name="wmode" value="transparent" />
									<param name="movie" value="https://047.kouyu100.com:443/flash/listen.swf" />
									<param name="quality" value="high" />
									<param name="bgcolor" value="#869ca7" />
									<param name="allowScriptAccess" value="always" />
									<param name="allowNetworking" value="all" />
									<embed class="listenc" src="https://047.kouyu100.com:443/flash/listen.swf"
										wmode="transparent" quality="high" bgcolor="#869ca7"
										width="722" height="108" name="listen" align="middle"
										play="true" loop="false" quality="high"
										allowScriptAccess="always" allowNetworking="all"
										type="application/x-shockwave-flash"
										pluginspage="http://www.adobe.com/go/getflashplayer">
									</embed>
								</object>
							</noscript>
						</div>
						<!-- <div id="modeChooseDiv2" style="border:1px solid black;display:none;width:727px;height:102px;"> -->
						<div id="modeChooseDiv2" class='reModeChooseDiv2'>
							<script language="JavaScript" type="text/javascript">
					
		 if(hasRequestedVersion){
			
				AC_FL_RunContent(
						"src", "https://047.kouyu100.com:443/flash/wordsToChoose",
						"wmode","transparent",
						"FlashVars", "baseUrl=http://047.kouyu100.com:80/&saveUrl=http://047.kouyu100.com:80/wordChooseGameOver.action&domain=wzsyczx",
						"width", "7",
						"height", "1",
						//"class","wordsToChoose2",
						"align", "middle",
						"id", "wordsToChoose",
						"quality", "high",
						"bgcolor", "#869ca7",
						"name", "wordsToChoose",
						"allowScriptAccess","always",
						"allowNetworking","all",
						"type", "application/x-shockwave-flash",
						"pluginspage", "http://www.adobe.com/go/getflashplayer"
				);
			
		} 
	</script>
							<noscript>
								<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
									id="wordsToChoose" width="742" height="111"
									codebase="http://fpdownload.macromedia.com/get/flashplayer/current/swflash.cab">
									<param name="wmode" value="transparent" />
									<param name="movie"
										value="https://047.kouyu100.com:443/flash/wordsToChoose.swf" />
									<param name="quality" value="high" />
									<param name="bgcolor" value="#869ca7" />
									<param name="allowScriptAccess" value="always" />
									<param name="allowNetworking" value="all" />
									<embed class="listenc"
										src="https://047.kouyu100.com:443/flash/wordsToChoose.swf" wmode="transparent"
										quality="high" bgcolor="#869ca7" width="722" height="108"
										name="wordsToChoose" align="middle" play="true" loop="false"
										quality="high" allowScriptAccess="always"
										allowNetworking="all" type="application/x-shockwave-flash"
										pluginspage="http://www.adobe.com/go/getflashplayer">
									</embed>
								</object>
							</noscript>

						</div>
						<div id="modeChooseDiv3" class="modeChooseDiv3 clearfix">
				    		<div class="modeChooseText">
					       	  	<p id="wordText"></p>
					       	  	<div class="modeChoosScore">            
						            <img id="listenAvatarImg1" src="" width="72" height="74" class="fl">	
					                <div class="modeChoosScoreRight">
					                	<h3><img src="http://static2.kouyu100.com/images3/courseRead/modeChoosScore_close.jpg" onClick="closeScore()" width="14" height="14">你的成绩：</h3>
					                    <div class="showScore">
					                    	<span id="wordScore" class="span1">0</span><span class="span2">分</span>
					                        <a href="javascript:void(0);" id="wordError" onclick="showWordSelectionError();"><img src="http://static2.kouyu100.com/images3/courseRead/modeChoosScore_btn.jpg" width="62" height="22"></a>
					                    </div>
					                </div>
					            </div>
					        </div>
					        <div class="modeChooseRight">
					        	<div onclick="wordImgPlay();" class="picChoose_btn"><img src="http://static2.kouyu100.com/images3/courseRead/picChoose_btn.png" width="155" height="40" ></div>
					            <div class="Views">播放次数： <select name="" id="playNum"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5" selected>5</option></select></div>
					            <div class="totalWords">单词总数： <span id="wordNum" class="color1">0</span>正确：<span id="right" class="color2">0</span>错误：<span id="wrong" class="color3">0</span></div>
					        </div>
					    </div>
					</div>
					
					<table width="100%" border="0" cellpadding="0" cellspacing="0"
						class="readhead">
						<tr>
							<td width="150px" align="right"><img
								src="http://static2.kouyu100.com/images3/courseRead/xueshenyb_xl.png"
								style="cursor: pointer"
								title="准备好麦克，跟教练朗读课文，在教练纠正下不断提高发音，说自信和地道的英语。提高口语靠多开口，更靠反复纠正提高。" />
							</td>
							<td>
								<div style="line-height: 20px;font-size: 14px;color:#00abe9;font-family: 微软雅黑;width: 320px;display:none;" id="cover2">
									<span style="font-size: 14px;display: block;width: 75px;float: left; margin-top: 3px;">作业进度：</span>
									<span id="showhomeworkcreatetime2" style="display: block;width: 46px;float: left;margin-top: 3px;"></span>
									<a id="showhomeworknext2" style="float: left;width: 82px;margin-top: 2px;"><span id="showhomeworknexttext2" style="vertical-align:middle;font-size: 14px;color:#00abe9;font-family: 微软雅黑;"><u>下一练习</u></span></a>
								</div>
							</td>
							
							<td align="right"><a href="#"
								onclick="window.open('http://047.kouyu100.com:80/wzsyczx/repeatHelp.action','repeatHelp')"><img
									src="http://static2.kouyu100.com/images3/coursetraining/lfycszs.png"
									style="cursor: pointer" title="点击使用录放音测试助手"></img> </a>
							<img
								src="http://static2.kouyu100.com/images3/coursetraining/fssm.png"
								style="margin:0 12px 0 10px;cursor: pointer;" 
								onclick="window.open('http://047.kouyu100.com:80/wzsyczx/help.action?helpNum=90','help');"  title="帮助"></img>		
							</td>
							
						</tr>
					</table>
					<!-- -->
					<div class="readbottom" style="height: 497px;" id="flashDiv">

						<script language="JavaScript" type="text/javascript"> 
		if(hasRequestedVersion){
			
			if(isBuckle ==0){
				recite = "";
			}else{
				if(buckleWords!=""){
					if(buckleWords.substring(buckleWords.length-1,buckleWords.length)=="#"){
						buckleWords = buckleWords.substring(0,buckleWords.length-1);	
					}
				}
				recite = "&recite="+buckleWords;
			}
			var flashVarss = "red5Url=rtmp://020.kouyu100.com/oflaDemo&analysisUrl=http://020.kouyu100.com/analysis/analysis.jsp&mp3Url=http://020.kouyu100.com/red5/streams&baseUrl=http://047.kouyu100.com:80/&type=8&domain=wzsyczx&teacherMp3Server=http://course2.kouyu100.com/&schType=2&asr=1&userFlag=1&primary=0&userSex=1&isLeaderGrade=0&hwId=90845"
				flashVarss = flashVarss +  recite;
			//alert(flashVarss)
			AC_FL_RunContent(
					"src", "https://047.kouyu100.com:443/flash/read3.swf",
					"wmode","transparent",
					"FlashVars", flashVarss,
					"width", "718",
					"height", "412",
					"align", "middle",
					"id", "follow",
					"quality", "high",
					"bgcolor", "#869ca7",
					"name", "follow",
					"allowScriptAccess","always",
					"allowNetworking","all",
					"allowFullScreen","true",
					"type", "application/x-shockwave-flash",
					"pluginspage", "http://www.adobe.com/go/getflashplayer"
			);
			
		}
	</script>
						<noscript>
							<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
								id="follow" width="718" height="412"
								codebase="http://fpdownload.macromedia.com/get/flashplayer/current/swflash.cab">
								<param name="wmode" value="transparent" />
								<param name="movie"
									value="https://047.kouyu100.com:443/flash/read3.swf" />
								<param name="quality" value="high" />
								<param name="bgcolor" value="#869ca7" />
								<param name="allowScriptAccess" value="always" />
								<param name="allowNetworking" value="all" />
								<embed
									src="https://047.kouyu100.com:443/flash/read3.swf"
									wmode="transparent" quality="high" bgcolor="#869ca7"
									width="718" height="412" name="follow" align="middle"
									quality="high" allowScriptAccess="always" allowNetworking="all"
									type="application/x-shockwave-flash"
									pluginspage="http://www.adobe.com/go/getflashplayer"> </embed>
							</object>
						</noscript>
						
						<div class="titleD"
							style="width: 749px; margin-top: 25px; color: blue;z-index: 999; display:  ">
							<table width="100%" border="0" cellpadding="0" cellspacing="0">
								<tr>
									<td width="150px" align="right"><img style="float: right"
										src="http://static2.kouyu100.com//images3/courseRead/banjizu.png" /></td>
									<td width="" align="center"><select id="orglist"
										onchange="changeGroup()">
											
											<option value="3522_1_null">初2017级(八年级)一十六班</option>
											
									</select></td>
									<td width="400px" align="left"><div
											style="width: 400px; float: left; margin-top: 5px; font-size: 14px;"
											id="groupinfo"></div></td>
									<td width="50px">&nbsp;</td>
								</tr>
							</table>
						</div>
						

					</div>
					<div id="listenMistakeDiv">
						<div id='listenMistTitle'>听写错误回顾</div>
						<div id="closeListenMist">
							<a href="javascript:closeListenMistDiv();"> <img
								src='http://static2.kouyu100.com/images/coursetraining/mainDiv_close.png'
								alt='关闭' /></a>
						</div>
						<div id="listenMistTitle2">
							<table class="lmtb2" width="650" rules='rows' cellspacing='10'
								cellpadding='10' border='0'>
								<tr style='text-align: center'>
									<td style='width: 100px'>时间</td>
									<td style='width: 150px'>课程</td>
									<td style='width: 250px'>句子</td>
									<td style='width: 50px;'>播放</td>
									<td style='width: 50px;'>删除</td>
								</tr>
							</table>
						</div>
						<div id="showBody"></div>
					</div>

					<div id="replayError"
						style="display: block; width: 1px; height: 1px;">

						<script language="JavaScript" type="text/javascript">
					if(hasRequestedVersion){
						AC_FL_RunContent(
								"src", "/flash/miniPlayer.swf",
								"wmode","transparent",
								"FlashVars", "mp3Url=http://047.kouyu100.com:80/",
								"width", "10",
								"height", "10",
								"align", "middle",
								"id", "miniMp3Player",
								"quality", "high",
								"bgcolor", "#869ca7",
								"name", "miniMp3Player",
								"allowScriptAccess","sameDomain",
								"allowNetworking","all",
								"type", "application/x-shockwave-flash",
								"pluginspage", "http://www.adobe.com/go/getflashplayer"
						);
					}
					//FLASH加载MP3
				</script>
						<noscript>
							<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
								id="miniMp3Player" width="1" height="1"
								codebase="http://fpdownload.macromedia.com/get/flashplayer/current/swflash.cab">
								<param name="wmode" value="transparent" />
								<param name="movie"
									value="/flash/miniPlayer.swf" />
								<param name="quality" value="high" />
								<param name="bgcolor" value="#869ca7" />
								<param name="allowScriptAccess" value="sameDomain" />
								<param name="allowNetworking" value="all" />
								<embed src="/flash/miniPlayer.swf"
									wmode="transparent" quality="high" bgcolor="#869ca7" width="1"
									height="1" name="miniMp3Player" align="middle" play="true"
									loop="false" quality="high" allowScriptAccess="sameDomain"
									allowNetworking="all" type="application/x-shockwave-flash"
									pluginspage="http://www.adobe.com/go/getflashplayer"> </embed>
							</object>
						</noscript>
					</div>
					
					<div class="readbottom" id="flashDiv2"
						style="position: absolute; top: 350px; left: 0px; height: 435px;">
						<img src="http://static2.kouyu100.com/images/read.png" width="730" height="400"
							onclick="tiaoguoListen1()" style="cursor: pointer;" />
					</div>
					
				</div>
			</div>
		</div>

		<div id="logDiv"
			style="width: 000px; height: 000px; color: #ff0000; padding-left: 10px; display: none; overflow: auto; border: 1px solid red"></div>

		<!-- 听写错误信息回顾 -->
		<!-- 重点词 -->
		<div id="isShowKeyWord">
			<div id="showKeyWord" class="showKeyWord">
				<div id="keyword_close" class="keyword_close">
					<a href="#" onclick="keyword_close()";><img
						src="http://static2.kouyu100.com/images2/teacher/zdc_gb.png" alt="关闭"></img></a>
				</div>
			</div>
			<div id="iskeyWordBody">
				<div id="lessonBody"></div>
				<div id="keyWordBody"></div>
				<div id="keyWordRemark">
					<h4></h4>
				</div>
			</div>
		</div>
		<!-- 上传图片代码块  -->
		<div class="flashzh fd" id="upPic" style="display: none">
			<div id="titleBar"
				style="font-size: 18px; font-weight: bold; width: 580px; _width: 580px; float: left;; margin-top: 8px; font-family: 微软雅黑">
				<div style="float: left; margin-left: 180px;">编辑您的插图图片：</div>
				<div
					style="float: right;; margin-right: 15px; color: #f00; cursor: pointer;"
					onclick="colseFlashDiv()">关闭</div>
			</div>

			<div id="modifyImgFlash"
				style="float: left; width: 558px; margin-left: 10px; position: relative; left: 20px;">

				<script language="JavaScript" type="text/javascript">
			// -----------------------------------------------------------------------------
			// Globals
			// Major version of Flash required
			var requiredMajorVersion = 9;
			// Minor version of Flash required
			var requiredMinorVersion = 0;
			// Minor version of Flash required
			var requiredRevision = 124;
			// -----------------------------------------------------------------------------
			// -->
		</script>

				<script language="JavaScript" type="text/javascript">
		// Version check for the Flash Player that has the ability to start Player Product Install (6.0r65)
			var hasProductInstall = DetectFlashVer(6, 0, 65);
			
			// Version check based upon the values defined in globals
			var hasRequestedVersion = DetectFlashVer(requiredMajorVersion, requiredMinorVersion, requiredRevision);
		
			
			if ( hasProductInstall && !hasRequestedVersion ) {
				// DO NOT MODIFY THE FOLLOWING FOUR LINES
				// Location visited after installation is complete if installation is required
				var MMPlayerType = (isIE == true) ? "ActiveX" : "PlugIn";
				var MMredirectURL = window.location;
			    document.title = document.title.slice(0, 47) + " - Flash Player Installation";
			    var MMdoctitle = document.title;
				AC_FL_RunContent(
					"src", "/page/customer/playerProductInstall",
					"FlashVars", "MMredirectURL="+MMredirectURL+'&MMplayerType='+MMPlayerType+'&MMdoctitle='+MMdoctitle+"",
					"width", "440",
					"height", "400",
					"align", "middle",
					"id", "figure",
					"quality", "high",
					"bgcolor", "#869ca7",
					"name", "figure",
					"allowScriptAccess","sameDomain",
					"type", "application/x-shockwave-flash",
					"pluginspage", "http://www.adobe.com/go/getflashplayer"
				);
			} else if (hasRequestedVersion) {
				// if we've detected an acceptable version
				// embed the Flash Content SWF when all tests are passed
				AC_FL_RunContent(
						"src", "/page/customer/avatarlog",
						"wmode","transparent",
						"FlashVars","imgUrl=http://static2.kouyu100.com/images2/customer/scct.jpg&uploadUrl=http://047.kouyu100.com:80/wzsyczx/uploadChatuPic.action&uploadSrc=false",
						"width", "540",
						"height", "500",
						"align", "middle",
						"id", "figure",
						"quality", "high",
						"bgcolor", "#869ca7",
						"name", "figure",
						"allowScriptAccess","sameDomain",
						"allowNetworking","all",
						"type", "application/x-shockwave-flash",
						"pluginspage", "http://www.adobe.com/go/getflashplayer"
				);
			  } else {  // flash is too old or we can't detect the plugin
			    var alternateContent = 'Alternate HTML content should be placed here. '
			  	+ 'This content requires the Adobe Flash Player. '
			   	+ '<a href=http://www.adobe.com/go/getflash/>Get Flash</a>';
			    document.write(alternateContent);  // insert non-flash content
			  }
		</script>
				<noscript>
					<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
						id="figure" width="440" height="400"
						codebase="http://fpdownload.macromedia.com/get/flashplayer/current/swflash.cab">
						<param name="wmode" value="transparent" />
						<param name="movie"
							value="/page/customer/avatarlog.swf" />
						<param name="quality" value="high" />
						<param name="bgcolor" value="#869ca7" />
						<param name="allowScriptAccess" value="sameDomain" />
						<param name="allowNetworking" value="all" />
						<EMBED src="avatarlog.swf" quality=high bgcolor=#FFFFFF
							WIDTH="650" HEIGHT="450" wmode="transparent"
							flashVars="imgUrl=null&uploadUrl=http://047.kouyu100.com:80/wzsyczx/uploadChatuPic.action&uploadSrc=false"
							NAME="myMovieName" ALIGN="" TYPE="application/x-shockwave-flash"
							allowScriptAccess="always"
							PLUGINSPAGE="http://www.macromedia.com/go/getflashplayer">
						</EMBED>
					</object>
				</noscript>
				<div id="avatar_priview"></div>
				<!--<div><img src="/images/customer/commLeftBottom2.jpg"/></div>-->
			</div>
			<div class="intve"
				style="float: left; position: relative; left: 80px;"></div>
		</div>
		<div id="chaTu" style="display: none;">
			<div id="panel-header"
				style="float: left; width: 413px; height: auto; color: rgb(255, 136, 0);">
				<div id="chatuStatus"
					style="float: left; width: 200px; margin-top: 12px; padding-left: 147px;"></div>
				<div id="syc_gb" class="fr" style="width: 32px; margin-top: 16px;cursor: pointer;">
					<img onclick="closeChatu()"
						src="http://static2.kouyu100.com/images2/teacher/syc_gb.png" />
				</div>
			</div>
			<div id="scc"
				style="height: 303px; width: 400px; float: left; text-align: center; margin-left: 6px; margin-top: 4px; overflow-x: hidden; overflow-y: auto;">
				<img id="scctu" src="http://static2.kouyu100.com/images2/customer/scctu2.png"
					onclick="uploadLogPicEx()" style="margin-top: 116px;cursor:pointer;" />
			</div>
		</div>
		<input id="selectred5" size="30" style="display: none" /><input
			id="selectred5_btn" type="button" onclick="changeRed5()"
			style="display: none" />

		<div id="wordChooesDiv"></div>

		<div style="clear: both; font-size: 12px;"></div>
		<div style="font-size: 12px;">
			
			
 

   






 <!------6------>    
 <div class="sy_6"> 
 		<div class="sy_61">
        <div class="sy_62 fd"><img src="http://static2.kouyu100.com/images2/login/logo2.png" /></div>
		<div class="sy_63 fd">
	
		<p id="kouyu100Link">
		<a href="http://www.kouyu100.com/jzdw/jzdw.html" target="_blank">关于口语100</a> |
			<a href="http://www.kouyu100.com/qingnian/index.html" target="_blank">青少年安全上网</a> |
			
			<!--  <a href="#"   onclick="discontent(document.getElementById('mzcontent'));">免责声明</a> |    -->
		        <a href="http://www.kouyu100.com/mianze/index2.html" target="_blank">免责声明</a> |
				<a href="http://www.kouyu100.com/news/index.html" target="_blank">相关新闻</a> |
				<a href="http://www.kouyu100.com/tsmj/tsmj.html" target="_blank">听说秘籍</a> | 
			<a href="http://www.kouyu100.com/zh/contact.html"
				target="_blank">联系我们</a> | 				 
				
				 <a  target="_blank"  href="showAllSmartDevice.action?domain=wzsyczx">其他手机产品</a> | <a href="http://www.kouyu100.com/help/dummycampus.html">虚拟校园</a>
				
			</p>  <br />
			<p id="copyright">Copyright © 2011-2014
			my<a href="gotoLibrary.action">.</a>kouyu100.com All Rights Reserved. 版权所有 ICP证书编号 浙B2-20120031
			</p>
	 
		</div>
		<div class="sy_64 fd">			
			<div class="footerflash">
				<div class="flashimg"><img src="http://static2.kouyu100.com/images2/footer/f.png"/></div>
				<div class="flashs" id="flashIds"></div>
			</div>
			<div class="footerbrower">
				<div class="browerimg" id="browerImg"></div>
				<div class="browers" id="browerId" ></div>
			</div>
		</div>
	</div>
 </div>
<div class="dnone" style="width:550px;line-height:2.1;font-size:14px;border:#bbc7c7 1px solid;margin-top:8px;margin-left:200px;height:480px;overflow: hidden;" id="mzcontent" onclick="disnone(this)" >
<h3 class="" style="height:40px;text-align:center;line-height:40px;vertical-align:center;background:#e5ebfb;height:40px;margin-top:0px;">免责声明</h3>
<p style="font-weight:normal;margin-left:15px;margin-right:15px;padding-top:10px;clear:both" >
&nbsp;&nbsp;&nbsp;&nbsp;口语100是封闭的互联网教学环境，对特定用户提供基于人工智能技术的模拟口语教练的听说训练教学服务，并收取学费。 除注明的自编或合作内容外，口语100不拥有Aryn教练教授课程的内容。 这些内容由购买了这些内容用户（学生，学校，互联网用户）上传。<br/> 
&nbsp;&nbsp;&nbsp;&nbsp;我们相信--也请您自己再确认：当您使用口语100教学服务，您已经购买了这些内容的使用权（相关的书，课本, CD），简单说：您已经购买或合法有权看到这些书的内容和听到相关的音频。口语100Aryn教练只对拥有这些内容使用权的学生提供听说训练的教学服务。换句话说：口语100不传播内容。<br/>
&nbsp;&nbsp;&nbsp;&nbsp;本声明在尊重您的知情权之外，敦促你购买课程相关的课本和音频。如果出版社确认您未购买或无权使用这些内容，口语100有权被迫暂时终止对您的口语教学服务，直到您购买了这些内容（书，CD)。以确保内容拥有者的权益。口语100保留要求验证您购买了内容的权力。</p>


<div  style="margin-top:40px;text-align:center">
	<a href="javascript:disnone(document.getElementById('mzcontent'))">关闭</a>
</div>
</div>
<style type="text/css">
	.xclass{position:absolute;left:20%; top:25%;width:500px;height:400px;background:url(http://static2.kouyu100.com/images/phones/bj_1.jpg) repeat-x top;overflow-y:hidden;overflow-x:hidden}
	.dnone{display:none}
	#idMsgControl input {
	    color: #000;
	    outline: medium none;
	}
</style>
<link href="https://static2.kouyu100.com/css/foot/footstyle.css"" rel="stylesheet" type="text/css">
<link href="https://static2.kouyu100.com/css2/teacher/teacherHelp_2.css" rel="stylesheet" type="text/css">

<script language="javascript">
	var hideSwitch = '111';
	if(hideSwitch == ''){
		hideSwitch = '111';
	}
	var parentSwitch = parseInt(hideSwitch.substring(0,1));
	var listSwitch = parseInt(hideSwitch.substring(1,2));
	var squareSwitch = parseInt(hideSwitch.substring(2,3));
	if(squareSwitch == 0){
		 $("#kouyu100Link").hide();
	}
	
	var publicdte='1';
	function checkedThis(obj){
		var msm = document.getElementById("msc");
		var agree = document.getElementById("agree");
		var unagree = document.getElementById("unagree");
		var content = document.getElementById("mzcontent");		
		if(obj.checked){
			content.className="xclass";
			agree.checked=true;
			unagree.checked=false;
		}else{
			content.className="dnone";
			agree.checked=false;
		}
	}	
	function agree(obj){
		var msm = document.getElementById("msc");
		var agree = document.getElementById("agree");
		var unagree = document.getElementById("unagree");
		var content = document.getElementById("mzcontent");		
		if(obj.checked){
			content.className="dnone";
			msm.checked=true;
			unagree.checked=false;
		}else{
			content.className="xclass";
			msm.checked=false;
		}
		
	}
	function unagredd(obj){
		var msm = document.getElementById("msc");
		var agree = document.getElementById("agree");
		var unagree = document.getElementById("unagree");
		var content = document.getElementById("mzcontent");		
		if(obj.checked){
			content.className="dnone";
			msm.checked=false;
			agree.checked=false;
		}else{
			content.className="xclass";
			msm.checked=false;
		}
		
	}
	
	function disnone(obj){
		obj.className="dnone";
	}
	function discontent(obj){
		obj.className="xclass";
		document.getElementById('teacherhelp').style.display='none';
	}
	
	function  checkSub(str){
		var msm = document.getElementById("msc");
		if(msm.checked){
			window.location.href=str;
		}else{
			var m = document.getElementById("msm");
			m.style.color="#FF0000";
		}
	}
	function showteacherhelp(){
		document.getElementById('teacherhelp').style.display='';
		disnone(document.getElementById('mzcontent'));
	}
	function unlogin(){
		var domain = document.getElementById("undomain");
		window.location.href='unlogin.action?domain='+encodeURI(domain.value);
	}
	function setvalue(domain,type){
		document.getElementById("undomain").value = domain;
		document.getElementById("untype").value = type;
		if(type==1){
		document.getElementById("logoutflag").style.display='';	
		}else if(type==0){
			window.location.href='unlogin.action?domain='+encodeURI(domain);
		}
	}
	function submits(){	
		var suggest = $("#suggest").val();
		
		var suggestEmail = $("#suggestEmail").val();
		if(suggest==""){
			alert("请留下您宝贵的意见。");
			return false;
		}else if(suggest.length>300){
			alert("建议您使用300字以内进行问题描述。");
			return false;
		}
		if(suggestEmail==""){
			alert("请留下您的联系邮箱，以便客服人员及时反馈给您结果。");
			return false;
		}else if(suggestEmail.search(/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/) == -1){
				alert("您输入的邮箱格式不正确");
				return false;
		}
		var sugPhone = "";
		if($.browser.msie) {
			sugPhone = $("#sugPhone").val();
		}else{
			sugPhone = $("#sugPhone").val().trim();
		}
		$("#sugPhone").attr("value",sugPhone);
		var col = "";
		var userAgent = navigator.userAgent;
		col += "UserStatus:"+userAgent+"<br/>FlashVersion:"+_uFlash();
		$("#collect").attr("value",col);
		return true;
		
	}
	
	
	function submits2(){	
		var suggest = $("#suggest2").val();
		
		var suggestEmail = $("#suggestEmail2").val();
		if(suggest==""){
			alert("请留下您宝贵的意见。");
			return false;
		}else if(suggest.length>300){
			alert("建议您使用300字以内进行问题描述。");
			return false;
		}
		if(suggestEmail==""){
			alert("请留下您的联系邮箱，以便客服人员及时反馈给您结果。");
			return false;
		}else if(suggestEmail.search(/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/) == -1){
				alert("您输入的邮箱格式不正确");
				return false;
		}
		var sugPhone = "";
		if($.browser.msie) {
			sugPhone = $("#sugPhone2").val();
			
		}else{
			sugPhone = $("#sugPhone2").val().trim();
			
		}
		$("#sugPhone2").attr("value",sugPhone);
		var col = "";
		var userAgent = navigator.userAgent;
		col += "UserStatus:"+userAgent+"<br/>FlashVersion:"+_uFlash();
		$("#collect2").attr("value",col);
		return true;
		
	}
	
	
	
	
	function setBrower(){
		var userAgent = navigator.userAgent;
		rMsie = /.*(msie) ([\w.]+).*/; // ie  
		rFirefox = /.*(firefox)\/([\w.]+).*/; // firefox  
		rOpera = /(opera).+version\/([\w.]+)/; // opera  
		rChrome = /.*(chrome)\/([\w.]+).*/; // chrome  
		rSafari = /.*version\/([\w.]+).*(safari).*/;// safari 
		var ua = userAgent.toLowerCase(); 
			if($.browser.msie) {
			if(window.external!=undefined&&window.external.twGetRunPath!=undefined){

				var r=external.twGetRunPath();
				
				if(r&&r.toLowerCase().indexOf("360")>-1){
					//$("#browerId").css({
					//	background:"url(http://static2.kouyu100.com/images/browser/360.png) no-repeat",
					//	textalign:"bottom",
					//	marginTop:"-25px"
					//});
					$("#browerImg").html("<img src='http://static2.kouyu100.com/images/browser/360.png' width='16' height='16'/>");
					$("#browerId").html("360浏览器");
				}
			}else if($.browser.version=="6.0"){
				//$("#browerId").css({
				//	background:"url(http://static2.kouyu100.com/images/browser/IE6.png) no-repeat",
				//	textalign:"bottom"
				//}			
				//);
				$("#browerImg").html("<img src='http://static2.kouyu100.com/images/browser/IE6.png' width='16' height='16'/>");
				$("#browerId").html("IE v"+$.browser.version);
			}else if($.browser.version=="7.0"){
				//$("#browerId").css({
				//	background:"url(http://static2.kouyu100.com/images/browser/IE7.png) no-repeat",
				//	textalign:"bottom",
				//	marginTop:"-25px"
				//}			
				//);
				$("#browerImg").html("<img src='http://static2.kouyu100.com/images/browser/IE7.png' width='16' height='16'/>");
				$("#browerId").html("IE v"+$.browser.version);
			}else if($.browser.version=="8.0"){
				//$("#browerId").css({
				//	background:"url(http://static2.kouyu100.com/images/browser/IE8.png) no-repeat",
				//	textalign:"bottom"
				//}			
				//);
				$("#browerImg").html("<img src='http://static2.kouyu100.com/images/browser/IE8.png' width='16' height='16'/>");
				$("#browerId").html("IE v"+$.browser.version);
			}else if($.browser.version=="9.0"){
				//$("#browerId").css({
				//	background:"url(http://static2.kouyu100.com/images/browser/IE9.png) no-repeat",
				//	textalign:"bottom"
				//}			
				//);
				$("#browerImg").html("<img src='http://static2.kouyu100.com/images/browser/IE9.png' width='16' height='16'/>");
				$("#browerId").html("IE v"+$.browser.version);
			}
			}
			else if($.browser.safari)
			{
				//$("#browerId").css({
				//	background:"url(http://static2.kouyu100.com/images/browser/safari.png) no-repeat"
				//}
				//);
				$("#browerImg").html("<img src='http://static2.kouyu100.com/images/browser/safari.png' width='16' height='16'/>");
				$("#browerId").html("v"+$.browser.version);
				var match = rChrome.exec(ua);  
			    if (match != null) {  
			    	//$("#browerId").css({
					//	background:"url(http://static2.kouyu100.com/images/browser/chrome.png) no-repeat"
					//}
					//); 
			    	$("#browerImg").html("<img src='http://static2.kouyu100.com/images/browser/chrome.png' width='16' height='16'/>");
			    	$("#browerId").html("Chrome v"+$.browser.version);
			    }  
			}
			else if($.browser.mozilla)
			{
				//$("#browerId").css({
				//	background:"url(http://static2.kouyu100.com/images/browser/mozilla.png) no-repeat"
				//		
				//}
				//);
				$("#browerImg").html("<img src='http://static2.kouyu100.com/images/browser/mozilla.png' width='16' height='16'/>");
				$("#browerId").html("Mozilla v"+$.browser.version);
			}
			else if($.browser.opera) {
				//$("#browerId").css({
				//	background:"url(http://static2.kouyu100.com/images/browser/opera) no-repeat"
				//	
				//}
				//);
				$("#browerImg").html("<img src='http://static2.kouyu100.com/images/browser/opera.png' width='16' height='16'/>");
				$("#browerId").html("Opera"+$.browser.version);
			}
			else {
				$("#browerId").html("未知");
			} 
	}
	setBrower();
	function showTeacherFAC(){
		$("#faqView").css({
			position:"absolute",
			top:"20%",
			left:"28%",
			display:"block",
			width:"600px",
			lineHeight:"22px",
			zIndex:2005
		});
		$("body").append("<div id='blackDiv'></div>");
		
		$("#blackDiv").css({
			position:"fixed", 
			top:"0px",
			left:"0px",
			height:"100%",
			width:"100%",
			zIndex:1000,
			backgroundColor:"#000000",
			opacity:"0.7",
			display:"block",
			filter:"alpha(opacity=70)"
		});
		$("#bkId").css({
			display:"none"
		});
		$("#classList").css({
			display:"none"	
		}); 
	}
	$(function(){
		$("#closeFAQ").click(function(){
			$("#faqView").css({
				display:"none"
			});
			$("#blackDiv").remove();
			$("#bkId").css({
				display:"none"
			});
			$("#classList").css({
				display:""	
			});
		});
		
	})
function closeDiv(){
		$("#teacherhelp").hide();
	}
</script>

<div class="bang_title" id="teacherhelp" style="display:none;position:absolute;left:30%; top:25%;width:559px;height:547px;background:url(http://static2.kouyu100.com/images2/footer/lsbzmain_bj.png);background-color:#000000;" >
<div class="lsbz_bt"><a style="float:right;margin-top:14px;*margin-top:0;margin-right:5px" href="#" onclick="closeDiv();">
<img src="http://static2.kouyu100.com/images2/footer/colose_help.png" style="_width:3p4x;_height:18px;">
</a></div>

<div class="gdtzjnr">
<div class="hbq">1.  布置作业</div>
<div class="hbqnr">
	<div class="bhqnr_22">老师可以方便地给特定的班级布置听说作业。<br/> 
只要选定班级，截止时间，课程，和要求，点击提交就可以了。 </div>
	<div class="bhqnr_2">学生在登陆后，就可以最先看到老师布置的作业。<br/> 
老师可以看到自己布置的作业的列表，并删除修改。如果点击作业名字，<br/> 
就可以检查自布置日期后学生作业练习情况。<br/> </div>

</div>


<div class="hbq2">2. 检查作业</div>
<div class="hbqnr2">
	<div class="bhqnr_22">老师可以方便地检查任何一课学生练习的情况。您可以看到谁做了谁没做。<br/> 
按各种顺序排序。 这里您不仅可以看到练习分数，<br/>
还可以看到学生练了几遍，和听学生跟读的声音。<br/>
比如：75 03-18(2) 意思是：分数75， 最后一次在3月18日练习的，练习过2遍。</div>
	<div class="bhqnr_2">
你可以用一键查阅作业，10秒钟检查完全班作业，并给出送花奖励。<br/> 
也可以细听一些学生的录音，可以给学生一对一留言，评价和鼓励。</div>

</div>

<div class="hbq2">3. 班级动态，阶段报告</div>
<div class="hbqnr3">
	<div class="bhqnr_22">这里您可以看学生使用的动态，和总体或一个时间段（周）内的练习时间。<br/> 
你可以要求学生每周听30分钟，读30分钟。然后通过“综合报告-阶段报告”检查。</div>

</div>


<div class="hbq2">4.统计报告</div>
<div class="hbqnr3">
	<div class="bhqnr_22">是在学生用过一段时间后，对成绩提高的数据和图表，分析，<br/> 
方便老师做课题的时候，进行数据分析，和论文写作。</div>

</div>


<div class="hbq2">5. 自编单词课</div>
<div class="hbqnr4">
	<div class="bhqnr_22">老师可以随意输入一些单词，然后布置给学生跟着Aryn练习听说。大大帮助词汇记忆。</div>

</div>



<div class="hbq2">6. 管理学生</div>
<div class="hbqnr3">
	<div class="bhqnr_22">老师可以在班级中添加（或删除）学生。我们还支持班内分组，<br/> 
这样组间可以引入比赛和竞争方式教学。老师还可以输入学生家长手机，或其他信息。</div>
</div>
</div>
<div class="put"><input id="idBtnupload_4" class="changk3" type="button" value="老师布置作业的常见问题 " onclick="showTeacherFAC();"></div>
</div>

<!-- <div class="bang_title" id="teacherhelp" style="display:none;position:absolute;left:30%; top:25%;width:597px;height:400px;background-color:#fffEfE;border:2px solid #bbc7c7;" onclick="this.style.display='none'">
<div class="hlb"> 班级管理功能帮助</div>

<div class="bang_1_title"><div class="shu_1 fd">1.</div> <div class="buzhi fd">布置作业菜单，老师可以方便的给特定的班级布置听说作业。
   只要选定班级，截止时间，课程，和说明，点击提交就可以了。
   
   学生在登陆后，就可以最先看到老师布置的作业。
   
   老师可以看到自己布置的作业的列表，并删除修改。如果点击作业
   名字，就可以方便的检查学生作业练习情况.</div></div>
<div class="bang_2_title"><div class="shu_1 fd">2. </div><div class="buzhi fd">检查作业里，老师可以方便的检查任何一课学生练习的情况。
   您可以看到谁做了，谁没有做。按各种顺序排序。 
   
   这里您不仅可以看到练习分数，还可以看到学生练了几遍，和听学生跟读的声音。
   比如：75    03-18(2)  意思是：分数75， 最后一次在3月18日练习的，练习过2遍。
   
   在听学生录音的时候，您可以给学生留言，评价和鼓励。</div></div>
<div class="bang_2_title"><div class="shu_1 fd">3.</div> <div class="buzhi fd">统计报告，是在学生用过一段时间后，对成绩提高的数据和图标
  分析，方便老师评估练习效果，和分析教学策略。 </div>  </div>
<div class="bang_2_title"><div class="shu_1 fd">4.</div><div class="buzhi fd"> 管理学生，老师可以在班级中添加或删除学生。我们还支持班内分组，
   这样组间可以引入比赛和竞争方式教学。
</div>  </div> 

<div class="bang_2_title" style="text-align:center"><a href="#" onclick="document.getElementById('teacherhelp').style.display='none'">关闭</a></div> 
</div> -->




	<div class="faqz" id="faqView" style="background-color:#fff; display:none;z-index:10000">
			<div class="faqbt"><span style="float:left;">老师FAQ</span><span style="float:right;margin-right:20px;cursor:pointer;" id="closeFAQ">关闭</span></div>
			
				<div style="overflow-x:hidden;height:600px;overflow-y:auto;">
				   <div class="faq_1">1. 没有付费的学生可以用口语100做听说作业么?</div>
				   <div class="faq_zi">无论是否付费，学生都可以使用网络语音教室的听说作业系统功能，但未付费学生没有一对一的智能辅导和自动打分，只有朗读和网络录音功能。 老师一样可以批阅作业，听录音，点评。方便知道谁练了谁没练。 </div>
				  	<div class="faq_1">2.	如何把听说作业和课堂教学结合?</div>
				   <div class="faq_zi">在课堂上让读的好的学生领读课文，或在课堂上联网播放高分学生的录音，能增加学生的荣誉感。</div>
				   <div class="faq_1" style="height:45px;line-height:20px" >3.	分数是什么含意? 为什么有的标准伦敦腔,得分很低?<a href="http://047.kouyu100.com:80/wzsyczx/help.action#A4_0" target="_blank" style="text-decoration:underline;color:red">更多关于音节，单句，全文的分数的说明，请见帮助的相关部分</a></div>
				   <div class="faq_zi">分数是和标准发音的差距的衡量，用人工智能来逼近真人裁判在这个标准下的给分。
										标准是难以确定的。我们以磁带（或自己录制的美国加州发音）为标准，但，一个伦敦或澳大利亚口音的人，是会得低分的。我们针对的是普遍发音差的中国学生，对个别已经形成国外某地的口语的学生，可以不硬性要求，分数作为参考。</div>
				   <div class="faq_1">4.	分数的分布是什么， 学生故意乱说怎么办?</div>
					<div class="faq_zi">一般学生只要认真读，都能上60分。 中国学生平均分数是75分。 好学生在85以上，甚至90以上。 故意乱说，总分很难超过40分。--分数是公开的，会约束学生认真练习。 低于50分的分数都没有意义。</div>
				   <div class="faq_1">5.	学生使用遇到问题怎么办?</div>
					<div class="faq_zi">有问题，找客服。很多是网络连接问题和学生家的电脑问题。学生直接找客服，我们会积极跟进。</div>
				   <div class="faq_1">6.     跟读成绩分布是怎样的?</div>
				  <div class="faq_zi"><img src="http://static2.kouyu100.com/images/teacher/ReadScore.jpg" style="width:500px;height:280px;border:1px solid #ccc;"/></div>
				   <div class="faq_1">7.     听写成绩分布是怎样的?</div>
				  <div class="faq_zi"><img src="http://static2.kouyu100.com/images/teacher/listenScore.jpg" style="width:500px;height:280px;border:1px solid #ccc;""/></div>
				   <div class="faq_1">8.     家长担心孩子上网怎么办？</div>
				  <div class="faq_zi">我们开发了网络卫士，让孩子只能上口语100. 具体请看页面下面的“青少年安全上网”。    另外，如果用手机和平板做作业，练习的时候不用上网。</div>
				  <div class="faq_1">9.     满意保证是怎么回事?</div>
				  <div class="faq_zi">会有极少数学生和家长，因为网络问题，对计算机不熟悉，或种种原因，不喜欢这个练习形式。（正常的，但您要做好准备）。所以我们建议不要强求，让这些学生依然用老方法回家自己听读作业，家长签字，而不强求使用。哪怕支付了，我们都会无条件退款。请老师配合。 您在课堂上多展现用的学生的效果。我们相信越来越多的同学用了效果好，他会慢慢理解。</div>
				   <div class="faq_1">10.    本系统如何支持分组教学？</div>
				  <div class="faq_zi">分组教学是一个有效的教学方式，通过班内分组，组内互相带动，组间竞争，能充分激发学生的学习热情。<br/>在“管理学生“内，可以给学生分组。建议一个班４－６个组。操作：1。选一批人，2.再选分组号，后面选一个组号。3.再点更新分组--这些人就被分到了某个组。 <br/>在“检查作业”里，老师能检查各组的成绩。在课堂上可以奖励获胜组。学生在练习页面，也可以看到自己的成绩和班组的成绩。免费用户在组里也不影响小组成绩。</div>
		</div>
			
</div>


<div class="" id="logoutflag" style="display:none;position:absolute;left:40%; top:25%;width:400px;height:200px;background-image:url(http://static2.kouyu100.com/images/public/tishi400-200.png);border:2px solid #bbc7c7;">
<div class="" style="font-family:微软雅黑;font-size:18px;margin-top:50px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;抱歉您的账号在另一台设备上被登录，如果继续使用请重新登录。</div>
<br/>
<input type="hidden" id='undomain'>
<input type="hidden" id='untype'>
<div class="" style="text-align:center;margin-top:60px;"><a href="#" onclick="unlogin()"><img src="http://static2.kouyu100.com/images/public/queding.png"></img></a></div> 
</div>

<div class="" id="confirmdiv" style="display:none;position:absolute;left:40%; top:25%;width:400px;height:200px;background-image:url(http://static2.kouyu100.com/images/public/tishi400-200.png);border:2px solid #bbc7c7;">
<div class="" style="font-family:微软雅黑;font-size:18px;margin-top:50px;line-height:26px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;目前您的邮箱为空，为了您的账号安全，建议您补充邮箱信息。您是否需要补充邮箱？</div>

<div class="" style="font-family:微软雅黑;font-size:18px;margin-top:20px;line-height:26px;">&nbsp;&nbsp;&nbsp;<input type="checkbox" id='flags'>&nbsp;不再提示</div>
<div class="" style="text-align:center;margin-top:20px;line-height:26px;font-family:微软雅黑;font-size:14px;"><input type="button" value="是" onclick="yesclick()" style="font-size:14px;width:100px"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" value="不需要，谢谢" style="font-size:14px;width:100px" onclick="noclick()"></div> 
</div>
<div class="" id="theFirst" style="display:none;position:absolute;left:40%; top:25%;width:400px;height:200px;background-image:url(http://static2.kouyu100.com/images/public/tishi400-200.png);border:2px solid #bbc7c7;">
<div class="" style="font-family:微软雅黑;font-size:17px;margin-top:50px;line-height:26px;"><div id='hello' style="margin-top:-10px;"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;请先在个人空间填写个人信息，修改密码，填写家长报告信息，并个性化头像</div>

<div class="" style="font-family:微软雅黑;font-size:18px;margin-top:20px;line-height:26px;"></div>
<div class="" style="text-align:center;margin-top:20px;line-height:26px;font-family:微软雅黑;font-size:14px;"><input type="button" value="确认" style="font-size:14px;width:100px" onclick="gotod()"/></div> 
</div>


<div class="yjfk" style="display:none;position:fixed;left:32%; top:10%;color: #282725;font-family:'宋体';font-size: 13px;line-height: 24px;z-index:10010;" id="feedback">

<div class="yjfk_1"><a href="#" onclick="document.getElementById('feedback').style.display='none';document.getElementById('iframe_bj').style.display='none'"><img src="http://static2.kouyu100.com/images/public/colose.png" /></a></div>
<div class="biaoge" id="biaoge">
  		<form action="subSuggest.action" id="feedbackFrom" method="post">
  <table width="465" border="0" align="center" cellpadding="0" cellspacing="0" style="text-align:left">
  <tr>
  	<td>
  			<table style="float:left;">
  				<tr>
			      <td align="right" width="25%" style="line-height:35px;">添加文件：</td>
			      <td><a href="javascript:void(0);" class="files" id="idFile"></a> <img id="idProcess" style="display:none;" src="" /></td>
			    </tr>
			    <tr>
			        <td colspan="2">
			        <table border="0" cellspacing="0">
			            <tbody id="idFileList">
			            </tbody>
			          </table></td>
			      </tr>
			      <tr>
			        <td colspan="2" style="color:gray">温馨提示：最多可同时上传 <b id="idLimit"></b> 个文件，只允许上传 <b id="idExt"></b> 文件。 </td>
			      </tr>
			      
  			</table>
  		
  	</td>
  </tr>
  <tr>
  	<td>
  		<table>
		    <tr>
		      <td  width="90" height="40" style="border-bottom:none"><div align="left" style=" margin: 0 auto;padding: 0;">您的<br/>
		        意见 :</div></td>
		      <td height="40" style="border-bottom:none"><textarea name="suggest" id="suggest" class="ck" ></textarea></td>
		    </tr>
		 
		    <tr>
		      <td width="90" style="border-bottom:none"><div align="left">电子<br/>邮件：</div></td>
		      <td style="text-align:left;margin-left:5px;border-bottom:none">
		        <input type="text" name="suggestEmail" id="suggestEmail" class="tz"/>
		      </td>
		    </tr>
		    <tr>
		      <td width="90" style="border-bottom:none"><div align="left">电话<br/>号码：</div></td>
		      <td style="text-align:left;margin-left:5px;border-bottom:none">
		        <input type="text" name="sugPhone" id="sugPhone" class="tz"/>
		        <input type="hidden" name="collect" id="collect" />
		      </td>
		    </tr>
		     
		     <tr>
					<td colspan="2" align="center" id="idMsg">			 
						<div id="idMsgPrompt"></div>
						<div id="idMsgControl">
						<input type="button" value="提交 " class="changk2" id="idBtnupload"  />
						&nbsp;&nbsp;&nbsp;
						<input type="button" name="Submit2" value="取消" class="changk2" onclick="document.getElementById('feedback').style.display='none';document.getElementById('iframe_bj').style.display='none'"/>
						<input type="hidden" value="全部取消" id="idBtndel" disabled="disabled" />
	 					</div>
			<!----></td>
			      </tr>
		     <!--<tr>
		    <td height="20" style="border-bottom:none">&nbsp;</td>
		    <td height="20" style="border-bottom:none"><input type="button" name="Submit" value="提交" class="changk" onclick="submits()"/>
		      　      
		    <input type="button" name="Submit2" value="取消" class="changk2" onclick="document.getElementById('feedback').style.display='none'"/></td>
		  </tr>--> 
		  </table>
  	</td>
  </tr>
  </table>
		  </form>
</div>
<script type="text/javascript" src="https://static2.kouyu100.com/js/fileUpload.js"></script>
<script language="javascript">
function setSugEmail(){
	if(sugEmail!="undefined"&&sugEmail!="null"){
		document.getElementById("suggestEmail").value=sugEmail;
	}
	if(sugPhone!="undefined"&&sugPhone!="null"){
		document.getElementById("sugPhone").value=sugPhone;
	}
}

function _uFlash() {
	var f = "-", n = navigator;
	if (n.plugins && n.plugins.length) {
	    for (var ii = 0; ii < n.plugins.length; ii++) {
	          if (n.plugins[ii].name.indexOf('Shockwave Flash') != -1) {
	              f = n.plugins[ii].description.split('Shockwave Flash ')[1];
	              break;
	         }
	    }
	} else if (window.ActiveXObject) {
	     for (var ii = 10; ii >= 2; ii--) {
	        try {
	           var fl = eval("new ActiveXObject('ShockwaveFlash.ShockwaveFlash." + ii + "');");
	           if (fl) {
	               f = ii + '.0';
	              break;
	           }
	        } catch (e) {
	       }
	   }
	}
	return f;
	}

	$("#flashIds").html(_uFlash()); 
	
</script>


</div>
<iframe id="iframe_bj" frameborder="no" style="position: fixed; width:559px; height:546px;left: 32%; background:#fff;display:none;top: 10%; color: rgb(40, 39, 37); font-family: 宋体;font-size: 13px; line-height: 24px; z-index: 100;"></iframe>
<div class="qzxx" style="display:none;position:absolute;left:32%; top:15%;color: #282725;font-family:'宋体';font-size: 13px;line-height: 24px;z-index:10010;" id="artificialhelp">

<div class="yjfk_1 fd"><a href="#" onclick="document.getElementById('artificialhelp').style.display='none'"><img src="http://static2.kouyu100.com/images/public/colose.png" /></a></div>
<div class="biaoge" id="biaoge2">
  		<form action="subSuggest.action" id="artificialhelpFrom" method="post">
  <table width="465" border="0" align="center" cellpadding="0" cellspacing="0" style="text-align:center">
  <tr>
  	<td>
  			<table style="float:left;">
  				<tr>
			      <td align="left" width="25%" style="line-height:35px;">添加文件：</td>
			      <td><a href="javascript:void(0);" class="files" id="idFile2"></a> <img id="idProcess2" style="display:none;" src="" /></td>
			    </tr>
			    <tr>
			        <td colspan="2">
			        <table border="0" cellspacing="0">
			            <tbody id="idFileList2">
			            </tbody>
			          </table></td>
			      </tr>
			      <tr>
			        <td colspan="2" style="color:gray">温馨提示：最多可同时上传 <b id="idLimit2"></b>个文件。 </td>
			      </tr>
			      
  			</table>
  		
  	</td>
  </tr>
  <tr>
  	<td>
  		<table>
		    <tr>
		      <td  width="90" height="40" style="border-bottom:none"><div align="left" style=" margin: 0 auto;padding: 0;">求助<br/>
		        信息:</div></td>
		      <td height="40" style="border-bottom:none"><textarea name="suggest2" id="suggest2" class="ck" ></textarea></td>
		    </tr>
		 
		    <tr>
		      <td width="90" style="border-bottom:none"><div align="left">电子<br/>邮件：</div></td>
		      <td style="text-align:left;margin-left:5px;border-bottom:none">
		        <input type="text" name="suggestEmail2" id="suggestEmail2" class="tz"/>
		      </td>
		    </tr>
		    <tr>
		      <td width="90" style="border-bottom:none"><div align="left">电话<br/>号码：</div></td>
		      <td style="text-align:left;margin-left:5px;border-bottom:none">
		        <input type="text" name="sugPhone2" id="sugPhone2" class="tz"/>
		        <input type="hidden" name="collect2" id="collect2" />
		      </td>
		    </tr>
		     
		     <tr>
					<td colspan="2" align="center" id="idMsg">			 
						<div id="idMsgPrompt2"></div>
						<div id="idMsgControl2">
						<input type="button" value="提交 " class="changk2" id="idBtnupload2"  />
						&nbsp;&nbsp;&nbsp;
						<input type="button" name="Submit2" value="取消" class="changk2" onclick="document.getElementById('artificialhelp').style.display='none'"/>
						<input type="hidden" value="全部取消" id="idBtndel2" disabled="disabled" />
	 					</div>
			<!----></td>
			      </tr>
		     <!--<tr>
		    <td height="20" style="border-bottom:none">&nbsp;</td>
		    <td height="20" style="border-bottom:none"><input type="button" name="Submit" value="提交" class="changk" onclick="submits()"/>
		      　      
		    <input type="button" name="Submit2" value="取消" class="changk2" onclick="document.getElementById('feedback').style.display='none'"/></td>
		  </tr>--> 
		  </table>
  	</td>
  </tr>
  </table>
		  </form>
</div>
<script type="text/javascript" src="https://static2.kouyu100.com/js/fileUpload2.js"></script>
<script language="javascript">
function setSugEmail2(){
	if(sugEmail!="undefined"&&sugEmail!="null"){
		document.getElementById("suggestEmail2").value=sugEmail;
	}
	if(sugPhone!="undefined"&&sugPhone!="null"){
		document.getElementById("sugPhone2").value=sugPhone;
	}
}

function _uFlash() {
	var f = "-", n = navigator;
	if (n.plugins && n.plugins.length) {
	    for (var ii = 0; ii < n.plugins.length; ii++) {
	          if (n.plugins[ii].name.indexOf('Shockwave Flash') != -1) {
	              f = n.plugins[ii].description.split('Shockwave Flash ')[1];
	              break;
	         }
	    }
	} else if (window.ActiveXObject) {
	     for (var ii = 10; ii >= 2; ii--) {
	        try {
	           var fl = eval("new ActiveXObject('ShockwaveFlash.ShockwaveFlash." + ii + "');");
	           if (fl) {
	               f = ii + '.0';
	              break;
	           }
	        } catch (e) {
	       }
	   }
	}
	return f;
	}

	$("#flashIds").html(_uFlash()); 
	
</script>

</div>

<div id="posbox" style="display:none;position: absolute; top: 0px; left: 0px; z-index: 2147483647; width: 1173px; height: 270px; background-color: black; opacity: 0.3;"></div>
<div id="qqbox" class="WPA3-CONFIRM" style="display:none;position: absolute;top:50%;left:50%;margin-left:-100px; margin-top:-120px; position: fixed;z-index: 2147483647;">
<h3 class="WPA3-CONFIRM-TITLE">会话提示</h3>
<div class="WPA3-CONFIRM-CONTENT">请确认是否发起QQ会话？</div>
<div class="WPA3-CONFIRM-PANEL">
<a class="WPA3-CONFIRM-BUTTON WPA3-CONFIRM-BUTTON-FOCUS" href="javascript:showQQBoxYes();">
<span class="WPA3-CONFIRM-BUTTON-PADDING WPA3-CONFIRM-BUTTON-LEFT"></span>
<span class="WPA3-CONFIRM-BUTTON-TEXT">是</span>
<span class="WPA3-CONFIRM-BUTTON-PADDING WPA3-CONFIRM-BUTTON-RIGHT"></span></a>
<a class="WPA3-CONFIRM-BUTTON" href="javascript:showQQBoxNo();">
<span class="WPA3-CONFIRM-BUTTON-PADDING WPA3-CONFIRM-BUTTON-LEFT"></span>
<span class="WPA3-CONFIRM-BUTTON-TEXT">否（网页聊天）</span>
<span class="WPA3-CONFIRM-BUTTON-PADDING WPA3-CONFIRM-BUTTON-RIGHT"></span>
</a>
</div>
<div class="WPA3-CONFIRM-CLOSE" onclick="closeQQbox();">
</div>
</div>

<!-- 客服提示的改造 -->
<style type="text/css">
a,img{border:0;}
/* online */
#online_qq_tab a,.onlineMenu h3,.onlineMenu li.tli,.newpage{background:url(http://static2.kouyu100.com/images2/qqtip/float_s2.png) no-repeat;}
#online_qq_tab a,.onlineMenu h3,.onlineMenu li.tli2,.newpage{background:url(http://static2.kouyu100.com/images2/qqtip/float_s2.png) no-repeat;}


#online_qq_tab a,.onlineMenu h3,.onlineMenu li.tli,.newpage2{background:url(http://static2.kouyu100.com/images2/qqtip/float_s2.png) no-repeat;} 
#online_qq_tab a,.onlineMenu h3,.onlineMenu li.tli,.newpage3{background:url(http://static2.kouyu100.com/images2/qqtip/float_s2.png) no-repeat;} 
#online_qq_tab a,.onlineMenu h3,.onlineMenu li.tli,.newpage4{background:url(http://static2.kouyu100.com/images2/qqtip/float_s2.png) no-repeat;}
#onlineService,.onlineMenu,.btmbg{background:url(http://static2.kouyu100.com/images2/qqtip/float_bg.png) no-repeat;}

#online_qq_layer{ position:fixed;right:-130px;top:0;margin:160px 0 0 0; z-index: 999;}
#online_wx_layer{ float:left; width:0px; overflow: hidden;}

.fleft{float: left; width: 28px;}
#onlineServiceWx, .MenuWx, .btmbgWx{ background:url(http://static2.kouyu100.com/images2/qqtip/float_bg.png) no-repeat;}
#onlineServiceWx{ background-position:0 0; float:left; width:130px; padding:10px 0 0; font-family:Microsoft YaHei;}
#online_wx_tab{ background:url(http://static2.kouyu100.com/images2/qqtip/kf_wx_hidden.png) no-repeat; float:left; margin-top:10px; width:28px; height:118px; position:relative; z-index:10;}
.MenuWx{background-position:-262px 0; background-repeat:repeat-y; padding:0 10px}
.MenuWx .blue{ color:#00a0e9; font-size:14px; padding-top:20px;}
.MenuWx .img{margin-top:15px;}
.MenuWx .wx_txt{margin-top:15px; color:#2b2b2b; font-size:12px; line-height:18px; padding-bottom:40px;}
.btmbgWx{background-position:-131px 0; height:12px; overflow:hidden;}
/*通用*/
.clearfix:after{content:".";display:block;height:0;clear:both;visibility:hidden;line-height:0;}
.clearfix{zoom:1;}
.clear{clear:both;}

/* *html,*html body{background-image:url(about:blank);background-attachment:fixed;} */
*html #online_qq_layer{position:absolute;top:expression(eval(document.documentElement.scrollTop));}

#online_qq_tab{width:28px;float:left;margin:30px 0 0 0;position:relative;z-index:9;}
#online_qq_tab a{display:block;height:118px;line-height:999em;overflow:hidden;}
#online_qq_tab a#floatShow{background-position:-30px -374px;}
#online_qq_tab a#floatHide{background-position:0 -374px;}

#onlineService{display:inline;float:left;width:130px;background-position:0 0;padding:10px 0 0 0;}
.onlineMenu{background-position:-262px 0;background-repeat:repeat-y;padding:0 15px;}
.onlineMenu h3{height:36px;line-height:999em;overflow:hidden;border-bottom:solid 1px #ACE5F9;}
.onlineMenu h3.tQQ{background-position:0px 10px;}
.onlineMenu h3.tele{background-position:0 -52px;}
.onlineMenu h3.tele_eim{background-position:0 -293px;height:22px;}
.onlineMenu h3.tele_tech{background-position:0 -327px;height:22px;margin-top: 4px;}
.onlineMenu li{height:36px;line-height:36px;*line-height:6px;border-bottom:solid 1px #E6E5E4;text-align:center;}
.onlineMenu li.tli{padding:0 0 0 23px;font-size:13px;text-align:left;}
.onlineMenu li.tli2{padding:0 0 0 7px;font-size:12px;text-align:left;}
:root .onlineMenu li.tli2{padding:0 0 0 11px;font-size:12px;text-align:left;}
.onlineMenu li.zixun{background-position:-3px -131px;}
.onlineMenu li.fufei{background-position:0px -190px;}
.onlineMenu li.phone{background-position:-5px -244px;height:35px;line-height:16px;}

.onlineMenu li a.newpage{display:block;height:33px;line-height:999em;overflow:hidden;background-position:5px -105px;}
.onlineMenu li a.newpage2{display:block;height:33px;line-height:999em;overflow:hidden;background-position:4px -166px;}
.onlineMenu li a.newpage3{display:block;height:33px;line-height:999em;overflow:hidden;background-position:4px -82px;}
.onlineMenu li a.newpage4{display:block;height:27px;line-height:999em;overflow:hidden;background-position:4px -30px;}
.onlineMenu li img{margin:6px 0 0 0;}
.onlineMenu li.last{border:0;}

/*.wyzx{padding:8px 0 0 5px;height:57px;overflow:hidden;background:url(http://static2.kouyu100.com/images2/qqtip/webZx_bg.jpg) no-repeat;}*/

.btmbg{height:12px;overflow:hidden;background-position:-131px 0;}
</style>

<div style="clear: both;"></div>


<div id="online_qq_layer">
	
	<div class='fleft clearfix'>
		<div id="online_qq_tab">
			<a id="floatShow" style="display:block;" href="javascript:void(0);">收缩</a> 
			<a id="floatHide" style="display:none;" href="javascript:void(0);">展开</a>
		</div>
		<div id="online_wx_tab"></div>
	</div>
	<div id='online_wx_layer'>
	
		<div id="onlineServiceWx">
	  	  	<div class="MenuWx">
	       	<div class="blue">口语100微信客服</div>
	           <div class="img">
				
	           <img src="http://static2.kouyu100.com/images2/qqtip/wx_ewm.jpg" width="106" height="106">
	           
				</div>
	           <div class="wx_txt">
	               使用微信“扫一扫”<br>
	               扫描上方二维码进入<br>
	               手机咨询页面<br>
	               在页面右上角点击进<br>
	               入菜单可以进行收藏<br>
	           </div>
	     	</div>
	       <div class="btmbgWx"></div>
	   </div>
	</div>
	<div id="onlineService">
	
		<div class="onlineMenu" >
	
		<!-- <div class="onlineMenu" > -->
			<h3 class="tQQ">QQ在线客服</h3>
			<ul>
				<!-- <li class="tli zixun"><a href="javascript:showQQBox();">在线咨询</a></li> -->
				
				<li><a href="#" onclick="showQQBox2()"><img src="http://static2.kouyu100.com/images2/wykf.png" width="74" height="22"/></a></li>
				
			</ul>
		</div>
	 <!--  <div class="wyzx">
			<a href="#" onclick="window.open('http://www.53kf.com/company.php?arg=kuyou100&style=1','_blank','height=473,width=703,fullscreen=3,top=200,left=200,status=yes,toolbar=no,menubar=no,resizable=no,scrollbars=no,location=no,titlebar=no,fullscreen=no');">
			<img src="http://static2.kouyu100.com/images2/qqtip/right_float_web.png" width="122" height="50" alt="网页咨询" />
			</a>
		</div>-->
		
		
			
				<div class="onlineMenu">
				<h3 class="tele">客服热线</h3>
				<ul>
					<li class="tli2 phone"><div><span id="phoneNum"></span></div></li>
					<li class="last"><a class="newpage" href="#"  title="意见反馈" onclick="document.getElementById('feedback').style.display='';document.getElementById('iframe_bj').style.display='block';">意见反馈</a></li>
					<li class="last"><a class="newpage2" href="#" onclick="help();"  title="帮助">帮助</a></li>
					<li class="last"><a class="newpage3" href="#" onclick="diagnosisTools();"  title="诊断工具">诊断工具</a></li>
					<li class="last"><a class="newpage4" href="#" onclick="localQuicken();"  title="本地加速">本地加速</a></li>
				</ul>
				</div>
			
		
		
		
		<div class="btmbg"></div>
	</div>
</div>


<!--暑假提示批阅窗  -->
<div id="summerHolidayPrompt"></div>
<!--贺卡提示窗  -->
<div id="cardPrompt"></div>
<!--教师积分提示窗  -->
<div id="TeacherIntegralPrizesPrompt"></div>
<!--家长通二维码提示框  -->
<div id="tipHomeschool"></div>
<!-- 诊断工具下载 -->

<input type="hidden" id="catchDomain" name="curDomain.id" value="wzsyczx"/>
<input type="hidden" id="catchUserId" name="curUser.id" value="171923"/>
<input type="hidden" id="dType" name="curDomain.domainType" value="1"/>
<input type="hidden" id="pFlay" name="curUser.payFlag" value="1"/>
<input type="hidden" id="buyTypes" name="curDomain.buyTypes" value="1"/>
<input type="hidden" id="provinceMatch" name="curDomain.provinceMatch" value="null"/>

<!-- <div id="newFun" style="width:140px;height:172px;position: fixed;right: 28px;top: 0;cursor:pointer; z-index: 9999;margin-top:200px;background:url(http://static2.kouyu100.com/images/customer/greetcard/shdt.png) no-repeat">
	<a href="gotoShowNewFunction.action" style="display:block;width:140px;height:172px;"></a>
</div>  -->
<script type="text/javascript">
var userId = $("#catchUserId").val();//userid
if(userId == ''){//某些页面没有userId，将其赋值
	userId = '';
}

function isHaveCookie(lcookie){//判断是否含有cookie值，含有返回cookie值，不含有返回0.
	var allCookie1 = document.cookie;
	var arrCookie1 = allCookie1.split("; ");
	for(var i=0;i<arrCookie1.length;i++){
	var arrNode=arrCookie1[i].split("=");
	if(arrNode[0]==lcookie)return arrNode[1];
	}
	return 0;
}

//写入在线客服cookie
function createOnLineQQLayerCookie(){
	var itimes = isHaveCookie("online_qq_layer_"+userId);
	var times = itimes+"2";
	var date = new Date();	
	date.setTime(date.getTime()+7*24*3600*1000);
	document.cookie="online_qq_layer_"+userId+"="+times+"; expires="+date.toGMTString();
}

//删除在线客服cookie
function delOnLineQQLayerCookie(){
	var itimes=isHaveCookie("online_qq_layer_"+userId); 
	var date = new Date();	
	date.setTime(date.getTime()-7*24*3600*1000);
	if (itimes != null) {
		
		document.cookie="online_qq_layer_"+userId+"="+itimes+"; expires="+date.toGMTString();
	}
}

//写入在线客服cookie
function createDiagnosisToolsCookie(){
	var itimes = isHaveCookie("diagnosisTools_"+userId);
	var times = itimes+"2";
	var date = new Date();	
	date.setTime(date.getTime()+7*24*3600*1000);
	document.cookie="diagnosisTools_"+userId+"="+times+"; expires="+date.toGMTString();
}

//删除在线客服cookie
function delDiagnosisToolsCookie(){
	var itimes=isHaveCookie("diagnosisTools_"+userId); 
	var date = new Date();	
	date.setTime(date.getTime()-7*24*3600*1000);
	if (itimes != null) {
		
		document.cookie="diagnosisTools_"+userId+"="+itimes+"; expires="+date.toGMTString();
	}
}

//删除未添加userId的空cookie
function delNullCookie(){
	var itimes1=isHaveCookie("online_qq_layer_"); 
	var itimes2=isHaveCookie("diagnosisTools_"); 
	var date = new Date();	
	date.setTime(date.getTime()-7*24*3600*1000);
	if (itimes1 != null&&itimes2 !=null) {
		document.cookie="online_qq_layer_="+itimes1+"; expires="+date.toGMTString();
		document.cookie="diagnosisTools_="+itimes2+"; expires="+date.toGMTString();
	}
}

$(function(){
	var w = 1280;
	var cw = window.screen.availWidth;
	if ((isHaveCookie("online_qq_layer_"+userId)==0||isHaveCookie("online_qq_layer_"+userId)==1)&&(isHaveCookie("diagnosisTools_"+userId)==0||isHaveCookie("diagnosisTools_"+userId)==1)) {
		/* if(cw==w||cw<w){
			$("#onlineService").css("display","none");
			$("#floatShow").attr("style","display:block");
			$("#floatHide").attr("style","display:none");
			$("#diagnosisTools").css("display","none");
		}else{
			$("#onlineService").css("display","block");
			$("#floatShow").attr("style","display:none");
			$("#floatHide").attr("style","display:block");
			$("#diagnosisTools").css("display","block");
		} */
		document.cookie="online_qq_layer_"+userId+"=1;";
		document.cookie="diagnosisTools_"+userId+"=1;";
	}
	
});

$(document).ready(function(){
	var hideWx="wzsyczx";
	if (hideWx == "efe100") {
		$("#online_qq_tab").css("margin","100px 0 0");
		$("#online_wx_tab").hide();
	}
	$("#online_qq_tab").mouseenter(function(){
		$("#online_wx_layer").css("width","0");	
		$("#onlineService").css("width","130px");
		if($("#online_wx_layer").width() > 0){
			$("#online_wx_layer").css("width","0");	
			$("#onlineService").css("width","130px");
		}else{
			$("#onlineService").css("width","130px");
			$("#online_qq_layer").stop();
			$("#online_qq_layer").animate({"right": '0px'});
		}
		$("#online_wx_tab").css("background","url(http://static2.kouyu100.com/images2/qqtip/kf_wx_hidden.png) no-repeat");
		$("#floatShow").attr("style","display:none");
		$("#floatHide").attr("style","display:block");
    });
	
	$("#online_wx_tab").mouseenter(function(){
		$("#online_wx_layer").css("width","130px");	
		$("#onlineService").css("width","0");
		if($("#onlineService").width() > 0){
			$("#online_wx_layer").css("width","130px");	
			$("#onlineService").css("width","0px");
		}else{
			$("#online_wx_layer").css("width","130px");
			$("#onlineService").css("width","0");
			$("#online_qq_layer").stop();
			$("#online_qq_layer").animate({"right": '0px'});
		}
		$("#online_wx_tab").css("background","url(http://static2.kouyu100.com/images2/qqtip/kf_wx_open.png) no-repeat");
		$("#floatShow").attr("style","display:block");
		$("#floatHide").attr("style","display:none");
    });
	
    $("#online_qq_layer").mouseleave(function(){
    	$("#online_qq_layer").stop();
        $("#online_qq_layer").animate({"right": '-130px'});
        $("#online_wx_tab").css("background","url(http://static2.kouyu100.com/images2/qqtip/kf_wx_hidden.png) no-repeat");
		$("#floatShow").attr("style","display:block");
		$("#floatHide").attr("style","display:none");
    });
	
	
});
function showQQBox(){
	$("#qqbox").show();
}
function showQQBox2(){
	var d="wzsyczx";
	if (d == "efe100") {
		window.open ('http://wpa.qq.com/msgrd?v=3&uin=1846328119&site=qq&menu=yes','newwindow','height=530,width=600,top=0,left=0,toolbar=no,menubar=no,scrollbars=no, resizable=no,location=no, status=no');	
	} else {
		if(customType != null && customType==1){
			window.open('http://tb.53kf.com/webCompany.php?arg=9005673&style=3');  
		}else{
			window.open('http://tb.53kf.com/webCompany.php?arg=9005673&style=1');  
		}
	}
}
//选择QQ对话
function showQQBoxYes(){
	var d="wzsyczx";
	$("#qqbox").hide();
	if (d == "efe100") {
		window.location.href="http://wpa.qq.com/msgrd?v=3&uin=1846328119&site=qq&menu=yes";
	} else {
		window.location.href="tencent://message/?Menu=yes&amp;uin=938018671&amp;Service=58&amp;SigT=A7F6FEA02730C98894CE41D7BACBA98F739CC1A2AAC7AA2CFF30174F9E177B4AD660143B75B2F96F2F15C30110BE51167FCFF9BF9FC8357CF0A1A0B4EEDCF6363E3E4C0F851BE4A976B9627B46C3C9C448C88963F2AB019E802D25752634A52997A84BA74EE0E01B1CFE7328F5BD9A36A2721548B34CAC9B&amp;SigU=30E5D5233A443AB23B3DB90582A65A648119C0AE775C81F03E6839AC59F12CBC0456644B677081E1";
	}
}
//选择网页对话
function showQQBoxNo(){
	var d="wzsyczx";
	$("#qqbox").hide();
	if (d == "efe100") {
		window.open ('http://wpa.qq.com/msgrd?v=3&uin=1846328119&site=qq&menu=yes','newwindow','height=530,width=600,top=0,left=0,toolbar=no,menubar=no,scrollbars=no, resizable=no,location=no, status=no');
	} else {
	window.open ('http://wpa.b.qq.com/cgi/wpa.php?ln=2&uin=4000160066','newwindow','height=530,width=600,top=0,left=0,toolbar=no,menubar=no,scrollbars=no, resizable=no,location=no, status=no');
	}
}
//关闭QQ提示框
function closeQQbox(){
	$("#qqbox").hide();
}
var domainId="wzsyczx";
function sendKFMail(){
	if(domainId=="kooke"||domainId=="pxjg"){
			window.location.href="mailto:kookekf@xhd.cn";
		}else{
			window.location.href="mailto:cs@kouyu100.com";
		}
}
function help(){
	var url =  "http://047.kouyu100.com:80/"+domainId+"/help.action?domain="+domainId;
	window.location.href = url;
}
function diagnosisTools(){
	var url = "diagnosisTools.action";
	window.location.href = url;
}
function localQuicken(){
	var url = "localQuicken.action";
	window.location.href = url;
}
</script>	
<!-- 客服提示改造完毕 -->

<!--<script type="text/javascript">
function bdStatistics(){
	try{
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F17ef8e1f3e6008819d09009dd8e24448' type='text/javascript'%3E%3C/script%3E"));
	}catch(e){
		}
}
$(document).ready(function(){
	setTimeout(bdStatistics,5000);
	});

</script>-->
<script type="text/javascript">
try{
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F17ef8e1f3e6008819d09009dd8e24448' type='text/javascript'%3E%3C/script%3E"));
setTimeout(hiddenbd,5000);
}catch(e){
	}
	
function hiddenbd(){
	$("body").find("a[target='_blank']").find("img[src='http://eiv.baidu.com/hmt/icon/21.gif']").css({display:"none"});
}

$(".sy_63,.sy_63>a,#flashIds,.browers").css({'font-family':'宋体','color':'#343434'});

var phoneNum = "400-016-0066</br><span style=\"color:red;margin-left:3px;\">(8:00-23:00)</span>";
if(customType != null && customType==1){
	phoneNum = "0512-88869884 </br><span style='color:red;margin-left:3px;'>工作日9点-17点</span><div style='margin-top:5px;line-height:16px;'>400-016-0066</br><span style=\"color:red;margin-left:3px;\">8点-23点</span></div>";
	$(".onlineMenu li.tli2").css("padding","4px 0 0 15px");
	$(".onlineMenu li.tli2").css("height","76px");
	$(".onlineMenu li.tli2").css("width","92px");
	$(".onlineMenu li.tli2").css("background-position","0 0");
	$(".onlineMenu li.phone").css("line-height","18px");
	$(".onlineMenu li.tli2").css("background","url(http://static2.kouyu100.com/images2/qqtip/telc.png) no-repeat left center");
}
document.getElementById('phoneNum').innerHTML = phoneNum;

</script>


		</div>
		<div id="logDiv"
		style="width: 400px; height: 200px; color: #ff0000; padding-left: 10px; display: none; border: 1px red solid;"></div>
	</div>	
	<div id="wordFlash" style="z-index: 10005;">
			<object height="1" width="6" class='flashhidden' classid='clsid:d27cdb6e-ae6d-11cf-96b8-444553540000' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=11,0,0,0' id='ppp' align='middle'>
				<param name='allowScriptAccess' value='always'>
				<param name='allowFullScreen' value='false'>
				<param name='movie' value='/flash/index/ChoosePicByWord.swf'>
				<param name='wmode' value='transparent'><param name='quality' value='high'>
				<embed class='flashShow2' height="1" width="6" src='/flash/index/ChoosePicByWord.swf' quality='high' wmode='transparent' name='ppp' allowscriptaccess='true' id='ppp' allowfullscreen='false' type='application/x-shockwave-flash' pluginspage='http://www.macromedia.com/go/getflashplayer' align='middle'>
			</object>
		</div>
</body>
<script language="JavaScript" type="text/javascript">
	allowToResize = 1;
</script>
</html>
