var past_upload_processing=0;function paste_upload_init(b){if("undefined"!=typeof b.clipboardData)for(var a=0;a<b.clipboardData.items.length;a++){var c=b.clipboardData.items[a];if(0==c.type.indexOf("image")){if("undefined"==typeof chats[ces]||!chats[ces].status||chats[ces].disconnected)return isop&&do_alert(0,"A chat session must be active."),!1;past_upload_processing=1;$("#chat_processing").show();paste_upload_doit(c.getAsFile())}}}
function paste_upload_doit(b){var a=new XMLHttpRequest,c=b.type;c=c.replace(/image\//,"");var d=randomstring(6)+"."+c;a.upload.onprogress=function(a){};a.onload=function(){if(200==a.status){var b=base_url_full+"/web/file_attach/"+d;conf_extend&&(b=base_url_full+"/web/"+conf_extend+"/file_attach/"+d);upload_success(b,d)}else do_alert(0,"Error uploading clipboard image.");$("#chat_processing").fadeOut("fast");past_upload_processing=0};a.onerror=function(){$("#chat_processing").fadeOut("fast");past_upload_processing=
0;do_alert(0,"Could not connect to server.  Please refresh the console and try again.")};a.open("POST",base_url_full+"/ajax/paste_upload.php?ces="+ces+"&filename="+d,!0);a.setRequestHeader("Content-Type",b.type);a.send(b)};