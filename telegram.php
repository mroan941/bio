<?php
/*
Code by :- #Victor
Ch :- @TshAkETeam #1
*/
ob_start();
$API_KEY = '1060156933:AAGAV9Ph_nMVXgF6ByQMRn_CVquFwyZsqe0'; #توكن البوت
$chj = "php88";#معرف قناتك الي يشترك بيه العضو
$sudo = array(175279237,2,3);# ايدي المطورين
//////////////////////
define('API_KEY',$API_KEY);
function bot($method,$datas=[]){
$url = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url); curl_setopt($ch,CURLOPT_RETURNTRANSFER,true); curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
$res = curl_exec($ch);
if(curl_error($ch)){
lvar_dump(curl_error($ch));
}else{return json_decode($res);}}
$msgs = json_decode(file_get_contents('msgs.json'),true);
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$text = $message->text;
$chat_id = $message->chat->id;
$from_id = $message->from->id;
$fn = $message->from->first_name;
$user = $message->from->username;
$st = str_replace("@","", $chj);
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$chj&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"- اهلا بك ؛ $fn
- عليك الاشتراك في القناه اولا، 🔽",
'reply_to_message_id'=>$msid,
'reply_markup' => json_encode(['inline_keyboard' => [
[['text' => "- اضغط هنا،", 'url' => "t.me/$st"]],]])
]);return false;}
if($message){
$u = file_get_contents('users.txt');
$ex = explode("\n",$user);
if(!in_array($from_id,$ex)){
file_put_contents("users.txt",$from_id."\n",FILE_APPEND);}}
if($text == "/start"){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"- اهلا بك ؛ $fn
- يمكنك الان ارسال النص لصنع بايو، 🏷",
'reply_to_message_id'=>$msid,
'reply_markup' => json_encode(['inline_keyboard' => [
[['text' => "• TV •", 'url' => "t.me/$st"]],]])
]);
}
$bio = array("❥•َ⚡️͢ֆ⸽
⠀

            ‏ＢΔ S R A ┆17 Y.O ↴   
  ﴿ ‏ ‏ $text 💛ء","⠀
⠀
⠀



⠀                  I R A Q ┆19 Y.O ↴    
        ﴿ $text ️. 💛۽
⠀
⠀
⠀",

"⠀ ⠀⠀⠀ ⠀⠀⠀ 
⠀⠀
⠀⠀⠀⠀⠀⠀
⠀⠀⠀ ⠀⠀
⠀ ⠀⠀⠀⠀- ᗩGE : 17 Y.O
$text ً.  💛 
⠀ ⠀⠀⠀ ⠀⠀⠀ 
⠀⠀
⠀⠀⠀⠀",

"‎‏⠀
‎‏⠀
‏⠀

⠀⠀
⠀
⠀
⠀
$text . 🥀  
⠀⠀⠀⠀- Unfollow Block ♚ֆ 〞 
⠀
⠀
⠀‎
‏⠀⠀⠀
‎‏⠀",

"‎‏⠀
‎‏⠀
‏⠀

⠀⠀

⠀
⠀
‏‏‏$text 🖤ء
⠀⠀⠀⠀⠀✗ ᗩGE┊19 ✿‏ֆ
 ⠀
⠀
⠀‎
‏⠀⠀⠀
‎‏⠀",

"⠀⠀


⠀⠀
$text 🥀 🚬 
⠀  ⠀   ғollow мe , ғollow вacĸ⠀⠀
⠀⠀⠀⠀⠀⠀┄༻☹️༺┄⠀
⠀⠀⠀⠀⠀ㅤ⠀‏ ‏⠀⠀",

"‎‏⠀
‎‏⠀
‏⠀

⠀⠀

⠀
⠀
- ‏$text ☻. 
⠀⠀⠀⠀⠀- 🇮🇶|| 19 Y.O ❞
 ⠀
⠀
⠀‎
‏⠀⠀⠀
‎‏⠀",

"⠀
⠀
⠀



⠀            ‏ＢΔ S R A ┆17 Y.O ↴    
🖤. $text
⠀
⠀
⠀",

"‎‏⠀
‎‏⠀
‏⠀

⠀⠀

⠀
⠀⠀⠀⠀⠀⠀✗ IR‏ΔQ ˛⁽💛₎⇣    
﴿ ‏‏$text . 🖤‏ء
⠀
⠀
⠀‎
‏⠀⠀⠀
‎‏⠀",

"‎‏⠀
‎‏⠀
‏⠀

⠀⠀

⠀
     ﴿‏ ‏$text🤦🏽‍♀️ً ٰ. 
⠀⠀⠀⠀⠀⠀  𖤍 BASRA - iQ ‏
⠀‎
⠀‎
⠀
⠀‎
",

"‎‏⠀
‎‏⠀
‏⠀

⠀⠀

⠀
⠀
   ‏‏‏$text 🖤ء
⠀⠀⠀⠀⠀✗ ᗩGE┊19 ✿‏ֆ
 ⠀
⠀
⠀‎
‏⠀⠀⠀
‎‏⠀",

"⠀
⠀
⠀
⠀
⠀⠀⠀⠀⠀⠀⠀⠀ ֆ ⁽ ♥ ⁾↵
               

 ⠀          ‹ 🇮🇶 ³¹³ BAGHDAD ›⠀⠀
$text! 🤷🏽‍♀️
⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀
⠀",

"⠀⠀
‏⠀
‏⠀
‏⠀
⠀
⠀⠀⠀⠀⠀
⠀  ⠀⠀                      
⠀⠀⠀⠀•┆BΔGHDΔD 🇮🇶 ‏ֆ 
‏$text 🖤‏.
⠀⠀⠀⠀⠀⠀⠀
‏⠀
⠀
⠀
⠀",

"⠀
⠀
⠀



⠀⠀⠀⠀⠀⠀IRΔQ┆19 Y.O ↴    
⠀
   ﴿ $text 💚.
⠀
⠀
⠀
⠀",

"⠀
⠀
⠀



⠀                  Baghdad ┆15 Y.O ↴    
  ﴿ ‏$text 🖤.
⠀
⠀
⠀",

"⠀
⠀
⠀ 

⠀
⠀
    
 ‏$text  🖤»
 ⠀⠀     ⠀- Bagdad 19Y.O♚ֆ 
⠀

⠀ ⠀
⠀ ⠀",

"⠀
⠀
⠀
⠀
⠀⠀⠀          ⠀⠀➝ IR‏ΔQ ˛⁽ 💙 ₎⇣    
⠀⠀⠀⠀
‏$text 💔.
    ⠀
⠀⠀⠀⠀
⠀
⠀",

"⠀
‏⠀


⠀
⠀ 
⠀⠀⠀⠀⠀❥⁽ AGE┊9 ♚ )
⠀
﴿ $text ❤️.

