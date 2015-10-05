<style>
    .user_name{
        font-size:14px;
        font-weight: bold;
    }
    .comments-list .media{
        border-bottom: 1px dotted #ccc;
    }
    .red{
        color:red;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-8">

            <div class="comments-list">
                <?php foreach($comments as $comment): ?>
                <div class="media">
                    <p class="pull-right"><small></small></p>
                    <a class="media-left" href="#">
                        <img src="/uploads<?php echo HTML::chars($comment['userid2']); ?>.jpg" style="width: 40px; height: 40px;">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading user_name">  <strong><?php echo HTML::chars($comment['user']); ?></strong><br /></h4>
                        <?php echo HTML::chars($comment['message']); ?>
                    </div>

                </div>
                <?php endforeach; ?>
                <br>
            </div>

            <form action="" method="post">
            <div>
                <br style="clear:both">
                <div class="form-group col-md-4 ">
                    <label id="messageLabel" for="message">Комментарий </label>
                    <textarea class="form-control input-sm "name="message" type="textarea" id="message" placeholder="Введите сообщение" maxlength="140" rows="7"></textarea>
                    <span class="help-block"><p id="characterLeft" class="help-block ">Вы достигли лимита</p></span>
                </div>
                <br style="clear:both">
                <div class="form-group col-md-2">
                    <button class="form-control input-sm btn btn-success disabled" id="btnSubmit"  type="submit" value="Отправить" style="height:35px"> Отправить</button>
                </div>
            </form>
        </div>
    </div>
</div>

    <script>
        $(document).ready(function(){
            $('#characterLeft').text('140 characters left');
            $('#message').keydown(function () {
                var max = 140;
                var len = $(this).val().length;
                if (len >= max) {
                    $('#characterLeft').text('You have reached the limit');
                    $('#characterLeft').addClass('red');
                    $('#btnSubmit').addClass('disabled');
                }
                else {
                    var ch = max - len;
                    $('#characterLeft').text(ch + ' characters left');
                    $('#btnSubmit').removeClass('disabled');
                    $('#characterLeft').removeClass('red');
                }
            });
        });

    </script>