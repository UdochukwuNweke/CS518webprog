<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/*
stream_context_set_default( [
    'ssl' => [
        'verify_peer' => false,
        'verify_peer_name' => false,
    ],
]);
*/

include('services.php');
$img = 'https://pbs.twimg.com/profile_images/694021299891343360/CVACQUXm_400x400.jpg';



$img = urlencode($img);
$dflag = $img;

$email = 'preciousudochi@gmail.com';
$email = strtolower(trim($email));
$email = md5($email);
$gravatar = 'https://www.gravatar.com/avatar/' . $email . "?d=$dflag&f=y";

$res = getResponseCode($gravatar);
var_dump($res);
if( $res == '200' )
{
  echo "<img src='$gravatar'/>";
}

/*

$users = getStatsUsers();

for($i = 0; $i<count($users); $i++)
{
	print_r( $users[$i] );
	echo '<br>';
}

$post = 'The quick brown fox jumped https://pbs.twimg.com/profile_images/694021299891343360/CVACQUXm_400x400.jpg, over the lazy http://php.net/manual/en/function.stream-context-create.php https://pbs.twimg.com/media/DO3SOJNX0AM0h_x.jpg';
print_r(getImgLinksFromText($post));
*/


/*
#SELECT * FROM Post LIMIT 10 OFFSET 0;
$posts = genericQuery('SELECT * FROM Post WHERE parent_id=-1 LIMIT 10 OFFSET 20');
for($i = 0; $i<count($posts); $i++)
{
	echo $posts[$i]['datetime'];
	echo '<br>';
}
*/


/*
$channel_id = 3;
$archiveState = 'ARCHIVE';
//$archiveState = 'ACTIVE';
setChannelArchiveState($channel_id, $archiveState);
*/

/*
$channel_id = 4;
$user_id = 7;
removeChannelMembership($channel_id, $user_id);
*/

/*
$user_id = 16;
$role_type = 'DEFAULT';
setRole($user_id, $role_type);
*/


/*
$user_id = -1;
$channel_id = 2;

if( setChannelMembership($channel_id, $user_id) )
{
	echo 'Good';
}
else
{
	echo 'Bad';
}
*/

	
/*
$reaction_type_id = 1;
$post_id = 71;
$user_id = 1;
$fname = 'Tow';
$lname = 'Mater';
postReaction($reaction_type_id, $post_id, $user_id, $fname, $lname);
*/


//echo deleteReaction($reaction_id);


/*
$email = 'mater@rsprings.gov';
$password = '@mater';
var_dump( login($email, $password) );
*/



/*
$user_id = 2;
$fname = 'Sally';
$lname = 'Carrera';
$channel_id = 1;
$parent_id = 1;
$content = 'reply to hello db';
post($user_id, $fname, $lname, $channel_id, $parent_id, $content)
*/


/*
$post_id = 10;
$user_id = 1;
if( deletePost($post_id, $user_id) )
{
	echo 'Yes';
}
else
{
	echo 'No';
}
*/

?>