⠀


⠀",

"⠀
⠀
⠀
⠀
⠀⠀⠀⠀♛ | ؁ ➝🇮🇶
﴿ •  $text 🖤 ֆء
⠀♛ | OFFICIAL ACCOANT
⠀
⠀
⠀
⠀",

"⠀ 
⠀                  ⠀      ↓ ❛
⠀
⠀    ⠀              ﴾   ⠀ ⠀ 
⠀       ♩❥ $text ﴿⠀ ⠀ 
⠀       welcome to my profile 
⠀ 
⠀
⠀⠀⠀",

"⠀⠀


⠀⠀‏“🥀 $text “
   ⠀  ғollow мe , ғollow вacĸ⠀⠀
⠀⠀⠀⠀⠀┄༻☹️༺┄⠀
⠀⠀⠀⠀⠀ㅤ⠀
‏
",

"⠀
⠀
⠀
⠀
⠀⠀⠀⠀⠀⠀♛ | ؁ ➝🇮🇶‏
♥️ $text ♯
⠀⠀⠀♛ | OFFICIAL ACCOANT
⠀
⠀
⠀
⠀",

"⠀ㅤ
ㅤ 
⠀⠀ ㅤ 


⠀ ⠀⠀ ㅤ ㅤ ⠀ㅤ ㅤ ؁ ➝🇮🇶   
$text
⠀ㅤ ✿ωєℓ¢σм тσσмуρяσfιℓє✿

