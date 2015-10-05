
<!--
	<div id="container">
		<div id="content">
			<div>
				<div>
					<h1 style="text-align:center"><?php echo __('Чат с :username', array(':username' => $user->username)) ?></h1>
					<hr>
				</div>
			</div>

		</div>
		<br>
		<div class="chatform">
			<? foreach($messages as $message): ?>
				<span style="color: blue;"><?= $message['time']; ?></span>
				<strong><?= ($message['from_id'] != $user->id) ? 'Вы' : $user->username; ?></strong>:
				<?= nl2br($message['message']); ?><br>
			<? endforeach; ?>
		</div>
		<hr>
		<br>
		<?= Form::open('messages/history/'.$user->id); ?>
		<input type="hidden" name="to_id" value="<?= $user->id; ?>">
		<div class="mesform">
		<div class="row-fluid">
			<div class="span7">
				<div class="controls">
					<?= Form::textarea('message', NULL, array('rows' => 10, 'placeholder' => 'Сообщение')); ?>
				</div>
			</div>
		</div>
		<div class="row-fluid">
			<div class="span12">
				<div class="form-actions">
					<?= Form::submit('submit', 'Отправить', array('class' => 'btn btn-primary pull-right') ); ?>
				</div>
			</div>
		</div>

		<?= Form::close(); ?>
		</div>
-->


<div class="section section-breadcrumbs">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Чат с <?=$user->username;?></h1>
			</div>
		</div>
	</div>
</div>
					<div class="panel-body">



								<div class="chat-body clearfix">

									<? foreach($messages as $message): ?>
										<strong class="primary-font"><strong><?= ($message['from_id'] != $user->id) ? 'Вы' : $user->username; ?></strong>:</strong> <small class="pull-right text-muted">
											<span class="glyphicon glyphicon-time"></span><?= $message['time']; ?></span></small>
									<p>
										<?= nl2br($message['message']); ?><br>
									</p>
									<? endforeach; ?>
								</div>

					</div>

					<?= Form::open('messages/history/'.$user->id); ?>
					<input type="hidden" name="to_id" value="<?= $user->id; ?>">
					<div class="panel-footer">
						<div class="input-group">
							<?= Form::textarea('message', NULL, array('rows' => 5, 'placeholder' => 'Сообщение')); ?>
							</div>
                        <span class="input-group-btn">

							<?= Form::submit('submit', 'Отправить', array('class' => 'btn btn-primary pull-right') ); ?>
                        </span>
						</div>

					<?= Form::close(); ?>


