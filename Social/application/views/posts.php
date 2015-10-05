<?php if(!empty($msg)):?>
    <?php echo $msg.'<br />';?>
<?php endif;?>
<?php foreach($posts as $post):?>
    <h1><?php echo $post['title'];?></h1>
    <?php echo $post['post'];?>
    <hr />
<?php endforeach;?>
<form method="POST" action="<?php echo url::base();?>post/posts/">
    <table>
        <tr>
            <td>
                Title
            </td>
            <td>
                <input type="text" name="title" style="border: 1px solid #000000;"/>
            </td>
        </tr>
        <tr>
            <td>
                Post
            </td>
            <td>
                <textarea cols="20" rows="5" name="post"></textarea>
                <input type="submit" name="submit" value="Submit"/>
            </td>
    </table>
</form>