‏⠀⠀⠀
⠀
ㅤ ㅤ 
⠀⠀⠀⠀⠀",

"
⠀
⠀
⠀⠀⠀ ⠀ ⠀⠀⠀⠀⠀⠀⠀↴⠀
⠀⠀❞ᗷᗩS3RAY 🇮🇶|| 21 Y.O ❞
$text
‏﴿ 🌞💧 ﴾

⠀ ⠀⠀ 
⠀⠀",

"⠀
⠀

⠀⠀
⠀
⠀⠀⠀⠀⠀⠀  ⠀┄༻💠༺┄⠀                      
 ﴿ $text ❤️ء  ﴾ 
⠀‏⠀ ⠀ᎳᎬᏞᏟᎾm TO ṃʏ ƿяȏғıʟ
⠀⠀⠀⠀⠀⠀⠀┄༻💠༺┄
⠀
⠀
⠀
⠀",

"⠀‏⠀

⠀‏⠀⠀⠀⠀⠀ ⠀❥ ⁞ ؁  ֆء
‏﴿ $text  ..؟⠀
⠀ ⠀⠀⠀‏⠀ᴡᴇʟᴄᴏᴍ ᴛᴏ ᴍʏ ᴘʀᴏғɪʟ⠀
⠀
⠀
⠀",

"⠀
⠀⠀
⠀⠀
⠀⠀ ⠀ ⠀⠀ ⠀⠀◂◂⠀⠀⠀▮▮⠀⠀⠀▸▸
⠀ ⠀⠀ ⠀ ⠀  |◂ ▬▬▬▬●▬▬ ◂|
⠀ ⠀⠀ ⠀   ➰ $text ➰ 
 ⠀ ❈⁽ From : IRΔQ➢ＢΔＧḤＤΔＤ ❉
⠀",

"⠀
⠀
⠀
⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀❶❽ Ꭹ.Ꭷ
⠀⠀⠀⠀⠀⠀⠀❖┊ᖴᖇOᗰ ᗷᗩᔕᖇᗩ
‏⠀$text ✘✋🏻 ⠀⠀⠀
⠀⠀⠀⠀↬ ❈⁽ шεᴌcσмε тσ мч вяσғ ❁
⠀
⠀
⠀
⠀",

"‏⠀
‏⠀
‏⠀
‏⠀
⠀⠀⠀⠀⠀ ❈ ⁽💛 ✿ ₎❈↴
‏⠀

﴿   $text ❤️
‏⠀‏ ⠀ᎳᎬᏞᏟᎾm TO ṃʏ ƿяȏғıʟ⠀
⠀⠀⠀⠀
‏⠀
‏⠀
‏⠀
⠀",

"⠀⠀


⠀⠀
$text 😴🎷
     ғollow мe , ғollow вacĸ⠀⠀
⠀⠀⠀⠀┄༻☹️༺┄⠀
⠀⠀⠀⠀⠀ㅤ⠀
‏
‏ ‏⠀⠀ 

      ⠀⠀⠀⠀⠀     ⠀⠀⠀⠀⠀⠀",

"⠀ ⠀ ⠀
⠀ ⠀ ⠀

‏⠀⠀ ⠀
⠀  ⠀❆ＩＱ › ＢΔＧḤＤΔＤ ❉‏⠀
‏‏⠀($text ֆ ☺️!)
              ※•┈•ʚ♚ɞ•┈‏​•※
⠀ ⠀ ⠀
⠀ ⠀ ⠀
⠀ ⠀ ⠀
⠀ ⠀ ⠀",

