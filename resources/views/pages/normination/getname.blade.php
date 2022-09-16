<?php
$member = App\Models\Member::find($normination->norminating_id);
echo $member->name;
?>
