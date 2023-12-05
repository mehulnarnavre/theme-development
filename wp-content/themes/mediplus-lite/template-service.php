<?php
/*
Template Name: Service 
*/
if(isset ($_POST['savenews'])){
    $id=wp_insert_post(
    array(
    'post_type'=>'movies',
    'post_status'=>'draft',
    'post_title'=>$_POST['ntitle'],
    'post_content'=>$_POST['ndes']
    )
    );

    Wp_set_object_terms( $id, $_POST['newscat'], 'category' );
}
?>
<?php
get_header();
?>

<form method="post" style="padding: 20px;" class="formData">
<div>News Title</div>
<div><input type="text" name="ntitle"></div>
<div>News Description</div>
<div>
    <select name="newscat">

<?php
$newsCat=get_terms(['taxonomy'=>'category',
'hide_empty'=>false, 
'orderby'=>'name', 
'order' => 'DESC', 
'parent'=>0]);
foreach($newsCat as $newsCatData) {
?>
<option value="<?php echo $newsCatData->name ?>">
<?php echo $newsCatData->name ?></option>
<?php } ?>
    </select>
</div>

<textarea name="ndes"></textarea>
<button name="savenews">Save News</button>
</form>
<div class="clear"></div>

<?php
get_footer();
?>