"‏⠀
‏⠀
‏⠀
‏⠀
‏⠀
⠀⠀⠀⠀⠀⠀ ✿┊Y.O:19  ֆ 
$text 💔ء﴾
‏⠀⠀‏⠀⠀⠀┈┉━❀🚶🏻❀━┅┄⠀
‏⠀
‏⠀
",
"⠀
⠀
⠀
⠀
⠀⠀⠀          ⠀⠀➝ IR‏ΔQ ˛⁽ 💙 ₎⇣    
⠀⠀⠀⠀
 $text 💚۽
    ⠀
⠀⠀⠀⠀
⠀
⠀",

"⠀

⠀
⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀ ⠀♛؁17♛
⠀⠀⠀⠀⠀﴾ IQ ﴿ ��🇶  ❥ᗷᗩᔕᖇᗩ⠀
“ $text 🏃
⠀⠀
⠀
⠀
⠀",

"‏⠀
‏⠀
‏⠀
‏⠀
‏⠀
⠀⠀⠀⠀⠀⠀ ✿┊Y.O:19  ֆ 
⠀  ⠀❆ＩＱ › ＢΔＧḤＤΔＤ ❉‏⠀
$text ؟❤️﴾
‏⠀⠀‏⠀⠀⠀┈┉━❀🚶🏻❀━┉┄⠀
‏⠀
‏⠀
",
"⠀
⠀
⠀
⠀
⠀⠀⠀ ⠀⠀➝ IR‏ΔQ ˛⁽ ♥ ₎⇣  
⠀⠀⠀⠀
⠀⠀ $text ⁽✺⃕₎ 
↬  ❈⁽ шεʟcσмε тσ мч вяσғ ❁
‏⠀⠀⠀⠀┄༻💗༺┄       ⠀
⠀⠀⠀⠀
⠀
⠀
⠀",

"⠀
⠀

⠀
⠀
⠀⠀⠀⠀⠀⠀⠀◂◄⠀⠀▮▮⠀⠀▸►
⠀⠀⠀◂⠀━━━━❊━━━━⠀▸
$text ء.
  
⠀
⠀
⠀
⠀",

"⠀ ⠀⠀⠀ ⠀⠀⠀ 
⠀⠀
⠀⠀⠀⠀⠀⠀
⠀⠀⠀ ⠀⠀
⠀ ⠀⠀⠀        ⠀- ᗩGE : 17 Y.O

$text
؛❤
‏
⠀ ⠀⠀⠀ ⠀⠀⠀ 
⠀⠀",

"‎‏ㅤ
‎‏⠀⠀⠀‏ㅤ⠀⠀⠀
‎‏ㅤ
⠀‏
‎‏ㅤ⠀⠀ ⠀     ⠀ ➝ Y.O:18 ֆ 💭  

 $text 🌸₎
‎‏ㅤ
‎‏ㅤ
‎‏ㅤ⠀⠀⠀",);
$bior = array_rand($bio, 1);
if($text && $text !=="/start"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$bio[$bior]",
'reply_to_message_id'=>$msid,]);}

if($text == "users" && in_array($from_id, $sudo)){
$u = file_get_contents('users.txt');
$ex = explode("\n",$u);
$co = count($ex) -1;
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"- عدد الاعضاء ؛ $co",
'reply_to_message_id'=>$msid,]);}
$st2 = str_replace("/send ","$st2", $text);
if($text == "/send $st2" && in_array($from_id,$sudo)){
$u = file_get_contents("users.txt");
$ex = explode("\n", $idchi);
for($c=0;$c<count($ex); $c++){
$bot_url = "https://api.telegram.org/bot$API_KEY/";
$url = $bot_url."sendMessage?chat_id=".$idchl[$c]."&parse_mode=markdown&disable_web_page_preview=true&text=".urlencode($st2);
$sa = file_get_contents($url); }
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"- تم النشر ✓",
'reply_to_message_id'=>$msid,]);}
