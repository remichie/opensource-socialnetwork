<?php
/**
 * Open Source Social Network
 *
 * @package   Open Source Social Network
 * @author    Open Social Website Core Team <info@informatikon.com>
 * @copyright 2014 iNFORMATIKON TECHNOLOGIES
 * @license   General Public Licence http://www.opensource-socialnetwork.org/licence
 * @link      http://www.opensource-socialnetwork.org/licence
 */
?>
<div class="messages-inner">
    <div class="notification-friends">
        <?php
        if ($params['friends']) {
            foreach ($params['friends'] as $users) {
                $baseurl = ossn_site_url();
                $url = $users->profileURL();
                $img = "<img src='{$users->iconURL()->small}' />";
                $messages[] = "<li id='notification-friend-item-{$users->guid}'>
		              <div class='ossn-notifications-friends-inner'>
		                <div class='image'>{$img}</div> 
		                <div class='notfi-meta'>
		                
						<a href='{$url}' class='user'>{$users->fullname}</a>
						  <div style='float:right;' id='ossn-nfriends-{$users->guid}'>
						  <script>
						  Ossn.AddFriend($users->guid); 
						  Ossn.removeFriendRequset($users->guid);
						  </script>
						  <form id='add-friend-{$users->guid}'>
                           <input class='button-blue-light' type='submit' value='Confirm' />
						   </form>
						   	<form id='remove-friend-{$users->guid}'>
						   <input class='button-grey-light' type='submit' value='Cancel' />
						   </form>

                           </div>
  
						</div>
						</div>
						</li>";
            }
        }
        echo implode('', $messages);
        ?>
    </div>
</div>
<div class="bottom-all">
    <!-- <a href="#">See All</a> -->
</div>
