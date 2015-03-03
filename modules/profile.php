<?php
?>
<html>
<head>
<title>OMPDAO - Profile page</title>
<link rel="stylesheet" href="../style.css" type="text/css">
</head>
<body>
<table width=100%>
<tr>
<td width=20% valign=top>
Notifications
<br><br>
<textarea>Notifications block</textarea>
<br><br>
<hr>
<br>
For e-mail lovers
<br><br>
<button>To:</button> <button>CC:</button> <button>BCC:</button>
<br><br>
<input name="" value="To: (This field appears if you click on the button To: per Ajax technology)">
<br>
<button>Add</button> <button>Delete</button>
<br><br>
<input name="" value="CC: (This field appears if you click on the button CC: per Ajax technology)">
<br>
<button>Add</button> <button>Delete</button>
<br><br>
<input name="" value="BCC: (This field appears if you click on the button BCC: per Ajax technology)">
<br>
<button>Add</button> <button>Delete</button>
<br><br>
<hr>
<br>
New way of communication
<br><br>
<input name="" value="2/To: person">
<br><br>
<input name="" value="4/For: conversation">
<br><br>
<input name="" value="@ site">
<br><br>
<button>Add</button> <button>Delete</button>
<br><br>
<hr>
<br>
<a href="history_of_communications.php">History of communication</a>
<br><br>
<hr>
<br>
</td>

<td width=60% valign=top>
<h1><u>User</u></h1>
<input type="radio" name="private_user" checked=""> Private <a href="faq/profile/question_n" title="User is not visible in the user database for site users">[?]</a> <input type="radio" name="public_user"> Public <a href="faq/profile/question_n" title="User is visible to everyone in the user database for site users">[?]</a>
<br><br>
<table>
<tr>
<td valign=top>
<img src="../images/user_pic.jpg">
<br>
<button>Delete</button>
</td>
<td valign=top>
<img src="../images/user_pic.jpg">
<br>
<button>Delete</button>
<br>
<button>Make default picture</button>
</td>
<td valign=bottom>
<input type="picture"> <button>Upload</button> <button>Save</button>
</td>
</tr>
</table>

<br>
<b>Password change</b>
<br><br>
<input type="text" name="password"> <input type="text" name="password_repeat"> <button>Change</button>
<br><br>
<b>Private data</b>
<br><br>

<table>
<tr>
<th align=left>
Username: 
</th>
<td>
<b><i>Username</i></b>
</td>
<td>
<button>Change</button>
</td>
</tr>
<tr>
<th align=left>
E-mail:  
</th>
<td><b><i>E-mail</i></b></td>
<td>
<button>Change</button>
</td>
</tr>
<tr>
<th align=left>
Name: 
</th>
<td><b><i>Name</i></b></td>
<td>
<button>Change</button>
</td>
</tr>
<tr>
<th align=left>
Address: 
</th>
<td><b><i>Address</i></b></td>
<td>
<button>Change</button>
</td>
</tr>
<tr>
<th align=left>
Telephone: 
</th>
<td>
<b><i>Telephone</i></b>
</td>
<td>
<button>Change</button>
</td>
</tr>
<tr>
<th align=left>
Mobile: 
</th>
<td><b><i>Mobile</i></b></td>
<td>
<button>Change</button>
</td>
</tr>
</table>
<br>

<b>Visibility</b>
<br><br>

<table>
<tr>
<td>
<input type="radio" name="visible" checked=""> Visible 
<br><br>
<input type="radio" name="everyone"> everyone 
<br><br>
<input type="radio" name="only allowed users" checked=""> only allowed users 
</td>
<td>
<input type="radio" name="invisible"> Invisible
<br><br>
<input type="radio" name="everyone"> everyone
<br><br>
<input type="radio" name="only allowed users"> only allowed users
</td>
</tr>
</table>

