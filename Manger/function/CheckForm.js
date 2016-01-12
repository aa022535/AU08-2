function jsTrim(str) 
	{ 
	var startp=0; 
	var endp= str.length - 1; 
	if (str.length == 0) return str;
	for (ci=0; ci < str.length; ci++) 
		{ 
		startp++; 
		if (str.charAt(ci) != " ") { startp--; break; } 
		} 
	if (startp == str.length) { return ""; } 
	for (ci=str.length-1; ci >= 0; ci--) 
		{ 
		endp--; 
		if (str.charAt(ci) != " ") { endp++; break; } 
		} 
	return str.substring(startp, endp+1); 
	}

//判斷上傳檔案類型
function FileNameChk(FileName,FileType)
	{
	//FileName 檔名
	//FileType 附檔名陣列 Array('jpg','jpeg','gif','png')
	//若符合其中一種則傳回 true 
	if (FileName == "") return true;
	flag = false;
	for(i=0;i<FileType.length;i++)
		{
		if(FileName.toLowerCase().lastIndexOf(FileType[i].toLowerCase(),FileName.length) == FileName.length - FileType[i].length)
			{
			flag = true;
			break;
			}
		}
	return flag;
	}

//判斷輸入資料是否為數字
function ChkNaN(OName,Ovalue,Omsg,Onum) //欄位名稱,欄位值,欄位Label,判斷輸入位數
	{
	if (ChkImp(OName,Ovalue,Omsg) == false) return false;
	if (isNaN(Ovalue) == true)
		{
		alert ('您輸入的 ' + Omsg + ' 需為數字 !!');
		document.getElementById(OName).focus();
		document.getElementById(OName).select();
		return false;
		}
	if (jsTrim(Onum) != '')
		{
		if (Ovalue.length != parseInt(Onum))
			{
			alert ('您輸入的 ' + Omsg + ' 需為 ' + Onum + ' 位數 !!');
			document.getElementById(OName).focus();
			document.getElementById(OName).select();
			return false ; 
			}
		}
	}

//判斷是否為正確的 E-Mail
function ChkEmail(OName,Ovalue,Omsg) //欄位名稱,欄位值,欄位Label
	{
	if (ChkImp(OName,Ovalue,Omsg) == false) return false;
	var str1=Ovalue;
	if ((str1.indexOf("@")<0) ||(str1.indexOf(".")<0) )
		{
		alert('您輸入的 ' + Omsg + ' 不正確！！');
		document.getElementById(OName).focus();
		document.getElementById(OName).select();
		return false;
		}
	}

//判斷身分證字號是否為正確(簡易版)
function ChkIDNO(OName,Ovalue,Omsg) //欄位名稱,欄位值,欄位Label
	{
	if (ChkImp(OName,Ovalue,Omsg) == false) return false;
	re = /^[A-Za-z]\d{9}$/ ;
	if (!re.test(Ovalue))
		{
		alert ('您輸入的 ' + Omsg + ' 錯誤 !!');
		document.getElementById(OName).focus();
		document.getElementById(OName).select();
		return false ; 
		}
	}

//判斷身分證字號是否為正確
function ChkPID(OName,Ovalue,Omsg) { //欄位名稱,欄位值,欄位Label
	var gsALP = "ABCDEFGHJKLMNPQRSTUVXYWZIO";
	var xMsg = "正確";
	Ovalue = jsTrim(Ovalue.toUpperCase());
	var iCheckPIDLen = String(Ovalue).length;
	var i=0;
	var xAlpNum=0;

	if (iCheckPIDLen!=10)
		{
		xMsg = '您輸入的 ' + Omsg + ' 錯誤 !!';
		}
	else
		{
		var xCheck = gsALP + "0123456789";
		for(i=0;i<iCheckPIDLen;i++)
			{
			if (xCheck.indexOf(Ovalue.substr(i,1))==-1)
				{
				xMsg = '您輸入的 ' + Omsg + ' 錯誤 !!';
				break;
				}
			}
		}

	if ("正確" == xMsg)
		{
		xAlpNum = gsALP.indexOf(Ovalue.substr(0,1));
		if (xAlpNum==-1)
			{
			xMsg = '您輸入的 ' + Omsg + ' 錯誤 !!';
			}
		else
			{
			xAlpNum += 10;
			if ((Ovalue.indexOf("1")!=1) && (Ovalue.indexOf("2")!=1))
				{
				xMsg = '您輸入的 ' + Omsg + ' 錯誤 !!';
				}
			}
		}

	if ("正確" == xMsg)
		{
		xAlpNum = (xAlpNum-xAlpNum%10)/10 + (xAlpNum%10*9);

		i=1;
		while (i<iCheckPIDLen-1)
			{
			xAlpNum += Ovalue.substr(i,1) * (9-i);
			i++;
			}

		var iLastNum = Ovalue.substr(9,1)*1;
		xAlpNum += iLastNum;

		if ((xAlpNum % 10) !=0)
			{
			xMsg = '您輸入的 ' + Omsg + ' 錯誤 !!';
			for (i=0;i<10;i++)
				{
				var xRightAlpNum = xAlpNum - iLastNum + i;
				if ((xRightAlpNum % 10) ==0) {
					}
				}
			}
		}

	if (jsTrim(xMsg) == '正確')
		{
		return true;
		}
        else
        	{
		alert(xMsg);
	        document.getElementById(OName).focus();
	        document.getElementById(OName).select();
	        return false;
        	}
	}

//判斷是否有輸入資料
function ChkImp(OName,Ovalue,Omsg) //欄位名稱,欄位值,欄位Label
	{
	if (jsTrim(Ovalue) == '')
		{
		alert ('請輸入 ' + Omsg + ' !!');
		document.getElementById(OName).focus();
		document.getElementById(OName).select();
		return false;
		}
	}

//判斷是否為正確日期
function ChkDate(OName,Dyear,Dmonth,Dday,Omsg) //欄位名稱,年欄位值,月欄位值,日欄位值,欄位Label
	{
	if (ChkImp(OName,Dyear,Omsg) == false) return false;
	var sDate;
	Dmonth = Dmonth - 0;
	Dday = Dday - 0;
	sDate = Dyear + "/" + Dmonth + "/" + Dday;
	var dScrap = new Date(sDate);
	if (dScrap == "NaN")
		{
		alert('您輸入的 ' + Omsg + ' 錯誤 !!');
		document.getElementById(OName).focus();
		return false;
		}
	else
		{
		var st = new String(sDate)
		yea=st.substring(0,4)
		mon=st.substring(st.indexOf("/")+1,st.indexOf("/",st.indexOf("/")+1))
		da=st.substring(st.indexOf("/",st.indexOf("/")+1)+1,st.length)
		if((parseInt(yea) < 1899) || (parseInt(yea) > 2099))
			{
			alert('您輸入的 ' + Omsg + ' 錯誤 !!');
			document.getElementById(OName).focus();
			return false;
			}
		if((parseInt(mon) < 1) || (parseInt(mon) > 12))
			{
			alert('您輸入的 ' + Omsg + ' 錯誤 !!');
			document.getElementById(OName).focus();
			return false;
			}
		if (parseInt(da) < 1)
			{
			alert('您輸入的 ' + Omsg + ' 錯誤 !!');
			document.getElementById(OName).focus();
			return false;
			}
		if(((parseInt(mon) == 1) || (parseInt(mon) == 3) || (parseInt(mon) == 5) || (parseInt(mon) == 7) || (parseInt(mon) == 8) || (parseInt(mon) == 10) || (parseInt(mon) == 12)) && (parseInt(da) > 31))
			{
			alert('您輸入的 ' + Omsg + ' 錯誤 !!');
			document.getElementById(OName).focus();
			return false;
			}
		if(((parseInt(mon) == 2) || (parseInt(mon) == 4) || (parseInt(mon) == 6) || (parseInt(mon) == 9) || (parseInt(mon) == 11) ) && (parseInt(da) > 30))
			{
			alert('您輸入的 ' + Omsg + ' 錯誤 !!');
			document.getElementById(OName).focus();
			return false;
			}
		if(parseInt(mon) == 2)
			{
			if(((parseInt(yea) % 4) == 0) && (parseInt(da) > 29))
				{
				alert('您輸入的 ' + Omsg + ' 錯誤 !!');
				document.getElementById(OName).focus();
				return false;
				}
			else if((parseInt(yea) % 4 != 0) && (parseInt(da) > 28))
				{
				alert('您輸入的 ' + Omsg + ' 錯誤 !!');
				document.getElementById(OName).focus();
				return false;
				}
			}
		}
	}

//判斷起始日不得小於結束日
function CompareDate(OName,StartYear,StartMonth,StartDay,EndYear,EndMonth,EndDay,Omsg1,Omsg2) //欄位名稱,起始年欄位值,起始月欄位值,起始日欄位值,終止年欄位值,終止月欄位值,終止日欄位值,欄位Label,欄位Labe2
	{
	var StartDate ;
	var EndDate ;

	StartDate = new Date(StartYear,StartMonth,StartDay);
	EndDate = new Date(EndYear,EndMonth,EndDay);
	if (StartDate != '' && EndDate != '')
		{
		if (StartDate > EndDate)
			{
			alert ('您輸入的 ' + Omsg1 + ' 不得大於 ' + Omsg2 + ' ！');
			document.getElementById(OName).focus();
			return false;
			}
		}
	else if (StartDate == '' && EndDate != '')
		{
		alert ('請輸入 ' + Omsg1 + ' ！');
		document.getElementById(OName).focus();
		document.getElementById(OName).select();
		return false;
		}
	else if (StartDate != '' && EndDate == '')
		{
		alert ('請輸入 ' + Omsg2 + ' ！');
		document.getElementById(OName).focus();
		document.getElementById(OName).select();
		return false;
		}
	}

//檢查字串中是否有中文字
function isBig5(str)
	{
	for (i=0;i< str.length;i++)
		{
   		if (str.charCodeAt(i) > 127) return true;  //包含中文字
	   	}
   	return false ; //沒有包含中文字
	} 