<br><br>
<b>Show my online/offline status to</b>
<br><br>
<input type="radio" name="everyone">everyone 
<input type="radio" name="no_one">no one 
<input type="radio" name="only_allowed">only to allowed people
<br><br>
<h1><u>History</u></h1>
<b>Show history of the content entries on your page?</b> <a href="faq/profile/question_n" title="Show/explain to me what's that">[?]</a>
<br><br>
<input type="radio" name="" checked=""> Show <input type="radio" name="public"> Don't show 
<br><br>
<h1><u>Content</u></h1>
<input type="radio" name="private_user"> Private <a href="faq/profile/question_n" title="Content is not visible for other users">[?]</a> <input type="radio" name="private_user" checked=""> Semi-private|semi-public <a href="faq/profile/question_n" title="Content is visible only for allowed people and groups users">[?]</a> <input type="radio" name="public_user"> Public <a href="faq/profile/question_n" title="Content is visible to everyone">[?]</a>
<br><br>
<b>Allow other users to comment to your content entries per default?</b>  <a href="faq/profile/question_n" title="Show/explain to me what's that">[?]</a>
<br><br>
<input type="radio" name="yes" checked="">yes <input type="radio" name="no">no
<br><br>
<button>Save</button> <button>Save & Close</button> <button>Close</button>
<br><br>
<hr>
<br>
<a href="">All public content</a> <a href="">Your subscribed content</a> <a href="">Your own content</a> <a href="">I like it/Starred content</a> <a href="">Favorite content</a>
<br><br>
<hr>
<br>
<textarea>Content block 1</textarea>
<br><br>
Tag1, Tag2, Tag3
<br><br>
Revision 1
<br>
Revision 2
<br>
Revision 3
<br><br>
<hr>
<br>
<textarea>Content block 2</textarea>
<br><br>
Tag1, Tag2, Tag3
<br><br>
Revision 1
<br>
Revision 2
<br>
Revision 3
<br><br>
<hr>
<br>
<textarea>Content block 3</textarea>
<br><br>
Tag1, Tag2, Tag3
<br><br>
Revision 1
<br>
Revision 2
<br>
Revision 3
<br><br>
<hr>
<br>
<input name="search_field" value="Write the title here">
<br><br><br>
<textarea name="search_field">here will be format panel</textarea>
<br><br><br>
<textarea name="search_field">content entry area 
Simply drop the file/link here or write some text or both
</textarea>
<br><br>
<input type="radio" name="private" checked=""> Private <input type="radio" name="public"> Public
<br><br>
Tags: <input name="" value=""> <button>Add</button>
<br><br>
<input name="" value=""> <button>Attach some files</button>
<br><br>
<button>Save draft</button> <button>Save / Send</button>
<br><br>
<a href="additional_settings.php">Additional settings</a>
<br><br>
<button>Save draft</button> <button>Save / Send</button>
</td>

<td width=20% valign=top>
<table>
<tr>
<td align=left>
Username 
</td>
<td>
<input name="username">
</td>
</tr>
<tr>
<td align=left>
Password 
</td>
<td>
<input name="password">
</td>
</tr>
</table>
<button>Login as another user</button> <button>Logout all logged in users</button>
<br><br>
Logged in as <a href="profile.php">"user 1"</a> <button>Logout</button> 
<br>
Logged in as <a href="profile.php">"user 2"</a> <button>Logout</button>
<br><br>
Followers
<br>
<textarea>Here will be list of your followers i.e. users who follow you</textarea>
<br><br>
Following
<br>
<textarea>Here will be the list of users who you're following</textarea>
<br><br>
Search
<br>
<input name="search_field">
<br>
<a href="" title="">Advanced search</a>
<br><br>
Users
<br>
<textarea>Here will be the list of all public/visible users</textarea>
<br><br>
Groups
<br>
<textarea>Here will be the list of all public/visible groups</textarea>
<br><br>
Users in the conversation 
<br>
<textarea>Here will be the list of users who are engaged in this conversation</textarea>
<br><br>
<h2>Groups in the conversation</h2>
<textarea>Here will be the list of users who are engaged in this conversation</textarea>
<br><br>
Sites in the conversation
<br>
<textarea>Here will be the list of sites who are engaged in this conversation</textarea>
<br><br>
History of the content entries
<br><br>
content entry 1
<br>
content entry 2
<br>
content entry 3
<br><br>
Categories <a href="">Add a new category</a>
<br><br>
category1
<br>
category2
<br>
category3
<br><br>
Tag Cloud
<br><br>
Your own content
<br><br>
All public content
<br><br>
Your subscribed content
</td>
</tr>
</table>
</body>
</html>

<!--

<a href=""></a>

<li></li>

-->
